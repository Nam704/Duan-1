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
function kiemtraSLanhsp($idsp)
{
    $sql = "SELECT COUNT(*) AS num_rows FROM images WHERE idsp =$idsp";
    return pdo_query_value($sql);
}
function uploadimgsp($idsp)
{
    if (isset($_POST['themmoi'])) {
        $images = $_FILES['images'];
        $num_of_imgs = count($images['name']);
        (int) $SLanhsp = kiemtraSLanhsp($idsp);
        if (((int)$SLanhsp >= 0) && ((int)$SLanhsp <= 6) || ((int)$SLanhsp + $num_of_imgs <= 6)) {
            if ($num_of_imgs <= 6) {
                for ($i = 0; $i < $num_of_imgs; $i++) {
                    $image_name = $images['name'][$i];
                    $tmp_name   = $images['tmp_name'][$i];
                    $error      = $images['error'][$i];
                    if ($error === 0) {
                        $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);
                        $allowed_exs = array('jpg', 'jpeg', 'png', 'jfif');
                        if (in_array($img_ex_lc, $allowed_exs)) {
                            $new_img_name = uniqid('IMG-', true) . '.' . $img_ex_lc;
                            $img_upload_path = '../../upload/' . $new_img_name;
                            $sql  = "INSERT INTO images (img_name,idsp)
                                 VALUES ('$new_img_name', '$idsp')";
                            $stmt = pdo_get_connection()->prepare($sql);
                            $stmt = pdo_execute($sql);
                            move_uploaded_file($tmp_name, $img_upload_path);
                        } else {
                            $em = "You can't upload files of this type";
                            header("Location: index.php?act=thembttheosp&id=$idsp&error=$em");
                        }
                    }
                }
            } else {
                $em = "Không thể tải nhiều hơn 6 ảnh";
                header("Location: index.php?act=thembttheosp&id=$idsp&error=$em");
            }
        } else {
            $SLthemanh = 6 - (int)$SLanhsp;
            $em = "Số lượng ảnh bạn đã thêm trước đó là: $SLanhsp <br>  Bạn chỉ có thể thêm $SLthemanh";
            header("Location: index.php?act=thembttheosp&id=$idsp&error=$em");
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
function loadall_sanpham_dangban()
{
    $sql = "select * from sanpham where trangthai=0";


    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
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
function load_sanpham_cungloai($idsp, $idnsx)
{
    $sql = "select *from sanpham where idnsx=$idnsx and idsp<>" . $idsp;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
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
function tentrangthaisp($id)
{
    if ($id == 0) {
        return "Đang bán";
    } elseif ($id == 1) {
        return "Dừng bán";
    }
}
function giaspmax($id)
{
    $sql = "SELECT MAX(gia) AS max_gia FROM spbienthe where idsp=$id";
    return pdo_query_value($sql);
}
function giaspallmax()
{
    $sql = "SELECT MAX(giasp) AS max_gia FROM sanpham ";
    return pdo_query_value($sql);
}
function giaspmin($id)
{
    $sql = "SELECT  MIN(gia) AS min_gia FROM spbienthe where idsp=$id";
    return pdo_query_value($sql);
}
function giaspallmin()
{
    $sql = "SELECT  MIN(giasp) AS min_gia FROM sanpham ";
    return pdo_query_value($sql);
}
function listgiasp($id)
{
    $sql = "select giasp from sanpham where idsp=$id";
    return pdo_query($sql);
}
function listmspbt($id)
{
    $sql = "select idmsp from spbienthe where idsp=$id";
    return pdo_query($sql);
}
function listbnspbt($id)
{
    $sql = "select idbnsp from spbienthe where idsp=$id";
    return pdo_query($sql);
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
