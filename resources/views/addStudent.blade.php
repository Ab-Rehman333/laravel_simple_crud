<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Add Students Info</h1>
            <form class="row g-3 needs-validation" action="{{ route('addStudent') }}" method="POST">
                @csrf
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" required>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" required>

                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Role</label>
                    <input name="role" type="text" class="form-control" required>

                </div>

                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Age</label>
                    <input name="age" type="number" class="form-control" required>

                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">City</label>
                    <input name="city" type="number" class="form-control" required>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Add User</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>