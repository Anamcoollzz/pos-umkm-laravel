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
	//#region js/src/vector-map.ts
	/**
	* --------------------------------------------------------------------------
	* Tabler vector-map.ts
	* Licensed under MIT (https://github.com/tabler/tabler/blob/dev/LICENSE)
	* --------------------------------------------------------------------------
	*/
	/**
	* Constants
	*/
	var NAME = "vector-map";
	var EVENT_KEY = `.${`bs.${NAME}`}`;
	var EVENT_RENDERED = `rendered${EVENT_KEY}`;
	var EVENT_UPDATED = `updated${EVENT_KEY}`;
	var EVENT_REGION_CLICK = `regionclick${EVENT_KEY}`;
	var EVENT_MARKER_CLICK = `markerclick${EVENT_KEY}`;
	var EVENT_SELECTED = `selected${EVENT_KEY}`;
	var EVENT_POINTERMOVE = `pointermove${EVENT_KEY}`;
	var EVENT_POINTERLEAVE = `pointerleave${EVENT_KEY}`;
	var EVENT_POINTERDOWN = `pointerdown${EVENT_KEY}`;
	var EVENT_POINTERUP = `pointerup${EVENT_KEY}`;
	var EVENT_POINTERCANCEL = `pointercancel${EVENT_KEY}`;
	var EVENT_DBLCLICK = `dblclick${EVENT_KEY}`;
	var EVENT_CLICK = `click${EVENT_KEY}`;
	var CLASS_NAME_SVG = "vector-map-svg";
	var CLASS_NAME_REGION = "vector-map-region";
	var CLASS_NAME_POINT = "vector-map-region-point";
	var CLASS_NAME_POINT_HALO = "vector-map-region-point-halo";
	var CLASS_NAME_POINT_DOT = "vector-map-region-point-dot";
	var CLASS_NAME_LINE = "vector-map-line";
	var CLASS_NAME_MARKER = "vector-map-marker";
	var CLASS_NAME_MARKER_HALO = "vector-map-marker-halo";
	var CLASS_NAME_MARKER_DOT = "vector-map-marker-dot";
	var CLASS_NAME_TOOLTIP = "vector-map-tooltip";
	var CLASS_NAME_COLORS = "vector-map-colors";
	var CLASS_NAME_LEGEND = "vector-map-legend";
	var CLASS_NAME_LEGEND_LABEL = "vector-map-legend-label";
	var CLASS_NAME_LEGEND_SCALE = "vector-map-legend-scale";
	var CLASS_NAME_LEGEND_STEP = "vector-map-legend-step";
	var CLASS_NAME_SELECTABLE = "vector-map-selectable";
	var CLASS_NAME_SELECTED = "vector-map-region-selected";
	var CLASS_NAME_ZOOMABLE = "vector-map-zoomable";
	var CLASS_NAME_DRAGGING = "vector-map-dragging";
	var CLASS_NAME_CONTROLS = "vector-map-controls";
	var CLASS_NAME_CONTROL_GROUP = "btn-group-vertical";
	var CLASS_NAME_CONTROL = "btn btn-sm btn-icon";
	var ATTRIBUTE_REGION = "data-region";
	var ATTRIBUTE_VALUE = "data-value";
	var ATTRIBUTE_MARKER = "data-marker";
	var ATTRIBUTE_ACTION = "data-bs-vector-map-action";
	var SELECTOR_TOOLTIP_TARGET = `.${CLASS_NAME_REGION}, .${CLASS_NAME_MARKER}`;
	var SELECTOR_ACTION = `[${ATTRIBUTE_ACTION}]`;
	var SELECTOR_OVER_SHAPES = `.${CLASS_NAME_POINT}, .${CLASS_NAME_LINE}, .${CLASS_NAME_MARKER}`;
	var SELECT_NONE = "none";
	var SELECT_MULTIPLE = "multiple";
	var DRAG_THRESHOLD = 4;
	var ACTION_ZOOM_IN = "zoom-in";
	var ACTION_ZOOM_OUT = "zoom-out";
	var ZOOM_STEP = 2;
	var ZOOM_DURATION = 200;
	var WHEEL_SPEED = .002;
	var WHEEL_SPEED_PINCH = .01;
	var ICON_ZOOM_IN = "M12 5v14M5 12h14";
	var ICON_ZOOM_OUT = "M5 12h14";
	var LINE_CURVE = .2;
	var RADIANS = Math.PI / 180;
	var SELECTOR_DATA_TOGGLE = `[data-bs-toggle="${NAME}"], [data-tblr-toggle="${NAME}"]`;
	var CSS_VAR_VALUE = "--tblr-vector-map-value";
	var CSS_VAR_COLOR = "--tblr-vector-map-color-";
	var CSS_VAR_COLORS = "--tblr-vector-map-colors";
	var COLORS_MAX = 5;
	var LEGEND_STEPS = 24;
	var SVG_NS = "http://www.w3.org/2000/svg";
	var Default = {
		map: "world",
		values: {},
		min: null,
		max: null,
		colors: [],
		markers: [],
		lines: [],
		tooltip: true,
		legend: false,
		select: "none",
		selected: [],
		zoom: false,
		zoomMax: 8,
		zoomOnScroll: true,
		zoomInLabel: "Zoom in",
		zoomOutLabel: "Zoom out",
		label: null
	};
	var DefaultType = {
		map: "(string|object)",
		values: "object",
		min: "(number|null)",
		max: "(number|null)",
		colors: "array",
		markers: "array",
		lines: "array",
		tooltip: "(boolean|function)",
		legend: "(boolean|function)",
		select: "string",
		selected: "array",
		zoom: "boolean",
		zoomMax: "number",
		zoomOnScroll: "boolean",
		zoomInLabel: "string",
		zoomOutLabel: "string",
		label: "(string|null)"
	};
	/**
	* Helpers
	*/
	var svgEl = (tag) => document.createElementNS(SVG_NS, tag);
	var toValues = (input) => {
		const values = {};
		if (typeof input !== "object" || input === null) return values;
		for (const [code, value] of Object.entries(input)) if (typeof value === "number" && Number.isFinite(value)) values[code] = value;
		return values;
	};
	var isRecord = (input) => typeof input === "object" && input !== null;
	var toMarkers = (input) => {
		const markers = [];
		for (const item of Array.isArray(input) ? input : []) if (isRecord(item) && typeof item.lat === "number" && typeof item.lng === "number" && Number.isFinite(item.lat) && Number.isFinite(item.lng)) markers.push({
			lat: item.lat,
			lng: item.lng,
			...typeof item.name === "string" ? { name: item.name } : {}
		});
		return markers;
	};
	var toColors = (input) => {
		const colors = (Array.isArray(input) ? input : []).filter((color) => typeof color === "string" && color.trim() !== "");
		return colors.length < 2 ? [] : colors.slice(0, COLORS_MAX);
	};
	var toLines = (input) => {
		const lines = [];
		for (const item of Array.isArray(input) ? input : []) if (isRecord(item) && typeof item.from === "string" && typeof item.to === "string") lines.push({
			from: item.from,
			to: item.to
		});
		return lines;
	};
	var project = ({ projection }, lng, lat) => {
		const { scale, translate } = projection;
		const y = 1.25 * Math.log(Math.tan(Math.PI / 4 + .4 * lat * RADIANS));
		return [lng * RADIANS * scale + translate[0], translate[1] - y * scale];
	};
	var round = (value) => Math.round(value * 10) / 10;
	var clamp = (value, min, max) => Math.min(Math.max(value, min), max);
	var reducedMotion = () => window.matchMedia("(prefers-reduced-motion: reduce)").matches;
	/**
	* Class definition
	*
	* A map drawn as inline SVG from a map file, with regions shaded by value,
	* markers placed by their coordinates and lines between them:
	*
	*   <div class="vector-map" data-bs-toggle="vector-map" data-bs-map="world" data-bs-values='{"PL": 80, "DE": 45}'></div>
	*
	* The shapes come projected from the map file (`dist/js/maps/world.js`), so
	* only the markers are projected here. Colours and sizes come from the
	* `--tblr-vector-map-*` custom properties.
	*
	* With `data-bs-zoom="true"` the map can be magnified with its buttons, the
	* wheel, a double click or a pinch, and dragged around.
	*/
	var VectorMap = class VectorMap extends BaseComponent {
		static {
			this.maps = {};
		}
		constructor(element, config) {
			super(element, config);
			this._userConfig = {};
			this._map = null;
			this._tooltip = null;
			this._view = {
				x: 0,
				y: 0,
				scale: 1
			};
			this._frame = 0;
			this._pointers = /* @__PURE__ */ new Map();
			this._dragged = false;
			this._selected = null;
			this._onWheel = (event) => {
				const { zoom, zoomOnScroll } = this._config;
				if (!zoom || !zoomOnScroll || !this._isOnMap(event)) return;
				event.preventDefault();
				this._hideTooltip();
				const speed = event.ctrlKey ? WHEEL_SPEED_PINCH : WHEEL_SPEED;
				this._zoomBy(Math.exp(-event.deltaY * speed), this._toMapPoint(event.clientX, event.clientY));
			};
			if (!this._element) return;
			this._userConfig = { ...config };
			this.render();
			EventHandler.on(this._element, EVENT_POINTERMOVE, (event) => {
				this._onPointerMove(event);
			});
			EventHandler.on(this._element, EVENT_POINTERLEAVE, () => {
				this._hideTooltip();
			});
			EventHandler.on(this._element, EVENT_POINTERDOWN, (event) => {
				this._onPointerDown(event);
			});
			for (const eventName of [EVENT_POINTERUP, EVENT_POINTERCANCEL]) EventHandler.on(this._element, eventName, (event) => {
				this._onPointerUp(event);
			});
			this._element.addEventListener("wheel", this._onWheel, { passive: false });
			EventHandler.on(this._element, EVENT_CLICK, (event) => {
				this._onClick(event);
			});
			EventHandler.on(this._element, EVENT_DBLCLICK, (event) => {
				if (this._config.zoom && this._isOnMap(event)) this._zoomBy(ZOOM_STEP, this._toMapPoint(event.clientX, event.clientY), true);
			});
			EventHandler.on(this._element, EVENT_CLICK, SELECTOR_ACTION, (event) => {
				if (event.target.closest(SELECTOR_ACTION)?.getAttribute(ATTRIBUTE_ACTION) === ACTION_ZOOM_IN) this.zoomIn();
				else this.zoomOut();
			});
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
		static addMap(name, data) {
			VectorMap.maps[name] = data;
		}
		render() {
			this._config = this._getConfig(this._userConfig);
			const map = this._map = this._getMap();
			const { label } = this._config;
			const svg = svgEl("svg");
			svg.setAttribute("class", CLASS_NAME_SVG);
			svg.setAttribute("viewBox", `0 0 ${map.width} ${map.height}`);
			if (label) {
				svg.setAttribute("role", "img");
				svg.setAttribute("aria-label", label);
			} else svg.setAttribute("aria-hidden", "true");
			const regions = Object.entries(map.regions);
			for (const [code, region] of [...regions.filter(([, { point }]) => !point), ...regions.filter(([, { point }]) => point)]) svg.append(region.point ? this._createPoint(code, region) : this._createShape(code, region));
			this._renderMarkers(svg, map);
			cancelAnimationFrame(this._frame);
			this._pointers.clear();
			this._hideTooltip();
			this._getSvg()?.remove();
			this._element.append(svg);
			this._renderControls();
			this._applyColors();
			this._applySelected();
			this._setView({
				x: 0,
				y: 0,
				scale: 1
			});
			this._applyValues();
			EventHandler.trigger(this._element, EVENT_RENDERED);
		}
		update(values) {
			this._userConfig.values = values;
			this._config = this._getConfig(this._userConfig);
			this._applyValues();
			EventHandler.trigger(this._element, EVENT_UPDATED);
		}
		getSelected() {
			return [...this._selected ?? []];
		}
		setSelected(codes) {
			this._selected = this._toSelected(codes);
			this._applySelected();
			EventHandler.trigger(this._element, EVENT_SELECTED, { selected: this.getSelected() });
		}
		zoomIn() {
			this._zoomBy(ZOOM_STEP, null, true);
		}
		zoomOut() {
			this._zoomBy(1 / ZOOM_STEP, null, true);
		}
		reset() {
			this._animateTo({
				x: 0,
				y: 0,
				scale: 1
			});
		}
		dispose() {
			cancelAnimationFrame(this._frame);
			this._getSvg()?.remove();
			this._getControls()?.remove();
			this._getLegend()?.remove();
			this._tooltip?.remove();
			this._config.colors = [];
			this._applyColors();
			this._element.classList.remove(CLASS_NAME_ZOOMABLE, CLASS_NAME_DRAGGING, CLASS_NAME_SELECTABLE);
			this._element.removeEventListener("wheel", this._onWheel);
			super.dispose();
		}
		_configAfterMerge(config) {
			config.values = toValues(config.values);
			config.colors = toColors(config.colors);
			config.markers = toMarkers(config.markers);
			config.lines = toLines(config.lines);
			return config;
		}
		_getSvg() {
			return this._element.querySelector(`.${CLASS_NAME_SVG}`);
		}
		_getMap() {
			const { map } = this._config;
			if (typeof map !== "string") return map;
			const data = VectorMap.maps[map] ?? window.tablerVectorMaps?.[map];
			if (!data) throw new TypeError(`${NAME.toUpperCase()}: Map "${map}" is not loaded. Add its file from "dist/js/maps/" or call VectorMap.addMap().`);
			return data;
		}
		_createShape(code, region) {
			const path = svgEl("path");
			path.setAttribute("class", CLASS_NAME_REGION);
			path.setAttribute(ATTRIBUTE_REGION, code);
			path.setAttribute("d", region.path);
			return path;
		}
		_createPoint(code, region) {
			const group = svgEl("g");
			group.setAttribute("class", `${CLASS_NAME_REGION} ${CLASS_NAME_POINT}`);
			group.setAttribute(ATTRIBUTE_REGION, code);
			for (const className of [CLASS_NAME_POINT_HALO, CLASS_NAME_POINT_DOT]) {
				const path = svgEl("path");
				path.setAttribute("class", className);
				path.setAttribute("d", region.path);
				group.append(path);
			}
			return group;
		}
		_renderMarkers(svg, map) {
			const { markers, lines } = this._config;
			const points = markers.map((marker) => project(map, marker.lng, marker.lat));
			const pointOf = (name) => points[markers.findIndex((marker) => marker.name === name)];
			for (const line of lines) {
				const from = pointOf(line.from);
				const to = pointOf(line.to);
				if (!from || !to) continue;
				const controlX = (from[0] + to[0]) / 2 + (to[1] - from[1]) * LINE_CURVE;
				const controlY = (from[1] + to[1]) / 2 - (to[0] - from[0]) * LINE_CURVE;
				const path = svgEl("path");
				path.setAttribute("class", CLASS_NAME_LINE);
				path.setAttribute("d", `M${round(from[0])} ${round(from[1])}Q${round(controlX)} ${round(controlY)} ${round(to[0])} ${round(to[1])}`);
				svg.append(path);
			}
			for (const [index, marker] of markers.entries()) {
				const d = `M${round(points[index][0])} ${round(points[index][1])}h0`;
				const group = svgEl("g");
				group.setAttribute("class", CLASS_NAME_MARKER);
				group.setAttribute(ATTRIBUTE_MARKER, marker.name ?? "");
				for (const className of [CLASS_NAME_MARKER_HALO, CLASS_NAME_MARKER_DOT]) {
					const path = svgEl("path");
					path.setAttribute("class", className);
					path.setAttribute("d", d);
					group.append(path);
				}
				svg.append(group);
			}
		}
		_tooltipText(target) {
			const { tooltip, values } = this._config;
			if (!tooltip) return "";
			let item;
			const code = target.getAttribute(ATTRIBUTE_REGION);
			if (code === null) item = {
				type: "marker",
				name: target.getAttribute(ATTRIBUTE_MARKER) ?? ""
			};
			else {
				const value = values[code];
				item = {
					type: "region",
					code,
					name: this._map?.regions[code]?.name ?? code,
					...value === void 0 ? {} : { value }
				};
			}
			if (typeof tooltip === "function") return tooltip(item);
			return item.type === "region" && item.value !== void 0 ? `${item.name}: ${item.value}` : item.name;
		}
		_getControls() {
			return this._element.querySelector(`.${CLASS_NAME_CONTROLS}`);
		}
		_renderControls() {
			const { zoom, zoomInLabel, zoomOutLabel } = this._config;
			this._getControls()?.remove();
			this._element.classList.toggle(CLASS_NAME_ZOOMABLE, zoom);
			if (!zoom) return;
			const controls = document.createElement("div");
			controls.className = `${CLASS_NAME_CONTROLS} ${CLASS_NAME_CONTROL_GROUP}`;
			for (const [action, label, icon] of [[
				ACTION_ZOOM_IN,
				zoomInLabel,
				ICON_ZOOM_IN
			], [
				ACTION_ZOOM_OUT,
				zoomOutLabel,
				ICON_ZOOM_OUT
			]]) {
				const button = document.createElement("button");
				button.type = "button";
				button.className = CLASS_NAME_CONTROL;
				button.setAttribute(ATTRIBUTE_ACTION, action);
				button.setAttribute("aria-label", label);
				const svg = svgEl("svg");
				svg.setAttribute("class", "icon");
				svg.setAttribute("viewBox", "0 0 24 24");
				svg.setAttribute("aria-hidden", "true");
				const path = svgEl("path");
				path.setAttribute("d", icon);
				svg.append(path);
				button.append(svg);
				controls.append(button);
			}
			this._element.append(controls);
		}
		_setView({ x, y, scale }) {
			const svg = this._getSvg();
			if (!this._map || !svg) return;
			const { width, height } = this._map;
			const max = Math.max(this._config.zoomMax, 1);
			scale = clamp(scale, 1, max);
			const viewWidth = width / scale;
			const viewHeight = height / scale;
			x = clamp(x, 0, width - viewWidth);
			y = clamp(y, 0, height - viewHeight);
			this._view = {
				x,
				y,
				scale
			};
			svg.setAttribute("viewBox", `${round(x)} ${round(y)} ${round(viewWidth)} ${round(viewHeight)}`);
			for (const button of this._element.querySelectorAll(SELECTOR_ACTION)) button.disabled = button.getAttribute(ATTRIBUTE_ACTION) === ACTION_ZOOM_IN ? scale >= max : scale <= 1;
		}
		_animateTo(target) {
			cancelAnimationFrame(this._frame);
			if (!this._map || reducedMotion()) {
				this._setView(target);
				return;
			}
			const { width } = this._map;
			const from = this._view;
			const start = performance.now();
			const step = (now) => {
				const t = Math.min((now - start) / ZOOM_DURATION, 1);
				const eased = 1 - (1 - t) ** 3;
				const viewWidth = width / from.scale + (width / target.scale - width / from.scale) * eased;
				this._setView({
					x: from.x + (target.x - from.x) * eased,
					y: from.y + (target.y - from.y) * eased,
					scale: width / viewWidth
				});
				if (t < 1) this._frame = requestAnimationFrame(step);
			};
			this._frame = requestAnimationFrame(step);
		}
		_zoomBy(factor, anchor = null, animate = false) {
			if (!this._map) return;
			const { width, height } = this._map;
			const { x, y, scale } = this._view;
			const next = clamp(scale * factor, 1, Math.max(this._config.zoomMax, 1));
			const [anchorX, anchorY] = anchor ?? [x + width / scale / 2, y + height / scale / 2];
			const target = {
				x: anchorX - (anchorX - x) * scale / next,
				y: anchorY - (anchorY - y) * scale / next,
				scale: next
			};
			if (animate) this._animateTo(target);
			else {
				cancelAnimationFrame(this._frame);
				this._setView(target);
			}
		}
		_toMapPoint(clientX, clientY) {
			const matrix = this._getSvg()?.getScreenCTM();
			if (!matrix) return [0, 0];
			const point = new DOMPoint(clientX, clientY).matrixTransform(matrix.inverse());
			return [point.x, point.y];
		}
		_isOnMap(event) {
			return event.target instanceof Element && event.target.closest(`.${CLASS_NAME_SVG}`) !== null;
		}
		_onPointerDown(event) {
			if (!this._config.zoom || !this._isOnMap(event) || event.pointerType === "mouse" && event.button !== 0) return;
			if (this._pointers.size === 0) this._dragged = false;
			this._pointers.set(event.pointerId, [event.clientX, event.clientY]);
			cancelAnimationFrame(this._frame);
		}
		_onPointerUp(event) {
			this._pointers.delete(event.pointerId);
			if (this._pointers.size === 0) this._element.classList.remove(CLASS_NAME_DRAGGING);
		}
		_drag(event) {
			const previous = this._pointers.get(event.pointerId);
			const matrix = this._getSvg()?.getScreenCTM();
			if (!previous || !matrix) return;
			const current = [event.clientX, event.clientY];
			if (!this._dragged) {
				if (this._pointers.size === 1 && Math.hypot(current[0] - previous[0], current[1] - previous[1]) < DRAG_THRESHOLD) return;
				this._dragged = true;
				try {
					this._getSvg()?.setPointerCapture(event.pointerId);
				} catch {}
			}
			this._pointers.set(event.pointerId, current);
			this._element.classList.add(CLASS_NAME_DRAGGING);
			this._hideTooltip();
			if (this._pointers.size === 1) {
				const { x, y, scale } = this._view;
				this._setView({
					x: x - (current[0] - previous[0]) / matrix.a,
					y: y - (current[1] - previous[1]) / matrix.d,
					scale
				});
				return;
			}
			const other = [...this._pointers].find(([id]) => id !== event.pointerId)?.[1];
			if (!other) return;
			const before = Math.hypot(previous[0] - other[0], previous[1] - other[1]);
			const after = Math.hypot(current[0] - other[0], current[1] - other[1]);
			if (before > 0 && after > 0) this._zoomBy(after / before, this._toMapPoint((current[0] + other[0]) / 2, (current[1] + other[1]) / 2));
		}
		_onPointerMove(event) {
			if (this._pointers.has(event.pointerId)) {
				this._drag(event);
				return;
			}
			const target = event.target instanceof Element ? event.target.closest(SELECTOR_TOOLTIP_TARGET) : null;
			const text = target ? this._tooltipText(target) : "";
			if (!text) {
				this._hideTooltip();
				return;
			}
			if (!this._tooltip) {
				this._tooltip = document.createElement("div");
				this._tooltip.className = CLASS_NAME_TOOLTIP;
				this._tooltip.setAttribute("aria-hidden", "true");
				this._element.append(this._tooltip);
			}
			const rect = this._element.getBoundingClientRect();
			this._tooltip.textContent = text;
			this._tooltip.hidden = false;
			this._tooltip.style.left = `${event.clientX - rect.left}px`;
			this._tooltip.style.top = `${event.clientY - rect.top}px`;
		}
		_hideTooltip() {
			if (this._tooltip) this._tooltip.hidden = true;
		}
		_toSelected(codes) {
			const { select } = this._config;
			const known = (Array.isArray(codes) ? codes : []).filter((code) => typeof code === "string" && this._map?.regions[code] !== void 0);
			if (select === SELECT_NONE) return /* @__PURE__ */ new Set();
			return new Set(select === SELECT_MULTIPLE ? known : known.slice(0, 1));
		}
		_applySelected() {
			const svg = this._getSvg();
			if (!svg) return;
			this._selected ??= this._toSelected(this._config.selected);
			this._element.classList.toggle(CLASS_NAME_SELECTABLE, this._config.select !== SELECT_NONE);
			const over = svg.querySelector(SELECTOR_OVER_SHAPES);
			for (const region of svg.querySelectorAll(`.${CLASS_NAME_REGION}`)) {
				const selected = this._selected.has(region.getAttribute(ATTRIBUTE_REGION) ?? "");
				if (selected && !region.classList.contains(CLASS_NAME_SELECTED) && !region.classList.contains(CLASS_NAME_POINT)) svg.insertBefore(region, over);
				region.classList.toggle(CLASS_NAME_SELECTED, selected);
			}
		}
		_onClick(event) {
			if (this._dragged || !this._isOnMap(event) || !this._map) return;
			const target = event.target;
			const marker = target.closest(`.${CLASS_NAME_MARKER}`);
			if (marker) {
				const index = [...this._element.querySelectorAll(`.${CLASS_NAME_MARKER}`)].indexOf(marker);
				EventHandler.trigger(this._element, EVENT_MARKER_CLICK, {
					...this._config.markers[index],
					relatedTarget: marker
				});
				return;
			}
			const region = target.closest(`.${CLASS_NAME_REGION}`);
			const code = region?.getAttribute(ATTRIBUTE_REGION);
			if (!region || !code) return;
			const value = this._config.values[code];
			if (EventHandler.trigger(this._element, EVENT_REGION_CLICK, {
				code,
				name: this._map.regions[code]?.name ?? code,
				...value === void 0 ? {} : { value },
				relatedTarget: region
			})?.defaultPrevented || this._config.select === SELECT_NONE) return;
			const selected = this.getSelected();
			const rest = selected.filter((other) => other !== code);
			const next = rest.length < selected.length ? rest : this._config.select === SELECT_MULTIPLE ? [...selected, code] : [code];
			this._selected = new Set(next);
			this._applySelected();
			EventHandler.trigger(this._element, EVENT_SELECTED, {
				selected: next,
				code
			});
		}
		_getLegend() {
			return this._element.querySelector(`.${CLASS_NAME_LEGEND}`);
		}
		_renderLegend(min, max) {
			const { legend } = this._config;
			this._getLegend()?.remove();
			if (!legend || !Number.isFinite(min) || !Number.isFinite(max)) return;
			const format = typeof legend === "function" ? legend : (value) => value.toLocaleString();
			const label = (value) => {
				const element = document.createElement("span");
				element.className = CLASS_NAME_LEGEND_LABEL;
				element.textContent = format(value);
				return element;
			};
			const scale = document.createElement("span");
			scale.className = CLASS_NAME_LEGEND_SCALE;
			scale.setAttribute("aria-hidden", "true");
			for (let index = 0; index < LEGEND_STEPS; index++) {
				const step = document.createElement("span");
				step.className = CLASS_NAME_LEGEND_STEP;
				step.style.setProperty(CSS_VAR_VALUE, String(Math.round(index / 23 * 1e3) / 1e3));
				scale.append(step);
			}
			const element = document.createElement("div");
			element.className = CLASS_NAME_LEGEND;
			element.append(label(min), scale, label(max));
			this._element.append(element);
		}
		_applyColors() {
			const { colors } = this._config;
			const { style } = this._element;
			for (let index = 0; index < COLORS_MAX; index++) {
				const color = colors[index];
				if (color === void 0) style.removeProperty(`${CSS_VAR_COLOR}${index + 1}`);
				else style.setProperty(`${CSS_VAR_COLOR}${index + 1}`, color);
			}
			if (colors.length > 0) style.setProperty(CSS_VAR_COLORS, String(colors.length));
			else style.removeProperty(CSS_VAR_COLORS);
			this._element.classList.toggle(CLASS_NAME_COLORS, colors.length > 0);
		}
		_applyValues() {
			const { values, min: minForced, max: maxForced } = this._config;
			const numbers = Object.values(values);
			const min = minForced ?? Math.min(...numbers);
			const max = maxForced ?? Math.max(...numbers);
			const span = max - min;
			this._renderLegend(min, max);
			for (const path of this._element.querySelectorAll(`.${CLASS_NAME_REGION}`)) {
				const value = values[path.getAttribute(ATTRIBUTE_REGION) ?? ""];
				if (value === void 0) {
					path.removeAttribute(ATTRIBUTE_VALUE);
					path.style.removeProperty(CSS_VAR_VALUE);
					continue;
				}
				const ratio = span === 0 ? 1 : Math.min(Math.max((value - min) / span, 0), 1);
				path.setAttribute(ATTRIBUTE_VALUE, String(value));
				path.style.setProperty(CSS_VAR_VALUE, String(Math.round(ratio * 1e3) / 1e3));
			}
		}
	};
	/**
	* Data API implementation
	*/
	var init = () => {
		initAll(SELECTOR_DATA_TOGGLE, VectorMap);
	};
	if (document.readyState === "complete") init();
	else {
		document.addEventListener("DOMContentLoaded", init, { once: true });
		window.addEventListener("load", init, { once: true });
	}
	//#endregion
	exports.VectorMap = VectorMap;
});

//# sourceMappingURL=tabler-vector-map.js.map