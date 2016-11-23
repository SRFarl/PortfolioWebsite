<?php include "include.php"; ?>
<link rel='icon' type='image/jpg' href='Images/favicon.jpg'>
<html>
    <head>
        <meta name="keywords" content="programming, games, bournemouth, university, homepage, home, c++, graduate, portfolio">
        <meta name="description" content="Stephen Farley Portfolio Homepage - C++ programmer and Bournemouth Univeristy.">
        <title>Stephen Farley Portfolio - Home</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php echo $homeheader; ?>
        <main>
            <div class='page-title' style="padding-bottom: 0px;text-align: center;">
                <h3>
                    Welcome
                </h3>
                <p style='font-size: 22px;margin-top: 0;'>
                    to the portfolio of Stephen Farley, programmer
                </p>
            </div>
            
            <div id='home-paragraph'>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="min-height:10%;min-width: 400px;margin: 0 auto;overflow:hidden;padding-top: 0;position: relative;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style='width: auto'>
                <div class="item active">
                    <a href="Portfolio/boxbuilding/"><img src="Images/Portfolio/BoxBuilding/boxbuildingimage1.jpg" alt="OpenGL Boxbuilding"></a>
                </div>

                <div class="item">
                    <a href="portfolio/openglengine/"><img src="Images/Portfolio/OpenGLEngine/openglenginefp.jpg" alt="OpenGL Entity Engine"></a>
                </div>

                <div class="item">
                    <a href="portfolio/deformationdemo/"><img src="Images/Portfolio/SoftBodyCollision/CollisionDemo1.jpg" alt="Deformation Demo"></a>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            </div>
            <div class="push"></div>
        </main>
        <?php echo $homefooter; ?>
    </body>
</html>


