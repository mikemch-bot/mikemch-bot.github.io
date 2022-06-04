<html>
<head>
<link rel="stylesheet" href="./chatterstyle.css">
<style>
p{
	border-style: solid;
	border-radius: 5px;
	border-color: limegreen;	
	background-color: #043304;
	padding: 15px;
}

a:link,a:visited{
	color: #ffffdd;
	border-style: solid;
	border-radius: 5px;
	border-color: #85cfcf;
	background-color: #195555;
	padding: 15px;
	margin: 15px;
}

a:hover{
	background-color: #173333;
}
</style>
</head>
<body>

<?php

$nickname=$_POST["nickname"];
$content=$_POST["content"];

echo '<p>你发送了一条信息<br/></p>';
echo '<p>你的昵称是: '.$nickname."<br/></p>";
echo '<p>信息内容是: '.$content."<br/></p>";

$dbhost = 'localhost';  
$dbuser = 'debian-sys-maint';          
$dbpass = 'py9dYFCTkZzOfkqN';    
$dbname = 'testforum';


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if(!$conn){
	die('连接失败: '.mysql_error($conn));
}
echo '<p>连接成功<br/></p>';





$sqql="INSERT INTO forum (nickname,content) VALUES ('{$nickname}','{$content}')";

		
$retval=mysqli_query($conn,$sqql);

if(!$retval){
	die('<p>无法插入数据：'.mysql_error($conn)."</p>");
}
echo "<p>数据插入成功</p></br>\n";

echo "<a href=\"index.html\">返回</a>";

mysql_close($conn);



?>



</body>

</html>
