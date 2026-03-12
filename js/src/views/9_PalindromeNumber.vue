<script setup lang="ts">
console.log(isPalindrome(101))
console.log(isPalindrome(123))
console.log(isPalindrome(0))

function isPalindrome(x: number): boolean {
    const s = x.toString()
    const length = s.length

    const lengthDiv2 = Math.floor(length / 2)
    for (let i = 0; i < lengthDiv2; ++i) {
        if (s[i] !== s[length - 1 - i]) {
            return false
        }
    }

    return true
};
</script>

<template>
  <div></div>
</template>
