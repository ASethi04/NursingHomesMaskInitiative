(function e(t, n) {
    if (typeof exports === "object" && typeof module === "object")
        module.exports = n();
    else if (typeof define === "function" && define.amd) define([], n);
    else if (typeof exports === "object") exports["SwupSlideTheme"] = n();
    else t["SwupSlideTheme"] = n();
})(window, function() {
    return (function(e) {
        var t = {};
        function n(r) {
            if (t[r]) {
                return t[r].exports;
            }
            var o = (t[r] = { i: r, l: false, exports: {} });
            e[r].call(o.exports, o, o.exports, n);
            o.l = true;
            return o.exports;
        }
        n.m = e;
        n.c = t;
        n.d = function(e, t, r) {
            if (!n.o(e, t)) {
                Object.defineProperty(e, t, { enumerable: true, get: r });
            }
        };
        n.r = function(e) {
            if (typeof Symbol !== "undefined" && Symbol.toStringTag) {
                Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                });
            }
            Object.defineProperty(e, "__esModule", { value: true });
        };
        n.t = function(e, t) {
            if (t & 1) e = n(e);
            if (t & 8) return e;
            if (t & 4 && typeof e === "object" && e && e.__esModule) return e;
            var r = Object.create(null);
            n.r(r);
            Object.defineProperty(r, "default", { enumerable: true, value: e });
            if (t & 2 && typeof e != "string")
                for (var o in e)
                    n.d(
                        r,
                        o,
                        function(t) {
                            return e[t];
                        }.bind(null, o)
                    );
            return r;
        };
        n.n = function(e) {
            var t =
                e && e.__esModule
                    ? function t() {
                          return e["default"];
                      }
                    : function t() {
                          return e;
                      };
            n.d(t, "a", t);
            return t;
        };
        n.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t);
        };
        n.p = "";
        return n((n.s = 0));
    })([
        function(e, t, n) {
            "use strict";
            var r = n(1);
            var o = i(r);
            function i(e) {
                return e && e.__esModule ? e : { default: e };
            }
            e.exports = o.default;
        },
        function(e, t, n) {
            "use strict";
            Object.defineProperty(t, "__esModule", { value: true });
            var r =
                Object.assign ||
                function(e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = arguments[t];
                        for (var r in n) {
                            if (Object.prototype.hasOwnProperty.call(n, r)) {
                                e[r] = n[r];
                            }
                        }
                    }
                    return e;
                };
            var o = (function() {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var r = t[n];
                        r.enumerable = r.enumerable || false;
                        r.configurable = true;
                        if ("value" in r) r.writable = true;
                        Object.defineProperty(e, r.key, r);
                    }
                }
                return function(t, n, r) {
                    if (n) e(t.prototype, n);
                    if (r) e(t, r);
                    return t;
                };
            })();
            var i = n(2);
            var a = l(i);
            var u = n(3);
            var s = l(u);
            function l(e) {
                return e && e.__esModule ? e : { default: e };
            }
            function c(e, t) {
                if (!(e instanceof t)) {
                    throw new TypeError("Cannot call a class as a function");
                }
            }
            function f(e, t) {
                if (!e) {
                    throw new ReferenceError(
                        "this hasn't been initialised - super() hasn't been called"
                    );
                }
                return t && (typeof t === "object" || typeof t === "function")
                    ? t
                    : e;
            }
            function p(e, t) {
                if (typeof t !== "function" && t !== null) {
                    throw new TypeError(
                        "Super expression must either be null or a function, not " +
                            typeof t
                    );
                }
                e.prototype = Object.create(t && t.prototype, {
                    constructor: {
                        value: e,
                        enumerable: false,
                        writable: true,
                        configurable: true
                    }
                });
                if (t)
                    Object.setPrototypeOf
                        ? Object.setPrototypeOf(e, t)
                        : (e.__proto__ = t);
            }
            var d = (function(e) {
                p(t, e);
                function t(e) {
                    c(this, t);
                    var n = f(
                        this,
                        (t.__proto__ || Object.getPrototypeOf(t)).call(this)
                    );
                    n.name = "SlideTheme";
                    var o = { mainElement: "#swup", reversed: false };
                    n.options = r({}, o, e);
                    return n;
                }
                o(t, [
                    {
                        key: "mount",
                        value: function e() {
                            this.applyStyles(s.default);
                            this.addClassName(this.options.mainElement, "main");
                            if (this.options.reversed) {
                                document.documentElement.classList.add(
                                    "swup-theme-reverse"
                                );
                            }
                        }
                    },
                    {
                        key: "unmount",
                        value: function e() {
                            document.documentElement.classList.remove(
                                "swup-theme-reverse"
                            );
                        }
                    }
                ]);
                return t;
            })(a.default);
            t.default = d;
        },
        function(e, t, n) {
            "use strict";
            Object.defineProperty(t, "__esModule", { value: true });
            var r = (function() {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var r = t[n];
                        r.enumerable = r.enumerable || false;
                        r.configurable = true;
                        if ("value" in r) r.writable = true;
                        Object.defineProperty(e, r.key, r);
                    }
                }
                return function(t, n, r) {
                    if (n) e(t.prototype, n);
                    if (r) e(t, r);
                    return t;
                };
            })();
            function o(e, t) {
                if (!(e instanceof t)) {
                    throw new TypeError("Cannot call a class as a function");
                }
            }
            var i = (function() {
                function e() {
                    var t = this;
                    o(this, e);
                    this._addedStyleElements = [];
                    this._addedHTMLContent = [];
                    this._classNameAddedToElements = [];
                    this._addClassNameToElement = function() {
                        t._classNameAddedToElements.forEach(function(e) {
                            var t = Array.prototype.slice.call(
                                document.querySelectorAll(e.selector)
                            );
                            t.forEach(function(t) {
                                t.classList.add("swup-transition-" + e.name);
                            });
                        });
                    };
                    this.isSwupPlugin = true;
                }
                r(e, [
                    {
                        key: "_beforeMount",
                        value: function e() {
                            this._originalAnimationSelectorOption = String(
                                this.swup.options.animationSelector
                            );
                            this.swup.options.animationSelector =
                                '[class*="swup-transition-"]';
                        }
                    },
                    {
                        key: "_afterUnmount",
                        value: function e() {
                            this.swup.options.animationSelector = this._originalAnimationSelectorOption;
                            this._addedStyleElements.forEach(function(e) {
                                e.outerHTML = "";
                                e = null;
                            });
                            this._addedHTMLContent.forEach(function(e) {
                                e.outerHTML = "";
                                e = null;
                            });
                            this._classNameAddedToElements.forEach(function(e) {
                                var t = Array.prototype.slice.call(
                                    document.querySelectorAll(e.selector)
                                );
                                t.forEach(function(e) {
                                    e.className.split(" ").forEach(function(t) {
                                        if (
                                            new RegExp(
                                                "^swup-transition-"
                                            ).test(t)
                                        ) {
                                            e.classList.remove(t);
                                        }
                                    });
                                });
                            });
                            this.swup.off(
                                "contentReplaced",
                                this._addClassNameToElement
                            );
                        }
                    },
                    { key: "mount", value: function e() {} },
                    { key: "unmount", value: function e() {} },
                    {
                        key: "applyStyles",
                        value: function e(t) {
                            var n = document.head;
                            var r = document.createElement("style");
                            r.setAttribute("data-swup-theme", "");
                            r.appendChild(document.createTextNode(t));
                            this._addedStyleElements.push(r);
                            n.prepend(r);
                        }
                    },
                    {
                        key: "applyHTML",
                        value: function e(t) {
                            var n = document.createElement("div");
                            n.innerHTML = t;
                            this._addedHTMLContent.push(n);
                            document.body.appendChild(n);
                        }
                    },
                    {
                        key: "addClassName",
                        value: function e(t, n) {
                            this._classNameAddedToElements.push({
                                selector: t,
                                name: n
                            });
                            this._addClassNameToElement();
                            this.swup.on(
                                "contentReplaced",
                                this._addClassNameToElement
                            );
                        }
                    }
                ]);
                return e;
            })();
            t.default = i;
        },
        function(e, t, n) {
            t = e.exports = n(4)(false);
            t.push([
                e.i,
                ".swup-transition-main {\n  opacity: 1;\n  transition: opacity 0.3s, transform 0.4s;\n  transform: translate3d(0, 0, 0);\n}\nhtml.is-animating .swup-transition-main {\n  opacity: 0;\n  transform: translate3d(0, -60px, 0);\n}\nhtml.is-animating.is-leaving .swup-transition-main {\n  opacity: 0;\n  transform: translate3d(0, 60px, 0);\n}\nhtml.is-animating.swup-theme-reverse .swup-transition-main {\n  opacity: 0;\n  transform: translate3d(0, 60px, 0);\n}\nhtml.is-animating.swup-theme-reverse.is-leaving .swup-transition-main {\n  opacity: 0;\n  transform: translate3d(0, -60px, 0);\n}\n",
                ""
            ]);
        },
        function(e, t, n) {
            "use strict";
            e.exports = function(e) {
                var t = [];
                t.toString = function t() {
                    return this.map(function(t) {
                        var n = r(t, e);
                        if (t[2]) {
                            return "@media " + t[2] + "{" + n + "}";
                        } else {
                            return n;
                        }
                    }).join("");
                };
                t.i = function(e, n) {
                    if (typeof e === "string") {
                        e = [[null, e, ""]];
                    }
                    var r = {};
                    for (var o = 0; o < this.length; o++) {
                        var i = this[o][0];
                        if (i != null) {
                            r[i] = true;
                        }
                    }
                    for (o = 0; o < e.length; o++) {
                        var a = e[o];
                        if (a[0] == null || !r[a[0]]) {
                            if (n && !a[2]) {
                                a[2] = n;
                            } else if (n) {
                                a[2] = "(" + a[2] + ") and (" + n + ")";
                            }
                            t.push(a);
                        }
                    }
                };
                return t;
            };
            function r(e, t) {
                var n = e[1] || "";
                var r = e[3];
                if (!r) {
                    return n;
                }
                if (t && typeof btoa === "function") {
                    var i = o(r);
                    var a = r.sources.map(function(e) {
                        return "/*# sourceURL=" + r.sourceRoot + e + " */";
                    });
                    return [n]
                        .concat(a)
                        .concat([i])
                        .join("\n");
                }
                return [n].join("\n");
            }
            function o(e) {
                var t = btoa(unescape(encodeURIComponent(JSON.stringify(e))));
                var n =
                    "sourceMappingURL=data:application/json;charset=utf-8;base64," +
                    t;
                return "/*# " + n + " */";
            }
        }
    ]);
});
