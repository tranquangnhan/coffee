<?php 
    function  addContact($name,$email,$phone,$message,$date){
        $sql = "INSERT INTO contact (name,email,phone,message,date) VALUES 
        ('{$name}', '{$email}', '{$phone}','{$message}','{$date}')";
        exec1($sql);
    }

?>