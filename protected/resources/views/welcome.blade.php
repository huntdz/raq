@extends('include.layouthome')
@section('title','Selamat Datang')

@section('banner')
    <div class="banner_header">
        <div style="background-image:url('{{ asset('images/dummy.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 1;"></div>
        <div class="banner_h_text"><h3>Laksanakan ibadah aqiqah anda bersama kami, dapatkan pelayanan terbaik dari kami</h3><p>hanya di rumah aqiqah kamil</p></div>
    </div>
@endsection

@section('content')
<section class="landing_investasi">
    <div class="container">
        <div class="row">
            <div class="split_9">
                
                <p>Gebyar Investasi Qurban Ternaknesia 2019. Saat ini saya kembali membuka proyek permodalan dengan modal mulai dari 500 ribu/slot dan ROI 9-12% hanya dalam 6 bulan.</p>
            </div>
            <div class="split_3">
                <a href="{{ url('investasi') }}" class="btn btn-no-background">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<section class="sec_landing_1">
    <div class="container">
        
        <div class="row">
            <div class="split_5">
            <div class="landing_1_">
               <div class="landing_1_title">
                <h2>Assalamualaikum </h2>
                <span>selamat datang</span> 
               </div>
               <div class="landing_1_content">
                <p>     
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscinLorem ipsum dolor sit amet, consectetur adipiscing elit .
                </p>
                <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscinLorem ipsum dolor sit amet, consectetur adipiscing elit
                </p>
                <h4>Cabang kami yang lain:</h4>
                <ul>
                    <li>madiun</li>
                    <li>caruban</li>
                    <li>ngawi</li>
                    <li>magetan</li>
                    <li>ponorogo</li>
                </ul>
               </div>       
            
            
            </div>
            </div>
            <div class="split_7">
                <div class="banner_sec_landing_1">
                    <img src="{{ asset('images/banner_1.png') }}">
                </div>
            </div>
        </div>
    </div>  
</section>

<section class="sec_landing_2">
    <div class="container">
      <div class="landing_2_"> 
            <div class="landing_2_title">
                <h2>Layanan Kami </h2>
                <span>Paket layanan kami terdiri dari</span> 
           </div>
           <div class="landing_2_content">
                <div class="row">
                    <div class="split_4 split_4_full">
                        <div class="landing_2_layanan">
                            <div class="landing_layanan_header" style="background:url('{{ asset('images/layanan1.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <div class="landing_layanan_content">
                                <h1>Paket Aqiqoh</h1>
                                <small>Harga mulai dari Rp. 1.400.000 - Rp. 27.00.000</small>
                                <p>Paket aqiqoh terdiri dari paket A-F, dan juga tasyakuran.Menu ini terdiri dari varian sate dan gule.</p>
                            </div>
                            <div class="landing_layanan_footer">
                                <a href="{{ url('layanan-kami') }}" class="btn btn-normal">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="split_4 split_4_full" >
                        <div class="landing_2_layanan">
                            <div class="landing_layanan_header" style="background:url('{{ asset('images/layanan2.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <div class="landing_layanan_content">
                                <h1>Paket Nasi Kotak</h1>
                                <small>Harga mulai dari Rp. 8.500 - Rp. 18.000</small>
                                <p>Paket nasi kotak terdiri dari paket A-E.Menu ini terdiri dari nasi, acar, dan lain-lain.</p>
                            </div>
                            <div class="landing_layanan_footer">
                                <a href="{{ url('layanan-kami') }}" class="btn btn-normal">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="split_4 split_4_full" >
                        <div class="landing_2_layanan">
                            <div class="landing_layanan_header" style="background:url('{{ asset('images/layanan3.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <div class="landing_layanan_content">
                                <h1>Menu Tambahan</h1>
                                <small>Harga mulai dari -</small>
                                <p>Menu tambahan terdiri dari,lapis, rendang, krengsengan, rica-rica/tongseng.</p>
                            </div>
                            <div class="landing_layanan_footer">
                                <a href="{{ url('layanan-kami') }}" class="btn btn-normal">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
           </div>
      </div>    
    </div>
</section>
<section class="sec_landing_3">
    <div class="container">
        <div class="landing_3_title">
                <h2>Testimonial </h2>
                <span>beberapa testimonial dari client kami</span> 
        </div>
        <div class="landing3_content">
            <div id="carousel">
              <div class="btn-bar">
                <div id="buttons"><a id="prev" href="#"><</a><a id="next" href="#">></a> </div>
              </div>
                <div id="slides">
                    <ul>
                        <li class="slide">
                            <div class="quoteContainer">
                                <p class="quote-phrase"><span class="quote-marks">"</span> Alhamdulillah kemaren sudah selesai acara aqiqahannya, buat rumahaqiqohkamil... Terimakasih atas bantuannya!<class="quote-marks">"</span>

                                </p>
                            </div>
                            <div class="authorContainer">
                                <p class="quote-author">Zunaidi</p>
                            </div>
                        </li>
                        <li class="slide">
                            <div class="quoteContainer">
                                <p class="quote-phrase"><span class="quote-marks">"</span>
                                  Alhamdulillah semoga berkah. Terimakasih rumahaqiqohkamil sudah membantu persiapannya.
                                <span class="quote-marks">"</span>

                                </p>
                            </div>
                            <div class="authorContainer">
                                <p class="quote-author">Yunita</p>
                            </div>
                        </li>
                        <li class="slide">
                            <div class="quoteContainer">
                                <p class="quote-phrase"><span class="quote-marks">"</span>Puas banget dengan rumahaqiqohkamil, lain waktu kita akan pakai lagi jasanya ya..<span class="quote-marks">"</span>

                                </p>
                            </div>
                            <div class="authorContainer">
                                <p class="quote-author">Andika</p>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
    </div>
</section>

@endsection

@section('js')
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
@endsection