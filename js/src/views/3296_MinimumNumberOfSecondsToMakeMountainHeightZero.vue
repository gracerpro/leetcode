<script setup lang="ts">
//console.log(minNumberOfSeconds(10, [3,2,2,4]))
console.log(minNumberOfSeconds(5, [1]))

const EPS: number = 1e-7

function minNumberOfSeconds(mountainHeight: number, workerTimes: number[]): number {
  if (workerTimes.length === 0) {
    return 0
  }

  console.log('mountainHeight', mountainHeight)

  const maxWorkTime = workerTimes.reduce((prev, value) => Math.max(prev, value), 0)

  console.log('maxWorkTime', maxWorkTime)

  let lower = 1
  let upper = (maxWorkTime * mountainHeight * (mountainHeight + 1)) / 2
  let result = 0

  while (lower <= upper) {
    const mid = Math.floor((lower + upper) / 2)
    let iterHeight = 0

    for (const t of workerTimes) {
      const work = Math.floor(mid / t)
      const k = Math.floor((-1 + Math.sqrt(1 + 8 * work)) / 2 + EPS)
      iterHeight += k
    }

    if (iterHeight >= mountainHeight) {
      result = mid
      upper = mid - 1
    } else {
      lower = mid + 1
    }
  }

  return result
}
</script>

<template>
  <div></div>
</template>
