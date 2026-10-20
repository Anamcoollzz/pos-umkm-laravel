/**
 * --------------------------------------------------------------------------
 * Bootstrap nav-overflow.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import type { ElementSelector, JQueryCollectionLike } from './types';
type MenuPlacement = 'bottom-end' | 'bottom-start' | 'top-end' | 'top-start';
type ComponentConfig = {
    collapseBelow: number | string;
    iconPlacement: 'start' | 'end';
    menuPlacement: MenuPlacement;
    menuStrategy: 'absolute' | 'fixed';
    moreText: string | false;
    moreIcon: string;
    threshold: number;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
type RelocatedMenu = {
    menu: HTMLElement;
    parent: ParentNode;
    nextSibling: ChildNode | null;
};
/**
 * Class definition
 */
declare class NavOverflow extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _nav: HTMLElement;
    _items: HTMLElement[];
    _overflowItems: HTMLElement[];
    _lastOverflow: HTMLElement[];
    _overflowMenu: HTMLElement | null;
    _overflowToggle: HTMLElement | null;
    _ownsToggle: boolean;
    _ownsClass: boolean;
    _clones: Map<HTMLElement, HTMLElement>;
    _resizeObserver: ResizeObserver | null;
    _resizeHandler: (() => void) | null;
    _collapseBelow: number;
    _itemMenus: Map<HTMLElement, HTMLElement>;
    _relocatedMenus: Map<HTMLElement, RelocatedMenu>;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    update(): void;
    dispose(): void;
    _init(): void;
    _createOverflowMenu(): void;
    _resolveIcon(): string;
    _resolveCollapseBelow(): number;
    _setupResizeObserver(): void;
    _availableWidth(): number;
    _navGap(): number;
    _calculateOverflow(): void;
    _getItemsToOverflow(overflowItem: HTMLElement | null): HTMLElement[];
    _setHidden(items: HTMLElement[], overflowItem: HTMLElement | null, hideToggle?: boolean): void;
    _applyOverflow(items: HTMLElement[], overflowItem: HTMLElement | null): void;
    _moveToOverflow(items: HTMLElement[]): boolean;
    _relocateAsSubmenu(item: HTMLElement, link: HTMLElement, menu: HTMLElement): HTMLElement;
    _cloneAsProxy(link: HTMLElement): HTMLElement;
    _removeDataAttributes(element: HTMLElement): void;
    _isActive(link: HTMLElement): boolean;
    _syncStates(): void;
    _cloneAsMenuItem(link: HTMLElement, submenu?: boolean): HTMLElement;
    _findItemMenu(item: HTMLElement, link: HTMLElement): HTMLElement | null;
    _resetMenu(toggle: HTMLElement, menu: HTMLElement): void;
    _restoreRelocatedMenus(): void;
    _restoreItems(): void;
    _clearMenu(): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default NavOverflow;
