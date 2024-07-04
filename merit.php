<!DOCTYPE html>
<html>
<head>
  <title>Scholarship Merit Calculator</title>
  <style>
    body{
        background-color:#343a40;
        color: wheat;
    }
    .calculator {
        background: rgba(0, 0, 0, 0.21);
                                                                border-radius: 16px;
                                                                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                                                                backdrop-filter: blur(5px);
                                                                -webkit-backdrop-filter: blur(5px);
                                                                border: 1px solid rgba(0, 0, 0, 0.3);
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
margin-top: 250px;
  border-radius: 5px;
  text-align: center;
  font-size: 20px;
}

.calculator h2 {
  margin-bottom: 20px;
}

.calculator label {
  display: block;
  margin-bottom: 10px;
  text-align: left;
}

.calculator input {

    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    max-width: 100%;
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
    color: white;
}

.calculator button {
    margin-top: 20px;
            font-size: 30px; 
            margin-left:420px; 
            font-family: 'Times New Roman', Times, serif; 
            border-width: 3px;
            border-style: solid;
            border-image: 
                linear-gradient(
            to bottom, 
            wheat, 
            rgba(0, 0, 0, 0)
            ) 1 100%;
}

.calculator button:hover {
  background: #45a049;
}

#result {
  margin-top: 20px;
  font-weight: bold;
}

  </style>
<script>
function calculateMerit() {
  var totalMarks = parseInt(document.getElementById('marks').value);
  var obtainedMarks = parseInt(document.getElementById('obtained').value);
  var collegeCutoff = parseInt(document.getElementById('cutoff').value);

  var percentage = (obtainedMarks / totalMarks) * 100;

  if (percentage >= collegeCutoff) {
    var merit = "Qualified for Scholarship";
  } else {
    var merit = "Not Qualified for Scholarship";
  }

  var result = document.getElementById('result');
  result.innerHTML = "Percentage: " + percentage.toFixed(2) + "%<br>" +
                     "Merit: " + merit;
}

</script>

</head>
    <body>

  <div class="calculator">
    <h2>Scholarship Merit Calculator</h2> <br>
    <label for="marks" style="padding-left:80px;">Enter Total Marks:</label>
    <input type="number" id="marks" placeholder="Total Marks"> <br><br>
    <label for="obtained" style="padding-left:80px;">Enter Obtained Marks:</label>
    <input type="number" id="obtained" placeholder="Obtained Marks"> <br><br>
    <label for="cutoff" style="padding-left:80px;">Enter College Cutoff:</label>
    <input type="number" id="cutoff" placeholder="College Cutoff in %"> <br><br> 
    <button style="color:black; background-color:#303438; margin-left: 20px;" onclick="calculateMerit()">Calculate</button>
    <div id="result"></div>
  </div>

</body>
</html>

