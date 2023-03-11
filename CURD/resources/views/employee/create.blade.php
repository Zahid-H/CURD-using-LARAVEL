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
                    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    
                </div>


            </div>

        </div>

    
</body>
</html>