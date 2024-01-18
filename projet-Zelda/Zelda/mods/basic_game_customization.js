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
function healthBar(character) {
    var maxHearts = character.hpMax / 10;
    var hearts = "\x1b[31m❤️\x1b[0m".repeat(Math.floor(character.hp / 10));
    return "".concat(hearts, " ").concat(character.hp);
}
function heal() {
    selectPlayer.hp += selectPlayer.hpMax / 2;
    if (selectPlayer.hp > selectPlayer.hpMax) {
        selectPlayer.hp = selectPlayer.hpMax;
    }
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
        start();
        console.log('\n\x1b[34mBienvenue dans le jeu Zelda!\x1b[0m');
        while (currentFloor_1 <= 11) {
            if (currentFloor_1 === 10) {
                currentEnemy = getOpponnet(2);
            }
            else {
                currentEnemy = getOpponnet(1);
            }
            fight(selectPlayer, currentEnemy);
            if (currentEnemy.hp <= 0) {
                currentFloor_1++;
            }
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
var modifiedEnemies;
function start() {
    var startOrQuit = readlineSync.question('New Game    Quit   ');
    if (startOrQuit === 'New Game' || 'new game') {
        var lvl = readlineSync.question('Niveau de difficulté :  Normal  Difficult  Insane\n');
        if (lvl === 'Insane' || 'insane') {
            insane('./enemies.json');
        }
        else if (lvl === 'Difficult' || 'difficult') {
        }
        else {
        }
    }
    else if (startOrQuit === 'Quit' || 'quit') {
        process.exit(0);
    }
    else {
        console.log('Choix invalide, veuillez ressaisir une commande');
    }
}
function insane(pathJson) {
    var enemies = JSON.parse(fs.readFileSync(pathJson, 'utf8'));
    for (var i = 0; i < enemies.length; i++) {
        var currentEnemy_1 = enemies[i];
        currentEnemy_1.str *= 2;
        currentEnemy_1.int *= 2;
        currentEnemy_1.def *= 2;
        currentEnemy_1.res *= 2;
        currentEnemy_1.spd *= 2;
        currentEnemy_1.luck *= 2;
        currentEnemy_1.hp *= 2;
    }
    fs.writeFileSync(pathJson, enemies, null, 2, 'utf8');
    return enemies;
}
function difficult(pathJson) {
    var enemies = JSON.parse(fs.readFileSync(pathJson, 'utf8'));
    for (var i = 0; i < enemies.length; i++) {
        var currentEnemy_2 = enemies[i];
        currentEnemy_2.str *= 1.5;
        currentEnemy_2.int *= 1.5;
        currentEnemy_2.def *= 1.5;
        currentEnemy_2.res *= 1.5;
        currentEnemy_2.spd *= 1.5;
        currentEnemy_2.luck *= 1.5;
        currentEnemy_2.hp *= 1.5;
    }
    // fs.writeFileSync(pathJson, JSON.stringify(enemies, null, 1.5), 'utf8');
    return enemies;
}
