<?php
    session_start();
?>

<!DOCTYPE HTML>
<HTML>
    <head>
<meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="CSS/edit_student.css">
      <script src="js/back.js" type="text/javascript"></script>
    <!-- <link rel="stylesheet" href="index.css"> -->

  </head>
    <body>
    <div class="back" onmouseover="onover()" onmouseout="onout()">
      <a href="EditStudent.php">
          <img src="Images/2522682.png">
          </a>
      </div>
    <form action="php/editResult.php" method="post">
      <div class="values" id="values">
          <h1> Check values you want to edit for <?php echo $_SESSION['editRoll']; ?>:</h1>
          <br>
          <div class="fname">
              <div class="check">
          <input type="checkbox" name="CheckName" value="name" onclick="showInput1()" id="check1">
              </div>
                  <label for="CheckName"><h1>Name</h1></label> <input type="text" name="Name" placeholder="Enter Name" id="hide1" pattern="[A-Z][a-z]{1,}">
          </div>
          <br><br>
          <div class="fname">
              <div class="check">
          <input type="checkbox" name="CheckRoll" value="roll" onclick="showInput2()" id="check2"></div><label for="CheckRoll"><h1>Roll Number</h1></label> <input type="tel" name="RollNumber" placeholder="Enter Roll Number" id="hide2" minlength="6" maxlength="6" pattern="[0-9]+">
          </div>
          <br><br>
          <div class="fname">
              <div class="check">
          <input type="checkbox" name="CheckDOB" value="dob" onclick="showInput3()" id="check3"></div><label for="CheckDOB"><h1>Date of Birth</h1></label> <input type="date" name="DOB" placeholder="Enter Date of Birth" id="hide3">
          </div>
          <br><br>
          <div class="fname">
              <div class="check">
          <input type="checkbox" id="check4" name="CheckMobile" value="Mobile" onclick="showInput4()"></div><label for="CheckMobile"><h1>Mobile Number</h1></label> <input type="tel" name="Mobile" placeholder="Enter Mobile Number" id="hide4" minlength="10" maxlength="10" pattern="[0-9]+">
          </div>
          <br><br>
          <div class="fname">
              <div class="check">
          <input type="checkbox" id="check5" name="CheckAddress" value="Address" onclick="showInput5()"></div><label for="CheckAddress"><h1>Address</h1></label> <input type="text" name="Address" placeholder="Enter Address" id="hide5" >
          </div>
          <br><br>
          <div class="fname">
              <div class="check">
          <input type="checkbox" id="check6" name="CheckDep" value="Department" onclick="showInput6()"></div><label for="CheckDep"><h1>Department</h1></label> <select class="" name="Department" id="hide6">
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
          <br><br>
<!--
          <div class="fname">
              <div class="check">
          <input type="checkbox" id="check7" name="CheckSub1" value="Sub1" onclick="showInput7()"></div><label for="CheckSub1"><h1>Subject 1</h1></label> 
          <select class="" name="Sub1" id="hide7">
            <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-311">CS-311</option>
            <option value="EE-311">EE-311</option>
            <option value="ME-311">ME-311</option>
            <option value="AR-311">AR-311</option>
            <option value="CE-311">CE-311</option>
            <option value="EC-311">EC-311</option>
            <option value="CH-311">CH-311</option>
            <option value="MSE-311">MSE-311</option>

          </select>
          </div>
          <br><br>
-->
<!--
          <div class="fname">
              <div class="check">
          <input type="checkbox" id="check8" name="CheckSub2" value="Sub2" onclick="showInput8()"></div><label for="CheckSub2"><h1>Subject 2</h1></label> 
          <select class="" name="Sub2" id="hide8">
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-312">CS-312</option>
            <option value="EE-312">EE-312</option>
            <option value="ME-312">ME-312</option>
            <option value="AR-312">AR-312</option>
            <option value="CE-312">CE-312</option>
            <option value="EC-312">EC-312</option>
            <option value="CH-312">CH-312</option>
            <option value="MSE-312">MSE-312</option>

          </select>
          </div>
          <br><br>
-->
<!--
          <div class="fname">
              <div class="check">
          <input type="checkbox" id="check9" name="CheckSub3" value="Sub3" onclick="showInput9()"></div><label for="CheckSub3"><h1>Subject 3</h1></label>
          <select class="" name="Sub3" id="hide9">
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-313">CS-313</option>
            <option value="EE-313">EE-313</option>
            <option value="ME-313">ME-313</option>
            <option value="AR-313">AR-313</option>
            <option value="CE-313">CE-313</option>
            <option value="EC-313">EC-313</option>
            <option value="CH-313">CH-313</option>
            <option value="MSE-313">MSE-313</option>

          </select>
          </div>
          <br><br>
