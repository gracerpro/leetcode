<script setup lang="ts">

console.log(checkOnesSegment('1110000'))

function checkOnesSegment(s: string): boolean {
    const length = s.length
    let existCount = 0
    let iterChar = '1'

    for (let i = 0; i < length; ++i) {
        if (s[i] !== iterChar) {
            ++existCount
            iterChar = iterChar === '1' ? '0' : '1'

            if (existCount > 1) {
                return false
            }
        }
    }

    return true
};
</script>

<template>
  <div></div>
</template>
