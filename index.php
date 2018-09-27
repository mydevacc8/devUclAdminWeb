<html>
    <head>
        <title>ADMIN page</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?> 
    </body>
    <?php
        include 'api/getToursWeb.php';
        $decode = json_decode($result);
        echo $decode->data[0];
    ?>
</html>

