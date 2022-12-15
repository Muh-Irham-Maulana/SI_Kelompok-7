<div class="tablePagination">
    <div class="tablePagination__info">
        <span>
            Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} entries
        </span>
    </div>
    <div class="tablePagination__showItems">
        <span>Items per page: </span>
        <form action="/admin/employee-working-db" method="get">
            <input class="tablePagination__showInput" type="text" placeholder="{{ $paginator->perPage() }}">
            <input type="submit" hidden>
        </form>
    </div>
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination__items pagination__items--disabled" href="#">&laquo;</a>
        @else
            <a class="pagination__items" href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
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
                        <a class="pagination__items pagination__items--active" aria-current="page"><span>{{ $page }}</span></a>
                    @else
                        <a class="pagination__items" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination__items" href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
        @else
            <a class="pagination__items pagination__items--disabled">&raquo;</a>
        @endif
    </div>
</div>

