<?php include 'config.php'; ?>

<footer id="footer">
  <div class="container footer-bottom clearfix">
    <div class="credits" style="margin-top: 26px;">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
    <span class="social" style="font-size: 48px;">
      <a href="https://twitter.com/UMS16" title="UMS on Twitter"><i class="icofont-twitter"></i></a>
      <a href="https://www.facebook.com/UniversalMediaServer" title="UMS on Facebook"><i class="icofont-facebook"></i></a>
      <a href="https://github.com/UniversalMediaServer/UniversalMediaServer/" title="UMS on GitHub"><i class="icofont-github"></i></a>
    </span>
  </div>
</footer>

<a href="#" class="back-to-top"><i class="icofont-arrow-up"></i></a>

<!-- Vendor JS Files -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>

<!-- Display the relevant download link -->
<script type="text/javascript">
/* UAParser.js v2.0.0-beta.1
   Copyright © 2012-2023 Faisal Salman <f@faisalman.com>
   AGPLv3 License */
   !function(i, c) {
    "use strict";
    function e(i) {
        for (var e = {}, t = 0; t < i.length; t++)
            e[i[t].toUpperCase()] = i[t];
        return e
    }
    function n(i, e) {
        if (!(typeof i === d && 0 < i.length))
            return typeof i === s && -1 !== mi(e).indexOf(mi(i));
        for (var t in i)
            if (mi(i[t]) == mi(e))
                return 1
    }
    var w = ""
      , u = "function"
      , b = "undefined"
      , d = "object"
      , s = "string"
      , p = "major"
      , h = "model"
      , f = "name"
      , m = "type"
      , t = "vendor"
      , g = "version"
      , v = "architecture"
      , o = "console"
      , x = "mobile"
      , r = "tablet"
      , a = "smarttv"
      , l = "wearable"
      , k = "embedded"
      , y = "user-agent"
      , _ = 350
      , T = "brands"
      , S = "formFactor"
      , C = "fullVersionList"
      , q = "platform"
      , A = "platformVersion"
      , O = "bitness"
      , z = "sec-ch-ua"
      , N = z + "-full-version-list"
      , P = z + "-arch"
      , U = z + "-" + O
      , H = z + "-form-factor"
      , I = z + "-" + x
      , R = z + "-" + h
      , E = z + "-" + q
      , M = E + "-version"
      , j = [T, C, x, h, q, A, v, S, O]
      , V = "browser"
      , B = "cpu"
      , F = "device"
      , D = "engine"
      , W = "os"
      , $ = "result"
      , G = "Amazon"
      , L = "Apple"
      , X = "ASUS"
      , Z = "BlackBerry"
      , K = "Google"
      , Q = "Huawei"
      , Y = "LG"
      , J = "Microsoft"
      , ii = "Motorola"
      , ei = "Samsung"
      , ti = "Sony"
      , oi = "Xiaomi"
      , ri = "Zebra"
      , ai = "Mobile "
      , si = " Browser"
      , ni = "Chrome"
      , wi = "Firefox"
      , bi = "Opera"
      , li = "Facebook"
      , ci = "Windows"
      , ui = typeof i !== b && i.navigator ? i.navigator : c
      , di = ui && ui.userAgentData ? ui.userAgentData : c
      , pi = function(i, e) {
        var t, o = {};
        for (t in i)
            o[t] = e[t] && e[t].length % 2 == 0 ? e[t].concat(i[t]) : i[t];
        return o
    }
      , hi = function(i) {
        for (var e in i)
            return /^(browser|cpu|device|engine|os)$/.test(e)
    }
      , fi = function(i) {
        if (!i)
            return c;
        for (var e, t = [], o = xi(/\\?\"/g, i).split(","), r = 0; r < o.length; r++)
            -1 < o[r].indexOf(";") ? (e = yi(o[r]).split(";v="),
            t[r] = {
                brand: e[0],
                version: e[1]
            }) : t[r] = o[r];
        return t
    }
      , mi = function(i) {
        return typeof i === s ? i.toLowerCase() : i
    }
      , gi = function(i) {
        return typeof i === s ? xi(/[^\d\.]/g, i).split(".")[0] : c
    }
      , vi = function(i) {
        for (var e in i) {
            e = i[e];
            typeof e == d && 2 == e.length ? this[e[0]] = e[1] : this[e] = c
        }
        return this
    }
      , xi = function(i, e) {
        return e.replace(i, w)
    }
      , ki = function(i) {
        return typeof i === s ? xi(/\\?\"/g, i) : i
    }
      , yi = function(i, e) {
        if (typeof i === s)
            return i = xi(/^\s\s*/, i),
            typeof e === b ? i : i.substring(0, _)
    }
      , _i = function(i, e) {
        if (i && e)
            for (var t, o, r, a, s, n = 0; n < e.length && !a; ) {
                for (var w = e[n], b = e[n + 1], l = t = 0; l < w.length && !a && w[l]; )
                    if (a = w[l++].exec(i))
                        for (o = 0; o < b.length; o++)
                            s = a[++t],
                            typeof (r = b[o]) === d && 0 < r.length ? 2 === r.length ? typeof r[1] == u ? this[r[0]] = r[1].call(this, s) : this[r[0]] = r[1] : 3 === r.length ? typeof r[1] !== u || r[1].exec && r[1].test ? this[r[0]] = s ? s.replace(r[1], r[2]) : c : this[r[0]] = s ? r[1].call(this, s, r[2]) : c : 4 === r.length && (this[r[0]] = s ? r[3].call(this, s.replace(r[1], r[2])) : c) : this[r] = s || c;
                n += 2
            }
    }
      , Ti = function(i, e) {
        for (var t in e)
            if (typeof e[t] === d && 0 < e[t].length) {
                for (var o = 0; o < e[t].length; o++)
                    if (n(e[t][o], i))
                        return "?" === t ? c : t
            } else if (n(e[t], i))
                return "?" === t ? c : t;
        return e.hasOwnProperty("*") ? e["*"] : i
    }
      , Si = {
        ME: "4.90",
        "NT 3.11": "NT3.51",
        "NT 4.0": "NT4.0",
        2e3: "NT 5.0",
        XP: ["NT 5.1", "NT 5.2"],
        Vista: "NT 6.0",
        7: "NT 6.1",
        8: "NT 6.2",
        8.1: "NT 6.3",
        10: ["NT 6.4", "NT 10.0"],
        RT: "ARM"
    }
      , Ci = {
        embedded: "Automotive",
        mobile: "Mobile",
        tablet: ["Tablet", "EInk"],
        smarttv: "TV",
        wearable: ["VR", "XR", "Watch"],
        "?": ["Desktop", "Unknown"],
        "*": c
    }
      , qi = {
        browser: [[/\b(?:crmo|crios)\/([\w\.]+)/i], [g, [f, ai + "Chrome"]], [/edg(?:e|ios|a)?\/([\w\.]+)/i], [g, [f, "Edge"]], [/(opera mini)\/([-\w\.]+)/i, /(opera [mobiletab]{3,6})\b.+version\/([-\w\.]+)/i, /(opera)(?:.+version\/|[\/ ]+)([\w\.]+)/i], [f, g], [/opios[\/ ]+([\w\.]+)/i], [g, [f, bi + " Mini"]], [/\bopr\/([\w\.]+)/i], [g, [f, bi]], [/(kindle)\/([\w\.]+)/i, /(lunascape|maxthon|netfront|jasmine|blazer)[\/ ]?([\w\.]*)/i, /(avant |iemobile|slim)(?:browser)?[\/ ]?([\w\.]*)/i, /(ba?idubrowser)[\/ ]?([\w\.]+)/i, /(?:ms|\()(ie) ([\w\.]+)/i, /(flock|rockmelt|midori|epiphany|silk|skyfire|ovibrowser|bolt|iron|vivaldi|iridium|phantomjs|bowser|quark|qupzilla|falkon|rekonq|puffin|brave|whale(?!.+naver)|qqbrowserlite|qq|duckduckgo)\/([-\w\.]+)/i, /(heytap|ovi)browser\/([\d\.]+)/i, /(weibo)__([\d\.]+)/i], [f, g], [/(?:\buc? ?browser|(?:juc.+)ucweb)[\/ ]?([\w\.]+)/i], [g, [f, "UCBrowser"]], [/microm.+\bqbcore\/([\w\.]+)/i, /\bqbcore\/([\w\.]+).+microm/i], [g, [f, "WeChat(Win) Desktop"]], [/micromessenger\/([\w\.]+)/i], [g, [f, "WeChat"]], [/konqueror\/([\w\.]+)/i], [g, [f, "Konqueror"]], [/trident.+rv[: ]([\w\.]{1,9})\b.+like gecko/i], [g, [f, "IE"]], [/ya(?:search)?browser\/([\w\.]+)/i], [g, [f, "Yandex"]], [/(avast|avg)\/([\w\.]+)/i], [[f, /(.+)/, "$1 Secure" + si], g], [/\bfocus\/([\w\.]+)/i], [g, [f, wi + " Focus"]], [/\bopt\/([\w\.]+)/i], [g, [f, bi + " Touch"]], [/coc_coc\w+\/([\w\.]+)/i], [g, [f, "Coc Coc"]], [/dolfin\/([\w\.]+)/i], [g, [f, "Dolphin"]], [/coast\/([\w\.]+)/i], [g, [f, bi + " Coast"]], [/miuibrowser\/([\w\.]+)/i], [g, [f, "MIUI" + si]], [/fxios\/([\w\.-]+)/i], [g, [f, ai + wi]], [/\bqihu|(qi?ho?o?|360)browser/i], [[f, "360" + si]], [/(oculus|samsung|sailfish|huawei)browser\/([\w\.]+)/i], [[f, /(.+)/, "$1" + si], g], [/(comodo_dragon)\/([\w\.]+)/i], [[f, /_/g, " "], g], [/(electron)\/([\w\.]+) safari/i, /(tesla)(?: qtcarbrowser|\/(20\d\d\.[-\w\.]+))/i, /m?(qqbrowser|baiduboxapp|2345Explorer)[\/ ]?([\w\.]+)/i], [f, g], [/(metasr)[\/ ]?([\w\.]+)/i, /(lbbrowser)/i, /\[(linkedin)app\]/i], [f], [/((?:fban\/fbios|fb_iab\/fb4a)(?!.+fbav)|;fbav\/([\w\.]+);)/i], [[f, li], g], [/(kakao(?:talk|story))[\/ ]([\w\.]+)/i, /(naver)\(.*?(\d+\.[\w\.]+).*\)/i, /safari (line)\/([\w\.]+)/i, /\b(line)\/([\w\.]+)\/iab/i, /(chromium|instagram|snapchat)[\/ ]([-\w\.]+)/i], [f, g], [/\bgsa\/([\w\.]+) .*safari\//i], [g, [f, "GSA"]], [/musical_ly(?:.+app_?version\/|_)([\w\.]+)/i], [g, [f, "TikTok"]], [/headlesschrome(?:\/([\w\.]+)| )/i], [g, [f, ni + " Headless"]], [/ wv\).+(chrome)\/([\w\.]+)/i], [[f, ni + " WebView"], g], [/droid.+ version\/([\w\.]+)\b.+(?:mobile safari|safari)/i], [g, [f, "Android" + si]], [/chrome\/([\w\.]+) mobile/i], [g, [f, ai + "Chrome"]], [/(chrome|omniweb|arora|[tizenoka]{5} ?browser)\/v?([\w\.]+)/i], [f, g], [/version\/([\w\.\,]+) .*mobile(?:\/\w+ | ?)safari/i], [g, [f, ai + "Safari"]], [/iphone .*mobile(?:\/\w+ | ?)safari/i], [[f, ai + "Safari"]], [/version\/([\w\.\,]+) .*(safari)/i], [g, f], [/webkit.+?(mobile ?safari|safari)(\/[\w\.]+)/i], [f, [g, "1"]], [/(webkit|khtml)\/([\w\.]+)/i], [f, g], [/(?:mobile|tablet);.*(firefox)\/([\w\.-]+)/i], [[f, ai + wi], g], [/(navigator|netscape\d?)\/([-\w\.]+)/i], [[f, "Netscape"], g], [/mobile vr; rv:([\w\.]+)\).+firefox/i], [g, [f, wi + " Reality"]], [/ekiohf.+(flow)\/([\w\.]+)/i, /(swiftfox)/i, /(icedragon|iceweasel|camino|chimera|fennec|maemo browser|minimo|conkeror|klar)[\/ ]?([\w\.\+]+)/i, /(seamonkey|k-meleon|icecat|iceape|firebird|phoenix|palemoon|basilisk|waterfox)\/([-\w\.]+)$/i, /(firefox)\/([\w\.]+)/i, /(mozilla)\/([\w\.]+) .+rv\:.+gecko\/\d+/i, /(polaris|lynx|dillo|icab|doris|amaya|w3m|netsurf|sleipnir|obigo|mosaic|(?:go|ice|up)[\. ]?browser)[-\/ ]?v?([\w\.]+)/i, /(links) \(([\w\.]+)/i, /panasonic;(viera)/i], [f, g], [/(cobalt)\/([\w\.]+)/i], [f, [g, /[^\d\.]+./, w]]],
        cpu: [[/\b(?:(amd|x|x86[-_]?|wow|win)64)\b/i], [[v, "amd64"]], [/(ia32(?=;))/i, /((?:i[346]|x)86)[;\)]/i], [[v, "ia32"]], [/\b(aarch64|arm(v?8e?l?|_?64))\b/i], [[v, "arm64"]], [/\b(arm(?:v[67])?ht?n?[fl]p?)\b/i], [[v, "armhf"]], [/windows (ce|mobile); ppc;/i], [[v, "arm"]], [/((?:ppc|powerpc)(?:64)?)(?: mac|;|\))/i], [[v, /ower/, w, mi]], [/(sun4\w)[;\)]/i], [[v, "sparc"]], [/((?:avr32|ia64(?=;))|68k(?=\))|\barm(?=v(?:[1-7]|[5-7]1)l?|;|eabi)|(?=atmel )avr|(?:irix|mips|sparc)(?:64)?\b|pa-risc)/i], [[v, mi]]],
        device: [[/\b(sch-i[89]0\d|shw-m380s|sm-[ptx]\w{2,4}|gt-[pn]\d{2,4}|sgh-t8[56]9|nexus 10)/i], [h, [t, ei], [m, r]], [/\b((?:s[cgp]h|gt|sm)-\w+|sc[g-]?[\d]+a?|galaxy nexus)/i, /samsung[- ]([-\w]+)/i, /sec-(sgh\w+)/i], [h, [t, ei], [m, x]], [/(?:\/|\()(ip(?:hone|od)[\w, ]*)(?:\/|;)/i], [h, [t, L], [m, x]], [/\((ipad);[-\w\),; ]+apple/i, /applecoremedia\/[\w\.]+ \((ipad)/i, /\b(ipad)\d\d?,\d\d?[;\]].+ios/i], [h, [t, L], [m, r]], [/(macintosh);/i], [h, [t, L]], [/\b(sh-?[altvz]?\d\d[a-ekm]?)/i], [h, [t, "Sharp"], [m, x]], [/\b((?:ag[rs][23]?|bah2?|sht?|btv)-a?[lw]\d{2})\b(?!.+d\/s)/i], [h, [t, Q], [m, r]], [/(?:huawei|honor)([-\w ]+)[;\)]/i, /\b(nexus 6p|\w{2,4}e?-[atu]?[ln][\dx][012359c][adn]?)\b(?!.+d\/s)/i], [h, [t, Q], [m, x]], [/\b(poco[\w ]+|m2\d{3}j\d\d[a-z]{2})(?: bui|\))/i, /\b; (\w+) build\/hm\1/i, /\b(hm[-_ ]?note?[_ ]?(?:\d\w)?) bui/i, /\b(redmi[\-_ ]?(?:note|k)?[\w_ ]+)(?: bui|\))/i, /oid[^\)]+; (m?[12][0-389][01]\w{3,6}[c-y])( bui|\))/i, /\b(mi[-_ ]?(?:a\d|one|one[_ ]plus|note lte|max|cc)?[_ ]?(?:\d?\w?)[_ ]?(?:plus|se|lite)?)(?: bui|\))/i], [[h, /_/g, " "], [t, oi], [m, x]], [/oid[^\)]+; (2\d{4}(283|rpbf)[cgl])( bui|\))/i, /\b(mi[-_ ]?(?:pad)(?:[\w_ ]+))(?: bui|\))/i], [[h, /_/g, " "], [t, oi], [m, r]], [/; (\w+) bui.+ oppo/i, /\b(cph[12]\d{3}|p(?:af|c[al]|d\w|e[ar])[mt]\d0|x9007|a101op)\b/i], [h, [t, "OPPO"], [m, x]], [/vivo (\w+)(?: bui|\))/i, /\b(v[12]\d{3}\w?[at])(?: bui|;)/i], [h, [t, "Vivo"], [m, x]], [/\b(rmx[1-3]\d{3})(?: bui|;|\))/i], [h, [t, "Realme"], [m, x]], [/\b(milestone|droid(?:[2-4x]| (?:bionic|x2|pro|razr))?:?( 4g)?)\b[\w ]+build\//i, /\bmot(?:orola)?[- ](\w*)/i, /((?:moto[\w\(\) ]+|xt\d{3,4}|nexus 6)(?= bui|\)))/i], [h, [t, ii], [m, x]], [/\b(mz60\d|xoom[2 ]{0,2}) build\//i], [h, [t, ii], [m, r]], [/((?=lg)?[vl]k\-?\d{3}) bui| 3\.[-\w; ]{10}lg?-([06cv9]{3,4})/i], [h, [t, Y], [m, r]], [/(lm(?:-?f100[nv]?|-[\w\.]+)(?= bui|\))|nexus [45])/i, /\blg[-e;\/ ]+((?!browser|netcast|android tv)\w+)/i, /\blg-?([\d\w]+) bui/i], [h, [t, Y], [m, x]], [/(ideatab[-\w ]+)/i, /lenovo ?(s[56]000[-\w]+|tab(?:[\w ]+)|yt[-\d\w]{6}|tb[-\d\w]{6})/i], [h, [t, "Lenovo"], [m, r]], [/(?:maemo|nokia).*(n900|lumia \d+)/i, /nokia[-_ ]?([-\w\.]*)/i], [[h, /_/g, " "], [t, "Nokia"], [m, x]], [/(pixel c)\b/i], [h, [t, K], [m, r]], [/droid.+; (pixel[\daxl ]{0,6})(?: bui|\))/i], [h, [t, K], [m, x]], [/droid.+ (a?\d[0-2]{2}so|[c-g]\d{4}|so[-gl]\w+|xq-a\w[4-7][12])(?= bui|\).+chrome\/(?![1-6]{0,1}\d\.))/i], [h, [t, ti], [m, x]], [/sony tablet [ps]/i, /\b(?:sony)?sgp\w+(?: bui|\))/i], [[h, "Xperia Tablet"], [t, ti], [m, r]], [/ (kb2005|in20[12]5|be20[12][59])\b/i, /(?:one)?(?:plus)? (a\d0\d\d)(?: b|\))/i], [h, [t, "OnePlus"], [m, x]], [/(alexa)webm/i, /(kf[a-z]{2}wi|aeo[c-r]{2})( bui|\))/i, /(kf[a-z]+)( bui|\)).+silk\//i], [h, [t, G], [m, r]], [/((?:sd|kf)[0349hijorstuw]+)( bui|\)).+silk\//i], [[h, /(.+)/g, "Fire Phone $1"], [t, G], [m, x]], [/(playbook);[-\w\),; ]+(rim)/i], [h, t, [m, r]], [/\b((?:bb[a-f]|st[hv])100-\d)/i, /\(bb10; (\w+)/i], [h, [t, Z], [m, x]], [/(?:\b|asus_)(transfo[prime ]{4,10} \w+|eeepc|slider \w+|nexus 7|padfone|p00[cj])/i], [h, [t, X], [m, r]], [/ (z[bes]6[027][012][km][ls]|zenfone \d\w?)\b/i], [h, [t, X], [m, x]], [/(nexus 9)/i], [h, [t, "HTC"], [m, r]], [/(htc)[-;_ ]{1,2}([\w ]+(?=\)| bui)|\w+)/i, /(zte)[- ]([\w ]+?)(?: bui|\/|\))/i, /(alcatel|geeksphone|nexian|panasonic(?!(?:;|\.))|sony(?!-bra))[-_ ]?([-\w]*)/i], [t, [h, /_/g, " "], [m, x]], [/droid.+; ([ab][1-7]-?[0178a]\d\d?)/i], [h, [t, "Acer"], [m, r]], [/droid.+; (m[1-5] note) bui/i, /\bmz-([-\w]{2,})/i], [h, [t, "Meizu"], [m, x]], [/; ((?:power )?armor(?:[\w ]{0,8}))(?: bui|\))/i], [h, [t, "Ulefone"], [m, x]], [/(blackberry|benq|palm(?=\-)|sonyericsson|acer|asus|dell|meizu|motorola|polytron|infinix|tecno)[-_ ]?([-\w]*)/i, /(hp) ([\w ]+\w)/i, /(asus)-?(\w+)/i, /(microsoft); (lumia[\w ]+)/i, /(lenovo)[-_ ]?([-\w]+)/i, /(jolla)/i, /(oppo) ?([\w ]+) bui/i], [t, h, [m, x]], [/(kobo)\s(ereader|touch)/i, /(archos) (gamepad2?)/i, /(hp).+(touchpad(?!.+tablet)|tablet)/i, /(kindle)\/([\w\.]+)/i], [t, h, [m, r]], [/(surface duo)/i], [h, [t, J], [m, r]], [/droid [\d\.]+; (fp\du?)(?: b|\))/i], [h, [t, "Fairphone"], [m, x]], [/(shield[\w ]+) b/i], [h, [t, "Nvidia"], [m, r]], [/(sprint) (\w+)/i], [t, h, [m, x]], [/(kin\.[onetw]{3})/i], [[h, /\./g, " "], [t, J], [m, x]], [/droid.+; ([c6]+|et5[16]|mc[239][23]x?|vc8[03]x?)\)/i], [h, [t, ri], [m, r]], [/droid.+; (ec30|ps20|tc[2-8]\d[kx])\)/i], [h, [t, ri], [m, x]], [/smart-tv.+(samsung)/i], [t, [m, a]], [/hbbtv.+maple;(\d+)/i], [[h, /^/, "SmartTV"], [t, ei], [m, a]], [/(nux; netcast.+smarttv|lg (netcast\.tv-201\d|android tv))/i], [[t, Y], [m, a]], [/(apple) ?tv/i], [t, [h, L + " TV"], [m, a]], [/crkey/i], [[h, ni + "cast"], [t, K], [m, a]], [/droid.+aft(\w+)( bui|\))/i], [h, [t, G], [m, a]], [/\(dtv[\);].+(aquos)/i, /(aquos-tv[\w ]+)\)/i], [h, [t, "Sharp"], [m, a]], [/(bravia[\w ]+)( bui|\))/i], [h, [t, ti], [m, a]], [/(mitv-\w{5}) bui/i], [h, [t, oi], [m, a]], [/Hbbtv.*(technisat) (.*);/i], [t, h, [m, a]], [/\b(roku)[\dx]*[\)\/]((?:dvp-)?[\d\.]*)/i, /hbbtv\/\d+\.\d+\.\d+ +\([\w\+ ]*; *([\w\d][^;]*);([^;]*)/i], [[t, yi], [h, yi], [m, a]], [/\b(android tv|smart[- ]?tv|opera tv|tv; rv:)\b/i], [[m, a]], [/(ouya)/i, /(nintendo) (\w+)/i], [t, h, [m, o]], [/droid.+; (shield) bui/i], [h, [t, "Nvidia"], [m, o]], [/(playstation \w+)/i], [h, [t, ti], [m, o]], [/\b(xbox(?: one)?(?!; xbox))[\); ]/i], [h, [t, J], [m, o]], [/((pebble))app/i], [t, h, [m, l]], [/(watch)(?: ?os[,\/]|\d,\d\/)[\d\.]+/i], [h, [t, L], [m, l]], [/droid.+; (glass) \d/i], [h, [t, K], [m, l]], [/droid.+; (wt63?0{2,3})\)/i], [h, [t, ri], [m, l]], [/(quest( 2| pro)?)/i], [h, [t, li], [m, l]], [/(tesla)(?: qtcarbrowser|\/[-\w\.]+)/i], [t, [m, k]], [/(aeobc)\b/i], [h, [t, G], [m, k]], [/droid .+?; ([^;]+?)(?: bui|\) applew).+? mobile safari/i], [h, [m, x]], [/droid .+?; ([^;]+?)(?: bui|\) applew).+?(?! mobile) safari/i], [h, [m, r]], [/\b((tablet|tab)[;\/]|focus\/\d(?!.+mobile))/i], [[m, r]], [/(phone|mobile(?:[;\/]| [ \w\/\.]*safari)|pda(?=.+windows ce))/i], [[m, x]], [/(android[-\w\. ]{0,9});.+buil/i], [h, [t, "Generic"]]],
        engine: [[/windows.+ edge\/([\w\.]+)/i], [g, [f, "EdgeHTML"]], [/webkit\/537\.36.+chrome\/(?!27)([\w\.]+)/i], [g, [f, "Blink"]], [/(presto)\/([\w\.]+)/i, /(webkit|trident|netfront|netsurf|amaya|lynx|w3m|goanna)\/([\w\.]+)/i, /ekioh(flow)\/([\w\.]+)/i, /(khtml|tasman|links)[\/ ]\(?([\w\.]+)/i, /(icab)[\/ ]([23]\.[\d\.]+)/i, /\b(libweb)/i], [f, g], [/rv\:([\w\.]{1,9})\b.+(gecko)/i], [g, f]],
        os: [[/microsoft (windows) (vista|xp)/i], [f, g], [/(windows) nt 6\.2; (arm)/i, /(windows (?:phone(?: os)?|mobile))[\/ ]?([\d\.\w ]*)/i, /(windows)[\/ ]?([ntce\d\. ]+\w)(?!.+xbox)/i], [f, [g, Ti, Si]], [/(win(?=3|9|n)|win 9x )([nt\d\.]+)/i], [[f, ci], [g, Ti, Si]], [/ip[honead]{2,4}\b(?:.*os ([\w]+) like mac|; opera)/i, /(?:ios;fbsv\/|iphone.+ios[\/ ])([\d\.]+)/i, /cfnetwork\/.+darwin/i], [[g, /_/g, "."], [f, "iOS"]], [/(mac os x) ?([\w\. ]*)/i, /(macintosh|mac_powerpc\b)(?!.+haiku)/i], [[f, "macOS"], [g, /_/g, "."]], [/droid ([\w\.]+)\b.+(android[- ]x86|harmonyos)/i], [g, f], [/(android|webos|qnx|bada|rim tablet os|maemo|meego|sailfish)[-\/ ]?([\w\.]*)/i, /(blackberry)\w*\/([\w\.]*)/i, /(tizen|kaios)[\/ ]([\w\.]+)/i, /\((series40);/i], [f, g], [/\(bb(10);/i], [g, [f, Z]], [/(?:symbian ?os|symbos|s60(?=;)|series60)[-\/ ]?([\w\.]*)/i], [g, [f, "Symbian"]], [/mozilla\/[\d\.]+ \((?:mobile|tablet|tv|mobile; [\w ]+); rv:.+ gecko\/([\w\.]+)/i], [g, [f, wi + " OS"]], [/web0s;.+rt(tv)/i, /\b(?:hp)?wos(?:browser)?\/([\w\.]+)/i], [g, [f, "webOS"]], [/watch(?: ?os[,\/]|\d,\d\/)([\d\.]+)/i], [g, [f, "watchOS"]], [/crkey\/([\d\.]+)/i], [g, [f, ni + "cast"]], [/(cros) [\w]+(?:\)| ([\w\.]+)\b)/i], [[f, "Chrome OS"], g], [/panasonic;(viera)/i, /(netrange)mmh/i, /(nettv)\/(\d+\.[\w\.]+)/i, /(nintendo|playstation) (\w+)/i, /(xbox); +xbox ([^\);]+)/i, /\b(joli|palm)\b ?(?:os)?\/?([\w\.]*)/i, /(mint)[\/\(\) ]?(\w*)/i, /(mageia|vectorlinux)[; ]/i, /([kxln]?ubuntu|debian|suse|opensuse|gentoo|arch(?= linux)|slackware|fedora|mandriva|centos|pclinuxos|red ?hat|zenwalk|linpus|raspbian|plan 9|minix|risc os|contiki|deepin|manjaro|elementary os|sabayon|linspire)(?: gnu\/linux)?(?: enterprise)?(?:[- ]linux)?(?:-gnu)?[-\/ ]?(?!chrom|package)([-\w\.]*)/i, /(hurd|linux) ?([\w\.]*)/i, /(gnu) ?([\w\.]*)/i, /\b([-frentopcghs]{0,5}bsd|dragonfly)[\/ ]?(?!amd|[ix346]{1,2}86)([\w\.]*)/i, /(haiku) (\w+)/i], [f, g], [/(sunos) ?([\w\.\d]*)/i], [[f, "Solaris"], g], [/((?:open)?solaris)[-\/ ]?([\w\.]*)/i, /(aix) ((\d)(?=\.|\)| )[\w\.])*/i, /\b(beos|os\/2|amigaos|morphos|openvms|fuchsia|hp-ux|serenityos)/i, /(unix) ?([\w\.]*)/i], [f, g]]
    }
      , Ai = (ni = {
        init: {},
        isIgnore: {},
        isIgnoreRgx: {},
        toString: {}
    },
    vi.call(ni.init, [[V, [f, g, p]], [B, [v]], [F, [m, h, t]], [D, [f, g]], [W, [f, g]]]),
    vi.call(ni.isIgnore, [[V, [g, p]], [D, [g]], [W, [g]]]),
    vi.call(ni.isIgnoreRgx, [[V, / ?browser$/i], [W, / ?os$/i]]),
    vi.call(ni.toString, [[V, [f, g]], [B, [v]], [F, [t, h]], [D, [f, g]], [W, [f, g]]]),
    ni)
      , Oi = function(e, i) {
        var t = Ai.init[i]
          , o = Ai.isIgnore[i] || 0
          , r = Ai.isIgnoreRgx[i] || 0
          , a = Ai.toString[i] || 0;
        function s() {
            vi.call(this, t)
        }
        return s.prototype.getItem = function() {
            return e
        }
        ,
        s.prototype.withClientHints = function() {
            return di ? di.getHighEntropyValues(j).then(function(i) {
                return e.setCH(new zi(i,!1)).parseCH().get()
            }) : e.parseCH().get()
        }
        ,
        s.prototype.withFeatureCheck = function() {
            return e.detectFeature().get()
        }
        ,
        i != $ && (s.prototype.is = function(i) {
            var e, t = !1;
            for (e in this)
                if (this.hasOwnProperty(e) && !n(o, e) && mi(r ? xi(r, this[e]) : this[e]) == mi(r ? xi(r, i) : i)) {
                    if (t = !0,
                    i != b)
                        break
                } else if (i == b && t) {
                    t = !t;
                    break
                }
            return t
        }
        ,
        s.prototype.toString = function() {
            var i, e = w;
            for (i in a)
                typeof this[a[i]] !== b && (e += (e ? " " : w) + this[a[i]]);
            return e || b
        }
        ),
        di || (s.prototype.then = function(i) {
            var e = this
              , t = function() {
                for (var i in e)
                    e.hasOwnProperty(i) && (this[i] = e[i])
            };
            t.prototype = {
                is: s.prototype.is,
                toString: s.prototype.toString
            };
            t = new t;
            return i(t),
            t
        }
        ),
        new s
    };
    function zi(i, e) {
        if (i = i || {},
        vi.call(this, j),
        e)
            vi.call(this, [[T, fi(i[z])], [C, fi(i[N])], [x, /\?1/.test(i[I])], [h, ki(i[R])], [q, ki(i[E])], [A, ki(i[M])], [v, ki(i[P])], [S, fi(i[H])], [O, ki(i[U])]]);
        else
            for (var t in i)
                this.hasOwnProperty(t) && typeof i[t] !== b && (this[t] = i[t])
    }
    function Ni(i, e, t, o) {
        return this.get = function(i) {
            return i ? this.data.hasOwnProperty(i) ? this.data[i] : c : this.data
        }
        ,
        this.set = function(i, e) {
            return this.data[i] = e,
            this
        }
        ,
        this.setCH = function(i) {
            return this.uaCH = i,
            this
        }
        ,
        this.detectFeature = function() {
            if (ui && ui.userAgent == this.ua)
                switch (this.itemType) {
                case V:
                    ui.brave && typeof ui.brave.isBrave == u && this.set(f, "Brave");
                    break;
                case F:
                    !this.get(m) && di && di[x] && this.set(m, x),
                    "Macintosh" == this.get(h) && ui && typeof ui.standalone !== b && ui.maxTouchPoints && 2 < ui.maxTouchPoints && this.set(h, "iPad").set(m, r);
                    break;
                case W:
                    !this.get(f) && di && di[q] && this.set(f, di[q]);
                    break;
                case $:
                    var e = this.data
                      , i = function(i) {
                        return e[i].getItem().detectFeature().get()
                    };
                    this.set(V, i(V)).set(B, i(B)).set(F, i(F)).set(D, i(D)).set(W, i(W))
                }
            return this
        }
        ,
        this.parseUA = function() {
            return this.itemType != $ && _i.call(this.data, this.ua, this.rgxMap),
            this.itemType == V && this.set(p, gi(this.get(g))),
            this
        }
        ,
        this.parseCH = function() {
            var i, e = this.uaCH, t = this.rgxMap;
            switch (this.itemType) {
            case V:
                var o = e[C] || e[T];
                if (o)
                    for (var r in o) {
                        var a = o[r].brand
                          , s = o[r].version;
                        !/not.a.brand/i.test(a) && (r < 1 || /chromi/i.test(this.get(f))) && this.set(f, xi(K + " ", a)).set(g, s).set(p, gi(s))
                    }
                break;
            case B:
                var n = e[v];
                n && (n && "64" == e[O] && (n += "64"),
                _i.call(this.data, n + ";", t));
                break;
            case F:
                if (e[x] && this.set(m, x),
                e[h] && this.set(h, e[h]),
                e[S]) {
                    if ("string" != typeof e[S])
                        for (var w = 0; !i && w < e[S].length; )
                            i = Ti(e[S][w++], Ci);
                    else
                        i = Ti(e[S], Ci);
                    this.set(m, i)
                }
                break;
            case W:
                n = e[q];
                n && (l = e[A],
                n == ci && (l = 13 <= parseInt(gi(l), 10) ? "11" : "10"),
                this.set(f, n).set(g, l));
                break;
            case $:
                var b = this.data
                  , l = function(i) {
                    return b[i].getItem().setCH(e).parseCH().get()
                };
                this.set(V, l(V)).set(B, l(B)).set(F, l(F)).set(D, l(D)).set(W, l(W))
            }
            return this
        }
        ,
        vi.call(this, [["itemType", i], ["ua", e], ["uaCH", o], ["rgxMap", t], ["data", Oi(this, i)]]),
        this
    }
    function Pi(i, e, t) {
        if (typeof i === d ? (e = hi(i) ? (typeof e === d && (t = e),
        i) : (t = i,
        c),
        i = c) : typeof i !== s || hi(e) || (t = e,
        e = c),
        !(this instanceof Pi))
            return new Pi(i,e,t).getResult();
        var o = typeof i === s ? i : ui && ui.userAgent ? ui.userAgent : t && t[y] ? t[y] : w
          , r = new zi(t,!0)
          , a = e ? pi(qi, e) : qi
          , e = function(i) {
            return i == $ ? function() {
                return new Ni(i,o,a,r).set("ua", o).set(V, this.getBrowser()).set(B, this.getCPU()).set(F, this.getDevice()).set(D, this.getEngine()).set(W, this.getOS()).get()
            }
            : function() {
                return new Ni(i,o,a[i],r).parseUA().get()
            }
        };
        return vi.call(this, [["getBrowser", e(V)], ["getCPU", e(B)], ["getDevice", e(F)], ["getEngine", e(D)], ["getOS", e(W)], ["getResult", e($)], ["getUA", function() {
            return o
        }
        ], ["setUA", function(i) {
            return typeof i === s && (o = i.length > _ ? yi(i, _) : i),
            this
        }
        ]]).setUA(o),
        this
    }
    Pi.VERSION = "2.0.0-beta.1",
    Pi.BROWSER = e([f, g, p]),
    Pi.CPU = e([v]),
    Pi.DEVICE = e([h, t, m, o, x, a, r, l, k]),
    Pi.ENGINE = Pi.OS = e([f, g]),
    typeof exports !== b ? (typeof module !== b && module.exports && (exports = module.exports = Pi),
    exports.UAParser = Pi) : typeof define === u && define.amd ? define(function() {
        return Pi
    }) : typeof i !== b && (i.UAParser = Pi);
    var Ui, Hi = typeof i !== b && (i.jQuery || i.Zepto);
    Hi && !Hi.ua && (Ui = new Pi,
    Hi.ua = Ui.getResult(),
    Hi.ua.get = function() {
        return Ui.getUA()
    }
    ,
    Hi.ua.set = function(i) {
        Ui.setUA(i);
        var e, t = Ui.getResult();
        for (e in t)
            Hi.ua[e] = t[e]
    }
    )
}("object" == typeof window ? window : this);
</script>
<script type="text/javascript">
  window.onload = function() {
    if (document.getElementById("download-link")) {
      UAParser().withClientHints().then(function(result) {
        var OS = result.os.name;
        var version = result.os.version;
        var defaultLinuxArchitecture = 'x86_64';
        var hasBeta = Boolean(document.getElementById("download-link-beta"));
        var CPU = result.cpu.architecture;

        if (OS === 'macOS') {
          if (CPU === 'arm64') {
            document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-<?php echo $umsVersion; ?>-arm.dmg";
            if (hasBeta) {
              document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-<?php echo $umsVersionBeta; ?>-arm.dmg";
            }
          } else if (!version || parseFloat(version) < 10.15) {
            document.getElementById("apple-run-link").classList.remove("d-none");
            document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-<?php echo $umsVersion; ?>-pre10.15.dmg";
            if (hasBeta) {
              document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-<?php echo $umsVersionBeta; ?>-pre10.15.dmg";
            }
          } else {
            document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-<?php echo $umsVersion; ?>.dmg";
            if (hasBeta) {
              document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-<?php echo $umsVersionBeta; ?>.dmg";
            }
          }
          document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for macOS';
          if (hasBeta) {
            document.getElementById("download-link-beta").text = 'Download beta for macOS';
          }
        } else if (OS === 'Windows') {
          document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-<?php echo $umsVersion; ?>.exe";
          document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for Windows';
          if (hasBeta) {
            document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-<?php echo $umsVersionBeta; ?>.exe";
            document.getElementById("download-link-beta").text = 'Download beta for Windows';
          }
        } else if (OS === 'Linux') {
          if (CPU === 'amd64') {
            defaultLinuxArchitecture = 'x86_64';
          } else if (CPU === 'arm64') {
            defaultLinuxArchitecture = 'arm64';
          } else if (CPU === 'armhf') {
            defaultLinuxArchitecture = 'armhf';
          } else if (CPU === 'arm') {
            defaultLinuxArchitecture = 'armel';
          }

          document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>-/UMS-<?php echo $umsVersion; ?>-" + defaultLinuxArchitecture + ".tgz";
          document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for Linux (' + defaultLinuxArchitecture + ')';
          if (hasBeta) {
            document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>-/UMS-<?php echo $umsVersionBeta; ?>-" + defaultLinuxArchitecture + ".tgz";
            document.getElementById("download-link-beta").text = 'Download beta for Linux (' + defaultLinuxArchitecture + ')';
          }
        }
      });
    }
  };
</script>

<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.spirton.com/piwik/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '19']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.spirton.com/piwik/matomo.php?idsite=19&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->
