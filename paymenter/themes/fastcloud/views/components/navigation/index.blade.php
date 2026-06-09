<nav class="w-full px-4 lg:px-8 bg-background-secondary border-b border-neutral md:h-16 flex md:flex-row flex-col justify-between fixed top-0 z-20">
    <div
        x-data="{ 
            slideOverOpen: false,
            hasAside: !!document.getElementById('main-aside')
        }"
        x-init="$watch('slideOverOpen', value => { document.documentElement.style.overflow = value ? 'hidden' : '' })"
        class="relative z-50 w-full h-auto">
        <div
            :class="hasAside ? 'w-full' : 'container'"
            class="flex flex-row items-center justify-between h-16 relative">

            {{-- Лого --}}
            <div class="flex flex-row items-center">
                <a href="{{ route('home') }}" class="flex flex-row items-center h-10 gap-2 fc-nav-logo" wire:navigate>
                    <x-logo class="h-8" />
                </a>
            </div>

            {{-- Меню по центру --}}
            <div class="absolute left-1/2 -translate-x-1/2 md:flex hidden flex-row items-center gap-1">
                <a href="{{ route('pricing') }}" wire:navigate class="fc-mkt-nav-link {{ request()->routeIs('pricing') ? 'on' : '' }}">Тарифы</a>
                <a href="{{ route('locations') }}" wire:navigate class="fc-mkt-nav-link {{ request()->routeIs('locations') ? 'on' : '' }}">Локации</a>
                <a href="{{ route('contacts') }}" wire:navigate class="fc-mkt-nav-link {{ request()->routeIs('contacts') ? 'on' : '' }}">Контакты</a>
            </div>

            <div class="flex flex-row items-center">
                <livewire:components.cart />

                <div class="items-center hidden md:flex mr-1">
                    @if(auth()->check())
                    @php
                        $__rub = \App\Models\Currency::where('code', 'RUB')->first();
                        $__sum = auth()->user()->credits()->sum('amount');
                        $__balance = ($__rub?->prefix ?? '') . number_format($__sum, 2) . ($__rub?->suffix ?? ' ₽');
                    @endphp
                    <a href="{{ route('account.credits') }}" wire:navigate
                       class="text-sm font-semibold text-base hover:text-primary transition-colors duration-200 px-3 py-2 whitespace-nowrap">
                        Баланс: {{ $__balance }}
                    </a>
                    @endif
                </div>

                @if(auth()->check())
                <livewire:components.notifications />
                <div class="hidden lg:flex">
                    <x-dropdown :showArrow="false">
                        <x-slot:trigger>
                            <img src="{{ auth()->user()->avatar }}" class="size-8 rounded-full border border-neutral bg-background" alt="avatar" />
                        </x-slot:trigger>
                        <x-slot:content>
                            <div class="flex flex-col p-2">
                                <span class="text-sm text-base break-words">{{ auth()->user()->name }}</span>
                                <span class="text-sm text-base break-words">{{ auth()->user()->email }}</span>
                            </div>
                            @foreach (\App\Classes\Navigation::getAccountDropdownLinks() as $nav)
                            <x-navigation.link :href="$nav['url']" :spa="isset($nav['spa']) ? $nav['spa'] : true">
                                {{ $nav['name'] }}
                            </x-navigation.link>
                            @endforeach
                            <livewire:auth.logout />
                        </x-slot:content>
                    </x-dropdown>
                </div>
                @else
                <div class="hidden lg:flex flex-row gap-2">
                    <a href="{{ route('login') }}" wire:navigate class="fc-btn-ghost fc-btn-sm">
                        {{ __('navigation.login') }}
                    </a>
                    @if(!config('settings.registration_disabled', false))
                    <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime fc-btn-sm">
                        {{ __('navigation.register') }} &rarr;
                    </a>
                    @endif
                </div>
                @endif
                <button
                    @click="slideOverOpen = !slideOverOpen"
                    class="relative w-10 h-10 flex lg:hidden items-center justify-center rounded-lg hover:bg-neutral transition"
                    aria-label="Toggle Menu">

                    <span
                        x-show="!slideOverOpen"
                        x-transition:enter="transition duration-300"
                        x-transition:enter-start="opacity-0 -rotate-90 scale-75"
                        x-transition:enter-end="opacity-100 rotate-0 scale-100"
                        x-transition:leave="transition duration-150"
                        x-transition:leave-start="opacity-100 rotate-0 scale-100"
                        x-transition:leave-end="opacity-0 rotate-90 scale-75"
                        class="absolute inset-0 flex items-center justify-center"
                        aria-hidden="true">
                        <x-ri-menu-fill class="size-5" />
                    </span>

                    <span
                        x-show="slideOverOpen"
                        x-transition:enter="transition duration-300"
                        x-transition:enter-start="opacity-0 rotate-90 scale-75"
                        x-transition:enter-end="opacity-100 rotate-0 scale-100"
                        x-transition:leave="transition duration-150"
                        x-transition:leave-start="opacity-100 rotate-0 scale-100"
                        x-transition:leave-end="opacity-0 -rotate-90 scale-75"
                        class="absolute inset-0 flex items-center justify-center"
                        aria-hidden="true">
                        <x-ri-close-fill class="size-5" />
                    </span>

                </button>
            </div>
        </div>
        <template x-teleport="body">
            <div
                x-show="slideOverOpen"
                @keydown.window.escape="slideOverOpen=false"
                x-cloak
                class="fixed left-0 right-0 top-16 w-full z-[99]"
                style="height:calc(100dvh - 4rem);"
                aria-modal="true"
                tabindex="-1">
                <div
                    x-show="slideOverOpen"
                    @click.away="slideOverOpen = false"
                    x-transition.opacity.duration.300ms
                    class="absolute inset-0 bg-background-secondary border-t border-neutral shadow-lg"
                    style="position:absolute;inset:0;overflow-y:auto;padding:16px;">

                    <x-navigation.sidebar-links />

                    {{-- Auth-блок --}}
                    <div style="margin-top:12px;padding-top:16px;border-top:1px solid var(--fc-border);">
                        @if(auth()->check())

                            <div
                                x-data="{ userPanelOpen: false }"
                                @keydown.escape.window="userPanelOpen = false"
                                x-cloak
                                class="relative">

                                <button @click="userPanelOpen = true" aria-label="Open user menu" class="flex gap-4 items-center justify-start w-full">
                                    <img src="{{ auth()->user()->avatar }}" class="size-10 rounded-full border border-neutral bg-background" alt="avatar" />
                                    <div class="flex flex-col items-start gap-0.5">
                                        <span class="font-bold text-md">{{ auth()->user()->name }}</span>
                                        <span class="text-sm text-base/70">{{ auth()->user()->email }}</span>
                                    </div>
                                </button>

                                <div
                                    x-show="userPanelOpen"
                                    x-transition:enter="transition-opacity ease-out duration-300"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-60"
                                    x-transition:leave="transition-opacity ease-in duration-200"
                                    x-transition:leave-start="opacity-60"
                                    x-transition:leave-end="opacity-0"
                                    @click="userPanelOpen=false"
                                    class="fixed inset-0 bg-primary/5 backdrop-blur-xs z-40"
                                    style="pointer-events: auto"></div>

                                <div
                                    x-show="userPanelOpen"
                                    x-transition:enter="transition transform ease-out duration-300"
                                    x-transition:enter-start="translate-y-full opacity-0"
                                    x-transition:enter-end="translate-y-0 opacity-100"
                                    x-transition:leave="transition transform ease-in duration-200"
                                    x-transition:leave-start="translate-y-0 opacity-100"
                                    x-transition:leave-end="translate-y-full opacity-0"
                                    class="fixed bottom-0 left-0 right-0 z-50 mx-auto w-full"
                                    style="pointer-events: auto"
                                    @click.away="userPanelOpen = false"
                                    tabindex="-1"
                                    aria-modal="true">
                                    <div class="bg-background-secondary shadow-lg rounded-t-2xl border border-neutral p-6">
                                        <div class="flex gap-4 items-center justify-start">
                                            <img src="{{ auth()->user()->avatar }}" class="size-12 rounded-full border border-neutral bg-background" alt="avatar" />
                                            <div class="flex flex-col gap-0.5">
                                                <span class="font-bold text-lg">{{ auth()->user()->name }}</span>
                                                <span class="text-sm text-base/70">{{ auth()->user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="h-px w-full bg-neutral my-6"></div>
                                        <div class="mt-4 flex flex-col gap-2 w-full">
                                            @foreach (\App\Classes\Navigation::getAccountDropdownLinks() as $nav)
                                            <x-navigation.link :href="$nav['url']" :spa="isset($nav['spa']) ? $nav['spa'] : true">
                                                {{ $nav['name'] }}
                                            </x-navigation.link>
                                            @endforeach
                                            <livewire:auth.logout />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @else
                            <div style="display:flex;flex-direction:column;gap:10px;">
                                @if(!config('settings.registration_disabled', false))
                                <a href="{{ route('register') }}" wire:navigate class="fc-btn-lime fc-btn-block">
                                    {{ __('navigation.register') }} &rarr;
                                </a>
                                @endif
                                <a href="{{ route('login') }}" wire:navigate class="fc-btn-ghost fc-btn-block">
                                    {{ __('navigation.login') }}
                                </a>
                            </div>
                            @endif
                    </div>
                </div>
            </div>
        </template>
    </div>
</nav>
