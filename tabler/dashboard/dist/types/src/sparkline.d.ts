/**
 * --------------------------------------------------------------------------
 * Tabler sparkline.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ComponentConfig as BaseConfig, ElementSelector } from './bootstrap/types';
type SparklineType = 'line' | 'bar' | 'circle' | 'tristate';
type SparklineFill = 'none' | 'auto';
type SparklineSpot = 'none' | 'min' | 'max' | 'last';
type SparklineValuesInput = number[] | number | string;
type ComponentConfig = {
    type: SparklineType;
    values: number[];
    width: number;
    height: number;
    min: number | null;
    max: number | null;
    fill: SparklineFill;
    spot: SparklineSpot;
    pad: number;
    barGap: number;
    barRadius: number;
    label: string | number | boolean | null;
    threshold: number | null;
    animation: number;
};
type ComponentConfigInput = Partial<Omit<ComponentConfig, 'values'>> & {
    values?: SparklineValuesInput;
};
/**
 * Class definition
 *
 * Tiny inline SVG chart (line, bar or circle) rendered from data attributes:
 *
 *   <span class="sparkline" data-bs-toggle="sparkline" data-bs-type="line" data-bs-values="3,4,2,6,5,8,7"></span>
 *
 * Colours and stroke widths come from the `--tblr-sparkline-*` custom
 * properties, so a text colour utility on the element themes the chart.
 */
declare class Sparkline extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _userConfig: ComponentConfigInput;
    _frame: number;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    update(values: SparklineValuesInput): void;
    render(): void;
    dispose(): void;
    _configAfterMerge(config: BaseConfig): BaseConfig;
    _labelText(): string;
    _circleRatio(): number;
    _canAnimate(from: SVGSVGElement, to: SVGSVGElement): boolean;
    _animate(from: SVGSVGElement, to: SVGSVGElement): void;
    _hairline(svg: SVGSVGElement, y: number, color: string, dashed?: boolean): void;
    _createSvg(): SVGSVGElement;
    _renderLine(): SVGSVGElement;
    _areaPath(ys: number[], step: number, height: number): string;
    _renderBars(): SVGSVGElement;
    _renderTristate(): SVGSVGElement;
    _renderCircle(): SVGSVGElement;
}
export default Sparkline;
