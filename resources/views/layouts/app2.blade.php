<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">

    <style>
        .custom{
			display: inline;
			/* display:inline-block; */
            width: 80px;
            height: auto;
			top: -5px;
			margin: -5px;
        }
    </style>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Carregando...
			</div>
		</div>
	</div>
	<div class="header">
    <div class="header-left">
    </div>
    <div class="header-right">
        <div class="user-notification">
        <b>{{ $resultado['temp'] }}°C</b>
        </div>

        <div class="user-notification custom">
        <center>
            <img class="custom" src="{{ asset('vendors/images/clima') }}/{{ $resultado['img_id'] }}.png">
        </center>
        </div>
        <div class="user-notification">
        <b>{{ $resultado['description'] }}</b>
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
</div>



    @yield('content')
	<!-- js -->
	<script src="{{ asset('vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
	<script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('vendors/scripts/dashboard.js') }}"></script>
</body>
</html>
