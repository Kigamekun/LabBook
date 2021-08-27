<!DOCTYPE HTML>

<html>

<head>
    <title>PLab</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ url('/Homes/') }}/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="{{ url('/Homes/') }}/assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div>
                <img src="https://pjj.smkn4bogor.sch.id/pluginfile.php/1/theme_klass/logo/1628215534/70.png">
            </div>
            <div class="content">
                <div class="inner">
                    <h1>PEMINJAMAN LAB RPL</h1>

                    <p>Ini Merupakan Sebuah Website untuk Melakukan Peminjaman Laboratorium RPL SMKN4 Bogor</p>
                    @if (is_null(Auth::id()))
					<p><strong style="color: red;">SILAHKAN REGISTRASI TERLEBIH DAHULU</strong></p>
					@else
					<p><strong style="color: red;">KE DASHBOARD COK</strong></p>
					@endif
					
					
                </div>
            </div>
            <nav>
				<ul>
				@if (is_null(Auth::id()))

                    <li><a href="{{ url('/') }}/login">LOGIN</a></li>
                    <li><a href="{{ url('/') }}/register"><strong>REGISTER</strong></a></li>
                    <!--<li><a href="#elements">Elements</a></li>-->
					@else 
					<li><a href="{{ url('/') }}/login">DASHBOARD</a></li>
					@endif
                </ul>
            </nav>
        </header>

     
        <!-- Footer -->
        <footer id="footer">
            <p>DESIGN BY SQUAD CODING <a href="https://chat.whatsapp.com/DmS0GNDsMzP1AfE98q8hRl" style="color: orange;"> GABUNG YUK!!!</a></p>
        </footer>

    </div>

    <!-- BG -->
    <div id="bg"></div>

    <!-- Scripts -->
    <script src="{{ url('/Homes/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('/Homes/') }}/assets/js/browser.min.js"></script>
    <script src="{{ url('/Homes/') }}/assets/js/breakpoints.min.js"></script>
    <script src="{{ url('/Homes/') }}/assets/js/util.js"></script>
    <script src="{{ url('/Homes/') }}/assets/js/main.js"></script>

</body>

</html>