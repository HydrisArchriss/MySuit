class FormController {
    constructor() {
        this.colorCheckbox = $('.colors-checkbox .custom-checkbox');

        $.each(this.colorCheckbox, (key, value)=>{
            const checkbox = $(value);
            console.warn(checkbox)
            const color = checkbox.find('input').data('color');
            checkbox.find('label:before').style.backgroundColor = color;
            checkbox.find('label:after').style.backgroundColor = color;
        });
    }
}

$(document).ready(() => new FormController());
