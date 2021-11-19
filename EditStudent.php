<?php session_start() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS/index.css">
      <script src="js/back.js" type="text/javascript"></script>
  </head>
  <body>
      <div class="back" onmouseover="onover()" onmouseout="onout()">
      <a href="StudentMenu.html">
          <img src="Images/2522682.png">
          </a>
      </div>
    <div class="titl">
      <h1>College Data Management</h1>
    </div>
    <div class="Main">

      <div class="main2">
        <div class="er">
          <h2>Enter Roll number of student you want to edit: </h2>
        </div>
        <form class="" action="php/display2.php" method="Post">
          <div class="lname">
<h1>Enter Roll Number:<h1 style="color:red;">*</h1></h1>
<input type="tel" name="rollSearch" value=""placeholder="Enter Roll Number of Student" required minlength="6" maxlength="6" pattern="[0-9]+">
          </div>
            <div id="noexists">
                <h1>  Roll number <?php echo $_SESSION['rollValueEdit']; ?> doesn't exist </h1>
            </div>
          <div  class="submit" >
            <input type="submit" name="Submit2" value="Submit" >
          </div>
        </form>
      </div>
      </div>
      <script>
      var show = <?php echo json_encode($_SESSION['editexists']); ?>;
        var text = document.getElementById("noexists");
        if(show == true){
            text.style.display = "none";
        }
          else{
              text.style.display = "block";
        }
      </script>
  </body>
</html>

