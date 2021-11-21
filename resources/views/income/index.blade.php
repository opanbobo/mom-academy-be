@extends('layouts.app')
@section('content')
<div class="main-content">
    <div id="banner-get-income" class="section pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-6">
              <h1 class="title mt-4 pt-4 mb-2">Yuk dapatkan penghasilan tambahan melalui Mothers on Mission</h1>
              <div class="shortdesc">
                <p class="mb-0">Penasaran gimana caranya dapat penghasilan tambahan yang bisa flexibel? cari tahu caranya</p>
                <div class="more"><a href="#">disini</a></div>
              </div>
              <div class="register-btn mt-4"><a href="#" class="text-uppercase d-flex align-items-center justify-content-center link-gradient rounded-pill text-white text-uppercase">Daftar</a></div>
            </div>
          </div>
        </div>
      </div>
      <div id="freelancer" class="section py-5">
        <div class="container">
          <h1 class="title">Join Our Freelance Growing Community</h1>
          <div class="list-freelancer-wrapper">
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="block">
                  <div class="img">
                    <a href="#" class="d-block position-relative">
                      <img src="{{ asset('images/img-freelancer.png') }}" alt="" class="img-fluid">
                      <div class="txt position-absolute p-4">
                        <h4 class="text-white font-weight-bold text-uppercase">I AM A FREELANCER</h4>
                      </div>
                    </a>
                  </div>                  
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="block">
                  <div class="img">
                    <a href="#" class="d-block position-relative">
                      <img src="{{ asset('images/img-freelancer.png') }}" alt="" class="img-fluid">
                      <div class="txt position-absolute p-4">
                        <h4 class="text-white font-weight-bold text-uppercase">I AM A Content Writer</h4>
                      </div>
                    </a>
                  </div>                  
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="block">
                  <div class="img">
                    <a href="#" class="d-block position-relative">
                      <img src="{{ asset('images/img-freelancer.png') }}" alt="" class="img-fluid">
                      <div class="txt position-absolute p-4">
                        <h4 class="text-white font-weight-bold text-uppercase">I AM A developer</h4>
                      </div>
                    </a>
                  </div>                  
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="block">
                  <div class="img">
                    <a href="#" class="d-block position-relative">
                      <img src="{{ asset('images/img-freelancer.png') }}" alt="" class="img-fluid">
                      <div class="txt position-absolute p-4">
                        <h4 class="text-white font-weight-bold text-uppercase">I AM A graphic designer</h4>
                      </div>
                    </a>
                  </div>                  
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="block">
                  <div class="img">
                    <a href="#" class="d-block position-relative">
                      <img src="{{ asset('images/img-freelancer.png') }}" alt="" class="img-fluid">
                      <div class="txt position-absolute p-4">
                        <h4 class="text-white font-weight-bold text-uppercase">I AM A social media specialist</h4>
                      </div>
                    </a>
                  </div>                  
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="box bg-orange d-flex align-items-center p-4 h-100">
                  <h4 class="text-white">
                    Yuk , kenali profesi mereka lebih jauh lagi
                    <a href="#" class="text-uppercase text-white font-weight-bold mt-4 d-block">DAFTAR SEKARANG</a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="income2" class="section py-5">
        <div class="container">
          <div class="d-none d-sm-block">
            <div class="row mb-5">
              <div class="col-md-4">
                <div class="block">
                  <h4 class="subtitle text-uppercase text-center mb-4 font-weight-bold">mom reseller</h4>
                  <div class="img mb-4"><img src="{{ asset('images/img-income-1.png') }}" alt="" class="img-fluid"></div>
                  <div class="list-wrapper">
                    <ul class="pl-3">
                      <li>Tentukan fee- mu sendiri</li>
                      <li>Temukan Klien yang cocok untukmu</li>
                      <li>Dapatkan income mingguan hingga bulanan</li>
                    </ul>
                  </div>
                  <div class="accordion-wrapper">
                    <div class="accordion" id="accordion-1">
                      <div class="card border-top-0">
                          <div class="card-header" id="headingOne">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fas fa-plus-circle"></i> Jobdesk Mom Reseller</button>									
                              </h2>
                          </div>
                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-1">
                              <div class="card-body">
                                  <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingTwo">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"><i class="fas fa-plus-circle"></i> Spesifikasi Pekerjaan</button>
                              </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-1">
                              <div class="card-body">
                                  <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="block">
                  <h4 class="subtitle text-uppercase text-center mb-4 font-weight-bold">mom influencer</h4>
                  <div class="headline mb-4 text-white"><p>Dapatkan penghasilan tambahan dengan menjadi influencer MoM. Klik untuk info lebih lanjut</p></div>
                  <div class="list-wrapper">
                    <ul class="pl-3">
                      <li>Tentukan fee- mu sendiri</li>
                      <li>Temukan Klien yang cocok untukmu</li>
                      <li>Dapatkan income mingguan hingga bulanan</li>
                    </ul>
                  </div>
                  <div class="accordion-wrapper">
                    <div class="accordion" id="accordion-2">
                      <div class="card border-top-0">
                          <div class="card-header" id="headingOne-2">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne-2"><i class="fas fa-plus-circle"></i> Jobdesk Mom Reseller</button>									
                              </h2>
                          </div>
                          <div id="collapseOne-2" class="collapse" aria-labelledby="headingOne-2" data-parent="#accordion-2">
                              <div class="card-body">
                                  <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingTwo-2">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo-2"><i class="fas fa-plus-circle"></i> Spesifikasi Pekerjaan</button>
                              </h2>
                          </div>
                          <div id="collapseTwo-2" class="collapse" aria-labelledby="headingTwo-2" data-parent="#accordion-2">
                              <div class="card-body">
                                  <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="block">
                  <h4 class="subtitle text-uppercase text-center mb-4 font-weight-bold">mom freelancer</h4>
                  <div class="img mb-4"><img src="{{ asset('images/img-income-2.png') }}" alt="" class="img-fluid"></div>
                  <div class="list-wrapper">
                    <ul class="pl-3">
                      <li>Tentukan fee- mu sendiri</li>
                      <li>Temukan Klien yang cocok untukmu</li>
                      <li>Dapatkan income mingguan hingga bulanan</li>
                    </ul>
                  </div>
                  <div class="accordion-wrapper">
                    <div class="accordion" id="accordion-3">
                      <div class="card border-top-0">
                          <div class="card-header" id="headingOne-3">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne-3"><i class="fas fa-plus-circle"></i> Jobdesk Mom Reseller</button>									
                              </h2>
                          </div>
                          <div id="collapseOne-3" class="collapse" aria-labelledby="headingOne-3" data-parent="#accordion-3">
                              <div class="card-body">
                                  <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingTwo-3">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo-3"><i class="fas fa-plus-circle"></i> Spesifikasi Pekerjaan</button>
                              </h2>
                          </div>
                          <div id="collapseTwo-3" class="collapse" aria-labelledby="headingTwo-3" data-parent="#accordion-3">
                              <div class="card-body">
                                  <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
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
        </div>
      </div>
      <div id="step-wrapper" class="section py-5">
        <div class="container">
          <h1 class="font-weight-bold mb-5">Langkah Mudah Menjadi Freelancer kami</h1>
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="block">
                <div class="img"><img src="{{ asset('images/step-1.png') }}" alt="" class="img-fluid"></div>
                <h4 class="font-weight-bold my-3">Daftar dan bergabung</h4>
                <div class="shortdesc">
                  <p>Daftar sebagai anggota freelancer kami dengan verifikasi KTP dan bergabung bersama MOM lainnya</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="block">
                <div class="img"><img src="{{ asset('images/step-2.png') }}" alt="" class="img-fluid"></div>
                <h4 class="font-weight-bold my-3">Posting Pekerjaan dan tetap terhubung</h4>
                <div class="shortdesc">
                  <p>Siapkan portofolio dengan informasi pekerjaan anda, kami akanmembantu anda terhubung dengan klien</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="block">
                <div class="img"><img src="{{ asset('images/step-3.png') }}" alt="" class="img-fluid"></div>
                <h4 class="font-weight-bold my-3">Bekerja Tanpa Khawatir</h4>
                <div class="shortdesc">
                  <p>Kami akan membantu pekerjaan dan uang anda sampai selesai</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="block">
                <div class="img"><img src="{{ asset('images/step-4.png') }}" alt="" class="img-fluid"></div>
                <h4 class="font-weight-bold my-3">Terima Uangnya</h4>
                <div class="shortdesc">
                  <p>MOM akan mentransfer uang anda ke akun bank terdaftar setelah pekerjaan selesai</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="register-btn text-center mt-4"><a href="#" class="text-uppercase d-flex align-items-center justify-content-center link-gradient rounded-pill text-white text-uppercase">Daftar Sekarang</a></div>
          </div>
        </div>
      </div>
      <div id="client-stories" class="section pt-5">
        <div class="container">
          <h1 class="font-weight-bold mb-5">Client Stories</h1>
          <div class="column white-left">
            <div class="row">
              <div class="col-md-6">
                <div class="block p-4">
                  <div class="row">
                    <div class="col-md-4"><div class="img"><img src="{{ asset('images/client-gojek.png') }}" alt="" class="img-fluid"></div></div>
                    <div class="col-md-8">
                      <div class="testimonial font-italic">“Kami mendapatkan pengalaman bekerja dengan freelancer terbaik”</div>
                      <div class="testi font-weight-bold">Andina, Head of Marketing GOJEK INDONESIA</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="block p-4">
                  <div class="row">
                    <div class="col-md-4"><div class="img"><img src="{{ asset('images/client-unilever.png') }}" alt="" class="img-fluid"></div></div>
                    <div class="col-md-8">
                      <div class="testimonial font-italic">“Kami mendapatkan pengalaman bekerja dengan freelancer terbaik”</div>
                      <div class="testi font-weight-bold">Andina, Head of Marketing GOJEK INDONESIA</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column white-right">
            <div class="row">              
              <div class="col-md-6">
                <div class="block p-4">
                  <div class="row">
                    <div class="col-md-4"><div class="img"><img src="{{ asset('images/client-unilever.png') }}" alt="" class="img-fluid"></div></div>
                    <div class="col-md-8">
                      <div class="testimonial font-italic">“Kami mendapatkan pengalaman bekerja dengan freelancer terbaik”</div>
                      <div class="testi font-weight-bold">Andina, Head of Marketing GOJEK INDONESIA</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="block p-4">
                  <div class="row">
                    <div class="col-md-4"><div class="img"><img src="{{ asset('images/client-gojek.png') }}" alt="" class="img-fluid"></div></div>
                    <div class="col-md-8">
                      <div class="testimonial font-italic">“Kami mendapatkan pengalaman bekerja dengan freelancer terbaik”</div>
                      <div class="testi font-weight-bold">Andina, Head of Marketing GOJEK INDONESIA</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="headline2" class="section py-5">
        <div class="container">
          <h1 class="font-weight-bold mb-5 text-center">Siap Untuk Bergabung Bersama Kami?</h1>
          <div class="register-btn text-center mt-4"><a href="#" class="text-uppercase d-flex align-items-center justify-content-center link-gradient rounded-pill text-white text-uppercase">Daftar Sekarang</a></div>
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
@Stop