<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

/**
 * Calculates score and count
 * @param Request $request
 * @return int[][] score count
 */
function calculateScore(Request $request){
    $count = [0, 0, 0];
    $score = [0, 0, 0];
    $cutline1 = 0;
    $cnt = 0;
    $selector = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
    for ($i = 0; $i < 8; $i++) {
        for ($ii = 0; $ii < 3; $ii++){
            $val = $request->{$selector[$i] . $ii+1};
            if ($val != 0) {
                $count[$ii]++;
                $score[$ii] += $val;
                $cutline1 += 4;
                $cnt++;
            }
        }
    }
    $cutline2 = (($cnt/2) * 4) + (($cnt/2) * 3);
    return array($score, $count, $cutline1, $cutline2);
}

function calculate($score, $count){
    if ($count == 0) return 0;
    return $score/$count;
}

function calculateAverageScore($way, $score, $count) {
    if ($way == "일반전형") {
        return number_format((44 * (1/3) * (calculate($score[0],$count[0]) + calculate($score[1],$count[1]) + calculate($score[2],$count[2]))), 2);
    }
    return number_format((10 * (calculate($score[0],$count[0]) + calculate($score[1],$count[1]) + calculate($score[2],$count[2]))), 2);
}
class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recordInput');
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
        $record = new Record();

        list($score, $count, $cutline1, $cutline2) = calculateScore($request);

        if ($record->form_way == "일반전형") {
            //check the $count[?] is 0 -> no calculation
            $result = calculateAverageScore("일반전형", $score, $count);
        } else {
            $result = calculateAverageScore("특별전형", $score, $count);
        }

        if ($request->accept == 0 ) {
            $record->form_id = $request->form_id;
            $record->user_session = $request->user_session;
            $record->way = $request->way;
            $record->class = $request->class;
            $record->record = $result;

            $record->save();
        }

        echo $result . $cutline1 . $cutline2;

        return view('result')
            ->with('result', $result)
            ->with('cutline1', $cutline1)
            ->with('cutline2', $cutline2);;

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
