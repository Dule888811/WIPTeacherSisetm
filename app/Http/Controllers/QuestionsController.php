<?php

namespace App\Http\Controllers;

use App\Question;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $url = url()->full();
        $url = explode('?',$url);
        if(isset($url[1])){
            $test_id = $url[1];
        }
        $test_id =explode('=',$test_id);
        $test_id=$test_id[0];
      $questions=Test::find($test_id)->Questions()->get();
        $questions = $questions->ToArray();
        return view('question.index')->with('questions',$questions);
    }

    public function answer()
    {
        $url = url()->full();
        $url = explode('?',$url);
        if(isset($url[1])){
            $question_id = $url[1];
        }
        $question_id =explode('=',$question_id);
        $question_id=$question_id[0];
        $question = Question::find($question_id)->first();
        $question->toArray();
       return view('question.results')->with('question',$question);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    public function show(Question $question)
    {

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
