const CONFIG = {
    ELEM: '[header]',
    CLASS: '-hide',
}

const { ELEM, CLASS } = CONFIG;

const header = {
    init() {
        this.elem = document.querySelector(ELEM);
        this.class = CLASS;

        this.addEvents();
    },

    addEvents() {
        window.addEventListener('scroll', () => {
            console.log('scroll');
            this.s = window.scrollY;
            console.log(this.s)

            if (this.s > this.ls) {
                this.elem.classList.add(CLASS);
                this.elem.classList.add('header--scroll');
            }

            else {
                if (this.s == 0) {
                    this.elem.classList.remove('header--scroll');
                }

                this.elem.classList.remove(CLASS);
            }

            this.ls = this.s;
        })
    },
}

export default header;