<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/stylevideo.css') ?>">


    <title>BRAND DIGITAL | PRODUCT</title>


</head>

<body>
    <!-- START NAV -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/img/Icon ionic-logo-buffer.png') ?>">
                LOGO BRAND

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">


                <div class="navbar-nav navhover ml-auto">

                    <a style="color: white;" class=" nav-link active" href="<?= base_url() ?>#product">PRODUCTS <span class="sr-only">(current)</span></a>
                    <a style="color: white;" class="nav-item nav-link" href="#">CLIENT</a>
                    <a style="color: white;" class="nav-item nav-link" href="#">CONTACT</a>

                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

    <!-- START SLIDER -->
    <section class="slider">

        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1><?php echo $product->nama_p; ?></h1>
                </div>
            </div>

            <div class="row  detail justify-content-center text-center">
                <div class="col ">
                    <p>Jenis Product</p>
                    <h4><?php echo $product->namajp; ?></h4>
                </div>



                <div class="col">
                    <p>Support Konsultasi</p>
                    <i class="fas fa-check-circle"></i>
                </div>

            </div>

        </div>

    </section>

    <!-- END SLIDER -->
    <!-- START DEMO VIDEO -->

    <section class="demo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div id="videoContainer">
                        <div class="overlay">
                            <div class="button"></div>
                        </div>
                        <div id="video">

                            <video src="<?php echo $product->url_video; ?>">
                            </video>




                        </div>
                        <div id="controls">
                            <div class="playButton">
                                <div class="playPause"></div>
                            </div>
                            <div class="ProgressContainer">
                                <div class="timer intialTime"> 00:00 </div>
                                <div class="progressBar">
                                    <div class="progress"></div>
                                </div>
                                <div class="time"> 00:00 </div>
                                <div class="timer fullTime"> 00:00 </div>
                            </div>
                            <div class="volume">
                                <div class="icon"></div>
                                <div class="intensityBar">
                                    <div class="intensity"></div>
                                </div>
                            </div>
                            <div class="scale">
                                <div class="icon"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col hape">
                    <a href="<?php echo base_url('welcome/checkout/') . $product->idp ?>">
                        <button type="button" class="btn btn-warning">DOWNLOAD NOW</button>
                    </a>
                    <hr>
                    <span class="badge badge-success">Terjual 9</span> <i class="fas fa-gift"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- ENDDEMO VIDEO -->

    <!-- START TENTANG PRODUK -->
    <section class="tentang">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Tentang Product</h1>
                </div>
            </div>

            <div class="row">
                <div class="col kalimat">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>

                <div class="col tools">
                    <h1>Fitur Aplikasi</h1>
                    <hr>
                    <div class="row">
                        <div class="col item">
                            <i class="fas fa-stethoscope fa-3x"></i>
                            <div class="keterangan">
                                <h2>KONSULTASI</h2>
                                <p class="small">Konsultasi Gejala</p>
                            </div>
                        </div>

                        <div class="col item">
                            <i class="fas fa-diagnoses fa-3x"></i>
                            <div class="keterangan">
                                <h2>DIAGNOSA</h2>
                                <p class="small">Diagnosa Hasil Konsultasi</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h1>Tools</h1>
                    <div class="row">
                        <div class="col item">
                            <img src="<?= base_url('assets/') ?>img/upload/icon/Image 1.png" alt="">
                            <div class="keterangan">
                                <h2>MAMP</h2>
                                <p class="small">Download</p>
                            </div>
                        </div>

                        <div class="col item">
                            <img src="<?= base_url('assets/') ?>img/upload/icon/Image 2.png" alt="">
                            <div class="keterangan">
                                <h2>SUBLIME TEXT</h2>
                                <p class="small">Download</p>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg ">
                            <h2>Sistem Operasi</h2>
                            <p class="small">Windows 10 / Sierra OS / Linux</p>
                        </div>
                        <div class="col-lg ">
                            <h2>RAM</h2>
                            <p class="small">Minimum 2 Gigabyte</p>
                        </div>
                        <div class="col-lg">
                            <h2>PENYIMPANAN</h2>
                            <p class="small">Storage kosong 10 Gigabyte</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


    <!-- END TENTANG PRODUK -->


    <!-- START FOOTER -->


    <footer>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <p>Copyright © 2020 | <a href=""> <span>Brand Name</span> </a></p>
                </div>
            </div>
        </div>
    </footer>


    <!-- END FOOTER -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/1ef9b66c29.js"></script>



    <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {

            'use strict';

            var play_pause = $('.playButton'),
                container = $('#videoContainer'),
                playIcon = $('.playButton .playPause'),
                video = $('video'),
                play = $('.play'),
                volume = $('.volume .icon'),
                volumeIntesity = $('.volume .intensityBar'),
                intensity = $('.intensity'),
                progressBar = $('.progressBar'),
                progress = $('.progressBar .progress'),
                timer = $('.intialTime'),
                vidDuration = $('.fullTime'),
                expandButton = $('.scale .icon'),
                overlayScreen = $('.overlay'),
                timeState = $('.time'),
                overlayButton = $('.overlay .button'),
                update;


            $(window).resize(function() {
                resizeVid();
            });

            resizeVid();

            updateplayer();

            play_pause.add(video).click(function() {
                playVid();
            });

            progressBar.click(function() {
                skip();
            });

            progressBar.mousemove(function() {
                timeState.text(getTimeState());
            });

            volume.click(function() {
                toggleMute();
            });

            volumeIntesity.click(function() {
                changeVolume();
            });

            expandButton.click(function() {
                fullScreen();
            });

            overlayButton.click(function() {
                playVid();
            });

            vidDuration.text(getFormatedFullTime());


            function playVid() {
                if (video.get(0).paused) {
                    video.get(0).play();
                    playIcon.css({
                        'background': 'url(../img/videobtn/pause.svg)',
                        'background-size': '100% 100%'
                    });
                    overlayScreen.hide();
                    update = setInterval(updateplayer, 1);

                } else {
                    video.get(0).pause();
                    playIcon.css({
                        'background': 'url(../img/videobtn/play.svg)',
                        'background-size': '100% 100%'
                    });
                    overlayScreen.show();
                    clearInterval(update);
                }
            }

            function updateplayer() {
                var percentage = (video[0].currentTime / video[0].duration) * 100;
                progress.css({
                    'width': percentage + '%'
                });
                timer.text(getFormatedTime());
                vidDuration.text(getFormatedFullTime());

                if (video[0].ended) {
                    playIcon.css({
                        'background': 'url(<?= base_url('assets/') ?>img/videobtn/play.svg)',
                        'background-size': '100% 100%'
                    });
                    overlayScreen.show();
                    overlayButton.css({
                        'background': 'url(<?= base_url('assets/') ?>img/videobtn/replay.svg)',
                        'background-size': '100% 100%'
                    });
                } else if (video[0].paused) {
                    overlayButton.css({
                        'background': 'url(<?= base_url('assets/') ?>img/videobtn/play-button.svg)',
                        'background-size': '100% 100%'
                    });
                }
            }

            function getTimeState() {

                var mouseX = event.pageX - progressBar.offset().left,
                    width = progressBar.outerWidth();

                var currentSeconeds = Math.round((mouseX / width) * video[0].duration);
                var currentMinutes = Math.floor(currentSeconeds / 60);

                if (currentMinutes > 0) {
                    currentSeconeds -= currentMinutes * 60;
                }
                if (currentSeconeds.toString().length === 1) {
                    currentSeconeds = "0" + currentSeconeds;
                }
                if (currentMinutes.toString().length === 1) {
                    currentMinutes = "0" + currentMinutes;
                }

                timeState.css('left', (mouseX / width) * progressBar.width() + 18 + 'px');

                return currentMinutes + ':' + currentSeconeds;

            }

            function skip() {
                var mouseX = event.pageX - progressBar.offset().left,
                    width = progressBar.outerWidth();
                video[0].currentTime = (mouseX / width) * video[0].duration;
                updateplayer();
            }

            function getFormatedFullTime() {

                var totalSeconeds = Math.round(video[0].duration);
                var totalMinutes = Math.floor(totalSeconeds / 60);
                if (totalMinutes > 0) {
                    totalSeconeds -= totalMinutes * 60;
                }
                if (totalSeconeds.toString().length === 1) {
                    totalSeconeds = "0" + totalSeconeds;
                }
                if (totalMinutes.toString().length === 1) {
                    totalMinutes = "0" + totalMinutes;
                }
                return totalMinutes + ':' + totalSeconeds;
            }

            function getFormatedTime() {
                var seconeds = Math.round(video[0].currentTime);
                var minutes = Math.floor(seconeds / 60);

                if (minutes > 0) {
                    seconeds -= minutes * 60;
                }
                if (seconeds.toString().length === 1) {
                    seconeds = "0" + seconeds;
                }
                if (minutes.toString().length === 1) {
                    minutes = "0" + minutes;
                }
                return minutes + ':' + seconeds;
            }

            function toggleMute() {
                if (!video[0].muted) {
                    video[0].muted = true;
                    volume.css({
                        'background': 'url(<?= base_url('assets/') ?>img/videobtn/mute.svg)',
                        'background-size': '100% 100%'
                    });
                    intensity.hide();
                } else {
                    video[0].muted = false;
                    volume.css({
                        'background': 'url(<?= base_url('assets/') ?>img/videobtn/volume.svg)',
                        'background-size': '100% 100%'
                    });
                    intensity.show();
                }
            }

            function changeVolume() {
                var mouseX = event.pageX - volumeIntesity.offset().left,
                    width = volumeIntesity.outerWidth();

                video[0].volume = (mouseX / width);
                intensity.css('width', (mouseX / width) * width + 'px');
                video[0].muted = false;
                volume.css({
                    'background': 'url(<?= base_url('assets/') ?>img/videobtn/volume.svg)',
                    'background-size': '100% 100%'
                });
                intensity.show();
            }

            function fullScreen() {
                if (video[0].requestFullscreen) {
                    video[0].requestFullscreen();
                } else if (video[0].webkitRequestFullscreen) {
                    video[0].webkitRequestFullscreen();
                } else if (video[0].mozRequestFullscreen) {
                    video[0].mozRequestFullscreen();
                } else if (video[0].msRequestFullscreen) {
                    video[0].msRequestFullscreen();
                } else {
                    video.dblclick(function() {
                        fullScreen();
                    });
                }

            }

            function resizeVid() {
                if (container.width() < 600) {
                    container.addClass('small');
                } else {
                    container.removeClass('small');
                }
            }

            $(window).keypress(function(e) {
                if (e.keyCode === 0 || e.keyCode === 32) {
                    e.preventDefault()
                    playVid();
                }
            });

            for (var i = 0, l = videos.length; i < l; i++) {
                var video = videos[i];
                var src = video.src || (function() {
                    var sources = video.querySelectorAll("source");
                    for (var j = 0, sl = sources.length; j < sl; j++) {
                        var source = sources[j];
                        var type = source.type;
                        var isMp4 = type.indexOf("mp4") != -1;
                        if (isMp4) return source.src;
                    }
                    return null;
                })();
                if (src) {
                    var isYoutube = src && src.match(/(?:youtu|youtube)(?:\.com|\.be)\/([\w\W]+)/i);
                    if (isYoutube) {
                        var id = isYoutube[1].match(/watch\?v=|[\w\W]+/gi);
                        id = (id.length > 1) ? id.splice(1) : id;
                        id = id.toString();
                        var mp4url = "http://www.youtubeinmp4.com/redirect.php?video=";
                        video.src = mp4url + id;
                    }
                }
            }


        });
    </script>
</body>

</html>