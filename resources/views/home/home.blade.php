@extends('layouts.app')
@section('content')
<div class="main-content">
	<div id="about" class="section pb-5">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-lg-5">
				<h1 class="title mt-4 pt-4 mb-2 d-block d-sm-none">About <span class="d-block">Mom Academy</span></h1>
				<div class="block p-3 rounded my-sm-5">
				<h1 class="title mb-4 d-none d-sm-block">About <span class="d-block">Mom Academy</span></h1>
				<div class="shortdesc">
					<p class="mb-0">MoM Academy (MoMA) adalah komunitas perempuan terutama para mom yang senang mencari ilmu, berbagi ilmu, serta pastinya mendapatkan penghasilan. Dengan misi “ Mom harus pintar, produktif, dan bahagia” komunitas di bawah naungan Mothers on Mission ini berkembang pesat hanya dalam satu tahun terakhir.</p>
					<p class="mb-0">Saat ini MoMA sudah memiliki lebih dari 3000 anggota yang tersebar di seluruh Indonesia serta Luar Negeri dan terbagi dalam 15 whatsapp group yang dikelola oleh para pengurus regional masing-masing area.</p>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div id="academy" class="section py-5">
		<div class="container">
			<h1 class="title">The Academy</h1>
			<div class="column mb-5">
				<h4 class="text-center mb-4">Class</h4>
				<div class="row">
					@if(count($course)>0)
						@foreach ($course as $row)
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							<div class="block">
								@if (AppHelper::getAuth())	
									<div class="block-col position-relative">
										<div class="img">
											<a href="{{url('class/detail/'.$row->course_id)}}" class="thumb-video position-relative">
												<img src="https://zonderstudio.com/moma/public/img/course/{{ $row->image }}" alt="" class="img-fluid">								
											<div class="floating-txt d-block d-sm-none position-absolute text-white p-2">
												<h6>{{Str::words($row->course_name,5)}}</h6>
												<div class="author">By {{ $row->expert_name}}</div>
											</div>                        
											</a>
										</div>									
										<div class="block-text w-100 p-3">
											<div class="date text-white text-center font-weight-bold d-flex align-items-center justify-content-center flex-column">{{ \Carbon\Carbon::parse($row->start_date)->format('d') }} <span class="text-uppercase font-weight-normal">{{ \Carbon\Carbon::parse($row->start_date)->format('M') }}
											</span></div>
											<h6 class="d-none d-sm-block"><a href="{{url('class/detail/'.$row->course_id)}}">{{Str::words(ucwords(strtolower($row->course_name)),4)}}</a></h6>
											<div class="column">
											<div class="author d-none d-sm-block">By Widya Safitri</div>
											<div class="btn-act text-center">
												<a href="#" class="free rounded-pill text-white mb-2 text-uppercase p-1">Free</a>
												<a href="#" class="daftar rounded-pill text-white text-uppercase p-1">Daftar</a>
											</div>
											</div>
										</div>
									</div>    																	
								@else
									<div class="block-col position-relative">
										<div class="img">
											<a href="#" data-toggle="modal" data-target="#modalAlert" class="thumb-video position-relative">
												<img src="https://zonderstudio.com/moma/public/img/course/{{ $row->image }}" alt="" class="img-fluid">								
											<div class="floating-txt d-block d-sm-none position-absolute text-white p-2">
												<h6>{{Str::words($row->course_name,5)}}</h6>
												<div class="author">By {{ $row->expert_name}}</div>
											</div>                        
											</a>
										</div>									
										<div class="block-text w-100 p-3">
											<div class="date text-white text-center font-weight-bold d-flex align-items-center justify-content-center flex-column">{{ \Carbon\Carbon::parse($row->start_date)->format('d') }} <span class="text-uppercase font-weight-normal">{{ \Carbon\Carbon::parse($row->start_date)->format('M') }}
											</span></div>
											<h6 class="d-none d-sm-block"><a href="#" data-toggle="modal" data-target="#modalAlert">{{Str::words(ucwords(strtolower($row->course_name)),4)}}</a></h6>
											<div class="column">
											<div class="author d-none d-sm-block">By Widya Safitri</div>
											<div class="btn-act text-center">
												<a href="#" class="free rounded-pill text-white mb-2 text-uppercase p-1">Free</a>
												<a href="#" class="daftar rounded-pill text-white text-uppercase p-1">Daftar</a>
											</div>
											</div>
										</div>
									</div>  
								@endif   
							</div>
						</div>
						@endforeach
					@endif
				</div>
			</div>
			<div class="column mb-5">
			<h4 class="text-center mb-4">Module</h4>
			<div class="row">
				@if(count($module)>0)
                    @foreach ($module as $row)						
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							<div class="block">
								@if (AppHelper::getAuth())	
									<div class="block-col block-module position-relative bg-orange">
										<div class="img">
											<a href="https://zonderstudio.com/moma/public/file/ebook/{{$row->file_ebook}}" target="_blank" class="position-relative">
												<img src="https://zonderstudio.com/moma/public/img/ebook/{{ $row->thumbnail }}" alt="" class="img-fluid">
											</a>
										</div>
										<div class="block-text w-100 p-3">
											<h6 class="mb-4 d-none d-sm-block"><a href="https://zonderstudio.com/moma/public/file/ebook/{{$row->file_ebook}}" target="_blank">{{ $row->title }}</a></h6>
											<div class="btn-act">
											@if ($row->price == 0)
												<a href="#" class="rounded-pill mb-2 text-uppercase">Free</a>
											@else
											<a href="#" class="rounded-pill mb-2 text-uppercase">Rp. {{number_format($row->price)}}</a>
											@endif											
											<a href="https://zonderstudio.com/moma/public/file/ebook/{{$row->file_ebook}}" target="_blank" class="rounded-pill text-uppercase">Lihat</a>
											</div>
										</div>
									</div>       
								@else
								<div class="block-col block-module position-relative bg-orange">
									<div class="img">
										<a href="#" data-toggle="modal" data-target="#modalAlert" class="position-relative">
											<img src="https://zonderstudio.com/moma/public/img/ebook/{{ $row->thumbnail }}" alt="" class="img-fluid">
										</a>
									</div>
									<div class="block-text w-100 p-3">
										<h6 class="mb-4 d-none d-sm-block"><a href="#" data-toggle="modal" data-target="#modalAlert">{{ $row->title }}</a></h6>
										<div class="btn-act">
										@if ($row->price == 0)
											<a href="#" class="rounded-pill mb-2 text-uppercase">Free</a>
										@else
										<a href="#" class="rounded-pill mb-2 text-uppercase">Rp. {{number_format($row->price)}}</a>
										@endif											
										<a href="https://zonderstudio.com/moma/public/file/ebook/{{$row->file_ebook}}" target="_blank" class="rounded-pill text-uppercase">Lihat</a>
										</div>
									</div>
								</div> 
								@endif
							</div>
						</div>
					@endforeach
				@endif				
			</div>
		</div>
	</div>
	<div id="expert" class="section py-5">
		<div class="container">
			<div class="row">
			<div class="col-md-2">
				<h1 class="headline text-white">MoMa Expert</h1>
			</div>
			<div class="col-md-10">
				<div class="sliders-wrapper">
					<div class="slider multiple-items">
						@if ($expert)
							@foreach ($expert as $row)														
								<div class="block text-center">
									<div class="img d-inline-block"><img src="https://zonderstudio.com/moma/public/img/expert/{{ $row->image }}" alt="" class="img-fluid"></div>
									<div class="after-img text-white mt-2">
										<div class="name">{{ $row->expert_name }}</div>
										<div class="position">{{ $row->profesi }}</div>
										{{-- <div class="more my-4"><a href="#" class="rounded-pill text-uppercase bg-white px-3 py-1">cek profil</a></div> --}}
										<div class="d-flex align-items-center justify-content-center sosmed-profile my-4">
											<a href="https://www.instagram.com/{{ $row->link_instagram }}" class="ig"><i class="fab fa-instagram"></i></a>
											<a href="https://wa.me/#" class="wa"><i class="fab fa-whatsapp"></i></a>
										</div>
									</div>
								</div>
								{{-- <div class="block text-center">
									<div class="img d-inline-block"><img src="https://zonderstudio.com/moma/public/img/mom/{{ $row->image }}" alt="" class="img-fluid"></div>
									<div class="after-img text-white mt-2">
										<div class="name">{{ $row->name }}</div>
										<div class="position">{{ $row->quote }}</div>
										<div class="d-flex align-items-center justify-content-center sosmed-profile my-4">
											<a href="https://www.instagram.com/{{ $row->link_instagram }}" class="ig"><i class="fab fa-instagram"></i></a>
											<a href="https://wa.me/#" class="wa"><i class="fab fa-whatsapp"></i></a>
										</div>
									</div>
								</div> --}}
							@endforeach						
						@endif											
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div id="events" class="section py-5">
		<div class="container">
			<div class="banner-ads text-center"><img src="{{ asset('images/dummy.jpg') }}" alt="" class="img-fluid"></div>
			<h1 class="title text-center py-5 mt-3">MoM Events</h1>
			<div class="column mb-5">
			<div class="row">
				@if(count($events)>0)
                    @foreach ($events as $row)
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							<div class="block">
								<div class="block-col position-relative">
									<div class="img">
										<a href="{{ url('/events/detail/'.$row->event_id)}}" class="position-relative">
										<img src="https://zonderstudio.com/moma/public/img/event/{{ $row->image }}" alt="" class="img-fluid">
										<div class="floating-txt d-block d-sm-none position-absolute text-white p-2">course_name
											<h6>{{Str::words($row->event_name,5)}}</h6>
											<div class="author">By {{$row->speaker}}</div>
										</div>  
										</a>
									</div>
									<div class="block-text w-100 p-3">
										<div class="date text-white text-center font-weight-bold d-flex align-items-center justify-content-center flex-column">{{ \Carbon\Carbon::parse($row->start_date)->format('d') }}  <span class="text-uppercase font-weight-normal">{{ \Carbon\Carbon::parse($row->start_date)->format('M') }} </span></div>
										<h6 class="d-none d-sm-block"><a href="{{ url('/events/detail/'.$row->event_id)}}">{{Str::words($row->event_name,5)}}</a></h6>
										<div class="column">
										<div class="author d-none d-sm-block">By {{$row->speaker}}</div>
										<div class="btn-act text-center">
											<a href="#" class="free rounded-pill text-white mb-2 text-uppercase p-1">Free</a>
											<a href="#" class="daftar rounded-pill text-white text-uppercase p-1">Daftar</a>
										</div>
										</div>
									</div>
								</div>       
							</div>
						</div>
					@endforeach
				@endif
			</div>
			</div>
		</div>
	</div>
	<div id="market" class="section py-5 position-relative">
		<div class="container">
			<div class="d-none d-sm-block">
			<div class="row text-white mb-5">
				<div class="col-md-3">
				<h1 class="h-100 d-flex align-items-center">Market Day</h1>
				</div>
				<div class="col-md-9">
				<div class="shortdesc">
					<p>Mom suka belanja? Temukan produk-produk berkualitas dari member MoMA di sini. Jika mom ingin produknya hadir juga di Market Day, silakan LINK berikut ini</p>
				</div>              
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				<div class="block-label rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-2">Product of The Day</div>
				<div class="block product-off-the-day">
					<div class="block-col position-relative">
					<div class="img h-100"><a href="detail-market.html" class="position-relative h-100"><img src="{{ asset('images/img-product-day.png') }}" alt="" class="img-fluid h-100"></a></div>
					<div class="block-text w-100 p-3">
						<h6><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
						<div class="price">Rp 180.000</div>
						<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
					</div>
					</div>       
				</div>
				<div class="shop-more text-uppercase"><a href="#">shop more >>></a></div>
				</div>
				<div class="col-md-4">
				<div class="block-label mt-85 rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">Books</div>
				<div class="block">
					<div class="block-col position-relative">
					<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-1.png') }}" alt="" class="img-fluid"></a></div>
					<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
						<div class="price mb-2">Rp 180.000</div>
						<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
					</div>
					</div>       
				</div>
				<div class="shop-more text-uppercase"><a href="#">shop more >>></a></div>
				</div>
				<div class="col-md-4">
				<div class="block-label mt-85 rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">Books</div>
				<div class="block">
					<div class="block-col position-relative">
					<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-1.png') }}" alt="" class="img-fluid"></a></div>
					<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
						<div class="price mb-2">Rp 180.000</div>
						<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
					</div>
					</div>       
				</div>
				<div class="shop-more text-uppercase"><a href="#">shop more >>></a></div>
				</div>
				<div class="col-md-4">
				<div class="block-label mt-3 rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">UMKM Product</div>
				<div class="block">
					<div class="block-col position-relative">
					<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-2.png') }}" alt="" class="img-fluid"></a></div>
					<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
						<div class="price mb-2">Rp 180.000</div>
						<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
					</div>
					</div>       
				</div>
				<div class="shop-more text-uppercase"><a href="#">shop more >>></a></div>
				</div>
				<div class="col-md-4">
				<div class="block-label mt-3 rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">Our Brands Product</div>
				<div class="block">
					<div class="block-col position-relative">
					<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-2.png') }}" alt="" class="img-fluid"></a></div>
					<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
						<div class="price mb-2">Rp 180.000</div>
						<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
					</div>
					</div>       
				</div>
				<div class="shop-more text-uppercase"><a href="#">shop more >>></a></div>
				</div>
				<div class="col-md-4">
				<div class="block-label mt-3 rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">Merchandise</div>
				<div class="block">
					<div class="block-col position-relative">
					<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-3.png') }}" alt="" class="img-fluid"></a></div>
					<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
						<div class="price mb-2">Rp 180.000</div>
						<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
					</div>
					</div>       
				</div>
				<div class="shop-more text-uppercase"><a href="#">shop more >>></a></div>
				</div>
			</div>
			</div>
			<div class="d-block d-sm-none">
			<h1 class="h-100 d-flex align-items-center text-white">Market Day</h1>
			<div class="shortdesc text-white">
				<p>Temukan produk-produk berkualitas dari member MoMA di sini.</p>
			</div>
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item">
				<a class="nav-link active text-uppercase text-white font-weight-bold bg-transparant" id="label-1" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Product of the day</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-uppercase text-white font-weight-bold bg-transparant" id="label-2" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Books</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-uppercase text-white font-weight-bold bg-transparant" id="label-3" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">UMKM</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-uppercase text-white font-weight-bold bg-transparant" id="label-4" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">Our brand</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-uppercase text-white font-weight-bold bg-transparant" id="label-5" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">Merchandise</a>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="label-1">
				<div class="block-col">
					<div class="block-label rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-2">Product of The Day</div>
					<div class="block product-off-the-day">
					<div class="block-col position-relative">
						<div class="img h-100"><a href="detail-market.html" class="position-relative h-100"><img src="{{ asset('images/img-product-day.png') }}" alt="" class="img-fluid h-100"></a></div>
						<div class="block-text w-100 p-3">
						<h6><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
							<div class="price">Rp 180.000</div>
							<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
						</div>
					</div>       
					</div>
				</div>
				</div>
				<div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="label-2">
				<div class="block-col">
					<div class="block-label rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">Books</div>
					<div class="block">
					<div class="block-col position-relative">
						<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-1.png') }}" alt="" class="img-fluid"></a></div>
						<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
							<div class="price mb-2">Rp 180.000</div>
							<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
						</div>
					</div>       
					</div>
				</div>
				</div>
				<div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="label-3">
				<div class="block-col">
					<div class="block-label mt-3 rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">UMKM</div>
					<div class="block">
					<div class="block-col position-relative">
						<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-2.png') }}" alt="" class="img-fluid"></a></div>
						<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
							<div class="price mb-2">Rp 180.000</div>
							<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
						</div>
					</div>       
					</div>
				</div>
				</div>
				<div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="label-4">
				<div class="block-col">
					<div class="block-label mt-3 rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">Our Brands Product</div>
					<div class="block">
					<div class="block-col position-relative">
						<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-2.png') }}" alt="" class="img-fluid"></a></div>
						<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
							<div class="price mb-2">Rp 180.000</div>
							<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
						</div>
						</div>
					</div>       
					</div>
				</div>
				</div>
				<div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="label-5">
				<div class="block-col">
					<div class="block-label mt-3 rounded-pill bg-white d-inline-block p-1 px-3 mb-3 ml-3">Merchandise</div>
					<div class="block">
					<div class="block-col position-relative">
						<div class="img"><a href="detail-market.html" class="position-relative"><img src="{{ asset('images/img-product-3.png') }}" alt="" class="img-fluid"></a></div>
						<div class="block-text w-100 p-3">
						<h6 class="mb-0"><a href="detail-market.html">cottonink x liunic </a></h6>
						<div class="column">
							<div class="price mb-2">Rp 180.000</div>
							<div class="rating">4,8 <i class="fas fa-star"></i> Terjual 3,4rb</div>
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
	<div id="income" class="section py-5">
		<div class="container">
			<div class="row mb-sm-5">
			<div class="col-md-4">
				<h1 class="text-white font-weight-bold">Get Income</h1>
			</div>
			<div class="col-md-6">
				<div class="shortdesc text-white">
				<p>Yuk dapatkan penghasilan tambahan melalui Mothers On Mission </p>
				</div>              
			</div>
			</div>
			<div class="d-none d-sm-block">
			<div class="row mb-5">
				<div class="col-md-4">
				<div class="block">
					<h4 class="subtitle text-uppercase text-white text-center mb-4 font-weight-bold">mom reseller</h4>
					<div class="img mb-4"><img src="{{ asset('images/img-income-1.png') }}" alt="" class="img-fluid"></div>
					<div class="button"><a href="#" class="rounded-pill link-gradient font-weight-bold d-flex align-items-center justify-content-center text-uppercase text-white text-center">daftar</a></div>
				</div>
				</div>
				<div class="col-md-4">
				<div class="block">
					<h4 class="subtitle text-uppercase text-white text-center mb-4 font-weight-bold">mom influencer</h4>
					<div class="headline mb-4 text-white"><p>Dapatkan penghasilan tambahan dengan menjadi influencer MoM. Klik untuk info lebih lanjut</p></div>
					<div class="button"><a href="#" class="rounded-pill link-gradient font-weight-bold d-flex align-items-center justify-content-center text-uppercase text-white text-center">daftar</a></div>
				</div>
				</div>
				<div class="col-md-4">
				<div class="block">
					<h4 class="subtitle text-uppercase text-white text-center mb-4 font-weight-bold">mom freelancer</h4>
					<div class="img mb-4"><img src="{{ asset('images/img-income-2.png') }}" alt="" class="img-fluid"></div>
					<div class="button"><a href="#" class="rounded-pill link-gradient font-weight-bold d-flex align-items-center justify-content-center text-uppercase text-white text-center">daftar</a></div>
				</div>
				</div>
			</div>
			</div>          
			<div class="row d-block d-sm-none">
			<div class="mobile-tabs mb-5">
				<div class="container">
				<ul class="nav nav-pills mb-3" id="testi-tab" role="tablist">
					<li class="nav-item">
					<a class="nav-link active text-uppercase text-white font-weight-bold bg-transparent" id="testi-reseller-tab" data-toggle="pill" href="#testi-reseller" role="tab" aria-controls="testi-reseller" aria-selected="true">mom reseller</a>
					</li>
					<li class="nav-item">
					<a class="nav-link text-uppercase text-white font-weight-bold bg-transparent" id="testi-influencer-tab" data-toggle="pill" href="#testi-influencer" role="tab" aria-controls="testi-influencer" aria-selected="false">mom influencer</a>
					</li>
					<li class="nav-item">
					<a class="nav-link text-uppercase text-white font-weight-bold bg-transparent" id="testi-freelancer-tab" data-toggle="pill" href="#testi-freelancer" role="tab" aria-controls="testi-freelancer" aria-selected="false">mom freelancer</a>
					</li>
				</ul>
				<div class="tab-content" id="testi-tabContent">
					<div class="tab-pane fade show active" id="testi-reseller" role="tabpanel" aria-labelledby="testi-reseller-tab">
					<div class="img mb-4 text-center"><img src="{{ asset('images/img-income-1.png') }}" alt="" class="img-fluid"></div>
					<div class="button-wrapper text-center">
						<div class="button d-inline-block">
						<a href="#" class="rounded-pill link-gradient font-weight-bold d-flex align-items-center justify-content-center text-uppercase text-white text-center">daftar</a>                      
						</div>
					</div>
					</div>
					<div class="tab-pane fade" id="testi-influencer" role="tabpanel" aria-labelledby="testi-influencer-tab">
					<div class="headline mb-4 text-white text-center"><p>Dapatkan penghasilan tambahan dengan menjadi influencer MoM. Klik untuk info lebih lanjut</p></div>
					<div class="button-wrapper text-center">
						<div class="button d-inline-block">
						<a href="#" class="rounded-pill link-gradient font-weight-bold d-flex align-items-center justify-content-center text-uppercase text-white text-center">daftar</a>                      
						</div>
					</div>
					</div>
					<div class="tab-pane fade" id="testi-freelancer" role="tabpanel" aria-labelledby="testi-freelancer-tab">
					<div class="img mb-4 text-center"><img src="{{ asset('images/img-income-2.png') }}" alt="" class="img-fluid"></div>
					<div class="button-wrapper text-center">
						<div class="button d-inline-block">
						<a href="#" class="rounded-pill link-gradient font-weight-bold d-flex align-items-center justify-content-center text-uppercase text-white text-center">daftar</a>                      
						</div>
					</div>
					</div>
				</div>
				</div>              
			</div>
			</div>
			<div class="testimonial-wrapper">
			<div class="row">
				<div class="col-md-6">
				<div class="testi-block">
					<div class="row">
					<div class="col-md-4 col-4">
						<div class="user pt-3 rounded-circle"><img src="{{ asset('images/img-testi-1.png') }}" alt="" class="img-fluid"></div> 
					</div>
					<div class="col-md-8 col-8">
						<div class="testi">
						<p>"Berkat Mom, kegiatanku di rumah jadi lebih bervariasi, selain jadi Ibu Rumah Tangga, aku bisa punya penghasillan sendiri, Lho!" <span class="font-weight-bold d-block mt-2">- Andina, Reseller Mom</span></p>
						</div>
					</div>
					</div>
				</div>
				</div>
				<div class="col-md-6 d-none d-sm-block">
				<div class="testi-block">
					<div class="row">
					<div class="col-md-4">
						<div class="user pt-3 rounded-circle"><img src="{{ asset('images/img-testi-2.png') }}" alt="" class="img-fluid"></div> 
					</div>
					<div class="col-md-8">
						<div class="testi">
						<p>"Gabung di Mom memberiku kesempatan untuk tetap berkarya sambil nemenin si Kecil di rumah" <span class="font-weight-bold d-block mt-2">- Andina, Reseller Mom</span></p>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div id="trusted" class="section py-5">
		<div class="container">
			<div class="column text-center">
			<h1 class="font-weight-bold mb-4">Trusted by</h1>
			<div class="row justify-content-center">
				<div class="col-md-8">
				<div class="sliders-wrapper">
					<div class="slider multiple-items-2">
					<div class="block text-center">
						<div class="img d-flex align-items-center justify-content-center">
						<img src="{{ asset('images/img-client-1.png') }}" alt="" class="img-fluid">
						</div>                    
					</div>
					<div class="block text-center">
						<div class="img d-flex align-items-center justify-content-center">
						<img src="{{ asset('images/img-client-2.png') }}" alt="" class="img-fluid">
						</div>                    
					</div>
					<div class="block text-center">
						<div class="img d-flex align-items-center justify-content-center">
						<img src="{{ asset('images/img-client-3.png') }}" alt="" class="img-fluid">
						</div>                    
					</div>
					<div class="block text-center">
						<div class="img d-flex align-items-center justify-content-center">
						<img src="{{ asset('images/img-client-2.png') }}" alt="" class="img-fluid">
						</div>                    
					</div>
					</div>
				</div>                
				</div>
			</div>            
			</div>
		</div>
	</div>
	<div id="behind-mom" class="section py-5">
		<div class="container">
			<div class="row ">
			<div class="col-md-3">
				<h1 class="headline text-white">Behind MoM Academy</h1>
				<div class="shortdesc py-4 d-none d-sm-block">
				<p>Dapatkan penghasilan tambahan dengan menjadi influencer MoM. Klik untuk info lebih lanjut</p>
				</div>
				<div class="moreknow d-none d-sm-block"><a href="#" class="d-block text-uppercase d-flex align-items-center justify-content-center link-gradient rounded-pill text-white text-uppercase font-weight-bold">Yuk Kenalan</a></div>
			</div>
			<div class="col-md-9">
				<div class="sliders-wrapper">
					<div class="slider multiple-items">
						@if ($moms)
							@foreach ($moms as $row)														
								{{-- <div class="block text-center">
									<div class="img d-inline-block"><img src="https://zonderstudio.com/moma/public/img/mom/{{ $row->image }}" alt="" class="img-fluid"></div>
									<div class="after-img text-white mt-2">
										<div class="name">{{ $row->name }}</div>
										<div class="position">{{ $row->quote }}</div>
										<div class="more my-4"><a href="#" class="rounded-pill text-uppercase bg-white px-3 py-1">cek profil</a></div>
									</div>
								</div> --}}
								<div class="block text-center">
									<div class="img d-inline-block"><img src="https://zonderstudio.com/moma/public/img/mom/{{ $row->image }}" alt="" class="img-fluid"></div>
									<div class="after-img text-white mt-2">
										<div class="name">{{ $row->name }}</div>
										<div class="position">{{ $row->quote }}</div>
										<div class="d-flex align-items-center justify-content-center sosmed-profile my-4">
											<a href="https://www.instagram.com/{{ $row->link_instagram }}" class="ig"><i class="fab fa-instagram"></i></a>
											<a href="https://wa.me/#" class="wa"><i class="fab fa-whatsapp"></i></a>
											</div>
											</div>
										</div>
							@endforeach						
						@endif	
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div id="get-intouch" class="section py-5">
		<div class="container">
			<h1 class="font-weight-bold mb-4">Get In Touch</h1>
			<div class="row">
			<div class="col-md-6">
				<div class="block bg-white rounded">
				<form>
					<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" readonly class="form-control-plaintext" id="" >
					</div>
					</div>
					<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control-plaintext" id="" placeholder="">
					</div>
					</div>
					<div class="form-group">
					<textarea name="" id="" rows="3" class="form-control" placeholder="tulis pesanmu"></textarea>
					</div>
					<div class="button-wrapper mt-4">
					<button type="submit" class="btn btn-primary text-uppercase text-white link-gradient rounded-pill border-0 font-weight-bold">Kirim</button>
					</div>
				</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="text-column d-flex align-items-center h-100 mt-4 mt-sm-0">
				<ul>
					<li class="wa"><a href="https://web.whatsapp.com/" target="_blank">Admin Moma</a></li>
					<li class="location">Jl Lamandau No 10 Kramat Pela, Kebayoran Baru <br>Jakarta Selatan</li>
				</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
@stop