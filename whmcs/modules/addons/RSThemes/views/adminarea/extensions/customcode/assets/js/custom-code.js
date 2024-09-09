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
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/admin/js/custom-code.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/admin/js/components/location-select.js":
/*!*******************************************************!*\
  !*** ./assets/admin/js/components/location-select.js ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var locationSelect = /*#__PURE__*/function () {
  function locationSelect(select) {
    _classCallCheck(this, locationSelect);

    this.select = select;
    this.specifiedPageContainer = $('[data-custom-code-location-specified-page-container]');
    this.specifiedPage = this.specifiedPageContainer.find('[data-custom-code-location-specified-page]');
    this.bindEvents();
  }

  _createClass(locationSelect, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.select.on('change', this.locationSelect.bind(this));
    }
  }, {
    key: "locationSelect",
    value: function locationSelect() {
      var value = this.select[0].value;

      if (value != 'ClientAreaHeaderOutput' && value != 'ClientAreaHeadOutput' && value != 'ClientAreaFooterOutput') {
        this.specifiedPageContainer[0].classList.add('is-hidden');
        this.resetSpecifiedPageSelect();
      } else {
        this.specifiedPageContainer[0].classList.remove('is-hidden');
      }
    }
  }, {
    key: "resetSpecifiedPageSelect",
    value: function resetSpecifiedPageSelect() {
      var selectize = this.specifiedPage[0].selectize;
      selectize.setValue("AllPages");
    }
  }]);

  return locationSelect;
}();

function initDataSelectors() {
  $('[data-custom-code-location-select]').each(function () {
    new locationSelect($(this));
  });
}

var init = {
  initDataSelectors: initDataSelectors
};
/* harmony default export */ __webpack_exports__["default"] = (init);

/***/ }),

/***/ "./assets/admin/js/components/remove-item.js":
/*!***************************************************!*\
  !*** ./assets/admin/js/components/remove-item.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var removeItem = /*#__PURE__*/function () {
  function removeItem(button) {
    _classCallCheck(this, removeItem);

    this.button = button;
    this.modal = $('[data-custom-code-modal-remove]');
    this.confirm = this.modal.find('[data-custom-code-modal-remove-confirm]');
    this.bindEvents();
  }

  _createClass(removeItem, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.button.on('click', this.bindDropMenu.bind(this));
      this.confirm.on('click', this.removeItemConfirm.bind(this));
    }
  }, {
    key: "bindDropMenu",
    value: function bindDropMenu() {
      var that = this;
      setTimeout(function () {
        this.change = $('body').find('[data-custom-code-list-remove-item]');
        this.change.on('click', that.removeItem.bind(that));
      }, 500);
    }
  }, {
    key: "removeItem",
    value: function removeItem(target) {
      var url = target.currentTarget.attributes['data-ajax-url'].value;
      this.confirm[0].setAttribute('data-url', url);
      this.modal.modal({
        show: true,
        keyboard: false,
        backdrop: 'static'
      });
      $(target.currentTarget).unbind('click');
    }
  }, {
    key: "removeItemConfirm",
    value: function removeItemConfirm() {
      var url = this.confirm[0].attributes['data-url'].value;
      this.confirm[0].classList.add('is-loading');
      window.location.href = url;
    }
  }]);

  return removeItem;
}();

function initDataSelectors() {
  $('[data-custom-code-list-dropdown]').each(function () {
    new removeItem($(this));
  });
}

var init = {
  initDataSelectors: initDataSelectors
};
/* harmony default export */ __webpack_exports__["default"] = (init);

/***/ }),

/***/ "./assets/admin/js/components/selectize-all.js":
/*!*****************************************************!*\
  !*** ./assets/admin/js/components/selectize-all.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
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

      if (this.selectize.items[itemsCount - 1] == "AllPages") {
        while (itemsCount > 1) {
          this.selectize.removeItem(this.selectize.items[0]);
          itemsCount = itemsCount - 1;
        }

        this.selectize.refreshOptions();
      } else {
        this.selectize.removeItem("AllPages");
        this.selectize.refreshOptions();
      }
    }
  }, {
    key: "allOptionAdd",
    value: function allOptionAdd() {
      var itemsCount = this.selectize.items.length;

      if (itemsCount == 0) {
        this.selectize.addItem("AllPages");
        this.selectize.refreshOptions();
      }
    }
  }]);

  return selectizeAll;
}();

function initDataSelectors() {
  $('[data-custom-code-location-specified-page]').each(function () {
    new selectizeAll($(this));
  });
}

var init = {
  initDataSelectors: initDataSelectors
};
/* harmony default export */ __webpack_exports__["default"] = (init);

