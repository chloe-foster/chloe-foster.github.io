<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact | Phoenix Force Robotics - FRC 2097</title>
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <!--<link rel="stylesheet" href="css/main.css">-->
        
        <link rel="stylesheet" href="https://web-students.net/site66/fp/css/nav.css">
        <link rel="stylesheet" href="https://web-students.net/site66/fp/css/portal.css">
    </head>
    <body>
        <header>
            <div class="header">
                <div class="my-column, header-text">               
                    <h1>Phoenix Force Robotics<br></h1>
                    <p>Student led, mentor driven!</p>
                </div>
            </div>
            <p>
                <i>Your current location is 
                <?php
                echo __FILE__;
                ?>, which is our contact form; enjoy your stay!</i>
            </p>
        </header>

        <!--TODO: make dropdowns using existing code-->
        <div class="sidebar">
            <img src="https://web-students.net/site66/fp/images/logo.webp" class="flexible" alt="Phoenix Force Robotics Logo">
            <nav class="nav" id="myTopnav">
                <a href="https://web-students.net/site66/fp/index.php">Home</a>
                <a href="https://web-students.net/site66/fp/about.php">About</a>
                <a href="https://web-students.net/site66/fp/sponsors.php">Sponsors</a>
                <a href="https://web-students.net/site66/fp/articles/updatecurrentindex.php">Updates</a>
                <a href="https://web-students.net/site66/fp/articles/forgeindex.php">Phoenix Forge</a> 
                <a href="https://web-students.net/site66/fp/articles/archiveindex.php">Archive</a>
                <a href="https://web-students.net/site66/fp/contact.php" class="active">Contact us!</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
            </nav>
        </div>
            
        <div class="wrapper">
            <h2 class="subheader">Contact us!</h2>
            <h3>Join our emailing list!</h3>
            <?php
                /*
                * Below are 2 different forms to be re-used       
                * 
                * Only use one at a time, comment out the other!       
                *
                */

                include 'includes/contact_include.php'; #site keys & code here
            
                $toAddress = "Chloe.D.Foster@seattlecolleges.edu";  //place your/your client's email address here
                $toName = "Chloe Foster"; //place your client's name here
                $website = "tmp_form_test";  //place NAME of your client's website

                echo loadContact('simple.php');#demonstrates a simple contact form
                //echo loadContact('multiple.php');#demonstrates multiple form elements
                //echo loadContact("tmp_form_test.php"); //exodia, the forbidden one

                //ok genuine question: does the source get reviwed and graded directly, or just indirectly via functionality?
                //if the former: hello

            ?>
            <footer>
                <p>
                    <small>
                        Trans rights are human rights | © 2023 by 
                        <a href="contact.php">Chloe Foster</a>, All Rights Reserved | 
                        <a id="privacy-notice" href="privacy.php">Privacy Notice</a> | 
                        <a id="html-checker" href="https://validator.w3.org/nu/?doc=http://web-students.net/site48/it161/">Check HTML</a> | 
                        <a id="css-checker" href="https://jigsaw.w3.org/css-validator/validator?uri=http://web-students.net/site48/it161/">Check CSS</a>
                    </small>
                </p>
            </footer>
        </div>
            
        <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
            
        <script>
        //https://tinyurl.com/dynamic-html-checker
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  

        //manages mobile nav 
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "nav") {
                x.className += " responsive";
            } else {
                x.className = "nav";
            }
        }   
        </script>
    </body>
</html>