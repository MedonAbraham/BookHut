<?php include __DIR__ . '/include/head.php';


?>

<body class="bodyHomepage">



<header>
    <?php
    include __DIR__ . '/include/navbar.php';
    ?>
</header>





<!--
<section class="py-3 text-center container-fluid bg-light">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">"User" book hut</h1>
            <p class="lead text-muted">Here you will find fresh articles, specially curated for you by our experts.</p>
        </div>
    </div>
</section>
-->

<!-- Search bar thing on the homepage -->

<div style="margin-top: 1em;" class="row">


    <div class="col-md-6 mx-auto">
        <div class="card">

            <div class="card-header">
                Search Book
            </div>
            <form method="post">
            <div class="card-body">
                <label for="bookTitle"></label><input type="text" id="bookTitle" name="bookTitle" placeholder="Find a book by title" class="form-control"/>
                <button type="submit" onclick="window.location.href='http://localhost/homepage/searchBook'"  value="searchBook" class="btn btn-outline-success">Search</button>

                <script src="../javascript/searchBook.js"></script>
            </div>
            </form>
        </div>
    </div>


    <?php

    if(!empty($_SESSION["username"])){
        ?>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Your book lists
            </div>
            <div class="card-body">
                <div class="list-group">
                    <a href="currentlyreading" class="list-group-item"> Currently reading > </a>
                    <a href="finishedreading" class="list-group-item"> Finished reading > </a>
                    <a href="wanttoread" class="list-group-item"> Want to read > </a>
                </div>
            </div>
        </div>
    </div>
    <?php  } ?>

    <div class="container-fluid" id="list-of-books">
        <div class="card">
            <div class="card-header"><?php echo $title ?></div>

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <?php

                if(!empty($result)){

                    foreach ($result as $detail){ ?>

                <div class="col-lg-4 mb-3">
                    <div class="card book-card ">
                        <img src="../pictures/Covers/<?php echo $detail->ISBN?>.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body-books">
                            <h5 class="card-title" id="bookTitle"> <?php echo $detail->title?></h5>
                            <p class="card-subtitle"> <?php echo $detail->author?></p>
                            <p class="card-subtitle">  <?php echo $detail->published_year?> | <?php echo $detail->language?> | <?php echo $detail->genre?>  </p>
                            <p class="card-subtitle"> ISBN: <?php echo $detail->ISBN?></p>
                            <form method="post">
                                <button type="submit" id="bookDetails" name="bookISBN" value="<?php echo $detail->ISBN?>" formaction="bookDetails" class="link-dark"> More Info  </button>
                            </form>


                            <br/>
                        </div>
                        <?php
                        if(!empty($_SESSION["username"])){
                        ?>

                        <form method="post">
                        <div class="card-footer">
                            <button type="submit" id="addToReading" name="addToReading" value="<?php echo $detail->ISBN?>" formaction="homepage" onclick="location.reload();" class="btn btn-outline-primary btn-sm">+ Reading</button>
                            <button type="submit" id="addToFinished" name="addToFinished" value="<?php echo $detail->ISBN?>" formaction="homepage" class="btn btn-outline-success btn-sm">Finished</button>
                            <button type="submit" id="addToWant" name="addToWant" value="<?php echo $detail->ISBN?>" formaction="homepage" class="btn btn-outline-secondary btn-sm">Want to read</button>
                        </div>

                        </form>
                            <?php } ?>
                    </div>

                </div>

                <?php
                        }
                    }
                else{
                    ?>
                <h6> More recommendations coming soon ! </h6>
                <?php
                }
                ?>

            </div>

        </div>

    </div>
</div>

</body>
</html>