/***/ }),

/***/ "./assets/admin/js/custom-code.js":
/*!****************************************!*\
  !*** ./assets/admin/js/custom-code.js ***!
  \****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_remove_item__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/remove-item */ "./assets/admin/js/components/remove-item.js");
/* harmony import */ var _components_location_select__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/location-select */ "./assets/admin/js/components/location-select.js");
/* harmony import */ var _components_selectize_all__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/selectize-all */ "./assets/admin/js/components/selectize-all.js");



$(document).ready(function () {
  _components_remove_item__WEBPACK_IMPORTED_MODULE_0__["default"].initDataSelectors();
  _components_location_select__WEBPACK_IMPORTED_MODULE_1__["default"].initDataSelectors();
  _components_selectize_all__WEBPACK_IMPORTED_MODULE_3__["default"].initDataSelectors();
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FkbWluL2pzL2NvbXBvbmVudHMvbG9jYXRpb24tc2VsZWN0LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9hZG1pbi9qcy9jb21wb25lbnRzL3JlbW92ZS1pdGVtLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9hZG1pbi9qcy9jb21wb25lbnRzL3NlbGVjdGl6ZS1hbGwuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FkbWluL2pzL2N1c3RvbS1jb2RlLmpzIl0sIm5hbWVzIjpbImxvY2F0aW9uU2VsZWN0Iiwic2VsZWN0Iiwic3BlY2lmaWVkUGFnZUNvbnRhaW5lciIsIiQiLCJzcGVjaWZpZWRQYWdlIiwiZmluZCIsImJpbmRFdmVudHMiLCJvbiIsImJpbmQiLCJ2YWx1ZSIsImNsYXNzTGlzdCIsImFkZCIsInJlc2V0U3BlY2lmaWVkUGFnZVNlbGVjdCIsInJlbW92ZSIsInNlbGVjdGl6ZSIsInNldFZhbHVlIiwiaW5pdERhdGFTZWxlY3RvcnMiLCJlYWNoIiwiaW5pdCIsInJlbW92ZUl0ZW0iLCJidXR0b24iLCJtb2RhbCIsImNvbmZpcm0iLCJiaW5kRHJvcE1lbnUiLCJyZW1vdmVJdGVtQ29uZmlybSIsInRoYXQiLCJzZXRUaW1lb3V0IiwiY2hhbmdlIiwidGFyZ2V0IiwidXJsIiwiY3VycmVudFRhcmdldCIsImF0dHJpYnV0ZXMiLCJzZXRBdHRyaWJ1dGUiLCJzaG93Iiwia2V5Ym9hcmQiLCJiYWNrZHJvcCIsInVuYmluZCIsIndpbmRvdyIsImxvY2F0aW9uIiwiaHJlZiIsInNlbGVjdGl6ZUFsbCIsImFsbE9wdGlvbkNvbnRyb2wiLCJhbGxPcHRpb25BZGQiLCJpdGVtc0NvdW50IiwiaXRlbXMiLCJsZW5ndGgiLCJyZWZyZXNoT3B0aW9ucyIsImFkZEl0ZW0iLCJkb2N1bWVudCIsInJlYWR5Il0sIm1hcHBpbmdzIjoiO1FBQUE7UUFDQTs7UUFFQTtRQUNBOztR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QUcsS0FBSzdCLFNBQUwsQ0FBZThCLEtBQWYsQ0FBcUJDLE1BQXRDOztBQUNBLFVBQUlGLFVBQVUsSUFBSSxDQUFsQixFQUFvQjtBQUNoQixhQUFLN0IsU0FBTCxDQUFlaUMsT0FBZixDQUF1QixVQUF2QjtBQUNBLGFBQUtqQyxTQUFMLENBQWVnQyxjQUFmO0FBQ0g7QUFDSjs7Ozs7O0FBR0wsU0FBUzlCLGlCQUFULEdBQTZCO0FBQ3pCYixHQUFDLENBQUMsNENBQUQsQ0FBRCxDQUFnRGMsSUFBaEQsQ0FBcUQsWUFBWTtBQUM3RCxRQUFJdUIsWUFBSixDQUFpQnJDLENBQUMsQ0FBQyxJQUFELENBQWxCO0FBQ0gsR0FGRDtBQUdIOztBQUVELElBQU1lLElBQUksR0FBRztBQUNURixtQkFBaUIsRUFBakJBO0FBRFMsQ0FBYjtBQUllRSxtRUFBZixFOzs7Ozs7Ozs7Ozs7QUMzQ0E7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFFQWYsQ0FBQyxDQUFDNkMsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtBQUN4QjlCLGlFQUFVLENBQUNILGlCQUFYO0FBQ0FoQixxRUFBYyxDQUFDZ0IsaUJBQWY7QUFDQXdCLG1FQUFZLENBQUN4QixpQkFBYjtBQUNILENBSkQsRSIsImZpbGUiOiJtb2R1bGVzL2FkZG9ucy9SU1RoZW1lcy92aWV3cy9hZG1pbmFyZWEvZXh0ZW5zaW9ucy9jdXN0b21jb2RlL2Fzc2V0cy9qcy9jdXN0b20tY29kZS5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwgeyBlbnVtZXJhYmxlOiB0cnVlLCBnZXQ6IGdldHRlciB9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yID0gZnVuY3Rpb24oZXhwb3J0cykge1xuIFx0XHRpZih0eXBlb2YgU3ltYm9sICE9PSAndW5kZWZpbmVkJyAmJiBTeW1ib2wudG9TdHJpbmdUYWcpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcbiBcdFx0fVxuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgJ19fZXNNb2R1bGUnLCB7IHZhbHVlOiB0cnVlIH0pO1xuIFx0fTtcblxuIFx0Ly8gY3JlYXRlIGEgZmFrZSBuYW1lc3BhY2Ugb2JqZWN0XG4gXHQvLyBtb2RlICYgMTogdmFsdWUgaXMgYSBtb2R1bGUgaWQsIHJlcXVpcmUgaXRcbiBcdC8vIG1vZGUgJiAyOiBtZXJnZSBhbGwgcHJvcGVydGllcyBvZiB2YWx1ZSBpbnRvIHRoZSBuc1xuIFx0Ly8gbW9kZSAmIDQ6IHJldHVybiB2YWx1ZSB3aGVuIGFscmVhZHkgbnMgb2JqZWN0XG4gXHQvLyBtb2RlICYgOHwxOiBiZWhhdmUgbGlrZSByZXF1aXJlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnQgPSBmdW5jdGlvbih2YWx1ZSwgbW9kZSkge1xuIFx0XHRpZihtb2RlICYgMSkgdmFsdWUgPSBfX3dlYnBhY2tfcmVxdWlyZV9fKHZhbHVlKTtcbiBcdFx0aWYobW9kZSAmIDgpIHJldHVybiB2YWx1ZTtcbiBcdFx0aWYoKG1vZGUgJiA0KSAmJiB0eXBlb2YgdmFsdWUgPT09ICdvYmplY3QnICYmIHZhbHVlICYmIHZhbHVlLl9fZXNNb2R1bGUpIHJldHVybiB2YWx1ZTtcbiBcdFx0dmFyIG5zID0gT2JqZWN0LmNyZWF0ZShudWxsKTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yKG5zKTtcbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KG5zLCAnZGVmYXVsdCcsIHsgZW51bWVyYWJsZTogdHJ1ZSwgdmFsdWU6IHZhbHVlIH0pO1xuIFx0XHRpZihtb2RlICYgMiAmJiB0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIGZvcih2YXIga2V5IGluIHZhbHVlKSBfX3dlYnBhY2tfcmVxdWlyZV9fLmQobnMsIGtleSwgZnVuY3Rpb24oa2V5KSB7IHJldHVybiB2YWx1ZVtrZXldOyB9LmJpbmQobnVsbCwga2V5KSk7XG4gXHRcdHJldHVybiBucztcbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiLi8uLi9cIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IFwiLi9hc3NldHMvYWRtaW4vanMvY3VzdG9tLWNvZGUuanNcIik7XG4iLCJjbGFzcyBsb2NhdGlvblNlbGVjdHtcclxuICAgIGNvbnN0cnVjdG9yKHNlbGVjdCl7XHJcbiAgICAgICAgdGhpcy5zZWxlY3QgPSBzZWxlY3Q7XHJcbiAgICAgICAgdGhpcy5zcGVjaWZpZWRQYWdlQ29udGFpbmVyID0gJCgnW2RhdGEtY3VzdG9tLWNvZGUtbG9jYXRpb24tc3BlY2lmaWVkLXBhZ2UtY29udGFpbmVyXScpO1xyXG4gICAgICAgIHRoaXMuc3BlY2lmaWVkUGFnZSA9IHRoaXMuc3BlY2lmaWVkUGFnZUNvbnRhaW5lci5maW5kKCdbZGF0YS1jdXN0b20tY29kZS1sb2NhdGlvbi1zcGVjaWZpZWQtcGFnZV0nKTtcclxuICAgICAgICB0aGlzLmJpbmRFdmVudHMoKTtcclxuICAgIH1cclxuICAgIGJpbmRFdmVudHMoKXtcclxuICAgICAgICB0aGlzLnNlbGVjdC5vbignY2hhbmdlJywgdGhpcy5sb2NhdGlvblNlbGVjdC5iaW5kKHRoaXMpKTtcclxuICAgIH1cclxuICAgIGxvY2F0aW9uU2VsZWN0KCl7XHJcbiAgICAgICBsZXQgdmFsdWUgPSB0aGlzLnNlbGVjdFswXS52YWx1ZTtcclxuICAgICAgICBpZih2YWx1ZSAhPSAnQ2xpZW50QXJlYUhlYWRlck91dHB1dCcgJiYgdmFsdWUgIT0nQ2xpZW50QXJlYUhlYWRPdXRwdXQnICYmIHZhbHVlICE9J0NsaWVudEFyZWFGb290ZXJPdXRwdXQnKXtcclxuICAgICAgICAgICAgdGhpcy5zcGVjaWZpZWRQYWdlQ29udGFpbmVyWzBdLmNsYXNzTGlzdC5hZGQoJ2lzLWhpZGRlbicpXHJcbiAgICAgICAgICAgIHRoaXMucmVzZXRTcGVjaWZpZWRQYWdlU2VsZWN0KCk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGVsc2V7XHJcbiAgICAgICAgICAgIHRoaXMuc3BlY2lmaWVkUGFnZUNvbnRhaW5lclswXS5jbGFzc0xpc3QucmVtb3ZlKCdpcy1oaWRkZW4nKVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIHJlc2V0U3BlY2lmaWVkUGFnZVNlbGVjdCgpe1xyXG4gICAgICAgIGxldCBzZWxlY3RpemUgPSB0aGlzLnNwZWNpZmllZFBhZ2VbMF0uc2VsZWN0aXplO1xyXG4gICAgICAgIHNlbGVjdGl6ZS5zZXRWYWx1ZShcIkFsbFBhZ2VzXCIpO1xyXG4gICAgfVxyXG59XHJcblxyXG5mdW5jdGlvbiBpbml0RGF0YVNlbGVjdG9ycygpIHtcclxuICAgICQoJ1tkYXRhLWN1c3RvbS1jb2RlLWxvY2F0aW9uLXNlbGVjdF0nKS5lYWNoKGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBuZXcgbG9jYXRpb25TZWxlY3QoJCh0aGlzKSk7XHJcbiAgICB9KTtcclxufVxyXG5cclxuY29uc3QgaW5pdCA9IHtcclxuICAgIGluaXREYXRhU2VsZWN0b3JzLFxyXG59O1xyXG5cclxuZXhwb3J0IGRlZmF1bHQgaW5pdDsiLCJjbGFzcyByZW1vdmVJdGVte1xyXG4gICAgY29uc3RydWN0b3IoYnV0dG9uKXtcclxuICAgICAgICB0aGlzLmJ1dHRvbiA9IGJ1dHRvbjtcclxuICAgICAgICB0aGlzLm1vZGFsID0gJCgnW2RhdGEtY3VzdG9tLWNvZGUtbW9kYWwtcmVtb3ZlXScpO1xyXG4gICAgICAgIHRoaXMuY29uZmlybSA9IHRoaXMubW9kYWwuZmluZCgnW2RhdGEtY3VzdG9tLWNvZGUtbW9kYWwtcmVtb3ZlLWNvbmZpcm1dJyk7XHJcbiAgICAgICAgdGhpcy5iaW5kRXZlbnRzKCk7XHJcbiAgICB9XHJcbiAgICBiaW5kRXZlbnRzKCl7XHJcbiAgICAgICAgdGhpcy5idXR0b24ub24oJ2NsaWNrJywgdGhpcy5iaW5kRHJvcE1lbnUuYmluZCh0aGlzKSk7XHJcbiAgICAgICAgdGhpcy5jb25maXJtLm9uKCdjbGljaycsIHRoaXMucmVtb3ZlSXRlbUNvbmZpcm0uYmluZCh0aGlzKSk7XHJcbiAgICB9XHJcbiAgICBiaW5kRHJvcE1lbnUoKXtcclxuICAgICAgICBsZXQgdGhhdCA9IHRoaXM7XHJcbiAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpe1xyXG4gICAgICAgICAgICB0aGlzLmNoYW5nZSA9ICQoJ2JvZHknKS5maW5kKCdbZGF0YS1jdXN0b20tY29kZS1saXN0LXJlbW92ZS1pdGVtXScpO1xyXG4gICAgICAgICAgICB0aGlzLmNoYW5nZS5vbignY2xpY2snLCB0aGF0LnJlbW92ZUl0ZW0uYmluZCh0aGF0KSk7XHJcbiAgICAgICAgfSwgNTAwKTtcclxuICAgIH1cclxuICAgIHJlbW92ZUl0ZW0odGFyZ2V0KXtcclxuICAgICAgICBsZXQgdXJsID0gdGFyZ2V0LmN1cnJlbnRUYXJnZXQuYXR0cmlidXRlc1snZGF0YS1hamF4LXVybCddLnZhbHVlO1xyXG4gICAgICAgIHRoaXMuY29uZmlybVswXS5zZXRBdHRyaWJ1dGUoJ2RhdGEtdXJsJywgdXJsKTtcclxuICAgICAgICB0aGlzLm1vZGFsLm1vZGFsKHtcclxuICAgICAgICAgICAgc2hvdzogdHJ1ZSxcclxuICAgICAgICAgICAga2V5Ym9hcmQ6IGZhbHNlLFxyXG4gICAgICAgICAgICBiYWNrZHJvcDogJ3N0YXRpYydcclxuICAgICAgICB9KTtcclxuICAgICAgICAkKHRhcmdldC5jdXJyZW50VGFyZ2V0KS51bmJpbmQoJ2NsaWNrJyk7XHJcbiAgICB9XHJcbiAgICByZW1vdmVJdGVtQ29uZmlybSgpe1xyXG4gICAgICAgIGxldCB1cmwgPSB0aGlzLmNvbmZpcm1bMF0uYXR0cmlidXRlc1snZGF0YS11cmwnXS52YWx1ZTtcclxuICAgICAgICB0aGlzLmNvbmZpcm1bMF0uY2xhc3NMaXN0LmFkZCgnaXMtbG9hZGluZycpO1xyXG4gICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmPXVybDtcclxuICAgIH1cclxufVxyXG5cclxuZnVuY3Rpb24gaW5pdERhdGFTZWxlY3RvcnMoKSB7XHJcbiAgICAkKCdbZGF0YS1jdXN0b20tY29kZS1saXN0LWRyb3Bkb3duXScpLmVhY2goZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIG5ldyByZW1vdmVJdGVtKCQodGhpcykpO1xyXG4gICAgfSk7XHJcbn1cclxuXHJcbmNvbnN0IGluaXQgPSB7XHJcbiAgICBpbml0RGF0YVNlbGVjdG9ycyxcclxufTtcclxuXHJcbmV4cG9ydCBkZWZhdWx0IGluaXQ7IiwiY2xhc3Mgc2VsZWN0aXplQWxse1xyXG4gICAgY29uc3RydWN0b3Ioc2VsZWN0KXtcclxuICAgICAgICB0aGlzLnNlbGVjdCA9IHNlbGVjdDtcclxuICAgICAgICB0aGlzLnNlbGVjdGl6ZSA9IHRoaXMuc2VsZWN0WzBdLnNlbGVjdGl6ZTtcclxuICAgICAgICB0aGlzLmJpbmRFdmVudHMoKTtcclxuICAgIH1cclxuICAgIGJpbmRFdmVudHMoKXtcclxuICAgICAgICB0aGlzLnNlbGVjdGl6ZS5vbignaXRlbV9hZGQnLCB0aGlzLmFsbE9wdGlvbkNvbnRyb2wuYmluZCh0aGlzKSk7XHJcbiAgICAgICAgdGhpcy5zZWxlY3RpemUub24oJ2l0ZW1fcmVtb3ZlJywgdGhpcy5hbGxPcHRpb25BZGQuYmluZCh0aGlzKSk7XHJcbiAgICB9XHJcbiAgICBhbGxPcHRpb25Db250cm9sKCl7XHJcbiAgICAgICAgbGV0IGl0ZW1zQ291bnQgPSB0aGlzLnNlbGVjdGl6ZS5pdGVtcy5sZW5ndGg7XHJcbiAgICAgICAgaWYgKHRoaXMuc2VsZWN0aXplLml0ZW1zW2l0ZW1zQ291bnQgLSAxXSA9PSBcIkFsbFBhZ2VzXCIpe1xyXG4gICAgICAgICAgICB3aGlsZSAoaXRlbXNDb3VudCA+IDEpe1xyXG4gICAgICAgICAgICAgICAgdGhpcy5zZWxlY3RpemUucmVtb3ZlSXRlbSh0aGlzLnNlbGVjdGl6ZS5pdGVtc1swXSk7XHJcbiAgICAgICAgICAgICAgICBpdGVtc0NvdW50ID0gaXRlbXNDb3VudCAtIDE7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgdGhpcy5zZWxlY3RpemUucmVmcmVzaE9wdGlvbnMoKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgdGhpcy5zZWxlY3RpemUucmVtb3ZlSXRlbShcIkFsbFBhZ2VzXCIpO1xyXG4gICAgICAgICAgICB0aGlzLnNlbGVjdGl6ZS5yZWZyZXNoT3B0aW9ucygpO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIGFsbE9wdGlvbkFkZCgpe1xyXG4gICAgICAgIGxldCBpdGVtc0NvdW50ID0gdGhpcy5zZWxlY3RpemUuaXRlbXMubGVuZ3RoO1xyXG4gICAgICAgIGlmIChpdGVtc0NvdW50ID09IDApe1xyXG4gICAgICAgICAgICB0aGlzLnNlbGVjdGl6ZS5hZGRJdGVtKFwiQWxsUGFnZXNcIik7XHJcbiAgICAgICAgICAgIHRoaXMuc2VsZWN0aXplLnJlZnJlc2hPcHRpb25zKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59XHJcblxyXG5mdW5jdGlvbiBpbml0RGF0YVNlbGVjdG9ycygpIHtcclxuICAgICQoJ1tkYXRhLWN1c3RvbS1jb2RlLWxvY2F0aW9uLXNwZWNpZmllZC1wYWdlXScpLmVhY2goZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIG5ldyBzZWxlY3RpemVBbGwoJCh0aGlzKSk7XHJcbiAgICB9KTtcclxufVxyXG5cclxuY29uc3QgaW5pdCA9IHtcclxuICAgIGluaXREYXRhU2VsZWN0b3JzLFxyXG59O1xyXG5cclxuZXhwb3J0IGRlZmF1bHQgaW5pdDsiLCJpbXBvcnQgcmVtb3ZlSXRlbSBmcm9tICcuL2NvbXBvbmVudHMvcmVtb3ZlLWl0ZW0nO1xyXG5pbXBvcnQgbG9jYXRpb25TZWxlY3QgZnJvbSAnLi9jb21wb25lbnRzL2xvY2F0aW9uLXNlbGVjdCc7XHJcbmltcG9ydCBzZWxlY3RpemVBbGwgZnJvbSAnLi9jb21wb25lbnRzL3NlbGVjdGl6ZS1hbGwnO1xyXG5cclxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuICAgIHJlbW92ZUl0ZW0uaW5pdERhdGFTZWxlY3RvcnMoKTtcclxuICAgIGxvY2F0aW9uU2VsZWN0LmluaXREYXRhU2VsZWN0b3JzKCk7IFxyXG4gICAgc2VsZWN0aXplQWxsLmluaXREYXRhU2VsZWN0b3JzKCk7XHJcbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=