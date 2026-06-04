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
        <div class="fc-auth-eyebrow">login · fastcloud.eu</div>
        <h1 class="fc-auth-side-title">С&nbsp;<em>возвращением.</em></h1>
        <p class="fc-auth-side-sub">Серверы работают. Баланс, графики и&nbsp;консоль ждут внутри.</p>
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
        <h2 class="fc-auth-card-h">Войти в&nbsp;аккаунт</h2>

        <form class="fc-auth-card-form" wire:submit="submit" id="login">

          {{-- Email --}}
          <div class="fc-field @error('email') is-error @enderror">
            <span class="fc-field-lbl">E-mail</span>
            <input class="fc-inp" type="email"
                   placeholder="vasya@example.com"
                   autocomplete="email"
                   wire:model="email"
                   id="email" name="email" required>
            @error('email')
              <span class="fc-field-error">{{ $message }}</span>
            @enderror
          </div>

          {{-- Пароль --}}
          <div class="fc-field @error('password') is-error @enderror">
            <span class="fc-field-lbl fc-field-lbl-row">
              <span>Пароль</span>
              <a href="{{ route('password.request') }}">забыл?</a>
            </span>
            <input class="fc-inp" type="password"
                   placeholder="••••••••"
                   autocomplete="current-password"
                   wire:model="password"
                   id="password" name="password" required>
            @error('password')
              <span class="fc-field-error">{{ $message }}</span>
            @enderror
          </div>

          {{-- Запомнить --}}
          <label class="fc-auth-check">
            <input type="checkbox" wire:model="remember">
            <span>Запомнить меня</span>
          </label>

          <x-captcha :form="'login'" />

          <button type="submit" class="fc-btn-lime fc-btn-block">
            Войти &rarr;
          </button>
        </form>

        {!! hook('auth.login') !!}

        @if(config('settings.oauth_github') || config('settings.oauth_google') || config('settings.oauth_discord'))
        <div class="fc-auth-or"><span>или</span></div>
        <div class="fc-auth-socials">
          @foreach(['github', 'google', 'discord'] as $provider)
          @if(config('settings.oauth_' . $provider))
          <a href="{{ route('oauth.redirect', $provider) }}"
             class="fc-btn-ghost fc-auth-soc">
            <img src="/assets/images/{{ $provider }}-dark.svg"
                 alt="{{ $provider }}" style="width:16px;height:16px;">
            {{ ucfirst($provider) }}
          </a>
          @endif
          @endforeach
        </div>
        @endif

        @if(!config('settings.registration_disabled', false))
        <p class="fc-auth-foot">
          Нет аккаунта?
          <a href="{{ route('register') }}" wire:navigate>Создать</a>
        </p>
        @endif
      </div>
    </main>

</div>
