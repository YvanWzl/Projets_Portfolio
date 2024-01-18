

var readlineSync = require('readline-sync');
var fs = require('fs');
var playersData = JSON.parse(fs.readFileSync('players.json', 'utf8'));
var enemiesData = JSON.parse(fs.readFileSync('enemies.json', 'utf8'));
var bossesData = JSON.parse(fs.readFileSync('bosses.json', 'utf8'));

function selectCharacter(characters) {
    const randomValue = Math.random() * 100; // Génère un nombre aléatoire entre 0 et 100

    for (const character of characters) {
        // Comparer randomValue avec des plages de rareté
        if (randomValue < 50 && character.rarity === 1) {
            return character;
        } else if (randomValue < 80 && character.rarity === 2) {
            return character;
        } else if (randomValue < 95 && character.rarity === 3) {
            return character;
        } else if (randomValue < 99 && character.rarity === 4) {
            return character;
        } else if (randomValue <= 100 && character.rarity === 5) {
            return character;
        }
    }
    // Si aucun personnage n'est sélectionné, retournez le premier personnage
    return characters[0];
}

const selectPlayer = selectCharacter(playersData);
const selectEnemies = selectCharacter(enemiesData);
const selectBosses = selectCharacter(bossesData);

console.log('Joueur choisi: ', selectPlayer);
console.log('Enemi choisi: ', selectEnemies);
console.log('Boss choisi: ', selectBosses);
