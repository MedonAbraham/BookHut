<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">BOOK HUT</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="homepage">Home</a>
                </li>

                <li class="nav-item">

                    <?php if(!empty($_SESSION["username"])) { ?>
                        <a class="nav-link active" href="userinfo">My Books</a>
                    <?php } ?>


                </li>


                <li class="nav-item">
                    <a class="nav-link active" href="contact">Contact</a>
                </li>
            </ul>

            <?php if(empty($_SESSION["username"])) { ?>

                <form class="d-flex">
                  <a href="login"> <button class="btn btn-outline-success" type="button"> LOG IN </button> </a>
                </form>

            <?php }
            else{ ?>

                <form class="d-flex">
                    <a class="nav-link active" aria-current="page" href="userinfo"> Welcome <?php echo $_SESSION["username"] ?> ! </a>
                    <a class="nav-link" aria-current="page" href="logout"> <button class="btn btn-outline-success" type="button">LOGOUT </button> </a>
                </form>

            <?php } ?>

        </div>
    </div>
</nav>
