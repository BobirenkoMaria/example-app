<script setup>
  import PersonalMenu from '../components/Personal/Menu/ChatMenu.vue'
  import PersonalContacts from '../components/Personal/Contact/ChatContacts.vue'
  import PersonalContent from '../components/Personal/Content/ChatContent.vue'
</script>
<template>
  <main class="flex">
    <PersonalMenu/>
    <PersonalContacts/>
    <PersonalContent/>
  </main>
</template>
<style scoped></style>
