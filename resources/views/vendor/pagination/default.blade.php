


@if ($paginator->hasPages())
    <div class="pagination">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><a class="p-prev p-d" href="javascript:void(0)"></a></li>

            @else
                <li><a class="p-prev p-d" href="{{ $paginator->previousPageUrl() }}"></a></li>

            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>

                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="active">{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="p-next p-d" href="{{ $paginator->nextPageUrl() }}"></a></li>

            @else
                <li><a class="p-next p-d" href="javascript:void(0)"></a></li>

            @endif
        </ul>
    </div>
@endif
