<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Serveur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($serveurs as $serveur)
                <a class="" href=" {{route('serveur.show',['serveur'=>$serveur])}} ">
                    <div class="cardMod card-1">
                        <img class="" style="max-width: 100%;" src="{{asset('image/'.$serveur->image)}}"
                            alt="image serveur">
                        <div class="border border-info">
                            <p class="text-center">{{$serveur->nom}}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>

<style>
    body {
        background: #e2e1e0;
        text-align: center;
    }

    .cardMod {
        background: #fff;
        border-radius: 2px;
        display: inline-block;
        height: 10%;
        margin: 1rem;
        position: relative;
        width: 10%;
    }

    .card-1 {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }

    .card-1:hover {
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

</style>
