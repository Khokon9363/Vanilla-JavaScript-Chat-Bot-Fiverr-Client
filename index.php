<?php

  if(isset($_POST['name'])){
      $to = "admin@gmail.com"; // write here your email address
      $subject = "This is test subject"; // write here the subject
      $message = "
                  <html>
                  <head>
                    <title>This is test title</title>
                  </head>
                  <body>
                    <p>Here is some informative message !</p>
                    <table>
                      <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Games</th>
                        <th>Colors</th>
                        <th>Producten</th>
                      </tr>
                      <tr>
                      "
                      . "<td>" . $_POST['name'] . "</td>" .
                      "<td>" . $_POST['gender'] . "</td>" .
                      "<td>" . $_POST['games'] . "</td>" .
                      "<td>" . $_POST['colors'] . "</td>" .
                      "<td>" . $_POST['producten'] . "</td>" .
                      "
                      </tr>
                    </table>
                  </body>
                  </html>
                ";

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: <user@gmail.com>' . "\r\n";
      $headers .= 'Cc: user@gmail.com' . "\r\n";

      mail($to, $subject, $message, $headers);
  }

?>
<form class="msger-inputarea" onsubmit="event.preventDefault(); sendName()">
  <input type="text" class="msger-input" placeholder="Enter your answer...">
  <button type="submit" class="msger-send-btn">Send</button>
</form>
<form id="data" method="post"">
  <input type="hidden" name="name" id="name_php">
  <input type="hidden" name="gender" id="gender_php">
  <input type="hidden" name="games" id="games_php">
  <input type="hidden" name="colors" id="colors_php">
  <input type="hidden" name="producten" id="producten_php">
</form>