<?php 
error_reporting(E_ALL & ~E_NOTICE);  # 設定輸出錯誤類型
include __DIR__ . '/parts/config.php'; 
var_dump($_SESSION);
?>

<?php

$sql = "SELECT * FROM member o  
JOIN member_friend d ON o.sid= d.f_sid
WHERE o.sid=2 ";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$f_test = $stmt->fetch(PDO::FETCH_ASSOC);

$rows = $pdo->query($sql)->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>點燈-填寫資料</title>
    <!-- 重置 -->
    <link rel="stylesheet" href="./css/reset.css">
    <!-- bootstrap 4.6.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- 動畫 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- 小圖示 -->
    <script src="https://kit.fontawesome.com/271f30e909.js" crossorigin="anonymous"></script>
    <!-- 文字 -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/sample_body.css">

    <!-- navbar2 -->
    <link rel="stylesheet" href="./css/navbar2.css">


    <style>
        .graycolor:hover {

            box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, .15);
            transition: .5s;
        }

        .graycolor {
            background-color: #c0c0c0;
        }



        .butstyle_1 {
            padding: 15px 15px;
        }

        .radius0 {
            border-radius: 0;
        }

        .maxwidth992 {

            width: 85%;
        }

        .dflex {
            display: flex;
        }

        .flexwrap {
            flex-wrap: wrap;
        }

        .aic {
            align-items: center;
        }



        .padding20 {
            padding: 0 20px;
        }

        .p22 {
            font-size: 20px;
            color: #cc543a;
        }

        .redcolorh5 {
            color: #cc543a;
        }

        .pad00010 {
            padding: 0 0 0 10px;

        }

        .opac {
            opacity: 0;
        }

        .juscsb {
            justify-content: space-between;
        }

        .marginauto {
            margin: auto;
        }



        .padddingtop40 {
            padding-top: 40px;
        }

        .borderbottom {
            border-bottom: 1px solid #707070;
        }

        .padddingbottom150 {
            padding-bottom: 150px;
        }

        .padright0 {
            padding-right: 0px;
        }

        .padright40 {
            padding-right: 40px;

        }

        .pad0 {
            padding: 0;
        }

        .vishidden {
            visibility: hidden;
        }

        .butomcolor {
            background-color: #d1d1d1;
        }



        .light_Fill_in_theinformation_ {
            background-image: url(./img/nav_background_1.png);

        }

        .postre {
            position: relative;

        }

        .postab {
            position: absolute;
        }

        .padbut {
            padding: 6px 12px;
            top: 5px;
        }

        .padleft10 {
            padding-left: 10px;
        }

        .butflexmargin {
            display: flex;
            margin: auto;
            justify-content: space-evenly;
            max-width: 400px;
        }

        .butmaxwid {
            max-width: 600px;
            justify-content: center;
        }

        .light_Fill_in_theinformation_card_icon {
            width: 40px;
        }

        .light_Fill_in_theinformation_card_icon img {
            width: 100%;
        }

        .marginauto0auto {
            margin: auto 0 auto auto;

        }

        .visy {
            visibility: hidden;
        }

        .dipay {
            display: none;
        }

        .pad20 {
            padding: 20px 0;
        }

        .lightcard {
            border: 1px solid #707070;
            border-radius: 5px;
            padding: 15px 10px 0 0;
            margin-bottom: 10px;
        }

        .boxlineno {
            border: 0;
        }

        .radius20 {
            border-radius: 20px;
        }

        .backgroundimg_2 {
            background-image: url(./img/nav_background_2.png);
        }

        .modal-body_box {
            overflow-y: scroll;
            overflow-x: hidden;
            height: 500px;
        }

        .displaybor {
            display: block;
        }

        .tac {
            text-align: center;
        }

        .marginauto {
            margin: auto;
        }

        .jucse {
            justify-content: space-evenly;
        }

        .paddingtop2 {
            padding-top: 2%;
        }

        .borderline {
            border-top: 1px solid #c0c0c0;
        }

        .borderline_1 {
            padding-bottom: 5%;
            border-bottom: 1px solid #c0c0c0;

        }

        .fwb {
            font-weight: bold;
        }

        form .error,
        ::placeholder {
            color: red;
        }

        input::placeholder {
            color: red;

            font-style: italic;
        }

        .fake_year::before {
            content: "年";
        }

        .fake_month::before {
            content: "月";
        }

        .fake_day::before {
            content: "日";
        }

        .boxsize {
            width: 80px;
        }

        .boxset {
            padding-right: 1%;
        }

        /* 手機在這邊~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* min-width 桌面板 */
        @media (min-width:1400px) {
            .displayno {
                display: none;
            }

            .displayflex {
                display: flex;
            }

            .paddingbottom40 {
                padding-bottom: 35px;
            }

            .paddingbottom30 {
                padding-bottom: 40px;
            }

            .padtop100 {
                padding-top: 100px;
            }

            .padbut {
                left: 55%;
            }

            .tac {
                text-align: center;
            }

            .paddingbottom35 {
                padding-bottom: 35px;
            }

            .padding5 {
                padding: 5%;
            }

            .maxwidth40 {
                max-width: 40%;
            }
        }





        /* max-width 手機板 */
        @media (max-width:1399px) {
            .breadcrumb_style_1 {
                /* contanier架構專用 padding 0 15px  */
                padding: 20px 15px;
                width: 100%;
            }


            .displayno_md {
                display: none;
            }

            .paddingbottom40 {
                padding: 0 0 15px 0;
            }

            .paddingbottom30 {
                padding: 0 0 40px 0;
            }


            .padbot40 {
                padding-bottom: 40px;
            }

            .padtop100 {
                padding-top: 5%;
            }

            .padbut {
                left: 80%;
            }

            .padddingbottom150 {
                padding-bottom: 10%;
            }


        }
    </style>
</head>

