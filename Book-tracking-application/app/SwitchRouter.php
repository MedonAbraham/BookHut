<?php
session_start();

class SwitchRouter
{
    public function route($uri)
    {
        switch ($uri) {
            case 'test':
                echo 'Success ... ';
                break;
            case 'login':
                require __DIR__ . '/backend/controller/UserController.php';
                $controller = new UserController();
                $_POST['action'] = "login";
                $controller->run();
                break;
            case 'logout':
                require __DIR__ . '/backend/controller/UserController.php';
                $controller = new UserController();
                $_POST['action'] = "logout";
                $controller->run();
                break;
            case 'signup':
                require __DIR__ . '/backend/controller/UserController.php';
                $controller = new UserController();
                $_POST['action'] = "signup";
                $controller->run();
                break;
            case 'deleteUser':
                require __DIR__ . '/backend/controller/UserController.php';
                $controller = new UserController();
                $_POST['action'] = "deleteUser";
                $controller->run();
                break;
            case 'contact':
                require __DIR__ . '/backend/controller/ContactController.php';
                $controller = new ContactController();
                $controller->newMessage();
                break;
            case 'userinfo':
                require __DIR__ . '/backend/controller/BookController.php';
                $controller = new BookController();
                $listOfBooks = $controller->getLists();

                require __DIR__ . '/backend/controller/UserController.php';
                $controller = new UserController();
                $userDetails = $controller->getUser();

                $controller = new BookController();
                $_POST['action'] = "changeStatus";
                $controller->run();

                $controller = new BookController();
                $_POST['action'] = "removeBook";
                $controller->run();

                require __DIR__ . '/backend/view/userinfo.php';

                break;

            case 'bookDetails':
                require __DIR__ . '/backend/controller/BookController.php';

                $controller = new BookController();
                $_POST['action'] = "bookDetails";
                $details = $controller->getBookDetails();

                require __DIR__ . '/backend/controller/ReviewController.php';

                $controller = new ReviewController();
                $controller->postReview();

                $controller = new ReviewController();
                $review = $controller->getReviews();

                require __DIR__ . '/backend/view/bookDetails.php';

                break;

            case 'homepage':
                require __DIR__ . '/backend/controller/BookController.php';
                $controller = new BookController();

                if(!empty($_SESSION["username"])){
                    $_POST['action'] = "getRecommendedBooks";

                }
                else{
                    $_POST['action'] = "getAllBooks";
                }
                $controller->run();

                $controller = new BookController();
                $controller->addToList();

                break;
            case 'searchBook':
                require __DIR__ . '/backend/controller/BookController.php';
                $controller = new BookController();
                $controller->searchResult();
                break;
            case 'currentlyreading':
                require __DIR__ . '/backend/controller/BookController.php';
                $controller = new BookController();
                $_POST['action'] = "readingList";
                $controller->run();
                break;

            case 'finishedreading':
                require __DIR__ . '/backend/controller/BookController.php';
                $controller = new BookController();
                $_POST['action'] = "finishedList";
                $controller->run();
                break;
            case 'wanttoread':
                require __DIR__ . '/backend/controller/BookController.php';
                $controller = new BookController();
                $_POST['action'] = "wantToreadList";
                $controller->run();
                break;
            case 'booksJson':
                require __DIR__ . '/backend/controller/BookController.php';
                $controller = new BookController();
                $_POST['action'] = "getAllBooksJson";
                $controller->run();
                break;
            case 'usersJson':

                require __DIR__ . '/backend/controller/UserController.php';
                $controller = new UserController();
                $_POST['action'] = "getUsersJSON";
                $controller->run();
                break;


            default:
                echo '404 not found';
                http_response_code(404);
                break;
        }
    }
}
