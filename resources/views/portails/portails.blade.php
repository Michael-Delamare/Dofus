

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portails') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p class="text-center nomServeur">{{$serveur->nom}}</p>
                <div class="avantTableau">
                @foreach ($portails as $portail)
                <table class="table">
                    <tbody>
                        <tr class="d-flex">
                            <td class="col-3">
                                <p class="portailNom "> {{$portail->nom}} </p>
                                <img class="portailImg mx-auto d-block" src="{{asset($portail->image)}}" alt="image portail">
                            </td>
                            <td class="col-3 box">
                                <p class="">Position : {{$portail->position}}</p>
                                <p class="" style="color:{{$portail->couleurUti->couleurUtilisationPortail($portail->utilisation)}}" >Utilisation : {{$portail->utilisation}}</p>
                            </td>
                            <td class="col-6 box">
                                 @inject('serveurControl', 'App\Http\Controllers\ServeurController')
                                <p>Portail modifié par : {{$portail->name}}</p>
                                <p>Il y a : {{$portail->tUpd}} </p>
                                <a href="{{route("info_portail.edit",[$portail->info_p_id])}}"
                                    class="btn btn-success btnAction">Mettre à jour</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @endforeach
            </div>
            </div>
        </div>
    </div>

</x-app-layout>
