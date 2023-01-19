/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/lodash/_Symbol.js":
/*!****************************************!*\
  !*** ./node_modules/lodash/_Symbol.js ***!
  \****************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var root = __webpack_require__(/*! ./_root */ "./node_modules/lodash/_root.js");

/** Built-in value references. */
var Symbol = root.Symbol;

module.exports = Symbol;


/***/ }),

/***/ "./node_modules/lodash/_baseGetTag.js":
/*!********************************************!*\
  !*** ./node_modules/lodash/_baseGetTag.js ***!
  \********************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var Symbol = __webpack_require__(/*! ./_Symbol */ "./node_modules/lodash/_Symbol.js"),
    getRawTag = __webpack_require__(/*! ./_getRawTag */ "./node_modules/lodash/_getRawTag.js"),
    objectToString = __webpack_require__(/*! ./_objectToString */ "./node_modules/lodash/_objectToString.js");

/** `Object#toString` result references. */
var nullTag = '[object Null]',
    undefinedTag = '[object Undefined]';

/** Built-in value references. */
var symToStringTag = Symbol ? Symbol.toStringTag : undefined;

/**
 * The base implementation of `getTag` without fallbacks for buggy environments.
 *
 * @private
 * @param {*} value The value to query.
 * @returns {string} Returns the `toStringTag`.
 */
function baseGetTag(value) {
  if (value == null) {
    return value === undefined ? undefinedTag : nullTag;
  }
  return (symToStringTag && symToStringTag in Object(value))
    ? getRawTag(value)
    : objectToString(value);
}

module.exports = baseGetTag;


/***/ }),

/***/ "./node_modules/lodash/_baseTrim.js":
/*!******************************************!*\
  !*** ./node_modules/lodash/_baseTrim.js ***!
  \******************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var trimmedEndIndex = __webpack_require__(/*! ./_trimmedEndIndex */ "./node_modules/lodash/_trimmedEndIndex.js");

/** Used to match leading whitespace. */
var reTrimStart = /^\s+/;

/**
 * The base implementation of `_.trim`.
 *
 * @private
 * @param {string} string The string to trim.
 * @returns {string} Returns the trimmed string.
 */
function baseTrim(string) {
  return string
    ? string.slice(0, trimmedEndIndex(string) + 1).replace(reTrimStart, '')
    : string;
}

module.exports = baseTrim;


/***/ }),

/***/ "./node_modules/lodash/_freeGlobal.js":
/*!********************************************!*\
  !*** ./node_modules/lodash/_freeGlobal.js ***!
  \********************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

/** Detect free variable `global` from Node.js. */
var freeGlobal = typeof __webpack_require__.g == 'object' && __webpack_require__.g && __webpack_require__.g.Object === Object && __webpack_require__.g;

module.exports = freeGlobal;


/***/ }),

/***/ "./node_modules/lodash/_getRawTag.js":
/*!*******************************************!*\
  !*** ./node_modules/lodash/_getRawTag.js ***!
  \*******************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var Symbol = __webpack_require__(/*! ./_Symbol */ "./node_modules/lodash/_Symbol.js");

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */
var nativeObjectToString = objectProto.toString;

/** Built-in value references. */
var symToStringTag = Symbol ? Symbol.toStringTag : undefined;

/**
 * A specialized version of `baseGetTag` which ignores `Symbol.toStringTag` values.
 *
 * @private
 * @param {*} value The value to query.
 * @returns {string} Returns the raw `toStringTag`.
 */
function getRawTag(value) {
  var isOwn = hasOwnProperty.call(value, symToStringTag),
      tag = value[symToStringTag];

  try {
    value[symToStringTag] = undefined;
    var unmasked = true;
  } catch (e) {}

  var result = nativeObjectToString.call(value);
  if (unmasked) {
    if (isOwn) {
      value[symToStringTag] = tag;
    } else {
      delete value[symToStringTag];
    }
  }
  return result;
}

module.exports = getRawTag;


/***/ }),

/***/ "./node_modules/lodash/_objectToString.js":
/*!************************************************!*\
  !*** ./node_modules/lodash/_objectToString.js ***!
  \************************************************/
/***/ ((module) => {

/** Used for built-in method references. */
var objectProto = Object.prototype;

/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */
var nativeObjectToString = objectProto.toString;

/**
 * Converts `value` to a string using `Object.prototype.toString`.
 *
 * @private
 * @param {*} value The value to convert.
 * @returns {string} Returns the converted string.
 */
function objectToString(value) {
  return nativeObjectToString.call(value);
}

module.exports = objectToString;


/***/ }),

/***/ "./node_modules/lodash/_root.js":
/*!**************************************!*\
  !*** ./node_modules/lodash/_root.js ***!
  \**************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var freeGlobal = __webpack_require__(/*! ./_freeGlobal */ "./node_modules/lodash/_freeGlobal.js");

/** Detect free variable `self`. */
var freeSelf = typeof self == 'object' && self && self.Object === Object && self;

/** Used as a reference to the global object. */
var root = freeGlobal || freeSelf || Function('return this')();

