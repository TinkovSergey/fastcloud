<div class="fc-auth-solo">
  <div class="fc-auth-solo-inner">

    <div class="fc-auth-solo-logo">
      <a href="{{ route('home') }}" wire:navigate>
        <x-logo class="h-8 w-auto" />
      </a>
    </div>

    <div class="fc-auth-solo-card">
      <h2 class="fc-auth-solo-title">Восстановление пароля</h2>
      <p class="fc-auth-solo-sub">Введите e-mail — пришлём ссылку для сброса.</p>

      <form wire:submit="submit" id="reset" novalidate style="display:flex;flex-direction:column;gap:14px;">

        <div class="fc-field @error('email') is-error @enderror">
          <span class="fc-field-lbl">E-mail</span>
          <input class="fc-inp" type="email"
                 placeholder="ivan@example.com"
                 autocomplete="email"
                 wire:model="email"
                 id="email" name="email" required>
          @error('email')
            <span class="fc-field-error">{{ $message }}</span>
          @enderror
        </div>

        <x-captcha :form="'reset'" />

        <button type="submit" class="fc-btn-lime fc-btn-block">
          Отправить ссылку &rarr;
        </button>

      </form>
    </div>

    <div class="fc-auth-solo-foot">
      <a href="{{ route('login') }}" wire:navigate>← Назад ко входу</a>
    </div>

  </div>
</div>
