<script setup lang="ts">

const getGrid = () => ([
  [0,0,1],
  [1,1,0],
  [1,0,0]
])

const getValidGrid = () => ([
  [1,0,0],
  [1,1,0],
  [0,1,1]
])

console.log(minSwaps(getGrid()), minSwaps(getValidGrid()))

function minSwaps(grid: number[][]): number {
  console.log('grid.length', grid.length)
  console.log('isValid', isValid(grid))

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

  return -1
};

function isValid(grid: number[][]): boolean {
    let startIndex = 1;
    const length = grid.length
    const skipLength = grid.length - 1

    for (let i = 0; i < skipLength; ++i) {
      const row = grid[i]!

      for (let j = startIndex; j < length; ++j) {
        if (row[j] !== 0) {
          return false
        }
      }
      ++startIndex
    }

    return true
}

</script>

<template>
  <div>1536</div>
</template>
