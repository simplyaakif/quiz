<?php

    namespace App\Http\Controllers;

    use App\Question;
    use Illuminate\Http\Request;

    class QuestionController extends Controller {

        public function index()
        {
            $questions = Question::all();

            return $questions;
        }

        public function create()
        {
            return view('questionadd');
        }

        public function store(Request $request)
        {
//            dd($request->question);
            $question = Question::create([
                                             'question' => $request->question,
                                         ]);
            $question->answers()->createMany($request->answers);

            return '1';

        }

        public function show(Question $question)
        {
            //
        }

        public function edit(Question $question)
        {
            //
        }

        public function update(Request $request, Question $question)
        {
            //
        }

        public function destroy(Question $question)
        {
            //
        }
    }
