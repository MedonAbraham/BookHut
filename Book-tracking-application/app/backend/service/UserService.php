<?php

require_once __DIR__ . ('../../model/User.php');
require_once __DIR__ . ('../../repository/UserRepository.php');

class UserService
{

    private UserRepository $userRepository;


    public function __construct(){
        $this->userRepository = new UserRepository();
    }

    public function getAllUsers(){

        return $this->userRepository->findAll();
    }

    public function getUser($username){
        return $this->userRepository->findByUsername($username);
    }

    public function deleteUser($username){
        return $this->userRepository->deleteOneUser($username);

    }


    public function checkLogin(){
        return $this->userRepository->login();
    }



    public function signUp(): bool
    {
        return $this->userRepository->signUp();
    }





}