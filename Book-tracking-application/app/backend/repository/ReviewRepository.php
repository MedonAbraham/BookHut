<?php

require_once __DIR__ . ('../../../db.php');
require_once __DIR__ . ('../../model/Review.php');


class ReviewRepository
{
    private DB $db;
    private $stmt;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    private string $create_review_sql = "insert into reviews (username, ISBN, rating, title, review) values (:username, :ISBN, :rating, :title, :review); SELECT LAST_INSERT_ID() as id";
    private string $get_Reviews_sql = "SELECT * from reviews WHERE ISBN=:ISBN";

    public function getReviews($ISBN){

        $this->stmt = $this->db->prepare($this->get_Reviews_sql);
        $this->stmt->execute(['ISBN' => $ISBN]);

        if ($this->stmt->rowCount() > 0) {
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return null;
        }


    }

    public function postReview($ISBN, $username)
    {
            $this->stmt = $this->db->prepare($this->create_review_sql);

            $this->stmt->bindParam(':username', $username);
            $this->stmt->bindParam(':ISBN', $ISBN);
            $this->stmt->bindParam(':rating', $_POST['review_rating']);
            $this->stmt->bindParam(':title', $_POST['review_title']);
            $this->stmt->bindParam(':review', $_POST['review_message']);

            return $this->stmt->execute();

    }



}