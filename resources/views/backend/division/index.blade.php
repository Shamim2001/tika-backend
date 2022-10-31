<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Divitions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full border-r border-b">
                        <tr>
                            <th class="border-l border-t px-2 py-1 text-center">Name</th>
                            <th class="border-l border-t px-2 py-1 text-center">Action</th>
                        </tr>
                        @foreach ($divisions as $division )
                            <tr>
                                <td class="border-l border-t px-2 py-1 text-center">
                                    @if ($division->enabled == 0) <del> @endif
                                    {{ $division->name }}
                                    @if ($division->enabled == 0) </del> @endif
                                </td>

                                <td class="border-l border-t px-2 py-1 text-center flex items-center justify-center">
                                    <a href="" class=" text-white text-sm px-2 py-1 mr-2 rounded bg-green-500 hover:bg-transparent hover:text-black border  duration-300">edit</a>
                                    <form action="{{ route('division-enable-desible', $division) }}" method="POST">
                                        @csrf
                                        <button type="submit" class=" text-white text-sm px-2 py-1 rounded bg-orange-700 hover:bg-transparent hover:text-black border  duration-300" >{{ $division->enabled == 0 ? 'Restore' : 'Achieve' }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
