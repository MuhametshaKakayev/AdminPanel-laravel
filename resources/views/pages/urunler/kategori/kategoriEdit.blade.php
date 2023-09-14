<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="urunler"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Blog Edit"></x-navbars.navs.auth>
        <div class="content-page">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p style="color: white;font-weight:bold">{!! \Session::get('success') !!}</p>
                </div>
            @endif
            <div class="content" style="background-color: rgb(60, 60, 60)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="pull-left page-title">Kategori Düzenle</h4>

                        </div>
                    </div>

                    <div class="row">

                        <!-- Col 1 -->
                        <div class="col-md-12" style=" margin-left: 70px;">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <div id="form_status"></div>

                                    <form action="{{ route('kategoriEdit', ['id' => $kategori->id]) }}" method="POST"
                                        enctype="multipart/form-data">

                                        @csrf

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="baslik" class="col-sm-3 control-label">Yazı Başlık</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="kBaslik"
                                                    name="kBaslik" value="{{ $kategori->kBaslik }}" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="baslik" class="col-sm-3 control-label">Sıra</label>
                                            <div class="col-sm-9">
                                                <input type="text" required class="form-control" id="sira"
                                                    name="sira" value="{{ $kategori->sira }}" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="resim" class="col-sm-3 control-label">Listeleme
                                                Görseli</label>
                                            <div class="col-sm-9">
                                                <input type="file" accept=".jpeg, .png, .jpg" class="form-control"
                                                    id="resim" name="resim">
                                                <img src="{{ asset('storage/kategori/listGorsel/' . $kategori->listGorsel) }}"
                                                    id="logo_src" style="max-width: 100px; max-height: 100px;">
                                                <p style="margin-left:10px;font-size:13px;margin-top:5px;">
                                                    Yükleyeceğiniz görselin boyutları 295 x 143 px olmalıdır.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="resim2" class="col-sm-3 control-label">Arkaplan
                                                Görseli</label>
                                            <div class="col-sm-9">
                                                <input type="file" accept=".jpeg, .png, .jpg" class="form-control"
                                                    id="resim2" name="resim2">
                                                <img src="{{ asset('storage/kategori/arkaGorsel/' . $kategori->arkaGorsel) }}"
                                                    id="logo_src" style="max-width: 100px; max-height: 100px;">
                                                <p style="margin-left:10px;font-size:13px;margin-top:5px;">
                                                    Yükleyeceğiniz görselin boyutları 1600 x 350 px olmalıdır.</p>
                                            </div>
                                        </div>


                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="icerik" class="col-sm-1 control-label">İçerik</label>
                                            <div class="col-sm-11">
                                                <textarea class="summernote form-control" rows="9" id="aciklama" name="aciklama">{{ $kategori->aciklama }}</textarea>
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
                                                value="{{ $kategori->title }}">
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="keywords" class="col-sm-3 control-label">SEO Kelimeler
                                                (Keywords)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="keywords"
                                                    name="keywords" value="{{ $kategori->keywords }}">
                                            </div>
                                        </div>

                                        <div class="form-group input-group input-group-outline my-5">
                                            <label for="description" class="col-sm-3 control-label">SEO Açıklama
                                                (Description)</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="5" id="description" name="description">{{ $kategori->description }}</textarea>
                                            </div>
                                        </div>

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
