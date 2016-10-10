 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function fix_name($name){
    $name=trim($name);
    $name= ucfirst($name);
    $name= addslashes($name);
    return $name;
}

function fix_email($email){
    $email= trim($email);
    $email= ucfirst($email);
    $email= addslashes($email);
    return $email;
}

function fix_address($address){
    $address= trim($address);
    $address= ucfirst($address);
    $address= addslashes($address);
    return $address;
}

function fix_rollno($rollno){
    $rollno= trim($rollno);
    $rollno= ucfirst($rollno);
    $rollno= addslashes($rollno);
    return $rollno;
}

