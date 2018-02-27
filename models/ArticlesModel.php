<?php

include 'Model.php';

class ArticlesModel extends Model
{


    public function insert() {

        $this->conn->query("SET NAMES UTF8");

        $stmt = $this->conn->prepare("INSERT INTO articles (id, user, title, date, content) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $id, $name, $title, $date, $content);

        $id = 'id+1';
        $name = $_SESSION['user_name'];
        $title = $_POST['title'];
        $date = $_POST['date'];
        $date = date("Y-m-d");
        $content = $_POST['content'];

        $stmt->execute();

        $this->conn->close();

        header('Location: index.php?controller=Articles&method=setArticles');
    }

    public function getArticles() {

        $sql = "SELECT articles.id, articles.user, articles.title, articles.date FROM users, articles WHERE users.user='".$_SESSION['user_name']."'
        AND users.user=articles.user;";

        $results = $this->conn->query("SET NAMES UTF8");
        $results = $this->conn->query($sql);

        if($results->num_rows > 0) {

            while($row = $results->fetch_assoc()) {

                $data[] = $row;

            }

        }

        $this->conn->close();

        return @$data;
    }

    public function getOne($id) {


        $sql ='SELECT * FROM articles WHERE id='.$id;

        $results = $this->conn->query("SET NAMES UTF8");
        $results = $this->conn->query($sql);

        if($results->num_rows > 0) {

            while($row = $results->fetch_assoc()) {

                $data = $row;

            }

        }

        $this->conn->close();

        return $data;
    }

    public function update() {

        $id = intval($_GET['id']);
        $title = $_POST['title'];
        $content = $_POST['content'];


        $sql = "UPDATE articles SET title='$title', content='$content' WHERE id=$id";

        $this->conn->query("SET NAMES UTF8");
        $this->conn->query($sql);

        $this->conn->close();

        header('Location: index.php?controller=Articles&method=setArticles');
    }

    public function delete() {

        $id = intval($_GET['id']);

        $sql = "DELETE FROM articles WHERE id=$id";

        $this->conn->query($sql);

        $this->conn->close();

        header('Location: index.php?controller=Articles&method=setArticles');
    }

}




















































