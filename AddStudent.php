<?php 
    $s = false;

    if(isset($_POST['Submit'])){
        if(!(empty($_POST['fname']) || empty($_POST['rollno']) || empty($_POST['dob']) || empty($_POST['Department']) || empty($_POST['Sub1']) || empty($_POST['Sub2']) || empty($_POST['Sub3']) || empty($_POST['Sub4']) || empty($_POST['Sub5']))){
            include('php/connection.php');
            if($conn){
                $rollno = $_POST['rollno'];
                $check = "SELECT * FROM student WHERE Roll_no = '$rollno';";
                $val = mysqli_query($conn,$check);
                if(mysqli_num_rows($val)===0){
                    $name = $_POST['fname'];
                    $dob = $_POST['dob'];
                    if(empty($_POST['Number'])){
                        $mobile = NULL;
                    }
                    else{
                        $mobile = $_POST['Number'];
                    }
                    if(empty($_POST['Address'])){
                        $Address = NULL;
                    }
                    else{
                        $Address = $_POST['Address'];
                    }                 
                    $Dep = $_POST['Department'];
                    $S1 = $_POST['Sub1'];
                    $S2 = $_POST['Sub2'];
                    $S3 = $_POST['Sub3'];
                    $S4 = $_POST['Sub4'];
                    $S5 = $_POST['Sub5'];
                    $i0 = "INSERT INTO student VALUES('$rollno','$name','$dob','$mobile','$Address','$Dep');";
                    $i1 = "INSERT INTO attends VALUES('$rollno','$S1');";
                    $i2 = "INSERT INTO attends VALUES('$rollno','$S2');";
                    $i3 = "INSERT INTO attends VALUES('$rollno','$S3');";
                    $i4 = "INSERT INTO attends VALUES('$rollno','$S4');";
                    $i5 = "INSERT INTO attends VALUES('$rollno','$S5');";
                    $r0 = mysqli_query($conn,$i0);
                    $r1 = mysqli_query($conn,$i1);
                    $r2 = mysqli_query($conn,$i2);
                    $r3 = mysqli_query($conn,$i3);
                    $r4 = mysqli_query($conn,$i4);
                    $r5 = mysqli_query($conn,$i5);
                    $c1 = "SELECT Instructor FROM courses WHERE id = '$S1'; ";
                    $c2 = "SELECT Instructor FROM courses WHERE id = '$S2'; ";
                    $c3 = "SELECT Instructor FROM courses WHERE id = '$S3'; ";
                    $c4 = "SELECT Instructor FROM courses WHERE id = '$S4'; ";
                    $c5 = "SELECT Instructor FROM courses WHERE id = '$S5'; ";
                    $cr1 = mysqli_query($conn, $c1);
                    $cr2 = mysqli_query($conn, $c2);
                    $cr3 = mysqli_query($conn, $c3);
                    $cr4 = mysqli_query($conn, $c4);
                    $cr5 = mysqli_query($conn, $c5);
                    $a1 = mysqli_fetch_assoc($cr1);
                    $a2 = mysqli_fetch_assoc($cr2);
                    $a3 = mysqli_fetch_assoc($cr3);
                    $a4 = mysqli_fetch_assoc($cr4);
                    $a5 = mysqli_fetch_assoc($cr5);
                    $ins1 = $a1['Instructor'];
                    $ins2 = $a2['Instructor'];
                    $ins3 = $a3['Instructor'];
                    $ins4 = $a4['Instructor'];
                    $ins5 = $a5['Instructor'];
                    $t1 = "INSERT INTO teaches VALUES('$rollno','$ins1'); ";
                    $t2 = "INSERT INTO teaches VALUES('$rollno','$ins2'); ";
                    $t3 = "INSERT INTO teaches VALUES('$rollno','$ins3'); ";
                    $t4 = "INSERT INTO teaches VALUES('$rollno','$ins4'); ";
                    $t5 = "INSERT INTO teaches VALUES('$rollno','$ins5'); ";
                    mysqli_query($conn,$t1);
                    mysqli_query($conn,$t2);
                    mysqli_query($conn,$t3);
                    mysqli_query($conn,$t4);
                    mysqli_query($conn,$t5);
                    $d = "UPDATE department SET no_of_student = (SELECT COUNT(*) FROM student WHERE Department='$Dep') WHERE Name = '$Dep'";
                    mysqli_query($conn,$d);
                    if($r0 && $r1 && $r2 && $r3 && $r4 && $r5){
                        $s = true;
                        echo "<script>alert(\"Data for $rollno successfully added\");  </script>";
                    }
                    else{
                        $str = mysqli_error($conn);
//                        echo "<script>alert('$str');</script>";
                    }
                }
                else{
                    echo "<script>alert(\"'$rollno' already exists\");</script>";
                }
                
                
            }
            else{
                $err = mysqli_connect_error();
                echo "<script> alert('$err'); </script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS/index.css">
      <script src="js/back.js">
      </script>
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
    <div class="main">

      <div class="main1">
        <form class="" action="AddStudent.php" method="Post">
          <div class="fname">
          <h1>Name:<h1 style="color:red;">*</h1></h1>
          <input type="text" name="fname" value=""placeholder="Enter Name" required pattern="[A-Z][a-z]{1,}">
        </div>
        <div class="fname">
          <h1>Roll Number:<h1 style="color:red;">*</h1></h1>
          <input type="tel" name="rollno" value=""placeholder="Enter Rollno." required minlength="6" maxlength="6" pattern=[0-9]+>
        </div>
        <div class="fname">
          <h1>Date Of Birth:<h1 style="color:red;">*</h1></h1>
          <input type="date" name="dob" value="" required>
        </div>
        <div class="fname">
          <h1>Mobile Number:<h1 style="color:red;">*</h1></h1>
           <input type="tel" name="Number" value=""placeholder="Enter Mobile Number" required minlength="10" maxlength="10" pattern="[0-9]+">
        </div>
        <div class="fname">
          <h1>Address:<h1 style="color:red;">*</h1></h1>
          <input type="text" name="Address" value=""placeholder="Enter Address" required>
        </div>
        <div class="fname">
          <h1>Department:<h1 style="color:red;">*</h1></h1>
          <select class="" name="Department" required>
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Architecture">Architecture</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
            <option value="Chemical Engineering">Chemical Engineering</option>
            <option value="Material Science and Engineering">Material Science and Engineering</option>

          </select>
        </div>
        <div class="fname">
          <h1>Subject 1:<h1 style="color:red;">*</h1></h1>
          <select class="" name="Sub1" required>
            <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-311">CS-311</option>
            <option value="EE-311">EE-311</option>
            <option value="ME-311">ME-311</option>
            <option value="AR-311">AR-311</option>
            <option value="CE-311">CE-311</option>
            <option value="EC-311">EC-311</option>
            <option value="CH-311">CH-311</option>
            <option value="MS-311">MS-311</option>

          </select>
        </div>
            <div class="fname">
          <h1>Subject 2:<h1 style="color:red;">*</h1></h1>
          <select class="" name="Sub2" required>
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-312">CS-312</option>
            <option value="EE-312">EE-312</option>
            <option value="ME-312">ME-312</option>
            <option value="AR-312">AR-312</option>
            <option value="CE-312">CE-312</option>
            <option value="EC-312">EC-312</option>
            <option value="CH-312">CH-312</option>
            <option value="MS-312">MS-312</option>

          </select>
        </div>
            <div class="fname">
          <h1>Subject 3:<h1 style="color:red;">*</h1></h1>
          <select class="" name="Sub3" required>
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-313">CS-313</option>
            <option value="EE-313">EE-313</option>
            <option value="ME-313">ME-313</option>
            <option value="AR-313">AR-313</option>
            <option value="CE-313">CE-313</option>
            <option value="EC-313">EC-313</option>
            <option value="CH-313">CH-313</option>
            <option value="MS-313">MS-313</option>

          </select>
        </div>
            <div class="fname">
          <h1>Subject 4:<h1 style="color:red;">*</h1></h1>
          <select class="" name="Sub4" required>
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-314">CS-314</option>
            <option value="EE-314">EE-314</option>
            <option value="ME-314">ME-314</option>
            <option value="AR-314">AR-314</option>
            <option value="CE-314">CE-314</option>
            <option value="EC-314">EC-314</option>
            <option value="CH-314">CH-314</option>
            <option value="MS-314">MS-314</option>

          </select>
        </div>
            <div class="fname">
          <h1>Subject 5:<h1 style="color:red;">*</h1></h1>
          <select class="" name="Sub5" required>
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-306">CS-306</option>
            <option value="EE-371">EE-371</option>
            <option value="ME-371">ME-371</option>
            <option value="AR-370">AR-370</option>
            <option value="CE-306">CE-306</option>
            <option value="EC-370">EC-370</option>
            <option value="CH-370">CH-370</option>
            <option value="MS-370">MS-370</option>

          </select>
        </div>
        <div class="submit">
          <input type="submit" name="Submit" value="Submit" id="fg">
        </div>
        </form>
      </div>
    </div>
  </body>
</html>
