@props([
    'url',
    'color' => 'primary',
    'align' => 'center',
])
<table class="action" role="presentation" style="text-align: {{ $align }}">
<tr>
<td>
<a href="{{ $url }}" class="button button-{{ $color }}" target="_blank" rel="noopener">{{ $slot }}</a>
</td>
</tr>
</table>
