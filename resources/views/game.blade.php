@extends('layouts.app')

@section('content')
<main>
    <h1>Mini-Game</h1>

    <a href="{{ route('random') }}"><div class="game-box">
      <h2>Random</h2>
      <img src="/Images/jeux/Dé.png">
      <div class="overlay">
        <i class="fa-solid fa-circle-play"></i>
      </div>
    </div></a>

    <a href="{{ route('roulette') }}"><div class="game-box">
      <h2>Roulette</h2>
      <img src="/Images/jeux/Roulette.png">
      <div class="overlay">
        <i class="fa-solid fa-circle-play"></i>
      </div>
    </div></a>

    <a href="{{ route('custom') }}"><div class="game-box">
      <h2>Customisation</h2>
      <img src="/Images/jeux/Armes.png">
      <div class="overlay">
        <i class="fa-solid fa-circle-play"></i>
      </div>
    </div></a>
  </main>
@endsection


    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  main {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    padding: 20px;
    text-align: center;
  }

  h1 {
    grid-column: 1 / -1;
  }

  .game-box {
    background-color: #808080;
    border: 1px solid #9e9e9e;
    padding: 20px;
    text-align: center;
    border-radius: 40px 40px 40px 40px;
    -webkit-border-radius: 40px 40px 40px 40px;
    -moz-border-radius: 40px 40px 40px 40px;
    color : white;
    margin-left: 15%;
    margin-right: 15%;
    cursor: pointer;
    overflow: hidden;
    filter: brightness(100%);
    transition: filter 0.3s, transform 0.3s;
  }

  .game-box:hover {
    filter: brightness(80%);
    transform: scale(1.05);
  }

  .game-box img {
    width: 100%;
    height: auto;
    vertical-align: middle;
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(165, 245, 255, 0.692);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .game-box:hover .overlay {
    opacity: 1;
  }

  .overlay i {
    font-size: 50px;
    color: white;
  }

</style>
