<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="news"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Haber ve Duyuru Edit"></x-navbars.navs.auth>
        <div class="content-page">
            
            <div class="content" style="background-color: rgb(60, 60, 60)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="pull-left page-title">Haber ve Duyuru Düzenle</h4>

                        </div>
                    </div>

                    <div class="row">

                        <!-- Col 1 -->
                        <div class="col-md-12" style=" margin-left: 70px;">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <div id="form_status"></div>

                                    <form raction="{{ route('haberUpdate', ['id' => $news->id]) }}" method="POST">
                                            @method('POST')
                                            @csrf
                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="baslik" class="col-sm-3 control-label">Başlık</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="baslik" name="baslik"
                                                    value="{{ $news->baslik }}" placeholder="">
                                            </div>
                                        </div>





                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="resim" class="col-sm-3 control-label">Listeleme
                                                Görseli</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="resim" name="resim"
                                                    value="">
                                                <img src="../uploads/thumb/14bc4bfcca.jpg" id="resim_src"
                                                    width="150" />
                                                <p style="margin-left:10px;font-size:13px;margin-top:5px;">
                                                    Yükleyeceğiniz görselin boyutları 295 x 143 px olmalıdır.</p>
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="resim2" class="col-sm-3 control-label">Arkaplan
                                                Görseli</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="resim2" name="resim2"
                                                    value="">
                                                <p style="margin-left:10px;font-size:13px;margin-top:5px;">
                                                    Yükleyeceğiniz görselin boyutları 1600 x 350 px olmalıdır.</p>
                                            </div>
                                        </div>


                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="icerik" class="col-sm-1 control-label">İçerik</label>
                                            <div class="col-sm-11">
                                                <textarea class="summernote form-control" rows="9" id="içerik" name="içerik">{{ $news->içerik }}</textarea>
                                            </div>
                                        </div>


                                        <div class="alert alert-info" role="alert"> Google'da rekabeti düşük
                                            kelimelerde organik olarak ilk sayfaya yükselmek için mutlaka aşağıdaki
                                            bilgileri doldurunuz. Sadece sayfa içeriği ile alakalı bilgiler
                                            girmelisiniz. Aksi halde spam cezası alabilirsiniz.</div>
                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="title" class="col-sm-3 control-label">SEO Başlık
                                                (Title)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title" name="title"
                                                    value="Adipisci velitNeque porro quisquam est">
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="keywords" class="col-sm-3 control-label">SEO Kelimeler
                                                (Keywords)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="keywords"
                                                    name="keywords" value="Adipisci velitNeque porro quisquam est">
                                            </div>
                                        </div>


                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="description" class="col-sm-3 control-label">SEO Açıklama
                                                (Description)</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="5" id="description" name="description">Adipisci velitNeque porro quisquam est</textarea>
                                            </div>
                                        </div>




                                        <div align="center">
                                            <button type="submit" class="btn btn-success"
                                                >Kaydet</button>
                                        </div>

                                    </form>



                                </div>
                            </div>
                        </div>
                        <!-- Col1 end -->

                    </div><!-- row end -->


                </div>
            </div>

        </div>

    </main>
    <x-plugins></x-plugins>

</x-layout>
