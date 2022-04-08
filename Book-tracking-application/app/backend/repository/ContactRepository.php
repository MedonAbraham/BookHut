<?php

require_once __DIR__ . ('../../../db.php');
require_once __DIR__ . ('../../model/Contact.php');


class ContactRepository
{
    private DB $db;
    private $stmt;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    private string $one_contact_message = "INSERT INTO contact (id, first_name, last_name, email_address, subject, message) VALUES (null, :first_name, :last_name, :email_address, :subject, :message)";


    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function saveOne($object)
    {
        // TODO: Implement saveOne() method.
    }

    public function deleteOne($id)
    {
        // TODO: Implement deleteOne() method.
    }

    public function contact()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            //$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $this->stmt = $this->db->prepare($this->one_contact_message);


            $this->stmt->bindParam(':first_name', $_POST['first_name']);
            $this->stmt->bindParam(':last_name', $_POST['last_name']);
            $this->stmt->bindParam(':email_address', $_POST['email_address']);
            $this->stmt->bindParam(':subject', $_POST['subject']);
            $this->stmt->bindParam(':message', $_POST['message']);

            if($this->stmt->execute()){

                return true;
            }


        }

        return false;

    }

}