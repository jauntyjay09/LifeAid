<?php 

require_once('creddb.php');
/*$sql = "INSERT INTO `rusers` (ip,username, password, email,hash) VALUES 
          ('545','jai','ffff', 'deded', 'hash22')";*/
         // $result = mysqli_query($conn,$query);
          
$sql="CREATE TABLE `recuser` (
`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
ip VARCHAR(64)  NOT NULL,
`email` TEXT NOT NULL ,
`fname` VARCHAR( 32 ) NOT NULL ,
`cono` VARCHAR( 32 ) NOT NULL ,
`bloodgp` VARCHAR( 32 ) NOT NULL ,
`date` VARCHAR( 32 ) NOT NULL ,
`state` VARCHAR( 32 ) NOT NULL ,
`city` VARCHAR( 32 ) NOT NULL ,
`region` VARCHAR( 32 ) NOT NULL ,
`pincode` VARCHAR( 32 ) NOT NULL ,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";


if (mysqli_query($conn, $sql)) {
  echo "Table created 33 row inserted successfully";
}
else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>