<!DOcktype html>
<html>
    <head>
        <title>Your Registration Info</title>
        <style>
            table{
                border: 2px solid black;
            }
            table td {
                padding: 2px;
            }
            table tr:nth-child(odd){
                background-color: yellow
            }
                
                      
        </style>
    </head>



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'functions.php';
if($_POST){
    $rollno=$_POST['rollno'];
    $name=$_POST['sname'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $sem=$_POST['sem'];
    $semail=$_POST['semail'];
    $dept=$_POST['dept'];
    $batch=$_POST['batch'];
    if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)&&!empty($sem)&&!empty($email)&&!empty($dept)&&!empty($batch)){
    
        $link=  mysqli_connect('localhost','host','root','root','AIKTC');
        $query="Insert into students values ('$rollno','$name','$gender','$address','$dob','$sem','$email','$dept','$batch')";
        $result=  mysqli_query($link, $query);
        if(!$result){
            echo"<br>".mysqli_error($link);
        }
        else {
            echo '<br><h4> Your Data is Successsfully Inserted.</h4>';
        }
     
     
        
        ?>

    }
        <table>
         <tr>
              <td>Roll No</td>
              <td><?php echo fix_rollno($rollno);?></td>
         <tr>
              <td>Name</td>
              <td><?php echo fix_name($name);?></td>
         <tr>
              <td>Gender</td>
        <td><?php echo $gender;?></td>
         <tr>
              <td>Address</td>
              <td><?php echo fix_address($address);?></td>
         <tr>
              <td>Date of Birth</td>
              <td><?php echo $dob;?></td>
         <tr>
              <td>Semester</td>
              <td><?php echo $sem;?></td>
         <tr>
              <td>Email</td>
              <td><?php echo fix_email($email);?></td>
         <tr>
              <td>Department</td>
              <td><?php echo $dept;?></td>
         <tr>
              <td>Batch</td>
              <td><?php echo $batch;?></td>
         </tr>
         
        </table>
    
    
     <?php
    }

    else{
        echo"<span>Something is Misssing!</span>";
        header('Refresh:2, url=registration.html');
    }
}
    else{
        header('Refresh:0, url-registration.html');
    }
    ?>
</body>
</html>

    
