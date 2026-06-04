<div class="fc-page fc-auth-page">

    {{-- ── Левая колонка ── --}}
    <aside class="fc-auth-side">
      <a href="{{ route('home') }}" wire:navigate class="fc-auth-logo">
        <svg viewBox="0 0 110 24" height="22" xmlns="http://www.w3.org/2000/svg" aria-label="FastCloud">
          <text x="0" y="19" font-family="Instrument Serif, Georgia, serif" font-style="italic" font-size="24" font-weight="400" fill="#20b5eb">fast</text>
          <text x="33" y="19" font-family="Bricolage Grotesque, system-ui, sans-serif" font-size="22" font-weight="700" letter-spacing="-1" fill="currentColor">cloud</text>
        </svg>
      </a>

      <div class="fc-auth-side-body">
        <div class="fc-auth-eyebrow">sign up · fastcloud.eu</div>
        <h1 class="fc-auth-side-title">Сервер за&nbsp;<em>55&nbsp;секунд.</em></h1>
        <p class="fc-auth-side-sub">
          Без верификации, без скрытых платежей.
          Просто e&#8209;mail — и&nbsp;сразу в&nbsp;работу.
        </p>
        <ul class="fc-auth-side-list">
          <li>NVMe&nbsp;Gen4 · AMD&nbsp;EPYC · сеть 10&nbsp;Gbps</li>
          <li>Anti&#8209;DDoS 10&nbsp;Gbps и&nbsp;бэкапы 14&nbsp;дней включены</li>
          <li>10&nbsp;локаций по&nbsp;миру · SLA&nbsp;99,99%</li>
        </ul>
      </div>

      <div class="fc-auth-side-foot">
        <a href="#">оферта</a><span>·</span>
        <a href="#">конфиденциальность</a><span>·</span>
        <a href="#">поддержка</a>
      </div>
    </aside>

    {{-- ── Правая колонка с формой ── --}}
    <main class="fc-auth-pane">
      <div class="fc-auth-card">
        <h2 class="fc-auth-card-h">Создать аккаунт</h2>

        <form class="fc-auth-card-form" wire:submit.prevent="submit" id="register">

          {{-- Имя / Фамилия --}}
          <div class="fc-auth-grid">
            <div class="fc-field @error('first_name') is-error @enderror">
              <span class="fc-field-lbl">Имя</span>
              <input class="fc-inp" type="text"
                     placeholder="{{ __('general.input.first_name_placeholder') }}"
                     wire:model="first_name"
                     id="first_name" name="first_name" required>
              @error('first_name')
                <span class="fc-field-error">{{ $message }}</span>
              @enderror
            </div>

            <div class="fc-field @error('last_name') is-error @enderror">
              <span class="fc-field-lbl">Фамилия</span>
              <input class="fc-inp" type="text"
                     placeholder="{{ __('general.input.last_name_placeholder') }}"
                     wire:model="last_name"
                     id="last_name" name="last_name" required>
              @error('last_name')
                <span class="fc-field-error">{{ $message }}</span>
              @enderror
            </div>
          </div>

          {{-- Email --}}
          <div class="fc-field @error('email') is-error @enderror">
            <span class="fc-field-lbl">E-mail</span>
            <input class="fc-inp" type="email"
                   placeholder="{{ __('general.input.email_placeholder') }}"
                   wire:model="email"
                   id="email" name="email" required>
            @error('email')
              <span class="fc-field-error">{{ $message }}</span>
            @enderror
          </div>

          {{-- Пароли --}}
          <div class="fc-auth-grid">
            <div class="fc-field @error('password') is-error @enderror">
              <span class="fc-field-lbl">Пароль</span>
              <input class="fc-inp" type="password"
                     placeholder="{{ __('general.input.password_placeholder') }}"
                     wire:model="password"
                     id="password" name="password" required>
              @error('password')
                <span class="fc-field-error">{{ $message }}</span>
              @enderror
            </div>

            <div class="fc-field @error('password_confirmation') is-error @enderror">
              <span class="fc-field-lbl">Повтор пароля</span>
              <input class="fc-inp" type="password"
                     placeholder="{{ __('general.input.password_confirmation_placeholder') }}"
                     wire:model="password_confirmation"
                     id="password_confirmation" name="password_confirmation" required>
              @error('password_confirmation')
                <span class="fc-field-error">{{ $message }}</span>
              @enderror
            </div>
          </div>

          {{-- Кастомные поля (из настроек) --}}
          <x-form.properties :custom_properties="$custom_properties" :properties="$properties" />

          {{-- ToS --}}
          @if(config('settings.tos'))
          <label class="fc-auth-check">
            <input type="checkbox" wire:model="tos" name="tos" required>
            <span>
              {{ __('product.tos') }}
              <a href="{{ config('settings.tos') }}" target="_blank">
                {{ __('product.tos_link') }}
              </a>
            </span>
          </label>
          @endif

          <x-captcha :form="'register'" />

          <button type="submit" class="fc-btn-lime fc-btn-block">
            Создать аккаунт &rarr;
          </button>
        </form>

        <p class="fc-auth-foot">
          Уже есть аккаунт?
          <a href="{{ route('login') }}" wire:navigate>Войти</a>
        </p>
      </div>
    </main>

</div>
