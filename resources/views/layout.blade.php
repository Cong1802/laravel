<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("public/frontend/owlcarousel/assets/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("public/frontend/owlcarousel/assets/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <header>
        <div class="containerx d-flex justify-content-between align-items-center py-3 px-2 px-md-0">
            <div class="d-flex justify-content-between align-items-center">
                <div class="sidebar col-4 d-block d-lg-none">
                    <button type="button" class="btn-sidebar"><ion-icon name="reorder"></ion-icon></button>
                </div>
                <div class="logo">
                    <a href="http://">
                        <img src="https://www.xtmobile.vn/vnt_upload/weblink/logoxt-01-01_1.png" width="163px">
                    </a>
                </div>
                <div class="hotline d-lg-flex justify-content-between align-items-center mx-3 d-none">
                    <Div>
                        <span><i class="fas fa-phone-alt"></i></span>
                    </Div>
                    <div>
                        <h6 class="m-0">1800.6229</h6>
                        <p class="m-0">T???ng ????i mi???n ph??</p>
                    </div>
                </div>
            </div>
            <div class="form-search col-lg-5 col-4 d-none d-sm-block">
                <input type="text" class=" w-100" placeholder="B???n mu???n t??m g???">
                <button class="btn-search" type="button"><i class="fal fa-search"></i></button>
            </div>
            <div class="d-flex align-items-center justify-content-between  ">
                <div class="address d-none d-md-inline mx-3">
                    <a href="" class="">
                        <p class="m-0">H??? th???ng</p>
                        <h6>06 c???a h??ng <i class="far fa-angle-down"></i></h6>
                    </a>
                </div>
                <div class="cart">
                    <a href="" class=""><ion-icon name="cart"></ion-icon><span class="d-md-inline d-none">Gi??? h??ng</span></a>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    
    <!--footer-->
    <footer class="bg-white">
        <div class="containerx d-flex justify-content-between flex-wrap p-3 p-sm-5">
            
            <div class="col-lg-2 box-footer col-12 col-sm-4 ">
                <h6>H??? TR??? KH??CH H??NG</h6>
                <Div>
                    <ul>
                        <li><a href="http://">Mua h??ng tr??? g??p</a></li>
                        <li><a href="http://">H?????ng d???n mua h??ng online</a></li>
                        <li><a href="http://">B???o h??nh m??? r???ng</a></li>
                        <li><a href="http://">Ch??nh s??ch b???o h??nh</a></li>
                        <li><a href="http://">Ch??nh s??ch ?????i tr???</a></li>
                    </ul>
                </Div>
            </div>
            <div class="col-lg-2  box-footer col-sm-6 mt-4 col-12 mt-sm-0">
                <h6>XTMOBILE</h6>
                <div>
                    <ul>
                        <li><a href="http://">V??? XTmobile</a></li>
                        <li><a href="http://">Tuy???n d???ng</a></li>
                        <li><a href="http://">Khuy???n m??i</a></li>
                        <li><a href="http://">Li??n h???</a></li>
                        <li><a href="http://">H???i ????p</a></li>
                        <li><a href="http://">Tra c???u b???o h??nh</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  box-footer col-12 mt-4 mt-lg-0 col-sm-4">
                <h6>T???NG ????I H??? TR???</h6>
                <Div>
                    <div>
                        v???n mua h??ng (mi???n ph??):
                        <h5 class="my-2 text-danger">1800.6229</h5>
                        (8h - 20h)
                    </div>
    
                    <Div class="my-3">
                        H??? tr??? k??? thu???t:
                        <h5 class="my-2 text-danger">1900.2043</h5>
                        (8h - 20h)
                    </Div>
    
                    <div>
                        Khi???u n???i - G??p ??:
                        <h5 class="my-2 text-danger">088.9999933</h5>
                        (8h - 20h)
                    </div>
                </Div>
                
            </div>
            <div class="col-lg-5 col-md-8 col-12 box-footer mt-4 mt-lg-0">
                <h6>H??? TH???NG SHOWROOM ??I???N THO???I DI ?????NG XTMOBILE</h6>
                <Div class="x">
                    <ul>
                        <li><a href="http://">396 Nguy???n Th??? Th???p, Ph?????ng T??n Quy, Qu???n 7, TP.HCM</a></li>
                        <li><a href="http://">50 Tr???n Quang Kh???i, Ph?????ng T??n ?????nh, Qu???n 1, TP.HCM </a></li>
                        <li><a href="http://">650 L?? H???ng Phong, Ph?????ng 10, Qu???n 10, TP.HCM </a></li>
                        <li><a href="http://">421 Ho??ng V??n Th???, Ph?????ng 2, Q.T??n B??nh, TP.HCM (n???m gi???a nh?? h??ng Adora v?? CGV Ho??ng V??n Th???)</a></li>
                        <li><a href="http://">43 L?? V??n Vi???t, Ph?????ng Hi???p Ph??, Qu???n 9, TP.HCM</a></li>
                        <li><a href="http://">437 Quang Trung, Ph?????ng 10, Q.G?? V???p, TP.HCM</a></li>
                    </ul>
                    <Div class="my-2">
                        <img src="https://www.xtmobile.vn/vnt_upload/File/Image/icon-thanhtoan-2020.jpg" width="100%">
                    </Div>
                </Div>
            </div>
        </div>
    </footer>
    <!--footer-->

    <div class="footer">
        <p class="m-0">XTmobile.vn - H??? th???ng c???a h??ng b??n l??? ??i???n tho???i, ph??? ki???n ch??nh h??ng. Cam k???t gi?? t???t v???i 7 c???a h??ng t???i Tp. H??? Ch?? Minh.</p>
    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset("public/frontend/owlcarousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("public/frontend/js/js.js") }}" type="text/javascript"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
</html>