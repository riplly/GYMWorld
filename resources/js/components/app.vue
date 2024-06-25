<template>
    <div>
    <router-view ></router-view>
    </div>
</template>
<script>
import Navbar from '/resources/js/components/navbar.vue';
export default {
  name: 'App',
  components: {
    Navbar
  }
};
</script>