
<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 1) {
        switch ($_GET['animal']) {
            case 'cats':
                echo "<img src=\"cats.jpg\">";
                break;
            case 'dogs':
                echo "<img src=\"dogs.jpg\">";
                break;
            default:
                echo "error";
        }
    }
} else {
    header('Location: http://localhost:8888/login.php');
}
