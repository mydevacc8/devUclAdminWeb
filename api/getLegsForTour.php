<?php
    include 'connection.php';
    
    function getLegIds($id, $conn){
        $stmt = $conn->query('SELECT * FROM tourRelations WHERE tourId='.$id);
        while ($row = $stmt->fetch())
        {
            $data[] = array(
                'id' => $row['legId']
            );
        }

        if($stmt){
            $result = '{"success":true, "data":' . json_encode($data) . '}';
        }
        else{
            $result = '{"success":false}';
        }
        return $result;
    }

    function getLeg($id, $conn){
        $stmt = $conn->query('SELECT * FROM legs WHERE id='.$id);
        while ($row = $stmt->fetch())
        {
            $data[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'description' => $row['description'],
                'lat' => $row['lat'],
                'long' => $row['long'],
                'address' => $row['address']
            );
        }

        if($stmt){
            $result = '{"success":true, "data":' . json_encode($data) . '}';
        }
        else{
            $result = '{"success":false}';
        }
    }

    if (isset($_GET['tour'])) {
        $tourId = $_GET['tour'];
        $resultId = getLegIds($tourId, $conn);
        $decodeId = json_decode($resultId);
        echo 'I am here';
        for ($i = 0; i < count($decodeId['data']); $i++){
            $resultLeg = getLeg($decodeId['data'][$i]['id']);
            $decodeLeg = json_decode($resultLeg);
            $data[] = array(
                'id' => $decodeLeg['data'][0]['id'],
                'name' => $decodeLeg['data'][0]['name'],
                'description' => $decodeLeg['data'][0]['description'],
                'lat' => $decodeLeg['data'][0]['lat'],
                'long' => $decodeLeg['data'][0]['long'],
                'address' => $decodeLeg['data'][0]['address']
            );
        }

        $returnData = '{"succedd":true, "data:'.json_encode($data).'}';

        echo $returnData;
    }

?>