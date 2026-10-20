/**
 * --------------------------------------------------------------------------
 * Bootstrap util/scrollbar.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
declare class ScrollBarHelper {
    _element: HTMLElement;
    constructor();
    getWidth(): number;
    hide(): void;
    reset(): void;
    isOverflowing(): boolean;
    _disableOverFlow(): void;
    _setElementAttributes(selector: string | HTMLElement, styleProperty: string, callback: (value: number) => number): void;
    _saveInitialAttribute(element: HTMLElement, styleProperty: string): void;
    _resetElementAttributes(selector: string | HTMLElement, styleProperty: string): void;
    _applyManipulationCallback(selector: string | HTMLElement, callBack: (element: HTMLElement) => void): void;
}
export default ScrollBarHelper;
