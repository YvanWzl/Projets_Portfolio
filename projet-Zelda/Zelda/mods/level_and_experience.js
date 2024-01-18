var readlineSync = require('readline-sync');
var fs = require('fs');
function selectCharacter(pathJson) {
    var tab_characters = JSON.parse(fs.readFileSync(pathJson, 'utf8'));
    var characterSelected;
    var randomValue = Math.random() * 100; // Génère un nombre aléatoire entre 0 et 100
    for (var _i = 0, tab_characters_1 = tab_characters; _i < tab_characters_1.length; _i++) {
        var character = tab_characters_1[_i];
        // Compare randomValue avec des plages de rareté
        if (randomValue > 0 && randomValue < 50 && character.rarity === 1) {
            characterSelected = character;
        }
        else if (randomValue > 49 && randomValue < 80 && character.rarity === 2) {
            characterSelected = character;
        }
        else if (randomValue > 79 && randomValue < 95 && character.rarity === 3) {
            characterSelected = character;
        }
        else if (randomValue > 94 && randomValue < 100 && character.rarity === 4) {
            characterSelected = character;
        }
        else if (randomValue === 100 && character.rarity === 5) {
            characterSelected = character;
        }
    }
    return characterSelected;
}
function getOpponnet(flag_opponnet) {
    var opponnet;
    if (flag_opponnet === 1) {
        opponnet = selectCharacter('./enemies.json');
    }
    else if (flag_opponnet === 2) {
        opponnet = selectCharacter('./bosses.json');
    }
    return (opponnet);
}
var selectPlayer = selectCharacter('./players.json');
//const selectBosses = selectCharacter(bossesData);
function healthBar(character) {
    var maxHearts = character.hpMax / 10; // Un cœur représente 10 points de vie
    var hearts = "\x1b[31m❤️\x1b[0m".repeat(Math.floor(character.hp / 10));
    return "".concat(hearts, " ").concat(character.hp);
}
function heal() {
    selectPlayer.hp += selectPlayer.hpMax / 2;
    if (selectPlayer.hp > selectPlayer.hpMax) {
        selectPlayer.hp = selectPlayer.hpMax;
    }
}
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
var currentEnemy;
try {
    function fight(selectPlayer, currentEnemy) {
        while (selectPlayer.hp > 0 && currentEnemy.hp > 0) {
            console.log("====== Stage ".concat(currentFloor_1, " ======\n"));
            console.log("\u001B[35m".concat(selectPlayer.name, "\u001B[0m: ").concat(healthBar(selectPlayer), " \n\u001B[38;5;208m").concat(currentEnemy.name, "\u001B[0m: ").concat(healthBar(currentEnemy)));
            console.log('\nChoose your action');
            var choice = readlineSync.question('\x1b[31m1. Attack\x1b[0m  \x1b[32m2. Heal:\x1b[0m   ');
            if (choice === '1' || choice === 'Attack') {
                currentEnemy.hp = currentEnemy.hp - selectPlayer.str;
                selectPlayer.hp -= currentEnemy.str;
            }
            else if (choice === '2' || choice === ('Heal')) {
                heal();
                selectPlayer.hp -= currentEnemy.str;
            }
            else {
                console.log('Choix invalide, veuillez ressaisir une commande');
            }
        }
    }
    var currentFloor_1 = 1;
    function stepFloor() {
        console.log('\n\x1b[34mBienvenue dans le jeu Zelda!\x1b[0m \n');
        console.log("Votre h\u00E9ros est \u001B[1m".concat(selectPlayer.name, "\u001B[0m:\n"));
        while (currentFloor_1 <= 11) {
            if (currentFloor_1 === 10) {
                currentEnemy = getOpponnet(2);
            }
            else {
                currentEnemy = getOpponnet(1);
            }
            //console.log(currentEnemy);
            fight(selectPlayer, currentEnemy);
            if (currentEnemy.hp <= 0) {
                currentFloor_1++;
                selectPlayer.xp = selectPlayer.xp + getRandomInt(15, 50);
                console.log("Vous avez gagn\u00E9 ".concat(selectPlayer.xp, " points d'exp\u00E9rience\n"));
            }
            if (selectPlayer.xp >= selectPlayer.xpMax) {
                selectPlayer.hpMax += 10;
            }
            selectPlayer.expPlayer = 0;
            if (selectPlayer.hp <= 0) {
                console.log('\x1b[31mGAME OVER\x1b[0m');
                break;
            }
            if (currentFloor_1 > 10) {
                console.log('\x1b[33mYou Win\x1b[0m');
                break;
            }
        }
    }
}
catch (error) {
    console.error('Une erreur est survenue lors de l\'éxecution');
}
stepFloor();
