<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URl GENEREATION</title>
</head>
@include('header')


<body style="">
    <h1>PAGE THREE</h1>
    <a href="one">Page One</a> <br/>
    <a href="two">Page Two</a> <br/>
    <h2 style="color:red;">My previous url is: {{URL::previous()}}</h2>
    <h2 style="color:green;">My current url is: {{URL::current()}}</h2>
    @include('footer')
</body>
</html>