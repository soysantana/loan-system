<?php 
include_once('../config/load.php');

$Pass = url('/index.php');
$Fail = url('/src/pages/register.php');

if(isset($_POST['register_user'])){
    
    $req_fields = array('fullname','email','username','password');
    validate_fields($req_fields);

    if(empty($errors)){
        $name   = remove_junk($db->escape($_POST['fullname']));
        $email   = remove_junk($db->escape($_POST['email']));
        $username   = remove_junk($db->escape($_POST['username']));
        $password   = remove_junk($db->escape($_POST['password']));
        $password = sha1($password);
        $id = uuid();
        $query = "INSERT INTO users (";
        $query .="id,name,email,username,password,user_level,status";
        $query .=") VALUES (";
        $query .="'{$id}', '{$name}', '{$email}', '{$username}', '{$password}', '3','1'";
        $query .=")";
        if($db->query($query)){
            $session->msg('s',"La cuenta de usuario ha sido creada");
            if(!$session->logout()) {
                redirect($Pass);
            }
        } else {
            $session->msg('w','No se pudo crear la cuenta.');
            redirect($Fail,false);
        }
    } else {
        $session->msg("d", $errors);
        redirect($Fail,false);
    }
}
?>