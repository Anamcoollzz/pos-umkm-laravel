/**
 * --------------------------------------------------------------------------
 * Bootstrap base-component.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import Config from './util/config';
import type { ComponentConfig, ElementSelector } from './types';
declare class BaseComponent extends Config {
    _element: HTMLElement;
    _config: ComponentConfig;
    constructor(element: ElementSelector, config?: ComponentConfig);
    dispose(): void;
    _queueCallback(callback: () => void, element: HTMLElement, isAnimated?: boolean): void;
    _getConfig(config?: ComponentConfig): ComponentConfig;
    static getInstance(element: ElementSelector): BaseComponent | null;
    static getOrCreateInstance(element: ElementSelector, config?: ComponentConfig): BaseComponent;
    static get VERSION(): string;
    static get DATA_KEY(): string;
    static get EVENT_KEY(): string;
    static eventName(name: string): string;
}
export default BaseComponent;
