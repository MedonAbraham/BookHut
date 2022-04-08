<?php

require_once __DIR__ . ('../../service/BookService.php');

class BookController
{
    private BookService $service;

    public function __construct(){
        $this->service = new BookService();
    }

    public function run(){

        if(isset($_POST['action'])){
            switch ($_POST['action']){
                case 'getAllBooks':
                    $this->allBooks();
                    break;
                case 'getAllBooksJson':
                    $this->allBooksJSON();
                    break;
                case 'getRecommendedBooks':
                    $this->recommendedBooks();
                    break;
                case 'searchResults':
                    $this->searchResult();
                    break;
                case 'bookDetails':
                    $this->getBookDetails();
                    break;
                case 'bookDetailsJSON':
                    $this->getBookDetailsJSON();
                    break;
                case 'userBookLists':
                    $this->getLists();
                    break;
                case 'addToList':
                    $this->addToList();
                    require __DIR__ . '/../view/userinfo.php';
                    break;
                case 'removeBook':
                    $this->removeFromList();
                    break;
                case 'changeStatus':
                    $this->changeStatus();
                    break;
                case 'readingList':
                    $list = $this->getReadingList();
                    $listTitle = "Currently reading";
                    require __DIR__ . '/../view/singleList.php';
                    break;
                case 'finishedList':
                    $list = $this->getFinishedList();
                    $listTitle = "Finished reading";
                    require __DIR__ . '/../view/singleList.php';
                    break;
                case 'wantToreadList':
                    $list = $this->getWanttoreadList();
                    $listTitle = "Want to read";
                    require __DIR__ . '/../view/singleList.php';
                    break;

                default:
                    break;
            }
        }
    }


    public function allBooks(){
       $result = $this->service->getAllBooks();
       $title = "Books";
       require __DIR__ . '/../view/homepage.php';


    }

    public function allBooksJSON(){
        $response = $this->service->getALLBooks();
        require __DIR__ . '/../view/api/jsonOutput.php';

    }

    public function recommendedBooks(){
        $username = $_SESSION["username"];
        $result = $this->service->getRecommendedBooks($username);
        $title = "Books not in your list !";
        require __DIR__ . '/../view/homepage.php';


    }

    public function getBookDetails(){

        $ISBN = $_POST['bookISBN'];
        $_SESSION['currentISBN'] = $ISBN;
        $details = $this->service->getBookDetails($ISBN);
        return $details;


    }


    public function changeStatus(){

        $username = $_SESSION["username"];


        if(isset($_POST["changeToFinished"])){
            $ISBN = $_POST["changeToFinished"];
            $listId = 3;

        }
        elseif(isset($_POST["changeToReading"])){
            $ISBN = $_POST["changeToReading"];
            $listId = 1;
        }
        elseif(isset($_POST["changeToWant"])) {
            $ISBN = $_POST["changeToWant"];
            $listId = 2;
        }
        else{
            $ISBN = "";
            $listId = "";
        }

        return $this->service->changeStatus($ISBN, $username, $listId);


    }

    public function addToList(){

        if(empty($_POST["addToReading"])){
            $_POST["addToReading"] = "";
        }

        $username = $_SESSION["username"];

        if(isset($_POST["addToReading"])){
            $ISBN = $_POST["addToReading"];
            $listId = 1;
        }

        if(isset($_POST["addToWant"])){
            $ISBN = $_POST["addToWant"];
            $listId = 2;
        }


        if(isset($_POST["addToFinished"])){
            $ISBN = $_POST["addToFinished"];
            $listId = 3;
        }


        return $this->service->addToList($listId, $username, $ISBN);

    }

    public function removeFromList(){

        if(isset($_POST['removeBook'])){
            $username = $_SESSION['username'];
            $ISBN = $_POST['removeBook'];
        }
        else{
            $username = "";
            $ISBN = "";
        }
        return $this->service->removeFromList($username, $ISBN);

    }

    public function getReadingList(){
        $username = $_SESSION['username'];
        return $this->service->getUserList($username, 1);
    }

    public function getWanttoreadList(){
        $username = $_SESSION['username'];
        return $this->service->getUserList($username, 2);
    }

    public function getFinishedList(){
        $username = $_SESSION['username'];
        return $this->service->getUserList($username, 3);
    }


    public function getLists(){

        $readingList = $this->getReadingList();
        $finishedList = $this->getFinishedList();
        $wantToreadList = $this->getWanttoreadList();

        return (object) [
            'readingList' => $readingList,
            'finishedList' => $finishedList,
            'wantToreadList' => $wantToreadList
        ];


    }


    public function getBookDetailsJSON(){


        require __DIR__ . "/../view/api/jsonOutput.php";

        $ISBN = $_SESSION['currentISBN'];

        $response = $this->service->getBookDetails($ISBN);
        require __DIR__ . '/../view/bookDetails.php';



    }

    public function searchResult(){

        $result = $this->service->getBooks();
        require __DIR__ . '../view/homepage.php';
    }




}