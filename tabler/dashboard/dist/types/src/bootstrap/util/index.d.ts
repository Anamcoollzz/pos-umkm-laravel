/**
 * --------------------------------------------------------------------------
 * Bootstrap util/index.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import type { JQueryPluginStatic, JQueryStaticLike } from '../types';
declare const parseSelector: (selector: string) => string;
declare const toType: (object: unknown) => string;
declare const getUID: (prefix: string) => string;
declare const getTransitionDurationFromElement: (element: HTMLElement) => number;
declare const triggerTransitionEnd: (element: HTMLElement) => void;
declare const isElement: (object: unknown) => object is HTMLElement;
declare const getElement: (object: unknown) => HTMLElement | null;
declare const isVisible: (element: HTMLElement) => boolean;
declare const isDisabled: (element: HTMLElement | null | undefined) => boolean;
declare const findShadowRoot: (element: Node) => ShadowRoot | null;
declare const noop: () => void;
/**
 * Trick to restart an element's animation
 *
 * @see https://www.harrytheo.com/blog/2021/02/restart-a-css-animation-with-javascript/#restarting-a-css-animation
 */
declare const reflow: (element: HTMLElement) => void;
declare const isRTL: () => boolean;
declare const getjQuery: () => JQueryStaticLike | null;
declare const onDOMContentLoaded: (callback: () => void) => void;
declare const defineJQueryPlugin: (plugin: JQueryPluginStatic) => void;
declare const execute: (possibleCallback: unknown, args?: unknown[], defaultValue?: unknown) => unknown;
declare const executeAfterTransition: (callback: () => void, transitionElement: HTMLElement, waitForTransition?: boolean) => void;
declare const getNextActiveElement: <T>(list: T[], activeElement: T, shouldGetNext: boolean, isCycleAllowed: boolean) => T;
export { defineJQueryPlugin, execute, executeAfterTransition, findShadowRoot, getElement, getjQuery, getNextActiveElement, getTransitionDurationFromElement, getUID, isDisabled, isElement, isRTL, isVisible, noop, onDOMContentLoaded, parseSelector, reflow, triggerTransitionEnd, toType };
