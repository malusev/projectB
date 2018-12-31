<template>
    <nav class="navbar">
        <div class="container navbar-menu">
            <ul>
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
                <li><a href="">menu</a></li>
            </ul>
        </div>
    </nav>
</template>

<style lang="scss" scoped>
@import "../../sass/_layout.scss";

.navbar {
    width: 100%;
    height: 80px;
    background-color: black;
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
  

</style>