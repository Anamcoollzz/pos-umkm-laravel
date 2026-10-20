/**
 * --------------------------------------------------------------------------
 * Bootstrap util/sanitizer.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import type { AllowList, SanitizeFn } from '../types';
export declare const DefaultAllowlist: AllowList;
export declare const DefaultIconAllowlist: AllowList;
export declare function sanitizeHtml(unsafeHtml: string, allowList: AllowList, sanitizeFunction?: SanitizeFn): string;
