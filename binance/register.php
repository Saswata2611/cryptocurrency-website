<?php 
include 'connect.php';
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])){
    

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $booking_id = 0;
    if($password == $cpassword){
    $sql = "INSERT INTO `users` (`username`,`email`,`password`) VALUES ('$username','$email','$password')";
    $result = mysqli_query($conn, $sql);
    $_SESSION['email'] = $email;
    header("location: home.php");
    
    
    }
    else{
        echo"<script>
        alert('password does not matched with Re-Entered Password.');
        </script>";
    }

}
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])) {
    

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Prepare the SQL statement to retrieve the password for the given username
    $sql = "SELECT password FROM `users` WHERE email = ?";
    
    // Prepare and execute the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['email'] = $email;
            header("location: home.php");
            exit();
        } else {
            
            echo "<script>alert('Login Failed');</script>";
        }
    } else {
        // User not found, show error message
        echo "<script>alert('User not found');</script>";
    }
}
?>
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login / Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<style>
    @import 'https://fonts.googleapis.com/css?family=Fira+Sans';
* {
  box-sizing: border-box;
}

a {
  text-decoration: none;
}

html, body {
  height: 100%;
  width: 100%;
}

body {
  font-family: "Fira Sans", sans-serif;
  background-image: url('nature.jpg');
  background-size: cover;
  background-position: left tom;
  background-repeat: no-repeat;
}
body:after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.58);
  top: 0;
  left: 0;
  z-index: 1;
}

.wrapper {
  max-width: 300px;
  background-color: transparent;
  height: 100%;
  margin: 0 auto;
  position: relative;
  z-index: 2;
  overflow: hidden;
}
.wrapper .login, .wrapper .register {
  padding-top: 50px;
  width: 100%;
}
.wrapper .login .profile, .wrapper .register .profile {
  height: 100px;
  width: 100px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 100%;
  margin: 0 auto;
  margin-bottom: 60px;
  position: relative;
}
.wrapper .login .profile i, .wrapper .register .profile i {
  color: rgba(255, 255, 255, 0.8);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.wrapper .login .form-element, .wrapper .register .form-element {
  width: 100%;
  position: relative;
  border-bottom: 2px solid rgba(255, 255, 255, 0.8);
}
.wrapper .login .form-element span, .wrapper .register .form-element span {
  display: inline-block;
  width: 20%;
  color: rgba(255, 255, 255, 0.8);
}
.wrapper .login .form-element input, .wrapper .register .form-element input {
  font-family: "Fira Sans", sans-serif;
  display: inline-block;
  width: 80%;
  margin: 20px 0 0 0;
  padding: 10px 10px 10px 20px;
  background: transparent;
  outline: none;
  border: none;
  color: rgba(255, 255, 255, 0.8);
}
.wrapper .login .form-element input::-moz-placeholder, .wrapper .register .form-element input::-moz-placeholder {
  color: rgba(255, 255, 255, 0.8);
  font-size: 1em;
  font-weight: 500;
}
.wrapper .login .form-element input:-ms-input-placeholder, .wrapper .register .form-element input:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.8);
  font-size: 1em;
  font-weight: 500;
}
.wrapper .login .form-element input::placeholder, .wrapper .register .form-element input::placeholder {
  color: rgba(255, 255, 255, 0.8);
  font-size: 1em;
  font-weight: 500;
}
.wrapper .login .btn-login, .wrapper .register .btn-register {
  position: relative;
  margin: 30px 0;
  width: 100%;
  padding: 10px;
  outline: none;
  border: none;
  border-radius: 25px;
  text-transform: uppercase;
  background: #D32F2F;
  color: rgba(255, 255, 255, 0.8);
  font-weight: 800;
  cursor: pointer;
}

.login-view-toggle {
  color: rgba(255, 255, 255, 0.8);
  width: 100%;
  text-align: center;
  position: absolute;
  top: calc(100vh - 30px);
}
.login-view-toggle a {
  color: white;
}
.login-view-toggle .sign-up-toggle, .login-view-toggle .login-toggle {
  display: none;
}
.login-view-toggle .sign-up-toggle.is-active, .login-view-toggle .login-toggle.is-active {
  display: block;
  -webkit-animation: fade-in 600ms ease-in-out forwards;
          animation: fade-in 600ms ease-in-out forwards;
}
.login-view-toggle.move-top {
  -webkit-animation: move-top 1000ms ease-in-out forwards;
          animation: move-top 1000ms ease-in-out forwards;
}
.login-view-toggle.move-bottom {
  -webkit-animation: move-bottom 1000ms ease-in-out forwards;
          animation: move-bottom 1000ms ease-in-out forwards;
}

.login, .register {
  opacity: 0;
  pointer-events: none;
}
.login.is-active, .register.is-active {
  opacity: 1;
  pointer-events: auto;
}

