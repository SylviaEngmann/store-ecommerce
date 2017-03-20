<?php
// Contains functions which perform sql queries


include_once("adb.php");

class func extends adb{
	function func(){
	}

// inserts products into the part table	
	function add($title,$quant,$price,$olevel){
		
		$strQuery="insert into parts set pname='$title', 
										qoh='$quant', 			 
										price='$price',
										olevel='$olevel'
										";
		
	    $result=$this->query($strQuery);
		return $result;
	}

// Views products in the parts table
	function Blist(){
		
		$strQuery="select * from parts";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
// Views products in the odetails table
	function odet(){
		
		$strQuery="select parts.pname,parts.picture, parts.price, odetails.pno from odetails
					join parts on parts.pno=odetails.pno";
		return $this->query($strQuery);
	}
	
// Updates products in the parts table
	function update($pname,$price,$pno,$qoh,$olevel){
		
		$strQuery="update parts set pname='$pname', 
										price='$price',
										qoh='$qoh',
										olevel='$olevel'
										 where pno='$pno'";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
// Views specific products in the parts table given the pno
	function show($pno){
		$strQuery="select * from parts where pno='$pno'";
		return $this->query($strQuery);
	
	}
	
// Views specific products in the parts table where the name of the 
// product is similar to a string given
	function search($sr){
		$strQuery="select * from parts where pname like '%$sr%'";
		return $this->query($strQuery);
	
	}
	
// inserts details of an order into the odetails table		
	function order($pno){
		
		$strQuery="insert into odetails set pno='$pno'
										";
		
	    $result=$this->query($strQuery);
		return $result;
	}
	
	function srch($sr){
		$strQuery="select * from employees where ename like '%$sr%'";
		return $this->query($strQuery);
	
	}
	
	function sch($sr){
		$strQuery="select * from customers where cname like '%$sr%'";
		return $this->query($strQuery);
	
	}
	
	function remove($pid){
		$strQuery="delete from odetails where pno='$pid'";
		return $this->query($strQuery);
	}
}
?>

