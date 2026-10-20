/**
 * --------------------------------------------------------------------------
 * Tabler input-mask.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
interface IMaskInstance {
    value: string;
    unmaskedValue: string;
    updateValue(): void;
    updateOptions(options: Record<string, unknown>): void;
    destroy(): void;
}
type ComponentConfig = {
    /** an IMask mask: a pattern string, `Number`, `Date`, a RegExp or a mask object */
    mask: unknown;
    lazy: boolean;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 *
 * Wraps the IMask plugin (https://imask.js.org), loaded separately as
 * `window.IMask`. Without the plugin the component is inert.
 */
declare class InputMask extends BaseComponent {
    _element: HTMLInputElement;
    _config: ComponentConfig;
    _mask: IMaskInstance | null;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    /** The IMask instance, for options the component does not expose. */
    get mask(): IMaskInstance | null;
    update(): void;
    dispose(): void;
    _mergeConfigObj(config?: Record<string, unknown>, element?: HTMLElement): Record<string, unknown>;
}
export default InputMask;
export type { IMaskInstance };
