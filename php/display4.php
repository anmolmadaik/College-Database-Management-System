<?php
    session_start();
    if(isset($_POST['Submit2'])){
        if(empty($_POST['tidSearch'])){
            echo "No Teacher Id Entered";
        }
        else{
            include('connection.php');
            if($conn){
                $tSearch = $_POST['tidSearch'];
                $_SESSION['tidValueSearch'] = $tSearch;
                $Search = "SELECT * FROM instructor WHERE id = '$tSearch'";
                $insRec = mysqli_query($conn,$Search);
                if(mysqli_num_rows($insRec)===0){
                    $_SESSION['texists'] = false;
                    header('Location: ../SearchTeacher.php');
                }
                else{
                    $_SESSION['texists'] = true;
                    $Rec = mysqli_fetch_assoc($insRec);                 
                    $sub = "SELECT * from courses WHERE Instructor = '$tSearch'";
                    $subList = mysqli_query($conn,$sub);
                    $subListArray = mysqli_fetch_all($subList,MYSQLI_ASSOC);
                    print_r($subListArray);
                }
            }
            else{
                $e = mysqli_connect_error();
                echo $e;
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/css2.css">
      <script src="../js/back.js" type="text/javascript"></script>
  </head>
  <body>
      <div class="back" onmouseover="onover()" onmouseout="onout()">
      <a href="../SearchTeacher.php">
          <img src="../Images/2522682.png">
          </a>
      </div>
   <div class="main">
       <div class="row">
     <div class="label">
       <h1>
        Name:
       </h1>
       </div>
       <div class="data">
         <h1>
         <?php echo $Rec['Name']; ?>
         </h1>
           </div></div>
         <div class="row">
       <div class="label">
    <h1>Teacher ID: </h1>
           </div>
       <div class="data">
    <h1>
        <?php echo $Rec['id']; ?>
    </h1>
         </div></div>
           
         <div class="row">
    <div class="label">
  <h1>Department :</h1>
        </div>
       <div class="data">
  <h1><?php echo $Rec['Department']; ?></h1>
    </div>
       </div>
       <div class="row">
       <div class="label">
<h1>DOB :</h1>
           </div>
       <div class="data">
<h1>
    <?php echo $Rec['Dob']; ?>
</h1>
    </div>
       </div>
           
       <div class="row">
    <div class="label">
<h1>Mobile Number :</h1>
        </div>
       <div class="data">
<h1>
    <?php echo $Rec['Mobile_no']; ?>
</h1>
           </div></div>
  
       <div class="row">
    <div class="label">
        <h1>Address :</h1>
        </div>
       <div class="data">
        <h1>
            <?php echo $Rec['Address']; ?>
        </h1>
    </div>
       </div>
       <div class="row">
       <div class="label">
       <h1>Subjects Taught:</h1>
       </div>
       </div>
       <div class="row2">
           <?php 
                foreach($subListArray as $insSub){
                    echo "<div class=\"subject2\">";
                    echo "<h1>";
                    echo $insSub['id'];
                    echo ": ";
                    echo $insSub['name'];
                    echo "</h1>";
                    echo "</div>";
                }
           ?>
       </div>
       </div>
  </body>
</html>

