/**
 * --------------------------------------------------------------------------
 * Bootstrap toast.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import type { ElementSelector, JQueryCollectionLike } from './types';
type ComponentConfig = {
    animation: boolean;
    autohide: boolean;
    delay: number;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
declare class Toast extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _timeout: ReturnType<typeof setTimeout> | null;
    _hasMouseInteraction: boolean;
    _hasKeyboardInteraction: boolean;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    show(): void;
    hide(): void;
    dispose(): void;
    isShown(): boolean;
    _maybeScheduleHide(): void;
    _onInteraction(event: Event, isInteracting: boolean): void;
    _setListeners(): void;
    _clearTimeout(): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Toast;
