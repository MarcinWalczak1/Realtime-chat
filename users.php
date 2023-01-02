
<?php session_start();
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}

?>
<?php include "includes/header.php" ?>

<body>
    <div class="wrapper">
        <section class="users">
        <header>
            <?php 
            include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
            
            
            ?>
          <div class="content">
            <img src="php/images/ <?php $row['img']?> " alt="">
            <div class="details">
                <span><?php echo $row['name']. " " .$row['last_name']?></span>
                <p><?php echo $row['status']?></p>
            </div>

          </div>
          <a class="logout" href="#">Wyloguj się</a>
        </header>
        <div class="search">
            <span class="text">Wybierz użytkownika do czatu</span>
            <input type="text" placeholder="Wpisz imię użytkownika...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">
            
            
        </div>
           
        </section>  
    </div>
    <script src="js/users.js"></script>
</body>
</html>