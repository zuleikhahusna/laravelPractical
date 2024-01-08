<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Registration Form</h4><hr>
                @if(session()->has('message'))
                <div class="alert alert sucess" style="text-align: center">
                    x-data="{show:true}" x-init="setTimeout(()=>show =false,3000)" x-show="show"
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="" method="POST">
                  
                    @csrf
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter your First Name" value="{{old('FirstName')}}">
                    @error('firstname') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter your Last Name" value="{{old('LastName')}}">
                    @error('lastname') <span class="text-danger">{{$message}}</span>@enderror
                </div>
             
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="{{old('Email')}}">
                    @error('Email') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" value="{{old('Email')}}">
                    @error('password') <span class="text-danger">{{$message}}</span>@enderror
                </div>
               
        
                <button class="btn btn-primary">Login</button>
    </form>
</body>
</html>