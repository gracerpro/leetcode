<script setup lang="ts">

console.log("result", minFlips('10001100101000000'))
console.log("result", minFlips('01001001101'))

function minFlips(s: string): number {
    if (s.length <= 1) {
        return 0
    }

    const length = s.length

  /*  let oddZeroes = 0
    let oddOnes = 0
    let evenZeros = 0
    let evenOnes = 0

    for (let i = 0; i < length; ++i) {
      if (i % 2 === 0) {
        if (s[i] === '0') {
          ++evenZeros
        } else {
          ++evenOnes
        }
      } else {
        if (s[i] === '0') {
          ++oddZeroes
        } else {
          ++oddOnes
        }
      }
    }

   // console.log("odd 0", oddZeroes, 'odd 1', oddOnes)
   // console.log("even 0", evenZeros, 'even 1', evenOnes)*/

  // this is task is so hard
  // ...

  let resultCount = 0

  return resultCount
};
</script>

<template>
  <div></div>
</template>
