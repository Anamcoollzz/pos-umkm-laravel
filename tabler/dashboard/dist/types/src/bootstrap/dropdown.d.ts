/**
 * --------------------------------------------------------------------------
 * Bootstrap dropdown.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import * as Popper from '@popperjs/core';
import BaseComponent from './base-component';
import type { JQueryCollectionLike } from './types';
type PopperOffsetData = {
    placement: Popper.Placement;
    reference: Popper.Rect;
    popper: Popper.Rect;
};
type PopperOffsetFunction = (popperData: PopperOffsetData) => number[];
type PopperConfigFunction = (defaultConfig: Partial<Popper.Options>) => Partial<Popper.Options>;
type ComponentConfig = {
    autoClose: boolean | 'inside' | 'outside';
    boundary: Popper.Boundary;
    display: 'dynamic' | 'static';
    offset: number[] | string | ((popperData: PopperOffsetData, element: HTMLElement) => number[]);
    popperConfig: Partial<Popper.Options> | PopperConfigFunction | null;
    reference: 'toggle' | 'parent' | HTMLElement | Popper.VirtualElement;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
type RelatedTarget = {
    relatedTarget: HTMLElement;
    clickEvent?: Event;
};
declare class Dropdown extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _popper: Popper.Instance | null;
    _parent: HTMLElement;
    _menu: HTMLElement;
    _inNavbar: boolean;
    constructor(element: HTMLElement | string, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    toggle(): void;
    show(): void;
    hide(): void;
    dispose(): void;
    update(): void;
    _completeHide(relatedTarget: RelatedTarget): void;
    _getConfig(config?: ComponentConfigInput): ComponentConfig;
    _createPopper(): void;
    _isShown(): boolean;
    _getPlacement(): string;
    _detectNavbar(): boolean;
    _getOffset(): number[] | PopperOffsetFunction;
    _getPopperConfig(): Partial<Popper.Options>;
    _selectMenuItem({ key, target }: {
        key: string;
        target: EventTarget | null;
    }): void;
    static clearMenus(event: Event & {
        button?: number;
        key?: string;
        composedPath?: () => EventTarget[];
    }): void;
    static dataApiKeydownHandler(this: HTMLElement, event: KeyboardEvent): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Dropdown;
