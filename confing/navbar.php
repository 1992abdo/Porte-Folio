<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="Porte folio CHRAIHA Abdelati">
<meta name="keywords" content="Porte folio,HTML5,CSS3,BOOTSTRAP,ANIMATE,JAVASCRIPT,jQuery,WOW,PHP,">
<meta name="author" content="CHRAIHA Abdelati">
<title><?php if(isset($namePage)){echo $namePage;}?></title>
<link rel="icon" href="img/Portfolio-PNG.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- start link fontawsom -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
<link rel="stylesheet" href="../css/normalize.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/contact.css">
<link rel="stylesheet" href="../css/style.css">
<style>
* {
    font-family: 'Ubuntu Condensed', sans-serif;
}
</style>
</head>

<body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand animated wobble" href="../index.php"><img src="../img/Portfolio-PNG.png "
                    class="logo " alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link " href="../index.php">ABOUT ME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../index.php">SKILLS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">EXPIRENCE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">CONTACT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SIGN IN / SIGN UP
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="register.php">Register</a>
                            <a class="dropdown-item" href="log-in.php">Log in</a>
                            <a class="dropdown-item" href="logout-config.php">Log out</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="change-password.php">Change your password</a>
                        </div>
                    </li>
                    <!-- icon user -->
                    <li class="nav-item row ml-3">
                        <img class="col-sm-3" src="https://img.icons8.com/dusk/34/000000/admin-settings-male.png">
                        <div class="col-sm-8 pt-2 text-white">
                            <?php if(isset($_SESSION['login_user'])){echo $_SESSION['login_user'];}?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>