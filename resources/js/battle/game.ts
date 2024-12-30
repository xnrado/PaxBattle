import { Hex, GameState, GameConfig } from "./game-objects";
import { DisplayDriver } from "./display-driver";
import { CubeVector, Vector } from "./vector";

function elementToScreenCoords(elementP: Vector): Vector {
    return elementP.mul(window.devicePixelRatio).round();
}

export const BASE_CONFIG: GameConfig = {
    hexes: [
        { h: new CubeVector(0, 0, 0), variant: 0 },
        { h: new CubeVector(1, 1, -2), variant: 0 },
        { h: new CubeVector(2, 3, -5), variant: 0 },
        { h: new CubeVector(3, 3, -6), variant: 0 },
        { h: new CubeVector(3, 4, -7), variant: 0 },
        { h: new CubeVector(4, 3, -7), variant: 0 },
        { h: new CubeVector(4, 4, -8), variant: 0 },
        { h: new CubeVector(2, 4, -6), variant: 0 },
    ],
    units: [
        { h: new CubeVector(2, 3, -5),},
    ]
}

export class Game {
    displayDriver: DisplayDriver;

    constructor(ctx: CanvasRenderingContext2D, config: GameConfig) {
        const gameState = new GameState(config)

        this.displayDriver = new DisplayDriver(ctx, gameState)

        window.addEventListener('resize', () => {
            this.resize();
            this.draw();
        });
        this.resize();
    }

    public run() {
        requestAnimationFrame(() => {
            this.draw();
        });
    }

    private initEventListeners(canvas: HTMLCanvasElement) {
        canvas.addEventListener("pointerdown", (e: PointerEvent) => {
            // const screenP = element
        })
    }

    private draw() {
        this.displayDriver.draw();
    };

    private resize() {
        this.displayDriver.resize()
    }
}
