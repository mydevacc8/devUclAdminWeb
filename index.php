<html>
    <head>
        <title>ADMIN page</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?> 
    </body>
    <?php
        include 'api/getToursWeb.php';
        $decode = json_decode($result,true);
        echo count($decode['data']);
        echo <<< _END

        <table id="wordTable">
                <tr class='header'>
                    <th>Tour Id</th>
                    <th>Tour Name</th>
                    <th>Tour Image</th>
                    <th>Operations</th>
                </tr>

_END;

    ?>
</html>

