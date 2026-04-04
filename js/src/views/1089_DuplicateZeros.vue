<script setup lang="ts">
const arr = [1, 2, 0, 3, 4, 0]
console.log(duplicateZeros(arr))

/**
 Do not return anything, modify arr in-place instead.
 */
function duplicateZeros(arr: number[]): void {
  for (let i = 0; i < arr.length; ++i) {
    if (arr[i] === 0) {
      let j = i + 1
      let copyElement = 0
      while (j < arr.length) {
        const tmp = arr[j]!
        arr[j] = copyElement
        copyElement = tmp
        ++j
      }
      ++i
    }
  }
}
</script>
