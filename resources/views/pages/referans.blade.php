<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="referans"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Referanslar"></x-navbars.navs.auth>

        <div class="content">
            <div class="container">
                <div class="row">

                </div>

                <div class="alert alert-info" role="alert">Yükleme işlemi tamamlandığında lütfen sayfayı yenileyiniz.
                </div>


                <div class="row">
                    <div class="col-md-12 portlets">

                        <div class="m-b-30">
                            <form action="#" class="dropzone" id="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



{{--
                    @foreach ( $fotos as $foto) --}}


                <div class="row port">
                    <div class="portfolioContainer">

                        <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                            <div class="gal-detail thumb">
                                {{-- <a href="{{$foto->resim }}" class="image-popup"><img height="150"
                                        width="100" ></a> --}}
                                <h4 align="center">
                                    <a href="index.php?p=foto_galeri&sil=32"><button
                                            class="btn btn-icon waves-effect waves-light btn-danger m-b-5"><i
                                                class="fa fa-remove"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>

    </main>
    <x-plugins></x-plugins>

</x-layout>
