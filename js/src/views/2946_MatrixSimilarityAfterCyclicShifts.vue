<script setup lang="ts">
console.log(
  areSimilar(
    [
      [1, 2, 1, 2],
      [5, 5, 5, 5],
      [6, 3, 6, 3],
    ],
    2,
  ),
)

function areSimilar(mat: number[][], k: number): boolean {
  if (k === 0) {
    return true
  }

  const rowLength = mat[0]!.length
  const mod = k % rowLength
  const evenIndex = mod
  const oddIndex = mod === 0 ? 0 : rowLength - mod

  // TODO: read the new values from origin array
  // k = k % rowLength

  const newMat = mat.map((rowValues, index) => {
    if (index % 2 === 0) {
      // left
      return rowValues.map((colValues, index) => {
        return rowValues[(index + evenIndex) % rowLength]!
      })
    }

    // right
    return rowValues.map((colValues, index) => {
      return rowValues[(index + oddIndex) % rowLength]!
    })
  })

  return isEquals(mat, newMat)
}

function isEquals(mat1: number[][], mat2: number[][]): boolean {
  // mat1.length === mat2.length

  for (let i = 0; i < mat1.length; ++i) {
    const row = mat1[i]!

    for (let j = 0; j < row.length; ++j) {
      if (mat1[i]![j] !== mat2[i]![j]) {
        return false
      }
    }
  }

  return true
}
</script>
