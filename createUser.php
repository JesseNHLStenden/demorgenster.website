<?php
    session_start();

class Database{
    private $dbConf;

    private $dbConn;

    private $host;
    private $dbname;
    private $user;
    private $pass;

    public function __construct(){
        try{
            $this->dbConf = parse_ini_file('config.ini');
            $this->host = $this->dbConf['host'];
            $this->dbname = $this->dbConf['dbname'];
            $this->user = $this->dbConf['username'];
            $this->pass = $this->dbConf['password'];
            $this->dbConn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            }
            catch (PDOException $e){
                echo $e;
        }
    }

    public function checkForUser($username){
        $stmt = $this->dbConn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        if(count($stmt->fetchAll(PDO::FETCH_ASSOC)) == 1){
            return true;
        }
        else{   
            return false;
        }
    }

    public function createUser($username ,$hashedPassword){
        $stmt = $this->dbConn->prepare("INSERT INTO users (username, password) VALUES (:username, :password);");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
    }

    public function closeConn(){
        $this->dbConn = null;
    }

}

if($_SERVER['REQUEST_METHOD'] != "POST"){
    die('Invalid request');
}

$db = new Database();
$username;
$password;

if(isset($_POST['username']) && !empty($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($_POST['password']) && !empty($_POST['password'])){
    $password = $_POST['password'];
}

$db->createUser($username, password_hash($password, PASSWORD_BCRYPT));


$user = $db->checkForUser($username);
if(!$user){
    echo("<alert>User could not be created</alert>");
}

$db->closeConn();

header("Location: ./index.php");
?>