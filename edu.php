<?php
if (isset($_POST['submit'])){
    $conn = new mysqli('localhost','root','','main');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);

}else{
    $yesno = $_POST['yesno'];
    $cl = $_POST['cl'];
    $coursename = $_POST['coursename'];
    $institutename = $_POST['institutename'];
    $state = $_POST['state'];
    $fee = $_POST['fee'];
    $nonfee = $_POST['nonfee'];
    $income = $_POST['income'];

    $stmt = $conn->prepare("insert into apply2(yesno,cl,coursename,institutename,state,fee,nonfee,income)
        values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss",$yesno,$cl,$coursename,$institutename,$state,$fee,$nonfee,$income);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
header('location: education.php');
}
if (isset($_FILES['feedoc']))
{

    $file_name = $_FILES['feedoc']['name'];
    $file_size = $_FILES['feedoc']['size'];
    $file_tmp = $_FILES['feedoc']['tmp_name'];
    $file_type = $_FILES['feedoc']['type'];

    move_uploaded_file($file_tmp,"feedoc/".$file_name);
}
if (isset($_FILES['nonfeedoc']))
{

    $file_name = $_FILES['nonfeedoc']['name'];
    $file_size = $_FILES['nonfeedoc']['size'];
    $file_tmp = $_FILES['nonfeedoc']['tmp_name'];
    $file_type = $_FILES['nonfeedoc']['type'];

    move_uploaded_file($file_tmp,"nonfeedoc/".$file_name);
}
if (isset($_FILES['al']))
{

    $file_name = $_FILES['al']['name'];
    $file_size = $_FILES['al']['size'];
    $file_tmp = $_FILES['al']['tmp_name'];
    $file_type = $_FILES['al']['type'];

    move_uploaded_file($file_tmp,"admissionletter/".$file_name);
}
?>
<html>
    <title>Apply 2</title>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="edu-apply-education.css">
        <style>
            .container {
            border:solid wheat;
            border-radius:  30px;
            padding: 100px;
            background-color: #343a40;
            border-width: 5px;
            border-style: solid;
            border-image: 
                            linear-gradient(
                        to bottom, 
                        wheat, 
                        rgba(0, 0, 0, 0)
                        ) 1 100%;
            /* border-image:
                        liner-gradient(
                    to right, 
                    wheat, 
                    rgba(0, 0, 0, 0)
                    ) 1 100%; */
                        
        }
        input[type=text],
input[type=datetime-local],
input[type=password] {
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    max-width: 60%;
    padding: 1rem;
    /* color: transparent; */
    background-color:#303438;
    /* border-width: 10px; */
    border-style:dotted;
    border-radius:20px;
    /* border-style: solid; */
    border-image: 
        linear-gradient(
                        to bottom,
                        wheat,

                        rgba(0, 0, 0, 0)
                        ) 1 10%;
    width: 60%;
    height: 8%; 
    /* border-left:groove; */
     margin-left: 180px;
    color: white;
}
        
        b{
            font-size:20px;
        }
        label{
            color: rgba(255,255,255,.5);
            margin-left: 180px; 
            font-size:30px;
        }
        .class2{
            margin-left: 180px;
            font-size:20px;
        }
        b{
            font-size:25px;
        }
        button{
            color:red;
        }
        .class3{
            color:red;
            font-size: 20px; 
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
        .class2{
            margin-left: 180px;
            font-size:20px;
            max-width: 60%;
            padding: 1rem;
            color: white;
            background-color:#343a40;
            color:white;
            text-align:center;
            /* border-width: 10px; */
            border-style:solid;
            /* border-style: solid; */
            border-image: 
                linear-gradient(
                                to bottom,
                                wheat,
 
                                rgba(0, 0, 0, 0)
                                ) 1 10%;
            width: 60%;
            height: 8%; 
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
  text-align: center;
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
                <center style="font-size: 40px; font-family: cursive; color:wheat;"><u>Current Academic Details</u></center>
            </h2>
            <br>
            <!-- <hr style="height:3px; background-color: wheat"> -->

            <form action="" method="POST" enctype="multipart/form-data">

                <label for="yesno"><b>Have you secured admission in Institue?*</b></label> <br> <br>
                <label for="yesno" ><b style="font-size:20px">Yes</b></label>
                <input type="radio" id="yesno" name="yesno" value="yes" required>
                <label for="yesno" ><b  style="font-size:20px">No</b></label>
                <input type="radio" id="yesno" value="no" name="yesno" required>
                <br>
                <br>

                <label for="cl"><b style="text-size=200px;">Course Level*</b></label> <br> <br>
                <select class="class2" name="cl" id="cl">
                    <option value="pre-primary">Pre-Primary</option>
                    <option value="primary and Secondary">Primary and Secondary</option>
                    <option value="Higher Secondary">Higher Secondary</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Post Graduate">Post Graduate</option>
                    <option value="Professional Certificate">Professional Certificate</option>
                    <option value="ITI">ITI</option>
                </select>

                <br>
                <br>
                <label for="coursename"><b>Course Name*</b></label>
                <input type="text" id="coursename" name="coursename" style="text-align:center" placeholder="Course Name"  required>
                
                <label for="institutename"><b>Name of Institute*</b></label>
                <input type="text" id="institutename" name="institutename"  style="text-align:center" placeholder="Institute Name"  required>
                
                <label for="state"><b>State*</b></label>
                <input type="text" id="state" name="state"  style="text-align:center" placeholder="State Name"  required>

                <label for="fee"><b>Tuition fees(₹)*</b></label> <br> 
                <input type="text" id="fee" name="fee"  style="text-align:center" placeholder="Tuition fee" required>

                <label for="feedoc"><b>Upload Tuition Fee Receipt/Fee Structure**</b></label> <br> <br>
                <input class="class2"type="file" id="feedoc" name="feedoc">


                <br>
                <br>
                <label for="nonfee" ><b>Non-Tuition Fees(₹)</b></label>
                <input type="text" id="nonfee" name="nonfee"  style="text-align:center" placeholder="Non-Tuition Fees"  required> 
                
                <br>
                <br>
                <br>
                <label for="nonfeedoc"><b>Upload Non-Tuition Fee Receipt*</b></label> <br> <br>
                <input class="class2" type="file" id="nonfeedoc" name="nonfeedoc">

                <br>
                <br>
                <br>
                <label for="income"><b> Total Current Fees(₹)*</b></label>
                <input type="text" id="income" name="income"  style="text-align:center" placeholder="Enter annual income"  required>

                <br>
                <br>
                <label for="al"><b>Admission Letter*</b></label> <br> <br>
                <input class="class2" type="file" id="al" name="al">
                
                <!-- <br>
                <br>
                <br>
                <label> <h1 style="text-align:center; text-decoration:underline; color:wheat;">Permanent Address</h1> </label>

                <label for="sadd" ><b>Address line 1*</b></label>
                <input type="text" id="sadd" name="sadd" style="text-align:center" placeholder="Address line 1"  required>
                
                <label for="sadd2"><b>Address line 2</b></label>
                <input type="text" id="sadd2" name="sadd2"  style="text-align:center" placeholder="Address Line 2"  required>
                
                <label for="city" ><b>City*</b></label>
                <input type="text" id="city" name="city"  style="text-align:center" placeholder="Enter City"  required>

                <label for="state"><b>State*</b></label>
                <input type="text" id="State" name="state"  style="text-align:center" placeholder="Enter State"  required>

                <label for="code" ><b>Zip Code*</b></label>
                <input type="text" id="code" name="code"  style="text-align:center" placeholder="Enter Zip Code"  required>

                <label for="country" ><b>Country*</b></label>
                <input type="text" id="country" name="country"  style="text-align:center" placeholder="Enter Country"  required> -->
                <br><br><br>
                <br>
                <br>
                <br>       
                <button type="submit" class="class3" name="submit" style="color:black; background-color:#303438; margin-left: 400px;">Next</button>
            </form>    
    </div>      
</body>
</html>