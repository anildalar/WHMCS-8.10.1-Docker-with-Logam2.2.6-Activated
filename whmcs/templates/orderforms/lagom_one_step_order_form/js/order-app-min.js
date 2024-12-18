/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "../modules";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/order-app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/components/forms.js":
/*!***************************************!*\
  !*** ./assets/js/components/forms.js ***!
  \***************************************/
/*! exports provided: virtualInput, numberInput, numberInputSecondary */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "virtualInput", function() { return virtualInput; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "numberInput", function() { return numberInput; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "numberInputSecondary", function() { return numberInputSecondary; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var virtualInput = /*#__PURE__*/function () {
  function virtualInput(container) {
    _classCallCheck(this, virtualInput);

    this.container = container;
    this.virtualInputs = this.container.find('[data-virtual-input]');
    this.selectItems = this.container.find('[data-dropdown-menu] [data-value]');

    if (this.container.find('[data-input-collapse]').length != 0) {
      this.checkboxInputs = this.virtualInputs.find('.panel-heading input');
    } else {
      this.checkboxInputs = this.virtualInputs.find('input');
    }

    this.bindEvents();
    this.initCheck();
  }

  _createClass(virtualInput, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      this.checkboxInputs.on('ifChecked', function (event) {
        _this.addClass(event);

        _this.onCheck(event);
      });
      this.checkboxInputs.on('ifUnchecked', function (event) {
        _this.removeClass(event);

        _this.onUncheck(event);
      });
      this.virtualInputs.on('click selectOption', function (event) {
        _this.check(event);
      });
      this.selectItems.on('click selectOption', function (event) {
        _this.handleSelectItemClick(event);
      });
      this.virtualInputs.find('[type="password"]').on('click', function (event) {
        event.stopPropagation();
      });
    }
  }, {
    key: "initCheck",
    value: function initCheck() {
      var checkedItem = this.virtualInputs.find('input:checked');
      var checkedId = checkedItem.val();

      if (checkedId) {
        var selctedItem = checkedItem.closest("[data-virtual-input]").find('[data-dropdown-menu] [data-value="' + checkedId + '"]');
        selctedItem.trigger('selectOption');
      }

      ;
    }
  }, {
    key: "removeClass",
    value: function removeClass(event) {
      var input = $(event.currentTarget);

      var _virtualInput = input.closest('[data-virtual-input]');

      this.hideCollapse(_virtualInput);

      _virtualInput.removeClass('checked');

      if (input.attr('type') == 'checkbox') {
        return;
      } // remove class from container


      if (_virtualInput.data('virtual-input-none') == undefined) {
        if (this.container.hasClass('is-selected')) {
          this.container.removeClass('is-selected');
        }
      }
    }
  }, {
    key: "addClass",
    value: function addClass(event) {
      var input = $(event.currentTarget);

      var _virtualInput2 = input.closest('[data-virtual-input]');

      this.showCollapse(_virtualInput2);

      _virtualInput2.addClass('checked');

      if (input.attr('type') == 'checkbox') {
        return;
      } // add Class to container


      if (_virtualInput2.data('virtual-input-none') == undefined) {
        if (!this.container.hasClass('is-selected')) {
          this.container.addClass('is-selected');
        }
      }
    }
  }, {
    key: "showCollapse",
    value: function showCollapse(_virtualInput3) {
      _virtualInput3.find('[data-input-collapse]').collapse('show');
    }
  }, {
    key: "hideCollapse",
    value: function hideCollapse(_virtualInput4) {
      _virtualInput4.find('[data-input-collapse]').collapse('hide');
    }
  }, {
    key: "check",
    value: function check(event) {
      var item = $(event.currentTarget);
      var hasDropdown = item.data('virtual-input') == 'dropdown' ? true : false;

      if (!hasDropdown) {
        if (!item.hasClass('disabled') && !$(event.target).is('a')) {
          item.find('input').first().iCheck('check');
        }

        this.onCheck(event);
      }
    }
  }, {
    key: "unCheck",
    value: function unCheck(event) {}
  }, {
    key: "updateInputValues",
    value: function updateInputValues(item, selectItem, value, properties, event) {
      var input = item.find('input');

      if (event.type == 'click') {
        $(item).find('[data-toggle="dropdown"]').first().dropdown('toggle');
        input.iCheck('check');
        input.val(value);
      }

      item.find('[data-name]').text(properties.name);
      item.find('[data-price]').text(properties.price);
      this.onCheck(event);
    }
  }, {
    key: "handleSelectItemClick",
    value: function handleSelectItemClick(event) {
      var selectItem = $(event.currentTarget);
      var item = selectItem.closest('[data-virtual-input]');
      var value = selectItem.data('value');
      var properties = $(selectItem).data('properties');
      item.find('[data-dropdown-menu] [data-value]').removeClass('active');
      selectItem.addClass('active');
      this.updateInputValues(item, selectItem, value, properties, event);
    }
  }, {
    key: "onCheck",
    value: function onCheck(event) {
      var item = $(event.currentTarget).closest('[data-virtual-input]');
      item.find('[data-on-unchecked]').addClass('hidden');
      item.find('[data-on-checked]').removeClass('hidden');
    }
  }, {
    key: "onUncheck",
    value: function onUncheck(event) {
      var item = $(event.currentTarget).closest('[data-virtual-input]');
      item.find('[data-on-unchecked]').removeClass('hidden');
      item.find('[data-on-checked]').addClass('hidden');
      item.find('[data-dropdown-menu] [data-value]').removeClass('active');
    }
  }]);

  return virtualInput;
}();
;
var numberInput = /*#__PURE__*/function () {
  function numberInput(container) {
    _classCallCheck(this, numberInput);

    this.container = $(container);
    this.input = this.container.find('[data-input-number-input]');
    this.incBtn = this.container.find("[data-input-number-inc]");
    this.decBtn = this.container.find("[data-input-number-dec]");
    this.updateBtn = this.container.find("[data-input-number-update]");
    this.minValue = this.input.attr('min');
    this.maxValue = this.input.attr('max');
    this.inputValue = this.input.val();
    this.price = this.container.find("[data-input-number-price]");
    this.bindEvents();
  }

  _createClass(numberInput, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this2 = this;

      this.incBtn.on('click', function () {
        _this2.increment();
      });
      this.decBtn.on('click', function () {
        _this2.decrement();
      });
      this.input.on('keyup', function (event) {
        var showButton = true;

        if (_this2.inputValue == event.target.value) {
          showButton = false;
        } else if (event.target.value == "" || event.target.value == 0) {
          showButton = false;
        } else {
          _this2.inputValue = event.target.value;

          _this2.updateInput(showButton);
        }
      });
    }
  }, {
    key: "handleInputChange",
    value: function handleInputChange() {}
  }, {
    key: "increment",
    value: function increment() {
      var showButton = true;
      this.inputValue++;

      if (this.inputValue >= this.maxValue) {
        this.inputValue = this.maxValue;
      }

      this.updateInput(showButton);
    }
  }, {
    key: "decrement",
    value: function decrement() {
      var showButton = true;

      if (this.inputValue <= this.minValue) {
        showButton = false;
      }

      this.inputValue--;

      if (this.inputValue <= this.minValue) {
        this.inputValue = this.minValue;
      }

      this.updateInput(showButton);
    }
  }, {
    key: "updateInput",
    value: function updateInput(showButton) {
      if (showButton === true) {
        this.updateBtn.removeClass('hidden');
        this.price.addClass('hidden');
        this.input.val(this.inputValue).parent().addClass('is-active');
      } else {
        this.input.val(this.inputValue);
      }
    }
  }]);

  return numberInput;
}();
;
var numberInputSecondary = /*#__PURE__*/function () {
  function numberInputSecondary(container) {
    _classCallCheck(this, numberInputSecondary);

    this.container = $(container);
    this.input = this.container.find('[data-input-number-secondary-input]');
    this.incBtn = this.container.find("[data-input-number-secondary-inc]");
    this.decBtn = this.container.find("[data-input-number-secondary-dec]");
    this.updateBtn = this.container.find("[data-input-number-secondary-update]");
    this.minValue = this.input.attr('min');
    this.maxValue = this.input.attr('max');
    this.inputValue = this.input.val();
    this.price = this.container.find("[data-input-number-secondary-price]");
    this.bindEvents();
  }

  _createClass(numberInputSecondary, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this3 = this;

      this.incBtn.on('click', function () {
        _this3.increment();
      });
      this.decBtn.on('click', function () {
        _this3.decrement();
      });
      this.input.on('change', function (event) {
        _this3.inputValue = event.target.value;
      });
    }
  }, {
    key: "handleInputChange",
    value: function handleInputChange() {}
  }, {
    key: "increment",
    value: function increment() {
      var showButton = true;
      this.inputValue++;

      if (this.inputValue >= this.maxValue) {
        this.inputValue = this.maxValue;
      }

      this.updateInput(showButton);
    }
  }, {
    key: "decrement",
    value: function decrement() {
      var showButton = true;

      if (this.inputValue <= this.minValue) {
        showButton = false;
      }

      this.inputValue--;

      if (this.inputValue <= this.minValue) {
        this.inputValue = this.minValue;
      }

      this.updateInput(showButton);
    }
  }, {
    key: "updateInput",
    value: function updateInput(showButton) {
      if (showButton === true) {
        this.updateBtn.removeClass('hidden');
        this.updateBtn.parent().addClass('item-price-changed');
        this.price.addClass('hidden');
        this.input.val(this.inputValue).parent().addClass('is-active');
      } else {
        this.input.val(this.inputValue);
      }
    }
  }]);

  return numberInputSecondary;
}();
;

/***/ }),

/***/ "./assets/js/components/scroll-to.js":
/*!*******************************************!*\
  !*** ./assets/js/components/scroll-to.js ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./utils */ "./assets/js/components/utils.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

 // import SmoothScroll from 'smooth-scroll';

var SELECTORS = {
  link: '[data-scroll-to]'
};
var Default = {
  element: '#',
  offset: 0,
  speed: 400,
  updateurl: true
};

