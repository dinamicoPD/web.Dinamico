! function(t, e) {
    "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.displacejs = e() : t.displacejs = e()
}(this, function() {
    return function(t) {
        function e(n) {
            if (o[n]) return o[n].exports;
            var s = o[n] = {
                exports: {},
                id: n,
                loaded: !1
            };
            return t[n].call(s.exports, s, s.exports, e), s.loaded = !0, s.exports
        }
        var o = {};
        return e.m = t, e.c = o, e.p = "", e(0)
    }([function(t, e, o) {
        "use strict";

        function n(t) {
            return t && t.__esModule ? t : {
                "default": t
            }
        }
        var s = o(1),
            u = n(s);
        t.exports = u["default"]
    }, function(t, e, o) {
        "use strict";

        function n(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function s() {
            var t = this.el,
                e = this.opts || r,
                o = {};
            if (t.style.position = "absolute", this.handle = e.handle || t, e.constrain) {
                for (var n = e.relativeTo || t.parentNode, s = t, a = 0, c = 0; s !== n;) s = s.parentNode, (0, u.isRelative)(s) && (a -= s.offsetLeft, c -= s.offsetTop), s === n && (a += s.offsetLeft, c += s.offsetTop);
                var h = a + n.offsetWidth - t.offsetWidth,
                    f = c + n.offsetHeight - t.offsetHeight;
                o.xClamp = (0, u.generateClamp)(a, h), o.yClamp = (0, u.generateClamp)(c, f)
            }
            this.opts = e, this.data = o, this.events = {
                mousedown: i.mousedown.bind(this),
                mouseup: i.mouseup.bind(this),
                touchstart: i.touchstart.bind(this),
                touchstop: i.touchstop.bind(this)
            }, this.handle.addEventListener("mousedown", this.events.mousedown, !1), this.handle.addEventListener("touchstart", this.events.touchstart, !1)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var u = o(2),
            i = o(3),
            r = {
                constrain: !1,
                relativeTo: null,
                handle: null,
                highlightInputs: !1,
                onMouseDown: null,
                onMouseMove: null,
                onMouseUp: null,
                onTouchStart: null,
                onTouchMove: null,
                onTouchStop: null
            },
            a = function() {
                function t(e, o) {
                    if (n(this, t), !e) throw Error("Must include moveable element");
                    this.el = e, this.opts = o, s.call(this)
                }
                return t.prototype.reinit = function() {
                    this.destroy(), s.call(this)
                }, t.prototype.destroy = function() {
                    var t = this.events;
                    this.handle.removeEventListener("mousedown", t.mousedown, !1), document.removeEventListener("mousemove", t.mousemove, !1), document.removeEventListener("mouseup", t.mouseup, !1), this.handle.removeEventListener("touchstart", t.touchstart, !1), document.removeEventListener("touchmove", t.touchmove, !1), document.removeEventListener("touchstop", t.touchstop, !1)
                }, t
            }();
        e["default"] = function(t, e) {
            return new a(t, e)
        }
    }, function(t, e) {
        "use strict";

        function o(t, e) {
            return function(o) {
                return Math.min(Math.max(o, t), e)
            }
        }

        function n() {
            return window.requestAnimationFrame ? function(t, e, o) {
                window.requestAnimationFrame(function() {
                    t.style.left = e + "px", t.style.top = o + "px"
                })
            } : function(t, e, o) {
                t.style.left = e + "px", t.style.top = o + "px"
            }
        }

        function s(t) {
            return "relative" === window.getComputedStyle(t).position
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.generateClamp = o, e.generateMoveFn = n, e.isRelative = s
    }, function(t, e, o) {
        "use strict";

        function n(t) {
            var e = this.opts;
            if (e.highlightInputs) {
                var o = t.target.tagName.toLowerCase();
                if ("input" === o || "textarea" === o) return
            }
            var n = this.el,
                u = this.events;
            "function" == typeof e.onMouseDown && e.onMouseDown(n, t);
            var i = t.clientX - n.offsetLeft,
                r = t.clientY - n.offsetTop;
            u.mousemove = s.bind(this, i, r), document.addEventListener("mousemove", u.mousemove, !1), document.addEventListener("mouseup", u.mouseup, !1)
        }

        function s(t, e, o) {
            var n = this.el,
                s = this.opts,
                u = this.data;
            "function" == typeof s.onMouseMove && s.onMouseMove(n, o);
            var i = o.clientX - t,
                r = o.clientY - e;
            return s.constrain && (i = u.xClamp(i), r = u.yClamp(r)), h(n, i, r), o.preventDefault(), !1
        }

        function u(t) {
            var e = this.el,
                o = this.opts,
                n = this.events;
            "function" == typeof o.onMouseUp && o.onMouseUp(e, t), document.removeEventListener("mouseup", n.mouseup, !1), document.removeEventListener("mousemove", n.mousemove, !1)
        }

        function i(t) {
            var e = this.opts;
            if (e.highlightInputs) {
                var o = t.target.tagName.toLowerCase();
                if ("input" === o || "textarea" === o) return
            }
            var n = this.el,
                s = this.events;
            "function" == typeof e.onTouchStart && e.onTouchStart(n, t);
            var u = t.targetTouches[0],
                i = u.clientX - n.offsetLeft,
                a = u.clientY - n.offsetTop;
            s.touchmove = r.bind(this, i, a), document.addEventListener("touchmove", s.touchmove, !1), document.addEventListener("touchend", s.touchstop, !1), document.addEventListener("touchcancel", s.touchstop, !1)
        }

        function r(t, e, o) {
            var n = this.el,
                s = this.opts,
                u = this.data;
            "function" == typeof s.onTouchMove && s.onTouchMove(n, o);
            var i = o.targetTouches[0],
                r = i.clientX - t,
                a = i.clientY - e;
            return s.constrain && (r = u.xClamp(r), a = u.yClamp(a)), h(n, r, a), o.preventDefault(), !1
        }

        function a(t) {
            var e = this.el,
                o = this.opts,
                n = this.events;
            "function" == typeof o.onTouchStop && o.onTouchStop(e, t), document.removeEventListener("touchmove", n.touchmove, !1), document.removeEventListener("touchend", n.touchstop, !1), document.removeEventListener("touchcancel", n.touchstop, !1)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.mousedown = n, e.mousemove = s, e.mouseup = u, e.touchstart = i, e.touchmove = r, e.touchstop = a;
        var c = o(2),
            h = (0, c.generateMoveFn)()
    }])
});