import rtjCards from '../partials/rtj-cards';

const rtjSlider = new Swiper('#reasonsToJoin', {
    effect: "fade",
    fadeEffect: {crossFade: true},
    noSwiping: true,
    noSwipingClass: 'swiper-slide',
    navigation: {
        nextEl: "#reasonsToJoinSliderNavigationNext",
        prevEl: "#reasonsToJoinSliderNavigationPrev",
    },
    autoHeight: true,
    breakpoints: {
        1024: {
            autoHeight: false
        }
    }
})

document.addEventListener('alpine:init', rtjCards(rtjSlider));

document.addEventListener('alpine:init', () => {
    Alpine.data("run", () => ({
        rows: 3,
        start() {
            this.$nextTick(() => {
                const wrapper = this.$refs.wrapper;
                const maxspeed = 0.5;
                const minspeed = 0.25;
                let speed;
                let hovered = false;
                let width = wrapper.scrollWidth / this.rows;
                let start = 0;

                console.log(width)

                speed = maxspeed;

                wrapper.addEventListener("mouseover", function (event) {
                    speed = minspeed;
                    hovered = true;
                });

                wrapper.addEventListener("mouseout", function (event) {
                    speed = maxspeed;
                    hovered = false;
                });

                function step() {
                    wrapper.style.transform = "translateX(-" + start + "px)";

                    if (start < width) {
                        start += speed;
                    } else {
                        start = 0 + hovered ? minspeed : maxspeed;
                    }
                    window.requestAnimationFrame(step);
                }

                setTimeout(() => {
                    window.requestAnimationFrame(step);
                }, 500);
            });
        }
    }));
});

