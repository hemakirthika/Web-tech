<?php
$registered=0;
$userexsist=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'server.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * FROM bow WHERE name='$name'";
  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      $userexsist=1;
    }
    else{
      $sql="INSERT INTO bow (name,email,password) VALUES ('$name','$email','$password')";
      $result=mysqli_query($con,$sql);
      if($result){
        $registered=1;
      }
      else{
        die(mysqli_error($con));
      }
    }
  }
}
?>



<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
button {
  background-color: #2020c8;
  color: white;
  padding: 14px 20px;
  margin: 5px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 50px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<script>
      function formValidation(){
        let x=document.forms['index']['name'].value;
        if (x==""){
          alert("Name must be filled out");
          return false;
        }
      }
    </script>
  </head>
  <body>
  <?php
  if($userexsist){
    echo 'user exist';
  }
  ?>
  <?php
  if($registered){
    
    echo '<script Language="JavaScript">
          alert("Welcome to Our Website!!!");
        
          </script>' ;
    header('location:loginform.php');
  }
  ?>

<form action="newform.php" method="post" class="form" id="form2" onsubmit="return formvalidation()" style="border:1px solid #dc2f2f">
  <div class="container">
    <h1>Sign Up</h1>
    <p>sign up form.</p>
    <hr>

    <label for="name"><b>name</b></label>
    <input type="text" placeholder="name" name="name" id="name" required>

    <label for="email"><b>email</b></label>
    <input type="text" placeholder="Enter email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>