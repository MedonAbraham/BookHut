<?php include __DIR__ . '/include/head.php'; ?>

<body class="bodyMain">

<header>
    <?php
    include __DIR__ . '/include/navbar.php';
    ?>
</header>


<form method="post">

    <div class="container signup-form">
        <div class="indexSignup">
            <div class="h2">Sign up</div>
        </div>

        <div class="signUpBox">
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>

            <div class="mb-3">
                <label for="email_address" class="form-label">Email</label>
                <input type="text" class="form-control" id="email_address" name="email_address">
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button class="btn btn-primary" type="submit" value="signUp">SIGN UP</button>
            <button type="submit" class="btn btn-outline-warning">Clear</button>

            <br><br>
            <p> Already have an account? <a href="login"> Login </a> </p>


        </div>

    </div>

</form>
</body>

</html>

