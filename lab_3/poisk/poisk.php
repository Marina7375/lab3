<?php 
session_start();
require_once '../class/class.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet"  href="../css/style.css">
    
</head>
<body>
    <div class="menu">
        <button class="link"> <a href="../стр_польз/1.php"><?php echo lang::trans('Client_page'); ?></a></button>
        <button class="link"> <a href="../стр_польз/3.php"><?php echo lang::trans('Admin_page'); ?></a></button>
        <button class="link"> <a href="../стр_польз/2.php"><?php echo lang::trans('Manager_page'); ?></a></button></div>

<form method="post" action="poisk2.php">
	<p>Введите имя</p>
<input type="text" name="name" ><br/>
     
         
         
         <input type="submit" value="Подтвердить" id="ok"></form>
    </body></html>
