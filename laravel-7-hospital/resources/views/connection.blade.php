<?php 
session_start();
$con=mysql_connect('localhost','root','','hospital');
 function insert($qry){
 	$res=mysql_query($GLOBALS['con'],$qry);
 	return mysql_insert_id($GLOBALS['con']);
 }

function select($qry){
	$res=mysql_query($GLOBALS['con'],$qry);
	$result=mysql_fetch_all($res,MYSQLI_ASSOC);
	return $result;
}
function update($q){
		mysql_query($GLOBALS['con'],$q);
}
function redirect($url){
		?>
		<script type="text/javascript">
			window.location="<?php echo $url ?>";
		</script>
		<?php
}
function alert($msg){
		echo "<script> alert('$msg')</script>";
}
function delete($qry){
		$res=mysql_query($GLOBALS['con'],$qry);
		return $res;
}
	


 ?>