<?php
if(isset($_POST['email'])) 

  {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "richardkentos@gmail.com";
    $email_subject = "Web Dnes formulár";
    $email_message = "Formulár zaslaný zo stránky Web Dnes \n\n";
 
    function died($error) {
        // your error code can go here
        echo $error."<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Mrzí nás to, vo formulári sa našla chyba.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '<!DOCTYPE html>
    <html>
    <head>
      <title>WebDnes</title>
      <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
        <meta name="viewport" content="width=device-width"/>
      <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="manifest" href="favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
    
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    
        <!-- ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body onload="branding_rot(); showSlides()">
    
      <a href="index.php">
        <div class="branding"></div>
        </a>
    
      <i class="burger fa fa-bars"></i>
      
      <menu>
          <div class="menu_content transform_menu">
            <a href="služby.php"><li>Objednať stránku</li></a>
            <a href="prace.php"><li>Naše práce</li></a>
            <a href="kontakt.php"><li>Kontakt</li></a>
            <a href="blog.php"><li>Články</li></a>
            <i class="arrow fa fa-angle-right"></i>
          </div>
      </menu>
    <div class="success-msg">
    <img src="images/fail.svg" alt="Správa sa neodoslala">
    <p>E-mail, ktorý ste zadali sa zdá byť neplatný.<br />
    Prosím, vráťte sa a opravte chyby</p>
        <a href="index.php">Vrátiť sa domovskú stránku <i class="fas fa-home"></i></a>
    </div>
    
    <footer>
      <div class="footer-map"> 
      <h4>Mapa stránky</h4>
      <a href="prace.php">Pozrite si naše práce</a><br>
      <a href="kontakt.php">Kontaktujte nás</a><br>
      <a href="služby.php">Čo ponúkame ?</a>
      </div>
    
      <div class="copyright">
      <a href="blog.php">Náš blog </a><br>
      <a href="#">Najčastejšie otázky</a><br>
      <a href="#">Zásady ochrany osobných údajov</a>
      <p><?php echo date("Y");?></p>
      </div>
    
      <div class="social">
      <a href="https://www.facebook.com/webdnes"><i class="fab fa-facebook"></i></a><br>
      
      
      </div>
    </footer>
    
    
      </div>
    <!-- ENDING TOTAL WRAPPER -->
    
    
    <i id="back_top" class="fa fa-chevron-up"></i>
    
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>	
    </body>
    </html>';
  }
 
    $string_exp = '/\p{L}+/u';
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= '<!DOCTYPE html>
    <html>
    <head>
      <title>WebDnes</title>
      <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
        <meta name="viewport" content="width=device-width"/>
      <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="manifest" href="favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
    
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    
        <!-- ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body onload="branding_rot(); showSlides()">
    
      <a href="index.php">
        <div class="branding"></div>
        </a>
    
      <i class="burger fa fa-bars"></i>
      
      <menu>
          <div class="menu_content transform_menu">
            <a href="služby.php"><li>Objednať stránku</li></a>
            <a href="prace.php"><li>Naše práce</li></a>
            <a href="kontakt.php"><li>Kontakt</li></a>
            <a href="blog.php"><li>Články</li></a>
            <i class="arrow fa fa-angle-right"></i>
          </div>
      </menu>
    <div class="success-msg">
    <img src="images/fail.svg" alt="Správa sa neodoslala">
    <p>Meno, ktoré ste zadali sa zdá byť neplatné.<br />
    Prosím, vráťte sa a opravte chyby</p></p>
        <a href="index.php">Vrátiť sa domovskú stránku <i class="fas fa-home"></i></a>
    </div>
    
    <footer>
      <div class="footer-map"> 
      <h4>Mapa stránky</h4>
      <a href="prace.php">Pozrite si naše práce</a><br>
      <a href="kontakt.php">Kontaktujte nás</a><br>
      <a href="služby.php">Čo ponúkame ?</a>
      </div>
    
      <div class="copyright">
      <a href="blog.php">Náš blog </a><br>
      <a href="#">Najčastejšie otázky</a><br>
      <a href="#">Zásady ochrany osobných údajov</a>
      <p><?php echo date("Y");?></p>
      </div>
    
      <div class="social">
      <a href="https://www.facebook.com/webdnes"><i class="fab fa-facebook"></i></a><br>
      
      
      </div>
    </footer>
    
    
      </div>
    <!-- ENDING TOTAL WRAPPER -->
    
    
    <i id="back_top" class="fa fa-chevron-up"></i>
    
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>	
    </body>
    </html>';
  }
 
  
 
  if(strlen($comments) < 2) {
    $error_message .= '<!DOCTYPE html>
    <html>
    <head>
      <title>WebDnes</title>
      <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
        <meta name="viewport" content="width=device-width"/>
      <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
      <link rel="manifest" href="favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
    
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    
        <!-- ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body onload="branding_rot(); showSlides()">
    
      <a href="index.php">
        <div class="branding"></div>
        </a>
    
      <i class="burger fa fa-bars"></i>
      
      <menu>
          <div class="menu_content transform_menu">
            <a href="služby.php"><li>Objednať stránku</li></a>
            <a href="prace.php"><li>Naše práce</li></a>
            <a href="kontakt.php"><li>Kontakt</li></a>
            <a href="blog.php"><li>Články</li></a>
            <i class="arrow fa fa-angle-right"></i>
          </div>
      </menu>
    <div class="success-msg">
      <img src="images/fail.svg" alt="Správa sa neodoslala">
    <p>Komentár, ktorý ste zadali sa zdá byť neplatný.<br />
    Prosím, vráťte sa a opravte chyby</p></p>
        <a href="index.php">Vrátiť sa domovskú stránku <i class="fas fa-home"></i></a>
    </div>
    
    <footer>
      <div class="footer-map"> 
      <h4>Mapa stránky</h4>
      <a href="prace.php">Pozrite si naše práce</a><br>
      <a href="kontakt.php">Kontaktujte nás</a><br>
      <a href="služby.php">Čo ponúkame ?</a>
      </div>
    
      <div class="copyright">
      <a href="blog.php">Náš blog </a><br>
      <a href="#">Najčastejšie otázky</a><br>
      <a href="#">Zásady ochrany osobných údajov</a>
      <p><?php echo date("Y");?></p>
      </div>
    
      <div class="social">
      <a href="https://www.facebook.com/webdnes"><i class="fab fa-facebook"></i></a><br>
      
      
      </div>
    </footer>
    
    
      </div>
    <!-- ENDING TOTAL WRAPPER -->
    
    
    <i id="back_top" class="fa fa-chevron-up"></i>
    
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>	
    </body>
    </html>';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Meno: ".clean_string($meno)."\n";
    $email_message .= "E-mail: ".clean_string($email_from)."\n";
    $email_message .= "Komentár: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '."Ahoj"."\r\n" ;
mail($email_to, $email_subject, $email_message, $headers);  
}
?>

