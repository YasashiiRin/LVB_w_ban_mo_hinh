<style type="text/css">
	.main-menu>ul.l-inline>li>a {
		color: #fff;
		padding: 10px 10px;
		line-height: 50px;
	}

	.header-body {
		height: 1px;
		background-color: #172431;
		border-bottom: 5px solid initial #172431;

	}

	img.yt-img-shadow {
		display: block;
		margin-left: var(--yt-img-margin-left, auto);
		margin-right: var(--yt-img-margin-right, auto);
		max-height: var(--yt-img-max-height, none);
		max-width: var(--yt-img-max-width, 100%);
		border-radius: var(--yt-img-border-radius, none);
	}

	#img {
		margin: 5px;
		width: 80px;
		height: 80px;
		border: solid 3px #04FBD5;
		background: #999;
		border-radius: 50%;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
	}

	.btimg {
		border-radius: 50%;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
	}
</style>
<div id="header">
	<!-- 
		<div class="header-body">
			<div class="container beta-relative" >
				<div class="pull-right beta-components space-left ov">
				<div class="btimg">
	             <a href="">
		          
	              </a>
	             </div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div> -->
	<!-- .header-body -->
	<div class="header-bottom">
		<div class="container">
			<!-- <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div> -->
			<nav class="main-menu">
				<div class="l-inline ov tabs">
					<div class="pull-left">
						<a href="{{ route('trang-chu') }}" id="logo"><img src="source/assets/dest/images/logokt.png" width="80px" alt=""></a>
					</div>
					<div class="tab-item active"><a class="tab-icon" href="{{ route('trang-chu') }}">Trang chủ</a></div>
					<li class="tab-item"><a>Loại Sản phẩm</a>
						<ul class="sub-menu">
							@foreach($loai_sp as $ls)
							<li><a href="{{ route('loaisanpham',$ls->id) }}">{{$ls->name}}</a></li>
							@endforeach
						</ul>
					</li>
					<div class="tab-item"><a href="{{ route('aboutus') }}">About Us</a></div>
					<div class="tab-item"><a href="{{ route('contacs') }}">Liên hệ</a></div>
					@if(Auth::check())
					<!-- <li><a href="{{ route('logout') }}">Đăng xuất</a></li> -->
					<!-- <li><a href="">Chào bạn {{Auth::user()->full_name}}</a></li> -->
					{{-- @else
						    <li><a href="">Đăng ký</a></li>
                            <li><a href="">Đăng Nhập</a></li>  --}}
					@endif

						<div class="space10">&nbsp;</div>
						<div class="car-space">
						<div class="beta-comp">
							<form role="search" method="get" id="searchform" action="{{ route('search') }}">
								<input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
								<button class="fa fa-search" type="submit" id="searchsubmit"></button>
							</form>
						</div>
						<div class="beta-cart-space" style="color: white;">
							@if(Session::has('cart'))
							<div class="cart">
								<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (
									@if(Session::has('cart'))
									{{Session('cart')->totalQty}}
									@else Trống
									@endif)
									<i class="fa fa-chevron-down"></i>
								</div>
								<div class="beta-dropdown cart-body">
									@foreach($product_cart as $pdc)
									<div class="cart-item">
										<a class="cart-item-delete" href="{{ route('xoagiohang',$pdc['item']['id']) }}"><i class="fa fa-times"></i></a>
										<div class="media">
											<a class="pull-left" href="#"><img src="source/image/product/{{$pdc['item']['image']}}" alt=""></a>
											<div class="media-body">
												<span class="cart-item-title">{{$pdc['item']['name']}}</span>

												<span class="cart-item-amount"><span>{{$pdc['qty']}}*</span><span>
														@if($pdc['item']['promotion_price']==0)
														{{number_format($pdc['item']['unit_price'])}}
														@else
														{{number_format($pdc['item']['promotion_price'])}}
														@endif
													</span>
												</span>
											</div>
										</div>
									</div>
									@endforeach
									<div class="cart-caption">
										<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}} đ</span></div>
										<div class="clearfix"></div>

										<div class="center">
											<div class="space10">&nbsp;</div>
											<a href="{{ route('getdathang') }}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
							</div> <!-- .cart -->
							@endif
						</div>
								</div>
					<!-- <div class="logout">
						<a href="{{ route('logout') }}">
							<i class="fa-solid fa-right-from-bracket fa-rotate-180 logout-icon" style="color: #171b59;"></i>
						</a>
					</div> -->
			<label for="nav-mobile-input" class="nav__bars-btn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <input type="checkbox" name="" hidden class="nav_input" id="nav-mobile-input">
            <nav class="nav__mobile">
                <ul class="nav__mobile-list">
				    <li>
                        <p class="nav__mobile-link">{{Auth::user()->full_name}}</p>
                    </li>
                    <li>
                        <a href="{{ route('profile') }}" class="nav__mobile-link">Profile</a>
                    </li>
					<li>
                        <a href="{{ route('logout') }}" class="nav__mobile-link">Logout</a>
                    </li>
                </ul>
            </nav>
					<li class="line"></li>
				</div>
				<div class="headernavleft">
					<div class="container beta-relative">
						<div class="pull-right beta-components space-left ov">
							<div class="btimg">
								<a href="">

								</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="line"></div>
			</nav>
		</div> <!-- .container -->
	</div> <!-- .header-bottom -->
</div> <!-- #header -->
<script>
	const $ = document.querySelector.bind(document);
	const $$ = document.querySelectorAll.bind(document);
	const tabitem = $$('.tab-item');

	const act = $('.tab-item.active');
	const line = $('.tabs .line');
	const men = $('.main-menu')
	console.log([act])
	tabitem.forEach((element, index) => {
		element.onmouseover = function() {
			line.style.opacity = '1'
			document.querySelector('.tab-item.active').classList.remove('active');

			line.style.left = this.offsetLeft + 'px';
			line.style.width = this.offsetWidth + 'px';
			this.classList.add('active');
		}
	})
	const tabsctn = $('.l-inline .ov .tabs');
	men.onmouseleave = function() {
		line.style.opacity = '0'
	}
</script>