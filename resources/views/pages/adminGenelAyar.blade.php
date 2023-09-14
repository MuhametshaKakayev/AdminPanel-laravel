<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="genelayar"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Genel Ayar"></x-navbars.navs.auth>
        <div class="nav-wrapper position-relative end-0">
            @if (\Session::has('message'))
                <div class="alert alert-success">
                    <p style="color: white;font-weight:bold">{!! \Session::get('message') !!}</p>
                </div>
            @endif
            <ul class="nav nav-pills nav-fill p-1" role="tablist">

                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#tab-site-ayar" role="tab"
                        aria-controls="tab-site-ayar" aria-selected="true">
                        <span class="material-icons align-middle mb-1">
                            badge
                        </span>
                        Site Ayar
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tab-site-bilgi" role="tab"
                        aria-controls="tab-site-bilgi" aria-selected="false">
                        <span class="material-icons align-middle mb-1">
                            laptop
                        </span>
                        Site Bilgi
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tab-smtp-ayar" role="tab"
                        aria-controls="tab-smtp-ayar" aria-selected="false">
                        <span class="material-icons align-middle mb-1">
                            badge
                        </span>
                        Smtp Ayar
                    </a>
                </li>

            </ul>
        </div>

        <div class="tab-content">
            {{-- -------------- SİTE AYAR ------------------ --}}
            <div class="tab-pane fade show active" id="tab-site-ayar" role="tabpanel" aria-labelledby="tab-site-ayar">
                @foreach ($site_ayar as $ayar)
                    <form class="w-px-500 p-3 p-md-3 form-horizontal" action="{{ route('optionUpdate') }}"
                        method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group input-group input-group-outline my-5">
                            <label for="">LOGO YUKLE:</label>
                        </div>

                        <div class="form-group input-group input-group-outline my-3">

                            <input type="file" accept=".jpeg, .png, .jpg" class="form-control" id="logo"
                                name="logo">
                            <br>
                            <img src="{{ asset('storage/logo/' . $ayar->logo) }}" id="logo-preview"
                                style="max-width: 100px; max-height: 100px;">
                            <p style="margin-left:10px;font-size:13px;margin-top:5px;">
                                Yükleyeceğiniz görselin boyutları 188
                                x 71 px olmalıdır.</p>
                        </div>



                        <div class="form-group input-group input-group-outline my-5">
                            <label for="default_dil" class="col-sm-3 control-label">Default Dil:</label>

                            <div class="col-sm-9">

                                <div class="input-group input-group-static mb-4">

                                    <select class="form-control" name="default_dil" id="default_dil">
                                        <option value="oto" {!! $ayar->default_dil === 'oto' ? 'selected' : '' !!}>Otomatik</option>
                                        <option value="tr" {!! $ayar->default_dil === 'tr' ? 'selected' : '' !!}>Türkçe</option>
                                        <option value="en" {!! $ayar->default_dil === 'en' ? 'selected' : '' !!}>İngilizce</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Sef link Yapısı</label>
                            <div class="col-sm-9">
                                <input type="radio" name="permalink" value="evet" {!! $ayar->permalink === 'evet' ? 'checked' : '' !!}> Açık
                                <input type="radio" name="permalink" value="hayir" {!! $ayar->permalink === 'hayir' ? 'checked' : '' !!}> Kapalı
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Anasayfa Slogan:</label>
                            <div class="col-sm-9">
                                <input type="radio" name="aslogan" value="evet" {!! $ayar->aslogan === 'evet' ? 'checked' : '' !!}> Açık
                                <input type="radio" name="aslogan" value="hayir" {!! $ayar->aslogan === 'hayir' ? 'checked' : '' !!}> Kapalı
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Anasayfa Hizmetler:</label>
                            <div class="col-sm-9">
                                <input type="radio" name="ahizmet" value="evet" {!! $ayar->ahizmet === 'evet' ? 'checked' : '' !!}> Açık
                                <input type="radio" name="ahizmet" value="hayir" {!! $ayar->ahizmet === 'hayir' ? 'checked' : '' !!}> Kapalı
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Anasayfa Öne Çıkan Ürünler:</label>
                            <div class="col-sm-9">
                                <input type="radio" name="aourunler" value="evet" {!! $ayar->aourunler === 'evet' ? 'checked' : '' !!}> Açık
                                <input type="radio" name="aourunler" value="hayir" {!! $ayar->aourunler === 'hayir' ? 'checked' : '' !!}> Kapalı
                            </div>
                        </div>

                        <!-- Anasayfa 3lu bloklar -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Anasayfa 3'lü Bloklar:</label>
                            <div class="col-sm-9">
                                <input type="radio" name="abloklar" value="evet" {!! $ayar->abloklar === 'evet' ? 'checked' : '' !!}> Açık
                                <input type="radio" name="abloklar" value="hayir" {!! $ayar->abloklar === 'hayir' ? 'checked' : '' !!}> Kapalı
                            </div>
                        </div>

                        <!-- Anasayfa referans -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Anasayfa Referans:</label>
                            <div class="col-sm-9">
                                <input type="radio" name="areferans" value="evet" {!! $ayar->areferans === 'evet' ? 'checked' : '' !!}> Açık
                                <input type="radio" name="areferans" value="hayir" {!! $ayar->areferans === 'hayir' ? 'checked' : '' !!}>
                                Kapalı
                            </div>
                        </div>

                        <!-- Tema Renk1 -->
                        <div class="form-group">
                            <label for="example-color-input" class="form-control-label">Tema Renk1:</label>
                            <input class="colorpicker-default form-control" type="text"
                                value="{{ $ayar->renk1 }}" id="example-color-input" name="renk1">
                        </div>

                        <!-- Tema Renk2 -->
                        <div class="form-group">
                            <label for="example-color-input" class="form-control-label">Tema Renk2:</label>
                            <input class="colorpicker-default form-control" type="text"
                                value="{{ $ayar->renk2 }}" id="example-color-input" name="renk2">
                        </div>
                        <div align="center">
                            <button type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                    </form>
            </div>
            @endforeach

            {{-- ----- SİTE BİLGİLERİ ------ --}}



            <div class="tab-pane fade" id="tab-site-bilgi" role="tabpanel" aria-labelledby="tab-site-bilgi">
                <form class="w-px-500 p-3 p-md-3 form-horizontal" action="{{ route('optInfoUpdate') }}"
                    method="post" enctype="multipart/form-data">
                    @foreach ($site_bilgi as $bilgi)
                        @csrf
                        <!-- Site Bilgi İçeriği Buraya Gelir -->


                        <div class="input-group input-group-static mb-4">
                            <label for="title">Anasayfa başlık</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ $bilgi->title }}">
                        </div>



                        <div class="input-group input-group-static mb-4">
                            <label for="">Anahtar Kelimeler</label>
                            <input type="text" class="form-control" name="keywords"
                                value="{{ $bilgi->keywords }}">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label for="">Site açiklaması(description):</label>
                            <input type="text" class="form-control" name="description"
                                value="{{ $bilgi->descriptions }}">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label for="">Facebook</label>
                            <input type="text" class="form-control" name="facebook"
                                value="{{ $bilgi->facebook }}">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label for="">Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="{{ $bilgi->twitter }}">
                        </div>


                        <div class="input-group input-group-static mb-4">
                            <label for="">İnstagram</label>
                            <input type="text" class="form-control" name="instagram"
                                value="{{ $bilgi->instagram }}">
                        </div>


                        <div class="input-group input-group-static mb-4">
                            <label for="">Google+</label>
                            <input type="text" class="form-control" name="googlePlus"
                                value="{{ $bilgi->googlePlus }}">
                        </div>


                        <div class="input-group input-group-static mb-4">
                            <label for="">Google maps</label>
                            <input type="text" class="form-control" name="google_maps"
                                value="{{ $bilgi->google_maps }}">
                        </div>


                        <div class="input-group input-group-static mb-4">
                            <label for="">Slogan1</label>
                            <input type="text" class="form-control" name="slogan1"
                                value="{{ $bilgi->slogan1 }}">
                        </div>


                        <div class="input-group input-group-static mb-4">
                            <label for="">Slogan 2</label>
                            <input type="text" class="form-control" name="slogan2"
                                value="{{ $bilgi->slogan2 }}">
                        </div>


                        <div class="input-group input-group-static mb-4">
                            <label for="">Telefon</label>
                            <input type="text" class="form-control" name="telefon"
                                value="{{ $bilgi->telefon }}">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label for="">Faks</label>
                            <input type="text" class="form-control" name="faks" value="{{ $bilgi->faks }}">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label for="">E-posta</label>
                            <input type="text" class="form-control" name="eposta" value="{{ $bilgi->eposta }}">
                        </div>

                        <div class="form-group input-group input-group-outline my-5">
                            <label for="adres" class="col-sm-1 control-label">Adres</label>
                            <div class="col-sm-11">
                                <textarea class="form-control" rows="9" id="adres" name="adres">{{ $bilgi->adres }}</textarea>
                            </div>

                            <div class="form-group input-group input-group-outline my-5">
                                <label for="analytics"class="col-sm-1 control-label">Analytics Kodu</label>
                                <div class="col-sm-11">
                                    <textarea class="form-control" rows="5" id="analytics" name="analytics">{{ $bilgi->analytics }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div align="center">
                            <button type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                </form>
            </div>
            @endforeach

            {{-- ----- SMTP BİLGİLERİ ------ --}}

            <div class="tab-pane fade" id="tab-smtp-ayar" role="tabpanel" aria-labelledby="tab-smtp-ayar">
                @foreach ($smtp_ayar as $smtp)
                    <form class="w-px-500 p-3 p-md-3 form-horizontal" action="{{ route('smtpUpdate') }}"
                        method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Smtp Ayar İçeriği Buraya Gelir -->

                        <div class="alert alert-info" role="alert">
                            İletişim formunuzun çalışabilmesi için aşağıdaki bilgileri doldurmak zorunludur. Lütfen
                            sistem yöneticinizden, sizin için bir e-posta hesabı oluşturmasını ve aşağıdaki bilgileri
                            isteyiniz.
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label for="">Host</label>
                            <input type="text" class="form-control" name="host"
                                value="{{ $smtp->host }}">
                        </div>

                        <label for="smtp_port" class="col-sm-3 control-label">SMTP Portu:</label>
                        <div class="input-group input-group-outline my-3">
                            <input class="form-control" type="text" placeholder="Örn: 587"
                                value="{{ $smtp->port }}" name="port" id="port">
                        </div>

                        <label for="ePosta" class="col-sm-3 control-label">E-posta:</label>
                        <div class="input-group input-group-outline my-3">
                            <input type="text" class="form-control" id="usermail" name="usermail"
                                placeholder="Örn: info@example.com" value="{{ $smtp->usermail }}">
                        </div>

                        <label for="sifre" class="col-sm-3 control-label">Şifre:</label>
                        <div class="input-group input-group-outline my-3">
                            <input type="password" class="form-control" id="password" name="password"
                                value="{{ $smtp->password }}">
                        </div>


                        <div class="col-sm-9">

                            <div class="input-group input-group-static mb-4">

                                <select class="form-control" name="protokol" id="protokol">
                                    <option value="tls" {!! $smtp->protokol === 'tls' ? 'selected' : '' !!}>tls</option>
                                    <option value="ssl" {!! $smtp->protokol === 'ssl' ? 'selected' : '' !!}>ssl</option>
                                    <option value="Yok" {!! $smtp->protokol === 'Yok' ? 'selected' : '' !!}>yok</option>
                                </select>
                            </div>
                        </div>
{{--
                        <label for="smtp_protocol" class="col-sm-3 control-label">SMTP Protokolü:</label>
                        <div class="input-group input-group-outline my-3">
                            <div class="col-sm-9">
                                <select name="smtp_protokol" id="smtp_protokol" class="form-control">
                                    <option value="">Yok</option>
                                    <option value="tls" {{ $smtp->protokol == 'tls' ? 'selected' : '' }}>TLS
                                    </option>
                                    <option value="ssl" {{ $smtp->protokol == 'ssl' ? 'selected' : '' }}>SSL
                                    </option>
                                </select>
                            </div>
                        </div> --}}

                        <div align="center">
                            <button type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                    </form>
                @endforeach
            </div>


        </div>

    </main>
    <x-plugins></x-plugins>

</x-layout>
