<?php include "../include.php" ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../Styles/StyleSheet.css"></link>
    </head>
    <body>
        <?php echo $contactheader; ?>
        <main >
            <div class='page-title'>
                <h3>
                    Contact
                </h3>
            </div>
            <div style="min-height:30%;min-width: 600px;margin: 0 auto;padding-top: 0;text-align: center;padding-bottom: 20px;">
                <div class="case-div">
                    <p class="photo-para" style="font-size: 22px;">Send me an e-mail at <a href='mailto:stepfarley@gmail.com'>stepfarley@gmail.com</a> or fill out the form below</p>
                    <script type="text/javascript" defer src="//www.123contactform.com/embed/2265675.js" data-role="form"></script> 
                </div>
            </div>
        </main>
        <?php echo $footer; ?>
    </body>
    
</html>