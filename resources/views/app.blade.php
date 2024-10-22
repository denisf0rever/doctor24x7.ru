<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>@yield('title')</title>

  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">

  <link rel="canonical" href="{{ config('app.url') }}@yield('canonical')">

  <meta name="description" content="@yield('description')">
  <meta name="title" content="@yield('title')">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:title" content="@yield('title')">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:image" content="/images/logoimage.jpg">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ config('app.url') }}@yield('canonical')">
  <meta property="og:site_name"
    content="Онлайн сервис медицинских консультаций: педиатр и гинеколог, а также другие врачи">

  <meta name="theme-color" content="#fff">

  <link rel="image_src" href="/images/logoimage.jpg" />
  <link rel="icon" href="/images/favicon/favicon.svg" type="svg+xml">
  <link rel="manifest" href="/images/favicon/site.webmanifest">

  @vite(['resources/scss/style.scss', 'resources/js/main.min.js'])
  @yield('chat')
  @include('parts.header')

  <main class="main">
    @yield('content')
  </main>
  @include('parts.footer')

</html>