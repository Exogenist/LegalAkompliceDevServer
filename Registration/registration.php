<?php
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
                        <input type="text" class="form-control" id="userName" aria-describedby="userName" placeholder="User Name" name="username">
                    </div>
                    <div class="form-group">
                        <label hidden for="signupEmail">Email</label>
                        <input type="email" class="form-control" id="signupEmail" aria-describedby="signupEmail" placeholder="Email" name="signupEmail">
                    </div>
                    <div class="form-group">
                        <label hidden for="signupPass" required>Password</label>
                        <input type="password" name="signupPass" class="form-control" id="signupPass" placeholder="Password" required>
                    </div>
                    <button type="submit" name="signup" class="btn btn-outline-primary btn-lg btn-block">sign up</button>
                    <hr class="my-4">
                    <a class="btn btn-link" href="../LoginAuthentication/login.php" role="button">Login</a> 
                <span class="float-right"><a class="btn btn-link" href="../index.php" role="button">Home</a></span>
                </form>
            </div>
        </div>
    </section>

<?php
include "../Footer/footer.php";
?>