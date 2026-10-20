/**
 * --------------------------------------------------------------------------
 * Bootstrap util/component-functions.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
type ComponentInstance = unknown;
interface PluginComponent {
    NAME: string;
    getOrCreateInstance(element: HTMLElement | string | null): ComponentInstance;
}
interface EventActionData {
    targets: HTMLElement[];
    event: Event;
}
interface PluginEventActionData extends EventActionData {
    instances: ComponentInstance[];
}
interface DismissibleComponent {
    EVENT_KEY: string;
    NAME: string;
    getOrCreateInstance(element: HTMLElement | string | null): ComponentInstance;
}
declare const enableDismissTrigger: (component: DismissibleComponent, method?: string) => void;
declare const eventAction: (onEvent: string, stringSelector: string, callback: (data: EventActionData) => void) => void;
declare const eventActionOnPlugin: (Plugin: PluginComponent, onEvent: string, stringSelector: string, method: string, callback?: ((data: PluginEventActionData) => void) | null) => void;
/**
 * Creates the component for every element that matches on page load. One
 * element with a broken config must not stop the rest of the bundle, so the
 * error is logged and the loop goes on.
 */
declare const initAll: (selector: string, Plugin: PluginComponent, filter?: ((element: HTMLElement) => boolean) | null) => void;
export { enableDismissTrigger, eventAction, eventActionOnPlugin, initAll };
