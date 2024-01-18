const mysql = require('mysql2');


const connection = mysql.createConnection({
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_DATABASE
});

// Gère les erreurs
connection.connect(async (err) => {
    if (err) {
        console.error('Error connecting to the database:', err);
        return;
    } else {
        console.log(`Connected to the database : ${process.env.DB_DATABASE}`);
    }

 });


module.exports = connection;