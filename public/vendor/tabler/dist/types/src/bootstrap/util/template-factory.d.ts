/**
 * --------------------------------------------------------------------------
 * Bootstrap util/template-factory.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import Config from './config';
import type { AllowList, ComponentConfig, ComponentConfigType, SanitizeFn } from '../types';
type TemplateFactoryConfig = {
    allowList: AllowList;
    content: Record<string, unknown>;
    extraClass: string | (() => string);
    html: boolean;
    sanitize: boolean;
    sanitizeFn: SanitizeFn | null;
    template: string;
};
declare class TemplateFactory extends Config {
    _config: TemplateFactoryConfig & ComponentConfig;
    constructor(config?: ComponentConfig);
    static get Default(): ComponentConfig;
    static get DefaultType(): ComponentConfigType;
    static get NAME(): string;
    getContent(): unknown[];
    hasContent(): boolean;
    changeContent(content: Record<string, unknown>): this;
    toHtml(): Element;
    _typeCheckConfig(config: ComponentConfig): void;
    _checkContent(arg: Record<string, unknown>): void;
    _setContent(template: HTMLElement, content: unknown, selector: string): void;
    _maybeSanitize(arg: string): string;
    _resolvePossibleFunction(arg: unknown): unknown;
    _putElementInTemplate(element: HTMLElement, templateElement: Element): void;
}
export default TemplateFactory;
