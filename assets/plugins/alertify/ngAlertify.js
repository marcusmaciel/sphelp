angular.module("ngAlertify", []).factory("alertify", function () {
    "use strict";
    var t = {
        exports: !0
    }
    ;
    !function () {
        function e() {
            var t = {
                defaultOkLabel: "Ok", okLabel: "Ok", defaultCancelLabel: "Cancelar", cancelLabel: "Cancelar", defaultMaxLogItems: 2, maxLogItems: 2, promptValue: "", promptPlaceholder: "", closeLogOnClick: !1, closeLogOnClickDefault: !1, delay: 5e3, defaultDelay: 5e3, logContainerClass: "alertify-logs", logContainerDefaultClass: "alertify-logs", dialogs: {
                    buttons: {
                        holder: "<nav>{{buttons}}</nav>", ok: "<button class='ok' tabindex='1'>{{ok}}</button>", cancel: "<button class='cancel' tabindex='2'>{{cancel}}</button>"
                    }
                    , input: "<input type='text'>", message: "<p class='msg'>{{message}}</p>", log: "<div class='{{class}}'>{{message}}</div>"
                }
                , defaultDialogs: {
                    buttons: {
                        holder: "<nav>{{buttons}}</nav>", ok: "<button class='ok' tabindex='1'>{{ok}}</button>", cancel: "<button class='cancel' tabindex='2'>{{cancel}}</button>"
                    }
                    , input: "<input type='text'>", message: "<p class='msg'>{{message}}</p>", log: "<div class='{{class}}'>{{message}}</div>"
                }
                , build: function (t) {
                    var e = this.dialogs.buttons.ok, o = "<div class='dialog'><div>" + this.dialogs.message.replace("{{message}}", t.message);
                    return("confirm" === t.type || "prompt" === t.type) && (e = this.dialogs.buttons.cancel + this.dialogs.buttons.ok), "prompt" === t.type && (o += this.dialogs.input), o = (o + this.dialogs.buttons.holder + "</div></div>").replace("{{buttons}}", e).replace("{{ok}}", this.okLabel).replace("{{cancel}}", this.cancelLabel)
                }
                , setCloseLogOnClick: function (t) {
                    this.closeLogOnClick = !!t
                }
                , close: function (t, e) {
                    this.closeLogOnClick && t.addEventListener("click", function (t) {
                        n(t.srcElement)
                    }
                    ), e = e && !isNaN(+e) ? +e : this.delay, 0 > e ? n(t) : e > 0 && setTimeout(function () {
                        n(t)
                    }
                    , e)
                }
                , dialog: function (t, e, o, n) {
                    return this.setup({
                        type: e, message: t, onOkay: o, onCancel: n
                    }
                    )
                }
                , log: function (t, e, o) {
                    var n = document.querySelectorAll(".alertify-logs > div");
                    if (n) {
                        var i = n.length - this.maxLogItems;
                        if (i >= 0)
                            for (var a = 0, l = i + 1;
                                    l > a;
                                    a++)
                                this.close(n[a], -1)
                    }
                    this.notify(t, e, o)
                }
                , setLogPosition: function (t) {
                    this.logContainerClass = "alertify-logs " + t
                }
                , setupLogContainer: function () {
                    var t = document.querySelector(".alertify-logs"), e = this.logContainerClass;
                    return t || (t = document.createElement("div"), t.className = e, document.body.appendChild(t)), t.className !== e && (t.className = e), t
                }
                , notify: function (t, e, o) {
                    var n = this.setupLogContainer(), i = document.createElement("div");
                    i.className = e || "default", i.innerHTML = t, "function" == typeof o && i.addEventListener("click", o), n.appendChild(i), setTimeout(function () {
                        i.className += " show"
                    }
                    , 10), this.close(i, this.delay)
                }
                , setup: function (t) {
                    function e(e) {
                        "function" != typeof e && (e = function () {}
                        ), i && i.addEventListener("click", function (i) {
                            t.onOkay && "function" == typeof t.onOkay && (l ? t.onOkay(l.value, i) : t.onOkay(i)), e(l ? {
                                buttonClicked: "ok", inputValue: l.value, event: i
                            }
                            : {
                                buttonClicked: "ok", event: i
                            }
                            ), n(o)
                        }
                        ), a && a.addEventListener("click", function (i) {
                            t.onCancel && "function" == typeof t.onCancel && t.onCancel(i), e({
                                buttonClicked: "cancel", event: i
                            }
                            ), n(o)
                        }
                        )
                    }
                    var o = document.createElement("div");
                    o.className = "alertify hide", o.innerHTML = this.build(t);
                    var i = o.querySelector(".ok"), a = o.querySelector(".cancel"), l = o.querySelector("input"), s = o.querySelector("label");
                    l && ("string" == typeof this.promptPlaceholder && (s ? s.textContent = this.promptPlaceholder : l.placeholder = this.promptPlaceholder), "string" == typeof this.promptValue && (l.value = this.promptValue));
                    var r;
                    return"function" == typeof Promise ? r = new Promise(e) : e(), document.body.appendChild(o), setTimeout(function () {
                        o.classList.remove("hide"), l && t.type && "prompt" === t.type ? (l.select(), l.focus()) : i && i.focus()
                    }
                    , 100), r
                }
                , okBtn: function (t) {
                    return this.okLabel = t, this
                }
                , setDelay: function (t) {
                    var e = parseInt(t || 0, 10);
                    return this.delay = isNaN(e) ? this.defultDelay : t, this
                }
                , cancelBtn: function (t) {
                    return this.cancelLabel = t, this
                }
                , setMaxLogItems: function (t) {
                    this.maxLogItems = parseInt(t || this.defaultMaxLogItems)
                }
                , theme: function (t) {
                    switch (t.toLowerCase()) {
                        case"bootstrap":
                            this.dialogs.buttons.ok = "<button class='ok btn btn-primary' tabindex='1'>{{ok}}</button>", this.dialogs.buttons.cancel = "<button class='cancel btn btn-default' tabindex='2'>{{cancel}}</button>", this.dialogs.input = "<input type='text' class='form-control'>";
                            break;
                        case"purecss":
                            this.dialogs.buttons.ok = "<button class='ok pure-button' tabindex='1'>{{ok}}</button>", this.dialogs.buttons.cancel = "<button class='cancel pure-button' tabindex='2'>{{cancel}}</button>";
                            break;
                        case"mdl":
                        case"material-design-light":
                            this.dialogs.buttons.ok = "<button class='ok mdl-button mdl-js-button mdl-js-ripple-effect'  tabindex='1'>{{ok}}</button>", this.dialogs.buttons.cancel = "<button class='cancel mdl-button mdl-js-button mdl-js-ripple-effect' tabindex='2'>{{cancel}}</button>", this.dialogs.input = "<div class='mdl-textfield mdl-js-textfield'><input class='mdl-textfield__input'><label class='md-textfield__label'></label></div>";
                            break;
                        case"angular-material":
                            this.dialogs.buttons.ok = "<button class='ok md-primary md-button' tabindex='1'>{{ok}}</button>", this.dialogs.buttons.cancel = "<button class='cancel md-button' tabindex='2'>{{cancel}}</button>", this.dialogs.input = "<div layout='column'><md-input-container md-no-float><input type='text'></md-input-container></div>";
                            break;
                        case"default":
                        default:
                            this.dialogs.buttons.ok = this.defaultDialogs.buttons.ok, this.dialogs.buttons.cancel = this.defaultDialogs.buttons.cancel, this.dialogs.input = this.defaultDialogs.input
                    }
                }
                , reset: function () {
                    this.theme("bootstrap"), this.okBtn(this.defaultOkLabel), this.cancelBtn(this.defaultCancelLabel), this.setMaxLogItems(), this.promptValue = "", this.promptPlaceholder = "", this.delay = this.defaultDelay, this.setCloseLogOnClick(this.closeLogOnClickDefault), this.setLogPosition("bottom right")
                }
                , injectCSS: function () {
                    if (!document.querySelector("#alertifyCSS")) {
                        var t = document.getElementsByTagName("head")[0], e = document.createElement("style");
                        e.type = "text/css", e.id = "alertifyCSS", e.innerHTML = ".alertify,.alertify *,.alertify-logs>*,.alertify.show{box-sizing:border-box}.alertify-logs>*{color:#fff;box-shadow:0 2px 5px 0 rgba(0,0,0,.2);border-radius:1px}.alertify-logs>*,.alertify-logs>.default{background:#111}.alertify-logs>.error{background:#f56954}.alertify-logs>.success{background:#00a65a}.alertify-logs>.primary{background:#3c8dbc}.alertify-logs>.info{background:#00c0ef}.alertify-logs>.warning{background:#f39c12}.alertify-logs>.gray{background:#d2d6de}.alertify-logs>.navy{background:#001F3F}.alertify-logs>.teal{background:#39CCCC}.alertify-logs>.purple{background:#605ca8}.alertify-logs>.orange{background:#ff851b}.alertify-logs>.maroom{background:#D81B60}.alertify{position:fixed;background-color:rgba(0,0,0,.3);left:0;right:0;top:0;bottom:0;width:100%;height:100%;z-index:99999}.alertify.hide{opacity:0;pointer-events:none}.alertify,.alertify.show{-webkit-transition:all .33s cubic-bezier(.25,.8,.25,1);transition:all .33s cubic-bezier(.25,.8,.25,1)}.alertify .dialog{padding:12px}.alertify .alert,.alertify .dialog{width:100%;margin:0 auto;position:relative;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.alertify .alert>*,.alertify .dialog>*{width:400px;max-width:95%;margin:0 auto;text-align:center;padding:12px;background:#fff;box-shadow:0 2px 4px -1px rgba(0,0,0,.14),0 4px 5px 0 rgba(0,0,0,.098),0 1px 10px 0 rgba(0,0,0,.084)}.alertify .alert .msg,.alertify .dialog .msg{padding:12px;margin:0;text-align:left}.alertify .alert input:not(.form-control),.alertify .dialog input:not(.form-control){margin-bottom:15px;width:100%;font-size:100%;padding:12px}.alertify .alert input:not(.form-control):focus,.alertify .dialog input:not(.form-control):focus{outline-offset:-2px}.alertify .alert nav,.alertify .dialog nav{text-align:right}.alertify .alert nav button:not(.btn):not(.pure-button):not(.md-button):not(.mdl-button),.alertify .dialog nav button:not(.btn):not(.pure-button):not(.md-button):not(.mdl-button){background:0 0;box-sizing:border-box;color:rgba(0,0,0,.87);position:relative;outline:0;border:0;display:inline-block;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;padding:0 6px;margin:6px 8px;line-height:36px;min-height:36px;white-space:nowrap;min-width:88px;text-align:center;text-transform:uppercase;font-size:14px;text-decoration:none;cursor:pointer;border-radius:2px}.alertify .alert nav button:not(.btn):not(.pure-button):not(.md-button):not(.mdl-button):active,.alertify .alert nav button:not(.btn):not(.pure-button):not(.md-button):not(.mdl-button):hover,.alertify .dialog nav button:not(.btn):not(.pure-button):not(.md-button):not(.mdl-button):active,.alertify .dialog nav button:not(.btn):not(.pure-button):not(.md-button):not(.mdl-button):hover{background-color:rgba(0,0,0,.05)}.alertify .alert nav button:not(.btn):not(.pure-button):not(.md-button):not(.mdl-button):focus,.alertify .dialog nav button:not(.btn):not(.pure-button):not(.md-button):not(.mdl-button):focus{border:1px dashed rgba(0,0,0,.1)}.alertify .alert nav button.btn,.alertify .dialog nav button.btn{margin:6px 4px}.alertify-logs{position:fixed;z-index:100}.alertify-logs.bottom,.alertify-logs:not(.top){bottom:16px}.alertify-logs.left,.alertify-logs:not(.right){left:16px}.alertify-logs.left>*,.alertify-logs:not(.right)>*{float:left;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);height:auto}.alertify-logs.left>.show,.alertify-logs:not(.right)>.show{left:0}.alertify-logs.left>*,.alertify-logs.left>.hide,.alertify-logs:not(.right)>*,.alertify-logs:not(.right)>.hide{left:-110%}.alertify-logs.right{right:16px}.alertify-logs.right>*{float:right;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.alertify-logs.right>.show{right:0;opacity:1}.alertify-logs.right>*,.alertify-logs.right>.hide{right:-110%;opacity:0}.alertify-logs.top{top:0}.alertify-logs>*{-webkit-transition:all .4s cubic-bezier(.25,.8,.25,1);transition:all .4s cubic-bezier(.25,.8,.25,1);position:relative;clear:both;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000;perspective:1000;max-height:0;margin:0;padding:0;overflow:hidden;opacity:0;pointer-events:none}.alertify-logs>.show{margin-top:12px;opacity:1;max-height:1000px;padding:12px;pointer-events:auto}", t.insertBefore(e, t.firstChild)
                    }
                }
                , removeCSS: function () {
                    var t = document.querySelector("#alertifyCSS");
                    t && t.parentNode && t.parentNode.removeChild(t)
                }
            }
            ;
            return t.injectCSS(), t.reset(), {
                _$alertify: t, reset: function () {
                    return t.reset(), this
                }
                , alert: function (e, o, n) {
                    return t.dialog(e, "alert", o, n) || this
                }
                , confirm: function (e, o, n) {
                    return t.dialog(e, "confirm", o, n) || this
                }
                , prompt: function (e, o, n) {
                    return t.dialog(e, "prompt", o, n) || this
                }
                , log: function (e, o) {
                    return t.log(e, "default", o), this
                }
                , theme: function (e) {
                    return t.theme(e), this
                }
                , success: function (e, o) {
                    return t.log(e, "success", o), this
                }
                , error: function (e, o) {
                    return t.log(e, "error", o), this
                }
                // custom log's
                , primary: function (e, o) {
                    return t.log(e, "primary", o), this
                }
                , info: function (e, o) {
                    return t.log(e, "info", o), this
                }
                , warning: function (e, o) {
                    return t.log(e, "warning", o), this
                }
                , gray: function (e, o) {
                    return t.log(e, "gray", o), this
                }
                , navy: function (e, o) {
                    return t.log(e, "navy", o), this
                }
                , teal: function (e, o) {
                    return t.log(e, "teal", o), this
                }
                , purple: function (e, o) {
                    return t.log(e, "purple", o), this
                }
                , orange: function (e, o) {
                    return t.log(e, "orange", o), this
                }
                , maroon: function (e, o) {
                    return t.log(e, "maroon", o), this
                }
                // custom log's
                , cancelBtn: function (e) {
                    return t.cancelBtn(e), this
                }
                , okBtn: function (e) {
                    return t.okBtn(e), this
                }
                , delay: function (e) {
                    return t.setDelay(e), this
                }
                , placeholder: function (e) {
                    return t.promptPlaceholder = e, this
                }
                , defaultValue: function (e) {
                    return t.promptValue = e, this
                }
                , maxLogItems: function (e) {
                    return t.setMaxLogItems(e), this
                }
                , closeLogOnClick: function (e) {
                    return t.setCloseLogOnClick(!!e), this
                }
                , logPosition: function (e) {
                    return t.setLogPosition(e || "right"), this
                }
            }
        }
        var o = 500, n = function (t) {
            if (t) {
                var e = function () {
                    t && t.parentNode && t.parentNode.removeChild(t)
                }
                ;
                t.classList.remove("show"), t.classList.add("hide"), t.addEventListener("transitionend", e), setTimeout(e, o)
            }
        }
        ;
        "undefined" != typeof t && t && t.exports ? t.exports = e : "function" == typeof define && define.amd ? define(function () {
            return new e
        }
        ) : window.alertify = new e
    }
    ();
    var e = t.exports;
    return new e
}

);