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
                    <a href="index.php">Portfolio</a> > Collision Demo
                </h3>
            </div>
            <div style="min-height:60%; max-width: 1400px; margin: 0 auto;">
                <div style="max-width: 1100px;margin: 0 auto;">
                    <a href='../Images/Portfolio/SoftBodyCollision/CollisionDemo.jpg'><img src="../Images/Portfolio/SoftBodyCollision/CollisionDemo.jpg" style="max-width: 600px;width:auto;height:auto;display:inline-block;vertical-align:top;margin-right:6%;"></a>
                    <div style="display:inline-block; width: 400px;">
                        <h3 class="photo-head">Collision Demo</h3>
                        <p class="photo-subhead">Technical specification:</p>
                        <p class="photo-subhead">- C++</p>
                        <p class="photo-subhead">- Microsoft Visual Studio 2010</p>
                        <p class="photo-subhead">- OpenGL 4.3</p>
                        <p class="photo-subhead">- 2D OBB Collision</p>
                        <p class="photo-subhead">- Separating Axis Theorem</p>
                    </div>
                </div>
                <div style="max-width: 1100px;margin: 0 auto; padding-top: 20px;">
                    <iframe width="600" height="315" src="https://www.youtube.com/embed/YaHH-6oeVIA" style="display:inline-block;vertical-align:top;margin-right:6%;">
                    </iframe>
                    <div style="display:inline-block; width: 400px;">
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">Produced for a "Programming for Graphics and Games" assignment in March 2015.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">For the assignment I aimed to create something similar to a car crash simulation. The maths that I used for determining collision was simple point intersection (using trigonometry) with OBB boxes. I also used separating axis theorem to determine if OBB boxes were overlapping.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">Results are somewhat funky because I don’t recurse down the colliding points neighbours with distance in mind.</p>
                    </div>
                </div>
            </div>
        </main>
        <?php echo $footer; ?>
    </body>
    
</html>