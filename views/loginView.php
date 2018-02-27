<?php include 'views/header.php' ?>


<?php  if(isset($_POST['status'])) { ?>

    <p class="<?php echo $_POST['status_class']; ?>"><?php echo $_POST['status']; ?></p>

<?php } ?>
<form class="login" method="post" action="?controller=Login&amp;method=login">
        <label style="margin-bottom: 10px;">Login</label><input type="text" name="user_name" required>
        <label style="margin-bottom: 10px;">Hasło</label><input type="password" name="user_password" required>
        <input style="margin-top:60px;" type="submit" value="Zaloguj" name="login">
        <p id="register">Rejestracja</p>
    </form>

    <form id="registerWindow" action="?controller=Login&amp;method=register" method="post">
        <label style="margin-bottom: 10px;">Login</label><input type="text" name="user" required>
        <label style="margin-bottom: 10px;">Hasło</label><input id="registerInput" type="text" name="password" required>
        <p id="wrongPassword">Hasło musi składać się z: minimum 8 znaków, zawierać przynajmniej jedną cyfrę, znak specjalny oraz wielką literę.</p>
        <p id="goodPassword">Hasło spełnia wymagania.</p>
        <input style="margin-top:60px;" id="registerButton" type="submit" value="Zarejestruj" name="register" disabled>
        <p id="cancel">Anuluj</p>
    </form>
    </section>

    <script type="text/javascript" src="js/loginViewScript.js"></script>

<?php include 'views/footer.php' ?>