<?php

if ($_POST['email'] && $_POST['password']) {

        if ($_POST) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Podany adres e-mail jest niepoprawny! <br>';
        } else {

            if (isset($_POST['remember'])) {
                $remember = $_POST['remember'];
            } else {
                $remember = null;
            }

            echo 'formularz przesłany:' . "<br>";
            echo 'email:' . $email . "<br>";
            echo 'hasło:' . $password . "<br>";

            if ($remember) {
                echo 'zaznaczono remember me!';
            } else {
                echo 'nie zaznaczono remember me!';
            }
        }
    } else {
            echo 'nie wypełniłeś adresu email i hasła';
        }
}

