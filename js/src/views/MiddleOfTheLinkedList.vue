<script setup lang="ts">
/**
 * Definition for singly-linked list.
 * class ListNode {
 *     val: number
 *     next: ListNode | null
 *     constructor(val?: number, next?: ListNode | null) {
 *         this.val = (val===undefined ? 0 : val)
 *         this.next = (next===undefined ? null : next)
 *     }
 * }
 */

class ListNode {
  val: number
  next: ListNode | null

  constructor(val?: number, next?: ListNode | null) {
      this.val = (val===undefined ? 0 : val)
      this.next = (next===undefined ? null : next)
  }
}

const node3 = new ListNode(3)
const node2 = new ListNode(2, node3)
const node1 = new ListNode(1, node2)

console.log(middleNode(node1)?.val)

function middleNode(head: ListNode | null): ListNode | null {
  if (head === null) {
    return null
  }

  let size = 0

  let current: ListNode | null = head
  while (current !== null) {
    size++
    current = current.next
  }

  let middleIndex: number

  if (size % 2 === 0) {
    middleIndex = size / 2
  } else {
    middleIndex = Math.floor(size / 2)
  }

  let index = 0
  current = head
  while (current !== null && index !== middleIndex) {
    index++
    current = current.next
  }

  return current
};
</script>

<template>
  <div></div>
</template>
