<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php 
    include_once "header.php"; 
?>
<body>
    <div class="wrapper">
        <section class="formular signup">
            <header>
                <div class="logo">
                <img src="chat_app.png" alt="chat-logo">
                </div>
            </header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-msg"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="field input">
                        <label>Surname</label>
                        <input type="text" name="surname" placeholder="Surname" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="field image">
                    <label>Profile image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Let's chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php"> Login now</a></div>
        </section>
    </div>

    <script src="javascript/signup.js"></script>
    
</body>
</html>
