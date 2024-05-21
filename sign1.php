<?php
$registered=0;
$userexsist=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'server1.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
  $enteryourstate=$_POST['enteryourstate'];
  $contact=$_POST['contact'];
  $sql="SELECT * FROM form1 WHERE name='$name'";
  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "user already exists";
      $userexsist=1;
      
    }
    else{
      $sql="INSERT INTO form1jg v  (name,email,password,confirmpassword,enteryourstate,contact) 
      VALUES ('$name','$email','$password','$confirmpassword','$enteryourstate','$contact')";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      function formValidation(){
        let x=document.forms['form2']['name'].value;
        if (x==""){
          alert("Name must be filled out");
          return false;
        }
      }
      function newFunction()
      {
        document.getElementById("form2").reset();
      }
    </script>
   
</head>
<body>
<?php
  if($registered){
    
    echo "sucessfully registered";
  }
  ?>
  
<form action="sign1.php" method="post" class="form" id="form2" onsubmit="return formvalidation()" style="border:1px solid #dc2f2f">
  <div class="container">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Signup Form</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="email">email </label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">confirmpassword</label>
                                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                            </div>
                            
                            </div>
                            <label for="state">enter your State:</label>
                            <select id="state">
                                 <option value="">Andhra Pradesh	</option>
                                 <option value="">Arunachal Pradesh	</option>
                                 <option value="">Assam	</option>
                                 <option value="">Bihar	</option>
                                 <option value="">Chhattisgarh</option>
                                 <option value="">Goa	</option>
                                 <option value="">Gujarat	</option>
                                 <option value="">Haryana	</option>
                                 <option value="">Himachal Pradesh	</option>
                                 <option value="">Jharkhand	</option>
                                 <option value="">Karnataka	</option>
                                 <option value="">Kerala	</option>
                                 <option value="">Madhya Pradesh	</option>
                                 <option value="">Maharashtra	</option>
                                 <option value="">Manipur	</option>
                                 <option value="">Meghalaya	</option>
                                 <option value="">Mizoram	</option>
                                 <option value="">Nagaland	</option>
                                 <option value="">Odisha	</option>
                                 <option value="">Punjab	</option>
                                 <option value="">Rajasthan	</option>
                                 <option value="">Sikkim	</option>
                                 <option value="">Tamil Nadu	</option>
                                 <option value="">Telangana	</option>
                                 <option value="">Tripura	</option>
                                 <option value="">Uttar Pradesh	</option>
                                 <option value="">Uttarakhand	</option>
                                 <option value="">West Bengal	</option>
                                 </select>
                                 <div class="form-group">
                                    <label for="contact number">Contact number</label>
                                    <input type="text" class="form-control" id="number" placeholder="contact number">
                                </div>
                    



                                    
                            
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>