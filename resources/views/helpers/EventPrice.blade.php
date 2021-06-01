@php
    $prezzo=$event->prezzo;
    $prezzo=$event->insconto?round(($prezzo-($prezzo*$event->sconto)/100), 2):$prezzo;
@endphp

<p class="prezzo"> {{ number_format($prezzo, 2, ',', '.') }} € </p>

@if ($event->insconto)
<p class="discprezzo"> Valore <del>{{ number_format($event->prezzo, 2, ',', '.') }} €</del><br>
    Sconto {{ $event->sconto }}%</p>
@endif