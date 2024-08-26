<?php
    class fnc{

        var $name;
        public $fname;
        protected $username;
        private $password;

        public function computer_user($fname){
            return $fname;
        }

        public function user_age($fname, $yob){
            $user = $this->computer_user($fname);
            $age = date('Y') - $yob;
            return $user .  " is " . $age . ".";
        }
        public function hash_pass($pass){
            return password_hash($pass, PASSWORD_DEFAULT);
        }
    }

    $obj = new fnc();
    //print "Hi " . $obj->computer_user("Grace") . " and I am " . $obj->user_age(2004) . " years old. <br>";
    //print "You are " . $obj->user_age(2004) .  " years old. <br>";
    //print $obj->hash_pass('123');
    //print $obj->user_age("Grace" , 2004);

?>