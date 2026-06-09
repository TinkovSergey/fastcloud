<div class="lg:px-4 lg:py-6 flex flex-col gap-2">
    {{-- Маркетинговые ссылки — только на мобиле --}}
    <div class="flex flex-col md:hidden border-b border-neutral pb-3 mb-1">
        <a href="{{ route('pricing') }}" wire:navigate
           class="fc-mkt-mob-link {{ request()->routeIs('pricing') ? 'on' : '' }}">Тарифы</a>
        <a href="{{ route('locations') }}" wire:navigate
           class="fc-mkt-mob-link {{ request()->routeIs('locations') ? 'on' : '' }}">Локации</a>
        <a href="{{ route('contacts') }}" wire:navigate
           class="fc-mkt-mob-link {{ request()->routeIs('contacts') ? 'on' : '' }}">Контакты</a>
    </div>

    <div class="flex flex-col gap-2">
        @foreach (\App\Classes\Navigation::getDashboardLinks() as $nav)
        @if (!empty($nav['children']))
        <div x-data="{ activeAccordion: {{ $nav['active'] ? 'true' : 'false' }} }"
            class="relative w-full mx-auto overflow-hidden text-sm font-normal divide-y divide-gray-200">
            <div class="cursor-pointer">
                <button @click="activeAccordion = !activeAccordion"
                    class="flex items-center justify-between w-full p-3 text-sm font-semibold whitespace-nowrap rounded-lg hover:bg-primary/5">
                    <div class="flex flex-row gap-2">
                        @isset($nav['icon'])
                            <x-dynamic-component :component="$nav['icon']"
                                class="size-5 {{ $nav['active'] ? 'text-primary' : 'fill-base/50' }}" />
                        @endisset
                        <span>{{ $nav['name'] }}</span>
                    </div>
                    <x-ri-arrow-down-s-line x-bind:class="{ 'rotate-180': activeAccordion }"
                        class="size-4 text-base ease-out duration-300" />
                </button>
                <div x-show="activeAccordion" x-collapse x-cloak>
                    <div class="pt-0 pb-4 pr-4 opacity-70 fc-sidebar-children">
                        @foreach ($nav['children'] as $child)
                            @if ($child['condition'] ?? true)
                            <div class="flex items-center space-x-2">
                                <x-navigation.link :href="$child['url']"
                                    :spa="$child['spa'] ?? true"
                                    class="{{ $child['active'] ? 'text-primary font-bold' : '' }}">
                                    {{ $child['name'] }}
                                </x-navigation.link>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="flex items-center rounded-lg {{ $nav['active'] ? 'bg-primary/5' : 'hover:bg-primary/5' }}">
            <x-navigation.link :href="$nav['url']"
                :spa="$nav['spa'] ?? true"
                class="w-full">
                @isset($nav['icon'])
                    <x-dynamic-component :component="$nav['icon']"
                        class="size-5 {{ $nav['active'] ? 'text-primary' : 'fill-base/50' }}" />
                @endisset
                {{ $nav['name'] }}
            </x-navigation.link>
        </div>
        @endif
        @isset($nav['separator'])
        <div class="h-px w-full bg-neutral"></div>
        @endisset
        @endforeach
        <div class="flex flex-row items-center mt-4 justify-between md:hidden">
            {{-- <livewire:components.locale-switch /> --}}

            <x-theme-toggle />

        </div>
    </div>
</div>
