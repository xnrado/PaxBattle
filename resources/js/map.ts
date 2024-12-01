// @ts-ignore
import {BASE_CONFIG, Game} from './game.ts'

const canvas = document.getElementById("game") as HTMLCanvasElement;
const ctx = canvas.getContext("2d") as CanvasRenderingContext2D;
console.log("Testing Typescript");

const game = new Game(ctx, BASE_CONFIG);
game.run();
