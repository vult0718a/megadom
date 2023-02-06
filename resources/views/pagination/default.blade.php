@if ($paginator->hasPages())
    <ul class="pager">
        @if ($paginator->onFirstPage())
            <li class="disabled"><span class="paginate-custom"><< Previous</span></li>
        @else
            <li><a class="paginate-custom" href="{{ $paginator->previousPageUrl() }}" rel="prev"><< Previous</a></li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><span class="paginate-custom">{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span class="paginate-custom">{{ $page }}</span></li>
                    @else
                        <li><a class="paginate-custom" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li><a class="paginate-custom" href="{{ $paginator->nextPageUrl() }}" rel="next">Next >></a></li>
        @else
            <li class="disabled"><span class="paginate-custom">Next >></span></li>
        @endif
    </ul>
@endif 