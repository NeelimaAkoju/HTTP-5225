<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
    <?php
        $randomNumber = rand(1,100);
        $message = '';
        if($randomNumber%5 == 0 && $randomNumber%3 == 0){
            $message = 'FizzBuzz';
        }
        elseif($randomNumber%5 == 0){
            $message = 'Buzz';
        }
        elseif($randomNumber%3 == 0){
            $message = 'Fizz';
        }
        else{
            $message = 'The Magic number is ' . $randomNumber;
        }
        echo $randomNumber;
        echo '<br>';
        echo $message;

    ?>
</body>
</html>