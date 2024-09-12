<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />

    <link rel="canonical" href="https://okuoku.ru/@yield('canonical')"/>

	<meta name="keywords" content="@yield('keywords', 'Консультация офтальмолога онлайн')" />
	<meta name="description" content="@yield('description', 'Консультация офтальмолога онлайн: круглосуточно по телефону и в чате')" />
	<meta name="title" content="@yield('title', 'Консультация офтальмолога онлайн: круглосуточно по телефону и в чате')" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<meta property="og:title" content="Консультация офтальмолога онлайн: круглосуточно по телефону и в чате"/>
	<meta property="og:description" content="OkuOku: онлайн сервис офтальмологов, консультации, истории, статьи, врачи">
	<meta property="og:image" content="/logoimage.jpg">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://okuoku.ru/">
	<meta property="og:site_name" content="Консультация офтальмолога онлайн: круглосуточно по телефону и в чате">
	<link rel="image_src" href="/logoimage.jpg" />
	<meta name="theme-color" content="#fff">

	@vite(['resources/scss/style.scss', 'resources/js/main.min.js'])
	@yield('chat')
	@include('parts.header')
	
    <main class="main">
		@yield('content')
	</main>  
	@include('parts.footer')
</html>