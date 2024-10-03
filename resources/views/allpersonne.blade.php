<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @foreach($personne as $p)
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Nom : {{$p->name}} </p>
                    <p>Ville : {{$p->ville}} </p>
                    <p>Genre : {{$p->genre}} </p>
                    <p>Date de naissance : {{$p->dateNaissance}} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
