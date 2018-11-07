<?php

    include 'connection.php';

    function getEventIds($legId, $conn){

        $stmt = $conn->query('SELECT * FROM eventRelations WHERE legId='.$legId);
        while ($row = $stmt->fetch())
        {
            $data[] = array(
                'id' => $row['eventId']
            );
        }

        if($stmt){

            if ($data[0]['id'] == null){
                $result = '{"success":false}';
            }else{
                $result = '{"success":true, "data":' . json_encode($data) . '}';
            }
            
            
        }
        else{
            $result = '{"success":false}';
        }

        return $result;
    }

    function getEvent($eventId, $conn){
        $stmt = $conn->query('SELECT * FROM events WHERE id='.$eventId);
        while ($row = $stmt->fetch())
        {
            $data[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'description' => $row['description']
            );
        }

        if($stmt){

            if ($data[0]['id'] == null){
                $result = '{"success":false}';
            }else{
                $result = '{"success":true, "data":' . json_encode($data) . '}';
            }
            
            
        }
        else{
            $result = '{"success":false}';
        }

        return $result;
    }

    function run($legId, $conn){
        $resultId = getEventIds($legId, $conn);
        $decodeId = json_decode($resultId, true);
        for($i = 0; $i < count($decodeId['data']); $i++){
            $resultEvent = getEvent($decodeId['data'][$i]['id'], $conn);
            $decodeEvent = json_decode($resultEvent, true);
            $data[] = array(
                'id' => $decodeEvent['data'][0]['id'],
                'name' => $decodeEvent['data'][0]['name'],
                'description' => $decodeEvent['data'][0]['description']
            );
        }

        $returnData = '{"success":true, "data":'.json_encode($data).'}';
        return $returnData;

    }

    if(isset($_GET['leg'])){
        echo run($_GET['leg'], $conn);
    }

?>