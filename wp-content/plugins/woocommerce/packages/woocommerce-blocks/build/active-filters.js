this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["active-filters"]=function(e){function t(t){for(var n,o,a=t[0],s=t[1],i=t[2],b=0,p=[];b<a.length;b++)o=a[b],Object.prototype.hasOwnProperty.call(r,o)&&r[o]&&p.push(r[o][0]),r[o]=0;for(n in s)Object.prototype.hasOwnProperty.call(s,n)&&(e[n]=s[n]);for(u&&u(t);p.length;)p.shift()();return l.push.apply(l,i||[]),c()}function c(){for(var e,t=0;t<l.length;t++){for(var c=l[t],n=!0,a=1;a<c.length;a++){var s=c[a];0!==r[s]&&(n=!1)}n&&(l.splice(t--,1),e=o(o.s=c[0]))}return e}var n={},r={4:0},l=[];function o(t){if(n[t])return n[t].exports;var c=n[t]={i:t,l:!1,exports:{}};return e[t].call(c.exports,c,c.exports,o),c.l=!0,c.exports}o.m=e,o.c=n,o.d=function(e,t,c){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:c})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var c=Object.create(null);if(o.r(c),Object.defineProperty(c,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)o.d(c,n,function(t){return e[t]}.bind(null,n));return c},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="";var a=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],s=a.push.bind(a);a.push=t,a=a.slice();for(var i=0;i<a.length;i++)t(a[i]);var u=s;return l.push([796,0]),c()}({0:function(e,t){e.exports=window.wp.element},1:function(e,t){e.exports=window.wp.i18n},10:function(e,t){e.exports=window.wp.data},102:function(e,t,c){"use strict";c.d(t,"a",(function(){return b})),c.d(t,"b",(function(){return p})),c.d(t,"c",(function(){return m}));var n=c(19),r=c(10),l=c(0),o=c(31),a=c.n(o),s=c(52),i=c(142),u=c(68);const b=e=>{const t=Object(u.a)();e=e||t;const c=Object(r.useSelect)(t=>t(n.QUERY_STATE_STORE_KEY).getValueForQueryContext(e,void 0),[e]),{setValueForQueryContext:o}=Object(r.useDispatch)(n.QUERY_STATE_STORE_KEY);return[c,Object(l.useCallback)(t=>{o(e,t)},[e,o])]},p=(e,t,c)=>{const o=Object(u.a)();c=c||o;const a=Object(r.useSelect)(r=>r(n.QUERY_STATE_STORE_KEY).getValueForQueryKey(c,e,t),[c,e]),{setQueryValue:s}=Object(r.useDispatch)(n.QUERY_STATE_STORE_KEY);return[a,Object(l.useCallback)(t=>{s(c,e,t)},[c,e,s])]},m=(e,t)=>{const c=Object(u.a)();t=t||c;const[n,r]=b(t),o=Object(s.a)(n),p=Object(s.a)(e),m=Object(i.a)(p),d=Object(l.useRef)(!1);return Object(l.useEffect)(()=>{a()(m,p)||(r(Object.assign({},o,p)),d.current=!0)},[o,p,m,r]),d.current?[n,r]:[e,r]}},117:function(e,t){},12:function(e,t){e.exports=window.wp.compose},121:function(e,t,c){"use strict";var n=c(0),r=c(6),l=c(1),o=c(4);function a(e){let{level:t}=e;const c={1:"M9 5h2v10H9v-4H5v4H3V5h2v4h4V5zm6.6 0c-.6.9-1.5 1.7-2.6 2v1h2v7h2V5h-1.4z",2:"M7 5h2v10H7v-4H3v4H1V5h2v4h4V5zm8 8c.5-.4.6-.6 1.1-1.1.4-.4.8-.8 1.2-1.3.3-.4.6-.8.9-1.3.2-.4.3-.8.3-1.3 0-.4-.1-.9-.3-1.3-.2-.4-.4-.7-.8-1-.3-.3-.7-.5-1.2-.6-.5-.2-1-.2-1.5-.2-.4 0-.7 0-1.1.1-.3.1-.7.2-1 .3-.3.1-.6.3-.9.5-.3.2-.6.4-.8.7l1.2 1.2c.3-.3.6-.5 1-.7.4-.2.7-.3 1.2-.3s.9.1 1.3.4c.3.3.5.7.5 1.1 0 .4-.1.8-.4 1.1-.3.5-.6.9-1 1.2-.4.4-1 .9-1.6 1.4-.6.5-1.4 1.1-2.2 1.6V15h8v-2H15z",3:"M12.1 12.2c.4.3.8.5 1.2.7.4.2.9.3 1.4.3.5 0 1-.1 1.4-.3.3-.1.5-.5.5-.8 0-.2 0-.4-.1-.6-.1-.2-.3-.3-.5-.4-.3-.1-.7-.2-1-.3-.5-.1-1-.1-1.5-.1V9.1c.7.1 1.5-.1 2.2-.4.4-.2.6-.5.6-.9 0-.3-.1-.6-.4-.8-.3-.2-.7-.3-1.1-.3-.4 0-.8.1-1.1.3-.4.2-.7.4-1.1.6l-1.2-1.4c.5-.4 1.1-.7 1.6-.9.5-.2 1.2-.3 1.8-.3.5 0 1 .1 1.6.2.4.1.8.3 1.2.5.3.2.6.5.8.8.2.3.3.7.3 1.1 0 .5-.2.9-.5 1.3-.4.4-.9.7-1.5.9v.1c.6.1 1.2.4 1.6.8.4.4.7.9.7 1.5 0 .4-.1.8-.3 1.2-.2.4-.5.7-.9.9-.4.3-.9.4-1.3.5-.5.1-1 .2-1.6.2-.8 0-1.6-.1-2.3-.4-.6-.2-1.1-.6-1.6-1l1.1-1.4zM7 9H3V5H1v10h2v-4h4v4h2V5H7v4z",4:"M9 15H7v-4H3v4H1V5h2v4h4V5h2v10zm10-2h-1v2h-2v-2h-5v-2l4-6h3v6h1v2zm-3-2V7l-2.8 4H16z",5:"M12.1 12.2c.4.3.7.5 1.1.7.4.2.9.3 1.3.3.5 0 1-.1 1.4-.4.4-.3.6-.7.6-1.1 0-.4-.2-.9-.6-1.1-.4-.3-.9-.4-1.4-.4H14c-.1 0-.3 0-.4.1l-.4.1-.5.2-1-.6.3-5h6.4v1.9h-4.3L14 8.8c.2-.1.5-.1.7-.2.2 0 .5-.1.7-.1.5 0 .9.1 1.4.2.4.1.8.3 1.1.6.3.2.6.6.8.9.2.4.3.9.3 1.4 0 .5-.1 1-.3 1.4-.2.4-.5.8-.9 1.1-.4.3-.8.5-1.3.7-.5.2-1 .3-1.5.3-.8 0-1.6-.1-2.3-.4-.6-.2-1.1-.6-1.6-1-.1-.1 1-1.5 1-1.5zM9 15H7v-4H3v4H1V5h2v4h4V5h2v10z",6:"M9 15H7v-4H3v4H1V5h2v4h4V5h2v10zm8.6-7.5c-.2-.2-.5-.4-.8-.5-.6-.2-1.3-.2-1.9 0-.3.1-.6.3-.8.5l-.6.9c-.2.5-.2.9-.2 1.4.4-.3.8-.6 1.2-.8.4-.2.8-.3 1.3-.3.4 0 .8 0 1.2.2.4.1.7.3 1 .6.3.3.5.6.7.9.2.4.3.8.3 1.3s-.1.9-.3 1.4c-.2.4-.5.7-.8 1-.4.3-.8.5-1.2.6-1 .3-2 .3-3 0-.5-.2-1-.5-1.4-.9-.4-.4-.8-.9-1-1.5-.2-.6-.3-1.3-.3-2.1s.1-1.6.4-2.3c.2-.6.6-1.2 1-1.6.4-.4.9-.7 1.4-.9.6-.3 1.1-.4 1.7-.4.7 0 1.4.1 2 .3.5.2 1 .5 1.4.8 0 .1-1.3 1.4-1.3 1.4zm-2.4 5.8c.2 0 .4 0 .6-.1.2 0 .4-.1.5-.2.1-.1.3-.3.4-.5.1-.2.1-.5.1-.7 0-.4-.1-.8-.4-1.1-.3-.2-.7-.3-1.1-.3-.3 0-.7.1-1 .2-.4.2-.7.4-1 .7 0 .3.1.7.3 1 .1.2.3.4.4.6.2.1.3.3.5.3.2.1.5.2.7.1z"};return c.hasOwnProperty(t)?Object(n.createElement)(o.SVG,{width:"20",height:"20",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},Object(n.createElement)(o.Path,{d:c[t]})):null}class s extends n.Component{createLevelControl(e,t,c){const r=e===t;return{icon:Object(n.createElement)(a,{level:e}),title:Object(l.sprintf)(
/* translators: %s: heading level e.g: "2", "3", "4" */
Object(l.__)("Heading %d",'woocommerce'),e),isActive:r,onClick:()=>c(e)}}render(){const{isCollapsed:e=!0,minLevel:t,maxLevel:c,selectedLevel:l,onChange:s}=this.props;return Object(n.createElement)(o.ToolbarGroup,{isCollapsed:e,icon:Object(n.createElement)(a,{level:l}),controls:Object(r.range)(t,c).map(e=>this.createLevelControl(e,l,s))})}}t.a=s},126:function(e,t,c){"use strict";c.d(t,"a",(function(){return r}));var n=c(0);const r=()=>{const[,e]=Object(n.useState)();return Object(n.useCallback)(t=>{e(()=>{throw t})},[])}},14:function(e,t){e.exports=window.wp.blocks},140:function(e,t,c){"use strict";var n=c(0),r=(c(2),c(9)),l=c(12),o=c(1);c(194),t.a=Object(l.withInstanceId)(e=>{let{className:t,headingLevel:c,onChange:l,heading:a,instanceId:s}=e;const i="h"+c;return Object(n.createElement)(i,{className:t},Object(n.createElement)("label",{className:"screen-reader-text",htmlFor:"block-title-"+s},Object(o.__)("Block title",'woocommerce')),Object(n.createElement)(r.PlainText,{id:"block-title-"+s,className:"wc-block-editor-components-title",value:a,onChange:l}))})},142:function(e,t,c){"use strict";c.d(t,"a",(function(){return r}));var n=c(8);function r(e,t){const c=Object(n.useRef)();return Object(n.useEffect)(()=>{c.current===e||t&&!t(e,c.current)||(c.current=e)},[e,t]),c.current}},149:function(e,t,c){"use strict";c.d(t,"a",(function(){return s}));var n=c(19),r=c(10),l=c(0),o=c(52),a=c(126);const s=e=>{const{namespace:t,resourceName:c,resourceValues:s=[],query:i={},shouldSelect:u=!0}=e;if(!t||!c)throw new Error("The options object must have valid values for the namespace and the resource properties.");const b=Object(l.useRef)({results:[],isLoading:!0}),p=Object(o.a)(i),m=Object(o.a)(s),d=Object(a.a)(),h=Object(r.useSelect)(e=>{if(!u)return null;const r=e(n.COLLECTIONS_STORE_KEY),l=[t,c,p,m],o=r.getCollectionError(...l);return o&&d(o),{results:r.getCollection(...l),isLoading:!r.hasFinishedResolution("getCollection",l)}},[t,c,m,p,u]);return null!==h&&(b.current=h),b.current}},18:function(e,t){e.exports=window.wp.primitives},19:function(e,t){e.exports=window.wc.wcBlocksData},194:function(e,t){},195:function(e,t){},20:function(e,t){e.exports=window.wp.htmlEntities},246:function(e,t,c){"use strict";c.d(t,"a",(function(){return l})),c.d(t,"b",(function(){return o}));var n=c(3);const r=Object(n.getSetting)("attributes",[]).reduce((e,t)=>{const c=(n=t)&&n.attribute_name?{id:parseInt(n.attribute_id,10),name:n.attribute_name,taxonomy:"pa_"+n.attribute_name,label:n.attribute_label}:null;var n;return c.id&&e.push(c),e},[]),l=e=>{if(e)return r.find(t=>t.id===e)},o=e=>{if(e)return r.find(t=>t.taxonomy===e)}},247:function(e,t,c){"use strict";c.d(t,"a",(function(){return r})),c.d(t,"b",(function(){return l}));var n=c(6);const r=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:()=>{},c=arguments.length>2?arguments[2]:void 0,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:"";const l=e.filter(e=>e.attribute===c.taxonomy),o=l.length?l[0]:null;if(!(o&&o.slug&&Array.isArray(o.slug)&&o.slug.includes(r)))return;const a=o.slug.filter(e=>e!==r),s=e.filter(e=>e.attribute!==c.taxonomy);a.length>0&&(o.slug=a.sort(),s.push(o)),t(Object(n.sortBy)(s,"attribute"))},l=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:()=>{},c=arguments.length>2?arguments[2]:void 0,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:[],l=arguments.length>4&&void 0!==arguments[4]?arguments[4]:"in";const o=e.filter(e=>e.attribute!==c.taxonomy);0===r.length?t(o):(o.push({attribute:c.taxonomy,operator:l,slug:r.map(e=>{let{slug:t}=e;return t}).sort()}),t(Object(n.sortBy)(o,"attribute")))}},256:function(e,t,c){"use strict";var n=c(7),r=c.n(n),l=c(0),o=c(5),a=c.n(o),s=c(1),i=c(55),u=c(331);c(195);var b=e=>{let{text:t,screenReaderText:c="",element:n="li",className:o="",radius:s="small",children:i=null,...u}=e;const b=n,p=a()(o,"wc-block-components-chip","wc-block-components-chip--radius-"+s),m=Boolean(c&&c!==t);return Object(l.createElement)(b,r()({className:p},u),Object(l.createElement)("span",{"aria-hidden":m,className:"wc-block-components-chip__text"},t),m&&Object(l.createElement)("span",{className:"screen-reader-text"},c),i)};t.a=e=>{let{ariaLabel:t="",className:c="",disabled:n=!1,onRemove:o=(()=>{}),removeOnAnyClick:p=!1,text:m,screenReaderText:d="",...h}=e;const O=p?"span":"button";if(!t){const e=d&&"string"==typeof d?d:m;t="string"!=typeof e?
/* translators: Remove chip. */
Object(s.__)("Remove",'woocommerce'):Object(s.sprintf)(
/* translators: %s text of the chip to remove. */
Object(s.__)('Remove "%s"','woocommerce'),e)}const g={"aria-label":t,disabled:n,onClick:o,onKeyDown:e=>{"Backspace"!==e.key&&"Delete"!==e.key||o()}},j=p?g:{},v=p?{"aria-hidden":!0}:g;return Object(l.createElement)(b,r()({},h,j,{className:a()(c,"is-removable"),element:p?"button":h.element,screenReaderText:d,text:m}),Object(l.createElement)(O,r()({className:"wc-block-components-chip__remove"},v),Object(l.createElement)(i.a,{className:"wc-block-components-chip__remove-icon",srcElement:u.a,size:16})))}},3:function(e,t){e.exports=window.wc.wcSettings},31:function(e,t){e.exports=window.wp.isShallowEqual},331:function(e,t,c){"use strict";var n=c(7),r=c.n(n),l=c(0),o=c(18);const a=Object(l.createElement)(e=>{let{className:t,size:c,...n}=e;return Object(l.createElement)(o.SVG,r()({xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",className:t,width:c,height:c},n),Object(l.createElement)("path",{d:"M14.95 6.46L11.41 10l3.54 3.54-1.41 1.41L10 11.42l-3.53 3.53-1.42-1.42L8.58 10 5.05 6.47l1.42-1.42L10 8.58l3.54-3.53z"}))},null);t.a=a},37:function(e,t,c){"use strict";var n=c(0),r=c(5),l=c.n(r);t.a=e=>{let t,{label:c,screenReaderLabel:r,wrapperElement:o,wrapperProps:a={}}=e;const s=null!=c,i=null!=r;return!s&&i?(t=o||"span",a={...a,className:l()(a.className,"screen-reader-text")},Object(n.createElement)(t,a,r)):(t=o||n.Fragment,s&&i&&c!==r?Object(n.createElement)(t,a,Object(n.createElement)("span",{"aria-hidden":"true"},c),Object(n.createElement)("span",{className:"screen-reader-text"},r)):Object(n.createElement)(t,a,c))}},4:function(e,t){e.exports=window.wp.components},44:function(e,t){e.exports=window.wc.priceFormat},52:function(e,t,c){"use strict";c.d(t,"a",(function(){return o}));var n=c(0),r=c(31),l=c.n(r);function o(e){const t=Object(n.useRef)(e);return l()(e,t.current)||(t.current=e),t.current}},55:function(e,t,c){"use strict";var n=c(0);t.a=function(e){let{srcElement:t,size:c=24,...r}=e;return Object(n.isValidElement)(t)?Object(n.cloneElement)(t,{width:c,height:c,...r}):null}},6:function(e,t){e.exports=window.lodash},68:function(e,t,c){"use strict";c.d(t,"a",(function(){return l}));var n=c(0);const r=Object(n.createContext)("page"),l=()=>Object(n.useContext)(r);r.Provider},796:function(e,t,c){e.exports=c(855)},797:function(e,t){},8:function(e,t){e.exports=window.React},80:function(e,t,c){"use strict";var n=c(7),r=c.n(n),l=c(0),o=c(6),a=c(5),s=c.n(a),i=c(4),u=c(12);c(117);class b extends l.Component{constructor(){super(...arguments),this.onClick=this.onClick.bind(this)}onClick(e){this.props.onChange&&this.props.onChange(e.target.value)}render(){const{label:e,checked:t,instanceId:c,className:n,help:a,options:u,value:b}=this.props,p="inspector-toggle-button-control-"+c;let m;return a&&(m=Object(o.isFunction)(a)?a(t):a),Object(l.createElement)(i.BaseControl,{id:p,help:m,className:s()("components-toggle-button-control",n)},Object(l.createElement)("label",{id:p+"__label",htmlFor:p,className:"components-toggle-button-control__label"},e),Object(l.createElement)(i.ButtonGroup,{"aria-labelledby":p+"__label"},u.map((t,c)=>{const n={};return b===t.value?(n.isPrimary=!0,n["aria-pressed"]=!0):(n.isSecondary=!0,n["aria-pressed"]=!1),Object(l.createElement)(i.Button,r()({key:`${t.label}-${t.value}-${c}`,value:t.value,onClick:this.onClick,"aria-label":e+": "+t.label},n),t.label)})))}}t.a=Object(u.withInstanceId)(b)},855:function(e,t,c){"use strict";c.r(t);var n=c(7),r=c.n(n),l=c(0),o=c(1),a=c(14),s=c(55),i=c(18),u=Object(l.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/SVG",viewBox:"0 0 24 24"},Object(l.createElement)("path",{fill:"none",d:"M0 0h24v24H0z"}),Object(l.createElement)("path",{d:"M17 6H7c-3.31 0-6 2.69-6 6s2.69 6 6 6h10c3.31 0 6-2.69 6-6s-2.69-6-6-6zm0 10H7c-2.21 0-4-1.79-4-4s1.79-4 4-4h10c2.21 0 4 1.79 4 4s-1.79 4-4 4zm0-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"})),b=c(5),p=c.n(b),m=c(9),d=c(4),h=c(121),O=c(140),g=c(80),j=c(102),v=c(3),f=(c(2),c(37)),w=(c(797),c(246)),_=c(44),y=c(256);const E=(e,t)=>Number.isFinite(e)&&Number.isFinite(t)?Object(o.sprintf)(
/* translators: %1$s min price, %2$s max price */
Object(o.__)("Between %1$s and %2$s",'woocommerce'),Object(_.formatPrice)(e),Object(_.formatPrice)(t)):Number.isFinite(e)?Object(o.sprintf)(
/* translators: %s min price */
Object(o.__)("From %s",'woocommerce'),Object(_.formatPrice)(e)):Object(o.sprintf)(
/* translators: %s max price */
Object(o.__)("Up to %s",'woocommerce'),Object(_.formatPrice)(t)),k=e=>{let{type:t,name:c,prefix:n,removeCallback:r=(()=>{}),showLabel:a=!0,displayStyle:s}=e;const i=n?Object(l.createElement)(l.Fragment,null,n," ",c):c,u=Object(o.sprintf)(
/* translators: %s attribute value used in the filter. For example: yellow, green, small, large. */
Object(o.__)("Remove %s filter",'woocommerce'),c);return Object(l.createElement)("li",{className:"wc-block-active-filters__list-item",key:t+":"+c},a&&Object(l.createElement)("span",{className:"wc-block-active-filters__list-item-type"},t+": "),"chips"===s?Object(l.createElement)(y.a,{element:"span",text:i,onRemove:r,radius:"large",ariaLabel:u}):Object(l.createElement)("span",{className:"wc-block-active-filters__list-item-name"},i,Object(l.createElement)("button",{className:"wc-block-active-filters__list-item-remove",onClick:r},Object(l.createElement)("svg",{width:"16",height:"16",viewBox:"0 0 16 16",fill:"none",xmlns:"http://www.w3.org/2000/svg"},Object(l.createElement)("ellipse",{cx:"8",cy:"8",rx:"8",ry:"8",transform:"rotate(-180 8 8)",fill:"currentColor",fillOpacity:"0.7"}),Object(l.createElement)("rect",{x:"10.636",y:"3.94983",width:"2",height:"9.9466",transform:"rotate(45 10.636 3.94983)",fill:"white"}),Object(l.createElement)("rect",{x:"12.0503",y:"11.0209",width:"2",height:"9.9466",transform:"rotate(135 12.0503 11.0209)",fill:"white"})),Object(l.createElement)(f.a,{screenReaderLabel:u}))))};var x=c(149),S=c(20),C=c(247),N=e=>{let{attributeObject:t={},slugs:c=[],operator:n="in",displayStyle:r}=e;const{results:a,isLoading:s}=Object(x.a)({namespace:"/wc/store",resourceName:"products/attributes/terms",resourceValues:[t.id]}),[i,u]=Object(j.b)("attributes",[]);if(s)return null;const b=t.label;return Object(l.createElement)("li",null,Object(l.createElement)("span",{className:"wc-block-active-filters__list-item-type"},b,":"),Object(l.createElement)("ul",null,c.map((e,c)=>{const s=a.find(t=>t.slug===e);if(!s)return null;let p="";return c>0&&"and"===n&&(p=Object(l.createElement)("span",{className:"wc-block-active-filters__list-item-operator"},Object(o.__)("and",'woocommerce'))),k({type:b,name:Object(S.decodeEntities)(s.name||e),prefix:p,removeCallback:()=>{Object(C.a)(i,u,t,e)},showLabel:!1,displayStyle:r})})))},L=e=>{let{attributes:t,isEditor:c=!1}=e;const[n,r]=Object(j.b)("attributes",[]),[a,s]=Object(j.b)("stock_status",[]),[i,u]=Object(j.b)("min_price"),[b,m]=Object(j.b)("max_price"),d=Object(v.getSetting)("stockStatusOptions",[]),h=Object(l.useMemo)(()=>{if(a.length>0)return a.map(e=>k({type:Object(o.__)("Stock Status",'woocommerce'),name:d[e],removeCallback:()=>{const t=a.filter(t=>t!==e);s(t)},displayStyle:t.displayStyle}))},[d,a,s,t.displayStyle]),O=Object(l.useMemo)(()=>Number.isFinite(i)||Number.isFinite(b)?k({type:Object(o.__)("Price",'woocommerce'),name:E(i,b),removeCallback:()=>{u(void 0),m(void 0)},displayStyle:t.displayStyle}):null,[i,b,t.displayStyle,u,m]),g=Object(l.useMemo)(()=>n.map(e=>{const c=Object(w.b)(e.attribute);return Object(l.createElement)(N,{attributeObject:c,displayStyle:t.displayStyle,slugs:e.slug,key:e.attribute,operator:e.operator})}),[n,t.displayStyle]);if(!(n.length>0||a.length>0||Number.isFinite(i)||Number.isFinite(b)||c))return null;const _="h"+t.headingLevel,y=p()("wc-block-active-filters__list",{"wc-block-active-filters__list--chips":"chips"===t.displayStyle});return Object(l.createElement)(l.Fragment,null,!c&&t.heading&&Object(l.createElement)(_,{className:"wc-block-active-filters__title"},t.heading),Object(l.createElement)("div",{className:"wc-block-active-filters"},Object(l.createElement)("ul",{className:y},c?Object(l.createElement)(l.Fragment,null,k({type:Object(o.__)("Size",'woocommerce'),name:Object(o.__)("Small",'woocommerce'),displayStyle:t.displayStyle}),k({type:Object(o.__)("Color",'woocommerce'),name:Object(o.__)("Blue",'woocommerce'),displayStyle:t.displayStyle})):Object(l.createElement)(l.Fragment,null,O,h,g)),Object(l.createElement)("button",{className:"wc-block-active-filters__clear-all",onClick:()=>{u(void 0),m(void 0),r([]),s([])}},Object(l.createElement)(f.a,{label:Object(o.__)("Clear All",'woocommerce'),screenReaderLabel:Object(o.__)("Clear All Filters",'woocommerce')}))))},V=Object(d.withSpokenMessages)(e=>{let{attributes:t,setAttributes:c}=e;const{className:n,displayStyle:r,heading:a,headingLevel:s}=t;return Object(l.createElement)("div",{className:n},Object(l.createElement)(m.InspectorControls,{key:"inspector"},Object(l.createElement)(d.PanelBody,{title:Object(o.__)("Block Settings",'woocommerce')},Object(l.createElement)(g.a,{label:Object(o.__)("Display Style",'woocommerce'),value:r,options:[{label:Object(o.__)("List",'woocommerce'),value:"list"},{
/* translators: "Chips" is a tag-like display style for chosen attributes. */
label:Object(o.__)("Chips",'woocommerce'),value:"chips"}],onChange:e=>c({displayStyle:e})}),Object(l.createElement)("p",null,Object(o.__)("Heading Level",'woocommerce')),Object(l.createElement)(h.a,{isCollapsed:!1,minLevel:2,maxLevel:7,selectedLevel:s,onChange:e=>c({headingLevel:e})}))),Object(l.createElement)(O.a,{className:"wc-block-active-filters__title",headingLevel:s,heading:a,onChange:e=>c({heading:e})}),Object(l.createElement)(d.Disabled,null,Object(l.createElement)(L,{attributes:t,isEditor:!0})))});Object(a.registerBlockType)("woocommerce/active-filters",{title:Object(o.__)("Active Product Filters",'woocommerce'),icon:{src:Object(l.createElement)(s.a,{srcElement:u}),foreground:"#7f54b3"},category:"woocommerce",keywords:[Object(o.__)("WooCommerce",'woocommerce')],description:Object(o.__)("Show the currently active product filters. Works in combination with the All Products and filters blocks.",'woocommerce'),supports:{html:!1,multiple:!1},example:{attributes:{}},attributes:{displayStyle:{type:"string",default:"list"},heading:{type:"string",default:Object(o.__)("Active filters",'woocommerce')},headingLevel:{type:"number",default:3}},edit:V,save(e){let{attributes:t}=e;const{className:c,displayStyle:n,heading:o,headingLevel:a}=t,s={"data-display-style":n,"data-heading":o,"data-heading-level":a};return Object(l.createElement)("div",r()({className:p()("is-loading",c)},s),Object(l.createElement)("span",{"aria-hidden":!0,className:"wc-block-active-product-filters__placeholder"}))}})},9:function(e,t){e.exports=window.wp.blockEditor}});