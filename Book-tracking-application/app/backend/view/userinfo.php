<?php include __DIR__ . '/include/head.php'; ?>

<body>

<header>
    <?php
    include __DIR__ . '/include/navbar.php';
    ?>
</header>

<div class="container">
<div class="main-body">
    <?php

    foreach ($userDetails as $b){


    ?>


    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div class="mt-3">
                            <h4><?php echo $b["username"] ?></h4>
                            <form method="post">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <button class="btn btn-outline-danger " type="submit" id="deleteUser" formaction="deleteUser" name="deleteUser" value="deleteUser">Delete Account</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $b["first_name"] ?>,
                            <?php echo $b["last_name"] ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $b["email_address"] ?>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $b["username"] ?>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>

    <?php
    }
    ?>
</div>
</div>


<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                Currently Reading
            </div>

            <div class="card-body">

                <div class="list-group">
                    <form method="post">
                    <?php
                    if(!empty($listOfBooks->readingList)){
                        foreach($listOfBooks->readingList as $reading){
                    ?>
                    <div class="list-group-item">
                        <div class="pull-left"> <img alt="Book cover" style="margin-right: 12px;" width="50px" class="img-rounded img-responsive" src="../pictures/Covers/<?php echo $reading['ISBN']?>.jpg">
                            <p class="list-group-item-text"><?php echo $reading['title']?> <small>(<?php echo $reading['author']?>)</small></p>
                            <button type="submit" id="changeToFinished" name="changeToFinished" value="<?php echo $reading['ISBN']?>" formaction="userinfo" class="btn btn-sm btn-outline-dark" > Finished </button>
                            <button type="submit" id="changeToWant" name="changeToWant" value="<?php echo $reading['ISBN']?>" formaction="userinfo" class="btn btn-sm btn-outline-success" > Want to read </button>
                            <button type="submit" id="removeBook" name="removeBook" value="<?php echo $reading['ISBN']?>" formaction="userinfo" class="remove-book btn btn-sm btn-outline-danger"> X </button>

                        </div>

                        <br> <br>
                        <button type="submit" id="bookDetails" name="bookISBN" value="<?php echo $reading['ISBN']?>" formaction="bookDetails" class="btn btn-sm btn-link"> More Info > </button>


                    </div>

                    <?php
                        }
                    }
                    else{ ?>
                        <h6> No books added yet ! </h6>
                   <?php }?>

                    </form>


                </div>



            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                Finished Reading

            </div>
            <div class="card-body">
                <div class="list-group">
                    <form method="post">

                    <?php
                    if(!empty($listOfBooks->finishedList)){
                    foreach($listOfBooks->finishedList as $finished){
                    ?>
                        <div href="" class="list-group-item">


                        <div class="pull-left"> <img alt="Book cover" style="margin-right: 12px;" width="50px" class="img-rounded img-responsive" src="../pictures/Covers/<?php echo $finished['ISBN']?>.jpg">
                            <p class="list-group-item-text"><?php echo $finished['title']?><small>(<?php echo $finished['author']?>)</small></p>
                            <button type="submit" id="changeToReading" name="changeToReading" value="<?php echo $finished['ISBN']?>" formaction="userinfo" class="btn btn-sm btn-outline-primary" > Reading </button>
                            <button type="submit" id="changeToWant" name="changeToWant" value="<?php echo $finished['ISBN']?>" formaction="userinfo" class="btn btn-sm btn-outline-success" > Want to read </button>
                            <button type="submit" id="removeBook" name="removeBook" value="<?php echo $finished['ISBN']?>" formaction="userinfo" class="remove-book btn btn-sm btn-outline-danger"> X </button>
                        </div>

                        <br> <br>
                        <button type="submit" id="bookDetails" name="bookISBN" value="<?php echo $finished['ISBN']?>" formaction="bookDetails" class="btn btn-sm btn-link"> More Info > </button>


                    </div>

                    <?php
                        }
                    }
                    else{ ?>
                    <h6> No books added yet ! </h6>
                    <?php }?>

                    </form>


                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                Want to Read
            </div>
            <div class="card-body">
                <div class="list-group">
                    <form method="post">
                    <?php
                    if(!empty($listOfBooks->wantToreadList)){
                        foreach($listOfBooks->wantToreadList as $wanttoread){
                            ?>

                            <div href="" class="list-group-item">
                                <div class="pull-left"> <img alt="Book cover" style="margin-right: 12px;" width="50px" class="img-rounded img-responsive" src="../pictures/Covers/<?php echo $wanttoread['ISBN']?>.jpg">
                                    <p class="list-group-item-text"><?php echo $wanttoread['title']?><small>(<?php echo $wanttoread['author']?>)</small></p>

                                    <button type="submit" id="changeToReading" name="changeToReading" value="<?php echo $wanttoread['ISBN']?>" formaction="userinfo" class="btn btn-sm btn-outline-primary" > Reading </button>
                                    <button type="submit" id="changeToFinished" name="changeToFinished" value="<?php echo $wanttoread['ISBN']?>" formaction="userinfo" class="btn btn-sm btn-outline-dark" > Finished </button>

                                    <button type="submit" id="removeBook" name="removeBook" value="<?php echo $wanttoread['ISBN']?>" formaction="userinfo" class="remove-book btn btn-sm btn-outline-danger"> X </button>

                                </div>

                                <br> <br>

                                <button type="submit" id="bookDetails" name="bookISBN" value="<?php echo $wanttoread['ISBN']?>" formaction="bookDetails" class="btn btn-sm btn-link"> More Info >  </button>


                            </div>

                            <?php
                        }
                    }
                    else{ ?>
                        <h6> No books added yet ! </h6>
                    <?php }?>


                    </form>


                </div>

            </div>
        </div>
    </div>
</div>




</body>
</html>