<?php
$link=mysqli_connect("localhost","root","","cafe");
if($link){
    echo"Connection successful !";
}
$qry="insert into dishes(name,type,price) values
    ('Paneer Chilly','Starter',190),
    ('Garlic Bread','Sides',170),
    ('Macaroni','Pasta',200)";
if(mysqli_query($link,$qry)){
    echo"Record inserted successfully..!";
}
else{
    echo "Error".mysqli_error($link);
}

?>