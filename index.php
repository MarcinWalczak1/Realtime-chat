<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    header("Location: users.php");
}

?>



<?php include "includes/header.php" ?>
<body>
    <div class="wrapper">
        <section class="form signup">
           <header>Aplikacja Chat</header>
           <form action="#" enctype="multipart/form-data" autocomplete="off">
            <div class="error-txt"></div>
            <div class="name-details">
                <div class="field input">
                    <label for="name">Imię</label>
                    <input id="name" type="text" placeholder="Wpisz imię..." name="name" required>
                </div>
                <div class="field input">
                    <label for="last-name">Nazwisko</label>
                    <input id="last-name" type="text" placeholder="Wpisz nazwisko..." name="lname" required>
                </div>
                <div class="field input">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" placeholder="Adres e-mail" name="email" required>
                </div>
                <div class="field input">
                    <label for="password">Hasło</label>
                    <input id="password" type="password" placeholder="Hasło" name="password" required>
                    <i class="fas fa-eye" ></i>
                </div>
                <div class="field image">
                    <label for="">Wybierz zdjęcie</label>
                    <input id="" type="file" name="image" required>
                </div>
                <div class="field button">
                   <input type="submit" id ="continue-button"value="Dalej">
                </div>
                
                
            </div>
           </form>
           <div class="link">Masz już konto? <a href="login.php">Zaloguj się tutaj</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>


</body>
</html>