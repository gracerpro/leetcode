<script setup lang="ts">
type ABCountItem = { a: number, b: number }
type AbCounts = Array<ABCountItem>

const s2 = 'ababaaaabbbbbaaababbbbbbaaabbaababbabbbbaabbbbaabbabbabaabbbababaa'
console.log(s2, 'length', s2.length)
console.log(minimumDeletions(s2))


function minimumDeletions(s: string): number {
    if (s === '') {
        return 0
    }

    /*if (aaabbb | aaa | bbb) {
        return 0
    } */

    const abCounts = getAbCounts(s)
    console.log(abCounts)

    let removeB = 0
    for (let i = 0; i < s.length; ++i) {
        if (s[i] === 'b' && abCounts[i]!.a > 0) {
            removeB++
        }
    }

    let removeA = 0
    for (let i = s.length - 1; i >= 0; --i) {
        if (s[i] === 'a' && abCounts[i]!.b > 0) {
            removeA++
        }
    }

    return removeA < removeB ? removeA : removeB
}

function getAbCounts(s: string): AbCounts {
    const result: AbCounts = Array.from({ length: s.length }, () => ({a: 0, b: 0}) )

    const length = s.length
    let countB = 0
    for (let i = 1; i < length; ++i) {
        if (s[i - 1] === 'b') {
            countB++
        }

        result[i]!.b = countB
    }

    let countA = 0
    for (let i = length - 2; i >= 0; --i) {
        if (s[i + 1] === 'a') {
            countA++
        }

        result[i]!.a = countA
    }

    return result
}
</script>

<template>
  <div>

  </div>
</template>
