<html>

<head>

    <title>Book Convention Centre</title>

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
            padding:3px;
        }
    </style>

</head>

<body>
    <div id="content">

    <h1>Book Convention Centre</h1>

    <form method="POST">

        <label>Name</label>
        <br>
        <input type="text" name="name" id="name" placeholder="Name">
        <br>
        <span id="nameerror">
        <br><br>

        <label>Contact Number</label>
        <br>
        <input type="text" name="contact" id="contact" placeholder="Phone Number">
        <br>
        <span id="contacterror">
        <br><br>

        <label>Convention Centre Name</label>
        <br>
        <input type="text" name="convname" id="convname" placeholder="Convention Centre">
        <br>
        <span id="convnameerror">
        <br><br>

        <label>Occasion Date</label>
        <br>
        <input type="date" name="date" id="date" placeholder="Available Date">
        <br>
        <span id="dateerror">
        <br><br>

        <label>Capacity</label>
        <br>
        <input type="text" name="capacity" id="capacity" placeholder="Capacity">
        <br>
        <span id="capacityerror">
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

            $convname = $_POST['convname'];

            $date = $_POST['date'];

            $query = "SELECT * FROM centres WHERE name='$convname' AND date='$date';";

            $sql = mysqli_query($conn, $query);

            if ($sql) {
                $row = mysqli_fetch_assoc($sql);
                if ($row != NULL) {
                    echo "<br><br>$convname booked for $date";
                }
                else {
                    echo "<br><br>No convention centres available";
                }
            }
            else {
                echo "<br>Query failed";
            }
        }

    ?>

    </div>

    <script>
        const name = document.getElementById('name');
        const contact = document.getElementById('location');
        const convname = document.getElementById('convname');
        const date = document.getElementById('date');
        const capacity = document.getElementById('capacity');
        
        const btn = document.getElementById('submit');

        const nameError = document.getElementById("nameerror");
        const contactError = document.getElementById('locationerror');
        const convnameError = document.getElementById('convnameerror');
        const dateError = document.getElementById('dateerror');
        const capacityError = document.getElementById('capacityerror');

        btn.addEventListener("click", function(e) {
            let isError = true;

            if (!name.textContent) {
                nameError.textContent("Please fill out name field");
                isError = true;
            }

            if (contact.value.length != 10) {
                contactError.textContent("Please enter a valid phone number");
                isError = true;
            }
            else if (!contact.value) {
                dateError.textContent("Please enter contact number");
                isError = true;
            }

            if (!convname.value) {
                convnameError.textContent("Please enter convention centre name");
                isError = true;
            }

            if (!location.value) {
                contactError.textContent("Please enter your contact number");
                isError = true;
            }

            if (!capacity.value) {
                capacityError.textContent("Please fill out capacity field");
                isError = true;
            }

            if (!date.value) {
                dateError.textContent("Please select occasion date");
                isError = true;
            }

            if (isError = true) {
                e.preventDefault();
            }
        });

    </script>
</body>

</html>