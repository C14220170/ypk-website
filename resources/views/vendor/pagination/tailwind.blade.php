@if ($paginator->hasPages())
    <nav class="flex justify-center mt-8">
        <ul class="inline-flex items-center space-x-1">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-2 bg-gray-200 text-gray-500 rounded-lg cursor-not-allowed">
                    ‹
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="px-3 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                    ‹
                </a>
            @endif

            {{-- Page Numbers --}}
            @foreach ($elements as $element)
                {{-- ... --}}
                @if (is_string($element))
                    <span class="px-3 py-2 text-gray-400"> {{ $element }} </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-3 py-2 bg-green-700 text-white rounded-lg font-semibold">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                               class="px-3 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="px-3 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                    ›
                </a>
            @else
                <span class="px-3 py-2 bg-gray-200 text-gray-500 rounded-lg cursor-not-allowed">
                    ›
                </span>
            @endif
        </ul>
    </nav>
@endif
