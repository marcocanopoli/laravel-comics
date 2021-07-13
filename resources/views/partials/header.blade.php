<header>
    <div class="container">
        <a href="#">
            <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo">
        </a>
        <ul>
            @foreach (config('menu') as $item)
            <li>
                <a href="{{ $item['url'] }}"                
                    @if ($item['active'])
                    class="active"
                    @endif>{{ $item['text'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>        
</header>