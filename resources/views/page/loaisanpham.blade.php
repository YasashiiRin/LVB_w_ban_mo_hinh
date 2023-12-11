
@extends('master')
@section('content')
	<div class="inner-header" style="padding: 0px 0;">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">{{$loai_sp->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ route('trang-chu') }}">Home</a> / <span>Loại sản phẩm </span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($loai as $l)
							<li><a href="{{ route('loaisanpham',$l->id) }}">{{$l->name}}</a></li>
					        @endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản phẩm theo loại</h4>
							<div class="beta-products-details">
								<p class="pull-left">tim thấy {{count($sp_theoloai)}} </p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_theoloai as $spl)
								<div class="col-sm-4">
									<div class="single-item">
										@if($spl->promotion_price!=0)
                       <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                        @endif
										<div class="single-item-header">
											<a href="product.html"><img src="source/image/product/{{$spl->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spl->name}}</p>
											<p class="single-item-price">
										    @if($spl->promotion_price!=0)
                            <span class="flash-del">{{number_format($spl->unit_price)}}đ</span>
                            <span class="flash-sale">{{number_format($spl->promotion_price)}}đ</span>
                        @else
                            <span class="flash-del">{{number_format($spl->unit_price)}}đ</span>                                          
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
							<div class="row">{{$sp_theoloai->links("pagination::bootstrap-4")}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩn Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">tim thấy {{count($sp_khac)}} </p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_khac as $spk)
								<div class="col-sm-4">
									<div class="single-item">
										@if($spk->promotion_price!=0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
										<div class="single-item-header">
											<a href="product.html"><img src="source/image/product/{{$spk->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spk->name}}</p>
											<p class="single-item-price">
										    @if($spk->promotion_price!=0)
                                                  <span class="flash-del">{{number_format($spk->unit_price)}}đ</span>
                                                    <span class="flash-sale">{{number_format($spk->promotion_price)}}đ</span>
                                                @else
                                                    <span class="flash-del">{{number_format($spk->unit_price)}}đ</span>                                          
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
							 <div class="row">{{$sp_khac->links("pagination::bootstrap-4")}}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection	