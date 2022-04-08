<?php

require_once __DIR__ . ('../../../db.php');
require_once __DIR__ . ('../../model/Book.php');


class BookRepository
{
    private DB $db;
    private $stmt;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    private string $all_books_sql = "SELECT * from books";
    private string $recommended_books_sql = "SELECT * FROM books WHERE ISBN NOT IN(SELECT ISBN from userLists WHERE username=:username)";
    private string $book_detail_sql = "SELECT * FROM books WHERE books.ISBN=:bookISBN";
    private string $user_list_sql = "SELECT * FROM userLists JOIN books b on b.ISBN = userLists.ISBN JOIN users u on u.username = userLists.username AND userLists.username=:username JOIN listType lT on lT.id = userLists.listId WHERE listId=:listId ";
    public string $add_to_list_sql = "INSERT into userLists(listId, username, ISBN) VALUES (:listId, :username, :ISBN)";
    public string $remove_from_list_sql = "DELETE from userLists WHERE ISBN=:ISBN AND username=:username";


    public string $change_status_sql = "UPDATE userLists SET listId=:listId WHERE username=:username AND ISBN=:ISBN";

    public function findAll()
    {
        $this->stmt = $this->db->prepare($this->all_books_sql);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
        $this->stmt->execute();
        if($this->stmt->rowCount() > 0){
            return $this->stmt->fetchAll();
        }

        return null;

    }

    public function getRecommendedBooks($username){

        $this->stmt = $this->db->prepare($this->recommended_books_sql);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
        $this->stmt->execute(['username' => $username]);
        if ($this->stmt->rowCount() > 0) {
            return $this->stmt->fetchAll();
        } else {
            return null;
        }

    }

    public function getBookDetails($ISBN){

        $this->stmt = $this->db->prepare($this->book_detail_sql);
        $this->stmt->execute(['bookISBN' => $ISBN]);

        if ($this->stmt->rowCount() > 0) {
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return null;
        }


    }

    public function findByTitle()
    {
        if(isset($_POST['searchBook'])) {
            $title = $_POST['bookTitle'];

            $this->stmt = $this->db->prepare("SELECT * FROM `books` WHERE title like $title");
            $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
            $this->stmt->execute();
            return $this->stmt->fetchAll();
        }

        return false;

    }

    public function changeStatus($ISBN, $username, $listId){
        $this->stmt = $this->db->prepare($this->change_status_sql);
        $this->stmt->execute(['ISBN' => $ISBN, 'username' => $username, 'listId' => $listId]);
        if ($this->stmt->rowCount() > 0) {
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return null;
        }


    }



    public function getUserList($username, $listId){
        $this->stmt = $this->db->prepare($this->user_list_sql);
        $this->stmt->execute(['listId' => $listId, 'username' => $username]);
        if ($this->stmt->rowCount() > 0) {
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return null;
        }

    }

    public function addToList($listId, $username, $ISBN){
        $this->stmt = $this->db->prepare($this->add_to_list_sql);
        $this->stmt->execute(['listId' => $listId, 'username' => $username, 'ISBN' => $ISBN]);
        if ($this->stmt->rowCount() > 0) {
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return null;
        }

    }

    public function removeFromList($username, $ISBN){
        $this->stmt = $this->db->prepare($this->remove_from_list_sql);
        $this->stmt->execute(['username' => $username, 'ISBN' => $ISBN]);
        if ($this->stmt->rowCount() > 0) {
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return null;
        }

    }



}