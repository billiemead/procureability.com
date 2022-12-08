<button x-on:click="active = !active; mobileMenuActive = !mobileMenuActive"
        x-data="{active: false}" :class="active && 'active'"
        class="hamburger">
    <div></div>
    <div></div>
    <div></div>
</button>