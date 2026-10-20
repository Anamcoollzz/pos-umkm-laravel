/**
 * --------------------------------------------------------------------------
 * Bootstrap util/backdrop.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import Config from './config';
import type { ComponentConfig, ComponentConfigType } from '../types';
type BackdropConfig = {
    className: string;
    clickCallback: (() => void) | null;
    isAnimated: boolean;
    isVisible: boolean;
    rootElement: HTMLElement | string;
};
declare class Backdrop extends Config {
    _config: BackdropConfig & ComponentConfig;
    _isAppended: boolean;
    _element: HTMLElement | null;
    constructor(config?: ComponentConfig);
    static get Default(): ComponentConfig;
    static get DefaultType(): ComponentConfigType;
    static get NAME(): string;
    show(callback?: () => void): void;
    hide(callback?: () => void): void;
    dispose(): void;
    _getElement(): HTMLElement;
    _configAfterMerge(config: ComponentConfig): ComponentConfig;
    _append(): void;
    _emulateAnimation(callback: () => void): void;
}
export default Backdrop;
