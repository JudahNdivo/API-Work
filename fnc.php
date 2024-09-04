<?php
class fnc{
    var $fname;
    var $yob;
    protected $email_address;
    private $password;

    public function computer_user($fname){
        return $fname;
    }

    public function user_age($name, $yob){
        $age = date('Y') - $yob;
        return $name.' is '.$age."\n";
    
        
    }
}
$Obj = new fnc();
print $Obj->user_age('John',1990);