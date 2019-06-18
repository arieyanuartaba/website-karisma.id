@extends('layout.master')

@section('content')
    <div>
        <!-- box-intro -->
        <section class="box-intro">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="{{asset('images/'.$slider1->image)}}" alt="Lingkungan" style="width:100%;">
                        <div>
                            <h1 id="message_header">{{$slider1->header}}</h1>
                            <h3 id="message_text_detail" style="">
                                {{$slider1->subheader}}
                            </h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('images/'.$slider2->image)}}" alt="Dewan Komisaris" style="width:100%;">
                        <div>
                            <h1 id="message_header">{{$slider2->header}}</h1>
                            <h3 id="message_text_detail" style="">
                                {{$slider2->subheader}}
                            </h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('images/'.$slider3->image)}}" alt="Tim Kerja" style="width:100%;">
                        <div>
                            <h1 id="message_header">{{$slider3->header}}</h1>
                            <h3 id="message_text_detail" style="">
                                {{$slider3->subheader}}
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row" style="background: black; height: 100px">
                <div class="col-md-6">
                    <h5 style="color: white; font-weight: bold;  font-size: 18px; text-align: left; margin-left: 150px; margin-top: 20px">Kami ada untuk menjadi solusi Anda </h5>
                    <h4 style="color: white; font-weight: 300; font-size: 16px; text-align: left; margin-left: 150px">Ketahui lebih jauh mengenai KARISMA Inc.</h4>
                </div>
                <div class="col-md-6">
                    <br style="margin-top: 10px;">
                    <a href="#"  id="tombol-kembali" style="padding: 10px; margin-right: 10px;">Hubungi Kami</a>
                    <a href="{{url('/group/PT. Kartika Pradiptaprisma')}}"  id="tombol-kembali" style="padding: 10px">Produk Karisma.Inc</a>

                </div>
            </div>
        </section>
        <!-- end box-intro -->



        <div class="what-we-do" >
            <section style="background-color: black;" id="test">
                <div class="container" >
                    <h3 style="color:black; text-align: center">OUR GROUP</h3><br>
                    <div class="row">

                        <div class="col-md-1">

                        </div>

                        <div class="col-md-2">
                            <a href="#kartika" class="tablinks" onclick="openCity(event, 'Kartika')">
                                <img class="rounded-circle center" src="{{asset('images/logo/kartika.png')}}"
                                     alt="logo kartika" width="170" height="170"
                                     style="margin: auto; display: block;  border-radius: 10%;">
                            </a>
                            <div class="titleAnimation" style="text-align:center">
                                <!-- PT. Kartika Pradiptaprisma -->
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="#karina" class="tablinks" onclick="openCity(event, 'Karina')">
                                <img class="rounded-circle" src="{{asset('images/logo/karina.png')}}"
                                     alt="logo karina" width="170" height="170"
                                     style="margin: auto; display: block;   border-radius: 10%;">
                            </a>
                            <div class="titleAnimation" style="text-align:center">
                                <!-- PT. Kartika Inova Graha -->
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="#nimas" class="tablinks" onclick="openCity(event, 'Nimas')">
                                <img class="rounded-circle" src="{{asset('images/logo/arthanimas.png')}}"
                                     alt="logo arthanimas" width="170" height="170"
                                     style="margin: auto; display: block;   border-radius: 10%;">
                            </a>
                            <div class="titleAnimation" style="text-align:center;">
                                <!-- PT. Arthanimas -->
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="#kreasi" class="tablinks" onclick="openCity(event, 'Kreasi')">
                                <img class="rounded-circle" src="{{asset('images/logo/kreasi.png')}}"
                                     alt="logo kreasi" width="170" height="170"
                                     style="margin: auto; display: block;  border-radius: 10%;">
                            </a>
                            <div class="titleAnimation" style="text-align:center">
                                <!-- PT. Parama Vidya Kreasi -->
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="#waskita" class="tablinks" onclick="openCity(event, 'Waskita')">
                                <img class="rounded-circle" src="{{asset('images/logo/waskita.png')}}"
                                     alt="logo waskita" width="170" height="170"
                                     style="margin: auto; display: block;  border-radius: 10%;">
                            </a>
                            <div class="titleAnimation" style="text-align:center;" >
                                <!-- Waskita Dian Persada -->
                            </div>
                        </div>
                        <div class="col-md 1">

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-10">
                            <div id="Kartika" class="tabcontent">
                                <h3>PT. Kartika Pradiptaprisma</h3>
                                <p style="color: black">
                                    Perusahaan yang fokus dalam industri konsultan dan berpengalaman selama kurang lebih hampir 30 tahun
                                    dalam berbagai bidang khususnya berkaitan dalam pengelolaan lingkungan, manajemen organisasi,
                                    dan manajemen infrastruktur.
                                </p>
                                <ul style="list-style: none; padding-left: 0; color: black">
                                    <li>
                                        <i class="glyphicon glyphicon-star-empty"></i> 30 Tahun Pengalaman
                                    </li>
                                    <li>
                                        <i class="glyphicon glyphicon-star-empty"></i> Narasumber Internal yang berpengalaman dalam dan luar negeri                                             </li>
                                    <li>
                                        <i class="glyphicon glyphicon-star-empty"></i> Didukung dengan Tenaga Ahli yang Kompeten dan Berkualitas
                                    </li>
                                    <li>
                                        <i class="glyphicon glyphicon-star-empty"></i> Bekerjasama dengan Universitas ternama di Indonesia
                                    </li>
                                    <li>
                                        <i class="glyphicon glyphicon-star-empty"></i> Memiliki proses pekerjaan yang transparant
                                    </li>
                                    <li>
                                        <i class="glyphicon glyphicon-star-empty"></i> Bertanggungjawab terhadap output yang berkualitas
                                    </li>
                                </ul>
                            </div>

                            <div id="Karina" class="tabcontent">
                                <h3>PT. Kartika Inova Graha</h3>
                                <p style="color: black">
                                    Perusahaan yang fokus pada inovasi transformasi limbah menjadi sumberdaya alternative
                                    seperti briket energi dan bahan bangunan.
                                    Perusahaan percaya bahwa limbah dapat dikelola dan diolah menjadi sesuatu yang bermanfaat dan bernilai ekonomi.
                                </p>
                            </div>

                            <div id="Nimas" class="tabcontent">
                                <h3>PT. Arthanimas</h3>
                                <p style="color: black">
                                    Perusahaan yang bergerak di bidang pertanian dan pengolahan hasil-hasil
                                    pertanian dengan inovasi teknologi untuk meningkatkan nilai tambah produk.
                                </p>
                            </div>

                            <div id="Kreasi" class="tabcontent">
                                <h3>PT. Parama Vidya Kreasi</h3>
                                <p style="color: black">
                                    Perusahaan yang yang fokus pada bisnis dalam pengelolaan MICE (Meeting, Incentive, Conference, dan Exihibition),
                                    tour dan travel, dan training centre.
                                </p>
                            </div>

                            <div id="Waskita" class="tabcontent">
                                <h3>Yayasan Waskita Dian Persada</h3>
                                <p style="color: black">
                                    Yayasan ini fokus pada pengembangan masyarakat bersumberdaya melalui berbagai kegiatan dan kolaborasi dengan berbagai pihak.
                                    Saat ini sedang menggagas dan menginisiasi Desa mandiri.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                </div>
                <br>
                <br>
            </section>
        </div>
        <!-- end of our group -->

        <div class="row" style="margin-bottom: 30px;">
            <section>

                <div class="col-sm-5 col-md-4">
                    <img src="{{asset('images/13.jpg')}}" class="img-responsive" width="500px" height="auto" style="margin-top: 60px; margin-left:100px; margin-right: 30px;">
                </div>

                <div class="col-sm-5 col-sm-offset-2 col-md-7 col-md-offset-1">
                    <h3> Sekilas Mengenai Karisma </h3>

                    <p style="color: black; margin-right: 50px;">
                        Karisma Inc. merupakan grup bisnis yang manaungi beberapa bidang industri yaitu industri <b>konsultan,
                            pengelolaan limbah, agrobisnis, event organizer, dan pemberdayaan masyarakat.</b> <br> <br>

                        Dalam keberjalanannya, Karisma Inc. selalu mengedepankan prinsip industri hijau dalam pengembangan bisnisnya
                        dengan mengutamakan upaya efisiensi dan efektivitas penggunaan sumber daya secara berkelanjutan sehingga mampu
                        menyelaraskan pembangunan Industri dengan kelestarian fungsi lingkungan hidup serta dapat memberikan manfaat
                        bagi masyarakat. <br> <br>

                        Karisma Inc. memulai bisnis pertamanya dalam industri konsultan sejak tahun 1988 dengan didirikannya
                        PT. Kartika Pradiptaprisma. Dalam keberjalanannya, kartika mengembangkan berbagai riset dan inovasi
                        terutama yang berkaitan dengan pengelolan dan pengolahan sampah.
                    </p>
                    <small><a href="{{url('/tentang')}}"><ion-icon name="add-circle-outline"></ion-icon> baca lebih lanjut </a></small>
                </div>

            </section>

        </div>

        <div class="row" id="backcount">
            <h3 style="text-align: center; color: black;"> Karisma dalam angka </h3>
            <section style="margin-top: 30px; margin-bottom: 140px;">
                <div class="col-md-2">

                </div>
                <div class="col-md-2 center" >
                    <div id="shiva" style="margin: auto"><span class="count" style="margin-left: 30px;"> 30</span></div>
                    <h5 style="text-align: center; color: black">tahun pengalaman dalam  bidang jasa konsultan</h5>
                </div>
                <div class="col-md-2 center">
                    <div id="shiva" style="margin: auto"><span class="count" style="margin-left: 10px;">110</span></div>
                    <h5 style="text-align: center; color: black">project yang telah kami selesaikan</h5>
                </div>
                <div class="col-md-2 center">
                    <div id="shiva" style="margin: auto"><span class="count" style="margin-left: 10px;">38</span></div>
                    <h5 style="text-align: center; color: black">lembaga/organisasi telah menggunakan jasa kami</h5>
                </div>
                <div class="col-md-2 center">
                    <div id="shiva" style="margin: auto"><span class="count" style="margin-left: 2px;">5</span></div>
                    <h5 style="text-align: center; color: black">unit usaha telah dibentuk</h5>
                </div>
                <div class="col-md-2">

                </div>
                <br>
                <br>
            </section>
        </div>


        <!-- portfolio div -->
        <div class="portfolio-div" style="background-color: black;">
            <h3 style="text-align: center; padding-top: 20px; color: white; margin: 0;">Our Picture</h3><br>
            <div class="portfolio">
                <div class="no-padding portfolio_container">
                    <!-- single work -->
                    <div class="col-md-3 col-sm-6  fashion logo">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/01.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Kantor karisma</span>
                                        <em>Karisma / Management</em>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/konsultan_2.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Diskusi dengan Klien</span>
                                        <em>Kartika / Konsultan</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-3 col-sm-6 ads graphics">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/3.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Suasana kerja</span>
                                        <em>Karisma / Management</em>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/konsultan_5.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Expose hasil pekerjaan</span>
                                        <em>Kartika / Konsultan</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-6 col-sm-12 photography">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/konsultan_1.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Pemaparan hasil pekerjaan</span>
                                        <em>Kartika / Konsultan</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->


                    <!-- single work -->
                    <div class="col-md-6 col-sm-12 photography">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/sampah_1.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Pengamatan materi sampah</span>
                                        <em>Karina / Inovasi Sampah</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-3 col-sm-6 graphics ads">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/sampah_3.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Bricket hasil transformasi sampah</span>
                                        <em>Karina / Inovasi Sampah</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-3 col-sm-6 graphics ads">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/16.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Experiment pembangunan rumah</span>
                                        <em>Karina / Inovasi Sampah</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-3 col-sm-6 graphics ads">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/udang_1.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Experiment Udang Vanamei</span>
                                        <em>Arthanimas / Inovasi Tambak</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-3 col-sm-6 graphics ads">
                        <a href="#" class="portfolio_item">
                            <img src="{{asset('images/selection/udang_2.jpg')}}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Hasil panen udang vanamei</span>
                                        <em>Arthanimas / Inovasi Tambak</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->
                </div>
                <!-- end portfolio_container -->
            </div>
            <!-- portfolio -->

            <br>
            <br>
            <br>


        </div>
        <!-- end portfolio div -->




        <div class="row">
            <div class="col-md-12">
                <h3 style="text-align: center;">Our Partner</h3>
            </div>

            <div class="col-md-1">

            </div>
            <div class="col-md-10">
                <div class="owl-carousel owl-theme">
                    <div style="width: 140px; height: auto; margin: auto;">
                        <a href="https://www.kemendagri.go.id" target="_blank"> <img src="{{asset('images/logo/logo_dn.png')}}"></a>
                    </div>
                    <div style="width: 150px; height: auto; margin: auto;">
                        <a href="https://www.menlhk.go.id" target="_blank"> <img src="{{asset('images/logo/logo_lh.jpg')}}"> </a>
                    </div>
                    <div style="width: 150px; height: auto; margin: auto;">
                        <a href="https://www.kemenpar.go.id" target="_blank"> <img src="{{asset('images/logo/logo_par.jpg')}}"></a>
                    </div>
                    <div style="width: 150px; height: auto; margin: auto;">
                        <a href="https://www.kemenperin.go.id" target="_blank"> <img src="{{asset('images/logo/logo_pdgn.jpg')}}"></a>
                    </div>
                    <div style="width: 150px; height: auto; margin: auto;">
                        <img src="{{asset('images/logo/logo_pr.png')}}">
                    </div>
                    <div style="width: 150px; height: auto; margin: auto;">
                        <a href="https://www.pu.go.id" target="_blank"> <img src="{{asset('images/logo/logo_pu.jpg')}}"></a>
                    </div>
                    <div style="width: 150px; height: auto; margin: auto;">
                        <a href="https://www.bnpb.go.id" target="_blank"> <img src="{{asset('images/logo/bnpb.png')}}"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>

        <div class="row" style="background-color: black">
            <h3 style="text-align: center; color: white">Office Address</h3><br>
            <div class="col-md-6" style="text-align: right; margin-top: 145px; color: white">
                <!-- <div style="width: 500px; height: auto; margin-top: 100px; margin-left: 250px; text-align: right"> -->
                <h4> <i class="glyphicon glyphicon-pushpin"></i> Alamat: Jalan Babakan Jeruk 2 No.11, Bandung, Jawa Barat, Indonesia </h4>
                <br>
                <h4> <i class="glyphicon glyphicon-phone-alt"></i> Telepon: 022-2013146 | Fax: 022-2016074</h4>
                <br>
                <h4><i class="glyphicon glyphicon-envelope"></i> Email: info@karisma.id</h4>
                <!-- </div>    -->
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2484669037283!2d107.58258372919806!3d-6.89133584968876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e67cfcd63571%3A0xfae1686939674b85!2sKartika+Pradiptaprisma.+PT!5e0!3m2!1sid!2sid!4v1543805991888" width="750" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </div>
@endsection