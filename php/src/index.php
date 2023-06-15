<?php
echo "Hello from Php";

//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'rohan';

//database user password
$pass = 'rohan@123';

$mydatabase='demo_db';
// check the MySQL connection status
// $conn = new mysqli($host, $user, $pass);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connected to MySQL server successfully!";
// }

//establish connection:
$conn = new mysqli($host, $user, $pass, $mydatabase);

// select query
$query ='SELECT * FROM blog';
$result =mysqli_query($conn,$query);

echo '<h1?>MySQL Content:</h1>';

while($record = mysqli_fetch_assoc($result))
{
    echo '<h2>'.$record['title'].'</h2>';
    echo '<p>'.$record['content'].'</p>';
    echo 'Posted: '.$record['date'];
    echo '<hr>';
}

?>