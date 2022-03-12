<x-layout.app-layout title="Home">
    <h1 class="font-light text-6xl text-center mb-4">Short<span class="font-semibold text-blue-400">ly</span> Links</h1>

    <div class="text-center space-y-2 mb-10">
        <p>
            Here you can find a way to shorten your links, even if they're <b>TOO LONG</b>, so let's begin creating
            a <a class="text-blue-400 font-light underline underline-offset-1" href="{{ route('create') }}">new link</a> 👈
        </p>

        <div>
            <h2 class="text-2xl mt-6">Note</h2>

            <p>
                <b class="italic">Just remember</b>, this a simple example and is not a complex one, <strong>but maybe</strong> in the future 😃👍
            </p>
        </div>
    </div>

    <div>
        @if ($urls->isEmpty())
            <div class="text-center">
                <p class="inline px-4 py-2 rounded-sm bg-blue-400 text-white">There aren't short links, come back later</p>
            </div>
        @else
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 shadow-inner">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-b">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 w-10 text-center">
                                            #
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            URL
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Short Link
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Description
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach ($urls as $url)
                                    <tr class="border-b">
                                        <td class="px-6 py-4 font-medium text-gray-900 text-center text-sm whitespace-nowrap">
                                            {{ $url->id }}
                                        </td>
                                        
                                        <td x-data="{}" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap max-w-sm overflow-x-auto">
                                            <span>
                                                <a class="hover:text-blue-400" href="{{ $url->url }}">{{ Str::limit($url->url, 40, '...') }}</a>
                                            </span>
                                        </td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4">
                                            <a class="hover:text-blue-400" href="{{ route('show', $url->slug) }}">
                                                {{ route('show', $url->slug) }}
                                            </a>
                                        </td>

                                        <td class="text-sm text-gray-900 font-light px-6 py-4">
                                            {{ $url->description }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>


    @push('head')
    <style>
        .table-auto thead th {
            font-weight: 400;
            font-size: 1.2em
        }

        .table-auto tbody td {
            padding: .6rem;
        }

        .table-auto tbody td ~ td {
            border-left: 2px solid white;
        }
    </style>
    @endpush
</x-layout.app-layout>


