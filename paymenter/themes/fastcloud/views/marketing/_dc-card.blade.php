<div class="fc-dc-card">
  <div style="display:flex;align-items:center;gap:12px;">
    <div class="fc-dc-flag">{{ $flag }}</div>
    <div>
      <div style="font-weight:700;font-size:15px;">{{ $name }}</div>
      <div style="font-size:12px;color:var(--fc-text2);">{{ $city }} · {{ $code }}</div>
    </div>
    <div style="flex:1;"></div>
    @if($online)
    <span class="fc-dot-green">онлайн</span>
    @else
    <span class="fc-dot-red">офлайн</span>
    @endif
  </div>

  <div class="fc-dc-specs">
    <div class="fc-dc-spec">
      <div style="font-size:11px;color:var(--fc-text3);margin-bottom:4px;">Сеть</div>
      <div style="font-weight:700;font-size:13px;">{{ $network }}</div>
    </div>
    <div class="fc-dc-spec">
      <div style="font-size:11px;color:var(--fc-text3);margin-bottom:4px;">Хранилище</div>
      <div style="font-weight:700;font-size:13px;">{{ $storage }}</div>
    </div>
    <div class="fc-dc-spec">
      <div style="font-size:11px;color:var(--fc-text3);margin-bottom:4px;">Anti-DDoS</div>
      <div style="font-weight:700;font-size:13px;">{{ $ddos }}</div>
    </div>
    <div class="fc-dc-spec">
      <div style="font-size:11px;color:var(--fc-text3);margin-bottom:4px;">Аптайм</div>
      <div style="font-weight:700;font-size:13px;">{{ $uptime }}</div>
    </div>
  </div>

  <a href="{{ route('pricing') }}#loc={{ $slug }}" wire:navigate class="fc-btn-ghost" style="text-align:center;">Выбрать локацию &rarr;</a>
</div>
