<?php
if (isset($_POST['submit'])){
    $conn = new mysqli('localhost','root','','main');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);

}else{
    $institutename = $_POST['institutename'];
    $state = $_POST['state'];
    $mandy = $_POST['mandy'];
    $totalMarks = $_POST['totalMarks'];
    $obtainedMarks = $_POST['obtainedMarks'];
    $marksPercentage = $_POST['marksPercentage'];
    $institutename1 = $_POST['institutename1'];
    $state1 = $_POST['state1'];
    $mandy1 = $_POST['mandy1'];
    $totalMarks1 = $_POST['totalMarks1'];
    $obtainedMarks1 = $_POST['obtainedMarks1'];
    $marksPercentage1 = $_POST['marksPercentage1'];
    $institutename2 = $_POST['institutename2'];
    $state2 = $_POST['state2'];
    $mandy2 = $_POST['mandy2'];
    $totalMarks2 = $_POST['totalMarks2'];
    $obtainedMarks2 = $_POST['obtainedMarks2'];
    $marksPercentage2 = $_POST['marksPercentage2'];
    $year = $_POST['year'];
    $marksPercentage = ((int)$obtainedMarks/(int)$totalMarks)*100;
    $marksPercentage1 = ((int)$obtainedMarks1/(int)$totalMarks1)*100;
    $marksPercentage2 = ((int)$obtainedMarks2/(int)$totalMarks2)*100;


}
    $stmt = $conn->prepare("insert into apply3(institutename,state,mandy,totalMarks,obtainedMarks,marksPercentage,institutename1,state1,mandy1,totalMarks1,obtainedMarks1,marksPercentage1,institutename2,state2,mandy2,totalMarks2,obtainedMarks2,marksPercentage2,year)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiidsssiiisssiiis",$institutename,$state,$mandy,$totalMarks,$obtainedMarks,$marksPercentage,$institutename1,$state1,$mandy1,$totalMarks1,$obtainedMarks1,$marksPercentage1,$institutename2,$state2,$mandy2,$totalMarks2,$obtainedMarks2,$marksPercentage2,$year);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header('location: index.html');
}


if (isset($_FILES['10']))
{

    $file_name = $_FILES['10']['name'];
    $file_size = $_FILES['10']['size'];
    $file_tmp = $_FILES['10']['tmp_name'];
    $file_type = $_FILES['10']['type'];

    move_uploaded_file($file_tmp,"10/".$file_name);
}
if (isset($_FILES['12']))
{

    $file_name = $_FILES['12']['name'];
    $file_size = $_FILES['12']['size'];
    $file_tmp = $_FILES['12']['tmp_name'];
    $file_type = $_FILES['12']['type'];

    move_uploaded_file($file_tmp,"12/".$file_name);
}
if (isset($_FILES['diploma']))
{

    $file_name = $_FILES['diploma']['name'];
    $file_size = $_FILES['diploma']['size'];
    $file_tmp = $_FILES['diploma']['tmp_name'];
    $file_type = $_FILES['diploma']['type'];

    move_uploaded_file($file_tmp,"diploma/".$file_name);
}
?>
<html>
    <title>Apply 2</title>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"> 
        <link rel="stylesheet" href="edu-apply-education.css">
        <link rel="stylesheet" href="education.css">
        
        <script type="text/javascript">
     
     document.addEventListener('focusout', function(event){
         marksPresentagae()
         marksPresentagae1()
         marksPresentagae2()

     });
      
     function marksPresentagae() {
     
       let totalMarksInput = document.getElementById("totalMarks");
       let obtainedMarksInput = document.getElementById("obtainedMarks");
       let marksPercentageMarksInput = document.getElementById("marksPercentage");
     
       totalMarks = parseFloat(totalMarksInput.value)
       obtainedMarks= parseFloat(obtainedMarksInput.value)
         
       if(totalMarks>0 && obtainedMarks>0){
          let tp = (obtainedMarks/totalMarks)*100;
          marksPercentageMarksInput.value=tp.toFixed(2);
       }else{
         marksPercentageMarksInput.value=""
         }
      }
      function marksPresentagae1() {
     
     let totalMarksInput = document.getElementById("totalMarks1");
     let obtainedMarksInput = document.getElementById("obtainedMarks1");
     let marksPercentageMarksInput = document.getElementById("marksPercentage1");
   
     totalMarks1 = parseFloat(totalMarksInput.value)
     obtainedMarks1= parseFloat(obtainedMarksInput.value)
       
     if(totalMarks1>0 && obtainedMarks1>0){
        let tp = (obtainedMarks1/totalMarks1)*100;
        marksPercentageMarksInput.value=tp.toFixed(2);
     }else{
       marksPercentageMarksInput.value=""
       }
    }
    function marksPresentagae2() {
     
     let totalMarksInput = document.getElementById("totalMarks2");
     let obtainedMarksInput = document.getElementById("obtainedMarks2");
     let marksPercentageMarksInput = document.getElementById("marksPercentage2");
   
     totalMarks2 = parseFloat(totalMarksInput.value)
     obtainedMarks2= parseFloat(obtainedMarksInput.value)
       
     if(totalMarks2>0 && obtainedMarks2>0){
        let tp = (obtainedMarks2/totalMarks2)*100;
        marksPercentageMarksInput.value=tp.toFixed(2);
     }else{
       marksPercentageMarksInput.value=""
       }
    }
     </script>
     <style>
