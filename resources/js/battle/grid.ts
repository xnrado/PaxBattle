import { GameState } from "./game-objects";
import { Vector } from "./vector";

export class Grid {
    gameState: GameState;
    lastPoint: null | Vector = null;
}
