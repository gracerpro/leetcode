<script setup lang="ts">
console.log(sortedSquares([-4, -1, 0, 3, 10]))

function sortedSquares(nums: number[]): number[] {
  let leftIndex = 0
  let rightIndex = nums.length - 1
  const resultNums = new Array<number>(nums.length)

  let resultIndex = nums.length - 1
  while (leftIndex < rightIndex) {
    const left = nums[leftIndex]!
    const right = nums[rightIndex]!
    const left2 = left * left
    const right2 = right * right

    if (left2 > right2) {
      resultNums[resultIndex] = left2
      leftIndex++
    } else {
      resultNums[resultIndex] = right2
      rightIndex--
    }
    resultIndex--
  }

  const n = nums[leftIndex]! // leftIndex === rightIndex
  resultNums[resultIndex] = n * n

  return resultNums
}
</script>

<template>
  <div></div>
</template>