var ScrollTo = /*#__PURE__*/function () {
  function ScrollTo(element, options) {
    _classCallCheck(this, ScrollTo);

    this.element = element;
    this.options = options;
    this.getConfig();
    this.hash = $(element).attr('href') || this.config.element;
    this.target = $(this.hash);

    if (!this.target.length) {
      return;
    } // this.initScroll();


    this.bindEvents();
    this.targetVisibility();
  }

  _createClass(ScrollTo, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      var that = this;

      if (this.element[0].attributes['data-scroll-to']) {
        $(this.element).on('click', function (event) {
          return _this.scrollTo(event);
        });
      }

      $(window).on('scroll', function (event) {
        return that.targetVisibility(event);
      });
    }
  }, {
    key: "getConfig",
    value: function getConfig() {
      var dataConfig = this.element.data();

      if (dataConfig.options) {
        this.dataOptions = _utils__WEBPACK_IMPORTED_MODULE_0__["default"].parseDataOptions(dataConfig.options);
      } else {
        this.dataOptions = {};
      }

      this.config = $.extend({}, Default, dataConfig, this.dataOptions, this.options);
    }
  }, {
    key: "isOnScreen",
    value: function isOnScreen() {
      var win = $(window);
      var viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
      };
      viewport.right = viewport.left + win.width();
      viewport.bottom = viewport.top + win.height();
      var bounds = this.target.offset();
      bounds.right = bounds.left + this.target.outerWidth();
      bounds.bottom = bounds.top + this.target.outerHeight();
      return !(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom);
    }
  }, {
    key: "targetVisibility",
    value: function targetVisibility() {
      if (this.isOnScreen()) {
        this.onScreen();
      } else {
        this.outScreen();
      }
    }
  }, {
    key: "onScreen",
    value: function onScreen() {
      if (typeof this.config.onScreen === 'function') {
        this.config.onScreen(this.element, this.target);
      }
    }
  }, {
    key: "outScreen",
    value: function outScreen() {
      if (typeof this.config.outScreen === 'function') {
        this.config.outScreen(this.element, this.target);
      }
    }
  }, {
    key: "getOffset",
    value: function getOffset() {
      return Math.abs(this.target.offset().top - $(window).scrollTop());
    }
  }, {
    key: "getAnimationSpeed",
    value: function getAnimationSpeed() {
      return this.getOffset() / this.config.speed * this.config.speed;
    } // initScroll() {
    //     this.smothScroll = new SmoothScroll();
    //     this.smothScrollOptions = {
    //         speed: this.config.speed,
    //         easing: 'easeOutCubic',
    //         offset: this.config.offset,
    //         updateURL: this.config.updateURL
    //     }
    // }

  }, {
    key: "scrollTo",
    value: function scrollTo(event) {
      event.preventDefault();
      var that = this;
      var offset = 0;
      var smothScrollOptionsOffset = {};
      this.smothScroll.animateScroll(this.target[0], this.element[0], this.smothScrollOptions);

      if ($('[data-site-navbar]').length) {
        if (window.innerWidth > 991) {
          offset = $('[data-site-navbar]')[0].clientHeight;
        } else {
          offset = $('#header')[0].clientHeight;
        }

        smothScrollOptionsOffset = {
          speed: 200,
          easing: 'easeOutCubic',
          offset: offset,
          updateURL: this.config.updateURL
        };
        setTimeout(function () {
          if ($('body').hasClass('scroll-up')) {
            that.smothScroll.cancelScroll();
            that.smothScroll.animateScroll(that.target[0], that.element[0], smothScrollOptionsOffset);
          }
        }, 200);
      }
    }
  }]);

  return ScrollTo;
}();

function initDataSelectors() {
  $(SELECTORS.link).each(function () {
    new ScrollTo($(this));
  });
}

function initJqueryPlugin() {
  $.fn.luScrollTo = function (options) {
    return this.each(function () {
      new ScrollTo($(this), options);
    });
  };
}

var init = {
  initDataSelectors: initDataSelectors,
  initJqueryPlugin: initJqueryPlugin
};
/* harmony default export */ __webpack_exports__["default"] = (init);

/***/ }),

/***/ "./assets/js/components/utils.js":
/*!***************************************!*\
  !*** ./assets/js/components/utils.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/**
 * --------------------------------------------------------------------------
 * Bootstrap (v4.0.0-beta): util.js
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * --------------------------------------------------------------------------
 */
var Util = function () {
  /**
   * ------------------------------------------------------------------------
   * Private TransitionEnd Helpers
   * ------------------------------------------------------------------------
   */
  var transition = false;
  var MAX_UID = 1000000;
  var TransitionEndEvent = {
    WebkitTransition: 'webkitTransitionEnd',
    MozTransition: 'transitionend',
    OTransition: 'oTransitionEnd otransitionend',
    transition: 'transitionend'
  }; // shoutout AngusCroll (https://goo.gl/pxwQGp)

  function toType(obj) {
    return {}.toString.call(obj).match(/\s([a-zA-Z]+)/)[1].toLowerCase();
  }

  function getSpecialTransitionEndEvent() {
    return {
      bindType: transition.end,
      delegateType: transition.end,
      handle: function handle(event) {
        if ($(event.target).is(this)) {
          return event.handleObj.handler.apply(this, arguments); // eslint-disable-line prefer-rest-params
        }

        return undefined; // eslint-disable-line no-undefined
      }
    };
  }

  function transitionEndTest() {
    if (window.QUnit) {
      return false;
    }

    var el = document.createElement('bootstrap');

    for (var name in TransitionEndEvent) {
      if (typeof el.style[name] !== 'undefined') {
        return {
          end: TransitionEndEvent[name]
        };
      }
    }

    return false;
  }

  function transitionEndEmulator(duration) {
    var _this = this;

    var called = false;
    $(this).one(Util.TRANSITION_END, function () {
      called = true;
    });
    setTimeout(function () {
      if (!called) {
        Util.triggerTransitionEnd(_this);
      }
    }, duration);
    return this;
  }

  function setTransitionEndSupport() {
    transition = transitionEndTest();
    $.fn.emulateTransitionEnd = transitionEndEmulator;

    if (Util.supportsTransitionEnd()) {
      $.event.special[Util.TRANSITION_END] = getSpecialTransitionEndEvent();
    }
  }

  function parseOption(item) {
    if ('true' === item) {
      return true;
    } else if ('false' === item) {
      return false;
    } else if (!isNaN(item * 1)) {
      return parseFloat(item);
    } else {
      return item;
    }
  }
  /**
   * --------------------------------------------------------------------------
   * Public Util Api
   * --------------------------------------------------------------------------
   */


  var Util = {
    TRANSITION_END: 'bsTransitionEnd',
    getUID: function getUID(prefix) {
      do {
        // eslint-disable-next-line no-bitwise
        prefix += ~~(Math.random() * MAX_UID); // "~~" acts like a faster Math.floor() here
      } while (document.getElementById(prefix));

      return prefix;
    },
    getSelectorFromElement: function getSelectorFromElement(element) {
      var selector = element.getAttribute('data-target');

      if (!selector || selector === '#') {
        selector = element.getAttribute('href') || '';
      }

      try {
        var $selector = $(document).find(selector);
        return $selector.length > 0 ? selector : null;
      } catch (error) {
        return null;
      }
    },
    reflow: function reflow(element) {
      return element.offsetHeight;
    },
    triggerTransitionEnd: function triggerTransitionEnd(element) {
      $(element).trigger(transition.end);
    },
    supportsTransitionEnd: function supportsTransitionEnd() {
      return Boolean(transition);
    },
    isElement: function isElement(obj) {
      return (obj[0] || obj).nodeType;
    },
    typeCheckConfig: function typeCheckConfig(componentName, config, configTypes) {
      for (var property in configTypes) {
        if (Object.prototype.hasOwnProperty.call(configTypes, property)) {
          var expectedTypes = configTypes[property];
          var value = config[property];
          var valueType = value && Util.isElement(value) ? 'element' : toType(value);

          if (!new RegExp(expectedTypes).test(valueType)) {
            throw new Error("".concat(componentName.toUpperCase(), ": ") + "Option \"".concat(property, "\" provided type \"").concat(valueType, "\" ") + "but expected type \"".concat(expectedTypes, "\"."));
          }
        }
      }
    },
    parseDataOptions: function parseDataOptions(dataOptions) {
      var options = [];
      var string = dataOptions.split(';');
      string.forEach(function (item, index) {
        var option = item.split(':');
        option = option.map(function (item) {
          return item.trim();
        });

        if (option[0]) {
          options[option[0]] = parseOption(option[1]);
        }
      });
      return options;
    }
  };
  setTransitionEndSupport();
  return Util;
}($);

/* harmony default export */ __webpack_exports__["default"] = (Util);

/***/ }),

/***/ "./assets/js/order-app.js":
/*!********************************!*\
  !*** ./assets/js/order-app.js ***!
  \********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_forms__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/forms */ "./assets/js/components/forms.js");
/* harmony import */ var _components_scroll_to_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/scroll-to.js */ "./assets/js/components/scroll-to.js");


var checkboxes = $('body').find('input.icheck-control:not(.icheck-input):not(.switch__checkbox), .addon-selector');
_components_scroll_to_js__WEBPACK_IMPORTED_MODULE_1__["default"].initJqueryPlugin();
checkboxes.iCheck({
  checkboxClass: 'checkbox-styled',
  radioClass: 'radio-styled',
  increaseArea: '40%'
});
$('[data-inputs-container]').each(function () {
  new _components_forms__WEBPACK_IMPORTED_MODULE_0__["virtualInput"]($(this));
});

window.reloadConfigOptions = function (selector) {
  $(selector).find('[data-inputs-container]').each(function () {
    new _components_forms__WEBPACK_IMPORTED_MODULE_0__["virtualInput"]($(this));
  });
};

