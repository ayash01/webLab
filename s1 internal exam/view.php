<html>
    
    <head>
        <title>View Employee Details</title>
        <link rel="stylesheet" href="./styles.css">
    </head>

    <body>
        <form method= "POST">
        <label>Search by name:<label>
        <input type = "text" id="name"></input>
        <input type="button" value="View">
        </form>

    </body>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "employee");

        if (!$conn) {
            die ("DB connection error");
        }
    
        else {
            echo '<br><br>Connection successful<br>';
            $name = $_GET['name'];

            $sql = "SELECT * from details WHERE emp_name='$name';";

            $query = mysqli_query($conn, $sql);

            echo "<table border='3'>";
            echo "<tr><th>Employee ID</th><th>Employee Name</th><th>Job Name</th><th>Manager ID</th><th>Salary</th></tr>";
            foreach($query as $row){
				echo "<tr><td>".$row['emp_id']."</td><td>".$row['emp_name']."</td><td>".$row['job_name']."</td><td>".$row['manager_id']."</td><td>".$row['salary']."</td></tr>";
			}
            echo "</table>";
        }

        ?>

   