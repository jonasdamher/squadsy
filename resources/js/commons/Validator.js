'use strict';

class Validator {

    data = null;
    fieldName = '';

    valid = true;
    errors = [];

    static field(data, fieldName) {
        this.data = data.trim();
        this.fieldName = fieldName;

        return this;
    }

    static isString() {

        if (!/^[a-zA-Z-0-9 ]+$/.test(this.data)) {
            this.#messages('string');
        }

        return this;
    }

    static isNumber() {

        if (!/^[0-9]+$/.test(this.data)) {
            this.#messages('number');
        }
        return this;
    }

    static isBoolean() {

        if (!/^(0|1)+$/.test(this.data)) {
            this.#messages('boolean');
        }
        return this;
    }

    static required() {

        if (!this.data.length) {
            this.#messages('required');
        }
        return this;
    }

    static minLength(min) {
        if (this.data.length < min) {
            this.#messages('min', min);
        }
        return this;
    }

    static maxLength(max) {
        if (this.data.length > max) {
            this.#messages('max', max);
        }
        return this;
    }

    static isValid() {
        if (this.errors.length) {
            this.valid = false;
        }
        return {
            ...this.valid,
            ...this.errors
        }
    }

    static #messages(type, length = '') {
        let message = {
            string: `El campo ${this.fieldName} debe ser texto y números.`,
            number: `El campo ${this.fieldName} debe ser un número.`,
            boolean: `El campo ${this.fieldName} debe ser 0 o 1.`,
            required: `El campo ${this.fieldName} es obligatorio.`,
            max: `El campo ${this.fieldName} no puede ser mayor a ${length} caracteres.`,
            min: `El campo ${this.fieldName} no puede ser menor a ${length} caracteres.`
        };

        this.errors.push(message[type]);
    }
}