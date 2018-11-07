<html>
    <head>
        <title>ADMIN page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>

    <body>
        <div class='container'>
            <form name='newEvent-form' action="" method="post" id='newEvent-form'>
                Name: <input type="text" name="name"><br>
                Description: <textarea type="text" name="description" rows="5" cols="40"></textarea><br>
                <input type="submit">
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            var urlParams = new URLSearchParams(window.location.search);
            $legId = urlParams.get('legId');
            $(document).ready(function(){

                $('#newEvent-form').submit(function(e){
                    e.preventDefault();
                    if($("#newEvent-form [name='name']").val() === ''){
                        console.log("name is not defined");
                    }else if($("#newEvent-form [name='description']").val() === ''){
                        console.log("description is not defined");
                    }else{
                        $.ajax({
                            type: "POST",
                            url: "api/postEvent.php?id="+$legId,
                            data: $(this).serialize(),
                            success: function(data){
                                $("#newEvent-form").find("input[type=text], textarea").val("");
                                console.log(data);
                            }
                        });
                    }

                });

            });

        </script>
    </body>

    

</html>