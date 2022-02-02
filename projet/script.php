<?php
    if(isset($_POST['submit'])){
        $users = array(
            "name" => $_POST['name'], 
            "email" => $_POST['email'], 
            "phone" => $_POST['phone'], 
            "enroll number" => $_POST['enrollnu'], 
            "date of admission" => $_POST['date']);

        if(filesize("data.json") == 0){
            $first = array($users);
            $data_save = $first;
        }
        else{
            $old = json_decode(file_get_contents("data.json"));
            array_push($old,$users);
            $data_save = $old;
        }

        if(!file_put_contents("data.json",json_encode($data_save, JSON_PRETTY_PRINT), LOCK_EX)){
            $error= "Erreur de stockage du message, veuillez réssayer";
    
        }
        else{
            $success="Tout est bien stocker";
        }
    
    }
    
    
   
?>