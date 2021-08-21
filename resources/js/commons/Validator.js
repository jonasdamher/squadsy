'use strict';

class Validator {

    valid = true;
    errors = [];

    static isString(data, fieldName) {

        if (!/^[a-zA-Z-0-9 ]+$/.test(data.trim())) {
            this.#messages('string', fieldName);
        }

        return this;
    }

    static isNumber(data, fieldName) {

        if (!/^[0-9]+$/.test(data.trim())) {
            this.#messages('number', fieldName);
        }
        return this;
    }

    static isBoolean(data, fieldName) {

        if (!/^(0|1)+$/.test(data.trim())) {
            this.#messages('boolean', fieldName);
        }
        return this;
    }

    static required(data, fieldName) {

        if (!data.trim().length) {
            this.#messages('required', fieldName);
        }
        return this;
    }

    static minLength(data, min, fieldName) {
        if (data.trim().length < min) {
            this.#messages('min', fieldName, min);
        }
        return this;
    }

    static maxLength(data, max, fieldName) {
        if (data.trim().length > max) {
            this.#messages('max', fieldName, max);
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

    static #messages(type, name, length = '') {
        let message = [
            'string' = `El campo ${name} debe ser texto y números.`,
            'number' = `El campo ${name} debe ser un número.`,
            'boolean' = `El campo ${name} debe ser 0 o 1.`,
            'required' = `El campo ${name} es obligatorio.`,
            'max' = `El campo ${name} no puede ser mayor a ${length} caracteres.`,
            'min' = `El campo ${name} no puede ser menor a ${length} caracteres.`
        ];

        this.errors.push(message[type]);
    }
}