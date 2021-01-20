<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta content='width=1024' name='viewport'>
    <title>PHP – Скриптовый язык общего назначения / Хабр</title>

    <meta name="description"
          content="PHP (англ. PHP: Hypertext Preprocessor — «PHP: препроцессор гипертекста»; первоначально Personal Home Page Tools — «Инструменты для создания персональных веб-страниц»; произносится пи-эйч-пи) — скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов. Язык и его интерпретатор разрабатываются группой энтузиастов в рамках проекта с открытым кодом. Проект распространяется под собственной лицензией, несовместимой с GNU GPL."/>

    <meta name="keywords"
          content="php, hypertext preprocessor, personal home page tools, laravel, symfony, дайджест, yii, web-разработка, ссылки, php-дайджест, новости, подборка, framework, javascript, php 7, yii 2, wordpress, composer, cms, magento, phpstorm, mysql"/>

    <link rel="canonical" href="https://habr.com/ru/hub/php/"/>

    <link rel="alternate" hreflang="ru" href="https://habr.com/ru/hub/php/"/>
    <link rel="alternate" hreflang="en" href="https://habr.com/en/hub/php/"/>
    <meta property="fb:app_id" content="444736788986613"/>
    <meta property="og:type" content="website"/>
    <meta property="fb:pages" content="472597926099084"/>
    <meta property="og:site_name" content="Хабр"/>
    <link rel="image_src" href="https://habr.com/images/habr_ru.png"/>
    <meta property="og:image" content="https://habr.com/images/habr_ru.png"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="628"/>
    <meta property="og:title" content="PHP – Скриптовый язык общего назначения / Хабр"/>
    <meta property="og:description"
          content="PHP (англ. PHP: Hypertext Preprocessor — «PHP: препроцессор гипертекста»; первоначально Personal Home Page Tools — «Инструменты для создания персональных веб-страниц»; произносится пи-эйч-пи) — скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов. Язык и его интерпретатор разрабатываются группой энтузиастов в рамках проекта с открытым кодом. Проект распространяется под собственной лицензией, несовместимой с GNU GPL."/>


    <meta name='yandex-verification' content='71593b225aeafc4e'/>
    <meta name='referrer' content='unsafe-url'/>
    <meta name="pocket-site-verification" content="ed24b2b9721edf0a282c5b4a3232c4"/>
    <meta name="biu" content="https://dr.habracdn.net/habr/6007f915/images/">

    <style type="text/css">
        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 500;
            src: url(https://dr.habracdn.net/habr/6007f915/fonts/FiraSans/firaSans-medium.eot);
            src: local("Fira Sans Medium"), local("FiraSans-Medium"), url(https://dr.habracdn.net/habr/6007f915/fonts/FiraSans/firaSans-medium.eot?#iefix) format("embedded-opentype"), url(https://dr.habracdn.net/habr/6007f915/fonts/FiraSans/firaSans-medium.woff2) format("woff2"), url(https://dr.habracdn.net/habr/6007f915/fonts/FiraSans/firaSans-medium.woff) format("woff"), url(https://dr.habracdn.net/habr/6007f915/fonts/FiraSans/firaSans-medium.ttf) format("truetype")
        }
    </style>

    <link href="https://dr.habracdn.net/habr/6007f915/styles/main.bundle.css" rel="stylesheet" media="all"/>


    <meta name='yandex-verification' content='67d46b975fa41645'/>

    <link rel="apple-touch-icon" sizes="180x180"
          href="https://dr.habracdn.net/habr/6007f915/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="https://dr.habracdn.net/habr/6007f915/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="https://dr.habracdn.net/habr/6007f915/images/favicon-16x16.png">
    <link rel="manifest" href="https://dr.habracdn.net/habr/6007f915/site.webmanifest">
    <link rel="mask-icon" href="https://dr.habracdn.net/habr/6007f915/images/safari-pinned-tab.svg" color="#77a2b6">
    <meta name="application-name" content="Хабр"/>
    <meta name="msapplication-TileColor" content="#77a2b6">
    <meta name="theme-color" content="#77a2b6">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link title="PHP – Скриптовый язык общего назначения" type="application/rss+xml" rel="alternate"
          href="https://habr.com/ru/rss/hub/php/all/?fl=ru"/>

    <script>/* Font Face Observer v2.0.13 - © Bram Stein. License: BSD-3-Clause */
        (function () {
            'use strict';
            var f, g = [];

            function l(a) {
                g.push(a);
                1 == g.length && f()
            }

            function m() {
                for (; g.length;) g[0](), g.shift()
            }

            f = function () {
                setTimeout(m)
            };

            function n(a) {
                this.a = p;
                this.b = void 0;
                this.f = [];
                var b = this;
                try {
                    a(function (a) {
                        q(b, a)
                    }, function (a) {
                        r(b, a)
                    })
                } catch (c) {
                    r(b, c)
                }
            }

            var p = 2;

            function t(a) {
                return new n(function (b, c) {
                    c(a)
                })
            }

            function u(a) {
                return new n(function (b) {
                    b(a)
                })
            }

            function q(a, b) {
                if (a.a == p) {
                    if (b == a) throw new TypeError;
                    var c = !1;
                    try {
                        var d = b && b.then;
                        if (null != b && "object" == typeof b && "function" == typeof d) {
                            d.call(b, function (b) {
                                c || q(a, b);
                                c = !0
                            }, function (b) {
                                c || r(a, b);
                                c = !0
                            });
                            return
                        }
                    } catch (e) {
                        c || r(a, e);
                        return
                    }
                    a.a = 0;
                    a.b = b;
                    v(a)
                }
            }

            function r(a, b) {
                if (a.a == p) {
                    if (b == a) throw new TypeError;
                    a.a = 1;
                    a.b = b;
                    v(a)
                }
            }

            function v(a) {
                l(function () {
                    if (a.a != p) for (; a.f.length;) {
                        var b = a.f.shift(), c = b[0], d = b[1], e = b[2], b = b[3];
                        try {
                            0 == a.a ? "function" == typeof c ? e(c.call(void 0, a.b)) : e(a.b) : 1 == a.a && ("function" == typeof d ? e(d.call(void 0, a.b)) : b(a.b))
                        } catch (h) {
                            b(h)
                        }
                    }
                })
            }

            n.prototype.g = function (a) {
                return this.c(void 0, a)
            };
            n.prototype.c = function (a, b) {
                var c = this;
                return new n(function (d, e) {
                    c.f.push([a, b, d, e]);
                    v(c)
                })
            };

            function w(a) {
                return new n(function (b, c) {
                    function d(c) {
                        return function (d) {
                            h[c] = d;
                            e += 1;
                            e == a.length && b(h)
                        }
                    }

                    var e = 0, h = [];
                    0 == a.length && b(h);
                    for (var k = 0; k < a.length; k += 1) u(a[k]).c(d(k), c)
                })
            }

            function x(a) {
                return new n(function (b, c) {
                    for (var d = 0; d < a.length; d += 1) u(a[d]).c(b, c)
                })
            };window.Promise || (window.Promise = n, window.Promise.resolve = u, window.Promise.reject = t, window.Promise.race = x, window.Promise.all = w, window.Promise.prototype.then = n.prototype.c, window.Promise.prototype["catch"] = n.prototype.g);
        }());

        (function () {
            function l(a, b) {
                document.addEventListener ? a.addEventListener("scroll", b, !1) : a.attachEvent("scroll", b)
            }

            function m(a) {
                document.body ? a() : document.addEventListener ? document.addEventListener("DOMContentLoaded", function c() {
                    document.removeEventListener("DOMContentLoaded", c);
                    a()
                }) : document.attachEvent("onreadystatechange", function k() {
                    if ("interactive" == document.readyState || "complete" == document.readyState) document.detachEvent("onreadystatechange", k), a()
                })
            };

            function r(a) {
                this.a = document.createElement("div");
                this.a.setAttribute("aria-hidden", "true");
                this.a.appendChild(document.createTextNode(a));
                this.b = document.createElement("span");
                this.c = document.createElement("span");
                this.h = document.createElement("span");
                this.f = document.createElement("span");
                this.g = -1;
                this.b.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
                this.c.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
                this.f.style.cssText = "max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
                this.h.style.cssText = "display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;";
                this.b.appendChild(this.h);
                this.c.appendChild(this.f);
                this.a.appendChild(this.b);
                this.a.appendChild(this.c)
            }

            function t(a, b) {
                a.a.style.cssText = "max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;white-space:nowrap;font-synthesis:none;font:" + b + ";"
            }

            function y(a) {
                var b = a.a.offsetWidth, c = b + 100;
                a.f.style.width = c + "px";
                a.c.scrollLeft = c;
                a.b.scrollLeft = a.b.scrollWidth + 100;
                return a.g !== b ? (a.g = b, !0) : !1
            }

            function z(a, b) {
                function c() {
                    var a = k;
                    y(a) && a.a.parentNode && b(a.g)
                }

                var k = a;
                l(a.b, c);
                l(a.c, c);
                y(a)
            };

            function A(a, b) {
                var c = b || {};
                this.family = a;
                this.style = c.style || "normal";
                this.weight = c.weight || "normal";
                this.stretch = c.stretch || "normal"
            }

            var B = null, C = null, E = null, F = null;

            function G() {
                if (null === C) if (J() && /Apple/.test(window.navigator.vendor)) {
                    var a = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))(?:\.([0-9]+))/.exec(window.navigator.userAgent);
                    C = !!a && 603 > parseInt(a[1], 10)
                } else C = !1;
                return C
            }

            function J() {
                null === F && (F = !!document.fonts);
                return F
            }

            function K() {
                if (null === E) {
                    var a = document.createElement("div");
                    try {
                        a.style.font = "condensed 100px sans-serif"
                    } catch (b) {
                    }
                    E = "" !== a.style.font
                }
                return E
            }

            function L(a, b) {
                return [a.style, a.weight, K() ? a.stretch : "", "100px", b].join(" ")
            }

            A.prototype.load = function (a, b) {
                var c = this, k = a || "BESbswy", q = 0, D = b || 3E3, H = (new Date).getTime();
                return new Promise(function (a, b) {
                    if (J() && !G()) {
                        var M = new Promise(function (a, b) {
                            function e() {
                                (new Date).getTime() - H >= D ? b() : document.fonts.load(L(c, '"' + c.family + '"'), k).then(function (c) {
                                    1 <= c.length ? a() : setTimeout(e, 25)
                                }, function () {
                                    b()
                                })
                            }

                            e()
                        }), N = new Promise(function (a, c) {
                            q = setTimeout(c, D)
                        });
                        Promise.race([N, M]).then(function () {
                            clearTimeout(q);
                            a(c)
                        }, function () {
                            b(c)
                        })
                    } else m(function () {
                        function u() {
                            var b;
                            if (b = -1 !=
                                f && -1 != g || -1 != f && -1 != h || -1 != g && -1 != h) (b = f != g && f != h && g != h) || (null === B && (b = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent), B = !!b && (536 > parseInt(b[1], 10) || 536 === parseInt(b[1], 10) && 11 >= parseInt(b[2], 10))), b = B && (f == v && g == v && h == v || f == w && g == w && h == w || f == x && g == x && h == x)), b = !b;
                            b && (d.parentNode && d.parentNode.removeChild(d), clearTimeout(q), a(c))
                        }

                        function I() {
                            if ((new Date).getTime() - H >= D) d.parentNode && d.parentNode.removeChild(d), b(c); else {
                                var a = document.hidden;
                                if (!0 === a || void 0 === a) f = e.a.offsetWidth,
                                    g = n.a.offsetWidth, h = p.a.offsetWidth, u();
                                q = setTimeout(I, 50)
                            }
                        }

                        var e = new r(k), n = new r(k), p = new r(k), f = -1, g = -1, h = -1, v = -1, w = -1, x = -1,
                            d = document.createElement("div");
                        d.dir = "ltr";
                        t(e, L(c, "sans-serif"));
                        t(n, L(c, "serif"));
                        t(p, L(c, "monospace"));
                        d.appendChild(e.a);
                        d.appendChild(n.a);
                        d.appendChild(p.a);
                        document.body.appendChild(d);
                        v = e.a.offsetWidth;
                        w = n.a.offsetWidth;
                        x = p.a.offsetWidth;
                        I();
                        z(e, function (a) {
                            f = a;
                            u()
                        });
                        t(e, L(c, '"' + c.family + '",sans-serif'));
                        z(n, function (a) {
                            g = a;
                            u()
                        });
                        t(n, L(c, '"' + c.family + '",serif'));
                        z(p, function (a) {
                            h = a;
                            u()
                        });
                        t(p, L(c, '"' + c.family + '",monospace'))
                    })
                })
            };
            "object" === typeof module ? module.exports = A : (window.FontFaceObserver = A, window.FontFaceObserver.prototype.load = A.prototype.load);
        }());

        (function (w) {
            if (w.document.documentElement.className.indexOf("fonts-loaded") > -1) {
                return;
            }

            var html = document.documentElement;
            var FS500 = new w.FontFaceObserver("Fira Sans", {weight: 500});

            FS500.load().then(function () {
                html.classList.add('fonts-loaded');
                sessionStorage.fontsLoaded = true;
                console.log('FS500-loaded');
            }).catch(function () {
                sessionStorage.fontsLoaded = false;
                console.log('FS500-unloaded');
            });

            if (sessionStorage.fontsLoaded) {
                html.classList.add('fonts-loaded');
            }
        }(this));
    </script>
    <script src="https://dr.habracdn.net/habr/6007f915/javascripts/libs/jquery-1.8.3.min.js"></script>
    <script src="https://dr.habracdn.net/habr/6007f915/javascripts/libs/chance.min.js"></script>
    <script src="https://dr.habracdn.net/habr/6007f915/javascripts/libs/html2canvas.min.js"></script>
    <script src="https://unpkg.com/pure-md5@latest/lib/index.js"></script>
    <script>
        window.create_callback_for_blocked = function (key) {
            return function () {
                googletag.cmd.push(function () {
                    googletag.display(key);
                });
            }
        }

        window.habr_blockers_checker = new function () {
            var result;
            var callbacksQueue = [];
            var calledOnce = false;

            function fireCallbacks() {
                callbacksQueue.forEach(function (callback) {
                    callback(result);
                });
                callbacksQueue = [];
            }

            this.detect = function (imgUrl, callback) {
                var checksRemain = 2;
                var detected = false;
                var error1 = false;
                var error2 = false;

                if (typeof callback !== 'function') {
                    return;
                }
                ;

                callbacksQueue.push(callback);

                if (typeof result !== 'undefined') {
                    fireCallbacks();
                }
                ;

                if (calledOnce) {
                    return;
                }
                calledOnce = true;

                imgUrl += '?ch=*&rn=*';

                function beforeCheck(timeout) {
                    if (checksRemain === 0 || timeout > 1E3) {
                        result = checksRemain === 0 && detected;
                        fireCallbacks();
                    } else {
                        setTimeout(function () {
                            beforeCheck(timeout * 2)
                        }, timeout * 2);
                    }
                }

                function checkImages() {
                    if (--checksRemain) {
                        return;
                    }
                    ;
                    detected = !error1 && error2;
                }

                var random = Math.random() * 11;

                var img1 = new Image;
                img1.onload = checkImages;
                img1.onerror = function () {
                    error1 = true;
                    checkImages()
                };
                img1.src = imgUrl.replace(/\*/, 1).replace(/\*/, random);

                var img2 = new Image;
                img2.onload = checkImages;
                img2.onerror = function () {
                    error2 = true;
                    checkImages()
                };
                img2.src = imgUrl.replace(/\*/, 2).replace(/\*/, random);

                beforeCheck(250, callback)
            };

            this.detectWrapper = function (callback) {
                return this.detect('/images/px.gif', callback);
            };
        };

        window.display_dfp_slot = function (key) {
            if (window.habr_blockers_checker) {
                window.habr_blockers_checker.detectWrapper(window.create_callback_for_blocked(key));
            } else {
                window.create_callback_for_blocked(key)();
            }
        };
    </script>


    <script src="https://dr.habracdn.net/habr/6007f915/javascripts/libs/raven.min.js"></script>
    <script>Raven.config('https://830576edd4b7478086093f693a5a0df5@s.tmtm.ru/37', {
            maxBreadcrumbs: 50,
            sampleRate: 0.5,
            whitelistUrls: [/https?:\/\/((www)\.)?(m\.)?habr\.com/],
        }).install()</script>

    <script src="https://dr.habracdn.net/habr/6007f915/javascripts/_parts/advertise.js"></script>
    <script src="https://dr.habracdn.net/habr/6007f915/javascripts/_parts/adriver.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            if (!$.cookie('split201901')) {
                $.cookie(
                    'split201901',
                    'B',
                    {
                        expires: 3 * 7,
                        domain: 'habr.com',
                        path: '/',
                        secure: true
                    }
                );
            }
        });
    </script>


