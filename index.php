<html>
    <head>
        <title>ADMIN page</title>
    </head>
    <body>
    
    <?php
        include 'api/getToursWeb.php';
        $decode = json_decode($result,true);
        echo count($decode['data']);
        echo <<< _END

        <table id="toursTable">
                <tr class='header'>
                    <th>Tour Id</th>
                    <th>Tour Name</th>
                    <th>Tour Image</th>
                    <th>Operations</th>
                </tr>

_END;
        for($i = 0; $i<count($decode['data']);$i++){
            echo "<tr>";
            echo "<td>".$decode['data'][$i]['id']."</td>";
            echo "<td>".$decode['data'][$i]['name']."</td>";
            echo "<td>".$decode['data'][$i]['image']."</td>";
            echo "<td> 
                <button onclick=\"\" type='button'>edit</button>
                <button type='button' class='delBtt' value='".$row['id']."'>delete</button>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    </body>
</html>

