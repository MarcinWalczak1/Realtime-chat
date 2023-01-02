

<?php include "includes/header.php" ?>
<body>
    <div class="wrapper">
        <section class="form login">
           <header>Aplikacja Chat</header>
           <form action="#">
            <div class="error-txt"></div>
            <div class="name-details">
                
                <div class="field input">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" placeholder="Adres e-mail" name="email">
                </div>
                <div class="field input">
                    <label for="password">Hasło</label>
                    <input id="password" type="password" placeholder="Hasło" name="password">
                    <i class="fas fa-eye"></i>
                </div>
                
                <div class="field button">
                   <input type="submit" value="Dalej">
                </div>
                
                
            </div>
           </form>
           <div class="link">Nie masz konta? <a href="index.php">Dołącz tutaj</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>

</body>
</html>