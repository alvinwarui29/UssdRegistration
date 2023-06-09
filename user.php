<?php
class User {
    protected $id;
    protected $location;

function __construct($id){
    $this->id = $id;
}
public function getId(){
    return $this->id;
}
public function setLocation($location){
    $this->id = $location;
}
public function getLocation(){
    return $this->location;
}
public function setId($id){
    $this->id = $id;}

public function register($pdo){
    try{
    $stmt = $pdo->prepare("INSERT INTO ussdregistration.relief_requests
    (id_number,location) values(?,?)");
    $stmt-> execute([$this->getId(),$this->getLocation()]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
public function isUserRegistered ($pdo){
    $stmt = $pdo->prepare("SELECT * FROM ussdsms.user WHERE id_number=?");
    $stmt->execute([$this->getId()]);
    if(count($stmt->fetchAll())>0){
        return true;
    }else{
        return false;
    }
}
}

?>