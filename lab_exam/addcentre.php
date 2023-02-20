<html>

<head>

    <title>Add Convention Centre</title>

    <style>
        body {
            display: flex;
            align-items:center;
            justify-content: center;
            font-family:'Segoe UI';
            font-size: 16px;
            background:rgb(185, 217, 255);
        }

        #submit {
            padding: 6px;
            font-family: 'Segoe UI';
            font-size: 16px;
        }

        input {
            font-size: 16px;
            font-family: 'Segoe UI';
            padding: 3px;
        }

        span {
            color: #ff0000;
        }
    </style>

</head>

<body>
    <div id="content">

    <h1>Add Convention Centre</h1>

    <form method="POST">

        <label>Name</label>
        <br>
        <input type="text" name="name" id="name" placeholder="Name">
        <br>
        <span id="nameerror"></span>
        <br><br>

        <label>Location</label>
        <br>
        <input type="text" name="location" id="location" placeholder="Location">
        <br>
        <span id="locationerror"></span>
        <br><br>

        <label>Capacity</label>
        <br>
        <input type="text" name="capacity" id="capacity" placeholder="Capacity">
        <br>
        <span id="capacityerror"></span>
        <br><br>

        <label>Available Date</label>
        <br>
        <input type="date" name="date" id="date" placeholder="Available Date">
        <br>
        <span id="dateerror"></span>
        <br><br>

        <label>Contact Number</label>
        <br>
        <input type="text" name="contact" id="contact" placeholder="Phone Number">
        <br>
        <span id="contacterror"></span>
        <br><br>

        <input type="Submit" name="submit" id="submit" value="Submit">

    </form>

    <?php

        $conn = mysqli_connect('localhost','root','','exam');

        echo "<br><br>";

        if ($conn) {
            echo "<font color='green'><b>Connected to DB successfully</b></font>";
        }
        else {
            echo "<font color='red'><b>DB connection failed</b></font>";
        }

        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $location = $_POST['location'];
            $capacity = $_POST['capacity'];
            $date = $_POST['date'];
            $contact = $_POST['contact'];

            $query = "INSERT INTO centres VALUES('$name', '$location', '$capacity', '$date', '$contact');";

            $sql = mysqli_query($conn, $query);

            if ($sql) {
                echo "<br>Record added to DB";
            }
            else {
                echo "Failed to add record to DB";
            }

        }
    ?>

    </div>

    <script>
        const name1 = document.getElementById('name');
        const location1 = document.getElementById('location');
        const capacity1 = document.getElementById('capacity');
        const date1 = document.getElementById('date');
        const contact1 = document.getElementById('contact');
        
        const btn = document.getElementById('submit');

        const nameError = document.getElementById('nameerror');
        const locationError = document.getElementById('locationerror');
        const capacityError = document.getElementById('capacityerror');
        const dateError = document.getElementById('dateerror');
        const contactError = document.getElementById('contacterror');

        btn.addEventListener("click", function(e) {
            let isError = false;

            if (!name1.value) {
                nameError.textContent("Please fill out name field");
                isError = true;
            }

            if (!location1.value) {
                locationError.textContent("Please fill out location field");
                isError = true;
            }

            if (!capacity1.value) {
                capacityError.textContent("Please fill out capacity field");
                isError = true;
            }

            if (!date1.value) {
                dateError.textContent("Please select available date");
                isError = true;
            }

            if (!contact1.value) {
                dateError.textContent("Please enter contact number");
                isError = true;
            }

            if(isError = true) {
                e.PreventDefault();
            }
        });

        </script>
</body>

</html>