@extends('template/index')


@section('css')
<style>
    #hero{
        min-height:850px;
        background:url('{{asset('assets/img/BGHero.png')}}');
        background-size:cover;
    }

    #hero .title-area{
        margin-top:200px;
    }
    #hero .title-area p{
        margin-bottom:0px;
    }

    #hero .btn-transparent img{
        display:inline-block;
        margin-right:10px;
        width:40px;
    }

    .quotes{
        min-height:80px;
        padding:50px 10px;
        background: linear-gradient(96.14deg, #0B6259 -10.84%, #20AE3A 196.74%);
    }

    .quotes .clearfix{
        width: 80px;
        height: 0px;
        border: 4px solid #FFCA1D;
        border-radius:6px;
        margin-bottom:10px;
    }

    #program{
        padding:40px 10px;
    }
    #program .title{
        text-align:center;
        width:100%;
        padding:0% 20%
    }


    .box-feature{
        min-height:200px;
        border:1px solid #adaaaa;
        padding:20px 25px;
        border-radius:10px;
    }



    .box-feature .box-title{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 30px;
        color:var(--main);
    }
    .box-feature .box-title span{
        text-align:center;
        margin-top:10px;
        font-size: 40px;
    }
    .box-feature .box-subtitle{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        margin-top:10px;        
        color: #434343;
    }

    .box-feature .box-check span{
        font-size:14px;
        color:#3A8EF6;
    }
    .box-feature .box-check ul{
        margin:0px; 
        padding:0px;
        list-style: none;
    }
    .box-feature .box-check ul li{
        margin-bottom:0px;
    }
    .box-feature .box-check p{
        display:inline-block;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
        width:90%;
        margin-left:10px;
        margin-bottom:4px;
    }

    #description table{
        margin-top:50px;
    }
    #description table td{
        vertical-align:baseline;
    }
    #description table h3{
        font-size:20px;
    }

    #benefit{padding-top:20px;padding-bottom:20px;]}
    #benefit .nav-tabs .active{
        background: linear-gradient(96.14deg, #0B6259 -10.84%, #20AE3A 196.74%);
        color: #FFFFFF;
    }
    #benefit .nav-tabs .active p{color: #FFFFFF;}
    #benefit .nav-tabs .active h3{color: #FFFFFF;}
    #benefit .nav-tabs .active span{color: #FFFFFF;}
    .benefit-poin{
        cursor:pointer;
        width: 255.5px;
        min-height: 100px;
        border-radius: 6.9289px;
        padding:40px 20px;
        margin:10px 20px;        
        background: #FFFFFF;
        box-shadow: 0px 0px 17.3222px 1.73222px rgba(0, 0, 0, 0.1);
    }
    #benefit .benefit-poin:hover{
        background: linear-gradient(96.14deg, #0B6259 -10.84%, #20AE3A 196.74%);
        
    }
    
    #benefit .benefit-poin:hover span{color: #FFFFFF;}
    #benefit .benefit-poin:hover p{color: #FFFFFF;}
    #benefit .benefit-poin:hover h3{color: #FFFFFF;}
    .benefit-poin span{
        font-size:40px;
        color:var(--main);
    }
    .benefit-poin p{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 140%;    
        color:var(--color-p);        
    }
    .benefit-poin h3{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 20.7867px;
        line-height: 140%;   
        color:var(--black);     
    }

    #benefit .accordion-item{
        border:0px;
    }
    #benefit .tab-area-right{
        margin-top:100px;
    }
    #benefit .tab-content{
        margin-top:130px;
    }
    #data-kawasan{
        padding:60px 0px;
    }

    #data-kawasan table{
        width:100%;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 180%;
        letter-spacing: 0.02em;
        color: #6B6B6B;
        margin:50px 0px;
    }
    #data-kawasan .tahun-stats{width:50%;text-align:left;}
    #data-kawasan .value-stats{width:50%;text-align:right;}

    #konsul{background-color:#F8F8F8;}
    #konsul h1{margin-top:100px;}

    #galeri{padding:30px 0px;}
    #galeri .title{width:100%;text-align:center; padding:0% 20%;}
    #galeri .title p{width:100%;text-align:center;}

    #galeri .box-photo{
        width: 100%;
        margin:10px;
        height: 285px;
        background-color:var(--lightgrey);
        border-radius: 24px;
    }
    #galeri .box-photo-lg{
        width: 100%;
        margin:10px;
        height: 580px;
        background-color:var(--lightgrey);
        border-radius: 24px;
    }

    #testimoni{
        margin:30px 0px 30px 0px;
    }
    #testimoni .testi-desc{padding:50px 20px;}
    #testimoni .testi-desc p{font-size:21px;}
    #testimoni .testi-slider{padding:50px 20px;}
    #testimoni .testi-slider img{width:100%;}

    #testimoni .line-grey{
        display:inline-block;
        width: 76.61px;
        height: 0px;
        left: 0px;
        margin-right:20px;
        border: 0.957659px solid #525596;
    }
