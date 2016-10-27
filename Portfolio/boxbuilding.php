<?php include "../include.php" ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../Styles/StyleSheet.css"></link>
    </head>
    <body>
        <?php echo $portfolioheader; ?>
        <main >
            <div class='page-title' style="font-size:28px;">
                <h3>
                    <a href="index.php">Portfolio</a> > Box Building
                </h3>
            </div>
            <div style="min-height:60%; max-width: 1400px; margin: 0 auto;">
                <div style="max-width: 1100px;margin: 0 auto;">
                    <a href='../Images/Portfolio/BoxBuilding/boxbuildingimage3.jpg'><img src="../Images/Portfolio/BoxBuilding/boxbuildingimage3.jpg" style="max-width: 600px;width:auto;height:auto;display:inline-block;vertical-align:top;margin-right:6%;"></a>
                    <div style="display:inline-block; width: 400px;">
                        <h3 class="photo-head">Box Building</h3>
                        <p class="photo-subhead">Technical specification:</p>
                        <p class="photo-subhead">- C++</p>
                        <p class="photo-subhead">- Microsoft Visual Studio 2013</p>
                        <p class="photo-subhead">- OpenGL 4.3</p>
                        <p class="photo-subhead">- SDL (For window creation)</p>
                        <p class="photo-subhead">- GLM (OpenGL Maths Library)</p>
                    </div>
                </div>
                <div style="max-width: 1100px;margin: 0 auto; padding-top: 20px;">
                    <iframe width="600" height="315" src="https://www.youtube.com/embed/AiIbkQuzORI" style="display:inline-block;vertical-align:top;margin-right:6%;">
                    </iframe>
                    <div style="display:inline-block; width: 400px;">
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">A project using an iteration of my OpenGL Engine.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">This project uses ray casting from the camera, in the direction of the mouse. The program then checks to see where the camera-mouse ray intersects in the scene, allowing the user to create a box.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">I made this project to demonstrate and user test my OpenGL Engine project.</p>
                    </div>
                </div>
            </div>
        </main>
        <?php echo $footer; ?>
    </body>
    
</html>