module.exports = root;


/***/ }),

/***/ "./node_modules/lodash/_trimmedEndIndex.js":
/*!*************************************************!*\
  !*** ./node_modules/lodash/_trimmedEndIndex.js ***!
  \*************************************************/
/***/ ((module) => {

/** Used to match a single whitespace character. */
var reWhitespace = /\s/;

/**
 * Used by `_.trim` and `_.trimEnd` to get the index of the last non-whitespace
 * character of `string`.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {number} Returns the index of the last non-whitespace character.
 */
function trimmedEndIndex(string) {
  var index = string.length;

  while (index-- && reWhitespace.test(string.charAt(index))) {}
  return index;
}

module.exports = trimmedEndIndex;


/***/ }),

/***/ "./node_modules/lodash/debounce.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/debounce.js ***!
  \*****************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var isObject = __webpack_require__(/*! ./isObject */ "./node_modules/lodash/isObject.js"),
    now = __webpack_require__(/*! ./now */ "./node_modules/lodash/now.js"),
    toNumber = __webpack_require__(/*! ./toNumber */ "./node_modules/lodash/toNumber.js");

/** Error message constants. */
var FUNC_ERROR_TEXT = 'Expected a function';

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max,
    nativeMin = Math.min;

/**
 * Creates a debounced function that delays invoking `func` until after `wait`
 * milliseconds have elapsed since the last time the debounced function was
 * invoked. The debounced function comes with a `cancel` method to cancel
 * delayed `func` invocations and a `flush` method to immediately invoke them.
 * Provide `options` to indicate whether `func` should be invoked on the
 * leading and/or trailing edge of the `wait` timeout. The `func` is invoked
 * with the last arguments provided to the debounced function. Subsequent
 * calls to the debounced function return the result of the last `func`
 * invocation.
 *
 * **Note:** If `leading` and `trailing` options are `true`, `func` is
 * invoked on the trailing edge of the timeout only if the debounced function
 * is invoked more than once during the `wait` timeout.
 *
 * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
 * until to the next tick, similar to `setTimeout` with a timeout of `0`.
 *
 * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
 * for details over the differences between `_.debounce` and `_.throttle`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to debounce.
 * @param {number} [wait=0] The number of milliseconds to delay.
 * @param {Object} [options={}] The options object.
 * @param {boolean} [options.leading=false]
 *  Specify invoking on the leading edge of the timeout.
 * @param {number} [options.maxWait]
 *  The maximum time `func` is allowed to be delayed before it's invoked.
 * @param {boolean} [options.trailing=true]
 *  Specify invoking on the trailing edge of the timeout.
 * @returns {Function} Returns the new debounced function.
 * @example
 *
 * // Avoid costly calculations while the window size is in flux.
 * jQuery(window).on('resize', _.debounce(calculateLayout, 150));
 *
 * // Invoke `sendMail` when clicked, debouncing subsequent calls.
 * jQuery(element).on('click', _.debounce(sendMail, 300, {
 *   'leading': true,
 *   'trailing': false
 * }));
 *
 * // Ensure `batchLog` is invoked once after 1 second of debounced calls.
 * var debounced = _.debounce(batchLog, 250, { 'maxWait': 1000 });
 * var source = new EventSource('/stream');
 * jQuery(source).on('message', debounced);
 *
 * // Cancel the trailing debounced invocation.
 * jQuery(window).on('popstate', debounced.cancel);
 */
function debounce(func, wait, options) {
  var lastArgs,
      lastThis,
      maxWait,
      result,
      timerId,
      lastCallTime,
      lastInvokeTime = 0,
      leading = false,
      maxing = false,
      trailing = true;

  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }
  wait = toNumber(wait) || 0;
  if (isObject(options)) {
    leading = !!options.leading;
    maxing = 'maxWait' in options;
    maxWait = maxing ? nativeMax(toNumber(options.maxWait) || 0, wait) : maxWait;
    trailing = 'trailing' in options ? !!options.trailing : trailing;
  }

  function invokeFunc(time) {
    var args = lastArgs,
        thisArg = lastThis;

    lastArgs = lastThis = undefined;
    lastInvokeTime = time;
    result = func.apply(thisArg, args);
    return result;
  }

  function leadingEdge(time) {
    // Reset any `maxWait` timer.
    lastInvokeTime = time;
    // Start the timer for the trailing edge.
    timerId = setTimeout(timerExpired, wait);
    // Invoke the leading edge.
    return leading ? invokeFunc(time) : result;
  }

  function remainingWait(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime,
        timeWaiting = wait - timeSinceLastCall;

    return maxing
      ? nativeMin(timeWaiting, maxWait - timeSinceLastInvoke)
      : timeWaiting;
  }

  function shouldInvoke(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime;

    // Either this is the first call, activity has stopped and we're at the
    // trailing edge, the system time has gone backwards and we're treating
    // it as the trailing edge, or we've hit the `maxWait` limit.
    return (lastCallTime === undefined || (timeSinceLastCall >= wait) ||
      (timeSinceLastCall < 0) || (maxing && timeSinceLastInvoke >= maxWait));
  }

  function timerExpired() {
    var time = now();
    if (shouldInvoke(time)) {
      return trailingEdge(time);
    }
    // Restart the timer.
    timerId = setTimeout(timerExpired, remainingWait(time));
  }

  function trailingEdge(time) {
    timerId = undefined;

    // Only invoke if we have `lastArgs` which means `func` has been
    // debounced at least once.
    if (trailing && lastArgs) {
      return invokeFunc(time);
    }
    lastArgs = lastThis = undefined;
    return result;
  }

  function cancel() {
    if (timerId !== undefined) {
      clearTimeout(timerId);
    }
    lastInvokeTime = 0;
    lastArgs = lastCallTime = lastThis = timerId = undefined;
  }

  function flush() {
    return timerId === undefined ? result : trailingEdge(now());
  }

  function debounced() {
    var time = now(),
        isInvoking = shouldInvoke(time);

    lastArgs = arguments;
    lastThis = this;
    lastCallTime = time;

    if (isInvoking) {
      if (timerId === undefined) {
        return leadingEdge(lastCallTime);
      }
      if (maxing) {
        // Handle invocations in a tight loop.
        clearTimeout(timerId);
        timerId = setTimeout(timerExpired, wait);
        return invokeFunc(lastCallTime);
      }
    }
    if (timerId === undefined) {
      timerId = setTimeout(timerExpired, wait);
    }
    return result;
  }
  debounced.cancel = cancel;
  debounced.flush = flush;
  return debounced;
}

