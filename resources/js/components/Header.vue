<template>
    <nav class="navbar">
        <div class="container navbar-menu">
            <ul>
                <li><a href="">meni</a></li>
                <li><a href="">o nama</a></li>
                <li><a href="">o pivu</a></li>
                <li><a href="">naruci</a></li>
                <li><a href="">kontakt</a></li>
            </ul>
        </div>
    </nav>
</template>
<script>
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });
</script>
<style lang="scss" scoped>
@import "../../sass/_layout.scss";

.navbar {
    width: 100%;
    height: 80px;
    position: fixed;
    top: 0;
    margin: 0;
    color: white;
    display: flex;
    align-items: center;
    ul {
        display: flex;
        list-style: none;
        align-items: center;
        padding: 0;
        justify-content: flex-end;
        a {
            padding: 0 10px;
            color: white;
            text-decoration: none;
            text-transform: uppercase;
        }
    }
}
.navbar.scrolled {
    background-color: #000 !important;
    transition: background-color 100ms linear;
}  

</style>