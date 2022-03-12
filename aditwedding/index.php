<!DOCTYPE html>
<?php
if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);

    setcookie('nameofcookie', $username, time() + 3600);
    //1hour time limit

    header('Location: index.php');
}
?>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Aditya & Desak Mya | Undangan Online">
        <meta name="author" content="TechnoBaseBali">

        <meta property="og:title" content="Aditya & Desak Mya | Undangan Online">
        <meta property="og:type" content="Website">
        <meta property="og:image" content="https://adit-desakmya.TechnoBaseBali.com/images/gallery/gallery5.jpg">
        <meta property="og:image:alt" content="Undangan Online">
        <meta property="og:url" content="https://adit-desakmya.TechnoBaseBali.com/">
        <meta property="og:site_name" content="TechnoBase Bali">
        <meta property="og:description" content="Kami sangat berharap Bapak/Ibu/Saudara/Saudari berkenan menghadiri acara pernikahan kami. Terima kasih atas perhatian dan waktu yang diberikan. - Aditya & Desak Mya.">

        <title>Aditya dan Desak Mya | Undangan Pernikahan</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">





        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Lightbox -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" sizes="96x96" href="images/background/favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Taviraj:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Numans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">

        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

        <!-- Bootstrap Javascript -->
        <script src="ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    </head>

    <body id="body">


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <!-- Back to top button -->
        <!--<a id="button1"></a> -->

        <!-- Kehadiran Isi -->

        <!-- Tamu Isi -->

        <!-- Tamu Kosong -->
        <div class="modal fade" id="modal_undangan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content">

                    <img class="ornamen4 ornamen-modal" data-aos="fade-up" data-aos-duration="2000" src="images/background/ornamen4.png">

                    <div class="modal-overlay">

                        <div class="modal-body text-center">
                            <h2 class="modal-heading">Undangan Pernikahan & Mepandes</h2>
                            <!--<p><span class="modal-nama" style="color: #ff4150"><b>Aditya & Desak Mya</b></span></p>-->
                            <br>
                            <p>
                                Yth. Bpk/Ibu/Saudara/i <br>
                                <?php
                                error_log(0);
                                error_reporting(0);
                                ini_set('display_errors', 0);
                                $kepada1 = ucwords($_GET['kepada']);
                                $kepada = ucwords(str_replace("_", " ", "$kepada1"));

                                if ($kepada == null || $kepada == '') {
                                    echo 'Tamu Undangan yang Saya Hormati' . '<br>';
                                } else {
                                    echo '<p><span class="modal-nama"><b>' . $kepada . '</b></span></p>';
                                }
                                ?> 


                                Tanpa mengurangi rasa hormat, kami mengundang anda untuk hadir pada acara pernikahan kami.          </p>
                            <br><br>
                            <button type="button" class="btn btn-default btn-modal" id="button-modal" data-dismiss="modal">Buka Undangan</button>
                        </div> <!-- End Modal Body -->

                        <span class="modal-copyright">
                            - 
                            <a href="https://TechnoBaseBali.com/" target="_blank" class="modal-link">TechnoBase Bali</a> -
                        </span>

                    </div> <!-- End Modal Overlay -->

                </div> <!-- End Modal Content -->

            </div>  <!-- End Modal Dialog -->
        </div> <!-- End Modal Fade -->

        <script type="text/javascript">
            $(document).ready(function () {
                $('#modal_undangan').modal('show');
            });
        </script>
        <!-- ========== START CAROUSEL MOBILE ========== -->
        <div id="carousel-example-generic-mobile" class="carousel slide carousel-mobile" data-ride="carousel">   

            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic-mobile" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic-mobile" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">   
                <div class="item bg tbbali active" style="background-image:url('images/slider/slider1.jpg');">
                    <div class="slider-wave"></div>   
                    <div class="container-fluid">
                        <div class="carousel-caption">

                            <!-- Heading -->
                            <div class="slider-heading" data-aos="fade-up" data-aos-duration="2000">
                                Pernikahan Kami
                            </div>

                            <!-- Nama Mempelai -->
                            <div class="slider-nama" data-aos="fade-up" data-aos-duration="2000">
                                Aditya <BR> & <BR> Desak Mya          </div>

                            <!-- Lokasi -->
                            <div class="slider-tempat" data-aos="fade-up" data-aos-duration="2000">DENPASAR | 11 Maret 2022</div>

                            <i class="fa fa-arrow-circle-down" data-aos="fade-up" data-aos-duration="2000" aria-hidden="true"></i>

                        </div>
                    </div>
                </div>

                <div class="item bg tbbali" style="background-image:url('images/slider/slider2.jpg');">
                    <div class="slider-wave"></div>   
                    <div class="container-fluid">
                        <div class="carousel-caption">

                            <!-- Heading -->
                            <div class="slider-heading" data-aos="fade-up" data-aos-duration="2000">
                                Pernikahan Kami
                            </div>

                            <!-- Nama Mempelai -->
                            <div class="slider-nama" data-aos="fade-up" data-aos-duration="2000">
                                Aditya <BR> & <BR> Desak Mya          </div>

                            <!-- Lokasi -->
                            <div class="slider-tempat" data-aos="fade-up" data-aos-duration="2000">DENPASAR | 11 Maret 2022</div>

                            <i class="fa fa-arrow-circle-down" data-aos="fade-up" data-aos-duration="2000" aria-hidden="true"></i>

                        </div>
                    </div>
                </div>


            </div> <!-- END INNER -->

        </div> 
        <!-- ========== END CAROUSEL MOBILE ========== -->


        <!-- ========== START CAROUSEL DESKTOP ========== -->
        <div id="carousel-example-generic-desktop" class="carousel slide carousel-desktop" data-ride="carousel">   

            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic-desktop" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic-desktop" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">   
                <div class="item bg tbbali active" style="background-image:url('images/slider/slider3.jpg');">
                    <div class="slider-wave"></div>   
                    <div class="container-fluid">
                        <div class="carousel-caption">

                            <!-- Heading -->
                            <div class="slider-heading" data-aos="fade-up" data-aos-duration="2000">
                                We Are Getting Married
                            </div>

                            <!-- Nama Mempelai -->
                            <div class="slider-nama" data-aos="fade-up" data-aos-duration="2000">
                                Aditya & Desak Mya          </div>

                            <!-- Lokasi -->
                            <div class="slider-tempat" data-aos="fade-up" data-aos-duration="2000">DENPASAR | 11 Maret 2022</div>

                            <i class="fa fa-arrow-circle-down" data-aos="fade-up" data-aos-duration="2000" aria-hidden="true"></i>

                        </div>
                    </div>
                </div>

                <div class="item bg tbbali" style="background-image:url('images/slider/slider4.jpg');">
                    <div class="slider-wave"></div>   
                    <div class="container-fluid">
                        <div class="carousel-caption">

                            <!-- Heading -->
                            <div class="slider-heading" data-aos="fade-up" data-aos-duration="2000">
                                We Are Getting Married
                            </div>

                            <!-- Nama Mempelai -->
                            <div class="slider-nama" data-aos="fade-up" data-aos-duration="2000">
                                Aditya & Desak Mya          </div>

                            <!-- Lokasi -->
                            <div class="slider-tempat" data-aos="fade-up" data-aos-duration="2000">DENPASAR | 11 Maret 2022</div>

                            <i class="fa fa-arrow-circle-down" data-aos="fade-up" data-aos-duration="2000" aria-hidden="true"></i>

                        </div>
                    </div>
                </div>

            </div> <!-- END INNER -->

        </div> 
        <!-- ========== END CAROUSEL DESKTOP ========== -->  <div class="ornamen" style="position: relative;">

            <img class="ornamen1" data-aos="fade-up" data-aos-duration="2000" src="images/background/ornamen1.png">

            <div class="container">   

                <div class="row mempelai">

                    <div class="col-sm-12">
                        <h1 data-aos="fade-up" data-aos-duration="2000">Om Swastiastu</h1>
                        <p data-aos="fade-up" data-aos-duration="2000">Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa kami bermaksud mengundang Bapak/Ibu/Saudara/i pada Upacara Manusa Yadnya Pawiwahan (Pernikahan) kami.</p>
                        <br><br>
                    </div>

                    <div class="col-sm-6">
                        <div class="mempelai-foto mempelai-foto-pria" data-aos="fade-up" data-aos-duration="2000" style="background: url('images/gallery/pria2.jpg');">
                        </div>

                        <br>
                        <div class="mempelai-nama" data-aos="fade-up" data-aos-duration="2000">Putu Aditya Pranata, SE.</div>
                        <div class="mempelai-detail" data-aos="fade-up" data-aos-duration="2000">
                            Putra Pertama dari pasangan
                            <br> I Made Sunada, SH. dengan Ni Ketut Tunjung Sriningsih, SE. 
                            <br> Br. Bengkel Sumerta Kelod, Denpasar.</div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mempelai-foto mempelai-foto-wanita" data-aos="fade-up" data-aos-duration="2000" style="background: url('images/gallery/wanita2.jpg');">
                        </div>
                        <br>
                        <div class="mempelai-nama" data-aos="fade-up" data-aos-duration="2000">Desak Made Mya Yudia Sari, SE., M.Si.</div>
                        <div class="mempelai-detail" data-aos="fade-up" data-aos-duration="2000">
                            Putri Kedua dari pasangan
                            <br> I Dewa Gede Putra Yustina, SH., MH. dengan Desak Gede Ambara Dewi, SE.
                            <br> Br. Dinas Samsam II, Desa Samsam, Kerambitan, Tabanan</div>



                    </div>
                    <div class="col-sm-12">
                        <h1 data-aos="fade-up" data-aos-duration="2000">Mepandes (Potong Gigi)</h1>
                        <div class="mempelai-foto mempelai-foto-wanita22" data-aos="fade-up" data-aos-duration="2000" style="background: url('images/gallery/wanita3.jpg');">
                        </div>
                        <p data-aos="fade-up" data-aos-duration="2000">
                            <br>

                            <b style="color: #671620">Kadek Rianita Indah Pratiwi, S.IP., M.AP.</b></p>
                        <br><br>
                        <div class="mempelai-foto mempelai-foto-wanita22" data-aos="fade-up" data-aos-duration="2000" style="background: url('images/gallery/wanita4.jpg');">
                        </div>
                        <p data-aos="fade-up" data-aos-duration="2000">
                            <br>

                            <b style="color: #671620">I Putu Deny Eka Putra, S.M</b></p>
                        <br><br>


                        <div class="mempelai-foto mempelai-foto-wanita22" data-aos="fade-up" data-aos-duration="2000" style="background: url('images/gallery/wanita5.jpg');">
                        </div>
                        <p data-aos="fade-up" data-aos-duration="2000">
                            <br>

                            <b style="color: #671620">Ni Made Deas Mutia Ratih</b></p>
                        <br><br>
                    </div>
                </div> <!-- End Row Mempelai -->

            </div> <!-- End Container -->

            <img class="ornamen ornamen2" data-aos="fade-up" data-aos-duration="2000" src="images/background/ornamen2.png">

        </div> <!-- End Ornamen -->  <div class="container">   

            <div class="row countdown">
                <br><br>
                <h1 data-aos="fade-up" data-aos-duration="2000">Hari Bahagia</h1>

                <div class="col-md-12">
                    <div id="countdown" data-aos="fade-up" data-aos-duration="2000"></div>
                </div>

            </div>

        </div>  
        <div class="container-fluid">   

            <div class="row acara">

                <div class="col-md-12 acara-background" style="background: url('images/gallery/gallery5.jpg');">

                    <div class="acara-overlay">

                        <div class="col-md-12">
                            <p data-aos="fade-up" data-aos-duration="2000">
                                Merupakan suatu kehormatan dan kebahagiaan kami apabila Bapak/Ibu/Saudara/i berkenan hadir memberikan doa restu. 
                            </p>
                            <br>
                        </div>

                        <!--                        <div class="col-md-12 akad text-left">
                                                    <div class="acara-heading" data-aos="zoom-in-down">Pawiwahan dan Mepandes</div> 
                                                    <br>
                        
                                                    <div class="acara-detail" data-aos="zoom-in-down">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i> Rabu, 16 Juni 2021 <br>
                                                        <i class="fa fa-clock-o" aria-hidden="true"> </i> 06:00 WITA - 11:00 WITA <br><br>
                                                        <i class="fa fa-road" aria-hidden="true"></i>  Br. Kelodan Desa Punggul Kec. Abiansemal Kab. Badung. </div> 
                                                    <br>
                        
                                                    <a href="https://www.google.com/maps/place/8°30'15.2%22S+115°13'13.5%22E/@-8.5042191,115.2182398,17z/data=!4m5!3m4!1s0x0:0x0!8m2!3d-8.5042191!4d115.2204285?hl=en" target="_blank">
                                                        <button class="btn btn-md btn-default btn-map" data-aos="zoom-in-down">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i> Map Lokasi Acara
                                                        </button>
                                                    </a>
                                                </div>-->

                        <div class="col-md-12 acara-divider" data-aos="fade-up" data-aos-duration="2000"></div>

                        <div class="col-md-12 resepsi text-right">
                            <div class="acara-heading" data-aos="zoom-in-down">Lokasi Acara</div> 
                            <br>

                            <div class="acara-detail" data-aos="zoom-in-down">
                                <i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 11 Maret 2022<br>
                                <i class="fa fa-clock-o" aria-hidden="true"> </i> 12.00 WITA – Selesai <br><br>


                                <i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Hayam Wuruk, Gg. 10, No. 3, Br. Bengkel, Sumerta Kelod, Denpasar.</div> 
                            <br>

                            <div>
                                <a href="https://goo.gl/maps/GmR9SjC414ewTjn89" target="_blank">
                                    <button class="btn btn-md btn-default btn-map" data-aos="zoom-in-down">
                                        <i class="fa fa-road" aria-hidden="true"></i> Map Lokasi Acara
                                    </button>
                                </a>
                            </div>
                            <br>

                            <div>
                                <a href="#" target="">
                                    <button class="btn btn-md btn-default btn-map" data-aos="zoom-in-down" data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="fa fa-gift" aria-hidden="true"></i> Kirim Hadiah
                                    </button>
                                </a>
                            </div>


                            <br>
                            <div>
                                <a href="https://wa.me/6281916225573" target="_blank">
                                    <button class="btn btn-md btn-default btn-map" data-aos="zoom-in-down">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div> 

                </div> 

            </div> 

        </div>   <div class="container">   

            <div class="row doa">

                <div class="col-sm-12">

                    <img class="ornamen3" data-aos="fade-up" data-aos-duration="2000" src="images/background/ornamen3.png">

                    <p data-aos="fade-up" data-aos-duration="2000">
                        Dalam sebuah pernikahan kalian disatukan demi sebuah kebahagiaan dengan janji hati untuk saling membahagiakan. 
                        Bersamaku engkau akan hidup selamanya karena Tuhan pasti akan memberikan karunia sebagai pelindung dan saksi dalam pernikahan ini. 
                        Untuk itulah kalian dipersatukan dalam satu keluarga. 
                        <br><br>

                        <i class="fa fa-book" aria-hidden="true" style="color: #ff4150; font-weight: bold;"></i> 
                        <span style="color: #ff4150; font-style: italic; font-weight: 700;">Rg Veda X.85.36.</span>
                    </p>
                </div>

            </div> 

        </div>   <div class="container">   

            <div class="row covid">

                <div class="col-sm-12 text-center">

                    <h1 data-aos="fade-up" data-aos-duration="2000" style="">Protokol Covid-19</h1>

                    <p data-aos="fade-up" data-aos-duration="2000">
                        Tanpa mengurangi rasa hormat, dikarenakan situasi yang sedang terjadi ditengah Pandemi Covid-19 ini kami memohon maaf karena acara akan diselenggarakan sesuai peraturan dan himbauan pemerintah.
                        <br><br>

                        <img class="banner-covid" src="images/background/covid.png">
                        <br><br>

                        <span style="text-transform: uppercase;">
                            - Memakai Masker <br>
                            - Membersihkan Tangan <br>
                            - Menjaga Jarak <br>
                            - Menjauhi Kerumunan <br>
                            - Membatasi Mobilitas <br><br>
                        </span>

                        <span style="color: #ff4150; font-style: italic; font-weight: 700; font-size: 13px;">Mari Tetap Melaksanakan Protokol Kesehatan.</span>
                    </p>

                </div> 

            </div> 

        </div>   <div class="container">   

            <div class="row photo">

                <h1 data-aos="fade-up" data-aos-duration="2000">Moment Bahagia</h1>

                <div class="col-xs-6 col-sm-4 items ">
                    <a href="images/gallery/gallery1.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery1.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-6 col-sm-4 items">
                    <a href="images/gallery/gallery2.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery2.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-12 col-sm-4 items lanscape">
                    <a href="images/gallery/gallery3.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery3.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-6 col-sm-3 items">
                    <a href="images/gallery/gallery4.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery4.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-6 col-sm-3 items">
                    <a href="images/gallery/gallery5.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery5.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-12 col-sm-3 items lanscape">
                    <a href="images/gallery/gallery6.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery6.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-6 col-sm-3 items">
                    <a href="images/gallery/gallery7.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery7.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>
                <div class="col-xs-6 col-sm-4 items">
                    <a href="images/gallery/gallery2.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery2.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>
                <div class="col-xs-6 col-sm-4 items">
                    <a href="images/gallery/gallery8.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery8.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-6 col-sm-4 items">
                    <a href="images/gallery/gallery9.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery9.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-6 col-sm-4 items">
                    <a href="images/gallery/gallery10.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery10.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>
                <div class="col-xs-6 col-sm-4 items">
                    <a href="images/gallery/gallery11.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery11.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-6 col-sm-4 items">
                    <a href="images/gallery/gallery12.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery12.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

                <div class="col-xs-6 col-sm-4 items">
                    <a href="images/gallery/gallery13.jpg" data-lightbox="photos">
                        <img class="img-fluid" src="images/gallery/gallery13.jpg" data-aos="fade-up" data-aos-duration="2000"></a>
                </div>

            </div>

        </div>  
        <!--                <div class="container-fluid">   
                
                            <div class="row video">
                
                                <h1 data-aos="fade-up" data-aos-duration="2000">Video</h1>
                
                                <div class="col-md-12" data-aos="fade-up" data-aos-duration="2000">
                
                
                                    <iframe width="100%" height="485" controls="" src="https://www.youtube.com/embed/Wc58zZbXHzc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                
                
                                    </iframe>
                
                                    <video width="100%" controls="">
                                        <source src="music/video.mp4" type="video/mp4">
                                         
                                        Your browser does not support HTML5 video.
                                    </video> 
                                </div>
                
                            </div>
                
                        </div>  -->

        <div class="container-fluid" id="rsvp">   

            <div class="row rsvp">

                <div class="col-md-12" data-aos="fade-up" data-aos-duration="2000">
                    <h1 data-aos="fade-up" data-aos-duration="2000">Kehadiran Anda</h1>
                    <p data-aos="fade-up" data-aos-duration="2000">
                        <strong>Konfirmasi kehadiran anda dengan mengisi detail pada form dibawah ini.</strong>
                    </p>

                    <br>
                </div>

                <div class="col-md-3"></div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">

                    <form action="insert.php" method="GET" target="_blank">

                        <div class="form-horizontal" style="display: none;">
                            <label class="control-label col-sm-2" style="text-align: left;">Pengantin & URL</label>
                            <input type="text" name="nama_pengantin" placeholder="Nama pengantin" value="Aditya & Desak Mya" class="form-control">
                            <hr>
                            <input type="text" name="url" placeholder="url" value="https://technobasebali.com/" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Nama Tamu</label>
                            <input type="text" name="namatamu" placeholder="Nama Anda Wajib Diisi" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>Konfirmasi Kehadiran</label>
                            <select name="kehadiran" class="form-control">
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                                <option value="Ragu">Ragu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jumlah Orang</label>
                            <select name="jumlah" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4 (Maksimal)</option>
                            </select>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary btn-rsvp">Kirim</button>
                        </div>

                    </form>


                </div>

                <div class="col-md-3"></div>

            </div>

        </div>  <div class="container">   

            <div class="row komentar">

                <h1 data-aos="fade-up" data-aos-duration="2000">Ucapan Anda Kepada Mempelai</h1>

                <div class="col-md-12" data-aos="fade-up" data-aos-duration="2000">
                    <div id="fb-root"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v10.0&appId=1188258947877802&autoLogAppEvents=1" nonce="1fJbDPEd"></script>

                    <div class="fb-comments" data-href="https://adit-desakmya.technobasebali.com" data-width="" data-numposts="5"></div>

                </div>

            </div>

        </div>


        <div class="container-fluid">   

            <div class="row acara">

                <div class="col-md-12 acara-background" style="background: url('images/gallery/gallery5.jpg');">

                    <div class="acara-overlay">


                        <div class="col-md-12 acara-divider" data-aos="fade-up" data-aos-duration="2000"></div>

                        <div class="col-md-12 resepsi text-center">
                            <div>
                                <a href="#" target="">
                                    <button class="btn btn-md btn-default btn-map" data-aos="zoom-in-down" data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="fa fa-gift" aria-hidden="true"></i> Kirim Hadiah
                                    </button>



                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content2">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" > 

                                                    <div class="container">   

                                                        <div class="row doa">

                                                            <div class="col-sm-12">

                                                                <img  class="ornamen3" data-aos="fade-up" data-aos-duration="2000" src="images/background/ornamen3.png">

                                                                <p data-aos="fade-up" data-aos-duration="2000">
                                                                    Tanpa mengurangi rasa hormat, Bagi yang ingin memberikan Hadiah untuk acara kami, silakan transfer melalui rekening berikut ini 
                                                                    <br>
                                                                    <br>Bank BCA
                                                                    <br>7730542270
                                                                    <br>a.n Putu Aditya Pranata
                                                                    <br><br>Bank BNI
                                                                    <br>1231646942
                                                                    <br>a.n Desak Made Mya Yudia Sari
                                                                    <br>
                                                                    <br>atau Alamat Kami
                                                                    <br><b>Jl. Hayam Wuruk, Gg. 10, No. 3, Br. Bengkel, Sumerta Kelod, Denpasar</b>

                                                                    <br><br>🙏😊 Untuk Konfirmasi Pengiriman Hadiah / Souvenir ke no WA Mempelai terimakasih 😊🙏

                                                                </p>
                                                            </div>

                                                        </div> 

                                                    </div>

                                                    <div>
                                                        <a href="https://wa.me/6281916225573" target="_blank">
                                                            <button class="btn btn-md btn-default btn-map" data-aos="zoom-in-down" >
                                                                <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-md btn-default btn-map" data-dismiss="modal">TUTUP</button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>






                                </a>
                            </div>
                        </div>

                    </div> 

                </div> 

            </div> 

        </div>










        <!-- ========== START MUSIC ========== -->
        <div id="button" class="shadow"><span class="glyphicon glyphicon-music"></span></div>
        <audio id="player">
            <source src='music/song.mp3' type='audio/mpeg'>
        </audio>
        <!-- ========== END MUSIC ========== -->  <div class="container-fluid">   

            <div class="row footer">

                <div class="col-md-12 text-center">
                    - <span style="font-size: 32px;"></span>  Hubungi Kami TechnoBase Bali -
                    <br><hr>
                    <a href="https://wa.me/628562802500"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> |
                    <a href="https://TechnoBaseBali.com/"><i class="fa fa-globe" aria-hidden="true"></i></a> |
                    <a href="https://www.instagram.com/technobasebali"><i class="fa fa-instagram" aria-hidden="true"></i></a> |
                    <a href="https://web.facebook.com/technobasebali"><i class="fa fa-facebook" aria-hidden="true"></i></a> <br><br>
                </div>

            </div>

        </div>
        <script src="protector.js"></script>
        <script src="countdown.js"></script>
        <script src="music.js"></script>
        <script src="jquery.min.js"></script>
        <script src="assetts/js/bootstrap.min.js"></script>
        <script src="aos.js"></script>
        <script src="lightbox.min.js"></script>

    </body>



</html>

