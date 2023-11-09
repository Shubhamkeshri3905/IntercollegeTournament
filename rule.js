const rules = {
    cricket: "Cricket Rules:<br>" +
        "1. Each team consists of 11 players.<br>" +
        "2. The game is played in overs with 6 balls per over.<br>" +
        "3. Batsmen score runs, bowlers try to get batsmen out.<br>" +
        "4. Runs can be scored by hitting the ball and running between wickets.<br>" +
        "5. The team with the highest runs wins.<br>" +
        "6. Key terms: wickets, runs, boundaries, overs, innings, lbw, and more.",
    football: "Football Rules:<br>" +
        "1. Each team consists of 11 players.<br>" +
        "2. The objective is to score goals by getting the ball into the opponent's net.<br>" +
        "3. Players must not use their hands (except for the goalkeeper).<br>" +
        "4. The team with the most goals at the end of the match wins.<br>",
    badminton: "Badminton Rules:<br>" +
        "1. Played with a shuttlecock, players take turns to hit it over the net.<br>" +
        "2. Points are scored by landing the shuttlecock in the opponent's court.<br>" +
        "3. The match is played in sets, and the winner is determined by the best of three sets.<br>",
    chess: "Chess Rules:<br>" +
        "1. Chess is a two-player strategy board game.<br>" +
        "2. The goal is to checkmate the opponent's king.<br>" +
        "3. Each player has 16 pieces with specific movements and rules.<br>" +
        "4. The player who checkmates the opponent's king first wins.<br>",
    basketball: "Basketball Rules:<br>" +
        "1. Two teams compete to score points by shooting the ball into the opponent's hoop.<br>" +
        "2. Dribbling, passing, and shooting are the primary skills.<br>" +
        "3. The team with the most points when the game ends wins.<br>",
    volleyball: "Volleyball Rules:<br>" +
        "1. Teams of 6 players each try to score points by sending the ball over the net into the opponent's court.<br>" +
        "2. The ball must be played within three touches.<br>" +
        "3. The first team to reach a set number of points wins the set.<br>"
};

function showRules(sport) {
    const rulesContainer = document.getElementById("rules");
    rulesContainer.innerHTML = `<h2>${sport} Rules</h2><p>${rules[sport]}</p>`;
}
