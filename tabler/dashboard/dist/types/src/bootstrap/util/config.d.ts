/**
 * --------------------------------------------------------------------------
 * Bootstrap util/config.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import type { ComponentConfig, ComponentConfigType } from '../types';
declare class Config {
    static get Default(): ComponentConfig;
    static get DefaultType(): ComponentConfigType;
    static get NAME(): string;
    _getConfig(config?: ComponentConfig): ComponentConfig;
    _configAfterMerge(config: ComponentConfig): ComponentConfig;
    _mergeConfigObj(config?: ComponentConfig, element?: HTMLElement): ComponentConfig;
    _typeCheckConfig(config: ComponentConfig, configTypes?: ComponentConfigType): void;
}
export default Config;
