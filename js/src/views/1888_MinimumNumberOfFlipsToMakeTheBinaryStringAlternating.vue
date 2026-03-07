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
          ++oddZeroes
        } else {
          ++oddOnes
        }
      } else {
        if (s[i] === '0') {
          ++evenZeros
        } else {
          ++evenOnes
        }
      }
    }

   // console.log("odd 0", oddZeroes, 'odd 1', oddOnes)
   // console.log("even 0", evenZeros, 'even 1', evenOnes)*/

  // flip
  const firstChar = s[0]!
  let resultCount = 0
  let prevChar = firstChar
  for (let i = 1; i < length; ++i) {
    // console.log(i, s[i])
      if (s[i] === prevChar) {
        //  s[i] = s[i] === '0' ? '1' : '0'
          ++resultCount
          prevChar = prevChar === '0' ? '1' : '0'
      } else {
        prevChar = s[i]!
      }
  }

  return resultCount
};
</script>

<template>
  <div></div>
</template>
