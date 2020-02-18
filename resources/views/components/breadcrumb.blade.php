<ol class="breadcrumb">
    @foreach($items as $item)
        <li class="breadcrumb-item @if ($loop->last) active @endif">
            @if (!$loop->last)
                <a href="{{ isset($item['route']) ? route($item['route']) : '#' }}">{{ $item['text'] ?? 'No name' }}</a>
            @else
                {{ $item['text'] ?? 'No name' }}
            @endif
        </li>
    @endforeach
</ol>
