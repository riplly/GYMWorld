<template>
    <div v-if="visible" class="modal-overlay" @click="close">
      <div class="modal-content" @click.stop>
        <button class="modal-close" @click="close">&times;</button>
        <div class="modal-body">
          <slot></slot>
          <button class="modal-edit-button" @click="edit">Редактировать</button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
  props: {
    visible: {
      type: Boolean,
      required: true,
    },
  },
  methods: {
    close() {
      this.$emit('close');
    },
    edit() {
      // Действия при нажатии на кнопку "Редактировать"
      console.log('Редактировать');
    },
  },
};
  </script>
  
  <style scoped>
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }
  .modal-content {
    background: white;
    padding: 20px;
    border-radius: 8px;
    position: relative;
    max-width: 500px;
    width: 100%;
  }
  .modal-close {
    position: absolute;
    top: 10px;
    right: 10px;
    background: transparent;
    border: none;
    font-size: 24px;
    cursor: pointer;
  }
  .modal-edit-button {
  background-color: black;
  color: white;
  border: none;
  padding: 10px 20px;
  margin-top: 10px;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.3s ease; /* Плавный переход цвета */
}
.modal-edit-button:hover {
  background-color: #333; /* Цвет кнопки при наведении */
}

</style>