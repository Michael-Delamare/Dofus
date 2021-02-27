
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Serveur') }}
        </h2>
    </x-slot>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <div>
                <h1 class="mt-5 text-center font-weight-bold">Modification de la position ou du nombre d'utilisations du portail</h1>
            </div>
            <form action="{{route('info_portail.update',[$information_portail->id])}}" method="post"
                enctype="multipart/form-data" name="formulaire" class="mt-5">
                @csrf
                {{ method_field('PATCH') }}
                <div>
                    <h2>Position du portail</h2>
                </div>
                <div class="form-group" id="posPortail">
                    <input type="text" class="form-control" placeholder="Entrez la position" name="position"
                        value="{{$information_portail->position}}" required>
                </div>
                <div>
                    <h2>Nombre d'utilisations</h2>
                </div>
                <div class="form-group" id="nbUti">
                    <input  type="text" class="form-control" placeholder="Entrez le nombre d'utilisations restantes"
                        value="{{$information_portail->utilisation}}" name="utilisation" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="posInconnu_input" name="posInconnu" onchange="test()">
                    <label for="posInconnu_input">Position Inconnue</label>
                </div>

                <div class="form-group text-center mt-5">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                    <a href="#" class="btn btn-danger">Annuler</a>
                </div>
            </form>
        </div>
</x-app-layout>


