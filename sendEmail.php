<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">

      <h1>Thanks! Your email has been sent</h1>
      <a href="index.php">Go Back</a>

    </div>






    <?php
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      $to = "harleauxcarrera@gmail.com";



        $email_subject = "This a test bruh";

        $email_body = "You have received a new message from the user $name.\n".

                                "Here is the message:\n $message".

                                mail($to,$email_subject,$email_body);


     ?>
  </body>
</html>
