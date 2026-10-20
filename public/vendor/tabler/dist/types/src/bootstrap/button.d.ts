/**
 * --------------------------------------------------------------------------
 * Bootstrap button.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import type { JQueryCollectionLike } from './types';
declare class Button extends BaseComponent {
    _element: HTMLElement;
    static get NAME(): string;
    toggle(): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Button;
