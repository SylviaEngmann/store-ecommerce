<?php
/**
*/
include_once("adb.php");
/**
*User class
*/
class object extends adb{
	function object(){
	}

	function getCustomer($keyword){
		$strQuery="SELECT cname,street,zip,phone from customers
		where cname like '%$keyword%'";
		return $this->query($strQuery);
	}
	function addCustomer($cname,$street,$zip,$phone){
		$strQuery="INSERT into customers(cname,street,zip,phone)
					VALUES('$cname','$street','$zip','$phone')";
					return $this->query($strQuery);
	}
	function getEmployee($keyword){
		$strQuery="SELECT ename,zip,hdate from employees where
		ename like '%$keyword%'";
		return $this->query($strQuery);
	}
	function addEmployee($ename,$zip,$hdate,$emptype,$username){
		$strQuery="INSERT into employees(ename,zip,hdate,emptype,username)
					VALUES('$ename','$zip','$hdate','$emptype','$username')";
					return $this->query($strQuery);
	}
	function empLogin($username,$password){
		$strQuery="SELECT username, password from employees where username = '$username' and password='$password'";
		return $this->query($strQuery);
	}
	function getOrders(){
		$strQuery="select parts.pname,parts.price,odetails.pno from odetailsjoin parts on parts.pno=odetails.pno";
		return $this->query($strQuery);
	}
}
?> 