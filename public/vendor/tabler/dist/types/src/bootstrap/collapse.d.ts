/**
 * --------------------------------------------------------------------------
 * Bootstrap collapse.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import type { ElementSelector, JQueryCollectionLike } from './types';
type ComponentConfig = {
    parent: HTMLElement | null;
    toggle: boolean;
};
type ComponentConfigInput = Partial<Omit<ComponentConfig, 'parent'>> & {
    parent?: HTMLElement | string | null;
} & Record<string, unknown>;
declare const WIDTH = "width";
declare const HEIGHT = "height";
declare class Collapse extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _isTransitioning: boolean;
    _triggerArray: HTMLElement[];
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    toggle(): void;
    show(): void;
    hide(): void;
    _isShown(element?: HTMLElement): boolean;
    _configAfterMerge(config: ComponentConfig): ComponentConfig;
    _getDimension(): typeof WIDTH | typeof HEIGHT;
    _initializeChildren(): void;
    _getFirstLevelChildren(selector: string): HTMLElement[];
    _addAriaAndCollapsedClass(triggerArray: HTMLElement[], isOpen: boolean): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Collapse;
