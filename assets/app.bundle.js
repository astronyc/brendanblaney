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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("var _app=__webpack_require__(1);var _app2=_interopRequireDefault(_app);__webpack_require__(2);__webpack_require__(3);function _interopRequireDefault(obj){return obj&&obj.__esModule?obj:{default:obj};}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9qcy9hcHAuanM/Yzk5ZSJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFDQSxnQyx1Q0FHQSx1QkFDQSx1QiIsImZpbGUiOiIwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gSW1wb3J0IHRoZSBhcHBzIHN0eWxlcyB8IGRvIG5vdCB0b3VjaCB0aGlzXG5pbXBvcnQgc2FzcyBmcm9tIFwiLi4vc2Nzcy9hcHAuc2Nzc1wiO1xuXG4vLyBJbXBvcnQgb3VyIG1vZHVsZXMgfCB0byBrZWVwIHRoaXMgb3JnYW5pemVkLCBJJ2QgbGlrZSB5b3UgdG8gYnJlYWsgZG93biB5b3VyIEpTIGludG8gbW9kdWxlcy4gRXhhbXBsZTogX2hlYWRlci5qc1xuaW1wb3J0IFwiLi9tb2R1bGVzL19oZWFkZXIuanNcIjtcbmltcG9ydCBcIi4vbW9kdWxlcy9fc2xpZGVybmF2LmpzXCI7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9qcy9hcHAuanMiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///0\n");