-->
<!--
          <div class="fname">
              <div class="check">
          <input type="checkbox" id="check10" name="CheckSub4" value="Sub4" onclick="showInput10()"></div><label for="CheckSub4"><h1>Subject 4</h1></label> 
          <select class="" name="Sub4" id="hide10">
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-314">CS-314</option>
            <option value="EE-314">EE-314</option>
            <option value="ME-314">ME-314</option>
            <option value="AR-314">AR-314</option>
            <option value="CE-314">CE-314</option>
            <option value="EC-314">EC-314</option>
            <option value="CH-314">CH-314</option>
            <option value="MSE-314">MSE-314</option>

          </select>
          </div>
          <br><br>
-->
<!--
          <div class="fname">
              <div class="check">
          <input type="checkbox" id="check11" name="CheckSub5" value="Sub5" onclick="showInput11()">
              </div><label for="CheckSub5"><h1>Subject 5</h1></label>
          <br><br>
          <select class="" name="Sub5" id="hide11">
              <option value="" selected disabled hidden>Select an Option</option>
            <option value="CS-306">CS-306</option>
            <option value="EE-371">EE-371</option>
            <option value="ME-371">ME-371</option>
            <option value="AR-370">AR-370</option>
            <option value="CE-306">CE-306</option>
            <option value="ECE-370">ECE-370</option>
            <option value="CH-370">CH-370</option>
            <option value="MSE-370">MSE-370</option>

          </select>
          </div>
-->
        <div class="submit">
          <input type="submit" name="Submit" value="Submit" id="fg">
        </div>
          </div>
        </form>
        <script type="text/javascript">
        function showInput1(){
            var c=document.getElementById("check1");
            console.log(c);
            var i=document.getElementById("hide1");
            console.log(i);
            if(c.checked ==true){
                i.style.visibility= "visible";
                i.required = true;
            }
            else{
                i.style.visibility= "hidden";
                i.required = false;
            }
        }
        
        function showInput2(){
            var c=document.getElementById("check2");
            console.log(c);
            var i=document.getElementById("hide2");
            console.log(i);
            if(c.checked ==true){
                i.style.visibility= "visible";
                i.required = true;
            }
            else{
                i.style.visibility= "hidden";
                i.required = false;
            }
        }
        
          function showInput3(){
            var c=document.getElementById("check3");
            console.log(c);
            var i=document.getElementById("hide3");
            console.log(i);
            if(c.checked ==true){
                i.style.visibility= "visible";
                i.required = true;
            }
            else{
                i.style.visibility= "hidden";
                i.required = false;
            }
        }
        
          function showInput4(){
            var c=document.getElementById("check4");
            console.log(c);
            var i=document.getElementById("hide4");
            console.log(i);
            if(c.checked ==true){
                i.style.visibility= "visible";
                i.required = true;
            }
            else{
                i.style.visibility= "hidden";
                i.required = false;
            }
        }
        
          function showInput5(){
            var c=document.getElementById("check5");
            console.log(c);
            var i=document.getElementById("hide5");
            console.log(i);
            if(c.checked ==true){
                i.style.visibility= "visible";
                i.required = true;
            }
            else{
                i.style.visibility= "hidden";
                i.required = false;
            }
        }
        
          function showInput6(){
            var c=document.getElementById("check6");
            console.log(c);
            var i=document.getElementById("hide6");
            console.log(i);
            if(c.checked ==true){
                i.style.visibility= "visible";
                i.required = true;
            }
            else{
                i.style.visibility= "hidden";
                i.required = false;
            }
        }
        
//          function showInput7(){
//            var c=document.getElementById("check7");
//            console.log(c);
//            var i=document.getElementById("hide7");
//            console.log(i);
//            if(c.checked ==true){
//                i.style.visibility= "visible";
//                i.required = true;
//            }
//            else{
//                i.style.visibility= "hidden";
//                i.required = false;
//            }
//        }
        
//          function showInput8(){
//            var c=document.getElementById("check8");
//            console.log(c);
//            var i=document.getElementById("hide8");
//            console.log(i);
//            if(c.checked ==true){
//                i.style.visibility= "visible";
//                i.required = true;
//            }
//            else{
//                i.style.visibility= "hidden";
//                i.required = false;
//            }
//        }
        
//          function showInput9(){
//            var c=document.getElementById("check9");
//            console.log(c);
//            var i=document.getElementById("hide9");
//            console.log(i);
//            if(c.checked ==true){
//                i.style.visibility= "visible";
//                i.required = true;
//            }
//            else{
//                i.style.visibility= "hidden";
//                i.required = false;
//            }
//        }
        
//          function showInput10(){
//            var c=document.getElementById("check10");
//            console.log(c);
//            var i=document.getElementById("hide10");
//            console.log(i);
//            if(c.checked ==true){
//                i.style.visibility= "visible";
//                i.required = true;
//            }
//            else{
//                i.style.visibility= "hidden";
//                i.required = false;
//            }
//        }
        
//          function showInput11(){
//            var c=document.getElementById("check11");
//            console.log(c);
//            var i=document.getElementById("hide11");
//            console.log(i);
//            if(c.checked ==true){
//                i.style.visibility= "visible";
//                i.required = true;
//            }
//            else{
//                i.style.visibility= "hidden";
//                i.required = false;
//            }
//        }
          
    </script>
    </body>
</HTML>