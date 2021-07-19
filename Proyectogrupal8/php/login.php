<?php
 
 session_start();
    if (isset($_SESSION['user_id'])) {
        header('Location: /php-login');
    }
    require 'conexion_be.php';

        if (!empty($_POST['email']) && !empty($_POST['contrasena'])) {
            $records = $conn->prepare('SELECT id, email, contrasena FROM users WHERE email = :email');
            $records->bindParam('email', $_POST['email']);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);

            $message = '';

            if (count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
                $_SESSION['user_id'] = $results['id'];
                header("Location: /php-login");
            } else {
                $message = 'Sorry, those credentials do not match';
            }
        }

?>
