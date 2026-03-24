<script setup lang="ts">
console.log(findMaxConsecutiveOnes([1, 1, 1, 0, 1, 1]))

function findMaxConsecutiveOnes(nums: number[]): number {
    let max = 0
    let result = 0

    for (let i = 0; i < nums.length; ++i) {
        if (nums[i] === 1) {
            ++max
        } else {
            if (max > result) {
                result = max
            }
            max = 0
        }
    }

    return result > max ? result : max
};
</script>
