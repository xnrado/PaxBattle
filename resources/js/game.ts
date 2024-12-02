import { Hex } from "./game-objects"
import { CubeVector, Vector } from "./vector";

export const BASE_CONFIG: GameConfig = {
    hexes: [
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

class Drawer {
        backgroundColor: string = "rgb(50, 50, 50)"
        ctx: CanvasRenderingContext2D;
        gameState: GameState;
        displaySettings: DisplaySettings

    constructor(ctx: CanvasRenderingContext2D, gameState: GameState, displaySettings: DisplaySettings) {
        this.ctx = ctx
        this.gameState = gameState
        this.displaySettings = displaySettings
    }

    public draw() {
        this.ctx.fillStyle = this.backgroundColor;
        this.ctx.fillRect(0, 0, this.ctx.canvas.width, this.ctx.canvas.height);

        this.drawHexes();
    }

    private hexToPixel(layout: DisplaySettings, h: CubeVector): Vector {  // Get Hex center point in pixels
        const M : Orientation = layout.orientation;
        const size : Vector  = layout.getHexSize();
        let x : number = (M.f0 * h.q + M.f1 * h.r) * size.x;
        let y: number = (M.f2 * h.q + M.f3 * h.r) * size.y;
        return new Vector(x, y);
    }

    private pixelToHex(layout: DisplaySettings, p: Vector): CubeVector {  // Get pixel point in Hex coords
        const M : Orientation = layout.orientation;
        const size : Vector = layout.getHexSize();
        let pt : Vector = new Vector((p.x - layout.origin.x) / size.x,
                                     (p.y - layout.origin.y) / size.y);
        let q : number = M.b0 * pt.x + M.b1 * pt.y;
        let r : number = M.b2 * pt.x + M.b3 * pt.y;
        return new CubeVector(q, r, -q - r).round()
    }

    private hexCornerOffset(layout: DisplaySettings, corner: number): Vector {
        let size : Vector = layout.getHexSize()
        let angle : number = 2.0 * Math.PI * (layout.orientation.start_angle + corner) / 6
        return new Vector(size.x * Math.cos(angle), size.y * Math.sin(angle))
    }

    private polygonCorners(layout: DisplaySettings, h: CubeVector): Array<Vector> {
        let corners : Array<Vector> = []
        let center: Vector = this.hexToPixel(layout, h);
        for (let i = 0; i < 6; i++) {
            let offset: Vector = this.hexCornerOffset(layout, i);
            console.log(offset)
            console.log(new Vector(center.x + offset.x, center.y + offset.y))
            corners[i] = new Vector(center.x + offset.x, center.y + offset.y);
        }
        console.log(corners)
        return corners
    }



    private drawHexes() {
        this.ctx.strokeStyle = "white";
        this.ctx.lineWidth = 2;

        // @ts-ignore
        for (const hex of this.gameState.hexes.values()) {
            let corners = this.polygonCorners(this.displaySettings, hex.h)
            this.ctx.beginPath()
            for (var i = 0; i < 6; i++) {
                this.ctx.lineTo(corners[i].x, corners[i].y)
            }
            this.ctx.closePath()
            this.ctx.stroke()
        }
    }
}

type HexPreset = {
    hexSize: Vector
}
type Orientation = {
    f0: number;
    f1: number;
    f2: number;
    f3: number;
    b0: number;
    b1: number;
    b2: number;
    b3: number;
    start_angle: number; // in multiples of 60°
};

class DisplaySettings {
    ctx: CanvasRenderingContext2D;
    orientation: Orientation = {
        f0: Math.sqrt(3),
        f1: Math.sqrt(3) / 2,
        f2: 0,
        f3: 3 / 2,
        b0: Math.sqrt(3) / 3,
        b1: -1 / 3,
        b2: 0,
        b3: 2 / 3,
        start_angle: 0.5,
    }
    origin: Vector = new Vector(0, 0);
    hexPreset: HexPreset = {
        hexSize: new Vector(90, 90)
    }

    constructor(ctx: CanvasRenderingContext2D) {
        this.ctx = ctx;
    }

    public resize() {
        const rect = this.ctx.canvas.parentElement!.getBoundingClientRect();
        const pixelRatio = window.devicePixelRatio;

        const screen = new Vector(rect.width, rect.height)
        this.ctx.canvas.style.width = `${screen.x}px`;
        this.ctx.canvas.style.height = `${screen.y}px`;

        const  canvasSize = screen.mul(pixelRatio)
        this.ctx.canvas.width = canvasSize.x
        this.ctx.canvas.height = canvasSize.y
    }

    public getHexSize(): Vector {
        return this.hexPreset.hexSize;
    }
}

export class Game {
    drawer: Drawer;
    displaySettings: DisplaySettings;

    constructor(ctx: CanvasRenderingContext2D, config: GameConfig) {
        const gameState = new GameState(config)

        this.displaySettings = new DisplaySettings(ctx);
        this.drawer = new Drawer(ctx, gameState, this.displaySettings);

        window.addEventListener('resize', () => {
            this.resize();
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
