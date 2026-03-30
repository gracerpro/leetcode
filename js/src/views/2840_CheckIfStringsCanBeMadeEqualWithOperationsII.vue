<script setup lang="ts">
const s1 = 'abab'
const s2 = 'baba'

console.log(checkStrings(s1, s2))

function checkStrings(s1: string, s2: string): boolean {
    const length = s1.length
    const mutableS = s1.split("")

    if (moveChars(0, mutableS, length, s2) === false) {
        return false
    }

    return moveChars(1, mutableS, length, s2)
};

function moveChars(evenStartIndex: number, mutableS: string[], length: number, s2: string): boolean {
    for (let i = evenStartIndex; i < length; i += 2) {
        const startIndex = i
        let index = findIndex(mutableS, length, s2[i]!, startIndex)

        if (index === null) {
            return false
        }
        while (index > i) {
            // swap
            const tmp = mutableS[index - 2]!
            mutableS[index - 2] = mutableS[index]!
            mutableS[index] = tmp

            index -= 2
        }
    }

    return true
}

function findIndex(s: string[], length: number, char: string, startIndex: number): number | null {
    for (let i = startIndex; i < length; i += 2) {
        if (s[i] === char) {
            return i
        }
    }

    return null
}
</script>
