<?php require __DIR__ . '/include/head.php'; ?>

<body  class="bodyMain">

<header>
    <?php require __DIR__ . '/include/navbar.php'; ?>
</header>


<div class="container login-form">

    <h2>Login</h2>

    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <a href="homepage"><button value="login" formaction="login" name="login" class="btn btn-primary btn_login" type="submit">LOGIN</button></a>

        <br><br>
        <p> Don't have an account yet ? <a href="signup">Sign up !</a> </p>

    </form>

</div>

</body>


</html>