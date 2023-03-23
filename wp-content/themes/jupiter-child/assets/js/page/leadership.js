const params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
    set: (searchParams, prop, value) => {
        if (value !== null) {
            searchParams.set(prop, value);
            window.history.replaceState(null, null, `?${searchParams.toString()}`);
        } else {
            searchParams.delete(prop);
            window.history.replaceState(null, null, `${window.location.pathname}`);
        }

        return true;
    }
});


document.addEventListener('alpine:init', () => {
    Alpine.data('leadership', () => ({
        showModal: false,
        slider: null,
        active: null,
        URLContainsTeamHash() {
            const hash = window.location.hash;

            if (/^#team-\d+$/.test(hash)) {
                return parseInt(hash.split("-")[1]);
            }

            return false;
        },
        init() {

            this.active = this.URLContainsTeamHash();

            this.slider = new Swiper('#slider', {
                loop: false,
                slidesPerView: 1,
                navigation: {
                    prevEl: '#teamSliderPrev',
                    nextEl: '#teamSliderNext'
                },
                on: {
                    init: swiper => {
                        if (this.active && Number.isInteger(this.active)) {
                            swiper.slideTo(this.active, 0)
                            this.toggleModal();
                            this.$lockbody(this.$refs.modal);
                        }
                    },
                    slideChangeTransitionEnd: swiper => {
                        this.change(swiper.activeIndex);
                    }
                },
            });
        },
        toggleModal() {
            this.showModal = !this.showModal;
        },
        change(name) {
            this.active = name;
            window.location.hash = `#team-${name}`;
        },
        handleClick(event, id, url) {

            const viewportWidth = window.innerWidth;
            if (viewportWidth >= 1024) {
                this.change(id)
                this.slider.slideTo(id, 0);
                this.toggleModal();
                this.$lockbody(this.$refs.modal);
            } else {
                event.stopImmediatePropagation();
                window.location.href = url;
                return true;
            }
        },
        closeModel() {
            this.showModal = false
            this.$unlockbody(this.$refs.modal);
            this.active = null;
            const urlWithoutHash = window.location.href.split("#")[0];
            window.history.pushState("", document.title, urlWithoutHash);
        }
    }));
});