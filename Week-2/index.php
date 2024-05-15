<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>

    <?php echo "Hello"; ?>
    <?php echo '<h1>Welcome to HTTP 5225</h1>'; ?>
    <?php echo '<p>We will learn PHP in this class</p>'; ?>
    
    <p>
        In this class we will learn:
    </p>
    <?php
        echo '<ul>
                <li>PHP</li>
                <li>MySQL</li>
                <li>Laravel</li>
            </ul>';
    ?>
    <?php
        echo '<img src="https://placehold.co/600x400" alt="PHP test">';
    ?>
    <img src="<?php echo 'https://placehold.co/600x400'; ?>" alt="PHP test">

    <?php
        $fName = 'Neelima';
        $lName = 'Akoju';
        //$name['fname'] = 'Neelima Akoju'; //like key value pair

        $name = array('Neelima', 'Akoju');
    ?>

    <?php
        echo 'Hello' . ' ' . $name[1];
    ?>
</body>
</html>