<?php 

include("config.php"); 

// connect to the mysql server
$link = mysql_connect($db_host, $db_user, $db_pass)
or die ("Could not connect to mysql because ".mysql_error());

// select the database
mysql_select_db($db_name)
or die ("Could not select database because ".mysql_error());

// check if the username is taken
$check = "select id from $db_table where username = '".$_POST['username']."';";
$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());
$num_rows = mysql_num_rows($qry); 
if ($num_rows != 0) { 
echo "Sorry, there the username $username is already taken.<br>";
echo "<a href=register.html>Try again</a>";
exit; 
} else {

// insert the data
$insert = mysql_query("insert into $db_table values ('NULL',
'".$_POST['username']."',
'".$_POST['password']."',
'".$_POST['email']."')")
or die("Could not insert data because ".mysql_error());

// print a success message
echo "Your user account has been created!<br>"; 
echo "Now you can <a href='login.html'>log in</a>"; 
}

?>
