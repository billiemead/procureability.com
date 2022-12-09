export const header = () => ({
    sticky: false,
    mobileMenuActive: false,
    mobileSearchActive: false,
    isTransparent: (options.is_transparent_header === 'true'), //window.options.is_transparent_header comes from wp_localize_script
    scrollHandler() {
        this.sticky = window.scrollY || document.body.scrollTop > 0 && window.innerWidth > 1239
    }
})

export const scrollToTop = () => ({
    active: false,
    init() {
        this.scrollCheck();
    },
    scrollCheck() {
        let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        let windowHeight = window.innerHeight;
        this.active = scrollTop > windowHeight ? true : false;
    },
    scrollToTop() {
        window.scrollTo({top: 0, behavior: 'smooth'})
    }
})