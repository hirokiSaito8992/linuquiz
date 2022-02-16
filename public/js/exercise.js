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

/***/ "./resources/js/exercise.js":
/*!**********************************!*\
  !*** ./resources/js/exercise.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

var ansItems = new Map(); //回答と問題IDを格納する連想配列

var ansResult;
$(function () {
  var forms = document.forms;
  var formsNum = forms.length - 1; //formタグの個数( -1 はログアウトボタンなので除外するため)

  var tmp = [];
  var tmp2 = []; //formタグからdataset.questionidを配列として抽出する

  for (var i = 1, len = forms.length; i < len; i++) {
    for (var j = 1, len2 = forms[i].elements.length; j < len2; j++) {
      tmp.push(forms[i].elements[j].dataset.questionid);
    }
  }

  tmp2 = tmp.concat();
  tmp2 = $.unique(tmp2); //formタグは問題量によって変化するため、ループさせる

  var _loop = function _loop(_i) {
    $("#questionNum".concat(_i)).find('input[id^="answers"]').on('change', function () {
      //特定のformタグでcheckboxのinputタグが変更された場合
      var quesItems = []; //ユーザ回答を格納する配列

      var questionId = 'questionid' + $(this).data('questionid'); //問題IDを格納する

      var checkFlag = $("#questionNum".concat(_i)).find('input[type="checkbox"]:checked').length; //対象の問題でチェックされているか判定するフラグ

      if (checkFlag > 0) {
        // チェックされている場合
        $("#questionNum".concat(_i, " input[name^=\"questionans\"]:checked")).each(function () {
          //チェックボックスが操作された場合のループ処理
          if (tmp2[_i - 1] == $(this).data('questionid')) {
            var ques_tmp = [];
            quesItems.push($(this).val()); //チェックボックスの値を格納していく

            ques_tmp = quesItems.concat();
            ansItems.set(questionId, ques_tmp);
          }
        });
      } else {
        ansItems.set(questionId, []);
      }

      var ansTmp = ansItems.entries(ansItems);
      ansTmp = Array.from(ansTmp);
      ansTmp = ansTmp.map(function (_ref) {
        var _ref2 = _slicedToArray(_ref, 2),
            k = _ref2[0],
            v = _ref2[1];

        return _defineProperty({}, k, v);
      });
      ansResult = ansTmp.reduce(function (l, r) {
        return Object.assign(l, r);
      }, {});
    });
  };

  for (var _i = 1; _i <= formsNum; _i++) {
    _loop(_i);
  } //ボタンを押下したタイミングで、解答を送信するフォームを作成して送信する


  $('#endExercise').on('click', function () {
    //Laravelの使用上CSRF対策でcsrfトークンをPOST通信の際に送る必要がある
    var csrf = document.getElementById('csrf-token').content;
    $('<form/>', {
      action: "/quizzes/exercise/confirm",
      method: "post"
    }).append($('<input/>', {
      type: "hidden",
      name: "_token",
      value: csrf
    })).append($('<input/>', {
      type: "hidden",
      name: "select_answer",
      value: JSON.stringify(ansResult)
    })).appendTo(document.body).submit();
  });
});

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/exercise.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/linuquiz/resources/js/exercise.js */"./resources/js/exercise.js");


/***/ })

/******/ });