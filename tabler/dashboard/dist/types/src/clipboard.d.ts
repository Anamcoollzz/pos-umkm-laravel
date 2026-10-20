/**
 * --------------------------------------------------------------------------
 * Tabler clipboard.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
type ComponentConfig = {
    /** selector of the element to read the text from */
    target: string | null;
    /** literal text to copy; wins over `target` */
    text: string | null;
    /** how long the copied state lasts, in milliseconds */
    delay: number;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 *
 * Copies text to the clipboard when the trigger is clicked, then shows the
 * copied state for a moment. Every word lives in the markup: the trigger holds
 * a `clipboard-label` and a `clipboard-feedback`, and the component only swaps
 * which of them is hidden.
 *
 * The browser gives `navigator.clipboard` to secure contexts only, so on plain
 * http a copy fails and `error.bs.clipboard` fires.
 */
declare class Clipboard extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _labels: Element[];
    _feedbacks: Element[];
    _timeout: number;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    get text(): string;
    copy(): Promise<void>;
    /** Ends the copied state, for a `delay` of 0 or an early reset. */
    reset(): void;
    dispose(): void;
    _mergeConfigObj(config?: Record<string, unknown>, element?: HTMLElement): Record<string, unknown>;
    _showCopied(): void;
    _toggleCopied(copied: boolean): void;
}
export default Clipboard;
