<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple laravel 9 CURD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="bg-dark py-3">
        <div class ="container">
            <div class="h4 text-white">Simple laravel 9 CURD</div>
        </div>
    </div>


        <div class="Container py-3">
            <div class="d-flex justify-content-between py-3">
                <div class="h4">Employees</div>
                <div>
                    <a href="#" class="btn btn-primary">Create</a>
                </div>
            </div>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <table class=" table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Zahid Hasan Juel</td>
                            <td>zahidhasan2581@gmail.com</td>
                            <td>Dhaka Bangladesh</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>

                    </table>
                </div>


            </div>

        </div>

    
</body>
</html>