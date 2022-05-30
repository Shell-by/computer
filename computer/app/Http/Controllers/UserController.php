<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            ->select('forms.stu_name', 'records.way', 'records.class', 'records.record', 'forms.sch_name', 'records.created_at')
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
}
