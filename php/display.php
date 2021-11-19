<?php
    session_start();
    if(isset($_POST['Submit2'])){
        if(empty($_POST['rollSearch'])){
            echo "No Roll Number Entered";
        }
        else{
            include('connection.php');
            if($conn){
                $rSearch = $_POST['rollSearch'];
                $_SESSION['rollValueSearch'] = $rSearch;
                $Search = "SELECT * FROM student WHERE Roll_no = '$rSearch'";
                $stuRec = mysqli_query($conn,$Search);
                if(mysqli_num_rows($stuRec)===0){
                    $_SESSION['exists'] = false;
                    header('Location: ../SearchStudent.php');
                }
                else{
                    $_SESSION['exists'] = true;
                    $Rec = mysqli_fetch_assoc($stuRec);                 
                    $sub = "SELECT * from attends WHERE Roll_no = '$rSearch'";
                    $subList = mysqli_query($conn,$sub);
                    $subListArray = mysqli_fetch_all($subList,MYSQLI_ASSOC);
                    $subArray = [$subListArray[0]['Course_id'],$subListArray[1]['Course_id'],$subListArray[2]['Course_id'],$subListArray[3]['Course_id'],$subListArray[4]['Course_id']];
                    for($i=0; $i<5; $i++){
                        $sName = "SELECT name FROM courses WHERE id = '$subArray[$i]'; ";
                        $ins = "SELECT Instructor FROM courses WHERE id = '$subArray[$i]'; ";
                        $sNameRec=mysqli_query($conn,$sName);
                        $sNameRecName[]  = mysqli_fetch_assoc($sNameRec);
                        $insRec = mysqli_query($conn,$ins);
                        $insRecName = mysqli_fetch_assoc($insRec);
                        $in = $insRecName['Instructor'];
                        $insName = "SELECT Name FROM Instructor WHERE id = '$in';";
                        $inNameArray = mysqli_query($conn,$insName);
                        $inName[] = mysqli_fetch_assoc($inNameArray);
                    }
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
      <a href="../SearchStudent.php">
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
    <h1>Roll No.: </h1>
           </div>
       <div class="data">
    <h1>
        <?php echo $Rec['Roll_no']; ?>
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
       <h1>Subjects:</h1><br>
       </div>
       </div>
       <div class="row">
           <div class="subject">
               <h1>
            <?php echo $subListArray[0]['Course_id']; ?>  <br>
            <?php echo $sNameRecName[0]['name']; ?>  <br>
            <?php echo $inName[0]['Name']; ?>
               </h1>
           </div>
           <div class="space"> </div>
           <div class="subject">
               <h1>
            <?php echo $subListArray[1]['Course_id']; ?>  <br>
            <?php echo $sNameRecName[1]['name']; ?>  <br>
            <?php echo $inName[1]['Name']; ?>
               </h1>
           </div>
           <div class="space"> </div>
           <div class="subject">
               <h1>
            <?php echo $subListArray[2]['Course_id']; ?>  <br>
            <?php echo $sNameRecName[2]['name']; ?>  <br>
            <?php echo $inName[2]['Name']; ?>
               </h1>
           </div>
           <div class="space"> </div>
           <div class="subject">
               <h1>
            <?php echo $subListArray[3]['Course_id']; ?>  <br>
            <?php echo $sNameRecName[3]['name']; ?>  <br>
            <?php echo $inName[3]['Name']; ?>
               </h1>
           </div>
           <div class="space"> </div>
           <div class="subject">
               <h1>
            <?php echo $subListArray[4]['Course_id']; ?>  <br>
            <?php echo $sNameRecName[4]['name']; ?>  <br>
            <?php echo $inName[4]['Name']; ?>
               </h1>
           </div>
       </div>
       </div>
  </body>
</html>

