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
            </div>
            <div style="min-height:80%;min-width: 700px; margin: 0 auto;overflow:hidden;padding-top: 0; margin-top:-45px;">
                <div class="case-image-div">
                    <ul class="case-image-list">
                    <div style='position: relative;width:50%;float:left;'>
                    <li>
                        <a href="apples_of_my_eye.php">
                            <img src='../Images/Woodcarvings/EW_apples_cover.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content"><span>Apples of my Eye</span></span>
                        </a> 
                    </li>
                    </div><div style='position: relative;width:50%;float:left;'>
                    <li>
                        <a href="off_the_port_of_le_harve.php">
                            <img src='../Images/Woodcarvings/EW_offthe_cover.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content"><span>Off the Port of Le Havre</span></span>
                        </a>
                    </li>
                    </div><div style='position: relative;width:50%;float:left;'>
                    <li>
                        <a href="petra_memories.php">
                            <img src='../Images/Woodcarvings/EW_petra_cover.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content"><span>Petra Memories</span></span>
                        </a>
                    </li>
                    </div><div style='position: relative;width:50%;float:left;'>
                    <li>
                        <a href="poppies.php">
                            <img src='../Images/Woodcarvings/EW_poppies_cover.jpg' style="width: 100%;height:auto;">
                            <span class="case-text-content"><span>Poppies</span></span>
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