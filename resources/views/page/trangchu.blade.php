@extends('master')
@section('content')

<div class="rev-slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer">
                <div class="banner">
                    <ul>
                        @foreach ($slide as $sl)

                        <!-- THE FIRST SLIDE -->
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>

                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Mô Hình Mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">tìm thấy {{count($newpd)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($newpd as $p)

                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if($p->promotion_price!=0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif

                                    <div class="single-item-header">
                                        <a href=""><img src="source/image/product/{{$p->image}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$p->name}}</p>
                                        <p class="single-item-price">
                                            @if($p->promotion_price==0)
                                            <span class="flash-sale">{{number_format($p->unit_price)}}đ</span>
                                            @else
                                            <span class="flash-del">{{number_format($p->unit_price)}}đ</span>
                                            <span class="flash-sale">{{number_format($p->promotion_price)}}đ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('giohang',$p->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$newpd->links("pagination::bootstrap-4")}}</div>
                    </div> <!-- .beta-products-list -->
                    {{-- Mô hình đang khuyến mãi --}}
                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Mô Hình đang Sale</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">tìm thấy {{count($khuyenmai)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($khuyenmai as $km)


                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    <div class="single-item-header">
                                        <a href=""><img src="source/image/product/{{$km->image}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$km->name}}</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">{{number_format($km->unit_price)}}đ</span>
                                            <span class="flash-sale">{{number_format($km->promotion_price)}}đ</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('giohang',$p->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$khuyenmai->links("pagination::bootstrap-4")}}</div>
                    </div>
                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Mô Hình Phổ Biến</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">tìm thấy {{count($toppd)}} sản Phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($toppd as $t)


                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if($p->promotion_price!=0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="source/image/product/{{$t->image}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$t->name}}</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">{{number_format($t->unit_price)}}đ</span>

                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('giohang',$p->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$toppd->links("pagination::bootstrap-4")}}</div>
                    </div>
                    <div class="space40">&nbsp;</div>
                    <h4>Góc Mô Hình</h4>
                    <div class="beta-products-details">
                        <p class="pull-left">tìm thấy {{count($gocpd)}} Sản Phẩm</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        @foreach ($gocpd as $g)
                        {{-- expr --}}

                        <div class="col-sm-3">
                            <div class="single-item">
                                @if($p->promotion_price!=0)
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                @endif
                                <div class="single-item-header">
                                    <a href="product.html"><img src="source/image/product/{{$g->image}}" alt="" height="250px"></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$g->name}}</p>
                                    <p class="single-item-price">
                                        <span class="flash-del">{{number_format($g->unit_price)}}đ</span>

                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="{{ route('giohang',$p->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="row">{{$gocpd->links("pagination::bootstrap-4")}}</div>
                </div> <!-- .beta-products-list -->
            </div>
        </div> <!-- end section with sidebar and main content -->


    </div> <!-- .main-content -->
</div> <!-- #content -->


@endsection