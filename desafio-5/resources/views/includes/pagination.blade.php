@if ($paginator->hasPages())
    <nav>
      <ul class="pagination">
        @if ($paginator->onFirstPage())
          <li class="page-item arrow-item prev-item">
            <span class="arrow prev disabled"><i data-feather="chevron-left"></i></span>
          </li>
        @else
          <li class="page-item arrow-item prev-item">
            <a class="arrow prev" href="{{ $paginator->previousPageUrl() }}"><i data-feather="chevron-left"></i></a>
          </li>
        @endif
        @foreach ($elements as $element)
          @if (is_string($element))
            <li class="page-item"><span class="page-link disabled">{{ $element }}</span></li>
          @endif

          @if (is_array($element))
            @foreach ($element as $page => $url)
              @if ($page == $paginator->currentPage())
                <li class="page-item"><span class="page-link active">{{ $page }}</span></li>
              @else
                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
              @endif
            @endforeach
          @endif
        @endforeach
          @if ($paginator->hasMorePages())
            <li class="page-item arrow-item next-item">
              <a class="arrow next" href="{{ $paginator->nextPageUrl() }}"><i data-feather="chevron-right"></i></a>
            </li>
          @else
            <li class="page-item arrow-item next-item">
              <span class="arrow next disabled"><i data-feather="chevron-right"></i></span>
            </li>
          @endif
      </ul>
    </nav>
@endif