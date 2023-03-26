<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The trials and tribulations of Vision Processing | Phoenix Force Robotics - FRC 2097</title>
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
                ?>, which is a Phoenix Forge article; enjoy your stay!</i>
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
                <a href="https://web-students.net/site66/fp/articles/forgeindex.php" class="active">Phoenix Forge</a> 
                <a href="https://web-students.net/site66/fp/articles/archiveindex.php">Archive</a>
                <a href="https://web-students.net/site66/fp/contact.php">Contact us!</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
            </nav>
        </div>
            
        <div class="wrapper">
            <h2 class="subheader">The Trials and Tribulations of Vision Processing</h2>

            <a href="../forgeindex.php">Return to Phoenix Forge<a>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam consectetur turpis a cursus. Aenean nec dui gravida leo tincidunt pretium. Donec rutrum velit pulvinar aliquet pretium. Maecenas fringilla placerat nisl eu iaculis. Curabitur finibus augue sit amet magna suscipit egestas. Sed ultricies at dolor at sollicitudin. Phasellus finibus nibh vel eros mattis aliquet. Quisque ac elit non lacus vehicula rhoncus id id mi. Donec suscipit nisi nec dolor varius consequat. Pellentesque tristique augue at purus tincidunt ultrices. Nunc finibus nisi elit, nec placerat lectus lobortis a. Curabitur id est velit. Vivamus non facilisis odio, non tristique leo. Aenean iaculis tristique leo non aliquam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque sed neque eu nibh cursus convallis vitae ut nunc.

                Vivamus tempus magna velit. Pellentesque ultrices sem ac turpis malesuada blandit. Curabitur euismod in mauris vitae viverra. Duis eu hendrerit diam. In justo nunc, eleifend vitae odio a, mattis ultricies erat. Duis semper congue sem, at ornare quam vehicula et. Morbi ipsum massa, sollicitudin in turpis vitae, efficitur hendrerit justo. Nunc aliquet felis semper consectetur consectetur. Vivamus nisl est, finibus in diam eget, varius gravida ligula. Nullam quis hendrerit mauris, non commodo augue.
                
                Donec aliquet bibendum dolor, vel semper nibh bibendum vel. Ut eu velit ut metus cursus faucibus in a erat. Cras blandit velit ultricies est consectetur, ac consectetur magna fermentum. Pellentesque vel convallis dui. Praesent vehicula ut mi sit amet viverra. Suspendisse dignissim est a elit hendrerit, sit amet suscipit nunc rutrum. Praesent gravida ipsum id blandit ultricies. Sed dignissim lectus a nunc ultrices, a aliquet dolor venenatis. Phasellus in dui in risus blandit ullamcorper sit amet non nisi.</p>

            <a href="../forgeindex.php">Return to Phoenix Forge<a>

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