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
/******/ 	__webpack_require__.p = "./../";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/admin/js/support-hours.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/admin/js/components/holidays.js":
/*!************************************************!*\
  !*** ./assets/admin/js/components/holidays.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _holidays_add_new__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./holidays/add-new */ "./assets/admin/js/components/holidays/add-new.js");
/* harmony import */ var _holidays_remove__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./holidays/remove */ "./assets/admin/js/components/holidays/remove.js");
/* harmony import */ var _holidays_remove_confirm__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./holidays/remove-confirm */ "./assets/admin/js/components/holidays/remove-confirm.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/*
* ******************************************
    RS Studio - Support Hours
    1. Imports
    2. Holidays
    3. Init
* ******************************************
*/

/*
* ******************************************
    1. Imports
* ******************************************
*/



/*
* ******************************************
    2. Holidays
* ******************************************
*/

var holidays = /*#__PURE__*/function () {
  function holidays(container) {
    _classCallCheck(this, holidays);

    this.container = container;
    this.addNew = this.container.find('[data-support-hours-holidays-add]');
    this.remove = this.container.find('[data-support-hours-holidays-list-item-remove]');
    this.modal = $('[data-support-hours-holiday-remove-modal]');
    this.bindEvents();
  }

  _createClass(holidays, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.loadHolidays(this.container);
    }
  }, {
    key: "loadHolidays",
    value: function loadHolidays() {
      var that = this;
      this.addNew.each(function () {
        new _holidays_add_new__WEBPACK_IMPORTED_MODULE_0__["default"]($(this), that.container);
      });
      this.remove.each(function () {
        new _holidays_remove__WEBPACK_IMPORTED_MODULE_1__["default"]($(this));
      });
      new _holidays_remove_confirm__WEBPACK_IMPORTED_MODULE_2__["default"](this.modal, this.container);
    }
  }]);

  return holidays;
}();
/*
* ******************************************
    3. Init
* ******************************************
*/


function initDataSelectors() {
  var section = undefined;

  if ($('[data-support-hours-holidays]').length) {
    section = $('[data-support-hours-holidays]');
  }

  if (section !== undefined) {
    new holidays(section);
  }
}

var init = {
  initDataSelectors: initDataSelectors
};
/* harmony default export */ __webpack_exports__["default"] = (init);

/***/ }),

/***/ "./assets/admin/js/components/holidays/add-new.js":
/*!********************************************************!*\
  !*** ./assets/admin/js/components/holidays/add-new.js ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return addNewHoliday; });
/* harmony import */ var _remove__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./remove */ "./assets/admin/js/components/holidays/remove.js");
/* harmony import */ var _translations__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../translations */ "./assets/admin/js/components/translations.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }




var addNewHoliday = /*#__PURE__*/function () {
  function addNewHoliday(button, container) {
    _classCallCheck(this, addNewHoliday);

    this.button = button;
    this.container = container;
    this.list = this.container.find('[data-support-hours-holidays-list]');
    this.ajaxUrlInput = this.container.find('[data-support-hours-translation-input]');
    this.bindEvents();
  }

  _createClass(addNewHoliday, [{
    key: "bindEvents",
    value: function bindEvents() {
      $(this.button).on('click', this.addNewHoliday.bind(this));
    }
  }, {
    key: "addNewHoliday",
    value: function addNewHoliday() {
      var ajaxUrl = '';

      if (this.ajaxUrlInput.length) {
        ajaxUrl = this.ajaxUrlInput[0].attributes['data-ajax-url'].value;
      }

      var index = this.button[0].attributes['data-support-hours-holidays-add'].value,
          newItem = "\n            <li class=\"holiday-list__item\" data-support-hours-holidays-list-item=\"".concat(index, "\">\n                <input type=\"hidden\" name=\"holiday[id][]\" value=\"\" data-support-hours-holidays-list-item-id>\n                <div class=\"row\">\n                    <div class=\"col-md-6\">\n                        <div class=\"form-group mb-0x\" data-support-hours-translation-container>\n                            <input \n                                class=\"form-control form-control--name\" \n                                value=\"\" \n                                data-support-hours-translation-input\n                                data-ajax-url=\"").concat(ajaxUrl, "\"\n                                placeholder=\"Enter holiday name\"\n                            >\n                            <input \n                                type=\"hidden\" name=\"holiday[name][]\" \n                                value=\"\" \n                                data-support-hours-translation-value\n                            >\n                            <a \n                                class=\"form-label__translate\" \n                                href=\"#supportHoursTranslationModal\" \n                                data-support-hours-translation \n                                data-toggle=\"lu-modal\" \n                                data-backdrop=\"static\" \n                                data-keyboard=\"false\"\n                            >\n                                Translate\n                            </a>\n                        </div>\n                    </div>\n                    <div class=\"col-md-6\">\n                        <div class=\"times-container times-container--base\">\n                            <div class=\"time-col\">\n                                <span class=\"time-select-container\">\n                                    <input type=\"date\" class=\"form-control time-select\" name=\"holiday[start][]\" value=\"\"/>\n                                </span>\n                            </div>\n                            <div class=\"form-separator\">\n                                -\n                            </div>\n                            <div class=\"time-col time-col--end\">\n                                <span class=\"time-select-container\">\n                                    <input type=\"date\" class=\"form-control time-select\" name=\"holiday[end][]\" value=\"\"/>\n                                </span>\n                            </div>\n                            <div class=\"btn-col\">\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </li>"),
          removeButton = "\n                <a \n                    class=\"btn btn--icon btn--link btn--holiday\" \n                    href=\"#\" \n                    data-toggle=\"lu-modal\" \n                    data-target=\"#removeHolidayItem\"\n                    data-support-hours-holidays-list-item-remove\n                >\n                    <i class=\"btn__icon lm lm-trash\" data-toggle=\"lu-tooltip\" data-title=\"Delete holiday period\"></i>\n                </a>\n            ",
          lastItem = this.list.find('[data-support-hours-holidays-list-item]').last(),
          btnCol = lastItem.find('.btn-col');
      btnCol.append(removeButton);
      var lastItemRemoveBtn = lastItem.find('[data-support-hours-holidays-list-item-remove]');
      new _remove__WEBPACK_IMPORTED_MODULE_0__["default"](lastItemRemoveBtn);
      this.list.append(newItem);
      var updatedList = this.container.find('[data-support-hours-holidays-list]'),
          updatedListLastItem = updatedList.find('[data-support-hours-holidays-list-item]').last();
      var translationsContainter = updatedListLastItem.find('[data-support-hours-translation-container]');
      new _translations__WEBPACK_IMPORTED_MODULE_1__["default"](translationsContainter);
      var addNewButtons = this.container.find('[data-support-hours-holidays-add]');
      addNewButtons.each(function () {
        $(this)[0].attributes['data-support-hours-holidays-add'].value = parseInt(index) + 1;
      });
    }
  }]);

  return addNewHoliday;
}();



/***/ }),

/***/ "./assets/admin/js/components/holidays/remove-confirm.js":
/*!***************************************************************!*\
  !*** ./assets/admin/js/components/holidays/remove-confirm.js ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return removeHolidayConfirm; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var removeHolidayConfirm = /*#__PURE__*/function () {
  function removeHolidayConfirm(modal, container) {
    _classCallCheck(this, removeHolidayConfirm);

    this.modal = modal;
    this.button = modal.find('[data-support-hours-holiday-remove-modal-submit]');
    this.container = container;
    this.list = $('[data-support-hours-holidays-list]');
    this.bindEvents();
  }

  _createClass(removeHolidayConfirm, [{
    key: "bindEvents",
    value: function bindEvents() {
      $(this.button).on('click', this.removeHolidayConfirm.bind(this));
    }
  }, {
    key: "removeHolidayConfirm",
    value: function removeHolidayConfirm(event) {
      var item = this.button[0].attributes['data-item'].value,
          id = this.button[0].attributes['data-id'].value;
      this.list.find('[data-support-hours-holidays-list-item="' + item + '"]').remove();

      if (id != "") {
        var deletedInput = "<input type=\"hidden\" name=\"deleted[]\" value=\"".concat(id, "\">");
        this.list.closest('form').append(deletedInput);
      }

      this.modal.modal('hide');
    }
  }]);

  return removeHolidayConfirm;
}();



/***/ }),

