import { CubeVector, Vector } from "./vector";
// import mariadb = require('mariadb');


export type GameConfig = {
    hexes: { h: CubeVector; variant: number; terrain_id: number; height: number; }[];
    units: { h: CubeVector; }[];
}

export class GameState {
    hexes: Map<string, Hex>;

    constructor(config: GameConfig) {
        this.hexes = new Map(
            config.hexes.map((h) => [h.h.toString(), { h: h.h, variant: h.variant, terrain_id: h.terrain_id, height: h.height }]),

        )
        console.log(this.hexes)
    }

}

export type Hex = {
    h: CubeVector
    variant: number
    terrain_id: number
    height: number
};

export type UnitTemplate = {
    id: number
    name: string
    description: string
    image: string
    battle_movement: number
    max_manpower: number
    range: number
    // weapon_skill
    // ballistic_skill
    // weapon_attacks
    // ballistic_attacks
    // weapon_strength
    // ballistic_strength
    // toughness
    type: string
    is_singular: boolean
}

export type Unit = {
    h: CubeVector
    template: UnitTemplate
}
