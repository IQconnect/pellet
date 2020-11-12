const CONFIG = {
  TRIGGER: '.lang__selected',
  DROPDOWN: '.lang__dropdown',
  CLASS: 'lang__dropdown--active',
};

const lang = {
  init() {
    const { TRIGGER, DROPDOWN } = CONFIG;
    this.trigger = document.querySelector(TRIGGER);
    this.dropdown = document.querySelector(DROPDOWN);

    if(this.trigger) {
      this.addEvent();
    }
  },

  addEvent() {
    const { CLASS } = CONFIG;
    this.trigger.addEventListener('click', (event) => {
      event.preventDefault();
      this.dropdown.classList.toggle(CLASS);
    });
  },
};

export default lang;