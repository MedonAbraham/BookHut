<?php

require_once __DIR__ . ('../../service/UserService.php');

class UserController
{
    private UserService $service;

    public function __construct(){
        $this->service = new UserService();
    }

    public function run(){
        if(isset($_POST['action'])){
            switch ($_POST['action']) {
                case 'deleteUser':
                    $this->deleteUser();
                    break;
                case 'getUser':
                    $this->getUser();
                    break;
                case 'getUsersJSON':
                    $this->getAllUsersJSON();
                    break;
                case 'login':
                    $this->authorize();
                    break;
                case 'signup':
                    $this->addUser();
                    break;
                case 'logout':
                    $this->logout();
                    break;
            }
        }
    }

    public function getAllUsersJSON(){

        $response = $this->service->getAllUsers();
        require __DIR__ . '/../view/api/jsonOutput.php';

    }

    public function getUser(){
        $username = $_SESSION["username"];
        $userDetails = $this->service->getUser($username);

        return $userDetails;

    }



    public function deleteUser(){

        if(isset($_POST["deleteUser"])){
            $username = $_SESSION["username"];
            $this->service->deleteUser($username);
            $this->logout();
            exit;
        }
        require __DIR__ . '/../view/userinfo.php';


    }

    public function authorize(){

        $result = $this->service->checkLogin();
        if ($result > 0) {
            $_SESSION["username"] = $_POST["username"];
            header('Location: homepage');
            exit;
        } else {
            require __DIR__ . '/../view/login.php';
        }
    }

    public function logout(){

        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header('Location: login');
        exit;

    }


    public function addUser()
    {

        if($this->service->signUp()){
            header('Location: login');
            exit;
        }
        else{
            require __DIR__ . '/../view/signup.php';
        };

    }






}