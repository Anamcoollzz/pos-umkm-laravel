/**
 * --------------------------------------------------------------------------
 * Bootstrap otp-input.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
type OtpInputType = 'numeric' | 'alphanumeric' | 'alpha';
type ComponentConfig = {
    groups: number[] | null;
    length: number | null;
    mask: boolean;
    separator: string;
    type: string;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
declare const TYPES: Record<OtpInputType, {
    inputmode: string;
    pattern: string;
    filter: RegExp;
}>;
/**
 * Class definition
 *
 * A single real `<input>` inside `.otp` is turned into a transparent overlay
 * once its value is rendered into one `.otp-slot` per character, so screen
 * readers, password managers and SMS autofill still see one ordinary field.
 */
declare class OtpInput extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _input: HTMLInputElement;
    _type: (typeof TYPES)[OtpInputType];
    _length: number;
    _wasComplete: boolean;
    _slots: HTMLElement[];
    _slotsContainer: HTMLElement | null;
    _pointerActive: boolean;
    _pointerIndex: number;
    _composedValue: string | null;
    _onInput: (event: Event) => void;
    _onCompositionEnd: () => void;
    _onBeforeInput: (event: Event) => void;
    _onFocus: () => void;
    _onPointerDown: (event: Event) => void;
    _onPointerEnd: () => void;
    _onSync: () => void;
    _onSelectionChange: () => void;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    getValue(): string;
    setValue(value: string | number): void;
    clear(): void;
    focus(): void;
    dispose(): void;
    _resolveLength(): number;
    _setupInput(): void;
    _renderSlots(): void;
    _addEventListeners(): void;
    _handleFocus(): void;
    _handleInput(): void;
    _handleBeforeInput(event: InputEvent): void;
    _handlePointerDown(event: PointerEvent): void;
    _slotIndexFromPoint(x: number): number | null;
    _afterValueChange(before?: string): void;
    _firstEmptyIndex(): number;
    _selectSlot(index: number): void;
    _sanitize(value: string): string;
    _render(): void;
    _checkComplete(): void;
}
export default OtpInput;
