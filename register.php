<?php
include_once "includes/header.php";
include_once "includes/config.php";

$error = ""; // variable to store error message

if(isset($_POST['submit'])){

    // sanitize input data
    $first_name = mysqli_real_escape_string($connection, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($connection, $_POST['lastname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    // $gender = mysqli_real_escape_string($connection, $_POST['sex']);

    // check if all required fields are filled
    if(empty($first_name) || empty($last_name) || empty($email) || empty($password)){
        $error = "All fields are required!";
    }
    // check if email is valid
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Invalid email address!";
    }
    // check if password is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number
    else if(strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/\d/', $password)){
        $error = "Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number!";
    }
    // if no errors, insert data into database
    else{
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(fname,lname,email,password) VALUES ('$first_name','$last_name','$email','$hashed_password')";
        $result = mysqli_query($connection, $sql);
        if($result){
            echo "Data inserted successfully!";
        }else{
            echo "Something went wrong!";
        }
    }
}

?>
<section class="register-wrapper">
    <div class="container">
        <div class="row">
            <form action="" method="post" class="register-form">
                <h1>Sign Up</h1>
                <?php if(!empty($error)){ echo '<div class="alert alert-danger">' . $error . '</div>'; } ?> <!-- display error message if any -->
                <p>It's quick and easy.</p>
                <hr>
                <div class="username d-flex justify-content-between mb-2">
                    <input type="text" class="form-control" name="firstname" placeholder="First name">
                    <input type="text" class="form-control" name="lastname" placeholder="Surname name">
                </div>
                <input type="email" class="form-control mb-3" name="email" placeholder="Enter Your Email">
                <input type="password" class="form-control mb-3" name="password" placeholder="New password">
                <label for="gender" class="d-block">Gender</label>
                <!-- <div class="gender-wrapper d-flex justify-content-between">
                    <div class="gender female d-flex justify-content-between">
                        <label for="female">Female</label>
                        <input type="radio" name="sex" id="female" value="female">
                    </div>
                    <div class="gender male d-flex justify-content-between">
                        <label for="male">Male</label>
                        <input type="radio" name="sex" id="male" value="male">
                    </div>
                </div> -->
                <p>People who use our service may have uploaded your contact information to Facebook.</p>
                <p>By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS notifications from us and can opt out at any time.</p>
                <input type="submit" class="create-account-btn mb-3" name="submit" value="Sign Up">
                <!-- <div class="text-center">
                    <a href="register.php" class="create-account-btn">Create new account</a>
                </div> -->
            </form>
        </div>
    </div>
</section>
<?php include_once "includes/footer.php"; ?>
