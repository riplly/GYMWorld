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
    <h1>Page not found</h1>
    
    <br>
    <router-link to="/" class="sign">back to life</router-link>
    </br>
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

</script>
<style>
.sign{
    color: black;
}
</style>