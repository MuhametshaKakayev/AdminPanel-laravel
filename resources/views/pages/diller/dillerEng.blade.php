<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="diller"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Diller"></x-navbars.navs.auth>

        <div class="content" style=" margin-left: 85px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Dil Düzenle</h4>

                    </div>
                </div>

                <div class="row" style=" margin-left: 85px;>

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
                                                value="İnglizce" placeholder="Dilin tam adını yazın.">
                                        </div>
                                    </div>

                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="gosterim_adi" class="col-sm-3 control-label">Dil Gösterim
                                            Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="gosterim_adi"
                                                name="gosterim_adi" value="English"
                                                placeholder="Dilin gösterim adı örn : english">
                                        </div>
                                    </div>


                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="kisa_adi" class="col-sm-3 control-label">Dil Ön Eki</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="kisa_adi" name="kisa_adi"
                                                disabled value="en" maxlength="2"
                                                placeholder="Dilin Ön Eki örn : en, ar, fr">
                                        </div>
                                    </div>


                                    <div class="form-group input-group input-group-outline my-5">
                                        <label for="sira" class="col-sm-3 control-label">Sıra</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sira" name="sira"
                                                value="2" placeholder="">
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
                                        TX1={Call Center;}
                                        TX2={Write to us;}
                                        TX3={Featured Products}
                                        TX4={News and Announcement}
                                        TX5={Latest Posts}
                                        TX6={About Us}
                                        TX7={References}
                                        TX8={Institutional}
                                        TX9={Photo Gallery}
                                        TX10={All Rights Reserved.}
                                        TX11={more}
                                        TX12={Services}
                                        TX13={Products}
                                        TX14={Contact}
                                        TX15={Contact us}
                                        TX16={For more detailed information about our products and services<br />You can contact our contact details below.}
                                        TX17={Contact information}
                                        TX18={Communication Form}
                                        TX19={Phone}
                                        TX20={Name Surname}
                                        TX21={Fax}
                                        TX22={E-mail}
                                        TX23={Adress}
                                        TX24={Your Message}
                                        TX25={Submit}
                                        TX26={We with Photographs}
                                        TX27={It added content yet.}
                                        TX28={No categories have been added.}
                                        TX29={Şubelerimiz}
                                        TX30={Bayilerimiz}
                                        TX31={Seçiniz}
                                        TX32={Kataloglarımız}
                                        TX33={E-Katalog}
                                        TX34={Belgeler}
                                        TX35={Belgelerimiz}
                                        PGN2={Prev}
                                        PGN3={Next}
                                        MS1={Please fill in all the empty fields.}
                                        MS2={Please enter a valid e-mail address.}
                                        MS3={You just send a message, try again after 15 minutes.}
                                        MS4={Your message has been sent.}
                                        MS5={The message could not be sent,}</textarea>
                                        </div>
                                    </div>


                                    <div align="left">
                                        <button type="button" class="btn btn-danger waves-effect waves-light"
                                            onclick="siliyom();">Dili Kaldır</button>
                                    </div>

                                    <div align="right">
                                        <button type="submit" class="btn btn-purple waves-effect waves-light"
                                            onclick=" AjaxFormS('forms','form_status');">Kaydet</button>
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
