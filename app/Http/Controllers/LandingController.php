<?php

    namespace App\Http\Controllers;

    use App\Evaluation;
    use App\Mail\EvaluationSubmitted;
    use App\Question;
    use Illuminate\Http\Request;
    use Mail;

    class LandingController extends Controller {

        public function index()
        {

            $questions = Question::with('answers')->limit('50')->get();

            return view('quiz', compact('questions'));
        }

        public function eresults()
        {
            $results = Evaluation::all();
            $data = ['results'=>$results];
            return view('eresults',$data);
        }

        public function quiz(Request $request)
        {
            $quizmcq  = $request->quizmcq;
            $name     = $request->name;
            $course   = $request->course;
            $location = $request->location;
            $medium   = $request->medium;
            $time     = $request->time;
            $mobile   = $request->mobile;
            $email    = $request->email;
            $meta     = $request->meta;
            $q1       = $request->q1;
            $q2       = $request->q2;


            $score     = 0;
            $questions = Question::with('answers')->limit('50')->get()->all();
            $count     = count($quizmcq);
            for($i = 0; $i < $count; $i++) {
                foreach($questions[$i]->answers as $answer) {
                    if($quizmcq[$i] === $answer->answer && $answer->correct) {
                        $score++;
                    }
                }
            }

            $additional = [
                "score"    => $score,
                "q1"       => $q1,
                "q2"       => $q2,
                "course"   => $course,
                "location" => $location,
                "medium"   => $medium,
                "time"     => $time,

            ];

            $final_meta = array_merge($meta, $additional);

            if($meta["country"] == 'Pakistan') {
                $this->sendMessage($mobile, $score);
            }

            $evaluation = Evaluation::create([
                                                 "name"   => $name,
                                                 "email"  => $email,
                                                 "mobile" => $mobile,
                                                 "meta"   => json_encode($final_meta),
                                             ]);
            $data       = [
                "name"   => $name,
                "email"  => $email,
                "mobile" => $mobile,
                "meta"   => $final_meta,
            ];

            Mail::to($email)->cc('aceinstitute.fdo1@gmail.com')->bcc('acedpt@gmail.com')->send(new EvaluationSubmitted($data));

            return 1;

        }

        /**
         * @param $mobile
         */
        public function sendMessage($mobile, $score): void
        {
            $username = 'aceinstitute';
            $password = 'worldwar3';
            $from     = 'ACE';
            $message
                      = 'Thank you for performing evaluation. You have scored ' . $score . ' out of 50 in mcq section. Our staff will contact you shortly with your writing result and further details.';
            $url
                      = "http://Lifetimesms.com/plain?username=" . $username . "&password=" . $password . "&to=" . $mobile . "&from=" . urlencode($from) . "&message=" . urlencode($message) . "";
            //Curl Start
            $ch      = curl_init();
            $timeout = 30;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $response = curl_exec($ch);
            curl_close($ch);
        }
    }