</style>

@endsection
@section('content')
<section  id="hero">
    <div class="container-xxl">
        <div class="row">
        <div class="col-md-6">
            <div class="title-area">
                <p class="title-cover text-black">Daur Ulang</p>
                <p class="title-cover text-main">Limbah Bekasmu</p>
                <p class="title-cover text-black">Dengan Tepat</p>
                <p class="paragraph mt-4">
                Lingkungan yang baik tercipta dari limbah sampah yang terorganisir dengan baik, Ubah limbah menjadi barang bermanfaat. Mari bergabung bersama BANGUN Lab untuk memulai pelatihan sertifikasi bagaimaimana mengubah limbah menjadi produk eco friendly
                </p>
            </div>
            <br>
            <div>
                <a href="#" class="btn btn-gradient button-title">
                    Daftar Pelatihan
                </a>
                &nbsp;&nbsp;
                <a href="#" class="btn-transparent button-title text-black">
                    <span>
                        <img src="{{asset('assets/img/play-logo.png')}}" alt="">
                    </span>
                     Lihat Video
                </a>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="quotes">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-7">
                <div class="clearfix"></div>
                <h3 class="section-title text-white">
                Kami Telah Bekerja Sama Dengan Perusahaan Eco Green Sekala Nasional
                </h3>
            </div>
            <div class="col-md-5">
                <img src="{{asset('assets/img/partner.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section id="program">
    <div class="container-xxl">
        <div class="title">
            <h3 class="section-subtitle text-main">BANGUN Lab Program</h3>
            <p class="section-paragraph text-p-black">
            BANGUN Lab hadir sebagai pelopor konsep pengelolaan dan produksi UMKM yang mengedepankan nilai ramah lingkungan berbasis laboratorium virtual guna mendukung pembangunan smart city 
            </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box-feature">
                    <div class="box-title row">
                        <div class="col-md-2 text-center">                            
                            <span class="fa-solid fa-bookmark"></span>                            
                        </div>
                        <div class="col-md-8">
                            Penentuan Potensi Kampung
                        </div>
                    </div>
                    <div class="box-subtitle">
                        <p>
                        BANGUN Lab dapat membantu menemukan potensi desa
                        </p>
                    </div>
                    <div class="box-check">
                        <ul>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Analisis masalah utama kampung kumuh</p>
                            </li>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Penentuan potensi sumber daya manusia</p>
                            </li>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Analisis peluang sumber daya sekunder, yaitu limbah rumah tangga</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-feature">
                    <div class="box-title row">
                        <div class="col-md-2 text-center">                            
                            <span class="fa-solid fa-bullseye"></span>                            
                        </div>
                        <div class="col-md-8">
                            Sharing & Mentoring  Usaha
                        </div>
                    </div>
                    <div class="box-subtitle">
                        <p>
                        Perluasan unit aktivitas diwujudkan melalui:
                        </p>
                    </div>
                    <div class="box-check">
                        <ul>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Media berbagi keresahan antar kampung kumuh</p>
                            </li>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Media berbagi keresahan antar kampung kumuh</p>
                            </li>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Pembelajaran perencanaan dan pengembangan usaha</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-feature">
                    <div class="box-title row">
                        <div class="col-md-2 text-center">                            
                            <span class="fa-solid fa-user-group"></span>                            
                        </div>
                        <div class="col-md-8">
                        Uji Coba Produk dan Launching Usaha
                        </div>
                    </div>
                    <div class="box-subtitle">
                        <p>
                        Tahapan akhir dari inkubasi bisnis:
                        </p>
                    </div>
                    <div class="box-check">
                        <ul>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Menguji kelayakan usaha</p>
                            </li>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Pendampingan penjualan kepada pihak ketiga</p>
                            </li>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Pendampingan pemasaran usaha</p>
                            </li>
                            <li>
                                <span class="fa-solid fa-check"></span>
                                <p>Evaluasi performa usaha secara berkala</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<section id="description">
    <br><br>
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-7">
                <h2 class="section-title text-main">
                    Apa itu Inkubasi Bisnis <br> berbasis Virtual Lab ?
                </h2>
                <p class="section-paragraph">
                BANGUN LAB  menjadi laboratorium vritual berbasis website yang berfokus terhadap pengembangan bisnis masyarakat dengan mengutamakan nilai ramah lingkungan atau pengembangan green product. Melalui pemanfaatan limbah rumah tangga di kawasan kumuh, fitur unggulan pada BANGUN LAB adalah media pembelajaran digital yang berguna bagi bisnis masyarakat.
                </p>

                <table>
                    <tr>
                        <td width="50px">
                            <img src="{{asset('assets/img/desc-checklist.png')}}" alt="">
                        </td>
                        <td>
                            <h3 class="section-paragraph">
                            Mentoring langsung oleh para ahli
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td width="50px">
                            <img src="{{asset('assets/img/desc-checklist.png')}}" alt="">
                        </td>
                        <td>
                            <h3 class="section-paragraph">
                            Menyediakan e-learning sebagai proses pengembangan potensi masyarakat 
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td width="50px">
                            <img src="{{asset('assets/img/desc-checklist.png')}}" alt="">
                        </td>
                        <td>
                            <h3 class="section-paragraph">
                            Membantu pengelolaan limbah yang bisa di daur ulang menjadi produk bernilai jual
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td width="50px">
                            <img src="{{asset('assets/img/desc-checklist.png')}}" alt="">
                        </td>
                        <td>
                            <h3 class="section-paragraph">
                            Pendampingan manajemen bisnis secara ekslusif
                            </h3>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-5">
                <img style="width:90%" src="{{asset('assets/img/ilustration1.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section id="benefit">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-6 row">
                    <div class="col-md-5">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="benefit-poin active nav-link" type="button" role="tab" aria-controls="nav-home" aria-selected="true" data-bs-toggle="tab"   data-bs-target="#sharing-kampung">
                                    <span class="fa-solid fa-user-group"></span>
                                    <br> <br>
                                    <h3>Sharing Kampung</h3>
                                    <p>
                                        Masyarakat yang tergabung di Bangun Lab dapat melakukan diskusi interaktif, baik dengan sesama pengguna (user) kawasan kumuh maupun dengan praktisi
                                    </p>
                                </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div class="benefit-poin nav-link" type="button" data-bs-toggle="tab" role="tab" aria-controls="nav-home" aria-selected="false" data-bs-target="#e-learning">
                                    <span class="fa-solid fa-desktop "></span>
                                    <br> <br>
                                    <h3>E Learning</h3>
                                    <p>E-learning akan berisi materi-materi mengenai perencanaan dan pengembangan bisnis. E-learning hadir dengan bentuk video pembelajaran dan kelas online.
                                    </p>
                                </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div class="benefit-poin nav-link" type="button" data-bs-toggle="tab" role="tab" aria-controls="nav-home" aria-selected="false" data-bs-target="#launching">
                                    <span class="fa-solid fa-circle-check"></span>
                                    <br> <br>
                                    <h3>Launching Produk</h3>
                                    <p>Proses launching produk akan diikuti dengan pendampingan pemasaran produk, termasuk dari segi promosi.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 tab-area-right">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="benefit-poin nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-home" aria-selected="false" data-bs-target="#simdig">
                                    <span class="fa-solid fa-computer"></span>
                                    <br> <br>
                                    <h3>Simulasi Digital</h3>
                                    <p>Simulasi secara langsung yang dihadiri oleh pengguna, guna mengukur tingkat kesiapan produk dan kesiapan masyarakat sebagai calon pengusaha.
                                    </p>
                                </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div class="benefit-poin nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-home" aria-selected="false" data-bs-target="#ujicoba">
                                    <span class="fa-solid fa-tag"></span>
                                    <br> <br>
                                    <h3>Uji Coba Produk</h3>
                                    <p>Pengukuran nilai produk sesuai standarisasi kurikulum  agar dapat mencapai sasaran dan tujuan inkubasi bisnis.</p>
                                </div>                            
                            </li>
                        </ul>


                    </div>                
            </div>
            <div class="col-md-6">
                <br><br>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="sharing-kampung" role="tabpanel" aria-labelledby="sharing-kampung-tab">
                        <h3 class="section-title text-main">
                            Inkubator Bisnis Masyarakat Kota kawasan kumuh
                        </h3>
                        <p class="section-paragraph text-p-black">
                        Fokus utama dari Bangun Lab adalah pembentukan bisnis masyarakat kampung. Dengan memanfaatkan laboratorium virtual, konsep ini juga akan menginisiasi terciptanya  “kampung digital” yang mempermudah masyarakat kampung kumuh  menemukan  potensi sumber daya yang ada.  Konsep ini juga bertujuan meningkatkan kesejahteraan masyarakat  kawasan kumuh dari segi lingkungan, sosial, ekonomi, dan kesehatan. Berikut solusi jika kampung anda ingin melakukan transforamasi menjadi kampung digital:
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pemanfaatan Limbah Daur Ulang 
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kawasan Kampun Wisata
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Pelatihan Sumber Daya Manusia
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                    Sistem Kerja Kampung Terstruktur
                                </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="e-learning" role="tabpanel" aria-labelledby="elearning-tab">
                        <h3 class="section-title text-main">
                            E-Learning
                        </h3>
                        <p class="section-paragraph text-p-black">
                        Fokus utama dari Bangun Lab adalah pembentukan bisnis masyarakat kampung. Dengan memanfaatkan laboratorium virtual, konsep ini juga akan menginisiasi terciptanya  “kampung digital” yang mempermudah masyarakat kampung kumuh  menemukan  potensi sumber daya yang ada.  Konsep ini juga bertujuan meningkatkan kesejahteraan masyarakat  kawasan kumuh dari segi lingkungan, sosial, ekonomi, dan kesehatan. Berikut solusi jika kampung anda ingin melakukan transforamasi menjadi kampung digital:
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pemanfaatan Limbah Daur Ulang 
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kawasan Kampun Wisata
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Pelatihan Sumber Daya Manusia
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                    Sistem Kerja Kampung Terstruktur
                                </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="launching" role="tabpanel" aria-labelledby="launching-tab">
                        <h3 class="section-title text-main">
                            Launching Produk
                        </h3>
                        <p class="section-paragraph text-p-black">
                        Fokus utama dari Bangun Lab adalah pembentukan bisnis masyarakat kampung. Dengan memanfaatkan laboratorium virtual, konsep ini juga akan menginisiasi terciptanya  “kampung digital” yang mempermudah masyarakat kampung kumuh  menemukan  potensi sumber daya yang ada.  Konsep ini juga bertujuan meningkatkan kesejahteraan masyarakat  kawasan kumuh dari segi lingkungan, sosial, ekonomi, dan kesehatan. Berikut solusi jika kampung anda ingin melakukan transforamasi menjadi kampung digital:
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pemanfaatan Limbah Daur Ulang 
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kawasan Kampun Wisata
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Pelatihan Sumber Daya Manusia
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                    Sistem Kerja Kampung Terstruktur
                                </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="simdig" role="tabpanel" aria-labelledby="simdig-tab">
                        <h3 class="section-title text-main">
                            Simulasi Usaha
                        </h3>
                        <p class="section-paragraph text-p-black">
                        Fokus utama dari Bangun Lab adalah pembentukan bisnis masyarakat kampung. Dengan memanfaatkan laboratorium virtual, konsep ini juga akan menginisiasi terciptanya  “kampung digital” yang mempermudah masyarakat kampung kumuh  menemukan  potensi sumber daya yang ada.  Konsep ini juga bertujuan meningkatkan kesejahteraan masyarakat  kawasan kumuh dari segi lingkungan, sosial, ekonomi, dan kesehatan. Berikut solusi jika kampung anda ingin melakukan transforamasi menjadi kampung digital:
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pemanfaatan Limbah Daur Ulang 
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kawasan Kampun Wisata
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Pelatihan Sumber Daya Manusia
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                    Sistem Kerja Kampung Terstruktur
                                </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ujicoba" role="tabpanel" aria-labelledby="ujicoba-tab">
                        <h3 class="section-title text-main">
                            Uji Coba Produk
                        </h3>
                        <p class="section-paragraph text-p-black">
                        Fokus utama dari Bangun Lab adalah pembentukan bisnis masyarakat kampung. Dengan memanfaatkan laboratorium virtual, konsep ini juga akan menginisiasi terciptanya  “kampung digital” yang mempermudah masyarakat kampung kumuh  menemukan  potensi sumber daya yang ada.  Konsep ini juga bertujuan meningkatkan kesejahteraan masyarakat  kawasan kumuh dari segi lingkungan, sosial, ekonomi, dan kesehatan. Berikut solusi jika kampung anda ingin melakukan transforamasi menjadi kampung digital:
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pemanfaatan Limbah Daur Ulang 
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kawasan Kampun Wisata
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Pelatihan Sumber Daya Manusia
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-black text-strong" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                    Sistem Kerja Kampung Terstruktur
                                </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="data-kawasan">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-5">
                <img src="{{asset('assets/img/stats.svg')}}" alt="">
            </div>
            <div class="col-md-7">
                <h1 class="section-title text-main">Data Kawasan Kota Kumuh</h1>
                <p class="section-paragraph text-p-black">
                    Persentase Rumah Tangga Kumuh Perkotaan (40% ke bawah), Menurut Provinsi (Persen) sebagai berikut:
                </p>

                <table>
                    <tr>
                        <td class="tahun-stats">Tahun 2017</td>
                        <td class="value-stats">7.62%</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>                
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="tahun-stats">Tahun 2018</td>
                        <td class="value-stats">7.42%</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>                
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="tahun-stats">Tahun 2019</td>
                        <td class="value-stats">13.86%</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>                
                        </td>
                    </tr>
                    <tr>
                        <td class="tahun-stats"> <br> Sumber : bps.go.id</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="konsul">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-5 text-center">
                <img src="{{asset('assets/img/girl1.png')}}" width="80%" alt="">
            </div>
            <div class="col-md-7">
                <h1 class="section-title text-main">Konsultasikan dengan Kami</h1>
                <p class="section-paragraph text-p-paragraph">
                    Kampung Anda tergolong ke dalam kawasan kumuh? Ingin menuntaskan masalah, tapi bingung akan solusinya?  
                    <br><br>
                    Mari bergabung dengan BANGUN LAB dan wujudkan transformasi kampung digital!
                </p>
                <br>
                <a href="" class="btn-gradient button-title">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<section id="galeri">
    <div class="container-xxl">
        <div class="row">
            <div class="title">
                <h3 class="section-subtitle text-main">Galeri Pelatihan</h3>
                <p class="section-paragraph text-p-black">
                Setiap pelatihan yang dilakukan oleh Bangun Lab selalu diabadikan sebagai bentuk dokumentasi, sekaligus membantu pengguna memahami produk-produk yang dihasilkan
                </p>
            </div>
        </div>
        <div class="row swiper" id="mySwiper">
            <div class="col-md-12 swiper-wrapper">
                <div class="row swiper-slide p-0">               
                    <div class="col-md-12 row">            
                        <div class="col-md-4">
                            <div class="box-photo"></div>
                            <div class="box-photo"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-photo-lg"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-photo"></div>
                            <div class="box-photo"></div>
                        </div>                
                    </div>
                </div>
                <div class="row swiper-slide p-0">                
                    <div class="col-md-12 row">            
                        <div class="col-md-4">
                            <div class="box-photo"></div>
                            <div class="box-photo"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-photo-lg"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-photo"></div>
                            <div class="box-photo"></div>
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimoni">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-6 testi-desc">
                <p><div class="line-grey"></div> TESTIMONIAL</p>
                <h3 class="section-title text-main">Kata UMKM untuk <br> BANGUN Lab</h3>
                
                <p class="section-paragraph text-p-black">
                    "Materi yang diajarkan oleh BANGUN LAB pada video pembelajaran dan kelas online sangat mudah dipahami dan sesuai dengan kebutuhan kami, terutama di bidang pengembangan usaha.
                </p>
            </div>
            <div class="col-md-6 testi-slider">
                <center>
                    <img src="{{asset('assets/img/testi-image.png')}}" alt="">
                </center>          
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script type="text/javascript">
    $(".benefit-poin").click(function(){
        $(".benefit-poin").removeClass('active');
        $(this).addClass('active');
    });

    const swiper = new Swiper('#mySwiper', {
  // Optional parameters
    direction: 'horizontal',
    spaceBetween:70,
    pagination: {
        el: '.swiper-pagination',
    },
    autoplay: {
        delay: 1000,
    },


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    });
</script>
@endsection