@extends('layouts.app2')

@section('content')
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20">
        <form>
        <div class="row">
            <div class="col-xl-6 mb-30">
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
       
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>
@endsection
