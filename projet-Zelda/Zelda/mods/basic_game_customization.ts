var readlineSync = require('readline-sync');
var fs = require('fs');

interface Character {
    id: number,
    name: string,
    hp: number,
    hpMax: number,
    mp: number,
    str: number;
    int: number,
    def: number,
    res: number,
    spd: number,
    luck: number,
    race: number,
    class: number,
    rarity: number
}

function selectCharacter(pathJson: string) {
    const tab_characters: Character[] = JSON.parse(fs.readFileSync(pathJson, 'utf8'));
    let characterSelected;
    const randomValue = Math.random() * 100; // Génère un nombre aléatoire entre 0 et 100
    for (const character of tab_characters) {
        // Compare randomValue avec des plages de rareté
        if (randomValue > 0 && randomValue < 50 && character.rarity === 1) {
            characterSelected = character
        } else if (randomValue > 49 && randomValue < 80 && character.rarity === 2) {
            characterSelected = character
        } else if (randomValue > 79 && randomValue < 95 && character.rarity === 3) {
            characterSelected = character
        } else if (randomValue > 94 && randomValue < 100 && character.rarity === 4) {
            characterSelected = character
        } else if (randomValue === 100 && character.rarity === 5) {
            characterSelected = character
        }
    }
    return characterSelected;
}

function getOpponnet(flag_opponnet: number) {
    let opponnet;
    if (flag_opponnet === 1) {
        opponnet = selectCharacter('./enemies.json');
    }
    else if (flag_opponnet === 2) {
        opponnet = selectCharacter('./bosses.json');
    }
    return (opponnet);
}

const selectPlayer = selectCharacter('./players.json');




function healthBar(character) {
    const maxHearts = character.hpMax / 10;
    const hearts = "\x1b[31m❤️\x1b[0m".repeat(Math.floor(character.hp / 10));
    return `${hearts} ${character.hp}`;
}

function heal() {
    selectPlayer.hp += selectPlayer.hpMax / 2;
    if (selectPlayer.hp > selectPlayer.hpMax) {
        selectPlayer.hp = selectPlayer.hpMax;
    }
}




let currentEnemy;


try {
    function fight(selectPlayer, currentEnemy) {
        while (selectPlayer.hp > 0 && currentEnemy.hp > 0) {
            console.log(`====== Stage ${currentFloor} ======\n`);
            console.log(`\x1b[35m${selectPlayer.name}\x1b[0m: ${healthBar(selectPlayer)} \n\x1b[38;5;208m${currentEnemy.name}\x1b[0m: ${healthBar(currentEnemy)}`);

            console.log('\nChoose your action');
            const choice = readlineSync.question('\x1b[31m1. Attack\x1b[0m  \x1b[32m2. Heal:\x1b[0m   ')
            if (choice === '1' || choice === 'Attack') {
                currentEnemy.hp = currentEnemy.hp - selectPlayer.str;
                selectPlayer.hp -= currentEnemy.str;
            } else if (choice === '2' || choice === ('Heal')) {
                heal();
                selectPlayer.hp -= currentEnemy.str;
            } else {
                console.log('Choix invalide, veuillez ressaisir une commande');
            }
        }
    }


    let currentFloor = 1;

    function stepFloor() {
        start();
        console.log('\n\x1b[34mBienvenue dans le jeu Zelda!\x1b[0m');
        while (currentFloor <= 11) {
            if (currentFloor === 10) {
                currentEnemy = getOpponnet(2);
            }
            else {
                currentEnemy = getOpponnet(1);
            }
            fight(selectPlayer, currentEnemy);
            if (currentEnemy.hp <= 0) {
                currentFloor++;
            }
            if (selectPlayer.hp <= 0) {
                console.log('\x1b[31mGAME OVER\x1b[0m');
                break;
            } if (currentFloor > 10) {
                console.log('\x1b[33mYou Win\x1b[0m');
                break;
            }
        }
    }


} catch (error) {
    console.error('Une erreur est survenue lors de l\'éxecution')
}


stepFloor();


let modifiedEnemies;
function start() {
    const startOrQuit = readlineSync.question('New Game    Quit   ')
    if (startOrQuit === 'New Game' || 'new game') {
        const lvl = readlineSync.question('Niveau de difficulté :  Normal  Difficult  Insane\n')
        if (lvl === 'Insane' || 'insane') {
            doubleCharacteristics('./enemies.json', 2);
            doubleCharacteristics('./bosses.json', 2);
        } else if (lvl === 'Difficult' || 'difficult') {

        } else {

        }
    } else if (startOrQuit === 'Quit' || 'quit') {
        process.exit(0)
    } else {
        console.log('Choix invalide, veuillez ressaisir une commande');
    }
}




function insane(pathJson: string) {
    const enemies = JSON.parse(fs.readFileSync(pathJson, 'utf8'));

    for (let i = 0; i < enemies.length; i++) {
        const currentEnemy = enemies[i];
        currentEnemy.str *= 2;
        currentEnemy.int *= 2;
        currentEnemy.def *= 2;
        currentEnemy.res *= 2;
        currentEnemy.spd *= 2;
        currentEnemy.luck *= 2;
        currentEnemy.hp *= 2;
    }

    fs.writeFileSync(pathJson, JSON.stringify(enemies, null, 2), 'utf8');

    return enemies;
}

function doubleCharacteristics(pathJson: string, factor: number) {
    const characters = JSON.parse(fs.readFileSync(pathJson, 'utf8'));
    for (let i = 0; i < characters.length; i++) {
        const currentCharacter = characters[i];
        currentCharacter.str *= factor;
        currentCharacter.int *= factor;
        currentCharacter.def *= factor;
        currentCharacter.res *= factor;
        currentCharacter.spd *= factor;
        currentCharacter.luck *= factor;
        currentCharacter.hp *= factor;
    }
    fs.writeFileSync(pathJson, JSON.stringify(characters, null, 2), 'utf8');
}

// function difficult(pathJson: string) {
//     const enemies = JSON.parse(fs.readFileSync(pathJson, 'utf8'));

//     for (let i = 0; i < enemies.length; i++) {
//         const currentEnemy = enemies[i];
//         currentEnemy.str *= 1.5;
//         currentEnemy.int *= 1.5;
//         currentEnemy.def *= 1.5;
//         currentEnemy.res *= 1.5;
//         currentEnemy.spd *= 1.5;
//         currentEnemy.luck *= 1.5;
//         currentEnemy.hp *= 1.5;
//     }

//     // fs.writeFileSync(pathJson, JSON.stringify(enemies, null, 1.5), 'utf8');

//     return enemies;
// }


