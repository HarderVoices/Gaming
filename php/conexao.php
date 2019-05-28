<?php 

    $user = 'root';
    $password = '1234';
    $server = '127.0.0.1:3306';
    $database = 'GamingClub';

    $con = mysqli_connect($server, $user, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    ?>

    <!-- $con = mysqli_connect($server, $user, $password, $database);

    if(!$con){
        die( "connection failed:" . mysqli_connect_error());
    }

    echo "Conectado com sucesso ao banco de dados GamingClub";
    
    mysqli_close($con);
?> -->