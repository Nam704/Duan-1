<?php
// function insert_taikhoan($username, $password)
// {
//     $sql = "insert into taikhoan(username,password) values('$username','$password')";
//     pdo_execute($sql);
// }
// function check_taikhoan($username, $password)
// {
//     $sql = "select * from taikhoan where username='" . $username . "' and password='" . $password . "'";
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
// function check_email_taikhoan($email)
// {
//     $sql = "select * from taikhoan where email='" . $email . "'";
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
// function update_password($email, $password)
// {

//     $sql = "update taikhoan set email='" . $email . "',password='" . $password . "'";


//     pdo_execute($sql);
// }
// function update_taikhoan($username, $password, $email, $address, $idtk, $sdt)
// {

//     $sql = "update taikhoan set username='" . $username . "',password='" . $password . "',email='" . $email . "', address='" . $address . "',sdt='" . $sdt . "' where idtk=" . $idtk;


//     pdo_execute($sql);
// }
// function loadall_taikhoan()
// {
//     $sql = "select * from taikhoan order by idtk desc";
//     $listtaikhoan = pdo_query($sql);
//     return $listtaikhoan;
// }
// function delete_taikhoan($idtk)
// {
//     $sql = "delete from taikhoan where idtk=" . $idtk;
//     pdo_execute($sql);
// }