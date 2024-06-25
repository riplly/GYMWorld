<template>
<header class="header">

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

<div class="wrapper" v-if="isMounted">
    <div class="header-banner">
        <div class="banner-info">
            <h1 class="banner-title">Получите тело своей мечты, занимаясь в нашем клубе по удобной программе</h1>
            <p class="banner-text">Приглашаем в наш фитнес-клуб, где каждый желающий может привести себя в спортивную форму самостоятельно или с помощью наших высококвалифицированных тренеров</p>
            <router-link class="banner-button" to="/services">Оформить абонемент</router-link>
        </div>
        <img :src="pic1" alt="" class="banner-img">
    </div>
</div>

</header>
<main>
    
        <section class="company" v-if="isMounted">
            <div class="wrapper">
                <div class="company__content">

                    <div class="about">
                        <div class="about-info">
                            <h2 class="title">О клубе и наша команда</h2>
                            <p class="about-text">
                                <span class="about-bold">GYMWorld - Сеть фитнес-центров в Москве и МО.</span><br><br>
                                Наш фитнес-клуб оснащен самым современным оборудованием, три зала групповых занятий, бассейн, просторные раздевалки и душевые комнаты, зал игровых видов спорта, сайкл-студия и многое другое.<br><br>
                                GYMWorld поможет привести себя в отличную спортивную форму. Чтобы познакомиться с фитнес-клубом, первый раз вы можете прийти на тренировку в наш зал абсолютно бесплатно.<br><br>
                                У нас работают только опытные тренеры и инструкторы, которые всегда подскажут и помогут вам. Вы сможете и накачать мышцы и научиться танцевать и ходить на фитнес. А также с помощью нашего фитнес-бара вы сможете восполнить баланс сил после тренировки вы сможете в нашем фитнес-баре, выпив порцию протеинового коктейля.<br><br>
                            </p>
                            <a class="about-link" href="#">Ознакомьтесь с правилами посещения клуба.</a>
                        </div>
                        <img class="about-img" :src="pic7" alt="">
                    </div>
        
                    <div class="swiper-container ">
                        <swiper :navigation="true" :pagination="{ type: 'fraction' }" >
                            <swiper-slide v-for="(slide, index) in slides" :key="index" class="swiper-slide slide-team">
                                <img class="slide-img-team" :src="slide.src" >
                                <h3 class="team-title">Фамилия<br>Имя Тренера</h3>
                                <p class="team-text">
                                Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.<br><br>
                                Равным образом рамки и место обучения кадров представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач.
                                </p>
                            </swiper-slide>
                        </swiper>
                    </div>
                            
                            
                            
                </div>
            </div>
        
        </section>
    
 </main>
 
        <section id="contacts" class="contacts" v-if="isMounted">
            <div class="wrapper">
                <div class="contacts__content">
                    <h2 class="title">Контакты</h2>
                    <p class="contacts-text"><span class="contacts-title">Адрес: </span>Житная ул., 14, стр. 2, Москва</p>
                    <p class="contacts-text"><span class="contacts-title">Часы работы: </span>ежедневно (без выходных) с 7:00 до 23:00</p>
                    <p class="contacts-text"><span class="contacts-title">Телефон: </span>8 (3843) 000-333 </p>
                    <p class="contacts-text"><span class="contacts-title">E-mail: </span> GYMWorld@gmail.com</p>
                    <div class="contacts-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.5534645158937!2d37.61359607741587!3d55.731511973076316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b050a00d2e1%3A0x2c8cf731e94a97db!2z0JbQuNGC0L3QsNGPINGD0LsuLCAxNCDRgdGC0YDQvtC10L3QuNC1IDIsINCc0L7RgdC60LLQsCwgMTE5MDQ5!5e0!3m2!1sru!2sru!4v1717482660584!5m2!1sru!2sru" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
        <div class="wrapper">
            <div class="menu__content">
                <a href="index.html" class="logo">
                    <p class="logo-title">GYMWorld</p>
                    <p class="logo-text">Сеть фитнес-центров в Москве и МО</p>
                </a>
    
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-element"><a class="nav-link" href="services.html">Услуги</a></li>
                        <li class="nav-element"><a class="nav-link" href="timing.html">Расписание</a></li>
                        <li class="nav-element"><a class="nav-link" href="#team">Команда</a></li>
                        <li class="nav-element"><a class="nav-link" href="gallery.html">Фото и видео</a></li>
                        <li class="nav-element"><a class="nav-link" href="#contacts">Контакты</a></li>
                        <li class="nav-element"><a class="nav-link" href="auth.html">Войти</a></li>
                    </ul>
                </nav>
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
import { ref, onMounted } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/swiper-bundle.css';


import pic1 from '/resources/img/pic-1.jpg';
import pic7 from '/resources/img/pic-7.jpg';
import pic6 from '/resources/img/pic-6.jpg';
import pic10 from '/resources/img/pic-10.jpg';
import pic11 from '/resources/img/pic-11.jpg';
import pic12 from '/resources/img/pic-12.jpg';
import pic14 from '/resources/img/pic-14.jpg';

export default {
    name: 'App',
    components: {
        Navbar,
        Swiper,
        SwiperSlide
        },
    setup(){
    const isMounted = ref(false);
    const slides = ref([
      { src: pic6, alt: '' },
      { src: pic10, alt: '' },
      { src: pic11, alt: '' },
      { src: pic12, alt: '' },
      { src: pic14, alt: '' }
    ]);
        onMounted(() => {
            isMounted.value = true;
        });
   
    


    return {
      pic1,
      pic7,
      slides,
      isMounted
    };
  }
};
</script>



