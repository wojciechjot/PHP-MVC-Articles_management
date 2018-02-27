<?php include 'views/header.php' ?>

    <p class="userName">Użytkownik: <?php echo $_SESSION['user_name']; ?></p>
    <a href="?controller=Login&amp;method=doLogout" id="logout">Wyloguj</a>
        <div class="articleHeader">
            <p><?php echo $_SESSION['user_name']; ?></p>
            <p><?php echo $this->article['title']; ?></p>
            <p><?php $time = strtotime($this->article['date']); echo $myFormatForView = date("d-m-Y", $time); ?></p>
        </div>

        <article>
            <p id="content">
                <?php echo $this->article['content']; ?>
            </p>
        </article>

    <form class="new" action="?controller=Articles&amp;method=setArticles" method="post">
        <input type="submit" value="Powrót">
    </form>
</section>

<?php include 'views/footer.php' ?>
