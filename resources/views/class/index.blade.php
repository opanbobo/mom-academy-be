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
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="block">
                    <div class="block-module bg-orange">
                      <div class="img">
                        <a href="detail-module.html" class="position-relative">
                          <img src="images/img-pot.jpg" alt="" class="img-fluid">
                          <div class="title-mobile d-block d-sm-none text-white text-uppercase position-absolute font-weight-bold p-3">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</div>
                        </a>
                      </div>
                      <div class="block-text w-100 p-3">
                        <h6 class="mb-5 d-none d-sm-block"><a href="detail-module.html">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</a></h6>
                        <div class="btn-act">
                          <a href="#" class="rounded-pill mb-2 text-uppercase">Free</a>
                          <a href="#" class="rounded-pill text-uppercase">Lihat</a>
                        </div>
                      </div>
                    </div>       
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="block">
                    <div class="block-module bg-yellow">
                      <div class="img">
                        <a href="detail-module.html" class="position-relative">
                          <img src="images/img-pot.jpg" alt="" class="img-fluid">
                          <div class="title-mobile d-block d-sm-none text-white text-uppercase position-absolute font-weight-bold p-3">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</div>
                        </a>
                      </div>
                      <div class="block-text w-100 p-3">
                        <h6 class="mb-5 d-none d-sm-block"><a href="detail-module.html">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</a></h6>
                        <div class="btn-act">
                          <a href="#" class="rounded-pill mb-2 text-uppercase">Free</a>
                          <a href="#" class="rounded-pill text-uppercase">Lihat</a>
                        </div>
                      </div>
                    </div>       
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="block">
                    <div class="block-module bg-blue">
                      <div class="img">
                        <a href="detail-module.html" class="position-relative">
                          <img src="images/img-pot.jpg" alt="" class="img-fluid">
                          <div class="title-mobile d-block d-sm-none text-white text-uppercase position-absolute font-weight-bold p-3">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</div>
                        </a>
                      </div>
                      <div class="block-text w-100 p-3">
                        <h6 class="mb-5 d-none d-sm-block"><a href="detail-module.html">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</a></h6>
                        <div class="btn-act">
                          <a href="#" class="rounded-pill mb-2 text-uppercase">Free</a>
                          <a href="#" class="rounded-pill text-uppercase">Lihat</a>
                        </div>
                      </div>
                    </div>       
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="block">
                    <div class="block-module bg-purple">
                      <div class="img">
                        <a href="detail-module.html" class="position-relative">
                          <img src="images/img-pot.jpg" alt="" class="img-fluid">
                          <div class="title-mobile d-block d-sm-none text-white text-uppercase position-absolute font-weight-bold p-3">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</div>
                        </a>
                      </div>
                      <div class="block-text w-100 p-3">
                        <h6 class="mb-5 d-none d-sm-block"><a href="detail-module.html">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</a></h6>
                        <div class="btn-act">
                          <a href="#" class="rounded-pill mb-2 text-uppercase">Free</a>
                          <a href="#" class="rounded-pill text-uppercase">Lihat</a>
                        </div>
                      </div>
                    </div>       
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="block">
                    <div class="block-module bg-pink">
                      <div class="img">
                        <a href="detail-module.html" class="position-relative">
                          <img src="images/img-pot.jpg" alt="" class="img-fluid">
                          <div class="title-mobile d-block d-sm-none text-white text-uppercase position-absolute font-weight-bold p-3">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</div>
                        </a>
                      </div>
                      <div class="block-text w-100 p-3">
                        <h6 class="mb-5 d-none d-sm-block"><a href="detail-module.html">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</a></h6>
                        <div class="btn-act">
                          <a href="#" class="rounded-pill mb-2 text-uppercase">Free</a>
                          <a href="#" class="rounded-pill text-uppercase">Lihat</a>
                        </div>
                      </div>
                    </div>       
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="block">
                    <div class="block-module bg-green">
                      <div class="img">
                        <a href="detail-module.html" class="position-relative">
                          <img src="images/img-pot.jpg" alt="" class="img-fluid">
                          <div class="title-mobile d-block d-sm-none text-white text-uppercase position-absolute font-weight-bold p-3">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</div>
                        </a>
                      </div>
                      <div class="block-text w-100 p-3">
                        <h6 class="mb-5 d-none d-sm-block"><a href="detail-module.html">PENTINGNYA KOMUNITAS BAGI SEBUAH BRAND</a></h6>
                        <div class="btn-act">
                          <a href="#" class="rounded-pill mb-2 text-uppercase">Free</a>
                          <a href="#" class="rounded-pill text-uppercase">Lihat</a>
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
</div>
@stop