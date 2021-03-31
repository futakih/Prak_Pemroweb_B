<?php
    require 'belajar_function.php';
    class user{
        public $name;
        private $gender='female';

        public function setGender($genderName){
            $this->gender=$genderName;
        }
        public function getgender(){
            printMyName();
            return $this->gender;
        }

    }
$taufik=new User;
$taufik->name="taufik";
$taufik->setGender("male");
echo" and my gender is ".($taufik->getgender())


?>