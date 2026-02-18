<script setup lang="ts">
const accounts = [
  [1, 2, 3],
  [4, 5, 6],
]

console.log(maximumWealth(accounts))

function maximumWealth(accounts: number[][]): number {
  let maxWealth = 0
  const accountsLength = accounts.length

  for (let i = 0; i < accountsLength; ++i) {
    const accountWealths = accounts[i]!

    const accountWealthsLength = accountWealths.length
    let sum = 0
    for (let j = 0; j < accountWealthsLength; ++j) {
      sum += accountWealths[j]!
    }
    if (sum > maxWealth) {
      maxWealth = sum
    }
  }

  return maxWealth
}
</script>
