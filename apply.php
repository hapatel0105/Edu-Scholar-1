<?php
if (isset($_POST['submit'])){
    $conn = new mysqli('localhost','root','','main');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }
    
else{
    $sname = $_POST['sname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $cat = $_POST['cat'];
    $mat = $_POST['mat'];
    $gender = $_POST['gender'];
    $mph = $_POST['mph'];
    $income = $_POST['income'];
    $sadd = $_POST['sadd'];
    $sadd2 = $_POST['sadd2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $code = $_POST['code'];
    $country = $_POST['country'];

    $stmt = $conn->prepare("insert into apply(sname,dob,email,cat,mat,gender,mph,income,sadd,sadd2,city,state,code,country)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssss",$sname,$dob,$email,$cat,$mat,$gender,$mph,$income,$sadd,$sadd2,$city,$state,$code,$country);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
header('location: edu.php');
}
if (isset($_FILES['idp']))
{

    $file_name = $_FILES['idp']['name'];
    $file_size = $_FILES['idp']['size'];
    $file_tmp = $_FILES['idp']['tmp_name'];
    $file_type = $_FILES['idp']['type'];

    move_uploaded_file($file_tmp,"images/".$file_name);
}
if (isset($_FILES['aic']))
{

    $file_name = $_FILES['aic']['name'];
    $file_size = $_FILES['aic']['size'];
    $file_tmp = $_FILES['aic']['tmp_name'];
    $file_type = $_FILES['aic']['type'];

    move_uploaded_file($file_tmp,"income/".$file_name);
}

?>
<html>
    <title>Apply</title>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="apply.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <style>
            b{
                font-size:25px;
            }
            
/* Dropdown Button */
.dropbtn {
  color: white;
  padding: 8px;
  font-size: 6px;
  border-radius: 50%;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
    padding-right:40px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 1px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

    
        </style>
    </head>
<body>
<?php
    include './include/_navbar.php';
    ?>
    <hr style="height:3px; background-color: wheat">
    <br>
    <br>
    <br>
    <div class="container">
            <h2>
                <center style="font-size: 40px; font-family: cursive; color:wheat; padding:100px; background: rgba(0, 0, 0, 0.21);
                                                                border-radius: 16px;
                                                                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                                                                backdrop-filter: blur(5px);
                                                                -webkit-backdrop-filter: blur(5px);
                                                                border: 1px solid rgba(0, 0, 0, 0.3);"><u>Scholarship Application Form</u></center>
            </h2>
            <br>
            <!-- <hr style="height:3px; background-color: wheat"> -->

            <form action="" method="POST" enctype="multipart/form-data" style="padding:100px; background: rgba(0, 0, 0, 0.21);
                                                                border-radius: 16px;
                                                                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                                                                backdrop-filter: blur(5px);
                                                                -webkit-backdrop-filter: blur(5px);
                                                                border: 1px solid rgba(0, 0, 0, 0.3);">
            
                <label for="sname" ><b>Name*</b></label><br><br>
                <input type="text" id="sname" name="sname"  style="text-align:center; font-size:25px;" placeholder="Enter name"  required>

                <label for="dob"><b>Date Of Birth*</b></label><br><br>
                <input class="class2" type="date" id="dob" name="dob" style="text-align:center; font-size:20px; color:white;  " placeholder="Enter date of Birth"   pattern="[A-Za-z]" required>
                
                <br>
                <br>
                <label for="email"><b>Email*</b></label><br><br>
                <input type="text" id="email" name="email"  style="text-align:center; font-size:25px;" placeholder="Enter email"  required pattern="[a-z._%+-]+[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required >
                
                <label for="cat"><b>Category*</b></label><br><br>
                <input type="text" id="cat" name="cat"  style="text-align:center; font-size:25px;" placeholder="Ex. Open/OBC/ST"  required>

                <label for="mat"><b>Marital Status*</b></label> <br> <br>
                <label for="mat"><b  style="font-size:20px">Married</b></label>
                <input type="radio" id="mat" name="mat" value="Married" required>
                <label for="mat"><b style="font-size:20px">Unmarried</b></label>
                <input type="radio" id="mat" name="mat" value="Unmarried" required> <br> <br>

                <label for="gender"><b>Gender*</b></label> <br> <br>
                <label for="gender"><b  style="font-size:20px">Male</b></label>
                <input type="radio" id="gender" name="gender" value="Male"   required>
                <label for="gender"><b style="font-size:20px">Female</b></label>
                <input type="radio" id="gender" name="gender" value="Female"  required>
                
                <br>
                <br>
                <label for="mph" ><b>Mobile Contact Number</b></label><br><br>
                <input type="text" id="mph" name="mph"  style="text-align:center; font-size:25px;" placeholder="Enter Number"  required pattern="[7-9]{1}[0-9]{9}"> 
                
                <br>

                <label for="idp"><b>Upload Your Identity proof*</b></label><br><br>
                <input class="class2" type="file" id="idp" name="idp">

                <br>

                <label for="income"><b>Enter your Annual income*</b></label><br><br>
                <input type="text" id="income" name="income"  style="text-align:center; font-size:25px;" placeholder="Enter annual income"  required pattern="[0-9][1-9.]*[0-9]+[1-9]*">

                <br>
                <br>
                <label for="aic"><b>Upload Annual Income Certificate*</b></label><br><br>
                <input class="class2" type="file" id="aic" name="aic">
                

                <br>
                <br>
                <<h1 style="text-align:center; text-decoration:underline; color:wheat;">Permanent Address</h1> <br>

                <label for="sadd" ><b>Address line 1*</b></label><br><br>
                <input type="text" id="sadd" name="sadd" style="text-align:center; font-size:25px;" placeholder="Address line 1"  required>
                
                <label for="sadd2"><b>Address line 2</b></label><br><br>
                <input type="text" id="sadd2" name="sadd2"  style="text-align:center; font-size:25px;" placeholder="Address Line 2"  required><br>
                
                <label for="city" ><b>City*</b></label><br>
                <input type="text" id="city" name="city"  style="text-align:center; font-size:25px;" placeholder="Enter City"  required><br>

                <label for="state"><b>State*</b></label><br><br>
                <input type="text" id="State" name="state"  style="text-align:center; font-size:25px;" placeholder="Enter State"  required>

                <label for="code" ><b>Zip Code*</b></label><br><br>
                <input type="text" id="code" name="code"  style="text-align:center; font-size:25px;" placeholder="Enter Zip Code"  required pattern="([1-9]{1}[0-9]{5}|[1-9]{1}[0-9]{3}\\s[0-9]{3})">

                <label for="country" ><b>Country*</b></label><br><br>
                <input type="text" id="country" name="country"  style="text-align:center;font-size:25px; " placeholder="Enter Country"  required>

                <br>
                <br>    

                <button type="submit" class="class3" name="submit" style="color:white; background-color:#303438; margin-left: 425px;">Next</button>  
                
            </form> 
            
               
    </div>
         
</body>
</html>