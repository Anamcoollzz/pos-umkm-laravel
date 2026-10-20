/**
 * --------------------------------------------------------------------------
 * Tabler map.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
type LngLat = [number, number];
/** The part of a MapLibre GL JS map the `map` getter promises. Cast it to `Map` from `maplibre-gl` for the full type. */
type MapInstance = {
    on(type: string, listener: () => void): unknown;
    loaded(): boolean;
    isStyleLoaded(): boolean | void;
    remove(): void;
    setStyle(style: string): unknown;
    getStyle(): {
        layers: {
            id: string;
        }[];
    };
    setPaintProperty(layer: string, name: string, value: string): unknown;
    setProjection(projection: {
        type: string;
    }): unknown;
    zoomIn(): unknown;
    zoomOut(): unknown;
    resetNorthPitch(): unknown;
    getZoom(): number;
    flyTo(options: {
        center: LngLat;
        zoom: number;
    }): unknown;
    addSource(id: string, source: Record<string, unknown>): unknown;
    addLayer(layer: Record<string, unknown>): unknown;
};
/** The part of a MapLibre GL JS marker the `markers` getter promises. */
type MapMarkerInstance = {
    setLngLat(lngLat: LngLat): MapMarkerInstance;
    setPopup(popup: unknown): MapMarkerInstance;
    addTo(map: MapInstance): MapMarkerInstance;
    togglePopup(): MapMarkerInstance;
    getElement(): HTMLElement;
    remove(): void;
};
type MapPopupInstance = {
    setDOMContent(node: Node): MapPopupInstance;
    setText(text: string): MapPopupInstance;
};
type MapLibrary = {
    Map: new (options: Record<string, unknown>) => MapInstance;
    Marker: new (options: Record<string, unknown>) => MapMarkerInstance;
    Popup: new (options: Record<string, unknown>) => MapPopupInstance;
};
type MapAction = 'zoom-in' | 'zoom-out' | 'north' | 'locate' | 'fullscreen';
type MapTheme = 'auto' | 'light' | 'dark';
type ComponentConfig = {
    /**
     * URL of the MapLibre GL JS module, loaded when `window.maplibregl` is not set.
     * A relative URL is resolved against the Tabler script; `null` turns the loading off.
     */
    library: string | null;
    /** `[longitude, latitude]`, or the two numbers as a `"13.4,52.5"` string */
    center: LngLat | string;
    zoom: number;
    /** style URL, or the name of an OpenFreeMap style such as `liberty` */
    mapStyle: string;
    /** style used in dark mode; `null` keeps `mapStyle` in both modes */
    mapStyleDark: string | null;
    /** `auto` follows the nearest `data-bs-theme` */
    mapTheme: MapTheme;
    /** softer colors for the default `positron` and `dark` styles */
    palette: boolean;
    /** buttons over the map: `true` for zoom, or a list of `zoom`, `north`, `locate` and `fullscreen` */
    controls: boolean | string;
    /** accessible names of the buttons, by action: `zoom-in`, `zoom-out`, `north`, `locate`, `fullscreen` */
    labels: Partial<Record<MapAction, string>>;
    /** draws the map as a 3D globe */
    globe: boolean;
    /** a path drawn as a line: a list of `[longitude, latitude]` points */
    route: LngLat[] | null;
    /** index of the route point reached so far: the path up to it is solid, the rest is dashed */
    routeProgress: number | null;
    /** GeoJSON drawn over the map, as an object or the URL of a file: areas, lines and points */
    geojson: object | string | null;
    /** color of the route and the GeoJSON shapes: a CSS color or a custom property */
    layerColor: string;
    /** pass-through for any MapLibre GL JS map option */
    mapOptions: object;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 *
 * Wraps MapLibre GL JS (https://maplibre.org). It uses `window.maplibregl`
 * when a page has loaded the library itself, and otherwise imports the module
 * the `library` option points at, so the map is created a moment later.
 */
declare class MapView extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _map: MapInstance | null;
    _markers: MapMarkerInstance[];
    _themeObserver: MutationObserver | null;
    _readyCallbacks: ((map: MapInstance) => void)[];
    _styleCallbacks: ((map: MapInstance) => void)[];
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    /** The MapLibre GL JS map, for everything the component does not expose. */
    get map(): MapInstance | null;
    /** The markers created from the child elements, in document order. */
    get markers(): MapMarkerInstance[];
    /**
     * Turns a CSS color, or a custom property such as `--tblr-primary`, into a
     * plain `rgb()` color. MapLibre draws layers on a canvas, so it accepts
     * neither CSS variables nor the `oklch()` values Tabler colors are written in.
     */
    static color(value: string, element?: HTMLElement): string;
    /** Runs the callback once the MapLibre map exists: right away, or after the library has loaded. */
    ready(callback: (map: MapInstance) => void): void;
    /**
     * Runs the callback each time a map style loads, and right away if one already has.
     * Layers are part of the style, so this is the place to add them.
     */
    onStyle(callback: (map: MapInstance) => void): void;
    zoomIn(): void;
    zoomOut(): void;
    /** Turns the map back to north up, with no tilt. */
    resetNorth(): void;
    /** Moves the map to the position of the device. The browser asks for permission first. */
    locate(): void;
    toggleFullscreen(): void;
    dispose(): void;
    _initMap(library: MapLibrary): void;
    _createControls(controls: true | string): void;
    _createMarker(library: MapLibrary, map: MapInstance, element: HTMLElement): MapMarkerInstance;
    _parseLngLat(value: LngLat | string): LngLat;
    _isDark(): boolean;
    _getStyleName(): string;
    _getStyle(): string;
    _applyPalette(): void;
    _addLayers(): void;
    _setupThemeObserver(): void;
}
export default MapView;
export type { ComponentConfig as MapConfig, MapInstance, MapLibrary, MapMarkerInstance };
