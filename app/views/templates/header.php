<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stay Healthy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?= BASEURL; ?>/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASEURL; ?>/assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="<?= BASEURL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="<?= BASEURL; ?>/assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/custom.css">
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="<?= BASEURL; ?>">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">Stay</span> <span class="text-primary h4">Health</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?= BASEURL; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?= BASEURL; ?>/blog">Blog</a>
                        </li>
<!--                         <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?= BASEURL; ?>/article">Article</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?= BASEURL; ?>/contact">About</a>
                        </li>
                        <?php 
                        if(isset($_SESSION["login"])) : 
                            echo "
                        <li class='nav-item'>
                            <a class='nav-link btn-outline-primary rounded-pill px-3' href='". BASEURL ."/menu'>Menu</a>
                        </li>
                        <li class='nav-item'>
                                <a class='nav-link btn-outline-primary rounded-pill px-3' href='". BASEURL ."/signin/logout'>Logout</a>
                            </li>";
                        else :
                            echo "<li class='nav-item'>
                            <a class='nav-link btn-outline-primary rounded-pill px-3' href='" . BASEURL . "/signin'>Signin</a>
                        </li>";
                        endif; ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->