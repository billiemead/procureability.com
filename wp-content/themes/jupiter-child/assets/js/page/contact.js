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
}))).then(() => {
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

//

window.addEventListener('message', event => {
    if (
        event.data.type === 'hsFormCallback' &&
        event.data.eventName === 'onFormReady' &&
        event.data.id === '09031dcc-1b2e-4ef4-84c2-3c0b7a664063'
    ) {

        const form = document.querySelector('.hs-form');
        const fieldToChange = form.querySelector('input[name=firstname]');

        window.addEventListener('hubspot-service', function (event) {

            fieldToChange.value = event.detail.message;
            fieldToChange.innerHTML = event.detail.message;
        })
    }
});

//

// let map;
//
// function initMap() {
//     map = new google.maps.Map(document.getElementById("map"), {
//         center: new google.maps.LatLng(-33.91722, 151.23064),
//         zoom: 16,
//     });
//
//     const iconBase =
//         "https://developers.google.com/maps/documentation/javascript/examples/full/images/";
//     const icons = {
//         parking: {
//             icon: iconBase + "parking_lot_maps.png",
//         },
//     };
//     const features = [
//         {
//             position: new google.maps.LatLng(-33.91721, 151.2263),
//             type: "info",
//         }
//     ];
//
//     // Create markers.
//     for (let i = 0; i < features.length; i++) {
//         const marker = new google.maps.Marker({
//             position: features[i].position,
//             icon: icons[features[i].type].icon,
//             map: map,
//         });
//     }
// }
//
// window.initMap = initMap;