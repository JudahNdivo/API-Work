<?php

class auth{
    public function signup($conn){
        if (isset($_POST["signup"])){
           
        $fullname = $_POST["fullname"];
        $email_address = $_POST["email_address"];
        $username = $_POST["username"];

        //die ($username);

        //Sanitize the data
        //Verify that the fullname has only letters, space, dash and apostrophe
        //Verify that the email address is valid
        //Verify that email domain is authorized(strathmore.edu, gmail.com, yahoo.com, hotmail.com)
        //Verify if the email address is already registered
        //Verify that the username already exists
        //Implement 2FA (email => PHPMailer)
        //Send email verification with a OTP (One Time Password) 
        //Verify that the password is identical to the repeat password
        //Verify that the password length is between 4 and 8 characters

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