/***/ }),
/* 1 */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zY3NzL2FwcC5zY3NzP2VlOTAiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEiLCJmaWxlIjoiMS5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9zY3NzL2FwcC5zY3NzXG4vLyBtb2R1bGUgaWQgPSAxXG4vLyBtb2R1bGUgY2h1bmtzID0gMCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///1\n");

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("$(function(){'use strict';console.log('header');});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9qcy9tb2R1bGVzL19oZWFkZXIuanM/OWMxOCJdLCJuYW1lcyI6WyIkIiwiY29uc29sZSIsImxvZyJdLCJtYXBwaW5ncyI6IkFBQUFBLEVBQUUsVUFBVyxDQUNYLGFBRUFDLFFBQVFDLEdBQVIsQ0FBWSxRQUFaLEVBQ0QsQ0FKRCIsImZpbGUiOiIyLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpIHtcbiAgJ3VzZSBzdHJpY3QnXG5cbiAgY29uc29sZS5sb2coJ2hlYWRlcicpXG59KVxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL2pzL21vZHVsZXMvX2hlYWRlci5qcyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///2\n");

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("$(document).ready(function(){console.log(\"sliderrrrrr\");$(\".navigation-link\").bind(\"click\",function(e){e.preventDefault();// prevent hard jump, the default behavior\nvar target=$(this).attr(\"href\");// Set the target as variable\n// perform animated scrolling by getting top-position of target-element and set it as scroll target\n$(\"html, body\").stop().animate({scrollTop:$(target).offset().top},600,function(){location.hash=target;//attach the hash (#jumptarget) to the pageurl\n});return false;});});$(window).scroll(function(){var scrollDistance=$(window).scrollTop();// Assign active class to nav links while scolling\n$(\".page-section\").each(function(i){if($(this).position().top<=scrollDistance){$(\".navigation a.active\").removeClass(\"active\");$(\".navigation a\").eq(i).addClass(\"active\");}});}).scroll();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9qcy9tb2R1bGVzL19zbGlkZXJuYXYuanM/ZWM3ZCJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImNvbnNvbGUiLCJsb2ciLCJiaW5kIiwiZSIsInByZXZlbnREZWZhdWx0IiwidGFyZ2V0IiwiYXR0ciIsInN0b3AiLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwib2Zmc2V0IiwidG9wIiwibG9jYXRpb24iLCJoYXNoIiwid2luZG93Iiwic2Nyb2xsIiwic2Nyb2xsRGlzdGFuY2UiLCJlYWNoIiwiaSIsInBvc2l0aW9uIiwicmVtb3ZlQ2xhc3MiLCJlcSIsImFkZENsYXNzIl0sIm1hcHBpbmdzIjoiQUFBQUEsRUFBRUMsUUFBRixFQUFZQyxLQUFaLENBQWtCLFVBQVcsQ0FDNUJDLFFBQVFDLEdBQVIsQ0FBWSxhQUFaLEVBRUFKLEVBQUUsa0JBQUYsRUFBc0JLLElBQXRCLENBQTJCLE9BQTNCLENBQW9DLFNBQVNDLENBQVQsQ0FBWSxDQUMvQ0EsRUFBRUMsY0FBRixHQUFvQjtBQUVwQixHQUFJQyxRQUFTUixFQUFFLElBQUYsRUFBUVMsSUFBUixDQUFhLE1BQWIsQ0FBYixDQUFtQztBQUVuQztBQUNBVCxFQUFFLFlBQUYsRUFDRVUsSUFERixHQUVFQyxPQUZGLENBR0UsQ0FDQ0MsVUFBV1osRUFBRVEsTUFBRixFQUFVSyxNQUFWLEdBQW1CQyxHQUQvQixDQUhGLENBTUUsR0FORixDQU9FLFVBQVcsQ0FDVkMsU0FBU0MsSUFBVCxDQUFnQlIsTUFBaEIsQ0FBd0I7QUFDeEIsQ0FUSCxFQVlBLE1BQU8sTUFBUCxDQUNBLENBbkJELEVBb0JBLENBdkJELEVBeUJBUixFQUFFaUIsTUFBRixFQUNFQyxNQURGLENBQ1MsVUFBVyxDQUNsQixHQUFJQyxnQkFBaUJuQixFQUFFaUIsTUFBRixFQUFVTCxTQUFWLEVBQXJCLENBRUE7QUFDQVosRUFBRSxlQUFGLEVBQW1Cb0IsSUFBbkIsQ0FBd0IsU0FBU0MsQ0FBVCxDQUFZLENBQ25DLEdBQUlyQixFQUFFLElBQUYsRUFBUXNCLFFBQVIsR0FBbUJSLEdBQW5CLEVBQTBCSyxjQUE5QixDQUE4QyxDQUM3Q25CLEVBQUUsc0JBQUYsRUFBMEJ1QixXQUExQixDQUFzQyxRQUF0QyxFQUNBdkIsRUFBRSxlQUFGLEVBQ0V3QixFQURGLENBQ0tILENBREwsRUFFRUksUUFGRixDQUVXLFFBRlgsRUFHQSxDQUNELENBUEQsRUFRQSxDQWJGLEVBY0VQLE1BZEYiLCJmaWxlIjoiMy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuXHRjb25zb2xlLmxvZyhcInNsaWRlcnJycnJyXCIpO1xuXG5cdCQoXCIubmF2aWdhdGlvbi1saW5rXCIpLmJpbmQoXCJjbGlja1wiLCBmdW5jdGlvbihlKSB7XG5cdFx0ZS5wcmV2ZW50RGVmYXVsdCgpOyAvLyBwcmV2ZW50IGhhcmQganVtcCwgdGhlIGRlZmF1bHQgYmVoYXZpb3JcblxuXHRcdHZhciB0YXJnZXQgPSAkKHRoaXMpLmF0dHIoXCJocmVmXCIpOyAvLyBTZXQgdGhlIHRhcmdldCBhcyB2YXJpYWJsZVxuXG5cdFx0Ly8gcGVyZm9ybSBhbmltYXRlZCBzY3JvbGxpbmcgYnkgZ2V0dGluZyB0b3AtcG9zaXRpb24gb2YgdGFyZ2V0LWVsZW1lbnQgYW5kIHNldCBpdCBhcyBzY3JvbGwgdGFyZ2V0XG5cdFx0JChcImh0bWwsIGJvZHlcIilcblx0XHRcdC5zdG9wKClcblx0XHRcdC5hbmltYXRlKFxuXHRcdFx0XHR7XG5cdFx0XHRcdFx0c2Nyb2xsVG9wOiAkKHRhcmdldCkub2Zmc2V0KCkudG9wXG5cdFx0XHRcdH0sXG5cdFx0XHRcdDYwMCxcblx0XHRcdFx0ZnVuY3Rpb24oKSB7XG5cdFx0XHRcdFx0bG9jYXRpb24uaGFzaCA9IHRhcmdldDsgLy9hdHRhY2ggdGhlIGhhc2ggKCNqdW1wdGFyZ2V0KSB0byB0aGUgcGFnZXVybFxuXHRcdFx0XHR9XG5cdFx0XHQpO1xuXG5cdFx0cmV0dXJuIGZhbHNlO1xuXHR9KTtcbn0pO1xuXG4kKHdpbmRvdylcblx0LnNjcm9sbChmdW5jdGlvbigpIHtcblx0XHR2YXIgc2Nyb2xsRGlzdGFuY2UgPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCk7XG5cblx0XHQvLyBBc3NpZ24gYWN0aXZlIGNsYXNzIHRvIG5hdiBsaW5rcyB3aGlsZSBzY29sbGluZ1xuXHRcdCQoXCIucGFnZS1zZWN0aW9uXCIpLmVhY2goZnVuY3Rpb24oaSkge1xuXHRcdFx0aWYgKCQodGhpcykucG9zaXRpb24oKS50b3AgPD0gc2Nyb2xsRGlzdGFuY2UpIHtcblx0XHRcdFx0JChcIi5uYXZpZ2F0aW9uIGEuYWN0aXZlXCIpLnJlbW92ZUNsYXNzKFwiYWN0aXZlXCIpO1xuXHRcdFx0XHQkKFwiLm5hdmlnYXRpb24gYVwiKVxuXHRcdFx0XHRcdC5lcShpKVxuXHRcdFx0XHRcdC5hZGRDbGFzcyhcImFjdGl2ZVwiKTtcblx0XHRcdH1cblx0XHR9KTtcblx0fSlcblx0LnNjcm9sbCgpO1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vanMvbW9kdWxlcy9fc2xpZGVybmF2LmpzIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///3\n");

/***/ })
/******/ ]);