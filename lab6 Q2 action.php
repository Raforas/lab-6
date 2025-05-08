<!DOCTYPE html>
<html>
  <head><title>Lab 6 Q2 action</title></head>
  <body>
    <?php
    $stuID = $_POST["stdID"];
    $code = substr ($stuID,0,2);

    if ($code == "CA")
    {
      echo "You are Computer Networking student";
    }
    elseif ($code == "CB")
    {
      echo "You are Software Engineering student";
    }
    elseif ($code == "CD")
    {
      echo "You are Graphic Multimedia student";
    }
    else{
      echo "Not FK bachelor degree student";
    }
   
echo "Your ID ". $stuID. "<br>";
echo "2 character ID". $code. "<br>";

    ?>
  </body>
</html>