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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/selectExam.js":
/*!************************************!*\
  !*** ./resources/js/selectExam.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var selectLink = '';
$(function () {
  $('#linkLinuc101').attr('href', 'javascript: void(0)'); //aタグのリンク先を無効化する

  $('#linkLinuc102').attr('href', 'javascript: void(0)');
  $('#linkLinuc201').attr('href', 'javascript: void(0)');
  $('#linkLinuc202').attr('href', 'javascript: void(0)'); //どの項目がクリックされたか判定する 判定には値が格納される(0~)
  //加えてどのセレクタに関数を実行するのかを判定している

  $('a.selectTarget').on('click', function () {
    selectLink = $('a.selectTarget').index(this); //クリックしたアンカータグの行を格納

    var linucNum = 0;

    switch (selectLink) {
      case 0:
        linucNum = $('#linkLinuc101').data('linuc');
        getParts(linucNum);
        break;

      case 1:
        linucNum = $('#linkLinuc102').data('linuc');
        getParts(linucNum);
        break;

      case 2:
        linucNum = $('#linkLinuc201').data('linuc');
        getParts(linucNum);
        break;

      case 3:
        linucNum = $('#linkLinuc202').data('linuc');
        getParts(linucNum);
        break;
    }
  });

  function getParts(linucNum) {
    //AjaxでLravel側のブレードを取得してくる
    var linucId = linucNum; //対象の試験番号

    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      }
    });
    $.ajax({
      type: 'GET',
      url: "/quizzes/getindex/".concat(linucId),
      dataType: 'html',
      cache: false,
      timeout: 1000
    }).done(function (results) {
      //Ajax通信が成功後、サーバからの値を反映させた後にスクリプトを適用させる
      //getScript()でHTMLを反映後に外部スクリプトを適用
      var URL = location.href; //現在のURLを取得

      var TargetUrl = URL.replace('quizzes', 'js/'); //URLは文字列なので、正規表現で文字列を置換

      $('#selectLinuc').html(results);
      $.getScript("".concat(TargetUrl, "indexActiveButton.js"));
    }).fail(function (error) {
      $('<div class="text-center"><h1>404 ページが見つかりませんでした</h1></div>').appendTo('#selectLinuc');
    });
  }
});

/***/ }),

/***/ 5:
/*!******************************************!*\
  !*** multi ./resources/js/selectExam.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/linuquiz/resources/js/selectExam.js */"./resources/js/selectExam.js");


/***/ })

/******/ });