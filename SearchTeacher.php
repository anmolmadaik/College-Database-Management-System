<?php session_start();
?>

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
      <a href="TeacherMenu.html">
          <img src="Images/2522682.png">
          </a>
      </div>
    <div class="titl">
      <h1>College Data Management</h1>
    </div>
    <div class="Main">

      <div class="main2">
        <div class="er">
          <h1>Get Information</h1>
        </div>
        <form class="" action="php/display4.php" method="Post">
          <div class="lname">
<h1>Enter Teacher ID:<h1 style="color:red;">*</h1></h1>
<input type="text" name="tidSearch" value=""placeholder="Enter Teacher ID" required minlength="2" maxlength="3" pattern="[a-z]+">
          </div>
            <div id="noexists">
                <h1> Teacher with id <?php echo $_SESSION['tidValueSearch']; ?> doesn't exist </h1>
            </div>
          <div  class="submit" >
            <input type="submit" name="Submit2" value="Submit" >
          </div>
        </form>
      </div>
      </div>
      <script>
      var show = <?php echo json_encode($_SESSION['texists']); ?>;
        var text = document.getElementById("noexists");
        if(show == true){
            text.style.display = "none";
        }
        else if(show == false){
              text.style.display = "block";
        }
      </script>
  </body>
</html>
