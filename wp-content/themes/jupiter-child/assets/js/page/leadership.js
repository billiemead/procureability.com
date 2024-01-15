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

document.addEventListener("DOMContentLoaded", (event) => {
    const bubblesContainer = document.getElementById('bubbles');

    const bubbles = document.querySelectorAll(".bubble");

    let notAvailableTeamMembers = [];

    const images = window.teamOnlyImage.map(image => {
        const preloaderImg = document.createElement("img");
        preloaderImg.src = image;
        return preloaderImg
    })

    Promise.all(images.filter(img => !img.complete).map(img => new Promise(resolve => {
        img.onload = img.onerror = resolve;
    }))).then(() => {bubbles
        bubbles.forEach(item => {
            const activeBubble = item.querySelector("[data-active=true]");
            activeBubble.style.backgroundImage = 'url(' + activeBubble.dataset.image + ')';
            notAvailableTeamMembers.push(activeBubble.dataset.image);
        })
        bubblesContainer.classList.remove('opacity-0');
        bubblesContainer.classList.add('opacity-100');
        startAnimation();
    });

    function startAnimation() {
        let randomTime = lodash.random(1, 3) * 1000;
        setTimeout(() => {
            const randomBubble = lodash.sample(bubbles);

            let frontBubble = randomBubble.querySelector("[data-active=true]");
            let backBubble = randomBubble.querySelector("[data-active=false]");

            let availableTeamMember = lodash.sample(
                window.teamOnlyImage.filter((x) => !notAvailableTeamMembers.includes(x))
            );

            notAvailableTeamMembers.push(availableTeamMember);

            notAvailableTeamMembers = lodash.filter(notAvailableTeamMembers, (member) => {
                return member !== frontBubble.dataset.image;
            });

            frontBubble.classList.remove('opacity-100');
            frontBubble.classList.add('opacity-0');

            backBubble.classList.remove('opacity-0');
            backBubble.classList.add('opacity-100');

            frontBubble.dataset.active = false;
            backBubble.dataset.active = true;

            backBubble.style.backgroundImage = "url(" + availableTeamMember + ")";
            backBubble.dataset.image = availableTeamMember;

            startAnimation();
        }, randomTime);
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