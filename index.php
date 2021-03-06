<html>
    <head>
        <title>ADMIN page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td{
                padding: 5px;
            }
        </style>
    </head>
    <body>
    
        <?php
            include 'api/getToursWeb.php';
            $decode = json_decode($result,true);
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
                    <button onclick=\"window.location.href='viewTour.php?id=".$decode['data'][$i]['id']."'\" type='button'>view</button>
                </td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>

