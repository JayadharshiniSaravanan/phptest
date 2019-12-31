<?php
$Position=filter_input(INPUT_POST,'Position');
$First_name=filter_input(INPUT_POST,'First_name');
$Last_name=filter_input(INPUT_POST,'Last_name');
if(!empty($Position)){
  if(!empty($First_name)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="abc";
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
      die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
      $sql="INSERT INTO defery(Position,First_name,Last_name)
      values ('$Position','$First_name','$Last_name')";
      if($conn->query($sql)){
        echo "created successfully";
      }
      else{
        echo "Error:".$sql."<br>".$conn->error;
      }
      $conn->close();
    }
  }
  else{
    echo "This Field is required";
    die();
  }
}
else{
  echo "This Field is required";
  die();
}
 ?>
