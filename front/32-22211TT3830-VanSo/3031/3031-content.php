<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3031">
    <section class="about_us">
        <h1>About Us</h1>
    </section>
    <section class="header-nav-list">
      <div class="container">
        <ul class="nav-list">
          <li><a href="#">HOME</a></li>
          <li>ABOUT US</li>
        </ul>
      </div>
    </section>
    <section class="introduce-service">
      <div class="introduce-service-container">
        <section class="content">
          <div class="container custom-container">
            <div class="row">
              <div class="col-md-6 custom-md-6">
                <div class="content-title">
                  <h2>"We provide full and specific solutions for our every customers."</h2>
                </div>
                <div class="content-top">
                  <p>Started in the year 1974 with a vision of providing repair solutions to customers and dealers all
                    over USA. Repair Plus, based in Newyork, USA, aims to be one of the best Phone /Laptops & Desktops
                    repair company and leading provider of spare components and tools within USA.</p>
                </div>
                <div class="content-bottom">
                  <p>Our commitment to bring professionalism, good service & trust to the Phone repair service &
                    maintenance business. We take immense pride in sending some of the most of professional technicians.
                  </p>
                  <div class="certificate-logo">
                    <img src="./images/certified-logo.png.webp" alt="Logo">
                  </div>
                </div>
                <div class="signature">
                    <img src="./images/signature.png.webp" alt="Chữ ký">
                </div>
                </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="video-gallery">
                  <picture>
                    <img src="./images/video-gallery.jpg.webp" alt="người đàn ông">
                  </picture>
                  <div class="overlay-gallery">
                    <div class="icon-play">
                      <div class="icon">
                        <a href="#">
                            <img src="./images/play-btn.png.webp" alt="nút play">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    </div>
