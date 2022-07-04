<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

/**
 * Calculates score and count
 * @param Request $request
 * @return int[][] score count
 */
function calculateScore(Request $request){
    $count = [0, 0, 0];
    $score = [0, 0, 0];
    /*$cutLineScore = [0, 0, 0];*/

    $selector = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
    for ($i = 0; $i < 9; $i++) {
        for ($ii = 0; $ii < 3; $ii++){
            $val = $request->{$selector[$i] . $ii+1};
            if ($val != 0) {
                $count[$ii]++;
                $score[$ii] += $val;
                /*$cutLineScore[$ii] += 4;*/
            }
        }
    }

    return array($score, $count, /*$cutLineScore*/);
}

function calculate($score, $count){
    if ($count == 0) return 0;
    return $score/$count;
}

function calculateAverageScore($way, $score, $count) {
    if ($way === "일반전형") {
        return number_format((44 * (1/3) * (calculate($score[0],$count[0]) + calculate($score[1],$count[1]) + calculate($score[2],$count[2]))), 3);
    }
    return number_format((10 * (calculate($score[0],$count[0]) + calculate($score[1],$count[1]) + calculate($score[2],$count[2]))), 3);
}

function CutLineCalculate($k, $count) {
    return number_format(($k * (1/3)
        * (calculate((($count[0]/2) * 3) + (($count[0]/2) * 4), $count[0])
            + calculate((($count[1]/2) * 3) + (($count[1]/2) * 4), $count[1])
            + calculate((($count[2]/2) * 3) + (($count[2]/2) * 4), $count[2]))), 2);
}

function calculateAverageCutLine($way, $count) {
    if ($way === "일반전형") {
        return CutLineCalculate(44, $count);
    }
    return CutLineCalculate(30, $count);
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

        list($score, $count, /*$cutLineScore*/) = calculateScore($request);

        if ($request->way === "일반전형") {
            //check the $count[?] is 0 -> no calculation
            $result = calculateAverageScore("일반전형", $score, $count);
//            $cutLine = calculateAverageScore("일반전형", $cutLineScore, $count);
//            $cutLine2 = calculateAverageCutLine("일반전형", $count);
        } else {
            $result = calculateAverageScore("특별전형", $score, $count);
//            $cutLine = calculateAverageScore("특별전형", $cutLineScore, $count);
//            $cutLine2 = calculateAverageCutLine("특별전형", $count);
        }

        if ($request->accept == 0 ) {
            $record->form_id = $request->form_id;
            $record->user_session = $request->user_session;
            $record->way = $request->way;
            $record->class = $request->class;
            $record->record = $result;

            $record->save();
        }

        return view('result')->with('result', $result)->with('way', $request->way);

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
