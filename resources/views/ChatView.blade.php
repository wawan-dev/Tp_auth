<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Page de chat, MIAOUHHH</p>
                    <br>
                    <form method='POST' action="chat/ajout/{{$user -> id}}">
                        @csrf
                        <textarea placeholder="Votre Message ..." name="montext" style="resize: both;"></textarea>
                        <br>
                        <x-primary-button type="submit">Envoyer Message</x-primary-button >
                    </form>
                    
                </div>
                <div id ='lechat' class="p-6 text-gray-900 dark:text-gray-100" hx-get="/getMessages" hx-trigger="every 2s">
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://unpkg.com/htmx.org@1.9.10"></script>
<script>
    // Permet d'ajouter le token CSRF à chaque requête AJAX,
    // pour éviter les erreurs 419, spécifiques à Laravel.
    document.addEventListener('DOMContentLoaded', function () {
        document.body.addEventListener('htmx:configRequest', (event) => {
            event.detail.headers['X-CSRF-Token'] = '{{ csrf_token() }}';
        })
    });
</script>
<style>
    div.htmx-swapping div {
        opacity: 0;
        transition: opacity 1s ease-out;
    }
</style>
