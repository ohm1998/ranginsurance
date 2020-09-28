<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Log In</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<br>
<br>
<br>


<div class="container">
  <form action="./login.php" method="POST">
    <div class="form-group row">
      <label for="lgFormGroupInput">Username:</label>
        <input type="text" name="uname" class="form-control form-control-lg" id="lgFormGroupInput">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Password:</label>
      <div class="col-sm-5">
        <input type="password" name="pass" class="form-control form-control-lg" id="smFormGroupInput">
      </div>
    </div>
    <input type="submit" name="submit" class="btn" value="Log in">
  </form>
</div>

</body>
</html>