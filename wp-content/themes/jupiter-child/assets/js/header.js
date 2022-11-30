export default () => ({
    sticky: false,
    mobileMenuActive: false,
    mobileSearchActive: false,
    is_transparent: (options.is_transparent === 'true'), //window.options.is_transparent comes from wp_localize_script

    scrollHandler() {
        this.sticky = window.scrollY || document.body.scrollTop > 0 && window.innerWidth > 1239
    }
})