<?php include "../include.php" ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../Styles/StyleSheet.css"></link>
    </head>
    <body>
        <?php echo $portfolioheader; ?>
        <main>
            <div class='page-title'>
                <h3>
                    Portfolio
                </h3>
            </div>
            <div style="min-height:60%;min-width: 700px; margin: 0 auto;overflow:hidden;padding-top: 0; margin-top:-45px;">
                <div class="case-image-div">
                    <ul class="case-image-list">
                    <div style='position: relative;width:50%;float:left;overflow: hidden;'>
                    <li style="margin-bottom: 0;">
                        <a href="boxbuilding.php">
                            <img src='../Images/Portfolio/BoxBuilding/boxbuildingimage3.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content" style="max-height: 453px; min-height: 174px; height: 100%"><span>Box Building</span></span>
                        </a> 

                    </li>
                    </div>
                    <div style='position: relative;width:50%;float:left;overflow: hidden;'>
                    <li style="margin-bottom: 0;">
                        <a href="openglengine.php">
                            <img src='../Images/Portfolio/OpenGLEngine/openglengine1.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content" style="max-height: 453px; min-height: 174px; height: 100%"><span>OpenGL Engine</span></span>
                        </a>
                    </li>
                    </div>
                    <div style='position: relative;width:50%;float:left;overflow: hidden;'>
                    <li style="margin-bottom: 0;">
                        <a href="collisiondemo.php">
                            <img src='../Images/Portfolio/SoftBodyCollision/CollisionDemo.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content" style="max-height: 453px; min-height: 174px; height: 100%"><span>Collision Demo</span></span>
                        </a>
                    </li>
                    </div>
                    <div style='position: relative;width:50%;float:left;overflow: hidden;'>
                    <li style="margin-bottom: 0;">
                        <a href="seekandrun.php">
                            <img src='../Images/Portfolio/SeekAndRun/seekandrun.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content" style="max-height: 453px; min-height: 174px; height: 100%"><span>Seek & Run</span></span>
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