/**
 * --------------------------------------------------------------------------
 * Bootstrap dom/event-handler.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
export type EventCallback<E extends Event = Event> = (this: HTMLElement, event: E) => void;
export type DelegatedEvent<E extends Event = Event> = E & {
    delegateTarget: HTMLElement;
};
declare const EventHandler: {
    on<E extends Event = Event>(element: EventTarget | null, event: string, handler: string | false | EventCallback<E>, delegationFunction?: EventCallback<E>): void;
    one<E extends Event = Event>(element: EventTarget | null, event: string, handler: string | false | EventCallback<E>, delegationFunction?: EventCallback<E>): void;
    off<E extends Event = Event>(element: EventTarget | null, originalTypeEvent: string, handler?: string | false | EventCallback<E>, delegationFunction?: EventCallback<E>): void;
    trigger(element: EventTarget | null, event: string, args?: Record<string, unknown>): Event | null;
};
export default EventHandler;
