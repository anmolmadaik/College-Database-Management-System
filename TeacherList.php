<?php 
    session_start();
    include('php/connection.php');
    if(isset($_POST['DepFilterIns'])){
        if($conn){
            $val = $_POST['DepFilterIns'];
            switch($val){
                case "Computer Science and Engineering":
                    $query = "SELECT * FROM instructor WHERE Department = '$val';";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 1;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    }
                break;
                case "Electrical Engineering":
                    $query = "SELECT * FROM instructor WHERE Department = '$val';";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 2;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    } 
                break;
                case "Mechanical Engineering":
                    $query = "SELECT * FROM instructor WHERE Department = '$val';";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 3;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    } 
                break;
                case "Architecture":
                    $query = "SELECT * FROM instructor WHERE Department = '$val';";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 4;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    } 
                break;
                case "Civil Engineering":
                    $query = "SELECT * FROM instructor WHERE Department = '$val';";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 5;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    } 
                break;
                case "Electronics and Communication Engineering":
                    $query = "SELECT * FROM instructor WHERE Department = '$val';";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 6;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    } 
                break;
                case "Chemical Engineering":
                    $query = "SELECT * FROM instructor WHERE Department = '$val';";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 7;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    } 
                break;
                case "Material Science and Engineering":
                    $query = "SELECT * FROM instructor WHERE Department = '$val';";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 8;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    } 
                break;
                default:
                    $query = "SELECT * FROM instructor;";
                    $res = mysqli_query($conn,$query);
                    if($res){
                        if(mysqli_num_rows($res)==0){
                            echo "<script> alert(\"No data for '$val'\");</script>;";
                        }
                        else{
                            $_SESSION['selectedOpIns'] = 0;
                            $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                        }
                    }
                    else{
                        mysqli_error($conn);
                    } 
            }
            
        }
        else{
            mysqli_connect_error();
        }
    }
    else{
        if($conn){
            $query = "SELECT * FROM instructor;";
            $res = mysqli_query($conn,$query);
            if($res){
                if(mysqli_num_rows($res)==0){
                    echo "<script>No data</script>;";
                }
                else{
                    $_SESSION['selectedOpIns'] = 0;
                    $tab = mysqli_fetch_all($res,MYSQLI_ASSOC);
                }
            }
            else{
                mysqli_error($conn);
            } 
        }
        else{
            mysqli_connect_error();
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link href="CSS/list.css" rel="stylesheet" type="text/css">
      <script src="js/back.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="back" onmouseover="onover()" onmouseout="onout()">
      <a href="TeacherMenu.html">
          <img src="Images/2522682.png">
          </a>
      </div>
    <div class="titl">
      <h1>Teacher List</h1>
    </div>
        <form method="post" action="TeacherList.php" id="list">
        <div class="filter">
            <label><h1>Filter Department</h1></label>
            <select class="" name="DepFilterIns" id="list" onchange="this.form.submit()">
            <option value="all" id="op0" onclick="subForm0()">Show All Departments</option>
            <option value="Computer Science and Engineering" id="op1" onclick="subForm1()">Computer Science and Engineering</option>
            <option value="Electrical Engineering" id="op2" onclick="subForm2()">Electrical Engineering</option>
            <option value="Mechanical Engineering" id="op3" onclick="subForm3()">Mechanical Engineering</option>
            <option value="Architecture" id="op4" onclick="subForm4()">Architecture</option>
            <option value="Civil Engineering" id="op5" onclick="subForm5()">Civil Engineering</option>
            <option value="Electronics and Communication Engineering" id="op6" onclick="subForm6()">Electronics and Communication Engineering</option>
            <option value="Chemical Engineering"  id="op7" onclick="subForm7()">Chemical Engineering</option>
            <option value="Material Science and Engineering"  id="op8" onclick="subForm8()">Material Science and Engineering</option>
          </select>
            <div class="result"> 
                <table>
                    <tr>
                        <th>ID:</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Department</th>
                    </tr>
                    <?php 
                        foreach($tab as $row){
                            echo "<tr>";
                            foreach($row as $data){
                                echo "<td>$data</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
        </form>
        <script>
            var op0 = document.getElementById("op0");
            var op1 = document.getElementById("op1");
            var op2 = document.getElementById("op2");
            var op3 = document.getElementById("op3");
            var op4 = document.getElementById("op4");
            var op5 = document.getElementById("op5");
            var op6 = document.getElementById("op6");
            var op7 = document.getElementById("op7");
            var op8 = document.getElementById("op8");
            var l = document.getElementById("list");
            var op = <?php echo json_encode($_SESSION['selectedOpIns']); ?>;
            switch(op){
                case 0: op0.selected = 'selected';
                break;
                case 1: op1.selected = 'selected';
                break;
                case 2: op2.selected = 'selected';
                break;
                case 3: op3.selected = 'selected';
                break;
                case 4: op4.selected = 'selected';
                break;
                case 5: op5.selected = 'selected';
                break;
                case 6: op6.selected = 'selected';
                break;
                case 7: op7.selected = 'selected';
                break;
                case 8: op8.selected = 'selected';
                break;
                default: op0.selected = 'selected';
            }
        </script>
  </body>
</html>
