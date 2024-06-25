<template>
    <div>
      <div class="timing-card" @click="openModal">
        <h3 class="timing-title">{{ day }}</h3>
        <p class="timing-text">
          <template v-for="(item, index) in schedule" :key="index">
            {{ item.time }} - {{ item.workout }}<br>
          </template>
        </p>
      </div>
      <modal :visible="modalVisible" @close="closeModal">
        <h3>{{ day }}</h3>
        <p>
          <template v-for="(item, index) in schedule" :key="index">
            {{ item.time }} - {{ item.workout }}<br>
          </template>
        </p>
      </modal>
    </div>
  </template>
  
  <script>
  import Modal from '/resources/js/components/modal.vue';
  
  export default {
    components: {
      Modal,
    },
    props: {
      day: {
        type: String,
        required: true,
      },
      schedule: {
        type: Array,
        required: true,
      },
    },
    data() {
      return {
        modalVisible: false,
      };
    },
    methods: {
      openModal() {
        this.modalVisible = true;
      },
      closeModal() {
        this.modalVisible = false;
      },
    },
  };
  </script>
  
  <style scoped>
  .timing-card {
  cursor: pointer;
  transition: transform 0.3s, box-shadow 0.3s;
  border: 1px solid #ddd; 
  padding: 16px; 
  border-radius: 8px; 
  
}

.timing-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
  </style>