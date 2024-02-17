<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publicaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-2xl text-black-900 leading-tight">
                        Nueva Publicación:
                    </h2>
                    <div class="relative overflow-x-auto mt-8">
                        <form class="max-w-sm mx-auto" method="post" action="{{ route('posts.store') }}">
                            @csrf
                            <div class="mb-5">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Título</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                         focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                      @error('title') border-red-600 @enderror" required>
                                @error('title')
                                <div class="text-sm bg-red-200 px-3 py-1 rounded-lg">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="summary" class="block mb-2 text-sm font-medium text-gray-900">
                                    Resumen</label>
                                <textarea name="summary" id="summary" value="{{ old('summary') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                      focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                      @error('summary') border-red-600 @enderror"></textarea>
                                @error('summary')
                                <div class="text-sm bg-red-200 px-3 py-1 rounded-lg">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="body" class="block mb-2 text-sm font-medium text-gray-900">
                                    Cuerpo:</label>
                                <textarea name="body" id="body" value="{{ old('body') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                      focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                      @error('body') border-red-600 @enderror" required></textarea>
                                @error('body')
                                <div class="text-sm bg-red-200 px-3 py-1 rounded-lg">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="published_at" class="block mb-2 text-sm font-medium text-gray-900">Fecha de publicación</label>
                                <input type="date" name="published_at" id="published_at" value="{{ old('published_at', date('Y-m-d')) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                      focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                      @error('published_at') border-red-600 @enderror" required>
                                @error('published_at')
                                <div class="text-sm bg-red-200 px-3 py-1 rounded-lg">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
