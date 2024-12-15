	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<meta property="og:title" content="@yield('title')">
	<meta property="og:description" content="@yield('description')">
	<meta property="og:image" content="{{ Storage::url('common/logoimage.jpg') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ config('app.url') }}@yield('canonical')">
	<meta property="og:site_name" content="Телемедицина. Платформа медицинских консультаций онлайн">

	<meta name="theme-color" content="#fff">

	<link rel="image_src" href="{{ Storage::url('common/logoimage.jpg') }}" />
	<link rel="icon" href="{{ Storage::url('common/favicon.svg') }}" type="svg+xml">
	<link rel="manifest" href="{{ Storage::url('common/favicon/site.webmanifest') }}">
  
	@vite(['resources/scss/dashboard/style.scss', 'resources/js/dashboard/app.js'])