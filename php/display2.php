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
                $_SESSION['rollValueEdit'] = $rSearch;
                $Search = "SELECT * FROM student WHERE Roll_no = '$rSearch'";
                $stuRec = mysqli_query($conn,$Search);
                if(mysqli_num_rows($stuRec)===0){
                    echo "This student doesn't exist";
                    $_SESSION['editexists'] = false;
                    header('Location: ../EditStudent.php');
                }
                else{
                    $_SESSION['editexists'] = true;
                    $_SESSION['editRoll'] = $rSearch;
                    header('Location: ../EditStudentForm.php');
                }
            }
            else{
                $e = mysqli_connect_error();
                echo $e;
            }
        }
    }
?>