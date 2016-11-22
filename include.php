
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86199921-1', 'auto');
  ga('send', 'pageview');

</script>

<?php
$portfolioheader = "
<script type='text/javascript'>
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>    
<header>
    <div class='nav-container' >
        <a href='../index.php'>
        <img src='../Images/Logo.png' style='width:240px;height:auto;padding-left:35px;padding-top:10px;border:0;'>
        </a>
        <ul>  
            <li style='float: right;'><a href='../Contact/index.php'>Contact</a></li>
            <li style='float: right;'><a href='../AboutMe/index.php'>About Me</a></li>
            <li style='float: right;'><a href='../Portfolio/index.php' style='color:#352b28;'>Portfolio</a></li>
            <li style='float: right;'><a href='../index.php'>Home</a></li>
        </ul>
        <div class='zilla-mobile-menu-wrap'><a class='zilla-mobile-menu-dropdown' href='#' onclick=\"toggle_visibility('primary-menu');\">Menu</a>
                <ul id='primary-menu' class='zilla-mobile-menu'  style='padding-top:10px;'>
                    <li><a href='../index.php'>Home</a></li>
                    <li><a href='../Portfolio/index.php'style='color:#352b28;'>Portfolio</a></li>
                    <li><a href='../AboutMe/index.php'>About Me</a></li>
                    <li><a href='../Contact/index.php'>Contact</a></li>
                </ul>
        </div>
    </div>
</header>";

$aboutmeheader = "
<script type='text/javascript'>
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
<header>
    <div class='nav-container' >
        <a href='../index.php'>
        <img src='../Images/Logo.png' style='width:240px;height:auto;padding-left:35px;padding-top:10px;border:0;'>
        </a>
        <ul>  
            <li style='float: right;'><a href='../Contact/index.php'>Contact</a></li>
            <li style='float: right;'><a href='../AboutMe/index.php' style='color:#352b28;'>About Me</a></li>
            <li style='float: right;'><a href='../Portfolio/index.php'>Portfolio</a></li>
            <li style='float: right;'><a href='../index.php'>Home</a></li>
        </ul>
        <div class='zilla-mobile-menu-wrap'><a class='zilla-mobile-menu-dropdown' href='#' onclick=\"toggle_visibility('primary-menu');\">Menu</a>
                <ul id='primary-menu' class='zilla-mobile-menu'  style='padding-top:10px;'>
                    <li><a href='../index.php'>Home</a></li>
                    <li><a href='../Portfolio/index.php'>Portfolio</a></li>
                    <li><a href='../AboutMe/index.php'style='color:#352b28;'>About Me</a></li>
                    <li><a href='../Contact/index.php'>Contact</a></li>
                </ul>
        </div>
    </div>
</header>";

$contactheader = "
<script type='text/javascript'>
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
<header>
    <div class='nav-container' >
        <a href='../index.php'>
        <img src='../Images/Logo.png' style='width:240px;height:auto;padding-left:35px;padding-top:10px;border:0;'>
        </a>
        <ul>  
            <li style='float: right;'><a href='../Contact/index.php' style='color:#352b28;'>Contact</a></li>
            <li style='float: right;'><a href='../AboutMe/index.php'>About Me</a></li>
            <li style='float: right;'><a href='../Portfolio/index.php'>Portfolio</a></li>
            <li style='float: right;'><a href='../index.php'>Home</a></li>
        </ul>
        <div class='zilla-mobile-menu-wrap'><a class='zilla-mobile-menu-dropdown' href='#' onclick=\"toggle_visibility('primary-menu');\">Menu</a>
                <ul id='primary-menu' class='zilla-mobile-menu'  style='padding-top:10px;'>
                    <li><a href='../index.php'>Home</a></li>
                    <li><a href='../Portfolio/index.php'>Portfolio</a></li>
                    <li><a href='../AboutMe/index.php'>About Me</a></li>
                    <li><a href='../Contact/index.php'style='color:#352b28;'>Contact</a></li>
                </ul>
        </div>
    </div>
</header>";

$homeheader = "
<script type='text/javascript'>
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>    
<header>
    <div class='nav-container' >
        <a href='index.php'>
        <img src='Images/Logo.png' style='width:240px;height:auto;padding-left:35px;padding-top:10px;border:0;'>
        </a>
        <ul>  
            <li style='float: right;'><a href='Contact/index.php' >Contact</a></li>
            <li style='float: right;'><a href='AboutMe/index.php' >About Me</a></li>
            <li style='float:right;'><a href='Portfolio/index.php'>Portfolio</a></li>
            <li style='float: right;'><a href='index.php'style='color:#352b28;'>Home</a></li>
        </ul>
        <div class='zilla-mobile-menu-wrap'><a class='zilla-mobile-menu-dropdown' href='#' onclick=\"toggle_visibility('primary-menu');\">Menu</a>
                <ul id='primary-menu' class='zilla-mobile-menu' style='padding-top:10px;'>
                    <li><a href='index.php'style='color:#352b28;'>Home</a></li>
                    <li><a href='Portfolio/index.php'>Portfolio</a></li>
                    <li><a href='AboutMe/index.php'>About Me</a></li>
                    <li><a href='Contact/index.php'>Contact</a></li>
                </ul>
        </div>
    </div>
</header>";
        
$homefooter = "
    <footer>
        <a href='https://www.linkedin.com/in/stephen-farley-aa352493' target='_blank'><img src='Images/linkedin.png' style='width:40px;height:auto;padding-left:15px;border:0;float:right;'></a>
        <a href='https://github.com/SRFarl' target='_blank'><img src='Images/github.png' style='width:40px;height:auto;border:0;float:right;'></a>
        <p style='margin-bottom:10px;padding-top:15px;padding-left:4%'>Copyright (c) 2016 Stephen Farley. All rights reserved.</p> 
    </footer>
";
        
$footer = "
    <footer>
        <a href='https://www.linkedin.com/in/stephen-farley-aa352493' target='_blank'><img src='../Images/linkedin.png' style='width:40px;height:auto;padding-left:15px;border:0;float:right;'></a>
        <a href='https://github.com/SRFarl' target='_blank'><img src='../Images/github.png' style='width:40px;height:auto;border:0;float:right;'></a>
        <p style='margin-bottom:10px;padding-top:15px;padding-left:4%'>Copyright (c) 2016 Stephen Farley. All rights reserved.</p> 
    </footer>
"
?>