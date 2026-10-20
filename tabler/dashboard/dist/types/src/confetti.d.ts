/**
 * --------------------------------------------------------------------------
 * Tabler confetti.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ComponentConfig as BaseConfig, ElementSelector } from './bootstrap/types';
type ComponentConfig = {
    /** how many pieces one burst pours out */
    count: number;
    /** ms during which pieces keep pouring; the first frames get the most */
    duration: number;
    /** how fast the pour thins out; higher means a sharper splash at the start */
    decay: number;
    /** share of the viewport height at the bottom where pieces fade out */
    fade: number;
    /** multiplier for the fall speed */
    speed: number;
    /** piece colours; `null` reads the Tabler palette from CSS custom properties */
    colors: string[] | null;
};
type ComponentConfigInput = Partial<Omit<ComponentConfig, 'colors'>> & {
    colors?: string[] | string | null;
};
type Emitter = {
    element: HTMLElement;
    config: ComponentConfig;
    colors: string[];
    startedAt: number;
    emitted: number;
    /** `stop()` was called: nothing new is poured, what is in the air still falls */
    stopped: boolean;
    /** every piece has landed and `end` was fired */
    done: boolean;
    /** the instance was disposed: the pieces still land, but `end` is not fired */
    detached: boolean;
};
/**
 * Class definition
 *
 * Pours a short shower of confetti over the page, like a bucket emptied from
 * the top edge: dense at first, then thinning out. Nothing is drawn when the
 * user prefers reduced motion, but the events still fire.
 */
declare class Confetti extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _emitter: Emitter | null;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    burst(): void;
    stop(): void;
    dispose(): void;
    _configAfterMerge(config: BaseConfig): BaseConfig;
    _colors(): string[];
}
export default Confetti;
