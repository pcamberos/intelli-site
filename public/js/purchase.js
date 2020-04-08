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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/purchase.js":
/*!**********************************!*\
  !*** ./resources/js/purchase.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

console.log("|| PURCHASE VIEW ||");
$(document).ready(function () {
  $(".select_product").select2({
    placeholder: "Seleccione",
    allowClear: true
  });
  $(".select_product_area").on("change", function () {
    var id = $(this).val() != "" ? $(this).val() : "empty";
    var total = $(this).val() != "" ? products_gral[$(this).val()] : "0.00";
    $(this).parent().parent().find(".preci_total").text("$" + total);

    if (id != 'empty') {
      $(this).parent().parent().find(".show-p").prop("disabled", false);
      $(this).parent().parent().find(".show-p").attr("href", "#carouselModal_" + id);
      $(this).parent().parent().find(".show-p").removeClass('show_product-dis').addClass('show_product');
    } else {
      $(this).parent().parent().find(".show-p").prop("disabled", true);
      $(this).parent().parent().find(".show-p").attr("href", "#carouselModal");
      $(this).parent().parent().find(".show-p").removeClass('show_product').addClass('show_product-dis');
    }

    calcular_totales();
  });
  $(".select_product_extra").on("change", function () {
    var cant = $(this).val() != "" ? $(this).val() : "empty";
    var product_id = $(this).parent().parent().find(".extra_product_id").val();
    var product_price = products_gral[product_id];

    if (cant != 'empty') {
      console.log(cant + " del id (" + product_id + ") a precio unitario de " + product_price);
      var product_price_total = +cant * +product_price;
      $(this).parent().parent().find(".preci_total").text(currencyFormat(product_price_total));
      calcular_totales();
    } else {
      console.log("empty for some reason");
      $(this).val("1");
      $(this).trigger("change");
    }
  });
  calcular_totales();
});

var calcular_totales = function calcular_totales() {
  var subtotal = 0,
      iva = 0,
      total = 0;
  $(".product_row").each(function () {
    var monto = $(this).find(".select_product_area").val() != "" ? products_gral[$(this).find(".select_product_area").val()] : 0;
    subtotal = +subtotal + +monto;
  });
  $(".extra-row").each(function () {
    console.log("Extra row");
    var cant = $(this).find(".select_product_extra").val() != "" ? $(this).find(".select_product_extra").val() : 1;
    var price = products_gral[$(this).find(".extra_product_id").val()];
    var monto = +cant * +price;
    console.log(cant + " * " + price + " = " + monto);
    subtotal = +subtotal + +monto;
  });
  iva = subtotal * .16;
  total = +subtotal + +iva;
  $(".monto-subtotal").text(currencyFormat(subtotal));
  $(".monto-iva").text(currencyFormat(iva));
  $(".monto-total").text(currencyFormat(total));
};

var currencyFormat = function currencyFormat(num) {
  return '$' + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
};

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/purchase.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ESTRASOL/juan.camberos/Documentos/PROYECTOS/Intelli/intelli_site/resources/js/purchase.js */"./resources/js/purchase.js");


/***/ })

/******/ });