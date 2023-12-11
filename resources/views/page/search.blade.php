@extends('master')
@section('content')


<div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Tìm kiếm</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">tìm thấy {{count($prd)}}</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($prd as $p)

                                  <div class="col-sm-3">
                                    <div class="single-item">
                                        @if($p->promotion_price!=0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif

                                        <div class="single-item-header">
                                            <a href="product.html"><img src="source/image/product/{{$p->image}}" alt="" height="250px"></a>
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
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                        </div> <!-- .beta-products-list -->
                        {{-- sách khuyến mãi --}}
                      
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->   
@endsection