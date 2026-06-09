<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(in_array(app()->getLocale(), config('app.rtl_locales'))) dir="rtl" @endif>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name', 'Fast Cloud') }}
        @isset($title)
        - {{ $title }}
        @endisset
    </title>
    @livewireStyles
    @vite(['themes/' . config('settings.theme') . '/js/app.js', 'themes/' . config('settings.theme') . '/css/app.css'], config('settings.theme'))
    @include('layouts.colors')

    @if (config('settings.favicon'))
    <link rel="icon" href="{{ Storage::url(config('settings.favicon')) }}">
    @else
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @endif
    @isset($title)
    <meta content="{{ isset($title) ? config('app.name', 'Fast Cloud') . ' - ' . $title : config('app.name', 'Fast Cloud') }}" property="og:title">
    <meta content="{{ isset($title) ? config('app.name', 'Fast Cloud') . ' - ' . $title : config('app.name', 'Fast Cloud') }}" name="title">
    @endisset
    @isset($description)
    <meta content="{{ $description }}" property="og:description">
    <meta content="{{ $description }}" name="description">
    @endisset
    @isset($image)
    <meta content="{{ $image }}" property="og:image">
    <meta content="{{ $image }}" name="image">
    @endisset

    <meta name="theme-color" content="{{ theme('primary') }}">

    <link rel="stylesheet" href="{{ asset('fastcloud/marketing.css') }}">
    {!! hook('head') !!}
    <style>[wire\:name="components\.locale-switch"]{display:none!important}</style>
</head>

@php
$isAuth     = Route::is('login', 'register', 'password.*', '2fa');
$isMkt      = Route::is('home', 'pricing', 'locations', 'contacts', 'offer', 'privacy', 'sla', 'products.checkout');
$isCheckout = Route::is('products.checkout');
@endphp
<body class="w-full bg-background text-base min-h-screen antialiased {{ $isAuth ? 'fc-auth-body fc-marketing' : 'flex flex-col' }} {{ $isMkt ? 'fc-marketing' : '' }} {{ $isCheckout ? 'fc-is-checkout' : '' }}"
    x-cloak
    x-data="{
        theme: $persist('system').as('theme_mode'),
        systemDark: window.matchMedia('(prefers-color-scheme: dark)').matches,
        init() {
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                this.systemDark = e.matches;
            });
        },
        get isDark() {
            return true;
        }
    }"
    :class="{'dark': isDark}"
>
    {!! hook('body') !!}
    @if($isAuth)
    {{-- Auth pages: no nav, no wrappers, no flex context --}}
    {{ $slot }}
    @else
    <x-navigation />
    <div class="w-full flex flex-grow">
        @if (isset($sidebar) && $sidebar)
        <x-navigation.sidebar title="$title" />
        @endif
        <div class="{{ (isset($sidebar) && $sidebar) ? 'md:ml-64 rtl:ml-0 rtl:md:mr-64' : '' }} flex flex-col flex-grow {{ $isCheckout ? '' : 'overflow-auto' }}">
            <main class="mt-16 grow">
                {{ $slot }}
            </main>
            <x-notification />
            <x-confirmation />
            <div class="flex">
                <x-navigation.footer />
            </div>
        </div>
        <x-impersonating />
    </div>
    {!! hook('footer') !!}
    @endif
    {{-- Cookie banner --}}
    <div id="fc-cookie-bar">
      <div id="fc-cookie-bar-inner">
        <div class="fc-cookie-text">
          <strong>Файлы cookie</strong> — используем их для корректной работы сайта.
          <a href="{{ route('privacy') }}">Политика конфиденциальности</a>
        </div>
        <div class="fc-cookie-btns">
          <button id="fc-cookie-decline" class="fc-btn-ghost" style="padding:8px 16px;font-size:13px;">Только необходимые</button>
          <button id="fc-cookie-accept" class="fc-btn-primary" style="padding:8px 16px;font-size:13px;">Принять все</button>
        </div>
      </div>
    </div>
    <script>
    (function(){
      if(localStorage.getItem('fc_cookie_consent'))return;
      var bar=document.getElementById('fc-cookie-bar');
      requestAnimationFrame(function(){requestAnimationFrame(function(){bar.classList.add('visible');});});
      function dismiss(v){localStorage.setItem('fc_cookie_consent',v);bar.classList.remove('visible');setTimeout(function(){bar.remove();},400);}
      document.getElementById('fc-cookie-accept').addEventListener('click',function(){dismiss('all');});
      document.getElementById('fc-cookie-decline').addEventListener('click',function(){dismiss('necessary');});
    })();
    </script>
    @livewireScriptConfig
</body>

</html>
