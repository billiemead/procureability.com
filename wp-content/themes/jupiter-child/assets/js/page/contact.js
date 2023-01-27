const circles = document.querySelectorAll(".circle");

let startTeamMembers = [];
let notAvailableTeamMembers = [];

circles.forEach(item => {
    const activeCircle = item.querySelector("[data-active=true]");

    notAvailableTeamMembers.push(activeCircle.dataset.image);
});

function randomFire() {
    let randomTime = lodash.random(0, 3) * 1000;
    setTimeout(() => {
        const randomCircle = lodash.sample(circles);

        let activeCircle = randomCircle.querySelector("[data-active=true]");
        let notActiveCircle = randomCircle.querySelector("[data-active=false]");

        let availableTeamMember = lodash.sample(
            teamOnlyImage.filter((x) => !notAvailableTeamMembers.includes(x))
        );

        notAvailableTeamMembers.push(availableTeamMember);

        notAvailableTeamMembers = lodash.filter(notAvailableTeamMembers, (member) => {
            return member !== activeCircle.dataset.image;
        });

        activeCircle.classList.remove('opacity-100');
        activeCircle.classList.add('opacity-0');

        notActiveCircle.classList.remove('opacity-0');
        notActiveCircle.classList.add('opacity-100');

        activeCircle.dataset.active = false;
        notActiveCircle.dataset.active = true;

        notActiveCircle.style.backgroundImage = "url(" + availableTeamMember + ")";
        notActiveCircle.dataset.image = availableTeamMember;

        randomFire();
    }, randomTime);
}

randomFire();