<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
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

    $form_id = 9999999;
    $cnt = 0;

    if ($request->accept == 0) {

            $cnt = DB::table('forms')
                ->where('ph_num', $request->ph_num)
                ->where('stu_name', $request->stu_name)
                ->where('gender', $request->gender)
                ->where('city', $request->city)
                ->count();

            if ($cnt == 0) {
                $form = new Form();
                $form->user_session = $request->user_session;
                $form->city = $request->city;
                $form->country = $request->country;
                $form->sch_name = $request->sch_name;
                $form->gender = $request->gender;
                $form->way = $request->way;
                $form->class = $request->class;
                $form->stu_name = $request->stu_name;
                $form->ph_num = $request->ph_num;
                $form->onner = $request->onner;
                $form->accept = true;
                $form->save();
            }

            $form = DB::table('forms')
                ->where('ph_num', $request->ph_num)
                ->where('stu_name', $request->stu_name)
                ->where('gender', $request->gender)
                ->where('city', $request->city)
                ->value('id');

            $form_id = $form;

        }

        return view('recordInput')->with('request', $request)->with('form_id', $form_id);
    }
}
