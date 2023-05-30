<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="formular login">
            <header>
                <div class="logo">
                <img src="chat_app.png" alt="chat-logo">
                </div>
            </header>
            <form action="#">
                <div class="error-msg"></div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password">
                </div>
                <div class="field button">
                    <input type="submit" value="Let's chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php"> Signup now</a></div>
        </section>
    </div>

    <script src="javascript/login.js"></script>
    
</body>
</html>