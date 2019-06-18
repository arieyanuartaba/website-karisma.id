@extends('layout.master')

@section('content')
    <div class="top-bar">
        <h1>Harmoni Kami</h1>
        <p><a href="{{url('/tentang')}}">Tentang Kami</a> | <a href="{{url('visimisi')}}">Visi dan Misi</a> | <b style="color: orange"> Nilai Perusahaan</b>
            | <a href="{{url('timkami')}}">Tim Kami </a></p>
    </div>
    <!-- end Top bar -->

    <div class="container center">
        <h2>Nilai Perusahaan</h2>
    </div>
    <div class="no-padding portfolio_container clearfix center">
        <!-- single work -->


        <div class="col-md-5 col-sm-6" style="margin-right: 10px; margin-left: 120px; margin-top: 20px; ">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/excellent.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;"/>
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Kantor karisma</span> -->
                            <em style="font-size: 16px; border-radius: 0;">KUALITAS</em>
                <span style="text-align:center;">
                  Karisma senantiasa berusaha memberikan standar kualitas produk terbaik yang memberikan kepuasan kepada klien.
                </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5 col-sm-6" style="margin-top: 20px;">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/innovative.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;" />
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Suasana kerja</span> -->
                            <em style="font-size: 16px; border-radius: 0;">INNOVATIVE</em>
                          <span style="text-align:center;">
                            Karisma senantiasa melakukan kreasi dan inovasi untuk menciptakan sesuatu yang lebih baik
                          </span>

                            <p></p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5 col-sm-6" style="margin-right: 10px; margin-left: 120px; margin-top: 20px;">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/comprehensive.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;"/>
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Kantor karisma</span> -->
                            <em style="font-size: 16px; border-radius: 0;">KOMPREHENSIF</em>
                <span style="text-align:center;">
                  Karisma senantiasa memberikan daya usaha dan pemikiransecara menyeluruh untuk setiap bidang persoalan yang dihadapi.
                </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5 col-sm-6" style="margin-top: 20px;">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/integrity.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;" />
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Suasana kerja</span> -->
                            <em style="font-size: 16px; border-radius: 0;">INTEGRITY</em>
                          <span style="text-align:center;">
                            Karisma senantiasa berkomitmen untuk selalu memberikan yang terbaik serta melakukan sesuatu yang sesuai dengan nilai-nilai kebaikan baik dengan pengawasan ataupun tidak.
                          </span>

                            <p></p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5 col-sm-6" style="margin-right: 10px; margin-left: 120px; margin-top: 20px;">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/growth.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;"/>
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Kantor karisma</span> -->
                            <em style="font-size: 16px; border-radius: 0;">GROWTH</em>
                <span style="text-align:center;">
                  Karisma senantiasa melakukan perbaikan terus menerus agar terus berkembang.
                </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5 col-sm-6" style="margin-top: 20px;">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/persistence.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;" />
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Suasana kerja</span> -->
                            <em style="font-size: 16px; border-radius: 0;">PERSISTENCE</em>
                          <span style="text-align:center;">
                            Karisma senantiasa menunjukkan sifat disiplin, pantang menyerah dan selalu berupaya mencari jalan keluar dari setiap bidang persoalan yang dihadapi.
                          </span>

                            <p></p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5 col-sm-6" style="margin-right: 10px; margin-left: 120px; margin-top: 20px;">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/harmony.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;"/>
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Kantor karisma</span> -->
                            <em style="font-size: 16px; border-radius: 0;">HARMONY</em>
                <span style="text-align:center;">
                  Karisma senantiasa mewujudkan keselarasan hubungan baik vertikan (Tuhan) maupun horizontal (Investor, sesama karyawan, klien, masyarakat, dan lingkungan).
                </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5 col-sm-6" style="margin-top: 20px;">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/compassionate.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;" />
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Suasana kerja</span> -->
                            <em style="font-size: 16px; border-radius: 0;">COMPASSIONATE</em>
                          <span style="text-align:center;">
                            Karisma senantiasa mendorong hal-hal yang saling menumbuh kembangkan potensi, dan saling memberi masukan/saran yang membangun.
                          </span>

                            <p></p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-5 col-sm-6" style="margin-right: 10px; margin-left: 120px; margin-top: 20px;">
            <a href="single-project.html" class="portfolio_item">
                <img src="{{asset('images/value/prosperous.jpg')}}" alt="image" class="img-responsive" style="width:100%; height: auto;"/>
                <div class="portfolio_item_hover">
                    <div class="portfolio-border clearfix">
                        <div class="item_info">
                            <!-- <span>Kantor karisma</span> -->
                            <em style="font-size: 16px; border-radius: 0;">PROSPEROUS</em>
                <span style="text-align:center;">
                  Karisma mendorong semua stakeholder untuk mendapat kesejahteraan baik materil dan moril.
                </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
@endsection