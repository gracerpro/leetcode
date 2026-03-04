<script setup lang="ts">

const mat = [[1,0,0],[0,0,1],[1,0,0]]

numSpecial(mat)

function numSpecial(mat: number[][]): number {
    let resultNumber = 0
    const rowCount = mat.length

    for (let i = 0; i < rowCount; ++i) {
        let oneCount = 0
        const row = mat[i]!
        const rowLength = row.length
        let oneIndex = 0

        for (let j = 0; j < rowLength; ++j) {
            if (row[j] === 1) {
                ++oneCount

                if (oneCount > 1) {
                    break
                }
                oneIndex = j
            }
        }
        if (oneCount === 1) {
            let isSpecial = true

            for (let j = 0; j < rowCount; ++j) {
                if (j !== i && mat[j]![oneIndex] === 1) {
                    isSpecial = false
                    break
                }
            }

            if (isSpecial) {
                ++resultNumber
            }
        }
    }

    return resultNumber
};
</script>

<template>
  <div></div>
</template>
