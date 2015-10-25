<?php
include("conn.php"); 
if($_POST['submit']){
$sql="insert into message (id,user,title,content,lastdate) values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
mysql_query($sql); 
echo "成功"; 
} 
?>
<form action="add.php" method="post" border=1 align='center'> 
用户:<input type="text" name="user" /><br> 
标题:<input type="text" name="title" /><br /> 
内容:<textarea name="content" rows="10" cols="30"></textarea><br /> 
<input type="submit" name="submit" value="提交" /> 
</form>  