module.exports = debounce;


/***/ }),

/***/ "./node_modules/lodash/isObject.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/isObject.js ***!
  \*****************************************/
/***/ ((module) => {

/**
 * Checks if `value` is the
 * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
 * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an object, else `false`.
 * @example
 *
 * _.isObject({});
 * // => true
 *
 * _.isObject([1, 2, 3]);
 * // => true
 *
 * _.isObject(_.noop);
 * // => true
 *
 * _.isObject(null);
 * // => false
 */
function isObject(value) {
  var type = typeof value;
  return value != null && (type == 'object' || type == 'function');
}

module.exports = isObject;


/***/ }),

/***/ "./node_modules/lodash/isObjectLike.js":
/*!*********************************************!*\
  !*** ./node_modules/lodash/isObjectLike.js ***!
  \*********************************************/
/***/ ((module) => {

/**
 * Checks if `value` is object-like. A value is object-like if it's not `null`
 * and has a `typeof` result of "object".
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
 * @example
 *
 * _.isObjectLike({});
 * // => true
 *
 * _.isObjectLike([1, 2, 3]);
 * // => true
 *
 * _.isObjectLike(_.noop);
 * // => false
 *
 * _.isObjectLike(null);
 * // => false
 */
function isObjectLike(value) {
  return value != null && typeof value == 'object';
}

module.exports = isObjectLike;


/***/ }),

/***/ "./node_modules/lodash/isSymbol.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/isSymbol.js ***!
  \*****************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var baseGetTag = __webpack_require__(/*! ./_baseGetTag */ "./node_modules/lodash/_baseGetTag.js"),
    isObjectLike = __webpack_require__(/*! ./isObjectLike */ "./node_modules/lodash/isObjectLike.js");

/** `Object#toString` result references. */
var symbolTag = '[object Symbol]';

/**
 * Checks if `value` is classified as a `Symbol` primitive or object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
 * @example
 *
 * _.isSymbol(Symbol.iterator);
 * // => true
 *
 * _.isSymbol('abc');
 * // => false
 */
function isSymbol(value) {
  return typeof value == 'symbol' ||
    (isObjectLike(value) && baseGetTag(value) == symbolTag);
}

module.exports = isSymbol;


/***/ }),

/***/ "./node_modules/lodash/now.js":
/*!************************************!*\
  !*** ./node_modules/lodash/now.js ***!
  \************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var root = __webpack_require__(/*! ./_root */ "./node_modules/lodash/_root.js");

/**
 * Gets the timestamp of the number of milliseconds that have elapsed since
 * the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Date
 * @returns {number} Returns the timestamp.
 * @example
 *
 * _.defer(function(stamp) {
 *   console.log(_.now() - stamp);
 * }, _.now());
 * // => Logs the number of milliseconds it took for the deferred invocation.
 */
var now = function() {
  return root.Date.now();
};

module.exports = now;


/***/ }),

/***/ "./node_modules/lodash/throttle.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/throttle.js ***!
  \*****************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var debounce = __webpack_require__(/*! ./debounce */ "./node_modules/lodash/debounce.js"),
    isObject = __webpack_require__(/*! ./isObject */ "./node_modules/lodash/isObject.js");

/** Error message constants. */
var FUNC_ERROR_TEXT = 'Expected a function';

