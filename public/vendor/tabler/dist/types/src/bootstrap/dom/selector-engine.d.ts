/**
 * --------------------------------------------------------------------------
 * Bootstrap dom/selector-engine.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
declare const SelectorEngine: {
    find(selector: string, element?: Element): HTMLElement[];
    findOne(selector: string, element?: Element): HTMLElement | null;
    children(element: HTMLElement, selector: string): HTMLElement[];
    parents(element: HTMLElement, selector: string): HTMLElement[];
    prev(element: HTMLElement, selector: string): HTMLElement[];
    next(element: HTMLElement, selector: string): HTMLElement[];
    focusableChildren(element: HTMLElement): HTMLElement[];
    getSelectorFromElement(element: HTMLElement): string | null;
    getElementFromSelector(element: HTMLElement): HTMLElement | null;
    getMultipleElementsFromSelector(element: HTMLElement): HTMLElement[];
};
export default SelectorEngine;
