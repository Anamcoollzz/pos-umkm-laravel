/**
 * --------------------------------------------------------------------------
 * Tabler number-input.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
type NumberInputAction = 'increment' | 'decrement';
type ComponentConfig = {
    /** lower bound; `null` reads the input's `min` attribute, no bound when that is missing too */
    min: number | null;
    /** upper bound; `null` reads the input's `max` attribute, no bound when that is missing too */
    max: number | null;
    /** amount added or removed per step; `null` reads the input's `step` attribute, or 1 */
    step: number | null;
    /** keep stepping while a button is held down */
    repeat: boolean;
    /** milliseconds a button has to be held before it starts repeating */
    repeatDelay: number;
    /** milliseconds between two repeated steps */
    repeatInterval: number;
    /** accessible names of the buttons the plugin renders around a bare input */
    decrementLabel: string;
    incrementLabel: string;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 *
 * A number field with a decrement and an increment button. The `<input>` stays
 * the single source of truth: the buttons, the arrow keys and the public API
 * all write to it, clamp to `min` / `max` and round to the precision of
 * `step`, so a form sees nothing but an ordinary field.
 *
 * Initialised on a bare `<input>`, the plugin wraps it in `.number-input` and
 * renders the two buttons itself; initialised on a `.number-input` wrapper, it
 * uses the buttons found in the markup.
 */
declare class NumberInput extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _input: HTMLInputElement | null;
    _buttons: HTMLElement[];
    _wrapper: HTMLElement | null;
    _min: number;
    _max: number;
    _step: number;
    _precision: number;
    _disallowed: RegExp;
    _holdTimer: ReturnType<typeof setTimeout> | null;
    _repeatTimer: ReturnType<typeof setInterval> | null;
    _held: boolean;
    _lastValue: string;
    _onClick: (event: Event) => void;
    _onPointerDown: (event: Event) => void;
    _onPointerEnd: () => void;
    _onKeyDown: (event: Event) => void;
    _onBeforeInput: (event: Event) => void;
    _onInputChange: () => void;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    getValue(): number | null;
    setValue(value: number | string): void;
    increment(): void;
    decrement(): void;
    dispose(): void;
    _renderWrapper(): void;
    _resolveBounds(): void;
    _setUpInput(): void;
    _addEventListeners(): void;
    _actionOf(button: HTMLElement): NumberInputAction | null;
    _handleClick(event: Event): void;
    _handlePointerDown(event: Event): void;
    _stopRepeat(): void;
    _runAction(action: NumberInputAction | null): void;
    _handleKeyDown(event: KeyboardEvent): void;
    _handleBeforeInput(event: InputEvent): void;
    _handleInputChange(): void;
    _stepBy(direction: 1 | -1): void;
    _fallbackValue(): number;
    _commit(value: number): void;
    _isLocked(): boolean;
    _clamp(value: number): number;
    _parse(value: string): number | null;
    _format(value: number): string;
    _update(): void;
}
export default NumberInput;
