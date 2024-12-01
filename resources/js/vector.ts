export class Vector {
    x: number;
    y: number;

    constructor(x: number, y: number) {
        this.x = x;
        this.y = y;
    }

    toString(): string {
        return `${this.x}_${this.y}`
    }

    mul(multiplier: number): Vector {
        return new Vector(this.x * multiplier, this.y * multiplier)
    }

    add(other: Vector): Vector {
        return new Vector(this.x + other.x, this.y + other.y)
    }

    sub(other: Vector): Vector {
        return new Vector(this.x - other.x, this.y - other.y)
    }

    matmul(other: Vector): Vector {
        return new Vector(this.x * other.x, this.y * other.y)
    }

    round(): Vector {
        return new Vector(Math.round(this.x), Math.round(this.y))
    }
}

export class CubeVector {
    q: number;
    r: number;
    s: number;

    constructor(q: number, r: number, s: number) {
        this.q = q;
        this.r = r;
        this.s = s;
    }

    toString(): string {
        return `${this.q}_${this.r}_${this.s}`
    }

    toAxial(cubeVector: CubeVector): Vector {
        const x: number = cubeVector.q
        const y: number = cubeVector.r

        return new Vector(x, y)
    }

    mul(multiplier: number): CubeVector {
        return new CubeVector(this.q * multiplier, this.r * multiplier, this.s * multiplier)
    }

    add(other: CubeVector): CubeVector {
        return new CubeVector(this.q + other.q, this.r + other.r, this.s + other.s)
    }

    sub(other: CubeVector): CubeVector {
        return new CubeVector(this.q - other.q, this.r - other.r, this.s - other.s)
    }

    matmul(other: CubeVector): CubeVector {
        return new CubeVector(this.q * other.q, this.r * other.r, this.s * other.s)
    }

    round(): CubeVector {
        let q = Math.round(this.q)
        let r = Math.round(this.r)
        let s = Math.round(this.s)

        let q_diff = Math.abs(q - this.q)
        let r_diff = Math.abs(r - this.r)
        let s_diff = Math.abs(s - this.s)

        if ((q_diff > r_diff) && (q_diff > s_diff)) {
            q = -r-s
        } else if (r_diff > s_diff) {
            r = -q-s
        } else {
            s = -q-r
        }

        return new CubeVector(q, r, s)
    }
}
