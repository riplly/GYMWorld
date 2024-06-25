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
      <section id="timing" class="timing">
        <div class="wrapper">
          <h2 class="title title_white">Расписание занятий</h2>
          <div class="timing__content">
            <TimingCard day="Понедельник" :schedule="schedule.monday" />
            <TimingCard day="Вторник" :schedule="schedule.tuesday" />
            <TimingCard day="Среда" :schedule="schedule.wednesday" />
            <TimingCard day="Четверг" :schedule="schedule.thursday" />
            <TimingCard day="Пятница" :schedule="schedule.friday" />
            <TimingCard day="Суббота" :schedule="schedule.saturday" />
            <TimingCard day="Воскресенье" :schedule="schedule.sunday" />
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
  import Navbar from '@/components/navbar.vue'
  import TimingCard from '/resources/js/components/timingcard.vue';
  
  export default {
    components: {
        Navbar,
        TimingCard,
    },
    data() {
    return {
      schedule: {
        monday: [
          { time: '08:00', workout: 'круговая (Юлия)' },
          { time: '13:00', workout: 'ягодицы+растяжка (Виктория)' },
          { time: '17:00', workout: 'идеальный торс (Максим)' },
          { time: '18:00', workout: 'базовая (Екатерина)' },
          { time: '20:00', workout: '#супертело (Максим)' },
        ],
        tuesday: [
          { time: '08:00', workout: 'круговая (Юлия)' },
          { time: '13:00', workout: 'ягодицы+растяжка (Виктория)' },
          { time: '17:00', workout: 'идеальный торс (Максим)' },
          { time: '18:00', workout: 'базовая (Екатерина)' },
          { time: '20:00', workout: '#супертело (Максим)' },
        ],
        wednesday: [
          { time: '08:00', workout: 'круговая (Юлия)' },
          { time: '13:00', workout: 'ягодицы+растяжка (Виктория)' },
          { time: '17:00', workout: 'идеальный торс (Максим)' },
          { time: '18:00', workout: 'базовая (Екатерина)' },
          { time: '20:00', workout: '#супертело (Максим)' },
        ],
        thursday: [
          { time: '08:00', workout: 'круговая (Юлия)' },
          { time: '13:00', workout: 'ягодицы+растяжка (Виктория)' },
          { time: '17:00', workout: 'идеальный торс (Максим)' },
          { time: '18:00', workout: 'базовая (Екатерина)' },
          { time: '20:00', workout: '#супертело (Максим)' },
        ],
        friday: [
          { time: '08:00', workout: 'круговая (Юлия)' },
          { time: '13:00', workout: 'ягодицы+растяжка (Виктория)' },
          { time: '17:00', workout: 'идеальный торс (Максим)' },
          { time: '18:00', workout: 'базовая (Екатерина)' },
          { time: '20:00', workout: '#супертело (Максим)' },
        ],
        saturday: [
          { time: '08:00', workout: 'круговая (Юлия)' },
          { time: '13:00', workout: 'ягодицы+растяжка (Виктория)' },
          { time: '17:00', workout: 'идеальный торс (Максим)' },
          { time: '18:00', workout: 'базовая (Екатерина)' },
          { time: '20:00', workout: '#супертело (Максим)' },
        ],
        sunday: [
          { time: '08:00', workout: 'круговая (Юлия)' },
          { time: '13:00', workout: 'ягодицы+растяжка (Виктория)' },
          { time: '17:00', workout: 'идеальный торс (Максим)' },
          { time: '18:00', workout: 'базовая (Екатерина)' },
          { time: '20:00', workout: '#супертело (Максим)' },
        ],
      },
    };
  },
};
    
  
  </script>
  