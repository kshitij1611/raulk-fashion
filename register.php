<?php include("includes/header.php"); ?>
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>My Account</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Signup</li>
            </ul>
        </div>
    </div>
</div>


<section class="signup-area ptb-100">
    <div class="container">
        <div class="signup-content">
            <h2>Create an Account</h2>
            <form class="signup-form">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" id="fname" name="fname">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" id="lname" name="lname">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your name" id="name" name="name">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" id="password"
                        name="password">
                </div>
                <button type="submit" class="default-btn">Signup</button>
                <a href="index.html" class="return-store">or Return to Store</a>
            </form>
        </div>
    </div>
</section>
<?php include("includes/footer.php"); ?>