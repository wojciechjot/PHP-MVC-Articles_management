<?php include 'views/header.php' ?>

    <p class="userName">Użytkownik: <?php echo $_SESSION['user_name']; ?></p>
    <a href="?controller=Login&amp;method=doLogout" id="logout">Wyloguj</a>
    <form class="new" action="?controller=Articles&amp;method=updateDetails&amp;id=<?php echo $_GET['id']; ?>" method="post">
        <label>Tytuł</label><input type="text" name="title" value="<?php echo $this->article['title']; ?>">
        <label>Zawartość</label><textarea name="content"><?php echo $this->article['content']; ?></textarea>
        <input type="submit" value="Zaktualizuj">
    </form>
    <form class="new" action="?controller=Articles&amp;method=setArticles" method="post">
        <input type="submit" value="Powrót">
    </form>
    </section>

<?php include 'views/footer.php' ?>