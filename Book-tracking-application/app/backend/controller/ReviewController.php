<?php

require_once __DIR__ . ('../../service/ReviewService.php');

class ReviewController
{
    private ReviewService $service;

    public function __construct(){
        $this->service = new ReviewService();
    }

    public function postReview()
    {
        if(isset($_POST['postReview'])){
            $ISBN = $_POST['postReview'];
            $username = $_SESSION['username'];

            if($this->service->postReview($ISBN, $username)){
                header('Location: bookDetails');
                exit;
            }


        }

    }

    public function getReviews(){
        $ISBN = $_POST['bookISBN'];
        $reviews = $this->service->getReviews($ISBN);

        return $reviews;
    }




}