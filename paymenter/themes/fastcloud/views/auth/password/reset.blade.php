<div class="fc-auth-solo">
  <div class="fc-auth-solo-inner">

    <div class="fc-auth-solo-logo">
      <a href="{{ route('home') }}" wire:navigate>
        <x-logo class="h-8 w-auto" />
      </a>
    </div>

    <div class="fc-auth-solo-card">
      <h2 class="fc-auth-solo-title">Новый пароль</h2>
      <p class="fc-auth-solo-sub">Придумайте надёжный пароль — минимум 8 символов.</p>

      <form wire:submit="submit" id="reset-confirm" novalidate style="display:flex;flex-direction:column;gap:14px;">

        {{-- Email (prefilled, readonly) --}}
        <div class="fc-field">
          <span class="fc-field-lbl">E-mail</span>
          <input class="fc-inp" type="email"
                 value="{{ $email }}"
                 autocomplete="email"
                 disabled
                 style="opacity:.45;cursor:not-allowed;">
        </div>

        {{-- Новый пароль --}}
        <div class="fc-field @error('password') is-error @enderror">
          <span class="fc-field-lbl">Новый пароль</span>
          <input class="fc-inp" type="password"
                 placeholder="Минимум 8 символов"
                 autocomplete="new-password"
                 wire:model="password"
                 id="password" name="password" required>
          @error('password')
            <span class="fc-field-error">{{ $message }}</span>
          @enderror
        </div>

        {{-- Повтор пароля --}}
        <div class="fc-field @error('password_confirmation') is-error @enderror">
          <span class="fc-field-lbl">Повтор пароля</span>
          <input class="fc-inp" type="password"
                 placeholder="Повторите пароль"
                 autocomplete="new-password"
                 wire:model="password_confirmation"
                 id="password_confirmation" name="password_confirmation" required>
          @error('password_confirmation')
            <span class="fc-field-error">{{ $message }}</span>
          @enderror
        </div>

        <x-captcha :form="'reset'" />

        <button type="submit" class="fc-btn-lime fc-btn-block">
          Сохранить пароль &rarr;
        </button>

      </form>
    </div>

    <div class="fc-auth-solo-foot">
      <a href="{{ route('login') }}" wire:navigate>← Назад ко входу</a>
    </div>

  </div>
</div>
