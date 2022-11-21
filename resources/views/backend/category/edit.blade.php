<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Category Edit') }}
            </h2>

            <a href="{{ route('category.index') }}" class="bg-black text-white px-3 py-1 rounded">
                Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('category.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="flex justify-between gap-10">
                            <div class="mb-6 w-full">
                                <label for="name" class="w-full text-gray-700">Name</label>
                                <input type="text" class="w-full border-gray-500 rounded mt-2" name="name"
                                    id="name" value="{{ $category->name }}">

                                <div class="mt-2">
                                    @error('name')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-6 w-full">
                                <label for="number" class="w-full text-gray-700">Min Age</label>
                                <input type="number" class="w-full border-gray-500 rounded mt-2" name="min_age"
                                    id="name" value="{{ $category->min_age }}">

                                <div class="mt-2">
                                    @error('min_age')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
