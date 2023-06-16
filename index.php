<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper" id="res">
        <section class="form signup">
        
        <header id="tmp"><img src="Abhra.jpeg" height="60px" width="60px">&nbsp;<span>Abhradip's Chat App</span></header>
        
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text">This is an error message!</div>
                <div class="name-details">

                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>

                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new password" required>
                        <i class="fas fa-eye"></i>
                    </div>

                    <div class="field image" >
                        <label>Select image</label>
                        <input type="file" name="image" required>
                    </div>

                    <div class="field button">
                        <input type="submit" value="Register">
                    </div>

                
            </form>
            <div class="link">Already registered? <a href="login.php">Login</a></div>
        </section>

    </div>
    <script src="pass-show-hide.js"></script>
    <script src="signup.js"></script>
</body>
</html>