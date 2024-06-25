<template>
    <header class="header-child">

<nav class="burger-menu">
    <a href="index.html" class="logo logo-burger">
            <p class="logo-title">GYMWorld</p>
            <p class="logo-text">Сеть фитнес-центров в Москве и МО</p>
    </a>
    
    <ul class="menu-bur">
        <li><a class="menuItem" href="services.html">Услуги</a></li>
        <li><a class="menuItem" href="timing.html">Расписание</a></li>
        <li><a class="menuItem" href="#team">Команда</a></li>
        <li><a class="menuItem" href="gallery.html">Фото и видео</a></li>
        <li><a class="menuItem" href="#contacts">Контакты</a></li>
        <li><a class="menuItem" href="auth.html">Войти</a></li>
    </ul>
    
    <button class="hamburgerBtn">
        <div class="menuIcon material-icons">
            <div class="menu-elem"></div>
            <div class="menu-elem"></div>
            <div class="menu-elem"></div>
        </div>
        <div class="closeIcon material-icons">
            <div class="close-icon-elem close-icon-elem__1"></div>
            <div class="close-icon-elem close-icon-elem__2"></div>
        </div>
    </button>
</nav>
<Navbar/>
    </header>
    <main>
    <section class="auth">
      <div class="wrapper">
        <div class="registration">
          <div class="registration-elem">
            <h2>Регистрация</h2>
            <form @submit.prevent="validateAndRegister">
              <p>
                <label for="name">Введите ваше имя:</label><br>
                <input v-model="registration.name" placeholder="Ваше имя" :class="{ 'invalid': !isNameValid }">
                <span v-if="!isNameValid" class="error-message">Введите ваше имя</span>
              </p>
              <p>
                <label for="lastname">Введите вашу фамилию:</label><br>
                <input v-model="registration.lastname" placeholder="Ваша фамилия" :class="{ 'invalid': !isLastnameValid }">
                <span v-if="!isLastnameValid" class="error-message">Введите вашу фамилию</span>
              </p>
              <p>
                <label for="email">Введите ваш email:</label><br>
                <input v-model="registration.email" placeholder="Ваш email" :class="{ 'invalid': !isEmailValid }">
                <span v-if="!isEmailValid" class="error-message">Введите корректный email</span>
              </p>
              <p>
                <label for="password">Введите ваш пароль:</label><br>
                <input type="password" v-model="registration.password" placeholder="Ваш пароль" :class="{ 'invalid': !isPasswordValid }">
                <span v-if="!isPasswordValid" class="error-message">Пароль должен содержать минимум 8 символов</span>
              </p>
              <p>
                <label for="confirmPassword">Повторите ваш пароль:</label><br>
                <input type="password" v-model="registration.confirmPassword" placeholder="Повторите пароль" :class="{ 'invalid': !isPasswordMatch }">
                <span v-if="!isPasswordMatch" class="error-message">Пароли не совпадают</span>
              </p>
              <button type="submit">Регистрация</button>
            </form>
          </div>
          <div class="registration-elem">
            <h2>Авторизация</h2>
            <form @submit.prevent="validateAndLogin">
              <p>
                <label for="email">Введите ваш email:</label><br>
                <input v-model="login.email" placeholder="Ваш email" :class="{ 'invalid': !isLoginEmailValid }">
                <span v-if="!isLoginEmailValid" class="error-message">Введите корректный email</span>
              </p>
              <p>
                <label for="password">Введите ваш пароль:</label><br>
                <input type="password" v-model="login.password" placeholder="Ваш пароль" :class="{ 'invalid': !isLoginPasswordValid }">
                <span v-if="!isLoginPasswordValid" class="error-message">Введите ваш пароль</span>
              </p>
              <button type="submit">Авторизация</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="wrapper">
      <div class="menu__content">
        <a href="index.html" class="logo">
          <p class="logo-title">GYMWorld</p>
          <p class="logo-text">Сеть фитнес-центров в Москве и МО</p>
        </a>
      </div>
      <div class="footer-links">
        <a class="footer-link" href="#">Политика конфеденциальности</a>
        <a class="footer-link" href="#">Правила пользования сайтом</a>
        <a class="footer-link" href="#">Договор-оферта</a>
      </div>
    </div>
  </footer>
</template>

<script>
import { ref } from 'vue';
import Navbar from '@/components/navbar.vue';

export default {
  components: {
    Navbar
  },
  setup() {
    const registration = ref({
      name: '',
      lastname: '',
      email: '',
      password: '',
      confirmPassword: ''
    });

    const login = ref({
      email: '',
      password: ''
    });

    // Валидационные флаги для регистрации
    const isNameValid = ref(true);
    const isLastnameValid = ref(true);
    const isEmailValid = ref(true);
    const isPasswordValid = ref(true);
    const isPasswordMatch = ref(true);

    // Валидационные флаги для авторизации
    const isLoginEmailValid = ref(true);
    const isLoginPasswordValid = ref(true);

    // Функция валидации для email
    const validateEmail = (email) => {
      const re = /\S+@\S+\.\S+/;
      return re.test(email);
    };

    // Валидация при регистрации
    const validateAndRegister = () => {
      isNameValid.value = !!registration.value.name;
      isLastnameValid.value = !!registration.value.lastname;
      isEmailValid.value = validateEmail(registration.value.email);
      isPasswordValid.value = registration.value.password.length >= 8;
      isPasswordMatch.value = registration.value.password === registration.value.confirmPassword;

      if (isNameValid.value && isLastnameValid.value && isEmailValid.value && isPasswordValid.value && isPasswordMatch.value) {
        console.log("Регистрация:", registration.value);
        // Здесь может быть логика отправки данных на сервер или другие действия
      } else {
        console.log("Форма заполнена некорректно");
      }
    };

    // Валидация при авторизации
    const validateAndLogin = () => {
      isLoginEmailValid.value = validateEmail(login.value.email);
      isLoginPasswordValid.value = !!login.value.password;

      if (isLoginEmailValid.value && isLoginPasswordValid.value) {
        console.log("Авторизация:", login.value);
        // Здесь может быть логика отправки данных на сервер или другие действия
      } else {
        console.log("Форма заполнена некорректно");
      }
    };

    return {
      registration,
      login,
      isNameValid,
      isLastnameValid,
      isEmailValid,
      isPasswordValid,
      isPasswordMatch,
      isLoginEmailValid,
      isLoginPasswordValid,
      validateAndRegister,
      validateAndLogin
    };
  }
};
</script>