</head>

<body class="nl">

<div class="layout">
    <div class="layout__row layout__row_services">
        <div id="TMpanel">
            <div class="container">
                <div class="logo-wrapper">
                    <a href="https://habr.com/ru/" class="logo" title="">
                        <svg width="62" height="24" viewBox="0 0 62 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.875 19L11.075 10.225L16.825 1.4H12.6L8.75 7.4L4.94999 1.4H0.574994L6.32499 10.15L0.524994 19H4.79999L8.64999 12.975L12.525 19H16.875Z"/>
                            <path
                                d="M24.2607 5.775C20.8857 5.775 18.9607 7.625 18.6107 9.85H22.0107C22.2107 9.175 22.8607 8.6 24.1107 8.6C25.3357 8.6 26.2357 9.225 26.2357 10.425V11.025H23.4107C20.1107 11.025 18.1107 12.55 18.1107 15.2C18.1107 17.8 20.1107 19.3 22.6107 19.3C24.2857 19.3 25.6357 18.65 26.4357 17.6V19H29.8107V10.55C29.8107 7.4 27.5857 5.775 24.2607 5.775ZM23.6107 16.475C22.4857 16.475 21.7607 15.925 21.7607 15.025C21.7607 14.1 22.5607 13.55 23.6857 13.55H26.2357V14.125C26.2357 15.625 25.0107 16.475 23.6107 16.475Z"/>
                            <path
                                d="M39.925 6.3C38.125 6.3 36.65 6.95 35.7 8.275C35.95 5.85 36.925 4.65 39.375 4.275L44.3 3.55V0.375L39.025 1.25C33.925 2.1 32.35 5.5 32.35 11.175C32.35 16.275 34.825 19.3 39.2 19.3C43.125 19.3 45.55 16.3 45.55 12.7C45.55 8.825 43.3 6.3 39.925 6.3ZM39.025 16.25C37.125 16.25 36.075 14.725 36.075 12.675C36.075 10.7 37.175 9.275 39.05 9.275C40.875 9.275 41.9 10.75 41.9 12.7C41.9 14.65 40.9 16.25 39.025 16.25Z"/>
                            <path
                                d="M55.2855 5.775C53.3855 5.775 52.1605 6.6 51.5105 7.575V6.075H48.0105V23.775H51.6605V17.75C52.3105 18.65 53.5355 19.3 55.1855 19.3C58.3605 19.3 60.8855 16.8 60.8855 12.55C60.8855 8.225 58.3605 5.775 55.2855 5.775ZM54.4105 16.15C52.7105 16.15 51.5855 14.775 51.5855 12.6V12.5C51.5855 10.325 52.7105 8.925 54.4105 8.925C56.1105 8.925 57.2105 10.35 57.2105 12.55C57.2105 14.75 56.1105 16.15 54.4105 16.15Z"/>
                        </svg>

                    </a>


                    <span class="projects-dropdown" id="dropdown-control">
          <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd"
          d="M5.70711 5.70711C5.31658 6.09763 4.68342 6.09763 4.29289 5.70711L0.292892 1.70711C-0.097632 1.31658 -0.0976319 0.683417 0.292892 0.292893C0.683417 -0.0976308 1.31658 -0.0976308 1.70711 0.292893L5 3.58579L8.29289 0.292894C8.68342 -0.0976301 9.31658 -0.0976301 9.70711 0.292894C10.0976 0.683418 10.0976 1.31658 9.70711 1.70711L5.70711 5.70711Z"/>
</svg>

        </span>
                    <div class="dropdown hidden" id="dropdown">
                        <div class="dropdown-heading">
                            Все сервисы Хабра
                        </div>
                        <a class="service" href="/">
                            <div class="service-title">
                                <svg width="52" height="22" viewBox="0 0 52 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.86 17.0001L8.514 9.23405L13.816 1.51205H11.528L7.26 7.76005L2.97 1.51205H0.659997L5.984 9.19005L0.615997 17.0001H2.926L7.194 10.6861L11.528 17.0001H13.86Z"
                                        fill="#333333"/>
                                    <path
                                        d="M20.181 5.67005C17.651 5.67005 16.111 7.10005 15.759 8.81605H17.585C17.893 8.00205 18.685 7.34205 20.137 7.34205C21.567 7.34205 22.645 8.11205 22.645 9.65205V10.4001H19.697C16.991 10.4001 15.341 11.6981 15.341 13.8321C15.341 15.9441 17.013 17.2421 19.169 17.2421C20.577 17.2421 21.897 16.7141 22.733 15.6801V17.0001H24.515V9.65205C24.515 7.16605 22.777 5.67005 20.181 5.67005ZM19.411 15.5921C18.179 15.5921 17.255 14.9761 17.255 13.8101C17.255 12.6221 18.289 12.0061 19.807 12.0061H22.645V12.8201C22.645 14.5141 21.171 15.5921 19.411 15.5921Z"
                                        fill="#333333"/>
                                    <path
                                        d="M32.9685 5.91205C31.2965 5.91205 29.9545 6.55005 29.1185 7.78205C29.3825 5.27405 30.3945 3.88805 32.9025 3.42605L36.9505 2.67805V0.852051L32.5065 1.75405C28.7665 2.52405 27.2045 4.96605 27.2045 10.5101C27.2045 14.8001 29.4045 17.2421 32.7925 17.2421C36.0265 17.2421 38.0505 14.7121 38.0505 11.5441C38.0505 7.91405 35.8285 5.91205 32.9685 5.91205ZM32.7045 15.5261C30.6145 15.5261 29.2065 13.9641 29.2065 11.4561C29.2065 8.97005 30.7685 7.60605 32.7265 7.60605C34.7725 7.60605 36.1145 9.23405 36.1145 11.5441C36.1145 13.8541 34.7945 15.5261 32.7045 15.5261Z"
                                        fill="#333333"/>
                                    <path
                                        d="M46.1431 5.67005C44.2291 5.67005 43.0631 6.55005 42.5131 7.49605V5.91205H40.6871V21.2021H42.5791V15.6361C43.1071 16.4501 44.2951 17.2421 46.0771 17.2421C48.6291 17.2421 51.1371 15.3721 51.1371 11.4561C51.1371 7.56205 48.6511 5.67005 46.1431 5.67005ZM45.9011 15.5261C43.8551 15.5261 42.5131 13.9641 42.5131 11.5001V11.4121C42.5131 8.94805 43.8551 7.38605 45.9011 7.38605C47.8811 7.38605 49.2011 9.03605 49.2011 11.4561C49.2011 13.8761 47.8811 15.5261 45.9011 15.5261Z"
                                        fill="#333333"/>
                                </svg>
                            </div>
                            <p class="service-description">
                                Сообщество IT-специалистов
                            </p>
                        </a>
                        <a class="service" href="https://qna.habr.com?utm_source=habr&utm_medium=habr_top_panel">
                            <h4 class="service-title">
                                <svg width="46" height="18" viewBox="0 0 46 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.4 8.25602C14.4 3.65802 11.606 0.27002 7.27201 0.27002C2.93801 0.27002 0.144012 3.65802 0.144012 8.25602C0.144012 12.854 2.93801 16.242 7.27201 16.242C8.41601 16.242 9.45001 16.022 10.352 15.604L11.518 17.342H13.696L11.848 14.614C13.476 13.184 14.4 10.918 14.4 8.25602ZM7.27201 14.416C4.10401 14.416 2.14601 11.864 2.14601 8.25602C2.14601 4.64802 4.10401 2.09602 7.27201 2.09602C10.44 2.09602 12.398 4.64802 12.398 8.25602C12.398 10.236 11.826 11.908 10.77 12.986L9.64801 11.314H7.47001L9.29601 14.02C8.70201 14.284 8.02001 14.416 7.27201 14.416Z"
                                        fill="#333333"/>
                                    <path
                                        d="M30.965 16L27.973 12.766L30.921 9.11402H28.699L26.829 11.534L23.331 7.77202C25.377 6.80402 26.455 5.59402 26.455 3.85602C26.455 1.78802 24.871 0.27002 22.583 0.27002C20.207 0.27002 18.535 1.89802 18.535 3.87802C18.535 5.19802 19.305 6.12202 20.163 7.00202L20.427 7.26602C17.985 8.25602 16.753 9.73002 16.753 11.732C16.753 14.196 18.667 16.242 21.835 16.242C23.749 16.242 25.311 15.494 26.565 14.24L26.763 14.042L28.567 16H30.965ZM22.539 1.92002C23.705 1.92002 24.629 2.62402 24.629 3.83402C24.629 5.00002 23.793 5.90202 22.187 6.62802L21.571 6.01202C21.109 5.55002 20.405 4.82402 20.405 3.81202C20.405 2.66802 21.329 1.92002 22.539 1.92002ZM21.945 14.504C19.877 14.504 18.755 13.316 18.755 11.666C18.755 10.258 19.591 9.20202 21.593 8.43202L25.641 12.832L25.509 12.964C24.541 13.976 23.309 14.504 21.945 14.504Z"
                                        fill="#333333"/>
                                    <path
                                        d="M43.5619 16H45.6739L39.8219 0.512019H37.7979L31.9459 16H34.0579L35.5539 11.908H42.0439L43.5619 16ZM38.7879 2.97602L41.3839 10.104H36.2139L38.7879 2.97602Z"
                                        fill="#333333"/>
                                </svg>
                            </h4>
                            <p class="service-description">
                                Ответы на&nbsp;любые вопросы об&nbsp;IT
                            </p>
                        </a>
                        <a class="service" href="https://career.habr.com?utm_source=habr&utm_medium=habr_top_panel">
                            <div class="service-title">
                                <svg width="84" height="21" viewBox="0 0 84 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.442 16L4.96201 7.92596L12.31 0.511963H9.78001L2.894 7.41996V0.511963H0.936005V16H2.894V8.60796L9.84601 16H12.442Z"
                                        fill="#333333"/>
                                    <path
                                        d="M18.3646 4.66996C15.8346 4.66996 14.2946 6.09996 13.9426 7.81596H15.7686C16.0766 7.00196 16.8686 6.34196 18.3206 6.34196C19.7506 6.34196 20.8286 7.11196 20.8286 8.65196V9.39996H17.8806C15.1746 9.39996 13.5246 10.698 13.5246 12.832C13.5246 14.944 15.1966 16.242 17.3526 16.242C18.7606 16.242 20.0806 15.714 20.9166 14.68V16H22.6986V8.65196C22.6986 6.16596 20.9606 4.66996 18.3646 4.66996ZM17.5946 14.592C16.3626 14.592 15.4386 13.976 15.4386 12.81C15.4386 11.622 16.4726 11.006 17.9906 11.006H20.8286V11.82C20.8286 13.514 19.3546 14.592 17.5946 14.592Z"
                                        fill="#333333"/>
                                    <path
                                        d="M31.3501 4.66996C29.4361 4.66996 28.2701 5.54996 27.7201 6.49596V4.91196H25.8941V20.202H27.7861V14.636C28.3141 15.45 29.5021 16.242 31.2841 16.242C33.8361 16.242 36.3441 14.372 36.3441 10.456C36.3441 6.56196 33.8581 4.66996 31.3501 4.66996ZM31.1081 14.526C29.0621 14.526 27.7201 12.964 27.7201 10.5V10.412C27.7201 7.94796 29.0621 6.38596 31.1081 6.38596C33.0881 6.38596 34.4081 8.03596 34.4081 10.456C34.4081 12.876 33.0881 14.526 31.1081 14.526Z"
                                        fill="#333333"/>
                                    <path
                                        d="M43.3561 8.49796H40.8701V4.91196H38.9781V16H43.3341C45.7101 16 47.2501 14.372 47.2501 12.216C47.2501 10.06 45.7101 8.49796 43.3561 8.49796ZM43.1141 14.328H40.8701V10.17H43.1141C44.5661 10.17 45.3581 11.028 45.3581 12.216C45.3581 13.404 44.5661 14.328 43.1141 14.328Z"
                                        fill="#333333"/>
                                    <path
                                        d="M59.1788 11.028V10.06C59.1788 6.75996 57.2868 4.66996 54.3388 4.66996C51.3028 4.66996 49.1248 6.86996 49.1248 10.456C49.1248 14.02 51.2808 16.242 54.4928 16.242C57.3748 16.242 58.7608 14.438 59.0468 13.14H57.1328C56.9348 13.712 56.0548 14.548 54.5148 14.548C52.4688 14.548 51.1048 13.052 51.1048 11.072V11.028H59.1788ZM54.2948 6.36396C56.0768 6.36396 57.1768 7.50796 57.2648 9.42196H51.1268C51.2808 7.59596 52.4468 6.36396 54.2948 6.36396Z"
                                        fill="#333333"/>
                                    <path
                                        d="M67.272 4.66996C65.358 4.66996 64.192 5.54996 63.642 6.49596V4.91196H61.816V20.202H63.708V14.636C64.236 15.45 65.424 16.242 67.206 16.242C69.758 16.242 72.266 14.372 72.266 10.456C72.266 6.56196 69.78 4.66996 67.272 4.66996ZM67.03 14.526C64.984 14.526 63.642 12.964 63.642 10.5V10.412C63.642 7.94796 64.984 6.38596 67.03 6.38596C69.01 6.38596 70.33 8.03596 70.33 10.456C70.33 12.876 69.01 14.526 67.03 14.526Z"
                                        fill="#333333"/>
                                    <path
                                        d="M79.058 4.66996C76.528 4.66996 74.988 6.09996 74.636 7.81596H76.462C76.77 7.00196 77.562 6.34196 79.014 6.34196C80.444 6.34196 81.522 7.11196 81.522 8.65196V9.39996H78.574C75.868 9.39996 74.218 10.698 74.218 12.832C74.218 14.944 75.89 16.242 78.046 16.242C79.454 16.242 80.774 15.714 81.61 14.68V16H83.392V8.65196C83.392 6.16596 81.654 4.66996 79.058 4.66996ZM78.288 14.592C77.056 14.592 76.132 13.976 76.132 12.81C76.132 11.622 77.166 11.006 78.684 11.006H81.522V11.82C81.522 13.514 80.048 14.592 78.288 14.592Z"
                                        fill="#333333"/>
                                </svg>
                            </div>
                            <p class="service-description">
                                Профессиональное развитие в&nbsp;IT
                            </p>
                        </a>
                        <a class="service" href="https://freelance.habr.com?utm_source=habr&utm_medium=habr_top_panel">
                            <div class="service-title">
                                <svg width="91" height="21" viewBox="0 0 91 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.032 1.65602V0.0720215H7.118V1.65602C3.268 1.72202 0.0339966 4.01002 0.0339966 8.16802C0.0339966 12.304 3.268 14.592 7.118 14.658V16.242H9.032V14.658C12.882 14.592 16.116 12.304 16.116 8.16802C16.116 4.01002 12.882 1.72202 9.032 1.65602ZM7.118 12.898C4.082 12.832 2.014 11.05 2.014 8.16802C2.014 5.26402 4.082 3.48202 7.118 3.41602V12.898ZM9.032 12.898V3.41602C12.068 3.48202 14.136 5.26402 14.136 8.16802C14.136 11.05 12.068 12.832 9.032 12.898Z"
                                        fill="#333333"/>
                                    <path
                                        d="M24.2603 4.67002C22.3463 4.67002 21.1803 5.55002 20.6303 6.49602V4.91202H18.8043V20.202H20.6963V14.636C21.2243 15.45 22.4123 16.242 24.1943 16.242C26.7463 16.242 29.2543 14.372 29.2543 10.456C29.2543 6.56202 26.7683 4.67002 24.2603 4.67002ZM24.0183 14.526C21.9723 14.526 20.6303 12.964 20.6303 10.5V10.412C20.6303 7.94802 21.9723 6.38602 24.0183 6.38602C25.9983 6.38602 27.3183 8.03602 27.3183 10.456C27.3183 12.876 25.9983 14.526 24.0183 14.526Z"
                                        fill="#333333"/>
                                    <path
                                        d="M39.4123 4.91202L33.7583 13.074V4.91202H31.8883V16H33.7583L39.4123 7.83802V16H41.2823V4.91202H39.4123Z"
                                        fill="#333333"/>
                                    <path
                                        d="M46.0815 4.91202L45.5095 11.71C45.3555 13.624 44.9595 14.328 43.5735 14.328H43.2655V16.044H43.7935C46.0595 16.044 47.0935 14.856 47.3355 11.842L47.7755 6.60602H51.8455V16H53.7375V4.91202H46.0815Z"
                                        fill="#333333"/>
                                    <path
                                        d="M61.2045 4.67002C58.6745 4.67002 57.1345 6.10002 56.7825 7.81602H58.6085C58.9165 7.00202 59.7085 6.34202 61.1605 6.34202C62.5905 6.34202 63.6685 7.11202 63.6685 8.65202V9.40002H60.7205C58.0145 9.40002 56.3645 10.698 56.3645 12.832C56.3645 14.944 58.0365 16.242 60.1925 16.242C61.6005 16.242 62.9205 15.714 63.7565 14.68V16H65.5385V8.65202C65.5385 6.16602 63.8005 4.67002 61.2045 4.67002ZM60.4345 14.592C59.2025 14.592 58.2785 13.976 58.2785 12.81C58.2785 11.622 59.3125 11.006 60.8305 11.006H63.6685V11.82C63.6685 13.514 62.1945 14.592 60.4345 14.592Z"
                                        fill="#333333"/>
                                    <path
                                        d="M76.104 4.91202V9.37802H70.626V4.91202H68.734V16H70.626V11.094H76.104V16H77.996V4.91202H76.104Z"
                                        fill="#333333"/>
                                    <path
                                        d="M85.9003 14.526C83.8983 14.526 82.5783 12.876 82.5783 10.456C82.5783 8.05802 83.8543 6.38602 85.8783 6.38602C87.6383 6.38602 88.4523 7.53002 88.7383 8.45402H90.6303C90.3443 6.69402 88.8263 4.67002 85.8783 4.67002C82.6883 4.67002 80.6423 7.13402 80.6423 10.456C80.6423 13.844 82.7323 16.242 85.8783 16.242C88.6283 16.242 90.3883 14.394 90.6303 12.414H88.7383C88.4963 13.36 87.7483 14.526 85.9003 14.526Z"
                                        fill="#333333"/>
                                </svg>
                            </div>
                            <p class="service-description">
                                Удаленная работа для IT-специалистов
                            </p>
                        </a>
                    </div>
                </div>
                <div class="bmenu">
                    <a
                        class="bmenu__conversion"
                        href="https://habr.com/sandbox/start/"
                        onclick="if (typeof ga === 'function') { ga('send', 'event', 'habr_top_panel', 'become_an_author'); }"
                    >Как стать автором</a>

                </div>

                <div class="bmenu_inner" style="display:flex!important;visibility:visible!important;">
  <span class="bmenu slink">
    <a onclick="if (typeof ga === 'function') { ga('send', 'event', 'habr_top_panel', 'megapost', 'https://u.habr.com/beardy-post-header'); }"
       href="https://u.habr.com/beardy-post-header" target="_blank" style="color: #F46F6F" rel=" noopener">Я и моя борода: как бриться «по науке»</a>
  </span>
                </div>

            </div>
        </div>

        <script>
            var dropdown = document.querySelector('#dropdown');
            var dropdownControl = document.querySelector('#dropdown-control');
            var logoWrapper = document.querySelector('.logo-wrapper');

            document.addEventListener('click', function (e) {
                if (dropdown) {
                    var isClickInside = logoWrapper.contains(e.target);
                    var dropdownClosed = dropdown.classList.contains('hidden');
                    if (!isClickInside && !dropdownClosed) {
                        dropdown.classList.add('hidden');
                        dropdownControl.classList.remove('reverted');
                    }
                }
            });
            if (dropdownControl) {
                dropdownControl.onclick = function () {
                    dropdown.classList.toggle('hidden');
                    dropdownControl.classList.toggle('reverted');
                }
            }
        </script>

    </div>

    <div class="layout__row layout__row_navbar">
        <div class="layout__cell">
            <div class="main-navbar">
                <div class="main-navbar__section main-navbar__section_left">
                    <ul class="nav-links" id="navbar-links">
                        <li class="nav-links__item">
                            <a href="https://habr.com/ru/feed/" class="nav-links__item-link ">Моя лента</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="https://habr.com/ru/top/" class="nav-links__item-link ">Все потоки</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="https://habr.com/ru/flows/develop/" class="nav-links__item-link ">Разработка</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="https://habr.com/ru/flows/admin/"
                               class="nav-links__item-link ">Администрирование</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="https://habr.com/ru/flows/design/" class="nav-links__item-link ">Дизайн</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="https://habr.com/ru/flows/management/" class="nav-links__item-link ">Менеджмент</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="https://habr.com/ru/flows/marketing/" class="nav-links__item-link ">Маркетинг</a>
                        </li>
                        <li class="nav-links__item">
                            <a href="https://habr.com/ru/flows/popsci/" class="nav-links__item-link ">Научпоп</a>
                        </li>
                    </ul>

                    <form action="https://habr.com/ru/search/#h" method="get" class="search-form" id="search-form">
                        <button type="button" class="btn btn_navbar_search icon-svg_search" id="search-form-btn"
                                title="Поиск по сайту">
                            <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M17 11C17 14.3137 14.3137 17 11 17C7.68629 17 5 14.3137 5 11C5 7.68629 7.68629 5 11 5C14.3137 5 17 7.68629 17 11ZM15.5838 17.5574C14.2857 18.4665 12.7051 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11C19 12.9998 18.2662 14.8282 17.0533 16.2307C17.0767 16.2502 17.0994 16.2709 17.1214 16.2929L20.4143 19.5858C20.8048 19.9763 20.8048 20.6095 20.4143 21C20.0238 21.3905 19.3906 21.3905 19.0001 21L15.7072 17.7071C15.6605 17.6604 15.6194 17.6102 15.5838 17.5574Z"/>
                            </svg>

                        </button>
                        <label class="search-form__field-wrapper">
                            <input type="text" name="q" class="search-form__field" id="search-form-field"
                                   placeholder="Поиск" tabindex="-1"/>
                            <button type="button" class="btn btn_search-close" id="search-form-clear" title="Закрыть">
                                <svg class="icon-svg icon-svg_navbar-close-search" width="31" height="32"
                                     viewBox="0 0 31 32" aria-hidden="true" version="1.1" role="img">
                                    <path
                                        d="M26.67 0L15.217 11.448 3.77 0 0 3.77l11.447 11.45L0 26.666l3.77 3.77L15.218 18.99l11.45 11.448 3.772-3.77-11.448-11.45L30.44 3.772z"/>
                                </svg>

                            </button>
                        </label>
                    </form>

                </div>

                <div class="main-navbar__section main-navbar__section_right">

                    <a href="https://habr.com/ru/tracker/" class="btn btn_medium btn_navbar_tracker" title="Трекер">
                        <svg class="icon-svg icon-svg_navbar-tracker" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13.5 3.5C13.5 3.72586 13.4501 3.94005 13.3607 4.13216C16.5754 4.76546 19 7.59958 19 11V16H19.9412C20.5259 16 21 16.4477 21 17C21 17.5523 20.5259 18 19.9412 18H19H17H15.5C15.5 19.933 13.933 21.5 12 21.5C10.067 21.5 8.5 19.933 8.5 18H7H5H4.05882C3.47405 18 3 17.5523 3 17C3 16.4477 3.47405 16 4.05882 16H5V11C5 7.59958 7.42461 4.76546 10.6393 4.13216C10.5499 3.94005 10.5 3.72586 10.5 3.5C10.5 2.67157 11.1716 2 12 2C12.8284 2 13.5 2.67157 13.5 3.5ZM9.12734 16H14.8727H17V11C17 8.23858 14.7614 6 12 6C9.23858 6 7 8.23858 7 11V16H9.12734ZM10.5 18C10.5 18.8284 11.1716 19.5 12 19.5C12.8284 19.5 13.5 18.8284 13.5 18H10.5Z"/>
                        </svg>

                    </a>


                    <a title="Написать" href="https://habr.com/ru/sandbox/start/"
                       class="btn btn_medium btn_navbar_write-topic">
                        <svg class="icon-svg icon-svg_navbar-pencil" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M14.9195 2.4669C15.3101 2.85742 15.3101 3.49059 14.9195 3.88111L8.54928 10.2514C8.35407 10.4498 8.30625 10.6535 8.34031 10.8822C8.38002 11.1488 8.54258 11.4696 8.82068 11.7477C9.09878 12.0258 9.41953 12.1883 9.68615 12.228C9.91729 12.2625 10.1229 12.2133 10.3233 12.0128L14.9195 7.41665C15.1125 7.22366 15.3647 7.12604 15.6177 7.1238C15.8766 7.12146 16.1363 7.21908 16.3338 7.41665C16.7244 7.80718 16.7244 8.44034 16.3338 8.83086L11.7376 13.4271C11.5372 13.6275 11.488 13.8331 11.5224 14.0642C11.5622 14.3308 11.7247 14.6516 12.0028 14.9297C12.2809 15.2078 12.6017 15.3703 12.8683 15.41C13.0961 15.444 13.299 15.3967 13.4967 15.2034L19.8693 8.83086C20.2598 8.44033 20.893 8.44033 21.2835 8.83086C21.674 9.22138 21.674 9.85455 21.2835 10.2451L14.928 16.6006L14.9196 16.609L14.9049 16.6237L13.5053 18.0232C13.39 18.1386 13.2482 18.224 13.0923 18.2719L3.89991 21.1003C3.54588 21.2093 3.16064 21.1136 2.89872 20.8517C2.6368 20.5898 2.54111 20.2045 2.65005 19.8505L5.47847 10.6581C5.52644 10.5022 5.61181 10.3604 5.72715 10.2451L7.13073 8.84148C7.13424 8.83794 7.13777 8.8344 7.1413 8.83087C7.14333 8.82884 7.14537 8.82682 7.14741 8.82481L13.5053 2.4669C13.8958 2.07637 14.529 2.07637 14.9195 2.4669ZM6.96289 12.6345L5.1171 18.6333L11.116 16.7875C10.9252 16.6534 10.7484 16.5037 10.5886 16.3439C10.0712 15.8265 9.65924 15.1308 9.54427 14.3588C9.53755 14.3138 9.53189 14.2685 9.5273 14.2232C9.48191 14.2186 9.43665 14.2129 9.39152 14.2062C8.61958 14.0913 7.92386 13.6793 7.40647 13.1619C7.24667 13.0021 7.09693 12.8253 6.96289 12.6345Z"/>
                        </svg>

                    </a>

                    <div class="dropdown dropdown_user">
                        <button type="button" class="btn btn_medium btn_navbar_user-dropdown" data-toggle="dropdown"
                                aria-haspopup="true" role="button" aria-expanded="false" tabindex="0"
                                title="">
            <span class="default-image default-image_navbar default-image_pink">
                <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" version="1.1"
                     role="img"><path
                        d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z"/></svg>
              </span>
                        </button>
                        <div class="dropdown-container dropdown-container_white" aria-hidden="true" role="menu">
                            <a href="https://habr.com/ru/users//" class="dropdown__user-info user-info">
                                <span class="user-info__nickname"></span><br/>
                                <span class="user-info__special">Профиль</span>
                            </a><br/>
                            <ul class="n-dropdown-menu n-dropdown-menu_profile">
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/ru/users//posts/"
                                       class="n-dropdown-menu__item-link">Публикации</a>
                                </li>
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/ru/conversations/" class="n-dropdown-menu__item-link">Диалоги </a>
                                </li>
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/ru/users//favorites/"
                                       class="n-dropdown-menu__item-link">Закладки</a>
                                </li>
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/ru/beta/" class="n-dropdown-menu__item-link">Бета-тестирование</a>
                                </li>

                                <li class="n-dropdown-menu__item n-dropdown-menu__item_border">
                                    <a href="#"
                                       class="n-dropdown-menu__item-link n-dropdown-menu__item-link_user-menu js-show_lang_settings">
                                        <svg class="icon-svg icon-svg_user-dropdown" width="16" height="16">
                                            <use
                                                xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#globus-v2"/>
                                        </svg>
                                        Настройка языка
                                    </a>
                                </li>

                                <li class="n-dropdown-menu__item n-dropdown-menu__item_border">
                                    <a href="https://habr.com/ru/auth/settings/profile/"
                                       class="n-dropdown-menu__item-link n-dropdown-menu__item-link_user-menu">
                                        <svg class="icon-svg icon-svg_user-dropdown" width="16" height="16">
                                            <use
                                                xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#settings"/>
                                        </svg>
                                        Настройки
                                    </a>
                                </li>
                                <li class="n-dropdown-menu__item">
                                    <a href="https://habr.com/ru/logout//2249857565/"
                                       class="n-dropdown-menu__item-link n-dropdown-menu__item-link_user-menu">
                                        <svg class="icon-svg icon-svg_user-dropdown" width="16" height="16">
                                            <use
                                                xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#logout"/>
                                        </svg>
                                        Выйти
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="layout__row layout__row_body">
        <div class="layout__cell layout__cell_body">
            @yield('content')
        </div>
    </div>

    <div class="layout__row layout__row_promo-blocks">
        <div class="layout__cell">
            <div class="column-wrapper column-wrapper_bottom column-wrapper_bordered">
                <div class="content_left">


                    <div class="default-block default-block_content">
                        <div class="default-block__header default-block__header_large">
                            <h2 class="default-block__header-title default-block__header-title_large">Самое
                                читаемое</h2>
                        </div>
                        <div class="default-block__content default-block__content_most-read" id="broadcast_tabs_posts">
                            <ul class="toggle-menu toggle-menu__most-read">
                                <li class="toggle-menu__item">
                                    <a href="#broadcast_posts_today" class="toggle-menu__item-link active"
                                       rel="nofollow">Сутки</a>
                                </li>
                                <li class="toggle-menu__item">
                                    <a href="#broadcast_posts_week" class="toggle-menu__item-link"
                                       rel="nofollow">Неделя</a>
                                </li>
                                <li class="toggle-menu__item">
                                    <a href="#broadcast_posts_month" class="toggle-menu__item-link"
                                       rel="nofollow">Месяц</a>
                                </li>
                            </ul>

                            <div class="tabs__content tabs__content_reading" id="broadcast_posts_today">
                                <ul class="content-list content-list_most-read">
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/538108/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">У
                                            Google появился новый креативный способ убивать SaaS-стартапы</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;183</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">45,8k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">114</span>
                    </span>
                                            <a href="https://habr.com/ru/post/538108/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">129</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/news/t/538042/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Налоговая
                                            выдаст ЭП бесплатно для ИП и юрлиц</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;27</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">42,7k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">14</span>
                    </span>
                                            <a href="https://habr.com/ru/news/t/538042/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">94</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/537612/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Как
                                            одним движением сжечь 10000$ и получить удар током</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;99</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">28,8k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">112</span>
                    </span>
                                            <a href="https://habr.com/ru/post/537612/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">142</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/538190/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Тариф
                                            «100к+», или как вельми зело огорчить спамера</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;167</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">21,2k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">255</span>
                    </span>
                                            <a href="https://habr.com/ru/post/538190/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">133</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://u.habr.com/happy-farmer-reading"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'https://u.habr.com/happy-farmer-reading'); }">Счастливый
                                            фермер: как сделать маркетплейс натуральных продуктов за полгода</a>
                                        <div class="post-info__meta-label">
                                            Мегапост
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs__content tabs__content_reading" id="broadcast_posts_week">
                                <ul class="content-list content-list_most-read">
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/536750/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Самый
                                            беззащитный — уже не Сапсан. Всё оказалось куда хуже…</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;1387</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">404k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">615</span>
                    </span>
                                            <a href="https://habr.com/ru/post/536750/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">966</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/537606/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Как
                                            я укололся китайской вакциной</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;128</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">54,7k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">69</span>
                    </span>
                                            <a href="https://habr.com/ru/post/537606/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">468</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/englishdom/blog/537470/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Все
                                            имена персонажей из «Властелина колец» говорят нам что-то. А что именно?</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;61</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">51,4k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">72</span>
                    </span>
                                            <a href="https://habr.com/ru/company/englishdom/blog/537470/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">85</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/537848/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Железячники
                                            умирают. Опыт работы в сфере ремонта цифровой техники</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;150</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">49,6k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">104</span>
                    </span>
                                            <a href="https://habr.com/ru/post/537848/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">365</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://u.habr.com/tds2"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'https://u.habr.com/tds2'); }">Как
                                            мы научились латать бреши в ИБ</a>
                                        <div class="post-info__meta-label">
                                            Мегапост
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs__content tabs__content_reading" id="broadcast_posts_month">
                                <ul class="content-list content-list_most-read">
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/536750/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Самый
                                            беззащитный — уже не Сапсан. Всё оказалось куда хуже…</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;1387</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">404k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">615</span>
                    </span>
                                            <a href="https://habr.com/ru/post/536750/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">966</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/yandex/blog/534586/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Яндекс
                                            отключил расширения с аудиторией в 8 млн пользователей. Объясняем, почему мы
                                            пошли на такой шаг</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;348</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">154k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">210</span>
                    </span>
                                            <a href="https://habr.com/ru/company/yandex/blog/534586/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">503</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/534242/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Смерть
                                            MAPS.ME?</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;359</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">119k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">133</span>
                    </span>
                                            <a href="https://habr.com/ru/post/534242/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">399</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/534590/"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'post'); }">Как
                                            и почему я перестал покупать новые ноутбуки</a>
                                        <div class="post-info__meta">
                    <span class="post-info__meta-item" title="Рейтинг">
                      <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#arrow-bold"/></svg><span
                            class="post-info__meta-counter">&plus;49</span>
                    </span>
                                            <span class="post-info__meta-item" title="Количество просмотров">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#eye"/></svg><span
                                                    class="post-info__meta-counter">96,3k</span>
                    </span>
                                            <span class="post-info__meta-item" title="Закладки">
                      <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                              xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#book"/></svg><span
                                                    class="post-info__meta-counter">122</span>
                    </span>
                                            <a href="https://habr.com/ru/post/534590/#comments"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'comment'); }"
                                               class="post-info__meta-item" rel="nofollow" title="Комментарии">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">629</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://u.habr.com/mkbmsb3"
                                           class="post-info__title post-info__title_large"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block',  'most_read,feed' , 'https://u.habr.com/mkbmsb3'); }">Не
                                            просто цифровизация: IT-платформа МКБ для малого и среднего бизнеса</a>
                                        <div class="post-info__meta-label">
                                            Мегапост
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="sidebar">
                    <div class="sidebar_right">
                        <div class="content-list__item content-list__item_post shortcuts_item" id="effect-sidebar"
                             style="display: none;">
                            <div class="default-block">
                                <div class="default-block__header">
                                    <h2 class="default-block__header-title">Минуточку внимания</h2>
                                </div>
                                <div class="default-block__content">
                                    <ul class="megapost-teasers" id="megapost-teasers-sidebar">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="layout__row layout__row_footer-links">
        <div class="layout__cell">
            <div class="footer-grid footer-grid_menu">
                <div class="footer-grid__item footer-block">
                    <h3 class="footer-block__title">
                        Ваш аккаунт
                    </h3>
                    <div class="footer-block__content">
                        <ul class="footer-menu">
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/users//" class="footer-menu__item-link">Профиль</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/tracker/" class="footer-menu__item-link">Трекер</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/auth/settings/"
                                   class="footer-menu__item-link">Настройки</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer-grid__item footer-block">
                    <h3 class="footer-block__title">Разделы</h3>
                    <div class="footer-block__content">
                        <ul class="footer-menu">
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/posts/top/" class="footer-menu__item-link">Публикации</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/news/" class="footer-menu__item-link">Новости</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/hubs/" class="footer-menu__item-link">Хабы</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/companies/" class="footer-menu__item-link">Компании</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/users/" class="footer-menu__item-link">Пользователи</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/sandbox/" class="footer-menu__item-link">Песочница</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer-grid__item footer-block">
                    <h3 class="footer-block__title">Информация</h3>
                    <div class="footer-block__content">
                        <ul class="footer-menu">
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/docs/help/" class="footer-menu__item-link">Устройство
                                    сайта</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/docs/authors/" class="footer-menu__item-link">Для
                                    авторов</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/docs/companies/" class="footer-menu__item-link">Для
                                    компаний</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/docs/docs/" class="footer-menu__item-link">Документы</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://account.habr.com/info/agreement/?hl=ru_RU"
                                   class="footer-menu__item-link">Соглашение</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://account.habr.com/info/confidential/?hl=ru_RU"
                                   class="footer-menu__item-link">Конфиденциальность</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer-grid__item footer-block">
                    <h3 class="footer-block__title">Услуги</h3>
                    <div class="footer-block__content">
                        <ul class="footer-menu">
                            <li class="footer-menu__item">
                                <a href="https://tmtm.ru/services/advertising/" target="_blank"
                                   class="footer-menu__item-link">Реклама</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://tmtm.ru/services/corpblog/" target="_blank"
                                   class="footer-menu__item-link">Тарифы</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://tmtm.ru/services/content/" target="_blank"
                                   class="footer-menu__item-link">Контент</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://tmtm.ru/workshops/" target="_blank" class="footer-menu__item-link">Семинары</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.com/ru/megaprojects/" target="_blank"
                                   class="footer-menu__item-link">Мегапроекты</a>
                            </li>
                            <li class="footer-menu__item">
                                <a href="https://habr.market/" target="_blank" class="footer-menu__item-link">Мерч</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="layout__row layout__row_footer">
        <div class="layout__cell">
            <script>
                $(document).ready(function () {
                    window.voteReasonsList = JSON.parse('{"1":{"id":"1","title":"Низкий технический уровень материала","order":1},"2":{"id":"2","title":"Больше рекламы, чем пользы","order":2},"3":{"id":"3","title":"Не соответствует тематике Хабра","order":3},"4":{"id":"4","title":"В тексте много ошибок и опечаток","order":4},"5":{"id":"5","title":"Пост небрежно оформлен","order":5},"6":{"id":"6","title":"Личная неприязнь к автору или компании","order":6},"7":{"id":"7","title":"В статье нет новой для меня информации","order":7},"8":{"id":"8","title":"Ничего не понял после прочтения","order":8},"22":{"id":"22","title":"Не согласен с изложенным","order":9},"9":{"id":"9","title":"Другое","order":10}}');
                });
            </script>
            <script>

                $(document).on('hljsUpdate', function () {
                    if (typeof hljs === 'undefined') {
                        initHighlightJS();
                    } else {
                        $('pre code').each(function (i, e) {
                            hljs.highlightBlock(e, '    ');
                        });
                    }
                })

                function createScript(url) {
                    var hljsScript = document.createElement("script");
                    hljsScript.src = url;
                    hljsScript.type = 'text/javascript';
                    document.body.appendChild(hljsScript)

                    return hljsScript;
                }

                function initHighlightJS() {
                    if (typeof hljs !== 'undefined') {
                        $('pre code').each(function (i, e) {
                            hljs.highlightBlock(e, '    ');
                        });
                        return;
                    }
                    ;

                    var hljsScript = createScript('https://dr.habracdn.net/habr/6007f915/javascripts/highlight.pack.js');

                    hljsScript.onload = function () {
                        var hljsLangs = createScript('https://dr.habracdn.net/habr/6007f915/javascripts/highlight.langs.js');
                        hljsLangs.onload = function () {
                            hljs.initHighlighting();
                        }
                    }
                }


                var codeElements = document.querySelectorAll('pre code');

                if (codeElements.length) {
                    initHighlightJS();
                }

            </script>

            <script>

                var mathElements = document.getElementsByTagName('math');

                function mathJaxConfig() {
                    MathJax.Hub.Config({
                        showProcessingMessages: false,
                        showMathMenu: true,
                        tex2jax: {
                            inlineMath: [['$inline$', '$inline$']],
                            displayMath: [['$$display$$', '$$display$$']],
                            processEscapes: true
                        },
                        MathMenu: {
                            showRenderer: true,
                            showContext: true
                        }
                    });

                    MathJax.Extension.Img2jax = {
                        PreProcess: function (element) {
                            var hasMath = false;
                            var images = element.querySelectorAll('[data-tex]');
                            for (var i = images.length - 1; i >= 0; i--) {
                                var img = images[i];
                                var tex = img.alt.replace(/(\r\n|\n|\r)/gm, " ");
                                if (tex && tex[0] === '$') {
                                    var script = document.createElement("script");
                                    script.type = "math/tex";
                                    hasMath = true;
                                    if (img.getAttribute('data-tex') == "display") {
                                        script.type += ";mode=display"
                                    }
                                    MathJax.HTML.setScript(script, tex.substring(1, tex.length - 1));
                                    img.parentNode.replaceChild(script, img);
                                }
                            }
                        }
                    };

                    MathJax.Hub.Register.PreProcessor(["PreProcess", MathJax.Extension.Img2jax]);
                }

                function mathjaxInit() {
                    if (typeof MathJax === 'undefined') {
                        var url = 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS_SVG-full&locale=ru';
                        var mathScript = document.createElement("script");
                        mathScript.src = url;
                        mathScript.type = 'text/javascript';
                        document.body.appendChild(mathScript)

                        mathScript.onload = function () {
                            mathJaxConfig();
                        }
                    } else {
                        mathJaxConfig();
                    }
                }

                if (mathElements.length) {
                    mathjaxInit();
                }

            </script>
            <div class="footer-grid footer">
                <div class="footer-grid__item footer-grid__item_copyright">
                    <span class="footer__copyright">&copy; 2006 &ndash; 2021 «<a href="https://company.habr.com/"
                                                                                 class="footer__link">Habr</a>»</span>
                </div>
                <div class="footer-grid__item footer-grid__item_link footer-grid__item_lang">
                    <svg class="icon-svg icon-svg_lang-footer" width="16" height="16">
                        <use xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#globus-v2"/>
                    </svg>
                    <a href="#" class="footer__link js-show_lang_settings">Настройка языка</a>
                </div>
                <div class="footer-grid__item footer-grid__item_link">
                    <a href="https://habr.com/ru/about/" class="footer__link">О сайте</a>
                </div>
                <div class="footer-grid__item footer-grid__item_link">
                    <a href="https://habr.com/ru/feedback/" class="footer__link">Служба поддержки</a>
                </div>
                <div class="footer-grid__item footer-grid__item_link">
                    <a href="https://m.habr.com/ru?mobile=yes" class="footer__link">Мобильная версия</a>
                </div>

                <div class="footer-grid__item footer-grid__item_social">
                    <ul class="social-icons">
                        <li class="social-icons__item">
                            <a href="https://twitter.com/habr_com"
                               class="social-icons__item-link social-icons__item-link_normal social-icons__item-link_twitter"
                               target="_blank"
                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'footer', 'Social_icons', 'twitter'); }"
                            >
                                <svg class="icon-svg" aria-hidden="true" aria-labelledby="title" version="1.1"
                                     role="img" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M17.414 8.642c-.398.177-.826.296-1.276.35.459-.275.811-.71.977-1.229-.43.254-.905.439-1.41.539-.405-.432-.982-.702-1.621-.702-1.227 0-2.222.994-2.222 2.222 0 .174.019.344.058.506-1.846-.093-3.484-.978-4.579-2.322-.191.328-.301.71-.301 1.117 0 .77.392 1.45.988 1.849-.363-.011-.706-.111-1.006-.278v.028c0 1.077.766 1.974 1.782 2.178-.187.051-.383.078-.586.078-.143 0-.282-.014-.418-.04.282.882 1.103 1.525 2.075 1.542-.76.596-1.718.951-2.759.951-.179 0-.356-.01-.53-.031.983.63 2.15.998 3.406.998 4.086 0 6.321-3.386 6.321-6.321l-.006-.287c.433-.314.81-.705 1.107-1.15z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social-icons__item">
                            <a href="https://www.facebook.com/habrahabr.ru"
                               class="social-icons__item-link social-icons__item-link_normal social-icons__item-link_facebook"
                               target="_blank"
                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'footer', 'Social_icons', 'facebook'); }"
                            >
                                <svg class="icon-svg" aria-hidden="true" aria-labelledby="title" version="1.1"
                                     role="img" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M14.889 8.608h-1.65c-.195 0-.413.257-.413.6v1.192h2.063v1.698h-2.063v5.102h-1.948v-5.102h-1.766v-1.698h1.766v-1c0-1.434.995-2.6 2.361-2.6h1.65v1.808z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social-icons__item">
                            <a href="https://vk.com/habr"
                               class="social-icons__item-link social-icons__item-link_normal social-icons__item-link_vkontakte"
                               target="_blank"
                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'footer', 'Social_icons', 'vkontakte'); }"
                            >
                                <svg class="icon-svg" aria-hidden="true" aria-labelledby="title" version="1.1"
                                     role="img" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M16.066 11.93s1.62-2.286 1.782-3.037c.054-.268-.064-.418-.343-.418h-1.406c-.322 0-.44.139-.537.343 0 0-.76 1.619-1.685 2.64-.297.33-.448.429-.612.429-.132 0-.193-.11-.193-.408v-2.607c0-.365-.043-.472-.343-.472h-2.254c-.172 0-.279.1-.279.236 0 .343.526.421.526 1.352v1.921c0 .386-.022.537-.204.537-.483 0-1.631-1.663-2.274-3.552-.129-.386-.268-.494-.633-.494h-1.406c-.204 0-.354.139-.354.343 0 .375.44 2.114 2.167 4.442 1.159 1.566 2.683 2.414 4.056 2.414.838 0 1.041-.139 1.041-.494v-1.202c0-.301.118-.429.29-.429.193 0 .534.062 1.33.848.945.901 1.01 1.276 1.525 1.276h1.578c.161 0 .311-.075.311-.343 0-.354-.462-.987-1.17-1.738-.29-.386-.762-.805-.912-.998-.215-.226-.151-.354-.001-.59z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social-icons__item">
                            <a href="https://telegram.me/habr_com"
                               class="social-icons__item-link social-icons__item-link_normal social-icons__item-link_telegram"
                               target="_blank"
                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'footer', 'Social_icons', 'telegram'); }"
                            >
                                <svg class="icon-svg" aria-hidden="true" aria-labelledby="title" version="1.1"
                                     role="img" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M17.17 7.621l-10.498 3.699c-.169.059-.206.205-.006.286l2.257.904 1.338.536 6.531-4.796s.189.057.125.126l-4.68 5.062-.27.299.356.192 2.962 1.594c.173.093.397.016.447-.199.058-.254 1.691-7.29 1.728-7.447.047-.204-.087-.328-.291-.256zm-6.922 8.637c0 .147.082.188.197.084l1.694-1.522-1.891-.978v2.416z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="social-icons__item">
                            <a href="https://www.youtube.com/channel/UCd_sTwKqVrweTt4oAKY5y4w"
                               class="social-icons__item-link social-icons__item-link_normal social-icons__item-link_youtube"
                               target="_blank"
                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'footer', 'Social_icons', 'youtube'); }"
                            >
                                <svg class="icon-svg" aria-hidden="true" aria-labelledby="title" version="1.1"
                                     role="img" width="32" height="32" viewBox="0 0 32 32">
                                    <path
                                        d="M3.2 0h25.6c1.767 0 3.2 1.433 3.2 3.2v25.6c0 1.767-1.433 3.2-3.2 3.2h-25.6c-1.767 0-3.2-1.433-3.2-3.2v-25.6c0-1.767 1.433-3.2 3.2-3.2zm18.133 16l-10.667-5.333v10.667l10.667-5.333z"/>
                                </svg>

                            </a>
                        </li>
                        <li class="social-icons__item">
                            <a href="https://zen.yandex.ru/habr"
                               class="social-icons__item-link social-icons__item-link_normal social-icons__item-link_zen"
                               target="_blank"
                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'footer', 'Social_icons', 'zen'); }"
                            >
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="30" height="30" rx="3" fill="#2C3036"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M26.25 15.1241V14.9998V14.8759C21.2684 14.7252 18.9904 14.6009 17.1735 12.8263C15.3994 11.0098 15.2747 8.73179 15.1243 3.75H15H14.8757C14.7253 8.73179 14.6006 11.0098 12.8264 12.8263C11.0095 14.6009 8.73151 14.7252 3.75 14.8759V14.9998V15.1241C8.73151 15.2748 11.0095 15.3991 12.8264 17.1733C14.6006 18.9903 14.7253 21.2682 14.8757 26.25H15H15.1243C15.2747 21.2682 15.3994 18.9903 17.1735 17.1733C18.9904 15.3991 21.2684 15.2748 26.25 15.1241Z"
                                          fill="white"/>
                                </svg>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <a href="#" class="layout__elevator hidden" id="scroll_to_top" title="Наверх"
       onclick="if (typeof ga === 'function') { ga('send', 'event', 'navigation_button', 'down'); }">
        <svg class="icon-svg icon-svg_scroll-up" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true"
             version="1.1" role="img">
            <path
                d="M16 0C7.164 0 0 7.164 0 16s7.164 16 16 16 16-7.164 16-16S24.836 0 16 0zm8.412 19.523c-.517.512-1.355.512-1.872 0L16 13.516l-6.54 6.01c-.518.51-1.356.51-1.873 0-.516-.513-.517-1.343 0-1.855l7.476-7.326c.517-.512 1.356-.512 1.873 0l7.476 7.327c.516.513.516 1.342 0 1.854z"/>
        </svg>
    </a>
