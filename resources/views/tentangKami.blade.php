@extends('layout/master')

@section('content')
    <div class="top-bar">
        <h1>Harmoni Kami</h1>
        <p><b style="color: orange"> Tentang Kami </b> | <a href="{{url('/visimisi')}}">Visi dan Misi</a> | <a href="{{url('/nilaiperusahaan')}}"> Nilai Perusahaan
            </a> | <a href="{{url('/timkami')}}">Tim Kami </a></p>
    </div>

    <div class="container main-container clearfix">
        <div class="col-md-6">
            <img src="{{asset('images/13.jpg')}}" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6">
            <h3 class="uppercase">Tentang Kami </h3>
            <h5>Kualitas adalah yang terdepan</h5>
            <div class="h-30"></div>
            <p>Karisma Inc. merupakan grup bisnis yang manaungi beberapa bidang industri yaitu industri konsultan, pengelolaan limbah, agrobisnis, event organizer, dan pemberdayaan masyarakat.  </p>

            <p>Dalam keberjalanannya, Karisma Inc. selalu mengedepankan prinsip industri hijau dalam pengembangan bisnisnya dengan mengutamakan upaya efisiensi dan efektivitas penggunaan sumber daya secara berkelanjutan sehingga mampu menyelaraskan pembangunan Industri dengan kelestarian fungsi lingkungan hidup serta dapat memberikan manfaat bagi masyarakat.  </p>

            <p>Karisma Inc. memulai bisnis pertamanya dalam industri konsultan sejak tahun 1988 dengan didirikannya PT. Kartika Pradiptaprisma. Dalam keberjalanannya, kartika mengembangkan berbagai riset dan inovasi terutama yang berkaitan dengan pengelolan dan pengolahan sampah. Di tahun 90-an, pendiri Karisma Inc. Ir. Budi Listyawan, IPU menemukan inovasi pengolahan sampah menjadi pupuk melalui metode vermifikasi atau menggunakan cacing sebagai sumber daya utama. Melalui penemuan ini, bisnis mulai dikembangkan kearah agroindustri, inilai yang menjadi cikal bakal pembentukan PT. Arthanimas. </p>

            <p>Dalam keberjalanannya, riset dan penelitian lainnya dalam pengolahan sampah terus dilakukan dengan mengajak orang-orang ahli lainnya dan membentuk the centre of excellent. Penelitian terus dilakukan, dan akhirnya berhasil menemukan pengolahan sampah menjadi briket dan batu bata. Hal ini akhirnya mendorong pembentukan perusahaan baru yaitu PT. Kartika Inova Graha. </p>

            <p>Seiring berjalannya waktu, peluang bisnis dalam industri konsultan membuka peluang usaha baru untuk masuk ke dalam usaha pengelolaan kegiatan (event organizer) yang kemudian munculah PT. Parama Vidya kreasi. Dalam rangka mendukung peningkatan kesejahteraan bersama, Karisma Inc. memiliki Yayasan Waskita Dian Persada yang bergerak dalam peningkatan kualitas kehidupan dan penghidupan masyarakat. </p>
            <div class="h-10"></div>
            <ul class="social-ul">
                <li class="box-social"><a href="#0"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="box-social"><a href="#0"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li class="box-social"><a href="#0"><ion-icon name="logo-twitter"></ion-icon></a></li>

            </ul>


        </div>
    </div>
@endsection