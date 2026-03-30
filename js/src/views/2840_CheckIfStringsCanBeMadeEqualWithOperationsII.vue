<script setup lang="ts">
const s1 = 'abcdba'
const s2 = 'cabdab'
const result = checkStrings(s1, s2)

function checkStrings(s1: string, s2: string): boolean {
  const length = s1.length
  const counts = new Int32Array(256)

  // 'a' ... 'z'
  for (let i = 0; i < length; ++i) {
    // even and odd:
    // i = 0,1,2,3...
    // offset = 0,128,0,128...
    const offset = (i & 1) << 7
    counts[offset + s1.charCodeAt(i)]!++
    counts[offset + s2.charCodeAt(i)]!--
  }

  for (let i = 0; i < 256; ++i) {
    if (counts[i] !== 0) {
      return false
    }
  }

  return true
}
</script>

<template>
  <div>
    Result: <b>{{ result }}</b>
  </div>
</template>
