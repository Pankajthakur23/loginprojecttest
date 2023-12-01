<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('store')}}"method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <label for="input name" >Name</label>
        <input type="text" name="name"class="form-label"id="input name">
        @error('name')
        <h6 class="text-danger">{{$message}}</h6>
        @enderror

    </div>
    <div class="col-md-6">
        <label for="input email" >Email</label>
        <input type="text" name="email"class="form-label"id="input email">
        @error('email')
        <h6 class="text-danger">{{$message}}</h6>
        @enderror

    </div>
    <div class="col-md-6">
        <label for="input number" >Number</label>
        <input type="text" name="number"class="form-label"id="input number">
        @error('number')
        <h6 class="text-danger">{{$message}}</h6>
        @enderror

    </div>
    <div class="col-md-6">
        <label for="input password" >Password</label>
        <input type="text" name="password"class="form-label"id="input password">
        @error('password')
        <h6 class="text-danger">{{$message}}</h6>
        @enderror

    </div>
    <div class="col-md-6">
        <button type="submit"  class="text-primary">Register</button>

    </div>




</form>

</body>
</html>
