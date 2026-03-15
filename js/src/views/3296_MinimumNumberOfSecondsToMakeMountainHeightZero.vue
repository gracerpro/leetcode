<script setup lang="ts">
//console.log(minNumberOfSeconds(10, [3,2,2,4]))
console.log(minNumberOfSeconds(5, [1]))

function minNumberOfSeconds(mountainHeight: number, workerTimes: number[]): number {
  if (workerTimes.length === 0) {
    return 0
  }

  console.log("mountainHeight", mountainHeight)

  let iterHeight = mountainHeight
  const seconds = new Array<number>()
  let i = 0

  while (iterHeight > 0) {
    let reduceHeight = i + 1

    if (reduceHeight > workerTimes.length) {
      reduceHeight = workerTimes.length
      i = workerTimes.length - 1
    }

    iterHeight -= reduceHeight

    console.log(iterHeight, reduceHeight)

    if (iterHeight < 0) {
        reduceHeight += iterHeight
        iterHeight = 0
    }

    let iterSeconds = 0
    for (let j = 1; j <= reduceHeight; ++j) {
        iterSeconds += workerTimes[i]! * j
    }
    seconds.push(iterSeconds)

    ++i
  }

  console.log(seconds)

  return seconds.reduce((a, b) => Math.max(a, b), -Infinity)
};
</script>

<template>
  <div></div>
</template>
