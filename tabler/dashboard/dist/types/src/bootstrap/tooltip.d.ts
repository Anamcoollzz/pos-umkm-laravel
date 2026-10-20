/**
 * --------------------------------------------------------------------------
 * Bootstrap tooltip.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import * as Popper from '@popperjs/core';
import BaseComponent from './base-component';
import TemplateFactory from './util/template-factory';
import type { AllowList, JQueryCollectionLike, SanitizeFn } from './types';
type PopperOffsetData = {
    placement: Popper.Placement;
    reference: Popper.Rect;
    popper: Popper.Rect;
};
type PopperOffsetFunction = (popperData: PopperOffsetData) => number[];
type PopperConfigFunction = (defaultConfig: Partial<Popper.Options>) => Partial<Popper.Options>;
export type TooltipDelay = number | {
    show: number;
    hide: number;
};
export type TooltipContent = string | HTMLElement | null | ((this: HTMLElement, element: HTMLElement) => string | HTMLElement | null);
export type TooltipContentMap = Record<string, TooltipContent>;
export type TooltipPlacement = string | ((this: Tooltip, tip: HTMLElement, element: HTMLElement) => string);
export type TooltipConfig = {
    allowList: AllowList;
    animation: boolean;
    boundary: Popper.Boundary;
    container: HTMLElement | string | false;
    customClass: string | ((this: HTMLElement, element: HTMLElement) => string);
    delay: TooltipDelay;
    fallbackPlacements: string[];
    html: boolean;
    offset: number[] | string | ((popperData: PopperOffsetData, element: HTMLElement) => number[]);
    placement: TooltipPlacement;
    popperConfig: Partial<Popper.Options> | PopperConfigFunction | null;
    sanitize: boolean;
    sanitizeFn: SanitizeFn | null;
    selector: string | false;
    template: string;
    title: TooltipContent;
    trigger: string;
};
type ComponentConfig = TooltipConfig;
export type TooltipConfigInput = Partial<TooltipConfig> & Record<string, unknown>;
type ComponentConfigInput = TooltipConfigInput;
/**
 * Class definition
 */
declare class Tooltip extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _isEnabled: boolean;
    _timeout: ReturnType<typeof setTimeout>;
    _isHovered: boolean | null;
    _activeTrigger: Record<string, boolean>;
    _popper: Popper.Instance | null;
    _templateFactory: TemplateFactory | null;
    _newContent: TooltipContentMap | null;
    tip: HTMLElement | null;
    _hideModalHandler: () => void;
    constructor(element: HTMLElement | string, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    enable(): void;
    disable(): void;
    toggleEnabled(): void;
    toggle(): void;
    dispose(): void;
    show(): void;
    hide(): void;
    update(): void;
    _isWithContent(): boolean;
    _getTipElement(): HTMLElement | null;
    _createTipElement(content: TooltipContentMap): HTMLElement | null;
    setContent(content: TooltipContentMap): void;
    _getTemplateFactory(content: TooltipContentMap): TemplateFactory;
    _getContentForTemplate(): TooltipContentMap;
    _getTitle(): string | HTMLElement;
    _initializeOnDelegatedTarget(event: Event & {
        delegateTarget?: HTMLElement;
    }): Tooltip;
    _isAnimated(): boolean;
    _isShown(): boolean;
    _createPopper(tip: HTMLElement): Popper.Instance;
    _getOffset(): number[] | PopperOffsetFunction;
    _resolvePossibleFunction<T>(arg: T | ((this: HTMLElement, element: HTMLElement) => T)): T;
    _getPopperConfig(attachment: string): Partial<Popper.Options>;
    _setListeners(): void;
    _fixTitle(): void;
    _enter(): void;
    _leave(): void;
    _getDelay(): {
        show: number;
        hide: number;
    };
    _setTimeout(handler: () => void, timeout: number): void;
    _isWithActiveTrigger(): boolean;
    _getConfig(config?: ComponentConfigInput): ComponentConfig;
    _configAfterMerge(config: ComponentConfig): ComponentConfig;
    _getDelegateConfig(): ComponentConfigInput;
    _disposePopper(): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Tooltip;
