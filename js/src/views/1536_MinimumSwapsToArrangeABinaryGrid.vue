<script setup lang="ts">
const getGrid = () => [
  [0, 0, 1],
  [1, 1, 0],
  [1, 0, 0],
]

const getValidGrid = () => [
  [1, 0, 0],
  [1, 1, 0],
  [0, 1, 1],
]

const getNotValidGrid = () => [
  [1, 1, 0],
  [1, 1, 0],
  [0, 1, 0],
]

console.log(minSwaps(getGrid()), minSwaps(getValidGrid()), minSwaps(getNotValidGrid()))

function minSwaps(grid: number[][]): number {
  const maxRightOnes = getMaxRightOnes(grid)

  console.log('isValid', isValid(maxRightOnes))
  console.log('maxRightOnes', maxRightOnes)

  if (isValid(maxRightOnes)) {
    return swap(maxRightOnes)
  }

  return -1
}

function swap(maxRightOnes: number[]): number {
  let count = 0
  const length = maxRightOnes.length

  for (let i = 0; i < length - 1; ++i) {
    let minIndex = 0

    for (let j = i; j < length; ++j) {
      if (maxRightOnes[j]! <= i) {
        minIndex = j
        break
      }
    }

    while (minIndex > i) {
      // swap two rows
      const tmp = maxRightOnes[minIndex]!
      maxRightOnes[minIndex] = maxRightOnes[minIndex - 1]!
      maxRightOnes[minIndex - 1] = tmp

      --minIndex
      ++count
    }
  }

  return count
}

function getMaxRightOnes(grid: number[][]): number[] {
  const maxRightOnes = new Array<number>(grid.length)

  const length = grid.length
  for (let i = 0; i < length; ++i) {
    const row = grid[i]!
    let max = -1
    for (let j = length - 1; j >= 0; --j) {
      if (row[j] === 1) {
        max = j
        break
      }
    }

    maxRightOnes[i] = max
  }

  return maxRightOnes
}

function isValid(maxRightOnes: number[]): boolean {
  const length = maxRightOnes.length
  const copyArr = [...maxRightOnes]

  copyArr.sort((a, b) => a - b)

  for (let i = 0; i < length; ++i) {
    if (copyArr[i]! > i) {
      return false
    }
  }

  return true
}
</script>

<template>
  <div>1536</div>
</template>
