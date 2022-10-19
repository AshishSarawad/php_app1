<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Main Page - PHP Simple Templating System </title>
<?php echo '<p>!!COMMON_TAGS!!</p>'; ?>
</head>
<body>
<table width="95%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td colspan="3"><center>
<?php echo '<p>!!HEADER!!!</p>'; ?> 
</center>
</td>
</tr>
<tr>
<td class="column" width="25%" height="100%">!!LEFT_COLUMN!!</td>
<td> </td>
<td width="25%"> <?php echo '<p>H!!RIGHT_COLUMN!!</p>'; ?> </td>
</tr>
<tr>
<td class="column" colspan="3"><center>
<?php echo '!!FOOTER!!'; ?>
</center>
</td>
</tr>
</table>
</body>
 <?php echo '<p>Hi Minfy Devops Team</p>'; ?> 
 <?php echo '<p>Welcome to PHPApp running inside Docker container!!!!!!!!!!!!!!!!!!!!!</p>'; ?> 
 <?php echo '<p>It is deployed Through jenkins pipeline</p>'; ?> ?
</html>
