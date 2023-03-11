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
            <form action="">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <div  class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
                            
                        </div>
                        <div  class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control">
                        </div>
                        
                        <div  class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter address" class="form-control"></textarea>
                        </div>
                        <div  class="mb-3">
                            <label for="image"></label>
                            <input type="file" name="image">
                            
                        </div>
                    </div>
                
                </div>
                <button class="btn btn-primary mt-3">Save Employee</button>


            </form>


        </div>

    
</body>
</html>




