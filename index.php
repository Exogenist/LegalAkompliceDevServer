<?php
include "./Header/header.php";
?>

<!-- Custom styles  -->
<link rel="stylesheet" href="./css/home.css">

</head>

<body>
    <noscript>
        <!-- anchor linking to external file -->
        <a href="https://www.mozilla.com/">Your Browser does not support JavasScript!</a>
    </noscript>

    <main role="main">
        <div class="logo">
            <img src="./img/logo.png" class="rounded mx-auto d-block logo-img" alt="Akomplice-logo">
        </div>
        <section class="centered-wrapper">
            <?php
            include "./Landing/landing.php";
            ?>
        </section>

    </main>



    <?php
    include "./Footer/footer.php";
    ?>