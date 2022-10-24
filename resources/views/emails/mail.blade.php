@component('mail::message')
{!! nl2br($data['body'])!!}<br><br>

{{-- @component('mail::button', ['url' => $url])
cliquer ici
@endcomponent --}}

Bien cordialemnt,<br>

@endcomponent