/**
 * Creates a throttled function that only invokes `func` at most once per
 * every `wait` milliseconds. The throttled function comes with a `cancel`
 * method to cancel delayed `func` invocations and a `flush` method to
 * immediately invoke them. Provide `options` to indicate whether `func`
 * should be invoked on the leading and/or trailing edge of the `wait`
 * timeout. The `func` is invoked with the last arguments provided to the
 * throttled function. Subsequent calls to the throttled function return the
 * result of the last `func` invocation.
 *
 * **Note:** If `leading` and `trailing` options are `true`, `func` is
 * invoked on the trailing edge of the timeout only if the throttled function
 * is invoked more than once during the `wait` timeout.
 *
 * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
 * until to the next tick, similar to `setTimeout` with a timeout of `0`.
 *
 * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
 * for details over the differences between `_.throttle` and `_.debounce`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to throttle.
 * @param {number} [wait=0] The number of milliseconds to throttle invocations to.
 * @param {Object} [options={}] The options object.
 * @param {boolean} [options.leading=true]
 *  Specify invoking on the leading edge of the timeout.
 * @param {boolean} [options.trailing=true]
 *  Specify invoking on the trailing edge of the timeout.
 * @returns {Function} Returns the new throttled function.
 * @example
 *
 * // Avoid excessively updating the position while scrolling.
 * jQuery(window).on('scroll', _.throttle(updatePosition, 100));
 *
 * // Invoke `renewToken` when the click event is fired, but not more than once every 5 minutes.
 * var throttled = _.throttle(renewToken, 300000, { 'trailing': false });
 * jQuery(element).on('click', throttled);
 *
 * // Cancel the trailing throttled invocation.
 * jQuery(window).on('popstate', throttled.cancel);
 */
function throttle(func, wait, options) {
  var leading = true,
      trailing = true;

  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }
  if (isObject(options)) {
    leading = 'leading' in options ? !!options.leading : leading;
    trailing = 'trailing' in options ? !!options.trailing : trailing;
  }
  return debounce(func, wait, {
    'leading': leading,
    'maxWait': wait,
    'trailing': trailing
  });
}

module.exports = throttle;


/***/ }),

/***/ "./node_modules/lodash/toNumber.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash/toNumber.js ***!
  \*****************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var baseTrim = __webpack_require__(/*! ./_baseTrim */ "./node_modules/lodash/_baseTrim.js"),
    isObject = __webpack_require__(/*! ./isObject */ "./node_modules/lodash/isObject.js"),
    isSymbol = __webpack_require__(/*! ./isSymbol */ "./node_modules/lodash/isSymbol.js");

/** Used as references for various `Number` constants. */
var NAN = 0 / 0;

/** Used to detect bad signed hexadecimal string values. */
var reIsBadHex = /^[-+]0x[0-9a-f]+$/i;

/** Used to detect binary string values. */
var reIsBinary = /^0b[01]+$/i;

/** Used to detect octal string values. */
var reIsOctal = /^0o[0-7]+$/i;

/** Built-in method references without a dependency on `root`. */
var freeParseInt = parseInt;

/**
 * Converts `value` to a number.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to process.
 * @returns {number} Returns the number.
 * @example
 *
 * _.toNumber(3.2);
 * // => 3.2
 *
 * _.toNumber(Number.MIN_VALUE);
 * // => 5e-324
 *
 * _.toNumber(Infinity);
 * // => Infinity
 *
 * _.toNumber('3.2');
 * // => 3.2
 */
function toNumber(value) {
  if (typeof value == 'number') {
    return value;
  }
  if (isSymbol(value)) {
    return NAN;
  }
  if (isObject(value)) {
    var other = typeof value.valueOf == 'function' ? value.valueOf() : value;
    value = isObject(other) ? (other + '') : other;
  }
  if (typeof value != 'string') {
    return value === 0 ? value : +value;
  }
  value = baseTrim(value);
  var isBinary = reIsBinary.test(value);
  return (isBinary || reIsOctal.test(value))
    ? freeParseInt(value.slice(2), isBinary ? 2 : 8)
    : (reIsBadHex.test(value) ? NAN : +value);
}

