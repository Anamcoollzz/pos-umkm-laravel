/**
 * --------------------------------------------------------------------------
 * Bootstrap offcanvas.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import Backdrop from './util/backdrop';
import FocusTrap from './util/focustrap';
import type { JQueryCollectionLike } from './types';
type ComponentConfig = {
    backdrop: boolean | 'static';
    keyboard: boolean;
    scroll: boolean;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 */
declare class Offcanvas extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _isShown: boolean;
    _backdrop: Backdrop;
    _focustrap: FocusTrap;
    constructor(element: HTMLElement | string, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    toggle(relatedTarget?: HTMLElement): void;
    show(relatedTarget?: HTMLElement): void;
    hide(): void;
    dispose(): void;
    _initializeBackDrop(): Backdrop;
    _initializeFocusTrap(): FocusTrap;
    _addEventListeners(): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Offcanvas;
