<html>
    <body>
        <?php
            $db_host = "fdb28.awardspace.net";
            $db_name = "4189440_csci440group";
            $db_user = "4189440_csci440group";
            $db_pass = "CSCI440!";

            $mysqli_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if ($mysqli_connection->connect_error) {
                echo "Could not connect to $db_user, error: " . $mysqli_connection->connect_error;
            } else {
                echo "Connected to $db_user!";
            }

            $username = $_POST['username'];
            $password = $_POST['user-password'];
            $userWeight = $_POST['weight'];
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $height = $_POST['height'];

            $sql = "INSERT INTO `UserProfile` (`profileID`, `username`, `password`, `userWeight`, `fname`, `lname`, `email`, `gender`, `age`, `height`) VALUES (DEFAULT, '$username', '$password', '$userWeight', '$fname', '$lname', '$email', '$gender', '$age', '$height')";

            // insert in database 
            $rs = mysqli_query($mysqli_connection, $sql);

            if($rs)
            {
                echo "Account Details Inserted";
            }
            else
            {
                echo "Details Not Inserted";
            }

            $mysqli_connection->close();
            echo "<hr> mysqli_connection closed!";
        ?>
    </body>
</html>
