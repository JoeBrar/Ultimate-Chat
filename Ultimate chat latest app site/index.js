const express=require('express');
const http=require('http');
const app=express();
const server=http.createServer(app);
const io=require('socket.io')(server);
var roomid=undefined;

app.use(express.urlencoded({extended:"false"}));
app.use(express.json());

app.get('/',(req,res)=>{
    res.sendFile(__dirname+'/index.html');
});
app.get('/styleuc.css', (req,res)=>{
    res.sendFile(__dirname +'/styleuc.css');
});
app.get('/mainchat',(req,res)=>{
    //res.sendFile(__dirname+'/landingpage.html');
    res.statusCode = 302;
    res.setHeader("Location", "/");
    res.end();
});
app.post('/mainchat',(req,res)=>{
    roomid=req.body.room_id;
    if(roomid){
        res.sendFile(__dirname+'/mainchat.html');
        console.log(req.body.room_id);
    }
    else{
        res.sendFile(__dirname+'/index.html');
    }
});

io.on('connection',(socket)=>{
        console.log('a user connected');
        socket.join(roomid);
        socket.on('chat message',(msg)=>{
            io.to(Array.from(socket.rooms.keys())[1]).emit('chat message',msg);
            console.log('msg : '+msg);
        });
        socket.on('disconnect',()=>{
            console.log('user disconnected');
        });
});

server.listen(3000,()=>{
    console.log("Listning at port 3000");
});