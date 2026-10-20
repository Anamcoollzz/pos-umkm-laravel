/**
 * --------------------------------------------------------------------------
 * Bootstrap tab.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import type { JQueryCollectionLike } from './types';
declare class Tab extends BaseComponent {
    _parent: HTMLElement | null;
    constructor(element: HTMLElement | string);
    static get NAME(): string;
    show(): void;
    _activate(element: HTMLElement | null, relatedElem?: HTMLElement | null): void;
    _deactivate(element: HTMLElement | null, relatedElem?: HTMLElement | null): void;
    _keydown(event: KeyboardEvent): void;
    _getChildren(): HTMLElement[];
    _getActiveElem(): HTMLElement | null;
    _setInitialAttributes(parent: HTMLElement, children: HTMLElement[]): void;
    _setInitialAttributesOnChild(child: HTMLElement): void;
    _setInitialAttributesOnTargetPanel(child: HTMLElement): void;
    _toggleDropDown(element: HTMLElement, open: boolean): void;
    _setAttributeIfNotExists(element: HTMLElement, attribute: string, value: string): void;
    _elemIsActive(elem: HTMLElement): boolean;
    _getInnerElement(elem: HTMLElement): HTMLElement | null;
    _getOuterElement(elem: HTMLElement): HTMLElement;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Tab;
