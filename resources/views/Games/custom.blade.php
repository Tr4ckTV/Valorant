@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="left-column">
            <h2>Choix de l'arme</h2>
            <!-- Formulaire de choix d'arme -->
            <form id="weaponForm">
                <!-- Sélection d'arme ici -->
            </form>
            <h2>Choix du skin</h2>
            <!-- Formulaire de choix de skin -->
            <form id="skinForm">
                <!-- Sélection de skin ici -->
            </form>
        </div>
        <div class="right-column">
            <h2>Arme choisie</h2>
            <div id="selectedWeapon">
                <!-- Affichage de l'arme choisie ici -->
            </div>
            <h2>Modification des couleurs</h2>
            <!-- Options pour modifier les couleurs ici -->
    </div>
  </main>
@endsection

<style>

</style>
