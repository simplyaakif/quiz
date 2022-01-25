<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center">
        Evaluation Results
    </h2>
</div>
<div class="container mb-5">
    <table id="query-table" class="table">
        <thead>
        <tr>
            <th> Sr. No.</th>
            <th>Name</th>
            <th>Course</th>
            <th>Mobile Number</th>
            <th>Score</th>
            <th>Date Added</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($results as $i=>$result)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$result->name}}</td>
                <td>{{$result->mobile}}</td>
                <td>{{$result->email}}</td>
                <td>{{$result->meta}}</td>
                @if($result->created_at)
                    <td>
                        {{ $result->created_at->format("h:i:s A d-m-Y")}}
                    </td>
                @else
                    <td></td>
                @endif
                <td>
                    <a class="d-none" onclick="update({{$result->id}})"><i class="fas fa-wrench"></i></a>
                    <a onclick="del({{$result->id}})"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>




<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#query-table').DataTable();
    });

</script>
</body>
</html>
