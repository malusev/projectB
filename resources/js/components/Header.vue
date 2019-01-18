<template>
    <nav class="navbar">
        <div class="navbar-menu">
            <ul>
                <li><a href="#about" id='onama'>o nama</a></li>
                <li><a href="#beers">o pivu</a></li>
                <li><a href="">naruci</a></li>
                <li><a href="#contact">kontakt</a></li>
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
    justify-content: flex-end;
    z-index: 9999;
    ul {
        display: flex;
        list-style: none;
        align-items: center;
        padding: 0;
        margin-right: 80px;
        a {
            margin: 12px;
            padding: 14px 10px;
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            position: relative;
            &:before {
                content: " ";
                position: absolute;
                left: 0%;
                bottom: 10px;
                height: 1px;
                width: 0%;
                background-color: #868F3F;
                transition: width 0.5s ease-in-out;
            }
            &:after {
                content: " ";
                position: absolute;
                right: 0%;
                bottom: 10px;
                height: 1px;
                width: 0%;
                background-color: #868F3F;
                transition: width 0.5s ease-in-out;
            }                
            &:hover,&:focus{
                &:before{
                    width:50%
                }
                &:after{
                    width:50%
                }                
            }
        }
    }
}
.navbar.scrolled {
    background-color: #000 !important;
    transition: background-color 100ms linear;
}  

</style>