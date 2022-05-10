<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

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

        $semester1 = ($request->a1 + $request->b1 + $request->c1 + $request->d1 + $request->e1 + $request->f1 + $request->g1 + $request->h1)/8;
        $semester2 = ($request->a2 + $request->b2 + $request->c2 + $request->d2 + $request->e2 + $request->f2 + $request->g2 + $request->h2)/8;
        $semester3 = ($request->a3 + $request->b3 + $request->c3 + $request->d3 + $request->e3 + $request->f3 + $request->g3 + $request->h3)/8;

        if ($record->form_way == "일반전형") {
            $result = number_format((150 * (1/5) * (1/3) * ($semester1 + $semester2 + $semester3)), 2);
        } else {
            $result = number_format((220 * (1/5) * (1/3) * ($semester1 + $semester2 + $semester3)), 2);
        }



        $record->form_id = $request->form_id;
        $record->user_session = $request->user_session;
        $record->way = $request->way;
        $record->class = $request->class;
        $record->record = $result;

        $record->save();

        return view('result')->with('result', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
