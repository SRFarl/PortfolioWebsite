<?php include "include.php"; ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"></link>
    </head>
    <body>
        <?php echo $homeheader; ?>
        <main>
            <div class='page-title' style="padding-bottom: 0px;text-align: center;">
                <h3>
                    Recent Work
                </h3>
            </div>
            
            <div id='home-paragraph'>
            <div style="min-height:10%;min-width: 400px;margin: 0 auto;overflow:hidden;padding-top: 0;">
                <div class="case-image-div">
                    <a href='/Portfolio/boxbuilding.php'><img src='Images/Portfolio/BoxBuilding/boxbuildingimage1.jpg' style='width:100%;height:auto;border:0;'></a>
                </div>
            </div>
            </div>
            <div class="push"></div>
        </main>
        <?php echo $homefooter; ?>
    </body>
</html>


