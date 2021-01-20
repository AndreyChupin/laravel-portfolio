@if ($paginator->hasPages())

    {{-- Visible links --}}
    @php
        $elements = $paginator->getUrlRange(1, $paginator->lastPage());
        if($paginator->currentPage() <= 4) {

        $elements = array_slice($elements, 0, ($paginator->lastPage() >= 8)? 8: $paginator->lastPage(), true);

        } elseif ($paginator->currentPage() >= $paginator->lastPage() - 3) {

            $elements = array_slice($elements, ($paginator->lastPage() >= 8)? $paginator->lastPage() - 8: 0,$paginator->lastPage(), true);

        }elseif ($paginator->currentPage() >= 5) {

            $elements = array_slice($elements,$paginator->currentPage()-5, ($paginator->lastPage() >= 9)? 9: $paginator->lastPage(), true);

}
    @endphp

    <div class="page__footer">
        <ul class="arrows-pagination">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="arrows-pagination__item" aria-label="@lang('pagination.previous')">
                    <span class="arrows-pagination__item-link">&larr;&nbsp;сюда</span>
                </li>
            @else
                <li class="arrows-pagination__item">

                    <a title="На страницу назад (Alt + &larr;)"
                       class="arrows-pagination__item-link arrows-pagination__item-link_prev" id="previous_page"
                       href="{{ $paginator->previousPageUrl() }}" rel="" aria-label="@lang('pagination.previous')">&larr;&nbsp;<span>сюда</span></a>

                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="arrows-pagination__item">
                    <a class="arrows-pagination__item-link arrows-pagination__item-link_next" id="next_page"
                       href="{{ $paginator->nextPageUrl() }}" rel=""
                       aria-label="@lang('pagination.next')"><span>туда</span>&nbsp;&rarr;</a>
                </li>
            @else
                <li class="arrows-pagination__item" aria-label="@lang('pagination.next')">
                    <span class="arrows-pagination__item-link">туда&nbsp;&rarr;</span>
                </li>
            @endif
        </ul>

        <ul class="toggle-menu toggle-menu_pagination" id="nav-pagess">

            {{-- First Page Link --}}
            @if($paginator->currentPage() >= 6 || $paginator->currentPage() >= $paginator->lastPage() / 2 + 0.5)
                <li class="toggle-menu__item toggle-menu__item_pagination">
                    <a href="{{ $paginator->url(1) }}"
                       class="toggle-menu__item-link toggle-menu__item-link_pagination toggle-menu__item-link_bordered"
                       title="Первая страница" rel="">
                <span class="icon-svg icon-svg_arrow-first"><svg class="icon-svg" width="28" height="24"
                                                                 viewBox="0 0 28 24"><path
                            d="M8.452 5.455l2.93 3.192c.89.969 1.335 1.361 2.225 1.909h-13.608v2.773h13.634c-.838.5-1.492 1.102-2.252 1.913l-2.93 3.192 2.276 1.964 7.588-8.452-7.588-8.452-2.276 1.961zM24.297 0h3.087v23.891h-3.087v-23.891z"/></svg></span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="toggle-menu__item toggle-menu__item_pagination">
                    <span
                        class="toggle-menu__item-link toggle-menu__item-link_pagination toggle-menu__item-link_active">{{ $page }}</span>
                    </li>
                @else
                    <li class="toggle-menu__item toggle-menu__item_pagination">
                        <a href="{{ $url }}"
                           class="toggle-menu__item-link toggle-menu__item-link_pagination">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            {{-- Last Page Link --}}
            @if($paginator->currentPage() <= $paginator->lastPage() - 5 || $paginator->currentPage() <= $paginator->lastPage() / 2 + 0.5)
                <li class="toggle-menu__item toggle-menu__item_pagination">
                    <a title="Последняя страница"
                       class="toggle-menu__item-link toggle-menu__item-link_pagination toggle-menu__item-link_bordered"
                       href="{{ $paginator->url($paginator->lastPage()) }}" rel="">
              <span class="icon-svg icon-svg_arrow-last"><svg class="icon-svg" width="28" height="24"
                                                              viewBox="0 0 28 24"><path
                          d="M8.452 5.455l2.93 3.192c.89.969 1.335 1.361 2.225 1.909h-13.608v2.773h13.634c-.838.5-1.492 1.102-2.252 1.913l-2.93 3.192 2.276 1.964 7.588-8.452-7.588-8.452-2.276 1.961zM24.297 0h3.087v23.891h-3.087v-23.891z"/></svg></span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
@endif
