@props(['pagination' => []])

<div class="w-flex flex justify-center space-x-2 my-5">
    @php
        $total_count = $pagination['total_count'];
        $count = $pagination['count'];
        $offset = $pagination['offset'];

        $numOfPages = ceil($total_count / $count);
        $currentPage = ((int)$offset / $count) + 1;

        $counter = 0;
    @endphp
    @for ($pageNum = 1; $pageNum <= $numOfPages; $pageNum++)
       @if ($pageNum <= 5 || $pageNum >= $numOfPages - 5)

            <a class="p-2 rounded-lg hover:bg-blue-600 {{ $pageNum === $currentPage ? "bg-blue-400 text-white cursor-not-allowed" : "bg-gray-400 text-gray-800"}}"
            href="{{ route('search', [
                'q' => old('q'),
                'offset' => ($pageNum - 1) * $count
            ]) }}">
                {{$pageNum}}
            </a>
       @else   
           @php
             $counter++;  
           @endphp
           @if ($counter === 1)
               <span class="px-2">........</span>
           @endif
            
       @endif
    @endfor
   
</div>