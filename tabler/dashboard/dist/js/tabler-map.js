/*!
* Tabler v1.7.0 (https://tabler.io)
* Copyright 2018-2026 The Tabler Authors
* Copyright 2018-2026 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
*/
(function(global, factory) {
	typeof exports === "object" && typeof module !== "undefined" ? factory(exports) : typeof define === "function" && define.amd ? define(["exports"], factory) : (global = typeof globalThis !== "undefined" ? globalThis : global || self, factory(global.tabler = global.tabler || {}));
})(this, function(exports) {
	Object.defineProperty(exports, Symbol.toStringTag, { value: "Module" });
	//#region js/src/bootstrap/dom/data.ts
	/**
	* --------------------------------------------------------------------------
	* Bootstrap dom/data.ts
	* Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
	* --------------------------------------------------------------------------
	*/
	var elementMap = /* @__PURE__ */ new Map();
	var Data = {
		set(element, key, instance) {
			if (!elementMap.has(element)) elementMap.set(element, /* @__PURE__ */ new Map());
			const instanceMap = elementMap.get(element);
			if (!instanceMap.has(key) && instanceMap.size !== 0) {
				console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(instanceMap.keys())[0]}.`);
				return;
			}
			instanceMap.set(key, instance);
		},
		get(element, key) {
			if (elementMap.has(element)) return elementMap.get(element).get(key) || null;
			return null;
		},
		remove(element, key) {
			if (!elementMap.has(element)) return;
			const instanceMap = elementMap.get(element);
			instanceMap.delete(key);
			if (instanceMap.size === 0) elementMap.delete(element);
		}
	};
	//#endregion
	//#region js/src/bootstrap/util/index.ts
	var MILLISECONDS_MULTIPLIER = 1e3;
	var TRANSITION_END = "transitionend";
	var parseSelector = (selector) => {
		if (selector && typeof CSS !== "undefined" && typeof CSS.escape === "function") selector = selector.replace(/#([^\s"#']+)/g, (_match, id) => `#${CSS.escape(id)}`);
		return selector;
	};
	var toType = (object) => {
		if (object === null || object === void 0) return `${object}`;
		return Object.prototype.toString.call(object).match(/\s([a-z]+)/i)[1].toLowerCase();
	};
	var getTransitionDurationFromElement = (element) => {
		if (!element) return 0;
		let { transitionDuration, transitionDelay } = window.getComputedStyle(element);
		if (!Number.parseFloat(transitionDuration) && !Number.parseFloat(transitionDelay)) return 0;
		transitionDuration = transitionDuration.split(",")[0];
		transitionDelay = transitionDelay.split(",")[0];
		return (Number.parseFloat(transitionDuration) + Number.parseFloat(transitionDelay)) * MILLISECONDS_MULTIPLIER;
	};
	var triggerTransitionEnd = (element) => {
		element.dispatchEvent(new Event(TRANSITION_END));
	};
	var unwrapJQuery = (object) => {
		if (object && typeof object === "object" && typeof object.jquery !== "undefined") return object[0];
		return object;
	};
	var isElement = (object) => {
		object = unwrapJQuery(object);
		if (!object || typeof object !== "object") return false;
		return typeof object.nodeType !== "undefined";
	};
	var getElement = (object) => {
		object = unwrapJQuery(object);
		if (isElement(object)) return object;
		if (typeof object === "string" && object.length > 0) return document.querySelector(parseSelector(object));
		return null;
	};
	var isVisible = (element) => {
		if (!isElement(element) || element.getClientRects().length === 0) return false;
		const elementIsVisible = getComputedStyle(element).getPropertyValue("visibility") === "visible";
		const closedDetails = element.closest("details:not([open])");
		if (!closedDetails) return elementIsVisible;
		if (closedDetails !== element) {
			const summary = element.closest("summary");
			if (summary && summary.parentNode !== closedDetails) return false;
			if (summary === null) return false;
		}
		return elementIsVisible;
	};
	var isDisabled = (element) => {
		if (!element || element.nodeType !== Node.ELEMENT_NODE) return true;
		if (element.classList.contains("disabled")) return true;
		if ("disabled" in element && typeof element.disabled !== "undefined") return Boolean(element.disabled);
		return element.hasAttribute("disabled") && element.getAttribute("disabled") !== "false";
	};
	var getjQuery = () => {
		if (window.jQuery && !document.body.hasAttribute("data-bs-no-jquery") && !document.body.hasAttribute("data-tblr-no-jquery")) return window.jQuery;
		return null;
	};
	var execute = (possibleCallback, args = [], defaultValue = possibleCallback) => {
		return typeof possibleCallback === "function" ? possibleCallback.call(args[0], ...args.slice(1)) : defaultValue;
	};
	var executeAfterTransition = (callback, transitionElement, waitForTransition = true) => {
		if (!waitForTransition) {
			execute(callback);
			return;
		}
		const emulatedDuration = getTransitionDurationFromElement(transitionElement) + 5;
		let called = false;
		const handler = ({ target }) => {
			if (target !== transitionElement) return;
			called = true;
			transitionElement.removeEventListener(TRANSITION_END, handler);
			execute(callback);
		};
		transitionElement.addEventListener(TRANSITION_END, handler);
		setTimeout(() => {
			if (!called) triggerTransitionEnd(transitionElement);
		}, emulatedDuration);
	};
	//#endregion
	//#region js/src/bootstrap/dom/event-handler.ts
	/**
	* --------------------------------------------------------------------------
	* Bootstrap dom/event-handler.ts
	* Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
	* --------------------------------------------------------------------------
	*/
	var namespaceRegex = /[^.]*(?=\..*)\.|.*/;
	var stripNameRegex = /\..*/;
	var stripUidRegex = /::\d+$/;
	var eventRegistry = {};
	var uidEvent = 1;
	var customEvents = {
		mouseenter: "mouseover",
		mouseleave: "mouseout"
	};
	var nativeEvents = /* @__PURE__ */ new Set([
		"click",
		"dblclick",
		"mouseup",
		"mousedown",
		"contextmenu",
		"mousewheel",
		"DOMMouseScroll",
		"mouseover",
		"mouseout",
		"mousemove",
		"selectstart",
		"selectend",
		"keydown",
		"keypress",
		"keyup",
		"orientationchange",
		"touchstart",
		"touchmove",
		"touchend",
		"touchcancel",
		"pointerdown",
		"pointermove",
		"pointerup",
		"pointerleave",
		"pointercancel",
		"gesturestart",
		"gesturechange",
		"gestureend",
		"focus",
		"blur",
		"change",
		"reset",
		"select",
		"submit",
		"focusin",
		"focusout",
		"load",
		"unload",
		"beforeunload",
		"resize",
		"move",
		"DOMContentLoaded",
		"readystatechange",
		"error",
		"abort",
		"scroll"
	]);
	function makeEventUid(element, uid) {
		return uid && `${uid}::${uidEvent++}` || element.uidEvent || uidEvent++;
	}
	function getElementEvents(element) {
		const uid = makeEventUid(element);
		element.uidEvent = uid;
		eventRegistry[uid] = eventRegistry[uid] || {};
		return eventRegistry[uid];
	}
	function bootstrapHandler(element, fn) {
		return function handler(event) {
			hydrateObj(event, { delegateTarget: element });
			if (handler.oneOff) EventHandler.off(element, event.type, fn);
			return fn.apply(element, [event]);
		};
	}
	function bootstrapDelegationHandler(element, selector, fn) {
		return function handler(event) {
			const domElements = element.querySelectorAll(selector);
			for (let { target } = event; target && target !== this; target = target.parentNode) for (const domElement of domElements) {
				if (domElement !== target) continue;
				hydrateObj(event, { delegateTarget: target });
				if (handler.oneOff) EventHandler.off(element, event.type, selector, fn);
				return fn.apply(target, [event]);
			}
		};
	}
	function findHandler(events, callable, delegationSelector = null) {
		return Object.values(events).find((event) => event.callable === callable && event.delegationSelector === delegationSelector);
	}
	function normalizeParameters(originalTypeEvent, handler, delegationFunction) {
		const isDelegated = typeof handler === "string";
		const callable = isDelegated ? delegationFunction : handler || delegationFunction;
		let typeEvent = getTypeEvent(originalTypeEvent);
		if (!nativeEvents.has(typeEvent)) typeEvent = originalTypeEvent;
		return [
			isDelegated,
			callable,
			typeEvent
		];
	}
	function addHandler(element, originalTypeEvent, handler, delegationFunction, oneOff) {
		if (typeof originalTypeEvent !== "string" || !element) return;
		let [isDelegated, callable, typeEvent] = normalizeParameters(originalTypeEvent, handler, delegationFunction);
		if (originalTypeEvent in customEvents) {
			const wrapFunction = (fn) => {
				return function(event) {
					const evt = event;
					if (!evt.relatedTarget || evt.relatedTarget !== evt.delegateTarget && !evt.delegateTarget.contains(evt.relatedTarget)) return fn.call(this, event);
				};
			};
			callable = wrapFunction(callable);
		}
		const events = getElementEvents(element);
		const handlers = events[typeEvent] || (events[typeEvent] = {});
		const previousFunction = findHandler(handlers, callable, isDelegated ? handler : null);
		if (previousFunction) {
			previousFunction.oneOff = previousFunction.oneOff && oneOff;
			return;
		}
		const uid = makeEventUid(callable, originalTypeEvent.replace(namespaceRegex, ""));
		const fn = isDelegated ? bootstrapDelegationHandler(element, handler, callable) : bootstrapHandler(element, callable);
		fn.delegationSelector = isDelegated ? handler : null;
		fn.callable = callable;
		fn.oneOff = oneOff;
		fn.uidEvent = uid;
		handlers[uid] = fn;
		element.addEventListener(typeEvent, fn, isDelegated);
	}
	function removeHandler(element, events, typeEvent, handler, delegationSelector) {
		const fn = findHandler(events[typeEvent], handler, delegationSelector ?? null);
		if (!fn) return;
		element.removeEventListener(typeEvent, fn, Boolean(delegationSelector));
		delete events[typeEvent][fn.uidEvent];
	}
	function removeNamespacedHandlers(element, events, typeEvent, namespace) {
		const storeElementEvent = events[typeEvent] || {};
		for (const [handlerKey, event] of Object.entries(storeElementEvent)) if (handlerKey.includes(namespace)) removeHandler(element, events, typeEvent, event.callable, event.delegationSelector);
	}
	function getTypeEvent(event) {
		event = event.replace(stripNameRegex, "");
		return customEvents[event] || event;
	}
	var EventHandler = {
		on(element, event, handler, delegationFunction) {
			addHandler(element, event, handler, delegationFunction, false);
		},
		one(element, event, handler, delegationFunction) {
			addHandler(element, event, handler, delegationFunction, true);
		},
		off(element, originalTypeEvent, handler, delegationFunction) {
			if (typeof originalTypeEvent !== "string" || !element) return;
			const [isDelegated, callable, typeEvent] = normalizeParameters(originalTypeEvent, handler, delegationFunction);
			const inNamespace = typeEvent !== originalTypeEvent;
			const events = getElementEvents(element);
			const storeElementEvent = events[typeEvent] || {};
			const isNamespace = originalTypeEvent.startsWith(".");
			if (typeof callable !== "undefined") {
				if (!Object.keys(storeElementEvent).length) return;
				removeHandler(element, events, typeEvent, callable, isDelegated ? handler : null);
				return;
			}
			if (isNamespace) for (const elementEvent of Object.keys(events)) removeNamespacedHandlers(element, events, elementEvent, originalTypeEvent.slice(1));
			for (const [keyHandlers, event] of Object.entries(storeElementEvent)) {
				const handlerKey = keyHandlers.replace(stripUidRegex, "");
				if (!inNamespace || originalTypeEvent.includes(handlerKey)) removeHandler(element, events, typeEvent, event.callable, event.delegationSelector);
			}
		},
		trigger(element, event, args) {
			if (typeof event !== "string" || !element) return null;
			const $ = getjQuery();
			const inNamespace = event !== getTypeEvent(event);
			let jQueryEvent = null;
			let bubbles = true;
			let nativeDispatch = true;
			let defaultPrevented = false;
			if (inNamespace && $) {
				jQueryEvent = $.Event(event, args);
				$(element).trigger(jQueryEvent);
				bubbles = !jQueryEvent.isPropagationStopped();
				nativeDispatch = !jQueryEvent.isImmediatePropagationStopped();
				defaultPrevented = jQueryEvent.isDefaultPrevented();
			}
			const evt = hydrateObj(new Event(event, {
				bubbles,
				cancelable: true
			}), args);
			if (defaultPrevented) evt.preventDefault();
			if (nativeDispatch) element.dispatchEvent(evt);
			if (evt.defaultPrevented && jQueryEvent) jQueryEvent.preventDefault();
			return evt;
		}
	};
	function hydrateObj(obj, meta = {}) {
		for (const [key, value] of Object.entries(meta)) try {
			obj[key] = value;
		} catch {
			Object.defineProperty(obj, key, {
				configurable: true,
				get() {
					return value;
				}
			});
		}
		return obj;
	}
	//#endregion
	//#region js/src/bootstrap/dom/manipulator.ts
	function normalizeData(value) {
		if (value === "true") return true;
		if (value === "false") return false;
		if (value === Number(value).toString()) return Number(value);
		if (value === "" || value === "null") return null;
		if (typeof value !== "string") return value;
		try {
			return JSON.parse(decodeURIComponent(value));
		} catch {
			return value;
		}
	}
	function normalizeDataKey(key) {
		return key.replace(/[A-Z]/g, (chr) => `-${chr.toLowerCase()}`);
	}
	var PREFIXES = ["tblr", "bs"];
	var Manipulator = {
		setDataAttribute(element, key, value) {
			element.setAttribute(`data-bs-${normalizeDataKey(key)}`, value);
		},
		removeDataAttribute(element, key) {
			for (const prefix of PREFIXES) element.removeAttribute(`data-${prefix}-${normalizeDataKey(key)}`);
		},
		getDataAttributes(element) {
			if (!element) return {};
			const attributes = {};
			for (const prefix of PREFIXES) {
				const keys = Object.keys(element.dataset).filter((key) => key.startsWith(prefix) && !key.startsWith(`${prefix}Config`));
				for (const key of keys) {
					let pureKey = key.replace(new RegExp(`^${prefix}`), "");
					pureKey = pureKey.charAt(0).toLowerCase() + pureKey.slice(1);
					if (!(pureKey in attributes)) attributes[pureKey] = normalizeData(element.dataset[key]);
				}
			}
			return attributes;
		},
		getDataAttribute(element, key) {
			for (const prefix of PREFIXES) {
				const value = element.getAttribute(`data-${prefix}-${normalizeDataKey(key)}`);
				if (value !== null) return normalizeData(value);
			}
			return null;
		}
	};
	//#endregion
	//#region js/src/bootstrap/util/config.ts
	/**
	* --------------------------------------------------------------------------
	* Bootstrap util/config.ts
	* Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
	* --------------------------------------------------------------------------
	*/
	var Config = class {
		static get Default() {
			return {};
		}
		static get DefaultType() {
			return {};
		}
		static get NAME() {
			throw new Error("You have to implement the static method \"NAME\", for each component!");
		}
		_getConfig(config) {
			config = this._mergeConfigObj(config);
			config = this._configAfterMerge(config);
			this._typeCheckConfig(config);
			return config;
		}
		_configAfterMerge(config) {
			return config;
		}
		_mergeConfigObj(config, element) {
			const jsonConfig = isElement(element) ? Manipulator.getDataAttribute(element, "config") : {};
			return {
				...this.constructor.Default,
				...typeof jsonConfig === "object" ? jsonConfig : {},
				...isElement(element) ? Manipulator.getDataAttributes(element) : {},
				...typeof config === "object" ? config : {}
			};
		}
		_typeCheckConfig(config, configTypes) {
			const ctor = this.constructor;
			const types = configTypes || ctor.DefaultType;
			for (const [property, expectedTypes] of Object.entries(types)) {
				const value = config[property];
				const valueType = isElement(value) ? "element" : toType(value);
				if (!new RegExp(expectedTypes).test(valueType)) throw new TypeError(`${ctor.NAME.toUpperCase()}: Option "${property}" provided type "${valueType}" but expected type "${expectedTypes}".`);
			}
		}
	};
	//#endregion
	//#region js/src/bootstrap/base-component.ts
	/**
	* --------------------------------------------------------------------------
	* Bootstrap base-component.ts
	* Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
	* --------------------------------------------------------------------------
	*/
	var VERSION = "5.3.8";
	var BaseComponent = class extends Config {
		constructor(element, config) {
			super();
			const resolved = getElement(element);
			if (!resolved) return;
			const ctor = this.constructor;
			Data.get(resolved, ctor.DATA_KEY)?.dispose();
			this._element = resolved;
			this._config = this._getConfig(config);
			Data.set(this._element, ctor.DATA_KEY, this);
		}
		dispose() {
			const ctor = this.constructor;
			Data.remove(this._element, ctor.DATA_KEY);
			EventHandler.off(this._element, ctor.EVENT_KEY);
			for (const propertyName of Object.getOwnPropertyNames(this)) this[propertyName] = null;
		}
		_queueCallback(callback, element, isAnimated = true) {
			executeAfterTransition(() => {
				if (this._element) callback();
			}, element, isAnimated);
		}
		_getConfig(config) {
			config = this._mergeConfigObj(config, this._element);
			config = this._configAfterMerge(config);
			this._typeCheckConfig(config);
			return config;
		}
		static getInstance(element) {
			return Data.get(getElement(element), this.DATA_KEY);
		}
		static getOrCreateInstance(element, config = {}) {
			return this.getInstance(element) || new this(element, typeof config === "object" ? config : void 0);
		}
		static get VERSION() {
			return VERSION;
		}
		static get DATA_KEY() {
			return `bs.${this.NAME}`;
		}
		static get EVENT_KEY() {
			return `.${this.DATA_KEY}`;
		}
		static eventName(name) {
			return `${name}${this.EVENT_KEY}`;
		}
	};
	//#endregion
	//#region js/src/bootstrap/dom/selector-engine.ts
	/**
	* --------------------------------------------------------------------------
	* Bootstrap dom/selector-engine.ts
	* Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
	* --------------------------------------------------------------------------
	*/
	var getSelector = (element) => {
		let selector = element.getAttribute("data-tblr-target") || element.getAttribute("data-bs-target");
		if (!selector || selector === "#") {
			let hrefAttribute = element.getAttribute("href");
			if (!hrefAttribute || !hrefAttribute.includes("#") && !hrefAttribute.startsWith(".")) return null;
			if (hrefAttribute.includes("#") && !hrefAttribute.startsWith("#")) hrefAttribute = `#${hrefAttribute.split("#")[1]}`;
			selector = hrefAttribute && hrefAttribute !== "#" ? hrefAttribute.trim() : null;
		}
		return selector ? selector.split(",").map((sel) => parseSelector(sel)).join(",") : null;
	};
	var SelectorEngine = {
		find(selector, element = document.documentElement) {
			return Array.from(element.querySelectorAll(selector));
		},
		findOne(selector, element = document.documentElement) {
			return element.querySelector(selector);
		},
		children(element, selector) {
			return Array.from(element.children).filter((child) => child.matches(selector));
		},
		parents(element, selector) {
			const parents = [];
			let ancestor = element.parentNode && element.parentNode.closest(selector);
			while (ancestor) {
				parents.push(ancestor);
				ancestor = ancestor.parentNode && ancestor.parentNode.closest(selector);
			}
			return parents;
		},
		prev(element, selector) {
			let previous = element.previousElementSibling;
			while (previous) {
				if (previous.matches(selector)) return [previous];
				previous = previous.previousElementSibling;
			}
			return [];
		},
		next(element, selector) {
			let next = element.nextElementSibling;
			while (next) {
				if (next.matches(selector)) return [next];
				next = next.nextElementSibling;
			}
			return [];
		},
		focusableChildren(element) {
			const focusables = [
				"a",
				"button",
				"input",
				"textarea",
				"select",
				"details",
				"[tabindex]",
				"[contenteditable=\"true\"]"
			].map((selector) => `${selector}:not([tabindex^="-"])`).join(",");
			return this.find(focusables, element).filter((el) => !isDisabled(el) && isVisible(el));
		},
		getSelectorFromElement(element) {
			const selector = getSelector(element);
			if (selector) return SelectorEngine.findOne(selector) ? selector : null;
			return null;
		},
		getElementFromSelector(element) {
			const selector = getSelector(element);
			return selector ? SelectorEngine.findOne(selector) : null;
		},
		getMultipleElementsFromSelector(element) {
			const selector = getSelector(element);
			return selector ? SelectorEngine.find(selector) : [];
		}
	};
	//#endregion
	//#region js/src/bootstrap/util/component-functions.ts
	/**
	* Creates the component for every element that matches on page load. One
	* element with a broken config must not stop the rest of the bundle, so the
	* error is logged and the loop goes on.
	*/
	var initAll = (selector, Plugin, filter = null) => {
		for (const element of SelectorEngine.find(selector)) {
			if (filter && !filter(element)) continue;
			try {
				Plugin.getOrCreateInstance(element);
			} catch (error) {
				console.error(error);
			}
		}
	};
	//#endregion
	//#region js/src/map.ts
	/**
	* --------------------------------------------------------------------------
	* Tabler map.ts
	* Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
	* --------------------------------------------------------------------------
	*/
	/**
	* Constants
	*/
	var NAME = "map";
	var EVENT_KEY = `.${`bs.${NAME}`}`;
	var EVENT_LOAD = `load${EVENT_KEY}`;
	var EVENT_CLICK_DATA_API = `click${EVENT_KEY}.data-api`;
	var SELECTOR_DATA_TOGGLE = "[data-bs-toggle=\"map\"], [data-tblr-toggle=\"map\"]";
	var SELECTOR_MARKER = ":scope > [data-bs-lng], :scope > [data-tblr-lng]";
	var SELECTOR_THEME = "[data-bs-theme]";
	var SELECTOR_ACTION = "[data-bs-map-action], [data-tblr-map-action]";
	var CLASS_NAME_CONTROLS = "map-controls";
	var CLASS_NAME_CONTROL = "btn btn-sm btn-icon";
	var CLASS_NAME_CONTROL_GROUP = "btn-group-vertical";
	var LOCATE_ZOOM = 14;
	var STYLE_URL = "https://tiles.openfreemap.org/styles/";
	var POPUP_OFFSET = 16;
	var POPUP_OFFSET_PIN = 40;
	var SOURCE_DATA = "tabler-data";
	var SOURCE_ROUTE = "tabler-route";
	var SOURCE_ROUTE_REST = "tabler-route-rest";
	var Default = {
		library: "../libs/maplibre-gl/dist/maplibre-gl.mjs",
		center: [0, 0],
		zoom: 1,
		mapStyle: "positron",
		mapStyleDark: "dark",
		mapTheme: "auto",
		palette: true,
		controls: false,
		labels: {},
		globe: false,
		route: null,
		routeProgress: null,
		geojson: null,
		layerColor: "--tblr-primary",
		mapOptions: {}
	};
	var DefaultType = {
		library: "(null|string)",
		center: "(array|string)",
		zoom: "number",
		mapStyle: "string",
		mapStyleDark: "(null|string)",
		mapTheme: "string",
		palette: "boolean",
		controls: "(boolean|string)",
		labels: "object",
		globe: "boolean",
		route: "(null|array)",
		routeProgress: "(null|number)",
		geojson: "(null|object|string)",
		layerColor: "string",
		mapOptions: "object"
	};
	var Controls = {
		zoom: ["zoom-in", "zoom-out"],
		north: ["north"],
		locate: ["locate"],
		fullscreen: ["fullscreen"]
	};
	var Labels = {
		"zoom-in": "Zoom in",
		"zoom-out": "Zoom out",
		"north": "Reset north",
		"locate": "Show my location",
		"fullscreen": "Full screen"
	};
	var WHITE_HALO = "rgba(255, 255, 255, 0.8)";
	var BLACK_HALO = "rgba(0, 0, 0, 0.7)";
	var Palette = {
		light: [
			[/^background$/, { "background-color": "#fafaf8" }],
			[/^(park|landcover_wood)$/, { "fill-color": "rgba(234, 241, 233, 0.6)" }],
			[/^water$/, { "fill-color": "#d4dadc" }],
			[/^waterway$/, { "line-color": "#d1dbdf" }],
			[/^(landcover_(ice_shelf|glacier)|road_area_pier)$/, { "fill-color": "#fafaf8" }],
			[/^landuse_residential$/, { "fill-color": "rgba(237, 237, 237, 0.5)" }],
			[/^building$/, {
				"fill-color": "#ededed",
				"fill-outline-color": "#dfdfdf"
			}],
			[/^(road_pier|railway.*dashline)$/, { "line-color": "#fafaf8" }],
			[/^highway_path$/, { "line-color": "#ededed" }],
			[/^highway_minor$|_subtle$/, { "line-color": "#e6e6e6" }],
			[/_casing$/, { "line-color": "#dddddd" }],
			[/^tunnel_.*_inner$/, { "line-color": "#f3f3f3" }],
			[/^highway_.*_inner$/, { "line-color": "#ffffff" }],
			[/^railway/, { "line-color": "#e3e3e3" }],
			[/^boundary_/, { "line-color": "#e3cdd0" }],
			[/^waterway_line_label$/, { "text-color": "#7a96a0" }],
			[/^water_name/, { "text-color": "#abb6be" }],
			[/^highway-name/, {
				"text-color": "#9aa5ad",
				"text-halo-color": WHITE_HALO
			}],
			[/^(airport|label_country|label_state)/, {
				"text-color": "#8a99a4",
				"text-halo-color": WHITE_HALO
			}],
			[/^label_/, {
				"text-color": "#697b89",
				"text-halo-color": WHITE_HALO
			}]
		],
		dark: [
			[/^background$/, { "background-color": "#0e0e0e" }],
			[/^water$/, { "fill-color": "#2c353c" }],
			[/^waterway$/, { "line-color": "rgb(63, 90, 109)" }],
			[/^(landcover_(ice_shelf|glacier)|road_area_pier)$/, { "fill-color": "#0e0e0e" }],
			[/^landuse_residential$/, { "fill-color": "rgba(0, 0, 0, 0.5)" }],
			[/^(landcover_wood|landuse_park)$/, { "fill-color": "#121412" }],
			[/^building$/, { "fill-color": "#1a1a1a" }],
			[/^(road_pier|railway.*dashline)$/, { "line-color": "#0e0e0e" }],
			[/^highway_path$|_casing$/, { "line-color": "#232323" }],
			[/^highway_minor$/, { "line-color": "rgba(65, 71, 88, 0.7)" }],
			[/^highway_major_inner$/, { "line-color": "rgb(65, 71, 88)" }],
			[/^highway_motorway_inner$/, { "line-color": "rgb(83, 86, 102)" }],
			[/_subtle$/, { "line-color": "rgba(65, 71, 88, 0.6)" }],
			[/^railway/, { "line-color": "#262626" }],
			[/^boundary_/, { "line-color": "rgb(96, 96, 96)" }],
			[/^water_name$/, {
				"text-color": "rgb(109, 123, 129)",
				"text-halo-color": BLACK_HALO
			}],
			[/^highway_name/, {
				"text-color": "rgb(120, 126, 137)",
				"text-halo-color": BLACK_HALO
			}],
			[/^place_(country|state)/, { "text-color": "rgb(118, 126, 137)" }],
			[/^place_/, { "text-color": "rgb(204, 208, 228)" }]
		]
	};
	/**
	* Class definition
	*
	* Wraps MapLibre GL JS (https://maplibre.org). It uses `window.maplibregl`
	* when a page has loaded the library itself, and otherwise imports the module
	* the `library` option points at, so the map is created a moment later.
	*/
	var MapView = class MapView extends BaseComponent {
		constructor(element, config) {
			super(element, config);
			this._map = null;
			this._markers = [];
			this._themeObserver = null;
			this._readyCallbacks = [];
			this._styleCallbacks = [];
			if (!this._element) return;
			const { library } = this._config;
			if (window.maplibregl) this._initMap(window.maplibregl);
			else if (library) import(
				/* @vite-ignore */
				library
).then((module) => {
				window.maplibregl ??= module;
				if (this._element) this._initMap(window.maplibregl);
			}, () => console.warn(`Tabler map: could not load MapLibre GL JS from "${library}". Set window.maplibregl or the "library" option.`));
		}
		static get Default() {
			return Default;
		}
		static get DefaultType() {
			return DefaultType;
		}
		static get NAME() {
			return NAME;
		}
		/** The MapLibre GL JS map, for everything the component does not expose. */
		get map() {
			return this._map;
		}
		/** The markers created from the child elements, in document order. */
		get markers() {
			return this._markers;
		}
		/**
		* Turns a CSS color, or a custom property such as `--tblr-primary`, into a
		* plain `rgb()` color. MapLibre draws layers on a canvas, so it accepts
		* neither CSS variables nor the `oklch()` values Tabler colors are written in.
		*/
		static color(value, element = document.body) {
			const context = document.createElement("canvas").getContext("2d");
			const probe = element.appendChild(document.createElement("span"));
			probe.style.color = value.startsWith("--") ? `var(${value})` : value;
			const { color } = getComputedStyle(probe);
			probe.remove();
			if (!context) return color;
			context.fillStyle = color;
			context.fillRect(0, 0, 1, 1);
			const [red, green, blue] = context.getImageData(0, 0, 1, 1).data;
			return `rgb(${red}, ${green}, ${blue})`;
		}
		/** Runs the callback once the MapLibre map exists: right away, or after the library has loaded. */
		ready(callback) {
			if (this._map) callback(this._map);
			else this._readyCallbacks.push(callback);
		}
		/**
		* Runs the callback each time a map style loads, and right away if one already has.
		* Layers are part of the style, so this is the place to add them.
		*/
		onStyle(callback) {
			this._styleCallbacks.push(callback);
			if (this._map?.isStyleLoaded()) callback(this._map);
		}
		zoomIn() {
			this._map?.zoomIn();
		}
		zoomOut() {
			this._map?.zoomOut();
		}
		/** Turns the map back to north up, with no tilt. */
		resetNorth() {
			this._map?.resetNorthPitch();
		}
		/** Moves the map to the position of the device. The browser asks for permission first. */
		locate() {
			navigator.geolocation?.getCurrentPosition(({ coords }) => {
				this._map?.flyTo({
					center: [coords.longitude, coords.latitude],
					zoom: Math.max(this._map.getZoom(), LOCATE_ZOOM)
				});
			});
		}
		toggleFullscreen() {
			if (document.fullscreenElement) document.exitFullscreen();
			else this._element.requestFullscreen();
		}
		dispose() {
			this._themeObserver?.disconnect();
			this._themeObserver = null;
			for (const marker of this._markers) marker.remove();
			this._markers = [];
			this._readyCallbacks = [];
			this._styleCallbacks = [];
			this._map?.remove();
			this._map = null;
			super.dispose();
		}
		_initMap(library) {
			const { center, zoom, controls, globe, mapOptions } = this._config;
			const markerElements = [...this._element.querySelectorAll(SELECTOR_MARKER)];
			const map = new library.Map({
				container: this._element,
				style: this._getStyle(),
				center: this._parseLngLat(center),
				zoom,
				...mapOptions
			});
			this._map = map;
			map.on("style.load", () => {
				this._applyPalette();
				this._addLayers();
				if (globe) map.setProjection({ type: "globe" });
				for (const callback of this._styleCallbacks) callback(map);
			});
			map.on("load", () => {
				EventHandler.trigger(this._element, EVENT_LOAD);
			});
			if (controls) this._createControls(controls);
			this._markers = markerElements.map((element) => this._createMarker(library, map, element));
			this._setupThemeObserver();
			for (const callback of this._readyCallbacks.splice(0)) callback(map);
		}
		_createControls(controls) {
			const container = document.createElement("div");
			container.className = CLASS_NAME_CONTROLS;
			for (const name of controls === true ? ["zoom"] : controls.split(",")) {
				const buttons = Controls[name.trim()] ?? [];
				const group = buttons.length > 1 ? container.appendChild(document.createElement("div")) : container;
				if (group !== container) group.className = CLASS_NAME_CONTROL_GROUP;
				for (const action of buttons) {
					const button = group.appendChild(document.createElement("button"));
					button.type = "button";
					button.className = CLASS_NAME_CONTROL;
					button.setAttribute("data-bs-map-action", action);
					button.setAttribute("aria-label", this._config.labels[action] ?? Labels[action]);
				}
			}
			this._element.append(container);
		}
		_createMarker(library, map, element) {
			const { lng, lat, anchor = "center", draggable = false, popup: popupText, popupOpen = false } = Manipulator.getDataAttributes(element);
			const template = element.querySelector(":scope > template");
			const marker = new library.Marker({
				element,
				anchor,
				draggable
			}).setLngLat([Number(lng), Number(lat)]);
			const text = typeof popupText === "object" ? "" : String(popupText ?? "");
			if (template || text) {
				const popup = new library.Popup({
					offset: anchor === "bottom" ? POPUP_OFFSET_PIN : POPUP_OFFSET,
					className: template?.className ?? "",
					closeButton: Boolean(template && Manipulator.getDataAttribute(template, "close-button")),
					maxWidth: "none",
					focusAfterOpen: !popupOpen
				});
				if (template) {
					popup.setDOMContent(template.content);
					template.remove();
				} else popup.setText(text);
				marker.setPopup(popup);
			}
			marker.addTo(map);
			if (popupOpen && (template || text)) marker.togglePopup();
			return marker;
		}
		_parseLngLat(value) {
			const [lng = 0, lat = 0] = (typeof value === "string" ? value.split(",") : value).map(Number);
			return [lng, lat];
		}
		_isDark() {
			const { mapTheme } = this._config;
			if (mapTheme !== "auto") return mapTheme === "dark";
			return this._element.closest(SELECTOR_THEME)?.getAttribute("data-bs-theme") === "dark";
		}
		_getStyleName() {
			const { mapStyle, mapStyleDark } = this._config;
			return this._isDark() && mapStyleDark ? mapStyleDark : mapStyle;
		}
		_getStyle() {
			const style = this._getStyleName();
			return /^[\w-]+$/.test(style) ? `${STYLE_URL}${style}` : style;
		}
		_applyPalette() {
			const style = this._getStyleName();
			const rules = this._config.palette && (style === "positron" ? Palette.light : style === "dark" ? Palette.dark : null);
			if (!rules || !this._map) return;
			for (const { id } of this._map.getStyle().layers) {
				const rule = rules.find(([pattern]) => pattern.test(id));
				for (const [property, value] of Object.entries(rule?.[1] ?? {})) this._map.setPaintProperty(id, property, value);
			}
		}
		_addLayers() {
			const { route, routeProgress, geojson, layerColor } = this._config;
			const map = this._map;
			if (!map || !route && !geojson) return;
			const color = MapView.color(layerColor, this._element);
			const layout = {
				"line-cap": "round",
				"line-join": "round"
			};
			if (geojson) {
				map.addSource(SOURCE_DATA, {
					type: "geojson",
					data: geojson
				});
				map.addLayer({
					id: `${SOURCE_DATA}-fill`,
					type: "fill",
					source: SOURCE_DATA,
					filter: [
						"==",
						"$type",
						"Polygon"
					],
					paint: {
						"fill-color": color,
						"fill-opacity": .16
					}
				});
				map.addLayer({
					id: `${SOURCE_DATA}-line`,
					type: "line",
					source: SOURCE_DATA,
					filter: [
						"!=",
						"$type",
						"Point"
					],
					layout,
					paint: {
						"line-color": color,
						"line-width": 2
					}
				});
				map.addLayer({
					id: `${SOURCE_DATA}-point`,
					type: "circle",
					source: SOURCE_DATA,
					filter: [
						"==",
						"$type",
						"Point"
					],
					paint: {
						"circle-color": color,
						"circle-radius": 5,
						"circle-stroke-width": 2,
						"circle-stroke-color": MapView.color("--tblr-bg-surface", this._element)
					}
				});
			}
			if (route) {
				const line = (coordinates) => ({
					type: "geojson",
					data: {
						type: "Feature",
						geometry: {
							type: "LineString",
							coordinates
						}
					}
				});
				const reached = routeProgress === null ? route.length : routeProgress + 1;
				if (reached < route.length) {
					map.addSource(SOURCE_ROUTE_REST, line(route.slice(reached - 1)));
					map.addLayer({
						id: SOURCE_ROUTE_REST,
						type: "line",
						source: SOURCE_ROUTE_REST,
						paint: {
							"line-color": color,
							"line-width": 3,
							"line-opacity": .6,
							"line-dasharray": [1, 2]
						}
					});
				}
				map.addSource(SOURCE_ROUTE, line(route.slice(0, reached)));
				map.addLayer({
					id: SOURCE_ROUTE,
					type: "line",
					source: SOURCE_ROUTE,
					layout,
					paint: {
						"line-color": color,
						"line-width": 3,
						"line-opacity": routeProgress === null ? .8 : 1
					}
				});
			}
		}
		_setupThemeObserver() {
			const ancestor = this._element.closest(SELECTOR_THEME) ?? document.documentElement;
			if (this._config.mapTheme !== "auto") return;
			this._themeObserver = new MutationObserver(() => {
				this._map?.setStyle(this._getStyle());
			});
			this._themeObserver.observe(ancestor, {
				attributes: true,
				attributeFilter: ["data-bs-theme"]
			});
		}
	};
	/**
	* Data API implementation
	*/
	initAll(SELECTOR_DATA_TOGGLE, MapView);
	EventHandler.on(document, EVENT_CLICK_DATA_API, SELECTOR_ACTION, function() {
		const element = SelectorEngine.getElementFromSelector(this) ?? this.closest(SELECTOR_DATA_TOGGLE);
		const view = element && MapView.getInstance(element);
		({
			"zoom-in": () => view?.zoomIn(),
			"zoom-out": () => view?.zoomOut(),
			"north": () => view?.resetNorth(),
			"locate": () => view?.locate(),
			"fullscreen": () => view?.toggleFullscreen()
		})[this.getAttribute("data-bs-map-action") ?? this.getAttribute("data-tblr-map-action") ?? ""]?.();
	});
	//#endregion
	exports.MapView = MapView;
});

//# sourceMappingURL=tabler-map.js.map