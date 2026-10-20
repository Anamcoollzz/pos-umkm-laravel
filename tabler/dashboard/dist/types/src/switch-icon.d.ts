/**
 * --------------------------------------------------------------------------
 * Tabler switch-icon.ts
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
 * A toggle button that swaps between two icons. The state is the `active`
 * class, mirrored in `aria-pressed`. The element is the `.switch-icon` itself,
 * or a button (e.g. `.btn-action`) wrapping one: the classes then go on the
 * inner `.switch-icon` and the ARIA state stays on the button.
 */
declare class SwitchIcon extends BaseComponent {
    #private;
    _element: HTMLElement;
    _config: ComponentConfig;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    get isActive(): boolean;
    get isLoading(): boolean;
    toggle(force?: boolean): void;
    dispose(): void;
}
export default SwitchIcon;
