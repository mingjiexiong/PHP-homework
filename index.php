<!DOCTYPE html>
<html>

<?php
$conn = new mysqli('localhost', 'root', 'root', 'mysql');
$sql = "SELECT id, phonename, ds, price, img FROM shop";
$result = $conn->query($sql);
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>淘宝网-淘！我喜欢</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <script src="./lib/vue-2.4.0.js"></script>

</head>

<body>
    <div class="wrapper">
        <!-- 导航条+ad -->
        <div class="top-nav-wrap">
            <div class="top-nav">
                <ul class="top-nav-l">
                    <li class="top-nav-menu china">
                        <span class="c-span">中国大陆</span>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                    <li class="top-nav-menu login-sign">
                        <span><a href="login.php" class="login">亲，请登录</a></span>
                        <a href="Register.php" class="sign">免费注册</a>
                    </li>
                    <li class="top-nav-menu">
                        <a href="#">手机逛淘宝</a>
                    </li>
                </ul>
                <ul class="top-nav-r">
                    <li class="top-nav-menu my-taobao">
                        <a href="#">我的淘宝</a>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                    <li class="top-nav-menu shop-car">
                        <a href="#">
                            <span class="bg-pic shopCar-pic"></span>
                            <span><a href="./car.php">购物车<a></span>
                        </a>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                    <li class="top-nav-menu like">
                        <a href="#">
                            <span class="bg-pic like-pic"></span>
                            <span>收藏夹</span>
                        </a>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                    <li class="top-nav-menu goods">
                        <a href="#">商品分类</a>
                    </li>
                    <li class="top-nav-menu cut-off">
                        <span>|</span>
                    </li>
                    <li class="top-nav-menu seller">
                        <a href="#">卖家中心</a>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                    <li class="top-nav-menu customer">
                        <a href="#">联系客服</a>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                    <li class="top-nav-menu web-nav">
                        <a href="#">
                            <span class="bg-pic web-nav-pic"></span>
                            <span>网站导航</span>
                        </a>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                </ul>
            </div>

        </div>
        <!-- 搜索区域 -->
        <div class="search-wrap">
            <div class="search-con">
                <div class="logo-box"></div>
                <div class="search-box">
                    <div class="search-t">
                        <div class="search-tab">
                            <ul>
                                <li class="select">宝贝</li>
                                <li>天猫</li>
                                <li>店铺</li>
                            </ul>
                        </div>
                        <div class="search-panel">
                            <a href="#" class="sousuo"></a>
                            <form action="">
                                <div class="btn">
                                    <button class="submit">搜索</button>
                                </div>
                                <div class="search-inp-box">
                                    <div class="search-inp">
                                        <!-- placeholder为灰色字体 -->
                                        <input type="text" name="" placeholder="华为P30降价">
                                    </div>
                                </div>
                            </form>
                            <a href="#" class="camera"></a>
                        </div>
                    </div>
                    <div class="search-bl">
                        <a href="#" class="active">新款连衣裙</a>
                        <a href="#">四件套</a>
                        <a href="#">潮流T恤</a>
                        <a href="#">时尚女鞋</a>
                        <a href="#" class="active">短裤</a>
                        <a href="#">半身裙</a>
                        <a href="#">男士外套</a>
                        <a href="#">墙纸</a>
                    </div>
                </div>
                <div class="code-box">
                    <a href="#" class="phone">手机淘宝</a>
                    <a href="#" class="code"></a>
                    <a href="#" class="close">X</a>
                </div>
            </div>
        </div>
        <!-- 导航条 -->
        <div class="screen-nav">
            <div class="screen-nav-con">
                <h2>主题市场</h2>
                <ul>
                    <li><a href="#">天猫</a></li>
                    <li><a href="#">聚划算</a></li>
                    <li><a href="#">天猫超市</a></li>
                </ul>
                <ul>
                    <li><a href="#">淘抢购</a></li>
                    <li><a href="#">电器城</a></li>
                    <li><a href="#">司法拍卖</a></li>
                    <li><a href="#">淘宝心选</a></li>
                    <li><a href="#">兴农扶贫</a></li>
                </ul>
                <ul>
                    <li><a href="#">飞猪旅行</a></li>
                    <li><a href="#">智能生活</a></li>
                    <li><a href="#">苏宁易购</a></li>
                </ul>
            </div>
        </div>
        <!-- 图片主体展示部分 -->
        <div class="screen-box">
            <div class="main">
                <div class="main-inner">
                    <div class="inner-left">
                        <ul>
                            <li>
                                <a href="#">女装</a> /
                                <a href="#">男装</a> /
                                <a href="#">内衣</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">鞋靴</a> /
                                <a href="#">箱包</a> /
                                <a href="#">配件</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">童装玩具</a> /
                                <a href="#">孕产</a> /
                                <a href="#">用品</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">家电</a> /
                                <a href="#">数码</a> /
                                <a href="#">手机</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">美妆</a> /
                                <a href="#">洗护</a> /
                                <a href="#">保健品</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">珠宝</a> /
                                <a href="#">眼睛</a> /
                                <a href="#">手表</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">运动</a> /
                                <a href="#">户外</a> /
                                <a href="#">乐器</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">游戏</a> /
                                <a href="#">动漫</a> /
                                <a href="#">影视</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">美食</a> /
                                <a href="#">生鲜</a> /
                                <a href="#">零食</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">鲜花</a> /
                                <a href="#">宠物</a> /
                                <a href="#">农资</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">工具</a> /
                                <a href="#">装修</a> /
                                <a href="#">建材</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">家具</a> /
                                <a href="#">家饰</a> /
                                <a href="#">家纺</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">汽车</a> /
                                <a href="#">二手车</a> /
                                <a href="#">用品</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">办公</a> /
                                <a href="#">DIY</a> /
                                <a href="#">五金电子</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">百货</a> /
                                <a href="#">餐厨</a> /
                                <a href="#">家庭保健</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">学习</a> /
                                <a href="#">卡券</a> /
                                <a href="#">本地服务</a>
                                <span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="inner-content">
                        <table border="1px">

                            <?php
                            while ($row = $result->fetch_assoc()) {
                                ?>

                                <tr align="center">
                                    <td><img src="img/<?php echo $row["img"]; ?>" height="30px" width="30px" /></td>
                                    <td><?php echo $row["phonename"]; ?></td>
                                    <td><?php echo $row["ds"]; ?></td>
                                    <td><?php echo $row["price"]; ?></td>
                                    <td><button type="submit" name="submit" value="Register">添加购物车</button></td>
                                </tr>
                            <?php
                        }
                        ?>
                        </table>
                        <!-- <div class="pic-box">
                            <img src="./img/pic2.png" alt="">
                        </div>
                        <div class="inner-mall">
                            <div class="head">
                                <img src="./img/tm.png" alt="">
                                <span class="tm">理想生活上天猫
                                        </span>
                                <a href="#">
                                    <img src="./img/pic3.png" alt="">
                                </a>
                            </div>
                        </div> -->
                    </div>
                    <div class="inner-right">
                        <a href="#">
                            <img src="https://img.alicdn.com/imgextra/i2/172/O1CN01lVCz4Z1D8oedgOMLR_!!172-0-lubanu.jpg_290x290q90.jpg_.webp" height="280px" width="160px">
                        </a>
                        <div class="hot">
                            <span>今日热卖</span>
                            <a href="#">
                                <img src="https://img.alicdn.com/simba/img/TB1_klZVMTqK1RjSZPhSutfOFXa.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-bottom">
                    <div class="content">
                        <div class="logo-box"></div>
                        <a href="#">
                            <img src="https://img.alicdn.com/imgextra/i4/3979119722/O1CN012Lgj1SmLQWmTMrS_!!3979119722-0-beehive-scenes.jpg_120x120q90.jpg_.webp" height="68px" width="120px">
                            <h4>万圣节去哪玩？良阅二次元游园会等你来！</h4>
                            <p>哈喽，大家好，我是你们的微漫酱！万圣节快要到了，在此推荐给大家一个好玩的二次元线下活动，一起来了解一下把！</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-right">
                <div class="member">
                    <div class="member-head">
                        <div class="head">
                            <a href="#"></a>
                        </div>
                        <span class="info">hi!您好</span>
                        <p>
                            <a href="#" class="icon">
                                <span></span> 领淘金币抵钱
                            </a>
                            <a href="#" class="club">
                                <span></span> 会员俱乐部
                            </a>
                        </p>
                    </div>
                    <div class="member-foot">
                        <a href="./login/login.html" target="_blank" class="login">登录</a>
                        <a href="./login/login.html" target="_blank" class="login">注册</a>
                        <a href="#">开店</a>
                    </div>
                </div>
                <div class="message">
                    <a href="#">网上有害信息举报
                        <span></span>
                    </a>
                </div>
                <div class="notice">
                    <div class="title">
                        <ul>
                            <li><a href="#">公告</a></li>
                            <li><a href="#">规则</a></li>
                            <li><a href="#" class="active">论坛</a></li>
                            <li><a href="#">安全</a></li>
                            <li><a href="#">公益</a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="#" class="active">新增淘宝网抽检标准</a></li>
                            <li><a href="#">新增淘宝网抽检标准</a></li>
                            <li><a href="#">新增淘宝网抽检标准</a></li>
                            <li><a href="#">新增淘宝网抽检标准</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="icon1"></span>
                                <p>冲话费</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon2"></span>
                                <p>旅行</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon3"></span>
                                <p>车险</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon4"></span>
                                <p>游戏</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon5"></span>
                                <p>彩票</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon6"></span>
                                <p>电影</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon7"></span>
                                <p>酒店</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon8"></span>
                                <p>理财</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon9"></span>
                                <p>找服务</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon10"></span>
                                <p>演出</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon11"></span>
                                <p>水电煤</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon12"></span>
                                <p>火车票</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>