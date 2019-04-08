<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Sistem Pendukung Keputusan - SAW</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header id="header">
</header><!-- #header -->

<!-- start banner Area -->
<section class="relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-10">
                <h1 class="text-white">
                    Simple Additive Weighting
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start Sample Area -->
<section class="sample-text-area">
    <div class="container">
        <h3 class="text-heading">Studi Kasus</h3>
        <p class="sample-text">
            Seorang Web Developer; <br/>
            <b>Harga harus Murah;</b> <br/>
            Tidak memperdulikan Spec; <br/>
            yang penting kuat untuk pemakaian Tool seperti: <b>JAVA, APACHE, MySQL;</b>
        </p>
    </div>
</section>
<!-- End Sample Area -->

<div class="whole-wrap">
    <div class="container">

        <div class="section-top-border">
            <form action="proses.php" method="post">
<!--            <h3 class="mb-30">Studi Kasus</h3>-->
            <div class="progress-table-wrap">
                <div class="progress-table">

                    <div class="table-head">
                        <div class="serial"></div>
                        <div class="percentage">Bobot</div>
                        <div class="percentage"><input type="number" step="0.1" name="speed_processor" id="speed_processor" placeholder="0.0"onfocus="this.placeholder=''" required class="single-input">
                               </div>
                        <div class="percentage"><input type="number" step="0.1" name="vga" id="vga" placeholder="0.0" onfocus="this.placeholder=''" required class="single-input">
                               </div>
                        <div class="percentage"><input type="number" step="0.1" name="layar" id="layar" placeholder="0.0" onfocus="this.placeholder=''" required class="single-input">
                               </div>
                        <div class="percentage">
                            <input type="number" step="0.1" name="ram" id="ram" placeholder="0.0"
                                   onfocus="this.placeholder=''" required class="single-input">
                            </div>
                        <div class="percentage">
                            <input type="number" step="0.1" name="jenis_hardisk" id="jenis_hardisk" placeholder="0.0"
                                   onfocus="this.placeholder=''" required class="single-input">
                            </div>
                        <div class="percentage">
                            <input type="number" step="0.1" name="harga" id="harga" placeholder="0.0"
                                   onfocus="this.placeholder=''" required class="single-input">
                            </div>
                    </div>

                    <div class="table-head">
                        <div class="serial">No.</div>
                        <div class="percentage">Merek</div>
                        <div class="percentage">Speed Processor</div>
                        <div class="percentage">VGA</div>
                        <div class="percentage">Layar</div>
                        <div class="percentage">RAM</div>
                        <div class="percentage">Jenis HD</div>
                        <div class="percentage">Harga</div>
                    </div>
                    <div class="table-row ">
                        <div class="serial">1</div>
                        <div class="percentage">Asus A455LA-WX667D</div>
                        <div class="percentage">2.0 GHz</div>
                        <div class="percentage">Intel HD Graphics 4400</div>
                        <div class="percentage">14"</div>
                        <div class="percentage">4 GB</div>
                        <div class="percentage">Standard</div>
                        <div class="percentage ">Rp 4.990.000</div>
                    </div>
                    <div class="table-row">
                        <div class="serial">2</div>
                        <div class="percentage">Asus X441UV I3-6006</div>
                        <div class="percentage">2 - 3 GHz</div>
                        <div class="percentage">NVIDIA GT920 2GB</div>
                        <div class="percentage">14"</div>
                        <div class="percentage">8 GB</div>
                        <div class="percentage">Standard</div>
                        <div class="percentage">Rp 5.949.000</div>
                    </div>
                    <div class="table-row">
                        <div class="serial">3</div>
                        <div class="percentage">Asus VIVOBOOK S15 S510UQ</div>
                        <div class="percentage">2.5 - 3.1 GHz</div>
                        <div class="percentage">NVIDIA GeForce GT940MX 2GB DDR5</div>
                        <div class="percentage">15.6"</div>
                        <div class="percentage">4 GB</div>
                        <div class="percentage">SSD</div>
                        <div class="percentage">Rp 9.499.000</div>
                    </div>
                    <div class="table-row">
                        <div class="serial">4</div>
                        <div class="percentage">Asus VIVOBOOK S15 S510UQ</div>
                        <div class="percentage">2.5 - 3.1 GHz</div>
                        <div class="percentage">HD Graphics 620</div>
                        <div class="percentage">15.6"</div>
                        <div class="percentage">4 GB</div>
                        <div class="percentage">Standard</div>
                        <div class="percentage">Rp 9.499.000</div>
                    </div>
                    <div class="table-row">
                        <div class="serial">5</div>
                        <div class="percentage">Asus Zenbook UX410UQ-GV090T</div>
                        <div class="percentage">2 - 3 GHz</div>
                        <div class="percentage">NVIDIA GeForce 940MX 2GB</div>
                        <div class="percentage">14"</div>
                        <div class="percentage">8GB DDR4 2133MHz</div>
                        <div class="percentage">Standard + SSD</div>
                        <div class="percentage">Rp 14.599.000</div>
                    </div>
                    <div class="table-head">
                        <div class="serial"></div>
                        <div class="percentage">Min(0) / Max(1)</div>
                        <div class="percentage">
                            <input type="number" step="0" name="speed_processorB" id="speed_processorB" placeholder="0.0"onfocus="this.placeholder=''" required class="single-input">
                               </div>
                        <div class="percentage">
                            <input type="number" step="0" name="vgaB" id="vgaB" placeholder="0.0" onfocus="this.placeholder=''" required class="single-input">
                               </div>
                        <div class="percentage">
                            <input type="number" step="0" name="layarB" id="layarB" placeholder="0.0" onfocus="this.placeholder=''" required class="single-input">
                               </div>
                        <div class="percentage">
                            <input type="number" step="0" name="ramB" id="ramB" placeholder="0.0"
                                   onfocus="this.placeholder=''" required class="single-input">
                            </div>
                        <div class="percentage">
                            <input type="number" step="0" name="jenis_hardiskB" id="jenis_hardiskB" placeholder="0.0"
                                   onfocus="this.placeholder=''" required class="single-input">
                            </div>
                        <div class="percentage">
                            <input type="number" step="0" name="hargaB" id="hargaB" placeholder="0.0"
                                   onfocus="this.placeholder=''" required class="single-input">
                            </div>
                    </div>
                </div>
            </div>
                        <div class="mt-10 pull-right">
                            <input type="submit" class="genric-btn primary circle arrow">
                        </div>
        </form>
        </div>
     </div>
</div>



<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.tabs.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/simple-skillbar.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
</body>
</html>