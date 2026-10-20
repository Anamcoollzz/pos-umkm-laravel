/**
 * --------------------------------------------------------------------------
 * Tabler datepicker.ts
 * Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
 * --------------------------------------------------------------------------
 */
import BaseComponent from './bootstrap/base-component';
import type { ElementSelector } from './bootstrap/types';
type DateAny = Date | number | `${number}-${string}-${string}` | 'today';
type DatesArr = Array<Date | number | string>;
type DateMode = 'single' | 'multiple' | 'multiple-ranged';
type MonthsCount = 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12;
type PositionToInput = 'auto' | 'left' | 'center' | 'right' | ['bottom' | 'top', 'left' | 'center' | 'right'];
type WeekDayID = 0 | 1 | 2 | 3 | 4 | 5 | 6;
/**
 * The part of a Vanilla Calendar Pro instance the `calendar` getter promises.
 * Cast it to `Calendar` from `vanilla-calendar-pro` for the full type.
 */
interface CalendarInstance {
    context: Record<string, any>;
    init(): unknown;
    update(resetOptions?: object): unknown;
    set(options: object, resetOptions?: object): unknown;
    show(): unknown;
    hide(): unknown;
    destroy(): unknown;
}
type ComponentConfig = {
    /** 'light', 'dark' or 'auto' for the popup only; null inherits from the nearest `[data-bs-theme]` */
    datepickerTheme: string | null;
    dateMin: DateAny | null;
    dateMax: DateAny | null;
    /** input that receives the picked dates as `YYYY-MM-DD`, comma-separated; an inline calendar finds a hidden one inside */
    boundInput: string | HTMLInputElement | null;
    /**
     * How the date is written into the field: a pattern such as `'DD.MM.YYYY'` (tokens `YYYY`, `MM`, `M`, `DD`, `D`),
     * `'iso'`, `Intl.DateTimeFormat` options, or a function(date, locale) returning the text
     */
    dateFormat: string | Intl.DateTimeFormatOptions | ((date: Date, locale: string | undefined) => string) | null;
    /** element that shows the formatted date; a button uses itself or its `[data-bs-datepicker-display]` child */
    displayElement: string | HTMLElement | boolean | null;
    displayMonthsCount: MonthsCount;
    /** 0 = Sunday, 1 = Monday */
    firstWeekday: WeekDayID;
    /** render the calendar in place instead of a popup */
    inline: boolean;
    locale: string;
    /** element the popup is aligned with; defaults to the `.input-icon` / `.input-group` wrapper or the element */
    positionElement: string | HTMLElement | null;
    /** preselected dates as `YYYY-MM-DD` */
    selectedDates: string[];
    selectionMode: DateMode;
    placement: PositionToInput;
    /** show the ISO week number in front of each row */
    weekNumbers: boolean;
    /** pass-through for any Vanilla Calendar Pro option */
    vcpOptions: object;
};
type ComponentConfigInput = Partial<ComponentConfig> & Record<string, unknown>;
type ChangeEventArgs = {
    dates: string[];
    event: MouseEvent;
};
/**
 * Class definition
 *
 * Wraps Vanilla Calendar Pro (https://vanilla-calendar.pro), loaded separately
 * as `window.VanillaCalendarPro`. Without the plugin the component is inert.
 * Same options, methods and events as Bootstrap 6's Datepicker, so markup
 * written for one works with the other.
 */
declare class Datepicker extends BaseComponent {
    _element: HTMLElement & {
        value: string;
    };
    _config: ComponentConfig;
    _isShown: boolean;
    _isShowing: boolean;
    _isHiding: boolean;
    _isSilent: boolean;
    _skipPluginShow: boolean;
    _resolveShown: (() => void) | null;
    _hideTimeout: number;
    _isInput: boolean;
    _isInline: boolean;
    _boundInput: HTMLInputElement | null;
    _boundInputInside: boolean;
    _positionElement: HTMLElement | null;
    _displayElement: HTMLElement | false | null;
    _themeObserver: MutationObserver | null;
    _onFocusIn: ((event: Event) => void) | null;
    _onResize: () => void;
    _selectedDates: string[];
    constructor(element: ElementSelector, config?: ComponentConfigInput);
    static get Default(): ComponentConfig;
    static get DefaultType(): Record<keyof ComponentConfig, string>;
    static get NAME(): string;
    /** The Vanilla Calendar Pro instance, for options the component does not expose. */
    get calendar(): CalendarInstance | null;
    toggle(): Promise<void>;
    show(): Promise<void>;
    hide(): Promise<void>;
    dispose(): void;
    getSelectedDates(): string[];
    setSelectedDates(dates: DatesArr): void;
    _initCalendar(): void;
    _updateDisplayWithSelectedDates(): void;
    _writeSelection(selectedDates: string[]): void;
    _resolveBoundInput(): HTMLInputElement | null;
    _resolvePositionElement(): HTMLElement;
    _resolveDisplayElement(): HTMLElement | false | null;
    _alignToPositionElement(): void;
    _getThemeAncestor(): Element | null;
    _getEffectiveTheme(): string | null;
    _syncThemeAttribute(element: HTMLElement | undefined): void;
    _setupThemeObserver(): void;
    _setupDismissOnFocus(): void;
    _silently(callback: () => void): void;
    _handlePluginShow(): void;
    _handlePluginHide(): void;
    _maybeHideAfterSelection(selectedDates: string[]): void;
    _parseDate(dateStr: string): Date;
    _formatDate(dateStr: string): string;
    _formatPattern(): string | null;
    _dateSeparator(): string;
    _formatDateForInput(dates: string[]): string;
    _parseInputValue(): void;
    _select(dates: string[]): void;
    _toIsoDate(value: Date | number | string): string;
}
export default Datepicker;
export type { ComponentConfig as DatepickerConfig, ChangeEventArgs as DatepickerChangeEventArgs };
