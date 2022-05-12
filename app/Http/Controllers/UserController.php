<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

function filterData($string) {
    $string=iconv("UTF-8","EUC-KR",($string));
    return $string;
}

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = DB::table('users')
            ->where('name', $request->id)
            ->where('password', base64_encode(hash('sha256', $request->pw, 'true')))
            ->count();

        if ($count != 0) {
            session()->put('user','admin');
            return redirect('output/0');
        }

        return redirect('login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (session('user') != 'admin') {
            return redirect('login');
        }

        $data = DB::table('forms')
            ->join('records', 'forms.id', '=', 'records.form_id')
            ->select('forms.stu_name',
                             'records.way',
                             'records.class',
                             'records.record',
                             'forms.sch_name',
                             'records.created_at',
                             'forms.ph_num',
                             'forms.onner',
                             'forms.city',
                             'forms.country',
                             'forms.gender',
                             'forms.user_session')
            ->orderBy('records.created_at', 'desc')
//            ->offset($id * 15)
//            ->limit(15)
            ->get();

        return view('output')->with('data', $data);

        echo $count;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /***
     *
     */

    public function export()
    {

        if (session('user') != 'admin') {
            redirect('/login');
        }

        $header = array(
            'Content-Type' => 'text/css',
            'charset' => 'EUC-KR',
            'Content-Transfer-Encoding' => 'binary',
            'Cache-Control' => 'private, no-transform, no-store, must-revalidate'
        );

        $callback = function () {
            $file = fopen( 'dataBase.csv', 'w');

            $coulums = array(
                'idx',
                '전형',
                '학과',
                '학교 이름',
                '거주 도시',
                '전화번호',
                '시/군/구',
                '학생 이름',
                '성별',
                '전화번호 주인',
                '점수',
                '졸업 여부',
                '날짜'
            );

            foreach ($coulums as $colum) {
                fwrite($file, filterData($colum . ", "));
            }

            $count = 0;

            $data = DB::table('forms')
                ->join('records', 'forms.id', '=', 'records.form_id')
                ->select(
                    'records.way',
                    'records.class',
                    'forms.city',
                    'forms.country',
                    'forms.sch_name',
                    'forms.stu_name',
                    'forms.gender',
                    'forms.ph_num',
                    'forms.onner',
                    'records.record',
                    'forms.user_session',
                    'records.created_at'
                )
                ->orderBy('records.created_at', 'desc')
                ->get();

            foreach ($data as $da) {
                fwrite($file, filterData("\r\n"));
                fwrite($file, filterData(++$count . ", "));
                fwrite($file, filterData($da->way . ", "));
                fwrite($file, filterData($da->class . ", "));
                fwrite($file, filterData($da->city . ", "));
                fwrite($file, filterData($da->country . ", "));
                fwrite($file, filterData($da->sch_name . ", "));
                fwrite($file, filterData($da->stu_name . ", "));
                fwrite($file, filterData($da->gender . ", "));
                fwrite($file, filterData($da->ph_num . ", "));
                fwrite($file, filterData($da->onner . ", "));
                fwrite($file, filterData($da->record . ", "));
                fwrite($file, filterData($da->user_session . ", "));
                fwrite($file, filterData($da->created_at . ", "));
            }
            fclose($file);
        };

        response()->stream($callback, 200, $header);

        return redirect('/dataBase.csv');
    }
}
