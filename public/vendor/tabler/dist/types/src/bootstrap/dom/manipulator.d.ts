/**
 * --------------------------------------------------------------------------
 * Bootstrap dom/manipulator.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
type DataValue = string | number | boolean | null | Record<string, unknown>;
declare const Manipulator: {
    setDataAttribute(element: HTMLElement, key: string, value: string): void;
    removeDataAttribute(element: HTMLElement, key: string): void;
    getDataAttributes(element: HTMLElement | null): Record<string, DataValue>;
    getDataAttribute(element: HTMLElement, key: string): DataValue;
};
export default Manipulator;
