/**
 * --------------------------------------------------------------------------
 * Bootstrap util/focustrap.ts
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 * --------------------------------------------------------------------------
 */
import Config from './config';
import type { ComponentConfig, ComponentConfigType } from '../types';
type FocusTrapConfig = {
    autofocus: boolean;
    trapElement: HTMLElement | null;
};
declare class FocusTrap extends Config {
    _config: FocusTrapConfig & ComponentConfig;
    _isActive: boolean;
    _lastTabNavDirection: string | null;
    constructor(config?: ComponentConfig);
    static get Default(): ComponentConfig;
    static get DefaultType(): ComponentConfigType;
    static get NAME(): string;
    activate(): void;
    deactivate(): void;
    _handleFocusin(event: FocusEvent): void;
    _handleKeydown(event: KeyboardEvent): void;
}
export default FocusTrap;
