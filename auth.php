<?php

class auth{
    public function signup($conn){
        if (isset($_POST["signup"])){
           
        $fullname = $_POST["fullname"];
        $email_address = $_POST["email_address"];
        $username = $_POST["username"];

        //die ($username);
        $cols = ['fullname', 'email', 'username']; //key
        $vals = [$fullname, $email_address, $username]; //value

        $data = array_combine($cols, $vals);
        $insert = $conn->insert('users', $data);

        if($insert === TRUE){
            //echo "User registered successfully";
            header('Location: signup.php');
            exit();
        }else{
            die($insert);
    }
}
}
}