module.exports = toNumber;


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__header/AlertBar.js":
/*!************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__header/AlertBar.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function AlertBar() {
	const body = document.body;
	const alertContainer = document.getElementById('e29-alert-bar');
	const alertItems = alertContainer
		? alertContainer.querySelectorAll('.alert-bar__item')
		: false;
	const currentStorage = JSON.parse(sessionStorage.getItem('e29-alert-bar'));
	const alertState = currentStorage ? currentStorage : {};

	//Add height to body for other fixed/absolute elements
	if (alertContainer) {
		const alertObserver = new ResizeObserver((entries) => {
			entries.forEach(() => {
				const alertContainerTop = alertContainer.offsetTop;
				const alertContainerHeight = alertContainer.offsetHeight;
				body.style.setProperty(
					'--alert-bar-height',
					`${alertContainerHeight + alertContainerTop}px`
				);
			});
		});

		alertObserver.observe(alertContainer);
	}

	//Manage viewed state
	function setStorage() {
		sessionStorage.setItem('e29-alert-bar', JSON.stringify(alertState));
	}

	if (alertItems) {
		alertItems.forEach((alertItem) => {
			const alertClose = alertItem.querySelector('.alert-bar__close');
			const alertID = alertItem.getAttribute('id');

			//Loop through local storage and determine what has been viewed
			if (currentStorage) {
				for (const item in currentStorage) {
					if (item === alertID && currentStorage[item].viewed) {
						document.getElementById(item).classList.add('viewed');
					}
					if (item === alertID && !currentStorage[item].viewed) {
						document
							.getElementById(item)
							.classList.remove('viewed');
					}
				}
			}

			//No local storage, set all to not viewed
			else {
				alertState[alertID] = { viewed: false };
				alertItem.classList.remove('viewed');
			}

			//Close alert item and set local storage
			if (alertClose) {
				alertClose.addEventListener('click', function (e) {
					e.preventDefault();
					alertItem.classList.add('viewed');
					alertState[alertID] = { viewed: true };
					setStorage();
				});
			}

			//Create local storage if it doesn't exist
			if (!currentStorage) {
				setStorage();
			}
		});
	}
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (AlertBar);


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__header/MegaMenu.js":
/*!************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__header/MegaMenu.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const $ = jQuery.noConflict();

function isTouchDevice() {
	return 'ontouchstart' in window || navigator.msMaxTouchPoints;
}
class MegaMenu {
	constructor() {
		this.menu = $('.main-header__nav');
		this.menuItems = this.menu.find('> .menu > .menu-item-type-post_type');
		this.menuItemsLinks = this.menuItems.find('> a');
	}
	static showMegaMenu() {
		const megaMenuWrapper = $(this).find('.mega-menu-wrapper');
		const megaMenuCols = megaMenuWrapper.find('[class*="col-"]');
		const timer =
			$('.main-header .mega-menu-background').height() !== 0 ? 0 : 250;

		MegaMenu.menuTimeout = setTimeout(() => {
			megaMenuCols.each((i, v) => {
				MegaMenu.animateItemsIn($(v).find('*'));
			});

			megaMenuWrapper.addClass('active');
			MegaMenu.animateMenuBackground(megaMenuWrapper.outerHeight());
		}, timer);
	}
	static hideMegaMenu() {
		clearTimeout(MegaMenu.menuTimeout);
		const activeMegaMenu = $('.mega-menu-wrapper.active');
		const activeMegaMenuItems = activeMegaMenu.find('*');

		activeMegaMenu.removeClass('active');
		activeMegaMenuItems.removeClass('active');

		MegaMenu.animateMenuBackground(0);
	}
	static hideMegaMenuOnTouch(e) {
		const container = $('.main-header__nav');
		if (
			!container.is(e.target) &&
			container.has(e.target).length === 0 &&
			$('.mega-menu-wrapper').hasClass('active')
		) {
			MegaMenu.hideMegaMenu();
		}
	}
	static animateItemsIn(items) {
		let delay = 0;
		items.each((i, v) => {
			delay += 0.04;
			$(v).css('transition-delay', `${delay}s`);
			$(v).addClass('active');
		});
	}
	static animateMenuBackground(height) {
		$('.main-header .mega-menu-background')
			.stop()
			.animate(
				{
					height: `${height}px`,
				},
				300
			);
	}
	bindEvents() {
		if (isTouchDevice()) {
			this.menuItemsLinks.on('click', this.toggleMegaMenu);
			$(document).on('click touchstart', MegaMenu.hideMegaMenuOnTouch);
		} else {
			this.menuItems.on('mouseenter', MegaMenu.showMegaMenu);
			this.menuItems.on('mouseleave', MegaMenu.hideMegaMenu);
		}
	}
	toggleMegaMenu(e) {
		e.preventDefault();
		const megaMenuWrapper = $(this).next('.mega-menu-wrapper');

		if (megaMenuWrapper.hasClass('active')) {
			return;
		}

		const megaMenuCols = megaMenuWrapper.find('[class*="col-"]');

		MegaMenu.hideMegaMenu();
		megaMenuCols.each((i, v) => {
			MegaMenu.animateItemsIn($(v).find('*'));
		});

		megaMenuWrapper.addClass('active');
		MegaMenu.animateMenuBackground(megaMenuWrapper.outerHeight());
	}
	init() {
		this.bindEvents();
	}
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (new MegaMenu());


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__header/mobileHeader.js":
/*!****************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__header/mobileHeader.js ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const $ = jQuery.noConflict();

class MobileHeader {
	constructor(
		trigger = '.btn-hamburger',
		pbody = 'body',
		listParent = '.menu-item-has-children > a'
	) {
		this.trigger = trigger;
		this.pbody = pbody;
		this.listParent = listParent;
	}
	init() {
		$(this.trigger).on('click', this.setNavState);
		$(this.listParent).on('click', this.setListState);
	}
	setNavState(e) {
		e.preventDefault();
		const body = $('body');

		if ($(this).hasClass('open')) {
			MobileHeader.hideWrapper(this, body);
		} else {
			MobileHeader.showWrapper(this, body);
		}
	}
	setListState(e) {
		e.preventDefault();
		if (!$(this).hasClass('open')) {
			$(this).addClass('open');
		} else {
			$(this).removeClass('open');
		}
	}
	static hideWrapper(el, body) {
		$(el).removeClass('open');
		body.removeClass('overlayed');
		$(el).next().removeClass('active');
	}
	static showWrapper(el, body) {
		$(el).addClass('open');
		body.addClass('overlayed');
		$(el).next().addClass('active');
	}
	resized() {
		if (
			!$(this.trigger).is(':visible') &&
			$(this.trigger).hasClass('open')
		) {
			MobileHeader.hideWrapper(this.trigger, $(this.pbody));
		}
	}
	hideOutsideClick(e) {
		if ($(this.trigger).length > 0 && $(this.trigger).hasClass('open')) {
			const container = $('.main-header');
			if (
				!container.is(e.target) &&
				container.has(e.target).length === 0
			) {
				MobileHeader.hideWrapper(this.trigger, $(this.pbody));
			}
		}
	}
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (MobileHeader);


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__init/controller.js":
/*!************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__init/controller.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _header_MegaMenu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../__header/MegaMenu */ "./web/app/themes/sim4usa/js/src/__header/MegaMenu.js");
/* harmony import */ var _header_mobileHeader__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../__header/mobileHeader */ "./web/app/themes/sim4usa/js/src/__header/mobileHeader.js");
/* harmony import */ var _shortcodes_accordions__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../__shortcodes/accordions */ "./web/app/themes/sim4usa/js/src/__shortcodes/accordions.js");
/* harmony import */ var _utils_mirrorHover__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../__utils/mirrorHover */ "./web/app/themes/sim4usa/js/src/__utils/mirrorHover.js");
/* harmony import */ var _utils_video__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../__utils/video */ "./web/app/themes/sim4usa/js/src/__utils/video.js");
/* harmony import */ var _utils_smoothScroll__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../__utils/smoothScroll */ "./web/app/themes/sim4usa/js/src/__utils/smoothScroll.js");
/* harmony import */ var _utils_tables__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../__utils/tables */ "./web/app/themes/sim4usa/js/src/__utils/tables.js");
/* harmony import */ var _utils_forms__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../__utils/forms */ "./web/app/themes/sim4usa/js/src/__utils/forms.js");
/* harmony import */ var _utils_vhUnit__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../__utils/vhUnit */ "./web/app/themes/sim4usa/js/src/__utils/vhUnit.js");
/* harmony import */ var _header_AlertBar__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../__header/AlertBar */ "./web/app/themes/sim4usa/js/src/__header/AlertBar.js");
/* harmony import */ var _woo_miniCart__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../__woo/miniCart */ "./web/app/themes/sim4usa/js/src/__woo/miniCart.js");
/* harmony import */ var _woo_qtyBtns__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../__woo/qtyBtns */ "./web/app/themes/sim4usa/js/src/__woo/qtyBtns.js");









 

 
const headerMobile = new _header_mobileHeader__WEBPACK_IMPORTED_MODULE_1__["default"]();

