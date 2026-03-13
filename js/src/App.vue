<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <header>
    <div class="wrapper">
      <HelloWorld msg="You did it!" />

      <ul class="nav">
        <li><RouterLink to="/">Home</RouterLink></li>
        <li>
          <RouterLink to="/minimum-number-of-seconds-to-make-mountain-height-zero">
            3296. Minimum Number of Seconds to Make Mountain Height Zero
          </RouterLink>
        </li>
        <li>
          <RouterLink to="/palindrome-number"> 9. Palindrome Number </RouterLink>
        </li>
        <li>
          <RouterLink to="/minimum-number-of-flips-to-make-the-binary-string-alternating"
            >1888. Minimum Number of Flips to Make the Binary String Alternating</RouterLink
          >
        </li>
        <li>
          <RouterLink to="/minimum-deletions-to-make-string-balanced"
            >1653. Minimum Deletions to Make String Balanced</RouterLink
          >
        </li>
        <li><RouterLink to="/middle-of-the-linked-list">876. MiddleOfTheLinkedList</RouterLink></li>
        <li>
          <RouterLink to="/minimum-swaps-to-arrange-a-binary-grid"
            >1536. Minimum Swaps to Arrange a Binary Grid</RouterLink
          >
        </li>
      </ul>
    </div>
  </header>

  <RouterView />
</template>

<style scoped>
header {
  line-height: 1.5;
  max-height: 100vh;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

.nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
}

.nav a.router-link-exact-active {
  color: var(--color-text);
}

.nav a.router-link-exact-active:hover {
  background-color: transparent;
}

.nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
}

.nav a:first-of-type {
  border: 0;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }

  .nav {
    text-align: left;
    margin-left: -1rem;
    font-size: 1rem;

    padding: 1rem 0;
    margin-top: 1rem;
  }
}
</style>
