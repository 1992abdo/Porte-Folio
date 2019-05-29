<?php
// for the configuration the language
 include "lang/config.php";
session_start();
?>
<!DOCTYPE html>
<html manifest="cache.appcache">

<head>
    <!-- part the meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Porte folio CHRAIHA Abdelati">
    <meta name="keywords" content="Porte folio,HTML5,CSS3,BOOTSTRAP,ANIMATE,JAVASCRIPT,jQuery,WOW,PHP,">
    <meta name="author" content="CHRAIHA Abdelati">
    <link rel="canonical" href="https://youcode.ma/" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Porte folio CHRAIHA Abdelati" />
    <meta property="og:url" content="https://Portefolio.ma/" />
    <meta property="og:site_name" content="porte folio" />
    <meta property="og:image" content="img/Portfolio-PNG.png" />
    <meta property="og:image:secure_url" content="https://Portefolio.ma/img/Portfolio-PNG.png " />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="960" />
    <!-- fin parte the meta -->
    <title>Porte folio</title>
    <!-- icon the project -->
    <link rel="icon" href="img/Portfolio-PNG.png">
    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- start link fontawsom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CDN font family google -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <!-- =========================================================================
		  start navbar
	========================================================================= -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="header">
                <div class="progressContainer">
                    <div class="progressBar" id="myBar"></div>
                </div>
            </div>
            <div class="container">
                <a class="navbar-brand animated wobble" href="index.php"><img src="img/Portfolio-PNG.png " class="logo "
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="#about"><?php echo $lang["ABOUT_ME"];?><span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#skills"><?php echo $lang["SKILLS"];?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#expirence"><?php echo $lang["EXPIRENCE"];?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SIGN IN / SIGN UP
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="confing/register.php">Register</a>
                                <a class="dropdown-item" href="confing/log-in.php">Log in</a>
                                <a class="dropdown-item" href="confing/logout-config.php">Log out</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="confing/change-password.php">Change your password</a>
                            </div>
                        </li>
                        <!-- icon user and email -->
                        <li class="nav-item row ">
                            <img class="col-sm-3 d-none d-lg-block"
                                src="https://img.icons8.com/dusk/34/000000/admin-settings-male.png"
                                style="width:80%;height:80%">
                            <div class="col-sm-8 pt-2 text-white">
                                <?php if(isset($_SESSION['login_user'])){echo $_SESSION['login_user'];}?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- =========================================================================
		  start slider
	========================================================================= -->
        <div class="carousel-caption pb-5">
            <h1 class="text-white mb-5 pb-4 fontSize"><?php echo $lang["HI_I'M_CHRAIHA_Abdelati"];?></h1>
            <p class="text-white pb-4 fontSize2"><?php echo $lang["I'M A STUDENT"];?></p>
            <a class="popup-youtube btn btn-primary rounded-pill m-5" href="cv/cv.webm">
                <i class="far fa-play-circle "></i> <span
                    class="font-weight-bold"><?php echo $lang["Watch my CV Video"];?></span>
            </a>
        </div>
        <div class="bd-example color-carsoul z-index-slider">
            <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="overlay-color">
                    <!--class pour applique la color ovarly-->
                    <div class="carousel-inner  ">
                        <div class="carousel-item active ">
                            <img src="img/Web-Developpement.jpg" alt="Web-Developpement" title="Web-Developpement"
                                class="d-block w-100 height-slide color-carsoul" alt="...">
                        </div>
                        <div class="carousel-item" id="overlay">
                            <img src="img/work.png" alt="Work" title="Work" class="d-block w-100 height-slide"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Développement-personnel.jpg" alt="Développement-personnel"
                                title="Développement-personnel" class="d-block w-100 height-slide" alt="...">
                        </div>
                    </div>
                    <span class="overlay"></span>
                    <!--fin de la color ovarly-->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- fin slider  -->
    </header>
    <!-- =========================================================================
		  start personnel information
	========================================================================= -->
    <section class="container-fluid bg-light text-secondary" id="about">
        <div class="row p-5  ">
            <div class="col-sm-3 ">
                <img src="img/Capture.png" class=" img-thumbnail mt-5  wow bounceInLeft" alt="Photo-CHRAIHA">
            </div>
            <div class="col-sm-9">
                <h1 class="text-primary wow bounceInLeft "><?php echo $lang["ABOUT_ME"];?></h1>
                <p class="text-justify wow bounceInRight pl-5"><?php echo $lang["ABOUT_ME_1"];?></p>
                <h1 class="text-primary wow bounceInLeft "><?php echo $lang["PERSONAL_INFORMATION"];?></h1>
                <div class="row px-5  wow bounceInRight">
                    <div class="col mr-5">
                        <p class="border-bottom"><?php echo $lang["First_and_last_name"];?> : CHRAIHA Abdelati</p>
                        <p class="border-bottom"><?php echo $lang["Age"];?></p>
                        <p class="border-bottom"><?php echo $lang["Phone"];?> : 06 55 60 92 87</p>
                        <p class="border-bottom">Email : Chraiha1abdelati@gmail.com</p>
                        <p class="border-bottom"><?php echo $lang["Address"];?></p>
                    </div>
                    <div class="col pl-2">
                        <a href="cv/cv.pdf" class="btn btn-primary mt-5 ml-5" download><i
                                class="fas fa-file-download "></i><?php echo $lang["My_CV_PDF"];?> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================================================================
		  start skills
	========================================================================= -->
    <section class="container text-secondary py-5" id="skills">
        <h1 class="font-weight-bold text-primary "><?php echo $lang["SKILLS"];?></h1>
        <p class="text-justify"><?php echo $lang["SKILLS1"];?></p>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h5>HTML5</h5>
                    <div class="progress my-2 border border-secondary" style="height: 15px;">
                        <div class="progress-bar " role="progressbar" style="width: 90%" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100">90%
                        </div>
                    </div>
                    <h5>CSS3</h5>
                    <div class="progress my-2 border border-secondary " style="height: 15px;">
                        <div class="progress-bar " role="progressbar" style="width: 70%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">70%
                        </div>
                    </div>
                    <h5>BOOTSTRAP</h5>
                    <div class="progress my-2 border border-secondary" style="height: 15px;">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">80%
                        </div>
                    </div>
                    <h5>JAVASCRIPT(DOM,JQUERY)</h5>
                    <div class="progress my-2 border border-secondary " style="height: 15px;">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">60%
                        </div>
                    </div>
                    <h5>PHP</h5>
                    <div class="progress my-2 border border-secondary " style="height: 15px;">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">50%
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <h5>SCRUM/TRELLO</h5>
                    <div class="progress my-2 border border-secondary " style="height: 15px;">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">70%
                        </div>
                    </div>
                    <h5>SQL</h5>
                    <div class="progress my-2 border border-secondary " style="height: 15px;">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">85%
                        </div>
                    </div>
                    <h5>LINUX</h5>
                    <div class="progress my-2 border border-secondary " style="height: 15px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">55%
                        </div>
                    </div>

                    <h5>PHOTOSHOP</h5>
                    <div class="progress my-2 border border-secondary " style="height: 15px;">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">60%
                        </div>
                    </div>
                    <h5>CATIA V5</h5>
                    <div class="progress my-2 border border-secondary " style="height: 15px;">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">50%
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- fin skills -->
    <!-- =========================================================================
      start part experince
	========================================================================= -->
    <section class="container-fluid bg-secondary text-secondary py-5 " id="expirence">
        <div class="text-white ">
            <h1 class="wow swing font-weight-bold mx-5"><?php echo $lang["EXPERINCE2"];?></h1>
            <P class="text-justify mx-5"><?php echo $lang["EXPERINCE1"];?> </P>
        </div>
        <div class="row ">
            <div class="col-sm-12 ">
                <!-- data-interval the time of move the carousel -->
                <div id="inam" class="carousel slide " data-ride="carousel" data-interval="20000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4  mb-2">
                                        <div class="card mx-auto" style="width:250px; height:420px;">
                                            <img src="img/experince/sitweb-youcode.png" alt="Web site Youcode"
                                                title="Web site Youcode" class="card-img-top">
                                            <div class="card-body">
                                                <h4 class="card-title">Site Web</h4>
                                                <p class="card-text text-justify"><?php echo $lang["Site_Web"];?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4  mb-2 ">
                                        <div class="card mx-auto" style="width:250px; height:420px;">
                                            <img src="img/experince/hackaton.png" alt="Hackaton save life"
                                                title="Hackaton save life" class="card-img-top">
                                            <div class="card-body">
                                                <h4 class="card-title">Hackathon </h4>
                                                <p class="card-text text-justify"><?php echo $lang["Hackathon"];?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 mb-2 mx-auto">
                                        <div class="card mx-auto" style="width:250px; height:420px;">
                                            <img src="img/experince/Logo.png" alt="Application E-pocket"
                                                title="Application E-pocket" class="card-img-top">
                                            <div class="card-body">
                                                <h4 class="card-title">E-Pocket</h4>
                                                <p class="card-text text-justify"><?php echo $lang["E-Pocket"];?></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- fin carsoul 1 -->
                        <!-- start casoul 2 -->
                        <div class="carousel-item ">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4  mb-2 ">
                                        <div class="card mx-auto" style="width:250px; height:420px;">
                                            <img src="img/experince/logo-dalaa.png" alt="Experince Dalaa"
                                                title="Experince Dalaa" class="card-img-top">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $lang["Company Dalaa"];?></h4>
                                                <p class="card-text text-justify"><?php echo $lang["Company Dalaa1"];?>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 mb-2">
                                        <div class="card mx-auto" style="width:250px; height:420px;">
                                            <img src="img/experince/sidi-ali.jpg" alt="experince Sidi Ali"
                                                title="Experince Sidi Ali" class="card-img-top">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $lang["Company"];?> Sidi Ali</h4>
                                                <p class="card-text text-justify"><?php echo $lang["Company1"];?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4  mb-2 mx-auto">
                                        <div class="card mx-auto" style="width:250px; height:420px;">
                                            <img src="img/experince/scrum-blog.png" alt="Métode Scrum"
                                                title="Métode Scrum" class="card-img-top">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $lang["Methodologie"];?> Agile (Scrum)
                                                </h4>
                                                <p class="card-text text-justify"><?php echo $lang["Methodologie1"];?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#inam" class="carousel-control-prev my-auto bg-primary car-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#inam" class="carousel-control-next  my-auto bg-primary car-next" data-slide="next">
                        <span class="carousel-control-next-icon"> </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- fin carsoul 2 -->
    <!-- =========================================================================
		Porte folio
	========================================================================= -->
    <span id="portfolio"></span>
    <article class="container text-secondary">
        <h1 class="mt-5 mb-2  ml-2 text-primary">PORTFOLIO</h1>
        <?php
		$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName="abdo";//name of database
    $conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
    $sql = "SELECT  description, photo,lienGithub,id FROM portefolio";
    $result = $conn->query($sql);
       if ($result->num_rows > 0) {?>
        <div class='row'>
            <?php
            while($row = $result->fetch_assoc()) {?>
            <div class="col-sm-12 col-lg-4 mb-4  ">
                <div class="cont">
                    <a href="<?php	echo $row['lienGithub'] ;?>" target="_blank">
                        <img src="<?php	echo 'img/portfolio/' . $row['photo']; ?>"
                            class="img-thumbnail wow jackInTheBox  " alt="img" title="CSS3">
                        <div class="over">
                            <div class="text">
                                <?php	echo $row["description"]; ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php
            }?>
        </div>
        <?php
      } else {
          echo "0 results";
      }
          $result->close();
    } //end if
    ?>
        <!-- =========================================================================
		Contact Form
	========================================================================= -->
        <span id="contact"></span>
        <div class="contact-form">
            <h1><?php echo $lang["Contact me"];?></h1>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <!-- start parte map -->
                    <script
                        src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBOGZjxtTCm6KEP38Km8_trf6COhK7jcww'>
                    </script>
                    <div style='overflow:hidden;height:403px;width:100%;'>
                        <div id='gmap_canvas' style='height:403px;width:100%;'></div>
                        <style>
                        #gmap_canvas img {
                            max-width: none !important;
                            background: none !important
                        }
                        </style>
                    </div> <a href='http://maps-generator.com/fr'>http://Maps-Generator.com</a>
                    <script type='text/javascript'
                        src='https://embedmaps.com/google-maps-authorization/script.js?id=ae5b07f9923eb4d030c0c6210612c62c25a03543'>
                    </script>
                    <script type='text/javascript'>
                    function init_map() {
                        var myOptions = {
                            zoom: 12,
                            center: new google.maps.LatLng(32.25001408569209, -8.522840778740942),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(32.25001408569209, -8.522840778740942)
                        });
                        infowindow = new google.maps.InfoWindow({
                            content: '<strong>Youssoufia</strong><br>Qu el Amal Rue Darsa N 03<br>46300 Youssoufia<br>'
                        });
                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.open(map, marker);
                        });
                        infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                    <!-- end parte map -->
                </div>
                <div class="col-sm-12 col-lg-6">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                        <div class="form-group">
                            <label><?php echo $lang["Name"];?></label>
                            <input type="text" class="form-control" name="name"
                                placeholder="<?php echo $lang["Write your Name"];?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email"
                                placeholder="<?php echo $lang["Write your Email"];?>">
                        </div>
                        <div class="form-group">
                            <label>Massage</label>
                            <textarea class="form-control" rows="7" name="textarea"
                                placeholder="<?php echo $lang["Write your message"];?>"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-block" type="submit" value="<?php echo $lang["send"];?>">
                        </div>
                    </form>
                    <!-- =========================================================================
           script send email
         	========================================================================= -->
                    <?php
           
            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              $Name = test_input($_POST["name"]); 
              $email = test_input($_POST["email"]);
              $text = test_input($_POST["textarea"]);
              $emailto = "chraiha1abdelati@gmail.com";           
              if((!filter_var($Name, FILTER_SANITIZE_STRING)===false) and (!filter_var($email, FILTER_SANITIZE_EMAIL)===false)){               
                  mail($emailto,$Name,"From : ". $email." message : ".$text);
                  echo "<script> alert(\"Your message was sent\")</script>";
                }else{
                  echo "<script> alert(\"Your message was not sent\")</script>";
                }
            }
            ?>
                    <!-- fin script send email -->
                </div>
            </div>
        </div>
    </article>
    <!-- button change langue -->
    <a href="index.php?language=fr" class="language fixed-bottom m-3"><img
            src="https://img.icons8.com/color/32/000000/france.png"></a>
    <a href="index.php?language=en" class="language fixed-bottom ml-3 mb-5 "><img
            src="https://img.icons8.com/color/32/000000/great-britain.png"></a>

    <?php include "footer.php"; ?>

    <!-- Start button scroll to top when arrow up clicked BEGIN -->
    <a id="back2Top" title="Back to top" href="#"><i class="fas fa-angle-double-up"></i></a>
    <!-- bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- fin bootstrap script -->
    <!-- script animation -->
    <script src="js/wow.min.js"></script>
    <!-- fin script animation -->
    <!-- script for slow the scroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- fin script for slow the scroll -->
    <script>
    new WOW().init();
    </script>
    <!-- start script progress bar on scroll -->
    <script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {
        myFunction()
    };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
    </script>
    <!-- fin script progress bare on scroll -->
    <script src="js/all.js"></script>
    <!-- script to verified the speed of the page from google -->
    <script>
    // function run() {
    //     const url = setUpQuery();
    //     fetch(url)
    //         .then(response => response.json())
    //         .then(json => {
    //             // See https://developers.google.com/speed/docs/insights/v5/reference/pagespeedapi/runpagespeed#response
    //             // to learn more about each of the properties in the response object.
    //             showInitialContent(json.id);
    //             const cruxMetrics = {
    //                 "First Contentful Paint": json.loadingExperience.metrics.FIRST_CONTENTFUL_PAINT_MS.category,
    //                 "First Input Delay": json.loadingExperience.metrics.FIRST_INPUT_DELAY_MS.category
    //             };
    //             showCruxContent(cruxMetrics);
    //             const lighthouse = json.lighthouseResult;
    //             const lighthouseMetrics = {
    //                 'First Contentful Paint': lighthouse.audits['first-contentful-paint'].displayValue,
    //                 'Speed Index': lighthouse.audits['speed-index'].displayValue,
    //                 'Time To Interactive': lighthouse.audits['interactive'].displayValue,
    //                 'First Meaningful Paint': lighthouse.audits['first-meaningful-paint'].displayValue,
    //                 'First CPU Idle': lighthouse.audits['first-cpu-idle'].displayValue,
    //                 'Estimated Input Latency': lighthouse.audits['estimated-input-latency'].displayValue
    //             };
    //             showLighthouseContent(lighthouseMetrics);
    //         });
    // }

    // function setUpQuery() {
    //     const api = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed';
    //     const parameters = {
    //         url: encodeURIComponent('https://developers.google.com')
    //     };
    //     let query = `${api}?`;
    //     for (key in parameters) {
    //         query += `${key}=${parameters[key]}`;
    //     }
    //     return query;
    // }

    // function showInitialContent(id) {
    //     document.body.innerHTML = '';
    //     const title = document.createElement('h1');
    //     title.textContent = 'PageSpeed Insights API Demo';
    //     document.body.appendChild(title);
    //     const page = document.createElement('p');
    //     page.textContent = `Page tested: ${id}`;
    //     document.body.appendChild(page);
    // }

    // function showCruxContent(cruxMetrics) {
    //     const cruxHeader = document.createElement('h2');
    //     cruxHeader.textContent = "Chrome User Experience Report Results";
    //     document.body.appendChild(cruxHeader);
    //     for (key in cruxMetrics) {
    //         const p = document.createElement('p');
    //         p.textContent = `${key}: ${cruxMetrics[key]}`;
    //         document.body.appendChild(p);
    //     }
    // }

    // function showLighthouseContent(lighthouseMetrics) {
    //     const lighthouseHeader = document.createElement('h2');
    //     lighthouseHeader.textContent = "Lighthouse Results";
    //     document.body.appendChild(lighthouseHeader);
    //     for (key in lighthouseMetrics) {
    //         const p = document.createElement('p');
    //         p.textContent = `${key}: ${lighthouseMetrics[key]}`;
    //         document.body.appendChild(p);
    //     }
    // }

    // run();
    </script>
</body>

</html>