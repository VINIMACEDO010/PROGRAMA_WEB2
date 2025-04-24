<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Contato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('contatos.update', $contato->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <x-input-label for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" value="{{ $contato->nome }}" required autofocus autocomplete="nome" />
                        <x-input-error :messages="$errors->get('nome')" class="mt-2" />

                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ $contato->email }}" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        <x-input-label for="telefone" :value="__('Telefone')" />
                        <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" value="{{ $contato->telefone }}" required autocomplete="telefone" />

                        <x-input-label for="cidade" :value="__('Cidade')" />
                        <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" value="{{ $contato->cidade }}" required autocomplete="cidade" />

                        <x-input-label for="estado" :value="__('Estado')" />
                        <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" value="{{ $contato->estado }}" required autocomplete="estado" />

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Salvar') }}
                            </x-primary-button>
                            <x-secondary-button type="reset" class="ms-4">
                                {{ __('Limpar') }}
                            </x-secondary-button>
                        </div>
                    </form>
                    <br>
                    <a href="{{ route('contatos.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-100 rounded-md hover:bg-gray-300 dark:hover:bg-gray-600">
                        Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
