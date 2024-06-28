<?php

    require_once('db.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $time = $_POST['time'];
    $time_prep = $_POST['time_prep'];
    $video = $_POST['video'];
    $person = $_POST['person'];
    $type = $_POST['type'];
    


    if(empty($name) || empty($email) || empty($message) || empty($time)|| empty($time_prep) || empty($video) || empty($person)|| empty($type) ){
        echo "Заполните все поля";
    } else {
        $sql = "INSERT INTO `feedback` (name, email, message, time, time_prep, video, person, type) VALUES ('$name', '$email', '$message', '$time', '$time_prep', '$video', '$person', '$type')";
        if($conn -> query($sql) === true){
            echo "Данные отправлены, ожидайте одобрения модерацией";
        }
        
    
    }
    
?>