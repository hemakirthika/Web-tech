




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <script>
               
    </script>
</head>
<body>
<?php
include("server.php");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    
    $email = $_POST['email'];
    
    
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $enteryourstate = $_POST['enteryourstate'];
    $yourcontact = $_POST['yourcontact'];

    // Verify if the email already exists
    $verify_query = mysqli_query($con, "SELECT email FROM detials WHERE email='$email'");
    
    if ($verify_query) {
        $registered = 1;
    }
    else{
        die(mysqli_error($con));
    }

    if (mysqli_num_rows($verify_query) != 0) {
        echo "<div class='message'>
                <p>This email is already used, try another!</p>
            </div><br>";
        echo "<button class='btn' onclick='javascript:self.history.back()'>Go Back &amp; Try Again</button>";
    } else 
        $insert_query = mysqli_query($con, "INSERT INTO detials (name,email,password, confirmpassword,enteryourstate) VALUES ('$name','$email','$password', '$confirmpassword','$enteryourstate',$yourcontact)");
        
        if ($insert_query)
            $registered = 1;
        else
            die(my_sql_error($con));
        echo "<p>Registration successful!</p>";
} else {
    ?>
    <form action="" method ="POST">
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
<?php } ?>
</body>
</html>