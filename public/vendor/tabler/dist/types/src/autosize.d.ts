/**
 * --------------------------------------------------------------------------
 * Tabler autosize.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
type ComponentConfig = Record<string, never>;
type ComponentConfigInput = Record<string, unknown>;
/**
 * Class definition
 *
 * Grows a textarea with its content and shrinks it back when text is removed.
 * The height follows `scrollHeight`, so `rows` sets the starting height and
 * `max-height` caps the growth, after which the field scrolls again.
 */
declare class Autosize extends BaseComponent {
    _element: HTMLTextAreaElement;
    _config: ComponentConfig;
    _observer: ResizeObserver | null;
    _inlineStyle: string;
    _width: number;
    _onInput: () => void;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    update(): void;
    dispose(): void;
}
export default Autosize;
