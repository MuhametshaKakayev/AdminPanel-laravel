<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="dilEkle"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dil Ekle"></x-navbars.navs.auth>

        <div class="content" style=" margin-left: 85px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Yeni Dil Ekle</h4>

                    </div>
                </div>

                <div class="row" style=" margin-left: 85px;">

                    <!-- Col 1 -->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div id="form_status"></div>
                                <form role="form" class="form-horizontal" id="forms" method="POST">

                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="adi" class="col-sm-3 control-label">Dil Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="adi" name="adi"
                                                value="" placeholder="Dilin tam adını yazın.">
                                        </div>
                                    </div>

                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="kisa_adi" class="col-sm-3 control-label">Dil Ön Eki</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="kisa_adi" name="kisa_adi"
                                                maxlength="2" value="" placeholder="Dilin Ön Eki Örn: en,ar,fr">
                                        </div>
                                    </div>


                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="gosterim_adi" class="col-sm-3 control-label">Dil Gösterim
                                            Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="gosterim_adi"
                                                name="gosterim_adi" value=""
                                                placeholder="Dilin gösterim adı örn : English">
                                        </div>
                                    </div>

                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="sira" class="col-sm-3 control-label">Sıra No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sira" name="sira"
                                                value="" placeholder="">
                                        </div>
                                    </div>




                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="resim" class="col-sm-3 control-label">Dilin Simgesi</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="resim" name="resim"
                                                value="">
                                        </div>
                                    </div>

                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="degiskenler" class="col-sm-3 control-label">Değişkenler</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="20" id="degiskenler" name="degiskenler">TX1={Çağrı Merkezi;}
TX2={Bize Yazın;}
TX3={Öne Çıkan Ürünler}
TX4={Haber ve Duyurular}
TX5={Son Yazılar}
TX6={Hakkımızda}
TX7={Referanslarımız}
TX8={Kurumsal}
TX9={Foto Galeri}
TX10={Tüm Hakları Saklıdır.}
TX11={devamı}
TX12={Hizmetlerimiz}
TX13={Ürünlerimiz}
TX14={İletişim}
TX15={Bize Ulaşın}
TX16={Ürün ve hizmetlerimiz hakkında daha detaylı bilgi almak için<br />aşağıdaki iletişim bilgilerimiz ile irtibat sağlayabilirsiniz.}
TX17={İletişim Bilgileri}
TX18={İletişim Formu}
TX19={Telefon}
TX20={Adınız Soyadınız}
TX21={Faks}
TX22={E-Posta}
TX23={Adres}
TX24={Mesajınız}
TX25={Gönder}
TX26={Fotoğraflarla Biz}
TX27={Henüz içerik eklenmedi.}
TX28={Henüz kategori eklenmedi.}
TX29={Şubelerimiz}TX30={Bayilerimiz}
TX31={Seçiniz}
TX32={E-Katalog}
TX33={E-Katalog}
TX34={Belgeler}
TX35={Belgelerimiz}
TX36={Video Galeri}
PGN2={Önceki}
PGN3={Sonraki}
MS1={Lütfen tüm boş alanları doldurun.}
MS2={Lütfen geçerli bir e-posta adresi yazın.}
MS3={Az önce bir mesaj gönderdiniz, 15 dk sonra tekrar deneyin.}
MS4={Mesajınız başarıyla gönderildi.}
MS5={Mesaj Gönderilemedi, SMTP Ayarlarınızı Kontrol Ediniz.}</textarea>
                                        </div>
                                    </div>






                            </div>
                        </div>
                    </div>
                    <!-- Col1 end -->

                </div><!-- row end -->


                <div align="center">
                    <button type="submit" class="btn btn-success">Kaydet</button>
                </div>

                </form>






            </div>
        </div>



    </main>
    <x-plugins></x-plugins>

</x-layout>
