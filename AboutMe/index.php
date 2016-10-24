<?php include "../include.php" ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../Styles/StyleSheet.css"></link>
    </head>
    <body>
        <?php echo $aboutmeheader; ?>
        <main >
            <div class='page-title'>
                <h3>
                    About Me
                </h3>
            </div>
            <div style="min-height:30%;min-width: 600px;margin: 0 auto;padding-top: 0;text-align: center;">
                <div class="case-div">
                    <div style="width:700px;margin: 0 auto;padding-bottom: 40px;">
                        <img src="../Images/AboutMe/self.jpg" style="max-width: 280px;width:100%;height:auto;display:inline-block;vertical-align:top;float:left;padding-right: 15px">
                        <p class="photo-para" style="font-size: 18px;text-align: justify;">
                            I am currently a student at Bournemouth University studying Games Programming (Bsc). I first knew that I wanted to join the games industry when I was 16, making 3D models for a free to play game online. Studying at University opened my eyes to what I truly enjoy and love, software development and engineering. For me, It’s not just about the programming but about all processes of design and development.
                        </p>
                        
                        <p class="photo-para" style="font-size: 18px;text-align: justify;">
                           Between June 2015 and June 2016 I worked at IBM Hursley as a Software Engineer placement student. I loved working at IBM and learnt a huge amount about how development teams work and what it’s like to work full time as a developer. 
                        </p>
                        
                        <p class="photo-para" style="font-size: 18px;text-align: justify;">
                            Please check out my GitHub and LinkedIn by following the links on the bottom of the page and get in contact with me.
                        </p>
                        
                        <p class="photo-para" style="font-size: 18px;font-weight: 600;text-align: justify;">
                             I’m currently looking for graduate jobs and opportunities for when I graduate in June 2017.
                        </p>
                    </div>
                    
                    <div style="padding-top:20px;width: 400px;margin: 0 auto;padding-bottom: 20px;">
                        <h3 class="photo-para" style="float:left;">Download my CV:</h3>
                        <a href='../Images/Contact/CV.docx'><img src='../Images/Contact/cvicon.JPG' style='max-width:80px;height:auto;border:0;padding-bottom: 30px;'></a>
                    </div>
                </div>
            </div>
        </main>
        <?php echo $footer; ?>
    </body>
    
</html>