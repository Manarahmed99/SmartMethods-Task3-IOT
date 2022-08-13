
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> Sensor DataBase</title>
        <style>
            body{
                color:white;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
    <?php
    $value=$_GET['Value'];
    //database connection
    $conn = new mysqli("localhost", "root", "", "data");
    // Check connection
    if(empty($value))
    {
    echo 'not submited';
    }
    else
    {
    echo 'the value is:'.$value;
    echo '<br> submited successfully';
    }

    $query= "insert into sensor values($value)" ;
    $run=mysqli_query($conn,$query)

    ?>


    <!-- © Copyright 2022 - Written By Manar -->
    </body>
    </html>
        