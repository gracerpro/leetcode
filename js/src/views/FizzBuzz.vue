<script setup lang="ts">
console.log(fizzBuzz(15))

function fizzBuzz(n: number): string[] {
  const result = new Array<string>(n)

  for (let n2 = 1; n2 <= n; ++n2) {
    const by3 = n2 % 3
    const by5 = n2 % 5

    if (by3 === 0 && by5 === 0) {
      result[n2 - 1] = 'FizzBuzz'
    } else if (by3 === 0) {
      result[n2 - 1] = 'Fizz'
    } else if (by5 === 0) {
      result[n2 - 1] = 'Buzz'
    } else {
      result[n2 - 1] = n2.toString()
    }
  }

  return result
}
</script>
