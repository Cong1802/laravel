@extends("layout")
@section('content')
    <!--menu-->
    <div class="containerx">
        <div class="menu d-flex justify-content-between align-items-center">
            <div class="category d-none d-xl-block ">
                <button type="button" class="btn-category">
                    <ion-icon name="list"></ion-icon>&nbsp;&nbsp;Danh mục sản phẩm
                </button>
                <div class="list-category">
                    <ul>
                        <li><a href="http://"><ion-icon name="phone-portrait"></ion-icon> Điện Thoại</a></li>
                        <li><a href="http://"><ion-icon name="logo-apple"></ion-icon> Apple iPhone</a></li>
                        <li><a href="http://"><ion-icon name="laptop"></ion-icon> Macbook</a></li>
                        <li><a href="http://"><ion-icon name="tablet-portrait"></ion-icon> Tablet</a></li>
                        <li><a href="http://"><ion-icon name="watch"></ion-icon> Đồng Hồ</a></li>
                        <li><a href="http://"><ion-icon name="headset"></ion-icon> Phụ Kiện</a></li>
                        <li><a href="http://"><ion-icon name="bookmarks"></ion-icon> Tin Công Nghệ</a></li>
                        <li><a href="http://"><ion-icon name="appstore"></ion-icon> Mua hàng trả góp</a></li>
                        <li><a href="http://"><ion-icon name="sync"></ion-icon> Thu cũ đổi mới</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-home px-lg-2 px-0">
                <div class="logo-mobile d-block d-lg-none p-3 d-flex justify-content-between align-items-center">
                    <a href="http://">
                        <img src="https://www.xtmobile.vn/vnt_upload/weblink/logoxt-01-01_1.png" width="163px">
                    </a>
                    <div>
                        <button class="btn btn-close-sidebar" type="button"><ion-icon name="share-alt"></ion-icon></button>
                    </div>
                </div>
                <div class="form-search d-block d-lg-none m-3" style="border: 1px solid #ff0100;border-radius: 5px;">
                    <input type="text" class=" w-100" placeholder="Bạn muốn tìm gì?">
                    <button class="btn-search" type="button"><i class="fal fa-search"></i></button>
                </div>
                <ul class="d-flex justify-content-between ">
                    <li><a href="http://"><b>SẢN PHẨM HOT</b></a></li>
                    <li><a href="http://">Smartphone Gaming</a></li>
                    <li><a href="http://">iPhone 11</a></li>
                    <li><a href="http://">Phone 12 Pro Max</a></li>
                    <li><a href="http://">iPhone Xs Max</a></li>
                    <li><a href="http://">Galaxy S21 Ultra</a></li>
                    <li><a href="http://">Galaxy S10</a></li>
                    <li><a href="http://">Galaxy A</a></li>
                    <li><a href="http://">LG V50</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!--menu-->

    <!--slide-->
    <div class="containerx slide d-flex my-3">
        <div >
            <div  id="carouselExampleIndicators" class="carousel slide bg-white" data-ride="carousel">
                <ol class="carousel-indicators slide_mini d-flex justify-content-between m-0">
                    <div data-target="#carouselExampleIndicators" class=" px-2" data-slide-to="0" class="active   ">Đặt trước Reno6 | Reno6</div>
                    <div data-target="#carouselExampleIndicators" class="" data-slide-to="1">Appe watch SE - giảm sốc</div>
                    <div data-target="#carouselExampleIndicators"class="" data-slide-to="2">S21 Series</div>
                    <div data-target="#carouselExampleIndicators" class="" data-slide-to="3">IPhone XR - giảm sốc</div>
                    <div data-target="#carouselExampleIndicators" class="" data-slide-to="4">NOkia-x10-0</div>
                    <div data-target="#carouselExampleIndicators"class="" data-slide-to="4">Sale đồ gia dụng</div>
                </ol>
                <style>
                    .slide_mini .acvice
                    {
                        border-bottom: 2px solid #ff0100;
                    }
                    </style>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.xtmobile.vn/vnt_upload/weblink/uudai-29-10.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.xtmobile.vn/vnt_upload/weblink/19zfold3-11-10.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.xtmobile.vn/vnt_upload/weblink/macbook-pro-2021-min.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.xtmobile.vn/vnt_upload/weblink/airpod_3.png" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.xtmobile.vn/vnt_upload/weblink/s10p-min.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <Div class="col-3 ps-3 slide-right d-none d-xl-block ">
            <div class="ps-1">
                <img src="https://www.xtmobile.vn/vnt_upload/weblink/b12-10-combo-ip13-bnright.png" width="100%">
            </div>
            <div class="ps-1 py-1">
                <img src="https://www.xtmobile.vn/vnt_upload/weblink/cbn-right-tai-nghe-1810.png" width="100%">
            </div>
            <div class="ps-1 py-1 news">
                <ul class="p-2">
                    <li><a href="">Ưu đãi khách tỉnh - Sale cực đỉnh: Mua Galaxy Note 10 Plus 5G chỉ từ</a></li>
                    <li><a href="">Ưu đãi khách tỉnh - Sale cực đỉnh: Mua Galaxy Note 10 Plus 5G chỉ từ</a></li>
                </ul>
            </div>
        </Div>
    </div>
    <!--slide-->

    <!--banner-->
    <div class="containerx banner1">
        <img src="https://www.xtmobile.vn/vnt_upload/weblink/ip13-1.png" width="100%">
    </div>
    <!--banenr-->
    
    <!--hotdeal-->
    <div class="containerx my-3 deal p-3">
        <div class="title-hotdeal py-2">
            <h5>SĂN DEAL GIÁ HỜI - GIAO HÀNG TẬN NƠI</h5>
        </div>
        <div class="owl-carousel owl-theme">

            <div class="item">
                <div class="card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>

        </div>
    </div>
    <!--hotdeal-->

    <!--banner-->
    <div class="containerx">
        <img src="https://hoanghamobile.com/Uploads/2021/10/25/1200x200_637707766097306069.jpg" width="100%">
    </div>
    <!--banner-->

    <!--accessory-->
    <div class="containerx my-3 accessory p-3">
        <div class="title-hotdeal  py-2">
            <h5 class="text-white">DEAL HOT PHỤ KIỆN</h5>
        </div>
        <div class="owl-carousel owl-theme">

            <div class="item">
                <div class="card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>

        </div>
    </div>
    <!--accessory-->

    <!--trending-->
    <div class="containerx trending">
        <div class="header-trending p-3 d-md-flex d-block justify-content-between align-items-center">
            <div>
                <h5 class="m-0"><span>ĐIỆN THOẠI</span> NỔI BẬT</h5>
            </div>
            <div class="category-trending mt-3 mt-md-0">
                <ul class="d-flex justify-content-between">
                    <li class="p-0"><a href="http://">IPHONE 12 PRO | 12 PRO MAX</a></li>
                    <li><a href="http://">IPHONE 11 | 11 PRO | 11 PRO MAX</a></li>
                    <li><a href="http://">IPHONE XS | XS MAX MAX</a></li>
                    <li><a href="http://">GALAXY S21+ | S21 ULTRA</a></li>
                    <li><a href="http://">GALAXY S10 | S10+</a></li>
                </ul>
            </div>
        </div>
        <!--list-->
        <div class="list bg-white d-flex flex-wrap">

            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-list-product p-1">
                <div class="card bg-white item-card pt-4">
                    <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/08_2019/thumbs/(600x600)_crop_iphone-12-pro-max-256gb-cu.jpg" width="100%" alt="Card image cap"></a>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                    <div class="discount m-2">
                        <span>-14%</span>
                    </div>
                    <Div class="installment m-2">
                        <Span>Trả góp 0%</Span>
                    </Div>
                </div>
            </div>
            <!--item-->


        </div>
        <!--list-->

    </div>
    <!--trending-->



    <!--accessory-->
    <div class="containerx my-3 trending">
        <div class="header-trending p-3 d-md-flex d-block justify-content-between align-items-center">
            <div>
                <h5 class="m-0">PHỤ KIỆN NỔI BẬT</h5>
            </div>
            <div class="category-trending mt-3 mt-md-0">
                <ul class="d-flex justify-content-between">
                    <li class="p-0"><a href="http://">Pin dự phòng</a></li>
                    <li><a href="http://">Tai nghe</a></li>
                    <li><a href="http://">Loa Bluetooth</a></li>
                    <li><a href="http://">Ốp lưng - Bao da</a></li>
                    <li><a href="http://">Dán cường lực</a></li>
                </ul>
            </div>
        </div>
        <!--list-->
        <div class="list bg-white d-flex flex-wrap">

            <!--item-->
            <div class="card-accessory p-1">
                <div class="bg-white item-card pt-4 d-flex">
                    <Div>
                        <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_tai_nghe_true_wireless_soundpeats_true_air_2_xtmobile_den-min.jpg" width="111px" alt="Card image cap"></a>
                    </Div>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-accessory p-1">
                <div class="bg-white item-card pt-4 d-flex">
                    <Div>
                        <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_tai_nghe_true_wireless_soundpeats_true_air_2_xtmobile_den-min.jpg" width="111px" alt="Card image cap"></a>
                    </Div>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-accessory p-1">
                <div class="bg-white item-card pt-4 d-flex">
                    <Div>
                        <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_tai_nghe_true_wireless_soundpeats_true_air_2_xtmobile_den-min.jpg" width="111px" alt="Card image cap"></a>
                    </Div>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-accessory p-1">
                <div class="bg-white item-card pt-4 d-flex">
                    <Div>
                        <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_tai_nghe_true_wireless_soundpeats_true_air_2_xtmobile_den-min.jpg" width="111px" alt="Card image cap"></a>
                    </Div>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-accessory p-1">
                <div class="bg-white item-card pt-4 d-flex">
                    <Div>
                        <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_tai_nghe_true_wireless_soundpeats_true_air_2_xtmobile_den-min.jpg" width="111px" alt="Card image cap"></a>
                    </Div>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-accessory p-1">
                <div class="bg-white item-card pt-4 d-flex">
                    <Div>
                        <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_tai_nghe_true_wireless_soundpeats_true_air_2_xtmobile_den-min.jpg" width="111px" alt="Card image cap"></a>
                    </Div>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-accessory p-1">
                <div class="bg-white item-card pt-4 d-flex">
                    <Div>
                        <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_tai_nghe_true_wireless_soundpeats_true_air_2_xtmobile_den-min.jpg" width="111px" alt="Card image cap"></a>
                    </Div>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                </div>
            </div>
            <!--item-->
            <!--item-->
            <div class="card-accessory p-1">
                <div class="bg-white item-card pt-4 d-flex">
                    <Div>
                        <a href=""><img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_tai_nghe_true_wireless_soundpeats_true_air_2_xtmobile_den-min.jpg" width="111px" alt="Card image cap"></a>
                    </Div>
                    <div class="card-body">
                      <a href="" class="card-title">iPhone 12 Pro 256GB Chính hãng (VN/A)</a>
                      <h6>26.490.000 đ</h6>
                      <strike>30.990.000 đ</strike>
                      <p>Trả trước: 7.990.000 đ</p>
                    </div>
                </div>
            </div>
            <!--item-->
        </div>
        <!--list-->
    </div>
    <!--accessory-->

    <!--banner-->
    <div class="containerx">
        <img src="https://hoanghamobile.com/Uploads/2021/10/13/thumuc-a52s.jpg" width="100%">
    </div>
    <!--banenr-->
    

    <!--news-->
    <div class="bg-white py-4 mt-3">
        <div class="news containerx d-md-flex bg-white d-block ">
            <Div class="d-flex col-md-7 col-12">
                <div>
                    <div class="card">
                        <div class="px-3">
                            <img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/news/10_2021/16/thumbs/(480x2)_crop_top-4-dien-thoai-iphone-the-he-cu-giam-gia-manh-xtmobile.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h6><a href="http://">Top 4 điện thoại iPhone thế hệ cũ giảm giá mạnh khi iPhone 13 2021 ra mắtTop 4 điện thoại iPhone thế hệ cũ giảm giá mạnh khi iPhone 13 2021 ra mắt</a></h6>
                          <p class="card-text">iPhone thế hệ cũ giảm giá mạnh kể từ khi iPhone 13 ra mắt. Đây là thời điểm ...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <div class="px-3">
                            <img class="card-img-top" src="https://www.xtmobile.vn/vnt_upload/news/10_2021/16/thumbs/(480x2)_crop_top-4-dien-thoai-iphone-the-he-cu-giam-gia-manh-xtmobile.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h6><a href="http://">Top 4 điện thoại iPhone thế hệ cũ giảm giá mạnh khi iPhone 13 2021 ra mắtTop 4 điện thoại iPhone thế hệ cũ giảm giá mạnh khi iPhone 13 2021 ra mắt</a></h6>
                          <p class="card-text">iPhone thế hệ cũ giảm giá mạnh kể từ khi iPhone 13 ra mắt. Đây là thời điểm ...</p>
                        </div>
                    </div>
                </div>
            </Div>
    
            <Div class="col-md-5 col-12  p-2 mt-3 mt-md-0">
                <div class="news p-3">
                    <h6>TIN TỨC</h6>
                    <ul>
                        <li>
                            <a href="http://"><h6>Ưu đãi khách tỉnh - Sale cực đỉnh: Mua Galaxy Note 10 Plus 5G chỉ từ 7,9 triệu</h6></a>
                            <p>Deal cực đỉnh dành cho quý khách hàng ở tỉnh (không thuộc TPHCM). Mua ...</p>
                        </li>
                        <li>
                            <a href="http://"><h6>Ưu đãi khách tỉnh - Sale cực đỉnh: Mua Galaxy Note 10 Plus 5G chỉ từ 7,9 triệu</h6></a>
                            <p>Deal cực đỉnh dành cho quý khách hàng ở tỉnh (không thuộc TPHCM). Mua ...</p>
                        </li>
                        <li>
                            <a href="http://"><h6>Ưu đãi khách tỉnh - Sale cực đỉnh: Mua Galaxy Note 10 Plus 5G chỉ từ 7,9 triệu</h6></a>
                            <p>Deal cực đỉnh dành cho quý khách hàng ở tỉnh (không thuộc TPHCM). Mua ...</p>
                        </li>
                        <li>
                            <a href="http://"><h6>Ưu đãi khách tỉnh - Sale cực đỉnh: Mua Galaxy Note 10 Plus 5G chỉ từ 7,9 triệu</h6></a>
                            <p>Deal cực đỉnh dành cho quý khách hàng ở tỉnh (không thuộc TPHCM). Mua ...</p>
                        </li>
                    </ul>
                </div>
            </Div>
        </div>
    </div>
    <!--news-->

    <!--banner-->
    <div class="bg-white py-3">
        <div class="containerx">
            <img src="https://www.xtmobile.vn/vnt_upload/weblink/299airpod2-chantrnag-min.jpg" width="100%">
        </div>
    </div>
    <!--banenr-->
@endsection