@if ($paginator->hasPages())
    <ul class="pager">
        @if ($paginator->onFirstPage())
            <li class="disabled previous"><span><< Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><< Previous</a></li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active number-page" data-page="{{ $page }}"><span>{{ $page }}</span></li>
                    @else
                        @if($page != $paginator->lastPage())
                            <li class="number-page" data-page="{{ $page }}"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next >></a></li>
            <li><a href="{{ \Request::url().'?page='.$paginator->lastPage() }}">{{ $paginator->lastPage() }}</a></li>
        @endif
    </ul>
@endif