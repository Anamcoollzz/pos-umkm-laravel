/**
 * --------------------------------------------------------------------------
 * Bootstrap util/swipe.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import Config from './config';
import type { ComponentConfig, ComponentConfigType } from '../types';
type SwipeConfig = {
    endCallback: (() => void) | null;
    leftCallback: (() => void) | null;
    rightCallback: (() => void) | null;
};
declare class Swipe extends Config {
    _config: SwipeConfig & ComponentConfig;
    _element: HTMLElement;
    _deltaX: number;
    _supportPointerEvents: boolean;
    constructor(element: HTMLElement, config?: ComponentConfig);
    static get Default(): ComponentConfig;
    static get DefaultType(): ComponentConfigType;
    static get NAME(): string;
    dispose(): void;
    _start(event: Event): void;
    _end(event: Event): void;
    _move(event: Event): void;
    _handleSwipe(): void;
    _initEvents(): void;
    _eventIsPointerPenTouch(event: PointerEvent): boolean;
    static isSupported(): boolean;
}
export default Swipe;
