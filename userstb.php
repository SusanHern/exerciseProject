<?
require "config.php";

$sql = "CREATE TABLE users(id INT 
NOT NULL
AUTO_INCREMENT,
PRIMARY KEY(id),
name VARCHAR(255),
surname VARCHAR(255),
mobile VARCHAR(255),
email VARCHAR(255),
birthdate DATE DEFAULT '0000-00-00', 
ins_time DATE DEFAULT '0000-00-00 00:00:00')";
print "running query";
if (mysqli_query($conn, $sql))
  {
  echo "Table prices created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($conn);
  }
?>
