<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="dilTr"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Turkce"></x-navbars.navs.auth>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Dil Düzenle</h4>

                    </div>
                </div>

                <div class="row">

                    <!-- Col 1 -->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div id="form_status"></div>
                                <form role="form" class="form-horizontal"  id="forms" method="POST" action="ajax.php?p=dil_duzenle&id=1" onsubmit="return false;" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="adi" class="col-sm-3 control-label">Dil Adı</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="adi" name="adi" value="Türkçe" placeholder="Dilin tam adını yazın.">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gosterim_adi" class="col-sm-3 control-label">Dil Gösterim Adı</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="gosterim_adi" name="gosterim_adi" value="Türkçe" placeholder="Dilin gösterim adı örn : english">
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="kisa_adi" class="col-sm-3 control-label">Dil Ön Eki</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="kisa_adi" name="kisa_adi" disabled value="tr" maxlength="2" placeholder="Dilin Ön Eki örn : en, ar, fr">
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="sira" class="col-sm-3 control-label">Sıra</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="sira" name="sira" value="1" placeholder="">
                                    </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="resim" class="col-sm-3 control-label">Dilin Simgesi</label>
                                        <div class="col-sm-9">
                                        <input type="file" class="form-control" id="resim" name="resim" value="">

                                    </div>
                                    </div>


                                    <div class="form-group">
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


                                <div align="left">
                                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="siliyom();">Dili Kaldır</button>
                                </div>

                                <div align="right">
                                    <button type="submit" class="btn btn-purple waves-effect waves-light" onclick=" AjaxFormS('forms','form_status');">Kaydet</button>
                                </div>

                                </form>



                            </div>
                        </div>
                    </div>
                    <!-- Col1 end -->

                    </div><!-- row end -->

    </main>
    <x-plugins></x-plugins>

</x-layout>

