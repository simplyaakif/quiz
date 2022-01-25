<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Quiz</title>
</head>
<body class="bg-gray-100">
<div class="text-center">
    <img class="text-center mx-auto mt-5" src="https://ace.org.pk/wp-content/uploads/2016/05/goldLogo-188x85.png"
         alt="">
{{--    <span>American Center of English</span>--}}
    <span class="text-xl mt-5 inline-block uppercase">Evaluation for English Language  Course</span>
</div>
<div id="app">
    <div class="container mt-5 bg-white mx-auto mb-32">

        <quiz-submit
                :mcqs="{{json_encode($questions)}}"
        ></quiz-submit>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/vue-toastr-2/dist/vue-toastr-2.js"></script>
<link rel="stylesheet" href="https://unpkg.com/vue-toastr-2/dist/vue-toastr-2.min.css">

</body>
</html>
