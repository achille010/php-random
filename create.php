<?php
    include 'connections.php';
    if (isset($_POST['submit'])){
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $email = $_POST['email'];
        $passWord = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $gender = $_POST['gender'];
        $command = "INSERT INTO members (fname, lname, email, password, gender) VALUES 
                    ('$first_name', 
                     '$last_name',
                     '$email',
                     '$passWord',
                     '$gender' 
                    )";

        $action = $conn -> query($command);

        if ($action) echo "Data added successfully!";
        else echo "Adding failed";

        $conn -> close();
    }