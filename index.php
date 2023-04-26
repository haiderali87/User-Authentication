<?php include_once "includes/header.php"; ?>
<section class="home-wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-md-6 home-left-content">
                <h1>Authentication System</h1>
                <p>This web app allow users to securely create accounts, login, and access protected content.</p>
            </div>
            <div class="col col-md-6 home-right-content">
                <form action="" method="post">
                    <input type="email" class="form-control mb-3" name="email" placeholder="Enter Your Email">
                    <input type="password" class="form-control mb-3" name="password" placeholder="Password">
                    <input type="submit" class="mb-3" name="submit" value="Log in">
                    <hr>
                    <div class="text-center">
                        <a href="register.php" class="create-account-btn">Create new account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once "includes/footer.php"; ?>
