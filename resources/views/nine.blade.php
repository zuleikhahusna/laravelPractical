<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

 @if(session()->has('message'))
    <div class="alert alert sucess" style="text-align: center" x-data="{show:true}" x-init="setTimeout(()=>show = false,3000)" x-show="show">
      {{session()->get('message')}}
    </div>
 @endif
    <div class="container">
        
                <h3>Users</h3> <hr>

                <table border="1" >
                    <tr>
                       
                            
                        <th>Id</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>email</th>
                        <th>password</th>
                        <th>action</th>
                        <th>Delete</th>
                       
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                       
                        <td>{{$user->id}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td><a href={{"edit/".$user->id}}>Edit</a></td>
                        <td><a href={{"delete/".$user->id}}>Delete</a></td>
                        @endforeach
                    </tr>
                </table>
            </div>
    
</body>
</html>