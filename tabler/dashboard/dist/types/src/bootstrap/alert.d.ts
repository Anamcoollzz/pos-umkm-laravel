/**
 * --------------------------------------------------------------------------
 * Bootstrap alert.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import type { JQueryCollectionLike } from './types';
declare class Alert extends BaseComponent {
    static get NAME(): string;
    close(): void;
    _destroyElement(): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Alert;
