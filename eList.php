`	<?php
include_once 'dbconfig.php';
include_once "func.php";
   
if(isset($_POST['btn-upload']))
{    
     
	
	$pno=$_REQUEST['pno'];
	$pname=$_REQUEST['pname'];
	$price=$_REQUEST['price'];
	$qoh=$_REQUEST['qoh'];
	$olevel=$_REQUEST['olevel'];

	$object = new func();
	
	$result=$object->update($pname,$price,$pno,$qoh,$olevel);
	
	$obj= new func();
    $res=$obj->show($pno);
	if($res==false){
		echo "result is false";
	}else{
	$row=$obj->fetch();
	}
		?>
		<script>
		alert('successfully updated');
        window.location.href="http://35.166.18.143/~gifty.mate-kole/store/edit.php?pno=<?php echo $row['pno']?>&pname=<?php echo $row['pname']?>&qoh=<?php echo $row['qoh']?>&price=<?php echo $row['price'] ?>&olevel=<?php echo $row['olevel'] ?>";
        </script>
		<?php
	
	
}
?>