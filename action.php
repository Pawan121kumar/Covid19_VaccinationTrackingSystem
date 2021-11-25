<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
	$dname='Cafe_connections';
	//$conn = @mysqli_connect($servername,$username,$password,$dname,3307) or die(mysql_error());
	//$dbconn=mysqli_select_db($dname);
	
	$link = mysqli_connect($servername,$username,$password,$dname,3307);



    if($link == false)
    {
        die("Error: Could not connect".mysqli_connect_error());
    }
    else{
       // echo 'Conneted';
		$name=$_REQUEST['name'];
		$email= $_REQUEST['email'];
		$phone= $_REQUEST['phone'];
		$numberguests= $_REQUEST['number-guests'];
		$date= $_REQUEST['date'];
		$time= $_REQUEST['time'];
		$message= $_REQUEST['message'];
		//echo $name;
		$query="insert into table_reservation(name,email,phone,numberguests,date,time,message) values('$name','$email',$phone,$numberguests,'$date','$time','$message')";
		
		//$sql= mysqli_query($link,$query);
		if($link->query($query)) echo "inserted";
		else echo "error";
		
	}
	
?>