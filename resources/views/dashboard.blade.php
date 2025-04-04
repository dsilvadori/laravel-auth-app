<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                {{-- Exibir imagem de perfil --}}
                @php
                    $user = auth()->user();
                    $photoPath = $user->profile_photo_path;
                    $hasPhoto = !empty($photoPath) && $photoPath !== 'null';
                @endphp

                <div class="mt-6 mb-4">
                    <img src="{{ $hasPhoto
                                ? asset('storage/' . $photoPath)
                                : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=CCCCCC&color=333333&size=96' }}"
                        alt="Foto de perfil"
                        class="rounded-full object-cover border border-gray-300 dark:border-gray-700 shadow"
                        style="width: 96px; height: 96px; max-width: 96px; max-height: 96px;" />
                </div>

                {{-- Mensagem de boas-vindas --}}
                <p class="text-gray-700 dark:text-gray-300">
                    Você está logado como <strong>{{ $user->name }}</strong>.
                </p>

            </div>
        </div>
    </div>
</x-app-layout>
