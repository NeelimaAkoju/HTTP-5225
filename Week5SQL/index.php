<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225'); //to connect to database -- "mysqli_connect" is the inbuild function
        if(!$connect){
            echo 'Error code: ' . mysqli_connect_errno(); //inbuild func to get error message number
            echo 'Error code: ' . mysqli_connect_error();
            exit;
        }
        $query = 'SELECT `Name`, `Hex` FROM colors WHERE Name like "%blue%"';
        $results = mysqli_query($connect, $query); //needs two parameters-- the connection and the query
        if(!$results){
            echo 'Error code: ' . mysqli_error($connect);//mysqli_error will give the last error msg for the connection
            exit;
        }
        else{
            echo '<div class="container">
                    <div class="row">';
                    foreach($results as $result){
                        echo '<div class="col-md-3">
                                <div class="card mt-2 mb-2" style="">
                                    <div class="card-body">
                                        <h5 class="card-title">' .$result["Name"].'</h5>
                                        <p class="card-text" style="background:'.$result["Hex"].'">'.$result["Hex"].'</p>
                                    </div>
                                </div>
                              </div>';
                    }
            echo '</div>
                </div>';
            echo 'My query found ' . mysqli_num_rows($results).' rows';
        }
    ?>
</body>
</html>