</div>

<div class="overlay hidden" id="js-lang_settings">
    <div class="popup">
        <div class="popup__head popup__head_lang-settings">
            <span class="popup__head-title js-popup_title" data-section="1">Настройка языка</span>
            <button type="button" class="btn btn_small btn_popup-close js-hide_lang_settings">
                <svg class="icon-svg" width="12" height="12">
                    <use xlink:href="https://habr.com/6007f915/images/common-svg-sprite.svg#close"/>
                </svg>
            </button>
        </div>
        <div class="popup__body">
            <form action="/json/settings/i18n/" method="post" class="form form_lang-settings" id="lang-settings-form">
                <fieldset class="form__fieldset form__fieldset_thin" data-section="2">
                    <legend class="form__legend form__legend_lang-settings js-popup_hl_legend">Интерфейс</legend>
                    <div class="form-field form-field_lang-settings">
              <span class="radio radio_custom ">
                <input type="radio" name="hl" id="hl_langs_ru" class="radio__input js-hl_langs" value="ru" checked>
                <label for="hl_langs_ru" class="radio__label radio__label_another">Русский</label>
              </span>
                    </div>
                    <div class="form-field form-field_lang-settings">
              <span class="radio radio_custom ">
                <input type="radio" name="hl" id="hl_langs_en" class="radio__input js-hl_langs" value="en">
                <label for="hl_langs_en" class="radio__label radio__label_another">English</label>
              </span>
                    </div>
                </fieldset>

                <fieldset class="form__fieldset form__fieldset_thin">
                    <legend class="form__legend form__legend_lang-settings js-popup_fl_legend" data-section="3">Язык
                        публикаций
                    </legend>
                    <div class="form-field form-field_lang-settings">
              <span class="checkbox checkbox_custom">
                <input type="checkbox" name="fl[]" id="fl_langs_ru" class="checkbox__input js-fl_langs" value="ru"
                       checked>
                <label for="fl_langs_ru"
                       class="checkbox__label checkbox__label_another js-popup_feed_ru">Русский</label>
              </span>
                    </div>
                    <div class="form-field form-field_lang-settings">
              <span class="checkbox checkbox_custom">
                <input type="checkbox" name="fl[]" id="fl_langs_en" class="checkbox__input js-fl_langs" value="en">
                <label for="fl_langs_en"
                       class="checkbox__label checkbox__label_another js-popup_feed_en">Английский</label>
              </span>
                    </div>
                </fieldset>

                <div class="form__footer form__footer_lang-settings">
                    <button type="submit" class="btn btn_blue btn_huge btn_full-width js-popup_save_btn">Сохранить
                        настройки
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function composeTeaser(t, blockType) {
        const listener = " onclick=\"if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'promo,"
            + blockType + "', '" + t.linkUrl + "'); }\"";
        let teaser = '<li class="megapost-teasers__item teaser">'
            + '<a href="' + t.linkUrl + '" target="_blank" class="teaser__image" rel="nofollow';

        if (t.external) teaser += ' sponsored';

        teaser += '"';

        teaser += listener;

        teaser += '>'
            + '<img src="' + t.imageUrl + '" class="teaser__image-pic"/>'
            + '<div class="megapost-teasers__label">'
            + t.label;

        if (t.external) teaser += `<svg width='11' height='11' viewBox='0 0 11 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
<path fill-rule='evenodd' clip-rule='evenodd' d='M7.5 0C7.22386 0 7 0.223858 7 0.5C7 0.776142 7.22386 1 7.5 1H9.29289L5.14645 5.14645C4.95118 5.34171 4.95118 5.65829 5.14645 5.85355C5.34171 6.04882 5.65829 6.04882 5.85355 5.85355L10 1.70711V3.5C10 3.77614 10.2239 4 10.5 4C10.7761 4 11 3.77614 11 3.5V0.5C11 0.223858 10.7761 0 10.5 0H7.5ZM0.5 1C0.223858 1 0 1.22386 0 1.5V10.5C0 10.7761 0.223858 11 0.5 11H9.5C9.77614 11 10 10.7761 10 10.5V6C10 5.72386 9.77614 5.5 9.5 5.5C9.22386 5.5 9 5.72386 9 6V10H1V2H5C5.27614 2 5.5 1.77614 5.5 1.5C5.5 1.22386 5.27614 1 5 1H0.5Z' fill='#6667A2'/>
</svg>
`;

        teaser += '</div></a>'
            + '<a href="' + t.linkUrl + '" target="_blank" class="teaser__body" rel="nofollow';

        if (t.external) teaser += ' sponsored';

        teaser += '"';

        teaser += listener;

        teaser += '>'
            + '<h3 class="teaser__body-title">'
            + t.title
            + '</h3></a></li>';

        return teaser;
    }
