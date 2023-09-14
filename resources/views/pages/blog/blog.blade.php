<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="blog"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Blog"></x-navbars.navs.auth>
        @if (\Session::has('message'))
        <div class="alert alert-success">
        <p style="color: white;font-weight:bold">{!! \Session::get('message') !!}</p>
        </div>
        @endif
        <div class="card">

            <div class="row">
                <div class="col-md-1">
                    <div class="dropdown">
                        <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Info
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Seçilenleri Sil</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="btn-group">
                        <a href="{{ route("blogStoreShow") }}" class="btn btn-info waves-effect waves-light w-lg m-b-5">+ Yeni Ekle</a>
                    </div>
                </div>

                {{-- <div class="col-md-2">
                    <div class="btn-group">
                        <form action="{{ route('blogDeleteAll')}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </div>
                </div> --}}
            </div>

            <div class="table">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content">
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:;" tabindex="-1">
                                <span class="material-icons">keyboard_arrow_left
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:;">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">
                                <span class="material-icons">
                                    keyboard_arrow_right
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>


                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Başlık
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Url
                                Adres
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                tarih</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                İŞLEM
                            </th>

                        </tr>
                    </thead>

                    @foreach ($blog as $index=>$blogs)
                        <tbody>
                            <tr>
                                <td class="align-middle text-center text-sm">{{ $index+1 }}</td>

                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $blogs->baslik }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $blogs->urlAdres }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm badge-success">{{ $blogs->created_at}}</span>
                                </td>
                                
                                <td class="align-middle text-center text-sm">
                                    <div class="dropdown">
                                        <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown">
                                            İşlem
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <form action="{{ route('blogEditShow', ['id' => $blogs->id]) }}" method="GET">
                                                    @method('GET')
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">EDİT</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="{{ route('blogDelete', ['id' => $blogs->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Sil</button>
                                                </form>
                                            </li>
                                        </ul>

                                    </div>
                                </td>


                            </tr>


                        </tbody>
                    @endforeach
                </table>

            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>

                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>

    </main>
    <x-plugins></x-plugins>

</x-layout>
