/**
 * --------------------------------------------------------------------------
 * Bootstrap carousel.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import type { JQueryCollectionLike } from './types';
import Swipe from './util/swipe';
type ComponentConfig = {
    interval: number | boolean;
    keyboard: boolean;
    pause: 'hover' | boolean;
    ride: boolean | 'carousel';
    touch: boolean;
    wrap: boolean;
    defaultInterval?: number | boolean;
};
type ComponentConfigInput = Partial<Omit<ComponentConfig, 'defaultInterval'>> & Record<string, unknown>;
declare class Carousel extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _interval: ReturnType<typeof setInterval> | null;
    _activeElement: HTMLElement | null;
    _isSliding: boolean;
    touchTimeout: ReturnType<typeof setTimeout> | null;
    _swipeHelper: Swipe | null;
    _indicatorsElement: HTMLElement | null;
    constructor(element: HTMLElement | string, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<Exclude<keyof ComponentConfig, 'defaultInterval'>, string>;
    static get NAME(): string;
    next(): void;
    nextWhenVisible(): void;
    prev(): void;
    pause(): void;
    cycle(): void;
    _maybeEnableCycle(): void;
    to(index: number): void;
    dispose(): void;
    _configAfterMerge(config: ComponentConfig): ComponentConfig;
    _addEventListeners(): void;
    _addTouchEventListeners(): void;
    _keydown(event: KeyboardEvent): void;
    _getItemIndex(element: HTMLElement): number;
    _setActiveIndicatorElement(index: number): void;
    _updateInterval(): void;
    _slide(order: string, element?: HTMLElement | null): void;
    _isAnimated(): boolean;
    _getActive(): HTMLElement | null;
    _getItems(): HTMLElement[];
    _clearInterval(): void;
    _directionToOrder(direction: string): string;
    _orderToDirection(order: string): string;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Carousel;
