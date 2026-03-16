<script setup lang="ts">
console.log(minNumberOfSeconds(10, [3,2,2,4]))
//console.log(minNumberOfSeconds(5, [1]))

function minNumberOfSeconds(mountainHeight: number, workerTimes: number[]): number {
  if (workerTimes.length === 0) {
    return 0
  }

  console.log("mountainHeight", mountainHeight)

  const maxWorkTime = workerTimes.reduce((prev, value) => Math.max(prev, value), 0)

  console.log('maxWorkTime', maxWorkTime)

  let lower = 1
  let upper = (maxWorkTime * mountainHeight * (mountainHeight + 1)) / 2
  let result = 0

  while (lower <= upper) {

    lower = lower + 1
    upper = upper - 1
  }

  return result
};
</script>

<template>
  <div></div>
</template>
