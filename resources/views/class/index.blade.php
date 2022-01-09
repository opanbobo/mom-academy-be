@extends('layouts.app')
@section('content')
<div class="main-content">
    <div id="academy" class="section pb-5 bg-white shadow-sm academy-class-page">
        <form action="" class="filter-category mb-4 pt-4 pt-lg-0">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <select class="form-control rounded-pill" id="select-module">
                        <option select hidden>Module</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select class="form-control rounded-pill" id="select-workshop">
                        <option select hidden>Workshop</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select class="form-control rounded-pill" id="select-category">
                        <option select hidden>Category</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <button class="rounded-pill font-weight-bold btn-search text-white w-100"><i class="fa fa-search" aria-hidden="true"></i> Cari <span>Sekarang</span></button>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </form>          
        <div class="column-list border-top pt-4">
			<div class="container">
				<div class="sortby">
					<div class="text-right font-weight-bold mb-3">
						<span class="text-uppercase">sort by:</span> <span>Terpopuler</span>
					</div>
				</div>
				<div class="column mb-5">
					<div class="row">
						@if ($results)
							@foreach ($results as $row)
							<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
								<div class="block">
									<div class="block-col position-relative">
									<div class="img">
										<a href="{{url('class/detail/'.$row->course_id)}}" class="thumb-video position-relative">
											<img src="https://zonderstudio.com/img/course/{{ $row->image }}" alt="" class="img-fluid">								
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
								</div>
							</div>
							@endforeach
						@endif                
					</div>
              	</div>
			</div>
		</div>
	</div>
        <div id="before-expert" class="section py-5">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-md-6 col-lg-6">
                <h2 class="title mt-4 pt-4 mb-2 d-block d-sm-none">About MoMa Scolarship</h2>
                <div class="block p-3 rounded my-sm-5">
                  <h2 class="title mb-4 d-none d-sm-block">About MoMa Scolarship</h2>
                  <div class="shortdesc">
                    <p>MoM Academy Scholarship (MoMA Scholarship) merupakan acara tahunan yang diadakan oleh MoM Academy di mana akan dibuka pendaftaran yang terbuka bagi semua mom di Indonesia yang ingin mendapatkan pelatihan khusus selama 3 bulan.</p>
                    <p>Dari para pendaftar akan dipilih 50 orang yang diminta untuk melakukan beberapa challenge secara online lalu dipilih hingga mengerucut menjadi 10. Setelah terpilih 10 finalis, semua akan diundang untuk mengikuti penjurian secara online dan offline.</p>
                    <p>5 pemenang scholarship akan diundang dan diumumkan  tepat pada perayaan besar-besaran MomFest di awal tahun.</p>
                  </div>
                  <div class="button-wrapper d-flex justify-content-center">
                    <div class="button"><a href="{{url('get-income') }}" class="rounded-pill link-gradient font-weight-bold d-flex align-items-center justify-content-center text-uppercase text-white text-center py-3 px-5">daftar sekarang</a></div>
                  </div>                  
                </div>
              </div>
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
					@if ($moms)
						@foreach ($moms as $row)														
							<div class="block text-center">
								<div class="img d-inline-block"><img src="https://zonderstudio.com/img/mom/{{ $row->image }}" alt="" class="img-fluid"></div>
								<div class="after-img text-white mt-2">
									<div class="name">{{ $row->name }}</div>
									<div class="position">{{ $row->quote }}</div>
									<div class="more my-4"><a href="#" class="rounded-pill text-uppercase bg-white px-3 py-1">cek profil</a></div>
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
      </div>
</div>
@stop