<?php
  include 'BlackList.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>login</title></head>
    <link href="signin.css" rel="stylesheet">
<body>
        <div class="container">
<form class="form-signin" method="post" action="login.php"> 
       <h2 class="form-signin-heading">Please sign in</h2>
       <label for="inputUsername" class="sr-only"></label>
<input type="text" name="UserName" class="form-control" placeholder="Username" required autofocus/>
        <label for="inputPassword" class="sr-only"></label>
<input type="password" name="Password" class="form-control" placeholder="Password" required/>
<button type="submit" name="submit" value="Login" class="btn"/>Please Login</button>
</form>
       </div>

</body>
</html>

