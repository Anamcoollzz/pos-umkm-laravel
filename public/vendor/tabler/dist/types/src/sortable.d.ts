/**
 * --------------------------------------------------------------------------
 * Tabler sortable.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
interface SortableInstance {
    option(name: string, value?: unknown): unknown;
    toArray(): string[];
    sort(order: string[], useAnimation?: boolean): void;
    destroy(): void;
}
type ComponentConfig = Record<string, unknown>;
type ComponentConfigInput = Record<string, unknown>;
/**
 * Class definition
 *
 * Wraps SortableJS (https://sortablejs.github.io/Sortable/), loaded separately
 * as `window.Sortable`. Without the plugin the component is inert. Options come
 * from the `data-sortable` attribute as JSON, or from the config object.
 * Turn `forceFallback` on so the dragged copy can be styled with `.sortable-drag`.
 */
declare class Sortable extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _sortable: SortableInstance | null;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<string, string>;
    static get NAME(): string;
    /** The SortableJS instance, for options the component does not expose. */
    get sortable(): SortableInstance | null;
    toArray(): string[];
    sort(order: string[], useAnimation?: boolean): void;
    dispose(): void;
    _mergeConfigObj(config?: Record<string, unknown>, element?: HTMLElement): Record<string, unknown>;
}
export default Sortable;
export type { SortableInstance };
