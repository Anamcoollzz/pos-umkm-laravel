/**
 * --------------------------------------------------------------------------
 * Bootstrap popover.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import Tooltip from './tooltip';
import type { TooltipConfig, TooltipContent, TooltipContentMap } from './tooltip';
import type { JQueryCollectionLike } from './types';
type ComponentConfig = TooltipConfig & {
    content: TooltipContent;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
/**
 * Class definition
 */
declare class Popover extends Tooltip {
    _element: HTMLElement;
    _config: ComponentConfig;
    constructor(element: HTMLElement | string, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    _isWithContent(): boolean;
    _getContentForTemplate(): TooltipContentMap;
    _getContent(): string | HTMLElement | null;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default Popover;
