/**
 * --------------------------------------------------------------------------
 * Bootstrap modal.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import Backdrop from './util/backdrop';
import FocusTrap from './util/focustrap';
import ScrollBarHelper from './util/scrollbar';
import type { JQueryCollectionLike } from './types';
type ComponentConfig = {
    backdrop: boolean | 'static';
    focus: boolean;
    keyboard: boolean;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 */
declare class Modal extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _dialog: HTMLElement | null;
    _backdrop: Backdrop;
    _focustrap: FocusTrap;
    _isShown: boolean;
    _isTransitioning: boolean;
    _scrollBar: ScrollBarHelper;
    constructor(element: HTMLElement | string, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    toggle(relatedTarget?: HTMLElement): void;
    show(relatedTarget?: HTMLElement): void;
    hide(): void;
    dispose(): void;
    handleUpdate(): void;
    _initializeBackDrop(): Backdrop;
    _initializeFocusTrap(): FocusTrap;
    _showElement(relatedTarget?: HTMLElement): void;
    _addEventListeners(): void;
    _hideModal(): void;
    _isAnimated(): boolean;
    _triggerBackdropTransition(): void;
    _adjustDialog(): void;
    _resetAdjustments(): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown, relatedTarget?: unknown): unknown;
}
export default Modal;
