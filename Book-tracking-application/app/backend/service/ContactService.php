<?php


require_once __DIR__ . ('../../model/Contact.php');
require_once __DIR__ . ('../../repository/ContactRepository.php');

class ContactService
{
    private ContactRepository $contactRepository;


    public function __construct(){
        $this->contactRepository = new ContactRepository();
    }

    public function contact()
    {
        return $this->contactRepository->contact();
    }



}