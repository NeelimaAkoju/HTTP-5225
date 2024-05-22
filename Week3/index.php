<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php
      $hour = date('H'); //'h'-give hours in 12 hrs format, 'H'-in 24hrs, 'i'- minutes, 's'-seconds, 'a'- for AM and PM
      if ($hour < 12){
        echo 'Good Morning!';
      }
      else{
        echo 'Good Afternoon!';
      }
      $day = date('D');
      echo '<br>';
      echo 'Today is ' . $day;
      echo '<br>';
      $randomHour = rand(1,24); //gives random number between 1-24
      if($randomHour < 12 && $randomHour >= 5){
        echo 'Good Morning!';
      }
      elseif($randomHour >= 12 && $randomHour < 15){
        echo 'Good Afternoon!';
      }
      elseif($randomHour >=15 && $randomHour < 18){
        echo 'Good Evening!';
      }
      else{
        echo 'Good Night!';
      }
      echo '<br>';
      echo $randomHour;
    ?> 
</body>
</html>