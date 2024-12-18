export class Page
{
    #parameters;

    constructor(parameters)
    {
        this.#parameters = parameters;
        this.#parameters.lang = this.#parameters.lang || {};
        this.#parameters.settings = this.#parameters.settings || {};
    }

    lang(name, defaultVal = ``)
    {
        return this.#parameters.lang[name] || defaultVal;
    }

    setting(name, defaultVal = ``)
    {
        return this.#parameters.settings[name] || defaultVal;
    }
}
