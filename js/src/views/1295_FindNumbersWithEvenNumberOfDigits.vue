<script setup lang="ts">
console.log(findNumbers([1, 11, 239, 49976]))

function findNumbers(nums: number[]): number {
    let result = 0
    const length = nums.length

    for (let i = 0; i < length; ++i) {
       /* const s = nums[i].toString()

        if (s.length % 2 === 0) {
            ++result
        }*/
        let number = nums[i]!
        let count = 0
        while (number > 0) {
            ++count
            number = Math.floor(number / 10)
        }
        if (count % 2 === 0) {
            ++result
        }
    }

    return result
};
</script>