</script>
<script type="text/javascript">
    // global vars
    var g_base_url = 'habr.com/ru';
    var g_base_fullurl = 'https://habr.com/ru/';
    var g_tmid_fullurl = 'https://account.habr.com/';
    var g_is_guest = true;
    var g_show_xpanel = true;
    var g_is_enableShortcuts = '1';
    var g_is_ugc_post = '';
    var g_is_company_post = '';
    var g_current_hl = 'ru';
    var g_current_fl = 'ru';

    var g_user_login = '';
    var g_user_id = 2408825;
    var g_user_avatar = 'https://habr.com/images/avatars/stub-user-middle.gif';
</script>

<script src="https://dr.habracdn.net/habr/6007f915/javascripts/vendors.bundle.js"></script>
<script src="https://dr.habracdn.net/habr/6007f915/javascripts/main.bundle.js"></script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(24049213, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/24049213" style="position:absolute; left:-9999px;" alt=""/>
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">
    function stripUrl(currentUrl, queryParam) {
        return currentUrl.replace(/\?([^#]*)/, function (_, search) {
            var result = search.split('&').map(function (param) {
                var regexp = new RegExp(`^${queryParam}`);
                if (regexp.test(param)) {
                    return '';
                }
                return param;
            }).filter(Boolean).join('&');
            return result ? '?' + result : '';
        });
    }

    (function () {
        if (location.search.indexOf('cv') != -1 && history.replaceState) {
            var currentUrl = location.toString();
            var strippedUrl = stripUrl(currentUrl, 'cv');
            history.replaceState({}, '', strippedUrl);
        }
    })();

    function callGA(usesABP) {
        if (typeof window.adb1 === 'undefined') {
            window.adb1 = 'yes';
        }
        if (usesABP) {
            window.adb1 = 'aa';
        }

        var user_type = 'readonly';

        var page_type = "other";

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-726094-1', 'auto', {'uid': 'a8ee7017a394af584ef2b12cfaf70d3f'});
        ga('create', 'UA-726094-24', 'auto', {
            'uid': 'a8ee7017a394af584ef2b12cfaf70d3f',
            'name': 'HGM',
            'allowLinker': true
        });

        ga('HGM.require', 'linker');
        ga('HGM.linker:autoLink', ['toster.ru', 'habr.com', 'account.habr.com', 'm.habr.com']);

        ga('require', 'displayfeatures');
        ga('set', 'dimension1', user_type); // user type - guest/readonly/habrauser
        ga('set', 'dimension2', page_type);
        ga('set', 'dimension3', 'active');
        ga('set', 'dimension4', window.adb1);
        ga('set', 'dimension6', 'ru');
        ga('set', 'dimension7', 'B');


        (function () {
            var removeUtms = function () {
                var location = window.location;
                if (location.search.indexOf('utm_') != -1 && history.replaceState) {
                    var currentUrl = location.toString();
                    var strippedUrl = stripUrl(currentUrl, 'utm_');
                    history.replaceState({}, '', strippedUrl);
                }
            };
            ga('require', 'GTM-559GVC8');
            ga('send', 'pageview', {'hitCallback': removeUtms});
        })();

        ga('HGM.set', 'dimension1', user_type);
        ga('HGM.set', 'dimension2', "habrahabr");
        ga('HGM.set', 'dimension4', window.adb1);

        ga('HGM.send', 'pageview');
    }


    if (window.habr_blockers_checker) {
        window.habr_blockers_checker.detectWrapper(callGA);
    } else {
        callGA(false)
    }

</script>

<!-- Facebook Pixel Code -->
<img height="1" width="1" style="display:none"
     src="https://www.facebook.com/tr?id=317458588730613&ev=PageView&noscript=1"/>
<!-- End Facebook Pixel Code -->

<img src="https://vk.com/rtrg?p=VK-RTRG-421343-57vKE" style="position:fixed; left:-999px;" alt=""/>
<script src='../../js/app.js'></script>
</body>
</html>
