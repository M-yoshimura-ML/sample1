
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('micromodal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <div class="wrapper">
                        <button data-micromodal-trigger="modal-1" href="javascript:;" class="modal__btn">モーダルを開く</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-micromodal-window />
</x-app-layout>






