<html>
    <head>
        <title>      
        </title>
        <link rel="stylesheet" href="insertcss.css">
    </head>
<body>

<?php

$con = mysqli_connect('localhost','root','');

if($con->connect_error)
   {
     die("Connection failed:" .$con->connect_error);
    }
    
    
    mysqli_select_db($con,"parita");
    
   
    //create insert query
    
    $sql="INSERT INTO vaishu (fname,address,reason,phone,gender,outtime,intime,stream)  values ('$_POST[fname]','$_POST[address]','$_POST[reason]','$_POST[phone]','$_POST[gender]','$_POST[outtime]','$_POST[intime]','$_POST[stream]')";
    
    
    if ($con ->query($sql)==TRUE)
    {
        ?>
        <h1>New record created sucessfully</h1>;
     <?php   
    }
    else
    {
        echo"error". $sql."<br>".$con->error;
    }
    mysqli_close($con);
    ?>
    </body>
    </html>