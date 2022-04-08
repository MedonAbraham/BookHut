<?php


require_once __DIR__ . ('../../model/Review.php');
require_once __DIR__ . ('../../repository/ReviewRepository.php');

class ReviewService
{

    private ReviewRepository $reviewRepository;


    public function __construct(){
        $this->reviewRepository = new reviewRepository();
    }

    public function getReviews($ISBN){
        return $this->reviewRepository->getReviews($ISBN);
    }

    public function postReview($ISBN, $username)
    {
        return $this->reviewRepository->postReview($ISBN, $username);
    }


}