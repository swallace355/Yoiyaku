<?php 
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Yoiyaku: JP-EN Translation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript"  src="form-validate.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div id="main">
            <div class="container">
            
                <div id="header">
                    <div id="logo">
                        <h1>Yoiyaku</h1>
                    </div>
                    <div id="tagline">
                        
                    <ul id="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Portfolio</a></li>
                    </ul>
                    </div>
                    <div style="clear:both"></div>
           
                </div><!--End of Header-->
            
                <div id="content" class="well">
                    <h2 class="bold-text" align="center">Japanese to English Translation</h2>
                    <h3 align="center">Contact me for a <span style="color: red">FREE</span> quote!</h3>
                    <p>Translation is serious business and I don’t take my duties lightly. 
                        It is my responsibility to convey the meaning of Japanese texts and translate it into English, 
                        without just using a word-for-word translation that doesn’t make sense. My clients don’t have to settle 
                        for clunky translations. I do my best to make sure my translations flow and stick with the same 
                        tone and style of the original version. Online automated translators that are popular now can be 
                        useful to help translate individual words, but they still have a long way to go before they can translate 
                        longer text in a way that sounds natural. This is why human translators are still in high demand. </p>
                    <p>I make sure my clients receive translations they are happy with. This means that in addition to 
                        offering high-quality translations, I also offer competitive rates and I beat deadlines. Feel 
                        free to contact me with your translation needs and I’ll get back to you with a free quote. 
                    <p>I look forward to working with you! </p>
                    <hr>
                    <div id="services-specialties">
                        <h3 class="bold-text" align="center">Services & Specialties</h3>
                            <div id="services-main">
                                <h4 class="bold-text">Services</h4>
                        
                                <ul id="services">
                                    <li>Document Translation</li>
                                    <li>Website Translation</li>
                                    <li>Script Translation</li>
                                    <li>Subtitle Translation</li>
                                    <li>Editing</li>
                                    <li>Proofreading</li>
                                </ul>
                            </div>
                            <div style="clear:both"></div>
                            <div id="specialties-main">
                                <h4 class="bold-text">Specialties</h4>
                        
                        
                                <ul id="specialties">
                                    <li>Information Technology (IT)</li>
                                    <li>Creative Writing / Fiction</li>
                                    <li>Travel</li>
                                </ul>
                            </div>
                         <div style="clear:both"></div>
                    </div><!--End of services-specialties-->
                    <hr>
                    
                    <h3 class="bold-text" align="center">About Me</h3>
                    <p>I had five years experience in the translation industry before I became an independent 
                        translator in 2016. I’ve translated documents and managed other translators within the 
                        federal government. I was also a Japanese to English interpreter for a religious organization 
                        while I taught English in Japan. I have a Master of Arts in Global Affairs from George Mason 
                        University and a Bachelor of Science in Software Engineering from University of Phoenix. </p>
                    <hr>
                    
                    <h3 class="bold-text" align="center">Contact Me</h3>
                    <div id="contact" class="container">
                        <form name="contactform" action="form-to-email.php" method="post" enctype="text/plain" onsubmit="return(validate());">

                            <p>Name*</p>
                            <input type="text" id="form-name" name="name" size="25" maxlength="50" placeholder="Your name.." required/><br>
                            
                            <p>Email*</p>
                            <input type ="email" id="form-email" name="email" size="25" maxlength="50" placeholder="Your email.." required /><br>
                            
                            <p>Message*</p>
                            <textarea id="form-message" name="message" placeholder="Please leave your message.." required></textarea><br>

                            <input type="submit" value="Send" />

                        </form>

                    </div><!--End of Contact-->
                    
                </div><!--End of Content-->
            </div><!--End Main Container-->
        </div><!--End of Main-->
        
        <div id="Footer">
            <div class="container">
                <p>Copyright © 2017  Yoiyaku <br />
                All Rights Reserved</p> 
            </div><!--End Footer container-->
        </div><!--End of Footer-->
 
    </body>
</html>
