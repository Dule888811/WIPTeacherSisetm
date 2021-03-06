<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Validator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();




        return view('admin.question.index')->with('questions',$questions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = url()->full();
       $url = explode('?',$url);
        $test_id = $url[1];
        $test_id =explode('=',$test_id);
        $test_id=$test_id[0];
        return view('admin.question.create')->with('test_id',$test_id);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /*    $this->validate($request, [
            'name' => 'required',
            'expression' => 'expression',
        ]); */

        $url = url()->full();
        $url = explode('?',$url);
        $test_id = $url[1];
        $test_id =explode('=',$test_id);
        $test_id=$test_id[0];
        $question = new Question([
            'name' => $request->post('name'),
            'expression' => $request->post('expression'),
            'test_id' => $test_id ,
            'answer' => $request->post('answer'),
        ]);
        $question->save();
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
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
