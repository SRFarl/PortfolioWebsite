<?php include "../../include.php" ?>
<link rel='icon' type='image/jpg' href='../../Images/favicon.jpg'>
<html>
    <head>
        <meta name="keywords" content="collision, soft, deform, deformable, 3d, opengl, programming, games, bournemouth, university, c++, graduate, portfolio">
        <meta name="description" content="A collision demo made in OpenGL.">
        <title>Stephen Farley Portfolio - Collision Demo</title>
        <link rel="stylesheet" type="text/css" href="../../Styles/StyleSheet.css"></link>
    </head>
    <body>
        <?php echo $subportfolioheader; ?>
        <main >
            <div class='page-title' style="font-size:28px;">
                <a href='../openglengine/'><span style='height:auto;border:0;float:left;padding-top:40px;'> &larr;Previous</span></a>
                <a href='../seekandrun/'><span style='height:auto;border:0;float:right;padding-top:40px;'> Next&rarr;</span></a>
                <h3>
                    <a href="../">Portfolio</a> > Deformation Demo
                </h3>
            </div>
            <div style="min-height:60%; max-width: 1400px; margin: 0 auto;">
                <div style="max-width: 1100px;margin: 0 auto;">
                    <a href='../../Images/Portfolio/SoftBodyCollision/CollisionDemo.jpg'><img src="../../Images/Portfolio/SoftBodyCollision/CollisionDemo.jpg" style="max-width: 600px;width:auto;height:auto;display:inline-block;vertical-align:top;margin-right:6%;"></a>
                    <div style="display:inline-block; width: 400px;">
                        <h3 class="photo-head">Deformation Demo</h3>
                        <p class="photo-subhead">Technical specification:</p>
                        <p class="photo-subhead">- C++</p>
                        <p class="photo-subhead">- Microsoft Visual Studio 2010</p>
                        <p class="photo-subhead">- OpenGL 4.3</p>
                        <p class="photo-subhead">- 2D OBB Collision</p>
                        <p class="photo-subhead">- Separating Axis Theorem</p>
                    </div>
                </div>
                <div style="max-width: 1100px;margin: 0 auto; padding-top: 20px;">
                    <iframe width="600" height="315" src="https://www.youtube.com/embed/SG12nzn4TUs" style="display:inline-block;vertical-align:top;margin-right:6%;">
                    </iframe>
                    <div style="display:inline-block; width: 400px;">
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">Produced for a "Programming for Graphics and Games" assignment in my second year of university.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">For the assignment I aimed to create something similar to a car crash simulation. The maths that I used for determining collision was simple point intersection (using trigonometry) with OBB boxes. I also used separating axis theorem to determine if OBB boxes were overlapping.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">Deformation results are inaccurate because I don’t recurse down the colliding points neighbours with distance in mind.</p>
                    </div>
                </div>
            </div>
        </main>
        <?php echo $subportfoliofooter; ?>
    </body>
    
</html>