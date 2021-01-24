<?php



function TinMoiNhat_MotTin() {
    //lay du lieu bang tin
    // sap theo khoa chinh idTin
    //DESC de id giam dan
    //lay tin dau tien (tin thu 0), lay 1 tin
    $qr = "
        SELECT * FROM tin
        ORDER BY idTin DESC
        LIMIT 0,1
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
    
}

function TinMoiNhat_BonTin() {
    //lay du lieu bang tin
    // sap theo khoa chinh idTin
    //DESC de id giam dan
    //lay tin dau tien (tin thu 0), lay 1 tin
    $qr = "
        SELECT * FROM tin
        ORDER BY idTin DESC
        LIMIT 1,4
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
    
}

function TinXemNhieuNhat() {
    $qr ="
    SELECT * FROM tin 
    ORDER BY SoLanXem DESC 
    LIMIT 0,6 
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
}

function TinMoiNhat_TheoLoaiTin_MotTin($idLT) {
    //lay du lieu bang tin
    // sap theo khoa chinh idTin
    //DESC de id giam dan
    //lay tin dau tien (tin thu 0), lay 1 tin
    $qr = "
        SELECT * FROM tin
        WHERE idLT = $idLT
        ORDER BY idTin DESC
        LIMIT 0,1
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
    
}

function TinMoiNhat_TheoLoaiTin_BonTin($idLT) {
    //lay du lieu bang tin
    // sap theo khoa chinh idTin
    //DESC de id giam dan
    //lay tin dau tien (tin thu 0), lay 1 tin
    $qr = "
        SELECT * FROM tin
        WHERE idLT = $idLT
        ORDER BY idTin DESC
        LIMIT 1,4
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
    
}

function TenLoaiTin($idLT) {
    $qr = "SELECT Ten
           FROM loaitin
           WHERE idLT = $idLT 
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    $loaitin = mysqli_query($connection,$qr);
    $row = mysqli_fetch_array($loaitin);
    return $row['Ten'];
}
function QuangCao($vitri) {
    $qr = "
           SELECT * FROM quangcao
           WHERE  vitri = $vitri
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr) ;   
}
function DanhSachTheLoai() {
    $qr = "
        SELECT * FROM theloai
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
}

function DanhSachLoaiTin_Theo_TheLoai($idTL) {
    $qr ="
        SELECT *FROM loaitin
        WHERE idTL=$idTL
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
}

function TinMoi_BenTrai($idTL) {
    $qr = "
        SELECT * FROM tin
        WHERE idTL =$idTL
        ORDER BY idTin DESC
        LIMIT 0,1
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
}

function TinMoi_BenPhai($idTL) {
    $qr = "
        SELECT * FROM tin
        WHERE idTL =$idTL
        ORDER BY idTin DESC
        LIMIT 0,2
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
}

function TinTheoLoaiTin($idLT) {
 $qr = "
        SELECT * FROM tin
        WHERE idLT = $idLT
        ORDER BY idTin DESC
        ";   
        $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
}

function TinTheoLoaiTin_PhanTrang($idLT,$from,$sotin1trang) {
    $qr = "
           SELECT * FROM tin
           WHERE idLT = $idLT
           ORDER BY idTin DESC
           LIMIT $from, $sotin1trang
           ";   
           $connection = mysqli_connect('localhost','root','','khoaphamtraining');
       return mysqli_query($connection,$qr);
   }

//thanh hien thi the loai va loai tin 
function breadCrumb($idLT) {
    $qr="
    SELECT TenTL, Ten 
    FROM theloai,loaitin 
    WHERE theloai.idTL = loaitin.idTL 
    AND idLT = $idLT
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
    
}

function ChiTietTin($idTin) {
    $qr ="
        SELECT * FROM tin
        WHERE idTin = $idTin
        ";
        $connection = mysqli_connect('localhost','root','','khoaphamtraining');
        return mysqli_query($connection,$qr);
}

function TinCungLoaiTin($idTin,$idLT) {
    $qr = "
        SELECT * FROM tin
        WHERE idTin <>$idTin
        AND idLT = $idLT
        ORDER BY RAND()
        LIMIT 0,3
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);
}

function CapNhatSoLanXemTin($idTin) {
    $qr ="
        Update tin
        SET SoLanXem = SoLanXem + 1
        Where idTin = $idTin
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    mysqli_query($connection,$qr);
}
function TimKiem($tukhoa)
{
    
    $qr = "
        SELECT * FROM tin
        WHERE TieuDe REGEXP '$tukhoa'
        ORDER BY idTin DESC
    ";
    $connection = mysqli_connect('localhost','root','','khoaphamtraining');
    return mysqli_query($connection,$qr);

};

?>