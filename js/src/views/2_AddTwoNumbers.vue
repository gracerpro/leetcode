<script setup lang="ts">
class ListNode {
  val: number
  next: ListNode | null
  constructor(val?: number, next?: ListNode | null) {
    this.val = val === undefined ? 0 : val
    this.next = next === undefined ? null : next
  }
}

const l1 = new ListNode(1)
const l2 = new ListNode(2)
console.log(addTwoNumbers(l1, l2))

function addTwoNumbers(l1: ListNode | null, l2: ListNode | null): ListNode | null {
  let result: ListNode | null = null

  let p1: ListNode | null = l1
  let p2: ListNode | null = l2

  let additionalDigit = null
  let prevNode = null

  while (p1 !== null || p2 !== null) {
    let value = (p1 ? p1.val : 0) + (p2 ? p2.val : 0) + (additionalDigit ? additionalDigit : 0)

    if (value > 9) {
      additionalDigit = Math.floor(value / 10)
      value = value % 10
    } else {
      additionalDigit = null
    }

    const node = new ListNode(value)

    if (prevNode) {
      prevNode.next = node
    } else {
      result = node
    }

    if (p1) {
      p1 = p1.next
    }
    if (p2) {
      p2 = p2.next
    }

    prevNode = node
  }

  if (additionalDigit) {
    const node = new ListNode(additionalDigit)

    if (prevNode) {
      prevNode.next = node
    }
  }

  return result
}
</script>

<template>
  <div></div>
</template>
