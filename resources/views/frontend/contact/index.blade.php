<!-- Kariyer -->
@extends ('layouts.app')

@section('title', 'MENTAL / CREATIVE')

<div class="iletisim-body">

@section('content')

<!-- Start Banner -->
<div class="row">
    <div id="mental-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <video  preload="auto" autoplay=""  muted="" playsinline="" data-object-fit="cover" style="width: 100%!important">
                    <source src="{{ asset('assets/mental/images/carousel/videos/iletisimbanner.mp4') }}" type="video/mp4">
                </video>  <br><br>
            </div>
        </div>
    </div>
</div>

<!-- Section -->
<div class="section contact_section">
    <div class="mental-container no-background">
        <div class="row">
            <div class="col-md-7 padding_0 align-center">
                <div class="full">
                    <div class="contact-form col-sm-12 col-md-10 offset-lg-1">
                        <div class="full contact_form">
                            <form id="iletisim-form" class="contact_form_inner" action="#">
                                <fieldset>
                                    <div class="field">
                                        <input type="text" name="name" placeholder="ad soyad" />
                                    </div>
                                    <div class="field">
                                        <input type="email" name="email" placeholder="e-posta" />
                                    </div>
                                    <div class="field">
                                        <input type="text" name="phone_no" placeholder="cep telefonu" />
                                    </div>
                                    <div class="field">
                                        <textarea placeholder="mesaj" style="height:140px!important"></textarea>
                                    </div>
                                </fieldset>
                                <div class="field center flex-1">
                                <button class="button-submit-form" form="iletisim-form">gönder</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 padding_0">
                <div class="full">
                    <div class="full contact-address">
                        <p>Birlik Mahallesi Şehit Kurbani Akbağa Sokak No: 11/1 Çankaya
                            Ankara - Türkiye</p>
                        <p>Telefon: +90 312 495 10 50</p>
                        <p>Faks: +90 312 495 12 55</p>
                        <p>info@mentaltanitim.com.tr</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Google Map Section -->
<div class="section contact_section">
    <div class="mental-container">
        <div class="row">
            <div class="col-12">
                <div class="full">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="full map_section">
                                <div>
                                    <div id="googleMap" style="width:100%;height:100%;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.5322804371226!2d32.870461999999996!3d39.8847135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34f89556948a9%3A0x15bce5e4bd3df75d!2zTWVudGFsIFRhbsSxdMSxbQ!5e0!3m2!1sen!2str!4v1658419182922!5m2!1sen!2str" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
@endsection

<style>
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
</style>