<body>
    <!-- navbar~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <div class="nav_burgurBar">
        <div class="nav_burgurBar_img">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20">
                <g id="Group_135" data-name="Group 135" transform="translate(-341.5 -1313.5)">
                    <line id="Line_50" data-name="Line 50" x2="23" transform="translate(342.5 1314.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_51" data-name="Line 51" x2="23" transform="translate(342.5 1323.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_52" data-name="Line 52" x2="23" transform="translate(342.5 1332.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                </g>
            </svg>
        </div>

        <div class="nav_logo_mobile">
            <img src="./img/nav_logo_mobile.svg" alt="">
        </div>

    </div>

    <div class="nav_overlayNav">
        <div class="nav_closeBtn mb-4">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20">
                <title>close</title>
                <path fill='#fff' d="M10 8.586l-7.071-7.071-1.414 1.414 7.071 7.071-7.071 7.071 1.414 1.414 7.071-7.071 7.071 7.071 1.414-1.414-7.071-7.071 7.071-7.071-1.414-1.414-7.071 7.071z">
                </path>
            </svg>
        </div>
        <div class="nav_overlayNavBox">
            <ul>
                <a href="">
                    <li>最新消息</li>
                </a>
                <a href="">
                    <li>探索灣廟</li>
                </a>
                <li class="nav_ser_mobile">
                    線上服務
                    <i class="fas fa-angle-down"></i>
                </li>
                <ul class="nav_dropDownMenu_mobile">
                    <a class="dropdown-item nav_ser_item_mob" href="#">祈福點燈</a>
                    <a class="dropdown-item nav_ser_item_mob" href="#">求神問卜</a>
                </ul>
                <a href="">
                    <li>聖地行旅</li>
                </a>
                <a href="">
                    <li>祈福商店</li>
                </a>
                <a href="">
                    <li>購物車</li>
                </a>
                <a href="" data-toggle="modal" data-target="#loginCenter">
                    <li>登入 | 註冊</li>
                </a>
            </ul>
        </div>
    </div>

    <!-- 電腦螢幕大小的navbar -->
    <nav class="nav_navbar_com">
        <div class="nav_navbar_com_container">
            <!-- 請依檔案位置修改logo路徑 -->
            <img src='./img/nav_logo.svg'>

            <div class="nav_navbar">
                <div class="nav_navbarBox">
                    <div class="nav_nav_left">
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">最新消息</div>
                            <div class="nav_hide_en">NEWS</div>
                        </a>
                        <a href="./discover.html" class="nav_navbar_item">
                            <div class="nav_hide_ch">探索灣廟</div>
                            <div class="nav_hide_en">EXPLORE</div>
                        </a>
                        <a href="#" class="nav_navbar_item nav_ser">
                            <div class="nav_hide_ch">線上服務</div>
                            <div class="nav_hide_en">SERVICE</div>

                            <ul class="nav_dropDownMenu">
                                <a class="dropdown-item nav_ser_item" href="./light_Introduction.html">祈福點燈</a>
                                <a class="dropdown-item nav_ser_item" href="./lucky.html">求神問卜</a>
                            </ul>
                        </a>

                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">聖地行旅</div>
                            <div class="nav_hide_en">TRIP</div>
                        </a>
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">祈福商店</div>
                            <div class="nav_hide_en">SHOP</div>
                        </a>
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">購物車</div>
                            <div class="nav_hide_en">CART</div>
                        </a>
                    </div>
                    <div class="nav_nav_right">
                        <a href="" data-toggle="modal" data-target="#loginCenter" class="nav_navbar_item">
                            <div>登入</div>
                        </a>
                        <span class="nav_navbar_item">|</span>
                        <a href="" data-toggle="modal" data-target="#registerCenter" class="nav_navbar_item">
                            <div>註冊</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <hr class="nav_navline">
    </nav>

    <!-- login -->
    <div class="modal fade" id="loginCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">登入 | LOGIN</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Password">
                        </div>
                        <input type="checkbox"> 記住帳號
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">登入</button>
                </div>
                <div class="modal-footer2-re mt-3">
                    <a class="mr-5" data-toggle="modal" data-target="#lostPassword" id="passwordbtn">忘記密碼</a>
                    <a data-toggle="modal" data-target="#registerCenter" id="registerbtn">註冊帳號</a>
                </div>
            </div>
        </div>
    </div>

    <!-- lost password -->
    <div class="modal fade" id="lostPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">找回密碼</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <p>請輸入您註冊的電子郵件，您將會在電子郵件信箱中收到重設密碼的連結。</p>
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">送出</button>
                </div>
            </div>
        </div>
    </div>

    <!-- register -->
    <div class="modal fade" id="registerCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">註冊 | REGISTER</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="User Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Repeat Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">註冊</button>
                </div>
            </div>
        </div>
    </div>


    <!-- 我是麵包屑-->
    <div class="breadcrumb_style   backgroundimg_1">
        <div class="d-flex flex-wrap breadcrumb_style_1 ">
            <a href="./index" class="astlyep">首頁</a>
            <!-- 共用雲端找箭頭icon-->
            <img src="./img/nav_arrow_right.svg">
            <a href="./light_Introduction.html" class="astlyep">燈種介紹</a>
            <img src="./img/nav_arrow_right.svg">
            <a href="./light_Description.html" class="astlyep">服務說明</a>
            <img src="./img/nav_arrow_right.svg">
            <a href="./light_Fill_in_theinformation.html" class="astlyep">點燈填寫</a>
        </div>
    </div>


    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="light_Fill_in_theinformation_ padtop100">
        <!--  max-width 992px -->
        <div class="light_Fill_in_theinformation_set   marginauto">

            <!--  根目錄 -->
            <div class="light_Fill_in_theinformation_directory">
                <form name="form1" method="post">
                    <!--   -->
                    <div class="light_Fill_in_theinformation_text container removeset">


                        <!-- 匯入點 -->


                        <!--  預設祈福者 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                        <div class="light_Fill_in_theinformation_text_3 padddingtop40">
                            <!--  預設祈福者  小提示 -->
                            <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                                <!--  預設祈福者  小提示 必填資料 -->
                                <div class="light_Fill_in_theinformation_text_star_left">
                                    <!-- *的 ICON -->
                                    <!-- <img src=""> -->
                                    <p class="redcolorh5">*為必填資料</p>
                                </div>
                                <!--  預設祈福者  小提示 同會員資料 -->
                                <div class="light_Fill_in_theinformation_text_star_right    aic d-flex">
                                    <input type="checkbox" id="exampleCheck2" class="radius0">
                                    <label class="form-check-label padleft10" for="exampleCheck2" type="submit">
                                        <p>同會員資料</p>
                                    </label>
                                </div>
                            </div>
                            <!--  預設祈福者 _標題 -->
                            <div class="light_Fill_in_theinformation_title tac paddingbottom40 postre">
                                <h3 class="postre">祈福者
                                    <!--  預設祈福者 _標題_刪除按鈕 -->
                                    <button class="graycolor postab padbut dipay">
                                        <p>刪除</p>
                                    </button>
                                </h3>

                            </div>


                            <!--  預設祈福者 input集合 桌機用-->
                            <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                                <!--  input_1_姓名-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                    <!-- *姓名 -->
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5">*</p>
                                        <p>姓名</p>
                                    </div>
                                    <!-- boostarp input -->
                                    <div class="col-8 p-0">
                                        <input type="text" class="form-control  radius0 exampleInputName_1 name text_name_2" placeholder="請輸入姓名" name="text_name_2">
                                        <small class="form-text error"></small>
                                    </div>
                                </div>

                                <!--  預設祈福者input_1_生日-->
                                <div class="paddingbottom40">
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <!--預設祈福者 *出生日期 -->
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            <p class="redcolorh5">*</p>
                                            <p>出生日期</p>
                                        </div>
                                        <!--預設祈福者 boostarp 下拉選單 -->
                                        <div class="col-lg-11 displayflex aic p-0">
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0 ">
                                                    <select class="form-control col radius0 year" >
                                                        <option selected value="">選擇</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1960">1960</option>
                                                        <option value="1959">1959</option>
                                                        <option value="1958">1958</option>
                                                        <option value="1957">1957</option>
                                                        <option value="1956">1956</option>
                                                        <option value="1955">1955</option>
                                                        <option value="1954">1954</option>
                                                        <option value="1953">1953</option>
                                                        <option value="1952">1952</option>
                                                        <option value="1951">1951</option>
                                                        <option value="1950">1950</option>
                                                        <option value="1949">1949</option>
                                                        <option value="1948">1948</option>
                                                        <option value="1947">1947</option>
                                                        <option value="1946">1946</option>
                                                        <option value="1945">1945</option>
                                                        <option value="1944">1944</option>
                                                        <option value="1943">1943</option>
                                                        <option value="1942">1942</option>
                                                        <option value="1941">1941</option>
                                                        <option value="1940">1940</option>
                                                        <option value="1939">1939</option>
                                                        <option value="1938">1938</option>
                                                        <option value="1937">1937</option>
                                                        <option value="1936">1936</option>
                                                        <option value="1935">1935</option>
                                                        <option value="1934">1934</option>
                                                        <option value="1933">1933</option>
                                                        <option value="1932">1932</option>
                                                        <option value="1931">1931</option>
                                                        <option value="1930">1930</option>
                                                        <option value="1929">1929</option>
                                                        <option value="1928">1928</option>
                                                        <option value="1927">1927</option>
                                                        <option value="1926">1926</option>
                                                        <option value="1925">1925</option>
                                                        <option value="1924">1924</option>
                                                        <option value="1923">1923</option>
                                                        <option value="1922">1922</option>
                                                        <option value="1921">1921</option>
                                                        <option value="1920">1920</option>
                                                    </select>

                                                </div>
                                                <div class="fake_year"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0">
                                                    <select class="form-control col radius0 month">
                                                        <option selected value="">選擇</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>

                                                </div>
                                                <div class="fake_month"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0 ">
                                                    <select class="form-control col radius0 day" >
                                                        <option selected value="">選擇</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                                <div class="fake_day"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 空值警告用 年月日-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                        </div>
                                        <div class="col-lg-11 displayflex aic p-0">
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0 ">
                                                    <div class="year vishidden"></div>
                                                    <small class="form-text error"></small>

                                                </div>
                                                <div class="fake_year vishidden"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0">
                                                    <div class="month vishidden"></div>
                                                    <small class="form-text error"></small>

                                                </div>
                                                <div class="fake_month vishidden"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0 ">
                                                    <div class="day vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                                <div class="fake_day vishidden"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <!--  預設祈福者input_1_時辰-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                    <!-- 預設祈福者*時辰 -->
                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                        <p class="redcolorh5 opac">*</p>
                                        <p>出生時辰</p>
                                    </div>
                                    <!--預設祈福者 boostarp 下拉選單 -->
                                    <div class="col-11 d-flex aic p-0">
                                        <div class="col-2 p-0">
                                            <select class="form-control col-11 radius0 text_time_2" >
                                                <option selected>吉時</option>
                                                <option value="子時 23~0">子時 23~01</option>
                                                <option value="丑時 01~03">丑時 01~03</option>
                                                <option value="寅時 03~05">寅時 03~05</option>
                                                <option value="卯時 05~07">卯時 05~07</option>
                                                <option value="辰時 07~09">辰時 07~09</option>
                                                <option value="巳時 09~11">巳時 09~11</option>
                                                <option value="午時 11~13">午時 11~13</option>
                                                <option value="未時 13~15">未時 13~15</option>
                                                <option value="申時 15~17">申時 15~17</option>
                                                <option value="酉時 17~19">酉時 17~19</option>
                                                <option value="戌時 19~21">戌時 19~21</option>
                                                <option value="亥時 21~23">亥時 21~23</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!--  預設祈福者input_1_性別-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">

                                    <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                        <p class="redcolorh5">*</p>
                                        <p>性別</p>
                                    </div>

                                    <div class="col-11 d-flex aic p-0">
                                        <div class="col-2 p-0">
                                            <select class="form-control col-7 radius0 text_xxxx_2">
                                                <option value="男">男</option>
                                                <option value="女">女</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <!-- 預設祈福者input_1_電話-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                    <!--預設祈福者 *連絡電話 -->
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5 opac">*</p>
                                        <p>連絡電話</p>
                                    </div>
                                    <!--預設祈福者 boostarp input -->
                                    <input type="text" class="form-control col-8 radius0  exampleInputPhoneNumber_1 text_mobile_2 mobile" placeholder="請輸入連絡電話" id="exampleInputPhoneNumber" pattern="09\d{2}-?\d{3}-?\d{3}">
                                </div>

                                <!--  預設祈福者input_1_地址  測試版本新增空值警告-->
                                <div class="all paddingbottom40">
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <!--預設祈福者 *地址 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>地址</p>
                                        </div>
                                        <!-- 預設祈福者boostarp input -->
                                        <div class="col-8 p-0">
                                            <input type="text" class="form-control  radius0 exampleInputaddress_1 address text_address_2" placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">

                                        </div>
                                    </div>
                                    <!-- 空值警告用 地址-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        </div>
                                        <div class="col-8 p-0">
                                            <div class="address vishidden"></div>
                                            <small class="form-text error"></small>
                                        </div>
                                    </div>
                                </div>



                                <!--預設祈福者 改 -->
                                <div class="light_add_set lightadd_this " id="lightadd_this">
                                    <div class="paddingbottom40 myselector_group">
                                        <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects" data-selector="myselector">
                                            <!--  input_1_選擇燈種 -->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                <!-- *燈種 -->
                                                <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇燈種</p>
                                                </div>
                                                <!-- boostarp 下拉選單 -->
                                                <div class="col-4 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                            <option selected value="">選擇燈種</option>
                                                            <option>光明燈</option>
                                                            <option>文昌燈</option>
                                                            <option>安太歲</option>
                                                            <option>藥師燈</option>
                                                            <option>發財燈</option>
                                                            <option>姻緣燈</option>
                                                        </select>

                                                        <!-- <small class="form-text error"></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- 預設祈福者input_1_ 選擇廟宇-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                <!-- 預設祈福者 *廟宇 -->
                                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇廟宇</p>
                                                </div>
                                                <!--預設祈福者 boostarp 下拉選單 -->
                                                <div class="col-3 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                            <option selected value="">選擇地區</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-5 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                            <option selected value="">選擇廟宇</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            

                                        </div>
                                        <!-- 空值警告用  -->
                                        <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects">
                                            <!-- 空值警告用  選燈種-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                </div>
                                                <div class="col-4 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_type vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- 空值警告用  選地區 廟宇-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                </div>
                                                <div class="col-3 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_area vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-5 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_temple vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  預設祈福者_按鈕_新增廟宇 -->
                                <div class="button_add_set d-flex juscsb  marginauto paddingbottom40 col-8">
                                    <div class="button_add ">
                                        <div class="btnss graycolor butomcolor light_add">
                                            <p>+ 新增燈種與廟宇</p>
                                        </div>
                                    </div>
                                    <!-- <div class="button_add vishidden ">
                                    <button class="graycolor">
                                        <p>+ 新增燈種與廟宇</p>
                                    </button>
                                </div> -->
                                </div>
                            </div>



                        </div>











                        <div class="memberadd  " id="memberadd">
                            <div class="light_Fill_in_theinformation_text_3 padddingtop40 ">
                                <!--  祈福者卡(none)  小提示 -->
                                <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                                    <!--  祈福者卡(none)  小提示 必填資料 -->
                                    <div class="light_Fill_in_theinformation_text_star_left">
                                        <!-- *的 ICON -->
                                        <!-- <img src=""> -->
                                        <p class="redcolorh5">*為必填資料</p>
                                    </div>

                                    <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                    <div class=" d-flex aic p-0">
                                        <div class="col p-0">
                                            <select class="form-control radius0 exampleInputfriend" id="exampleInputfriend">

                                                <option value="">同親友資料</option>
                                                <?php foreach ($rows as $p) : ?>
                                                    <option value="<?= $p['sid'] ?>" data-sid="<?= $p['sid'] ?>" data-address="<?= $p['address_'] ?>" data-mobile="<?= $p['mobile_'] ?>" data-year="<?= $p['year'] ?>" data-month="<?= $p['month'] ?>" data-day="<?= $p['day'] ?>">

                                                        <?= $p['name_'] ?>
                                                    </option>

                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!--  祈福者卡(none) _標題 -->
                                <div class="light_Fill_in_theinformation_title tac paddingbottom40 postre">
                                    <h3 class="postre">祈福者
                                        <!--  祈福者卡(none) _標題_刪除按鈕 -->
                                        <button class="graycolor postab padbut removebut">
                                            <p>刪除</p>
                                        </button>
                                    </h3>

                                </div>


                                <!--  祈福者卡(none) input集合 桌機用-->
                                <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                                    <!--  祈福者卡(none) input_1_姓名-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!-- 祈福者卡(none) *姓名 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>姓名</p>
                                        </div>
                                        <!-- 祈福者卡(none) boostarp input -->
                                        <div class="col-8 p-0">
                                            <input type="text" class="form-control  radius0 exampleInputName name" placeholder="請輸入姓名" id="name" name="name">
                                            <small class="form-text error"></small>
                                        </div>
                                    </div>

                                    <!--  祈福者卡(none) input_1_生日-->
                                    <!--  預設祈福者input_1_生日-->
                                    <div class="paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <!--預設祈福者 *出生日期 -->
                                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                <p class="redcolorh5">*</p>
                                                <p>出生日期</p>
                                            </div>
                                            <!--預設祈福者 boostarp 下拉選單 -->
                                            <div class="col-lg-11 displayflex aic p-0">
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <select class="form-control col radius0 exampleInputYear year" id="exampleInputTime_2">
                                                            <option selected value="">選擇</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
                                                        </select>

                                                    </div>
                                                    <div class="fake_year"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0">
                                                        <select class="form-control col radius0 exampleInputMonth month" id="exampleInputTime_3">
                                                            <option selected value="">選擇</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>

                                                    </div>
                                                    <div class="fake_month"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <select class="form-control col radius0 exampleInputDay day" id="exampleInputTime_4">
                                                            <option selected value="">選擇</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="fake_day"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 空值警告用 年月日-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            </div>
                                            <div class="col-lg-11 displayflex aic p-0">
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <div class="year vishidden"></div>
                                                        <small class="form-text error"></small>

                                                    </div>
                                                    <div class="fake_year vishidden"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0">
                                                        <div class="month vishidden"></div>
                                                        <small class="form-text error"></small>

                                                    </div>
                                                    <div class="fake_month vishidden"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <div class="day vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                    <div class="fake_day vishidden"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <!--  祈福者卡(none) input_1_時辰-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!-- 祈福者卡(none) *時辰 -->
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>出生時辰</p>
                                        </div>
                                        <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                        <div class="col-11 d-flex aic p-0">
                                            <div class="col-2 p-0">
                                                <select class="form-control col-11 radius0 text_time_2" >
                                                    <option selected>吉時</option>
                                                    <option value="子時 23~0">子時 23~01</option>
                                                    <option value="丑時 01~03">丑時 01~03</option>
                                                    <option value="寅時 03~05">寅時 03~05</option>
                                                    <option value="卯時 05~07">卯時 05~07</option>
                                                    <option value="辰時 07~09">辰時 07~09</option>
                                                    <option value="巳時 09~11">巳時 09~11</option>
                                                    <option value="午時 11~13">午時 11~13</option>
                                                    <option value="未時 13~15">未時 13~15</option>
                                                    <option value="申時 15~17">申時 15~17</option>
                                                    <option value="酉時 17~19">酉時 17~19</option>
                                                    <option value="戌時 19~21">戌時 19~21</option>
                                                    <option value="亥時 21~23">亥時 21~23</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <!--  祈福者卡(none) input_1_性別-->
                                    <!-- <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                    
                                        <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>性別</p>
                                        </div>
                                  
                                        <div class="light_Fill_in_theinformation_check d-flex">
                                            <div class="check d-flex aic padright40">
                                                <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <p class="form-check-label" for="exampleRadios1">
                                                    男
                                                </p>
                                            </div>
                                            <div class="check d-flex aic">
                                                <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                <p class="form-check-label" for="exampleRadios2">
                                                    女
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->




                                    <!--  祈福者卡(none) input_1_電話-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!--祈福者卡(none)  *連絡電話 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>連絡電話</p>
                                        </div>
                                        <!-- boostarp input -->
                                        <input type="text" class="form-control col-8 radius0 exampleInputPhoneNumber mobile" placeholder="請輸入連絡電話" aria-label="請輸入連絡電話">
                                    </div>

                                    <!--  祈福者卡(none) input_1_地址-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!-- 祈福者卡(none) *地址 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>地址</p>
                                        </div>
                                        <!-- 祈福者卡(none) boostarp input -->
                                        <div class="col-8 p-0">
                                            <input type="text" class="form-control  radius0 exampleInputaddress address " placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">
                                            <small class="form-text error"></small>
                                        </div>
                                    </div>

                                    <!-- 祈福者卡(none) 改 -->
                                    <div class="light_add_set lightadd_this " id="lightadd_this">
                                    <div class="paddingbottom40 myselector_group">
                                        <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects" data-selector="myselector">
                                            <!--  input_1_選擇燈種 -->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                <!-- *燈種 -->
                                                <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇燈種</p>
                                                </div>
                                                <!-- boostarp 下拉選單 -->
                                                <div class="col-4 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                            <option selected value="">選擇燈種</option>
                                                            <option>光明燈</option>
                                                            <option>文昌燈</option>
                                                            <option>安太歲</option>
                                                            <option>藥師燈</option>
                                                            <option>發財燈</option>
                                                            <option>姻緣燈</option>
                                                        </select>

                                                        <!-- <small class="form-text error"></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- 祈福者卡(none)input_1_ 選擇廟宇-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                <!-- 祈福者卡(none) *廟宇 -->
                                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇廟宇</p>
                                                </div>
                                                <!--祈福者卡(none) boostarp 下拉選單 -->
                                                <div class="col-3 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                            <option selected value="">選擇地區</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-5 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                            <option selected value="">選擇廟宇</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            

                                        </div>
                                        <!-- 空值警告用  -->
                                        <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects">
                                            <!-- 空值警告用  選燈種-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                </div>
                                                <div class="col-4 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_type vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- 空值警告用  選地區 廟宇-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                </div>
                                                <div class="col-3 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_area vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-5 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_temple vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!--  祈福者卡(none)_按鈕_新增廟宇 -->
                                    <div class="button_add_set d-flex juscsb  marginauto paddingbottom40 col-8">
                                        <div class="button_add ">
                                            <div class="btnss graycolor butomcolor light_add">
                                                <p>+ 新增燈種與廟宇</p>
                                            </div>
                                        </div>
                                        <!-- <div class="button_add vishidden ">
                                        <button class="graycolor">
                                            <p>+ 新增燈種與廟宇</p>
                                        </button>
                                    </div> -->
                                    </div>
                                </div>

                            </div>
                        </div>















                    </div>



                    <!-- 桌機用 底部_按鈕 -->
                    <div class="light_Fill_in_theinformation_button buttonstyle padddingtop40 padddingbottom150 butflexmargin  displayno_md">
                        <div class="btntest">
                            <div class="butstyle_1 member_add btnss">
                                <p>新增祈福者</p>
                            </div>
                        </div>
                        <button type="button" class="butstyle_1 addbtn" id="popt" onclick="checkForm(); return false;">
                            <p>加入購物車</p>
                        </button>

                    </div>

                </form>


            </div>



            <!-- 想提問QQ   與下方聯動-->

            <!-- 彈跳 點燈確認清單 -->
            <div class="modal fade" id="checkjump" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered maxwidth40" role="document">
                    <div class="modal-content boxlineno radius20 backgroundimg_2 padding5">
                        <div class="modal-header boxlineno displaybor tac">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h5 class="modal-title">點燈確認清單</h5>
                        </div>


                        <!-- 彈跳 整體 -->
                        <div class="modal-body pad0_md ">

                            <div class="modal-body_box borderline">

                                <!--彈跳 預設祈福者 -->
                                <div class="blesser-template">
                                    <div class="addjumpLight_new">
                                        <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                            <div class=" col d-flex">
                                                <p class="redcolorh5"></p>
                                                <p class="fwb">祈福者</p>
                                            </div>

                                        </div>
                                        <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                            <div class=" col d-flex">
                                                <p class="redcolorh5"></p>
                                                <p class="">姓名</p>
                                            </div>
                                            <!-- val值 -->
                                            <div class=" col-8 padlock">
                                                <p class="name_2" name="name_2"></p>
                                            </div>

                                        </div>


                                        <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                            <div class=" col d-flex">
                                                <p class="redcolorh5"></p>
                                                <p>出生日期</p>
                                            </div>
                                            <!-- val值 -->
                                            <div class=" col-8 padlock d-flex">
                                                <!-- 國曆農曆 -->
                                                <p class="calendar_2"></p>
                                                <!-- 西元年月日 轉合併 -->
                                                <p class="pad00010 date_2"></p>
                                            </div>

                                        </div>


                                        <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                            <div class=" col d-flex">
                                                <p class="redcolorh5"></p>
                                                <p class="">出生時辰</p>
                                            </div>
                                            <!-- val值 -->
                                            <div class=" col-8 padlock">
                                                <p class="time_2"></p>
                                            </div>

                                        </div>

                                        <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                            <div class=" col d-flex">
                                                <p class="redcolorh5"></p>
                                                <p class="">性別</p>
                                            </div>
                                            <div class=" col-8 padlock">
                                                <p>男</p>
                                            </div>
                                        </div>

                                        <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                            <div class=" col d-flex">
                                                <p class="redcolorh5"></p>
                                                <p class="">連絡電話</p>
                                            </div>
                                            <!-- val值 -->
                                            <div class=" col-8 padlock">
                                                <p class="mobile_2" name="mobile_2"></p>
                                            </div>

                                        </div>


                                        <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                            <div class=" col d-flex">
                                                <p class="redcolorh5"></p>
                                                <p>地址</p>
                                            </div>
                                            <!-- val值 -->
                                            <div class=" col-8 padlock">
                                                <p class="address_2" name="address_2"></p>
                                            </div>
                                        </div>

                                        <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                            <div class=" col d-flex">
                                                <p class="redcolorh5"></p>
                                                <p class="">選擇燈種</p>
                                            </div>
                                            <!-- val值 -->
                                            <div class=" col-8 padlock d-flex">
                                                <p class="light_text_2"></p>
                                            </div>

                                        </div>

                                    </div>


                                    <!-- 我是分隔底線 -->
                                    <div class=" aic col-lg-10 marginauto borderline_1 ">
                                    </div>

                                </div>






                            </div>

                        </div>
                        <!-- 親友修改 返回 儲存按鈕 -->
                        <div class="modal-footer boxlineno marginauto col-9 jucse">
                            <div type="" class="aic btnss graycolor " data-dismiss="modal" aria-label="Close">返回</div>
                            <button type="submit" id="member_save" class="aic">送出</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>




    </div>





    <!-- footer是我~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <footer>
        <p>Copyright© TempleTrip.tw</p>
    </footer>








    <!-- Js  相關設定~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- jquery3.5.1 -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- bootstrap4.6.0 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://unpkg.com/moment-lunar@0.0.4/moment-lunar.min.js"></script>
    <script>
        const lunarDate = moment().year(2021).month(2).date(24).lunar().format('YYYY-MM-DD');
        const solarDate = moment().year(2017).month(0).date(1).solar().format('YYYY-MM-DD');

        console.log(lunarDate);
        console.log(solarDate);
    </script>

    <!-- js jq 開始 -->

    <script>
        // navbar
        // overlayNav進場
        $('.nav_burgurBar_img').click(function() {

            let navPosition = {
                transform: 'translateY(0)'
            }

            $(".nav_overlayNav").css(navPosition);
        })

        // overlayNav退場
        $('.nav_closeBtn').click(function() {

            let navPosition = {
                transform: 'translateY(-2500px)',
                transition: '.7s'
            }

            $(".nav_overlayNav").css(navPosition);
        })


        //Login hide
        $('#registerbtn').click(function() {
            $('#loginCenter').modal('hide');
        })

        $('#passwordbtn').click(function() {
            $('#loginCenter').modal('hide');
        })

        //overlay sub-menu
        $(document).ready(function() {
            $('.nav_ser_mobile').click(function() {

                $('.nav_dropDownMenu_mobile').toggle('slow');

            })
        });









        // 測試 同會員資料匯入輸入
        $(document).on('click', '.form-check-label', (function() {
            console.log('click')
            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.exampleInputName_1').val("<?= $f_test['name'] ?>");

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.exampleInputPhoneNumber_1').val("<?= $f_test['mobile'] ?>");

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.exampleInputaddress_1').val("<?= $f_test['address'] ?>");

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.exampleInputemail_1').val("<?= $f_test['email'] ?>");

        }))


        // 親友資料匯入

        $(document).on('change', ".exampleInputfriend", (function() {

            const sid = $(this).val();
            $.post(
                'light_Fil_api.php', {
                    sid
                },
                function(data) {
                    $('.exampleInputName').val(data.name_);
                    $('.exampleInputaddress').val(data.address_)
                    $('.exampleInputPhoneNumber').val(data.mobile_)
                    $('.exampleInputYear').val(data.year)
                    $('.exampleInputMonth').val(data.month)
                    $('.exampleInputDay').val(data.day)
                },
                'json'
            )
        }))






        let submit_data = {};

        $('#member_save').click(function(){
            $.post(
                'light_add.php',
                submit_data,
                function(data) {
                    if(data.success) {
                        location.reload();
                    } else {
                        alert('error');
                    }
                },
                'json'
            )
        }); 



        // 檢查email 正規表達式
        const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
        
        // const smalls = [$name.next(), $email.next(), $mobile.next()];

        function checkForm() {
            let isPass = true;
            $(".light_Fill_in_theinformation_text_3").get().forEach(info => {
                let $name = $(info).find('.name'),
                $email = $(info).find('.email'),
                $mobile = $(info).find('.mobile'),
                $address = $(info).find('.address'),
                $light = $(info).find('.light'),
                $year = $(info).find('.year'),
                $month = $(info).find('.month'),
                $day = $(info).find('.day'),
                $light_type = $(info).find('.light_type'),
                $light_area = $(info).find('.light_area'),
                $light_temple = $(info).find('.light_temple');

                let fileds = [$name, $email, $mobile, $address, $year, $month, $day, $light_type, $light_area, $light_temple];
                // 回復原來的狀態
                fileds.forEach(el => {
                    el.css('border', '1px solid #CCCCCC');
                    el.next().text('');
                });
                if ($name.val().length < 2) {
                    isPass = false;
                    $name.css('border', '1px solid red');
                    $name.next().text('請輸入正確的姓名');
                }

                if ($address.val().length < 1) {
                    isPass = false;
                    $address.css('border', '1px solid red');
                    $address.next().text('請輸入正確的地址');
                }
                $(info).find('[data-selector=myselector]').parents('.myselector_group').get().forEach(selector => {
                    let $light_type = $(selector).find('.light_type'),
                        $light_area = $(selector).find('.light_area'),
                        $light_temple = $(selector).find('.light_temple');
                    if ($light_type.val() == "") {
                        isPass = false;
                        $light_type.css('border', '1px solid red');
                        $light_type.next().text('請選擇燈種');
                    }
                    if ($light_area.val() == "") {
                        isPass = false;
                        $light_area.css('border', '1px solid red');
                        $light_area.next().text('請選擇地區');
                    }

                    if ($light_temple.val() == "") {
                        isPass = false;
                        $light_temple.css('border', '1px solid red');
                        $light_temple.next().text('請選擇廟宇');
                    }
                });
                
                if ($year.val() == "") {
                    isPass = false;
                    $year.css('border', '1px solid red');
                    $year.next().text('請選擇');
                }

                if ($month.val() == "") {
                    isPass = false;
                    $month.css('border', '1px solid red');
                    $month.next().text('請選擇');
                }

                if ($day.val() == "") {
                    isPass = false;
                    $day.css('border', '1px solid red');
                    $day.next().text('請選擇');
                }
            });
            if (isPass || 1) {
                $('#checkjump').modal();
                $('#checkjump .modal-body_box > :not(.blesser-template)').remove();
                $('.blesser-template').hide();
                blessers = [];
                $(".light_Fill_in_theinformation_text_3").get().forEach(info => {
                    let name = $(info).find('.name').val(),
                        mobile = $(info).find('.mobile').val(),
                        address = $(info).find('.address').val(),
                        stime = $(info).find('.text_time_2').val(),
                        year = $(info).find('.year').val(),
                        month = $(info).find('.month').val(),
                        day = $(info).find('.day').val();
                        console.log(name);
                    birthday = year + '-' + month + '-' + day;
                    let light = [];
                    $(info).find('[data-selector=myselector]').parents('.myselector_group').get().forEach(selector => {
                        let light_type = $(selector).find('.light_type').val(),
                            light_area = $(selector).find('.light_area').val(),
                            light_temple = $(selector).find('.light_temple').val();
                        light.push([light_type, light_area, light_temple].join(" "));
                    });
                    blessers.push({
                        name: name,
                        content: light.join(","),
                        qty: light.length,
                        price: 600,
                        note: [mobile, address, stime, birthday].join(",")
                    });
                    let $blesser = $('.blesser-template').clone().removeClass('blesser-template').show();
                    $blesser.find('.name_2').text(name);
                    $blesser.find('.mobile_2').text(mobile);
                    $blesser.find(".address_2").text(address);
                    $blesser.find(".time_2").text(stime);
                    $blesser.find(".calendar_2").text(birthday);
                    $blesser.find(".light_text_2").html(light.join("<br />"));
                    $('#checkjump .modal-body_box').append($blesser);
                }); 
                console.log(blessers);
                submit_data = {
                    'json': JSON.stringify(blessers)
                }
                
            }
            // 彈跳視窗條件式 在這邊QQ 想提問


        }












        // 通用 刪除祈福者 on版本
        $(document).on('click', '.removebut', (function() {
            console.log('click')
            $(this).parentsUntil('.removeset').remove();
        }))

        // 桌機 刪除燈種垃圾桶 on版本
        $(document).on('click', '.removebut_far', (function() {
            console.log('click')
            $(this).parentsUntil('.light_add_set').remove();
        }))

        // 手機 刪除燈種垃圾桶 on版本
        $(document).on('click', '.removebut_far_md', (function() {
            console.log('click')
            $(this).parentsUntil('.light_add_set_md').remove();
        }))


        // 桌機 祈福者增加
        // let addFamily = document.querySelector(".memberadd").innerHTML;
        // $('.member_add').click(function () {
        // console.log('click', addFamily)
        // $('.removeset').append(addFamily);
        // })









        // 桌機 祈福者增加on版本

        let nowcard = 1;
        $(document).on('click', '.member_add', function() {
            // let newLiiii = '<div id="newdata_' + nowcard + '">' + addCard_new + '</div>';

            // nowcard = nowcard + 1;
            // console.log('click', newLiiii)
            $('.removeset').append(addCard_new);

        })

        let addCard_new = `<div class="light_Fill_in_theinformation_text_3 padddingtop40 ">
                                <!--  祈福者卡(none)  小提示 -->
                                <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                                    <!--  祈福者卡(none)  小提示 必填資料 -->
                                    <div class="light_Fill_in_theinformation_text_star_left">
                                        <!-- *的 ICON -->
                                        <!-- <img src=""> -->
                                        <p class="redcolorh5">*為必填資料</p>
                                    </div>

                                    <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                    <div class=" d-flex aic p-0">
                                        <div class="col p-0">
                                            <select class="form-control radius0 exampleInputfriend" id="exampleInputfriend">

                                                <option value="">同親友資料</option>
                                                <?php foreach ($rows as $p) : ?>
                                                    <option value="<?= $p['sid'] ?>" data-sid="<?= $p['sid'] ?>" data-address="<?= $p['address_'] ?>" data-mobile="<?= $p['mobile_'] ?>" data-year="<?= $p['year'] ?>" data-month="<?= $p['month'] ?>" data-day="<?= $p['day'] ?>">

                                                        <?= $p['name_'] ?>
                                                    </option>

                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!--  祈福者卡(none) _標題 -->
                                <div class="light_Fill_in_theinformation_title tac paddingbottom40 postre">
                                    <h3 class="postre">祈福者
                                        <!--  祈福者卡(none) _標題_刪除按鈕 -->
                                        <button class="graycolor postab padbut removebut">
                                            <p>刪除</p>
                                        </button>
                                    </h3>

                                </div>


                                <!--  祈福者卡(none) input集合 桌機用-->
                                <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                                    <!--  祈福者卡(none) input_1_姓名-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!-- 祈福者卡(none) *姓名 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>姓名</p>
                                        </div>
                                        <!-- 祈福者卡(none) boostarp input -->
                                        <div class="col-8 p-0">
                                            <input type="text" class="form-control  radius0 exampleInputName name" placeholder="請輸入姓名" id="name" name="name">
                                            <small class="form-text error"></small>
                                        </div>
                                    </div>

                                    <!--  祈福者卡(none) input_1_生日-->
                                    <div class="paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <!--祈福者卡(none) *出生日期 -->
                                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                <p class="redcolorh5">*</p>
                                                <p>出生日期</p>
                                            </div>
                                            <!--祈福者卡(none) boostarp 下拉選單 -->
                                            <div class="col-lg-11 displayflex aic p-0">
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <select class="form-control col radius0 exampleInputYear year" id="exampleInputTime_2">
                                                            <option selected value="">選擇</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
                                                        </select>

                                                    </div>
                                                    <div class="fake_year"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0">
                                                        <select class="form-control col radius0 exampleInputMonth month" id="exampleInputTime_3">
                                                            <option selected value="">選擇</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>

                                                    </div>
                                                    <div class="fake_month"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <select class="form-control col radius0 exampleInputDay day" id="exampleInputTime_4">
                                                            <option selected value="">選擇</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="fake_day"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 空值警告用 年月日-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            </div>
                                            <div class="col-lg-11 displayflex aic p-0">
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <div class="year vishidden"></div>
                                                        <small class="form-text error"></small>

                                                    </div>
                                                    <div class="fake_year vishidden"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0">
                                                        <div class="month vishidden"></div>
                                                        <small class="form-text error"></small>

                                                    </div>
                                                    <div class="fake_month vishidden"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <div class="day vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                    <div class="fake_day vishidden"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <!--  祈福者卡(none) input_1_時辰-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!-- 祈福者卡(none)*時辰 -->
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>出生時辰</p>
                                        </div>
                                        <!--祈福者卡(none) boostarp 下拉選單 -->
                                        <div class="col-11 d-flex aic p-0">
                                            <div class="col-3 p-0">
                                                <select class="form-control col-10 radius0 text_time_2" id="">
                                                    <option selected>吉時</option>
                                                    <option value="子時 23~0">子時 23~01</option>
                                                    <option value="丑時 01~03">丑時 01~03</option>
                                                    <option value="寅時 03~05">寅時 03~05</option>
                                                    <option value="卯時 05~07">卯時 05~07</option>
                                                    <option value="辰時 07~09">辰時 07~09</option>
                                                    <option value="巳時 09~11">巳時 09~11</option>
                                                    <option value="午時 11~13">午時 11~13</option>
                                                    <option value="未時 13~15">未時 13~15</option>
                                                    <option value="申時 15~17">申時 15~17</option>
                                                    <option value="酉時 17~19">酉時 17~19</option>
                                                    <option value="戌時 19~21">戌時 19~21</option>
                                                    <option value="亥時 21~23">亥時 21~23</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <!--  祈福者卡(none) input_1_性別-->

                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">

                                        <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>性別</p>
                                        </div>

                                        <div class="col-11 d-flex aic p-0">
                                            <div class="col-2 p-0">
                                                <select class="form-control col-7 radius0 text_xxxx_2">
                                                    <option value="男">男</option>
                                                    <option value="女">女</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>




                                    <!--  祈福者卡(none) input_1_電話-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!--祈福者卡(none) *連絡電話 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>連絡電話</p>
                                        </div>
                                        <!--祈福者卡(none) boostarp input -->
                                        <input type="text" class="form-control col-8 radius0  exampleInputPhoneNumber text_mobile_2 mobile" placeholder="請輸入連絡電話" id="exampleInputPhoneNumber" pattern="09\d{2}-?\d{3}-?\d{3}">
                                    </div>

                                    <!--  祈福者卡(none)input_1_地址  測試版本新增空值警告-->
                                    <div class="all paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <!--祈福者卡(none) *地址 -->
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                <p class="redcolorh5">*</p>
                                                <p>地址</p>
                                            </div>
                                            <!-- 祈福者卡(none)boostarp input -->
                                            <div class="col-8 p-0">
                                                <input type="text" class="form-control  radius0 exampleInputaddress address text_address_2" placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">

                                            </div>
                                        </div>
                                        <!-- 空值警告用 地址-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            </div>
                                            <div class="col-8 p-0">
                                                <div class="address vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- 祈福者卡(none) 改 -->
                                    <div class="light_add_set lightadd_this ">
                                        <div class="paddingbottom40 myselector_group">
                                            <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects" data-selector="myselector">
                                                <!--  input_1_選擇燈種 -->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                    <!-- *燈種 -->
                                                    <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                        <p class="redcolorh5">*</p>
                                                        <p>選擇燈種</p>
                                                    </div>
                                                    <!-- boostarp 下拉選單 -->
                                                    <div class="col-4 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                                <option selected value="">選擇燈種</option>
                                                                <option>光明燈</option>
                                                                <option>文昌燈</option>
                                                                <option>安太歲</option>
                                                                <option>藥師燈</option>
                                                                <option>發財燈</option>
                                                                <option>姻緣燈</option>
                                                            </select>

                                                            <!-- <small class="form-text error"></small> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 祈福者卡(none)input_1_ 選擇廟宇-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                    <!-- 祈福者卡(none) *廟宇 -->
                                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                        <p class="redcolorh5">*</p>
                                                        <p>選擇廟宇</p>
                                                    </div>
                                                    <!--祈福者卡(none) boostarp 下拉選單 -->
                                                    <div class="col-3 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                                <option selected value="">選擇地區</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                                <option selected value="">選擇廟宇</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <!-- 空值警告用  -->
                                            <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects">
                                                <!-- 空值警告用  選燈種-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                    <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                    </div>
                                                    <div class="col-4 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <div class="light_type vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 空值警告用  選地區 廟宇-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                    </div>
                                                    <div class="col-3 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <div class="light_area vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <div class="light_temple vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  預設祈福者_按鈕_新增廟宇 -->
                                    <div class="button_add_set d-flex juscsb  marginauto paddingbottom40 col-8">
                                        <div class="button_add ">
                                            <div class="btnss graycolor butomcolor light_add">
                                                <p>+ 新增燈種與廟宇</p>
                                            </div>
                                        </div>
                                        <!-- <div class="button_add vishidden ">
                                        <button class="graycolor">
                                            <p>+ 新增燈種與廟宇</p>
                                        </button>
                                    </div> -->
                                    </div>
                                </div>

                            </div>`



        // 桌機 燈種增加 新增Buttom on版本
        // let addLight = document.querySelector(".lightadd_this").innerHTML;
        // $(document).on('click', '.light_add', function () {
        // console.log('click', addLight_new)
        // $(this).parentsUntil(".lightadd_this").append(addLight);
        // $('.lightadd_this').append(addLight_new);
        // })

        // 宣告nowItem為
        let nowItem = 1;

        // 構想 外加id自動增幅
        // $('.light_add').click(function () {
        // let newLi = 'light_add_' + nowItem;
        // nowItem = nowItem + 1;
        // console.log(newLi);
        // })

        $(document).on('click', '.light_add', function() {
            // let newLi = '<div id="newlighcard_' + nowItem + '">' + addLight_new + '</div>';

            // nowItem = nowItem + 1;
            // console.log(newLi);

            $(this).parents('.button_add_set').prevAll('.lightadd_this').append(addLight_new);

            // 彈跳視窗 新增用
            $(this).parents('.light_Fill_in_theinformation_set').find('.addjumpLight_new').append(addjumpLight_new);
            bindMySelector(options);
        })

        let addLight_new = `<div class="paddingbottom40 myselector_group">
                                <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects" data-selector="myselector">
                                    <!--  input_1_選擇燈種 -->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                        <!-- *燈種 -->
                                        <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇燈種</p>
                                        </div>
                                        <!-- boostarp 下拉選單 -->
                                        <div class="col-4 d-flex aic p-0">
                                            <div class="col p-0">
                                                <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                    <option selected value="">選擇燈種</option>
                                                    <option>光明燈</option>
                                                    <option>文昌燈</option>
                                                    <option>安太歲</option>
                                                    <option>藥師燈</option>
                                                    <option>發財燈</option>
                                                    <option>姻緣燈</option>
                                                </select>

                                                <!-- <small class="form-text error"></small> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 預設祈福者input_1_ 選擇廟宇-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                        <!-- 預設祈福者 *廟宇 -->
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇廟宇</p>
                                        </div>
                                        <!--預設祈福者 boostarp 下拉選單 -->
                                        <div class="col-3 d-flex aic p-0">
                                            <div class="col p-0">
                                                <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                    <option selected value="">選擇地區</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex aic p-0">
                                            <div class="col p-0">
                                                <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                    <option selected value="">選擇廟宇</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    

                                </div>
                                <!-- 空值警告用  -->
                                <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects">
                                    <!-- 空值警告用  選燈種-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                        <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                        </div>
                                        <div class="col-4 d-flex aic p-0">
                                            <div class="col p-0">
                                                <div class="light_type vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 空值警告用  選地區 廟宇-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                        </div>
                                        <div class="col-3 d-flex aic p-0">
                                            <div class="col p-0">
                                                <div class="light_area vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex aic p-0">
                                            <div class="col p-0">
                                                <div class="light_temple vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;


        // 想提問QQ  這邊是與上面一起聯動 新增燈種Btn按下去的時候   在彈跳視窗當中 欄位也會一起新增燈種  這邊的class 我都是一樣的 好像會造成 選好的選項都會一樣的值? 

        let addjumpLight_new = `<div class="">
                                    

                                    <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                        <div class=" col d-flex">
                                            <p class="redcolorh5"></p>
                                            <p class=""></p>
                                        </div>
                                        <!-- val值 -->
                                        <div class=" col-8 padlock d-flex">
                                            <p class="light_type_2"></p>
                                            <p class="pad00010 light_area_2"></p>
                                            <p class="pad00010 light_temple_2"></p>
                                        </div>

                                    </div>

                                </div>`;











        // 三層篩選 救救我QQ 維修中~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        var options = generateOptions();

        function bindMySelector(options) {
            $("[data-selector=myselector] [name=light_type]:not([data-myselector='1'])").attr("data-myselector", "1").change(function() {
                console.log("aaa");
                var light_type = $(this).find("option:selected").text();
                // 重新this第一選項時 找到第二選項 找到之前option值 並移除
                $(this).parents('[data-selector=myselector]').find('[name=light_area] option+').remove();

                // 重新this第一選項時 找到第三選項 找到之前option值 並移除
                $(this).parents('[data-selector=myselector]').find('[name=light_temple] option+').remove();

                // 重新this第一選項時 殘廢 第三選項
                $(this).parents('[data-selector=myselector]').find('[name=light_temple]').attr("disabled", true);

                // Object.keys(撈取options陣列當中的[選取值])
                var areas = Object.keys(options[light_type]);

                // areas的陣列數長度.length    for 運作+1 ~~至 該陣列長度
                for (var i = 0; i < areas.length; i++) {
                    // 該this 透過.removeAttr移除該屬性("disabled")殘障  加入 字串 與for出來的 areas[i]陣列值
                    $(this).parents('[data-selector=myselector]').find('[name=light_area]').removeAttr("disabled").append("<option>" + areas[i] + "</option>");
                }
            });

            $("[data-selector=myselector] [name=light_area]:not([data-myselector=1])").attr("data-myselector", "1").change(function() {
                // 宣告 this 找到name當中的'option:eslected'
                var light_type = $(this).parents('[data-selector=myselector]').find('[name=light_type] option:selected').text();

                // 宣告this 找到 並改寫內文
                var light_area = $(this).find("option:selected").text();

                $(this).parents('[data-selector=myselector]').find('[name=light_temple] option+').remove();

                var temples = Object.keys(options[light_type][light_area]);

                for (var i = 0; i < temples.length; i++) {
                    $(this).parents('[data-selector=myselector]').find('[name=light_temple]').removeAttr("disabled").append("<option>" + temples[i] + "</option>");
                }
            });
        }
        bindMySelector(options);


























        function generateOptions() {
            return {
                '光明燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '大龍峒保安宮': null,
                    },
                    '中部': {
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '豐原慈濟宮': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                    },
                    '東部': {
                        '花蓮聖地慈惠堂': null,
                        '鎮東宮媽祖廟': null,
                    },
                    '離島': {
                        '媽祖天后宮': null,
                        '澎湖天后宮': null,
                    },

                },

                '文昌燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '台北市景福宮': null,
                    },
                    '中部': {
                        '大甲鎮瀾宮': null,
                        '苗栗頭份義民廟': null,
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '豐原慈濟宮': null,
                        '台中市文昌公廟': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                        '南鯤鯓代天府': null,
                        '鹿耳門天后宮': null,
                        '開臺天后宮': null,
                        '崁頭山孚佑宮': null,
                    },
                    '東部': {
                        '花蓮勝安宮': null,

                    },
                    '離島': {
                        '澎湖天后宮': null,
                    },
                },

                '安太歲': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '大龍峒保安宮': null,
                        '台北市景福宮': null,
                        '臺灣省城隍廟': null,
                        '竹林山觀音寺': null,
                        '大龍峒保安宮': null,
                        '板橋慈惠宮': null,
                        '五股北極殿': null,

                    },
                    '中部': {
                        '大甲鎮瀾宮': null,
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '台中市文昌公廟': null,
                        '清水紫雲巖': null,
                        '鹿港龍山寺': null,
                        '八卦山大佛寺': null,
                        '鹿港天后宮': null,
                        '崙尾福崙宮': null,
                        '日月潭文武廟': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                        '南鯤鯓代天府': null,
                        '麻豆代天府': null,
                        '開臺天后宮': null,
                    },
                    '東部': {
                        '花蓮聖地慈惠堂': null,
                        '鎮東宮媽祖廟': null,
                    },
                    '離島': {
                        '媽祖天后宮': null,
                        '澎湖天后宮': null,
                    },
                },

                '藥師燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '台北市關渡宮': null,
                        '大龍峒保安宮': null,
                        '台北市景福宮': null,
                        '臺灣省城隍廟': null,
                    },
                    '中部': {
                        '日月潭文武廟': null,

                    },
                    '南部': {
                        '九華山地藏庵': null,
                        '五甲協善心德堂': null,

                    },
                    '東部': {
                        '花蓮勝安宮': null,

                    },

                },

                '發財燈': {
                    '北部': {
                        '台北霞海城隍廟': null,
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '草嶺慶雲宮': null,
                        '九龍山白鵝湖玉清宮': null,
                        '九龍山白鵝湖玉清宮': null,
                    },
                    '中部': {
                        '苗栗頭份義民廟': null,
                        '慈德慈惠堂': null,
                        '台中市水安宮': null,
                        '斗六南聖宮': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '南鯤鯓代天府': null,
                        '鹿耳門天后宮': null,
                        '高雄市文武聖殿': null,
                        '高雄港口慈濟宮': null,

                    },

                },

                '姻緣燈': {
                    '北部': {
                        '台北霞海城隍廟': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '板橋慈惠宮': null,
                        '中壢仁海宮': null,
                        '烘爐地南山福德宮': null,
                        '鹿港天后宮': null,
                    },
                    '中部': {
                        '慈德慈惠堂': null,
                        '日月潭文武廟': null,

                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '九華山地藏庵': null,
                        '鹿耳門天后宮': null,
                    },

                },
            };
        }
    </script>























</body>

</html>