// GLOBAL APP CONTROLLER
const controller = {
	init() {
		document.querySelector('html').classList.remove('no-js');
		_header_MegaMenu__WEBPACK_IMPORTED_MODULE_0__["default"].init();
		headerMobile.init();
		_shortcodes_accordions__WEBPACK_IMPORTED_MODULE_2__["default"].init();
		_utils_video__WEBPACK_IMPORTED_MODULE_4__["default"].init();
		(0,_utils_mirrorHover__WEBPACK_IMPORTED_MODULE_3__["default"])();
		(0,_utils_smoothScroll__WEBPACK_IMPORTED_MODULE_5__["default"])();
		_utils_tables__WEBPACK_IMPORTED_MODULE_6__["default"].init();
		(0,_utils_vhUnit__WEBPACK_IMPORTED_MODULE_8__["default"])();
		(0,_header_AlertBar__WEBPACK_IMPORTED_MODULE_9__["default"])(); 
		//miniCart.init();
		//qtyBtns.init();
	},
	loaded() {
		document.querySelector('body').classList.add('page-has-loaded');
		(0,_utils_forms__WEBPACK_IMPORTED_MODULE_7__["default"])();
		(0,_utils_vhUnit__WEBPACK_IMPORTED_MODULE_8__["default"])();
		
	},
	resized() {
		headerMobile.resized();
		_utils_tables__WEBPACK_IMPORTED_MODULE_6__["default"].toggleShadow();
		(0,_utils_vhUnit__WEBPACK_IMPORTED_MODULE_8__["default"])();
	},
	scrolled() {},
	keyDown() {},
	mouseUp(e) {
		headerMobile.hideOutsideClick(e);
	},
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (controller);


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__shortcodes/accordions.js":
/*!******************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__shortcodes/accordions.js ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const $ = jQuery.noConflict();

class Accordions {
	constructor(trigger) {
		this.trigger = $(trigger);
	}
	init() {
		this.bindEvents();
	}
	bindEvents() {
		this.trigger.on('click', this.toggleAccordion);
	}
	toggleAccordion() {
		$(this).parent().toggleClass('active');
		$(this).next().stop().slideToggle(250);
	}
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (new Accordions('.bellow__title'));


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__utils/detectTabNav.js":
/*!***************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__utils/detectTabNav.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const detectTabNav = (e) => {
	if (e.keyCode === 9) {
		document.querySelector('html').classList.add('user-tab-nav');

		window.removeEventListener('keydown', detectTabNav);
		window.addEventListener('mousedown', detectMouseNav);
	}
};

const detectMouseNav = () => {
	document.querySelector('html').classList.remove('user-tab-nav');

	window.removeEventListener('mousedown', detectMouseNav);
	window.addEventListener('keydown', detectTabNav);
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (detectTabNav);


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__utils/forms.js":
/*!********************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__utils/forms.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const Forms = () => {
	const hubspotForm = document.querySelectorAll(
		'.hbspt-form form.hs-custom-style'
	);

	//Remove hubspot's styling from forms
	if (hubspotForm) {
		hubspotForm.forEach(function (form) {
			form.classList.remove('hs-custom-style');
		});
	}
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Forms);


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__utils/mirrorHover.js":
/*!**************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__utils/mirrorHover.js ***!
  \**************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ mirrorHover)
/* harmony export */ });
const $ = jQuery.noConflict();