$('[data-fixed-actions]').luScrollTo({
  onScreen: function onScreen(element, target) {
    $(element).stop().removeClass('is-fixed');
  },
  outScreen: function outScreen(element, target) {
    $(element).stop().addClass('is-fixed');
  }
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbXBvbmVudHMvZm9ybXMuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbXBvbmVudHMvc2Nyb2xsLXRvLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb21wb25lbnRzL3V0aWxzLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9vcmRlci1hcHAuanMiXSwibmFtZXMiOlsidmlydHVhbElucHV0IiwiY29udGFpbmVyIiwidmlydHVhbElucHV0cyIsImZpbmQiLCJzZWxlY3RJdGVtcyIsImxlbmd0aCIsImNoZWNrYm94SW5wdXRzIiwiYmluZEV2ZW50cyIsImluaXRDaGVjayIsIm9uIiwiZXZlbnQiLCJhZGRDbGFzcyIsIm9uQ2hlY2siLCJyZW1vdmVDbGFzcyIsIm9uVW5jaGVjayIsImNoZWNrIiwiaGFuZGxlU2VsZWN0SXRlbUNsaWNrIiwic3RvcFByb3BhZ2F0aW9uIiwiY2hlY2tlZEl0ZW0iLCJjaGVja2VkSWQiLCJ2YWwiLCJzZWxjdGVkSXRlbSIsImNsb3Nlc3QiLCJ0cmlnZ2VyIiwiaW5wdXQiLCIkIiwiY3VycmVudFRhcmdldCIsImhpZGVDb2xsYXBzZSIsImF0dHIiLCJkYXRhIiwidW5kZWZpbmVkIiwiaGFzQ2xhc3MiLCJzaG93Q29sbGFwc2UiLCJjb2xsYXBzZSIsIml0ZW0iLCJoYXNEcm9wZG93biIsInRhcmdldCIsImlzIiwiZmlyc3QiLCJpQ2hlY2siLCJzZWxlY3RJdGVtIiwidmFsdWUiLCJwcm9wZXJ0aWVzIiwidHlwZSIsImRyb3Bkb3duIiwidGV4dCIsIm5hbWUiLCJwcmljZSIsInVwZGF0ZUlucHV0VmFsdWVzIiwibnVtYmVySW5wdXQiLCJpbmNCdG4iLCJkZWNCdG4iLCJ1cGRhdGVCdG4iLCJtaW5WYWx1ZSIsIm1heFZhbHVlIiwiaW5wdXRWYWx1ZSIsImluY3JlbWVudCIsImRlY3JlbWVudCIsInNob3dCdXR0b24iLCJ1cGRhdGVJbnB1dCIsInBhcmVudCIsIm51bWJlcklucHV0U2Vjb25kYXJ5IiwiU0VMRUNUT1JTIiwibGluayIsIkRlZmF1bHQiLCJlbGVtZW50Iiwib2Zmc2V0Iiwic3BlZWQiLCJ1cGRhdGV1cmwiLCJTY3JvbGxUbyIsIm9wdGlvbnMiLCJnZXRDb25maWciLCJoYXNoIiwiY29uZmlnIiwidGFyZ2V0VmlzaWJpbGl0eSIsInRoYXQiLCJhdHRyaWJ1dGVzIiwic2Nyb2xsVG8iLCJ3aW5kb3ciLCJkYXRhQ29uZmlnIiwiZGF0YU9wdGlvbnMiLCJ1dGlsIiwicGFyc2VEYXRhT3B0aW9ucyIsImV4dGVuZCIsIndpbiIsInZpZXdwb3J0IiwidG9wIiwic2Nyb2xsVG9wIiwibGVmdCIsInNjcm9sbExlZnQiLCJyaWdodCIsIndpZHRoIiwiYm90dG9tIiwiaGVpZ2h0IiwiYm91bmRzIiwib3V0ZXJXaWR0aCIsIm91dGVySGVpZ2h0IiwiaXNPblNjcmVlbiIsIm9uU2NyZWVuIiwib3V0U2NyZWVuIiwiTWF0aCIsImFicyIsImdldE9mZnNldCIsInByZXZlbnREZWZhdWx0Iiwic21vdGhTY3JvbGxPcHRpb25zT2Zmc2V0Iiwic21vdGhTY3JvbGwiLCJhbmltYXRlU2Nyb2xsIiwic21vdGhTY3JvbGxPcHRpb25zIiwiaW5uZXJXaWR0aCIsImNsaWVudEhlaWdodCIsImVhc2luZyIsInVwZGF0ZVVSTCIsInNldFRpbWVvdXQiLCJjYW5jZWxTY3JvbGwiLCJpbml0RGF0YVNlbGVjdG9ycyIsImVhY2giLCJpbml0SnF1ZXJ5UGx1Z2luIiwiZm4iLCJsdVNjcm9sbFRvIiwiaW5pdCIsIlV0aWwiLCJ0cmFuc2l0aW9uIiwiTUFYX1VJRCIsIlRyYW5zaXRpb25FbmRFdmVudCIsIldlYmtpdFRyYW5zaXRpb24iLCJNb3pUcmFuc2l0aW9uIiwiT1RyYW5zaXRpb24iLCJ0b1R5cGUiLCJvYmoiLCJ0b1N0cmluZyIsImNhbGwiLCJtYXRjaCIsInRvTG93ZXJDYXNlIiwiZ2V0U3BlY2lhbFRyYW5zaXRpb25FbmRFdmVudCIsImJpbmRUeXBlIiwiZW5kIiwiZGVsZWdhdGVUeXBlIiwiaGFuZGxlIiwiaGFuZGxlT2JqIiwiaGFuZGxlciIsImFwcGx5IiwiYXJndW1lbnRzIiwidHJhbnNpdGlvbkVuZFRlc3QiLCJRVW5pdCIsImVsIiwiZG9jdW1lbnQiLCJjcmVhdGVFbGVtZW50Iiwic3R5bGUiLCJ0cmFuc2l0aW9uRW5kRW11bGF0b3IiLCJkdXJhdGlvbiIsImNhbGxlZCIsIm9uZSIsIlRSQU5TSVRJT05fRU5EIiwidHJpZ2dlclRyYW5zaXRpb25FbmQiLCJzZXRUcmFuc2l0aW9uRW5kU3VwcG9ydCIsImVtdWxhdGVUcmFuc2l0aW9uRW5kIiwic3VwcG9ydHNUcmFuc2l0aW9uRW5kIiwic3BlY2lhbCIsInBhcnNlT3B0aW9uIiwiaXNOYU4iLCJwYXJzZUZsb2F0IiwiZ2V0VUlEIiwicHJlZml4IiwicmFuZG9tIiwiZ2V0RWxlbWVudEJ5SWQiLCJnZXRTZWxlY3RvckZyb21FbGVtZW50Iiwic2VsZWN0b3IiLCJnZXRBdHRyaWJ1dGUiLCIkc2VsZWN0b3IiLCJlcnJvciIsInJlZmxvdyIsIm9mZnNldEhlaWdodCIsIkJvb2xlYW4iLCJpc0VsZW1lbnQiLCJub2RlVHlwZSIsInR5cGVDaGVja0NvbmZpZyIsImNvbXBvbmVudE5hbWUiLCJjb25maWdUeXBlcyIsInByb3BlcnR5IiwiT2JqZWN0IiwicHJvdG90eXBlIiwiaGFzT3duUHJvcGVydHkiLCJleHBlY3RlZFR5cGVzIiwidmFsdWVUeXBlIiwiUmVnRXhwIiwidGVzdCIsIkVycm9yIiwidG9VcHBlckNhc2UiLCJzdHJpbmciLCJzcGxpdCIsImZvckVhY2giLCJpbmRleCIsIm9wdGlvbiIsIm1hcCIsInRyaW0iLCJjaGVja2JveGVzIiwiY2hlY2tib3hDbGFzcyIsInJhZGlvQ2xhc3MiLCJpbmNyZWFzZUFyZWEiLCJyZWxvYWRDb25maWdPcHRpb25zIiwic3RvcCJdLCJtYXBwaW5ncyI6IjtRQUFBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FB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U0EsUUFBVCxDQUFrQmpDLE9BQWxCLEVBQTJCN0IsTUFBM0IsRUFBbUM7SUFDekNYLENBQUMsQ0FBQ3dDLE9BQUQsQ0FBRCxDQUFXdUksSUFBWCxHQUFrQjNMLFdBQWxCLENBQThCLFVBQTlCO0VBQ0gsQ0FIZ0M7RUFJakNzRixTQUFTLEVBQUUsU0FBU0EsU0FBVCxDQUFtQmxDLE9BQW5CLEVBQTRCN0IsTUFBNUIsRUFBb0M7SUFDM0NYLENBQUMsQ0FBQ3dDLE9BQUQsQ0FBRCxDQUFXdUksSUFBWCxHQUFrQjdMLFFBQWxCLENBQTJCLFVBQTNCO0VBQ0g7QUFOZ0MsQ0FBckMsRSIsImZpbGUiOiIuLi90ZW1wbGF0ZXMvb3JkZXJmb3Jtcy9sYWdvbV9vbmVfc3RlcF9vcmRlcl9mb3JtL2pzL29yZGVyLWFwcC1taW4uanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHsgZW51bWVyYWJsZTogdHJ1ZSwgZ2V0OiBnZXR0ZXIgfSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uciA9IGZ1bmN0aW9uKGV4cG9ydHMpIHtcbiBcdFx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG4gXHRcdH1cbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbiBcdH07XG5cbiBcdC8vIGNyZWF0ZSBhIGZha2UgbmFtZXNwYWNlIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDE6IHZhbHVlIGlzIGEgbW9kdWxlIGlkLCByZXF1aXJlIGl0XG4gXHQvLyBtb2RlICYgMjogbWVyZ2UgYWxsIHByb3BlcnRpZXMgb2YgdmFsdWUgaW50byB0aGUgbnNcbiBcdC8vIG1vZGUgJiA0OiByZXR1cm4gdmFsdWUgd2hlbiBhbHJlYWR5IG5zIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDh8MTogYmVoYXZlIGxpa2UgcmVxdWlyZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy50ID0gZnVuY3Rpb24odmFsdWUsIG1vZGUpIHtcbiBcdFx0aWYobW9kZSAmIDEpIHZhbHVlID0gX193ZWJwYWNrX3JlcXVpcmVfXyh2YWx1ZSk7XG4gXHRcdGlmKG1vZGUgJiA4KSByZXR1cm4gdmFsdWU7XG4gXHRcdGlmKChtb2RlICYgNCkgJiYgdHlwZW9mIHZhbHVlID09PSAnb2JqZWN0JyAmJiB2YWx1ZSAmJiB2YWx1ZS5fX2VzTW9kdWxlKSByZXR1cm4gdmFsdWU7XG4gXHRcdHZhciBucyA9IE9iamVjdC5jcmVhdGUobnVsbCk7XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18ucihucyk7XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShucywgJ2RlZmF1bHQnLCB7IGVudW1lcmFibGU6IHRydWUsIHZhbHVlOiB2YWx1ZSB9KTtcbiBcdFx0aWYobW9kZSAmIDIgJiYgdHlwZW9mIHZhbHVlICE9ICdzdHJpbmcnKSBmb3IodmFyIGtleSBpbiB2YWx1ZSkgX193ZWJwYWNrX3JlcXVpcmVfXy5kKG5zLCBrZXksIGZ1bmN0aW9uKGtleSkgeyByZXR1cm4gdmFsdWVba2V5XTsgfS5iaW5kKG51bGwsIGtleSkpO1xuIFx0XHRyZXR1cm4gbnM7XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIi4uL21vZHVsZXNcIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IFwiLi9hc3NldHMvanMvb3JkZXItYXBwLmpzXCIpO1xuIiwiXHJcbmV4cG9ydCBjbGFzcyB2aXJ0dWFsSW5wdXR7XHJcbiAgICBjb25zdHJ1Y3Rvcihjb250YWluZXIpIHtcclxuXHJcbiAgICAgICAgdGhpcy5jb250YWluZXIgPSBjb250YWluZXI7XHJcbiAgICAgICAgdGhpcy52aXJ0dWFsSW5wdXRzID0gIHRoaXMuY29udGFpbmVyLmZpbmQoJ1tkYXRhLXZpcnR1YWwtaW5wdXRdJyk7XHJcbiAgICAgICAgdGhpcy5zZWxlY3RJdGVtcyA9ICB0aGlzLmNvbnRhaW5lci5maW5kKCdbZGF0YS1kcm9wZG93bi1tZW51XSBbZGF0YS12YWx1ZV0nKTtcclxuXHJcblx0XHRpZiAodGhpcy5jb250YWluZXIuZmluZCgnW2RhdGEtaW5wdXQtY29sbGFwc2VdJykubGVuZ3RoICE9IDApIHtcclxuICAgICAgICBcdHRoaXMuY2hlY2tib3hJbnB1dHMgID0gdGhpcy52aXJ0dWFsSW5wdXRzLmZpbmQoJy5wYW5lbC1oZWFkaW5nIGlucHV0Jyk7XHJcblx0XHR9IGVsc2Uge1x0XHJcbiAgICAgICAgXHR0aGlzLmNoZWNrYm94SW5wdXRzICA9IHRoaXMudmlydHVhbElucHV0cy5maW5kKCdpbnB1dCcpO1xyXG4gICAgICAgIH1cclxuICAgICAgICBcclxuXHJcbiAgICAgICAgdGhpcy5iaW5kRXZlbnRzKCk7XHJcblxyXG4gICAgICAgIHRoaXMuaW5pdENoZWNrKCk7XHJcblxyXG4gICAgfVxyXG5cclxuICAgIGJpbmRFdmVudHMoKSB7XHJcblxyXG5cdFx0dGhpcy5jaGVja2JveElucHV0cy5vbignaWZDaGVja2VkJywgKGV2ZW50KT0+e1xyXG4gICAgICAgICAgICB0aGlzLmFkZENsYXNzKGV2ZW50KTtcclxuICAgICAgICAgICAgdGhpcy5vbkNoZWNrKGV2ZW50KTtcclxuICAgICAgICB9KTtcclxuICAgICAgICBcclxuXHRcdHRoaXMuY2hlY2tib3hJbnB1dHMub24oJ2lmVW5jaGVja2VkJywgKGV2ZW50KT0+e1xyXG4gICAgICAgICAgICB0aGlzLnJlbW92ZUNsYXNzKGV2ZW50KTtcclxuICAgICAgICAgICAgdGhpcy5vblVuY2hlY2soZXZlbnQpOyAgICAgICAgICAgIFxyXG4gICAgICAgIH0pO1xyXG4gICAgICAgIFxyXG5cdFx0dGhpcy52aXJ0dWFsSW5wdXRzLm9uKCdjbGljayBzZWxlY3RPcHRpb24nLCAoZXZlbnQpPT57XHJcbiAgICAgICAgICAgIHRoaXMuY2hlY2soZXZlbnQpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICB0aGlzLnNlbGVjdEl0ZW1zLm9uKCdjbGljayBzZWxlY3RPcHRpb24nLCAoZXZlbnQpPT57XHJcbiAgICAgICAgICAgIHRoaXMuaGFuZGxlU2VsZWN0SXRlbUNsaWNrKGV2ZW50KTtcclxuICAgICAgICB9KTtcclxuICAgICAgICB0aGlzLnZpcnR1YWxJbnB1dHMuZmluZCgnW3R5cGU9XCJwYXNzd29yZFwiXScpLm9uKCdjbGljaycsIChldmVudCk9PntcclxuICAgICAgICAgICAgZXZlbnQuc3RvcFByb3BhZ2F0aW9uKClcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuICAgIGluaXRDaGVjaygpe1xyXG4gICAgICAgIGxldCBjaGVja2VkSXRlbSA9IHRoaXMudmlydHVhbElucHV0cy5maW5kKCdpbnB1dDpjaGVja2VkJyk7XHJcbiBcclxuICAgICAgICBsZXQgY2hlY2tlZElkID0gY2hlY2tlZEl0ZW0udmFsKCk7XHJcbiAgICAgICAgXHJcblxyXG4gICAgICAgIGlmKGNoZWNrZWRJZCl7XHJcbiAgICAgICAgICAgIGxldCBzZWxjdGVkSXRlbSA9IGNoZWNrZWRJdGVtLmNsb3Nlc3QoXCJbZGF0YS12aXJ0dWFsLWlucHV0XVwiKS5maW5kKCdbZGF0YS1kcm9wZG93bi1tZW51XSBbZGF0YS12YWx1ZT1cIicrY2hlY2tlZElkKydcIl0nKTtcclxuICAgICAgICAgICAgc2VsY3RlZEl0ZW0udHJpZ2dlcignc2VsZWN0T3B0aW9uJylcclxuICAgICAgICB9O1xyXG4gICAgfVxyXG4gICAgcmVtb3ZlQ2xhc3MoZXZlbnQpIHsgICAgICBcclxuICAgICAgICBsZXQgaW5wdXQgPSAkKGV2ZW50LmN1cnJlbnRUYXJnZXQpOyAgICBcclxuICAgICAgICBsZXQgdmlydHVhbElucHV0ID0gaW5wdXQuY2xvc2VzdCgnW2RhdGEtdmlydHVhbC1pbnB1dF0nKVxyXG4gICAgICAgIHRoaXMuaGlkZUNvbGxhcHNlKHZpcnR1YWxJbnB1dClcclxuICAgICAgICB2aXJ0dWFsSW5wdXQucmVtb3ZlQ2xhc3MoJ2NoZWNrZWQnKTtcclxuXHJcblxyXG4gICAgICAgIGlmKGlucHV0LmF0dHIoJ3R5cGUnKSA9PSAnY2hlY2tib3gnKXtcclxuICAgICAgICAgICAgcmV0dXJuXHJcbiAgICAgICAgfVxyXG4gICAgICAgIC8vIHJlbW92ZSBjbGFzcyBmcm9tIGNvbnRhaW5lclxyXG4gICAgICAgIGlmKHZpcnR1YWxJbnB1dC5kYXRhKCd2aXJ0dWFsLWlucHV0LW5vbmUnKSA9PSB1bmRlZmluZWQpe1xyXG4gICAgICAgICAgICBpZih0aGlzLmNvbnRhaW5lci5oYXNDbGFzcygnaXMtc2VsZWN0ZWQnKSl7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmNvbnRhaW5lci5yZW1vdmVDbGFzcygnaXMtc2VsZWN0ZWQnKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIGFkZENsYXNzKGV2ZW50KSB7XHJcbiAgICAgICAgbGV0IGlucHV0ID0gJChldmVudC5jdXJyZW50VGFyZ2V0KTtcclxuICAgICAgICBsZXQgdmlydHVhbElucHV0ID0gaW5wdXQuY2xvc2VzdCgnW2RhdGEtdmlydHVhbC1pbnB1dF0nKTtcclxuICAgICAgICB0aGlzLnNob3dDb2xsYXBzZSh2aXJ0dWFsSW5wdXQpXHJcblxyXG5cdFx0dmlydHVhbElucHV0LmFkZENsYXNzKCdjaGVja2VkJyk7XHJcbiAgICAgIFxyXG4gICAgICAgIGlmKGlucHV0LmF0dHIoJ3R5cGUnKSA9PSAnY2hlY2tib3gnKXtcclxuICAgICAgICAgICAgcmV0dXJuXHJcbiAgICAgICAgfVxyXG4gICAgICAgIC8vIGFkZCBDbGFzcyB0byBjb250YWluZXJcclxuICAgICAgICBpZih2aXJ0dWFsSW5wdXQuZGF0YSgndmlydHVhbC1pbnB1dC1ub25lJykgPT0gdW5kZWZpbmVkKXtcclxuICAgICAgICAgICAgaWYoIXRoaXMuY29udGFpbmVyLmhhc0NsYXNzKCdpcy1zZWxlY3RlZCcpKXtcclxuICAgICAgICAgICAgICAgIHRoaXMuY29udGFpbmVyLmFkZENsYXNzKCdpcy1zZWxlY3RlZCcpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgfSAgIFxyXG4gICAgc2hvd0NvbGxhcHNlKHZpcnR1YWxJbnB1dCl7XHJcbiAgICAgICAgdmlydHVhbElucHV0LmZpbmQoJ1tkYXRhLWlucHV0LWNvbGxhcHNlXScpLmNvbGxhcHNlKCdzaG93Jyk7XHJcbiAgICB9XHJcbiAgICBoaWRlQ29sbGFwc2UodmlydHVhbElucHV0KXtcclxuICAgICAgICB2aXJ0dWFsSW5wdXQuZmluZCgnW2RhdGEtaW5wdXQtY29sbGFwc2VdJykuY29sbGFwc2UoJ2hpZGUnKTtcclxuICAgIH1cclxuICAgIGNoZWNrKGV2ZW50KSB7XHJcbiAgICAgICAgbGV0IGl0ZW0gPSAkKGV2ZW50LmN1cnJlbnRUYXJnZXQpO1xyXG4gICAgICAgIGxldCBoYXNEcm9wZG93biAgPSBpdGVtLmRhdGEoJ3ZpcnR1YWwtaW5wdXQnKSA9PSAnZHJvcGRvd24nID8gdHJ1ZSA6IGZhbHNlO1xyXG5cclxuICAgICAgICBpZighaGFzRHJvcGRvd24pe1xyXG4gICAgICAgICAgICBpZighaXRlbS5oYXNDbGFzcygnZGlzYWJsZWQnKSAmJiAhJChldmVudC50YXJnZXQpLmlzKCdhJykpIHtcclxuICAgICAgICAgICAgICAgIGl0ZW0uZmluZCgnaW5wdXQnKS5maXJzdCgpLmlDaGVjaygnY2hlY2snKTsgXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgdGhpcy5vbkNoZWNrKGV2ZW50KTtcclxuICAgICAgICB9XHJcbiAgICBcclxuICAgIH1cclxuICAgIHVuQ2hlY2soZXZlbnQpe1xyXG5cclxuICAgIH1cclxuICAgIHVwZGF0ZUlucHV0VmFsdWVzKGl0ZW0sIHNlbGVjdEl0ZW0sIHZhbHVlLCBwcm9wZXJ0aWVzLCBldmVudCl7XHJcbiAgICBcclxuICAgICAgICBsZXQgaW5wdXQgPSBpdGVtLmZpbmQoJ2lucHV0Jyk7XHJcblxyXG4gICAgICAgIGlmKGV2ZW50LnR5cGUgPT0gJ2NsaWNrJyl7XHJcbiAgICAgICAgICAgICQoaXRlbSkuZmluZCgnW2RhdGEtdG9nZ2xlPVwiZHJvcGRvd25cIl0nKS5maXJzdCgpLmRyb3Bkb3duKCd0b2dnbGUnKTtcclxuICAgICAgICAgICAgaW5wdXQuaUNoZWNrKCdjaGVjaycpO1xyXG4gICAgICAgICAgICBpbnB1dC52YWwodmFsdWUpO1xyXG4gICAgICAgIH1cclxuICAgICAgICBcclxuICAgICAgICBpdGVtLmZpbmQoJ1tkYXRhLW5hbWVdJykudGV4dChwcm9wZXJ0aWVzLm5hbWUpO1xyXG4gICAgICAgIGl0ZW0uZmluZCgnW2RhdGEtcHJpY2VdJykudGV4dChwcm9wZXJ0aWVzLnByaWNlKTtcclxuICAgICAgICB0aGlzLm9uQ2hlY2soZXZlbnQpO1xyXG5cclxuICAgIH1cclxuICAgIGhhbmRsZVNlbGVjdEl0ZW1DbGljayhldmVudCl7XHJcblxyXG4gICAgICAgIGxldCBzZWxlY3RJdGVtID0gJChldmVudC5jdXJyZW50VGFyZ2V0KTtcclxuICAgICAgICBsZXQgaXRlbSA9IHNlbGVjdEl0ZW0uY2xvc2VzdCgnW2RhdGEtdmlydHVhbC1pbnB1dF0nKTtcclxuICAgICAgICBsZXQgdmFsdWUgPSBzZWxlY3RJdGVtLmRhdGEoJ3ZhbHVlJyk7XHJcbiAgICAgICAgbGV0IHByb3BlcnRpZXMgPSAkKHNlbGVjdEl0ZW0pLmRhdGEoJ3Byb3BlcnRpZXMnKTtcclxuICAgICAgICBcclxuICAgICAgICBpdGVtLmZpbmQoJ1tkYXRhLWRyb3Bkb3duLW1lbnVdIFtkYXRhLXZhbHVlXScpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcclxuICAgICAgICBzZWxlY3RJdGVtLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuICAgICAgICB0aGlzLnVwZGF0ZUlucHV0VmFsdWVzKGl0ZW0sIHNlbGVjdEl0ZW0sIHZhbHVlLCBwcm9wZXJ0aWVzLCBldmVudCk7XHJcblxyXG4gICAgfVxyXG4gICAgb25DaGVjayhldmVudCl7XHJcbiAgICAgICAgXHJcbiAgICAgICAgbGV0IGl0ZW0gPSAkKGV2ZW50LmN1cnJlbnRUYXJnZXQpLmNsb3Nlc3QoJ1tkYXRhLXZpcnR1YWwtaW5wdXRdJyk7XHJcblxyXG4gICAgICAgIGl0ZW0uZmluZCgnW2RhdGEtb24tdW5jaGVja2VkXScpLmFkZENsYXNzKCdoaWRkZW4nKTtcclxuICAgICAgICBpdGVtLmZpbmQoJ1tkYXRhLW9uLWNoZWNrZWRdJykucmVtb3ZlQ2xhc3MoJ2hpZGRlbicpO1xyXG5cclxuICAgIH1cclxuICAgIG9uVW5jaGVjayhldmVudCl7XHJcblxyXG4gICAgICAgIGxldCBpdGVtID0gJChldmVudC5jdXJyZW50VGFyZ2V0KS5jbG9zZXN0KCdbZGF0YS12aXJ0dWFsLWlucHV0XScpO1xyXG4gICAgICAgIGl0ZW0uZmluZCgnW2RhdGEtb24tdW5jaGVja2VkXScpLnJlbW92ZUNsYXNzKCdoaWRkZW4nKTtcclxuICAgICAgICBpdGVtLmZpbmQoJ1tkYXRhLW9uLWNoZWNrZWRdJykuYWRkQ2xhc3MoJ2hpZGRlbicpO1xyXG4gICAgICAgIGl0ZW0uZmluZCgnW2RhdGEtZHJvcGRvd24tbWVudV0gW2RhdGEtdmFsdWVdJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG5cclxuICAgIH1cclxuICAgIFxyXG59O1xyXG5leHBvcnQgY2xhc3MgbnVtYmVySW5wdXR7XHJcbiAgICBjb25zdHJ1Y3Rvcihjb250YWluZXIpe1xyXG4gICAgICAgIHRoaXMuY29udGFpbmVyID0gJChjb250YWluZXIpO1xyXG5cclxuICAgICAgICB0aGlzLmlucHV0ID0gdGhpcy5jb250YWluZXIuZmluZCgnW2RhdGEtaW5wdXQtbnVtYmVyLWlucHV0XScpO1xyXG4gICAgICAgIHRoaXMuaW5jQnRuID0gIHRoaXMuY29udGFpbmVyLmZpbmQoXCJbZGF0YS1pbnB1dC1udW1iZXItaW5jXVwiKTtcclxuICAgICAgICB0aGlzLmRlY0J0biA9ICB0aGlzLmNvbnRhaW5lci5maW5kKFwiW2RhdGEtaW5wdXQtbnVtYmVyLWRlY11cIik7XHJcbiAgICAgICAgdGhpcy51cGRhdGVCdG4gPSB0aGlzLmNvbnRhaW5lci5maW5kKFwiW2RhdGEtaW5wdXQtbnVtYmVyLXVwZGF0ZV1cIik7XHJcbiAgICAgICAgdGhpcy5taW5WYWx1ZSA9IHRoaXMuaW5wdXQuYXR0cignbWluJyk7XHJcbiAgICAgICAgdGhpcy5tYXhWYWx1ZSA9IHRoaXMuaW5wdXQuYXR0cignbWF4Jyk7XHJcbiAgICAgICAgdGhpcy5pbnB1dFZhbHVlID0gIHRoaXMuaW5wdXQudmFsKCk7XHJcbiAgICAgICAgdGhpcy5wcmljZSA9IHRoaXMuY29udGFpbmVyLmZpbmQoXCJbZGF0YS1pbnB1dC1udW1iZXItcHJpY2VdXCIpO1xyXG4gICAgICAgIHRoaXMuYmluZEV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgYmluZEV2ZW50cygpe1xyXG4gICAgICAgIHRoaXMuaW5jQnRuLm9uKCdjbGljaycsICgpPT57XHJcbiAgICAgICAgICAgIHRoaXMuaW5jcmVtZW50KCk7XHJcbiAgICAgICAgfSlcclxuICAgICAgICB0aGlzLmRlY0J0bi5vbignY2xpY2snLCAoKT0+e1xyXG4gICAgICAgICAgICB0aGlzLmRlY3JlbWVudCgpO1xyXG4gICAgICAgIH0pXHJcbiAgICAgICAgdGhpcy5pbnB1dC5vbigna2V5dXAnLCAoZXZlbnQpPT57XHJcbiAgICAgICAgICAgIGxldCBzaG93QnV0dG9uID0gdHJ1ZTtcclxuICAgICAgICAgICAgaWYgKHRoaXMuaW5wdXRWYWx1ZSA9PSBldmVudC50YXJnZXQudmFsdWUpe1xyXG4gICAgICAgICAgICAgICAgc2hvd0J1dHRvbiA9IGZhbHNlO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGVsc2UgaWYgKGV2ZW50LnRhcmdldC52YWx1ZSA9PSBcIlwiIHx8IGV2ZW50LnRhcmdldC52YWx1ZSA9PSAwKXtcclxuICAgICAgICAgICAgICAgIHNob3dCdXR0b24gPSBmYWxzZTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNleyAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgIHRoaXMuaW5wdXRWYWx1ZSA9IGV2ZW50LnRhcmdldC52YWx1ZTtcclxuICAgICAgICAgICAgICAgIHRoaXMudXBkYXRlSW5wdXQoc2hvd0J1dHRvbik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KVxyXG4gICAgfVxyXG4gICAgaGFuZGxlSW5wdXRDaGFuZ2UoKXtcclxuXHJcbiAgICB9XHJcbiAgICBpbmNyZW1lbnQoKXtcclxuICAgICAgICBsZXQgc2hvd0J1dHRvbiA9IHRydWU7XHJcbiAgICAgICAgdGhpcy5pbnB1dFZhbHVlKys7XHJcbiAgICAgICAgXHJcbiAgICAgICAgaWYodGhpcy5pbnB1dFZhbHVlID49IHRoaXMubWF4VmFsdWUpe1xyXG4gICAgICAgICAgICB0aGlzLmlucHV0VmFsdWUgPSB0aGlzLm1heFZhbHVlO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgdGhpcy51cGRhdGVJbnB1dChzaG93QnV0dG9uKTtcclxuICAgIH1cclxuICAgIGRlY3JlbWVudCgpe1xyXG4gICAgICAgIGxldCBzaG93QnV0dG9uID0gdHJ1ZTtcclxuICAgICAgICBpZih0aGlzLmlucHV0VmFsdWUgPD0gdGhpcy5taW5WYWx1ZSl7XHJcbiAgICAgICAgICAgIHNob3dCdXR0b24gPSBmYWxzZTtcclxuICAgICAgICB9XHJcbiAgICAgICAgdGhpcy5pbnB1dFZhbHVlLS07XHJcbiAgICAgICAgaWYodGhpcy5pbnB1dFZhbHVlIDw9IHRoaXMubWluVmFsdWUpe1xyXG4gICAgICAgICAgICB0aGlzLmlucHV0VmFsdWUgPSB0aGlzLm1pblZhbHVlOyAgICAgICAgICAgXHJcbiAgICAgICAgfVxyXG4gICAgICAgIHRoaXMudXBkYXRlSW5wdXQoc2hvd0J1dHRvbik7XHJcbiAgICB9XHJcbiAgICB1cGRhdGVJbnB1dChzaG93QnV0dG9uKVxyXG4gICAge1xyXG4gICAgICAgIGlmKHNob3dCdXR0b24gPT09IHRydWUpe1xyXG4gICAgICAgICAgICB0aGlzLnVwZGF0ZUJ0bi5yZW1vdmVDbGFzcygnaGlkZGVuJyk7ICAgICAgICAgICAgXHJcbiAgICAgICAgICAgIHRoaXMucHJpY2UuYWRkQ2xhc3MoJ2hpZGRlbicpO1xyXG4gICAgICAgICAgICB0aGlzLmlucHV0LnZhbCh0aGlzLmlucHV0VmFsdWUpLnBhcmVudCgpLmFkZENsYXNzKCdpcy1hY3RpdmUnKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgdGhpcy5pbnB1dC52YWwodGhpcy5pbnB1dFZhbHVlKTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG59O1xyXG5cclxuZXhwb3J0IGNsYXNzIG51bWJlcklucHV0U2Vjb25kYXJ5e1xyXG4gICAgY29uc3RydWN0b3IoY29udGFpbmVyKXtcclxuICAgICAgICB0aGlzLmNvbnRhaW5lciA9ICQoY29udGFpbmVyKTtcclxuXHJcbiAgICAgICAgdGhpcy5pbnB1dCA9IHRoaXMuY29udGFpbmVyLmZpbmQoJ1tkYXRhLWlucHV0LW51bWJlci1zZWNvbmRhcnktaW5wdXRdJyk7XHJcbiAgICAgICAgdGhpcy5pbmNCdG4gPSAgdGhpcy5jb250YWluZXIuZmluZChcIltkYXRhLWlucHV0LW51bWJlci1zZWNvbmRhcnktaW5jXVwiKTtcclxuICAgICAgICB0aGlzLmRlY0J0biA9ICB0aGlzLmNvbnRhaW5lci5maW5kKFwiW2RhdGEtaW5wdXQtbnVtYmVyLXNlY29uZGFyeS1kZWNdXCIpO1xyXG4gICAgICAgIHRoaXMudXBkYXRlQnRuID0gdGhpcy5jb250YWluZXIuZmluZChcIltkYXRhLWlucHV0LW51bWJlci1zZWNvbmRhcnktdXBkYXRlXVwiKTtcclxuICAgICAgICB0aGlzLm1pblZhbHVlID0gdGhpcy5pbnB1dC5hdHRyKCdtaW4nKTtcclxuICAgICAgICB0aGlzLm1heFZhbHVlID0gdGhpcy5pbnB1dC5hdHRyKCdtYXgnKTtcclxuICAgICAgICB0aGlzLmlucHV0VmFsdWUgPSAgdGhpcy5pbnB1dC52YWwoKTtcclxuICAgICAgICB0aGlzLnByaWNlID0gdGhpcy5jb250YWluZXIuZmluZChcIltkYXRhLWlucHV0LW51bWJlci1zZWNvbmRhcnktcHJpY2VdXCIpO1xyXG4gICAgICAgIHRoaXMuYmluZEV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgYmluZEV2ZW50cygpe1xyXG4gICAgICAgIHRoaXMuaW5jQnRuLm9uKCdjbGljaycsICgpPT57XHJcbiAgICAgICAgICAgIHRoaXMuaW5jcmVtZW50KCk7XHJcbiAgICAgICAgfSlcclxuICAgICAgICB0aGlzLmRlY0J0bi5vbignY2xpY2snLCAoKT0+e1xyXG4gICAgICAgICAgICB0aGlzLmRlY3JlbWVudCgpO1xyXG4gICAgICAgIH0pXHJcbiAgICAgICAgdGhpcy5pbnB1dC5vbignY2hhbmdlJywgKGV2ZW50KT0+e1xyXG4gICAgICAgICAgICB0aGlzLmlucHV0VmFsdWUgPSBldmVudC50YXJnZXQudmFsdWU7XHJcbiAgICAgICAgfSlcclxuICAgIH1cclxuICAgIGhhbmRsZUlucHV0Q2hhbmdlKCl7XHJcblxyXG4gICAgfVxyXG4gICAgaW5jcmVtZW50KCl7XHJcbiAgICAgICAgbGV0IHNob3dCdXR0b24gPSB0cnVlO1xyXG4gICAgICAgIHRoaXMuaW5wdXRWYWx1ZSsrO1xyXG4gICAgICAgIFxyXG4gICAgICAgIGlmKHRoaXMuaW5wdXRWYWx1ZSA+PSB0aGlzLm1heFZhbHVlKXtcclxuICAgICAgICAgICAgdGhpcy5pbnB1dFZhbHVlID0gdGhpcy5tYXhWYWx1ZTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIHRoaXMudXBkYXRlSW5wdXQoc2hvd0J1dHRvbik7XHJcbiAgICB9XHJcbiAgICBkZWNyZW1lbnQoKXtcclxuICAgICAgICBsZXQgc2hvd0J1dHRvbiA9IHRydWU7XHJcbiAgICAgICAgaWYodGhpcy5pbnB1dFZhbHVlIDw9IHRoaXMubWluVmFsdWUpe1xyXG4gICAgICAgICAgICBzaG93QnV0dG9uID0gZmFsc2U7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIHRoaXMuaW5wdXRWYWx1ZS0tO1xyXG4gICAgICAgIGlmKHRoaXMuaW5wdXRWYWx1ZSA8PSB0aGlzLm1pblZhbHVlKXtcclxuICAgICAgICAgICAgdGhpcy5pbnB1dFZhbHVlID0gdGhpcy5taW5WYWx1ZTsgICAgICAgICAgIFxyXG4gICAgICAgIH1cclxuICAgICAgICB0aGlzLnVwZGF0ZUlucHV0KHNob3dCdXR0b24pO1xyXG4gICAgfVxyXG4gICAgdXBkYXRlSW5wdXQoc2hvd0J1dHRvbilcclxuICAgIHtcclxuICAgICAgICBpZihzaG93QnV0dG9uID09PSB0cnVlKXtcclxuICAgICAgICAgICAgdGhpcy51cGRhdGVCdG4ucmVtb3ZlQ2xhc3MoJ2hpZGRlbicpO1xyXG4gICAgICAgICAgICB0aGlzLnVwZGF0ZUJ0bi5wYXJlbnQoKS5hZGRDbGFzcygnaXRlbS1wcmljZS1jaGFuZ2VkJyk7XHJcbiAgICAgICAgICAgIHRoaXMucHJpY2UuYWRkQ2xhc3MoJ2hpZGRlbicpO1xyXG4gICAgICAgICAgICB0aGlzLmlucHV0LnZhbCh0aGlzLmlucHV0VmFsdWUpLnBhcmVudCgpLmFkZENsYXNzKCdpcy1hY3RpdmUnKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgdGhpcy5pbnB1dC52YWwodGhpcy5pbnB1dFZhbHVlKTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG59O1xyXG5cclxuXHJcbiIsImltcG9ydCB1dGlsIGZyb20gJy4vdXRpbHMnO1xyXG4vLyBpbXBvcnQgU21vb3RoU2Nyb2xsIGZyb20gJ3Ntb290aC1zY3JvbGwnO1xyXG5cclxuY29uc3QgU0VMRUNUT1JTID0ge1xyXG4gICAgbGluazogJ1tkYXRhLXNjcm9sbC10b10nLFxyXG59O1xyXG5cclxuY29uc3QgRGVmYXVsdCA9IHtcclxuICAgIGVsZW1lbnQ6ICcjJyxcclxuICAgIG9mZnNldDogMCxcclxuICAgIHNwZWVkOiA0MDAsXHJcbiAgICB1cGRhdGV1cmw6dHJ1ZVxyXG59O1xyXG5cclxuY2xhc3MgU2Nyb2xsVG8ge1xyXG4gICAgY29uc3RydWN0b3IoZWxlbWVudCwgb3B0aW9ucykge1xyXG4gICAgICAgIHRoaXMuZWxlbWVudCA9IGVsZW1lbnQ7XHJcbiAgICAgICAgdGhpcy5vcHRpb25zID0gb3B0aW9ucztcclxuICAgICAgICB0aGlzLmdldENvbmZpZygpO1xyXG4gICAgICAgIHRoaXMuaGFzaCA9ICQoZWxlbWVudCkuYXR0cignaHJlZicpIHx8IHRoaXMuY29uZmlnLmVsZW1lbnQ7XHJcbiAgICAgICAgdGhpcy50YXJnZXQgPSAkKHRoaXMuaGFzaCk7XHJcbiAgICAgICAgaWYgKCF0aGlzLnRhcmdldC5sZW5ndGgpIHtcclxuICAgICAgICAgICAgcmV0dXJuO1xyXG4gICAgICAgIH1cclxuICAgICAgICAvLyB0aGlzLmluaXRTY3JvbGwoKTtcclxuICAgICAgICB0aGlzLmJpbmRFdmVudHMoKTtcclxuICAgICAgICB0aGlzLnRhcmdldFZpc2liaWxpdHkoKTtcclxuICAgIH1cclxuICAgIGJpbmRFdmVudHMoKSB7XHJcbiAgICAgICAgbGV0IHRoYXQgPSB0aGlzO1xyXG4gICAgICAgIGlmICh0aGlzLmVsZW1lbnRbMF0uYXR0cmlidXRlc1snZGF0YS1zY3JvbGwtdG8nXSl7XHJcbiAgICAgICAgICAgICQodGhpcy5lbGVtZW50KS5vbignY2xpY2snLCAoZXZlbnQpID0+IHRoaXMuc2Nyb2xsVG8oZXZlbnQpKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgJCh3aW5kb3cpLm9uKCdzY3JvbGwnLCBmdW5jdGlvbiAoZXZlbnQpIHtcclxuICAgICAgICAgICAgcmV0dXJuIHRoYXQudGFyZ2V0VmlzaWJpbGl0eShldmVudCk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcbiAgICBnZXRDb25maWcoKSB7XHJcbiAgICAgICAgbGV0IGRhdGFDb25maWcgPSB0aGlzLmVsZW1lbnQuZGF0YSgpO1xyXG4gICAgICAgIGlmIChkYXRhQ29uZmlnLm9wdGlvbnMpIHtcclxuICAgICAgICAgICAgdGhpcy5kYXRhT3B0aW9ucyA9IHV0aWwucGFyc2VEYXRhT3B0aW9ucyhkYXRhQ29uZmlnLm9wdGlvbnMpO1xyXG4gICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgIHRoaXMuZGF0YU9wdGlvbnMgPSB7fTtcclxuICAgICAgICB9XHJcbiAgICAgICAgdGhpcy5jb25maWcgPSAkLmV4dGVuZCh7fSwgRGVmYXVsdCwgZGF0YUNvbmZpZywgdGhpcy5kYXRhT3B0aW9ucywgdGhpcy5vcHRpb25zKTtcclxuICAgIH1cclxuXHJcbiAgICBpc09uU2NyZWVuKCl7XHJcbiAgICAgICAgdmFyIHdpbiA9ICQod2luZG93KTtcclxuXHJcbiAgICAgICAgdmFyIHZpZXdwb3J0ID0ge1xyXG4gICAgICAgICAgICB0b3A6IHdpbi5zY3JvbGxUb3AoKSxcclxuICAgICAgICAgICAgbGVmdDogd2luLnNjcm9sbExlZnQoKVxyXG4gICAgICAgIH07XHJcbiAgICAgICAgdmlld3BvcnQucmlnaHQgPSB2aWV3cG9ydC5sZWZ0ICsgd2luLndpZHRoKCk7XHJcbiAgICAgICAgdmlld3BvcnQuYm90dG9tID0gdmlld3BvcnQudG9wICsgd2luLmhlaWdodCgpO1xyXG5cclxuICAgICAgICB2YXIgYm91bmRzID0gdGhpcy50YXJnZXQub2Zmc2V0KCk7XHJcbiAgICAgICAgYm91bmRzLnJpZ2h0ID0gYm91bmRzLmxlZnQgKyB0aGlzLnRhcmdldC5vdXRlcldpZHRoKCk7XHJcbiAgICAgICAgYm91bmRzLmJvdHRvbSA9IGJvdW5kcy50b3AgKyB0aGlzLnRhcmdldC5vdXRlckhlaWdodCgpO1xyXG5cclxuICAgICAgICByZXR1cm4gISh2aWV3cG9ydC5yaWdodCA8IGJvdW5kcy5sZWZ0IHx8IHZpZXdwb3J0LmxlZnQgPiBib3VuZHMucmlnaHQgfHwgdmlld3BvcnQuYm90dG9tIDwgYm91bmRzLnRvcCB8fCB2aWV3cG9ydC50b3AgPiBib3VuZHMuYm90dG9tKTtcclxuICAgIH1cclxuXHJcbiAgICB0YXJnZXRWaXNpYmlsaXR5KCl7XHJcbiAgICAgICAgaWYgKHRoaXMuaXNPblNjcmVlbigpKSB7XHJcbiAgICAgICAgICAgIHRoaXMub25TY3JlZW4oKTtcclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICB0aGlzLm91dFNjcmVlbigpO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICBvblNjcmVlbigpe1xyXG4gICAgICAgIGlmICh0eXBlb2YgdGhpcy5jb25maWcub25TY3JlZW4gPT09ICdmdW5jdGlvbicpIHtcclxuICAgICAgICAgICAgdGhpcy5jb25maWcub25TY3JlZW4odGhpcy5lbGVtZW50LCB0aGlzLnRhcmdldCk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgb3V0U2NyZWVuKCl7XHJcbiAgICAgICAgaWYgKHR5cGVvZiB0aGlzLmNvbmZpZy5vdXRTY3JlZW4gPT09ICdmdW5jdGlvbicpIHtcclxuICAgICAgICAgICAgdGhpcy5jb25maWcub3V0U2NyZWVuKHRoaXMuZWxlbWVudCwgdGhpcy50YXJnZXQpO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIGdldE9mZnNldCgpe1xyXG4gICAgICAgIHJldHVybiBNYXRoLmFicyh0aGlzLnRhcmdldC5vZmZzZXQoKS50b3AgLSAkKHdpbmRvdykuc2Nyb2xsVG9wKCkpO1xyXG4gICAgfVxyXG4gICAgZ2V0QW5pbWF0aW9uU3BlZWQoKXtcclxuICAgICAgICByZXR1cm4gdGhpcy5nZXRPZmZzZXQoKSAvIHRoaXMuY29uZmlnLnNwZWVkICogdGhpcy5jb25maWcuc3BlZWQ7XHJcbiAgICB9XHJcbiAgICAvLyBpbml0U2Nyb2xsKCkge1xyXG4gICAgLy8gICAgIHRoaXMuc21vdGhTY3JvbGwgPSBuZXcgU21vb3RoU2Nyb2xsKCk7XHJcbiAgICAvLyAgICAgdGhpcy5zbW90aFNjcm9sbE9wdGlvbnMgPSB7XHJcbiAgICAvLyAgICAgICAgIHNwZWVkOiB0aGlzLmNvbmZpZy5zcGVlZCxcclxuICAgIC8vICAgICAgICAgZWFzaW5nOiAnZWFzZU91dEN1YmljJyxcclxuICAgIC8vICAgICAgICAgb2Zmc2V0OiB0aGlzLmNvbmZpZy5vZmZzZXQsXHJcbiAgICAvLyAgICAgICAgIHVwZGF0ZVVSTDogdGhpcy5jb25maWcudXBkYXRlVVJMXHJcbiAgICAvLyAgICAgfVxyXG4gICAgLy8gfVxyXG4gICAgc2Nyb2xsVG8oZXZlbnQpIHtcclxuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgIGxldCB0aGF0ID0gdGhpcztcclxuICAgICAgICBsZXQgb2Zmc2V0ID0gMDtcclxuICAgICAgICBsZXQgc21vdGhTY3JvbGxPcHRpb25zT2Zmc2V0ID0ge307XHJcbiAgICAgICAgdGhpcy5zbW90aFNjcm9sbC5hbmltYXRlU2Nyb2xsKHRoaXMudGFyZ2V0WzBdLCB0aGlzLmVsZW1lbnRbMF0sIHRoaXMuc21vdGhTY3JvbGxPcHRpb25zKTtcclxuICAgICAgICBpZiAoJCgnW2RhdGEtc2l0ZS1uYXZiYXJdJykubGVuZ3RoKXtcclxuICAgICAgICAgICAgaWYgKHdpbmRvdy5pbm5lcldpZHRoID4gOTkxKXtcclxuICAgICAgICAgICAgICAgIG9mZnNldCA9ICQoJ1tkYXRhLXNpdGUtbmF2YmFyXScpWzBdLmNsaWVudEhlaWdodDtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICAgICAgb2Zmc2V0ID0gJCgnI2hlYWRlcicpWzBdLmNsaWVudEhlaWdodDtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBzbW90aFNjcm9sbE9wdGlvbnNPZmZzZXQgPSB7XHJcbiAgICAgICAgICAgICAgICBzcGVlZDogMjAwLFxyXG4gICAgICAgICAgICAgICAgZWFzaW5nOiAnZWFzZU91dEN1YmljJyxcclxuICAgICAgICAgICAgICAgIG9mZnNldDogb2Zmc2V0LFxyXG4gICAgICAgICAgICAgICAgdXBkYXRlVVJMOiB0aGlzLmNvbmZpZy51cGRhdGVVUkxcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICBpZiAoJCgnYm9keScpLmhhc0NsYXNzKCdzY3JvbGwtdXAnKSl7XHJcbiAgICAgICAgICAgICAgICAgICAgdGhhdC5zbW90aFNjcm9sbC5jYW5jZWxTY3JvbGwoKTtcclxuICAgICAgICAgICAgICAgICAgICB0aGF0LnNtb3RoU2Nyb2xsLmFuaW1hdGVTY3JvbGwodGhhdC50YXJnZXRbMF0sIHRoYXQuZWxlbWVudFswXSwgc21vdGhTY3JvbGxPcHRpb25zT2Zmc2V0KTtcclxuICAgICAgICAgICAgICAgIH0gXHJcbiAgICAgICAgICAgIH0sIDIwMClcclxuICAgICAgICB9XHJcbiAgICB9XHJcbn1cclxuXHJcbmZ1bmN0aW9uIGluaXREYXRhU2VsZWN0b3JzKCkge1xyXG4gICAgJChTRUxFQ1RPUlMubGluaykuZWFjaChmdW5jdGlvbigpIHtcclxuICAgICAgICBuZXcgU2Nyb2xsVG8oJCh0aGlzKSk7XHJcbiAgICB9KTtcclxufVxyXG5cclxuZnVuY3Rpb24gaW5pdEpxdWVyeVBsdWdpbigpIHtcclxuICAgICQuZm4ubHVTY3JvbGxUbyA9IGZ1bmN0aW9uKG9wdGlvbnMpIHtcclxuICAgICAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBuZXcgU2Nyb2xsVG8oJCh0aGlzKSwgb3B0aW9ucyk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9O1xyXG59XHJcbmNvbnN0IGluaXQgPSB7XHJcbiAgICBpbml0RGF0YVNlbGVjdG9ycyxcclxuICAgIGluaXRKcXVlcnlQbHVnaW4sXHJcbn07XHJcbmV4cG9ydCBkZWZhdWx0IGluaXQ7IiwiLyoqXHJcbiAqIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbiAqIEJvb3RzdHJhcCAodjQuMC4wLWJldGEpOiB1dGlsLmpzXHJcbiAqIExpY2Vuc2VkIHVuZGVyIE1JVCAoaHR0cHM6Ly9naXRodWIuY29tL3R3YnMvYm9vdHN0cmFwL2Jsb2IvbWFzdGVyL0xJQ0VOU0UpXHJcbiAqIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbiAqL1xyXG5cclxuY29uc3QgVXRpbCA9ICgoKSA9PiB7XHJcblxyXG5cclxuICAgIC8qKlxyXG4gICAgICogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbiAgICAgKiBQcml2YXRlIFRyYW5zaXRpb25FbmQgSGVscGVyc1xyXG4gICAgICogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbiAgICAgKi9cclxuXHJcbiAgICBsZXQgdHJhbnNpdGlvbiA9IGZhbHNlO1xyXG5cclxuICAgIGNvbnN0IE1BWF9VSUQgPSAxMDAwMDAwO1xyXG5cclxuICAgIGNvbnN0IFRyYW5zaXRpb25FbmRFdmVudCA9IHtcclxuICAgICAgICBXZWJraXRUcmFuc2l0aW9uIDogJ3dlYmtpdFRyYW5zaXRpb25FbmQnLFxyXG4gICAgICAgIE1velRyYW5zaXRpb24gICAgOiAndHJhbnNpdGlvbmVuZCcsXHJcbiAgICAgICAgT1RyYW5zaXRpb24gICAgICA6ICdvVHJhbnNpdGlvbkVuZCBvdHJhbnNpdGlvbmVuZCcsXHJcbiAgICAgICAgdHJhbnNpdGlvbiAgICAgICA6ICd0cmFuc2l0aW9uZW5kJ1xyXG4gICAgfVxyXG5cclxuICAgIC8vIHNob3V0b3V0IEFuZ3VzQ3JvbGwgKGh0dHBzOi8vZ29vLmdsL3B4d1FHcClcclxuICAgIGZ1bmN0aW9uIHRvVHlwZShvYmopIHtcclxuICAgICAgICByZXR1cm4ge30udG9TdHJpbmcuY2FsbChvYmopLm1hdGNoKC9cXHMoW2EtekEtWl0rKS8pWzFdLnRvTG93ZXJDYXNlKClcclxuICAgIH1cclxuXHJcbiAgICBmdW5jdGlvbiBnZXRTcGVjaWFsVHJhbnNpdGlvbkVuZEV2ZW50KCkge1xyXG4gICAgICAgIHJldHVybiB7XHJcbiAgICAgICAgICAgIGJpbmRUeXBlOiB0cmFuc2l0aW9uLmVuZCxcclxuICAgICAgICAgICAgZGVsZWdhdGVUeXBlOiB0cmFuc2l0aW9uLmVuZCxcclxuICAgICAgICAgICAgaGFuZGxlKGV2ZW50KSB7XHJcbiAgICAgICAgICAgICAgICBpZiAoJChldmVudC50YXJnZXQpLmlzKHRoaXMpKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGV2ZW50LmhhbmRsZU9iai5oYW5kbGVyLmFwcGx5KHRoaXMsIGFyZ3VtZW50cykgLy8gZXNsaW50LWRpc2FibGUtbGluZSBwcmVmZXItcmVzdC1wYXJhbXNcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIHJldHVybiB1bmRlZmluZWQgLy8gZXNsaW50LWRpc2FibGUtbGluZSBuby11bmRlZmluZWRcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICBmdW5jdGlvbiB0cmFuc2l0aW9uRW5kVGVzdCgpIHtcclxuICAgICAgICBpZiAod2luZG93LlFVbml0KSB7XHJcbiAgICAgICAgICAgIHJldHVybiBmYWxzZVxyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgY29uc3QgZWwgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdib290c3RyYXAnKVxyXG5cclxuICAgICAgICBmb3IgKGNvbnN0IG5hbWUgaW4gVHJhbnNpdGlvbkVuZEV2ZW50KSB7XHJcbiAgICAgICAgICAgIGlmICh0eXBlb2YgZWwuc3R5bGVbbmFtZV0gIT09ICd1bmRlZmluZWQnKSB7XHJcbiAgICAgICAgICAgICAgICByZXR1cm4ge1xyXG4gICAgICAgICAgICAgICAgICAgIGVuZDogVHJhbnNpdGlvbkVuZEV2ZW50W25hbWVdXHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIHJldHVybiBmYWxzZVxyXG4gICAgfVxyXG5cclxuICAgIGZ1bmN0aW9uIHRyYW5zaXRpb25FbmRFbXVsYXRvcihkdXJhdGlvbikge1xyXG4gICAgICAgIGxldCBjYWxsZWQgPSBmYWxzZVxyXG5cclxuICAgICAgICAkKHRoaXMpLm9uZShVdGlsLlRSQU5TSVRJT05fRU5ELCAoKSA9PiB7XHJcbiAgICAgICAgICAgIGNhbGxlZCA9IHRydWVcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgc2V0VGltZW91dCgoKSA9PiB7XHJcbiAgICAgICAgICAgIGlmICghY2FsbGVkKSB7XHJcbiAgICAgICAgICAgICAgICBVdGlsLnRyaWdnZXJUcmFuc2l0aW9uRW5kKHRoaXMpXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9LCBkdXJhdGlvbik7XHJcblxyXG4gICAgICAgIHJldHVybiB0aGlzXHJcbiAgICB9XHJcblxyXG4gICAgZnVuY3Rpb24gc2V0VHJhbnNpdGlvbkVuZFN1cHBvcnQoKSB7XHJcbiAgICAgICAgdHJhbnNpdGlvbiA9IHRyYW5zaXRpb25FbmRUZXN0KClcclxuXHJcbiAgICAgICAgJC5mbi5lbXVsYXRlVHJhbnNpdGlvbkVuZCA9IHRyYW5zaXRpb25FbmRFbXVsYXRvclxyXG5cclxuICAgICAgICBpZiAoVXRpbC5zdXBwb3J0c1RyYW5zaXRpb25FbmQoKSkge1xyXG4gICAgICAgICAgICAkLmV2ZW50LnNwZWNpYWxbVXRpbC5UUkFOU0lUSU9OX0VORF0gPSBnZXRTcGVjaWFsVHJhbnNpdGlvbkVuZEV2ZW50KClcclxuICAgICAgICB9XHJcbiAgICB9XHJcbiAgICBmdW5jdGlvbiBwYXJzZU9wdGlvbihpdGVtKXtcclxuICAgICAgICBpZiAoJ3RydWUnID09PSBpdGVtKXtcclxuICAgICAgICAgICAgcmV0dXJuIHRydWU7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGVsc2UgaWYgKCdmYWxzZScgPT09IGl0ZW0pe1xyXG4gICAgICAgICAgICByZXR1cm4gZmFsc2VcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZSBpZiAoIWlzTmFOKGl0ZW0gKiAxKSl7XHJcbiAgICAgICAgICAgIHJldHVybiBwYXJzZUZsb2F0KGl0ZW0pO1xyXG4gICAgICAgIH1lbHNle1xyXG4gICAgICAgICAgICByZXR1cm4gaXRlbTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgLyoqXHJcbiAgICAgKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4gICAgICogUHVibGljIFV0aWwgQXBpXHJcbiAgICAgKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4gICAgICovXHJcblxyXG4gICAgY29uc3QgVXRpbCA9IHtcclxuXHJcbiAgICAgICAgVFJBTlNJVElPTl9FTkQ6ICdic1RyYW5zaXRpb25FbmQnLFxyXG5cclxuICAgICAgICBnZXRVSUQocHJlZml4KSB7XHJcbiAgICAgICAgICAgIGRvIHtcclxuICAgICAgICAgICAgICAgIC8vIGVzbGludC1kaXNhYmxlLW5leHQtbGluZSBuby1iaXR3aXNlXHJcbiAgICAgICAgICAgICAgICBwcmVmaXggKz0gfn4oTWF0aC5yYW5kb20oKSAqIE1BWF9VSUQpIC8vIFwifn5cIiBhY3RzIGxpa2UgYSBmYXN0ZXIgTWF0aC5mbG9vcigpIGhlcmVcclxuICAgICAgICAgICAgfSB3aGlsZSAoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQocHJlZml4KSlcclxuICAgICAgICAgICAgcmV0dXJuIHByZWZpeFxyXG4gICAgICAgIH0sXHJcblxyXG4gICAgICAgIGdldFNlbGVjdG9yRnJvbUVsZW1lbnQoZWxlbWVudCkge1xyXG4gICAgICAgICAgICBsZXQgc2VsZWN0b3IgPSBlbGVtZW50LmdldEF0dHJpYnV0ZSgnZGF0YS10YXJnZXQnKVxyXG4gICAgICAgICAgICBpZiAoIXNlbGVjdG9yIHx8IHNlbGVjdG9yID09PSAnIycpIHtcclxuICAgICAgICAgICAgICAgIHNlbGVjdG9yID0gZWxlbWVudC5nZXRBdHRyaWJ1dGUoJ2hyZWYnKSB8fCAnJ1xyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICB0cnkge1xyXG4gICAgICAgICAgICAgICAgY29uc3QgJHNlbGVjdG9yID0gJChkb2N1bWVudCkuZmluZChzZWxlY3RvcilcclxuICAgICAgICAgICAgICAgIHJldHVybiAkc2VsZWN0b3IubGVuZ3RoID4gMCA/IHNlbGVjdG9yIDogbnVsbFxyXG4gICAgICAgICAgICB9IGNhdGNoIChlcnJvcikge1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuIG51bGxcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0sXHJcblxyXG4gICAgICAgIHJlZmxvdyhlbGVtZW50KSB7XHJcbiAgICAgICAgICAgIHJldHVybiBlbGVtZW50Lm9mZnNldEhlaWdodFxyXG4gICAgICAgIH0sXHJcblxyXG4gICAgICAgIHRyaWdnZXJUcmFuc2l0aW9uRW5kKGVsZW1lbnQpIHtcclxuICAgICAgICAgICAgJChlbGVtZW50KS50cmlnZ2VyKHRyYW5zaXRpb24uZW5kKVxyXG4gICAgICAgIH0sXHJcblxyXG4gICAgICAgIHN1cHBvcnRzVHJhbnNpdGlvbkVuZCgpIHtcclxuICAgICAgICAgICAgcmV0dXJuIEJvb2xlYW4odHJhbnNpdGlvbilcclxuICAgICAgICB9LFxyXG5cclxuICAgICAgICBpc0VsZW1lbnQob2JqKSB7XHJcbiAgICAgICAgICAgIHJldHVybiAob2JqWzBdIHx8IG9iaikubm9kZVR5cGVcclxuICAgICAgICB9LFxyXG5cclxuICAgICAgICB0eXBlQ2hlY2tDb25maWcoY29tcG9uZW50TmFtZSwgY29uZmlnLCBjb25maWdUeXBlcykge1xyXG4gICAgICAgICAgICBmb3IgKGNvbnN0IHByb3BlcnR5IGluIGNvbmZpZ1R5cGVzKSB7XHJcbiAgICAgICAgICAgICAgICBpZiAoT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKGNvbmZpZ1R5cGVzLCBwcm9wZXJ0eSkpIHtcclxuICAgICAgICAgICAgICAgICAgICBjb25zdCBleHBlY3RlZFR5cGVzID0gY29uZmlnVHlwZXNbcHJvcGVydHldXHJcbiAgICAgICAgICAgICAgICAgICAgY29uc3QgdmFsdWUgICAgICAgICA9IGNvbmZpZ1twcm9wZXJ0eV1cclxuICAgICAgICAgICAgICAgICAgICBjb25zdCB2YWx1ZVR5cGUgICAgID0gdmFsdWUgJiYgVXRpbC5pc0VsZW1lbnQodmFsdWUpID9cclxuICAgICAgICAgICAgICAgICAgICAgICAgJ2VsZW1lbnQnIDogdG9UeXBlKHZhbHVlKVxyXG5cclxuICAgICAgICAgICAgICAgICAgICBpZiAoIW5ldyBSZWdFeHAoZXhwZWN0ZWRUeXBlcykudGVzdCh2YWx1ZVR5cGUpKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRocm93IG5ldyBFcnJvcihcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGAke2NvbXBvbmVudE5hbWUudG9VcHBlckNhc2UoKX06IGAgK1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYE9wdGlvbiBcIiR7cHJvcGVydHl9XCIgcHJvdmlkZWQgdHlwZSBcIiR7dmFsdWVUeXBlfVwiIGAgK1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYGJ1dCBleHBlY3RlZCB0eXBlIFwiJHtleHBlY3RlZFR5cGVzfVwiLmApXHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSxcclxuICAgICAgICBwYXJzZURhdGFPcHRpb25zKGRhdGFPcHRpb25zKXtcclxuICAgICAgICAgICAgbGV0IG9wdGlvbnMgPSBbXTtcclxuICAgICAgICAgICAgbGV0IHN0cmluZyA9IGRhdGFPcHRpb25zLnNwbGl0KCc7Jyk7XHJcblxyXG4gICAgICAgICAgICBzdHJpbmcuZm9yRWFjaChmdW5jdGlvbihpdGVtLGluZGV4KXtcclxuICAgICAgICAgICAgICAgIGxldCBvcHRpb24gID0gaXRlbS5zcGxpdCgnOicpO1xyXG5cclxuICAgICAgICAgICAgICAgIG9wdGlvbiA9IG9wdGlvbi5tYXAoZnVuY3Rpb24oaXRlbSl7XHJcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGl0ZW0udHJpbSgpO1xyXG4gICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgIGlmKG9wdGlvblswXSl7XHJcbiAgICAgICAgICAgICAgICAgICAgb3B0aW9uc1tvcHRpb25bMF1dID0gcGFyc2VPcHRpb24ob3B0aW9uWzFdKTtcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSk7XHJcblxyXG4gICAgICAgICAgICByZXR1cm4gb3B0aW9ucztcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgc2V0VHJhbnNpdGlvbkVuZFN1cHBvcnQoKVxyXG5cclxuICAgIHJldHVybiBVdGlsXHJcblxyXG59KSgkKVxyXG5cclxuZXhwb3J0IGRlZmF1bHQgVXRpbCIsImltcG9ydCB7XHJcbiAgICB2aXJ0dWFsSW5wdXQsXHJcbiAgICBudW1iZXJJbnB1dCxcclxuICAgIG51bWJlcklucHV0U2Vjb25kYXJ5XHJcbiAgfSBmcm9tICcuL2NvbXBvbmVudHMvZm9ybXMnO1xyXG5cclxuaW1wb3J0IHNjcm9sbFRvIGZyb20gJy4vY29tcG9uZW50cy9zY3JvbGwtdG8uanMnO1xyXG5cclxuY29uc3QgY2hlY2tib3hlcyA9ICQoJ2JvZHknKS5maW5kKCdpbnB1dC5pY2hlY2stY29udHJvbDpub3QoLmljaGVjay1pbnB1dCk6bm90KC5zd2l0Y2hfX2NoZWNrYm94KSwgLmFkZG9uLXNlbGVjdG9yJyk7XHJcbnNjcm9sbFRvLmluaXRKcXVlcnlQbHVnaW4oKTtcclxuXHJcbmNoZWNrYm94ZXMuaUNoZWNrKHtcclxuICAgIGNoZWNrYm94Q2xhc3M6ICdjaGVja2JveC1zdHlsZWQnLFxyXG4gICAgcmFkaW9DbGFzczogJ3JhZGlvLXN0eWxlZCcsXHJcbiAgICBpbmNyZWFzZUFyZWE6ICc0MCUnXHJcbn0pO1xyXG5cclxuJCgnW2RhdGEtaW5wdXRzLWNvbnRhaW5lcl0nKS5lYWNoKGZ1bmN0aW9uKCkge1xyXG4gICAgbmV3IHZpcnR1YWxJbnB1dCgkKHRoaXMpKTtcclxufSk7XHJcblxyXG53aW5kb3cucmVsb2FkQ29uZmlnT3B0aW9ucyA9IGZ1bmN0aW9uIChzZWxlY3Rvcikge1xyXG5cclxuICAgICQoc2VsZWN0b3IpLmZpbmQoJ1tkYXRhLWlucHV0cy1jb250YWluZXJdJykuZWFjaChmdW5jdGlvbigpIHtcclxuICAgICAgICBuZXcgdmlydHVhbElucHV0KCQodGhpcykpO1xyXG4gICAgfSk7XHJcbiAgXHJcbiAgfTtcclxuXHJcblxyXG4kKCdbZGF0YS1maXhlZC1hY3Rpb25zXScpLmx1U2Nyb2xsVG8oe1xyXG4gICAgb25TY3JlZW46IGZ1bmN0aW9uIG9uU2NyZWVuKGVsZW1lbnQsIHRhcmdldCkge1xyXG4gICAgICAgICQoZWxlbWVudCkuc3RvcCgpLnJlbW92ZUNsYXNzKCdpcy1maXhlZCcpO1xyXG4gICAgfSxcclxuICAgIG91dFNjcmVlbjogZnVuY3Rpb24gb3V0U2NyZWVuKGVsZW1lbnQsIHRhcmdldCkge1xyXG4gICAgICAgICQoZWxlbWVudCkuc3RvcCgpLmFkZENsYXNzKCdpcy1maXhlZCcpO1xyXG4gICAgfVxyXG59KTsiXSwic291cmNlUm9vdCI6IiJ9