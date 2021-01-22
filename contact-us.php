<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new work</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="work.css"> 
</head>
<body>
  <nav id="top">
    <h1 class="nav-title"><a href="https://www.thelockdowncollective.com/index">Lockdown<br />Collective</a></h1>
    <ul class="navbar">
        
        <li><a href="https://www.thelockdowncollective.com/info">About</a></li>
        <li><a href="https://www.thelockdowncollective.com/contact">contact</a></li>
    </ul>
</nav>


<?php
    $error = false;
    $sent = false;

    if(isset($_POST['submit'])) {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])) {
            $error = true;
        }
        else {
            $to = "linardsberzins@gmail.com";

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $comments = trim($_POST['comments']);

            $subject = "Contact Form";

            $message =  "Name: $name \r\n Email: $email \r\n Comments: $comments";
            $headers = "From:" . $name;
            $mailsent = mail($to, $subject, $message, $headers);

            if($mailsent) {
                $sent = true;
            }
        }
    }
?>

<?php if($error == true){ ?>
<p class="error">Text</p>
<?php } if($sent == true) { ?>
<p class="sent">Text</p>
<?php } ?>
<div id="form">
    <form name="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <h4>Contact Me!</h4>
            <label for="name">Name:</label>
                <input type="text" name="name" id="name"/>
                <label for="email"/>Email:</label>
                <input type="text" name="email" id="email"/>
                <label for="comments" id="comments">Comments:</label>
                <textarea name="comments" id=""></textarea>
                <fieldset>
                <input class="btn" type="submit" name="submit"  class="submit" value="Send email"/>
                <input class="btn" type="reset" value="Reset"/>
                </fieldset>
        </fieldset>
    </form>
</div>

</body>
</html>
