<?php include "../include.php" ?>
<link rel='icon' type='image/jpg' href='../Images/favicon.jpg'>
<html>
    <head>
        <meta name="keywords" content="projects, view, programming, games, bournemouth, university, c++, graduate, portfolio">
        <meta name="description" content="An index for my portfolio pieces.">
        <title>Stephen Farley Portfolio - Portfolio</title>
        <link rel="stylesheet" type="text/css" href="../Styles/StyleSheet.css"></link>
    </head>
    <body>
        <?php echo $portfolioheader; ?>
        <main>
            <div class='page-title' style="min-width: 550px;">
                <h3>
                    Portfolio
                </h3>
            </div>
            <div style="min-width: 700px; margin: 0 auto;overflow:hidden;padding-top: 0; margin-top:-45px;">
                <div class="case-image-div">
                    <ul class="case-image-list">
                    <div style='position: relative;width:50%;float:left;overflow: hidden;'>
                    <li style="margin-bottom: 0;">
                        <a href="boxbuilding.php">
                            <img src='../Images/Portfolio/BoxBuilding/boxbuildingimagecover.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content" style="max-height: 453px; min-height: 174px; height: 100%"><span></span></span>
                        </a> 
                    </li>
                    </div>
                    <div style='position: relative;width:50%;float:left;overflow: hidden;'>
                    <li style="margin-bottom: 0;">
                        <a href="openglengine.php">
                            <img src='../Images/Portfolio/OpenGLEngine/openglenginecover.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content" style="max-height: 453px; min-height: 174px; height: 100%"><span></span></span>
                        </a>
                    </li>
                    </div>
                    <div style='position: relative;width:50%;float:left;overflow: hidden;'>
                    <li style="margin-bottom: 0;">
                        <a href="collisiondemo.php">
                            <img src='../Images/Portfolio/SoftBodyCollision/CollisionDemocover.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content" style="max-height: 453px; min-height: 174px; height: 100%"><span></span></span>
                        </a>
                    </li>
                    </div>
                    <div style='position: relative;width:50%;float:left;overflow: hidden;'>
                    <li style="margin-bottom: 0;">
                        <a href="seekandrun.php">
                            <img src='../Images/Portfolio/SeekAndRun/seekandruncover.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content" style="max-height: 453px; min-height: 174px; height: 100%"><span></span></span>
                        </a>
                    </li>
                    </div>
                    </ul>
                </div>
            </div>
        </main>
        <?php echo $footer; ?>
    </body>
    
</html>