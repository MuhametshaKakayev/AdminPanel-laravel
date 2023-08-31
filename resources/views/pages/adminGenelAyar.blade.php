<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="genelayar"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Genel Ayar"></x-navbars.navs.auth>
        <div class="nav-wrapper position-relative end-0">
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

                <form>
                    <div class="input-group input-group-outline my-5">
                        <label class="form-label">LOGO YUKLE:</label>
                    </div>

                    <div class="input-group input-group-outline my-3">

                        <input type="file" class="form-control" id="logo" name="logo">
                        <p style="margin-left:10px;font-size:13px;margin-top:5px;">Yükleyeceğiniz görselin boyutları 188
                            x 71 px olmalıdır.</p>
                    </div>
                </form>


                <div class="form-group input-group input-group-outline my-5">
                    <label for="default_dil" class="col-sm-3 control-label">Default Dil:</label>

                    <div class="col-sm-9">

                        <div class="input-group input-group-static mb-4">

                            <select class="form-control" name="default_dil" id="default_dil">
                                <option value="oto">Otomatik</option>
                                <option value="tr" selected="selected">turkce</option>
                                <option value="en">İngilizce</option>
                            </select>
                        </div>
                    </div>

                </div>

                <label for="permalink" class="col-sm-3 control-label">SEF Link Yapısı:</label>
                <div class="form-row mb-3">

                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Evet" name="flexRadioDefault"
                                id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Aç</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Hayir" name="flexRadioDefault"
                                id="customRadio2">
                            <label class="custom-control-label" for="customRadio2">Kapat</label>
                        </div>
                    </div>
                </div>

                <label for="permalink" class="col-sm-3 control-label">Anasayfa slogan:</label>
                <div class="form-row mb-3">

                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Evet" name="flexRadioDefault"
                                id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Aç</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Hayir" name="flexRadioDefault"
                                id="customRadio2">
                            <label class="custom-control-label" for="customRadio2">Kapat</label>
                        </div>
                    </div>
                </div>

                <label for="permalink" class="col-sm-3 control-label">Anasayfa Hizmetler:</label>
                <div class="form-row mb-3">

                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Evet" name="flexRadioDefault"
                                id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Aç</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Hayir" name="flexRadioDefault"
                                id="customRadio2">
                            <label class="custom-control-label" for="customRadio2">Kapat</label>
                        </div>
                    </div>
                </div>

                <label for="permalink" class="col-sm-3 control-label">Anasayfa one cıkan urunler:</label>
                <div class="form-row mb-3">

                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Evet" name="flexRadioDefault"
                                id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Aç</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Hayir" name="flexRadioDefault"
                                id="customRadio2">
                            <label class="custom-control-label" for="customRadio2">Kapat</label>
                        </div>
                    </div>
                </div>

                <label for="permalink" class="col-sm-3 control-label">Anasayfa 3lu bloklar:</label>
                <div class="form-row mb-3">

                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Evet" name="flexRadioDefault"
                                id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Aç</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Hayir" name="flexRadioDefault"
                                id="customRadio2">
                            <label class="custom-control-label" for="customRadio2">Kapat</label>
                        </div>
                    </div>
                </div>

                <label for="permalink" class="col-sm-3 control-label">Anasayfa referans:</label>
                <div class="form-row mb-3">

                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Evet" name="flexRadioDefault"
                                id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Aç</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Hayir" name="flexRadioDefault"
                                id="customRadio2">
                            <label class="custom-control-label" for="customRadio2">Kapat</label>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="example-color-input" class="form-control-label">Tema Renk1:</label>
                    <input class="colorpicker-default form-control" type="text" value="#5e72e4"
                        id="example-color-input" name="renk1">
                </div>


                <div class="form-group">
                    <label for="example-color-input" class="form-control-label">Tema Renk2:</label>
                    <input class="colorpicker-default form-control" type="text" value="#bd2927"
                        id="example-color-input" name="renk2">
                </div>

                <div align="center">
                    <button type="submit" class="btn btn-success">Güncelle</button>
                </div>

            </div>


            {{-- ----- SİTE BİLGİLERİ ------ --}}

            <div class="tab-pane fade" id="tab-site-bilgi" role="tabpanel" aria-labelledby="tab-site-bilgi">
                <!-- Site Bilgi İçeriği Buraya Gelir -->

                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Anasayfa Başlık</label>
                    <input type="text" class="form-control form-control-lg" name="title">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Anahtar Kelimeler</label>
                    <input type="text" class="form-control form-control-lg" name="keywords">
                </div>

                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Site açiklaması(description):</label>
                    <input type="text" class="form-control form-control-lg" name="description">
                </div>

                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Facebook</label>
                    <input type="text" class="form-control form-control-lg" name="facebook">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Facebook</label>
                    <input type="text" class="form-control form-control-lg" name="facebook">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Twitter</label>
                    <input type="text" class="form-control form-control-lg" name="twitter">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">İnstagram</label>
                    <input type="text" class="form-control form-control-lg" name="instagram">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Google+</label>
                    <input type="text" class="form-control form-control-lg" name="googlePlus">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Google maps</label>
                    <input type="text" class="form-control form-control-lg" name="googleMaps">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Slogan1</label>
                    <input type="text" class="form-control form-control-lg" name="slogan1">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Slogan 2</label>
                    <input type="text" class="form-control form-control-lg" name="slogan2">
                </div>


                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Telefon</label>
                    <input type="text" class="form-control form-control-lg" name="telefon">
                </div>

                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">Faks</label>
                    <input type="text" class="form-control form-control-lg" name="faks">
                </div>

                <div class="input-group input-group-lg input-group-outline my-3">
                    <label class="form-label">E-posta</label>
                    <input type="text" class="form-control form-control-lg" name="eposta">
                </div>

                <div class="input-group input-group-lg input-group-outline my-3">
                    <label for="adres" class="col-sm-3 control-label">Adres</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="5" id="adres" name="adres">Lorem ipsum dolor sit ametipsum dolor sit amet İstanbul/Türkiye</textarea>
                    </div>

                    <div class="input-group input-group-lg input-group-outline my-3">
                        <label for="analytics" class="col-sm-3 control-label">Analytics Kodu</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="5" id="analytics" name="analytics"></textarea>
                        </div>
                    </div>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-success">Güncelle</button>
                </div>
            </div>


            {{-- ----- SMTP BİLGİLERİ ------ --}}

            <div class="tab-pane fade" id="tab-smtp-ayar" role="tabpanel" aria-labelledby="tab-smtp-ayar">
                <!-- Smtp Ayar İçeriği Buraya Gelir -->

                <div class="alert alert-info" role="alert">İletişim formunuzun
                    çalışabilmesi için aşağıdaki bilgileri doldurmak zorunludur. Lütfen
                    sistem yöneticinizden, sizin için bir e-posta hesabı oluşturmasını ve
                    aşağıdaki bilgileri isteyiniz.</div>


                <form>
                    <label for="smtp_host" class="col-sm-3 control-label">SMTP Server:</label>
                    <div class="input-group input-group-outline my-3">
                        <input class="form-control" type="text" placeholder="Örn: mail.domain.com"
                            value="mail.example.com" name="smtp_host" id="smtp_host">
                    </div>


                    <label for="smtp_port" class="col-sm-3 control-label">SMTP Port:</label>
                    <div class="input-group input-group-outline my-3">
                        <input class="form-control" type="text" placeholder="Örn: mail.domain.com"
                            value="mail.example.com" name="smtp_port" id="smtp_port">
                    </div>




                    <label for="ePosta" class="col-sm-3 control-label">E-posta:</label>
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" id="smtp_username" name="smtp_username"
                            placeholder="Örn: info@example.com" value="info@example.com">
                    </div>

                    <label for="sifre" class="col-sm-3 control-label">Şifre:</label>
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" id="smtp_password" name="smtp_password"
                        value="123456">
                    </div>

                    <label for="smtp_protocol" class="col-sm-3 control-label">SMTP protokol:</label>
                    <div class="input-group input-group-outline my-3">
                        <div class="col-sm-9">
                            <select name="smtp_protokol" id="smtp_protokol" class="form-control">
                                <option value="">Yok</option>
                                <option value="tls" selected="selected">TLS</option>
                                <option value="ssl">SSL</option>
                            </select>
                    </div>



                </form>



            </div>
            <div align="center">
                <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
        </div>

    </main>
    <x-plugins></x-plugins>

</x-layout>
