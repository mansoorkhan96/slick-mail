@props(['url'])
<table style="margin-left: -2px; margin-bottom: 25px">
<tr>
<td class="header">
<a href="{{ config('app.url') }}" style="display: inline-block;">
@if (config('slick-mail.logo_path'))
<img src="{{ config('slick-mail.logo_path') }}" class="logo" alt="{{ config('app.name') }} Logo">
@else
{{ config('app.name') }}
@endif
</a>
</td>
</tr>
</table>
