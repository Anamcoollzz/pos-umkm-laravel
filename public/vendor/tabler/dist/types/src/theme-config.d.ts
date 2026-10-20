/**
 * Every setting the theme switcher understands, with its default value. Each
 * key becomes a `data-bs-<key>` attribute on `<html>`, a `tabler-<key>`
 * localStorage entry and a `?<key>=` URL parameter, written only when the value
 * differs from the default. Adding a key here is all the JavaScript a new
 * setting needs; the switcher loops over this object.
 */
export declare const themeDefaults: {
    readonly theme: "auto";
    readonly 'theme-base': "neutral";
    readonly 'theme-font': "sans-serif";
    readonly 'theme-primary': "blue";
    readonly 'theme-radius': "1";
    readonly layout: "default";
    readonly navbar: "default";
    readonly 'navbar-position': "horizontal";
    readonly 'navbar-style': "default";
    readonly 'navbar-theme': "default";
    readonly 'offcanvas-style': "default";
    readonly sidebar: "default";
};
export type ThemeKey = keyof typeof themeDefaults;
