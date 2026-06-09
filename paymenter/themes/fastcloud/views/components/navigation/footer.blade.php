<footer class="fc-footer">
  <div class="fc-footer-inner">
    <div class="fc-footer-grid">

      {{-- Brand --}}
      <div>
        <a href="{{ route('home') }}" class="fc-footer-logo">
          <x-logo class="h-8" />
        </a>
        <p class="fc-footer-desc">
          Скорость как продукт. VPS в&nbsp;10 локациях по&nbsp;миру.
          NVMe Gen4 &middot; Anti&#8209;DDoS &middot; SLA&nbsp;99,99%.
        </p>
      </div>

      {{-- Продукт --}}
      <div class="fc-footer-col">
        <div class="fc-footer-label">Продукт</div>
        <a href="{{ route('pricing') }}" wire:navigate>Тарифы</a>
        <a href="{{ route('locations') }}" wire:navigate>Локации</a>
        <a href="{{ route('contacts') }}" wire:navigate>Контакты</a>
      </div>

      {{-- Юридическое --}}
      <div class="fc-footer-col">
        <div class="fc-footer-label">Юридическое</div>
        <a href="{{ route('offer') }}" wire:navigate>Договор&#8209;оферта</a>
        <a href="{{ route('privacy') }}" wire:navigate>Конфиденциальность</a>
        <a href="{{ route('sla') }}" wire:navigate>SLA</a>
      </div>

      {{-- Поддержка --}}
      <div class="fc-footer-col">
        <div class="fc-footer-label">Поддержка</div>
        <a href="{{ route('contacts') }}" wire:navigate>Написать нам</a>
        <a href="mailto:support@fastcloud.eu">support@fastcloud.eu</a>
        <a href="https://t.me/fastcloud_status" target="_blank" rel="noopener">Telegram&#8209;статус</a>
      </div>

    </div>
  </div>
  <div class="fc-footer-copy">
    <span>&copy; {{ date('Y') }} FastCloud</span>
    <span>GDPR &middot; PCI&nbsp;DSS &middot; Uptime&nbsp;99,99%</span>
  </div>
</footer>
