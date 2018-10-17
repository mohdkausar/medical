<!DOCTYPE html>
<!-- saved from url=(0039)index.html -->
<html lang="en">
	<head>
		<title>Medical</title>
		@include('layouts.header')
	</head>
	<body cz-shortcut-listen="true">
		<header>
			@include('layouts.header_view')
		</header>
		<main class="main-body">
		    @yield('content')
	   	</main>
	    <footer>
	    	@include('layouts.footer_view')
	    	@include('layouts.footer')
	    </footer>
	</body>
</html>
