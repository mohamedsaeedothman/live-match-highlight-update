// import http server
var server = require('http').Server();
 // import socket.io
var io = require('socket.io')(server);
// import redis
var Redis = require('ioredis');
var redis = new Redis();
// subscribe to channel
redis.subscribe('test-channel');
// listen to channel
redis.on('message', function(channel, message) {
// parse message
    message = JSON.parse(message);
// emit data
    io.emit(channel + ':' + message.event, message.data);
});
// listen server on port 3000
server.listen(3000);