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
    <main class="services_price">
      <section id="services" class="services">
        <div class="wrapper">
          <h2 class="title">Виды услуг и направления</h2>
          <div class="services__content">
            <div
              v-for="service in services"
              :key="service.id"
              :class="['services-card', service.class]"
              @click="togglePriceList(service.id)">
              <p class="services-text">{{ service.text }}</p>
            </div>
          </div>
        </div>
      </section>
      <transition name="slide">
        <section v-if="selectedService !== null" :key="selectedService" class="price">
          <div class="wrapper">
            <h2 class="title">{{ getPriceListTitle(selectedService) }}</h2>
            <div class="price__content">
              <div class="price__info">
                <div v-for="price in getPriceList(selectedService)" :key="price.id" class="price-item">
                  <p class="price-text">{{ price.text }}</p>
                  <div class="price-sum">
                    <div class="price-square"></div>
                    <div class="price-num">{{ price.amount }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </transition>
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
  export default {
    components: {
        Navbar,
        
    },
    data() {
      return {
        selectedService: null,
        services: [
          { id: 1, class: 'card-gym', text: 'Тренажерный зал' },
          { id: 2, class: 'card-group', text: 'Групповые занятия' },
          { id: 3, class: 'card-person', text: 'Персональные тренировки' },
        ],
        priceLists: {
          1: [
            { id: 1, text: 'Разовое посещение', amount: '250 рублей' },
            { id: 2, text: 'Безлимитная карта на 1 месяц (дневная)', amount: '1 200 рублей' },
            { id: 3, text: 'Безлимитная карта на 1 месяц (весь день)', amount: '1 700 рублей' },
          ],
          2: [
            { id: 4, text: 'Групповые занятия (месяц)', amount: '1 500 рублей' },
            { id: 5, text: 'Индивидуальное занятие', amount: '800 рублей' },
          ],
          3: [
            { id: 6, text: 'Персональная тренировка (1 час)', amount: '1 000 рублей' },
            { id: 7, text: 'Пакет тренировок (10 сеансов)', amount: '8 500 рублей' },
          ],
        },
      };
    },
    methods: {
      togglePriceList(serviceId) {
        if (this.selectedService === serviceId) {
          this.selectedService = null; // закрываем текущий прайс-лист
        } else {
          this.selectedService = serviceId; // открываем новый прайс-лист
        }
      },
      getPriceList(serviceId) {
        return this.priceLists[serviceId];
      },
      getPriceListTitle(serviceId) {
        const service = this.services.find(s => s.id === serviceId);
        return service ? `Прайс-лист для ${service.text}` : 'Прайс-лист';
      },
    },
  }
</script>
<style>
#app {
  display: flex;
  flex-direction: column;
  min-height: 100vh; /* Задаем минимальную высоту на весь видимый экран */
}

.service_price {
  flex: 1; /* Основной контент занимает все доступное пространство между шапкой и футером */
  padding: 20px; /* Пример отступов для основного контента */
  min-height: calc(100vh - 140px); /* Высота экрана минус высота шапки и футера */
}


.services-card {
  transition: transform 0.3s, box-shadow 0.3s;
  cursor: pointer;
}

.services-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}
.slide-enter-active {
  transition: all 0.8s ease-out;
}

.slide-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-enter-from,
.slide-leave-to {
  transform: translateX(20px);
  opacity: 0;
}
.price {
  overflow: hidden;
  max-height: 1000px; /* Достаточно большое значение для выезда */
}
</style>