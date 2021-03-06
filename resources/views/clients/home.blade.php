@extends('layouts.client')

@section('title', $pageTitle)

@section('content')

<section id="slide" class="">
    <div class="container-fluid">
        <div class="row">
            <div class="slide owl-carousel" data-slider-id="1">
                <div class="item">
                    <a href="">
                        <img src="{{asset('clients')}}/image/8.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="{{asset('clients')}}/image/8.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="{{asset('clients')}}/image/8.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section top_products">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box_item">
                    <div class="img">
                        <a href="">
                            <img src="{{asset('clients')}}/image/11.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_item">
                    <div class="img">
                        <a href="">
                            <img src="{{asset('clients')}}/image/34.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_item">
                    <div class="img">
                        <a href="">
                            <img src="{{asset('clients')}}/image/35.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section quality">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box_item" style="padding-top: 13px;">
                    <div class="img">
                        <img src="{{asset('clients')}}/image/21.png" alt="">
                    </div>
                    <div class="info">
                        <h3 class="title">H??? tr??? 24/7</h3>
                        <p class="desc">
                            Ch??ng t??i lu??n mu???n mang ?????n cho qu?? kh??ch nh???ng tr???i nghi???m t???t nh???t khi ?????n v???i ch??ng t??i v???i Hotline : 01234568688 ??? 0911929929
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_item" style="padding-top: 13px;">
                    <div class="img">
                        <img src="{{asset('clients')}}/image/22.png" alt="">
                    </div>
                    <div class="info">
                        <h3 class="title">GIAO H??NG MI???N PH??</h3>
                        <p class="desc">
                            V???i h??a ????n tr??n 10.000.000??. Ch???c ch???n b???n s??? r???t vui khi nh???n ???????c h??ng m?? kh??ng m???t th??m ph?? v???n chuy???n n??o ( trong n???i th??nh H?? N???i )
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_item">
                    <div class="img">
                        <img src="{{asset('clients')}}/image/23.png" alt="">
                    </div>
                    <div class="info">
                        <h3 class="title">GI?? R??? CH???T L?????NG CAO</h3>
                        <p class="desc">
                            ?????n v???i D???ng C??? Nh?? B???p Ph????ng Loan, ch??ng t??i lu??n mu???n mang ?????n cho qu?? kh??ch d???ch v??? t???t v?? gi?? th??nh r??? nh???t.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section about">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left">
                    <div class="item item_high">
                        <div class="img">
                            <img src="{{asset('clients')}}/image/12.png" alt="">
                        </div>
                        <div class="info">
                            <p class="small_image">
                                <img src="{{asset('clients')}}/image/36.png" alt="">
                            </p>
                            <p class="title">D???ng c??? nh?? b???p</p>
                            <h3 class="name">Ph????ng Loan</h3>
                            <p class="desc">
                                D???ng c??? nh?? b???p Ph????ng Loan chuy??n cung c???p ????? d??ng nh?? h??ng kh??ch s???n, b??n bu??n b??n l??? t???t c??? c??c lo???i ????? gia d???ng, d???ng c??? nh?? b???p, d???ng c??? buffet, d???ng c??? pha ch???, d???ng c??? qu???y bar, ????? d??ng nh?? h??ng v?? qu??n ??n kh???p c??? n?????c v???i m???c gi?? r??? nh???t. V???i
                                ?????i ng?? nh??n vi??n tr??? trung, chuy??n nghi???p, nhi???t t??nh v?? nhi???u kinh nghi???m trong l??nh v???c ????? d??ng nh?? h??ng kh??ch s???n b???n s??? ???????c ph???c v??? m???t c??ch chu ????o v?? h??i l??ng nh???t.
                            </p>
                            <a href="" class="read_more">
                                Xem th??m
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="right_list_img">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box_img">
                                <div class="img">
                                    <img src="{{asset('clients')}}/image/13.png" alt="">
                                </div>
                                <div class="title">
                                    <p>????? d??ng nh?? h??ng kh??ch s???n</p>
                                </div>
                                <a href="" class="read_more">
                                    Chi ti???t
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_img">
                                <div class="img">
                                    <img src="{{asset('clients')}}/image/14.png" alt="">
                                </div>
                                <div class="title">
                                    <p>????? d??ng Melamine</p>
                                </div>
                                <a href="" class="read_more">
                                    Chi ti???t
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_img">
                                <div class="img">
                                    <img src="{{asset('clients')}}/image/15.png" alt="">
                                </div>
                                <div class="title">
                                    <p>????? d??ng Melamine</p>
                                </div>
                                <a href="" class="read_more">
                                    Chi ti???t
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_img">
                                <div class="img">
                                    <img src="{{asset('clients')}}/image/16.png" alt="">
                                </div>
                                <div class="title">
                                    <p>????? d??ng Melamine</p>
                                </div>
                                <a href="" class="read_more">
                                    Chi ti???t
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_img">
                                <div class="img">
                                    <img src="{{asset('clients')}}/image/17.png" alt="">
                                </div>
                                <div class="title">
                                    <p>????? d??ng Melamine</p>
                                </div>
                                <a href="" class="read_more">
                                    Chi ti???t
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_img">
                                <div class="img">
                                    <img src="{{asset('clients')}}/image/18.png" alt="">
                                </div>
                                <div class="title">
                                    <p>????? d??ng Melamine</p>
                                </div>
                                <a href="" class="read_more">
                                    Chi ti???t
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section qc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="img">
                    <a href="">
                        <img src="{{asset('clients')}}/image/9.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section list_sale">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row left">
                    <div class="col-md-4">
                        <div class="box_sale_product">
                            <div class="image">
                                <a href="">
                                    <img src="{{asset('clients')}}/image/37.png" alt="">
                                </a>
                            </div>
                            <div class="tag_sale">Sale</div>
                            <div class="like">
                                <a href="">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <a href="">Bo dao nhat</a>
                                </div>
                                <div class="price">
                                    <span class="price_1">325.000</span> vn??
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_sale_product">
                            <div class="image">
                                <a href="">
                                    <img src="{{asset('clients')}}/image/37.png" alt="">
                                </a>
                            </div>
                            <div class="tag_sale">Sale</div>
                            <div class="like">
                                <a href="">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <a href="">Bo dao nhat</a>
                                </div>
                                <div class="price">
                                    <span class="price_1">325.000</span> vn??
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_sale_product">
                            <div class="image">
                                <a href="">
                                    <img src="{{asset('clients')}}/image/37.png" alt="">
                                </a>
                            </div>
                            <div class="tag_sale">Sale</div>
                            <div class="like">
                                <a href="">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <a href="">Bo dao nhat</a>
                                </div>
                                <div class="price">
                                    <span class="price_1">325.000</span> vn??
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_sale_product">
                            <div class="image">
                                <a href="">
                                    <img src="{{asset('clients')}}/image/37.png" alt="">
                                </a>
                            </div>
                            <div class="tag_sale">Sale</div>
                            <div class="like">
                                <a href="">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <a href="">Bo dao nhat</a>
                                </div>
                                <div class="price">
                                    <span class="price_1">325.000</span> vn??
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_sale_product">
                            <div class="image">
                                <a href="">
                                    <img src="{{asset('clients')}}/image/37.png" alt="">
                                </a>
                            </div>
                            <div class="tag_sale">Sale</div>
                            <div class="like">
                                <a href="">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <a href="">Bo dao nhat</a>
                                </div>
                                <div class="price">
                                    <span class="price_1">325.000</span> vn??
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_sale_product">
                            <div class="image">
                                <a href="">
                                    <img src="{{asset('clients')}}/image/37.png" alt="">
                                </a>
                            </div>
                            <div class="tag_sale">Sale</div>
                            <div class="like">
                                <a href="">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="info">
                                <div class="name">
                                    <a href="">Bo dao nhat</a>
                                </div>
                                <div class="price">
                                    <span class="price_1">325.000</span> vn??
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product_hight">
                    <div class="title">
                        <p class="top">S???n ph???m</p>
                        <p class="bot">N???i b???t</p>
                    </div>
                    <div class="img">
                        <a href="">
                            <img src="{{asset('clients')}}/image/7.png" alt="">
                        </a>
                        <a href="" class="read_more">
                            Xem th??m
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section qc">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="img">
                    <a href="">
                        <img src="{{asset('clients')}}/image/38.png" alt="">
                    </a>
                    <a href="" class="buy_now">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section list_sale">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_hight_left">
                    <div class="title">
                        <p class="top">S???n ph???m</p>
                        <p class="bot">B??n ch???y</p>
                    </div>
                    <div class="img">
                        <a href="">
                            <img src="{{asset('clients')}}/image/39.png" alt="">
                        </a>
                        <a href="" class="read_more">
                            Xem th??m
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row right">
                    <ul class="nav nav-tabs">
                        <li class="active home"><a class="" data-toggle="tab" href="#home">????? d??ng kh??ch s???n</a></li>
                        <li><a data-toggle="tab" href="#menu1">????? d??ng gia ????nh</a></li>
                        <li><a data-toggle="tab" href="#menu2">????? d??ng nh?? h??ng</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="col-md-4">
                                <div class="box_sale_product">
                                    <div class="image">
                                        <a href="">
                                            <img src="{{asset('clients')}}/image/37.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tag_sale">Sale</div>
                                    <div class="like">
                                        <a href="">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name">
                                            <a href="">Bo dao nhat</a>
                                        </div>
                                        <div class="price">
                                            <span class="price_1">325.000</span> vn??
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="section list_sale_image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 first_img col_img">
                <div class="img">
                    <a href="">
                        <img src="{{asset('clients')}}/image/40.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8 image_2nd col_img">
                        <div class="img">
                            <a href="">
                                <img src="{{asset('clients')}}/image/41.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 image_3nd col_img">
                        <div class="img">
                            <a href="">
                                <img src="{{asset('clients')}}/image/42.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col_img image_4nd">
                        <div class="img">
                            <a href="">
                                <img src="{{asset('clients')}}/image/43.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col_img image_5nd">
                        <div class="img">
                            <a href="">
                                <img src="{{asset('clients')}}/image/44.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section feed_back">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <p class="top">Kh??ch h??ng</p>
                    <p class="bot">N??i v??? ch??ng t??i</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="feed_back_slide owl-carousel" data-slider-id="1">
                    <div class="item">
                        <div class="img">
                            <img src="{{asset('clients')}}/image/29.png" alt="">
                        </div>
                        <div class="rate">
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        </div>
                        <div class="name">
                            <span class="first_name">Ch???</span>
                            <span class="last_name">Loan</span>
                        </div>
                        <div class="desc">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{asset('clients')}}/image/30.png" alt="">
                        </div>
                        <div class="rate">
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        </div>
                        <div class="name">
                            <span class="first_name">Ch???</span>
                            <span class="last_name">Loan</span>
                        </div>
                        <div class="desc">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{asset('clients')}}/image/30.png" alt="">
                        </div>
                        <div class="rate">
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        </div>
                        <div class="name">
                            <span class="first_name">Ch???</span>
                            <span class="last_name">Loan</span>
                        </div>
                        <div class="desc">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{asset('clients')}}/image/30.png" alt="">
                        </div>
                        <div class="rate">
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        </div>
                        <div class="name">
                            <span class="first_name">Ch???</span>
                            <span class="last_name">Loan</span>
                        </div>
                        <div class="desc">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{asset('clients')}}/image/30.png" alt="">
                        </div>
                        <div class="rate">
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        </div>
                        <div class="name">
                            <span class="first_name">Ch???</span>
                            <span class="last_name">Loan</span>
                        </div>
                        <div class="desc">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{asset('clients')}}/image/31.png" alt="">
                        </div>
                        <div class="rate">
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        </div>
                        <div class="name">
                            <span class="first_name">Ch???</span>
                            <span class="last_name">Loan</span>
                        </div>
                        <div class="desc">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{asset('clients')}}/image/31.png" alt="">
                        </div>
                        <div class="rate">
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        </div>
                        <div class="name">
                            <span class="first_name">Ch???</span>
                            <span class="last_name">Loan</span>
                        </div>
                        <div class="desc">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="home_list_news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h3>Tin t???c</h3>
                    <p class="desc">v??? d???ng c??? nh?? b???p Ph????ng Loan</p>
                </div>
            </div>
        </div>
        <div class="row list_news">
            <div class="col-md-6">
                <div class="first_news">
                    <div class="img">
                        <a href="">
                            <img src="{{asset('clients')}}/image/news1.png" alt="">
                        </a>
                    </div>
                    <div class="info">
                        <h3 class="name">
                            <a href="">B??? s??u t???p ph??? ki???n ?????c ????o d??nh cho nh???ng ng?????i kh??ng th??? r???i tay kh???i ??i???n tho???i</a>
                        </h3>
                        <p class="time">
                            (Th??? 4, ng??y 23/3/2011 16:30 PM)
                        </p>
                        <p class="desc">
                            Heather v?? Myles l?? hai nh?? s??ng t???o ra b??? s??u t???p ph??? ki???n trang tr?? b???ng g???m s??? ??a n??ng d??nh cho ch???c n??ng ch??nh l?? ?????t c??c s???n ph???m c??ng ngh??? nh?? ??i???n tho???i th??ng minh hay m??y t??nh b???ng. B???n ho??n to??n c?? th??? s??? d???ng ch??ng nh?? m???t c??ch ????? ????? g???n g??ng ...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right_news">
                    <div class="news_item">
                        <div class="img">
                            <a href="">
                                <img src="{{asset('clients')}}/image/news2.png" alt="">
                            </a>
                        </div>
                        <div class="info">
                            <h4 class="name">
                                <a href="">Gi??p kh??ng gian ?????p v?? g???n h??n </a>
                            </h4>
                            <p class="time">
                                (Th??? 4, ng??y 23/3/2011 16:30 PM)
                            </p>
                            <p class="desc">
                                M??y t??nh b???ng c??ng ???????c ?????t g???n tr??n ph???n k??? k??m theo ph??a sau l?? n??i ?????ng d???ng c??? n???u n?????ng, ??n u???ng ti???n l???i. C?? nhi???u m??u, nhi???u ki???u d??ng ????? b???n l???a ch???n ph?? h???p ...
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="news_item">
                        <div class="img">
                            <a href="">
                                <img src="{{asset('clients')}}/image/news2.png" alt="">
                            </a>
                        </div>
                        <div class="info">
                            <h4 class="name">
                                <a href="">Gi??p kh??ng gian ?????p v?? g???n h??n </a>
                            </h4>
                            <p class="time">
                                (Th??? 4, ng??y 23/3/2011 16:30 PM)
                            </p>
                            <p class="desc">
                                M??y t??nh b???ng c??ng ???????c ?????t g???n tr??n ph???n k??? k??m theo ph??a sau l?? n??i ?????ng d???ng c??? n???u n?????ng, ??n u???ng ti???n l???i. C?? nhi???u m??u, nhi???u ki???u d??ng ????? b???n l???a ch???n ph?? h???p ...
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="news_item">
                        <div class="img">
                            <a href="">
                                <img src="{{asset('clients')}}/image/news2.png" alt="">
                            </a>
                        </div>
                        <div class="info">
                            <h4 class="name">
                                <a href="">Gi??p kh??ng gian ?????p v?? g???n h??n </a>
                            </h4>
                            <p class="time">
                                (Th??? 4, ng??y 23/3/2011 16:30 PM)
                            </p>
                            <p class="desc">
                                M??y t??nh b???ng c??ng ???????c ?????t g???n tr??n ph???n k??? k??m theo ph??a sau l?? n??i ?????ng d???ng c??? n???u n?????ng, ??n u???ng ti???n l???i. C?? nhi???u m??u, nhi???u ki???u d??ng ????? b???n l???a ch???n ph?? h???p ...
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="news_item">
                        <div class="img">
                            <a href="">
                                <img src="{{asset('clients')}}/image/news2.png" alt="">
                            </a>
                        </div>
                        <div class="info">
                            <h4 class="name">
                                <a href="">Gi??p kh??ng gian ?????p v?? g???n h??n </a>
                            </h4>
                            <p class="time">
                                (Th??? 4, ng??y 23/3/2011 16:30 PM)
                            </p>
                            <p class="desc">
                                M??y t??nh b???ng c??ng ???????c ?????t g???n tr??n ph???n k??? k??m theo ph??a sau l?? n??i ?????ng d???ng c??? n???u n?????ng, ??n u???ng ti???n l???i. C?? nhi???u m??u, nhi???u ki???u d??ng ????? b???n l???a ch???n ph?? h???p ...
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 read_more">
                <a href="" class="">Xem th??m</a>
            </div>
        </div>
    </div>
</section>
<section class="partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">
                    <span class="left">Li??n k???t</span>
                    <span class="right">v???i ch??ng t??i</span>
                </h2>
            </div>
        </div>
        <div class="row list_partner">
            <div class="col-md-12">
                <div class="slide_partner owl-carousel" data-slider-id="1">
                    <div class="item">
                        <a href="">
                            <img src="{{asset('clients')}}/image/partner1.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="{{asset('clients')}}/image/partner2.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="{{asset('clients')}}/image/partner3.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="{{asset('clients')}}/image/partner4.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="{{asset('clients')}}/image/partner5.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection