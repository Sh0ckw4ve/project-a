<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talented Signup</title>
    <link rel="stylesheet" href="/stylesheets/signUp.css">
    <link rel="icon" href="/assets/talented.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
       background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */
    </style>
    
  </head>
  <body>
    <div class="content">
      <p class="banner-text">Join Us!</p>
      <br><br>
      <div class="login-section">
        <img src="/assets/talented.png" class="pic">
        <div class="left-box">
          <h1>Sign Up</h1>
         <form action='/views/newUser.php' method="POST">
          <input type="text" name="username" placeholder="New Username"/>
          <input type="text" name="email" placeholder="E-mail"/>
          <input type="password" name="password" placeholder="Password"/>
          <input type="password" name="password" placeholder="Confirm Password"/>
          <input type="submit" name="signup-button" value="Sign Up">
        </div>
          </form>
        <div class="right-box">
          <span class="signupwith">Sign In with<br/>Social Network</span>
          <button class="social facebook">Facebook</button>
          <button class="social twitter">Twitter</button>
          <button class="social github">Google</button>
        </div>
        <div class="or">OR</div>
      </div>
      <footer id="footer">
      Powered by: © Talented Technologies
    </footer>
    </div>
  </body>
</html>
