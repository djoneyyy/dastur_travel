<?php

    $connection = mysqli_connect('localhost', 'root', '', 'biletteri_db');

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
    
        $request = "INSERT INTO formalary (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
    
        if (mysqli_query($connection, $request)) {
            header('Location: biletteri.php');
            exit();
        } else {
            echo 'Suraýdy oryndaý kezinde qate: ' . mysqli_error($connection);
        }
    } else {
        echo 'birdeńe durys bolmady, qaitalap kórińiz';
    }

?>