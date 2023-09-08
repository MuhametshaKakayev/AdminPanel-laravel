<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="news"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Haber ve Duyuru Ekle"></x-navbars.navs.auth>
        <div class="content-page">

            <div class="content" style="background-color: rgb(6, 6, 6)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="pull-left page-title">Haber ve Duyuru ekle</h4>

                        </div>
                    </div>

                    <div class="row">

                        <!-- Col 1 -->
                        <div class="col-md-10" style=" margin-left: px;">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <div id="form_status"></div>

                                    <form action="{{ route("haberStore") }}" method="POST" style="margin-left: 40%" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="baslik" class="col-sm-3 control-label">Başlık</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="baslik" name="baslik" value="{{ old('baslik', $news->baslik) }}" placeholder="">

                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="resim" class="col-sm-3 control-label">Listeleme Görseli</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="resim" name="resim">
                                                @if($news->listGorsel)
                                                <img src="{{ $news->listGorsel }}" id="resim_src" width="150" />
                                                @endif
                                                <p style="margin-left:10px;font-size:13px;margin-top:5px;">
                                                    Yükleyeceğiniz görselin boyutları 295 x 143 px olmalıdır.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="resim2" class="col-sm-3 control-label">Arkaplan Görseli</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="resim2" name="resim2">
                                                @if($news->arkaGorsel)
                                                <img src="{{ $news->arkaGorsel }}" id="resim2_src" width="150" />
                                                @endif
                                                <p style="margin-left:10px;font-size:13px;margin-top:5px;">
                                                    Yükleyeceğiniz görselin boyutları 1600 x 350 px olmalıdır.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="icerik" class="col-sm-1 control-label">İçerik</label>
                                            <div class="col-sm-11">
                                                <textarea class="summernote form-control" rows="9" id="icerik" name="icerik">{{ old('icerik', $news->icerik) }}</textarea>
                                            </div>
                                        </div>

                                        <!-- SEO Bilgileri -->
                                        <div class="alert alert-info" role="alert">
                                            Google'da rekabeti düşük kelimelerde organik olarak ilk sayfaya yükselmek için mutlaka aşağıdaki bilgileri doldurunuz. Sadece sayfa içeriği ile alakalı bilgiler girmelisiniz. Aksi halde spam cezası alabilirsiniz.
                                        </div>

                                        {{-- <div class="form-group input-group input-group-outline my-5">
                                            <label for="title" class="col-sm-3 control-label">SEO Başlık (Title)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->seo->title) }}">
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="keywords" class="col-sm-3 control-label">SEO Kelimeler (Keywords)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="keywords" name="keywords" value="{{ old('keywords', $news->seo->keywords) }}">
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="description" class="col-sm-3 control-label">SEO Açıklama (Description)</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="5" id="description" name="description">{{ old('description', $news->seo->description) }}</textarea>
                                            </div>
                                        </div> --}}

                                        <div align="center">
                                            <button type="submit" class="btn btn-success">Kaydet</button>
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
