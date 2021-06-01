@php
    $prezzo=$event->prezzo;
    $prezzo=$event->insconto?round(($prezzo-($prezzo*$event->sconto)/100), 2):$prezzo;
@endphp

{{ number_format($prezzo, 2, ',', '.') }}
