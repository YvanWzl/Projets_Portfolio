import mysql from 'mysql2';
import { Connection } from 'mysql2/typings/mysql/lib/Connection';

export const connection = mysql.createConnection({
    host :'127.0.0.1',
    user : 'root',
    database:'MaBaseDeDonnees',
    password :'VeryHardPassword'
});

connection.connect();
export default connection;
