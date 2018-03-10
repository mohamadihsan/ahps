<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  	<meta name="description" content="#">
  	<meta name="keywords" content="AHPS, tenaga asing, jakarta, perizinan">
  	<meta name="author" content="Katapanda">
	
	<title>AHPS | @yield('title')</title>

	{{-- include style --}}
	@include('includes.style')

</head>
<body>

	{{-- show loader --}}
	<div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>

	<div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

        	{{-- include navbar --}}
        	@include('includes.navbar')

        	<div class="pcoded-main-container">
    			<div class="pcoded-wrapper">

		        	{{-- include sidebar --}}
		        	@include('includes.sidebar')

					<div class="pcoded-content">
			            <div class="pcoded-inner-content">

			                <div class="main-body">
			                    <div class="page-wrapper">

									{{-- section content --}}
									@yield('content')

								</div>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>
	</div>	

	{{-- include script --}}
	@include('includes.script')

</body>
</html>