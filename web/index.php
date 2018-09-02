<!--TalentEd LogIn Template-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn</title>
    <link rel="icon" href="/assets/talented.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/stylesheets/loginStyle.css">
    <style> body {background: url('/assets/talentedbg.jpg');} </style>
  </head>
  <body>
    <div class="background-wrap">
    </div>
    <div class="content">
      <div class="login-section">
  <img src="/assets/talented.png" class="pic">
      <h1>Login</h1>
  <script language="javascript">
function pasuser(form) {
if (form.user.value=="admin") { 
if (form.pass.value=="adminpwd") {              
location="/views/logSuccess.php" 
} 
} 
}


</script>
      <form name="login">
          <p>Username</p>
          <input name="user" type="text" placeholder="Talented User">
          <p>Password</p>
          <input name="pass" type="password" placeholder="Password">
         <!-- <input type="submit" name="" value="Login"> -->
         <input type="submit" value="Login" onClick="pasuser(this.form)">

          <a href="#">Lost your password?</a><br>
          <a href="signup.php">Don't have an account?</a>
      </form>
    </div>
      <footer id="footer">
      Powered by: TalentEd Technologies
    </footer>
  </body>
</html>