/* Dropdown Button */
.dropbtn {
  color: white;
  padding: 8px;
  font-size: 6px;
  border-radius: 50%;
}
.class3{
            color:red;
            font-size: 30px; 
            margin-left:420px; 
            font-family: 'Times New Roman', Times, serif; 
            color: red;
            border-width: 3px;
            border-style: solid;
            border-image: 
                linear-gradient(
            to bottom, 
            wheat, 
            rgba(0, 0, 0, 0)
            ) 1 100%;
        }
/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  text-align:center;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
}

.alert {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #f0f0f0;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

    </style>
    <script>
        function showAlert() {
            alert("Form Submitted successful");
        }
    </script>
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div>
            <img src="mainlogo1.png" alt="">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html" style="font-size: 25px;  font-family: 'Times New Roman', Times, serif; padding-right:20px;padding-left:30px; margin-right:10px;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="apply.php" style="font-size: 25px;  font-family: 'Times New Roman', Times, serif; padding-right: 50px;">Apply Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html" style="font-size: 25px;  font-family: 'Times New Roman', Times, serif; padding-right: 50px;" >About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" style="font-size: 25px;  font-family: 'Times New Roman', Times, serif; padding-right: 50px;" >Contact us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;  padding-right: 50px;">
                            Result
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php" style="font-size: 25px;  font-family: 'Times New Roman', Times, serif; padding-right: 50px;" >Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php" style="font-size: 25px;  font-family: 'Times New Roman', Times, serif; padding-right: 50px;" >Register</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <div class="dropdown">
                    <button class="dropbtn" style="background-color: wheat;" ><img src="user.png" height="40px" width="40px"></img></button>
                        <div class="dropdown-content">
                            <a href="logout.php">Sign out</a>
                        </div>    
                </div>
            </form>
    </div>
</nav>
    <hr style="height:3px; background-color: wheat">
    <br>
    <br>
    <br>
<div class="container">
            <h2>
                <center style="font-size: 40px; font-family: cursive; color:wheat;  padding:100px; background: rgba(0, 0, 0, 0.21);
                                                                border-radius: 16px;
                                                                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                                                                backdrop-filter: blur(5px);
                                                                -webkit-backdrop-filter: blur(5px);
                                                                border: 1px solid rgba(0, 0, 0, 0.3);"><u>Education Details</u></center>
            </h2>
            <br>
            <!-- <hr style="height:3px; background-color: wheat"> -->

            <form action="" method="POST" enctype="multipart/form-data" style="background: rgba(0, 0, 0, 0.21);
                                                                border-radius: 16px;
                                                                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                                                                backdrop-filter: blur(5px);
                                                                -webkit-backdrop-filter: blur(5px);
                                                                border: 1px solid rgba(0, 0, 0, 0.3);">
            <!-- 10th  -->
            <br><br>
             <h2 style="text-align:center; text-decoration:underline; color:wheat;">Class 10</h2> <br><br>

                <label for="institutename"><b>Name of Institute*</b></label>
                <input type="text" id="institutename" name="institutename"  style="text-align:center" placeholder="Institute name"  required>

                <label for="state"><b>State*</b></label>
                <input type="text" id="state" name="state"  style="text-align:center" placeholder="State name"  required>

                <label for="mandy"><b>Month and year of Passing*</b></label> <br><br>
                <input  type="date" id="mandy" name="mandy"  style="text-align:center"   required> <br><br>

                <label for="marksPercentage"><b>Percentage*</b></label>
                <input type="text" class="form-control" placeholder="Total Marks" id="totalMarks" name="totalMarks">
                <input type="text" class="form-control" placeholder="Obtained Markes" id="obtainedMarks" name="obtainedMarks">
                <input type="text" class="form-control1" placeholder="Marks Percentage" name="marksPercentage" id="marksPercentage" disabled>
                <br>
                <br>
                <label for="10"><b>Upload 10th Marksheet*</b></label> <br> <br>
                <input  class="class2" type="file" id="10" name="10"> <br><br><br>
                <!-- 12th --> 
                <h2 style="text-align:center; text-decoration:underline; color:wheat;">Class 12</h2> <br><br>


                <label for="institutename1"><b>Name of Institute*</b></label>
                <input type="text" id="institutename1" name="institutename1"  style="text-align:center" placeholder="Institute name"  required>

                <label for="state1"><b>State*</b></label>
                <input type="text" id="state1" name="state1"  style="text-align:center" placeholder="State name"  required>

                <label for="mandy1"><b>Month and year of Passing*</b></label><br>
                <input   type="date" id="mandy1" name="mandy1"  style="text-align:center"   required> <br><br>

                <label for="marksPercentage1"><b>Percentage*</b></label>
                <input type="text" class="form-control" placeholder="Total Marks" id="totalMarks1" name="totalMarks1">
                <input type="text" class="form-control" placeholder="Obtained Markes" id="obtainedMarks1" name="obtainedMarks1">
                <input type="text" class="form-control1" placeholder="Marks Percentage" name="marksPercentage1" id="marksPercentage1" disabled>
                <br>
                <br>
                <label for="12"><b>Upload 12th Marksheet*</b></label> 
                <input class="class2"  type="file" id="12" name="12"> <br><br><br><br>
                <!-- Diploma -->

                <h2 style="text-align:center; text-decoration:underline; color:wheat;">Diploma</h2> <br><br>

                <label for="institutename2"><b>name of Institute*</b></label>
                <input type="text" id="institutename2" name="institutename2"  style="text-align:center" placeholder="Institute name"  required>

                <label for="state2"><b>State*</b></label>
                <input type="text" id="state2" name="state2"  style="text-align:center" placeholder="State name"  required>

                <label for="mandy2"><b>Month and year of Passing*</b></label> <br><br>
                <input  type="date" id="mandy2" name="mandy2"  style="text-align:center"   required> <br><br>

                <label for="marksPercentage2"><b>CGPA*</b></label>
                <input type="text" class="form-control" placeholder="Total Marks" id="totalMarks2" name="totalMarks2">
                <input type="text" class="form-control" placeholder="Obtained Markes" id="obtainedMarks2" name="obtainedMarks2">   
                <input type="text" class="form-control1" placeholder="Marks Percentage" name="marksPercentage2" id="marksPercentage2" disabled>
                <br>
                <br>
                <label for="diploma" class="file-upload"><b>Upload Diploma Marksheet*</b></label> <br> <br>
                <input class="class2"  type="file" id="diploma" name="diploma"> <br><br><br><br>
                <!-- Current Year of Graduation  -->
                <h2 style="text-align:center; text-decoration:underline; color:wheat;">Current Education Details</h2> <br><br>
                
                <label for="year"><b style="text-size=200px;">No. of years completed for the current course*</b></label> <br> <br>
                <select class="class2" name="year" id="year">
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                    <option value="5th Year">5th Year</option>
                    <option value="6th Year">6th Year</option>
                </select>
                
                <br>
                <br>
                <br>       
                <button type="submit" class="class3" name="submit" onclick="showAlert()" style="color:black; background-color:#303438; margin-left: 400px;">Submit</button>
                <br><br>
            </form>    
</div>      
</body>
</html>