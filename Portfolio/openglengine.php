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
                    <a href="index.php">Portfolio</a> > OpenGL Engine
                </h3>
            </div>
            <div style="min-height:60%; max-width: 1400px; margin: 0 auto;">
                <div style="max-width: 1100px;margin: 0 auto;">
                    <a href='../Images/Portfolio/OpenGLEngine/openglengine2.jpg'><img src="../Images/Portfolio/OpenGLEngine/openglengine2.jpg" style="max-width: 600px;width:auto;height:auto;display:inline-block;vertical-align:top;margin-right:6%;"></a>
                    <div style="display:inline-block; width: 400px;">
                        <h3 class="photo-head">OpenGL Engine</h3>
                        <p class="photo-subhead">Technical specification:</p>
                        <p class="photo-subhead">- C++</p>
                        <p class="photo-subhead">- Microsoft Visual Studio 2013</p>
                        <p class="photo-subhead">- OpenGL 4.3</p>
                        <p class="photo-subhead">- Entity Engine and Component Systems</p>
                        <p class="photo-subhead">- GLM (OpenGL Maths Library)</p>
                    </div>
                </div>
                <div style="max-width: 1100px;margin: 0 auto; padding-top: 20px;">
                    <a href='../Images/Portfolio/OpenGLEngine/openglengine1.jpg'><img src="../Images/Portfolio/OpenGLEngine/openglengine1.jpg" style="max-width: 600px;width:auto;height:auto;display:inline-block;vertical-align:top;margin-right:6%;"></a>
                    <div style="display:inline-block; width: 400px;">
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">A part time project to make an OpenGL based game engine.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">This project is under constant development in my spare time. Similar to Unity's component based systems, this project aims to produce the same technology but built in a C++ environment.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">Check out the recent developments of the project on my <a href='https://github.com/SRFarl/SRF-OGLengine' target='_blank'>GitHub</a>.</p>
                    </div>
                </div>
            </div>
        </main>
        <?php echo $footer; ?>
    </body>
    
</html>