/***/ "./assets/admin/js/components/holidays/remove.js":
/*!*******************************************************!*\
  !*** ./assets/admin/js/components/holidays/remove.js ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return removeHoliday; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var removeHoliday = /*#__PURE__*/function () {
  function removeHoliday(button) {
    _classCallCheck(this, removeHoliday);

    this.button = button;
    this.modal = $('[data-support-hours-holiday-remove-modal]');
    this.modalSubmit = this.modal.find('[data-support-hours-holiday-remove-modal-submit]');
    this.bindEvents();
  }

  _createClass(removeHoliday, [{
    key: "bindEvents",
    value: function bindEvents() {
      $(this.button).on('click', this.removeHoliday.bind(this));
    }
  }, {
    key: "removeHoliday",
    value: function removeHoliday(event) {
      var item = $(event.currentTarget).closest('[data-support-hours-holidays-list-item]'),
          itemIndex = item[0].attributes['data-support-hours-holidays-list-item'].value,
          id = item.find('[data-support-hours-holidays-list-item-id]')[0].value;
      this.modalSubmit[0].attributes['data-item'].value = itemIndex;
      this.modalSubmit[0].attributes['data-id'].value = id;
    }
  }]);

  return removeHoliday;
}();



/***/ }),

/***/ "./assets/admin/js/components/item/all-day.js":
/*!****************************************************!*\
  !*** ./assets/admin/js/components/item/all-day.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var allDay = /*#__PURE__*/function () {
  function allDay(container) {
    _classCallCheck(this, allDay);

    this.container = container;
    this.begin = this.container.find('[data-working-hours-begin]');
    this.end = this.container.find('[data-working-hours-end]');
    this.allDay = this.container.find('[data-working-hours-all-day]');
    this.bindEvents();
  }

  _createClass(allDay, [{
    key: "bindEvents",
    value: function bindEvents() {
      $(this.allDay).on('change', this.toggleWorkingHours.bind(this));
    }
  }, {
    key: "toggleWorkingHours",
    value: function toggleWorkingHours() {
      var input = $(event.currentTarget);

      if (input[0].checked) {
        this.begin[0].selectize.disable();
        this.end[0].selectize.disable();
      } else {
        this.begin[0].selectize.enable();
        this.end[0].selectize.enable();
      }
    }
  }]);

  return allDay;
}();

function initDataSelectors() {
  $('[data-working-hours-container]').each(function () {
    new allDay($(this));
  });
}

var init = {
  initDataSelectors: initDataSelectors
};
/* harmony default export */ __webpack_exports__["default"] = (init);

/***/ }),

/***/ "./assets/admin/js/components/item/selectize-all.js":
/*!**********************************************************!*\
  !*** ./assets/admin/js/components/item/selectize-all.js ***!
  \**********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return selectizeAll; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var selectizeAll = /*#__PURE__*/function () {
  function selectizeAll(select) {
    _classCallCheck(this, selectizeAll);

    this.select = select;
    this.selectize = this.select[0].selectize;
    this.bindEvents();
  }

  _createClass(selectizeAll, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.selectize.on('item_add', this.allOptionControl.bind(this));
      this.selectize.on('item_remove', this.allOptionAdd.bind(this));
    }
  }, {
    key: "allOptionControl",
    value: function allOptionControl() {
      var itemsCount = this.selectize.items.length;

      if (this.selectize.items[itemsCount - 1] == "all") {
        while (itemsCount > 1) {
          this.selectize.removeItem(this.selectize.items[0]);
          itemsCount = itemsCount - 1;
        }

        this.selectize.refreshOptions();
      } else {
        this.selectize.removeItem("all");
        this.selectize.refreshOptions();
      }
    }
  }, {
    key: "allOptionAdd",
    value: function allOptionAdd() {
      var itemsCount = this.selectize.items.length;

      if (itemsCount == 0) {
        this.selectize.addItem("all");
        this.selectize.refreshOptions();
      }
    }
  }]);

  return selectizeAll;
}();



/***/ }),

/***/ "./assets/admin/js/components/translations-form.js":
/*!*********************************************************!*\
  !*** ./assets/admin/js/components/translations-form.js ***!
  \*********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var translationsForm = /*#__PURE__*/function () {
  function translationsForm(container) {
    _classCallCheck(this, translationsForm);

    this.container = container;
    this.form = this.container.find('[data-support-hours-translation-form]');
    this.bindEvents();
  }

  _createClass(translationsForm, [{
    key: "bindEvents",
    value: function bindEvents() {
      $(this.form).on('submit', this.submitTranslationForm.bind(this));
    }
  }, {
    key: "submitTranslationForm",
    value: function submitTranslationForm() {
      event.preventDefault();
      var formUrl = $(event.target)[0].attributes['data-ajax-url'].value,
          modal = $(event.target).closest('.modal'),
          itemId = modal.find('[data-support-hours-translation-item-id]'),
          button = modal.find('[type="submit"]'),
          input = "",
          value = "",
          that = this;

      if (itemId[0].value == "item") {
        input = $('body').find('[data-support-hours-translation-input]');
        value = $('body').find('[data-support-hours-translation-value]');
      } else {
        input = $('body').find('[data-support-hours-holidays-list-item="' + itemId[0].value + '"] [data-support-hours-translation-input]');
        value = $('body').find('[data-support-hours-holidays-list-item="' + itemId[0].value + '"] [data-support-hours-translation-value]');
      }

      button[0].classList.add('is-loading');
      $.ajax({
        url: formUrl,
        method: 'POST',
        data: $(event.target).serialize(),
        success: function success(data) {
          var response = JSON.parse(data);

          if (response.title) {
            input[0].value = response.title;
          }

          if (response.translations) {
            var translations = JSON.stringify(response.translations);
            value[0].value = translations;
          }

          modal.modal('hide');
          button[0].classList.remove('is-loading');
        }
      });
    }
  }]);

  return translationsForm;
}();

function initDataSelectors() {
  $('[data-support-hours-translation-modal]').each(function () {
    new translationsForm($(this));
  });
}

var init = {
  initDataSelectors: initDataSelectors
};
/* harmony default export */ __webpack_exports__["default"] = (init);

/***/ }),

/***/ "./assets/admin/js/components/translations.js":
/*!****************************************************!*\
  !*** ./assets/admin/js/components/translations.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return translations; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var translations = /*#__PURE__*/function () {
  function translations(container) {
    _classCallCheck(this, translations);

    this.container = container;
    this.input = container.find('[data-support-hours-translation-input]');
    this.value = container.find('[data-support-hours-translation-value]');
    this.translation = container.find('[data-support-hours-translation]');
    this.submit = $('body').find('[data-changes-save]');
    this.modal = $('body').find('[data-support-hours-translation-modal]');
    this.modalItemId = this.modal.find('[data-support-hours-translation-item-id]');
    this.bindEvents();
  }

  _createClass(translations, [{
    key: "bindEvents",
    value: function bindEvents() {
      $(this.input).on('keyup', this.delay(this.input, 1000));
      $(this.translation).on('click', this.setTranslations.bind(this));
    }
  }, {
    key: "delay",
    value: function delay(element, ms) {
      var timer = 0,
          that = this;
      return function () {
        that.submit[0].classList.add('is-disabled');
        that.translation.each(function () {
          $(this)[0].classList.add('is-disabled');
        });
        clearTimeout(timer);
        timer = setTimeout(function () {
          that.setTranslationValues(element);
        }, ms || 0);
      };
    }
  }, {
    key: "setTranslationValues",
    value: function setTranslationValues(element) {
      var value = element[0].value,
          ajaxUrl = element[0].attributes['data-ajax-url'].value,
          translation = this.value,
          that = this;
      $.ajax({
        type: 'POST',
        url: ajaxUrl,
        dataType: 'json',
        data: {
          input: value,
          translations: translation[0].value
        },
        success: function success(data) {
          var newTranslations = JSON.stringify(data);
          translation[0].value = newTranslations;
          that.submit[0].classList.remove('is-disabled');
          that.translation.each(function () {
            $(this)[0].classList.remove('is-disabled');
          });
        }
      });
    }
  }, {
    key: "setTranslations",
    value: function setTranslations() {
      var that = this,
          translations = this.value[0].value,
          itemId = 'item';

      if ($(event.currentTarget).closest('[data-support-hours-holidays-list-item]').length) {
        console.log($(event.currentTarget));
        var element = $(event.currentTarget).closest('[data-support-hours-holidays-list-item]');
        itemId = element[0].attributes['data-support-hours-holidays-list-item'].value;
      }

      this.modalItemId[0].value = itemId;
      var textInputs = that.modal.find('input[type="text"]');
      textInputs.each(function () {
        $(this)[0].value = "";
      });

      if (translations) {
        var translationsValues = JSON.parse(translations);
        $.each(translationsValues, function (language, value) {
          var input = that.modal.find('.lang-' + language + '-input');
          input[0].value = value;
        });
      }
    }
  }]);

  return translations;
}();



/***/ }),

