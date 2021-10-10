<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($val_err) && empty($req_err)) {
        $file_name = 'mydata.json';
        $data = array(
            'firstName' => $first_name,
            'lastName' => $last_name,
            'age' => $age,
            'designation' => $designation,
            'language' => $language,
            'email' => $email,
            'password' => $password,
            'image' => $file_path
        );

        $existing_data = file_get_contents($file_name);
        $temp_json_data = json_decode($existing_data);
        $temp_json_data[] =$data;

        $json_data = json_encode($temp_json_data, JSON_PRETTY_PRINT);

        echo "<h2>Your Input: </h2><br>";
        echo "First_Name: " . $first_name . "<br>";
        echo "Last_Name: " . $last_name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Designation: " . $designation . "<br>";
        echo "Preferred Language: " . $language . "<br>";
        echo "E-mail: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
        echo "File path: " . $file_path . "<br>";

        if(file_put_contents($file_name, $json_data)) {
            echo "Data successfully saved <br>";
        }
        else echo "no data saved";
    }
    else{
        foreach ($req_err as $r_err){
            echo $r_err."<br>";
        }
        foreach ($val_err as $v_err){
            echo $v_err."<br>";
        }
    }
}
?>
