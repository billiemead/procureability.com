<button x-on:click="document.querySelector('.mk-fullscreen-search-overlay').classList.toggle('mk-fullscreen-search-overlay-show'); setTimeout(function() {document.getElementById('mk-fullscreen-search-input').focus()}, 500)"
        class="bg-transparent p-0 border-0 text-white opacity-100 hover:opacity-[.75] duration-[.25s] ease-in-out" :class="{'text-black': sticky || !is_transparent}">
    <svg class="block" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M23.5308 24.5815L23.521 24.5712L18.0025 19.1261L17.322 19.5926C15.7788 20.6505 14.0683 21.1779 12.1629 21.1779C10.927 21.1779 9.75101 20.9413 8.62686 20.4682C7.48859 19.9892 6.52159 19.3484 5.71424 18.5495C4.90697 17.7506 4.26052 16.7948 3.77752 15.6709C3.30065 14.5613 3.0625 13.4014 3.0625 12.1827C3.0625 10.964 3.30065 9.80406 3.77752 8.69446C4.26052 7.57059 4.90697 6.61479 5.71424 5.81593C6.52159 5.01698 7.48859 4.37622 8.62686 3.89717C9.75101 3.42406 10.927 3.1875 12.1629 3.1875C13.3988 3.1875 14.5748 3.42406 15.699 3.89717C16.8372 4.37622 17.8042 5.01698 18.6116 5.81593C19.4188 6.61479 20.0653 7.57059 20.5483 8.69446C21.0252 9.80406 21.2633 10.964 21.2633 12.1827C21.2633 14.0614 20.7325 15.7492 19.665 17.2741L19.1813 17.9651L24.7019 23.4282C24.8644 23.589 24.9362 23.7583 24.9362 23.9952C24.9362 24.209 24.8695 24.3822 24.6876 24.5622C24.5055 24.7424 24.3256 24.8125 24.0997 24.8125C23.8446 24.8125 23.6788 24.736 23.5308 24.5815ZM19.5904 12.1827C19.5904 10.1615 18.8525 8.40858 17.4072 6.97832C15.9622 5.54838 14.1958 4.82212 12.1629 4.82212C10.13 4.82212 8.36362 5.54838 6.91863 6.97832C5.47331 8.40858 4.73537 10.1615 4.73537 12.1827C4.73537 14.2039 5.47331 15.9568 6.91863 17.3871C8.36362 18.817 10.13 19.5433 12.1629 19.5433C14.1958 19.5433 15.9622 18.817 17.4072 17.3871C18.8525 15.9568 19.5904 14.2039 19.5904 12.1827Z"
              fill="currentColor"/>
    </svg>
</button>
