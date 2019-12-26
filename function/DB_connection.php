<?php
function getConnect() {
    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASSWORD', '');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'QLDiemSV');
    
    $dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_set_charset($dbcon, 'utf8');

    // Kiểm tra lỗi kết nối
    if ($dbcon->connect_error) {
        die("Lỗi kết nối: " . mysqli_connect_error());
        return null;
    }
    echo "Kết nối thành công";
    return $dbcon;
}
?>