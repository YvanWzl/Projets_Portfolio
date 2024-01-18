import express from 'express';
import http, { IncomingMessage } from 'http';
import bodyParser from 'body-parser'; // Read the body of HTML
import { connection } from './dataBase';
import expressSession, { SessionData } from 'express-session';
import { RowDataPacket } from 'mysql2';
import { Server, Socket } from "socket.io";
const path = require('path')
const app = express(); // langage rule to talk this function : 'app'


const session = expressSession({
  secret: 'verysecret',
  resave: false,
  saveUninitialized: true,
  cookie: {}
})


const httpServer = http.createServer(app);
const io = new Server(httpServer);
httpServer.listen(3000, () => console.log('The server is ok')); // route server
const wrapper = (middleware: any) => (socket: Socket, next: any) => middleware(socket.request, {}, next);
io.use(wrapper(session));

declare module 'express-session' {
  interface SessionData {
    user?: {
      id: number,
      username: string
    }
  }
}

interface SessionIncomingMessage extends IncomingMessage {
  session: SessionData
};

interface SessionSocket extends Socket {
  request: SessionIncomingMessage
};

const jsonParser = bodyParser.json();
const urlencodeParser = bodyParser.urlencoded({ extended: true });
app.use(jsonParser);
app.use(urlencodeParser);
app.use(session);
app.use(express.static(path.join(__dirname, '/public')));
app.use(express.static(path.join(__dirname, 'views')));



// Home page
app.get('/home', (request, response) => {
  response.sendFile(__dirname + "/views/home.html")
})



app.get('/home', (request, response) => {
  if (request.session.user) {
    response.send("Hello" + request.session.user.username + "!")
  } else {
    response.send('You are not logged yet')
  }
})

app.get('/login', (request, response) => {
  response.sendFile(__dirname + "/views/login.html")
})
app.post('/login', (request, response) => { // retrieve information
  const username = request.body.username;
  const password = request.body.password;
  console.log(username, password); // display the elements of form(in terminal), here the usernam and password
  if (username && password) {
    const query = 'select * from users where username = ?';
    connection.query(query, username, (error, result) => {
      if (error) {
        console.log(error);
        response.send('user not found')
        response.redirect('/login')
      } else {
        console.log('user found');
        // response.redirect('/chat'); // if user found, redirect to the chat
        const data = <RowDataPacket>result;
        request.session.user = {
          id: data[0].id,
          username: data[0].username
        }
        console.log(result);
        response.redirect('/home')
      }
    });
  } else {
    console.log('usernam or password missing');
    response.send('usernam or password missing');
  }
})






// CHAT page
app.get('/chat_group', (request, response) => {
  response.sendFile(__dirname + "/views/chat_groupe.html")
})

app.get('/chat', (req, res) => { // URL = localhost:3000/chat = display chat.html
  if (req.session.user) { // if user is connected
    res.sendFile(__dirname + '/views/chat.html'); // redirect to the file which correspond to '/chat'
  } else {
    res.redirect('/login'); // if user is not connected, redirect to /
  }
});
io.on('connection', (defaultSocket: Socket) => {
  const socket = <SessionSocket>defaultSocket;
  const userSession = socket.request.session.user;
  if (userSession) {
    console.log(userSession?.username + ' is connected');
    socket.on("chat message", (msg) => {
      io.emit("chat message", userSession.username + ": " + msg); // emit the chat for all user with the same server
    });
    socket.on('disconnect', () => {
      console.log('user disconnected');
    });
  }
});




