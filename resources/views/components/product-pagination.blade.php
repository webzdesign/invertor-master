@if ($totalProducts > 0) 
    <div class="col-lg-12">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">

    {{-- Previous Button --}}
    @if ($page > 1)
        <li class="page-item">
            <a class="page-link page-change" href="javascript:void(0);" data-page="{{($page - 1)}}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
    @else 
        <li class="page-item disabled">
            <span class="page-link page-change">&laquo;</span>
        </li>
    @endif

    {{-- Page Numbers --}}
    @for ($p = 1; $p <= $totalPages; $p++) 
    @php
        $active = ($ids['page'] == $p) ? ' active' : '';
    @endphp
        @if($totalPages > 1)
            <li class="page-item{{$active}}">
                <a class="page-link page-change" href="javascript:void(0);" data-page="{{$p}}">{{$p}}</a>
            </li>
        @else
            <li class="page-item{{$active}}">
                <a class="page-link" href="javascript:void(0);" data-page="">{{$p}}</a>
            </li>
        @endif
    @endfor

    {{-- Next Button --}}
    @if ($page < $totalPages)
        <li class="page-item">
            <a class="page-link page-change" href="javascript:void(0);" data-page="{{($page + 1)}}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    @else
        <li class="page-item disabled">
            <span class="page-link page-change">&raquo;</span>
        </li>
    @endif

            </ul>
        </nav>
    </div>
@endif   