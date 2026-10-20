/**
 * --------------------------------------------------------------------------
 * Tabler countup.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
type CountUpFormat = 'number' | 'time';
type ComponentConfig = {
    /** start when the element scrolls into view; off starts at once */
    autoAnimate: boolean;
    startVal: number;
    /** seconds */
    duration: number;
    decimalPlaces: number;
    useEasing: boolean;
    useGrouping: boolean;
    separator: string;
    decimal: string;
    prefix: string;
    suffix: string;
    /** `number`, or `time` for a value in minutes shown as h:mm */
    format: CountUpFormat;
    /** custom rendering of the number, from a JavaScript config only */
    formatter: ((value: number) => string) | null;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 *
 * Animates the number written inside the element from `startVal` to it,
 * formatted with grouping, decimals, a prefix and a suffix. Options come from
 * the `data-countup` attribute as JSON, or from the config object.
 */
declare class CountUp extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _endVal: number;
    _value: number;
    _frame: number;
    _observer: IntersectionObserver | null;
    _from: number;
    _elapsed: number;
    _running: boolean;
    _paused: boolean;
    _started: boolean;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    start(): void;
    reset(): void;
    update(value: number | string): void;
    pauseResume(): void;
    dispose(): void;
    _mergeConfigObj(config?: Record<string, unknown>, element?: HTMLElement): Record<string, unknown>;
    _observerCallback(entries: IntersectionObserverEntry[]): void;
    _animate(from: number, to: number): void;
    _run(): void;
    _finish(value: number): void;
    _stop(): void;
    _print(value: number): void;
    _format(value: number): string;
}
export default CountUp;
