<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div id = "formdiv">
    <form method="POST">
        <script src="./validate.js"></script>
        <h1>Employee Form</h1>
        <br>
        <label>Employee ID:</label>
        <input type ="text" placeholder="ID" id ="empid" name="empid">
        <span id="idError"></span>
        <br><br>
        <label>Employee Name:</label>
        <input type ="text" placeholder="Name" id ="empName" name="empName">
        <span id="nameError"></span>
        <br><br>
        <label>Job Name:</label>
        <input type ="text" placeholder="Job" id ="job" name="job">
        <span id="jobError"></span>
        <br><br>
        <label>Manager ID:</label>
        <input type ="text" placeholder="Manager ID" id="managerID" name="managerID">
        <span id="managerError"></span>
        <br><br>
        <label>Salary:</label>
        <input type ="text" placeholder="Salary" id="salary" name="salary">
        <br>
        <span id="salaryError"></span>
        <br><br>
        <input type="submit" value="Submit" id="btn" name="submit">
        <br><br>
        <a href = "./view.php">View employee details</a>
    </form>
    <br>
    </div>

<script>


</script>

</body>

<?php 
	$conn = mysqli_connect("localhost","root","","employee");

	if(!$conn){

		echo "Connection failed!";
	}
	else {
		echo "Connection was successful<br>";

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$empid= $_POST['empid'];
            $empName = $_POST['empName'];
            $job = $_POST['job'];
            $managerID = $_POST['managerID'];
            $salary = $_POST['salary'];
		
			$sql = "INSERT into details VALUES('$empid','$empName','$job','$managerID','$salary');";

			$result = mysqli_query($conn,$sql);

			if($result){
				echo "Adding details successful";
			}
			else {
				echo "Adding details failed";
			}
		
		}
	}

?>

</html>

