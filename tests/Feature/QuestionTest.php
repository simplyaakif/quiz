<?php

    namespace Tests\Feature;

    use App\Answer;
    use App\Question;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Tests\TestCase;

    class QuestionTest extends TestCase {

        use DatabaseMigrations, DatabaseTransactions;

        /** @test */
        public function a_question_can_exist()
        {
            $this->withoutExceptionHandling();
            $response = $this->post('/question', [
                'question' => 'This is a question?'
            ]);
            $response->assertOk();
            $this->assertCount('1', Question::all());
            $this->assertEquals('This is a question?', Question::first()->question);
        }

        /** @test */
        public function a_question_has_answers()
        {
            $this->withoutExceptionHandling();
            $mcq      = [
                'question' => 'This is a question?',
                'answers'  => [
                    [
                        'answer'  => '1st Option',
                        'correct' => 1
                    ],
                    [
                        'answer'  => '2nd Option',
                        'correct' => 0
                    ],
                    [
                        'answer'  => '3rd Option',
                        'correct' => 0
                    ]
                ]
            ];

            $response = $this->post('/mcq', $mcq);
            $response->assertOk();
            $this->assertCount('1', Question::all());
            $this->assertEquals('This is a question?', Question::first()->question);
            $this->assertCount('3', Answer::all());
            $this->assertCount('3', Question::first()->answers());

        }
    }
