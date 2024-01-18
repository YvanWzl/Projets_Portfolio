
var readlineSync = require('readline-sync');


interface Character {
    name: string;
    hpMax: number;
    hp: number;
    str: number;
}

let link: Character = {
    name: 'Link',
    hpMax: 60,
    hp: 60,
    str: 15,
};

const bokoblin: Character = {
    name: 'Bokoblin',
    hpMax: 30,
    hp: 30,
    str: 5,
};



function getGanon() {
    const ganon: Character = {
        name: 'Ganon',
        hpMax: 150,
        hp: 150,
        str: 20,
    };
    return (ganon);
}

function getBokoblin() {
    const bokoblin: Character = {
        name: 'Bokoblin',
        hpMax: 30,
        hp: 30,
        str: 5,
    };
    return (bokoblin);
}

function healthBar(character: Character): string {
    const maxHearts = character.hpMax / 10; // Un cœur représente 10 points de vie
    const hearts = "\x1b[31m❤️\x1b[0m".repeat(Math.floor(character.hp / 10));
    return `${hearts} ${character.hp}`;
}

let currentEnemy: Character = bokoblin;


function heal() {
    link.hp += link.hpMax / 2;
    if (link.hp > link.hpMax) {
        link.hp = link.hpMax;
    }
}



try {
    function fight(link: Character, currentEnemy: Character) {
        while (link.hp > 0 && currentEnemy.hp > 0) {
            console.log(`====== Stage ${currentFloor} ======\n`);
            console.log(`\x1b[35m${link.name}\x1b[0m: ${healthBar(link)} \n\x1b[38;5;208m${currentEnemy.name}\x1b[0m: ${healthBar(currentEnemy)}`);

            console.log('\nChoose your action');
            const choice = readlineSync.question('\x1b[31m1. Attack\x1b[0m  \x1b[32m2. Heal:\x1b[0m   ')
            if (choice === '1' || choice === 'Attack') {
                currentEnemy.hp = currentEnemy.hp - link.str;
                link.hp -= currentEnemy.str;
            } else if (choice === '2' || choice === ('Heal')) {
                heal();
                link.hp -= currentEnemy.str;
            } else {
                console.log('Choix invalide, veuillez ressaisir une commande');
            }
        }
    }



    let currentFloor = 1;

    function stepFloor() {
        let enemy: Character;
        console.log('\x1b[34mBienvenue dans le jeu Zelda!\x1b[0m');
        while (currentFloor < 11) {
            if (currentFloor === 10) {
                enemy = getGanon();
            }
            else {
                enemy = getBokoblin();
            }
            fight(link, enemy);
            if (enemy.hp <= 0) {
                currentFloor++;
            }
            if (link.hp <= 0) {
                console.log('\x1b[31mGAME OVER\x1b[0m');
                break;
            } if (currentFloor > 10) {
                console.log('\x1b[33mYou Won\x1b[0m');
                process.exit(0);
            }
        }
    }


} catch (error) {
    console.error('Une erreur est survenue lors de l\'éxecution')
}


stepFloor();



































