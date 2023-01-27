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

//

const select = document.getElementById('getValueFromHere');

window.addEventListener('message', event => {
    if (
        event.data.type === 'hsFormCallback' &&
        event.data.eventName === 'onFormReady' &&
        event.data.id === '09031dcc-1b2e-4ef4-84c2-3c0b7a664063'
    ) {

        const form = document.querySelector('.hs-form');
        const fieldToChange = form.querySelector('input[name=firstname]');

        select.addEventListener('change', function (event) {
            fieldToChange.value = event.target.value;
            fieldToChange.innerText = event.target.value;
        })
    }
});