<!DOCTYPE html>
<html>
    <head>
      <title>USER_HOME_PAGE</title>
      <meta charset=utf-8>
      <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link href="css/main.css" rel="stylesheet" media="all">
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
  <style>
  body  {

      background-image:url({{asset('img/5c.jpg')}});
  }
  .error {
      color:red;
  }
  h3
  {
    color:white;
  }
  </style>
    <body class="bi2">
   
<!-- nav section start -->

<!------ Include the above in your HEAD tag ---------->
<!-- main section start -->
<section class="">
<div class="container ">
<div class="row">


<div class="col-6 py-5 mt-5 ">
<h3>sign-up</h3>

</div>
<div class="col-6 box1">

<form action="/user_regform" method="get" class="border  border-2 border-light p-5 rounded-bottom rounded">
  @csrf
  <div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="firstname" name="firstname" >
    </div>
    <!--<span class="error">
@error('firstname'){{$message}} @enderror</span>-->
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="lastname" name="lastname">
    </div>
    <span class="error">
@error('lastname'){{$message}} @enderror</span>
  </div>
   <div class="row mb-3">
    <div class="col-10">
      <input type="number" class="form-control" placeholder="age"  name="age"></div>
      <span class="error">
@error('age'){{$message}} @enderror</span>
    </div>
 <div class="mb-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" name="gender" type="radio" value="female" id=female >
                <label class="form-check-label " for=female value="female">female</label>
                &nbsp;&nbsp;&nbsp;&nbsp; <input class="form-check-input" name="gender" type="radio" value="male" id="male ">
                <label class="form-check-label " for=male value="male">male</label>
</div>
   <div class="mb-3">
        <textarea class="form-control" placeholder="address" name="address" rows="3"></textarea>
        <span class="error">
@error('address'){{$message}} @enderror</span>
    </div>
<div class="row mb-3">
        <div class="col-10">
        <input type="text" class="form-control" placeholder="phoneno" name="phoneno">
        <span class="error">
@error('phoneno'){{$message}} @enderror</span>
        </div>
</div>
 
  <div class="row mb-3">
    <div class="col-10">
      <input type="email" class="form-control" placeholder="email" name="email">
      <span class="error">
@error('email'){{$message}} @enderror</span>
    
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <input type="password" class="form-control" placeholder="password" name="password">
      <span class="error">
@error('password'){{$message}} @enderror</span>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="adhar" name="adhar">
      <span class="error">
@error('adhar'){{$message}} @enderror</span>
    </div> 

  </div>
  <button type="submit" value="Register" class=" btn bg-info">Register</button>
<a href="login">Login</a>
  <!-- <button type="submit" class="btn btn-primary">Sign-up</button>
 <a href="login"><button type="submit" class="btn btn-primary">LOGIN</button></a> -->
   -->
  </form>
</div>
</div>
</div>
</section>
<!-- main section end -->
<section class="">
</section>
       <!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"></script>
    </body>
</html>

