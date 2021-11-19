<?php 
    
    session_start();
    include('connection.php');
    if($conn){
        $RollKey = $_SESSION['editRoll'];
        if((!isset($_POST['CheckName'])) && (!isset($_POST['CheckDOB'])) && (!isset($_POST['CheckMobile'])) && (!isset($_POST['CheckAddress'])) && (!isset($_POST['CheckDep'])) && (!isset($_POST['CheckRoll'])) ){
            $resName = "No data selected to edit";
            $nothingUsed = true;
        }
        else{
            if(isset($_POST['CheckName'])){
                if(!empty($_POST['Name'])){
                    $en = $_POST['Name'];
                    $editName = "UPDATE student SET Name ='$en' WHERE Roll_no = '$RollKey'; ";
                    $editNameResult = mysqli_query($conn,$editName);
                    if($editNameResult){
                        $resName =  "Name successfully updated to $en";
                    }
                    else{
                        $resName = mysqli_error($conn);
                    }
                }
            }
            if(isset($_POST['CheckDOB'])){
                if(!empty($_POST['DOB'])){
                    $ed = $_POST['DOB'];
                    $editDOB = "UPDATE student SET DOB ='$ed' WHERE Roll_no = '$RollKey'; ";
                    $editDOBResult = mysqli_query($conn,$editDOB);
                    if($editDOBResult){
                        $resDate = "Date of Birth successfully updated to $ed";
                    }
                    else{
                       $resDate =  mysqli_error($conn);
                    }
                }
            }
            if(isset($_POST['CheckMobile'])){
                if(!empty($_POST['Mobile'])){
                    $em = $_POST['Mobile'];
                    $editMobile = "UPDATE student SET Mobile_no ='$em' WHERE Roll_no = '$RollKey'; ";
                    $editMobileResult = mysqli_query($conn,$editMobile);
                    if($editMobileResult){
                        $resMobile = "Mobile successfully updated to $em";
                    }
                    else{
                        $resMobile = mysqli_error($conn);
                    }
                }
            }
            if(isset($_POST['CheckAddress'])){
                if(!empty($_POST['Address'])){
                    $ea = $_POST['Address'];
                    $editAddress = "UPDATE student SET Address = '$ea' WHERE Roll_no = '$RollKey'; ";
                    $editAddressResult = mysqli_query($conn,$editAddress);
                    if($editAddressResult){
                        $resAddress =  "Address successfully updated to $ea";
                    }
                    else{
                        $resAddress = mysqli_error($conn);
                    }
                }
            }
            if(isset($_POST['CheckDep'])){
                if(!empty($_POST['Department'])){
                    $edep = $_POST['Department'];
                    $d = "SELECT Department FROM student WHERE Roll_no = '$RollKey'; ";
                    $dRes = mysqli_query($conn,$d);
                    $dResult = mysqli_fetch_assoc($dRes);
                    $depOld = $dResult['Department'];
                    $editDepartment = "UPDATE student SET Department ='$edep' WHERE Roll_no = '$RollKey'; ";
                    $editDepartmentResult = mysqli_query($conn,$editDepartment);
                    $depOldUpdate =  "UPDATE department SET no_of_student = (SELECT COUNT(*) FROM Student WHERE Department='$depOld') WHERE Name = '$depOld'";
                    $depNewUpdate =  "UPDATE department SET no_of_student = (SELECT COUNT(*) FROM Student WHERE Department='$edep') WHERE Name = '$edep'";
                    $dResOld = mysqli_query($conn,$depOldUpdate);
                    $dResNew = mysqli_query($conn,$depNewUpdate);
                    if($editDepartmentResult){
                        $resDep = "Department successfully updated to $edep";
                    }
                    else{
                        $resDep = mysqli_error($conn);
                    }
                }
            }
            if(isset($_POST['CheckRoll'])){
                if(!empty($_POST['RollNumber'])){
                    $ern = $_POST['RollNumber'];
                    $editRollNumber = "UPDATE student SET Roll_no ='$ern' WHERE Roll_no = '$RollKey'; ";
                    $editRollNumberAttends = "UPDATE attends SET Roll_no = '$ern' WHERE Roll_no = '$RollKey'; ";
                    $editRollNumberTeaches = "UPDATE teaches SET Roll_no = '$ern' WHERE Roll_no = '$RollKey'; ";
                    $editRollResult = mysqli_query($conn,$editRollNumber);
                    $editRollAttends = mysqli_query($conn,$editRollNumberAttends);
                    $editRollTeches = mysqli_query($conn,$editRollNumberTeaches);
                    if($editRollResult){
                        $resRoll =  "Roll Number successfully updated to $ern";
                    }
                    else{
                        $resRoll = mysqli_error($conn);
                    }
                }
            }
        }
        
    }
    else{
        mysqli_connect_error();
    }

?>

<!DOCTYPE HTML>

<HTML>
    <HEAD>
        <link href="../CSS/edit_result.css" rel="stylesheet" type="text/css">
    </HEAD>
    <BODY>
        <div><h1>The following are the results of editing query for student <?php echo $RollKey ?></h1></div>
        <div class="data" id="d1">-> <?php echo $resName; ?> </div>
        <div class="data" id="d2">-> <?php echo $resDate; ?></div>
        <div class="data" id="d3">-> <?php echo $resMobile; ?></div>
        <div class="data" id="d4">-> <?php echo $resAddress; ?></div>
        <div class="data" id="d5">-> <?php echo $resDep; ?></div>
        <div class="data" id="d6">-> <?php echo $resRoll; ?></div>
        <div class="links">
        <div class="link"> <a href="../EditStudent.php">Go to Edit Student </a> </div>
        <div class="link"> <a href="../StudentMenu.html"> Go to Student Menu </a> </div>
        <div class="link"> <a href="../Home.html"> Go to Home Page</a> </div>
        </div>
        <script>
            var d1 = document.getElementById("d1");
            var c1 = <?php echo json_encode(isset($_POST['CheckName'])); ?>;
            if(c1 == true){
                d1.style.display = "block";
            }
            else{
                d1.style.display = "none";
            }
            var d2 = document.getElementById("d2");
            var c2 = <?php echo json_encode(isset($_POST['CheckDOB'])); ?>;
            if(c2 == true){
                d2.style.display = "block";
            }
            else{
                d2.style.display = "none";
            }
            var d3 = document.getElementById("d3");
            var c3 = <?php echo json_encode(isset($_POST['CheckMobile'])); ?>;
            if(c3 == true){
                d3.style.display = "block";
            }
            else{
                d3.style.display = "none";
            }
            var d4 = document.getElementById("d4");
            var c4 = <?php echo json_encode(isset($_POST['CheckAddress'])); ?>;
            if(c4 == true){
                d4.style.display = "block";
            }
            else{
                d4.style.display = "none";
            }
            var d5 = document.getElementById("d5");
            var c5 = <?php echo json_encode(isset($_POST['CheckDep'])); ?>;
            if(c5 == true){
                d5.style.display = "block";
            }
            else{
                d5.style.display = "none";
            }
            var d6 = document.getElementById("d6");
            var c6 = <?php echo json_encode(isset($_POST['CheckRoll'])); ?>;
            if(c6 == true){
                d6.style.display = "block";
            }
            else{
                d6.style.display = "none";
            }
            if(c1==false && c2==false && c3==false && c4==false && c5==false && c6==false){
                d1.style.display = "block";
            }
        </script>
    </BODY>
</HTML>