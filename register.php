<?php include_once "includes/header.php"; ?>
<section class="register-wrapper">
    <div class="container">
        <div class="row">
            <form action="" method="post" class="register-form">
                <h1>Sign Up</h1>
                <p>It's quick and easy.</p>
                <hr>
                <div class="username d-flex justify-content-between mb-2">
                    <input type="text" class="form-control" name="firstname" placeholder="First name">
                    <input type="text" class="form-control" name="lasttname" placeholder="Surname name">
                </div>
                <input type="email" class="form-control mb-3" name="email" placeholder="Enter Your Email">
                <input type="password" class="form-control mb-3" name="password" placeholder="New password">
                <label for="gender" class="d-block">Gender</label>
                <div class="gender-wrapper d-flex justify-content-between">
                    <div class="gender female d-flex justify-content-between">
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="female">
                    </div>
                    <div class="gender male d-flex justify-content-between">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male">
                    </div>
                </div>
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
