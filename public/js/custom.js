/******/ (function (modules)
{ // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId)
    {
/******/
/******/ 		// Check if module is in cache
/******/ 		if (installedModules[moduleId])
        {
/******/ 			return installedModules[moduleId].exports;
            /******/
        }
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
            /******/
        };
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
        /******/
    }
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function (exports, name, getter)
    {
/******/ 		if (!__webpack_require__.o(exports, name))
        {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
            /******/
        }
        /******/
    };
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function (exports)
    {
/******/ 		if (typeof Symbol !== 'undefined' && Symbol.toStringTag)
        {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
            /******/
        }
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
        /******/
    };
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function (value, mode)
    {
/******/ 		if (mode & 1) value = __webpack_require__(value);
/******/ 		if (mode & 8) return value;
/******/ 		if ((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if (mode & 2 && typeof value != 'string') for (var key in value) __webpack_require__.d(ns, key, function (key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
        /******/
    };
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function (module)
    {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
        /******/
    };
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function (object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
    /******/
})
/************************************************************************/
/******/({

/***/ "./resources/js/custom.js":
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
/*! no static exports found */
/***/ (function (module, exports)
        {

            $(function ()
            {
                $("a[href='#" + tab1 + "']").trigger("click");
                $("a[href='#" + tab2 + "']").trigger("click");
            });

            /***/
        }),

/***/ 2:
/*!**************************************!*\
  !*** multi ./resources/js/custom.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__)
        {

            module.exports = __webpack_require__(/*! D:\Laravel\BikeStore\resources\js\custom.js */"./resources/js/custom.js");


            /***/
        })

    /******/
});


$(function ()
{
    $('#all-products').on("click", function ()
    {
        $.ajax({
            url: "/products/json",
            type: 'GET',
            cache: false,
            success: function (result)
            {
                if (result)
                {
                    var content = '';
                    result.forEach(prod =>
                    {
                        content += '<tr><td>' + prod.id + '</td><td>' + prod.name + '</td><td>' + prod.year + '</td><td>' + prod.brand + '</td><td>' + prod.category + '</td><td>' + prod.price + '</td> <td><a href="/products/' + prod.Id + '/edit"><img src="img/wrench.svg" alt="clé"></a></td> <td><a href="/products/' + prod.Id + '/delete"><img src="img/trash.svg" alt=""></a></td></tr>'
                    });
                    $('#body-product').html(
                        content
                    )
                }

            },
            error: function ()
            {
                alert("No");
            }
        });

    });
});



$(function ()
{
    $('#all-stocks').on("click", function ()
    {
        $.ajax({
            url: "/stocks/json",
            type: 'GET',
            cache: false,
            success: function (result)
            {
                if (result)
                {
                    var content = '';
                    result.forEach(stk =>
                    {
                        content += '<tr><td>' + stk.id + '</td><td>' + stk.name + '</td><td>' + stk.quantity + '</td><td>' + stk.store + '</td><td>' + stk.year + '</td><td>' + stk.price + '</td> <td><a href="/products/' + stk.Id + '/edit"><img src="img/wrench.svg" alt="clé"></a></td> <td><a href="/products/' + stk.Id + '/delete"><img src="img/trash.svg" alt=""></a></td></tr>'
                    });
                    $('#body-stock').html(
                        content
                    )
                }

            },
            error: function ()
            {
                alert("No");
            }
        });

    });
});



$(function ()
{
    $('#all-customers').on("click", function ()
    {
        $.ajax({
            url: "/customers/json",
            type: 'GET',
            cache: false,
            success: function (result)
            {
                if (result)
                {
                    var content = '';
                    result.forEach(cust =>
                    {
                        content += '<tr><td>' + cust.id + '</td><td>' + cust.nom + '</td><td>' + cust.prenom + '</td><td>' + cust.street + '</td><td>' + cust.city + '</td><td>' + cust.cp + '</td><td>' + cust.state + '</td><td>' + cust.phone + '</td><td>' + cust.mail + '</td> <td><a href="/products/' + cust.Id + '/edit"><img src="img/wrench.svg" alt="clé"></a></td> <td><a href="/products/' + cust.Id + '/delete"><img src="img/trash.svg" alt=""></a></td></tr>'
                    });
                    $('#body-customer').html(
                        content
                    )
                }

            },
            error: function ()
            {
                alert("No");
            }
        });

    });
});
