@extends('UI.layout')
@section('content')
    <div class="header">
        <div class="header_slide">
            <div class="header_bottom_left">
                <div class="categories">
                    <h3>Danh mục</h3>

                    <ul>
                        <?php

                        $d = App\Danhmucs::select('ma_cdm','ten_dm','id')->get()->toArray();

                        ?>
                        @foreach($d as $item)
                            @if($item['ma_cdm']==0)
                                <li>
                                    <a>  {!! $item['ten_dm'] !!}</a>
                                    {{--<ul class="sub-menu" style="background-color: white">--}}
                                    {{--@foreach($d as $it)--}}
                                    {{--@if($it['ma_cdm']== $item['ma_cdm'])--}}
                                    {{--<li>--}}
                                    {{--<a href="{!! asset('listtingproduct?=') !!}{!! $it['ma_dm'] !!}">--}}
                                    {{--{!! $it['ten_dm'] !!}--}}
                                    {{--</a>--}}
                                    {{--</li>--}}
                                    {{--@endif--}}
                                    {{--@endforeach--}}
                                    {{--</ul>--}}
                                    <?php
                                    $dd = App\Http\Controllers\danhmucController::sub($d,$item['id']);
                                    echo $dd;

                                    ?>
                                </li>
                            @endif



                        @endforeach
                    </ul>




                </div>
            </div>
            <div class="header_bottom_right">
                <div class="slider">
                    <div id="slider">
                        <div id="mover">
                            <div id="slide-1" class="slide">
                                <div class="slider-img">
                                    <a href="preview.html"><img src="images/slide-1-image.png" alt="learn more" /></a>
                                </div>
                                <div class="slider-text">
                                    <h1>Clearance<br><span>SALE</span></h1>
                                    <h2>UPTo 20% OFF</h2>
                                    <div class="features_list">
                                        <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>
                                    </div>
                                    <a href="preview.html" class="button">Shop Now</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="slide">
                                <div class="slider-text">
                                    <h1>Clearance<br><span>SALE</span></h1>
                                    <h2>UPTo 40% OFF</h2>
                                    <div class="features_list">
                                        <h4>Get to Know More About Our Memorable Services</h4>
                                    </div>
                                    <a href="preview.html" class="button">Shop Now</a>
                                </div>
                                <div class="slider-img">
                                    <a href="preview.html"><img src="images/slide-3-image.jpg" alt="learn more" /></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="slide">
                                <div class="slider-img">
                                    <a href="preview.html"><img src="images/slide-2-image.jpg" alt="learn more" /></a>
                                </div>
                                <div class="slider-text">
                                    <h1>Clearance<br><span>SALE</span></h1>
                                    <h2>UPTo 10% OFF</h2>
                                    <div class="features_list">
                                        <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>
                                    </div>
                                    <a href="preview.html" class="button">Shop Now</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="content" ng-controller="DanhmucCtrl">

        <div class="content_top">
            <div class="heading">
                <h3  ng-repeat="d in datas"> <%d.ten_sp %></h3>
            </div>
            <div class="see">
                <p><a href="#">See all Products</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group" ng-init="getlistingproduct()" >
            <div class="grid_1_of_4 images_1_of_4" ng-repeat="d in datas">
                <a href="{!! asset('detailsanpham?=<%d.id%>') !!}" ><img src="{!! asset('public/uploads/<% d.hinh_anh %>') !!}" alt="" /></a>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees"><% d.don_gia %></span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="#">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>

@endsection()
<style>
    /*.sub-menu li {*/
    /*display: none;*/
    /*}*/
    .sub-menu {
        display: none;
        position: absolute;
    }
    #menu li:hover .sub-menu {
        background-color: white;
        display: block;
    }
</style>