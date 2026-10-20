/**
 * --------------------------------------------------------------------------
 * Bootstrap scrollspy.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './base-component';
import type { JQueryCollectionLike } from './types';
type ComponentConfig = {
    offset: number | null;
    rootMargin: string;
    smoothScroll: boolean;
    target: HTMLElement | null;
    threshold: number[];
};
type ComponentConfigInput = Partial<Omit<ComponentConfig, 'target' | 'threshold'>> & {
    target?: HTMLElement | string | null;
    threshold?: number[] | string;
} & Record<string, unknown>;
declare class ScrollSpy extends BaseComponent {
    _element: HTMLElement;
    _config: ComponentConfig;
    _targetLinks: Map<string, HTMLElement>;
    _observableSections: Map<string, HTMLElement>;
    _rootElement: HTMLElement | null;
    _activeTarget: HTMLElement | null;
    _observer: IntersectionObserver | null;
    _previousScrollData: {
        visibleEntryTop: number;
        parentScrollTop: number;
    };
    constructor(element: HTMLElement | string, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    refresh(): void;
    dispose(): void;
    _configAfterMerge(config: ComponentConfig): ComponentConfig;
    _maybeEnableSmoothScroll(): void;
    _getNewObserver(): IntersectionObserver;
    _observerCallback(entries: IntersectionObserverEntry[]): void;
    _initializeTargetsAndObservables(): void;
    _process(target: HTMLElement): void;
    _activateParents(target: HTMLElement): void;
    _clearActiveClass(parent: HTMLElement): void;
    static jQueryInterface(this: JQueryCollectionLike, config?: unknown): unknown;
}
export default ScrollSpy;
