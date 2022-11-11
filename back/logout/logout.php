 <?php session_start();

   $_SESSION = [];

   setcookie('LOGGED_USER', '');

    session_destroy();

    header('Location: ../../index.php');