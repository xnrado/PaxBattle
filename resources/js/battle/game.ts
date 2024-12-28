import { Hex } from "./game-objects"
import { CubeVector, Vector } from "./vector";

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

export type GameConfig = {
    hexes: { h: CubeVector; variant: number }[];
    units: { h: CubeVector; }[];
};

class GameState {
    hexes: Map<string, Hex>;

    constructor(config: GameConfig) {
        this.hexes = new Map(
            config.hexes.map((h) => [h.h.toString(), { h: h.h, variant: h.variant }]),

        )
    }
}


export class Game {
    displayDriver: DisplayDriver;
    drawer: Drawer;
    displaySettings: DisplaySettings;

    constructor(ctx: CanvasRenderingContext2D, config: GameConfig) {
        const gameState = new GameState(config)

        this.displaySettings = new DisplaySettings(ctx);
        this.drawer = new Drawer(ctx, gameState, this.displaySettings);

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

    private draw() {
        this.drawer.draw();
    };

    private resize() {
        this.displaySettings.resize()
    }
}
