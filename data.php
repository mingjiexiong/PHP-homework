<?php
$conn = new mysqli('localhost', 'root', 'root', 'mysql');

$sql = "CREATE TABLE shop(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
phonename VARCHAR(30) NOT NULL,
ds VARCHAR(30) NOT NULL,
price VARCHAR(50),
stock VARCHAR(50),
img VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "";
}

$sql = "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('oppo', 'OPPO K3 高通骁龙710 升降摄像头 VOOC闪充 6', '￥1599.00', '10', '1.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('honor', '荣耀20 4800万超广角AI四摄 3200W美颜自拍 麒麟', '￥2699.00', '10', '2.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('honor', '荣耀V20 胡歌同款 麒麟980芯片 魅眼全视屏 4800万', '￥3399.00', '10', '3.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('iphone', 'Apple iPhone XR (A2108) 128GB ', '￥5299.00', '10', '4.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('honor', '荣耀8X 千元屏霸 91%屏占比 2000万AI双摄 4GB', '￥1199.00', '10', '5.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('mi', '小米8SE 全面屏智能游戏拍照手机 6GB+64GB 灰色 ', '￥1249.00', '10', '6.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('meizu', '魅族 16 X 全面屏游戏手机 6GB+64GB 砚墨黑 全', '￥1598.00', '10', '7.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('iphone', 'Apple iPhone 7 (A1660) 128G 黑色', '￥2799.00', '10', '8.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('vivo', 'vivo iQOO 44W超快闪充 8GB+128GB电光蓝', '￥2998.00', '10', '9.jpg');";
$sql .= "INSERT INTO shop (phonename, ds, price, stock, img)
VALUES ('vivo', 'vivo iQOO 44W超快闪充 8GB+128GB电光蓝', '￥3998.00', '10', '10.jpg');";

if ($conn->multi_query($sql) === TRUE) {
    echo "";
} else {
    echo "";
}
?>
