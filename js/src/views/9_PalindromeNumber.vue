<script setup lang="ts">
console.log(isPalindrome(121))

function isPalindrome(x: number): boolean {
  if (x < 0) {
    return false
  }

  let tmp = 0
  let iterX = x

  while (iterX > 0) {
    tmp = tmp * 10 + (iterX % 10)
    iterX = Math.trunc(iterX / 10)
    console.log(iterX, tmp)
  }

  return tmp === x
}
</script>

<template>
  <div></div>
</template>
