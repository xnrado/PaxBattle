// @ts-ignore
import {BASE_CONFIG, Game} from './game.ts'
import Echo from "laravel-echo";
import axios from 'axios';

// let echo = new Echo({
//     broadcaster: 'reverb',
//     host: `${window.location.hostname}:8080`
// })
// window.Echo.channel('chat')
//     .listen('EventName', (event) => {
//         console.log(event);
//     });

const canvas = document.getElementById("game") as HTMLCanvasElement;
const ctx = canvas.getContext("2d") as CanvasRenderingContext2D;
console.log("Testing Typescript");

axios.get('/api/user')
    .then(response => {
        console.log(response.data)
    })

const game = new Game(ctx, BASE_CONFIG);
game.run();
