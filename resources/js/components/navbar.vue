<template>
    <div class="header-menu">
      <div class="wrapper">
        <div class="menu__content">
          <router-link to="/" class="logo">
            <p class="logo-title">GYMWorld</p>
            <p class="logo-text">Сеть фитнес-центров в Москве и МО</p>
          </router-link>
  
          <nav class="nav">
            <ul class="nav-list">
              <li class="nav-element"><router-link to="/services" class="nav-link">Услуги</router-link></li>
              <li class="nav-element"><router-link to="/schedule" class="nav-link">Расписание</router-link></li>
              <li class="nav-element"><router-link to="/" class="nav-link">Команда</router-link></li>
              <li class="nav-element"><router-link to="/gallery" class="nav-link">Фото и видео</router-link></li>
              <li class="nav-element"><router-link to="/" class="nav-link">Контакты</router-link></li>
              <li class="nav-element"><router-link to="/auth" class="nav-link">Войти</router-link></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
  name: 'navbar'
}
</script>