<script setup lang="ts">
console.log(minOperations('0101111'))

function minOperations(s: string): number {
  if (s.length === 1) {
    return 0
  }

  const count0 = countChanges(s, '0')
  const count1 = countChanges(s, '1')

  return count0 < count1 ? count0 : count1
}

function countChanges(s: string, startChar: string): number {
  const length = s.length
  let result = 0
  let iterIs0 = startChar === '0'

  for (let i = 0; i < length; ++i) {
    if (iterIs0) {
      if (s[i] !== '0') {
        ++result
      }
    } else {
      if (s[i] !== '1') {
        ++result
      }
    }

    iterIs0 = !iterIs0
  }

  return result
}
</script>

<template>
  <div></div>
</template>
