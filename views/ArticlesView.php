<?php include 'views/header.php' ?>

    <p class="userName">Użytkownik: <?php echo $_SESSION['user_name']; ?></p>
    <a href="?controller=Login&amp;method=doLogout" id="logout">Wyloguj</a>
    <div id="articles">
        <?php if(isset($this->articles)) {?>
        <?php foreach($this->articles as $value) { ?>

        <div class="article">
            <p style="width: 150px;"><?php  echo $value['user']; ?></p>
            <p style="width: 150px;"><?php  echo $value['title']; ?></p>
            <p style="width: 100px;"><?php $time = strtotime($value['date']); echo $myFormatForView = date("d-m-Y", $time); ?></p>
            <p><a href="?controller=Articles&amp;method=readArticle&amp;id=<?php echo $value['id'] ?>">Czytaj</a></p>
            <p><a href="?controller=Articles&amp;method=changeDetails&amp;id=<?php echo $value['id'] ?>">Zmień</a></p>
            <div>
                <p class="delete">Usuń</p>
                <div class="deleteWindow">
                    <div>Na pewno?</div>
                    <div class="btns">
                        <a href="?controller=Articles&amp;method=deleteArticle&amp;id=<?php echo $value['id'] ?>" class="miniBtn">Tak</a>
                        <p class="miniBtn no">Nie</p>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
        <?php } ?>
    </div>
    <form action="?controller=Articles&amp;method=newArticle" method="post">
        <input type="submit" value="Nowy artykuł">
    </form>
    </section>

    <script type="text/javascript" src="js/articlesViewScript.js"></script>

<?php include 'views/footer.php' ?>