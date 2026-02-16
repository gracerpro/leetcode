<script setup lang="ts">
type ABCountItem = { a: number; b: number }
type AbCounts = Array<ABCountItem>

const s2 = 'ababaaaabbbbbaaababbbbbbaaabbaababbabbbbaabbbbaabbabbabaabbbababaa'

function minimumDeletions(s: string): number {
  if (s === '') {
    return 0
  }

  /*if (aaabbb | aaa | bbb) {
        return 0
    } */

  const abCounts = getAbCounts(s)

  let minDeleteCount = s.length // max deletions
  for (let i = 0; i < s.length; ++i) {
    if (abCounts[i]!.a + abCounts[i]!.b < minDeleteCount) {
      minDeleteCount = abCounts[i]!.a + abCounts[i]!.b
    }
  }

  return minDeleteCount
}

function getAbCounts(s: string): AbCounts {
  const length = s.length
  const result: AbCounts = Array.from({ length }, () => ({ a: 0, b: 0 }))

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
    <h2>s2</h2>
    <div>{{ s2 }}</div>
    <div>{{ minimumDeletions(s2) }}</div>
  </div>
</template>
