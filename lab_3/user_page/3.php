<?php 
session_start();
include '../class/class.php';
include '../connect.php';
include 'menu.php';


		
		if($_SESSION['role']=='3'){
			$user=role();
			$user->us();
		
			
		}
		else{

			echo	'Error 404';
		}
		

		

		?>
		<br><button class="knopka"> <a href="../client_table/table.php"><?php echo lang::trans('List');?></a>
		<br><button class="knopka"> <a href="../exit.php"><?php echo lang::trans('Log out');?></a></button>
	</body>
	</html>


