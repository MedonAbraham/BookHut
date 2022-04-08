<?php include __DIR__ . '/include/head.php'; ?>

<body>


<header>
    <?php
    include __DIR__ . '/include/navbar.php';
    ?>
</header>


<br><br>

<div class="container">
    <div class="card">
        <h5 class="card-header"> <?php echo $listTitle ?> </h5>

        <?php
        if(!empty($list)){
        foreach($list as $book) { ?>
        <div class="list-group clearfix  list-box">
            <div class="row">
                <div class="col-3">
                    <img alt="Book cover" style="margin-right: 12px;" width="200px" class="img-rounded img-responsive" src="../pictures/Covers/<?php echo $book['ISBN']?>.jpg">
                </div>
                <div class="col-8">
                    <h4 class="list-group-item-heading"><div class="pull-left"></div><?php echo $book['title'] ?> <small>(<?php echo $book['author'] ?>)</small></h4>
                    <p class="max-lines"> <?php echo $book['description']?> </p>
                    <p class="list-group-item-text"><?php echo $book['published_year'] ?> | <?php echo $book['language'] ?> | <?php echo $book['genre'] ?><br /><br /></p>
                    <p class=" fst-italic"> ISBN: <?php echo $book['ISBN']?></p>

                    <form method="post">
                        <button type="submit" id="bookDetails" name="bookISBN" value="<?php echo $book['ISBN']?>" formaction="bookDetails" class="link-dark"> More Info  </button>
                    </form>

                </div>
            </div>

        </div>
        <?php }
        }
        else{ ?>
                <br><br>
            <h6> No books added yet ! </h6>
        <?php }?>

    </div>


</div>


</body>
</html>