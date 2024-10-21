@extends('layouts.app')

@section('content')
    <main>

        <div class="roulette">
          <div class="roulette-container">
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
            <div class="roulette-section"></div>
          </div>

          <div class="roulette-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M201.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 173.3 54.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/></svg></div>
            <button class="roulette-button">Lancer la roulette</button>
            <div class="result-container">
            <div class="result"></div>
          </div>
        </div>

      </main>
@endsection

  <style>

.roulette {
    position: relative;
    width: 300px;
    height: 300px; /* Hauteur augmentée pour afficher tous les choix */
    border-radius: 50%;
    margin:auto;
    margin-top: 100px;
    border: #1d1a1c 3px solid;
    }

    .roulette-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transform-origin: center center;
    border-radius: 50%;
    overflow: hidden;
    background-color: black;
    }

    .roulette-container.spin {
    transition: transform 5s ease-out;
    }

    .roulette-section {
      position: absolute;
      width: 100%;
      height: 100%;
      box-sizing: border-box;
      transform-origin: center center;
      font-size: 1.2em;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .roulette-section:nth-child(1) {
      background-color: red;
      transform: rotate(0deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(2) {
      background-color: orangered;
      transform: rotate(30deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(3) {
      background-color: orange;
      transform: rotate(60deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(4) {
      background-color: tan;
      transform: rotate(90deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(5) {
      background-color: yellow;
      transform: rotate(120deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(6) {
      background-color: yellowgreen;
      transform: rotate(150deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(7) {
      background-color: green;
      transform: rotate(180deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(8) {
      background-color: turquoise;
      transform: rotate(210deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(9) {
      background-color: blue;
      transform: rotate(240deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(10) {
      background-color:blueviolet;
      transform: rotate(270deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(11) {
      background-color: purple;
      transform: rotate(300deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

    .roulette-section:nth-child(12) {
      background-color: palevioletred;
      transform: rotate(330deg);
      clip-path: polygon(50% 50%, 0% 0%, 0% 32.5%);
    }

      .roulette-center {
      position: absolute;
      top: 280px;
      left: calc(50% - 25px);
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      }

      .roulette-button {
      position: absolute;
      bottom: 320px;
      left: 50%;
      transform: translateX(-50%);
      padding: 10px 20px;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      color: white;
      cursor: pointer;
      font-size: 1.2em;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }

      .result-container {
      position: absolute;
      top: 50%;
      left: 200%;
      transform: translateX(-50%);
      width: 100%;
      text-align: center;
      }

      .result {
      font-size: 1.5em;
      font-weight: bold;
      color: #000000;
      }

  </style>

<script>
    window.onload = function() {
        const sections = 12;
        const button = document.querySelector('.roulette-button');
        const container = document.querySelector('.roulette-container');
        const resultat = document.querySelector('.result');
        let isSpinning = false;
        let degrees = 0;

        const colors = ["blue", "turquoise", "green", "yellowgreen", "purple", "tan", "orange", "orangered", "red", "palevioletred", "yellow", "blueviolet"]; // couleurs de la roue
        const colorValues = {
            red: "Souris inversée",
            orangered: "Modif de la sensi",
            orange: "Pas de réticule",
            tan: "One Tap",
            yellow: "Changer touche de tire",
            yellowgreen: "No Slow",
            green: "Réticule énorme",
            turquoise: "60 FPS",
            blue: "Full visée",
            blueviolet: "Only 1 arme par round",
            purple: "Full 1 rôle",
            palevioletred : "Tjrs 5 stack",
        };

        function spinRoulette() {
            if (isSpinning) return;
            isSpinning = true;
            const nombre_tours = Math.floor(Math.random() * 6) + 3; // entre 3 et 8 tours aléatoires
            const choix = Math.floor(Math.random() * 12);

            container.style.transition = `transform ${nombre_tours}s ease-out`;
            degrees += 360 * nombre_tours + 360 / sections * (6 - choix); // on ajoute l'angle de rotation correspondant au nombre de tours et au choix
            container.style.transform = `rotate(${degrees}deg)`;

            container.addEventListener('transitionend', () => {
                isSpinning = false;
                const degreesTotal = degrees % 360;
                const colorIndex = Math.floor(degreesTotal / (360 / sections)) % sections;
                const color = colors[colorIndex];
                const value = colorValues[color];
                resultat.textContent = `Résultat : ${value}`;
            }, { once: true });
        }

        button.addEventListener('click', () => {
            if (isSpinning) {
                // si la roulette est déjà en train de tourner, on la relance depuis l'angle où elle s'est arrêtée
                container.style.transition = `transform 0s`;
                container.style.transform = `rotate(${degrees}deg)`;
                setTimeout(() => spinRoulette(), 0); // on lance la rotation dans un setTimeout pour que la transition soit effective
            } else {
                spinRoulette();
            }
        });

        let docTitle = document.title;

        window.addEventListener("blur", () => {
            document.title = "Come back ;(";
        });

        window.addEventListener("focus", () => {
            document.title = docTitle;
        });
    };
    </script>