function mirrorHover() {
	$(document).ready(() => {
		$('[data-mirror-hover]').each((index, item) => {
			const target = item.getAttribute('data-mirror-hover');
			const targetElem = document.querySelector(target);

			if (null !== targetElem) {
				targetElem.addEventListener('mouseover', () => {
					item.classList.add('mirror-hover');
				});
				item.addEventListener('mouseover', () => {
					targetElem.classList.add('mirror-hover');
				});
				targetElem.addEventListener('mouseout', () => {
					item.classList.remove('mirror-hover');
				});
				item.addEventListener('mouseout', () => {
					targetElem.classList.remove('mirror-hover');
				});
			}
		});
	});
}


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__utils/smoothScroll.js":
/*!***************************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__utils/smoothScroll.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _header_mobileHeader__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../__header/mobileHeader */ "./web/app/themes/sim4usa/js/src/__header/mobileHeader.js");


const $ = jQuery.noConflict();
function scrollFunc(e) {
	e.preventDefault();
	const header = $('.main-header');
	const stickyClass = 'main-header--sticky';
	const target = $($(this).attr('href'));
	let stickyHeight = 0;
	if (header.hasClass(stickyClass)) {
		stickyHeight = header.outerHeight();
	}
	if (
		$(this).attr('href') === '#next' &&
		$(this).parents('section').next().length > 0
	) {
		// Smooth Scroll to next section
		$('html, body').animate(
			{
				scrollTop:
					$(this).parents('section').next().offset().top -
					stickyHeight,
			},
			600
		);
		_header_mobileHeader__WEBPACK_IMPORTED_MODULE_0__["default"].hideWrapper('.btn-hamburger', $('body'));
	} else if (target.length) {
		$('html, body').animate(
			{
				scrollTop: target.offset().top - stickyHeight,
			},
			600
		);
		_header_mobileHeader__WEBPACK_IMPORTED_MODULE_0__["default"].hideWrapper('.btn-hamburger', $('body'));
	}
}
function smoothScroll() {
	$('a[href^="#"]:not([href="#"])').on('click', scrollFunc);
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (smoothScroll);


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__utils/tables.js":
/*!*********************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__utils/tables.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const $ = jQuery.noConflict();

class Tables {
	constructor() {
		this.tables = $('table.tablepress');
	}

	init() {
		this.toggleShadow();
	}

	toggleShadow() {
		this.tables.each((i, el) => {
			const item = $(el);
			const scrollWrapper = item.closest('.tablepress-scroll-wrapper');

			scrollWrapper.removeClass('has-scroll');
			if (item[0].offsetWidth > scrollWrapper.width()) {
				scrollWrapper.addClass('has-scroll');
			}
		});
	}
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (new Tables());


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__utils/vhUnit.js":
/*!*********************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__utils/vhUnit.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const vhUnit = () => {
	document.documentElement.style.setProperty(
		'--vh',
		`${window.innerHeight * 0.01}px`
	);
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (vhUnit);


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__utils/video.js":
/*!********************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__utils/video.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const $ = jQuery.noConflict();

const Video = {
	iframeWrapper: $('.iframe-wrapper'),
	init() {
		const overlay = this.iframeWrapper.find('.iframe-wrapper__overlay');
		overlay.on('click', this.hideOverlay);
	},
	hideOverlay(e) {
		e.preventDefault();
		Video.iframeWrapper.each((i, el) => {
			const iframeSrc = $(el).find('iframe').attr('src');
			if (iframeSrc) {
				$(el).find('iframe')[0].src = '';
			}
			const imageUrl = $(el).data('image-src');
			$(el)
				.find('.iframe-wrapper__overlay')
				.css('background-image', 'url(' + imageUrl + ')')
				.show();
		});

		const parent = $(this).parents('.iframe-wrapper');
		let source = parent.find('iframe')[0].dataset.src;
		if (!parent.hasClass('wistia')) {
			source += '&autoplay=1&loop=1&rel=0&wmode=transparent';
		} else {
			source = `https://fast.wistia.net/embed/iframe/${parent.data(
				'video-id'
			)}?autoplay=1&silentAutoPlay=false`;
		}
		parent.find('iframe')[0].src = source;
		$(this).delay(300).fadeOut();
	},
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Video);


/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__woo/miniCart.js":
/*!*********************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__woo/miniCart.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const $ = jQuery.noConflict();

class Cart {

    constructor() {
        this.items = [];
        this.totalPrice = 0;
    }

    addItem(item) {
        this.items.push(item);
        this.totalPrice += item.price;
    }

    removeItem(item) {
        const index = this.items.indexOf(item);
        this.items.splice(index, 1);
        this.totalPrice -= item.price;
    
    }
    updateTotalPrice() {
        this.totalPrice = 0; 
        this.items.forEach(item => {
          this.totalPrice += item.price;
        });
    }
     
    productButton(){
        
        const form = document.getElementsByClassName('cart'); 

        if(form != 'undefind'){

        
        const productId = form[0].getElementsByClassName('single_add_to_cart_button');
        const quantity = form[0].getElementsByClassName('qty');
        const productPrice = form[0].getElementsByClassName('product-price-field');
       
        productId[0].addEventListener('click', function(e){
           e.preventDefault();
           const totalPrice = parseInt(quantity[0].value) * parseInt(productPrice[0].value); 
            const itemObject = {
                id: productId[0].value,
                quanty: quantity[0].value,
                price: productPrice[0].value,
                totalProductPrice: totalPrice
            } 
            console.log(itemObject)
        })

        }
         
    }
    init(){ 
        this.productButton(); 
    }
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (new Cart());

/***/ }),

