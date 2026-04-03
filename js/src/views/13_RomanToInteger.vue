<script setup lang="ts">
type ExceptKey = 'I' | 'X' | 'C'

console.log(romanToInt('III'))

function romanToInt(s: string): number {
  const romanMap = {
    I: 1,
    V: 5,
    X: 10,
    L: 50,
    C: 100,
    D: 500,
    M: 1000,
  }
  const exceptMap = {
    I: {
      first: 'V',
      second: 'X',
      scale: 1,
    },
    X: {
      first: 'L',
      second: 'C',
      scale: 10,
    },
    C: {
      first: 'D',
      second: 'M',
      scale: 100,
    },
  }

  let result = 0
  const length = s.length
  let i = 0
  while (i < length) {
    const except = exceptMap[s[i] as ExceptKey]

    if (except && i < length - 1) {
      if (s[i + 1] === except.first) {
        result += 4 * except.scale
        i += 2
        continue
      } else if (s[i + 1] === except.second) {
        result += 9 * except.scale
        i += 2
        continue
      }
    }

    result += romanMap[s[i] as ExceptKey]
    i++
  }

  return result
}
</script>
