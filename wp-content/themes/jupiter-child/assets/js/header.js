export default () => ({
    sticky: false,
    mobileMenuActive: false,
    mobileSearchActive: false,
    isTransparent: (options.is_transparent_header === 'true'), //window.options.is_transparent_header comes from wp_localize_script

    scrollHandler() {
        this.sticky = window.scrollY || document.body.scrollTop > 0 && window.innerWidth > 1239
    }
})