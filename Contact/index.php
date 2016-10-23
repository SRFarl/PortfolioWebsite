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
            <div style="min-height:30%;min-width: 600px;margin: 0 auto;padding-top: 0;text-align: center;">
                <div class="case-div">
                    <p class="photo-para" style="font-size: 22px;">Send me an e-mail at <a href='mailto:stepfarley@gmail.com'>stepfarley@gmail.com</a> or fill out the form below</p>
                    <script type="text/javascript" defer src="//www.123contactform.com/embed/2265675.js" data-role="form"></script>
                    <div style="padding-top:20px;width: 400px;margin: 0 auto;padding-bottom: 30px;">
                        <h3 class="photo-para" style="float:left;">Download my CV:</h3>
                        <a href='../Images/Contact/CV.docx'><img src='../Images/Contact/cvicon.JPG' style='max-width:80px;height:auto;border:0;padding-bottom: 30px;'></a>
                    </div>
                </div>
            </div>
        </main>
        <?php echo $footer; ?>
    </body>
    
</html>