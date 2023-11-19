<?php
function loade_user()
{
    $sql = "SELECT * FROM users order by users_id";
    $listuser = pdo_query($sql);
    return $listuser;
}
function insert_taikhoan($user, $email, $password)
{
    $sql = "INSERT INTO `users`( `users_name`, `email`, `password`) VALUES ('$user','$email','$password')";
    pdo_execute($sql);
}
function checkuser($email, $password)
{
    $sql = "SELECT * FROM users where email = '$email' AND password = '$password'";
    $p = pdo_query_one($sql);
    return $p;
}
function checkemail($email){
    $sql = "select * from taikhoan where email='".$email."'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
?>