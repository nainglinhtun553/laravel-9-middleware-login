<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>this is home page.</h1>
    <h1>user information</h1>
    <h4>
        {{Auth::user()}}
    </h4>
    The current user name is :{{Auth::user()->name}} <br>
    Registation Date is : {{Auth::user()->created_at}} <br>
    user email is: {{Auth::user()->email}}<br>
    user status is :{{Auth::user()->role}}


    {{-- login register logout => method =post --}}
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <input type="submit" value="Logout">
    </form>
    
</body>
</html>