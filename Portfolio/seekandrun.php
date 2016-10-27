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
                    <a href="index.php">Portfolio</a> > Seek & Run
                </h3>
            </div>
            <div style="min-height:60%; max-width: 1400px; margin: 0 auto;">
                <div style="max-width: 1100px;margin: 0 auto;">
                    <a href='../Images/Portfolio/SeekAndRun/seekandrun.jpg'><img src="../Images/Portfolio/SeekAndRun/seekandrun.jpg" style="max-width: 600px;width:auto;height:auto;display:inline-block;vertical-align:top;margin-right:6%;"></a>
                    <div style="display:inline-block; width: 400px;">
                        <h3 class="photo-head">Seek & Run</h3>
                        <p class="photo-subhead">Technical specification:</p>
                        <p class="photo-subhead">- C++</p>
                        <p class="photo-subhead">- Microsoft Visual Studio 2012</p>
                        <p class="photo-subhead">- Vector Mathematics</p>
                        <p class="photo-subhead">- SDL</p>
                    </div>
                </div>
                <div style="max-width: 1100px;margin: 0 auto; padding-top: 20px;">
                    <iframe width="600" height="315" src="https://www.youtube.com/embed/x_44mOPkbSI" style="display:inline-block;vertical-align:top;margin-right:6%;">
                    </iframe>
                    <div style="display:inline-block; width: 400px;">
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">Produced for a "AI Games" assignment in February 2015.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">This project uses vector mathematics to figure out the direction to run away and how close the two objects are.</p>
                        <p class="photo-subhead" style="font-size: 18px;text-align: justify;">The project uses sprite rendering in SDL to graphically show the mathematics in action.</p>
                    </div>
                </div>
            </div>
        </main>
        <?php echo $footer; ?>
    </body>
    
</html>