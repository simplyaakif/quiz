<?php

    use Illuminate\Database\Seeder;

    class McqSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            factory(App\Question::class, 50)->create()->each(function ($question) {
                factory(App\Answer::class, 3)->create(['question_id' => $question->id]);
            });
        }
    }
