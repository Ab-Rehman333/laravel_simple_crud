<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center"> Student Details</h1>
            @foreach ($student as $id => $stu )
            <h2>Student Number {{$stu->id}} </h2>
            <ul class="list-group">
                <li class="list-group-item">Name => <strong>{{$stu->name}}</strong> </li>
                <li class="list-group-item">Email => <strong>{{$stu->email}}</strong> </li>
                <li class="list-group-item">Role => <strong>{{$stu->role}}</strong> </li>
                <li class="list-group-item">Age => <strong>{{$stu->age}}</strong> </li>
                <li class="list-group-item">City => <strong>{{$stu->city}}</strong> </li>

            </ul>

            @endforeach
        </div>
    </div>
</body>

</html>