@extends('layouts.app')

@section('content')
<main>
    <h1>Randoms</h1>
    <table id="agent-table">
        <thead>
            <tr>
                <th></th>
                <th>Agents <button class="random-all-btn-agents">🔄</button></th>
                <th>Armes <button class="random-all-btn-weapons">🔄</button></th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 5; $i++)
            <tr class="agent-row">
                <td class="joueur">Joueur {{ $i }}</td>
                <td class="agents">
                    <img src="" alt="Agent Image" />
                    <button class="agent-random-btn">🔄</button>
                </td>
                <td class="weapons">
                    <img src="" alt="Weapon Image" />
                    <button class="weapon-random-btn">🔄</button>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</main>


<script>
    $(document).ready(function() {

    const baseUrlAgents = "{{ asset('Images/agents') }}";
    const baseUrlWeapons = "{{ asset('Images/weapons') }}";

    const agentList = [
        'brimstone', 'astra', 'omen', 'viper', 'harbor',
        'phoenix', 'raze', 'reyna', 'yoru', 'jett', 'neon',
        'gekko', 'breach', 'fade', 'kayo', 'skye', 'sova',
        'chamber', 'cypher', 'killjoy', 'sage', 'deadlock',
        'iso', 'clove', 'vyse'
    ];

    const weaponList = [
        'ares', 'bucky', 'bulldog', 'classic', 'cut',
        'frenzy', 'ghost', 'guardian', 'judge', 'marshal',
        'odin', 'operator', 'phantom', 'shorty', 'sheriff',
        'spectre', 'stinger', 'vandal'
    ];

    // Fonction pour obtenir un élément aléatoire
    function getRandom(list, usedItems) {
        let item;
        do {
            item = list[Math.floor(Math.random() * list.length)];
        } while (usedItems.includes(item));
        return item;
    }

    // Randomisation individuelle des agents
    $('.agent-random-btn').on('click', function() {
        const $row = $(this).closest('tr');
        let usedAgents = $row.data('usedAgents') || []; // Charge les agents utilisés
        const agentName = getRandom(agentList, usedAgents);
        usedAgents.push(agentName);
        $row.data('usedAgents', usedAgents);
        $row.find('.agents img').attr("src", `${baseUrlAgents}/${agentName}.png`);
    });

    // Randomisation individuelle des armes
    $('.weapon-random-btn').on('click', function() {
        const $row = $(this).closest('tr');
        let usedWeapons = $row.data('usedWeapons') || []; // Charge les armes utilisées
        const weaponName = getRandom(weaponList, usedWeapons);
        usedWeapons.push(weaponName);
        $row.data('usedWeapons', usedWeapons);
        $row.find('.weapons img').attr("src", `${baseUrlWeapons}/${weaponName}.png`);
    });

    // Randomisation de tous les agents
    $('.random-all-btn-agents').on('click', function() {
        $('.agent-row').each(function() {
            let usedAgents = []; // Reset for each row
            const agentName = getRandom(agentList, usedAgents);
            usedAgents.push(agentName);
            $(this).data('usedAgents', usedAgents);
            $(this).find('.agents img').attr("src", `${baseUrlAgents}/${agentName}.png`);
        });
    });

    // Randomisation de toutes les armes
    $('.random-all-btn-weapons').on('click', function() {
        $('.agent-row').each(function() {
            let usedWeapons = []; // Reset for each row
            const weaponName = getRandom(weaponList, usedWeapons);
            usedWeapons.push(weaponName);
            $(this).data('usedWeapons', usedWeapons);
            $(this).find('.weapons img').attr("src", `${baseUrlWeapons}/${weaponName}.png`);
        });
    });
});

</script>


<style>
    main table {
        background-color: #ffffff00;
        border-radius: 10px;
        text-align: left;
        margin-left: 40px;
        width: 80%;
        margin: auto;
    }

    main th {
        border: solid black;
        text-align: center;
    }

    main td {
        padding: 10px;
        font-size: 2em;
        border: solid black;
    }

    main td.agents {
        width: 20%;
    }

    main td.joueurs {
        width: 10%;
    }

    main td.weapons {
        width: 60%;
    }

    .agents button, img {
        display: block;
        margin: auto;
    }

    .weapons button, img {
        display: block;
        margin: auto;
    }

    th button, img {
        display: block;
        margin: auto;
    }

    .weapons img {
        height: 2em;
        width: auto;
        margin-bottom: 10px;
    }

    .agents img {
        height: 70px;
        margin-bottom: 10px;
    }

    th {
        font-size: 2em;
    }

    th button {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    h1 {
        padding-bottom: 5%;
        font-size: 3em;
    }
</style>
@endsection
