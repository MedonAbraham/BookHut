<?php include __DIR__ . '/include/head.php';

?>

<body class="bodyHomepage">

<header>
    <?php include __DIR__ . '/include/navbar.php'; ?>
</header>





<div class="row" id="details">
    <?php
    foreach ($details as $detail){

       $ISBN = $detail["ISBN"];
    ?>
       <h2 class="book_title"> <?php echo $detail["title"]?> </h2>
       <br><br>
    <div class="col-md-4">
        <div class="book-image">
            <img alt="Book cover" class="img-responsive img-rounded center-block" style="margin-bottom: 1.5em;" width="370" height="500" src="../pictures/Covers/<?php echo $detail["ISBN"]?>.jpg" >
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Book Description

            </div>
            <div class="card-body">
                <p> <?php echo $detail["description"]?> </p>
            </div>
        </div>

        <br> <br>

        <div class="card">
            <div class="card-header">
                Book Details
            </div>
            <div class="card-body">
                <p class="card-subtitle"><?php echo $detail["author"]?></p>
                <p class="card-subtitle"> <?php echo $detail["published_year"]?> | <?php echo $detail["language"]?> </p>
            </div>
        </div>

    </div>

    <?php
   }

    ?>
</div>





<div class="container-fluid">

    <div class="card">
        <div class="card-header">Reviews</div>

        <?php if(!empty($_SESSION["username"]))
        {
        ?>
        <form method="post">

        <div class="container review-form">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Comment as </label>
                <div class="col-sm-8">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION["username"] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="review_title" class="col-sm-2 col-form-label">Title : </label>
                <div class="col-sm-8">
                    <input type="text" name="review_title" class="form-control" id="review_title">
                </div>
            </div>
            <label for="review_ISBN"></label>
            <div class="mb-3 row">
                <label for="review_rating" class="col-sm-2 col-form-label">Rating : </label>
                <div class="col-sm-8">
                    <div class="review_rating">
                        <input type="radio" id="star5" name="review_rating" value="5" onclick="getRating();" /><label for="star5">5 stars</label>
                        <input type="radio" id="star4" name="review_rating" value="4" onclick="getRating();" /><label for="star4">4 stars</label>
                        <input type="radio" id="star3" name="review_rating" value="3" onclick="getRating();" /><label for="star3">3 stars</label>
                        <input type="radio" id="star2" name="review_rating" value="2" onclick="getRating();" /><label for="star2">2 stars</label>
                        <input type="radio" id="star1" name="review_rating" value="1" onclick="getRating();" /><label for="star1" >1 star</label>
                    </div>

                    <script src="../javascript/bookRating.js"></script>

                </div>
            </div>

            <div class="mb-3 row">
                <label for="review_message" class="col-sm-2 col-form-label">Review : </label>
                <div class="col-sm-8">
                    <textarea type="text" name="review_message" class="form-control" id="review_message"> </textarea>
                    <button type="submit" id="postReview" name="postReview" value="<?php echo $ISBN = $detail['ISBN'] ?>" formaction="homepage" class="btn btn-primary m-xxl-5">POST</button>

                </div>
            </div>

        </div>
        </form>

            <?php
        }
        ?>

        <div class="row">

            <?php

            if(!empty($review)){
                foreach ($review as $r){
            ?>
            <div class="col-lg-3 mb-5">
                <div class="card">
                    <div class="card-body review-card">
                        <h5 class="card-title"><?php echo $r['title']?> </h5>
                        <h6 class="card-subtitle mb-2 "> Rating: <?php echo $r['rating']?>/5 </h6>
                        <p class="card-text"><?php echo $r['review']?> </p>
                        <p class="card-footer">Posted by : <?php echo $r['username']?> </p>
                    </div>
                </div>
            </div>

            <?php }
            }
            else{?>
                <h6>This book doesn't have any reviews yet !</h6>

            <?php

            }?>

        </div>


    </div>

</div>





</body>

