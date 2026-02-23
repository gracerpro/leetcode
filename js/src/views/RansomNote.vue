<script setup lang="ts">
console.log(canConstruct('aab', 'aabbddd'))

/**
 * Given two strings ransomNote and magazine, return true if ransomNote
 * can be constructed by using the letters from magazine and false otherwise.
 * Each letter in magazine can only be used once in ransomNote.
 */
function canConstruct(ransomNote: string, magazine: string): boolean {
  const magazineChars = new Map<string, number>()

  for (let i = 0; i < magazine.length; i++) {
    const char = magazine[i]!
    const iterCount = magazineChars.get(char)

    magazineChars.set(char, iterCount == undefined ? 1 : iterCount + 1)
  }

  for (let i = 0; i < ransomNote.length; i++) {
    const char = ransomNote[i]!
    const iterCount = magazineChars.get(char)

    if (iterCount === undefined || iterCount === 0) {
      return false
    }

    magazineChars.set(char, iterCount - 1)
  }

  return true
}
</script>

<template>
  <div></div>
</template>
