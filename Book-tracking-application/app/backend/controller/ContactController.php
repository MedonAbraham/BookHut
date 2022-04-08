<?php

require_once __DIR__ . ('../../service/ContactService.php');

class ContactController
{
    private ContactService $service;

    public function __construct(){
        $this->service = new ContactService();
    }
    
    

    public function newMessage()
    {
        if($this->service->contact()){
            header('Location: homepage');
            exit();
        }
        else{
            require __DIR__ . '/../view/contact.php';
        }
    }

}