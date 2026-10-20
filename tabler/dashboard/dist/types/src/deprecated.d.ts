/**
 * Helpers kept only so that projects written for an older 1.x release keep
 * working. They are exported as the `tabler` namespace: `tabler.tabler.getColor()`
 * from the bundle, `import { tabler } from '@tabler/core'` from the module.
 *
 * Removed in 2.0, together with this file. Read the custom property yourself,
 * and mix the opacity in with `color-mix()`.
 */
export declare const prefix: string;
export declare const hexToRgba: (hex: string, opacity: number) => string | null;
export declare const getColor: (color: string, opacity?: number) => string | null;
