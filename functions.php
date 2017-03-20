<?php
if(isset($_REQUEST['cmd'])){
  $cmd=$_REQUEST['cmd'];
  switch($cmd){
    case 1:
      searchCustomer();
    break;
    case 2:
      addCustomer();
    break;
    case 3:
      searchEmployee();
    break;
    case 4:
      addEmployee();
    break;
    case 5:
      employeeLogin();
    break;
    default:
      echo '{"result":0,"message":"Wrong command"}';
    break;
  }

}
 function searchCustomer(){
    if (!isset($_REQUEST['keyword']))
    {
      echo '{"result":0,"message":"Please enter a keyword"}';
      return;
      }
      $keyword = $_REQUEST['keyword'];

      include_once("objects.php");
      $obj=new object();
      $obj ->getCustomer($keyword);
      $row = $obj->fetch();
      echo '{"result":1 , "customer":[';
        while($row){
            echo json_encode($row);
            $row = $obj->fetch();
            if($row!=false){
                echo ",";
            }
        }
        echo "]}";
      }

    function addCustomer(){
      if(!isset($_REQUEST['cname'])){
        echo '{"result":0,"message":"Please enter customer name"}';
        return;
        }
        $cname=$_REQUEST['cname'];
        $street=$_REQUEST['street'];
        $zip=$_REQUEST['zip'];
        $phone=$_REQUEST['phone'];

        include('objects.php');
          $obj=new object();
          $row=$obj->addCustomer($cname, $street, $zip, $phone);

          if(!$row==true){
            echo '{"result":0,"message":"User not added"}';
            }

          else{
            echo '{"result":1,"message":"User added"}';
            }

          }

    function searchEmployee(){
      if (!isset($_REQUEST['keyword']))
    {
      echo '{"result":0,"message":"Please enter a keyword"}';
      return;
      }
      $keyword = $_REQUEST['keyword'];

      include_once("objects.php");
      $obj=new object();
      $obj ->getEmployee($keyword);

      $row = $obj->fetch();
      echo '{"result":1 , "employee":[';
        while($row){
            echo json_encode($row);
            $row = $obj->fetch();
            if($row!=false){
                echo ",";
            }
        }
        echo "]}";
      }
  
     function addEmployee(){
      if(!isset($_REQUEST['ename'])){
        echo '{"result":0,"message":"Please enter employee name"}';
        return;
        }
        $ename=$_REQUEST['ename'];
        $zip=$_REQUEST['zip'];
        $hdate=$_REQUEST['hdate'];
        $emptype=$_REQUEST['emptype'];
        $username = 'username';

        include('objects.php');
          $obj=new object();
          $row=$obj->addEmployee($ename, $zip, $hdate,$emptype,$username);

          if(!$row==true){
            echo '{"result":0,"message":"Employee not added"}';
            }

          else{
            echo '{"result":1,"message":"Employee added"}';
            }

          }
          function employeeLogin(){
            if(!isset($_REQUEST['username'])){
              echo '{"result":"message":"Please enter username"}';
              return;
            }

            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];

            include('objects.php');
            $obj=new object();
            $row=$obj->emplogin($username, $password);
            $row=$obj->fetch();
            if(!$row){
              echo '{"row":0,"message":"Username or Password is wrong"}';
            }
            else{
               echo '{"row":1,"message":"Log in success"}';
          }
        }

  ?>
