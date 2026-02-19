<script setup lang="ts">
console.log(numberOfSteps(123))

function numberOfSteps(num: number): number {
  let iterNum = num
  let stepCount = 0

  while (iterNum > 0) {
    if (iterNum % 2 === 0) {
      iterNum = iterNum / 2
    } else {
      iterNum = iterNum - 1
    }
    ++stepCount
  }

  return stepCount
}
</script>
