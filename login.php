<?php
session_start();
//login
if($_POST['pass1'] && $_POST['pass2'] && $_POST['pass3'] && $_POST['pass4'])
{
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $pass3=$_POST['pass3'];
    $pass4=$_POST['pass4'];
    $pass = $pass1.'-'.$pass2.'-'.$pass3.'-'.$pass4;
    if($pass=="7-7-7-7")
    {
        $data['success'] = true;
        $data['message'] = "You have logged in successfully";
        $_SESSION["psscod"] = $pass;
    }
    else
    {
        $data['success'] = false;
        $data['message'] = "You have entered an incorrect pin";
    }
    echo json_encode($data);
    
}
