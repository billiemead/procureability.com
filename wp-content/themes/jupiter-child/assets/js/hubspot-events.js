document.addEventListener("DOMContentLoaded", event => {

    window.addEventListener('message', event => {
        if(event.data.type === 'hsFormCallback' && event.data.eventName === 'onBeforeFormSubmit') {
            const form = document.querySelector('.hsForm_' + event.data.id);

            const formLoaderWrapper = document.createElement("div");
            formLoaderWrapper.className = 'hubspot-form-loader__wrapper';

            const loader = document.createElement("span");
            loader.className = 'loader';

            formLoaderWrapper.append(loader);
            form.append(formLoaderWrapper);
        }
    });

    window.addEventListener('message', event => {
        if(event.data.type === 'hsFormCallback' && event.data.eventName === 'onFormSubmitted') {
            const form = document.querySelector('.hsForm_' + event.data.id);

            const loader = form.querySelector('.hubspot-form-loader__wrapper');
            loader.remove();
        }
    });

});