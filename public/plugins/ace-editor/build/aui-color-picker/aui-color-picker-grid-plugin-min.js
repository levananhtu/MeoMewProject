AUI.add("aui-color-picker-grid-plugin", function (c) {
    var f = c.Lang, a = f.isString, n = "colorpickergrid", l = "cpgrid", g = "ColorPickerGridPlugin",
        d = c.getClassName, m = "item", k = d(n), p = d(n, m), i = d(n, m, "content"), h = "", o = '"></span></span>',
        e = '"><span class="' + i + '" style="background-color:#', j = '<span class="' + p + '" data-color="';
    var b = c.Component.create({
        NAME: n,
        NS: l,
        ATTRS: {colors: {value: "websafe", setter: "_setColors"}},
        EXTENDS: c.Plugin.Base,
        prototype: {
            initializer: function () {
                var q = this;
                var r = q.get("host");
                r.set("cssClass", k);
                q.beforeHostMethod("_renderSliders", q._preventHostMethod);
                q.beforeHostMethod("_renderControls", q._preventHostMethod);
                q.beforeHostMethod("bindUI", q._beforeBindUI);
                q.beforeHostMethod("syncUI", q._beforeSyncUI);
                q.afterHostMethod("_renderContainer", q._afterRenderContainer);
                q.after("colorsChange", q._afterColorsChange);
            }, _afterColorsChange: function (r) {
                var q = this;
                q._uiSetColors(r.newVal);
            }, _afterRenderContainer: function () {
                var q = this;
                var r = q.get("host");
                q._uiSetColors(q.get("colors"));
                r.after("hexChange", r._updateRGB);
                r.after("rgbChange", r._updateRGB);
                var s = r._pickerContainer;
                s.delegate("click", function (t) {
                    r.set("hex", t.currentTarget.attr("data-color"));
                }, "." + p);
            }, _beforeBindUI: function () {
                var q = this;
                var r = q.get("host");
                r.constructor.superclass.bindUI.apply(r, arguments);
                return q._preventHostMethod();
            }, _beforeSyncUI: function () {
                var q = this;
                var r = q.get("host");
                r.constructor.superclass.syncUI.apply(r, arguments);
                return q._preventHostMethod();
            }, _getHex: function (t, s, q) {
                return (16777216 | q | (s << 8) | (t << 16)).toString(16).slice(1);
            }, _getWebSafeColors: function () {
                var r = this;
                var x = 0;
                var w = 0;
                var q = 0;
                var v = r._getHex;
                var s = [v(x, w, q)];
                for (var u = 0, t = 1; u < 256; u += 51, t++) {
                    if (x == 255 && w == 255 && q == 255) {
                        break;
                    }
                    if (w > 255) {
                        x += 51;
                        w = u = 0;
                        s[t++] = v(x, w, q);
                    }
                    if (q >= 255) {
                        w += 51;
                        if (w > 255) {
                            x += 51;
                            w = 0;
                        }
                        q = u = 0;
                        s[t++] = v(x, w, q);
                    }
                    q += 51;
                    s[t] = v(x, w, q);
                }
                return s;
            }, _preventHostMethod: function () {
                var q = this;
                return new c.Do.Prevent(null, null);
            }, _setColors: function (r) {
                var q = this;
                if (r == "websafe") {
                    r = q._getWebSafeColors();
                } else {
                    if (!f.isArray(r)) {
                        r = c.Attribute.INVALID_VALUE;
                    }
                }
                return r;
            }, _uiSetColors: function (u) {
                var q = this;
                var r = [];
                var s = [j, h, e, h, o];
                c.each(u, function (w, v, x) {
                    s[1] = s[3] = w;
                    r[v] = s.join(h);
                });
                var t = q.get("host")._pickerContainer;
                t.setContent(r.join(h));
            }
        }
    });
    c.Plugin.ColorPickerGrid = b;
}, "@VERSION@", {skinnable: true, requires: ["aui-color-picker-base", "plugin"]});