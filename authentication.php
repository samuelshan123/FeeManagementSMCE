<?php      
    include('connection.php');  
    $regno = $_POST['regno'];  
    $dob = $_POST['dob'];  
      
        //to prevent from mysqli injection  
        $regno = stripcslashes($regno);  
        $dob = stripcslashes($dob);  
        $regno = mysqli_real_escape_string($conn, $regno);  
        $dob = mysqli_real_escape_string($conn, $dob);  
      
        $sql = "select * from datademo where regno = '$regno' and dob = '$dob'";  
                 $data = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if (mysqli_num_rows($data) > 0) {
    while ($row = mysqli_fetch_assoc($data)) {
        //print_r($row);
        echo "Name:".$row['name'];
        echo "\nName:".$row['regno'];
    }

        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  