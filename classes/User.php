<?php

class User {
    protected $userID;
    protected $password;
    
    public function __construct($id, $pwd) {
        $this->userID = $id;
        $this->password = $pwd;
    }

}

class Login extends User {

    public function login(){

        session_start();

        if($this->validateUser($this->userID, $this->password)){
            if ($this->userID === 'admin') {
                header("Location: ../admin.php?login=success");
            } else {
                header("Location: ../pages/vote.php?login=success");
            }
        } else {
            header("Location: ../index.php?login=invalid");
        }
        
    }

    private function validateUser($id, $pwd){
        if (isset($_SESSION['users'][$id]) && $_SESSION['users'][$id] === $pwd){
            return true;
        } else {
            return false;
        }
    }


}

