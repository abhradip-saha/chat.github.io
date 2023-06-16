<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form login">
            <header id="tmp"><img src="Abhra.jpeg" height="60px" width="60px">&nbsp;<span>Abhradip's Chat App</span></header>
                <form action="#" autocomplete="off">
                    <div class="error-text">This is an error message!</div>
                    
                        <div class="field input">
                            <label>Email Address</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
    
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password"  placeholder="Enter your password" required>
                            <i class="fas fa-eye"></i>
                        </div>
    
                       
                        <div class="field button">
                            <input type="submit" value="Login">
                        </div>
    
                    
                </form>
                <div class="link">Don't have an account? <a href="index.php">Signup</a></div>
            </section>
    
        </div>
        <script src="pass-show-hide.js"></script>
        <script src="login.js"></script>
    </body>
    </html>