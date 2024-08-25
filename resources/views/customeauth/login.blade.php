<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        .main{
            background-color:black;
            color:white;
            margin-top:50px;
            margin-left:400px;
            margin-right:400px;
            height:400px;

            padding-top:0px;
            padding-left:100px;
            padding-right:100px;
            padding-:50px;
        }
.main h1{
    padding-top:10px;
}
       
    </style>


</head>
<body>

    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 


@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success')}}
</div>
@endif



@if(session('error'))
<div class="alert alert-danger  " role="alert">
    {{ session('error')}}
</div>
@endif

<div class="main">
<h1>Login Form</h1><br><br>
<form action="{{route('login.check')}}"  method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="" name="email"  aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  name="password" id="">
 </div>
 
  <button type="submit" class="btn btn-primary">Login</button> &nbsp;  &nbsp;<a href="{{route('register')}}"  style="color:yellow;">Don't have account?  Register here </a>
</form>

</div>

</body>
</html>