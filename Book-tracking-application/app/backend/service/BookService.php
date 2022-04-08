<?php

require_once __DIR__ . ('../../model/Book.php');
require_once __DIR__ . ('../../repository/BookRepository.php');

class BookService
{

    private BookRepository $bookRepository;


    public function __construct(){
        $this->bookRepository = new BookRepository();
    }

    public function getAllBooks(){

        return $this->bookRepository->findAll();
    }

    public function getBooks(){
        return $this->bookRepository->findByTitle();
    }

    public function getRecommendedBooks($username){
        return $this->bookRepository->getRecommendedBooks($username);
    }

    public function getBookDetails($ISBN){
        return $this->bookRepository->getBookDetails($ISBN);
    }

    public function getUserList($username, $listId){
        return $this->bookRepository->getUserList($username, $listId);
    }

    public function addToList($listId, $username, $ISBN){
        return $this->bookRepository->addToList($listId, $username,$ISBN);

    }

    public function removeFromList($username, $ISBN){
        return $this->bookRepository->removeFromList($username, $ISBN);
    }

    public function changeStatus($ISBN, $username, $listId){
        return $this->bookRepository->changeStatus($ISBN, $username, $listId);
    }



}