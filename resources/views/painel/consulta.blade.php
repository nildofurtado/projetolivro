@extends('layouts.app2')

@section('content')
{{-- <div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
            Loading...
        </div>
    </div>
</div>

<div class="header">
    <div class="header-left">
    </div>
    <div class="header-right">
        <div class="user-notification">
        <b>{{ @$resultado['temp'] }}°C</b>
        </div>

        <div class="user-notification custom">
        <center>
            <img class="custom" src="{{ asset('vendors/images/clima') }}/{{ @$resultado['img_id'] }}.png">
        </center>
        </div>
        <div class="user-notification">
        <b>{{ @$resultado['description'] }}</b>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="vendors/images/photo1.jpg" alt="">
                    </span>
                    <span class="user-name">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    {{-- <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="dw dw-logout"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Livros</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('home')}}">Cadastro</a></li>
                        <li><a href="{{route('livros.consulta')}}">Consulta</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div> --}}
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20">
        <form method="POST" action="{{ route('livros.store') }}">
        @csrf
        <div class="row">
            <div class="col-xl-12 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Dados</h2>
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Funções</th>
                                </tr>
                            </thead>
                        @foreach ($dados as $d)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $d->id }}</th>
                                    <th scope="row">{{ $d->Autor }}</th>
                                    <th scope="row">{{ $d->Titulo }}</th>
                                    <th scope="row">{{ $d->Dtcad }}</th>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#e1">Editar</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#d1">Excluir</button>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                    <div class="row">
                        <div class="col-xl-12 mb-30">
                            {{ $dados }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="modal fade" id="e1" tabindex="-1" role="dialog" aria-labelledby="e1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">EDITAR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-xl-12 mb-30">
                                <div class="card-box height-100-p pd-20">
                                    <h2 class="h4 mb-20">Dados</h2>
                                    <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Título</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Autor</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Descrição</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Numero de Paginas</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Data de Cadastro</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>

                                            
                                    </div>
                                    <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <input type="Reset" value="Reset" class="btn btn-danger">
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>
@endsection
