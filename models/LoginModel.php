<?php

include 'models/Model.php';

class LoginModel extends Model
{

    public function insert() {

        $user = $_POST['user'];

        $sql ="SELECT * FROM users WHERE user='$user'";

        $results = $this->conn->query($sql);

        if($results->num_rows > 0) {

            while($row = $results->fetch_assoc()) {

                $data = $row;

            }

        }

        if(@$user == @$data['user']) {

            $_POST['status'] = "Już istnieje taki użytkownik";
            $_POST['status_class'] = "registerError";

            include 'views/loginView.php';
        }
        else {
            $stmt = $this->conn->prepare("INSERT INTO users (id, user, password) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $id, $user, $password);

            $id = 'id+1';
            $user = $_POST['user'];
            $password = hash('sha256', $_POST['password']);

            if (preg_match("/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/",
                $_POST['password'])) {
                $stmt->execute();

                $this->conn->close();

                $_POST['status'] = "Rejestracja zakończona sukcesem";
                $_POST['status_class'] = "registerSuccess";

                include 'views/loginView.php';
            } else {
                echo "nie działa";
            }


        }

    }

    public function checkUser() {

        $user = $_POST['user_name'];
        $hash =  hash('sha256', $_POST['user_password']);
        $password = substr($hash, 0, -14);

        $sql ="SELECT * FROM users WHERE user='$user'";

        $results = $this->conn->query($sql);

        if($results->num_rows > 0) {

            while($row = $results->fetch_assoc()) {

                $data = $row;

            }

        }



        if(@$user == @$data['user'] && @$password == @$data['password']) {
            $_SESSION['user_name'] = $user;
            $_SESSION['login_status'] = 1;

            header('Location: index.php?controller=Articles&method=setArticles');
        } else {

            $_POST['status'] = "Nieprawidłowy login lub hasło";
            $_POST['status_class'] = "loginError";

            include 'views/loginView.php';
        }

        $this->conn->close();

        return @$data;
    }

    public function logout() {

        $_SESSION = array();
        session_destroy();
    }

}