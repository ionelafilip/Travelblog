<?php

class UsersModel extends DBClassModel
{
    protected $userName;
    protected $userEmail;
    protected $userPass;

    public function __construct($uN='DefaultName', $uE='DefaultEmail', $uP='DefaultPass'){
        $this->userName = $uN;
        $this->userEmail = $uE;
        $this->userPass = $uP;
    }

    public function getDetails(){
        return $this->userName
                .' are email = '
                .$this->userEmail
                .' si parola = '
                .$this->userPass;
    }

    public function getUsers(){
        $q = "SELECT * FROM usersblog";
        $result = $this->db()->query($q);
        return $result->fetch_all(MYSQLI_ASSOC);
        
    }

    public function delUser($id){
        $q = "DELETE FROM `usersblog` WHERE `ID`=$id";
        $result = $this->db()->query($q);
    }

    public function addUser($userEmail, $userPass){
        $hashedPass = password_hash($userPass, PASSWORD_DEFAULT);
        $q = "INSERT INTO `usersblog` (`userEmail`, `userPass`, `hashedPass`) VALUES (?,?,?)";
        // prepared statements/queries
        $myPrep = $this->db()->prepare($q);
        
        $myPrep->bind_param("sss", $userEmail, $userPass, $hashedPass);
        $myPrep->execute();
        
    }

}