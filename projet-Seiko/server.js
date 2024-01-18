const express = require('express');
const path = require('path');
require('dotenv').config();
const { readFile } = require('fs').promises;
const connection = require('./connection') // connexion db
const app = express();
app.use(express.json())



// Middleware pour autoriser les requêtes depuis toutes les origines
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    next();
  });

const PORT = process.env.PORT || 3002;
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});



const INDEX_FILE_PATH = path.join(__dirname, 'Front', 'src', 'index.html');


const generatePage = async () => {
    try {
        const contenu = await readFile(INDEX_FILE_PATH, { encoding: 'UTF-8' });
        return contenu;
    } catch (error) {
        throw new Error('Unable to read index.html file');
    }
};


app.get('/', async (req, res) => {
    try {
        const indexHtml = await generatePage();
        res.send(indexHtml);
    } catch (error) {
        console.error(error);
        res.status(500).json({ error: 'Internal Server Error' });
    }
});




app.get('/users', (req, res) => {
    connection.query('SELECT * FROM watch', (error, results, fields) => {
        if (error) {
            console.error('Error fetching users:', error);
            res.status(500).json({ error: 'Internal Server Error' });
            return;
        }

        res.json(results);
    });
});