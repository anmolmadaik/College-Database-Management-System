<?php
    session_start();
    if(isset($_POST['Submit2'])){
        if(empty($_POST['rollSearch'])){
            echo "No Roll Number Entered";
        }
        else{
            $_SESSION['showdel'] = true;
            include('connection.php');
            if($conn){
                $rSearch = $_POST['rollSearch'];
                $_SESSION['rollValue'] = $rSearch;
                $Search = "SELECT * FROM student WHERE Roll_no = '$rSearch'";
                $stuRec = mysqli_query($conn,$Search);
                if(mysqli_num_rows($stuRec)===0){
                    echo "This student doesn't exist";
                    $_SESSION['deleteExists'] = false;
                    header('Location: ../DeleteStudent.php');
                }
                else{
                    $depRec = mysqli_fetch_assoc($stuRec);
                    $dep = $depRec['Department'];
                    $rSearch = $_POST['rollSearch'];
                    $_SESSION['deleteExists'] = true;
                    $deleteQuery = "DELETE from student WHERE Roll_no = '$rSearch'; ";
                    $deleteQueryAttends = "DELETE from attends WHERE Roll_no = '$rSearch'; ";
                    $deleteQueryTeaches = "DELETE from teaches WHERE Roll_no = '$rSearch'; "; 
                    $deleteStudent = mysqli_query($conn,$deleteQuery);
                    $deleteStudentAttends = mysqli_query($conn,$deleteQueryAttends);
                    $deleteStudentTeaches = mysqli_query($conn,$deleteQueryTeaches);
                    $d = "UPDATE department SET no_of_student = (SELECT COUNT(*) FROM student WHERE Department='$dep') WHERE Name = '$dep'";
                    $del = mysqli_query($conn,$d);
                    if($deleteStudent && $deleteStudentAttends && $deleteStudentTeaches){
                        header('Location: ../DeleteStudent.php');
                    }
                    else{
                        mysqli_error($conn);
                    }
                }
            }
            else{
                $e = mysqli_connect_error();
                echo $e;
            }
        }
    }
    else{
        $_SESSION['showdel'] = false;
    }
?>