import {CubeVector, Vector} from "./vector";

const SPRITES_IMAGE_SRC = "../../../storage/img/battlefield/terrain.png"

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

type Sprite = {
    sourceStart: Vector;
    sourceSize: Vector;
    offset: Vector;
}

type SpritePreset = {
    hexSize: Vector;
    hexes: Sprite[];
}

class Drawer {
    backgroundColor: string = "rgb(50, 50, 50)"
    ctx: CanvasRenderingContext2D;
    gameState: GameState;
    displaySettings: DisplaySettings;
    terrainSprites: HTMLImageElement;

    constructor(ctx: CanvasRenderingContext2D, gameState: GameState, displaySettings: DisplaySettings) {
        this.ctx = ctx;
        this.gameState = gameState;
        this.displaySettings = displaySettings;
        this.terrainSprites = new Image();
        this.terrainSprites.src = SPRITES_IMAGE_SRC;
    }

    public draw() {
        this.ctx.fillStyle = this.backgroundColor;
        this.ctx.fillRect(0, 0, this.ctx.canvas.width, this.ctx.canvas.height);

        this.drawHexes();
    }

    private drawDebugHexes() {
        this.ctx.strokeStyle = "white";
        this.ctx.fillStyle = "red";
        this.ctx.lineWidth = 2;
        const hexSize = this.displaySettings.getHexSize()

        // @ts-ignore
        for (const hex of this.gameState.hexes.values()) {
            let corners = this.displaySettings.polygonCorners(hex.h)
            this.ctx.beginPath()
            for (var i = 0; i < 6; i++) {
                this.ctx.lineTo(corners[i].x, corners[i].y)
            }
            this.ctx.closePath()
            this.ctx.stroke()
            let center = this.displaySettings.hexToPixel(hex.h)
            this.ctx.fillRect(center.x - hexSize.x/2, center.y - hexSize.y/2, 2, 2)
            console.log(center)
            console.log(corners)
            console.log(hexSize)
        }
    }

    private drawHexes() {
        const hexSize = this.displaySettings.getHexSize()

        // @ts-ignore
        for (const hex of this.gameState.hexes.values()) {
            console.log(hex)
            const hexCenter = this.displaySettings.hexToPixel(hex.h)
            const spriteCords = this.displaySettings.getHexSprite(hex.variant)
            const start = hexCenter.add(spriteCords.offset)
            const size = spriteCords.sourceSize;
            console.log([
                this.terrainSprites,
                spriteCords.sourceStart.x,
                spriteCords.sourceStart.y,
                spriteCords.sourceSize.x,
                spriteCords.sourceSize.y,
                start.x,
                start.y,
                size.x,
                size.y
            ])
            this.ctx.drawImage(
                this.terrainSprites,
                spriteCords.sourceStart.x,
                spriteCords.sourceStart.y,
                spriteCords.sourceSize.x,
                spriteCords.sourceSize.y,
                start.x,
                start.y,
                size.x,
                size.y
            )
        }
        this.drawDebugHexes();

    }
}

class DisplaySettings {
    ctx: CanvasRenderingContext2D;
    //// Pointy top
    // orientation: Orientation = {
    //     f0: Math.sqrt(3),
    //     f1: Math.sqrt(3) / 2,
    //     f2: 0,
    //     f3: 3 / 2,
    //     b0: Math.sqrt(3) / 3,
    //     b1: -1 / 3,
    //     b2: 0,
    //     b3: 2 / 3,
    //     start_angle: 0.5,
    // }
    //// Flat top
    orientation: Orientation = {
        f0: 3 / 2,
        f1: 0,
        f2: Math.sqrt(3) / 2,
        f3: Math.sqrt(3),
        b0: 2 / 3,
        b1: 0,
        b2: -1 / 3,
        b3: Math.sqrt(3) / 3,
        start_angle: 0,
    }
    origin: Vector = new Vector(0, 0);
    spritePreset: SpritePreset = {
        hexSize: new Vector(160, 80),
        hexes: [
            {
                sourceStart: new Vector(558, 11),
                sourceSize: new Vector(162, 100),
                offset: new Vector(-81, -50)
            }
        ]
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

        const canvasSize = screen.mul(pixelRatio)
        this.ctx.canvas.width = canvasSize.x
        this.ctx.canvas.height = canvasSize.y
    }

    public getHexSprite(variant: number): Sprite {
        return this.spritePreset.hexes[variant];
    }

    public getHexSize(): Vector {
        return this.spritePreset.hexSize;
    }

    public hexToPixel(h: CubeVector): Vector {  // Get Hex center point in pixels
        const M : Orientation = this.orientation;
        const hexSize = this.getHexSize()
        // This is needed because of https://www.redblobgames.com/grids/hexagons/implementation.html#layout-examples
        const size = new Vector(hexSize.x / 2, hexSize.y / Math.sqrt(3))

        const x : number = (M.f0 * h.q + M.f1 * h.r) * size.x;
        const y: number = (M.f2 * h.q + M.f3 * h.r) * size.y;

        return new Vector(x, y);
    }

    public pixelToHex(p: Vector): CubeVector {  // Get pixel point in Hex coords
        const M : Orientation = this.orientation;
        const hexSize = this.getHexSize()
        const size = new Vector(hexSize.x / 2, hexSize.y / Math.sqrt(3))

        const pt : Vector = new Vector((p.x - this.origin.x) / size.x,
            (p.y - this.origin.y) / size.y);
        const q : number = M.b0 * pt.x + M.b1 * pt.y;
        const r : number = M.b2 * pt.x + M.b3 * pt.y;

        return new CubeVector(q, r, -q - r).round()
    }

    private hexCornerOffset(corner: number): Vector {
        const hexSize = this.getHexSize()
        const size = new Vector(hexSize.x / 2, hexSize.y / Math.sqrt(3))
        const angle : number = 2.0 * Math.PI * (this.orientation.start_angle + corner) / 6

        return new Vector(size.x * Math.cos(angle), size.y * Math.sin(angle))
    }

    public polygonCorners(h: CubeVector): Array<Vector> {
        let corners : Array<Vector> = []
        let center: Vector = this.hexToPixel(h);
        for (let i = 0; i < 6; i++) {
            let offset: Vector = this.hexCornerOffset(i);
            console.log(offset)
            console.log(new Vector(center.x + offset.x, center.y + offset.y))
            corners[i] = new Vector(center.x + offset.x, center.y + offset.y);
        }
        console.log(corners)
        return corners
    }
}
