<?php
session_start();
include "../Header/header.php";
?>
<!-- Custom styles for this template -->
<link href="../css/home.css" rel="stylesheet">
</head>

<body>
    <noscript>
        <!-- anchor linking to external file -->
        <a href="https://www.mozilla.com/">Your Browser does not support JavasScript!</a>
    </noscript>

    <div class="logo">
        <img src="../img/logo.png" class="rounded mx-auto d-block logo-img" alt="Akomplice-logo">
    </div>
    <section class="centered-wrapper">
        <div class="login-component">
            <div>
                <form method="post" action="../LoginAuthentication/process.php">
                    <div class="form-group">
                        <h1 class="display-4 text-center">Akomplice</h1>
                        <label hidden for="userName">User Name</label>
                        <input type="text" class="form-control" id="userName" aria-describedby="userName" placeholder="User Name" name="username" required>
                    </div>
                    <div class="form-group">
                        <label hidden for="password" required>Password</label>
                        <input type="password" name="signupPass" class="form-control" id="exampleInputPassword1" placeholder="Password" requiered>
                    </div>
                    <button type="submit" name="login" class="btn btn-outline-primary btn-lg btn-block">Login</button>
                </form>
                <hr class="my-4">

                <?php

                if (isset($_SESSION["loginError"])) {
                    echo "<p class='text-danger text-center'>Username or password do not match.</p>";
                    unset($_SESSION["loginError"]);
                }

                ?>

                <a class="btn btn-link" href="../Registration/registration.php" role="button">Sign up</a>
                <span class="float-right"><a class="btn btn-link" href="../index.php" role="button">Home</a></span>
            </div>
        </div>
    </section>


    <?php
    include "./footer.php";
    ?>