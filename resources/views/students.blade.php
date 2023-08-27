<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/crud.css">
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="mt-5">Students</h1>
            <div class="d-flex my-3">
                <a href="{{ route('addStu') }}" class="btn btn-success d-inline ">Add New</a>

            </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Age</th>
                        <th scope="col">City</th>
                        <th scope="col">view</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $id => $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->role }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->city }}</td>
                            <td><a class="btn btn-primary" href="{{ route('student', $student->id) }}">Read More</a>
                            </td>
                            <td><a class="btn btn-success" href="{{ route('updatePage', $student->id) }}">Update</a>
                            </td>
                            <td><a class="btn btn-danger" href="{{ route('student.delete', $student->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <div class="pagination">
                {{ $students->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</body>

</html>
