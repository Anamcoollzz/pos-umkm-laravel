/**
 * --------------------------------------------------------------------------
 * Tabler vector-map.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ComponentConfig as BaseConfig, ElementSelector } from './bootstrap/types';
export type VectorMapRegion = {
    name: string;
    /** SVG path data, already projected into the viewBox of the map */
    path: string;
    /** Too small for a shape at the scale of the map: `path` is a single point, drawn as a dot */
    point?: boolean;
};
export type VectorMapData = {
    width: number;
    height: number;
    /** How the shapes were projected, to place a point by its coordinates */
    projection: {
        type: 'miller';
        scale: number;
        translate: number[];
    };
    /** Regions by their code, for example ISO 3166-1 alpha-2 for countries */
    regions: Record<string, VectorMapRegion>;
};
export type VectorMapMarker = {
    /** Shown in the tooltip, and what a line refers to */
    name?: string;
    lat: number;
    lng: number;
};
export type VectorMapLine = {
    /** Names of the two markers the line joins */
    from: string;
    to: string;
};
/** What the pointer is over when a tooltip is about to show */
export type VectorMapTooltipItem = {
    type: 'region';
    code: string;
    name: string;
    value?: number;
} | {
    type: 'marker';
    name: string;
};
type VectorMapValues = Record<string, number>;
type VectorMapTooltip = boolean | ((item: VectorMapTooltipItem) => string);
type VectorMapLegend = boolean | ((value: number) => string);
type VectorMapSelect = 'none' | 'single' | 'multiple';
type Point = [number, number];
type View = {
    x: number;
    y: number;
    scale: number;
};
type ComponentConfig = {
    map: string | VectorMapData;
    values: VectorMapValues;
    min: number | null;
    max: number | null;
    colors: string[];
    markers: VectorMapMarker[];
    lines: VectorMapLine[];
    tooltip: VectorMapTooltip;
    legend: VectorMapLegend;
    select: VectorMapSelect;
    selected: string[];
    zoom: boolean;
    zoomMax: number;
    zoomOnScroll: boolean;
    zoomInLabel: string;
    zoomOutLabel: string;
    label: string | null;
};
type ComponentConfigInput = Partial<ComponentConfig>;
/**
 * Class definition
 *
 * A map drawn as inline SVG from a map file, with regions shaded by value,
 * markers placed by their coordinates and lines between them:
 *
 *   <div class="vector-map" data-bs-toggle="vector-map" data-bs-map="world" data-bs-values='{"PL": 80, "DE": 45}'></div>
 *
 * The shapes come projected from the map file (`dist/js/maps/world.js`), so
 * only the markers are projected here. Colours and sizes come from the
 * `--tblr-vector-map-*` custom properties.
 *
 * With `data-bs-zoom="true"` the map can be magnified with its buttons, the
 * wheel, a double click or a pinch, and dragged around.
 */
declare class VectorMap extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _userConfig: ComponentConfigInput;
    _map: VectorMapData | null;
    _tooltip: HTMLElement | null;
    _view: View;
    _frame: number;
    _pointers: Map<number, Point>;
    _dragged: boolean;
    _selected: Set<string> | null;
    /** Maps added with `addMap()`, by name */
    static maps: Record<string, VectorMapData>;
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    static addMap(name: string, data: VectorMapData): void;
    render(): void;
    update(values: VectorMapValues): void;
    getSelected(): string[];
    setSelected(codes: string[]): void;
    zoomIn(): void;
    zoomOut(): void;
    reset(): void;
    dispose(): void;
    _configAfterMerge(config: BaseConfig): BaseConfig;
    _getSvg(): SVGSVGElement | null;
    _getMap(): VectorMapData;
    _createShape(code: string, region: VectorMapRegion): SVGElement;
    _createPoint(code: string, region: VectorMapRegion): SVGElement;
    _renderMarkers(svg: SVGSVGElement, map: VectorMapData): void;
    _tooltipText(target: Element): string;
    _getControls(): HTMLElement | null;
    _renderControls(): void;
    _setView({ x, y, scale }: View): void;
    _animateTo(target: View): void;
    _zoomBy(factor: number, anchor?: Point | null, animate?: boolean): void;
    _toMapPoint(clientX: number, clientY: number): Point;
    _isOnMap(event: Event): boolean;
    _onPointerDown(event: PointerEvent): void;
    _onPointerUp(event: PointerEvent): void;
    _drag(event: PointerEvent): void;
    _onWheel: (event: WheelEvent) => void;
    _onPointerMove(event: PointerEvent): void;
    _hideTooltip(): void;
    _toSelected(codes: unknown): Set<string>;
    _applySelected(): void;
    _onClick(event: MouseEvent): void;
    _getLegend(): HTMLElement | null;
    _renderLegend(min: number, max: number): void;
    _applyColors(): void;
    _applyValues(): void;
}
export default VectorMap;
