<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php 
    include_once "header.php"; 
?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img'] ?>" alt="profile picture">
                    <div class="details">
                        <span><?php echo $row['surname'] . " " . $row['name'] ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
            </header>
           <div class="search">
            <span class="text">Select an user to start chating</span>
            <input type="text" placeholder="Enter name to search...">
            <button>
                <p class="search-button">&#9906;</p>
            </button>
           </div>
           <div class="users-list">

           </div>
        </section>
    </div>
    
    <script src="javascript/users.js"></script>

</body>
</html>