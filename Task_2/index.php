<?php include "Controller/validate.php"?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Task 2</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <hr>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <label for="first_name">First Name:</label> <input type="text" name="first_name" ><br>
            <label for="last_name">Last Name:</label> <input type="text" name="last_name"><br>
            <label for="age">Age:</label> <input type="text" name="age"><br>
            <label for="designation">Designation:</label>
            <input type="radio" name="designation" value="Junior Programmer">junior programmer
            <input type="radio" name="designation" value="Senior Programmer">Senior programmer
            <input type="radio" name="designation" value="Project Lead">Project lead
            <br>
            <label for="language">Preferred language:</label>
            <input type="checkbox" name="language" value="JAVA">JAVA
            <input type="checkbox" name="language" value="PHP">PHP
            <input type="checkbox" name="language" value="C++">C++
            <br>
            <label for="email">E-mail: </label> <input type="text" name="email"><br>
            <label for="password">Password: </label> <input type="password" name="password"><br>
            <label for="up_file">Please choose a file</label> <input type="file" name="up_file"><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
        </form>>

    <?php include "Controller/process.php" ?>
    </body>
</html>