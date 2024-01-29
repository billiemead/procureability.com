export default (slider) => {
    return () => {
        Alpine.data("rtjCard", () => ({
            active: false,
            toggle() {
                this.active = !this.active;
            }
        }));

        Alpine.data("rtjCards", () => ({
            modal: false,
            toggleModal() {
                this.modal = !this.modal;

                document.body.style.overflow = this.modal ? 'hidden' : 'visible';
            },
            handleCardClick(index) {
                slider.slideTo(index);
                this.toggleModal()
            },
        }));
    }
}