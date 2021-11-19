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
      <h1>Delete Student</h1>
    </div>
    <div class="Main">

      <div class="main2">
        <div class="er">
          <h2>Enter Roll number of student you want to delete: </h2>
        </div>
        <form class="" action="php/display3.php" method="Post">
          <div class="lname">
<h1>Enter Roll Number:<h1 style="color:red;">*</h1></h1>
<input type="tel" name="rollSearch" value=""placeholder="Enter Roll Number of Student" required minlength="6" maxlength="6" pattern="[0-9]+">
          </div>
            <div id="noexistsdel">
            </div>
          <div  class="submit" >
            <input type="submit" name="Submit2" value="Submit" >
          </div>
        </form>
      </div>
      </div>
      <script>
      var showdel = <?php echo json_encode($_SESSION['showdel']); ?>;
          var text = document.getElementById("noexistsdel");
          if(showdel == true){
            text.style.visibility = "visible";
            var show = <?php echo json_encode($_SESSION['deleteExists']); ?>;
            if(show == true){
                text.innerHTML = "<h1> Data successfully deleted for roll number <?php echo $_SESSION['rollValue']?> </h1>";
                text.style.color = "red";
                text.style.marginTop= "2rem";
                text.style.marginLeft= "30%";
                text.style.width= "100%";
            }
            else{
                text.innerHTML = "<h1> Roll number <?php echo $_SESSION['rollValue']?> doesn't exist </h1>";
                text.style.color = "red";
                text.style.marginTop = "2rem";
                text.marginLeft = "30%";
                text.style.width = "100%";
            }
          }
          else{
            text.style.visibility = "hidden";
          }
      
      </script>
  </body>
</html>

