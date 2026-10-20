/**
 * --------------------------------------------------------------------------
 * Bootstrap dom/data.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
declare const Data: {
    set(element: HTMLElement, key: string, instance: object): void;
    get<T = object>(element: HTMLElement, key: string): T | null;
    remove(element: HTMLElement, key: string): void;
};
export default Data;
