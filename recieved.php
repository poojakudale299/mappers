
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Affordable and professional web design">
        <meta name="keywords" content="web design, affordable web design, professional web design">
        <meta name="author" content="Brad Traversy">
        <title>recieved bills</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        
        <header>
            <div class="container">
                <div id="brand">
                    <h1><span class="highlight">Hem</span>lock</h1>
                </div>
                <nav>
                    <ul>
                        <li class="current"><a href="recieved.html"></a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="logout.html">Logout</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <?php
       $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
     echo fread($myfile,filesize("webdictionary.txt"));
      fclose($myfile);
      ?>
    
        

        
        <footer>
            <p>My Webpage, Copyright &copy;2018</p>
        </footer>
    </body>
    
</html>