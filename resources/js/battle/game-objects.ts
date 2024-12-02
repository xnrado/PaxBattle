import {CubeVector, Vector} from "./vector";
import mariadb = require('mariadb');


export type GameConfig = {
    hexes: { h: CubeVector; terrain_id: number }[];
    units: { h: CubeVector; }
}

export type Hex = {
    h: CubeVector
    variant: number
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