.login.up .form-element {
  top: -200px;
  opacity: 0;
}
.login.up .profile, .login.up .btn-login {
  transform: scale(0);
}
.login.up .btn-login {
  opacity: 0;
}
.login.push-down .form-element, .login.push-down .btn-login {
  top: 0px;
  opacity: 1;
}
.login.push-down .profile, .login.push-down .btn-login {
  transform: scale(1);
}
.login.push-down .btn-login {
  opacity: 1;
}
.login.push-down .form-element:nth-child(2) {
  transition: all 600ms ease-in-out 2000ms;
}
.login.push-down .form-element:nth-child(3) {
  transition: all 600ms ease-in-out 1400ms;
}
.login .btn-login {
  transition: all 600ms ease-in-out 1000ms;
}
.login .profile {
  transition: transform 600ms ease-in-out 2500ms;
}

.register {
  position: absolute;
  top: 50px;
  left: 0;
}
.register.down .form-element {
  top: 200px;
  opacity: 0;
}
.register.down .btn-register {
  transform: scale(0);
  opacity: 0;
}
.register.pull-up .form-element {
  top: 0px;
  opacity: 1;
}
.register.pull-up .btn-register{
  transform: scale(1);
  opacity: 1;
}
.register.pull-up .form-element:nth-child(1) {
  transition: all 600ms ease-in-out 1000ms;
}
.register.pull-up .form-element:nth-child(2) {
  transition: all 600ms ease-in-out 1300ms;
}
.register.pull-up .form-element:nth-child(3) {
  transition: all 600ms ease-in-out 1600ms;
}
.register.pull-up .form-element:nth-child(4) {
  transition: all 600ms ease-in-out 1900ms;
}
.register .btn-register {
  transition: all 600ms ease-in-out 2200ms;
}

@media screen and (max-width: 480px) {
  .wrapper .login .profile {
    height: 80px;
    width: 80px;
    margin-bottom: 40px;
  }
}
@-webkit-keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes move-top {
  0% {
    top: calc(100vh - 30px);
  }
  100% {
    top: 20px;
  }
}
@keyframes move-top {
  0% {
    top: calc(100vh - 30px);
  }
  100% {
    top: 20px;
  }
}
@-webkit-keyframes move-bottom {
  0% {
    top: 20px;
  }
  100% {
    top: calc(100vh - 30px);
  }
}
@keyframes move-bottom {
  0% {
    top: 20px;
  }
  100% {
    top: calc(100vh - 30px);
  }
}
</style>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <form action="" method="post">
  <div class="login is-active">
    <div class="profile"><i class="fa fa-camera fa-2x"></i></div>
    <div class="form-element">
      <span><i class="fa fa-envelope"></i></span><input type="email" name="email" id="email" placeholder="Your Email Address"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" name="password" id="password" placeholder=" Password"/>
    </div>
    <input type="submit" value="LOGIN" name="login" class="btn-login">
  </div>
  </form>

  <form action="" method="post">
  <div class="register down">
    <div class="form-element">
      <span><i class="fa fa-user"></i></span><input type="text" name="username" id="username" placeholder="Full Name"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-envelope"></i></span><input type="email" name="email" id="email" placeholder="Your Email Address"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" name="password" id="password" placeholder="Password"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" name="cpassword" id="cpassword" placeholder="Re-Enter Password"/>
    </div>
    <input type="submit" value="REGISTER" name="register" class="btn-register">
  </div>
  </form>
  <div class="login-view-toggle">
    <div class="sign-up-toggle is-active">Don't have an account? <a href="#">Sign Up</a></div>
    <div class="login-toggle">Already have an account? <a href="#">Login</a></div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script>
    $(function(){
  
  function toggleView(){
    $('.login').toggleClass('is-active');
    $('.register').toggleClass('is-active');
    $('.sign-up-toggle').toggleClass('is-active');
    $('.login-toggle').toggleClass('is-active');
  }
  
  function slideElements(prop){
    $(prop.showEle).removeClass(prop.removeShowClass);
    $(prop.showEle).addClass(prop.addShowClass);
    $(prop.hideEle).removeClass(prop.removeHideClass);
    $(prop.hideEle).addClass(prop.addHideClass);
  }
  
  $('.sign-up-toggle a').on('click',function(){
    toggleView();
    $('.login-view-toggle').addClass('move-top');
    $('.login-view-toggle').removeClass('move-bottom');
    slideElements({
      showEle: '.register',
      removeShowClass: 'down',
      addShowClass: 'pull-up',
      hideEle: '.login',
      addHideClass: 'up',
      removeHideClass: 'push-down'
    });
  });
  
  $('.login-toggle a').on('click',function(){
    toggleView();
    $('.login-view-toggle').addClass('move-bottom');
    $('.login-view-toggle').removeClass('move-top');
    slideElements({
      showEle: '.login',
      removeShowClass: 'up',
      addShowClass: 'push-down',
      hideEle: '.register',
      addHideClass: 'down',
      removeHideClass: 'pull-up'
    });
  });
  
});
  </script>

</body>
</html>