/***/ "./web/app/themes/sim4usa/js/src/__woo/qtyBtns.js":
/*!********************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/__woo/qtyBtns.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const $ = jQuery.noConflict();

class QtyBtns {
    constructor(){
        this.counter = 1;
    }
    valueUpdate(value){
        let qtyInput = document.getElementsByClassName('qty');
        qtyInput[0].value = value;
        console.log(qtyInput[0].value); 
    }

    addBtn(){
        this.counter += 1;
        this.valueUpdate(this.counter);
    }
    removeBtn(){ 
        if(this.counter === 1){
            return false;
        }else{
            this.counter -= 1;
        }  
        this.valueUpdate(this.counter);
    }
    btnHandler(){
        let qtyBtn = document.getElementsByClassName('qty-btn'); 

        for (let btn of qtyBtn) {
            btn.addEventListener('click', function(e){
                e.preventDefault();
                if(e.target.classList.contains('qty-btn__add')){
                    this.addBtn();
                }else{
                    this.removeBtn();
                }
            }.bind(this));
        }
       
    }
    init(){
        this.btnHandler();
    }
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (new QtyBtns());
 

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!*************************************************!*\
  !*** ./web/app/themes/sim4usa/js/src/script.js ***!
  \*************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _init_controller__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./__init/controller */ "./web/app/themes/sim4usa/js/src/__init/controller.js");
/* harmony import */ var _utils_detectTabNav__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./__utils/detectTabNav */ "./web/app/themes/sim4usa/js/src/__utils/detectTabNav.js");
/* harmony import */ var lodash_throttle__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! lodash/throttle */ "./node_modules/lodash/throttle.js");
/* harmony import */ var lodash_throttle__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(lodash_throttle__WEBPACK_IMPORTED_MODULE_2__);




let handled = false;

_init_controller__WEBPACK_IMPORTED_MODULE_0__["default"].init();

window.addEventListener('load', _init_controller__WEBPACK_IMPORTED_MODULE_0__["default"].loaded);
window.addEventListener('scroll', lodash_throttle__WEBPACK_IMPORTED_MODULE_2___default()(_init_controller__WEBPACK_IMPORTED_MODULE_0__["default"].scrolled, 100), {
	passive: true,
});
window.addEventListener('resize', lodash_throttle__WEBPACK_IMPORTED_MODULE_2___default()(_init_controller__WEBPACK_IMPORTED_MODULE_0__["default"].resized, 100));
window.addEventListener('keydown', (e) => {
	(0,_utils_detectTabNav__WEBPACK_IMPORTED_MODULE_1__["default"])(e);
	_init_controller__WEBPACK_IMPORTED_MODULE_0__["default"].keyDown(e);
});

const handleMouseAndTouchEvents = (e) => {
	if (e.type === 'touchend') {
		handled = true;
		_init_controller__WEBPACK_IMPORTED_MODULE_0__["default"].mouseUp(e);
	} else if (e.type === 'mouseup' && !handled) {
		_init_controller__WEBPACK_IMPORTED_MODULE_0__["default"].mouseUp(e);
	} else {
		handled = false;
	}
};

document.addEventListener('mouseup', handleMouseAndTouchEvents);
document.addEventListener('touchend', handleMouseAndTouchEvents);

})();

/******/ })()
;
//# sourceMappingURL=bundle.js.map