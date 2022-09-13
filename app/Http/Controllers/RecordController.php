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
    $count = [0, 0, 0, 0];
    $score = [0, 0, 0, 0];

    $selector = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
    for ($i = 0; $i < 9; $i++) {
        for ($ii = 0; $ii < 4; $ii++){
            $val = $request->{$selector[$i] . $ii+1};
            if ($val != 0) {
                $count[$ii]++;
                $score[$ii] += $val;
            }
        }
    }

    return array($score, $count);
}

function calculate($score, $count){
    if ($count == 0) return 0;
    return number_format($score/$count, 3);
}

function totalScore($score, $count, $number)
{
    if ($number == 1/3) {
        return calculate($score[0],$count[0]) + calculate($score[1],$count[1]) + calculate($score[2],$count[2]);
    }
    return calculate($score[0],$count[0]) + calculate($score[1],$count[1]) + calculate($score[2],$count[2]) + calculate($score[3],$count[3]);
}

function calculateAverageScore($way, $score, $count, $number) {
    if ($way === "일반전형") {
        return number_format((44 * $number * (totalScore($score, $count, $number))), 3);
    }
    return number_format((30 * $number * ((totalScore($score, $count, $number)))), 3);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = new Record();

        list($score, $count) = calculateScore($request);

        if ($request->way === "일반전형") {
            //check the $count[?] is 0 -> no calculation
            if ($request->user_session == "졸업예정")
                $result = calculateAverageScore("일반전형", $score, $count, 1/3);
                else
                $result = calculateAverageScore("일반전형", $score, $count, 1/4);
        } else {
            if ($request->user_session == "졸업예정")
                $result = calculateAverageScore("특별전형", $score, $count, 1/3);
                else
                $result = calculateAverageScore("특별전형", $score, $count, 1/4);
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
}
