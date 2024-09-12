import io from 'socket.io-client';

const socket = io('http://server.okuoku.ru:6001');

export default socket;