/***/ "./assets/admin/js/support-hours.js":
/*!******************************************!*\
  !*** ./assets/admin/js/support-hours.js ***!
  \******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_holidays__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/holidays */ "./assets/admin/js/components/holidays.js");
/* harmony import */ var _components_translations__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/translations */ "./assets/admin/js/components/translations.js");
/* harmony import */ var _components_translations_form__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/translations-form */ "./assets/admin/js/components/translations-form.js");
/* harmony import */ var _components_item_all_day__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/item/all-day */ "./assets/admin/js/components/item/all-day.js");
/* harmony import */ var _components_item_selectize_all__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/item/selectize-all */ "./assets/admin/js/components/item/selectize-all.js");





$(document).ready(function () {
  $('[data-selectize-all]').each(function () {
    new _components_item_selectize_all__WEBPACK_IMPORTED_MODULE_4__["default"]($(this));
  });
  $('[data-support-hours-translation-container]').each(function () {
    new _components_translations__WEBPACK_IMPORTED_MODULE_1__["default"]($(this));
  });
  _components_holidays__WEBPACK_IMPORTED_MODULE_0__["default"].initDataSelectors();
  _components_translations_form__WEBPACK_IMPORTED_MODULE_2__["default"].initDataSelectors();
  _components_item_all_day__WEBPACK_IMPORTED_MODULE_3__["default"].initDataSelectors();
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FkbWluL2pzL2NvbXBvbmVudHMvaG9saWRheXMuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FkbWluL2pzL2NvbXBvbmVudHMvaG9saWRheXMvYWRkLW5ldy5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYWRtaW4vanMvY29tcG9uZW50cy9ob2xpZGF5cy9yZW1vdmUtY29uZmlybS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYWRtaW4vanMvY29tcG9uZW50cy9ob2xpZGF5cy9yZW1vdmUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FkbWluL2pzL2NvbXBvbmVudHMvaXRlbS9hbGwtZGF5LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9hZG1pbi9qcy9jb21wb25lbnRzL2l0ZW0vc2VsZWN0aXplLWFsbC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYWRtaW4vanMvY29tcG9uZW50cy90cmFuc2xhdGlvbnMtZm9ybS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYWRtaW4vanMvY29tcG9uZW50cy90cmFuc2xhdGlvbnMuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FkbWluL2pzL3N1cHBvcnQtaG91cnMuanMiXSwibmFtZXMiOlsiaG9saWRheXMiLCJjb250YWluZXIiLCJhZGROZXciLCJmaW5kIiwicmVtb3ZlIiwibW9kYWwiLCIkIiwiYmluZEV2ZW50cyIsImxvYWRIb2xpZGF5cyIsInRoYXQiLCJlYWNoIiwiYWRkTmV3SG9saWRheSIsInJlbW92ZUhvbGlkYXkiLCJyZW1vdmVIb2xpZGF5Q29uZmlybSIsImluaXREYXRhU2VsZWN0b3JzIiwic2VjdGlvbiIsInVuZGVmaW5lZCIsImxlbmd0aCIsImluaXQiLCJidXR0b24iLCJsaXN0IiwiYWpheFVybElucHV0Iiwib24iLCJiaW5kIiwiYWpheFVybCIsImF0dHJpYnV0ZXMiLCJ2YWx1ZSIsImluZGV4IiwibmV3SXRlbSIsInJlbW92ZUJ1dHRvbiIsImxhc3RJdGVtIiwibGFzdCIsImJ0bkNvbCIsImFwcGVuZCIsImxhc3RJdGVtUmVtb3ZlQnRuIiwidXBkYXRlZExpc3QiLCJ1cGRhdGVkTGlzdExhc3RJdGVtIiwidHJhbnNsYXRpb25zQ29udGFpbnRlciIsInRyYW5zbGF0aW9ucyIsImFkZE5ld0J1dHRvbnMiLCJwYXJzZUludCIsImV2ZW50IiwiaXRlbSIsImlkIiwiZGVsZXRlZElucHV0IiwiY2xvc2VzdCIsIm1vZGFsU3VibWl0IiwiY3VycmVudFRhcmdldCIsIml0ZW1JbmRleCIsImFsbERheSIsImJlZ2luIiwiZW5kIiwidG9nZ2xlV29ya2luZ0hvdXJzIiwiaW5wdXQiLCJjaGVja2VkIiwic2VsZWN0aXplIiwiZGlzYWJsZSIsImVuYWJsZSIsInNlbGVjdGl6ZUFsbCIsInNlbGVjdCIsImFsbE9wdGlvbkNvbnRyb2wiLCJhbGxPcHRpb25BZGQiLCJpdGVtc0NvdW50IiwiaXRlbXMiLCJyZW1vdmVJdGVtIiwicmVmcmVzaE9wdGlvbnMiLCJhZGRJdGVtIiwidHJhbnNsYXRpb25zRm9ybSIsImZvcm0iLCJzdWJtaXRUcmFuc2xhdGlvbkZvcm0iLCJwcmV2ZW50RGVmYXVsdCIsImZvcm1VcmwiLCJ0YXJnZXQiLCJpdGVtSWQiLCJjbGFzc0xpc3QiLCJhZGQiLCJhamF4IiwidXJsIiwibWV0aG9kIiwiZGF0YSIsInNlcmlhbGl6ZSIsInN1Y2Nlc3MiLCJyZXNwb25zZSIsIkpTT04iLCJwYXJzZSIsInRpdGxlIiwic3RyaW5naWZ5IiwidHJhbnNsYXRpb24iLCJzdWJtaXQiLCJtb2RhbEl0ZW1JZCIsImRlbGF5Iiwic2V0VHJhbnNsYXRpb25zIiwiZWxlbWVudCIsIm1zIiwidGltZXIiLCJjbGVhclRpbWVvdXQiLCJzZXRUaW1lb3V0Iiwic2V0VHJhbnNsYXRpb25WYWx1ZXMiLCJ0eXBlIiwiZGF0YVR5cGUiLCJuZXdUcmFuc2xhdGlvbnMiLCJjb25zb2xlIiwibG9nIiwidGV4dElucHV0cyIsInRyYW5z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Q0FBaUJwRCxDQUFDLENBQUMsSUFBRCxDQUFsQjtBQUNILEdBRkQ7QUFHQUEsR0FBQyxDQUFDLDRDQUFELENBQUQsQ0FBZ0RJLElBQWhELENBQXFELFlBQVk7QUFDN0QsUUFBSTRCLGdFQUFKLENBQWlCaEMsQ0FBQyxDQUFDLElBQUQsQ0FBbEI7QUFDSCxHQUZEO0FBSUFOLDhEQUFRLENBQUNjLGlCQUFUO0FBQ0FxRCx1RUFBZ0IsQ0FBQ3JELGlCQUFqQjtBQUNBbUMsa0VBQU0sQ0FBQ25DLGlCQUFQO0FBQ0gsQ0FaRCxFIiwiZmlsZSI6Im1vZHVsZXMvYWRkb25zL1JTVGhlbWVzL3ZpZXdzL2FkbWluYXJlYS9leHRlbnNpb25zL3N1cHBvcnRob3Vycy9hc3NldHMvanMvc3VwcG9ydC1ob3Vycy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwgeyBlbnVtZXJhYmxlOiB0cnVlLCBnZXQ6IGdldHRlciB9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yID0gZnVuY3Rpb24oZXhwb3J0cykge1xuIFx0XHRpZih0eXBlb2YgU3ltYm9sICE9PSAndW5kZWZpbmVkJyAmJiBTeW1ib2wudG9TdHJpbmdUYWcpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcbiBcdFx0fVxuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgJ19fZXNNb2R1bGUnLCB7IHZhbHVlOiB0cnVlIH0pO1xuIFx0fTtcblxuIFx0Ly8gY3JlYXRlIGEgZmFrZSBuYW1lc3BhY2Ugb2JqZWN0XG4gXHQvLyBtb2RlICYgMTogdmFsdWUgaXMgYSBtb2R1bGUgaWQsIHJlcXVpcmUgaXRcbiBcdC8vIG1vZGUgJiAyOiBtZXJnZSBhbGwgcHJvcGVydGllcyBvZiB2YWx1ZSBpbnRvIHRoZSBuc1xuIFx0Ly8gbW9kZSAmIDQ6IHJldHVybiB2YWx1ZSB3aGVuIGFscmVhZHkgbnMgb2JqZWN0XG4gXHQvLyBtb2RlICYgOHwxOiBiZWhhdmUgbGlrZSByZXF1aXJlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnQgPSBmdW5jdGlvbih2YWx1ZSwgbW9kZSkge1xuIFx0XHRpZihtb2RlICYgMSkgdmFsdWUgPSBfX3dlYnBhY2tfcmVxdWlyZV9fKHZhbHVlKTtcbiBcdFx0aWYobW9kZSAmIDgpIHJldHVybiB2YWx1ZTtcbiBcdFx0aWYoKG1vZGUgJiA0KSAmJiB0eXBlb2YgdmFsdWUgPT09ICdvYmplY3QnICYmIHZhbHVlICYmIHZhbHVlLl9fZXNNb2R1bGUpIHJldHVybiB2YWx1ZTtcbiBcdFx0dmFyIG5zID0gT2JqZWN0LmNyZWF0ZShudWxsKTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yKG5zKTtcbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KG5zLCAnZGVmYXVsdCcsIHsgZW51bWVyYWJsZTogdHJ1ZSwgdmFsdWU6IHZhbHVlIH0pO1xuIFx0XHRpZihtb2RlICYgMiAmJiB0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIGZvcih2YXIga2V5IGluIHZhbHVlKSBfX3dlYnBhY2tfcmVxdWlyZV9fLmQobnMsIGtleSwgZnVuY3Rpb24oa2V5KSB7IHJldHVybiB2YWx1ZVtrZXldOyB9LmJpbmQobnVsbCwga2V5KSk7XG4gXHRcdHJldHVybiBucztcbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiLi8uLi9cIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IFwiLi9hc3NldHMvYWRtaW4vanMvc3VwcG9ydC1ob3Vycy5qc1wiKTtcbiIsIi8qXHJcbiogKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqXHJcbiAgICBSUyBTdHVkaW8gLSBTdXBwb3J0IEhvdXJzXHJcbiAgICAxLiBJbXBvcnRzXHJcbiAgICAyLiBIb2xpZGF5c1xyXG4gICAgMy4gSW5pdFxyXG4qICoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKlxyXG4qL1xyXG5cclxuLypcclxuKiAqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKipcclxuICAgIDEuIEltcG9ydHNcclxuKiAqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKipcclxuKi9cclxuXHJcbmltcG9ydCBhZGROZXdIb2xpZGF5IGZyb20gJy4vaG9saWRheXMvYWRkLW5ldyc7XHJcbmltcG9ydCByZW1vdmVIb2xpZGF5IGZyb20gJy4vaG9saWRheXMvcmVtb3ZlJztcclxuaW1wb3J0IHJlbW92ZUhvbGlkYXlDb25maXJtIGZyb20gJy4vaG9saWRheXMvcmVtb3ZlLWNvbmZpcm0nO1xyXG5cclxuXHJcbi8qXHJcbiogKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqXHJcbiAgICAyLiBIb2xpZGF5c1xyXG4qICoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKlxyXG4qL1xyXG5cclxuY2xhc3MgaG9saWRheXN7XHJcbiAgICBjb25zdHJ1Y3Rvcihjb250YWluZXIpe1xyXG4gICAgICAgIHRoaXMuY29udGFpbmVyID0gY29udGFpbmVyO1xyXG4gICAgICAgIHRoaXMuYWRkTmV3ID0gdGhpcy5jb250YWluZXIuZmluZCgnW2RhdGEtc3VwcG9ydC1ob3Vycy1ob2xpZGF5cy1hZGRdJyk7XHJcbiAgICAgICAgdGhpcy5yZW1vdmUgPSB0aGlzLmNvbnRhaW5lci5maW5kKCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzLWxpc3QtaXRlbS1yZW1vdmVdJyk7XHJcbiAgICAgICAgdGhpcy5tb2RhbCA9ICQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheS1yZW1vdmUtbW9kYWxdJyk7XHJcblxyXG4gICAgICAgIHRoaXMuYmluZEV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgYmluZEV2ZW50cygpe1xyXG4gICAgICAgIHRoaXMubG9hZEhvbGlkYXlzKHRoaXMuY29udGFpbmVyKTtcclxuICAgIH1cclxuICAgIGxvYWRIb2xpZGF5cygpe1xyXG4gICAgICAgIGxldCB0aGF0ID0gdGhpcztcclxuICAgICAgICB0aGlzLmFkZE5ldy5lYWNoKGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgIG5ldyBhZGROZXdIb2xpZGF5KCQodGhpcyksIHRoYXQuY29udGFpbmVyKTtcclxuICAgICAgICB9KTtcclxuICAgICAgICB0aGlzLnJlbW92ZS5lYWNoKGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgIG5ldyByZW1vdmVIb2xpZGF5KCQodGhpcykpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgICAgIG5ldyByZW1vdmVIb2xpZGF5Q29uZmlybSh0aGlzLm1vZGFsLCB0aGlzLmNvbnRhaW5lcik7XHJcblxyXG4gICAgfTtcclxufVxyXG5cclxuLypcclxuKiAqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKipcclxuICAgIDMuIEluaXRcclxuKiAqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKipcclxuKi9cclxuXHJcbmZ1bmN0aW9uIGluaXREYXRhU2VsZWN0b3JzKCkge1xyXG4gICAgbGV0IHNlY3Rpb24gPSB1bmRlZmluZWQ7XHJcbiAgICBpZiAoJCgnW2RhdGEtc3VwcG9ydC1ob3Vycy1ob2xpZGF5c10nKS5sZW5ndGgpe1xyXG4gICAgICAgIHNlY3Rpb24gPSAkKCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzXScpO1xyXG4gICAgfVxyXG4gICAgaWYgKHNlY3Rpb24gIT09IHVuZGVmaW5lZCkge1xyXG4gICAgICAgIG5ldyBob2xpZGF5cyhzZWN0aW9uKTsgXHJcbiAgICB9ICAgICAgICBcclxufVxyXG5cclxuY29uc3QgaW5pdCA9IHtcclxuICAgIGluaXREYXRhU2VsZWN0b3JzLFxyXG59O1xyXG5leHBvcnQgZGVmYXVsdCBpbml0OyIsImltcG9ydCByZW1vdmVIb2xpZGF5IGZyb20gJy4vcmVtb3ZlJztcclxuaW1wb3J0IHRyYW5zbGF0aW9ucyBmcm9tICcuLy4uL3RyYW5zbGF0aW9ucyc7XHJcblxyXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBhZGROZXdIb2xpZGF5e1xyXG4gICAgY29uc3RydWN0b3IoYnV0dG9uLCBjb250YWluZXIpe1xyXG4gICAgICAgIHRoaXMuYnV0dG9uID0gYnV0dG9uO1xyXG4gICAgICAgIHRoaXMuY29udGFpbmVyID0gY29udGFpbmVyO1xyXG4gICAgICAgIHRoaXMubGlzdCA9IHRoaXMuY29udGFpbmVyLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheXMtbGlzdF0nKTtcclxuICAgICAgICB0aGlzLmFqYXhVcmxJbnB1dCA9IHRoaXMuY29udGFpbmVyLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtdHJhbnNsYXRpb24taW5wdXRdJyk7XHJcbiAgICAgICAgdGhpcy5iaW5kRXZlbnRzKCk7XHJcbiAgICB9XHJcbiAgICBiaW5kRXZlbnRzKCl7XHJcbiAgICAgICAgJCh0aGlzLmJ1dHRvbikub24oJ2NsaWNrJywgdGhpcy5hZGROZXdIb2xpZGF5LmJpbmQodGhpcykpO1xyXG4gICAgfVxyXG4gICAgYWRkTmV3SG9saWRheSgpe1xyXG4gICAgICAgIGxldCBhamF4VXJsID0gJyc7XHJcbiAgICAgICAgaWYgKHRoaXMuYWpheFVybElucHV0Lmxlbmd0aCl7XHJcbiAgICAgICAgICAgIGFqYXhVcmwgPSB0aGlzLmFqYXhVcmxJbnB1dFswXS5hdHRyaWJ1dGVzWydkYXRhLWFqYXgtdXJsJ10udmFsdWU7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGxldCBpbmRleCA9IHRoaXMuYnV0dG9uWzBdLmF0dHJpYnV0ZXNbJ2RhdGEtc3VwcG9ydC1ob3Vycy1ob2xpZGF5cy1hZGQnXS52YWx1ZSxcclxuICAgICAgICAgICAgbmV3SXRlbSA9IGBcclxuICAgICAgICAgICAgPGxpIGNsYXNzPVwiaG9saWRheS1saXN0X19pdGVtXCIgZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzLWxpc3QtaXRlbT1cIiR7aW5kZXh9XCI+XHJcbiAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cImhpZGRlblwiIG5hbWU9XCJob2xpZGF5W2lkXVtdXCIgdmFsdWU9XCJcIiBkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheXMtbGlzdC1pdGVtLWlkPlxyXG4gICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cInJvd1wiPlxyXG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJjb2wtbWQtNlwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwiZm9ybS1ncm91cCBtYi0weFwiIGRhdGEtc3VwcG9ydC1ob3Vycy10cmFuc2xhdGlvbi1jb250YWluZXI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3M9XCJmb3JtLWNvbnRyb2wgZm9ybS1jb250cm9sLS1uYW1lXCIgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsdWU9XCJcIiBcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXN1cHBvcnQtaG91cnMtdHJhbnNsYXRpb24taW5wdXRcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLWFqYXgtdXJsPVwiJHthamF4VXJsfVwiXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI9XCJFbnRlciBob2xpZGF5IG5hbWVcIlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU9XCJoaWRkZW5cIiBuYW1lPVwiaG9saWRheVtuYW1lXVtdXCIgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsdWU9XCJcIiBcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLXN1cHBvcnQtaG91cnMtdHJhbnNsYXRpb24tdmFsdWVcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgID5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzPVwiZm9ybS1sYWJlbF9fdHJhbnNsYXRlXCIgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaHJlZj1cIiNzdXBwb3J0SG91cnNUcmFuc2xhdGlvbk1vZGFsXCIgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1zdXBwb3J0LWhvdXJzLXRyYW5zbGF0aW9uIFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEtdG9nZ2xlPVwibHUtbW9kYWxcIiBcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhLWJhY2tkcm9wPVwic3RhdGljXCIgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS1rZXlib2FyZD1cImZhbHNlXCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgID5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUcmFuc2xhdGVcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvYT5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImNvbC1tZC02XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJ0aW1lcy1jb250YWluZXIgdGltZXMtY29udGFpbmVyLS1iYXNlXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwidGltZS1jb2xcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz1cInRpbWUtc2VsZWN0LWNvbnRhaW5lclwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT1cImRhdGVcIiBjbGFzcz1cImZvcm0tY29udHJvbCB0aW1lLXNlbGVjdFwiIG5hbWU9XCJob2xpZGF5W3N0YXJ0XVtdXCIgdmFsdWU9XCJcIi8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zcGFuPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwiZm9ybS1zZXBhcmF0b3JcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAtXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJ0aW1lLWNvbCB0aW1lLWNvbC0tZW5kXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJ0aW1lLXNlbGVjdC1jb250YWluZXJcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9XCJkYXRlXCIgY2xhc3M9XCJmb3JtLWNvbnRyb2wgdGltZS1zZWxlY3RcIiBuYW1lPVwiaG9saWRheVtlbmRdW11cIiB2YWx1ZT1cIlwiLz5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJidG4tY29sXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgPC9saT5gLFxyXG4gICAgICAgICAgICByZW1vdmVCdXR0b24gPSBgXHJcbiAgICAgICAgICAgICAgICA8YSBcclxuICAgICAgICAgICAgICAgICAgICBjbGFzcz1cImJ0biBidG4tLWljb24gYnRuLS1saW5rIGJ0bi0taG9saWRheVwiIFxyXG4gICAgICAgICAgICAgICAgICAgIGhyZWY9XCIjXCIgXHJcbiAgICAgICAgICAgICAgICAgICAgZGF0YS10b2dnbGU9XCJsdS1tb2RhbFwiIFxyXG4gICAgICAgICAgICAgICAgICAgIGRhdGEtdGFyZ2V0PVwiI3JlbW92ZUhvbGlkYXlJdGVtXCJcclxuICAgICAgICAgICAgICAgICAgICBkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheXMtbGlzdC1pdGVtLXJlbW92ZVxyXG4gICAgICAgICAgICAgICAgPlxyXG4gICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzPVwiYnRuX19pY29uIGxtIGxtLXRyYXNoXCIgZGF0YS10b2dnbGU9XCJsdS10b29sdGlwXCIgZGF0YS10aXRsZT1cIkRlbGV0ZSBob2xpZGF5IHBlcmlvZFwiPjwvaT5cclxuICAgICAgICAgICAgICAgIDwvYT5cclxuICAgICAgICAgICAgYCxcclxuICAgICAgICAgICAgbGFzdEl0ZW0gPSB0aGlzLmxpc3QuZmluZCgnW2RhdGEtc3VwcG9ydC1ob3Vycy1ob2xpZGF5cy1saXN0LWl0ZW1dJykubGFzdCgpLFxyXG4gICAgICAgICAgICBidG5Db2wgPSBsYXN0SXRlbS5maW5kKCcuYnRuLWNvbCcpO1xyXG4gICAgICAgICAgICBcclxuICAgICAgICBidG5Db2wuYXBwZW5kKHJlbW92ZUJ1dHRvbik7XHJcblxyXG4gICAgICAgIGxldCBsYXN0SXRlbVJlbW92ZUJ0biA9IGxhc3RJdGVtLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheXMtbGlzdC1pdGVtLXJlbW92ZV0nKTtcclxuICAgICAgICBcclxuICAgICAgICBuZXcgcmVtb3ZlSG9saWRheShsYXN0SXRlbVJlbW92ZUJ0bik7XHJcbiAgICAgICAgXHJcbiAgICAgICAgdGhpcy5saXN0LmFwcGVuZChuZXdJdGVtKTtcclxuXHJcbiAgICAgICAgbGV0IHVwZGF0ZWRMaXN0ID0gdGhpcy5jb250YWluZXIuZmluZCgnW2RhdGEtc3VwcG9ydC1ob3Vycy1ob2xpZGF5cy1saXN0XScpLFxyXG4gICAgICAgIHVwZGF0ZWRMaXN0TGFzdEl0ZW0gPSB1cGRhdGVkTGlzdC5maW5kKCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzLWxpc3QtaXRlbV0nKS5sYXN0KCk7XHJcbiAgICBcclxuICAgICAgICBsZXQgdHJhbnNsYXRpb25zQ29udGFpbnRlciA9IHVwZGF0ZWRMaXN0TGFzdEl0ZW0uZmluZCgnW2RhdGEtc3VwcG9ydC1ob3Vycy10cmFuc2xhdGlvbi1jb250YWluZXJdJyk7XHJcbiAgICAgICAgbmV3IHRyYW5zbGF0aW9ucyh0cmFuc2xhdGlvbnNDb250YWludGVyKTtcclxuICAgICAgICBcclxuICAgICAgICBsZXQgYWRkTmV3QnV0dG9ucyA9IHRoaXMuY29udGFpbmVyLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheXMtYWRkXScpO1xyXG4gICAgICAgIGFkZE5ld0J1dHRvbnMuZWFjaChmdW5jdGlvbigpe1xyXG4gICAgICAgICAgICAkKHRoaXMpWzBdLmF0dHJpYnV0ZXNbJ2RhdGEtc3VwcG9ydC1ob3Vycy1ob2xpZGF5cy1hZGQnXS52YWx1ZSA9IHBhcnNlSW50KGluZGV4KSArIDE7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcbn0iLCJleHBvcnQgZGVmYXVsdCBjbGFzcyByZW1vdmVIb2xpZGF5Q29uZmlybXtcclxuICAgIGNvbnN0cnVjdG9yKG1vZGFsLCBjb250YWluZXIpe1xyXG4gICAgICAgIHRoaXMubW9kYWwgPSBtb2RhbDtcclxuICAgICAgICB0aGlzLmJ1dHRvbiA9IG1vZGFsLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheS1yZW1vdmUtbW9kYWwtc3VibWl0XScpO1xyXG4gICAgICAgIHRoaXMuY29udGFpbmVyID0gY29udGFpbmVyOyBcclxuICAgICAgICB0aGlzLmxpc3QgPSAkKCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzLWxpc3RdJyk7XHJcbiAgICAgICAgdGhpcy5iaW5kRXZlbnRzKCk7XHJcbiAgICB9XHJcbiAgICBiaW5kRXZlbnRzKCl7XHJcbiAgICAgICAgJCh0aGlzLmJ1dHRvbikub24oJ2NsaWNrJywgdGhpcy5yZW1vdmVIb2xpZGF5Q29uZmlybS5iaW5kKHRoaXMpKTtcclxuICAgIH1cclxuICAgIHJlbW92ZUhvbGlkYXlDb25maXJtKGV2ZW50KXtcclxuICAgICAgICBsZXQgaXRlbSA9IHRoaXMuYnV0dG9uWzBdLmF0dHJpYnV0ZXNbJ2RhdGEtaXRlbSddLnZhbHVlLFxyXG4gICAgICAgICAgICBpZCA9IHRoaXMuYnV0dG9uWzBdLmF0dHJpYnV0ZXNbJ2RhdGEtaWQnXS52YWx1ZTtcclxuXHJcbiAgICAgICAgdGhpcy5saXN0LmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheXMtbGlzdC1pdGVtPVwiJytpdGVtKydcIl0nKS5yZW1vdmUoKTtcclxuICAgICAgICBpZiAoaWQgIT0gXCJcIil7XHJcbiAgICAgICAgICAgIGxldCBkZWxldGVkSW5wdXQgPSBgPGlucHV0IHR5cGU9XCJoaWRkZW5cIiBuYW1lPVwiZGVsZXRlZFtdXCIgdmFsdWU9XCIke2lkfVwiPmA7XHJcbiAgICAgICAgICAgIHRoaXMubGlzdC5jbG9zZXN0KCdmb3JtJykuYXBwZW5kKGRlbGV0ZWRJbnB1dCk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIFxyXG4gICAgICAgIHRoaXMubW9kYWwubW9kYWwoJ2hpZGUnKTtcclxuICAgIH1cclxufSIsImV4cG9ydCBkZWZhdWx0IGNsYXNzIHJlbW92ZUhvbGlkYXl7XHJcbiAgICBjb25zdHJ1Y3RvcihidXR0b24pe1xyXG4gICAgICAgIHRoaXMuYnV0dG9uID0gYnV0dG9uO1xyXG4gICAgICAgIHRoaXMubW9kYWwgPSAkKCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXktcmVtb3ZlLW1vZGFsXScpO1xyXG4gICAgICAgIHRoaXMubW9kYWxTdWJtaXQgPSB0aGlzLm1vZGFsLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheS1yZW1vdmUtbW9kYWwtc3VibWl0XScpO1xyXG4gICAgICAgIHRoaXMuYmluZEV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgYmluZEV2ZW50cygpe1xyXG4gICAgICAgICQodGhpcy5idXR0b24pLm9uKCdjbGljaycsIHRoaXMucmVtb3ZlSG9saWRheS5iaW5kKHRoaXMpKTtcclxuICAgIH1cclxuICAgIHJlbW92ZUhvbGlkYXkoZXZlbnQpe1xyXG4gICAgICAgIGxldCBpdGVtID0gJChldmVudC5jdXJyZW50VGFyZ2V0KS5jbG9zZXN0KCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzLWxpc3QtaXRlbV0nKSxcclxuICAgICAgICAgICAgaXRlbUluZGV4ID0gaXRlbVswXS5hdHRyaWJ1dGVzWydkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheXMtbGlzdC1pdGVtJ10udmFsdWUsXHJcbiAgICAgICAgICAgIGlkID0gaXRlbS5maW5kKCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzLWxpc3QtaXRlbS1pZF0nKVswXS52YWx1ZTsgXHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgIHRoaXMubW9kYWxTdWJtaXRbMF0uYXR0cmlidXRlc1snZGF0YS1pdGVtJ10udmFsdWUgPSBpdGVtSW5kZXg7XHJcbiAgICAgICAgdGhpcy5tb2RhbFN1Ym1pdFswXS5hdHRyaWJ1dGVzWydkYXRhLWlkJ10udmFsdWUgPSBpZDtcclxuICAgIH1cclxufSIsImNsYXNzIGFsbERheXtcclxuICAgIGNvbnN0cnVjdG9yKGNvbnRhaW5lcil7XHJcbiAgICAgICAgdGhpcy5jb250YWluZXIgPSBjb250YWluZXI7XHJcbiAgICAgICAgdGhpcy5iZWdpbiA9IHRoaXMuY29udGFpbmVyLmZpbmQoJ1tkYXRhLXdvcmtpbmctaG91cnMtYmVnaW5dJyk7XHJcbiAgICAgICAgdGhpcy5lbmQgPSB0aGlzLmNvbnRhaW5lci5maW5kKCdbZGF0YS13b3JraW5nLWhvdXJzLWVuZF0nKTtcclxuICAgICAgICB0aGlzLmFsbERheSA9IHRoaXMuY29udGFpbmVyLmZpbmQoJ1tkYXRhLXdvcmtpbmctaG91cnMtYWxsLWRheV0nKTtcclxuICAgICAgICB0aGlzLmJpbmRFdmVudHMoKTtcclxuICAgIH1cclxuICAgIGJpbmRFdmVudHMoKXtcclxuICAgICAgICAkKHRoaXMuYWxsRGF5KS5vbignY2hhbmdlJywgdGhpcy50b2dnbGVXb3JraW5nSG91cnMuYmluZCh0aGlzKSk7XHJcbiAgICB9XHJcbiAgICB0b2dnbGVXb3JraW5nSG91cnMoKXtcclxuICAgICAgXHJcbiAgICAgICAgbGV0IGlucHV0ID0gJChldmVudC5jdXJyZW50VGFyZ2V0KTtcclxuICAgICAgICBcclxuICAgICAgICBpZiAoaW5wdXRbMF0uY2hlY2tlZCl7XHJcbiAgICAgICAgICAgIHRoaXMuYmVnaW5bMF0uc2VsZWN0aXplLmRpc2FibGUoKTtcclxuICAgICAgICAgICAgdGhpcy5lbmRbMF0uc2VsZWN0aXplLmRpc2FibGUoKTtcclxuICAgICAgICB9ICAgXHJcbiAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgdGhpcy5iZWdpblswXS5zZWxlY3RpemUuZW5hYmxlKCk7XHJcbiAgICAgICAgICAgIHRoaXMuZW5kWzBdLnNlbGVjdGl6ZS5lbmFibGUoKTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcbn1cclxuXHJcbmZ1bmN0aW9uIGluaXREYXRhU2VsZWN0b3JzKCkge1xyXG4gICAgJCgnW2RhdGEtd29ya2luZy1ob3Vycy1jb250YWluZXJdJykuZWFjaChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgbmV3IGFsbERheSgkKHRoaXMpKTtcclxuICAgIH0pO1xyXG59XHJcblxyXG5jb25zdCBpbml0ID0ge1xyXG4gICAgaW5pdERhdGFTZWxlY3RvcnMsXHJcbn07XHJcbmV4cG9ydCBkZWZhdWx0IGluaXQ7IiwiZXhwb3J0IGRlZmF1bHQgY2xhc3Mgc2VsZWN0aXplQWxse1xyXG4gICAgY29uc3RydWN0b3Ioc2VsZWN0KXtcclxuICAgICAgICB0aGlzLnNlbGVjdCA9IHNlbGVjdDtcclxuICAgICAgICB0aGlzLnNlbGVjdGl6ZSA9IHRoaXMuc2VsZWN0WzBdLnNlbGVjdGl6ZTtcclxuICAgICAgICB0aGlzLmJpbmRFdmVudHMoKTtcclxuICAgIH1cclxuICAgIGJpbmRFdmVudHMoKXtcclxuICAgICAgICB0aGlzLnNlbGVjdGl6ZS5vbignaXRlbV9hZGQnLCB0aGlzLmFsbE9wdGlvbkNvbnRyb2wuYmluZCh0aGlzKSk7XHJcbiAgICAgICAgdGhpcy5zZWxlY3RpemUub24oJ2l0ZW1fcmVtb3ZlJywgdGhpcy5hbGxPcHRpb25BZGQuYmluZCh0aGlzKSk7XHJcbiAgICB9XHJcbiAgICBhbGxPcHRpb25Db250cm9sKCl7XHJcbiAgICAgICAgbGV0IGl0ZW1zQ291bnQgPSB0aGlzLnNlbGVjdGl6ZS5pdGVtcy5sZW5ndGg7XHJcbiAgICAgICAgaWYgKHRoaXMuc2VsZWN0aXplLml0ZW1zW2l0ZW1zQ291bnQgLSAxXSA9PSBcImFsbFwiKXtcclxuICAgICAgICAgICAgd2hpbGUgKGl0ZW1zQ291bnQgPiAxKXtcclxuICAgICAgICAgICAgICAgIHRoaXMuc2VsZWN0aXplLnJlbW92ZUl0ZW0odGhpcy5zZWxlY3RpemUuaXRlbXNbMF0pO1xyXG4gICAgICAgICAgICAgICAgaXRlbXNDb3VudCA9IGl0ZW1zQ291bnQgLSAxO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIHRoaXMuc2VsZWN0aXplLnJlZnJlc2hPcHRpb25zKCk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGVsc2V7XHJcbiAgICAgICAgICAgIHRoaXMuc2VsZWN0aXplLnJlbW92ZUl0ZW0oXCJhbGxcIik7XHJcbiAgICAgICAgICAgIHRoaXMuc2VsZWN0aXplLnJlZnJlc2hPcHRpb25zKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgYWxsT3B0aW9uQWRkKCl7XHJcbiAgICAgICAgbGV0IGl0ZW1zQ291bnQgPSB0aGlzLnNlbGVjdGl6ZS5pdGVtcy5sZW5ndGg7XHJcbiAgICAgICAgaWYgKGl0ZW1zQ291bnQgPT0gMCl7XHJcbiAgICAgICAgICAgIHRoaXMuc2VsZWN0aXplLmFkZEl0ZW0oXCJhbGxcIik7XHJcbiAgICAgICAgICAgIHRoaXMuc2VsZWN0aXplLnJlZnJlc2hPcHRpb25zKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59IiwiY2xhc3MgdHJhbnNsYXRpb25zRm9ybXtcclxuICAgIGNvbnN0cnVjdG9yKGNvbnRhaW5lcil7XHJcbiAgICAgICAgdGhpcy5jb250YWluZXIgPSBjb250YWluZXI7XHJcbiAgICAgICAgdGhpcy5mb3JtID0gdGhpcy5jb250YWluZXIuZmluZCgnW2RhdGEtc3VwcG9ydC1ob3Vycy10cmFuc2xhdGlvbi1mb3JtXScpO1xyXG4gICAgICAgIHRoaXMuYmluZEV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgYmluZEV2ZW50cygpe1xyXG4gICAgICAgICQodGhpcy5mb3JtKS5vbignc3VibWl0JywgdGhpcy5zdWJtaXRUcmFuc2xhdGlvbkZvcm0uYmluZCh0aGlzKSk7XHJcbiAgICB9XHJcbiAgICBzdWJtaXRUcmFuc2xhdGlvbkZvcm0oKXtcclxuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgIGxldCBmb3JtVXJsID0gJChldmVudC50YXJnZXQpWzBdLmF0dHJpYnV0ZXNbJ2RhdGEtYWpheC11cmwnXS52YWx1ZSxcclxuICAgICAgICAgICAgbW9kYWwgPSAkKGV2ZW50LnRhcmdldCkuY2xvc2VzdCgnLm1vZGFsJyksXHJcbiAgICAgICAgICAgIGl0ZW1JZCA9IG1vZGFsLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtdHJhbnNsYXRpb24taXRlbS1pZF0nKSxcclxuICAgICAgICAgICAgYnV0dG9uID0gbW9kYWwuZmluZCgnW3R5cGU9XCJzdWJtaXRcIl0nKSxcclxuICAgICAgICAgICAgaW5wdXQgPSBcIlwiLFxyXG4gICAgICAgICAgICB2YWx1ZSA9IFwiXCIsXHJcbiAgICAgICAgICAgIHRoYXQgPSB0aGlzO1xyXG4gICAgICAgIFxyXG4gICAgICAgIGlmIChpdGVtSWRbMF0udmFsdWUgPT0gXCJpdGVtXCIpe1xyXG4gICAgICAgICAgICBpbnB1dCA9ICQoJ2JvZHknKS5maW5kKCdbZGF0YS1zdXBwb3J0LWhvdXJzLXRyYW5zbGF0aW9uLWlucHV0XScpO1xyXG4gICAgICAgICAgICB2YWx1ZSA9ICQoJ2JvZHknKS5maW5kKCdbZGF0YS1zdXBwb3J0LWhvdXJzLXRyYW5zbGF0aW9uLXZhbHVlXScpO1xyXG4gICAgICAgIH1cclxuICAgICAgICBlbHNle1xyXG4gICAgICAgICAgICBpbnB1dCA9ICQoJ2JvZHknKS5maW5kKCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzLWxpc3QtaXRlbT1cIicraXRlbUlkWzBdLnZhbHVlKydcIl0gW2RhdGEtc3VwcG9ydC1ob3Vycy10cmFuc2xhdGlvbi1pbnB1dF0nKTtcclxuICAgICAgICAgICAgdmFsdWUgPSAkKCdib2R5JykuZmluZCgnW2RhdGEtc3VwcG9ydC1ob3Vycy1ob2xpZGF5cy1saXN0LWl0ZW09XCInK2l0ZW1JZFswXS52YWx1ZSsnXCJdIFtkYXRhLXN1cHBvcnQtaG91cnMtdHJhbnNsYXRpb24tdmFsdWVdJyk7XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICBidXR0b25bMF0uY2xhc3NMaXN0LmFkZCgnaXMtbG9hZGluZycpO1xyXG4gICAgICAgICQuYWpheCh7XHJcbiAgICAgICAgICAgIHVybDogZm9ybVVybCxcclxuICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXHJcbiAgICAgICAgICAgIGRhdGE6ICQoZXZlbnQudGFyZ2V0KS5zZXJpYWxpemUoKSxcclxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKGRhdGEpIHtcclxuICAgICAgICAgICAgICAgIGxldCByZXNwb25zZSA9IEpTT04ucGFyc2UoZGF0YSk7XHJcbiAgICAgICAgICAgICAgICBpZiAocmVzcG9uc2UudGl0bGUpIHtcclxuICAgICAgICAgICAgICAgICAgICBpbnB1dFswXS52YWx1ZSA9IHJlc3BvbnNlLnRpdGxlO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgaWYgKHJlc3BvbnNlLnRyYW5zbGF0aW9ucykge1xyXG4gICAgICAgICAgICAgICAgICAgIGxldCB0cmFuc2xhdGlvbnMgPSBKU09OLnN0cmluZ2lmeShyZXNwb25zZS50cmFuc2xhdGlvbnMpO1xyXG4gICAgICAgICAgICAgICAgICAgIHZhbHVlWzBdLnZhbHVlID0gdHJhbnNsYXRpb25zO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgbW9kYWwubW9kYWwoJ2hpZGUnKTtcclxuICAgICAgICAgICAgICAgIGJ1dHRvblswXS5jbGFzc0xpc3QucmVtb3ZlKCdpcy1sb2FkaW5nJyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbn1cclxuXHJcbmZ1bmN0aW9uIGluaXREYXRhU2VsZWN0b3JzKCkge1xyXG4gICAgJCgnW2RhdGEtc3VwcG9ydC1ob3Vycy10cmFuc2xhdGlvbi1tb2RhbF0nKS5lYWNoKGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBuZXcgdHJhbnNsYXRpb25zRm9ybSgkKHRoaXMpKTtcclxuICAgIH0pO1xyXG59XHJcblxyXG5jb25zdCBpbml0ID0ge1xyXG4gICAgaW5pdERhdGFTZWxlY3RvcnMsXHJcbn07XHJcbmV4cG9ydCBkZWZhdWx0IGluaXQ7IiwiZXhwb3J0IGRlZmF1bHQgY2xhc3MgdHJhbnNsYXRpb25ze1xyXG4gICAgY29uc3RydWN0b3IoY29udGFpbmVyKXtcclxuICAgICAgICB0aGlzLmNvbnRhaW5lciA9IGNvbnRhaW5lcjtcclxuICAgICAgICB0aGlzLmlucHV0ID0gY29udGFpbmVyLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtdHJhbnNsYXRpb24taW5wdXRdJyk7XHJcbiAgICAgICAgdGhpcy52YWx1ZSA9IGNvbnRhaW5lci5maW5kKCdbZGF0YS1zdXBwb3J0LWhvdXJzLXRyYW5zbGF0aW9uLXZhbHVlXScpO1xyXG4gICAgICAgIHRoaXMudHJhbnNsYXRpb24gPSBjb250YWluZXIuZmluZCgnW2RhdGEtc3VwcG9ydC1ob3Vycy10cmFuc2xhdGlvbl0nKTtcclxuICAgICAgICB0aGlzLnN1Ym1pdCA9ICQoJ2JvZHknKS5maW5kKCdbZGF0YS1jaGFuZ2VzLXNhdmVdJyk7XHJcbiAgICAgICAgdGhpcy5tb2RhbCA9ICQoJ2JvZHknKS5maW5kKCdbZGF0YS1zdXBwb3J0LWhvdXJzLXRyYW5zbGF0aW9uLW1vZGFsXScpO1xyXG4gICAgICAgIHRoaXMubW9kYWxJdGVtSWQgPSB0aGlzLm1vZGFsLmZpbmQoJ1tkYXRhLXN1cHBvcnQtaG91cnMtdHJhbnNsYXRpb24taXRlbS1pZF0nKVxyXG4gICAgICAgIHRoaXMuYmluZEV2ZW50cygpO1xyXG4gICAgfVxyXG4gICAgYmluZEV2ZW50cygpe1xyXG4gICAgICAgICQodGhpcy5pbnB1dCkub24oJ2tleXVwJywgdGhpcy5kZWxheSh0aGlzLmlucHV0LCAxMDAwKSk7XHJcbiAgICAgICAgJCh0aGlzLnRyYW5zbGF0aW9uKS5vbignY2xpY2snLCB0aGlzLnNldFRyYW5zbGF0aW9ucy5iaW5kKHRoaXMpKTtcclxuICAgIH1cclxuICAgIGRlbGF5KGVsZW1lbnQsIG1zKXtcclxuICAgICAgICBsZXQgdGltZXIgPSAwLFxyXG4gICAgICAgICAgICB0aGF0ID0gdGhpcztcclxuICAgICAgICByZXR1cm4gZnVuY3Rpb24oLi4uYXJncykge1xyXG4gICAgICAgICAgICB0aGF0LnN1Ym1pdFswXS5jbGFzc0xpc3QuYWRkKCdpcy1kaXNhYmxlZCcpOyBcclxuICAgICAgICAgICAgdGhhdC50cmFuc2xhdGlvbi5lYWNoKGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAkKHRoaXMpWzBdLmNsYXNzTGlzdC5hZGQoJ2lzLWRpc2FibGVkJyk7XHJcbiAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICBjbGVhclRpbWVvdXQodGltZXIpO1xyXG4gICAgICAgICAgICB0aW1lciA9IHNldFRpbWVvdXQoZnVuY3Rpb24oKXtcclxuICAgICAgICAgICAgICAgIHRoYXQuc2V0VHJhbnNsYXRpb25WYWx1ZXMoZWxlbWVudCk7XHJcbiAgICAgICAgICAgIH0sIG1zIHx8IDApO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIHNldFRyYW5zbGF0aW9uVmFsdWVzKGVsZW1lbnQpe1xyXG4gICAgICAgIGxldCB2YWx1ZSA9IGVsZW1lbnRbMF0udmFsdWUsXHJcbiAgICAgICAgICAgIGFqYXhVcmwgPSBlbGVtZW50WzBdLmF0dHJpYnV0ZXNbJ2RhdGEtYWpheC11cmwnXS52YWx1ZSxcclxuICAgICAgICAgICAgdHJhbnNsYXRpb24gPSB0aGlzLnZhbHVlLFxyXG4gICAgICAgICAgICB0aGF0ID0gdGhpcztcclxuXHJcbiAgICAgICAgJC5hamF4KHtcclxuICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxyXG4gICAgICAgICAgICB1cmw6IGFqYXhVcmwsXHJcbiAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXHJcbiAgICAgICAgICAgIGRhdGE6IHtcclxuICAgICAgICAgICAgICAgIGlucHV0OiB2YWx1ZSxcclxuICAgICAgICAgICAgICAgIHRyYW5zbGF0aW9uczogdHJhbnNsYXRpb25bMF0udmFsdWVcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24gKGRhdGEpIHtcclxuICAgICAgICAgICAgICAgIGxldCBuZXdUcmFuc2xhdGlvbnMgPSBKU09OLnN0cmluZ2lmeShkYXRhKTtcclxuICAgICAgICAgICAgICAgIHRyYW5zbGF0aW9uWzBdLnZhbHVlID0gbmV3VHJhbnNsYXRpb25zO1xyXG4gICAgICAgICAgICAgICAgdGhhdC5zdWJtaXRbMF0uY2xhc3NMaXN0LnJlbW92ZSgnaXMtZGlzYWJsZWQnKTsgXHJcbiAgICAgICAgICAgICAgICB0aGF0LnRyYW5zbGF0aW9uLmVhY2goZnVuY3Rpb24oKXtcclxuICAgICAgICAgICAgICAgICAgICAkKHRoaXMpWzBdLmNsYXNzTGlzdC5yZW1vdmUoJ2lzLWRpc2FibGVkJyk7XHJcbiAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcbiAgICBzZXRUcmFuc2xhdGlvbnMoKXtcclxuICAgICAgICBsZXQgdGhhdCA9IHRoaXMsXHJcbiAgICAgICAgICAgIHRyYW5zbGF0aW9ucyA9IHRoaXMudmFsdWVbMF0udmFsdWUsXHJcbiAgICAgICAgICAgIGl0ZW1JZCA9ICdpdGVtJztcclxuICAgICAgICBcclxuICAgICAgICBpZiAoJChldmVudC5jdXJyZW50VGFyZ2V0KS5jbG9zZXN0KCdbZGF0YS1zdXBwb3J0LWhvdXJzLWhvbGlkYXlzLWxpc3QtaXRlbV0nKS5sZW5ndGgpe1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZygkKGV2ZW50LmN1cnJlbnRUYXJnZXQpKTtcclxuICAgICAgICAgICAgbGV0IGVsZW1lbnQgPSAkKGV2ZW50LmN1cnJlbnRUYXJnZXQpLmNsb3Nlc3QoJ1tkYXRhLXN1cHBvcnQtaG91cnMtaG9saWRheXMtbGlzdC1pdGVtXScpO1xyXG4gICAgICAgICAgICBpdGVtSWQgPSBlbGVtZW50WzBdLmF0dHJpYnV0ZXNbJ2RhdGEtc3VwcG9ydC1ob3Vycy1ob2xpZGF5cy1saXN0LWl0ZW0nXS52YWx1ZTtcclxuICAgICAgICB9XHJcbiAgICAgICAgdGhpcy5tb2RhbEl0ZW1JZFswXS52YWx1ZSA9IGl0ZW1JZDtcclxuICAgICAgICBsZXQgdGV4dElucHV0cyA9IHRoYXQubW9kYWwuZmluZCgnaW5wdXRbdHlwZT1cInRleHRcIl0nKTtcclxuICAgICAgICB0ZXh0SW5wdXRzLmVhY2goZnVuY3Rpb24oKXtcclxuICAgICAgICAgICAgJCh0aGlzKVswXS52YWx1ZSA9IFwiXCI7XHJcbiAgICAgICAgfSk7XHJcbiAgICAgICAgaWYgKHRyYW5zbGF0aW9ucykge1xyXG4gICAgICAgICAgICBsZXQgdHJhbnNsYXRpb25zVmFsdWVzID0gSlNPTi5wYXJzZSh0cmFuc2xhdGlvbnMpO1xyXG4gICAgICAgICAgICAkLmVhY2godHJhbnNsYXRpb25zVmFsdWVzLCBmdW5jdGlvbiAobGFuZ3VhZ2UsIHZhbHVlKSB7XHJcbiAgICAgICAgICAgICAgICBsZXQgaW5wdXQgPSB0aGF0Lm1vZGFsLmZpbmQoJy5sYW5nLScgKyBsYW5ndWFnZSArICctaW5wdXQnKTtcclxuICAgICAgICAgICAgICAgICAgICBpbnB1dFswXS52YWx1ZSA9IHZhbHVlO1xyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9ICAgIFxyXG4gICAgfVxyXG59IiwiaW1wb3J0IGhvbGlkYXlzIGZyb20gJy4vY29tcG9uZW50cy9ob2xpZGF5cyc7XHJcbmltcG9ydCB0cmFuc2xhdGlvbnMgZnJvbSAnLi9jb21wb25lbnRzL3RyYW5zbGF0aW9ucyc7XHJcbmltcG9ydCB0cmFuc2xhdGlvbnNGb3JtIGZyb20gJy4vY29tcG9uZW50cy90cmFuc2xhdGlvbnMtZm9ybSc7XHJcbmltcG9ydCBhbGxEYXkgZnJvbSAnLi9jb21wb25lbnRzL2l0ZW0vYWxsLWRheSc7XHJcbmltcG9ydCBzZWxlY3RpemVBbGwgZnJvbSAnLi9jb21wb25lbnRzL2l0ZW0vc2VsZWN0aXplLWFsbCc7XHJcblxyXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xyXG4gICAgXHJcbiAgICAkKCdbZGF0YS1zZWxlY3RpemUtYWxsXScpLmVhY2goZnVuY3Rpb24oKXtcclxuICAgICAgICBuZXcgc2VsZWN0aXplQWxsKCQodGhpcykpO1xyXG4gICAgfSk7XHJcbiAgICAkKCdbZGF0YS1zdXBwb3J0LWhvdXJzLXRyYW5zbGF0aW9uLWNvbnRhaW5lcl0nKS5lYWNoKGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBuZXcgdHJhbnNsYXRpb25zKCQodGhpcykpO1xyXG4gICAgfSk7XHJcbiBcclxuICAgIGhvbGlkYXlzLmluaXREYXRhU2VsZWN0b3JzKCk7XHJcbiAgICB0cmFuc2xhdGlvbnNGb3JtLmluaXREYXRhU2VsZWN0b3JzKCk7XHJcbiAgICBhbGxEYXkuaW5pdERhdGFTZWxlY3RvcnMoKTtcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==