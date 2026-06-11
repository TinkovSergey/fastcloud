@php
$lightLogo = config('settings.logo');
$darkLogo  = config('settings.logo_dark');

// Фолбэк: если настройки не загрузились из конфига, проверяем файлы на диске напрямую
if (!$darkLogo  && \Illuminate\Support\Facades\Storage::disk('public')->exists('logo-dark.webp'))  { $darkLogo  = 'logo-dark.webp'; }
if (!$lightLogo && \Illuminate\Support\Facades\Storage::disk('public')->exists('logo-light.webp')) { $lightLogo = 'logo-light.webp'; }
@endphp

@if ($lightLogo && $darkLogo)
<img src="{{ Storage::url($lightLogo) }}" alt="{{ config('app.name') }}" {{ $attributes->merge(['class' => 'w-auto block dark:hidden']) }}>
<img src="{{ Storage::url($darkLogo) }}" alt="{{ config('app.name') }}" {{ $attributes->merge(['class' => 'w-auto hidden dark:block']) }}>
@elseif ($lightLogo)
<img src="{{ Storage::url($lightLogo) }}" alt="{{ config('app.name') }}" {{ $attributes->merge(['class' => 'w-auto inline-block']) }}>
@elseif ($darkLogo)
<img src="{{ Storage::url($darkLogo) }}" alt="{{ config('app.name') }}" {{ $attributes->merge(['class' => 'w-auto inline-block']) }}>
@else
<img src="{{ asset('images/logo-fastcloud-black.svg') }}" alt="{{ config('app.name') }}"
     {{ $attributes->merge(['class' => 'h-8 w-auto block dark:hidden']) }}>
<img src="{{ asset('images/logo-fastcloud.svg') }}" alt="{{ config('app.name') }}"
     {{ $attributes->merge(['class' => 'h-8 w-auto hidden dark:block']) }}>
@endif
