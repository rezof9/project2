/*! jQuery v3.6.0 | (c) OpenJS Foundation and other contributors | jquery.org/license */ ! function(e, t) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
        if (!e.document) throw new Error("jQuery requires a window with a document");
        return t(e)
    } : t(e)
}("undefined" != typeof window ? window : this, function(C, e) {
    "use strict";
    var t = [],
        r = Object.getPrototypeOf,
        s = t.slice,
        g = t.flat ? function(e) {
            return t.flat.call(e)
        } : function(e) {
            return t.concat.apply([], e)
        },
        u = t.push,
        i = t.indexOf,
        n = {},
        o = n.toString,
        v = n.hasOwnProperty,
        a = v.toString,
        l = a.call(Object),
        y = {},
        m = function(e) {
            return "function" == typeof e && "number" != typeof e.nodeType && "function" != typeof e.item
        },
        x = function(e) {
            return null != e && e === e.window
        },
        E = C.document,
        c = {
            type: !0,
            src: !0,
            nonce: !0,
            noModule: !0
        };

    function b(e, t, n) {
        var r, i, o = (n = n || E).createElement("script");
        if (o.text = e, t)
            for (r in c)(i = t[r] || t.getAttribute && t.getAttribute(r)) && o.setAttribute(r, i);
        n.head.appendChild(o).parentNode.removeChild(o)
    }

    function w(e) {
        return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? n[o.call(e)] || "object" : typeof e
    }
    var f = "3.6.0",
        S = function(e, t) {
            return new S.fn.init(e, t)
        };

    function p(e) {
        var t = !!e && "length" in e && e.length,
            n = w(e);
        return !m(e) && !x(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
    }
    S.fn = S.prototype = {
        jquery: f,
        constructor: S,
        length: 0,
        toArray: function() {
            return s.call(this)
        },
        get: function(e) {
            return null == e ? s.call(this) : e < 0 ? this[e + this.length] : this[e]
        },
        pushStack: function(e) {
            var t = S.merge(this.constructor(), e);
            return t.prevObject = this, t
        },
        each: function(e) {
            return S.each(this, e)
        },
        map: function(n) {
            return this.pushStack(S.map(this, function(e, t) {
                return n.call(e, t, e)
            }))
        },
        slice: function() {
            return this.pushStack(s.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        even: function() {
            return this.pushStack(S.grep(this, function(e, t) {
                return (t + 1) % 2
            }))
        },
        odd: function() {
            return this.pushStack(S.grep(this, function(e, t) {
                return t % 2
            }))
        },
        eq: function(e) {
            var t = this.length,
                n = +e + (e < 0 ? t : 0);
            return this.pushStack(0 <= n && n < t ? [this[n]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor()
        },
        push: u,
        sort: t.sort,
        splice: t.splice
    }, S.extend = S.fn.extend = function() {
        var e, t, n, r, i, o, a = arguments[0] || {},
            s = 1,
            u = arguments.length,
            l = !1;
        for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || m(a) || (a = {}), s === u && (a = this, s--); s < u; s++)
            if (null != (e = arguments[s]))
                for (t in e) r = e[t], "__proto__" !== t && a !== r && (l && r && (S.isPlainObject(r) || (i = Array.isArray(r))) ? (n = a[t], o = i && !Array.isArray(n) ? [] : i || S.isPlainObject(n) ? n : {}, i = !1, a[t] = S.extend(l, o, r)) : void 0 !== r && (a[t] = r));
        return a
    }, S.extend({
        expando: "jQuery" + (f + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(e) {
            throw new Error(e)
        },
        noop: function() {},
        isPlainObject: function(e) {
            var t, n;
            return !(!e || "[object Object]" !== o.call(e)) && (!(t = r(e)) || "function" == typeof(n = v.call(t, "constructor") && t.constructor) && a.call(n) === l)
        },
        isEmptyObject: function(e) {
            var t;
            for (t in e) return !1;
            return !0
        },
        globalEval: function(e, t, n) {
            b(e, {
                nonce: t && t.nonce
            }, n)
        },
        each: function(e, t) {
            var n, r = 0;
            if (p(e)) {
                for (n = e.length; r < n; r++)
                    if (!1 === t.call(e[r], r, e[r])) break
            } else
                for (r in e)
                    if (!1 === t.call(e[r], r, e[r])) break;
            return e
        },
        makeArray: function(e, t) {
            var n = t || [];
            return null != e && (p(Object(e)) ? S.merge(n, "string" == typeof e ? [e] : e) : u.call(n, e)), n
        },
        inArray: function(e, t, n) {
            return null == t ? -1 : i.call(t, e, n)
        },
        merge: function(e, t) {
            for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
            return e.length = i, e
        },
        grep: function(e, t, n) {
            for (var r = [], i = 0, o = e.length, a = !n; i < o; i++) !t(e[i], i) !== a && r.push(e[i]);
            return r
        },
        map: function(e, t, n) {
            var r, i, o = 0,
                a = [];
            if (p(e))
                for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && a.push(i);
            else
                for (o in e) null != (i = t(e[o], o, n)) && a.push(i);
            return g(a)
        },
        guid: 1,
        support: y
    }), "function" == typeof Symbol && (S.fn[Symbol.iterator] = t[Symbol.iterator]), S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(e, t) {
        n["[object " + t + "]"] = t.toLowerCase()
    });
    var d = function(n) {
        var e, d, b, o, i, h, f, g, w, u, l, T, C, a, E, v, s, c, y, S = "sizzle" + 1 * new Date,
            p = n.document,
            k = 0,
            r = 0,
            m = ue(),
            x = ue(),
            A = ue(),
            N = ue(),
            j = function(e, t) {
                return e === t && (l = !0), 0
            },
            D = {}.hasOwnProperty,
            t = [],
            q = t.pop,
            L = t.push,
            H = t.push,
            O = t.slice,
            P = function(e, t) {
                for (var n = 0, r = e.length; n < r; n++)
                    if (e[n] === t) return n;
                return -1
            },
            R = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            M = "[\\x20\\t\\r\\n\\f]",
            I = "(?:\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
            W = "\\[" + M + "*(" + I + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + I + "))|)" + M + "*\\]",
            F = ":(" + I + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + W + ")*)|.*)\\)|)",
            B = new RegExp(M + "+", "g"),
            $ = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
            _ = new RegExp("^" + M + "*," + M + "*"),
            z = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
            U = new RegExp(M + "|>"),
            X = new RegExp(F),
            V = new RegExp("^" + I + "$"),
            G = {
                ID: new RegExp("^#(" + I + ")"),
                CLASS: new RegExp("^\\.(" + I + ")"),
                TAG: new RegExp("^(" + I + "|[*])"),
                ATTR: new RegExp("^" + W),
                PSEUDO: new RegExp("^" + F),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + R + ")$", "i"),
                needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
            },
            Y = /HTML$/i,
            Q = /^(?:input|select|textarea|button)$/i,
            J = /^h\d$/i,
            K = /^[^{]+\{\s*\[native \w/,
            Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            ee = /[+~]/,
            te = new RegExp("\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\([^\\r\\n\\f])", "g"),
            ne = function(e, t) {
                var n = "0x" + e.slice(1) - 65536;
                return t || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320))
            },
            re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            ie = function(e, t) {
                return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
            },
            oe = function() {
                T()
            },
            ae = be(function(e) {
                return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase()
            }, {
                dir: "parentNode",
                next: "legend"
            });
        try {
            H.apply(t = O.call(p.childNodes), p.childNodes), t[p.childNodes.length].nodeType
        } catch (e) {
            H = {
                apply: t.length ? function(e, t) {
                    L.apply(e, O.call(t))
                } : function(e, t) {
                    var n = e.length,
                        r = 0;
                    while (e[n++] = t[r++]);
                    e.length = n - 1
                }
            }
        }

        function se(t, e, n, r) {
            var i, o, a, s, u, l, c, f = e && e.ownerDocument,
                p = e ? e.nodeType : 9;
            if (n = n || [], "string" != typeof t || !t || 1 !== p && 9 !== p && 11 !== p) return n;
            if (!r && (T(e), e = e || C, E)) {
                if (11 !== p && (u = Z.exec(t)))
                    if (i = u[1]) {
                        if (9 === p) {
                            if (!(a = e.getElementById(i))) return n;
                            if (a.id === i) return n.push(a), n
                        } else if (f && (a = f.getElementById(i)) && y(e, a) && a.id === i) return n.push(a), n
                    } else {
                        if (u[2]) return H.apply(n, e.getElementsByTagName(t)), n;
                        if ((i = u[3]) && d.getElementsByClassName && e.getElementsByClassName) return H.apply(n, e.getElementsByClassName(i)), n
                    } if (d.qsa && !N[t + " "] && (!v || !v.test(t)) && (1 !== p || "object" !== e.nodeName.toLowerCase())) {
                    if (c = t, f = e, 1 === p && (U.test(t) || z.test(t))) {
                        (f = ee.test(t) && ye(e.parentNode) || e) === e && d.scope || ((s = e.getAttribute("id")) ? s = s.replace(re, ie) : e.setAttribute("id", s = S)), o = (l = h(t)).length;
                        while (o--) l[o] = (s ? "#" + s : ":scope") + " " + xe(l[o]);
                        c = l.join(",")
                    }
                    try {
                        return H.apply(n, f.querySelectorAll(c)), n
                    } catch (e) {
                        N(t, !0)
                    } finally {
                        s === S && e.removeAttribute("id")
                    }
                }
            }
            return g(t.replace($, "$1"), e, n, r)
        }

        function ue() {
            var r = [];
            return function e(t, n) {
                return r.push(t + " ") > b.cacheLength && delete e[r.shift()], e[t + " "] = n
            }
        }

        function le(e) {
            return e[S] = !0, e
        }

        function ce(e) {
            var t = C.createElement("fieldset");
            try {
                return !!e(t)
            } catch (e) {
                return !1
            } finally {
                t.parentNode && t.parentNode.removeChild(t), t = null
            }
        }

        function fe(e, t) {
            var n = e.split("|"),
                r = n.length;
            while (r--) b.attrHandle[n[r]] = t
        }

        function pe(e, t) {
            var n = t && e,
                r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
            if (r) return r;
            if (n)
                while (n = n.nextSibling)
                    if (n === t) return -1;
            return e ? 1 : -1
        }

        function de(t) {
            return function(e) {
                return "input" === e.nodeName.toLowerCase() && e.type === t
            }
        }

        function he(n) {
            return function(e) {
                var t = e.nodeName.toLowerCase();
                return ("input" === t || "button" === t) && e.type === n
            }
        }

        function ge(t) {
            return function(e) {
                return "form" in e ? e.parentNode && !1 === e.disabled ? "label" in e ? "label" in e.parentNode ? e.parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && ae(e) === t : e.disabled === t : "label" in e && e.disabled === t
            }
        }

        function ve(a) {
            return le(function(o) {
                return o = +o, le(function(e, t) {
                    var n, r = a([], e.length, o),
                        i = r.length;
                    while (i--) e[n = r[i]] && (e[n] = !(t[n] = e[n]))
                })
            })
        }

        function ye(e) {
            return e && "undefined" != typeof e.getElementsByTagName && e
        }
        for (e in d = se.support = {}, i = se.isXML = function(e) {
                var t = e && e.namespaceURI,
                    n = e && (e.ownerDocument || e).documentElement;
                return !Y.test(t || n && n.nodeName || "HTML")
            }, T = se.setDocument = function(e) {
                var t, n, r = e ? e.ownerDocument || e : p;
                return r != C && 9 === r.nodeType && r.documentElement && (a = (C = r).documentElement, E = !i(C), p != C && (n = C.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", oe, !1) : n.attachEvent && n.attachEvent("onunload", oe)), d.scope = ce(function(e) {
                    return a.appendChild(e).appendChild(C.createElement("div")), "undefined" != typeof e.querySelectorAll && !e.querySelectorAll(":scope fieldset div").length
                }), d.attributes = ce(function(e) {
                    return e.className = "i", !e.getAttribute("className")
                }), d.getElementsByTagName = ce(function(e) {
                    return e.appendChild(C.createComment("")), !e.getElementsByTagName("*").length
                }), d.getElementsByClassName = K.test(C.getElementsByClassName), d.getById = ce(function(e) {
                    return a.appendChild(e).id = S, !C.getElementsByName || !C.getElementsByName(S).length
                }), d.getById ? (b.filter.ID = function(e) {
                    var t = e.replace(te, ne);
                    return function(e) {
                        return e.getAttribute("id") === t
                    }
                }, b.find.ID = function(e, t) {
                    if ("undefined" != typeof t.getElementById && E) {
                        var n = t.getElementById(e);
                        return n ? [n] : []
                    }
                }) : (b.filter.ID = function(e) {
                    var n = e.replace(te, ne);
                    return function(e) {
                        var t = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                        return t && t.value === n
                    }
                }, b.find.ID = function(e, t) {
                    if ("undefined" != typeof t.getElementById && E) {
                        var n, r, i, o = t.getElementById(e);
                        if (o) {
                            if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                            i = t.getElementsByName(e), r = 0;
                            while (o = i[r++])
                                if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                        }
                        return []
                    }
                }), b.find.TAG = d.getElementsByTagName ? function(e, t) {
                    return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : d.qsa ? t.querySelectorAll(e) : void 0
                } : function(e, t) {
                    var n, r = [],
                        i = 0,
                        o = t.getElementsByTagName(e);
                    if ("*" === e) {
                        while (n = o[i++]) 1 === n.nodeType && r.push(n);
                        return r
                    }
                    return o
                }, b.find.CLASS = d.getElementsByClassName && function(e, t) {
                    if ("undefined" != typeof t.getElementsByClassName && E) return t.getElementsByClassName(e)
                }, s = [], v = [], (d.qsa = K.test(C.querySelectorAll)) && (ce(function(e) {
                    var t;
                    a.appendChild(e).innerHTML = "<a id='" + S + "'></a><select id='" + S + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && v.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || v.push("\\[" + M + "*(?:value|" + R + ")"), e.querySelectorAll("[id~=" + S + "-]").length || v.push("~="), (t = C.createElement("input")).setAttribute("name", ""), e.appendChild(t), e.querySelectorAll("[name='']").length || v.push("\\[" + M + "*name" + M + "*=" + M + "*(?:''|\"\")"), e.querySelectorAll(":checked").length || v.push(":checked"), e.querySelectorAll("a#" + S + "+*").length || v.push(".#.+[+~]"), e.querySelectorAll("\\\f"), v.push("[\\r\\n\\f]")
                }), ce(function(e) {
                    e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                    var t = C.createElement("input");
                    t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && v.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && v.push(":enabled", ":disabled"), a.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && v.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), v.push(",.*:")
                })), (d.matchesSelector = K.test(c = a.matches || a.webkitMatchesSelector || a.mozMatchesSelector || a.oMatchesSelector || a.msMatchesSelector)) && ce(function(e) {
                    d.disconnectedMatch = c.call(e, "*"), c.call(e, "[s!='']:x"), s.push("!=", F)
                }), v = v.length && new RegExp(v.join("|")), s = s.length && new RegExp(s.join("|")), t = K.test(a.compareDocumentPosition), y = t || K.test(a.contains) ? function(e, t) {
                    var n = 9 === e.nodeType ? e.documentElement : e,
                        r = t && t.parentNode;
                    return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                } : function(e, t) {
                    if (t)
                        while (t = t.parentNode)
                            if (t === e) return !0;
                    return !1
                }, j = t ? function(e, t) {
                    if (e === t) return l = !0, 0;
                    var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                    return n || (1 & (n = (e.ownerDocument || e) == (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !d.sortDetached && t.compareDocumentPosition(e) === n ? e == C || e.ownerDocument == p && y(p, e) ? -1 : t == C || t.ownerDocument == p && y(p, t) ? 1 : u ? P(u, e) - P(u, t) : 0 : 4 & n ? -1 : 1)
                } : function(e, t) {
                    if (e === t) return l = !0, 0;
                    var n, r = 0,
                        i = e.parentNode,
                        o = t.parentNode,
                        a = [e],
                        s = [t];
                    if (!i || !o) return e == C ? -1 : t == C ? 1 : i ? -1 : o ? 1 : u ? P(u, e) - P(u, t) : 0;
                    if (i === o) return pe(e, t);
                    n = e;
                    while (n = n.parentNode) a.unshift(n);
                    n = t;
                    while (n = n.parentNode) s.unshift(n);
                    while (a[r] === s[r]) r++;
                    return r ? pe(a[r], s[r]) : a[r] == p ? -1 : s[r] == p ? 1 : 0
                }), C
            }, se.matches = function(e, t) {
                return se(e, null, null, t)
            }, se.matchesSelector = function(e, t) {
                if (T(e), d.matchesSelector && E && !N[t + " "] && (!s || !s.test(t)) && (!v || !v.test(t))) try {
                    var n = c.call(e, t);
                    if (n || d.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n
                } catch (e) {
                    N(t, !0)
                }
                return 0 < se(t, C, null, [e]).length
            }, se.contains = function(e, t) {
                return (e.ownerDocument || e) != C && T(e), y(e, t)
            }, se.attr = function(e, t) {
                (e.ownerDocument || e) != C && T(e);
                var n = b.attrHandle[t.toLowerCase()],
                    r = n && D.call(b.attrHandle, t.toLowerCase()) ? n(e, t, !E) : void 0;
                return void 0 !== r ? r : d.attributes || !E ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
            }, se.escape = function(e) {
                return (e + "").replace(re, ie)
            }, se.error = function(e) {
                throw new Error("Syntax error, unrecognized expression: " + e)
            }, se.uniqueSort = function(e) {
                var t, n = [],
                    r = 0,
                    i = 0;
                if (l = !d.detectDuplicates, u = !d.sortStable && e.slice(0), e.sort(j), l) {
                    while (t = e[i++]) t === e[i] && (r = n.push(i));
                    while (r--) e.splice(n[r], 1)
                }
                return u = null, e
            }, o = se.getText = function(e) {
                var t, n = "",
                    r = 0,
                    i = e.nodeType;
                if (i) {
                    if (1 === i || 9 === i || 11 === i) {
                        if ("string" == typeof e.textContent) return e.textContent;
                        for (e = e.firstChild; e; e = e.nextSibling) n += o(e)
                    } else if (3 === i || 4 === i) return e.nodeValue
                } else
                    while (t = e[r++]) n += o(t);
                return n
            }, (b = se.selectors = {
                cacheLength: 50,
                createPseudo: le,
                match: G,
                attrHandle: {},
                find: {},
                relative: {
                    ">": {
                        dir: "parentNode",
                        first: !0
                    },
                    " ": {
                        dir: "parentNode"
                    },
                    "+": {
                        dir: "previousSibling",
                        first: !0
                    },
                    "~": {
                        dir: "previousSibling"
                    }
                },
                preFilter: {
                    ATTR: function(e) {
                        return e[1] = e[1].replace(te, ne), e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                    },
                    CHILD: function(e) {
                        return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || se.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && se.error(e[0]), e
                    },
                    PSEUDO: function(e) {
                        var t, n = !e[6] && e[2];
                        return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = h(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                    }
                },
                filter: {
                    TAG: function(e) {
                        var t = e.replace(te, ne).toLowerCase();
                        return "*" === e ? function() {
                            return !0
                        } : function(e) {
                            return e.nodeName && e.nodeName.toLowerCase() === t
                        }
                    },
                    CLASS: function(e) {
                        var t = m[e + " "];
                        return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && m(e, function(e) {
                            return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
                        })
                    },
                    ATTR: function(n, r, i) {
                        return function(e) {
                            var t = se.attr(e, n);
                            return null == t ? "!=" === r : !r || (t += "", "=" === r ? t === i : "!=" === r ? t !== i : "^=" === r ? i && 0 === t.indexOf(i) : "*=" === r ? i && -1 < t.indexOf(i) : "$=" === r ? i && t.slice(-i.length) === i : "~=" === r ? -1 < (" " + t.replace(B, " ") + " ").indexOf(i) : "|=" === r && (t === i || t.slice(0, i.length + 1) === i + "-"))
                        }
                    },
                    CHILD: function(h, e, t, g, v) {
                        var y = "nth" !== h.slice(0, 3),
                            m = "last" !== h.slice(-4),
                            x = "of-type" === e;
                        return 1 === g && 0 === v ? function(e) {
                            return !!e.parentNode
                        } : function(e, t, n) {
                            var r, i, o, a, s, u, l = y !== m ? "nextSibling" : "previousSibling",
                                c = e.parentNode,
                                f = x && e.nodeName.toLowerCase(),
                                p = !n && !x,
                                d = !1;
                            if (c) {
                                if (y) {
                                    while (l) {
                                        a = e;
                                        while (a = a[l])
                                            if (x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) return !1;
                                        u = l = "only" === h && !u && "nextSibling"
                                    }
                                    return !0
                                }
                                if (u = [m ? c.firstChild : c.lastChild], m && p) {
                                    d = (s = (r = (i = (o = (a = c)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] || [])[0] === k && r[1]) && r[2], a = s && c.childNodes[s];
                                    while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                                        if (1 === a.nodeType && ++d && a === e) {
                                            i[h] = [k, s, d];
                                            break
                                        }
                                } else if (p && (d = s = (r = (i = (o = (a = e)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] || [])[0] === k && r[1]), !1 === d)
                                    while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                                        if ((x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) && ++d && (p && ((i = (o = a[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] = [k, d]), a === e)) break;
                                return (d -= v) === g || d % g == 0 && 0 <= d / g
                            }
                        }
                    },
                    PSEUDO: function(e, o) {
                        var t, a = b.pseudos[e] || b.setFilters[e.toLowerCase()] || se.error("unsupported pseudo: " + e);
                        return a[S] ? a(o) : 1 < a.length ? (t = [e, e, "", o], b.setFilters.hasOwnProperty(e.toLowerCase()) ? le(function(e, t) {
                            var n, r = a(e, o),
                                i = r.length;
                            while (i--) e[n = P(e, r[i])] = !(t[n] = r[i])
                        }) : function(e) {
                            return a(e, 0, t)
                        }) : a
                    }
                },
                pseudos: {
                    not: le(function(e) {
                        var r = [],
                            i = [],
                            s = f(e.replace($, "$1"));
                        return s[S] ? le(function(e, t, n, r) {
                            var i, o = s(e, null, r, []),
                                a = e.length;
                            while (a--)(i = o[a]) && (e[a] = !(t[a] = i))
                        }) : function(e, t, n) {
                            return r[0] = e, s(r, null, n, i), r[0] = null, !i.pop()
                        }
                    }),
                    has: le(function(t) {
                        return function(e) {
                            return 0 < se(t, e).length
                        }
                    }),
                    contains: le(function(t) {
                        return t = t.replace(te, ne),
                            function(e) {
                                return -1 < (e.textContent || o(e)).indexOf(t)
                            }
                    }),
                    lang: le(function(n) {
                        return V.test(n || "") || se.error("unsupported lang: " + n), n = n.replace(te, ne).toLowerCase(),
                            function(e) {
                                var t;
                                do {
                                    if (t = E ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return (t = t.toLowerCase()) === n || 0 === t.indexOf(n + "-")
                                } while ((e = e.parentNode) && 1 === e.nodeType);
                                return !1
                            }
                    }),
                    target: function(e) {
                        var t = n.location && n.location.hash;
                        return t && t.slice(1) === e.id
                    },
                    root: function(e) {
                        return e === a
                    },
                    focus: function(e) {
                        return e === C.activeElement && (!C.hasFocus || C.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                    },
                    enabled: ge(!1),
                    disabled: ge(!0),
                    checked: function(e) {
                        var t = e.nodeName.toLowerCase();
                        return "input" === t && !!e.checked || "option" === t && !!e.selected
                    },
                    selected: function(e) {
                        return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                    },
                    empty: function(e) {
                        for (e = e.firstChild; e; e = e.nextSibling)
                            if (e.nodeType < 6) return !1;
                        return !0
                    },
                    parent: function(e) {
                        return !b.pseudos.empty(e)
                    },
                    header: function(e) {
                        return J.test(e.nodeName)
                    },
                    input: function(e) {
                        return Q.test(e.nodeName)
                    },
                    button: function(e) {
                        var t = e.nodeName.toLowerCase();
                        return "input" === t && "button" === e.type || "button" === t
                    },
                    text: function(e) {
                        var t;
                        return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                    },
                    first: ve(function() {
                        return [0]
                    }),
                    last: ve(function(e, t) {
                        return [t - 1]
                    }),
                    eq: ve(function(e, t, n) {
                        return [n < 0 ? n + t : n]
                    }),
                    even: ve(function(e, t) {
                        for (var n = 0; n < t; n += 2) e.push(n);
                        return e
                    }),
                    odd: ve(function(e, t) {
                        for (var n = 1; n < t; n += 2) e.push(n);
                        return e
                    }),
                    lt: ve(function(e, t, n) {
                        for (var r = n < 0 ? n + t : t < n ? t : n; 0 <= --r;) e.push(r);
                        return e
                    }),
                    gt: ve(function(e, t, n) {
                        for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                        return e
                    })
                }
            }).pseudos.nth = b.pseudos.eq, {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) b.pseudos[e] = de(e);
        for (e in {
                submit: !0,
                reset: !0
            }) b.pseudos[e] = he(e);

        function me() {}

        function xe(e) {
            for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
            return r
        }

        function be(s, e, t) {
            var u = e.dir,
                l = e.next,
                c = l || u,
                f = t && "parentNode" === c,
                p = r++;
            return e.first ? function(e, t, n) {
                while (e = e[u])
                    if (1 === e.nodeType || f) return s(e, t, n);
                return !1
            } : function(e, t, n) {
                var r, i, o, a = [k, p];
                if (n) {
                    while (e = e[u])
                        if ((1 === e.nodeType || f) && s(e, t, n)) return !0
                } else
                    while (e = e[u])
                        if (1 === e.nodeType || f)
                            if (i = (o = e[S] || (e[S] = {}))[e.uniqueID] || (o[e.uniqueID] = {}), l && l === e.nodeName.toLowerCase()) e = e[u] || e;
                            else {
                                if ((r = i[c]) && r[0] === k && r[1] === p) return a[2] = r[2];
                                if ((i[c] = a)[2] = s(e, t, n)) return !0
                            } return !1
            }
        }

        function we(i) {
            return 1 < i.length ? function(e, t, n) {
                var r = i.length;
                while (r--)
                    if (!i[r](e, t, n)) return !1;
                return !0
            } : i[0]
        }

        function Te(e, t, n, r, i) {
            for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s)));
            return a
        }

        function Ce(d, h, g, v, y, e) {
            return v && !v[S] && (v = Ce(v)), y && !y[S] && (y = Ce(y, e)), le(function(e, t, n, r) {
                var i, o, a, s = [],
                    u = [],
                    l = t.length,
                    c = e || function(e, t, n) {
                        for (var r = 0, i = t.length; r < i; r++) se(e, t[r], n);
                        return n
                    }(h || "*", n.nodeType ? [n] : n, []),
                    f = !d || !e && h ? c : Te(c, s, d, n, r),
                    p = g ? y || (e ? d : l || v) ? [] : t : f;
                if (g && g(f, p, n, r), v) {
                    i = Te(p, u), v(i, [], n, r), o = i.length;
                    while (o--)(a = i[o]) && (p[u[o]] = !(f[u[o]] = a))
                }
                if (e) {
                    if (y || d) {
                        if (y) {
                            i = [], o = p.length;
                            while (o--)(a = p[o]) && i.push(f[o] = a);
                            y(null, p = [], i, r)
                        }
                        o = p.length;
                        while (o--)(a = p[o]) && -1 < (i = y ? P(e, a) : s[o]) && (e[i] = !(t[i] = a))
                    }
                } else p = Te(p === t ? p.splice(l, p.length) : p), y ? y(null, t, p, r) : H.apply(t, p)
            })
        }

        function Ee(e) {
            for (var i, t, n, r = e.length, o = b.relative[e[0].type], a = o || b.relative[" "], s = o ? 1 : 0, u = be(function(e) {
                    return e === i
                }, a, !0), l = be(function(e) {
                    return -1 < P(i, e)
                }, a, !0), c = [function(e, t, n) {
                    var r = !o && (n || t !== w) || ((i = t).nodeType ? u(e, t, n) : l(e, t, n));
                    return i = null, r
                }]; s < r; s++)
                if (t = b.relative[e[s].type]) c = [be(we(c), t)];
                else {
                    if ((t = b.filter[e[s].type].apply(null, e[s].matches))[S]) {
                        for (n = ++s; n < r; n++)
                            if (b.relative[e[n].type]) break;
                        return Ce(1 < s && we(c), 1 < s && xe(e.slice(0, s - 1).concat({
                            value: " " === e[s - 2].type ? "*" : ""
                        })).replace($, "$1"), t, s < n && Ee(e.slice(s, n)), n < r && Ee(e = e.slice(n)), n < r && xe(e))
                    }
                    c.push(t)
                } return we(c)
        }
        return me.prototype = b.filters = b.pseudos, b.setFilters = new me, h = se.tokenize = function(e, t) {
            var n, r, i, o, a, s, u, l = x[e + " "];
            if (l) return t ? 0 : l.slice(0);
            a = e, s = [], u = b.preFilter;
            while (a) {
                for (o in n && !(r = _.exec(a)) || (r && (a = a.slice(r[0].length) || a), s.push(i = [])), n = !1, (r = z.exec(a)) && (n = r.shift(), i.push({
                        value: n,
                        type: r[0].replace($, " ")
                    }), a = a.slice(n.length)), b.filter) !(r = G[o].exec(a)) || u[o] && !(r = u[o](r)) || (n = r.shift(), i.push({
                    value: n,
                    type: o,
                    matches: r
                }), a = a.slice(n.length));
                if (!n) break
            }
            return t ? a.length : a ? se.error(e) : x(e, s).slice(0)
        }, f = se.compile = function(e, t) {
            var n, v, y, m, x, r, i = [],
                o = [],
                a = A[e + " "];
            if (!a) {
                t || (t = h(e)), n = t.length;
                while (n--)(a = Ee(t[n]))[S] ? i.push(a) : o.push(a);
                (a = A(e, (v = o, m = 0 < (y = i).length, x = 0 < v.length, r = function(e, t, n, r, i) {
                    var o, a, s, u = 0,
                        l = "0",
                        c = e && [],
                        f = [],
                        p = w,
                        d = e || x && b.find.TAG("*", i),
                        h = k += null == p ? 1 : Math.random() || .1,
                        g = d.length;
                    for (i && (w = t == C || t || i); l !== g && null != (o = d[l]); l++) {
                        if (x && o) {
                            a = 0, t || o.ownerDocument == C || (T(o), n = !E);
                            while (s = v[a++])
                                if (s(o, t || C, n)) {
                                    r.push(o);
                                    break
                                } i && (k = h)
                        }
                        m && ((o = !s && o) && u--, e && c.push(o))
                    }
                    if (u += l, m && l !== u) {
                        a = 0;
                        while (s = y[a++]) s(c, f, t, n);
                        if (e) {
                            if (0 < u)
                                while (l--) c[l] || f[l] || (f[l] = q.call(r));
                            f = Te(f)
                        }
                        H.apply(r, f), i && !e && 0 < f.length && 1 < u + y.length && se.uniqueSort(r)
                    }
                    return i && (k = h, w = p), c
                }, m ? le(r) : r))).selector = e
            }
            return a
        }, g = se.select = function(e, t, n, r) {
            var i, o, a, s, u, l = "function" == typeof e && e,
                c = !r && h(e = l.selector || e);
            if (n = n || [], 1 === c.length) {
                if (2 < (o = c[0] = c[0].slice(0)).length && "ID" === (a = o[0]).type && 9 === t.nodeType && E && b.relative[o[1].type]) {
                    if (!(t = (b.find.ID(a.matches[0].replace(te, ne), t) || [])[0])) return n;
                    l && (t = t.parentNode), e = e.slice(o.shift().value.length)
                }
                i = G.needsContext.test(e) ? 0 : o.length;
                while (i--) {
                    if (a = o[i], b.relative[s = a.type]) break;
                    if ((u = b.find[s]) && (r = u(a.matches[0].replace(te, ne), ee.test(o[0].type) && ye(t.parentNode) || t))) {
                        if (o.splice(i, 1), !(e = r.length && xe(o))) return H.apply(n, r), n;
                        break
                    }
                }
            }
            return (l || f(e, c))(r, t, !E, n, !t || ee.test(e) && ye(t.parentNode) || t), n
        }, d.sortStable = S.split("").sort(j).join("") === S, d.detectDuplicates = !!l, T(), d.sortDetached = ce(function(e) {
            return 1 & e.compareDocumentPosition(C.createElement("fieldset"))
        }), ce(function(e) {
            return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
        }) || fe("type|href|height|width", function(e, t, n) {
            if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
        }), d.attributes && ce(function(e) {
            return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
        }) || fe("value", function(e, t, n) {
            if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
        }), ce(function(e) {
            return null == e.getAttribute("disabled")
        }) || fe(R, function(e, t, n) {
            var r;
            if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
        }), se
    }(C);
    S.find = d, S.expr = d.selectors, S.expr[":"] = S.expr.pseudos, S.uniqueSort = S.unique = d.uniqueSort, S.text = d.getText, S.isXMLDoc = d.isXML, S.contains = d.contains, S.escapeSelector = d.escape;
    var h = function(e, t, n) {
            var r = [],
                i = void 0 !== n;
            while ((e = e[t]) && 9 !== e.nodeType)
                if (1 === e.nodeType) {
                    if (i && S(e).is(n)) break;
                    r.push(e)
                } return r
        },
        T = function(e, t) {
            for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
            return n
        },
        k = S.expr.match.needsContext;

    function A(e, t) {
        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
    }
    var N = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

    function j(e, n, r) {
        return m(n) ? S.grep(e, function(e, t) {
            return !!n.call(e, t, e) !== r
        }) : n.nodeType ? S.grep(e, function(e) {
            return e === n !== r
        }) : "string" != typeof n ? S.grep(e, function(e) {
            return -1 < i.call(n, e) !== r
        }) : S.filter(n, e, r)
    }
    S.filter = function(e, t, n) {
        var r = t[0];
        return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? S.find.matchesSelector(r, e) ? [r] : [] : S.find.matches(e, S.grep(t, function(e) {
            return 1 === e.nodeType
        }))
    }, S.fn.extend({
        find: function(e) {
            var t, n, r = this.length,
                i = this;
            if ("string" != typeof e) return this.pushStack(S(e).filter(function() {
                for (t = 0; t < r; t++)
                    if (S.contains(i[t], this)) return !0
            }));
            for (n = this.pushStack([]), t = 0; t < r; t++) S.find(e, i[t], n);
            return 1 < r ? S.uniqueSort(n) : n
        },
        filter: function(e) {
            return this.pushStack(j(this, e || [], !1))
        },
        not: function(e) {
            return this.pushStack(j(this, e || [], !0))
        },
        is: function(e) {
            return !!j(this, "string" == typeof e && k.test(e) ? S(e) : e || [], !1).length
        }
    });
    var D, q = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    (S.fn.init = function(e, t, n) {
        var r, i;
        if (!e) return this;
        if (n = n || D, "string" == typeof e) {
            if (!(r = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : q.exec(e)) || !r[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
            if (r[1]) {
                if (t = t instanceof S ? t[0] : t, S.merge(this, S.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : E, !0)), N.test(r[1]) && S.isPlainObject(t))
                    for (r in t) m(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                return this
            }
            return (i = E.getElementById(r[2])) && (this[0] = i, this.length = 1), this
        }
        return e.nodeType ? (this[0] = e, this.length = 1, this) : m(e) ? void 0 !== n.ready ? n.ready(e) : e(S) : S.makeArray(e, this)
    }).prototype = S.fn, D = S(E);
    var L = /^(?:parents|prev(?:Until|All))/,
        H = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };

    function O(e, t) {
        while ((e = e[t]) && 1 !== e.nodeType);
        return e
    }
    S.fn.extend({
        has: function(e) {
            var t = S(e, this),
                n = t.length;
            return this.filter(function() {
                for (var e = 0; e < n; e++)
                    if (S.contains(this, t[e])) return !0
            })
        },
        closest: function(e, t) {
            var n, r = 0,
                i = this.length,
                o = [],
                a = "string" != typeof e && S(e);
            if (!k.test(e))
                for (; r < i; r++)
                    for (n = this[r]; n && n !== t; n = n.parentNode)
                        if (n.nodeType < 11 && (a ? -1 < a.index(n) : 1 === n.nodeType && S.find.matchesSelector(n, e))) {
                            o.push(n);
                            break
                        } return this.pushStack(1 < o.length ? S.uniqueSort(o) : o)
        },
        index: function(e) {
            return e ? "string" == typeof e ? i.call(S(e), this[0]) : i.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(e, t) {
            return this.pushStack(S.uniqueSort(S.merge(this.get(), S(e, t))))
        },
        addBack: function(e) {
            return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
        }
    }), S.each({
        parent: function(e) {
            var t = e.parentNode;
            return t && 11 !== t.nodeType ? t : null
        },
        parents: function(e) {
            return h(e, "parentNode")
        },
        parentsUntil: function(e, t, n) {
            return h(e, "parentNode", n)
        },
        next: function(e) {
            return O(e, "nextSibling")
        },
        prev: function(e) {
            return O(e, "previousSibling")
        },
        nextAll: function(e) {
            return h(e, "nextSibling")
        },
        prevAll: function(e) {
            return h(e, "previousSibling")
        },
        nextUntil: function(e, t, n) {
            return h(e, "nextSibling", n)
        },
        prevUntil: function(e, t, n) {
            return h(e, "previousSibling", n)
        },
        siblings: function(e) {
            return T((e.parentNode || {}).firstChild, e)
        },
        children: function(e) {
            return T(e.firstChild)
        },
        contents: function(e) {
            return null != e.contentDocument && r(e.contentDocument) ? e.contentDocument : (A(e, "template") && (e = e.content || e), S.merge([], e.childNodes))
        }
    }, function(r, i) {
        S.fn[r] = function(e, t) {
            var n = S.map(this, i, e);
            return "Until" !== r.slice(-5) && (t = e), t && "string" == typeof t && (n = S.filter(t, n)), 1 < this.length && (H[r] || S.uniqueSort(n), L.test(r) && n.reverse()), this.pushStack(n)
        }
    });
    var P = /[^\x20\t\r\n\f]+/g;

    function R(e) {
        return e
    }

    function M(e) {
        throw e
    }

    function I(e, t, n, r) {
        var i;
        try {
            e && m(i = e.promise) ? i.call(e).done(t).fail(n) : e && m(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
        } catch (e) {
            n.apply(void 0, [e])
        }
    }
    S.Callbacks = function(r) {
        var e, n;
        r = "string" == typeof r ? (e = r, n = {}, S.each(e.match(P) || [], function(e, t) {
            n[t] = !0
        }), n) : S.extend({}, r);
        var i, t, o, a, s = [],
            u = [],
            l = -1,
            c = function() {
                for (a = a || r.once, o = i = !0; u.length; l = -1) {
                    t = u.shift();
                    while (++l < s.length) !1 === s[l].apply(t[0], t[1]) && r.stopOnFalse && (l = s.length, t = !1)
                }
                r.memory || (t = !1), i = !1, a && (s = t ? [] : "")
            },
            f = {
                add: function() {
                    return s && (t && !i && (l = s.length - 1, u.push(t)), function n(e) {
                        S.each(e, function(e, t) {
                            m(t) ? r.unique && f.has(t) || s.push(t) : t && t.length && "string" !== w(t) && n(t)
                        })
                    }(arguments), t && !i && c()), this
                },
                remove: function() {
                    return S.each(arguments, function(e, t) {
                        var n;
                        while (-1 < (n = S.inArray(t, s, n))) s.splice(n, 1), n <= l && l--
                    }), this
                },
                has: function(e) {
                    return e ? -1 < S.inArray(e, s) : 0 < s.length
                },
                empty: function() {
                    return s && (s = []), this
                },
                disable: function() {
                    return a = u = [], s = t = "", this
                },
                disabled: function() {
                    return !s
                },
                lock: function() {
                    return a = u = [], t || i || (s = t = ""), this
                },
                locked: function() {
                    return !!a
                },
                fireWith: function(e, t) {
                    return a || (t = [e, (t = t || []).slice ? t.slice() : t], u.push(t), i || c()), this
                },
                fire: function() {
                    return f.fireWith(this, arguments), this
                },
                fired: function() {
                    return !!o
                }
            };
        return f
    }, S.extend({
        Deferred: function(e) {
            var o = [
                    ["notify", "progress", S.Callbacks("memory"), S.Callbacks("memory"), 2],
                    ["resolve", "done", S.Callbacks("once memory"), S.Callbacks("once memory"), 0, "resolved"],
                    ["reject", "fail", S.Callbacks("once memory"), S.Callbacks("once memory"), 1, "rejected"]
                ],
                i = "pending",
                a = {
                    state: function() {
                        return i
                    },
                    always: function() {
                        return s.done(arguments).fail(arguments), this
                    },
                    "catch": function(e) {
                        return a.then(null, e)
                    },
                    pipe: function() {
                        var i = arguments;
                        return S.Deferred(function(r) {
                            S.each(o, function(e, t) {
                                var n = m(i[t[4]]) && i[t[4]];
                                s[t[1]](function() {
                                    var e = n && n.apply(this, arguments);
                                    e && m(e.promise) ? e.promise().progress(r.notify).done(r.resolve).fail(r.reject) : r[t[0] + "With"](this, n ? [e] : arguments)
                                })
                            }), i = null
                        }).promise()
                    },
                    then: function(t, n, r) {
                        var u = 0;

                        function l(i, o, a, s) {
                            return function() {
                                var n = this,
                                    r = arguments,
                                    e = function() {
                                        var e, t;
                                        if (!(i < u)) {
                                            if ((e = a.apply(n, r)) === o.promise()) throw new TypeError("Thenable self-resolution");
                                            t = e && ("object" == typeof e || "function" == typeof e) && e.then, m(t) ? s ? t.call(e, l(u, o, R, s), l(u, o, M, s)) : (u++, t.call(e, l(u, o, R, s), l(u, o, M, s), l(u, o, R, o.notifyWith))) : (a !== R && (n = void 0, r = [e]), (s || o.resolveWith)(n, r))
                                        }
                                    },
                                    t = s ? e : function() {
                                        try {
                                            e()
                                        } catch (e) {
                                            S.Deferred.exceptionHook && S.Deferred.exceptionHook(e, t.stackTrace), u <= i + 1 && (a !== M && (n = void 0, r = [e]), o.rejectWith(n, r))
                                        }
                                    };
                                i ? t() : (S.Deferred.getStackHook && (t.stackTrace = S.Deferred.getStackHook()), C.setTimeout(t))
                            }
                        }
                        return S.Deferred(function(e) {
                            o[0][3].add(l(0, e, m(r) ? r : R, e.notifyWith)), o[1][3].add(l(0, e, m(t) ? t : R)), o[2][3].add(l(0, e, m(n) ? n : M))
                        }).promise()
                    },
                    promise: function(e) {
                        return null != e ? S.extend(e, a) : a
                    }
                },
                s = {};
            return S.each(o, function(e, t) {
                var n = t[2],
                    r = t[5];
                a[t[1]] = n.add, r && n.add(function() {
                    i = r
                }, o[3 - e][2].disable, o[3 - e][3].disable, o[0][2].lock, o[0][3].lock), n.add(t[3].fire), s[t[0]] = function() {
                    return s[t[0] + "With"](this === s ? void 0 : this, arguments), this
                }, s[t[0] + "With"] = n.fireWith
            }), a.promise(s), e && e.call(s, s), s
        },
        when: function(e) {
            var n = arguments.length,
                t = n,
                r = Array(t),
                i = s.call(arguments),
                o = S.Deferred(),
                a = function(t) {
                    return function(e) {
                        r[t] = this, i[t] = 1 < arguments.length ? s.call(arguments) : e, --n || o.resolveWith(r, i)
                    }
                };
            if (n <= 1 && (I(e, o.done(a(t)).resolve, o.reject, !n), "pending" === o.state() || m(i[t] && i[t].then))) return o.then();
            while (t--) I(i[t], a(t), o.reject);
            return o.promise()
        }
    });
    var W = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    S.Deferred.exceptionHook = function(e, t) {
        C.console && C.console.warn && e && W.test(e.name) && C.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t)
    }, S.readyException = function(e) {
        C.setTimeout(function() {
            throw e
        })
    };
    var F = S.Deferred();

    function B() {
        E.removeEventListener("DOMContentLoaded", B), C.removeEventListener("load", B), S.ready()
    }
    S.fn.ready = function(e) {
        return F.then(e)["catch"](function(e) {
            S.readyException(e)
        }), this
    }, S.extend({
        isReady: !1,
        readyWait: 1,
        ready: function(e) {
            (!0 === e ? --S.readyWait : S.isReady) || (S.isReady = !0) !== e && 0 < --S.readyWait || F.resolveWith(E, [S])
        }
    }), S.ready.then = F.then, "complete" === E.readyState || "loading" !== E.readyState && !E.documentElement.doScroll ? C.setTimeout(S.ready) : (E.addEventListener("DOMContentLoaded", B), C.addEventListener("load", B));
    var $ = function(e, t, n, r, i, o, a) {
            var s = 0,
                u = e.length,
                l = null == n;
            if ("object" === w(n))
                for (s in i = !0, n) $(e, t, s, n[s], !0, o, a);
            else if (void 0 !== r && (i = !0, m(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function(e, t, n) {
                    return l.call(S(e), n)
                })), t))
                for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
            return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
        },
        _ = /^-ms-/,
        z = /-([a-z])/g;

    function U(e, t) {
        return t.toUpperCase()
    }

    function X(e) {
        return e.replace(_, "ms-").replace(z, U)
    }
    var V = function(e) {
        return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
    };

    function G() {
        this.expando = S.expando + G.uid++
    }
    G.uid = 1, G.prototype = {
        cache: function(e) {
            var t = e[this.expando];
            return t || (t = {}, V(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                value: t,
                configurable: !0
            }))), t
        },
        set: function(e, t, n) {
            var r, i = this.cache(e);
            if ("string" == typeof t) i[X(t)] = n;
            else
                for (r in t) i[X(r)] = t[r];
            return i
        },
        get: function(e, t) {
            return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][X(t)]
        },
        access: function(e, t, n) {
            return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
        },
        remove: function(e, t) {
            var n, r = e[this.expando];
            if (void 0 !== r) {
                if (void 0 !== t) {
                    n = (t = Array.isArray(t) ? t.map(X) : (t = X(t)) in r ? [t] : t.match(P) || []).length;
                    while (n--) delete r[t[n]]
                }(void 0 === t || S.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
            }
        },
        hasData: function(e) {
            var t = e[this.expando];
            return void 0 !== t && !S.isEmptyObject(t)
        }
    };
    var Y = new G,
        Q = new G,
        J = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        K = /[A-Z]/g;

    function Z(e, t, n) {
        var r, i;
        if (void 0 === n && 1 === e.nodeType)
            if (r = "data-" + t.replace(K, "-$&").toLowerCase(), "string" == typeof(n = e.getAttribute(r))) {
                try {
                    n = "true" === (i = n) || "false" !== i && ("null" === i ? null : i === +i + "" ? +i : J.test(i) ? JSON.parse(i) : i)
                } catch (e) {}
                Q.set(e, t, n)
            } else n = void 0;
        return n
    }
    S.extend({
        hasData: function(e) {
            return Q.hasData(e) || Y.hasData(e)
        },
        data: function(e, t, n) {
            return Q.access(e, t, n)
        },
        removeData: function(e, t) {
            Q.remove(e, t)
        },
        _data: function(e, t, n) {
            return Y.access(e, t, n)
        },
        _removeData: function(e, t) {
            Y.remove(e, t)
        }
    }), S.fn.extend({
        data: function(n, e) {
            var t, r, i, o = this[0],
                a = o && o.attributes;
            if (void 0 === n) {
                if (this.length && (i = Q.get(o), 1 === o.nodeType && !Y.get(o, "hasDataAttrs"))) {
                    t = a.length;
                    while (t--) a[t] && 0 === (r = a[t].name).indexOf("data-") && (r = X(r.slice(5)), Z(o, r, i[r]));
                    Y.set(o, "hasDataAttrs", !0)
                }
                return i
            }
            return "object" == typeof n ? this.each(function() {
                Q.set(this, n)
            }) : $(this, function(e) {
                var t;
                if (o && void 0 === e) return void 0 !== (t = Q.get(o, n)) ? t : void 0 !== (t = Z(o, n)) ? t : void 0;
                this.each(function() {
                    Q.set(this, n, e)
                })
            }, null, e, 1 < arguments.length, null, !0)
        },
        removeData: function(e) {
            return this.each(function() {
                Q.remove(this, e)
            })
        }
    }), S.extend({
        queue: function(e, t, n) {
            var r;
            if (e) return t = (t || "fx") + "queue", r = Y.get(e, t), n && (!r || Array.isArray(n) ? r = Y.access(e, t, S.makeArray(n)) : r.push(n)), r || []
        },
        dequeue: function(e, t) {
            t = t || "fx";
            var n = S.queue(e, t),
                r = n.length,
                i = n.shift(),
                o = S._queueHooks(e, t);
            "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, function() {
                S.dequeue(e, t)
            }, o)), !r && o && o.empty.fire()
        },
        _queueHooks: function(e, t) {
            var n = t + "queueHooks";
            return Y.get(e, n) || Y.access(e, n, {
                empty: S.Callbacks("once memory").add(function() {
                    Y.remove(e, [t + "queue", n])
                })
            })
        }
    }), S.fn.extend({
        queue: function(t, n) {
            var e = 2;
            return "string" != typeof t && (n = t, t = "fx", e--), arguments.length < e ? S.queue(this[0], t) : void 0 === n ? this : this.each(function() {
                var e = S.queue(this, t, n);
                S._queueHooks(this, t), "fx" === t && "inprogress" !== e[0] && S.dequeue(this, t)
            })
        },
        dequeue: function(e) {
            return this.each(function() {
                S.dequeue(this, e)
            })
        },
        clearQueue: function(e) {
            return this.queue(e || "fx", [])
        },
        promise: function(e, t) {
            var n, r = 1,
                i = S.Deferred(),
                o = this,
                a = this.length,
                s = function() {
                    --r || i.resolveWith(o, [o])
                };
            "string" != typeof e && (t = e, e = void 0), e = e || "fx";
            while (a--)(n = Y.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
            return s(), i.promise(t)
        }
    });
    var ee = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        te = new RegExp("^(?:([+-])=|)(" + ee + ")([a-z%]*)$", "i"),
        ne = ["Top", "Right", "Bottom", "Left"],
        re = E.documentElement,
        ie = function(e) {
            return S.contains(e.ownerDocument, e)
        },
        oe = {
            composed: !0
        };
    re.getRootNode && (ie = function(e) {
        return S.contains(e.ownerDocument, e) || e.getRootNode(oe) === e.ownerDocument
    });
    var ae = function(e, t) {
        return "none" === (e = t || e).style.display || "" === e.style.display && ie(e) && "none" === S.css(e, "display")
    };

    function se(e, t, n, r) {
        var i, o, a = 20,
            s = r ? function() {
                return r.cur()
            } : function() {
                return S.css(e, t, "")
            },
            u = s(),
            l = n && n[3] || (S.cssNumber[t] ? "" : "px"),
            c = e.nodeType && (S.cssNumber[t] || "px" !== l && +u) && te.exec(S.css(e, t));
        if (c && c[3] !== l) {
            u /= 2, l = l || c[3], c = +u || 1;
            while (a--) S.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
            c *= 2, S.style(e, t, c + l), n = n || []
        }
        return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i
    }
    var ue = {};

    function le(e, t) {
        for (var n, r, i, o, a, s, u, l = [], c = 0, f = e.length; c < f; c++)(r = e[c]).style && (n = r.style.display, t ? ("none" === n && (l[c] = Y.get(r, "display") || null, l[c] || (r.style.display = "")), "" === r.style.display && ae(r) && (l[c] = (u = a = o = void 0, a = (i = r).ownerDocument, s = i.nodeName, (u = ue[s]) || (o = a.body.appendChild(a.createElement(s)), u = S.css(o, "display"), o.parentNode.removeChild(o), "none" === u && (u = "block"), ue[s] = u)))) : "none" !== n && (l[c] = "none", Y.set(r, "display", n)));
        for (c = 0; c < f; c++) null != l[c] && (e[c].style.display = l[c]);
        return e
    }
    S.fn.extend({
        show: function() {
            return le(this, !0)
        },
        hide: function() {
            return le(this)
        },
        toggle: function(e) {
            return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
                ae(this) ? S(this).show() : S(this).hide()
            })
        }
    });
    var ce, fe, pe = /^(?:checkbox|radio)$/i,
        de = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
        he = /^$|^module$|\/(?:java|ecma)script/i;
    ce = E.createDocumentFragment().appendChild(E.createElement("div")), (fe = E.createElement("input")).setAttribute("type", "radio"), fe.setAttribute("checked", "checked"), fe.setAttribute("name", "t"), ce.appendChild(fe), y.checkClone = ce.cloneNode(!0).cloneNode(!0).lastChild.checked, ce.innerHTML = "<textarea>x</textarea>", y.noCloneChecked = !!ce.cloneNode(!0).lastChild.defaultValue, ce.innerHTML = "<option></option>", y.option = !!ce.lastChild;
    var ge = {
        thead: [1, "<table>", "</table>"],
        col: [2, "<table><colgroup>", "</colgroup></table>"],
        tr: [2, "<table><tbody>", "</tbody></table>"],
        td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
        _default: [0, "", ""]
    };

    function ve(e, t) {
        var n;
        return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && A(e, t) ? S.merge([e], n) : n
    }

    function ye(e, t) {
        for (var n = 0, r = e.length; n < r; n++) Y.set(e[n], "globalEval", !t || Y.get(t[n], "globalEval"))
    }
    ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td, y.option || (ge.optgroup = ge.option = [1, "<select multiple='multiple'>", "</select>"]);
    var me = /<|&#?\w+;/;

    function xe(e, t, n, r, i) {
        for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
            if ((o = e[d]) || 0 === o)
                if ("object" === w(o)) S.merge(p, o.nodeType ? [o] : o);
                else if (me.test(o)) {
            a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + S.htmlPrefilter(o) + u[2], c = u[0];
            while (c--) a = a.lastChild;
            S.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
        } else p.push(t.createTextNode(o));
        f.textContent = "", d = 0;
        while (o = p[d++])
            if (r && -1 < S.inArray(o, r)) i && i.push(o);
            else if (l = ie(o), a = ve(f.appendChild(o), "script"), l && ye(a), n) {
            c = 0;
            while (o = a[c++]) he.test(o.type || "") && n.push(o)
        }
        return f
    }
    var be = /^([^.]*)(?:\.(.+)|)/;

    function we() {
        return !0
    }

    function Te() {
        return !1
    }

    function Ce(e, t) {
        return e === function() {
            try {
                return E.activeElement
            } catch (e) {}
        }() == ("focus" === t)
    }

    function Ee(e, t, n, r, i, o) {
        var a, s;
        if ("object" == typeof t) {
            for (s in "string" != typeof n && (r = r || n, n = void 0), t) Ee(e, s, n, r, t[s], o);
            return e
        }
        if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = Te;
        else if (!i) return e;
        return 1 === o && (a = i, (i = function(e) {
            return S().off(e), a.apply(this, arguments)
        }).guid = a.guid || (a.guid = S.guid++)), e.each(function() {
            S.event.add(this, t, i, r, n)
        })
    }

    function Se(e, i, o) {
        o ? (Y.set(e, i, !1), S.event.add(e, i, {
            namespace: !1,
            handler: function(e) {
                var t, n, r = Y.get(this, i);
                if (1 & e.isTrigger && this[i]) {
                    if (r.length)(S.event.special[i] || {}).delegateType && e.stopPropagation();
                    else if (r = s.call(arguments), Y.set(this, i, r), t = o(this, i), this[i](), r !== (n = Y.get(this, i)) || t ? Y.set(this, i, !1) : n = {}, r !== n) return e.stopImmediatePropagation(), e.preventDefault(), n && n.value
                } else r.length && (Y.set(this, i, {
                    value: S.event.trigger(S.extend(r[0], S.Event.prototype), r.slice(1), this)
                }), e.stopImmediatePropagation())
            }
        })) : void 0 === Y.get(e, i) && S.event.add(e, i, we)
    }
    S.event = {
        global: {},
        add: function(t, e, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, v = Y.get(t);
            if (V(t)) {
                n.handler && (n = (o = n).handler, i = o.selector), i && S.find.matchesSelector(re, i), n.guid || (n.guid = S.guid++), (u = v.events) || (u = v.events = Object.create(null)), (a = v.handle) || (a = v.handle = function(e) {
                    return "undefined" != typeof S && S.event.triggered !== e.type ? S.event.dispatch.apply(t, arguments) : void 0
                }), l = (e = (e || "").match(P) || [""]).length;
                while (l--) d = g = (s = be.exec(e[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = S.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = S.event.special[d] || {}, c = S.extend({
                    type: d,
                    origType: g,
                    data: r,
                    handler: n,
                    guid: n.guid,
                    selector: i,
                    needsContext: i && S.expr.match.needsContext.test(i),
                    namespace: h.join(".")
                }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(t, r, h, a) || t.addEventListener && t.addEventListener(d, a)), f.add && (f.add.call(t, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), S.event.global[d] = !0)
            }
        },
        remove: function(e, t, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, v = Y.hasData(e) && Y.get(e);
            if (v && (u = v.events)) {
                l = (t = (t || "").match(P) || [""]).length;
                while (l--)
                    if (d = g = (s = be.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d) {
                        f = S.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;
                        while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
                        a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, v.handle) || S.removeEvent(e, d, v.handle), delete u[d])
                    } else
                        for (d in u) S.event.remove(e, d + t[l], n, r, !0);
                S.isEmptyObject(u) && Y.remove(e, "handle events")
            }
        },
        dispatch: function(e) {
            var t, n, r, i, o, a, s = new Array(arguments.length),
                u = S.event.fix(e),
                l = (Y.get(this, "events") || Object.create(null))[u.type] || [],
                c = S.event.special[u.type] || {};
            for (s[0] = u, t = 1; t < arguments.length; t++) s[t] = arguments[t];
            if (u.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, u)) {
                a = S.event.handlers.call(this, u, l), t = 0;
                while ((i = a[t++]) && !u.isPropagationStopped()) {
                    u.currentTarget = i.elem, n = 0;
                    while ((o = i.handlers[n++]) && !u.isImmediatePropagationStopped()) u.rnamespace && !1 !== o.namespace && !u.rnamespace.test(o.namespace) || (u.handleObj = o, u.data = o.data, void 0 !== (r = ((S.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, s)) && !1 === (u.result = r) && (u.preventDefault(), u.stopPropagation()))
                }
                return c.postDispatch && c.postDispatch.call(this, u), u.result
            }
        },
        handlers: function(e, t) {
            var n, r, i, o, a, s = [],
                u = t.delegateCount,
                l = e.target;
            if (u && l.nodeType && !("click" === e.type && 1 <= e.button))
                for (; l !== this; l = l.parentNode || this)
                    if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                        for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? -1 < S(i, this).index(l) : S.find(i, this, null, [l]).length), a[i] && o.push(r);
                        o.length && s.push({
                            elem: l,
                            handlers: o
                        })
                    } return l = this, u < t.length && s.push({
                elem: l,
                handlers: t.slice(u)
            }), s
        },
        addProp: function(t, e) {
            Object.defineProperty(S.Event.prototype, t, {
                enumerable: !0,
                configurable: !0,
                get: m(e) ? function() {
                    if (this.originalEvent) return e(this.originalEvent)
                } : function() {
                    if (this.originalEvent) return this.originalEvent[t]
                },
                set: function(e) {
                    Object.defineProperty(this, t, {
                        enumerable: !0,
                        configurable: !0,
                        writable: !0,
                        value: e
                    })
                }
            })
        },
        fix: function(e) {
            return e[S.expando] ? e : new S.Event(e)
        },
        special: {
            load: {
                noBubble: !0
            },
            click: {
                setup: function(e) {
                    var t = this || e;
                    return pe.test(t.type) && t.click && A(t, "input") && Se(t, "click", we), !1
                },
                trigger: function(e) {
                    var t = this || e;
                    return pe.test(t.type) && t.click && A(t, "input") && Se(t, "click"), !0
                },
                _default: function(e) {
                    var t = e.target;
                    return pe.test(t.type) && t.click && A(t, "input") && Y.get(t, "click") || A(t, "a")
                }
            },
            beforeunload: {
                postDispatch: function(e) {
                    void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                }
            }
        }
    }, S.removeEvent = function(e, t, n) {
        e.removeEventListener && e.removeEventListener(t, n)
    }, S.Event = function(e, t) {
        if (!(this instanceof S.Event)) return new S.Event(e, t);
        e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? we : Te, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && S.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[S.expando] = !0
    }, S.Event.prototype = {
        constructor: S.Event,
        isDefaultPrevented: Te,
        isPropagationStopped: Te,
        isImmediatePropagationStopped: Te,
        isSimulated: !1,
        preventDefault: function() {
            var e = this.originalEvent;
            this.isDefaultPrevented = we, e && !this.isSimulated && e.preventDefault()
        },
        stopPropagation: function() {
            var e = this.originalEvent;
            this.isPropagationStopped = we, e && !this.isSimulated && e.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var e = this.originalEvent;
            this.isImmediatePropagationStopped = we, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
        }
    }, S.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        "char": !0,
        code: !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: !0
    }, S.event.addProp), S.each({
        focus: "focusin",
        blur: "focusout"
    }, function(e, t) {
        S.event.special[e] = {
            setup: function() {
                return Se(this, e, Ce), !1
            },
            trigger: function() {
                return Se(this, e), !0
            },
            _default: function() {
                return !0
            },
            delegateType: t
        }
    }), S.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(e, i) {
        S.event.special[e] = {
            delegateType: i,
            bindType: i,
            handle: function(e) {
                var t, n = e.relatedTarget,
                    r = e.handleObj;
                return n && (n === this || S.contains(this, n)) || (e.type = r.origType, t = r.handler.apply(this, arguments), e.type = i), t
            }
        }
    }), S.fn.extend({
        on: function(e, t, n, r) {
            return Ee(this, e, t, n, r)
        },
        one: function(e, t, n, r) {
            return Ee(this, e, t, n, r, 1)
        },
        off: function(e, t, n) {
            var r, i;
            if (e && e.preventDefault && e.handleObj) return r = e.handleObj, S(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
            if ("object" == typeof e) {
                for (i in e) this.off(i, t, e[i]);
                return this
            }
            return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = Te), this.each(function() {
                S.event.remove(this, e, n, t)
            })
        }
    });
    var ke = /<script|<style|<link/i,
        Ae = /checked\s*(?:[^=]|=\s*.checked.)/i,
        Ne = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

    function je(e, t) {
        return A(e, "table") && A(11 !== t.nodeType ? t : t.firstChild, "tr") && S(e).children("tbody")[0] || e
    }

    function De(e) {
        return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
    }

    function qe(e) {
        return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
    }

    function Le(e, t) {
        var n, r, i, o, a, s;
        if (1 === t.nodeType) {
            if (Y.hasData(e) && (s = Y.get(e).events))
                for (i in Y.remove(t, "handle events"), s)
                    for (n = 0, r = s[i].length; n < r; n++) S.event.add(t, i, s[i][n]);
            Q.hasData(e) && (o = Q.access(e), a = S.extend({}, o), Q.set(t, a))
        }
    }

    function He(n, r, i, o) {
        r = g(r);
        var e, t, a, s, u, l, c = 0,
            f = n.length,
            p = f - 1,
            d = r[0],
            h = m(d);
        if (h || 1 < f && "string" == typeof d && !y.checkClone && Ae.test(d)) return n.each(function(e) {
            var t = n.eq(e);
            h && (r[0] = d.call(this, e, t.html())), He(t, r, i, o)
        });
        if (f && (t = (e = xe(r, n[0].ownerDocument, !1, n, o)).firstChild, 1 === e.childNodes.length && (e = t), t || o)) {
            for (s = (a = S.map(ve(e, "script"), De)).length; c < f; c++) u = e, c !== p && (u = S.clone(u, !0, !0), s && S.merge(a, ve(u, "script"))), i.call(n[c], u, c);
            if (s)
                for (l = a[a.length - 1].ownerDocument, S.map(a, qe), c = 0; c < s; c++) u = a[c], he.test(u.type || "") && !Y.access(u, "globalEval") && S.contains(l, u) && (u.src && "module" !== (u.type || "").toLowerCase() ? S._evalUrl && !u.noModule && S._evalUrl(u.src, {
                    nonce: u.nonce || u.getAttribute("nonce")
                }, l) : b(u.textContent.replace(Ne, ""), u, l))
        }
        return n
    }

    function Oe(e, t, n) {
        for (var r, i = t ? S.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || S.cleanData(ve(r)), r.parentNode && (n && ie(r) && ye(ve(r, "script")), r.parentNode.removeChild(r));
        return e
    }
    S.extend({
        htmlPrefilter: function(e) {
            return e
        },
        clone: function(e, t, n) {
            var r, i, o, a, s, u, l, c = e.cloneNode(!0),
                f = ie(e);
            if (!(y.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || S.isXMLDoc(e)))
                for (a = ve(c), r = 0, i = (o = ve(e)).length; r < i; r++) s = o[r], u = a[r], void 0, "input" === (l = u.nodeName.toLowerCase()) && pe.test(s.type) ? u.checked = s.checked : "input" !== l && "textarea" !== l || (u.defaultValue = s.defaultValue);
            if (t)
                if (n)
                    for (o = o || ve(e), a = a || ve(c), r = 0, i = o.length; r < i; r++) Le(o[r], a[r]);
                else Le(e, c);
            return 0 < (a = ve(c, "script")).length && ye(a, !f && ve(e, "script")), c
        },
        cleanData: function(e) {
            for (var t, n, r, i = S.event.special, o = 0; void 0 !== (n = e[o]); o++)
                if (V(n)) {
                    if (t = n[Y.expando]) {
                        if (t.events)
                            for (r in t.events) i[r] ? S.event.remove(n, r) : S.removeEvent(n, r, t.handle);
                        n[Y.expando] = void 0
                    }
                    n[Q.expando] && (n[Q.expando] = void 0)
                }
        }
    }), S.fn.extend({
        detach: function(e) {
            return Oe(this, e, !0)
        },
        remove: function(e) {
            return Oe(this, e)
        },
        text: function(e) {
            return $(this, function(e) {
                return void 0 === e ? S.text(this) : this.empty().each(function() {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                })
            }, null, e, arguments.length)
        },
        append: function() {
            return He(this, arguments, function(e) {
                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || je(this, e).appendChild(e)
            })
        },
        prepend: function() {
            return He(this, arguments, function(e) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = je(this, e);
                    t.insertBefore(e, t.firstChild)
                }
            })
        },
        before: function() {
            return He(this, arguments, function(e) {
                this.parentNode && this.parentNode.insertBefore(e, this)
            })
        },
        after: function() {
            return He(this, arguments, function(e) {
                this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
            })
        },
        empty: function() {
            for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (S.cleanData(ve(e, !1)), e.textContent = "");
            return this
        },
        clone: function(e, t) {
            return e = null != e && e, t = null == t ? e : t, this.map(function() {
                return S.clone(this, e, t)
            })
        },
        html: function(e) {
            return $(this, function(e) {
                var t = this[0] || {},
                    n = 0,
                    r = this.length;
                if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                if ("string" == typeof e && !ke.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
                    e = S.htmlPrefilter(e);
                    try {
                        for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (S.cleanData(ve(t, !1)), t.innerHTML = e);
                        t = 0
                    } catch (e) {}
                }
                t && this.empty().append(e)
            }, null, e, arguments.length)
        },
        replaceWith: function() {
            var n = [];
            return He(this, arguments, function(e) {
                var t = this.parentNode;
                S.inArray(this, n) < 0 && (S.cleanData(ve(this)), t && t.replaceChild(e, this))
            }, n)
        }
    }), S.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(e, a) {
        S.fn[e] = function(e) {
            for (var t, n = [], r = S(e), i = r.length - 1, o = 0; o <= i; o++) t = o === i ? this : this.clone(!0), S(r[o])[a](t), u.apply(n, t.get());
            return this.pushStack(n)
        }
    });
    var Pe = new RegExp("^(" + ee + ")(?!px)[a-z%]+$", "i"),
        Re = function(e) {
            var t = e.ownerDocument.defaultView;
            return t && t.opener || (t = C), t.getComputedStyle(e)
        },
        Me = function(e, t, n) {
            var r, i, o = {};
            for (i in t) o[i] = e.style[i], e.style[i] = t[i];
            for (i in r = n.call(e), t) e.style[i] = o[i];
            return r
        },
        Ie = new RegExp(ne.join("|"), "i");

    function We(e, t, n) {
        var r, i, o, a, s = e.style;
        return (n = n || Re(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || ie(e) || (a = S.style(e, t)), !y.pixelBoxStyles() && Pe.test(a) && Ie.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a
    }

    function Fe(e, t) {
        return {
            get: function() {
                if (!e()) return (this.get = t).apply(this, arguments);
                delete this.get
            }
        }
    }! function() {
        function e() {
            if (l) {
                u.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", l.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", re.appendChild(u).appendChild(l);
                var e = C.getComputedStyle(l);
                n = "1%" !== e.top, s = 12 === t(e.marginLeft), l.style.right = "60%", o = 36 === t(e.right), r = 36 === t(e.width), l.style.position = "absolute", i = 12 === t(l.offsetWidth / 3), re.removeChild(u), l = null
            }
        }

        function t(e) {
            return Math.round(parseFloat(e))
        }
        var n, r, i, o, a, s, u = E.createElement("div"),
            l = E.createElement("div");
        l.style && (l.style.backgroundClip = "content-box", l.cloneNode(!0).style.backgroundClip = "", y.clearCloneStyle = "content-box" === l.style.backgroundClip, S.extend(y, {
            boxSizingReliable: function() {
                return e(), r
            },
            pixelBoxStyles: function() {
                return e(), o
            },
            pixelPosition: function() {
                return e(), n
            },
            reliableMarginLeft: function() {
                return e(), s
            },
            scrollboxSize: function() {
                return e(), i
            },
            reliableTrDimensions: function() {
                var e, t, n, r;
                return null == a && (e = E.createElement("table"), t = E.createElement("tr"), n = E.createElement("div"), e.style.cssText = "position:absolute;left:-11111px;border-collapse:separate", t.style.cssText = "border:1px solid", t.style.height = "1px", n.style.height = "9px", n.style.display = "block", re.appendChild(e).appendChild(t).appendChild(n), r = C.getComputedStyle(t), a = parseInt(r.height, 10) + parseInt(r.borderTopWidth, 10) + parseInt(r.borderBottomWidth, 10) === t.offsetHeight, re.removeChild(e)), a
            }
        }))
    }();
    var Be = ["Webkit", "Moz", "ms"],
        $e = E.createElement("div").style,
        _e = {};

    function ze(e) {
        var t = S.cssProps[e] || _e[e];
        return t || (e in $e ? e : _e[e] = function(e) {
            var t = e[0].toUpperCase() + e.slice(1),
                n = Be.length;
            while (n--)
                if ((e = Be[n] + t) in $e) return e
        }(e) || e)
    }
    var Ue = /^(none|table(?!-c[ea]).+)/,
        Xe = /^--/,
        Ve = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        Ge = {
            letterSpacing: "0",
            fontWeight: "400"
        };

    function Ye(e, t, n) {
        var r = te.exec(t);
        return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
    }

    function Qe(e, t, n, r, i, o) {
        var a = "width" === t ? 1 : 0,
            s = 0,
            u = 0;
        if (n === (r ? "border" : "content")) return 0;
        for (; a < 4; a += 2) "margin" === n && (u += S.css(e, n + ne[a], !0, i)), r ? ("content" === n && (u -= S.css(e, "padding" + ne[a], !0, i)), "margin" !== n && (u -= S.css(e, "border" + ne[a] + "Width", !0, i))) : (u += S.css(e, "padding" + ne[a], !0, i), "padding" !== n ? u += S.css(e, "border" + ne[a] + "Width", !0, i) : s += S.css(e, "border" + ne[a] + "Width", !0, i));
        return !r && 0 <= o && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5)) || 0), u
    }

    function Je(e, t, n) {
        var r = Re(e),
            i = (!y.boxSizingReliable() || n) && "border-box" === S.css(e, "boxSizing", !1, r),
            o = i,
            a = We(e, t, r),
            s = "offset" + t[0].toUpperCase() + t.slice(1);
        if (Pe.test(a)) {
            if (!n) return a;
            a = "auto"
        }
        return (!y.boxSizingReliable() && i || !y.reliableTrDimensions() && A(e, "tr") || "auto" === a || !parseFloat(a) && "inline" === S.css(e, "display", !1, r)) && e.getClientRects().length && (i = "border-box" === S.css(e, "boxSizing", !1, r), (o = s in e) && (a = e[s])), (a = parseFloat(a) || 0) + Qe(e, t, n || (i ? "border" : "content"), o, r, a) + "px"
    }

    function Ke(e, t, n, r, i) {
        return new Ke.prototype.init(e, t, n, r, i)
    }
    S.extend({
        cssHooks: {
            opacity: {
                get: function(e, t) {
                    if (t) {
                        var n = We(e, "opacity");
                        return "" === n ? "1" : n
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            gridArea: !0,
            gridColumn: !0,
            gridColumnEnd: !0,
            gridColumnStart: !0,
            gridRow: !0,
            gridRowEnd: !0,
            gridRowStart: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {},
        style: function(e, t, n, r) {
            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                var i, o, a, s = X(t),
                    u = Xe.test(t),
                    l = e.style;
                if (u || (t = ze(s)), a = S.cssHooks[t] || S.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                "string" === (o = typeof n) && (i = te.exec(n)) && i[1] && (n = se(e, t, i), o = "number"), null != n && n == n && ("number" !== o || u || (n += i && i[3] || (S.cssNumber[s] ? "" : "px")), y.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
            }
        },
        css: function(e, t, n, r) {
            var i, o, a, s = X(t);
            return Xe.test(t) || (t = ze(s)), (a = S.cssHooks[t] || S.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = We(e, t, r)), "normal" === i && t in Ge && (i = Ge[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
        }
    }), S.each(["height", "width"], function(e, u) {
        S.cssHooks[u] = {
            get: function(e, t, n) {
                if (t) return !Ue.test(S.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? Je(e, u, n) : Me(e, Ve, function() {
                    return Je(e, u, n)
                })
            },
            set: function(e, t, n) {
                var r, i = Re(e),
                    o = !y.scrollboxSize() && "absolute" === i.position,
                    a = (o || n) && "border-box" === S.css(e, "boxSizing", !1, i),
                    s = n ? Qe(e, u, n, a, i) : 0;
                return a && o && (s -= Math.ceil(e["offset" + u[0].toUpperCase() + u.slice(1)] - parseFloat(i[u]) - Qe(e, u, "border", !1, i) - .5)), s && (r = te.exec(t)) && "px" !== (r[3] || "px") && (e.style[u] = t, t = S.css(e, u)), Ye(0, t, s)
            }
        }
    }), S.cssHooks.marginLeft = Fe(y.reliableMarginLeft, function(e, t) {
        if (t) return (parseFloat(We(e, "marginLeft")) || e.getBoundingClientRect().left - Me(e, {
            marginLeft: 0
        }, function() {
            return e.getBoundingClientRect().left
        })) + "px"
    }), S.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(i, o) {
        S.cssHooks[i + o] = {
            expand: function(e) {
                for (var t = 0, n = {}, r = "string" == typeof e ? e.split(" ") : [e]; t < 4; t++) n[i + ne[t] + o] = r[t] || r[t - 2] || r[0];
                return n
            }
        }, "margin" !== i && (S.cssHooks[i + o].set = Ye)
    }), S.fn.extend({
        css: function(e, t) {
            return $(this, function(e, t, n) {
                var r, i, o = {},
                    a = 0;
                if (Array.isArray(t)) {
                    for (r = Re(e), i = t.length; a < i; a++) o[t[a]] = S.css(e, t[a], !1, r);
                    return o
                }
                return void 0 !== n ? S.style(e, t, n) : S.css(e, t)
            }, e, t, 1 < arguments.length)
        }
    }), ((S.Tween = Ke).prototype = {
        constructor: Ke,
        init: function(e, t, n, r, i, o) {
            this.elem = e, this.prop = n, this.easing = i || S.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (S.cssNumber[n] ? "" : "px")
        },
        cur: function() {
            var e = Ke.propHooks[this.prop];
            return e && e.get ? e.get(this) : Ke.propHooks._default.get(this)
        },
        run: function(e) {
            var t, n = Ke.propHooks[this.prop];
            return this.options.duration ? this.pos = t = S.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : Ke.propHooks._default.set(this), this
        }
    }).init.prototype = Ke.prototype, (Ke.propHooks = {
        _default: {
            get: function(e) {
                var t;
                return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = S.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
            },
            set: function(e) {
                S.fx.step[e.prop] ? S.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !S.cssHooks[e.prop] && null == e.elem.style[ze(e.prop)] ? e.elem[e.prop] = e.now : S.style(e.elem, e.prop, e.now + e.unit)
            }
        }
    }).scrollTop = Ke.propHooks.scrollLeft = {
        set: function(e) {
            e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
        }
    }, S.easing = {
        linear: function(e) {
            return e
        },
        swing: function(e) {
            return .5 - Math.cos(e * Math.PI) / 2
        },
        _default: "swing"
    }, S.fx = Ke.prototype.init, S.fx.step = {};
    var Ze, et, tt, nt, rt = /^(?:toggle|show|hide)$/,
        it = /queueHooks$/;

    function ot() {
        et && (!1 === E.hidden && C.requestAnimationFrame ? C.requestAnimationFrame(ot) : C.setTimeout(ot, S.fx.interval), S.fx.tick())
    }

    function at() {
        return C.setTimeout(function() {
            Ze = void 0
        }), Ze = Date.now()
    }

    function st(e, t) {
        var n, r = 0,
            i = {
                height: e
            };
        for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = ne[r])] = i["padding" + n] = e;
        return t && (i.opacity = i.width = e), i
    }

    function ut(e, t, n) {
        for (var r, i = (lt.tweeners[t] || []).concat(lt.tweeners["*"]), o = 0, a = i.length; o < a; o++)
            if (r = i[o].call(n, t, e)) return r
    }

    function lt(o, e, t) {
        var n, a, r = 0,
            i = lt.prefilters.length,
            s = S.Deferred().always(function() {
                delete u.elem
            }),
            u = function() {
                if (a) return !1;
                for (var e = Ze || at(), t = Math.max(0, l.startTime + l.duration - e), n = 1 - (t / l.duration || 0), r = 0, i = l.tweens.length; r < i; r++) l.tweens[r].run(n);
                return s.notifyWith(o, [l, n, t]), n < 1 && i ? t : (i || s.notifyWith(o, [l, 1, 0]), s.resolveWith(o, [l]), !1)
            },
            l = s.promise({
                elem: o,
                props: S.extend({}, e),
                opts: S.extend(!0, {
                    specialEasing: {},
                    easing: S.easing._default
                }, t),
                originalProperties: e,
                originalOptions: t,
                startTime: Ze || at(),
                duration: t.duration,
                tweens: [],
                createTween: function(e, t) {
                    var n = S.Tween(o, l.opts, e, t, l.opts.specialEasing[e] || l.opts.easing);
                    return l.tweens.push(n), n
                },
                stop: function(e) {
                    var t = 0,
                        n = e ? l.tweens.length : 0;
                    if (a) return this;
                    for (a = !0; t < n; t++) l.tweens[t].run(1);
                    return e ? (s.notifyWith(o, [l, 1, 0]), s.resolveWith(o, [l, e])) : s.rejectWith(o, [l, e]), this
                }
            }),
            c = l.props;
        for (! function(e, t) {
                var n, r, i, o, a;
                for (n in e)
                    if (i = t[r = X(n)], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = S.cssHooks[r]) && "expand" in a)
                        for (n in o = a.expand(o), delete e[r], o) n in e || (e[n] = o[n], t[n] = i);
                    else t[r] = i
            }(c, l.opts.specialEasing); r < i; r++)
            if (n = lt.prefilters[r].call(l, o, c, l.opts)) return m(n.stop) && (S._queueHooks(l.elem, l.opts.queue).stop = n.stop.bind(n)), n;
        return S.map(c, ut, l), m(l.opts.start) && l.opts.start.call(o, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), S.fx.timer(S.extend(u, {
            elem: o,
            anim: l,
            queue: l.opts.queue
        })), l
    }
    S.Animation = S.extend(lt, {
        tweeners: {
            "*": [function(e, t) {
                var n = this.createTween(e, t);
                return se(n.elem, e, te.exec(t), n), n
            }]
        },
        tweener: function(e, t) {
            m(e) ? (t = e, e = ["*"]) : e = e.match(P);
            for (var n, r = 0, i = e.length; r < i; r++) n = e[r], lt.tweeners[n] = lt.tweeners[n] || [], lt.tweeners[n].unshift(t)
        },
        prefilters: [function(e, t, n) {
            var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t,
                p = this,
                d = {},
                h = e.style,
                g = e.nodeType && ae(e),
                v = Y.get(e, "fxshow");
            for (r in n.queue || (null == (a = S._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function() {
                    a.unqueued || s()
                }), a.unqueued++, p.always(function() {
                    p.always(function() {
                        a.unqueued--, S.queue(e, "fx").length || a.empty.fire()
                    })
                })), t)
                if (i = t[r], rt.test(i)) {
                    if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
                        if ("show" !== i || !v || void 0 === v[r]) continue;
                        g = !0
                    }
                    d[r] = v && v[r] || S.style(e, r)
                } if ((u = !S.isEmptyObject(t)) || !S.isEmptyObject(d))
                for (r in f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = v && v.display) && (l = Y.get(e, "display")), "none" === (c = S.css(e, "display")) && (l ? c = l : (le([e], !0), l = e.style.display || l, c = S.css(e, "display"), le([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === S.css(e, "float") && (u || (p.done(function() {
                        h.display = l
                    }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function() {
                        h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                    })), u = !1, d) u || (v ? "hidden" in v && (g = v.hidden) : v = Y.access(e, "fxshow", {
                    display: l
                }), o && (v.hidden = !g), g && le([e], !0), p.done(function() {
                    for (r in g || le([e]), Y.remove(e, "fxshow"), d) S.style(e, r, d[r])
                })), u = ut(g ? v[r] : 0, r, p), r in v || (v[r] = u.start, g && (u.end = u.start, u.start = 0))
        }],
        prefilter: function(e, t) {
            t ? lt.prefilters.unshift(e) : lt.prefilters.push(e)
        }
    }), S.speed = function(e, t, n) {
        var r = e && "object" == typeof e ? S.extend({}, e) : {
            complete: n || !n && t || m(e) && e,
            duration: e,
            easing: n && t || t && !m(t) && t
        };
        return S.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in S.fx.speeds ? r.duration = S.fx.speeds[r.duration] : r.duration = S.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function() {
            m(r.old) && r.old.call(this), r.queue && S.dequeue(this, r.queue)
        }, r
    }, S.fn.extend({
        fadeTo: function(e, t, n, r) {
            return this.filter(ae).css("opacity", 0).show().end().animate({
                opacity: t
            }, e, n, r)
        },
        animate: function(t, e, n, r) {
            var i = S.isEmptyObject(t),
                o = S.speed(e, n, r),
                a = function() {
                    var e = lt(this, S.extend({}, t), o);
                    (i || Y.get(this, "finish")) && e.stop(!0)
                };
            return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
        },
        stop: function(i, e, o) {
            var a = function(e) {
                var t = e.stop;
                delete e.stop, t(o)
            };
            return "string" != typeof i && (o = e, e = i, i = void 0), e && this.queue(i || "fx", []), this.each(function() {
                var e = !0,
                    t = null != i && i + "queueHooks",
                    n = S.timers,
                    r = Y.get(this);
                if (t) r[t] && r[t].stop && a(r[t]);
                else
                    for (t in r) r[t] && r[t].stop && it.test(t) && a(r[t]);
                for (t = n.length; t--;) n[t].elem !== this || null != i && n[t].queue !== i || (n[t].anim.stop(o), e = !1, n.splice(t, 1));
                !e && o || S.dequeue(this, i)
            })
        },
        finish: function(a) {
            return !1 !== a && (a = a || "fx"), this.each(function() {
                var e, t = Y.get(this),
                    n = t[a + "queue"],
                    r = t[a + "queueHooks"],
                    i = S.timers,
                    o = n ? n.length : 0;
                for (t.finish = !0, S.queue(this, a, []), r && r.stop && r.stop.call(this, !0), e = i.length; e--;) i[e].elem === this && i[e].queue === a && (i[e].anim.stop(!0), i.splice(e, 1));
                for (e = 0; e < o; e++) n[e] && n[e].finish && n[e].finish.call(this);
                delete t.finish
            })
        }
    }), S.each(["toggle", "show", "hide"], function(e, r) {
        var i = S.fn[r];
        S.fn[r] = function(e, t, n) {
            return null == e || "boolean" == typeof e ? i.apply(this, arguments) : this.animate(st(r, !0), e, t, n)
        }
    }), S.each({
        slideDown: st("show"),
        slideUp: st("hide"),
        slideToggle: st("toggle"),
        fadeIn: {
            opacity: "show"
        },
        fadeOut: {
            opacity: "hide"
        },
        fadeToggle: {
            opacity: "toggle"
        }
    }, function(e, r) {
        S.fn[e] = function(e, t, n) {
            return this.animate(r, e, t, n)
        }
    }), S.timers = [], S.fx.tick = function() {
        var e, t = 0,
            n = S.timers;
        for (Ze = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
        n.length || S.fx.stop(), Ze = void 0
    }, S.fx.timer = function(e) {
        S.timers.push(e), S.fx.start()
    }, S.fx.interval = 13, S.fx.start = function() {
        et || (et = !0, ot())
    }, S.fx.stop = function() {
        et = null
    }, S.fx.speeds = {
        slow: 600,
        fast: 200,
        _default: 400
    }, S.fn.delay = function(r, e) {
        return r = S.fx && S.fx.speeds[r] || r, e = e || "fx", this.queue(e, function(e, t) {
            var n = C.setTimeout(e, r);
            t.stop = function() {
                C.clearTimeout(n)
            }
        })
    }, tt = E.createElement("input"), nt = E.createElement("select").appendChild(E.createElement("option")), tt.type = "checkbox", y.checkOn = "" !== tt.value, y.optSelected = nt.selected, (tt = E.createElement("input")).value = "t", tt.type = "radio", y.radioValue = "t" === tt.value;
    var ct, ft = S.expr.attrHandle;
    S.fn.extend({
        attr: function(e, t) {
            return $(this, S.attr, e, t, 1 < arguments.length)
        },
        removeAttr: function(e) {
            return this.each(function() {
                S.removeAttr(this, e)
            })
        }
    }), S.extend({
        attr: function(e, t, n) {
            var r, i, o = e.nodeType;
            if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? S.prop(e, t, n) : (1 === o && S.isXMLDoc(e) || (i = S.attrHooks[t.toLowerCase()] || (S.expr.match.bool.test(t) ? ct : void 0)), void 0 !== n ? null === n ? void S.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = S.find.attr(e, t)) ? void 0 : r)
        },
        attrHooks: {
            type: {
                set: function(e, t) {
                    if (!y.radioValue && "radio" === t && A(e, "input")) {
                        var n = e.value;
                        return e.setAttribute("type", t), n && (e.value = n), t
                    }
                }
            }
        },
        removeAttr: function(e, t) {
            var n, r = 0,
                i = t && t.match(P);
            if (i && 1 === e.nodeType)
                while (n = i[r++]) e.removeAttribute(n)
        }
    }), ct = {
        set: function(e, t, n) {
            return !1 === t ? S.removeAttr(e, n) : e.setAttribute(n, n), n
        }
    }, S.each(S.expr.match.bool.source.match(/\w+/g), function(e, t) {
        var a = ft[t] || S.find.attr;
        ft[t] = function(e, t, n) {
            var r, i, o = t.toLowerCase();
            return n || (i = ft[o], ft[o] = r, r = null != a(e, t, n) ? o : null, ft[o] = i), r
        }
    });
    var pt = /^(?:input|select|textarea|button)$/i,
        dt = /^(?:a|area)$/i;

    function ht(e) {
        return (e.match(P) || []).join(" ")
    }

    function gt(e) {
        return e.getAttribute && e.getAttribute("class") || ""
    }

    function vt(e) {
        return Array.isArray(e) ? e : "string" == typeof e && e.match(P) || []
    }
    S.fn.extend({
        prop: function(e, t) {
            return $(this, S.prop, e, t, 1 < arguments.length)
        },
        removeProp: function(e) {
            return this.each(function() {
                delete this[S.propFix[e] || e]
            })
        }
    }), S.extend({
        prop: function(e, t, n) {
            var r, i, o = e.nodeType;
            if (3 !== o && 8 !== o && 2 !== o) return 1 === o && S.isXMLDoc(e) || (t = S.propFix[t] || t, i = S.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
        },
        propHooks: {
            tabIndex: {
                get: function(e) {
                    var t = S.find.attr(e, "tabindex");
                    return t ? parseInt(t, 10) : pt.test(e.nodeName) || dt.test(e.nodeName) && e.href ? 0 : -1
                }
            }
        },
        propFix: {
            "for": "htmlFor",
            "class": "className"
        }
    }), y.optSelected || (S.propHooks.selected = {
        get: function(e) {
            var t = e.parentNode;
            return t && t.parentNode && t.parentNode.selectedIndex, null
        },
        set: function(e) {
            var t = e.parentNode;
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
        }
    }), S.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        S.propFix[this.toLowerCase()] = this
    }), S.fn.extend({
        addClass: function(t) {
            var e, n, r, i, o, a, s, u = 0;
            if (m(t)) return this.each(function(e) {
                S(this).addClass(t.call(this, e, gt(this)))
            });
            if ((e = vt(t)).length)
                while (n = this[u++])
                    if (i = gt(n), r = 1 === n.nodeType && " " + ht(i) + " ") {
                        a = 0;
                        while (o = e[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                        i !== (s = ht(r)) && n.setAttribute("class", s)
                    } return this
        },
        removeClass: function(t) {
            var e, n, r, i, o, a, s, u = 0;
            if (m(t)) return this.each(function(e) {
                S(this).removeClass(t.call(this, e, gt(this)))
            });
            if (!arguments.length) return this.attr("class", "");
            if ((e = vt(t)).length)
                while (n = this[u++])
                    if (i = gt(n), r = 1 === n.nodeType && " " + ht(i) + " ") {
                        a = 0;
                        while (o = e[a++])
                            while (-1 < r.indexOf(" " + o + " ")) r = r.replace(" " + o + " ", " ");
                        i !== (s = ht(r)) && n.setAttribute("class", s)
                    } return this
        },
        toggleClass: function(i, t) {
            var o = typeof i,
                a = "string" === o || Array.isArray(i);
            return "boolean" == typeof t && a ? t ? this.addClass(i) : this.removeClass(i) : m(i) ? this.each(function(e) {
                S(this).toggleClass(i.call(this, e, gt(this), t), t)
            }) : this.each(function() {
                var e, t, n, r;
                if (a) {
                    t = 0, n = S(this), r = vt(i);
                    while (e = r[t++]) n.hasClass(e) ? n.removeClass(e) : n.addClass(e)
                } else void 0 !== i && "boolean" !== o || ((e = gt(this)) && Y.set(this, "__className__", e), this.setAttribute && this.setAttribute("class", e || !1 === i ? "" : Y.get(this, "__className__") || ""))
            })
        },
        hasClass: function(e) {
            var t, n, r = 0;
            t = " " + e + " ";
            while (n = this[r++])
                if (1 === n.nodeType && -1 < (" " + ht(gt(n)) + " ").indexOf(t)) return !0;
            return !1
        }
    });
    var yt = /\r/g;
    S.fn.extend({
        val: function(n) {
            var r, e, i, t = this[0];
            return arguments.length ? (i = m(n), this.each(function(e) {
                var t;
                1 === this.nodeType && (null == (t = i ? n.call(this, e, S(this).val()) : n) ? t = "" : "number" == typeof t ? t += "" : Array.isArray(t) && (t = S.map(t, function(e) {
                    return null == e ? "" : e + ""
                })), (r = S.valHooks[this.type] || S.valHooks[this.nodeName.toLowerCase()]) && "set" in r && void 0 !== r.set(this, t, "value") || (this.value = t))
            })) : t ? (r = S.valHooks[t.type] || S.valHooks[t.nodeName.toLowerCase()]) && "get" in r && void 0 !== (e = r.get(t, "value")) ? e : "string" == typeof(e = t.value) ? e.replace(yt, "") : null == e ? "" : e : void 0
        }
    }), S.extend({
        valHooks: {
            option: {
                get: function(e) {
                    var t = S.find.attr(e, "value");
                    return null != t ? t : ht(S.text(e))
                }
            },
            select: {
                get: function(e) {
                    var t, n, r, i = e.options,
                        o = e.selectedIndex,
                        a = "select-one" === e.type,
                        s = a ? null : [],
                        u = a ? o + 1 : i.length;
                    for (r = o < 0 ? u : a ? o : 0; r < u; r++)
                        if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !A(n.parentNode, "optgroup"))) {
                            if (t = S(n).val(), a) return t;
                            s.push(t)
                        } return s
                },
                set: function(e, t) {
                    var n, r, i = e.options,
                        o = S.makeArray(t),
                        a = i.length;
                    while (a--)((r = i[a]).selected = -1 < S.inArray(S.valHooks.option.get(r), o)) && (n = !0);
                    return n || (e.selectedIndex = -1), o
                }
            }
        }
    }), S.each(["radio", "checkbox"], function() {
        S.valHooks[this] = {
            set: function(e, t) {
                if (Array.isArray(t)) return e.checked = -1 < S.inArray(S(e).val(), t)
            }
        }, y.checkOn || (S.valHooks[this].get = function(e) {
            return null === e.getAttribute("value") ? "on" : e.value
        })
    }), y.focusin = "onfocusin" in C;
    var mt = /^(?:focusinfocus|focusoutblur)$/,
        xt = function(e) {
            e.stopPropagation()
        };
    S.extend(S.event, {
        trigger: function(e, t, n, r) {
            var i, o, a, s, u, l, c, f, p = [n || E],
                d = v.call(e, "type") ? e.type : e,
                h = v.call(e, "namespace") ? e.namespace.split(".") : [];
            if (o = f = a = n = n || E, 3 !== n.nodeType && 8 !== n.nodeType && !mt.test(d + S.event.triggered) && (-1 < d.indexOf(".") && (d = (h = d.split(".")).shift(), h.sort()), u = d.indexOf(":") < 0 && "on" + d, (e = e[S.expando] ? e : new S.Event(d, "object" == typeof e && e)).isTrigger = r ? 2 : 3, e.namespace = h.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), t = null == t ? [e] : S.makeArray(t, [e]), c = S.event.special[d] || {}, r || !c.trigger || !1 !== c.trigger.apply(n, t))) {
                if (!r && !c.noBubble && !x(n)) {
                    for (s = c.delegateType || d, mt.test(s + d) || (o = o.parentNode); o; o = o.parentNode) p.push(o), a = o;
                    a === (n.ownerDocument || E) && p.push(a.defaultView || a.parentWindow || C)
                }
                i = 0;
                while ((o = p[i++]) && !e.isPropagationStopped()) f = o, e.type = 1 < i ? s : c.bindType || d, (l = (Y.get(o, "events") || Object.create(null))[e.type] && Y.get(o, "handle")) && l.apply(o, t), (l = u && o[u]) && l.apply && V(o) && (e.result = l.apply(o, t), !1 === e.result && e.preventDefault());
                return e.type = d, r || e.isDefaultPrevented() || c._default && !1 !== c._default.apply(p.pop(), t) || !V(n) || u && m(n[d]) && !x(n) && ((a = n[u]) && (n[u] = null), S.event.triggered = d, e.isPropagationStopped() && f.addEventListener(d, xt), n[d](), e.isPropagationStopped() && f.removeEventListener(d, xt), S.event.triggered = void 0, a && (n[u] = a)), e.result
            }
        },
        simulate: function(e, t, n) {
            var r = S.extend(new S.Event, n, {
                type: e,
                isSimulated: !0
            });
            S.event.trigger(r, null, t)
        }
    }), S.fn.extend({
        trigger: function(e, t) {
            return this.each(function() {
                S.event.trigger(e, t, this)
            })
        },
        triggerHandler: function(e, t) {
            var n = this[0];
            if (n) return S.event.trigger(e, t, n, !0)
        }
    }), y.focusin || S.each({
        focus: "focusin",
        blur: "focusout"
    }, function(n, r) {
        var i = function(e) {
            S.event.simulate(r, e.target, S.event.fix(e))
        };
        S.event.special[r] = {
            setup: function() {
                var e = this.ownerDocument || this.document || this,
                    t = Y.access(e, r);
                t || e.addEventListener(n, i, !0), Y.access(e, r, (t || 0) + 1)
            },
            teardown: function() {
                var e = this.ownerDocument || this.document || this,
                    t = Y.access(e, r) - 1;
                t ? Y.access(e, r, t) : (e.removeEventListener(n, i, !0), Y.remove(e, r))
            }
        }
    });
    var bt = C.location,
        wt = {
            guid: Date.now()
        },
        Tt = /\?/;
    S.parseXML = function(e) {
        var t, n;
        if (!e || "string" != typeof e) return null;
        try {
            t = (new C.DOMParser).parseFromString(e, "text/xml")
        } catch (e) {}
        return n = t && t.getElementsByTagName("parsererror")[0], t && !n || S.error("Invalid XML: " + (n ? S.map(n.childNodes, function(e) {
            return e.textContent
        }).join("\n") : e)), t
    };
    var Ct = /\[\]$/,
        Et = /\r?\n/g,
        St = /^(?:submit|button|image|reset|file)$/i,
        kt = /^(?:input|select|textarea|keygen)/i;

    function At(n, e, r, i) {
        var t;
        if (Array.isArray(e)) S.each(e, function(e, t) {
            r || Ct.test(n) ? i(n, t) : At(n + "[" + ("object" == typeof t && null != t ? e : "") + "]", t, r, i)
        });
        else if (r || "object" !== w(e)) i(n, e);
        else
            for (t in e) At(n + "[" + t + "]", e[t], r, i)
    }
    S.param = function(e, t) {
        var n, r = [],
            i = function(e, t) {
                var n = m(t) ? t() : t;
                r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
            };
        if (null == e) return "";
        if (Array.isArray(e) || e.jquery && !S.isPlainObject(e)) S.each(e, function() {
            i(this.name, this.value)
        });
        else
            for (n in e) At(n, e[n], t, i);
        return r.join("&")
    }, S.fn.extend({
        serialize: function() {
            return S.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var e = S.prop(this, "elements");
                return e ? S.makeArray(e) : this
            }).filter(function() {
                var e = this.type;
                return this.name && !S(this).is(":disabled") && kt.test(this.nodeName) && !St.test(e) && (this.checked || !pe.test(e))
            }).map(function(e, t) {
                var n = S(this).val();
                return null == n ? null : Array.isArray(n) ? S.map(n, function(e) {
                    return {
                        name: t.name,
                        value: e.replace(Et, "\r\n")
                    }
                }) : {
                    name: t.name,
                    value: n.replace(Et, "\r\n")
                }
            }).get()
        }
    });
    var Nt = /%20/g,
        jt = /#.*$/,
        Dt = /([?&])_=[^&]*/,
        qt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Lt = /^(?:GET|HEAD)$/,
        Ht = /^\/\//,
        Ot = {},
        Pt = {},
        Rt = "*/".concat("*"),
        Mt = E.createElement("a");

    function It(o) {
        return function(e, t) {
            "string" != typeof e && (t = e, e = "*");
            var n, r = 0,
                i = e.toLowerCase().match(P) || [];
            if (m(t))
                while (n = i[r++]) "+" === n[0] ? (n = n.slice(1) || "*", (o[n] = o[n] || []).unshift(t)) : (o[n] = o[n] || []).push(t)
        }
    }

    function Wt(t, i, o, a) {
        var s = {},
            u = t === Pt;

        function l(e) {
            var r;
            return s[e] = !0, S.each(t[e] || [], function(e, t) {
                var n = t(i, o, a);
                return "string" != typeof n || u || s[n] ? u ? !(r = n) : void 0 : (i.dataTypes.unshift(n), l(n), !1)
            }), r
        }
        return l(i.dataTypes[0]) || !s["*"] && l("*")
    }

    function Ft(e, t) {
        var n, r, i = S.ajaxSettings.flatOptions || {};
        for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
        return r && S.extend(!0, e, r), e
    }
    Mt.href = bt.href, S.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: bt.href,
            type: "GET",
            isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(bt.protocol),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": Rt,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": JSON.parse,
                "text xml": S.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(e, t) {
            return t ? Ft(Ft(e, S.ajaxSettings), t) : Ft(S.ajaxSettings, e)
        },
        ajaxPrefilter: It(Ot),
        ajaxTransport: It(Pt),
        ajax: function(e, t) {
            "object" == typeof e && (t = e, e = void 0), t = t || {};
            var c, f, p, n, d, r, h, g, i, o, v = S.ajaxSetup({}, t),
                y = v.context || v,
                m = v.context && (y.nodeType || y.jquery) ? S(y) : S.event,
                x = S.Deferred(),
                b = S.Callbacks("once memory"),
                w = v.statusCode || {},
                a = {},
                s = {},
                u = "canceled",
                T = {
                    readyState: 0,
                    getResponseHeader: function(e) {
                        var t;
                        if (h) {
                            if (!n) {
                                n = {};
                                while (t = qt.exec(p)) n[t[1].toLowerCase() + " "] = (n[t[1].toLowerCase() + " "] || []).concat(t[2])
                            }
                            t = n[e.toLowerCase() + " "]
                        }
                        return null == t ? null : t.join(", ")
                    },
                    getAllResponseHeaders: function() {
                        return h ? p : null
                    },
                    setRequestHeader: function(e, t) {
                        return null == h && (e = s[e.toLowerCase()] = s[e.toLowerCase()] || e, a[e] = t), this
                    },
                    overrideMimeType: function(e) {
                        return null == h && (v.mimeType = e), this
                    },
                    statusCode: function(e) {
                        var t;
                        if (e)
                            if (h) T.always(e[T.status]);
                            else
                                for (t in e) w[t] = [w[t], e[t]];
                        return this
                    },
                    abort: function(e) {
                        var t = e || u;
                        return c && c.abort(t), l(0, t), this
                    }
                };
            if (x.promise(T), v.url = ((e || v.url || bt.href) + "").replace(Ht, bt.protocol + "//"), v.type = t.method || t.type || v.method || v.type, v.dataTypes = (v.dataType || "*").toLowerCase().match(P) || [""], null == v.crossDomain) {
                r = E.createElement("a");
                try {
                    r.href = v.url, r.href = r.href, v.crossDomain = Mt.protocol + "//" + Mt.host != r.protocol + "//" + r.host
                } catch (e) {
                    v.crossDomain = !0
                }
            }
            if (v.data && v.processData && "string" != typeof v.data && (v.data = S.param(v.data, v.traditional)), Wt(Ot, v, t, T), h) return T;
            for (i in (g = S.event && v.global) && 0 == S.active++ && S.event.trigger("ajaxStart"), v.type = v.type.toUpperCase(), v.hasContent = !Lt.test(v.type), f = v.url.replace(jt, ""), v.hasContent ? v.data && v.processData && 0 === (v.contentType || "").indexOf("application/x-www-form-urlencoded") && (v.data = v.data.replace(Nt, "+")) : (o = v.url.slice(f.length), v.data && (v.processData || "string" == typeof v.data) && (f += (Tt.test(f) ? "&" : "?") + v.data, delete v.data), !1 === v.cache && (f = f.replace(Dt, "$1"), o = (Tt.test(f) ? "&" : "?") + "_=" + wt.guid++ + o), v.url = f + o), v.ifModified && (S.lastModified[f] && T.setRequestHeader("If-Modified-Since", S.lastModified[f]), S.etag[f] && T.setRequestHeader("If-None-Match", S.etag[f])), (v.data && v.hasContent && !1 !== v.contentType || t.contentType) && T.setRequestHeader("Content-Type", v.contentType), T.setRequestHeader("Accept", v.dataTypes[0] && v.accepts[v.dataTypes[0]] ? v.accepts[v.dataTypes[0]] + ("*" !== v.dataTypes[0] ? ", " + Rt + "; q=0.01" : "") : v.accepts["*"]), v.headers) T.setRequestHeader(i, v.headers[i]);
            if (v.beforeSend && (!1 === v.beforeSend.call(y, T, v) || h)) return T.abort();
            if (u = "abort", b.add(v.complete), T.done(v.success), T.fail(v.error), c = Wt(Pt, v, t, T)) {
                if (T.readyState = 1, g && m.trigger("ajaxSend", [T, v]), h) return T;
                v.async && 0 < v.timeout && (d = C.setTimeout(function() {
                    T.abort("timeout")
                }, v.timeout));
                try {
                    h = !1, c.send(a, l)
                } catch (e) {
                    if (h) throw e;
                    l(-1, e)
                }
            } else l(-1, "No Transport");

            function l(e, t, n, r) {
                var i, o, a, s, u, l = t;
                h || (h = !0, d && C.clearTimeout(d), c = void 0, p = r || "", T.readyState = 0 < e ? 4 : 0, i = 200 <= e && e < 300 || 304 === e, n && (s = function(e, t, n) {
                    var r, i, o, a, s = e.contents,
                        u = e.dataTypes;
                    while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                    if (r)
                        for (i in s)
                            if (s[i] && s[i].test(r)) {
                                u.unshift(i);
                                break
                            } if (u[0] in n) o = u[0];
                    else {
                        for (i in n) {
                            if (!u[0] || e.converters[i + " " + u[0]]) {
                                o = i;
                                break
                            }
                            a || (a = i)
                        }
                        o = o || a
                    }
                    if (o) return o !== u[0] && u.unshift(o), n[o]
                }(v, T, n)), !i && -1 < S.inArray("script", v.dataTypes) && S.inArray("json", v.dataTypes) < 0 && (v.converters["text script"] = function() {}), s = function(e, t, n, r) {
                    var i, o, a, s, u, l = {},
                        c = e.dataTypes.slice();
                    if (c[1])
                        for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
                    o = c.shift();
                    while (o)
                        if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift())
                            if ("*" === o) o = u;
                            else if ("*" !== u && u !== o) {
                        if (!(a = l[u + " " + o] || l["* " + o]))
                            for (i in l)
                                if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                                    !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1]));
                                    break
                                } if (!0 !== a)
                            if (a && e["throws"]) t = a(t);
                            else try {
                                t = a(t)
                            } catch (e) {
                                return {
                                    state: "parsererror",
                                    error: a ? e : "No conversion from " + u + " to " + o
                                }
                            }
                    }
                    return {
                        state: "success",
                        data: t
                    }
                }(v, s, T, i), i ? (v.ifModified && ((u = T.getResponseHeader("Last-Modified")) && (S.lastModified[f] = u), (u = T.getResponseHeader("etag")) && (S.etag[f] = u)), 204 === e || "HEAD" === v.type ? l = "nocontent" : 304 === e ? l = "notmodified" : (l = s.state, o = s.data, i = !(a = s.error))) : (a = l, !e && l || (l = "error", e < 0 && (e = 0))), T.status = e, T.statusText = (t || l) + "", i ? x.resolveWith(y, [o, l, T]) : x.rejectWith(y, [T, l, a]), T.statusCode(w), w = void 0, g && m.trigger(i ? "ajaxSuccess" : "ajaxError", [T, v, i ? o : a]), b.fireWith(y, [T, l]), g && (m.trigger("ajaxComplete", [T, v]), --S.active || S.event.trigger("ajaxStop")))
            }
            return T
        },
        getJSON: function(e, t, n) {
            return S.get(e, t, n, "json")
        },
        getScript: function(e, t) {
            return S.get(e, void 0, t, "script")
        }
    }), S.each(["get", "post"], function(e, i) {
        S[i] = function(e, t, n, r) {
            return m(t) && (r = r || n, n = t, t = void 0), S.ajax(S.extend({
                url: e,
                type: i,
                dataType: r,
                data: t,
                success: n
            }, S.isPlainObject(e) && e))
        }
    }), S.ajaxPrefilter(function(e) {
        var t;
        for (t in e.headers) "content-type" === t.toLowerCase() && (e.contentType = e.headers[t] || "")
    }), S._evalUrl = function(e, t, n) {
        return S.ajax({
            url: e,
            type: "GET",
            dataType: "script",
            cache: !0,
            async: !1,
            global: !1,
            converters: {
                "text script": function() {}
            },
            dataFilter: function(e) {
                S.globalEval(e, t, n)
            }
        })
    }, S.fn.extend({
        wrapAll: function(e) {
            var t;
            return this[0] && (m(e) && (e = e.call(this[0])), t = S(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
                var e = this;
                while (e.firstElementChild) e = e.firstElementChild;
                return e
            }).append(this)), this
        },
        wrapInner: function(n) {
            return m(n) ? this.each(function(e) {
                S(this).wrapInner(n.call(this, e))
            }) : this.each(function() {
                var e = S(this),
                    t = e.contents();
                t.length ? t.wrapAll(n) : e.append(n)
            })
        },
        wrap: function(t) {
            var n = m(t);
            return this.each(function(e) {
                S(this).wrapAll(n ? t.call(this, e) : t)
            })
        },
        unwrap: function(e) {
            return this.parent(e).not("body").each(function() {
                S(this).replaceWith(this.childNodes)
            }), this
        }
    }), S.expr.pseudos.hidden = function(e) {
        return !S.expr.pseudos.visible(e)
    }, S.expr.pseudos.visible = function(e) {
        return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
    }, S.ajaxSettings.xhr = function() {
        try {
            return new C.XMLHttpRequest
        } catch (e) {}
    };
    var Bt = {
            0: 200,
            1223: 204
        },
        $t = S.ajaxSettings.xhr();
    y.cors = !!$t && "withCredentials" in $t, y.ajax = $t = !!$t, S.ajaxTransport(function(i) {
        var o, a;
        if (y.cors || $t && !i.crossDomain) return {
            send: function(e, t) {
                var n, r = i.xhr();
                if (r.open(i.type, i.url, i.async, i.username, i.password), i.xhrFields)
                    for (n in i.xhrFields) r[n] = i.xhrFields[n];
                for (n in i.mimeType && r.overrideMimeType && r.overrideMimeType(i.mimeType), i.crossDomain || e["X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest"), e) r.setRequestHeader(n, e[n]);
                o = function(e) {
                    return function() {
                        o && (o = a = r.onload = r.onerror = r.onabort = r.ontimeout = r.onreadystatechange = null, "abort" === e ? r.abort() : "error" === e ? "number" != typeof r.status ? t(0, "error") : t(r.status, r.statusText) : t(Bt[r.status] || r.status, r.statusText, "text" !== (r.responseType || "text") || "string" != typeof r.responseText ? {
                            binary: r.response
                        } : {
                            text: r.responseText
                        }, r.getAllResponseHeaders()))
                    }
                }, r.onload = o(), a = r.onerror = r.ontimeout = o("error"), void 0 !== r.onabort ? r.onabort = a : r.onreadystatechange = function() {
                    4 === r.readyState && C.setTimeout(function() {
                        o && a()
                    })
                }, o = o("abort");
                try {
                    r.send(i.hasContent && i.data || null)
                } catch (e) {
                    if (o) throw e
                }
            },
            abort: function() {
                o && o()
            }
        }
    }), S.ajaxPrefilter(function(e) {
        e.crossDomain && (e.contents.script = !1)
    }), S.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /\b(?:java|ecma)script\b/
        },
        converters: {
            "text script": function(e) {
                return S.globalEval(e), e
            }
        }
    }), S.ajaxPrefilter("script", function(e) {
        void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
    }), S.ajaxTransport("script", function(n) {
        var r, i;
        if (n.crossDomain || n.scriptAttrs) return {
            send: function(e, t) {
                r = S("<script>").attr(n.scriptAttrs || {}).prop({
                    charset: n.scriptCharset,
                    src: n.url
                }).on("load error", i = function(e) {
                    r.remove(), i = null, e && t("error" === e.type ? 404 : 200, e.type)
                }), E.head.appendChild(r[0])
            },
            abort: function() {
                i && i()
            }
        }
    });
    var _t, zt = [],
        Ut = /(=)\?(?=&|$)|\?\?/;
    S.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var e = zt.pop() || S.expando + "_" + wt.guid++;
            return this[e] = !0, e
        }
    }), S.ajaxPrefilter("json jsonp", function(e, t, n) {
        var r, i, o, a = !1 !== e.jsonp && (Ut.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Ut.test(e.data) && "data");
        if (a || "jsonp" === e.dataTypes[0]) return r = e.jsonpCallback = m(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback, a ? e[a] = e[a].replace(Ut, "$1" + r) : !1 !== e.jsonp && (e.url += (Tt.test(e.url) ? "&" : "?") + e.jsonp + "=" + r), e.converters["script json"] = function() {
            return o || S.error(r + " was not called"), o[0]
        }, e.dataTypes[0] = "json", i = C[r], C[r] = function() {
            o = arguments
        }, n.always(function() {
            void 0 === i ? S(C).removeProp(r) : C[r] = i, e[r] && (e.jsonpCallback = t.jsonpCallback, zt.push(r)), o && m(i) && i(o[0]), o = i = void 0
        }), "script"
    }), y.createHTMLDocument = ((_t = E.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === _t.childNodes.length), S.parseHTML = function(e, t, n) {
        return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t, t = !1), t || (y.createHTMLDocument ? ((r = (t = E.implementation.createHTMLDocument("")).createElement("base")).href = E.location.href, t.head.appendChild(r)) : t = E), o = !n && [], (i = N.exec(e)) ? [t.createElement(i[1])] : (i = xe([e], t, o), o && o.length && S(o).remove(), S.merge([], i.childNodes)));
        var r, i, o
    }, S.fn.load = function(e, t, n) {
        var r, i, o, a = this,
            s = e.indexOf(" ");
        return -1 < s && (r = ht(e.slice(s)), e = e.slice(0, s)), m(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), 0 < a.length && S.ajax({
            url: e,
            type: i || "GET",
            dataType: "html",
            data: t
        }).done(function(e) {
            o = arguments, a.html(r ? S("<div>").append(S.parseHTML(e)).find(r) : e)
        }).always(n && function(e, t) {
            a.each(function() {
                n.apply(this, o || [e.responseText, t, e])
            })
        }), this
    }, S.expr.pseudos.animated = function(t) {
        return S.grep(S.timers, function(e) {
            return t === e.elem
        }).length
    }, S.offset = {
        setOffset: function(e, t, n) {
            var r, i, o, a, s, u, l = S.css(e, "position"),
                c = S(e),
                f = {};
            "static" === l && (e.style.position = "relative"), s = c.offset(), o = S.css(e, "top"), u = S.css(e, "left"), ("absolute" === l || "fixed" === l) && -1 < (o + u).indexOf("auto") ? (a = (r = c.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), m(t) && (t = t.call(e, n, S.extend({}, s))), null != t.top && (f.top = t.top - s.top + a), null != t.left && (f.left = t.left - s.left + i), "using" in t ? t.using.call(e, f) : c.css(f)
        }
    }, S.fn.extend({
        offset: function(t) {
            if (arguments.length) return void 0 === t ? this : this.each(function(e) {
                S.offset.setOffset(this, t, e)
            });
            var e, n, r = this[0];
            return r ? r.getClientRects().length ? (e = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
                top: e.top + n.pageYOffset,
                left: e.left + n.pageXOffset
            }) : {
                top: 0,
                left: 0
            } : void 0
        },
        position: function() {
            if (this[0]) {
                var e, t, n, r = this[0],
                    i = {
                        top: 0,
                        left: 0
                    };
                if ("fixed" === S.css(r, "position")) t = r.getBoundingClientRect();
                else {
                    t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;
                    while (e && (e === n.body || e === n.documentElement) && "static" === S.css(e, "position")) e = e.parentNode;
                    e && e !== r && 1 === e.nodeType && ((i = S(e).offset()).top += S.css(e, "borderTopWidth", !0), i.left += S.css(e, "borderLeftWidth", !0))
                }
                return {
                    top: t.top - i.top - S.css(r, "marginTop", !0),
                    left: t.left - i.left - S.css(r, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                var e = this.offsetParent;
                while (e && "static" === S.css(e, "position")) e = e.offsetParent;
                return e || re
            })
        }
    }), S.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(t, i) {
        var o = "pageYOffset" === i;
        S.fn[t] = function(e) {
            return $(this, function(e, t, n) {
                var r;
                if (x(e) ? r = e : 9 === e.nodeType && (r = e.defaultView), void 0 === n) return r ? r[i] : e[t];
                r ? r.scrollTo(o ? r.pageXOffset : n, o ? n : r.pageYOffset) : e[t] = n
            }, t, e, arguments.length)
        }
    }), S.each(["top", "left"], function(e, n) {
        S.cssHooks[n] = Fe(y.pixelPosition, function(e, t) {
            if (t) return t = We(e, n), Pe.test(t) ? S(e).position()[n] + "px" : t
        })
    }), S.each({
        Height: "height",
        Width: "width"
    }, function(a, s) {
        S.each({
            padding: "inner" + a,
            content: s,
            "": "outer" + a
        }, function(r, o) {
            S.fn[o] = function(e, t) {
                var n = arguments.length && (r || "boolean" != typeof e),
                    i = r || (!0 === e || !0 === t ? "margin" : "border");
                return $(this, function(e, t, n) {
                    var r;
                    return x(e) ? 0 === o.indexOf("outer") ? e["inner" + a] : e.document.documentElement["client" + a] : 9 === e.nodeType ? (r = e.documentElement, Math.max(e.body["scroll" + a], r["scroll" + a], e.body["offset" + a], r["offset" + a], r["client" + a])) : void 0 === n ? S.css(e, t, i) : S.style(e, t, n, i)
                }, s, n ? e : void 0, n)
            }
        })
    }), S.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
        S.fn[t] = function(e) {
            return this.on(t, e)
        }
    }), S.fn.extend({
        bind: function(e, t, n) {
            return this.on(e, null, t, n)
        },
        unbind: function(e, t) {
            return this.off(e, null, t)
        },
        delegate: function(e, t, n, r) {
            return this.on(t, e, n, r)
        },
        undelegate: function(e, t, n) {
            return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
        },
        hover: function(e, t) {
            return this.mouseenter(e).mouseleave(t || e)
        }
    }), S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(e, n) {
        S.fn[n] = function(e, t) {
            return 0 < arguments.length ? this.on(n, null, e, t) : this.trigger(n)
        }
    });
    var Xt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
    S.proxy = function(e, t) {
        var n, r, i;
        if ("string" == typeof t && (n = e[t], t = e, e = n), m(e)) return r = s.call(arguments, 2), (i = function() {
            return e.apply(t || this, r.concat(s.call(arguments)))
        }).guid = e.guid = e.guid || S.guid++, i
    }, S.holdReady = function(e) {
        e ? S.readyWait++ : S.ready(!0)
    }, S.isArray = Array.isArray, S.parseJSON = JSON.parse, S.nodeName = A, S.isFunction = m, S.isWindow = x, S.camelCase = X, S.type = w, S.now = Date.now, S.isNumeric = function(e) {
        var t = S.type(e);
        return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
    }, S.trim = function(e) {
        return null == e ? "" : (e + "").replace(Xt, "")
    }, "function" == typeof define && define.amd && define("jquery", [], function() {
        return S
    });
    var Vt = C.jQuery,
        Gt = C.$;
    return S.noConflict = function(e) {
        return C.$ === S && (C.$ = Gt), e && C.jQuery === S && (C.jQuery = Vt), S
    }, "undefined" == typeof e && (C.jQuery = C.$ = S), S
});


/**
 * @popperjs/core v2.9.2 - MIT License
 */

"use strict";
! function(e, t) {
    "object" == typeof exports && "undefined" != typeof module ? t(exports) : "function" == typeof define && define.amd ? define(["exports"], t) : t((e = "undefined" != typeof globalThis ? globalThis : e || self).Popper = {})
}(this, (function(e) {
    function t(e) {
        return {
            width: (e = e.getBoundingClientRect()).width,
            height: e.height,
            top: e.top,
            right: e.right,
            bottom: e.bottom,
            left: e.left,
            x: e.left,
            y: e.top
        }
    }

    function n(e) {
        return null == e ? window : "[object Window]" !== e.toString() ? (e = e.ownerDocument) && e.defaultView || window : e
    }

    function o(e) {
        return {
            scrollLeft: (e = n(e)).pageXOffset,
            scrollTop: e.pageYOffset
        }
    }

    function r(e) {
        return e instanceof n(e).Element || e instanceof Element
    }

    function i(e) {
        return e instanceof n(e).HTMLElement || e instanceof HTMLElement
    }

    function a(e) {
        return "undefined" != typeof ShadowRoot && (e instanceof n(e).ShadowRoot || e instanceof ShadowRoot)
    }

    function s(e) {
        return e ? (e.nodeName || "").toLowerCase() : null
    }

    function f(e) {
        return ((r(e) ? e.ownerDocument : e.document) || window.document).documentElement
    }

    function p(e) {
        return t(f(e)).left + o(e).scrollLeft
    }

    function c(e) {
        return n(e).getComputedStyle(e)
    }

    function l(e) {
        return e = c(e), /auto|scroll|overlay|hidden/.test(e.overflow + e.overflowY + e.overflowX)
    }

    function u(e, r, a) {
        void 0 === a && (a = !1);
        var c = f(r);
        e = t(e);
        var u = i(r),
            d = {
                scrollLeft: 0,
                scrollTop: 0
            },
            m = {
                x: 0,
                y: 0
            };
        return (u || !u && !a) && (("body" !== s(r) || l(c)) && (d = r !== n(r) && i(r) ? {
            scrollLeft: r.scrollLeft,
            scrollTop: r.scrollTop
        } : o(r)), i(r) ? ((m = t(r)).x += r.clientLeft, m.y += r.clientTop) : c && (m.x = p(c))), {
            x: e.left + d.scrollLeft - m.x,
            y: e.top + d.scrollTop - m.y,
            width: e.width,
            height: e.height
        }
    }

    function d(e) {
        var n = t(e),
            o = e.offsetWidth,
            r = e.offsetHeight;
        return 1 >= Math.abs(n.width - o) && (o = n.width), 1 >= Math.abs(n.height - r) && (r = n.height), {
            x: e.offsetLeft,
            y: e.offsetTop,
            width: o,
            height: r
        }
    }

    function m(e) {
        return "html" === s(e) ? e : e.assignedSlot || e.parentNode || (a(e) ? e.host : null) || f(e)
    }

    function h(e) {
        return 0 <= ["html", "body", "#document"].indexOf(s(e)) ? e.ownerDocument.body : i(e) && l(e) ? e : h(m(e))
    }

    function v(e, t) {
        var o;
        void 0 === t && (t = []);
        var r = h(e);
        return e = r === (null == (o = e.ownerDocument) ? void 0 : o.body), o = n(r), r = e ? [o].concat(o.visualViewport || [], l(r) ? r : []) : r, t = t.concat(r), e ? t : t.concat(v(m(r)))
    }

    function g(e) {
        return i(e) && "fixed" !== c(e).position ? e.offsetParent : null
    }

    function y(e) {
        for (var t = n(e), o = g(e); o && 0 <= ["table", "td", "th"].indexOf(s(o)) && "static" === c(o).position;) o = g(o);
        if (o && ("html" === s(o) || "body" === s(o) && "static" === c(o).position)) return t;
        if (!o) e: {
            if (o = -1 !== navigator.userAgent.toLowerCase().indexOf("firefox"), -1 === navigator.userAgent.indexOf("Trident") || !i(e) || "fixed" !== c(e).position)
                for (e = m(e); i(e) && 0 > ["html", "body"].indexOf(s(e));) {
                    var r = c(e);
                    if ("none" !== r.transform || "none" !== r.perspective || "paint" === r.contain || -1 !== ["transform", "perspective"].indexOf(r.willChange) || o && "filter" === r.willChange || o && r.filter && "none" !== r.filter) {
                        o = e;
                        break e
                    }
                    e = e.parentNode
                }
            o = null
        }
        return o || t
    }

    function b(e) {
        function t(e) {
            o.add(e.name), [].concat(e.requires || [], e.requiresIfExists || []).forEach((function(e) {
                o.has(e) || (e = n.get(e)) && t(e)
            })), r.push(e)
        }
        var n = new Map,
            o = new Set,
            r = [];
        return e.forEach((function(e) {
            n.set(e.name, e)
        })), e.forEach((function(e) {
            o.has(e.name) || t(e)
        })), r
    }

    function w(e) {
        var t;
        return function() {
            return t || (t = new Promise((function(n) {
                Promise.resolve().then((function() {
                    t = void 0, n(e())
                }))
            }))), t
        }
    }

    function x(e) {
        return e.split("-")[0]
    }

    function O(e, t) {
        var n = t.getRootNode && t.getRootNode();
        if (e.contains(t)) return !0;
        if (n && a(n))
            do {
                if (t && e.isSameNode(t)) return !0;
                t = t.parentNode || t.host
            } while (t);
        return !1
    }

    function j(e) {
        return Object.assign({}, e, {
            left: e.x,
            top: e.y,
            right: e.x + e.width,
            bottom: e.y + e.height
        })
    }

    function E(e, r) {
        if ("viewport" === r) {
            r = n(e);
            var a = f(e);
            r = r.visualViewport;
            var s = a.clientWidth;
            a = a.clientHeight;
            var l = 0,
                u = 0;
            r && (s = r.width, a = r.height, /^((?!chrome|android).)*safari/i.test(navigator.userAgent) || (l = r.offsetLeft, u = r.offsetTop)), e = j(e = {
                width: s,
                height: a,
                x: l + p(e),
                y: u
            })
        } else i(r) ? ((e = t(r)).top += r.clientTop, e.left += r.clientLeft, e.bottom = e.top + r.clientHeight, e.right = e.left + r.clientWidth, e.width = r.clientWidth, e.height = r.clientHeight, e.x = e.left, e.y = e.top) : (u = f(e), e = f(u), s = o(u), r = null == (a = u.ownerDocument) ? void 0 : a.body, a = _(e.scrollWidth, e.clientWidth, r ? r.scrollWidth : 0, r ? r.clientWidth : 0), l = _(e.scrollHeight, e.clientHeight, r ? r.scrollHeight : 0, r ? r.clientHeight : 0), u = -s.scrollLeft + p(u), s = -s.scrollTop, "rtl" === c(r || e).direction && (u += _(e.clientWidth, r ? r.clientWidth : 0) - a), e = j({
            width: a,
            height: l,
            x: u,
            y: s
        }));
        return e
    }

    function D(e, t, n) {
        return t = "clippingParents" === t ? function(e) {
            var t = v(m(e)),
                n = 0 <= ["absolute", "fixed"].indexOf(c(e).position) && i(e) ? y(e) : e;
            return r(n) ? t.filter((function(e) {
                return r(e) && O(e, n) && "body" !== s(e)
            })) : []
        }(e) : [].concat(t), (n = (n = [].concat(t, [n])).reduce((function(t, n) {
            return n = E(e, n), t.top = _(n.top, t.top), t.right = U(n.right, t.right), t.bottom = U(n.bottom, t.bottom), t.left = _(n.left, t.left), t
        }), E(e, n[0]))).width = n.right - n.left, n.height = n.bottom - n.top, n.x = n.left, n.y = n.top, n
    }

    function L(e) {
        return 0 <= ["top", "bottom"].indexOf(e) ? "x" : "y"
    }

    function P(e) {
        var t = e.reference,
            n = e.element,
            o = (e = e.placement) ? x(e) : null;
        e = e ? e.split("-")[1] : null;
        var r = t.x + t.width / 2 - n.width / 2,
            i = t.y + t.height / 2 - n.height / 2;
        switch (o) {
            case "top":
                r = {
                    x: r,
                    y: t.y - n.height
                };
                break;
            case "bottom":
                r = {
                    x: r,
                    y: t.y + t.height
                };
                break;
            case "right":
                r = {
                    x: t.x + t.width,
                    y: i
                };
                break;
            case "left":
                r = {
                    x: t.x - n.width,
                    y: i
                };
                break;
            default:
                r = {
                    x: t.x,
                    y: t.y
                }
        }
        if (null != (o = o ? L(o) : null)) switch (i = "y" === o ? "height" : "width", e) {
            case "start":
                r[o] -= t[i] / 2 - n[i] / 2;
                break;
            case "end":
                r[o] += t[i] / 2 - n[i] / 2
        }
        return r
    }

    function M(e) {
        return Object.assign({}, {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        }, e)
    }

    function k(e, t) {
        return t.reduce((function(t, n) {
            return t[n] = e, t
        }), {})
    }

    function A(e, n) {
        void 0 === n && (n = {});
        var o = n;
        n = void 0 === (n = o.placement) ? e.placement : n;
        var i = o.boundary,
            a = void 0 === i ? "clippingParents" : i,
            s = void 0 === (i = o.rootBoundary) ? "viewport" : i;
        i = void 0 === (i = o.elementContext) ? "popper" : i;
        var p = o.altBoundary,
            c = void 0 !== p && p;
        o = M("number" != typeof(o = void 0 === (o = o.padding) ? 0 : o) ? o : k(o, C));
        var l = e.elements.reference;
        p = e.rects.popper, a = D(r(c = e.elements[c ? "popper" === i ? "reference" : "popper" : i]) ? c : c.contextElement || f(e.elements.popper), a, s), c = P({
            reference: s = t(l),
            element: p,
            strategy: "absolute",
            placement: n
        }), p = j(Object.assign({}, p, c)), s = "popper" === i ? p : s;
        var u = {
            top: a.top - s.top + o.top,
            bottom: s.bottom - a.bottom + o.bottom,
            left: a.left - s.left + o.left,
            right: s.right - a.right + o.right
        };
        if (e = e.modifiersData.offset, "popper" === i && e) {
            var d = e[n];
            Object.keys(u).forEach((function(e) {
                var t = 0 <= ["right", "bottom"].indexOf(e) ? 1 : -1,
                    n = 0 <= ["top", "bottom"].indexOf(e) ? "y" : "x";
                u[e] += d[n] * t
            }))
        }
        return u
    }

    function W() {
        for (var e = arguments.length, t = Array(e), n = 0; n < e; n++) t[n] = arguments[n];
        return !t.some((function(e) {
            return !(e && "function" == typeof e.getBoundingClientRect)
        }))
    }

    function B(e) {
        void 0 === e && (e = {});
        var t = e.defaultModifiers,
            n = void 0 === t ? [] : t,
            o = void 0 === (e = e.defaultOptions) ? F : e;
        return function(e, t, i) {
            function a() {
                f.forEach((function(e) {
                    return e()
                })), f = []
            }
            void 0 === i && (i = o);
            var s = {
                    placement: "bottom",
                    orderedModifiers: [],
                    options: Object.assign({}, F, o),
                    modifiersData: {},
                    elements: {
                        reference: e,
                        popper: t
                    },
                    attributes: {},
                    styles: {}
                },
                f = [],
                p = !1,
                c = {
                    state: s,
                    setOptions: function(i) {
                        return a(), s.options = Object.assign({}, o, s.options, i), s.scrollParents = {
                            reference: r(e) ? v(e) : e.contextElement ? v(e.contextElement) : [],
                            popper: v(t)
                        }, i = function(e) {
                            var t = b(e);
                            return I.reduce((function(e, n) {
                                return e.concat(t.filter((function(e) {
                                    return e.phase === n
                                })))
                            }), [])
                        }(function(e) {
                            var t = e.reduce((function(e, t) {
                                var n = e[t.name];
                                return e[t.name] = n ? Object.assign({}, n, t, {
                                    options: Object.assign({}, n.options, t.options),
                                    data: Object.assign({}, n.data, t.data)
                                }) : t, e
                            }), {});
                            return Object.keys(t).map((function(e) {
                                return t[e]
                            }))
                        }([].concat(n, s.options.modifiers))), s.orderedModifiers = i.filter((function(e) {
                            return e.enabled
                        })), s.orderedModifiers.forEach((function(e) {
                            var t = e.name,
                                n = e.options;
                            n = void 0 === n ? {} : n, "function" == typeof(e = e.effect) && (t = e({
                                state: s,
                                name: t,
                                instance: c,
                                options: n
                            }), f.push(t || function() {}))
                        })), c.update()
                    },
                    forceUpdate: function() {
                        if (!p) {
                            var e = s.elements,
                                t = e.reference;
                            if (W(t, e = e.popper))
                                for (s.rects = {
                                        reference: u(t, y(e), "fixed" === s.options.strategy),
                                        popper: d(e)
                                    }, s.reset = !1, s.placement = s.options.placement, s.orderedModifiers.forEach((function(e) {
                                        return s.modifiersData[e.name] = Object.assign({}, e.data)
                                    })), t = 0; t < s.orderedModifiers.length; t++)
                                    if (!0 === s.reset) s.reset = !1, t = -1;
                                    else {
                                        var n = s.orderedModifiers[t];
                                        e = n.fn;
                                        var o = n.options;
                                        o = void 0 === o ? {} : o, n = n.name, "function" == typeof e && (s = e({
                                            state: s,
                                            options: o,
                                            name: n,
                                            instance: c
                                        }) || s)
                                    }
                        }
                    },
                    update: w((function() {
                        return new Promise((function(e) {
                            c.forceUpdate(), e(s)
                        }))
                    })),
                    destroy: function() {
                        a(), p = !0
                    }
                };
            return W(e, t) ? (c.setOptions(i).then((function(e) {
                !p && i.onFirstUpdate && i.onFirstUpdate(e)
            })), c) : c
        }
    }

    function T(e) {
        var t, o = e.popper,
            r = e.popperRect,
            i = e.placement,
            a = e.offsets,
            s = e.position,
            p = e.gpuAcceleration,
            l = e.adaptive;
        if (!0 === (e = e.roundOffsets)) {
            e = a.y;
            var u = window.devicePixelRatio || 1;
            e = {
                x: z(z(a.x * u) / u) || 0,
                y: z(z(e * u) / u) || 0
            }
        } else e = "function" == typeof e ? e(a) : a;
        e = void 0 === (e = (u = e).x) ? 0 : e, u = void 0 === (u = u.y) ? 0 : u;
        var d = a.hasOwnProperty("x");
        a = a.hasOwnProperty("y");
        var m, h = "left",
            v = "top",
            g = window;
        if (l) {
            var b = y(o),
                w = "clientHeight",
                x = "clientWidth";
            b === n(o) && ("static" !== c(b = f(o)).position && (w = "scrollHeight", x = "scrollWidth")), "top" === i && (v = "bottom", u -= b[w] - r.height, u *= p ? 1 : -1), "left" === i && (h = "right", e -= b[x] - r.width, e *= p ? 1 : -1)
        }
        return o = Object.assign({
            position: s
        }, l && J), p ? Object.assign({}, o, ((m = {})[v] = a ? "0" : "", m[h] = d ? "0" : "", m.transform = 2 > (g.devicePixelRatio || 1) ? "translate(" + e + "px, " + u + "px)" : "translate3d(" + e + "px, " + u + "px, 0)", m)) : Object.assign({}, o, ((t = {})[v] = a ? u + "px" : "", t[h] = d ? e + "px" : "", t.transform = "", t))
    }

    function H(e) {
        return e.replace(/left|right|bottom|top/g, (function(e) {
            return $[e]
        }))
    }

    function R(e) {
        return e.replace(/start|end/g, (function(e) {
            return ee[e]
        }))
    }

    function S(e, t, n) {
        return void 0 === n && (n = {
            x: 0,
            y: 0
        }), {
            top: e.top - t.height - n.y,
            right: e.right - t.width + n.x,
            bottom: e.bottom - t.height + n.y,
            left: e.left - t.width - n.x
        }
    }

    function q(e) {
        return ["top", "right", "bottom", "left"].some((function(t) {
            return 0 <= e[t]
        }))
    }
    var C = ["top", "bottom", "right", "left"],
        N = C.reduce((function(e, t) {
            return e.concat([t + "-start", t + "-end"])
        }), []),
        V = [].concat(C, ["auto"]).reduce((function(e, t) {
            return e.concat([t, t + "-start", t + "-end"])
        }), []),
        I = "beforeRead read afterRead beforeMain main afterMain beforeWrite write afterWrite".split(" "),
        _ = Math.max,
        U = Math.min,
        z = Math.round,
        F = {
            placement: "bottom",
            modifiers: [],
            strategy: "absolute"
        },
        X = {
            passive: !0
        },
        Y = {
            name: "eventListeners",
            enabled: !0,
            phase: "write",
            fn: function() {},
            effect: function(e) {
                var t = e.state,
                    o = e.instance,
                    r = (e = e.options).scroll,
                    i = void 0 === r || r,
                    a = void 0 === (e = e.resize) || e,
                    s = n(t.elements.popper),
                    f = [].concat(t.scrollParents.reference, t.scrollParents.popper);
                return i && f.forEach((function(e) {
                        e.addEventListener("scroll", o.update, X)
                    })), a && s.addEventListener("resize", o.update, X),
                    function() {
                        i && f.forEach((function(e) {
                            e.removeEventListener("scroll", o.update, X)
                        })), a && s.removeEventListener("resize", o.update, X)
                    }
            },
            data: {}
        },
        G = {
            name: "popperOffsets",
            enabled: !0,
            phase: "read",
            fn: function(e) {
                var t = e.state;
                t.modifiersData[e.name] = P({
                    reference: t.rects.reference,
                    element: t.rects.popper,
                    strategy: "absolute",
                    placement: t.placement
                })
            },
            data: {}
        },
        J = {
            top: "auto",
            right: "auto",
            bottom: "auto",
            left: "auto"
        },
        K = {
            name: "computeStyles",
            enabled: !0,
            phase: "beforeWrite",
            fn: function(e) {
                var t = e.state,
                    n = e.options;
                e = void 0 === (e = n.gpuAcceleration) || e;
                var o = n.adaptive;
                o = void 0 === o || o, n = void 0 === (n = n.roundOffsets) || n, e = {
                    placement: x(t.placement),
                    popper: t.elements.popper,
                    popperRect: t.rects.popper,
                    gpuAcceleration: e
                }, null != t.modifiersData.popperOffsets && (t.styles.popper = Object.assign({}, t.styles.popper, T(Object.assign({}, e, {
                    offsets: t.modifiersData.popperOffsets,
                    position: t.options.strategy,
                    adaptive: o,
                    roundOffsets: n
                })))), null != t.modifiersData.arrow && (t.styles.arrow = Object.assign({}, t.styles.arrow, T(Object.assign({}, e, {
                    offsets: t.modifiersData.arrow,
                    position: "absolute",
                    adaptive: !1,
                    roundOffsets: n
                })))), t.attributes.popper = Object.assign({}, t.attributes.popper, {
                    "data-popper-placement": t.placement
                })
            },
            data: {}
        },
        Q = {
            name: "applyStyles",
            enabled: !0,
            phase: "write",
            fn: function(e) {
                var t = e.state;
                Object.keys(t.elements).forEach((function(e) {
                    var n = t.styles[e] || {},
                        o = t.attributes[e] || {},
                        r = t.elements[e];
                    i(r) && s(r) && (Object.assign(r.style, n), Object.keys(o).forEach((function(e) {
                        var t = o[e];
                        !1 === t ? r.removeAttribute(e) : r.setAttribute(e, !0 === t ? "" : t)
                    })))
                }))
            },
            effect: function(e) {
                var t = e.state,
                    n = {
                        popper: {
                            position: t.options.strategy,
                            left: "0",
                            top: "0",
                            margin: "0"
                        },
                        arrow: {
                            position: "absolute"
                        },
                        reference: {}
                    };
                return Object.assign(t.elements.popper.style, n.popper), t.styles = n, t.elements.arrow && Object.assign(t.elements.arrow.style, n.arrow),
                    function() {
                        Object.keys(t.elements).forEach((function(e) {
                            var o = t.elements[e],
                                r = t.attributes[e] || {};
                            e = Object.keys(t.styles.hasOwnProperty(e) ? t.styles[e] : n[e]).reduce((function(e, t) {
                                return e[t] = "", e
                            }), {}), i(o) && s(o) && (Object.assign(o.style, e), Object.keys(r).forEach((function(e) {
                                o.removeAttribute(e)
                            })))
                        }))
                    }
            },
            requires: ["computeStyles"]
        },
        Z = {
            name: "offset",
            enabled: !0,
            phase: "main",
            requires: ["popperOffsets"],
            fn: function(e) {
                var t = e.state,
                    n = e.name,
                    o = void 0 === (e = e.options.offset) ? [0, 0] : e,
                    r = (e = V.reduce((function(e, n) {
                        var r = t.rects,
                            i = x(n),
                            a = 0 <= ["left", "top"].indexOf(i) ? -1 : 1,
                            s = "function" == typeof o ? o(Object.assign({}, r, {
                                placement: n
                            })) : o;
                        return r = (r = s[0]) || 0, s = ((s = s[1]) || 0) * a, i = 0 <= ["left", "right"].indexOf(i) ? {
                            x: s,
                            y: r
                        } : {
                            x: r,
                            y: s
                        }, e[n] = i, e
                    }), {}))[t.placement],
                    i = r.x;
                r = r.y, null != t.modifiersData.popperOffsets && (t.modifiersData.popperOffsets.x += i, t.modifiersData.popperOffsets.y += r), t.modifiersData[n] = e
            }
        },
        $ = {
            left: "right",
            right: "left",
            bottom: "top",
            top: "bottom"
        },
        ee = {
            start: "end",
            end: "start"
        },
        te = {
            name: "flip",
            enabled: !0,
            phase: "main",
            fn: function(e) {
                var t = e.state,
                    n = e.options;
                if (e = e.name, !t.modifiersData[e]._skip) {
                    var o = n.mainAxis;
                    o = void 0 === o || o;
                    var r = n.altAxis;
                    r = void 0 === r || r;
                    var i = n.fallbackPlacements,
                        a = n.padding,
                        s = n.boundary,
                        f = n.rootBoundary,
                        p = n.altBoundary,
                        c = n.flipVariations,
                        l = void 0 === c || c,
                        u = n.allowedAutoPlacements;
                    c = x(n = t.options.placement), i = i || (c !== n && l ? function(e) {
                        if ("auto" === x(e)) return [];
                        var t = H(e);
                        return [R(e), t, R(t)]
                    }(n) : [H(n)]);
                    var d = [n].concat(i).reduce((function(e, n) {
                        return e.concat("auto" === x(n) ? function(e, t) {
                            void 0 === t && (t = {});
                            var n = t.boundary,
                                o = t.rootBoundary,
                                r = t.padding,
                                i = t.flipVariations,
                                a = t.allowedAutoPlacements,
                                s = void 0 === a ? V : a,
                                f = t.placement.split("-")[1];
                            0 === (i = (t = f ? i ? N : N.filter((function(e) {
                                return e.split("-")[1] === f
                            })) : C).filter((function(e) {
                                return 0 <= s.indexOf(e)
                            }))).length && (i = t);
                            var p = i.reduce((function(t, i) {
                                return t[i] = A(e, {
                                    placement: i,
                                    boundary: n,
                                    rootBoundary: o,
                                    padding: r
                                })[x(i)], t
                            }), {});
                            return Object.keys(p).sort((function(e, t) {
                                return p[e] - p[t]
                            }))
                        }(t, {
                            placement: n,
                            boundary: s,
                            rootBoundary: f,
                            padding: a,
                            flipVariations: l,
                            allowedAutoPlacements: u
                        }) : n)
                    }), []);
                    n = t.rects.reference, i = t.rects.popper;
                    var m = new Map;
                    c = !0;
                    for (var h = d[0], v = 0; v < d.length; v++) {
                        var g = d[v],
                            y = x(g),
                            b = "start" === g.split("-")[1],
                            w = 0 <= ["top", "bottom"].indexOf(y),
                            O = w ? "width" : "height",
                            j = A(t, {
                                placement: g,
                                boundary: s,
                                rootBoundary: f,
                                altBoundary: p,
                                padding: a
                            });
                        if (b = w ? b ? "right" : "left" : b ? "bottom" : "top", n[O] > i[O] && (b = H(b)), O = H(b), w = [], o && w.push(0 >= j[y]), r && w.push(0 >= j[b], 0 >= j[O]), w.every((function(e) {
                                return e
                            }))) {
                            h = g, c = !1;
                            break
                        }
                        m.set(g, w)
                    }
                    if (c)
                        for (o = function(e) {
                                var t = d.find((function(t) {
                                    if (t = m.get(t)) return t.slice(0, e).every((function(e) {
                                        return e
                                    }))
                                }));
                                if (t) return h = t, "break"
                            }, r = l ? 3 : 1; 0 < r && "break" !== o(r); r--);
                    t.placement !== h && (t.modifiersData[e]._skip = !0, t.placement = h, t.reset = !0)
                }
            },
            requiresIfExists: ["offset"],
            data: {
                _skip: !1
            }
        },
        ne = {
            name: "preventOverflow",
            enabled: !0,
            phase: "main",
            fn: function(e) {
                var t = e.state,
                    n = e.options;
                e = e.name;
                var o = n.mainAxis,
                    r = void 0 === o || o,
                    i = void 0 !== (o = n.altAxis) && o;
                o = void 0 === (o = n.tether) || o;
                var a = n.tetherOffset,
                    s = void 0 === a ? 0 : a,
                    f = A(t, {
                        boundary: n.boundary,
                        rootBoundary: n.rootBoundary,
                        padding: n.padding,
                        altBoundary: n.altBoundary
                    });
                n = x(t.placement);
                var p = t.placement.split("-")[1],
                    c = !p,
                    l = L(n);
                n = "x" === l ? "y" : "x", a = t.modifiersData.popperOffsets;
                var u = t.rects.reference,
                    m = t.rects.popper,
                    h = "function" == typeof s ? s(Object.assign({}, t.rects, {
                        placement: t.placement
                    })) : s;
                if (s = {
                        x: 0,
                        y: 0
                    }, a) {
                    if (r || i) {
                        var v = "y" === l ? "top" : "left",
                            g = "y" === l ? "bottom" : "right",
                            b = "y" === l ? "height" : "width",
                            w = a[l],
                            O = a[l] + f[v],
                            j = a[l] - f[g],
                            E = o ? -m[b] / 2 : 0,
                            D = "start" === p ? u[b] : m[b];
                        p = "start" === p ? -m[b] : -u[b], m = t.elements.arrow, m = o && m ? d(m) : {
                            width: 0,
                            height: 0
                        };
                        var P = t.modifiersData["arrow#persistent"] ? t.modifiersData["arrow#persistent"].padding : {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        };
                        v = P[v], g = P[g], m = _(0, U(u[b], m[b])), D = c ? u[b] / 2 - E - m - v - h : D - m - v - h, u = c ? -u[b] / 2 + E + m + g + h : p + m + g + h, c = t.elements.arrow && y(t.elements.arrow), h = t.modifiersData.offset ? t.modifiersData.offset[t.placement][l] : 0, c = a[l] + D - h - (c ? "y" === l ? c.clientTop || 0 : c.clientLeft || 0 : 0), u = a[l] + u - h, r && (r = o ? U(O, c) : O, j = o ? _(j, u) : j, r = _(r, U(w, j)), a[l] = r, s[l] = r - w), i && (r = (i = a[n]) + f["x" === l ? "top" : "left"], f = i - f["x" === l ? "bottom" : "right"], r = o ? U(r, c) : r, o = o ? _(f, u) : f, o = _(r, U(i, o)), a[n] = o, s[n] = o - i)
                    }
                    t.modifiersData[e] = s
                }
            },
            requiresIfExists: ["offset"]
        },
        oe = {
            name: "arrow",
            enabled: !0,
            phase: "main",
            fn: function(e) {
                var t, n = e.state,
                    o = e.name,
                    r = e.options,
                    i = n.elements.arrow,
                    a = n.modifiersData.popperOffsets,
                    s = x(n.placement);
                if (e = L(s), s = 0 <= ["left", "right"].indexOf(s) ? "height" : "width", i && a) {
                    r = M("number" != typeof(r = "function" == typeof(r = r.padding) ? r(Object.assign({}, n.rects, {
                        placement: n.placement
                    })) : r) ? r : k(r, C));
                    var f = d(i),
                        p = "y" === e ? "top" : "left",
                        c = "y" === e ? "bottom" : "right",
                        l = n.rects.reference[s] + n.rects.reference[e] - a[e] - n.rects.popper[s];
                    a = a[e] - n.rects.reference[e], a = (i = (i = y(i)) ? "y" === e ? i.clientHeight || 0 : i.clientWidth || 0 : 0) / 2 - f[s] / 2 + (l / 2 - a / 2), s = _(r[p], U(a, i - f[s] - r[c])), n.modifiersData[o] = ((t = {})[e] = s, t.centerOffset = s - a, t)
                }
            },
            effect: function(e) {
                var t = e.state;
                if (null != (e = void 0 === (e = e.options.element) ? "[data-popper-arrow]" : e)) {
                    if ("string" == typeof e && !(e = t.elements.popper.querySelector(e))) return;
                    O(t.elements.popper, e) && (t.elements.arrow = e)
                }
            },
            requires: ["popperOffsets"],
            requiresIfExists: ["preventOverflow"]
        },
        re = {
            name: "hide",
            enabled: !0,
            phase: "main",
            requiresIfExists: ["preventOverflow"],
            fn: function(e) {
                var t = e.state;
                e = e.name;
                var n = t.rects.reference,
                    o = t.rects.popper,
                    r = t.modifiersData.preventOverflow,
                    i = A(t, {
                        elementContext: "reference"
                    }),
                    a = A(t, {
                        altBoundary: !0
                    });
                n = S(i, n), o = S(a, o, r), r = q(n), a = q(o), t.modifiersData[e] = {
                    referenceClippingOffsets: n,
                    popperEscapeOffsets: o,
                    isReferenceHidden: r,
                    hasPopperEscaped: a
                }, t.attributes.popper = Object.assign({}, t.attributes.popper, {
                    "data-popper-reference-hidden": r,
                    "data-popper-escaped": a
                })
            }
        },
        ie = B({
            defaultModifiers: [Y, G, K, Q]
        }),
        ae = [Y, G, K, Q, Z, te, ne, oe, re],
        se = B({
            defaultModifiers: ae
        });
    e.applyStyles = Q, e.arrow = oe, e.computeStyles = K, e.createPopper = se, e.createPopperLite = ie, e.defaultModifiers = ae, e.detectOverflow = A, e.eventListeners = Y, e.flip = te, e.hide = re, e.offset = Z, e.popperGenerator = B, e.popperOffsets = G, e.preventOverflow = ne, Object.defineProperty(e, "__esModule", {
        value: !0
    })
}));
//# sourceMappingURL=popper.min.js.map


/*!
 * Bootstrap v5.0.0-beta2 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
! function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = e()
}(this, (function() {
    "use strict";

    function t(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }

    function e(e, n, i) {
        return n && t(e.prototype, n), i && t(e, i), e
    }

    function n() {
        return (n = Object.assign || function(t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = arguments[e];
                for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
            }
            return t
        }).apply(this, arguments)
    }

    function i(t, e) {
        var n, i;
        t.prototype = Object.create(e.prototype), t.prototype.constructor = t, n = t, i = e, (Object.setPrototypeOf || function(t, e) {
            return t.__proto__ = e, t
        })(n, i)
    }
    var o, r, s = function(t) {
            do {
                t += Math.floor(1e6 * Math.random())
            } while (document.getElementById(t));
            return t
        },
        a = function(t) {
            var e = t.getAttribute("data-bs-target");
            if (!e || "#" === e) {
                var n = t.getAttribute("href");
                if (!n || !n.includes("#") && !n.startsWith(".")) return null;
                n.includes("#") && !n.startsWith("#") && (n = "#" + n.split("#")[1]), e = n && "#" !== n ? n.trim() : null
            }
            return e
        },
        l = function(t) {
            var e = a(t);
            return e && document.querySelector(e) ? e : null
        },
        c = function(t) {
            var e = a(t);
            return e ? document.querySelector(e) : null
        },
        u = function(t) {
            if (!t) return 0;
            var e = window.getComputedStyle(t),
                n = e.transitionDuration,
                i = e.transitionDelay,
                o = Number.parseFloat(n),
                r = Number.parseFloat(i);
            return o || r ? (n = n.split(",")[0], i = i.split(",")[0], 1e3 * (Number.parseFloat(n) + Number.parseFloat(i))) : 0
        },
        f = function(t) {
            t.dispatchEvent(new Event("transitionend"))
        },
        d = function(t) {
            return (t[0] || t).nodeType
        },
        h = function(t, e) {
            var n = !1,
                i = e + 5;
            t.addEventListener("transitionend", (function e() {
                n = !0, t.removeEventListener("transitionend", e)
            })), setTimeout((function() {
                n || f(t)
            }), i)
        },
        p = function(t, e, n) {
            Object.keys(n).forEach((function(i) {
                var o, r = n[i],
                    s = e[i],
                    a = s && d(s) ? "element" : null == (o = s) ? "" + o : {}.toString.call(o).match(/\s([a-z]+)/i)[1].toLowerCase();
                if (!new RegExp(r).test(a)) throw new TypeError(t.toUpperCase() + ': Option "' + i + '" provided type "' + a + '" but expected type "' + r + '".')
            }))
        },
        g = function(t) {
            if (!t) return !1;
            if (t.style && t.parentNode && t.parentNode.style) {
                var e = getComputedStyle(t),
                    n = getComputedStyle(t.parentNode);
                return "none" !== e.display && "none" !== n.display && "hidden" !== e.visibility
            }
            return !1
        },
        m = function() {
            return function() {}
        },
        v = function(t) {
            return t.offsetHeight
        },
        _ = function() {
            var t = window.jQuery;
            return t && !document.body.hasAttribute("data-bs-no-jquery") ? t : null
        },
        b = "rtl" === document.documentElement.dir,
        y = function(t, e) {
            var n;
            n = function() {
                var n = _();
                if (n) {
                    var i = n.fn[t];
                    n.fn[t] = e.jQueryInterface, n.fn[t].Constructor = e, n.fn[t].noConflict = function() {
                        return n.fn[t] = i, e.jQueryInterface
                    }
                }
            }, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", n) : n()
        },
        w = (o = {}, r = 1, {
            set: function(t, e, n) {
                void 0 === t.bsKey && (t.bsKey = {
                    key: e,
                    id: r
                }, r++), o[t.bsKey.id] = n
            },
            get: function(t, e) {
                if (!t || void 0 === t.bsKey) return null;
                var n = t.bsKey;
                return n.key === e ? o[n.id] : null
            },
            delete: function(t, e) {
                if (void 0 !== t.bsKey) {
                    var n = t.bsKey;
                    n.key === e && (delete o[n.id], delete t.bsKey)
                }
            }
        }),
        E = function(t, e, n) {
            w.set(t, e, n)
        },
        T = function(t, e) {
            return w.get(t, e)
        },
        k = /[^.]*(?=\..*)\.|.*/,
        A = /\..*/,
        L = /::\d+$/,
        O = {},
        D = 1,
        x = {
            mouseenter: "mouseover",
            mouseleave: "mouseout"
        },
        C = new Set(["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel", "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend", "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel", "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select", "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move", "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"]);

    function S(t, e) {
        return e && e + "::" + D++ || t.uidEvent || D++
    }

    function j(t) {
        var e = S(t);
        return t.uidEvent = e, O[e] = O[e] || {}, O[e]
    }

    function N(t, e, n) {
        void 0 === n && (n = null);
        for (var i = Object.keys(t), o = 0, r = i.length; o < r; o++) {
            var s = t[i[o]];
            if (s.originalHandler === e && s.delegationSelector === n) return s
        }
        return null
    }

    function P(t, e, n) {
        var i = "string" == typeof e,
            o = i ? n : e,
            r = t.replace(A, ""),
            s = x[r];
        return s && (r = s), C.has(r) || (r = t), [i, o, r]
    }

    function I(t, e, n, i, o) {
        if ("string" == typeof e && t) {
            n || (n = i, i = null);
            var r = P(e, n, i),
                s = r[0],
                a = r[1],
                l = r[2],
                c = j(t),
                u = c[l] || (c[l] = {}),
                f = N(u, a, s ? n : null);
            if (f) f.oneOff = f.oneOff && o;
            else {
                var d = S(a, e.replace(k, "")),
                    h = s ? function(t, e, n) {
                        return function i(o) {
                            for (var r = t.querySelectorAll(e), s = o.target; s && s !== this; s = s.parentNode)
                                for (var a = r.length; a--;)
                                    if (r[a] === s) return o.delegateTarget = s, i.oneOff && B.off(t, o.type, n), n.apply(s, [o]);
                            return null
                        }
                    }(t, n, i) : function(t, e) {
                        return function n(i) {
                            return i.delegateTarget = t, n.oneOff && B.off(t, i.type, e), e.apply(t, [i])
                        }
                    }(t, n);
                h.delegationSelector = s ? n : null, h.originalHandler = a, h.oneOff = o, h.uidEvent = d, u[d] = h, t.addEventListener(l, h, s)
            }
        }
    }

    function M(t, e, n, i, o) {
        var r = N(e[n], i, o);
        r && (t.removeEventListener(n, r, Boolean(o)), delete e[n][r.uidEvent])
    }
    var B = {
            on: function(t, e, n, i) {
                I(t, e, n, i, !1)
            },
            one: function(t, e, n, i) {
                I(t, e, n, i, !0)
            },
            off: function(t, e, n, i) {
                if ("string" == typeof e && t) {
                    var o = P(e, n, i),
                        r = o[0],
                        s = o[1],
                        a = o[2],
                        l = a !== e,
                        c = j(t),
                        u = e.startsWith(".");
                    if (void 0 === s) {
                        u && Object.keys(c).forEach((function(n) {
                            ! function(t, e, n, i) {
                                var o = e[n] || {};
                                Object.keys(o).forEach((function(r) {
                                    if (r.includes(i)) {
                                        var s = o[r];
                                        M(t, e, n, s.originalHandler, s.delegationSelector)
                                    }
                                }))
                            }(t, c, n, e.slice(1))
                        }));
                        var f = c[a] || {};
                        Object.keys(f).forEach((function(n) {
                            var i = n.replace(L, "");
                            if (!l || e.includes(i)) {
                                var o = f[n];
                                M(t, c, a, o.originalHandler, o.delegationSelector)
                            }
                        }))
                    } else {
                        if (!c || !c[a]) return;
                        M(t, c, a, s, r ? n : null)
                    }
                }
            },
            trigger: function(t, e, n) {
                if ("string" != typeof e || !t) return null;
                var i, o = _(),
                    r = e.replace(A, ""),
                    s = e !== r,
                    a = C.has(r),
                    l = !0,
                    c = !0,
                    u = !1,
                    f = null;
                return s && o && (i = o.Event(e, n), o(t).trigger(i), l = !i.isPropagationStopped(), c = !i.isImmediatePropagationStopped(), u = i.isDefaultPrevented()), a ? (f = document.createEvent("HTMLEvents")).initEvent(r, l, !0) : f = new CustomEvent(e, {
                    bubbles: l,
                    cancelable: !0
                }), void 0 !== n && Object.keys(n).forEach((function(t) {
                    Object.defineProperty(f, t, {
                        get: function() {
                            return n[t]
                        }
                    })
                })), u && f.preventDefault(), c && t.dispatchEvent(f), f.defaultPrevented && void 0 !== i && i.preventDefault(), f
            }
        },
        H = function() {
            function t(t) {
                t && (this._element = t, E(t, this.constructor.DATA_KEY, this))
            }
            return t.prototype.dispose = function() {
                var t, e;
                t = this._element, e = this.constructor.DATA_KEY, w.delete(t, e), this._element = null
            }, t.getInstance = function(t) {
                return T(t, this.DATA_KEY)
            }, e(t, null, [{
                key: "VERSION",
                get: function() {
                    return "5.0.0-beta2"
                }
            }]), t
        }(),
        R = function(t) {
            function n() {
                return t.apply(this, arguments) || this
            }
            i(n, t);
            var o = n.prototype;
            return o.close = function(t) {
                var e = t ? this._getRootElement(t) : this._element,
                    n = this._triggerCloseEvent(e);
                null === n || n.defaultPrevented || this._removeElement(e)
            }, o._getRootElement = function(t) {
                return c(t) || t.closest(".alert")
            }, o._triggerCloseEvent = function(t) {
                return B.trigger(t, "close.bs.alert")
            }, o._removeElement = function(t) {
                var e = this;
                if (t.classList.remove("show"), t.classList.contains("fade")) {
                    var n = u(t);
                    B.one(t, "transitionend", (function() {
                        return e._destroyElement(t)
                    })), h(t, n)
                } else this._destroyElement(t)
            }, o._destroyElement = function(t) {
                t.parentNode && t.parentNode.removeChild(t), B.trigger(t, "closed.bs.alert")
            }, n.jQueryInterface = function(t) {
                return this.each((function() {
                    var e = T(this, "bs.alert");
                    e || (e = new n(this)), "close" === t && e[t](this)
                }))
            }, n.handleDismiss = function(t) {
                return function(e) {
                    e && e.preventDefault(), t.close(this)
                }
            }, e(n, null, [{
                key: "DATA_KEY",
                get: function() {
                    return "bs.alert"
                }
            }]), n
        }(H);
    B.on(document, "click.bs.alert.data-api", '[data-bs-dismiss="alert"]', R.handleDismiss(new R)), y("alert", R);
    var W = function(t) {
        function n() {
            return t.apply(this, arguments) || this
        }
        return i(n, t), n.prototype.toggle = function() {
            this._element.setAttribute("aria-pressed", this._element.classList.toggle("active"))
        }, n.jQueryInterface = function(t) {
            return this.each((function() {
                var e = T(this, "bs.button");
                e || (e = new n(this)), "toggle" === t && e[t]()
            }))
        }, e(n, null, [{
            key: "DATA_KEY",
            get: function() {
                return "bs.button"
            }
        }]), n
    }(H);

    function K(t) {
        return "true" === t || "false" !== t && (t === Number(t).toString() ? Number(t) : "" === t || "null" === t ? null : t)
    }

    function U(t) {
        return t.replace(/[A-Z]/g, (function(t) {
            return "-" + t.toLowerCase()
        }))
    }
    B.on(document, "click.bs.button.data-api", '[data-bs-toggle="button"]', (function(t) {
        t.preventDefault();
        var e = t.target.closest('[data-bs-toggle="button"]'),
            n = T(e, "bs.button");
        n || (n = new W(e)), n.toggle()
    })), y("button", W);
    var z = {
            setDataAttribute: function(t, e, n) {
                t.setAttribute("data-bs-" + U(e), n)
            },
            removeDataAttribute: function(t, e) {
                t.removeAttribute("data-bs-" + U(e))
            },
            getDataAttributes: function(t) {
                if (!t) return {};
                var e = {};
                return Object.keys(t.dataset).filter((function(t) {
                    return t.startsWith("bs")
                })).forEach((function(n) {
                    var i = n.replace(/^bs/, "");
                    i = i.charAt(0).toLowerCase() + i.slice(1, i.length), e[i] = K(t.dataset[n])
                })), e
            },
            getDataAttribute: function(t, e) {
                return K(t.getAttribute("data-bs-" + U(e)))
            },
            offset: function(t) {
                var e = t.getBoundingClientRect();
                return {
                    top: e.top + document.body.scrollTop,
                    left: e.left + document.body.scrollLeft
                }
            },
            position: function(t) {
                return {
                    top: t.offsetTop,
                    left: t.offsetLeft
                }
            }
        },
        F = function(t, e) {
            var n;
            return void 0 === e && (e = document.documentElement), (n = []).concat.apply(n, Element.prototype.querySelectorAll.call(e, t))
        },
        Y = function(t, e) {
            return void 0 === e && (e = document.documentElement), Element.prototype.querySelector.call(e, t)
        },
        q = function(t, e) {
            var n;
            return (n = []).concat.apply(n, t.children).filter((function(t) {
                return t.matches(e)
            }))
        },
        V = function(t, e) {
            for (var n = t.previousElementSibling; n;) {
                if (n.matches(e)) return [n];
                n = n.previousElementSibling
            }
            return []
        },
        X = {
            interval: 5e3,
            keyboard: !0,
            slide: !1,
            pause: "hover",
            wrap: !0,
            touch: !0
        },
        Q = {
            interval: "(number|boolean)",
            keyboard: "boolean",
            slide: "(boolean|string)",
            pause: "(string|boolean)",
            wrap: "boolean",
            touch: "boolean"
        },
        $ = function(t) {
            function o(e, n) {
                var i;
                return (i = t.call(this, e) || this)._items = null, i._interval = null, i._activeElement = null, i._isPaused = !1, i._isSliding = !1, i.touchTimeout = null, i.touchStartX = 0, i.touchDeltaX = 0, i._config = i._getConfig(n), i._indicatorsElement = Y(".carousel-indicators", i._element), i._touchSupported = "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0, i._pointerEvent = Boolean(window.PointerEvent), i._addEventListeners(), i
            }
            i(o, t);
            var r = o.prototype;
            return r.next = function() {
                this._isSliding || this._slide("next")
            }, r.nextWhenVisible = function() {
                !document.hidden && g(this._element) && this.next()
            }, r.prev = function() {
                this._isSliding || this._slide("prev")
            }, r.pause = function(t) {
                t || (this._isPaused = !0), Y(".carousel-item-next, .carousel-item-prev", this._element) && (f(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
            }, r.cycle = function(t) {
                t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config && this._config.interval && !this._isPaused && (this._updateInterval(), this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
            }, r.to = function(t) {
                var e = this;
                this._activeElement = Y(".active.carousel-item", this._element);
                var n = this._getItemIndex(this._activeElement);
                if (!(t > this._items.length - 1 || t < 0))
                    if (this._isSliding) B.one(this._element, "slid.bs.carousel", (function() {
                        return e.to(t)
                    }));
                    else {
                        if (n === t) return this.pause(), void this.cycle();
                        var i = t > n ? "next" : "prev";
                        this._slide(i, this._items[t])
                    }
            }, r.dispose = function() {
                t.prototype.dispose.call(this), B.off(this._element, ".bs.carousel"), this._items = null, this._config = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
            }, r._getConfig = function(t) {
                return t = n({}, X, t), p("carousel", t, Q), t
            }, r._handleSwipe = function() {
                var t = Math.abs(this.touchDeltaX);
                if (!(t <= 40)) {
                    var e = t / this.touchDeltaX;
                    this.touchDeltaX = 0, e > 0 && (b ? this.next() : this.prev()), e < 0 && (b ? this.prev() : this.next())
                }
            }, r._addEventListeners = function() {
                var t = this;
                this._config.keyboard && B.on(this._element, "keydown.bs.carousel", (function(e) {
                    return t._keydown(e)
                })), "hover" === this._config.pause && (B.on(this._element, "mouseenter.bs.carousel", (function(e) {
                    return t.pause(e)
                })), B.on(this._element, "mouseleave.bs.carousel", (function(e) {
                    return t.cycle(e)
                }))), this._config.touch && this._touchSupported && this._addTouchEventListeners()
            }, r._addTouchEventListeners = function() {
                var t = this,
                    e = function(e) {
                        !t._pointerEvent || "pen" !== e.pointerType && "touch" !== e.pointerType ? t._pointerEvent || (t.touchStartX = e.touches[0].clientX) : t.touchStartX = e.clientX
                    },
                    n = function(e) {
                        !t._pointerEvent || "pen" !== e.pointerType && "touch" !== e.pointerType || (t.touchDeltaX = e.clientX - t.touchStartX), t._handleSwipe(), "hover" === t._config.pause && (t.pause(), t.touchTimeout && clearTimeout(t.touchTimeout), t.touchTimeout = setTimeout((function(e) {
                            return t.cycle(e)
                        }), 500 + t._config.interval))
                    };
                F(".carousel-item img", this._element).forEach((function(t) {
                    B.on(t, "dragstart.bs.carousel", (function(t) {
                        return t.preventDefault()
                    }))
                })), this._pointerEvent ? (B.on(this._element, "pointerdown.bs.carousel", (function(t) {
                    return e(t)
                })), B.on(this._element, "pointerup.bs.carousel", (function(t) {
                    return n(t)
                })), this._element.classList.add("pointer-event")) : (B.on(this._element, "touchstart.bs.carousel", (function(t) {
                    return e(t)
                })), B.on(this._element, "touchmove.bs.carousel", (function(e) {
                    return function(e) {
                        e.touches && e.touches.length > 1 ? t.touchDeltaX = 0 : t.touchDeltaX = e.touches[0].clientX - t.touchStartX
                    }(e)
                })), B.on(this._element, "touchend.bs.carousel", (function(t) {
                    return n(t)
                })))
            }, r._keydown = function(t) {
                /input|textarea/i.test(t.target.tagName) || ("ArrowLeft" === t.key ? (t.preventDefault(), b ? this.next() : this.prev()) : "ArrowRight" === t.key && (t.preventDefault(), b ? this.prev() : this.next()))
            }, r._getItemIndex = function(t) {
                return this._items = t && t.parentNode ? F(".carousel-item", t.parentNode) : [], this._items.indexOf(t)
            }, r._getItemByDirection = function(t, e) {
                var n = "next" === t,
                    i = "prev" === t,
                    o = this._getItemIndex(e),
                    r = this._items.length - 1;
                if ((i && 0 === o || n && o === r) && !this._config.wrap) return e;
                var s = (o + ("prev" === t ? -1 : 1)) % this._items.length;
                return -1 === s ? this._items[this._items.length - 1] : this._items[s]
            }, r._triggerSlideEvent = function(t, e) {
                var n = this._getItemIndex(t),
                    i = this._getItemIndex(Y(".active.carousel-item", this._element));
                return B.trigger(this._element, "slide.bs.carousel", {
                    relatedTarget: t,
                    direction: e,
                    from: i,
                    to: n
                })
            }, r._setActiveIndicatorElement = function(t) {
                if (this._indicatorsElement) {
                    var e = Y(".active", this._indicatorsElement);
                    e.classList.remove("active"), e.removeAttribute("aria-current");
                    for (var n = F("[data-bs-target]", this._indicatorsElement), i = 0; i < n.length; i++)
                        if (Number.parseInt(n[i].getAttribute("data-bs-slide-to"), 10) === this._getItemIndex(t)) {
                            n[i].classList.add("active"), n[i].setAttribute("aria-current", "true");
                            break
                        }
                }
            }, r._updateInterval = function() {
                var t = this._activeElement || Y(".active.carousel-item", this._element);
                if (t) {
                    var e = Number.parseInt(t.getAttribute("data-bs-interval"), 10);
                    e ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, this._config.interval = e) : this._config.interval = this._config.defaultInterval || this._config.interval
                }
            }, r._slide = function(t, e) {
                var n = this,
                    i = Y(".active.carousel-item", this._element),
                    o = this._getItemIndex(i),
                    r = e || i && this._getItemByDirection(t, i),
                    s = this._getItemIndex(r),
                    a = Boolean(this._interval),
                    l = "next" === t ? "carousel-item-start" : "carousel-item-end",
                    c = "next" === t ? "carousel-item-next" : "carousel-item-prev",
                    f = "next" === t ? "left" : "right";
                if (r && r.classList.contains("active")) this._isSliding = !1;
                else if (!this._triggerSlideEvent(r, f).defaultPrevented && i && r) {
                    if (this._isSliding = !0, a && this.pause(), this._setActiveIndicatorElement(r), this._activeElement = r, this._element.classList.contains("slide")) {
                        r.classList.add(c), v(r), i.classList.add(l), r.classList.add(l);
                        var d = u(i);
                        B.one(i, "transitionend", (function() {
                            r.classList.remove(l, c), r.classList.add("active"), i.classList.remove("active", c, l), n._isSliding = !1, setTimeout((function() {
                                B.trigger(n._element, "slid.bs.carousel", {
                                    relatedTarget: r,
                                    direction: f,
                                    from: o,
                                    to: s
                                })
                            }), 0)
                        })), h(i, d)
                    } else i.classList.remove("active"), r.classList.add("active"), this._isSliding = !1, B.trigger(this._element, "slid.bs.carousel", {
                        relatedTarget: r,
                        direction: f,
                        from: o,
                        to: s
                    });
                    a && this.cycle()
                }
            }, o.carouselInterface = function(t, e) {
                var i = T(t, "bs.carousel"),
                    r = n({}, X, z.getDataAttributes(t));
                "object" == typeof e && (r = n({}, r, e));
                var s = "string" == typeof e ? e : r.slide;
                if (i || (i = new o(t, r)), "number" == typeof e) i.to(e);
                else if ("string" == typeof s) {
                    if (void 0 === i[s]) throw new TypeError('No method named "' + s + '"');
                    i[s]()
                } else r.interval && r.ride && (i.pause(), i.cycle())
            }, o.jQueryInterface = function(t) {
                return this.each((function() {
                    o.carouselInterface(this, t)
                }))
            }, o.dataApiClickHandler = function(t) {
                var e = c(this);
                if (e && e.classList.contains("carousel")) {
                    var i = n({}, z.getDataAttributes(e), z.getDataAttributes(this)),
                        r = this.getAttribute("data-bs-slide-to");
                    r && (i.interval = !1), o.carouselInterface(e, i), r && T(e, "bs.carousel").to(r), t.preventDefault()
                }
            }, e(o, null, [{
                key: "Default",
                get: function() {
                    return X
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return "bs.carousel"
                }
            }]), o
        }(H);
    B.on(document, "click.bs.carousel.data-api", "[data-bs-slide], [data-bs-slide-to]", $.dataApiClickHandler), B.on(window, "load.bs.carousel.data-api", (function() {
        for (var t = F('[data-bs-ride="carousel"]'), e = 0, n = t.length; e < n; e++) $.carouselInterface(t[e], T(t[e], "bs.carousel"))
    })), y("carousel", $);
    var G = {
            toggle: !0,
            parent: ""
        },
        Z = {
            toggle: "boolean",
            parent: "(string|element)"
        },
        J = function(t) {
            function o(e, n) {
                var i;
                (i = t.call(this, e) || this)._isTransitioning = !1, i._config = i._getConfig(n), i._triggerArray = F('[data-bs-toggle="collapse"][href="#' + e.id + '"],[data-bs-toggle="collapse"][data-bs-target="#' + e.id + '"]');
                for (var o = F('[data-bs-toggle="collapse"]'), r = 0, s = o.length; r < s; r++) {
                    var a = o[r],
                        c = l(a),
                        u = F(c).filter((function(t) {
                            return t === e
                        }));
                    null !== c && u.length && (i._selector = c, i._triggerArray.push(a))
                }
                return i._parent = i._config.parent ? i._getParent() : null, i._config.parent || i._addAriaAndCollapsedClass(i._element, i._triggerArray), i._config.toggle && i.toggle(), i
            }
            i(o, t);
            var r = o.prototype;
            return r.toggle = function() {
                this._element.classList.contains("show") ? this.hide() : this.show()
            }, r.show = function() {
                var t = this;
                if (!this._isTransitioning && !this._element.classList.contains("show")) {
                    var e, n;
                    this._parent && 0 === (e = F(".show, .collapsing", this._parent).filter((function(e) {
                        return "string" == typeof t._config.parent ? e.getAttribute("data-bs-parent") === t._config.parent : e.classList.contains("collapse")
                    }))).length && (e = null);
                    var i = Y(this._selector);
                    if (e) {
                        var r = e.find((function(t) {
                            return i !== t
                        }));
                        if ((n = r ? T(r, "bs.collapse") : null) && n._isTransitioning) return
                    }
                    if (!B.trigger(this._element, "show.bs.collapse").defaultPrevented) {
                        e && e.forEach((function(t) {
                            i !== t && o.collapseInterface(t, "hide"), n || E(t, "bs.collapse", null)
                        }));
                        var s = this._getDimension();
                        this._element.classList.remove("collapse"), this._element.classList.add("collapsing"), this._element.style[s] = 0, this._triggerArray.length && this._triggerArray.forEach((function(t) {
                            t.classList.remove("collapsed"), t.setAttribute("aria-expanded", !0)
                        })), this.setTransitioning(!0);
                        var a = "scroll" + (s[0].toUpperCase() + s.slice(1)),
                            l = u(this._element);
                        B.one(this._element, "transitionend", (function() {
                            t._element.classList.remove("collapsing"), t._element.classList.add("collapse", "show"), t._element.style[s] = "", t.setTransitioning(!1), B.trigger(t._element, "shown.bs.collapse")
                        })), h(this._element, l), this._element.style[s] = this._element[a] + "px"
                    }
                }
            }, r.hide = function() {
                var t = this;
                if (!this._isTransitioning && this._element.classList.contains("show") && !B.trigger(this._element, "hide.bs.collapse").defaultPrevented) {
                    var e = this._getDimension();
                    this._element.style[e] = this._element.getBoundingClientRect()[e] + "px", v(this._element), this._element.classList.add("collapsing"), this._element.classList.remove("collapse", "show");
                    var n = this._triggerArray.length;
                    if (n > 0)
                        for (var i = 0; i < n; i++) {
                            var o = this._triggerArray[i],
                                r = c(o);
                            r && !r.classList.contains("show") && (o.classList.add("collapsed"), o.setAttribute("aria-expanded", !1))
                        }
                    this.setTransitioning(!0), this._element.style[e] = "";
                    var s = u(this._element);
                    B.one(this._element, "transitionend", (function() {
                        t.setTransitioning(!1), t._element.classList.remove("collapsing"), t._element.classList.add("collapse"), B.trigger(t._element, "hidden.bs.collapse")
                    })), h(this._element, s)
                }
            }, r.setTransitioning = function(t) {
                this._isTransitioning = t
            }, r.dispose = function() {
                t.prototype.dispose.call(this), this._config = null, this._parent = null, this._triggerArray = null, this._isTransitioning = null
            }, r._getConfig = function(t) {
                return (t = n({}, G, t)).toggle = Boolean(t.toggle), p("collapse", t, Z), t
            }, r._getDimension = function() {
                return this._element.classList.contains("width") ? "width" : "height"
            }, r._getParent = function() {
                var t = this,
                    e = this._config.parent;
                return d(e) ? void 0 === e.jquery && void 0 === e[0] || (e = e[0]) : e = Y(e), F('[data-bs-toggle="collapse"][data-bs-parent="' + e + '"]', e).forEach((function(e) {
                    var n = c(e);
                    t._addAriaAndCollapsedClass(n, [e])
                })), e
            }, r._addAriaAndCollapsedClass = function(t, e) {
                if (t && e.length) {
                    var n = t.classList.contains("show");
                    e.forEach((function(t) {
                        n ? t.classList.remove("collapsed") : t.classList.add("collapsed"), t.setAttribute("aria-expanded", n)
                    }))
                }
            }, o.collapseInterface = function(t, e) {
                var i = T(t, "bs.collapse"),
                    r = n({}, G, z.getDataAttributes(t), "object" == typeof e && e ? e : {});
                if (!i && r.toggle && "string" == typeof e && /show|hide/.test(e) && (r.toggle = !1), i || (i = new o(t, r)), "string" == typeof e) {
                    if (void 0 === i[e]) throw new TypeError('No method named "' + e + '"');
                    i[e]()
                }
            }, o.jQueryInterface = function(t) {
                return this.each((function() {
                    o.collapseInterface(this, t)
                }))
            }, e(o, null, [{
                key: "Default",
                get: function() {
                    return G
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return "bs.collapse"
                }
            }]), o
        }(H);
    B.on(document, "click.bs.collapse.data-api", '[data-bs-toggle="collapse"]', (function(t) {
        ("A" === t.target.tagName || t.delegateTarget && "A" === t.delegateTarget.tagName) && t.preventDefault();
        var e = z.getDataAttributes(this),
            n = l(this);
        F(n).forEach((function(t) {
            var n, i = T(t, "bs.collapse");
            i ? (null === i._parent && "string" == typeof e.parent && (i._config.parent = e.parent, i._parent = i._getParent()), n = "toggle") : n = e, J.collapseInterface(t, n)
        }))
    })), y("collapse", J);
    var tt = "top",
        et = "bottom",
        nt = "right",
        it = "left",
        ot = [tt, et, nt, it],
        rt = ot.reduce((function(t, e) {
            return t.concat([e + "-start", e + "-end"])
        }), []),
        st = [].concat(ot, ["auto"]).reduce((function(t, e) {
            return t.concat([e, e + "-start", e + "-end"])
        }), []),
        at = ["beforeRead", "read", "afterRead", "beforeMain", "main", "afterMain", "beforeWrite", "write", "afterWrite"];

    function lt(t) {
        return t ? (t.nodeName || "").toLowerCase() : null
    }

    function ct(t) {
        if ("[object Window]" !== t.toString()) {
            var e = t.ownerDocument;
            return e && e.defaultView || window
        }
        return t
    }

    function ut(t) {
        return t instanceof ct(t).Element || t instanceof Element
    }

    function ft(t) {
        return t instanceof ct(t).HTMLElement || t instanceof HTMLElement
    }
    var dt = {
        name: "applyStyles",
        enabled: !0,
        phase: "write",
        fn: function(t) {
            var e = t.state;
            Object.keys(e.elements).forEach((function(t) {
                var n = e.styles[t] || {},
                    i = e.attributes[t] || {},
                    o = e.elements[t];
                ft(o) && lt(o) && (Object.assign(o.style, n), Object.keys(i).forEach((function(t) {
                    var e = i[t];
                    !1 === e ? o.removeAttribute(t) : o.setAttribute(t, !0 === e ? "" : e)
                })))
            }))
        },
        effect: function(t) {
            var e = t.state,
                n = {
                    popper: {
                        position: e.options.strategy,
                        left: "0",
                        top: "0",
                        margin: "0"
                    },
                    arrow: {
                        position: "absolute"
                    },
                    reference: {}
                };
            return Object.assign(e.elements.popper.style, n.popper), e.elements.arrow && Object.assign(e.elements.arrow.style, n.arrow),
                function() {
                    Object.keys(e.elements).forEach((function(t) {
                        var i = e.elements[t],
                            o = e.attributes[t] || {},
                            r = Object.keys(e.styles.hasOwnProperty(t) ? e.styles[t] : n[t]).reduce((function(t, e) {
                                return t[e] = "", t
                            }), {});
                        ft(i) && lt(i) && (Object.assign(i.style, r), Object.keys(o).forEach((function(t) {
                            i.removeAttribute(t)
                        })))
                    }))
                }
        },
        requires: ["computeStyles"]
    };

    function ht(t) {
        return t.split("-")[0]
    }

    function pt(t) {
        return {
            x: t.offsetLeft,
            y: t.offsetTop,
            width: t.offsetWidth,
            height: t.offsetHeight
        }
    }

    function gt(t, e) {
        var n, i = e.getRootNode && e.getRootNode();
        if (t.contains(e)) return !0;
        if (i && ((n = i) instanceof ct(n).ShadowRoot || n instanceof ShadowRoot)) {
            var o = e;
            do {
                if (o && t.isSameNode(o)) return !0;
                o = o.parentNode || o.host
            } while (o)
        }
        return !1
    }

    function mt(t) {
        return ct(t).getComputedStyle(t)
    }

    function vt(t) {
        return ["table", "td", "th"].indexOf(lt(t)) >= 0
    }

    function _t(t) {
        return ((ut(t) ? t.ownerDocument : t.document) || window.document).documentElement
    }

    function bt(t) {
        return "html" === lt(t) ? t : t.assignedSlot || t.parentNode || t.host || _t(t)
    }

    function yt(t) {
        if (!ft(t) || "fixed" === mt(t).position) return null;
        var e = t.offsetParent;
        if (e) {
            var n = _t(e);
            if ("body" === lt(e) && "static" === mt(e).position && "static" !== mt(n).position) return n
        }
        return e
    }

    function wt(t) {
        for (var e = ct(t), n = yt(t); n && vt(n) && "static" === mt(n).position;) n = yt(n);
        return n && "body" === lt(n) && "static" === mt(n).position ? e : n || function(t) {
            for (var e = bt(t); ft(e) && ["html", "body"].indexOf(lt(e)) < 0;) {
                var n = mt(e);
                if ("none" !== n.transform || "none" !== n.perspective || n.willChange && "auto" !== n.willChange) return e;
                e = e.parentNode
            }
            return null
        }(t) || e
    }

    function Et(t) {
        return ["top", "bottom"].indexOf(t) >= 0 ? "x" : "y"
    }

    function Tt(t, e, n) {
        return Math.max(t, Math.min(e, n))
    }

    function kt(t) {
        return Object.assign(Object.assign({}, {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        }), t)
    }

    function At(t, e) {
        return e.reduce((function(e, n) {
            return e[n] = t, e
        }), {})
    }
    var Lt = {
            name: "arrow",
            enabled: !0,
            phase: "main",
            fn: function(t) {
                var e, n = t.state,
                    i = t.name,
                    o = n.elements.arrow,
                    r = n.modifiersData.popperOffsets,
                    s = ht(n.placement),
                    a = Et(s),
                    l = [it, nt].indexOf(s) >= 0 ? "height" : "width";
                if (o && r) {
                    var c = n.modifiersData[i + "#persistent"].padding,
                        u = pt(o),
                        f = "y" === a ? tt : it,
                        d = "y" === a ? et : nt,
                        h = n.rects.reference[l] + n.rects.reference[a] - r[a] - n.rects.popper[l],
                        p = r[a] - n.rects.reference[a],
                        g = wt(o),
                        m = g ? "y" === a ? g.clientHeight || 0 : g.clientWidth || 0 : 0,
                        v = h / 2 - p / 2,
                        _ = c[f],
                        b = m - u[l] - c[d],
                        y = m / 2 - u[l] / 2 + v,
                        w = Tt(_, y, b),
                        E = a;
                    n.modifiersData[i] = ((e = {})[E] = w, e.centerOffset = w - y, e)
                }
            },
            effect: function(t) {
                var e = t.state,
                    n = t.options,
                    i = t.name,
                    o = n.element,
                    r = void 0 === o ? "[data-popper-arrow]" : o,
                    s = n.padding,
                    a = void 0 === s ? 0 : s;
                null != r && ("string" != typeof r || (r = e.elements.popper.querySelector(r))) && gt(e.elements.popper, r) && (e.elements.arrow = r, e.modifiersData[i + "#persistent"] = {
                    padding: kt("number" != typeof a ? a : At(a, ot))
                })
            },
            requires: ["popperOffsets"],
            requiresIfExists: ["preventOverflow"]
        },
        Ot = {
            top: "auto",
            right: "auto",
            bottom: "auto",
            left: "auto"
        };

    function Dt(t) {
        var e, n = t.popper,
            i = t.popperRect,
            o = t.placement,
            r = t.offsets,
            s = t.position,
            a = t.gpuAcceleration,
            l = t.adaptive,
            c = t.roundOffsets ? function(t) {
                var e = t.x,
                    n = t.y,
                    i = window.devicePixelRatio || 1;
                return {
                    x: Math.round(e * i) / i || 0,
                    y: Math.round(n * i) / i || 0
                }
            }(r) : r,
            u = c.x,
            f = void 0 === u ? 0 : u,
            d = c.y,
            h = void 0 === d ? 0 : d,
            p = r.hasOwnProperty("x"),
            g = r.hasOwnProperty("y"),
            m = it,
            v = tt,
            _ = window;
        if (l) {
            var b = wt(n);
            b === ct(n) && (b = _t(n)), o === tt && (v = et, h -= b.clientHeight - i.height, h *= a ? 1 : -1), o === it && (m = nt, f -= b.clientWidth - i.width, f *= a ? 1 : -1)
        }
        var y, w = Object.assign({
            position: s
        }, l && Ot);
        return a ? Object.assign(Object.assign({}, w), {}, ((y = {})[v] = g ? "0" : "", y[m] = p ? "0" : "", y.transform = (_.devicePixelRatio || 1) < 2 ? "translate(" + f + "px, " + h + "px)" : "translate3d(" + f + "px, " + h + "px, 0)", y)) : Object.assign(Object.assign({}, w), {}, ((e = {})[v] = g ? h + "px" : "", e[m] = p ? f + "px" : "", e.transform = "", e))
    }
    var xt = {
            name: "computeStyles",
            enabled: !0,
            phase: "beforeWrite",
            fn: function(t) {
                var e = t.state,
                    n = t.options,
                    i = n.gpuAcceleration,
                    o = void 0 === i || i,
                    r = n.adaptive,
                    s = void 0 === r || r,
                    a = n.roundOffsets,
                    l = void 0 === a || a,
                    c = {
                        placement: ht(e.placement),
                        popper: e.elements.popper,
                        popperRect: e.rects.popper,
                        gpuAcceleration: o
                    };
                null != e.modifiersData.popperOffsets && (e.styles.popper = Object.assign(Object.assign({}, e.styles.popper), Dt(Object.assign(Object.assign({}, c), {}, {
                    offsets: e.modifiersData.popperOffsets,
                    position: e.options.strategy,
                    adaptive: s,
                    roundOffsets: l
                })))), null != e.modifiersData.arrow && (e.styles.arrow = Object.assign(Object.assign({}, e.styles.arrow), Dt(Object.assign(Object.assign({}, c), {}, {
                    offsets: e.modifiersData.arrow,
                    position: "absolute",
                    adaptive: !1,
                    roundOffsets: l
                })))), e.attributes.popper = Object.assign(Object.assign({}, e.attributes.popper), {}, {
                    "data-popper-placement": e.placement
                })
            },
            data: {}
        },
        Ct = {
            passive: !0
        },
        St = {
            name: "eventListeners",
            enabled: !0,
            phase: "write",
            fn: function() {},
            effect: function(t) {
                var e = t.state,
                    n = t.instance,
                    i = t.options,
                    o = i.scroll,
                    r = void 0 === o || o,
                    s = i.resize,
                    a = void 0 === s || s,
                    l = ct(e.elements.popper),
                    c = [].concat(e.scrollParents.reference, e.scrollParents.popper);
                return r && c.forEach((function(t) {
                        t.addEventListener("scroll", n.update, Ct)
                    })), a && l.addEventListener("resize", n.update, Ct),
                    function() {
                        r && c.forEach((function(t) {
                            t.removeEventListener("scroll", n.update, Ct)
                        })), a && l.removeEventListener("resize", n.update, Ct)
                    }
            },
            data: {}
        },
        jt = {
            left: "right",
            right: "left",
            bottom: "top",
            top: "bottom"
        };

    function Nt(t) {
        return t.replace(/left|right|bottom|top/g, (function(t) {
            return jt[t]
        }))
    }
    var Pt = {
        start: "end",
        end: "start"
    };

    function It(t) {
        return t.replace(/start|end/g, (function(t) {
            return Pt[t]
        }))
    }

    function Mt(t) {
        var e = t.getBoundingClientRect();
        return {
            width: e.width,
            height: e.height,
            top: e.top,
            right: e.right,
            bottom: e.bottom,
            left: e.left,
            x: e.left,
            y: e.top
        }
    }

    function Bt(t) {
        var e = ct(t);
        return {
            scrollLeft: e.pageXOffset,
            scrollTop: e.pageYOffset
        }
    }

    function Ht(t) {
        return Mt(_t(t)).left + Bt(t).scrollLeft
    }

    function Rt(t) {
        var e = mt(t),
            n = e.overflow,
            i = e.overflowX,
            o = e.overflowY;
        return /auto|scroll|overlay|hidden/.test(n + o + i)
    }

    function Wt(t, e) {
        void 0 === e && (e = []);
        var n = function t(e) {
                return ["html", "body", "#document"].indexOf(lt(e)) >= 0 ? e.ownerDocument.body : ft(e) && Rt(e) ? e : t(bt(e))
            }(t),
            i = "body" === lt(n),
            o = ct(n),
            r = i ? [o].concat(o.visualViewport || [], Rt(n) ? n : []) : n,
            s = e.concat(r);
        return i ? s : s.concat(Wt(bt(r)))
    }

    function Kt(t) {
        return Object.assign(Object.assign({}, t), {}, {
            left: t.x,
            top: t.y,
            right: t.x + t.width,
            bottom: t.y + t.height
        })
    }

    function Ut(t, e) {
        return "viewport" === e ? Kt(function(t) {
            var e = ct(t),
                n = _t(t),
                i = e.visualViewport,
                o = n.clientWidth,
                r = n.clientHeight,
                s = 0,
                a = 0;
            return i && (o = i.width, r = i.height, /^((?!chrome|android).)*safari/i.test(navigator.userAgent) || (s = i.offsetLeft, a = i.offsetTop)), {
                width: o,
                height: r,
                x: s + Ht(t),
                y: a
            }
        }(t)) : ft(e) ? function(t) {
            var e = Mt(t);
            return e.top = e.top + t.clientTop, e.left = e.left + t.clientLeft, e.bottom = e.top + t.clientHeight, e.right = e.left + t.clientWidth, e.width = t.clientWidth, e.height = t.clientHeight, e.x = e.left, e.y = e.top, e
        }(e) : Kt(function(t) {
            var e = _t(t),
                n = Bt(t),
                i = t.ownerDocument.body,
                o = Math.max(e.scrollWidth, e.clientWidth, i ? i.scrollWidth : 0, i ? i.clientWidth : 0),
                r = Math.max(e.scrollHeight, e.clientHeight, i ? i.scrollHeight : 0, i ? i.clientHeight : 0),
                s = -n.scrollLeft + Ht(t),
                a = -n.scrollTop;
            return "rtl" === mt(i || e).direction && (s += Math.max(e.clientWidth, i ? i.clientWidth : 0) - o), {
                width: o,
                height: r,
                x: s,
                y: a
            }
        }(_t(t)))
    }

    function zt(t) {
        return t.split("-")[1]
    }

    function Ft(t) {
        var e, n = t.reference,
            i = t.element,
            o = t.placement,
            r = o ? ht(o) : null,
            s = o ? zt(o) : null,
            a = n.x + n.width / 2 - i.width / 2,
            l = n.y + n.height / 2 - i.height / 2;
        switch (r) {
            case tt:
                e = {
                    x: a,
                    y: n.y - i.height
                };
                break;
            case et:
                e = {
                    x: a,
                    y: n.y + n.height
                };
                break;
            case nt:
                e = {
                    x: n.x + n.width,
                    y: l
                };
                break;
            case it:
                e = {
                    x: n.x - i.width,
                    y: l
                };
                break;
            default:
                e = {
                    x: n.x,
                    y: n.y
                }
        }
        var c = r ? Et(r) : null;
        if (null != c) {
            var u = "y" === c ? "height" : "width";
            switch (s) {
                case "start":
                    e[c] = e[c] - (n[u] / 2 - i[u] / 2);
                    break;
                case "end":
                    e[c] = e[c] + (n[u] / 2 - i[u] / 2)
            }
        }
        return e
    }

    function Yt(t, e) {
        void 0 === e && (e = {});
        var n = e,
            i = n.placement,
            o = void 0 === i ? t.placement : i,
            r = n.boundary,
            s = void 0 === r ? "clippingParents" : r,
            a = n.rootBoundary,
            l = void 0 === a ? "viewport" : a,
            c = n.elementContext,
            u = void 0 === c ? "popper" : c,
            f = n.altBoundary,
            d = void 0 !== f && f,
            h = n.padding,
            p = void 0 === h ? 0 : h,
            g = kt("number" != typeof p ? p : At(p, ot)),
            m = "popper" === u ? "reference" : "popper",
            v = t.elements.reference,
            _ = t.rects.popper,
            b = t.elements[d ? m : u],
            y = function(t, e, n) {
                var i = "clippingParents" === e ? function(t) {
                        var e = Wt(bt(t)),
                            n = ["absolute", "fixed"].indexOf(mt(t).position) >= 0 && ft(t) ? wt(t) : t;
                        return ut(n) ? e.filter((function(t) {
                            return ut(t) && gt(t, n) && "body" !== lt(t)
                        })) : []
                    }(t) : [].concat(e),
                    o = [].concat(i, [n]),
                    r = o[0],
                    s = o.reduce((function(e, n) {
                        var i = Ut(t, n);
                        return e.top = Math.max(i.top, e.top), e.right = Math.min(i.right, e.right), e.bottom = Math.min(i.bottom, e.bottom), e.left = Math.max(i.left, e.left), e
                    }), Ut(t, r));
                return s.width = s.right - s.left, s.height = s.bottom - s.top, s.x = s.left, s.y = s.top, s
            }(ut(b) ? b : b.contextElement || _t(t.elements.popper), s, l),
            w = Mt(v),
            E = Ft({
                reference: w,
                element: _,
                strategy: "absolute",
                placement: o
            }),
            T = Kt(Object.assign(Object.assign({}, _), E)),
            k = "popper" === u ? T : w,
            A = {
                top: y.top - k.top + g.top,
                bottom: k.bottom - y.bottom + g.bottom,
                left: y.left - k.left + g.left,
                right: k.right - y.right + g.right
            },
            L = t.modifiersData.offset;
        if ("popper" === u && L) {
            var O = L[o];
            Object.keys(A).forEach((function(t) {
                var e = [nt, et].indexOf(t) >= 0 ? 1 : -1,
                    n = [tt, et].indexOf(t) >= 0 ? "y" : "x";
                A[t] += O[n] * e
            }))
        }
        return A
    }

    function qt(t, e) {
        void 0 === e && (e = {});
        var n = e,
            i = n.placement,
            o = n.boundary,
            r = n.rootBoundary,
            s = n.padding,
            a = n.flipVariations,
            l = n.allowedAutoPlacements,
            c = void 0 === l ? st : l,
            u = zt(i),
            f = u ? a ? rt : rt.filter((function(t) {
                return zt(t) === u
            })) : ot,
            d = f.filter((function(t) {
                return c.indexOf(t) >= 0
            }));
        0 === d.length && (d = f);
        var h = d.reduce((function(e, n) {
            return e[n] = Yt(t, {
                placement: n,
                boundary: o,
                rootBoundary: r,
                padding: s
            })[ht(n)], e
        }), {});
        return Object.keys(h).sort((function(t, e) {
            return h[t] - h[e]
        }))
    }
    var Vt = {
        name: "flip",
        enabled: !0,
        phase: "main",
        fn: function(t) {
            var e = t.state,
                n = t.options,
                i = t.name;
            if (!e.modifiersData[i]._skip) {
                for (var o = n.mainAxis, r = void 0 === o || o, s = n.altAxis, a = void 0 === s || s, l = n.fallbackPlacements, c = n.padding, u = n.boundary, f = n.rootBoundary, d = n.altBoundary, h = n.flipVariations, p = void 0 === h || h, g = n.allowedAutoPlacements, m = e.options.placement, v = ht(m), _ = l || (v !== m && p ? function(t) {
                        if ("auto" === ht(t)) return [];
                        var e = Nt(t);
                        return [It(t), e, It(e)]
                    }(m) : [Nt(m)]), b = [m].concat(_).reduce((function(t, n) {
                        return t.concat("auto" === ht(n) ? qt(e, {
                            placement: n,
                            boundary: u,
                            rootBoundary: f,
                            padding: c,
                            flipVariations: p,
                            allowedAutoPlacements: g
                        }) : n)
                    }), []), y = e.rects.reference, w = e.rects.popper, E = new Map, T = !0, k = b[0], A = 0; A < b.length; A++) {
                    var L = b[A],
                        O = ht(L),
                        D = "start" === zt(L),
                        x = [tt, et].indexOf(O) >= 0,
                        C = x ? "width" : "height",
                        S = Yt(e, {
                            placement: L,
                            boundary: u,
                            rootBoundary: f,
                            altBoundary: d,
                            padding: c
                        }),
                        j = x ? D ? nt : it : D ? et : tt;
                    y[C] > w[C] && (j = Nt(j));
                    var N = Nt(j),
                        P = [];
                    if (r && P.push(S[O] <= 0), a && P.push(S[j] <= 0, S[N] <= 0), P.every((function(t) {
                            return t
                        }))) {
                        k = L, T = !1;
                        break
                    }
                    E.set(L, P)
                }
                if (T)
                    for (var I = function(t) {
                            var e = b.find((function(e) {
                                var n = E.get(e);
                                if (n) return n.slice(0, t).every((function(t) {
                                    return t
                                }))
                            }));
                            if (e) return k = e, "break"
                        }, M = p ? 3 : 1; M > 0 && "break" !== I(M); M--);
                e.placement !== k && (e.modifiersData[i]._skip = !0, e.placement = k, e.reset = !0)
            }
        },
        requiresIfExists: ["offset"],
        data: {
            _skip: !1
        }
    };

    function Xt(t, e, n) {
        return void 0 === n && (n = {
            x: 0,
            y: 0
        }), {
            top: t.top - e.height - n.y,
            right: t.right - e.width + n.x,
            bottom: t.bottom - e.height + n.y,
            left: t.left - e.width - n.x
        }
    }

    function Qt(t) {
        return [tt, nt, et, it].some((function(e) {
            return t[e] >= 0
        }))
    }
    var $t = {
            name: "hide",
            enabled: !0,
            phase: "main",
            requiresIfExists: ["preventOverflow"],
            fn: function(t) {
                var e = t.state,
                    n = t.name,
                    i = e.rects.reference,
                    o = e.rects.popper,
                    r = e.modifiersData.preventOverflow,
                    s = Yt(e, {
                        elementContext: "reference"
                    }),
                    a = Yt(e, {
                        altBoundary: !0
                    }),
                    l = Xt(s, i),
                    c = Xt(a, o, r),
                    u = Qt(l),
                    f = Qt(c);
                e.modifiersData[n] = {
                    referenceClippingOffsets: l,
                    popperEscapeOffsets: c,
                    isReferenceHidden: u,
                    hasPopperEscaped: f
                }, e.attributes.popper = Object.assign(Object.assign({}, e.attributes.popper), {}, {
                    "data-popper-reference-hidden": u,
                    "data-popper-escaped": f
                })
            }
        },
        Gt = {
            name: "offset",
            enabled: !0,
            phase: "main",
            requires: ["popperOffsets"],
            fn: function(t) {
                var e = t.state,
                    n = t.options,
                    i = t.name,
                    o = n.offset,
                    r = void 0 === o ? [0, 0] : o,
                    s = st.reduce((function(t, n) {
                        return t[n] = function(t, e, n) {
                            var i = ht(t),
                                o = [it, tt].indexOf(i) >= 0 ? -1 : 1,
                                r = "function" == typeof n ? n(Object.assign(Object.assign({}, e), {}, {
                                    placement: t
                                })) : n,
                                s = r[0],
                                a = r[1];
                            return s = s || 0, a = (a || 0) * o, [it, nt].indexOf(i) >= 0 ? {
                                x: a,
                                y: s
                            } : {
                                x: s,
                                y: a
                            }
                        }(n, e.rects, r), t
                    }), {}),
                    a = s[e.placement],
                    l = a.x,
                    c = a.y;
                null != e.modifiersData.popperOffsets && (e.modifiersData.popperOffsets.x += l, e.modifiersData.popperOffsets.y += c), e.modifiersData[i] = s
            }
        },
        Zt = {
            name: "popperOffsets",
            enabled: !0,
            phase: "read",
            fn: function(t) {
                var e = t.state,
                    n = t.name;
                e.modifiersData[n] = Ft({
                    reference: e.rects.reference,
                    element: e.rects.popper,
                    strategy: "absolute",
                    placement: e.placement
                })
            },
            data: {}
        },
        Jt = {
            name: "preventOverflow",
            enabled: !0,
            phase: "main",
            fn: function(t) {
                var e = t.state,
                    n = t.options,
                    i = t.name,
                    o = n.mainAxis,
                    r = void 0 === o || o,
                    s = n.altAxis,
                    a = void 0 !== s && s,
                    l = n.boundary,
                    c = n.rootBoundary,
                    u = n.altBoundary,
                    f = n.padding,
                    d = n.tether,
                    h = void 0 === d || d,
                    p = n.tetherOffset,
                    g = void 0 === p ? 0 : p,
                    m = Yt(e, {
                        boundary: l,
                        rootBoundary: c,
                        padding: f,
                        altBoundary: u
                    }),
                    v = ht(e.placement),
                    _ = zt(e.placement),
                    b = !_,
                    y = Et(v),
                    w = "x" === y ? "y" : "x",
                    E = e.modifiersData.popperOffsets,
                    T = e.rects.reference,
                    k = e.rects.popper,
                    A = "function" == typeof g ? g(Object.assign(Object.assign({}, e.rects), {}, {
                        placement: e.placement
                    })) : g,
                    L = {
                        x: 0,
                        y: 0
                    };
                if (E) {
                    if (r) {
                        var O = "y" === y ? tt : it,
                            D = "y" === y ? et : nt,
                            x = "y" === y ? "height" : "width",
                            C = E[y],
                            S = E[y] + m[O],
                            j = E[y] - m[D],
                            N = h ? -k[x] / 2 : 0,
                            P = "start" === _ ? T[x] : k[x],
                            I = "start" === _ ? -k[x] : -T[x],
                            M = e.elements.arrow,
                            B = h && M ? pt(M) : {
                                width: 0,
                                height: 0
                            },
                            H = e.modifiersData["arrow#persistent"] ? e.modifiersData["arrow#persistent"].padding : {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0
                            },
                            R = H[O],
                            W = H[D],
                            K = Tt(0, T[x], B[x]),
                            U = b ? T[x] / 2 - N - K - R - A : P - K - R - A,
                            z = b ? -T[x] / 2 + N + K + W + A : I + K + W + A,
                            F = e.elements.arrow && wt(e.elements.arrow),
                            Y = F ? "y" === y ? F.clientTop || 0 : F.clientLeft || 0 : 0,
                            q = e.modifiersData.offset ? e.modifiersData.offset[e.placement][y] : 0,
                            V = E[y] + U - q - Y,
                            X = E[y] + z - q,
                            Q = Tt(h ? Math.min(S, V) : S, C, h ? Math.max(j, X) : j);
                        E[y] = Q, L[y] = Q - C
                    }
                    if (a) {
                        var $ = "x" === y ? tt : it,
                            G = "x" === y ? et : nt,
                            Z = E[w],
                            J = Tt(Z + m[$], Z, Z - m[G]);
                        E[w] = J, L[w] = J - Z
                    }
                    e.modifiersData[i] = L
                }
            },
            requiresIfExists: ["offset"]
        };

    function te(t, e, n) {
        void 0 === n && (n = !1);
        var i, o, r = _t(e),
            s = Mt(t),
            a = ft(e),
            l = {
                scrollLeft: 0,
                scrollTop: 0
            },
            c = {
                x: 0,
                y: 0
            };
        return (a || !a && !n) && (("body" !== lt(e) || Rt(r)) && (l = (i = e) !== ct(i) && ft(i) ? {
            scrollLeft: (o = i).scrollLeft,
            scrollTop: o.scrollTop
        } : Bt(i)), ft(e) ? ((c = Mt(e)).x += e.clientLeft, c.y += e.clientTop) : r && (c.x = Ht(r))), {
            x: s.left + l.scrollLeft - c.x,
            y: s.top + l.scrollTop - c.y,
            width: s.width,
            height: s.height
        }
    }
    var ee = {
        placement: "bottom",
        modifiers: [],
        strategy: "absolute"
    };

    function ne() {
        for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
        return !e.some((function(t) {
            return !(t && "function" == typeof t.getBoundingClientRect)
        }))
    }

    function ie(t) {
        void 0 === t && (t = {});
        var e = t,
            n = e.defaultModifiers,
            i = void 0 === n ? [] : n,
            o = e.defaultOptions,
            r = void 0 === o ? ee : o;
        return function(t, e, n) {
            void 0 === n && (n = r);
            var o, s, a = {
                    placement: "bottom",
                    orderedModifiers: [],
                    options: Object.assign(Object.assign({}, ee), r),
                    modifiersData: {},
                    elements: {
                        reference: t,
                        popper: e
                    },
                    attributes: {},
                    styles: {}
                },
                l = [],
                c = !1,
                u = {
                    state: a,
                    setOptions: function(n) {
                        f(), a.options = Object.assign(Object.assign(Object.assign({}, r), a.options), n), a.scrollParents = {
                            reference: ut(t) ? Wt(t) : t.contextElement ? Wt(t.contextElement) : [],
                            popper: Wt(e)
                        };
                        var o, s, c = function(t) {
                            var e = function(t) {
                                var e = new Map,
                                    n = new Set,
                                    i = [];
                                return t.forEach((function(t) {
                                    e.set(t.name, t)
                                })), t.forEach((function(t) {
                                    n.has(t.name) || function t(o) {
                                        n.add(o.name), [].concat(o.requires || [], o.requiresIfExists || []).forEach((function(i) {
                                            if (!n.has(i)) {
                                                var o = e.get(i);
                                                o && t(o)
                                            }
                                        })), i.push(o)
                                    }(t)
                                })), i
                            }(t);
                            return at.reduce((function(t, n) {
                                return t.concat(e.filter((function(t) {
                                    return t.phase === n
                                })))
                            }), [])
                        }((o = [].concat(i, a.options.modifiers), s = o.reduce((function(t, e) {
                            var n = t[e.name];
                            return t[e.name] = n ? Object.assign(Object.assign(Object.assign({}, n), e), {}, {
                                options: Object.assign(Object.assign({}, n.options), e.options),
                                data: Object.assign(Object.assign({}, n.data), e.data)
                            }) : e, t
                        }), {}), Object.keys(s).map((function(t) {
                            return s[t]
                        }))));
                        return a.orderedModifiers = c.filter((function(t) {
                            return t.enabled
                        })), a.orderedModifiers.forEach((function(t) {
                            var e = t.name,
                                n = t.options,
                                i = void 0 === n ? {} : n,
                                o = t.effect;
                            if ("function" == typeof o) {
                                var r = o({
                                    state: a,
                                    name: e,
                                    instance: u,
                                    options: i
                                });
                                l.push(r || function() {})
                            }
                        })), u.update()
                    },
                    forceUpdate: function() {
                        if (!c) {
                            var t = a.elements,
                                e = t.reference,
                                n = t.popper;
                            if (ne(e, n)) {
                                a.rects = {
                                    reference: te(e, wt(n), "fixed" === a.options.strategy),
                                    popper: pt(n)
                                }, a.reset = !1, a.placement = a.options.placement, a.orderedModifiers.forEach((function(t) {
                                    return a.modifiersData[t.name] = Object.assign({}, t.data)
                                }));
                                for (var i = 0; i < a.orderedModifiers.length; i++)
                                    if (!0 !== a.reset) {
                                        var o = a.orderedModifiers[i],
                                            r = o.fn,
                                            s = o.options,
                                            l = void 0 === s ? {} : s,
                                            f = o.name;
                                        "function" == typeof r && (a = r({
                                            state: a,
                                            options: l,
                                            name: f,
                                            instance: u
                                        }) || a)
                                    } else a.reset = !1, i = -1
                            }
                        }
                    },
                    update: (o = function() {
                        return new Promise((function(t) {
                            u.forceUpdate(), t(a)
                        }))
                    }, function() {
                        return s || (s = new Promise((function(t) {
                            Promise.resolve().then((function() {
                                s = void 0, t(o())
                            }))
                        }))), s
                    }),
                    destroy: function() {
                        f(), c = !0
                    }
                };
            if (!ne(t, e)) return u;

            function f() {
                l.forEach((function(t) {
                    return t()
                })), l = []
            }
            return u.setOptions(n).then((function(t) {
                !c && n.onFirstUpdate && n.onFirstUpdate(t)
            })), u
        }
    }
    var oe = ie(),
        re = ie({
            defaultModifiers: [St, Zt, xt, dt]
        }),
        se = ie({
            defaultModifiers: [St, Zt, xt, dt, Gt, Vt, Jt, Lt, $t]
        }),
        ae = Object.freeze({
            __proto__: null,
            popperGenerator: ie,
            detectOverflow: Yt,
            createPopperBase: oe,
            createPopper: se,
            createPopperLite: re,
            top: tt,
            bottom: et,
            right: nt,
            left: it,
            auto: "auto",
            basePlacements: ot,
            start: "start",
            end: "end",
            clippingParents: "clippingParents",
            viewport: "viewport",
            popper: "popper",
            reference: "reference",
            variationPlacements: rt,
            placements: st,
            beforeRead: "beforeRead",
            read: "read",
            afterRead: "afterRead",
            beforeMain: "beforeMain",
            main: "main",
            afterMain: "afterMain",
            beforeWrite: "beforeWrite",
            write: "write",
            afterWrite: "afterWrite",
            modifierPhases: at,
            applyStyles: dt,
            arrow: Lt,
            computeStyles: xt,
            eventListeners: St,
            flip: Vt,
            hide: $t,
            offset: Gt,
            popperOffsets: Zt,
            preventOverflow: Jt
        }),
        le = new RegExp("ArrowUp|ArrowDown|Escape"),
        ce = b ? "top-end" : "top-start",
        ue = b ? "top-start" : "top-end",
        fe = b ? "bottom-end" : "bottom-start",
        de = b ? "bottom-start" : "bottom-end",
        he = b ? "left-start" : "right-start",
        pe = b ? "right-start" : "left-start",
        ge = {
            offset: [0, 2],
            flip: !0,
            boundary: "clippingParents",
            reference: "toggle",
            display: "dynamic",
            popperConfig: null
        },
        me = {
            offset: "(array|string|function)",
            flip: "boolean",
            boundary: "(string|element)",
            reference: "(string|element|object)",
            display: "string",
            popperConfig: "(null|object|function)"
        },
        ve = function(t) {
            function o(e, n) {
                var i;
                return (i = t.call(this, e) || this)._popper = null, i._config = i._getConfig(n), i._menu = i._getMenuElement(), i._inNavbar = i._detectNavbar(), i._addEventListeners(), i
            }
            i(o, t);
            var r = o.prototype;
            return r.toggle = function() {
                if (!this._element.disabled && !this._element.classList.contains("disabled")) {
                    var t = this._element.classList.contains("show");
                    o.clearMenus(), t || this.show()
                }
            }, r.show = function() {
                if (!(this._element.disabled || this._element.classList.contains("disabled") || this._menu.classList.contains("show"))) {
                    var t = o.getParentFromElement(this._element),
                        e = {
                            relatedTarget: this._element
                        };
                    if (!B.trigger(this._element, "show.bs.dropdown", e).defaultPrevented) {
                        if (this._inNavbar) z.setDataAttribute(this._menu, "popper", "none");
                        else {
                            if (void 0 === ae) throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
                            var n = this._element;
                            "parent" === this._config.reference ? n = t : d(this._config.reference) ? (n = this._config.reference, void 0 !== this._config.reference.jquery && (n = this._config.reference[0])) : "object" == typeof this._config.reference && (n = this._config.reference);
                            var i = this._getPopperConfig(),
                                r = i.modifiers.find((function(t) {
                                    return "applyStyles" === t.name && !1 === t.enabled
                                }));
                            this._popper = se(n, this._menu, i), r && z.setDataAttribute(this._menu, "popper", "static")
                        }
                        var s;
                        "ontouchstart" in document.documentElement && !t.closest(".navbar-nav") && (s = []).concat.apply(s, document.body.children).forEach((function(t) {
                            return B.on(t, "mouseover", null, (function() {}))
                        })), this._element.focus(), this._element.setAttribute("aria-expanded", !0), this._menu.classList.toggle("show"), this._element.classList.toggle("show"), B.trigger(this._element, "shown.bs.dropdown", e)
                    }
                }
            }, r.hide = function() {
                if (!this._element.disabled && !this._element.classList.contains("disabled") && this._menu.classList.contains("show")) {
                    var t = {
                        relatedTarget: this._element
                    };
                    B.trigger(this._element, "hide.bs.dropdown", t).defaultPrevented || (this._popper && this._popper.destroy(), this._menu.classList.toggle("show"), this._element.classList.toggle("show"), z.removeDataAttribute(this._menu, "popper"), B.trigger(this._element, "hidden.bs.dropdown", t))
                }
            }, r.dispose = function() {
                t.prototype.dispose.call(this), B.off(this._element, ".bs.dropdown"), this._menu = null, this._popper && (this._popper.destroy(), this._popper = null)
            }, r.update = function() {
                this._inNavbar = this._detectNavbar(), this._popper && this._popper.update()
            }, r._addEventListeners = function() {
                var t = this;
                B.on(this._element, "click.bs.dropdown", (function(e) {
                    e.preventDefault(), e.stopPropagation(), t.toggle()
                }))
            }, r._getConfig = function(t) {
                if (t = n({}, this.constructor.Default, z.getDataAttributes(this._element), t), p("dropdown", t, this.constructor.DefaultType), "object" == typeof t.reference && !d(t.reference) && "function" != typeof t.reference.getBoundingClientRect) throw new TypeError("dropdown".toUpperCase() + ': Option "reference" provided type "object" without a required "getBoundingClientRect" method.');
                return t
            }, r._getMenuElement = function() {
                return function(t, e) {
                    for (var n = t.nextElementSibling; n;) {
                        if (n.matches(e)) return [n];
                        n = n.nextElementSibling
                    }
                    return []
                }(this._element, ".dropdown-menu")[0]
            }, r._getPlacement = function() {
                var t = this._element.parentNode;
                if (t.classList.contains("dropend")) return he;
                if (t.classList.contains("dropstart")) return pe;
                var e = "end" === getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();
                return t.classList.contains("dropup") ? e ? ue : ce : e ? de : fe
            }, r._detectNavbar = function() {
                return null !== this._element.closest(".navbar")
            }, r._getOffset = function() {
                var t = this,
                    e = this._config.offset;
                return "string" == typeof e ? e.split(",").map((function(t) {
                    return Number.parseInt(t, 10)
                })) : "function" == typeof e ? function(n) {
                    return e(n, t._element)
                } : e
            }, r._getPopperConfig = function() {
                var t = {
                    placement: this._getPlacement(),
                    modifiers: [{
                        name: "preventOverflow",
                        options: {
                            altBoundary: this._config.flip,
                            boundary: this._config.boundary
                        }
                    }, {
                        name: "offset",
                        options: {
                            offset: this._getOffset()
                        }
                    }]
                };
                return "static" === this._config.display && (t.modifiers = [{
                    name: "applyStyles",
                    enabled: !1
                }]), n({}, t, "function" == typeof this._config.popperConfig ? this._config.popperConfig(t) : this._config.popperConfig)
            }, o.dropdownInterface = function(t, e) {
                var n = T(t, "bs.dropdown");
                if (n || (n = new o(t, "object" == typeof e ? e : null)), "string" == typeof e) {
                    if (void 0 === n[e]) throw new TypeError('No method named "' + e + '"');
                    n[e]()
                }
            }, o.jQueryInterface = function(t) {
                return this.each((function() {
                    o.dropdownInterface(this, t)
                }))
            }, o.clearMenus = function(t) {
                if (!t || 2 !== t.button && ("keyup" !== t.type || "Tab" === t.key))
                    for (var e = F('[data-bs-toggle="dropdown"]'), n = 0, i = e.length; n < i; n++) {
                        var o = T(e[n], "bs.dropdown"),
                            r = {
                                relatedTarget: e[n]
                            };
                        if (t && "click" === t.type && (r.clickEvent = t), o) {
                            var s, a = o._menu;
                            if (e[n].classList.contains("show") && !(t && ("click" === t.type && /input|textarea/i.test(t.target.tagName) || "keyup" === t.type && "Tab" === t.key) && a.contains(t.target) || B.trigger(e[n], "hide.bs.dropdown", r).defaultPrevented)) "ontouchstart" in document.documentElement && (s = []).concat.apply(s, document.body.children).forEach((function(t) {
                                return B.off(t, "mouseover", null, (function() {}))
                            })), e[n].setAttribute("aria-expanded", "false"), o._popper && o._popper.destroy(), a.classList.remove("show"), e[n].classList.remove("show"), z.removeDataAttribute(a, "popper"), B.trigger(e[n], "hidden.bs.dropdown", r)
                        }
                    }
            }, o.getParentFromElement = function(t) {
                return c(t) || t.parentNode
            }, o.dataApiKeydownHandler = function(t) {
                if (!(/input|textarea/i.test(t.target.tagName) ? "Space" === t.key || "Escape" !== t.key && ("ArrowDown" !== t.key && "ArrowUp" !== t.key || t.target.closest(".dropdown-menu")) : !le.test(t.key)) && (t.preventDefault(), t.stopPropagation(), !this.disabled && !this.classList.contains("disabled"))) {
                    var e = o.getParentFromElement(this),
                        n = this.classList.contains("show");
                    if ("Escape" === t.key) return (this.matches('[data-bs-toggle="dropdown"]') ? this : V(this, '[data-bs-toggle="dropdown"]')[0]).focus(), void o.clearMenus();
                    if (n || "ArrowUp" !== t.key && "ArrowDown" !== t.key)
                        if (n && "Space" !== t.key) {
                            var i = F(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)", e).filter(g);
                            if (i.length) {
                                var r = i.indexOf(t.target);
                                "ArrowUp" === t.key && r > 0 && r--, "ArrowDown" === t.key && r < i.length - 1 && r++, i[r = -1 === r ? 0 : r].focus()
                            }
                        } else o.clearMenus();
                    else(this.matches('[data-bs-toggle="dropdown"]') ? this : V(this, '[data-bs-toggle="dropdown"]')[0]).click()
                }
            }, e(o, null, [{
                key: "Default",
                get: function() {
                    return ge
                }
            }, {
                key: "DefaultType",
                get: function() {
                    return me
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return "bs.dropdown"
                }
            }]), o
        }(H);
    B.on(document, "keydown.bs.dropdown.data-api", '[data-bs-toggle="dropdown"]', ve.dataApiKeydownHandler), B.on(document, "keydown.bs.dropdown.data-api", ".dropdown-menu", ve.dataApiKeydownHandler), B.on(document, "click.bs.dropdown.data-api", ve.clearMenus), B.on(document, "keyup.bs.dropdown.data-api", ve.clearMenus), B.on(document, "click.bs.dropdown.data-api", '[data-bs-toggle="dropdown"]', (function(t) {
        t.preventDefault(), t.stopPropagation(), ve.dropdownInterface(this, "toggle")
    })), B.on(document, "click.bs.dropdown.data-api", ".dropdown form", (function(t) {
        return t.stopPropagation()
    })), y("dropdown", ve);
    var _e = {
            backdrop: !0,
            keyboard: !0,
            focus: !0
        },
        be = {
            backdrop: "(boolean|string)",
            keyboard: "boolean",
            focus: "boolean"
        },
        ye = function(t) {
            function o(e, n) {
                var i;
                return (i = t.call(this, e) || this)._config = i._getConfig(n), i._dialog = Y(".modal-dialog", e), i._backdrop = null, i._isShown = !1, i._isBodyOverflowing = !1, i._ignoreBackdropClick = !1, i._isTransitioning = !1, i._scrollbarWidth = 0, i
            }
            i(o, t);
            var r = o.prototype;
            return r.toggle = function(t) {
                return this._isShown ? this.hide() : this.show(t)
            }, r.show = function(t) {
                var e = this;
                if (!this._isShown && !this._isTransitioning) {
                    this._element.classList.contains("fade") && (this._isTransitioning = !0);
                    var n = B.trigger(this._element, "show.bs.modal", {
                        relatedTarget: t
                    });
                    this._isShown || n.defaultPrevented || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), B.on(this._element, "click.dismiss.bs.modal", '[data-bs-dismiss="modal"]', (function(t) {
                        return e.hide(t)
                    })), B.on(this._dialog, "mousedown.dismiss.bs.modal", (function() {
                        B.one(e._element, "mouseup.dismiss.bs.modal", (function(t) {
                            t.target === e._element && (e._ignoreBackdropClick = !0)
                        }))
                    })), this._showBackdrop((function() {
                        return e._showElement(t)
                    })))
                }
            }, r.hide = function(t) {
                var e = this;
                if (t && t.preventDefault(), this._isShown && !this._isTransitioning && !B.trigger(this._element, "hide.bs.modal").defaultPrevented) {
                    this._isShown = !1;
                    var n = this._element.classList.contains("fade");
                    if (n && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), B.off(document, "focusin.bs.modal"), this._element.classList.remove("show"), B.off(this._element, "click.dismiss.bs.modal"), B.off(this._dialog, "mousedown.dismiss.bs.modal"), n) {
                        var i = u(this._element);
                        B.one(this._element, "transitionend", (function(t) {
                            return e._hideModal(t)
                        })), h(this._element, i)
                    } else this._hideModal()
                }
            }, r.dispose = function() {
                [window, this._element, this._dialog].forEach((function(t) {
                    return B.off(t, ".bs.modal")
                })), t.prototype.dispose.call(this), B.off(document, "focusin.bs.modal"), this._config = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
            }, r.handleUpdate = function() {
                this._adjustDialog()
            }, r._getConfig = function(t) {
                return t = n({}, _e, t), p("modal", t, be), t
            }, r._showElement = function(t) {
                var e = this,
                    n = this._element.classList.contains("fade"),
                    i = Y(".modal-body", this._dialog);
                this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), this._element.scrollTop = 0, i && (i.scrollTop = 0), n && v(this._element), this._element.classList.add("show"), this._config.focus && this._enforceFocus();
                var o = function() {
                    e._config.focus && e._element.focus(), e._isTransitioning = !1, B.trigger(e._element, "shown.bs.modal", {
                        relatedTarget: t
                    })
                };
                if (n) {
                    var r = u(this._dialog);
                    B.one(this._dialog, "transitionend", o), h(this._dialog, r)
                } else o()
            }, r._enforceFocus = function() {
                var t = this;
                B.off(document, "focusin.bs.modal"), B.on(document, "focusin.bs.modal", (function(e) {
                    document === e.target || t._element === e.target || t._element.contains(e.target) || t._element.focus()
                }))
            }, r._setEscapeEvent = function() {
                var t = this;
                this._isShown ? B.on(this._element, "keydown.dismiss.bs.modal", (function(e) {
                    t._config.keyboard && "Escape" === e.key ? (e.preventDefault(), t.hide()) : t._config.keyboard || "Escape" !== e.key || t._triggerBackdropTransition()
                })) : B.off(this._element, "keydown.dismiss.bs.modal")
            }, r._setResizeEvent = function() {
                var t = this;
                this._isShown ? B.on(window, "resize.bs.modal", (function() {
                    return t._adjustDialog()
                })) : B.off(window, "resize.bs.modal")
            }, r._hideModal = function() {
                var t = this;
                this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._isTransitioning = !1, this._showBackdrop((function() {
                    document.body.classList.remove("modal-open"), t._resetAdjustments(), t._resetScrollbar(), B.trigger(t._element, "hidden.bs.modal")
                }))
            }, r._removeBackdrop = function() {
                this._backdrop.parentNode.removeChild(this._backdrop), this._backdrop = null
            }, r._showBackdrop = function(t) {
                var e = this,
                    n = this._element.classList.contains("fade") ? "fade" : "";
                if (this._isShown && this._config.backdrop) {
                    if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", n && this._backdrop.classList.add(n), document.body.appendChild(this._backdrop), B.on(this._element, "click.dismiss.bs.modal", (function(t) {
                            e._ignoreBackdropClick ? e._ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" === e._config.backdrop ? e._triggerBackdropTransition() : e.hide())
                        })), n && v(this._backdrop), this._backdrop.classList.add("show"), !n) return void t();
                    var i = u(this._backdrop);
                    B.one(this._backdrop, "transitionend", t), h(this._backdrop, i)
                } else if (!this._isShown && this._backdrop) {
                    this._backdrop.classList.remove("show");
                    var o = function() {
                        e._removeBackdrop(), t()
                    };
                    if (this._element.classList.contains("fade")) {
                        var r = u(this._backdrop);
                        B.one(this._backdrop, "transitionend", o), h(this._backdrop, r)
                    } else o()
                } else t()
            }, r._triggerBackdropTransition = function() {
                var t = this;
                if (!B.trigger(this._element, "hidePrevented.bs.modal").defaultPrevented) {
                    var e = this._element.scrollHeight > document.documentElement.clientHeight;
                    e || (this._element.style.overflowY = "hidden"), this._element.classList.add("modal-static");
                    var n = u(this._dialog);
                    B.off(this._element, "transitionend"), B.one(this._element, "transitionend", (function() {
                        t._element.classList.remove("modal-static"), e || (B.one(t._element, "transitionend", (function() {
                            t._element.style.overflowY = ""
                        })), h(t._element, n))
                    })), h(this._element, n), this._element.focus()
                }
            }, r._adjustDialog = function() {
                var t = this._element.scrollHeight > document.documentElement.clientHeight;
                (!this._isBodyOverflowing && t && !b || this._isBodyOverflowing && !t && b) && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), (this._isBodyOverflowing && !t && !b || !this._isBodyOverflowing && t && b) && (this._element.style.paddingRight = this._scrollbarWidth + "px")
            }, r._resetAdjustments = function() {
                this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
            }, r._checkScrollbar = function() {
                var t = document.body.getBoundingClientRect();
                this._isBodyOverflowing = Math.round(t.left + t.right) < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
            }, r._setScrollbar = function() {
                var t = this;
                this._isBodyOverflowing && (this._setElementAttributes(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top", "paddingRight", (function(e) {
                    return e + t._scrollbarWidth
                })), this._setElementAttributes(".sticky-top", "marginRight", (function(e) {
                    return e - t._scrollbarWidth
                })), this._setElementAttributes("body", "paddingRight", (function(e) {
                    return e + t._scrollbarWidth
                }))), document.body.classList.add("modal-open")
            }, r._setElementAttributes = function(t, e, n) {
                F(t).forEach((function(t) {
                    var i = t.style[e],
                        o = window.getComputedStyle(t)[e];
                    z.setDataAttribute(t, e, i), t.style[e] = n(Number.parseFloat(o)) + "px"
                }))
            }, r._resetScrollbar = function() {
                this._resetElementAttributes(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top", "paddingRight"), this._resetElementAttributes(".sticky-top", "marginRight"), this._resetElementAttributes("body", "paddingRight")
            }, r._resetElementAttributes = function(t, e) {
                F(t).forEach((function(t) {
                    var n = z.getDataAttribute(t, e);
                    void 0 === n && t === document.body ? t.style[e] = "" : (z.removeDataAttribute(t, e), t.style[e] = n)
                }))
            }, r._getScrollbarWidth = function() {
                var t = document.createElement("div");
                t.className = "modal-scrollbar-measure", document.body.appendChild(t);
                var e = t.getBoundingClientRect().width - t.clientWidth;
                return document.body.removeChild(t), e
            }, o.jQueryInterface = function(t, e) {
                return this.each((function() {
                    var i = T(this, "bs.modal"),
                        r = n({}, _e, z.getDataAttributes(this), "object" == typeof t && t ? t : {});
                    if (i || (i = new o(this, r)), "string" == typeof t) {
                        if (void 0 === i[t]) throw new TypeError('No method named "' + t + '"');
                        i[t](e)
                    }
                }))
            }, e(o, null, [{
                key: "Default",
                get: function() {
                    return _e
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return "bs.modal"
                }
            }]), o
        }(H);
    B.on(document, "click.bs.modal.data-api", '[data-bs-toggle="modal"]', (function(t) {
        var e = this,
            i = c(this);
        "A" !== this.tagName && "AREA" !== this.tagName || t.preventDefault(), B.one(i, "show.bs.modal", (function(t) {
            t.defaultPrevented || B.one(i, "hidden.bs.modal", (function() {
                g(e) && e.focus()
            }))
        }));
        var o = T(i, "bs.modal");
        if (!o) {
            var r = n({}, z.getDataAttributes(i), z.getDataAttributes(this));
            o = new ye(i, r)
        }
        o.toggle(this)
    })), y("modal", ye);
    var we = new Set(["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"]),
        Ee = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,
        Te = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;

    function ke(t, e, n) {
        var i;
        if (!t.length) return t;
        if (n && "function" == typeof n) return n(t);
        for (var o = (new window.DOMParser).parseFromString(t, "text/html"), r = Object.keys(e), s = (i = []).concat.apply(i, o.body.querySelectorAll("*")), a = function(t, n) {
                var i, o = s[t],
                    a = o.nodeName.toLowerCase();
                if (!r.includes(a)) return o.parentNode.removeChild(o), "continue";
                var l = (i = []).concat.apply(i, o.attributes),
                    c = [].concat(e["*"] || [], e[a] || []);
                l.forEach((function(t) {
                    (function(t, e) {
                        var n = t.nodeName.toLowerCase();
                        if (e.includes(n)) return !we.has(n) || Boolean(Ee.test(t.nodeValue) || Te.test(t.nodeValue));
                        for (var i = e.filter((function(t) {
                                return t instanceof RegExp
                            })), o = 0, r = i.length; o < r; o++)
                            if (i[o].test(n)) return !0;
                        return !1
                    })(t, c) || o.removeAttribute(t.nodeName)
                }))
            }, l = 0, c = s.length; l < c; l++) a(l);
        return o.body.innerHTML
    }
    var Ae = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
        Le = new Set(["sanitize", "allowList", "sanitizeFn"]),
        Oe = {
            animation: "boolean",
            template: "string",
            title: "(string|element|function)",
            trigger: "string",
            delay: "(number|object)",
            html: "boolean",
            selector: "(string|boolean)",
            placement: "(string|function)",
            offset: "(array|string|function)",
            container: "(string|element|boolean)",
            fallbackPlacements: "array",
            boundary: "(string|element)",
            customClass: "(string|function)",
            sanitize: "boolean",
            sanitizeFn: "(null|function)",
            allowList: "object",
            popperConfig: "(null|object|function)"
        },
        De = {
            AUTO: "auto",
            TOP: "top",
            RIGHT: b ? "left" : "right",
            BOTTOM: "bottom",
            LEFT: b ? "right" : "left"
        },
        xe = {
            animation: !0,
            template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
            trigger: "hover focus",
            title: "",
            delay: 0,
            html: !1,
            selector: !1,
            placement: "top",
            offset: [0, 0],
            container: !1,
            fallbackPlacements: ["top", "right", "bottom", "left"],
            boundary: "clippingParents",
            customClass: "",
            sanitize: !0,
            sanitizeFn: null,
            allowList: {
                "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
                a: ["target", "href", "title", "rel"],
                area: [],
                b: [],
                br: [],
                col: [],
                code: [],
                div: [],
                em: [],
                hr: [],
                h1: [],
                h2: [],
                h3: [],
                h4: [],
                h5: [],
                h6: [],
                i: [],
                img: ["src", "srcset", "alt", "title", "width", "height"],
                li: [],
                ol: [],
                p: [],
                pre: [],
                s: [],
                small: [],
                span: [],
                sub: [],
                sup: [],
                strong: [],
                u: [],
                ul: []
            },
            popperConfig: null
        },
        Ce = {
            HIDE: "hide.bs.tooltip",
            HIDDEN: "hidden.bs.tooltip",
            SHOW: "show.bs.tooltip",
            SHOWN: "shown.bs.tooltip",
            INSERTED: "inserted.bs.tooltip",
            CLICK: "click.bs.tooltip",
            FOCUSIN: "focusin.bs.tooltip",
            FOCUSOUT: "focusout.bs.tooltip",
            MOUSEENTER: "mouseenter.bs.tooltip",
            MOUSELEAVE: "mouseleave.bs.tooltip"
        },
        Se = function(t) {
            function o(e, n) {
                var i;
                if (void 0 === ae) throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
                return (i = t.call(this, e) || this)._isEnabled = !0, i._timeout = 0, i._hoverState = "", i._activeTrigger = {}, i._popper = null, i.config = i._getConfig(n), i.tip = null, i._setListeners(), i
            }
            i(o, t);
            var r = o.prototype;
            return r.enable = function() {
                this._isEnabled = !0
            }, r.disable = function() {
                this._isEnabled = !1
            }, r.toggleEnabled = function() {
                this._isEnabled = !this._isEnabled
            }, r.toggle = function(t) {
                if (this._isEnabled)
                    if (t) {
                        var e = this._initializeOnDelegatedTarget(t);
                        e._activeTrigger.click = !e._activeTrigger.click, e._isWithActiveTrigger() ? e._enter(null, e) : e._leave(null, e)
                    } else {
                        if (this.getTipElement().classList.contains("show")) return void this._leave(null, this);
                        this._enter(null, this)
                    }
            }, r.dispose = function() {
                clearTimeout(this._timeout), B.off(this._element, this.constructor.EVENT_KEY), B.off(this._element.closest(".modal"), "hide.bs.modal", this._hideModalHandler), this.tip && this.tip.parentNode && this.tip.parentNode.removeChild(this.tip), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._popper && this._popper.destroy(), this._popper = null, this.config = null, this.tip = null, t.prototype.dispose.call(this)
            }, r.show = function() {
                var t = this;
                if ("none" === this._element.style.display) throw new Error("Please use show on visible elements");
                if (this.isWithContent() && this._isEnabled) {
                    var e = B.trigger(this._element, this.constructor.Event.SHOW),
                        n = function t(e) {
                            if (!document.documentElement.attachShadow) return null;
                            if ("function" == typeof e.getRootNode) {
                                var n = e.getRootNode();
                                return n instanceof ShadowRoot ? n : null
                            }
                            return e instanceof ShadowRoot ? e : e.parentNode ? t(e.parentNode) : null
                        }(this._element),
                        i = null === n ? this._element.ownerDocument.documentElement.contains(this._element) : n.contains(this._element);
                    if (!e.defaultPrevented && i) {
                        var o = this.getTipElement(),
                            r = s(this.constructor.NAME);
                        o.setAttribute("id", r), this._element.setAttribute("aria-describedby", r), this.setContent(), this.config.animation && o.classList.add("fade");
                        var a = "function" == typeof this.config.placement ? this.config.placement.call(this, o, this._element) : this.config.placement,
                            l = this._getAttachment(a);
                        this._addAttachmentClass(l);
                        var c = this._getContainer();
                        E(o, this.constructor.DATA_KEY, this), this._element.ownerDocument.documentElement.contains(this.tip) || c.appendChild(o), B.trigger(this._element, this.constructor.Event.INSERTED), this._popper = se(this._element, o, this._getPopperConfig(l)), o.classList.add("show");
                        var f, d, p = "function" == typeof this.config.customClass ? this.config.customClass() : this.config.customClass;
                        p && (f = o.classList).add.apply(f, p.split(" ")), "ontouchstart" in document.documentElement && (d = []).concat.apply(d, document.body.children).forEach((function(t) {
                            B.on(t, "mouseover", (function() {}))
                        }));
                        var g = function() {
                            var e = t._hoverState;
                            t._hoverState = null, B.trigger(t._element, t.constructor.Event.SHOWN), "out" === e && t._leave(null, t)
                        };
                        if (this.tip.classList.contains("fade")) {
                            var m = u(this.tip);
                            B.one(this.tip, "transitionend", g), h(this.tip, m)
                        } else g()
                    }
                }
            }, r.hide = function() {
                var t = this;
                if (this._popper) {
                    var e = this.getTipElement(),
                        n = function() {
                            "show" !== t._hoverState && e.parentNode && e.parentNode.removeChild(e), t._cleanTipClass(), t._element.removeAttribute("aria-describedby"), B.trigger(t._element, t.constructor.Event.HIDDEN), t._popper && (t._popper.destroy(), t._popper = null)
                        };
                    if (!B.trigger(this._element, this.constructor.Event.HIDE).defaultPrevented) {
                        var i;
                        if (e.classList.remove("show"), "ontouchstart" in document.documentElement && (i = []).concat.apply(i, document.body.children).forEach((function(t) {
                                return B.off(t, "mouseover", m)
                            })), this._activeTrigger.click = !1, this._activeTrigger.focus = !1, this._activeTrigger.hover = !1, this.tip.classList.contains("fade")) {
                            var o = u(e);
                            B.one(e, "transitionend", n), h(e, o)
                        } else n();
                        this._hoverState = ""
                    }
                }
            }, r.update = function() {
                null !== this._popper && this._popper.update()
            }, r.isWithContent = function() {
                return Boolean(this.getTitle())
            }, r.getTipElement = function() {
                if (this.tip) return this.tip;
                var t = document.createElement("div");
                return t.innerHTML = this.config.template, this.tip = t.children[0], this.tip
            }, r.setContent = function() {
                var t = this.getTipElement();
                this.setElementContent(Y(".tooltip-inner", t), this.getTitle()), t.classList.remove("fade", "show")
            }, r.setElementContent = function(t, e) {
                if (null !== t) return "object" == typeof e && d(e) ? (e.jquery && (e = e[0]), void(this.config.html ? e.parentNode !== t && (t.innerHTML = "", t.appendChild(e)) : t.textContent = e.textContent)) : void(this.config.html ? (this.config.sanitize && (e = ke(e, this.config.allowList, this.config.sanitizeFn)), t.innerHTML = e) : t.textContent = e)
            }, r.getTitle = function() {
                var t = this._element.getAttribute("data-bs-original-title");
                return t || (t = "function" == typeof this.config.title ? this.config.title.call(this._element) : this.config.title), t
            }, r.updateAttachment = function(t) {
                return "right" === t ? "end" : "left" === t ? "start" : t
            }, r._initializeOnDelegatedTarget = function(t, e) {
                var n = this.constructor.DATA_KEY;
                return (e = e || T(t.delegateTarget, n)) || (e = new this.constructor(t.delegateTarget, this._getDelegateConfig()), E(t.delegateTarget, n, e)), e
            }, r._getOffset = function() {
                var t = this,
                    e = this.config.offset;
                return "string" == typeof e ? e.split(",").map((function(t) {
                    return Number.parseInt(t, 10)
                })) : "function" == typeof e ? function(n) {
                    return e(n, t._element)
                } : e
            }, r._getPopperConfig = function(t) {
                var e = this,
                    i = {
                        placement: t,
                        modifiers: [{
                            name: "flip",
                            options: {
                                altBoundary: !0,
                                fallbackPlacements: this.config.fallbackPlacements
                            }
                        }, {
                            name: "offset",
                            options: {
                                offset: this._getOffset()
                            }
                        }, {
                            name: "preventOverflow",
                            options: {
                                boundary: this.config.boundary
                            }
                        }, {
                            name: "arrow",
                            options: {
                                element: "." + this.constructor.NAME + "-arrow"
                            }
                        }, {
                            name: "onChange",
                            enabled: !0,
                            phase: "afterWrite",
                            fn: function(t) {
                                return e._handlePopperPlacementChange(t)
                            }
                        }],
                        onFirstUpdate: function(t) {
                            t.options.placement !== t.placement && e._handlePopperPlacementChange(t)
                        }
                    };
                return n({}, i, "function" == typeof this.config.popperConfig ? this.config.popperConfig(i) : this.config.popperConfig)
            }, r._addAttachmentClass = function(t) {
                this.getTipElement().classList.add("bs-tooltip-" + this.updateAttachment(t))
            }, r._getContainer = function() {
                return !1 === this.config.container ? document.body : d(this.config.container) ? this.config.container : Y(this.config.container)
            }, r._getAttachment = function(t) {
                return De[t.toUpperCase()]
            }, r._setListeners = function() {
                var t = this;
                this.config.trigger.split(" ").forEach((function(e) {
                    if ("click" === e) B.on(t._element, t.constructor.Event.CLICK, t.config.selector, (function(e) {
                        return t.toggle(e)
                    }));
                    else if ("manual" !== e) {
                        var n = "hover" === e ? t.constructor.Event.MOUSEENTER : t.constructor.Event.FOCUSIN,
                            i = "hover" === e ? t.constructor.Event.MOUSELEAVE : t.constructor.Event.FOCUSOUT;
                        B.on(t._element, n, t.config.selector, (function(e) {
                            return t._enter(e)
                        })), B.on(t._element, i, t.config.selector, (function(e) {
                            return t._leave(e)
                        }))
                    }
                })), this._hideModalHandler = function() {
                    t._element && t.hide()
                }, B.on(this._element.closest(".modal"), "hide.bs.modal", this._hideModalHandler), this.config.selector ? this.config = n({}, this.config, {
                    trigger: "manual",
                    selector: ""
                }) : this._fixTitle()
            }, r._fixTitle = function() {
                var t = this._element.getAttribute("title"),
                    e = typeof this._element.getAttribute("data-bs-original-title");
                (t || "string" !== e) && (this._element.setAttribute("data-bs-original-title", t || ""), !t || this._element.getAttribute("aria-label") || this._element.textContent || this._element.setAttribute("aria-label", t), this._element.setAttribute("title", ""))
            }, r._enter = function(t, e) {
                e = this._initializeOnDelegatedTarget(t, e), t && (e._activeTrigger["focusin" === t.type ? "focus" : "hover"] = !0), e.getTipElement().classList.contains("show") || "show" === e._hoverState ? e._hoverState = "show" : (clearTimeout(e._timeout), e._hoverState = "show", e.config.delay && e.config.delay.show ? e._timeout = setTimeout((function() {
                    "show" === e._hoverState && e.show()
                }), e.config.delay.show) : e.show())
            }, r._leave = function(t, e) {
                e = this._initializeOnDelegatedTarget(t, e), t && (e._activeTrigger["focusout" === t.type ? "focus" : "hover"] = !1), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = "out", e.config.delay && e.config.delay.hide ? e._timeout = setTimeout((function() {
                    "out" === e._hoverState && e.hide()
                }), e.config.delay.hide) : e.hide())
            }, r._isWithActiveTrigger = function() {
                for (var t in this._activeTrigger)
                    if (this._activeTrigger[t]) return !0;
                return !1
            }, r._getConfig = function(t) {
                var e = z.getDataAttributes(this._element);
                return Object.keys(e).forEach((function(t) {
                    Le.has(t) && delete e[t]
                })), t && "object" == typeof t.container && t.container.jquery && (t.container = t.container[0]), "number" == typeof(t = n({}, this.constructor.Default, e, "object" == typeof t && t ? t : {})).delay && (t.delay = {
                    show: t.delay,
                    hide: t.delay
                }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), p("tooltip", t, this.constructor.DefaultType), t.sanitize && (t.template = ke(t.template, t.allowList, t.sanitizeFn)), t
            }, r._getDelegateConfig = function() {
                var t = {};
                if (this.config)
                    for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                return t
            }, r._cleanTipClass = function() {
                var t = this.getTipElement(),
                    e = t.getAttribute("class").match(Ae);
                null !== e && e.length > 0 && e.map((function(t) {
                    return t.trim()
                })).forEach((function(e) {
                    return t.classList.remove(e)
                }))
            }, r._handlePopperPlacementChange = function(t) {
                var e = t.state;
                e && (this.tip = e.elements.popper, this._cleanTipClass(), this._addAttachmentClass(this._getAttachment(e.placement)))
            }, o.jQueryInterface = function(t) {
                return this.each((function() {
                    var e = T(this, "bs.tooltip"),
                        n = "object" == typeof t && t;
                    if ((e || !/dispose|hide/.test(t)) && (e || (e = new o(this, n)), "string" == typeof t)) {
                        if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                        e[t]()
                    }
                }))
            }, e(o, null, [{
                key: "Default",
                get: function() {
                    return xe
                }
            }, {
                key: "NAME",
                get: function() {
                    return "tooltip"
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return "bs.tooltip"
                }
            }, {
                key: "Event",
                get: function() {
                    return Ce
                }
            }, {
                key: "EVENT_KEY",
                get: function() {
                    return ".bs.tooltip"
                }
            }, {
                key: "DefaultType",
                get: function() {
                    return Oe
                }
            }]), o
        }(H);
    y("tooltip", Se);
    var je = new RegExp("(^|\\s)bs-popover\\S+", "g"),
        Ne = n({}, Se.Default, {
            placement: "right",
            offset: [0, 8],
            trigger: "click",
            content: "",
            template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }),
        Pe = n({}, Se.DefaultType, {
            content: "(string|element|function)"
        }),
        Ie = {
            HIDE: "hide.bs.popover",
            HIDDEN: "hidden.bs.popover",
            SHOW: "show.bs.popover",
            SHOWN: "shown.bs.popover",
            INSERTED: "inserted.bs.popover",
            CLICK: "click.bs.popover",
            FOCUSIN: "focusin.bs.popover",
            FOCUSOUT: "focusout.bs.popover",
            MOUSEENTER: "mouseenter.bs.popover",
            MOUSELEAVE: "mouseleave.bs.popover"
        },
        Me = function(t) {
            function n() {
                return t.apply(this, arguments) || this
            }
            i(n, t);
            var o = n.prototype;
            return o.isWithContent = function() {
                return this.getTitle() || this._getContent()
            }, o.setContent = function() {
                var t = this.getTipElement();
                this.setElementContent(Y(".popover-header", t), this.getTitle());
                var e = this._getContent();
                "function" == typeof e && (e = e.call(this._element)), this.setElementContent(Y(".popover-body", t), e), t.classList.remove("fade", "show")
            }, o._addAttachmentClass = function(t) {
                this.getTipElement().classList.add("bs-popover-" + this.updateAttachment(t))
            }, o._getContent = function() {
                return this._element.getAttribute("data-bs-content") || this.config.content
            }, o._cleanTipClass = function() {
                var t = this.getTipElement(),
                    e = t.getAttribute("class").match(je);
                null !== e && e.length > 0 && e.map((function(t) {
                    return t.trim()
                })).forEach((function(e) {
                    return t.classList.remove(e)
                }))
            }, n.jQueryInterface = function(t) {
                return this.each((function() {
                    var e = T(this, "bs.popover"),
                        i = "object" == typeof t ? t : null;
                    if ((e || !/dispose|hide/.test(t)) && (e || (e = new n(this, i), E(this, "bs.popover", e)), "string" == typeof t)) {
                        if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                        e[t]()
                    }
                }))
            }, e(n, null, [{
                key: "Default",
                get: function() {
                    return Ne
                }
            }, {
                key: "NAME",
                get: function() {
                    return "popover"
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return "bs.popover"
                }
            }, {
                key: "Event",
                get: function() {
                    return Ie
                }
            }, {
                key: "EVENT_KEY",
                get: function() {
                    return ".bs.popover"
                }
            }, {
                key: "DefaultType",
                get: function() {
                    return Pe
                }
            }]), n
        }(Se);
    y("popover", Me);
    var Be = {
            offset: 10,
            method: "auto",
            target: ""
        },
        He = {
            offset: "number",
            method: "string",
            target: "(string|element)"
        },
        Re = function(t) {
            function o(e, n) {
                var i;
                return (i = t.call(this, e) || this)._scrollElement = "BODY" === e.tagName ? window : e, i._config = i._getConfig(n), i._selector = i._config.target + " .nav-link, " + i._config.target + " .list-group-item, " + i._config.target + " .dropdown-item", i._offsets = [], i._targets = [], i._activeTarget = null, i._scrollHeight = 0, B.on(i._scrollElement, "scroll.bs.scrollspy", (function() {
                    return i._process()
                })), i.refresh(), i._process(), i
            }
            i(o, t);
            var r = o.prototype;
            return r.refresh = function() {
                var t = this,
                    e = this._scrollElement === this._scrollElement.window ? "offset" : "position",
                    n = "auto" === this._config.method ? e : this._config.method,
                    i = "position" === n ? this._getScrollTop() : 0;
                this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), F(this._selector).map((function(t) {
                    var e = l(t),
                        o = e ? Y(e) : null;
                    if (o) {
                        var r = o.getBoundingClientRect();
                        if (r.width || r.height) return [z[n](o).top + i, e]
                    }
                    return null
                })).filter((function(t) {
                    return t
                })).sort((function(t, e) {
                    return t[0] - e[0]
                })).forEach((function(e) {
                    t._offsets.push(e[0]), t._targets.push(e[1])
                }))
            }, r.dispose = function() {
                t.prototype.dispose.call(this), B.off(this._scrollElement, ".bs.scrollspy"), this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
            }, r._getConfig = function(t) {
                if ("string" != typeof(t = n({}, Be, "object" == typeof t && t ? t : {})).target && d(t.target)) {
                    var e = t.target.id;
                    e || (e = s("scrollspy"), t.target.id = e), t.target = "#" + e
                }
                return p("scrollspy", t, He), t
            }, r._getScrollTop = function() {
                return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
            }, r._getScrollHeight = function() {
                return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
            }, r._getOffsetHeight = function() {
                return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
            }, r._process = function() {
                var t = this._getScrollTop() + this._config.offset,
                    e = this._getScrollHeight(),
                    n = this._config.offset + e - this._getOffsetHeight();
                if (this._scrollHeight !== e && this.refresh(), t >= n) {
                    var i = this._targets[this._targets.length - 1];
                    this._activeTarget !== i && this._activate(i)
                } else {
                    if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear();
                    for (var o = this._offsets.length; o--;) this._activeTarget !== this._targets[o] && t >= this._offsets[o] && (void 0 === this._offsets[o + 1] || t < this._offsets[o + 1]) && this._activate(this._targets[o])
                }
            }, r._activate = function(t) {
                this._activeTarget = t, this._clear();
                var e = this._selector.split(",").map((function(e) {
                        return e + '[data-bs-target="' + t + '"],' + e + '[href="' + t + '"]'
                    })),
                    n = Y(e.join(","));
                n.classList.contains("dropdown-item") ? (Y(".dropdown-toggle", n.closest(".dropdown")).classList.add("active"), n.classList.add("active")) : (n.classList.add("active"), function(t, e) {
                    for (var n = [], i = t.parentNode; i && i.nodeType === Node.ELEMENT_NODE && 3 !== i.nodeType;) i.matches(e) && n.push(i), i = i.parentNode;
                    return n
                }(n, ".nav, .list-group").forEach((function(t) {
                    V(t, ".nav-link, .list-group-item").forEach((function(t) {
                        return t.classList.add("active")
                    })), V(t, ".nav-item").forEach((function(t) {
                        q(t, ".nav-link").forEach((function(t) {
                            return t.classList.add("active")
                        }))
                    }))
                }))), B.trigger(this._scrollElement, "activate.bs.scrollspy", {
                    relatedTarget: t
                })
            }, r._clear = function() {
                F(this._selector).filter((function(t) {
                    return t.classList.contains("active")
                })).forEach((function(t) {
                    return t.classList.remove("active")
                }))
            }, o.jQueryInterface = function(t) {
                return this.each((function() {
                    var e = T(this, "bs.scrollspy");
                    if (e || (e = new o(this, "object" == typeof t && t)), "string" == typeof t) {
                        if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                        e[t]()
                    }
                }))
            }, e(o, null, [{
                key: "Default",
                get: function() {
                    return Be
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return "bs.scrollspy"
                }
            }]), o
        }(H);
    B.on(window, "load.bs.scrollspy.data-api", (function() {
        F('[data-bs-spy="scroll"]').forEach((function(t) {
            return new Re(t, z.getDataAttributes(t))
        }))
    })), y("scrollspy", Re);
    var We = function(t) {
        function n() {
            return t.apply(this, arguments) || this
        }
        i(n, t);
        var o = n.prototype;
        return o.show = function() {
            var t = this;
            if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && this._element.classList.contains("active") || this._element.classList.contains("disabled"))) {
                var e, n = c(this._element),
                    i = this._element.closest(".nav, .list-group");
                if (i) {
                    var o = "UL" === i.nodeName || "OL" === i.nodeName ? ":scope > li > .active" : ".active";
                    e = (e = F(o, i))[e.length - 1]
                }
                var r = e ? B.trigger(e, "hide.bs.tab", {
                    relatedTarget: this._element
                }) : null;
                if (!(B.trigger(this._element, "show.bs.tab", {
                        relatedTarget: e
                    }).defaultPrevented || null !== r && r.defaultPrevented)) {
                    this._activate(this._element, i);
                    var s = function() {
                        B.trigger(e, "hidden.bs.tab", {
                            relatedTarget: t._element
                        }), B.trigger(t._element, "shown.bs.tab", {
                            relatedTarget: e
                        })
                    };
                    n ? this._activate(n, n.parentNode, s) : s()
                }
            }
        }, o._activate = function(t, e, n) {
            var i = this,
                o = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? q(e, ".active") : F(":scope > li > .active", e))[0],
                r = n && o && o.classList.contains("fade"),
                s = function() {
                    return i._transitionComplete(t, o, n)
                };
            if (o && r) {
                var a = u(o);
                o.classList.remove("show"), B.one(o, "transitionend", s), h(o, a)
            } else s()
        }, o._transitionComplete = function(t, e, n) {
            if (e) {
                e.classList.remove("active");
                var i = Y(":scope > .dropdown-menu .active", e.parentNode);
                i && i.classList.remove("active"), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !1)
            }
            t.classList.add("active"), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !0), v(t), t.classList.contains("fade") && t.classList.add("show"), t.parentNode && t.parentNode.classList.contains("dropdown-menu") && (t.closest(".dropdown") && F(".dropdown-toggle").forEach((function(t) {
                return t.classList.add("active")
            })), t.setAttribute("aria-expanded", !0)), n && n()
        }, n.jQueryInterface = function(t) {
            return this.each((function() {
                var e = T(this, "bs.tab") || new n(this);
                if ("string" == typeof t) {
                    if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                    e[t]()
                }
            }))
        }, e(n, null, [{
            key: "DATA_KEY",
            get: function() {
                return "bs.tab"
            }
        }]), n
    }(H);
    B.on(document, "click.bs.tab.data-api", '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]', (function(t) {
        t.preventDefault(), (T(this, "bs.tab") || new We(this)).show()
    })), y("tab", We);
    var Ke = {
            animation: "boolean",
            autohide: "boolean",
            delay: "number"
        },
        Ue = {
            animation: !0,
            autohide: !0,
            delay: 5e3
        },
        ze = function(t) {
            function o(e, n) {
                var i;
                return (i = t.call(this, e) || this)._config = i._getConfig(n), i._timeout = null, i._setListeners(), i
            }
            i(o, t);
            var r = o.prototype;
            return r.show = function() {
                var t = this;
                if (!B.trigger(this._element, "show.bs.toast").defaultPrevented) {
                    this._clearTimeout(), this._config.animation && this._element.classList.add("fade");
                    var e = function() {
                        t._element.classList.remove("showing"), t._element.classList.add("show"), B.trigger(t._element, "shown.bs.toast"), t._config.autohide && (t._timeout = setTimeout((function() {
                            t.hide()
                        }), t._config.delay))
                    };
                    if (this._element.classList.remove("hide"), v(this._element), this._element.classList.add("showing"), this._config.animation) {
                        var n = u(this._element);
                        B.one(this._element, "transitionend", e), h(this._element, n)
                    } else e()
                }
            }, r.hide = function() {
                var t = this;
                if (this._element.classList.contains("show") && !B.trigger(this._element, "hide.bs.toast").defaultPrevented) {
                    var e = function() {
                        t._element.classList.add("hide"), B.trigger(t._element, "hidden.bs.toast")
                    };
                    if (this._element.classList.remove("show"), this._config.animation) {
                        var n = u(this._element);
                        B.one(this._element, "transitionend", e), h(this._element, n)
                    } else e()
                }
            }, r.dispose = function() {
                this._clearTimeout(), this._element.classList.contains("show") && this._element.classList.remove("show"), B.off(this._element, "click.dismiss.bs.toast"), t.prototype.dispose.call(this), this._config = null
            }, r._getConfig = function(t) {
                return t = n({}, Ue, z.getDataAttributes(this._element), "object" == typeof t && t ? t : {}), p("toast", t, this.constructor.DefaultType), t
            }, r._setListeners = function() {
                var t = this;
                B.on(this._element, "click.dismiss.bs.toast", '[data-bs-dismiss="toast"]', (function() {
                    return t.hide()
                }))
            }, r._clearTimeout = function() {
                clearTimeout(this._timeout), this._timeout = null
            }, o.jQueryInterface = function(t) {
                return this.each((function() {
                    var e = T(this, "bs.toast");
                    if (e || (e = new o(this, "object" == typeof t && t)), "string" == typeof t) {
                        if (void 0 === e[t]) throw new TypeError('No method named "' + t + '"');
                        e[t](this)
                    }
                }))
            }, e(o, null, [{
                key: "DefaultType",
                get: function() {
                    return Ke
                }
            }, {
                key: "Default",
                get: function() {
                    return Ue
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return "bs.toast"
                }
            }]), o
        }(H);
    return y("toast", ze), {
        Alert: R,
        Button: W,
        Carousel: $,
        Collapse: J,
        Dropdown: ve,
        Modal: ye,
        Popover: Me,
        ScrollSpy: Re,
        Tab: We,
        Toast: ze,
        Tooltip: Se
    }
}));
//# sourceMappingURL=bootstrap.bundle.min.js.map


/*!
 * perfect-scrollbar v1.4.0
 * (c) 2018 Hyunje Jun
 * @license MIT
 */
! function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.PerfectScrollbar = e()
}(this, function() {
    "use strict";

    function t(t) {
        return getComputedStyle(t)
    }

    function e(t, e) {
        for (var i in e) {
            var r = e[i];
            "number" == typeof r && (r += "px"), t.style[i] = r
        }
        return t
    }

    function i(t) {
        var e = document.createElement("div");
        return e.className = t, e
    }

    function r(t, e) {
        if (!v) throw new Error("No element matching method supported");
        return v.call(t, e)
    }

    function l(t) {
        t.remove ? t.remove() : t.parentNode && t.parentNode.removeChild(t)
    }

    function n(t, e) {
        return Array.prototype.filter.call(t.children, function(t) {
            return r(t, e)
        })
    }

    function o(t, e) {
        var i = t.element.classList,
            r = m.state.scrolling(e);
        i.contains(r) ? clearTimeout(Y[e]) : i.add(r)
    }

    function s(t, e) {
        Y[e] = setTimeout(function() {
            return t.isAlive && t.element.classList.remove(m.state.scrolling(e))
        }, t.settings.scrollingThreshold)
    }

    function a(t, e) {
        o(t, e), s(t, e)
    }

    function c(t) {
        if ("function" == typeof window.CustomEvent) return new CustomEvent(t);
        var e = document.createEvent("CustomEvent");
        return e.initCustomEvent(t, !1, !1, void 0), e
    }

    function h(t, e, i, r, l) {
        var n = i[0],
            o = i[1],
            s = i[2],
            h = i[3],
            u = i[4],
            d = i[5];
        void 0 === r && (r = !0), void 0 === l && (l = !1);
        var f = t.element;
        t.reach[h] = null, f[s] < 1 && (t.reach[h] = "start"), f[s] > t[n] - t[o] - 1 && (t.reach[h] = "end"), e && (f.dispatchEvent(c("ps-scroll-" + h)), e < 0 ? f.dispatchEvent(c("ps-scroll-" + u)) : e > 0 && f.dispatchEvent(c("ps-scroll-" + d)), r && a(t, h)), t.reach[h] && (e || l) && f.dispatchEvent(c("ps-" + h + "-reach-" + t.reach[h]))
    }

    function u(t) {
        return parseInt(t, 10) || 0
    }

    function d(t) {
        return r(t, "input,[contenteditable]") || r(t, "select,[contenteditable]") || r(t, "textarea,[contenteditable]") || r(t, "button,[contenteditable]")
    }

    function f(e) {
        var i = t(e);
        return u(i.width) + u(i.paddingLeft) + u(i.paddingRight) + u(i.borderLeftWidth) + u(i.borderRightWidth)
    }

    function p(t, e) {
        return t.settings.minScrollbarLength && (e = Math.max(e, t.settings.minScrollbarLength)), t.settings.maxScrollbarLength && (e = Math.min(e, t.settings.maxScrollbarLength)), e
    }

    function b(t, i) {
        var r = {
                width: i.railXWidth
            },
            l = Math.floor(t.scrollTop);
        i.isRtl ? r.left = i.negativeScrollAdjustment + t.scrollLeft + i.containerWidth - i.contentWidth : r.left = t.scrollLeft, i.isScrollbarXUsingBottom ? r.bottom = i.scrollbarXBottom - l : r.top = i.scrollbarXTop + l, e(i.scrollbarXRail, r);
        var n = {
            top: l,
            height: i.railYHeight
        };
        i.isScrollbarYUsingRight ? i.isRtl ? n.right = i.contentWidth - (i.negativeScrollAdjustment + t.scrollLeft) - i.scrollbarYRight - i.scrollbarYOuterWidth : n.right = i.scrollbarYRight - t.scrollLeft : i.isRtl ? n.left = i.negativeScrollAdjustment + t.scrollLeft + 2 * i.containerWidth - i.contentWidth - i.scrollbarYLeft - i.scrollbarYOuterWidth : n.left = i.scrollbarYLeft + t.scrollLeft, e(i.scrollbarYRail, n), e(i.scrollbarX, {
            left: i.scrollbarXLeft,
            width: i.scrollbarXWidth - i.railBorderXWidth
        }), e(i.scrollbarY, {
            top: i.scrollbarYTop,
            height: i.scrollbarYHeight - i.railBorderYWidth
        })
    }

    function g(t, e) {
        function i(e) {
            b[d] = g + Y * (e[a] - v), o(t, f), R(t), e.stopPropagation(), e.preventDefault()
        }

        function r() {
            s(t, f), t[p].classList.remove(m.state.clicking), t.event.unbind(t.ownerDocument, "mousemove", i)
        }
        var l = e[0],
            n = e[1],
            a = e[2],
            c = e[3],
            h = e[4],
            u = e[5],
            d = e[6],
            f = e[7],
            p = e[8],
            b = t.element,
            g = null,
            v = null,
            Y = null;
        t.event.bind(t[h], "mousedown", function(e) {
            g = b[d], v = e[a], Y = (t[n] - t[l]) / (t[c] - t[u]), t.event.bind(t.ownerDocument, "mousemove", i), t.event.once(t.ownerDocument, "mouseup", r), t[p].classList.add(m.state.clicking), e.stopPropagation(), e.preventDefault()
        })
    }
    var v = "undefined" != typeof Element && (Element.prototype.matches || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector),
        m = {
            main: "ps",
            element: {
                thumb: function(t) {
                    return "ps__thumb-" + t
                },
                rail: function(t) {
                    return "ps__rail-" + t
                },
                consuming: "ps__child--consume"
            },
            state: {
                focus: "ps--focus",
                clicking: "ps--clicking",
                active: function(t) {
                    return "ps--active-" + t
                },
                scrolling: function(t) {
                    return "ps--scrolling-" + t
                }
            }
        },
        Y = {
            x: null,
            y: null
        },
        X = function(t) {
            this.element = t, this.handlers = {}
        },
        w = {
            isEmpty: {
                configurable: !0
            }
        };
    X.prototype.bind = function(t, e) {
        void 0 === this.handlers[t] && (this.handlers[t] = []), this.handlers[t].push(e), this.element.addEventListener(t, e, !1)
    }, X.prototype.unbind = function(t, e) {
        var i = this;
        this.handlers[t] = this.handlers[t].filter(function(r) {
            return !(!e || r === e) || (i.element.removeEventListener(t, r, !1), !1)
        })
    }, X.prototype.unbindAll = function() {
        var t = this;
        for (var e in t.handlers) t.unbind(e)
    }, w.isEmpty.get = function() {
        var t = this;
        return Object.keys(this.handlers).every(function(e) {
            return 0 === t.handlers[e].length
        })
    }, Object.defineProperties(X.prototype, w);
    var y = function() {
        this.eventElements = []
    };
    y.prototype.eventElement = function(t) {
        var e = this.eventElements.filter(function(e) {
            return e.element === t
        })[0];
        return e || (e = new X(t), this.eventElements.push(e)), e
    }, y.prototype.bind = function(t, e, i) {
        this.eventElement(t).bind(e, i)
    }, y.prototype.unbind = function(t, e, i) {
        var r = this.eventElement(t);
        r.unbind(e, i), r.isEmpty && this.eventElements.splice(this.eventElements.indexOf(r), 1)
    }, y.prototype.unbindAll = function() {
        this.eventElements.forEach(function(t) {
            return t.unbindAll()
        }), this.eventElements = []
    }, y.prototype.once = function(t, e, i) {
        var r = this.eventElement(t),
            l = function(t) {
                r.unbind(e, l), i(t)
            };
        r.bind(e, l)
    };
    var W = function(t, e, i, r, l) {
            void 0 === r && (r = !0), void 0 === l && (l = !1);
            var n;
            if ("top" === e) n = ["contentHeight", "containerHeight", "scrollTop", "y", "up", "down"];
            else {
                if ("left" !== e) throw new Error("A proper axis should be provided");
                n = ["contentWidth", "containerWidth", "scrollLeft", "x", "left", "right"]
            }
            h(t, i, n, r, l)
        },
        L = {
            isWebKit: "undefined" != typeof document && "WebkitAppearance" in document.documentElement.style,
            supportsTouch: "undefined" != typeof window && ("ontouchstart" in window || window.DocumentTouch && document instanceof window.DocumentTouch),
            supportsIePointer: "undefined" != typeof navigator && navigator.msMaxTouchPoints,
            isChrome: "undefined" != typeof navigator && /Chrome/i.test(navigator && navigator.userAgent)
        },
        R = function(t) {
            var e = t.element,
                i = Math.floor(e.scrollTop);
            t.containerWidth = e.clientWidth, t.containerHeight = e.clientHeight, t.contentWidth = e.scrollWidth, t.contentHeight = e.scrollHeight, e.contains(t.scrollbarXRail) || (n(e, m.element.rail("x")).forEach(function(t) {
                return l(t)
            }), e.appendChild(t.scrollbarXRail)), e.contains(t.scrollbarYRail) || (n(e, m.element.rail("y")).forEach(function(t) {
                return l(t)
            }), e.appendChild(t.scrollbarYRail)), !t.settings.suppressScrollX && t.containerWidth + t.settings.scrollXMarginOffset < t.contentWidth ? (t.scrollbarXActive = !0, t.railXWidth = t.containerWidth - t.railXMarginWidth, t.railXRatio = t.containerWidth / t.railXWidth, t.scrollbarXWidth = p(t, u(t.railXWidth * t.containerWidth / t.contentWidth)), t.scrollbarXLeft = u((t.negativeScrollAdjustment + e.scrollLeft) * (t.railXWidth - t.scrollbarXWidth) / (t.contentWidth - t.containerWidth))) : t.scrollbarXActive = !1, !t.settings.suppressScrollY && t.containerHeight + t.settings.scrollYMarginOffset < t.contentHeight ? (t.scrollbarYActive = !0, t.railYHeight = t.containerHeight - t.railYMarginHeight, t.railYRatio = t.containerHeight / t.railYHeight, t.scrollbarYHeight = p(t, u(t.railYHeight * t.containerHeight / t.contentHeight)), t.scrollbarYTop = u(i * (t.railYHeight - t.scrollbarYHeight) / (t.contentHeight - t.containerHeight))) : t.scrollbarYActive = !1, t.scrollbarXLeft >= t.railXWidth - t.scrollbarXWidth && (t.scrollbarXLeft = t.railXWidth - t.scrollbarXWidth), t.scrollbarYTop >= t.railYHeight - t.scrollbarYHeight && (t.scrollbarYTop = t.railYHeight - t.scrollbarYHeight), b(e, t), t.scrollbarXActive ? e.classList.add(m.state.active("x")) : (e.classList.remove(m.state.active("x")), t.scrollbarXWidth = 0, t.scrollbarXLeft = 0, e.scrollLeft = 0), t.scrollbarYActive ? e.classList.add(m.state.active("y")) : (e.classList.remove(m.state.active("y")), t.scrollbarYHeight = 0, t.scrollbarYTop = 0, e.scrollTop = 0)
        },
        T = {
            "click-rail": function(t) {
                t.event.bind(t.scrollbarY, "mousedown", function(t) {
                    return t.stopPropagation()
                }), t.event.bind(t.scrollbarYRail, "mousedown", function(e) {
                    var i = e.pageY - window.pageYOffset - t.scrollbarYRail.getBoundingClientRect().top > t.scrollbarYTop ? 1 : -1;
                    t.element.scrollTop += i * t.containerHeight, R(t), e.stopPropagation()
                }), t.event.bind(t.scrollbarX, "mousedown", function(t) {
                    return t.stopPropagation()
                }), t.event.bind(t.scrollbarXRail, "mousedown", function(e) {
                    var i = e.pageX - window.pageXOffset - t.scrollbarXRail.getBoundingClientRect().left > t.scrollbarXLeft ? 1 : -1;
                    t.element.scrollLeft += i * t.containerWidth, R(t), e.stopPropagation()
                })
            },
            "drag-thumb": function(t) {
                g(t, ["containerWidth", "contentWidth", "pageX", "railXWidth", "scrollbarX", "scrollbarXWidth", "scrollLeft", "x", "scrollbarXRail"]), g(t, ["containerHeight", "contentHeight", "pageY", "railYHeight", "scrollbarY", "scrollbarYHeight", "scrollTop", "y", "scrollbarYRail"])
            },
            keyboard: function(t) {
                function e(e, r) {
                    var l = Math.floor(i.scrollTop);
                    if (0 === e) {
                        if (!t.scrollbarYActive) return !1;
                        if (0 === l && r > 0 || l >= t.contentHeight - t.containerHeight && r < 0) return !t.settings.wheelPropagation
                    }
                    var n = i.scrollLeft;
                    if (0 === r) {
                        if (!t.scrollbarXActive) return !1;
                        if (0 === n && e < 0 || n >= t.contentWidth - t.containerWidth && e > 0) return !t.settings.wheelPropagation
                    }
                    return !0
                }
                var i = t.element,
                    l = function() {
                        return r(i, ":hover")
                    },
                    n = function() {
                        return r(t.scrollbarX, ":focus") || r(t.scrollbarY, ":focus")
                    };
                t.event.bind(t.ownerDocument, "keydown", function(r) {
                    if (!(r.isDefaultPrevented && r.isDefaultPrevented() || r.defaultPrevented) && (l() || n())) {
                        var o = document.activeElement ? document.activeElement : t.ownerDocument.activeElement;
                        if (o) {
                            if ("IFRAME" === o.tagName) o = o.contentDocument.activeElement;
                            else
                                for (; o.shadowRoot;) o = o.shadowRoot.activeElement;
                            if (d(o)) return
                        }
                        var s = 0,
                            a = 0;
                        switch (r.which) {
                            case 37:
                                s = r.metaKey ? -t.contentWidth : r.altKey ? -t.containerWidth : -30;
                                break;
                            case 38:
                                a = r.metaKey ? t.contentHeight : r.altKey ? t.containerHeight : 30;
                                break;
                            case 39:
                                s = r.metaKey ? t.contentWidth : r.altKey ? t.containerWidth : 30;
                                break;
                            case 40:
                                a = r.metaKey ? -t.contentHeight : r.altKey ? -t.containerHeight : -30;
                                break;
                            case 32:
                                a = r.shiftKey ? t.containerHeight : -t.containerHeight;
                                break;
                            case 33:
                                a = t.containerHeight;
                                break;
                            case 34:
                                a = -t.containerHeight;
                                break;
                            case 36:
                                a = t.contentHeight;
                                break;
                            case 35:
                                a = -t.contentHeight;
                                break;
                            default:
                                return
                        }
                        t.settings.suppressScrollX && 0 !== s || t.settings.suppressScrollY && 0 !== a || (i.scrollTop -= a, i.scrollLeft += s, R(t), e(s, a) && r.preventDefault())
                    }
                })
            },
            wheel: function(e) {
                function i(t, i) {
                    var r = Math.floor(o.scrollTop),
                        l = 0 === o.scrollTop,
                        n = r + o.offsetHeight === o.scrollHeight,
                        s = 0 === o.scrollLeft,
                        a = o.scrollLeft + o.offsetWidth === o.scrollWidth;
                    return !(Math.abs(i) > Math.abs(t) ? l || n : s || a) || !e.settings.wheelPropagation
                }

                function r(t) {
                    var e = t.deltaX,
                        i = -1 * t.deltaY;
                    return void 0 !== e && void 0 !== i || (e = -1 * t.wheelDeltaX / 6, i = t.wheelDeltaY / 6), t.deltaMode && 1 === t.deltaMode && (e *= 10, i *= 10), e !== e && i !== i && (e = 0, i = t.wheelDelta), t.shiftKey ? [-i, -e] : [e, i]
                }

                function l(e, i, r) {
                    if (!L.isWebKit && o.querySelector("select:focus")) return !0;
                    if (!o.contains(e)) return !1;
                    for (var l = e; l && l !== o;) {
                        if (l.classList.contains(m.element.consuming)) return !0;
                        var n = t(l);
                        if ([n.overflow, n.overflowX, n.overflowY].join("").match(/(scroll|auto)/)) {
                            var s = l.scrollHeight - l.clientHeight;
                            if (s > 0 && !(0 === l.scrollTop && r > 0 || l.scrollTop === s && r < 0)) return !0;
                            var a = l.scrollWidth - l.clientWidth;
                            if (a > 0 && !(0 === l.scrollLeft && i < 0 || l.scrollLeft === a && i > 0)) return !0
                        }
                        l = l.parentNode
                    }
                    return !1
                }

                function n(t) {
                    var n = r(t),
                        s = n[0],
                        a = n[1];
                    if (!l(t.target, s, a)) {
                        var c = !1;
                        e.settings.useBothWheelAxes ? e.scrollbarYActive && !e.scrollbarXActive ? (a ? o.scrollTop -= a * e.settings.wheelSpeed : o.scrollTop += s * e.settings.wheelSpeed, c = !0) : e.scrollbarXActive && !e.scrollbarYActive && (s ? o.scrollLeft += s * e.settings.wheelSpeed : o.scrollLeft -= a * e.settings.wheelSpeed, c = !0) : (o.scrollTop -= a * e.settings.wheelSpeed, o.scrollLeft += s * e.settings.wheelSpeed), R(e), (c = c || i(s, a)) && !t.ctrlKey && (t.stopPropagation(), t.preventDefault())
                    }
                }
                var o = e.element;
                void 0 !== window.onwheel ? e.event.bind(o, "wheel", n) : void 0 !== window.onmousewheel && e.event.bind(o, "mousewheel", n)
            },
            touch: function(e) {
                function i(t, i) {
                    var r = Math.floor(h.scrollTop),
                        l = h.scrollLeft,
                        n = Math.abs(t),
                        o = Math.abs(i);
                    if (o > n) {
                        if (i < 0 && r === e.contentHeight - e.containerHeight || i > 0 && 0 === r) return 0 === window.scrollY && i > 0 && L.isChrome
                    } else if (n > o && (t < 0 && l === e.contentWidth - e.containerWidth || t > 0 && 0 === l)) return !0;
                    return !0
                }

                function r(t, i) {
                    h.scrollTop -= i, h.scrollLeft -= t, R(e)
                }

                function l(t) {
                    return t.targetTouches ? t.targetTouches[0] : t
                }

                function n(t) {
                    return !(t.pointerType && "pen" === t.pointerType && 0 === t.buttons || (!t.targetTouches || 1 !== t.targetTouches.length) && (!t.pointerType || "mouse" === t.pointerType || t.pointerType === t.MSPOINTER_TYPE_MOUSE))
                }

                function o(t) {
                    if (n(t)) {
                        var e = l(t);
                        u.pageX = e.pageX, u.pageY = e.pageY, d = (new Date).getTime(), null !== p && clearInterval(p)
                    }
                }

                function s(e, i, r) {
                    if (!h.contains(e)) return !1;
                    for (var l = e; l && l !== h;) {
                        if (l.classList.contains(m.element.consuming)) return !0;
                        var n = t(l);
                        if ([n.overflow, n.overflowX, n.overflowY].join("").match(/(scroll|auto)/)) {
                            var o = l.scrollHeight - l.clientHeight;
                            if (o > 0 && !(0 === l.scrollTop && r > 0 || l.scrollTop === o && r < 0)) return !0;
                            var s = l.scrollLeft - l.clientWidth;
                            if (s > 0 && !(0 === l.scrollLeft && i < 0 || l.scrollLeft === s && i > 0)) return !0
                        }
                        l = l.parentNode
                    }
                    return !1
                }

                function a(t) {
                    if (n(t)) {
                        var e = l(t),
                            o = {
                                pageX: e.pageX,
                                pageY: e.pageY
                            },
                            a = o.pageX - u.pageX,
                            c = o.pageY - u.pageY;
                        if (s(t.target, a, c)) return;
                        r(a, c), u = o;
                        var h = (new Date).getTime(),
                            p = h - d;
                        p > 0 && (f.x = a / p, f.y = c / p, d = h), i(a, c) && t.preventDefault()
                    }
                }

                function c() {
                    e.settings.swipeEasing && (clearInterval(p), p = setInterval(function() {
                        e.isInitialized ? clearInterval(p) : f.x || f.y ? Math.abs(f.x) < .01 && Math.abs(f.y) < .01 ? clearInterval(p) : (r(30 * f.x, 30 * f.y), f.x *= .8, f.y *= .8) : clearInterval(p)
                    }, 10))
                }
                if (L.supportsTouch || L.supportsIePointer) {
                    var h = e.element,
                        u = {},
                        d = 0,
                        f = {},
                        p = null;
                    L.supportsTouch ? (e.event.bind(h, "touchstart", o), e.event.bind(h, "touchmove", a), e.event.bind(h, "touchend", c)) : L.supportsIePointer && (window.PointerEvent ? (e.event.bind(h, "pointerdown", o), e.event.bind(h, "pointermove", a), e.event.bind(h, "pointerup", c)) : window.MSPointerEvent && (e.event.bind(h, "MSPointerDown", o), e.event.bind(h, "MSPointerMove", a), e.event.bind(h, "MSPointerUp", c)))
                }
            }
        },
        H = function(r, l) {
            var n = this;
            if (void 0 === l && (l = {}), "string" == typeof r && (r = document.querySelector(r)), !r || !r.nodeName) throw new Error("no element is specified to initialize PerfectScrollbar");
            this.element = r, r.classList.add(m.main), this.settings = {
                handlers: ["click-rail", "drag-thumb", "keyboard", "wheel", "touch"],
                maxScrollbarLength: null,
                minScrollbarLength: null,
                scrollingThreshold: 1e3,
                scrollXMarginOffset: 0,
                scrollYMarginOffset: 0,
                suppressScrollX: !1,
                suppressScrollY: !1,
                swipeEasing: !0,
                useBothWheelAxes: !1,
                wheelPropagation: !0,
                wheelSpeed: 1
            };
            for (var o in l) n.settings[o] = l[o];
            this.containerWidth = null, this.containerHeight = null, this.contentWidth = null, this.contentHeight = null;
            var s = function() {
                    return r.classList.add(m.state.focus)
                },
                a = function() {
                    return r.classList.remove(m.state.focus)
                };
            this.isRtl = "rtl" === t(r).direction, this.isNegativeScroll = function() {
                var t = r.scrollLeft,
                    e = null;
                return r.scrollLeft = -1, e = r.scrollLeft < 0, r.scrollLeft = t, e
            }(), this.negativeScrollAdjustment = this.isNegativeScroll ? r.scrollWidth - r.clientWidth : 0, this.event = new y, this.ownerDocument = r.ownerDocument || document, this.scrollbarXRail = i(m.element.rail("x")), r.appendChild(this.scrollbarXRail), this.scrollbarX = i(m.element.thumb("x")), this.scrollbarXRail.appendChild(this.scrollbarX), this.scrollbarX.setAttribute("tabindex", 0), this.event.bind(this.scrollbarX, "focus", s), this.event.bind(this.scrollbarX, "blur", a), this.scrollbarXActive = null, this.scrollbarXWidth = null, this.scrollbarXLeft = null;
            var c = t(this.scrollbarXRail);
            this.scrollbarXBottom = parseInt(c.bottom, 10), isNaN(this.scrollbarXBottom) ? (this.isScrollbarXUsingBottom = !1, this.scrollbarXTop = u(c.top)) : this.isScrollbarXUsingBottom = !0, this.railBorderXWidth = u(c.borderLeftWidth) + u(c.borderRightWidth), e(this.scrollbarXRail, {
                display: "block"
            }), this.railXMarginWidth = u(c.marginLeft) + u(c.marginRight), e(this.scrollbarXRail, {
                display: ""
            }), this.railXWidth = null, this.railXRatio = null, this.scrollbarYRail = i(m.element.rail("y")), r.appendChild(this.scrollbarYRail), this.scrollbarY = i(m.element.thumb("y")), this.scrollbarYRail.appendChild(this.scrollbarY), this.scrollbarY.setAttribute("tabindex", 0), this.event.bind(this.scrollbarY, "focus", s), this.event.bind(this.scrollbarY, "blur", a), this.scrollbarYActive = null, this.scrollbarYHeight = null, this.scrollbarYTop = null;
            var h = t(this.scrollbarYRail);
            this.scrollbarYRight = parseInt(h.right, 10), isNaN(this.scrollbarYRight) ? (this.isScrollbarYUsingRight = !1, this.scrollbarYLeft = u(h.left)) : this.isScrollbarYUsingRight = !0, this.scrollbarYOuterWidth = this.isRtl ? f(this.scrollbarY) : null, this.railBorderYWidth = u(h.borderTopWidth) + u(h.borderBottomWidth), e(this.scrollbarYRail, {
                display: "block"
            }), this.railYMarginHeight = u(h.marginTop) + u(h.marginBottom), e(this.scrollbarYRail, {
                display: ""
            }), this.railYHeight = null, this.railYRatio = null, this.reach = {
                x: r.scrollLeft <= 0 ? "start" : r.scrollLeft >= this.contentWidth - this.containerWidth ? "end" : null,
                y: r.scrollTop <= 0 ? "start" : r.scrollTop >= this.contentHeight - this.containerHeight ? "end" : null
            }, this.isAlive = !0, this.settings.handlers.forEach(function(t) {
                return T[t](n)
            }), this.lastScrollTop = Math.floor(r.scrollTop), this.lastScrollLeft = r.scrollLeft, this.event.bind(this.element, "scroll", function(t) {
                return n.onScroll(t)
            }), R(this)
        };
    return H.prototype.update = function() {
        this.isAlive && (this.negativeScrollAdjustment = this.isNegativeScroll ? this.element.scrollWidth - this.element.clientWidth : 0, e(this.scrollbarXRail, {
            display: "block"
        }), e(this.scrollbarYRail, {
            display: "block"
        }), this.railXMarginWidth = u(t(this.scrollbarXRail).marginLeft) + u(t(this.scrollbarXRail).marginRight), this.railYMarginHeight = u(t(this.scrollbarYRail).marginTop) + u(t(this.scrollbarYRail).marginBottom), e(this.scrollbarXRail, {
            display: "none"
        }), e(this.scrollbarYRail, {
            display: "none"
        }), R(this), W(this, "top", 0, !1, !0), W(this, "left", 0, !1, !0), e(this.scrollbarXRail, {
            display: ""
        }), e(this.scrollbarYRail, {
            display: ""
        }))
    }, H.prototype.onScroll = function(t) {
        this.isAlive && (R(this), W(this, "top", this.element.scrollTop - this.lastScrollTop), W(this, "left", this.element.scrollLeft - this.lastScrollLeft), this.lastScrollTop = Math.floor(this.element.scrollTop), this.lastScrollLeft = this.element.scrollLeft)
    }, H.prototype.destroy = function() {
        this.isAlive && (this.event.unbindAll(), l(this.scrollbarX), l(this.scrollbarY), l(this.scrollbarXRail), l(this.scrollbarYRail), this.removePsClasses(), this.element = null, this.scrollbarX = null, this.scrollbarY = null, this.scrollbarXRail = null, this.scrollbarYRail = null, this.isAlive = !1)
    }, H.prototype.removePsClasses = function() {
        this.element.className = this.element.className.split(" ").filter(function(t) {
            return !t.match(/^ps([-_].+|)$/)
        }).join(" ")
    }, H
});
! function(e, t) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : e.AOS = t()
}(this, function() {
    "use strict";
    var e = "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : {},
        t = "Expected a function",
        n = NaN,
        o = "[object Symbol]",
        i = /^\s+|\s+$/g,
        a = /^[-+]0x[0-9a-f]+$/i,
        r = /^0b[01]+$/i,
        c = /^0o[0-7]+$/i,
        s = parseInt,
        u = "object" == typeof e && e && e.Object === Object && e,
        d = "object" == typeof self && self && self.Object === Object && self,
        l = u || d || Function("return this")(),
        f = Object.prototype.toString,
        m = Math.max,
        p = Math.min,
        b = function() {
            return l.Date.now()
        };

    function v(e, n, o) {
        var i, a, r, c, s, u, d = 0,
            l = !1,
            f = !1,
            v = !0;
        if ("function" != typeof e) throw new TypeError(t);

        function y(t) {
            var n = i,
                o = a;
            return i = a = void 0, d = t, c = e.apply(o, n)
        }

        function h(e) {
            var t = e - u;
            return void 0 === u || t >= n || t < 0 || f && e - d >= r
        }

        function k() {
            var e = b();
            if (h(e)) return x(e);
            s = setTimeout(k, function(e) {
                var t = n - (e - u);
                return f ? p(t, r - (e - d)) : t
            }(e))
        }

        function x(e) {
            return s = void 0, v && i ? y(e) : (i = a = void 0, c)
        }

        function O() {
            var e = b(),
                t = h(e);
            if (i = arguments, a = this, u = e, t) {
                if (void 0 === s) return function(e) {
                    return d = e, s = setTimeout(k, n), l ? y(e) : c
                }(u);
                if (f) return s = setTimeout(k, n), y(u)
            }
            return void 0 === s && (s = setTimeout(k, n)), c
        }
        return n = w(n) || 0, g(o) && (l = !!o.leading, r = (f = "maxWait" in o) ? m(w(o.maxWait) || 0, n) : r, v = "trailing" in o ? !!o.trailing : v), O.cancel = function() {
            void 0 !== s && clearTimeout(s), d = 0, i = u = a = s = void 0
        }, O.flush = function() {
            return void 0 === s ? c : x(b())
        }, O
    }

    function g(e) {
        var t = typeof e;
        return !!e && ("object" == t || "function" == t)
    }

    function w(e) {
        if ("number" == typeof e) return e;
        if (function(e) {
                return "symbol" == typeof e || function(e) {
                    return !!e && "object" == typeof e
                }(e) && f.call(e) == o
            }(e)) return n;
        if (g(e)) {
            var t = "function" == typeof e.valueOf ? e.valueOf() : e;
            e = g(t) ? t + "" : t
        }
        if ("string" != typeof e) return 0 === e ? e : +e;
        e = e.replace(i, "");
        var u = r.test(e);
        return u || c.test(e) ? s(e.slice(2), u ? 2 : 8) : a.test(e) ? n : +e
    }
    var y = function(e, n, o) {
            var i = !0,
                a = !0;
            if ("function" != typeof e) throw new TypeError(t);
            return g(o) && (i = "leading" in o ? !!o.leading : i, a = "trailing" in o ? !!o.trailing : a), v(e, n, {
                leading: i,
                maxWait: n,
                trailing: a
            })
        },
        h = "Expected a function",
        k = NaN,
        x = "[object Symbol]",
        O = /^\s+|\s+$/g,
        j = /^[-+]0x[0-9a-f]+$/i,
        E = /^0b[01]+$/i,
        N = /^0o[0-7]+$/i,
        z = parseInt,
        C = "object" == typeof e && e && e.Object === Object && e,
        A = "object" == typeof self && self && self.Object === Object && self,
        q = C || A || Function("return this")(),
        L = Object.prototype.toString,
        T = Math.max,
        M = Math.min,
        S = function() {
            return q.Date.now()
        };

    function D(e) {
        var t = typeof e;
        return !!e && ("object" == t || "function" == t)
    }

    function H(e) {
        if ("number" == typeof e) return e;
        if (function(e) {
                return "symbol" == typeof e || function(e) {
                    return !!e && "object" == typeof e
                }(e) && L.call(e) == x
            }(e)) return k;
        if (D(e)) {
            var t = "function" == typeof e.valueOf ? e.valueOf() : e;
            e = D(t) ? t + "" : t
        }
        if ("string" != typeof e) return 0 === e ? e : +e;
        e = e.replace(O, "");
        var n = E.test(e);
        return n || N.test(e) ? z(e.slice(2), n ? 2 : 8) : j.test(e) ? k : +e
    }
    var $ = function(e, t, n) {
            var o, i, a, r, c, s, u = 0,
                d = !1,
                l = !1,
                f = !0;
            if ("function" != typeof e) throw new TypeError(h);

            function m(t) {
                var n = o,
                    a = i;
                return o = i = void 0, u = t, r = e.apply(a, n)
            }

            function p(e) {
                var n = e - s;
                return void 0 === s || n >= t || n < 0 || l && e - u >= a
            }

            function b() {
                var e = S();
                if (p(e)) return v(e);
                c = setTimeout(b, function(e) {
                    var n = t - (e - s);
                    return l ? M(n, a - (e - u)) : n
                }(e))
            }

            function v(e) {
                return c = void 0, f && o ? m(e) : (o = i = void 0, r)
            }

            function g() {
                var e = S(),
                    n = p(e);
                if (o = arguments, i = this, s = e, n) {
                    if (void 0 === c) return function(e) {
                        return u = e, c = setTimeout(b, t), d ? m(e) : r
                    }(s);
                    if (l) return c = setTimeout(b, t), m(s)
                }
                return void 0 === c && (c = setTimeout(b, t)), r
            }
            return t = H(t) || 0, D(n) && (d = !!n.leading, a = (l = "maxWait" in n) ? T(H(n.maxWait) || 0, t) : a, f = "trailing" in n ? !!n.trailing : f), g.cancel = function() {
                void 0 !== c && clearTimeout(c), u = 0, o = s = i = c = void 0
            }, g.flush = function() {
                return void 0 === c ? r : v(S())
            }, g
        },
        W = function() {};

    function P(e) {
        e && e.forEach(function(e) {
            var t = Array.prototype.slice.call(e.addedNodes),
                n = Array.prototype.slice.call(e.removedNodes);
            if (function e(t) {
                    var n = void 0,
                        o = void 0;
                    for (n = 0; n < t.length; n += 1) {
                        if ((o = t[n]).dataset && o.dataset.aos) return !0;
                        if (o.children && e(o.children)) return !0
                    }
                    return !1
                }(t.concat(n))) return W()
        })
    }

    function Y() {
        return window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver
    }
    var _ = {
            isSupported: function() {
                return !!Y()
            },
            ready: function(e, t) {
                var n = window.document,
                    o = new(Y())(P);
                W = t, o.observe(n.documentElement, {
                    childList: !0,
                    subtree: !0,
                    removedNodes: !0
                })
            }
        },
        B = function(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        },
        F = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var o = t[n];
                    o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                }
            }
            return function(t, n, o) {
                return n && e(t.prototype, n), o && e(t, o), t
            }
        }(),
        I = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (e[o] = n[o])
            }
            return e
        },
        K = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,
        G = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
        J = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,
        Q = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i;

    function R() {
        return navigator.userAgent || navigator.vendor || window.opera || ""
    }
    var U = new(function() {
            function e() {
                B(this, e)
            }
            return F(e, [{
                key: "phone",
                value: function() {
                    var e = R();
                    return !(!K.test(e) && !G.test(e.substr(0, 4)))
                }
            }, {
                key: "mobile",
                value: function() {
                    var e = R();
                    return !(!J.test(e) && !Q.test(e.substr(0, 4)))
                }
            }, {
                key: "tablet",
                value: function() {
                    return this.mobile() && !this.phone()
                }
            }, {
                key: "ie11",
                value: function() {
                    return "-ms-scroll-limit" in document.documentElement.style && "-ms-ime-align" in document.documentElement.style
                }
            }]), e
        }()),
        V = function(e, t) {
            var n = void 0;
            return U.ie11() ? (n = document.createEvent("CustomEvent")).initCustomEvent(e, !0, !0, {
                detail: t
            }) : n = new CustomEvent(e, {
                detail: t
            }), document.dispatchEvent(n)
        },
        X = function(e) {
            return e.forEach(function(e, t) {
                return function(e, t) {
                    var n = e.options,
                        o = e.position,
                        i = e.node,
                        a = (e.data, function() {
                            e.animated && (function(e, t) {
                                t && t.forEach(function(t) {
                                    return e.classList.remove(t)
                                })
                            }(i, n.animatedClassNames), V("aos:out", i), e.options.id && V("aos:in:" + e.options.id, i), e.animated = !1)
                        });
                    n.mirror && t >= o.out && !n.once ? a() : t >= o.in ? e.animated || (function(e, t) {
                        t && t.forEach(function(t) {
                            return e.classList.add(t)
                        })
                    }(i, n.animatedClassNames), V("aos:in", i), e.options.id && V("aos:in:" + e.options.id, i), e.animated = !0) : e.animated && !n.once && a()
                }(e, window.pageYOffset)
            })
        },
        Z = function(e) {
            for (var t = 0, n = 0; e && !isNaN(e.offsetLeft) && !isNaN(e.offsetTop);) t += e.offsetLeft - ("BODY" != e.tagName ? e.scrollLeft : 0), n += e.offsetTop - ("BODY" != e.tagName ? e.scrollTop : 0), e = e.offsetParent;
            return {
                top: n,
                left: t
            }
        },
        ee = function(e, t, n) {
            var o = e.getAttribute("data-aos-" + t);
            if (void 0 !== o) {
                if ("true" === o) return !0;
                if ("false" === o) return !1
            }
            return o || n
        },
        te = function(e, t) {
            return e.forEach(function(e, n) {
                var o = ee(e.node, "mirror", t.mirror),
                    i = ee(e.node, "once", t.once),
                    a = ee(e.node, "id"),
                    r = t.useClassNames && e.node.getAttribute("data-aos"),
                    c = [t.animatedClassName].concat(r ? r.split(" ") : []).filter(function(e) {
                        return "string" == typeof e
                    });
                t.initClassName && e.node.classList.add(t.initClassName), e.position = {
                    in: function(e, t, n) {
                        var o = window.innerHeight,
                            i = ee(e, "anchor"),
                            a = ee(e, "anchor-placement"),
                            r = Number(ee(e, "offset", a ? 0 : t)),
                            c = a || n,
                            s = e;
                        i && document.querySelectorAll(i) && (s = document.querySelectorAll(i)[0]);
                        var u = Z(s).top - o;
                        switch (c) {
                            case "top-bottom":
                                break;
                            case "center-bottom":
                                u += s.offsetHeight / 2;
                                break;
                            case "bottom-bottom":
                                u += s.offsetHeight;
                                break;
                            case "top-center":
                                u += o / 2;
                                break;
                            case "center-center":
                                u += o / 2 + s.offsetHeight / 2;
                                break;
                            case "bottom-center":
                                u += o / 2 + s.offsetHeight;
                                break;
                            case "top-top":
                                u += o;
                                break;
                            case "bottom-top":
                                u += o + s.offsetHeight;
                                break;
                            case "center-top":
                                u += o + s.offsetHeight / 2
                        }
                        return u + r
                    }(e.node, t.offset, t.anchorPlacement),
                    out: o && function(e, t) {
                        window.innerHeight;
                        var n = ee(e, "anchor"),
                            o = ee(e, "offset", t),
                            i = e;
                        return n && document.querySelectorAll(n) && (i = document.querySelectorAll(n)[0]), Z(i).top + i.offsetHeight - o
                    }(e.node, t.offset)
                }, e.options = {
                    once: i,
                    mirror: o,
                    animatedClassNames: c,
                    id: a
                }
            }), e
        },
        ne = function() {
            var e = document.querySelectorAll("[data-aos]");
            return Array.prototype.map.call(e, function(e) {
                return {
                    node: e
                }
            })
        },
        oe = [],
        ie = !1,
        ae = {
            offset: 120,
            delay: 0,
            easing: "ease",
            duration: 400,
            disable: !1,
            once: !1,
            mirror: !1,
            anchorPlacement: "top-bottom",
            startEvent: "DOMContentLoaded",
            animatedClassName: "aos-animate",
            initClassName: "aos-init",
            useClassNames: !1,
            disableMutationObserver: !1,
            throttleDelay: 99,
            debounceDelay: 50
        },
        re = function() {
            return document.all && !window.atob
        },
        ce = function() {
            arguments.length > 0 && void 0 !== arguments[0] && arguments[0] && (ie = !0), ie && (oe = te(oe, ae), X(oe), window.addEventListener("scroll", y(function() {
                X(oe, ae.once)
            }, ae.throttleDelay)))
        },
        se = function() {
            if (oe = ne(), de(ae.disable) || re()) return ue();
            ce()
        },
        ue = function() {
            oe.forEach(function(e, t) {
                e.node.removeAttribute("data-aos"), e.node.removeAttribute("data-aos-easing"), e.node.removeAttribute("data-aos-duration"), e.node.removeAttribute("data-aos-delay"), ae.initClassName && e.node.classList.remove(ae.initClassName), ae.animatedClassName && e.node.classList.remove(ae.animatedClassName)
            })
        },
        de = function(e) {
            return !0 === e || "mobile" === e && U.mobile() || "phone" === e && U.phone() || "tablet" === e && U.tablet() || "function" == typeof e && !0 === e()
        };
    return {
        init: function(e) {
            return ae = I(ae, e), oe = ne(), ae.disableMutationObserver || _.isSupported() || (console.info('\n      aos: MutationObserver is not supported on this browser,\n      code mutations observing has been disabled.\n      You may have to call "refreshHard()" by yourself.\n    '), ae.disableMutationObserver = !0), ae.disableMutationObserver || _.ready("[data-aos]", se), de(ae.disable) || re() ? ue() : (document.querySelector("body").setAttribute("data-aos-easing", ae.easing), document.querySelector("body").setAttribute("data-aos-duration", ae.duration), document.querySelector("body").setAttribute("data-aos-delay", ae.delay), -1 === ["DOMContentLoaded", "load"].indexOf(ae.startEvent) ? document.addEventListener(ae.startEvent, function() {
                ce(!0)
            }) : window.addEventListener("load", function() {
                ce(!0)
            }), "DOMContentLoaded" === ae.startEvent && ["complete", "interactive"].indexOf(document.readyState) > -1 && ce(!0), window.addEventListener("resize", $(ce, ae.debounceDelay, !0)), window.addEventListener("orientationchange", $(ce, ae.debounceDelay, !0)), oe)
        },
        refresh: ce,
        refreshHard: se
    }
});


/*!
 * metismenu https://github.com/onokumus/metismenu#readme
 * A jQuery menu plugin
 * @version 3.0.3
 * @author Osman Nuri Okumus <onokumus@gmail.com> (https://github.com/onokumus)
 * @license: MIT 
 */
! function(e, n) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = n(require("jquery")) : "function" == typeof define && define.amd ? define(["jquery"], n) : e.metisMenu = n(e.jQuery)
}(this, function(o) {
    "use strict";

    function a(r) {
        for (var e = 1; e < arguments.length; e++) {
            var a = null != arguments[e] ? arguments[e] : {},
                n = Object.keys(a);
            "function" == typeof Object.getOwnPropertySymbols && (n = n.concat(Object.getOwnPropertySymbols(a).filter(function(e) {
                return Object.getOwnPropertyDescriptor(a, e).enumerable
            }))), n.forEach(function(e) {
                var n, t, i;
                n = r, i = a[t = e], t in n ? Object.defineProperty(n, t, {
                    value: i,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : n[t] = i
            })
        }
        return r
    }
    var s = function(i) {
            var n = "transitionend",
                r = {
                    TRANSITION_END: "mmTransitionEnd",
                    triggerTransitionEnd: function(e) {
                        i(e).trigger(n)
                    },
                    supportsTransitionEnd: function() {
                        return Boolean(n)
                    }
                };

            function e(e) {
                var n = this,
                    t = !1;
                return i(this).one(r.TRANSITION_END, function() {
                    t = !0
                }), setTimeout(function() {
                    t || r.triggerTransitionEnd(n)
                }, e), this
            }
            return i.fn.mmEmulateTransitionEnd = e, i.event.special[r.TRANSITION_END] = {
                bindType: n,
                delegateType: n,
                handle: function(e) {
                    if (i(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
                }
            }, r
        }(o = o && o.hasOwnProperty("default") ? o.default : o),
        e = "metisMenu",
        g = "metisMenu",
        n = "." + g,
        t = o.fn[e],
        l = {
            toggle: !0,
            preventDefault: !0,
            triggerElement: "a",
            parentTrigger: "li",
            subMenu: "ul"
        },
        u = {
            SHOW: "show" + n,
            SHOWN: "shown" + n,
            HIDE: "hide" + n,
            HIDDEN: "hidden" + n,
            CLICK_DATA_API: "click" + n + ".data-api"
        },
        i = "metismenu",
        f = "mm-active",
        h = "mm-show",
        d = "mm-collapse",
        c = "mm-collapsing",
        r = function() {
            function r(e, n) {
                this.element = e, this.config = a({}, l, n), this.transitioning = null, this.init()
            }
            var e = r.prototype;
            return e.init = function() {
                var a = this,
                    s = this.config;
                o(this.element).addClass(i), o(this.element).find(s.parentTrigger + "." + f).children(s.triggerElement).attr("aria-expanded", "true"), o(this.element).find(s.parentTrigger + "." + f).parents(s.parentTrigger).addClass(f), o(this.element).find(s.parentTrigger + "." + f).parents(s.parentTrigger).children(s.triggerElement).attr("aria-expanded", "true"), o(this.element).find(s.parentTrigger + "." + f).has(s.subMenu).children(s.subMenu).addClass(d + " " + h), o(this.element).find(s.parentTrigger).not("." + f).has(s.subMenu).children(s.subMenu).addClass(d), o(this.element).find(s.parentTrigger).has(s.subMenu).children(s.triggerElement).on(u.CLICK_DATA_API, function(e) {
                    var n = o(this),
                        t = n.parent(s.parentTrigger),
                        i = t.siblings(s.parentTrigger).children(s.triggerElement),
                        r = t.children(s.subMenu);
                    s.preventDefault && e.preventDefault(), "true" !== n.attr("aria-disabled") && (t.hasClass(f) ? (n.attr("aria-expanded", "false"), a.hide(r)) : (a.show(r), n.attr("aria-expanded", "true"), s.toggle && i.attr("aria-expanded", "false")), s.onTransitionStart && s.onTransitionStart(e))
                })
            }, e.show = function(e) {
                var n = this;
                if (!this.transitioning && !o(e).hasClass(c)) {
                    var t = o(e),
                        i = o.Event(u.SHOW);
                    if (t.trigger(i), !i.isDefaultPrevented()) {
                        if (t.parent(this.config.parentTrigger).addClass(f), this.config.toggle) {
                            var r = t.parent(this.config.parentTrigger).siblings().children(this.config.subMenu + "." + h);
                            this.hide(r)
                        }
                        t.removeClass(d).addClass(c).height(0), this.setTransitioning(!0);
                        t.height(e[0].scrollHeight).one(s.TRANSITION_END, function() {
                            n.config && n.element && (t.removeClass(c).addClass(d + " " + h).height(""), n.setTransitioning(!1), t.trigger(u.SHOWN))
                        }).mmEmulateTransitionEnd(350)
                    }
                }
            }, e.hide = function(e) {
                var n = this;
                if (!this.transitioning && o(e).hasClass(h)) {
                    var t = o(e),
                        i = o.Event(u.HIDE);
                    if (t.trigger(i), !i.isDefaultPrevented()) {
                        t.parent(this.config.parentTrigger).removeClass(f), t.height(t.height())[0].offsetHeight, t.addClass(c).removeClass(d).removeClass(h), this.setTransitioning(!0);
                        var r = function() {
                            n.config && n.element && (n.transitioning && n.config.onTransitionEnd && n.config.onTransitionEnd(), n.setTransitioning(!1), t.trigger(u.HIDDEN), t.removeClass(c).addClass(d))
                        };
                        0 === t.height() || "none" === t.css("display") ? r() : t.height(0).one(s.TRANSITION_END, r).mmEmulateTransitionEnd(350)
                    }
                }
            }, e.setTransitioning = function(e) {
                this.transitioning = e
            }, e.dispose = function() {
                o.removeData(this.element, g), o(this.element).find(this.config.parentTrigger).has(this.config.subMenu).children(this.config.triggerElement).off("click"), this.transitioning = null, this.config = null, this.element = null
            }, r.jQueryInterface = function(i) {
                return this.each(function() {
                    var e = o(this),
                        n = e.data(g),
                        t = a({}, l, e.data(), "object" == typeof i && i ? i : {});
                    if (n || (n = new r(this, t), e.data(g, n)), "string" == typeof i) {
                        if (void 0 === n[i]) throw new Error('No method named "' + i + '"');
                        n[i]()
                    }
                })
            }, r
        }();
    return o.fn[e] = r.jQueryInterface, o.fn[e].Constructor = r, o.fn[e].noConflict = function() {
        return o.fn[e] = t, r.jQueryInterface
    }, r
});


var body = $('body');
var html = $('html');

function dlabSettings({
    typography,
    version,
    layout,
    navheaderBg,
    headerBg,
    sidebarStyle,
    sidebarBg,
    sidebarPosition,
    headerPosition,
    containerLayout,
    direction,
    primary
}) {
    this.typography = typography || "Nunito";
    this.version = version || "light";
    this.layout = layout || "vertical";
    this.navheaderBg = navheaderBg || "color_1";
    this.headerBg = headerBg || "color_1";
    this.sidebarStyle = sidebarStyle || "full";
    this.sidebarBg = sidebarBg || "color_1";
    this.sidebarPosition = sidebarPosition || "static";
    this.headerPosition = headerPosition || "static";
    this.containerLayout = containerLayout || "wide";
    this.direction = direction || "ltr";
    this.primary = primary || "color_1";

    this.manageTypography();
    this.manageVersion();
    this.manageLayout();
    this.manageNavHeaderBg();
    this.manageHeaderBg();
    this.manageSidebarStyle();
    this.manageSidebarBg();
    this.manageSidebarPosition();
    this.manageHeaderPosition();
    this.manageContainerLayout();
    this.manageRtlLayout();
    this.manageResponsiveSidebar();
    this.managePrimaryColor();
}
dlabSettings.prototype.manageVersion = function() {
    switch (this.version) {
        case "light":
            body.attr("data-theme-version", "light");
            break;
        case "dark":
            body.attr("data-theme-version", "dark");
            break;
        case "transparent":
            body.attr("data-theme-version", "transparent");
            break;
        default:
            body.attr("data-theme-version", "light");
    }
}
dlabSettings.prototype.manageTypography = function() {
    switch (this.typography) {
        case "Nunito":
            body.attr("data-typography", "Nunito");
            break;
        case "poppins":
            body.attr("data-typography", "poppins");
            break;
        case "roboto":
            body.attr("data-typography", "roboto");
            break;
        case "opensans":
            body.attr("data-typography", "opensans");
            break;
        case "helveticaneue":
            body.attr("data-typography", "helveticaneue");
            break;
        default:
            body.attr("data-typography", "poppins");
    }
}
dlabSettings.prototype.manageLayout = function() {
    switch (this.layout) {
        case "horizontal":
            this.sidebarStyle === "overlay" ? body.attr("data-sidebar-style", "full") : body.attr("data-sidebar-style", `${this.sidebarStyle}`);
            body.attr("data-layout", "horizontal");
            break;
        case "vertical":
            body.attr("data-layout", "vertical");
            break;
        default:
            body.attr("data-layout", "vertical");
    }
}
dlabSettings.prototype.manageNavHeaderBg = function() {
    switch (this.navheaderBg) {
        case "color_1":
            body.attr("data-nav-headerbg", "color_1");
            break;
        case "color_2":
            body.attr("data-nav-headerbg", "color_2");
            break;
        case "color_3":
            body.attr("data-nav-headerbg", "color_3");
            break;
        case "color_4":
            body.attr("data-nav-headerbg", "color_4");
            break;
        case "color_5":
            body.attr("data-nav-headerbg", "color_5");
            break;
        case "color_6":
            body.attr("data-nav-headerbg", "color_6");
            break;
        case "color_7":
            body.attr("data-nav-headerbg", "color_7");
            break;
        case "color_8":
            body.attr("data-nav-headerbg", "color_8");
            break;
        case "color_9":
            body.attr("data-nav-headerbg", "color_9");
            break;
        case "color_10":
            body.attr("data-nav-headerbg", "color_10");
            break;
        case "color_11":
            body.attr("data-nav-headerbg", "color_11");
            break;
        case "color_12":
            body.attr("data-nav-headerbg", "color_12");
            break;
        case "color_13":
            body.attr("data-nav-headerbg", "color_13");
            break;
        case "color_14":
            body.attr("data-nav-headerbg", "color_14");
            break;
        case "color_15":
            body.attr("data-nav-headerbg", "color_15");
            break;
        case "image_1":
            body.attr("data-nav-headerbg", "image_1");
            break;
        case "image_2":
            body.attr("data-nav-headerbg", "image_2");
            break;
        case "image_3":
            body.attr("data-nav-headerbg", "image_3");
            break;
        default:
            body.attr("data-nav-headerbg", "color_1");
    }
}
dlabSettings.prototype.manageHeaderBg = function() {
    switch (this.headerBg) {
        case "color_1":
            body.attr("data-headerbg", "color_1");
            break;
        case "color_2":
            body.attr("data-headerbg", "color_2");
            break;
        case "color_3":
            body.attr("data-headerbg", "color_3");
            break;
        case "color_4":
            body.attr("data-headerbg", "color_4");
            break;
        case "color_5":
            body.attr("data-headerbg", "color_5");
            break;
        case "color_6":
            body.attr("data-headerbg", "color_6");
            break;
        case "color_7":
            body.attr("data-headerbg", "color_7");
            break;
        case "color_8":
            body.attr("data-headerbg", "color_8");
            break;
        case "color_9":
            body.attr("data-headerbg", "color_9");
            break;
        case "color_10":
            body.attr("data-headerbg", "color_10");
            break;
        case "color_11":
            body.attr("data-headerbg", "color_11");
            break;
        case "color_12":
            body.attr("data-headerbg", "color_12");
            break;
        case "color_13":
            body.attr("data-headerbg", "color_13");
            break;
        case "color_14":
            body.attr("data-headerbg", "color_14");
            break;
        case "color_15":
            body.attr("data-headerbg", "color_15");
            break;
        case "transparent":
            body.attr("data-headerbg", "transparent");
            break;
        case "gradient_1":
            body.attr("data-headerbg", "gradient_1");
            break;
        case "gradient_2":
            body.attr("data-headerbg", "gradient_2");
            break;
        case "gradient_3":
            body.attr("data-headerbg", "gradient_3");
            break;
        default:
            body.attr("data-headerbg", "color_1");
    }
}
dlabSettings.prototype.manageSidebarStyle = function() {


    switch (this.sidebarStyle) {
        case "full":
            body.attr("data-sidebar-style", "full");
            break;
        case "mini":
            body.attr("data-sidebar-style", "mini");
            break;
        case "compact":
            body.attr("data-sidebar-style", "compact");
            break;
        case "modern":
            body.attr("data-sidebar-style", "modern");
            break;
        case "icon-hover":
            body.attr("data-sidebar-style", "icon-hover");
            $('.dlabnav').hover(function() {
                $('#main-wrapper').addClass('iconhover-toggle');
            }, function() {
                $('#main-wrapper').removeClass('iconhover-toggle');
            });
            /* var currentBodyLayout = currentSidebarStyle = '';
			
			$('.dlabnav').hover(function() {
				
				 if(body.attr('data-sidebar-style') === 'icon-hover') { $('#main-wrapper').addClass('iconhover-toggle'); }
				
				currentBodyLayout = jQuery('body').attr('data-layout');
				currentSidebarStyle = jQuery('body').attr('data-sidebar-style');
				
                if(currentBodyLayout === 'vertical' && currentSidebarStyle === 'icon-hover'){ $('.metismenu .mm-active ul').addClass('mm-show'); }
            
			}, function() {
				
				 if(body.attr('data-sidebar-style') === 'icon-hover') { $('#main-wrapper').removeClass('iconhover-toggle'); }
				
				currentBodyLayout = jQuery('body').attr('data-layout');
				currentSidebarStyle = jQuery('body').attr('data-sidebar-style');
                
				if(currentBodyLayout === 'vertical' && currentSidebarStyle === 'icon-hover'){ $('.metismenu .mm-active ul').removeClass('mm-show'); }
            }); */
            break;
        case "overlay":
            this.layout === "horizontal" ? body.attr("data-sidebar-style", "full") : body.attr("data-sidebar-style", "overlay");
            break;
        default:
            body.attr("data-sidebar-style", "full");
    }
}
dlabSettings.prototype.manageSidebarBg = function() {
    switch (this.sidebarBg) {
        case "color_1":
            body.attr("data-sibebarbg", "color_1");
            break;
        case "color_2":
            body.attr("data-sibebarbg", "color_2");
            break;
        case "color_3":
            body.attr("data-sibebarbg", "color_3");
            break;
        case "color_4":
            body.attr("data-sibebarbg", "color_4");
            break;
        case "color_5":
            body.attr("data-sibebarbg", "color_5");
            break;
        case "color_6":
            body.attr("data-sibebarbg", "color_6");
            break;
        case "color_7":
            body.attr("data-sibebarbg", "color_7");
            break;
        case "color_8":
            body.attr("data-sibebarbg", "color_8");
            break;
        case "color_9":
            body.attr("data-sibebarbg", "color_9");
            break;
        case "color_10":
            body.attr("data-sibebarbg", "color_10");
            break;
        case "color_11":
            body.attr("data-sibebarbg", "color_11");
            break;
        case "color_12":
            body.attr("data-sibebarbg", "color_12");
            break;
        case "color_13":
            body.attr("data-sibebarbg", "color_13");
            break;
        case "color_14":
            body.attr("data-sibebarbg", "color_14");
            break;
        case "color_15":
            body.attr("data-sibebarbg", "color_15");
            break;
        case "image_1":
            body.attr("data-sibebarbg", "image_1");
            break;
        case "image_2":
            body.attr("data-sibebarbg", "image_2");
            break;
        case "image_3":
            body.attr("data-sibebarbg", "image_3");
            break;
        default:
            body.attr("data-sibebarbg", "color_1");
    }
}
dlabSettings.prototype.manageSidebarPosition = function() {
    switch (this.sidebarPosition) {
        case "fixed":
            this.sidebarStyle === "overlay" && this.layout === "vertical" || this.sidebarStyle === "modern" ? body.attr("data-sidebar-position", "static") : body.attr("data-sidebar-position", "fixed");
            break;
        case "static":
            body.attr("data-sidebar-position", "static");
            break;
        default:
            body.attr("data-sidebar-position", "static");
    }
}
dlabSettings.prototype.manageHeaderPosition = function() {
    switch (this.headerPosition) {
        case "fixed":
            body.attr("data-header-position", "fixed");
            break;
        case "static":
            body.attr("data-header-position", "static");
            break;
        default:
            body.attr("data-header-position", "static");
    }
}
dlabSettings.prototype.manageContainerLayout = function() {
    switch (this.containerLayout) {
        case "boxed":
            if (this.layout === "vertical" && this.sidebarStyle === "full") {
                body.attr("data-sidebar-style", "overlay");
            }
            body.attr("data-container", "boxed");
            break;
        case "wide":
            body.attr("data-container", "wide");
            break;
        case "wide-boxed":
            body.attr("data-container", "wide-boxed");
            break;
        default:
            body.attr("data-container", "wide");
    }
}
dlabSettings.prototype.manageRtlLayout = function() {

    //alert(this.direction);
    switch (this.direction) {
        case "rtl":
            html.attr("dir", "rtl");
            html.addClass('rtl');
            body.attr("direction", "rtl");
            break;
        case "ltr":
            html.attr("dir", "ltr");
            html.removeClass('rtl');
            body.attr("direction", "ltr");
            break;
        default:
            html.attr("dir", "ltr");
            body.attr("direction", "ltr");
    }


}
dlabSettings.prototype.manageResponsiveSidebar = function() {
    const innerWidth = $(window).innerWidth();
    if (innerWidth < 1024) {
        body.attr("data-layout", "vertical");
        body.attr("data-container", "wide");
    }

    if (innerWidth > 767 && innerWidth < 1024) {
        body.attr("data-sidebar-style", "mini");
    }

    if (innerWidth < 768) {
        body.attr("data-sidebar-style", "overlay");
    }
}
dlabSettings.prototype.managePrimaryColor = function() {
    switch (this.primary) {
        case "color_1":
            body.attr("data-primary", "color_1");
            break;
        case "color_2":
            body.attr("data-primary", "color_2");
            break;
        case "color_3":
            body.attr("data-primary", "color_3");
            break;
        case "color_4":
            body.attr("data-primary", "color_4");
            break;
        case "color_5":
            body.attr("data-primary", "color_5");
            break;
        case "color_6":
            body.attr("data-primary", "color_6");
            break;
        case "color_7":
            body.attr("data-primary", "color_7");
            break;
        case "color_8":
            body.attr("data-primary", "color_8");
            break;
        case "color_9":
            body.attr("data-primary", "color_9");
            break;
        case "color_10":
            body.attr("data-primary", "color_10");
            break;
        case "color_11":
            body.attr("data-primary", "color_11");
            break;
        case "color_12":
            body.attr("data-primary", "color_12");
            break;
        case "color_13":
            body.attr("data-primary", "color_13");
            break;
        case "color_14":
            body.attr("data-primary", "color_14");
            break;
        case "color_15":
            body.attr("data-primary", "color_15");
            break;

        default:
            body.attr("data-primary", "color_1");
    }
}