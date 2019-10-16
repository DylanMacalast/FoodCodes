<?php
$servername = "eu-cdbr-west-02.cleardb.net";
$username = "bddfa11e02d9a4";
$password = "5ec34cb5";
$database = "heroku_7d55445124d8085";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$query = "SELECT * FROM users"; 
        $select_users= mysqli_query($conn, $query);
       var_dump(mysqli_fetch_assoc($select_users));
        while($row = mysqli_fetch_assoc($select_users)){
            $name = row['name'];
            var_dump($row);



        }
        echo $name;
?>