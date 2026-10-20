/**
 * --------------------------------------------------------------------------
 * Tabler strength.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
type StrengthLevel = 'weak' | 'fair' | 'good' | 'strong';
type ComponentConfig = {
    /** selector of the password field; without it the meter looks in its own parent */
    input: string | null;
    minLength: number;
    messages: Record<StrengthLevel, string>;
    weights: Record<string, number>;
    /** score bounds: weak up to the first, fair to the second, good to the third */
    thresholds: number[];
    /** replaces the built-in scoring; gets the password, returns a number */
    scorer: ((password: string) => number) | null;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 *
 * Rates the password typed in a field and fills a segmented meter. The score
 * is a hint for the user, never a validation: check the password on the
 * server as well.
 */
declare class Strength extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _input: HTMLInputElement | null;
    _segments: HTMLElement[];
    _text: HTMLElement | null;
    _emptyText: string;
    _level: StrengthLevel | null;
    _onInput: () => void;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    get level(): StrengthLevel | null;
    evaluate(): void;
    dispose(): void;
    _configAfterMerge(config: ComponentConfig): ComponentConfig;
    _getInput(): HTMLInputElement | null;
    _getText(): HTMLElement | null;
    _setUpAria(): void;
    _score(password: string): number;
    _level_(score: number): StrengthLevel | null;
    _render(level: StrengthLevel | null): void;
}
export default Strength;
