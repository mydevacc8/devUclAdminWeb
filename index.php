<html>
    <head>
        <title>ADMIN page</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?> 
    </body>
    <?php
        include 'api/getToursWeb.php';
        echo $result['data'];
    ?>
</html>

