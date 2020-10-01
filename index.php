<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Computer Classroom</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  
  <?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
if ($android || $bberry || $iphone || $ipod || $webos== true) 
{ 
header('Location: https://computer-classroom.herokuapp.com/');
}
?>

  <h1 class="logo" align="center">COMPUTER CLASSROOM</h1>
        
        <p align="center">
      <?php echo "Welcome to Computer Classroom! Computer Classroom saves time and both the Teacher and Student can Interact with each other. Computer Classroom is a User-Friendly Web Page. Computer Classroom is a free and easy tool helping educators efficiently manage and assess progress, while enhancing connections with learners from school, from home, or on the go."?>
    </p>
    
    <br>
    <br>
    <div class="header-list">
      <h2 align="center">BULLETIN BOARD</h2>
      <div class="container">
      <ul>
        <li><?php echo "On 30th September, 2020 there will be a Practical Test of 100 marks."?></li>
        <li><?php echo "Classes are cancelled on 2nd October, 2020 for the Occasion of Gandhi Jayanti."?></li>
        <li><?php echo "Classes are cancelled from 23rd to 26th October, 2020 on the Occasion of Durga Puja."?></li>
        <li><?php echo "Classes are cancelled on 14th November, 2020 for the Occasion of Kali Puja and Deepavali."?></li>
        <li><?php echo "CODE-A-THON will be conducted on 26th November, 2020. Details will be shared soon."?></li>
        <li><?php echo "SURPRISES are awaiting for the students on 24th December, 2020 for the Occasion of Christmas Eve."?></li>
        <li><?php echo "Classes are cancelled on 25th December, 2020 for the Occasion of Christmas."?></li>
      </ul>
      </div>
    </div>

      <br>
      <br>
      <h2 align="center">TIME - TABLE</h2>
      <h6 align="center"><?php echo "CLICK ON THE IMAGE BELOW TO VIEW THE TIME - TABLE"?></h6>

        <form method="post" action="Time-Table.php">
        <input type="image" name="Time-Table" src="https://1.bp.blogspot.com/-am7TfwS-NFY/XeJCn_dqgUI/AAAAAAAAABQ/bjBFrTWdMSkmod28Zhs3vMytLn6wksznQCLcBGAsYHQ/s1600/5.JPG" alt="VIEW THE Time-Table" height = "300" width="900">   
        </form>
    
    <br>
    <br>
      <a href="resource.php" class="blink">CLICK HERE TO GET THE LINK TO ONLINE RESOURCES</a>

    <br>
    <footer>
      <?php echo "Computer Classroom is a free web service developed by Navomita Ghoshal for learning programming languages that aims to simplify creating bulletin board, distributing Time-Table, and giving links to online resources. The primary purpose of Computer Classroom is to streamline the process of sharing files between teachers and students."?>
    </footer>
</body>
</html>
