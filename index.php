<html>
    <head>
        <title>Main page</title>
    </head>
    <body>
    <?php
       // session_start();
        //unset($_SESSION['login']);
    ?>
        <form action="catalog.php" method="get">
            <select name="animal" required>
                <option></option>
                <option value="cats">Cats</option>
                <option value="dogs">Dogs</option>
            </select>
            <input type="submit" value="Показать">
        </form>
    </body>
</html>