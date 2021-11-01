'use strict';

class Article {
    #name = '';
    #barcode = 0;
    #price = 0;

    constructor(name, barcode, price) {
        this.#name = name;
        this.#barcode = barcode;
        this.#price = price;
    }

    new() {

        Validator
            .field(this.#name, 'nombre').isString().required()
            .field(this.#barcode, 'código de barras').isNumber().maxLength(55).required()
            .field(this.#price, 'precio').isNumber().maxLength(10).required()

        let valid = Validator.isValid();
        console.log(valid)
    }

}