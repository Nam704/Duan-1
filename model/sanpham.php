<?php
function insert_sanpham($idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
{
    $sql = "insert into sanpham(idnsx,idpl,idud,tensp,giasp,soluongtk,hinh,mota) values('$idnsx', '$idpl', '$idud', '$tensp', '$giasp', '$soluongtk', '$hinh', '$mota')";
    pdo_execute($sql);
}
// function insert_sanpham($idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
// {
//     $sql = "INSERT INTO sanpham( idnsx, idpl, idud, tensp, giasp, soluongtk, hinh, mota) VALUES ( :idnsx, :idpl, :idud, :tensp, :giasp, :soluongtk, :hinh, :mota) ";
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare($sql);

//     $stmt->bindParam(':idnsx', $idnsx);
//     $stmt->bindParam(':idpl', $idpl);
//     $stmt->bindParam(':idud', $idud);
//     $stmt->bindParam(':tensp', $tensp);
//     $stmt->bindParam(':giasp', $giasp);
//     $stmt->bindParam(':soluongtk', $soluongtk);
//     $stmt->bindParam(':hinh', $hinh);
//     $stmt->bindParam(':mota', $mota);
//     $stmt->execute();
// }

function delete_sanpham($id)
{
    $sql = "delete from sanpham where idsp=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham($kyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and tensp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and idnsx ='" . $iddm . "'";
    }
    $sql .= " order by idsp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_phanloai()
{
    $sql = "select * from phanloai order by idpl desc";
    $listpl = pdo_query($sql);
    return $listpl;
}
function loadall_ud()
{
    $sql = "select * from uudai order by idud desc";
    $listpl = pdo_query($sql);
    return $listpl;
}
function showimgsp($id)
{
    $sql  = "SELECT img_name FROM
	         images where idsp=$id";

    $stmt = pdo_get_connection()->prepare($sql);
    $stmt->execute();

    $images = $stmt->fetchAll();
    return $images;
}
function uploadimgsp($idsp)
{


    if (isset($_POST['themmoi'])) {

        # database connection file
        // include 'db.conn.php';
        // include '../model/pdo.php';

        $images = $_FILES['images'];

        # Number of images
        $num_of_imgs = count($images['name']);
        if ($num_of_imgs <= 6) {
            for ($i = 0; $i < $num_of_imgs; $i++) {

                # get the image info and store them in var
                $image_name = $images['name'][$i];
                $tmp_name   = $images['tmp_name'][$i];
                $error      = $images['error'][$i];

                # if there is not error occurred while uploading
                if ($error === 0) {

                    # get image extension store it in var
                    $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    /** 
                crating array that stores allowed
                to upload image extensions.
                     **/
                    $allowed_exs = array('jpg', 'jpeg', 'png', 'jfif');


                    /** 
                check if the the image extension 
                is present in $allowed_exs array
                     **/

                    if (in_array($img_ex_lc, $allowed_exs)) {
                        /** 
                     renaming the image name with 
                     with random string
                         **/
                        $new_img_name = uniqid('IMG-', true) . '.' . $img_ex_lc;
                        // $new_img_name = "anhsanpham_" . $idsp;

                        # crating upload path on root directory
                        $img_upload_path = '../../upload/' . $new_img_name;

                        # inserting imge name into database

                        $sql  = "INSERT INTO images (img_name,idsp)
                             VALUES ('$new_img_name', '$idsp')";
                        $stmt = pdo_get_connection()->prepare($sql);
                        // $stmt->execute([$new_img_name], $idsp);
                        $stmt = pdo_execute($sql);

                        # move uploaded image to 'uploads' folder
                        move_uploaded_file($tmp_name, $img_upload_path);

                        # redirect to 'index.php'
                        // header("Location: index.php");
                    } else {
                        # error message
                        $em = "You can't upload files of this type";

                        /*
                    redirect to 'index.php' and 
                    passing the error message
                    */

                        header("Location: index.php?thembttheosp=$em");
                    }
                } else {
                    # error message
                    $em = "Unknown Error Occurred while uploading";

                    /*
                redirect to 'index.php' and 
                passing the error message
                */

                    header("Location: index.php?thembttheosp=$em");
                }
            }
        } else {
            # error message
            $em = "Không thể tải nhiều hơn 6 ảnh";

            /*
        redirect to 'index.php' and 
        passing the error message
        */

            header("Location: index.php?thembttheosp=$em");
        }
    }
}

// function loadall_sanpham_home()
// {
//     $sql = "select * from sanpham where 1 order by id desc limit 0,9";


//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
// function loadall_sanpham_top()
// {
//     $sql = "select * from sanpham where 1 order by luotxem desc limit 0,7";


//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where idsp=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
// function load_tendm($iddm)
// {
//     if ($iddm > 0) {
//         $sql = "select * from danhmuc where id=" . $iddm;
//         $dm = pdo_query_one($sql);
//         extract($dm);
//         return $name;
//     } else {
//         return "";
//     }
// }
// function load_sanpham_cungloai($id, $iddm)
// {
//     $sql = "select *from sanpham where iddm=$iddm and id<>" . $id;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
function update_sanpham($idsp, $idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
{
    if ($hinh == "") {
        $sql = "update sanpham set tensp='" . $tensp . "',giasp='" . $giasp . "',
        idnsx='" . $idnsx . "',idpl='" . $idpl . "',idud='" . $idud . "',
        soluongtk='" . $soluongtk . "', mota='" . $mota . "' where idsp=" . $idsp;
    } else {
        $sql = "update sanpham set tensp='" . $tensp . "',giasp='" . $giasp . "',
        idnsx='" . $idnsx . "',idpl='" . $idpl . "',idud='" . $idud . "',
        soluongtk='" . $soluongtk . "', mota='" . $mota . "', hinh='" . $hinh . "' where idsp=" . $idsp;
    }

    pdo_execute($sql);
}
function showidspMax()
{
    $sql = "SELECT idsp FROM sanpham ORDER BY idsp DESC LIMIT 1";
    return pdo_query_value($sql);
}
function tennsx($idnsx)
{
    $sql = "  SELECT m.tennsx
FROM sanpham sb
INNER JOIN nhasanxuat m ON sb.idnsx = m.idnsx
WHERE sb.idnsx = '$idnsx'";
    return pdo_query_value($sql);
}
function khoa_sp($id)
{
    $sql = "update sanpham set trangthai=1 where idsp=" . $id;
    pdo_execute($sql);
}
function mokhoa_sp($id)
{
    $sql = "update sanpham set trangthai=0 where idsp=" . $id;
    pdo_execute($sql);
}