<!-- include your own success html here -->
<!DOCTYPE html>
<html>
<head>
	<title>WebDnes</title>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body onload="branding_rot(); showSlides()">

	<a href="index.php">
		<div class="branding"></div>
		</a>

	<i class="burger fa fa-bars"></i>
	
	<menu>
			<div class="menu_content transform_menu">
				<a href="služby.php"><li>Objednať stránku</li></a>
				<a href="prace.php"><li>Naše práce</li></a>
				<a href="kontakt.php"><li>Kontakt</li></a>
				<a href="blog.php"><li>Články</li></a>
				<i class="arrow fa fa-angle-right"></i>
			</div>
	</menu>
<div class="success-msg">
  <img src="images/success.svg" alt="Message sent">
<p>Ďakujeme, Vaša správa bola úspešne odoslaná.
    Čoskoro sa Vám ozveme.</p>
    <a href="index.php">Vrátiť sa domovskú stránku <i class="fas fa-home"></i></a>
</div>

<footer>
	<div class="footer-map"> 
	<h4>Mapa stránky</h4>
	<a href="prace.php">Pozrite si naše práce</a><br>
	<a href="kontakt.php">Kontaktujte nás</a><br>
	<a href="služby.php">Čo ponúkame ?</a>
	</div>

	<div class="copyright">
	<a href="blog.php">Náš blog </a><br>
	<a href="#">Najčastejšie otázky</a><br>
	<a href="#">Zásady ochrany osobných údajov</a>
	<p><?php echo date("Y");?></p>
	</div>

	<div class="social">
	<a href="https://www.facebook.com/webdnes"><i class="fab fa-facebook"></i></a><br>
	
	
	</div>
</footer>


	</div>
<!-- ENDING TOTAL WRAPPER -->


<i id="back_top" class="fa fa-chevron-up"></i>

<script src="jquery-3.5.1.min.js"></script>
<script src="script.js"></script>	
</body>
</html>