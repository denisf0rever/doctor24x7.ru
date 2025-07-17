<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>@yield('title')</title>

  <meta name="title" content="@yield('title')">
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">

  <link rel="canonical" href="@yield('canonical')">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:title" content="@yield('title')">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:image" content="{{ Storage::url('common/logoimage.jpg') }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="@yield('canonical')">
  <meta property="og:site_name" content="Телемедицина. Платформа медицинских консультаций онлайн">

  <meta name="theme-color" content="#fff">
  <meta name="robots" content="noindex, nofollow" />

  <link rel="image_src" href="{{ Storage::url('common/logoimage.jpg') }}" />
  <link rel="icon" href="{{ Storage::url('common/favicon.svg') }}" type="svg+xml">
  <link rel="manifest" href="{{ Storage::url('common/favicon/site.webmanifest') }}">

  @vite(['resources/scss/style.scss', 'resources/js/main.min.js'])
  @include('parts.header')

  <main class="main">
    <div class="main__wrapper">
      @yield('content')
    </div>
  </main>

  @include('parts.footer')

</html>