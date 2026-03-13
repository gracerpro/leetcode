<script setup lang="ts">
console.log(minNumberOfSeconds(10, [3,2,2,4]))

function minNumberOfSeconds(mountainHeight: number, workerTimes: number[]): number {
    let iterHeight = mountainHeight
    let i = 0
    const seconds = new Array<number>()

    while (iterHeight > 0 && i < workerTimes.length) {
        let reduceHeight = i + 1
        iterHeight -= reduceHeight

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

    return seconds.reduce((a, b) => Math.max(a, b), -Infinity)
};
</script>

<template>
  <div></div>
</template>
