<?php

require_once __DIR__ . ('../../../db.php');
require_once __DIR__ . ('../../model/User.php');




class UserRepository
{
    private DB $db;
    private $stmt;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    private string $all_users_sql = "SELECT * FROM users";
    private string $create_user_sql = "insert into users (first_name, last_name, email_address, username, password) values (:first_name, :last_name, :email_address, :username, :password)";
    private string $delete_user_sql = "DELETE from users where username =:username ";
    private string $one_user_sql = "SELECT first_name, last_name, email_address, username, password from users where username= :username";



    public function findAll()
    {
        $this->stmt = $this->db->prepare($this->all_users_sql);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $this->stmt->execute();
        return $this->stmt->fetchAll();
    }


    public function findByUsername($username)
    {
        $this->stmt = $this->db->prepare($this->one_user_sql);
        $this->stmt->bindParam(':username', $username);
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    }



    public function saveOne($data)
    {
        $this->stmt = $this->db->prepare($this->create_user_sql);
        return $this->stmt->execute($data) ?? false;
    }

    public function deleteOneUser($username)
    {
        $this->stmt = $this->db->prepare($this->delete_user_sql);
        $this->stmt->bindParam(':username', $username);
        return $this->stmt->execute();
    }

    public function login(){

        $count = "";

        if (isset($_POST["login"])) {
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                $message = '<label>All fields are required</label>';
            } else {
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";
                $statement = $this->db->prepare($query);
                $statement->execute(
                    array(
                        'username'     =>     $_POST["username"],
                        'password'     =>     sha1($_POST["password"])
                    )
                );

                $count = $statement->rowCount();

            }
        }

        return $count;
    }


    public function signUp()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {


        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email_address = $_POST['email_address'];
        $username = $_POST['username'];
        $password = sha1($_POST['password']);

        $response = new stdClass();

        $checkUsername = $this->stmt = $this->db->prepare("SELECT username from users WHERE username=$username");
        if ($checkUsername->rowCount() == 0) {

            if (!empty($first_name) && !empty($last_name) && !empty($email_address) && !empty($username) && !empty($password)) {
                if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {


                    $this->stmt = $this->db->prepare($this->create_user_sql);

                    $this->stmt->bindParam(':first_name', $first_name);
                    $this->stmt->bindParam(':last_name', $last_name);
                    $this->stmt->bindParam(':email_address', $email_address);
                    $this->stmt->bindParam(':username', $username);
                    $this->stmt->bindParam(':password', $password);

                    if ($this->stmt->execute()) {
                        return true;
                    }

                } else {
                    $response->message = "Enter a valid email!";
                }
            } else {
                $response->message = "Fill in all input fields!";
            }
        }

        }

        return false;

    }




    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}