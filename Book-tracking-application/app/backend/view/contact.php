<?php include __DIR__ . '/include/head.php'; ?>

<body class="bodyContact">

<header>
    <?php
    include __DIR__ . '/include/navbar.php';
    ?>
</header>

<section class="mb-4">
    <!--Section heading-->
    <h1 class="h1-responsive font-weight-bold text-center my-4">Contact us</h1>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a couple of days.</p>
</section>


<form method="post">

    <div style="margin-top: 1em;" class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="row contact-form">
                    <form class="row">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        <div class="col-12">
                            <label for="email_address" class="form-label">Email Address</label>
                            <input type="text" class="form-control" id="email_address" name="email_address">
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                        </div>
                        <div class="col-md-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea type="text" class="form-control" rows="4" id="message" name="message"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" value="contact" class="btn btn-primary">Submit</button>

                            <button type="submit" class="btn btn-outline-secondary">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</form>

</body>
</html>