(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[26],{216:function(e,t){},261:function(e,t,a){"use strict";a.d(t,"b",(function(){return u})),a.d(t,"a",(function(){return m}));var s=a(4),i=a.n(s),n=(a(8),a(0)),c=a(25),r=a(7),o=a.n(r),l=Object(n.createContext)({hasContainerWidth:!1,containerClassName:"",isMobile:!1,isSmall:!1,isMedium:!1,isLarge:!1}),u=function(){return Object(n.useContext)(l)},m=function(e){var t=e.children,a=e.className,s=void 0===a?"":a,n=function(){var e=Object(c.useResizeObserver)(),t=i()(e,2),a=t[0],s=t[1].width,n="";return s>700?n="is-large":s>520?n="is-medium":s>400?n="is-small":s&&(n="is-mobile"),[a,n]}(),r=i()(n,2),u=r[0],m=r[1],d={hasContainerWidth:""!==m,containerClassName:m,isMobile:"is-mobile"===m,isSmall:"is-small"===m,isMedium:"is-medium"===m,isLarge:"is-large"===m};return React.createElement(l.Provider,{value:d},React.createElement("div",{className:o()(s,m)},u,t))}},270:function(e,t,a){"use strict";var s=a(7),i=a.n(s),n=(a(8),a(261));a(216),t.a=function(e){var t=e.children,a=e.className;return React.createElement(n.a,{className:i()("wc-block-components-sidebar-layout",a)},t)}},381:function(e,t,a){"use strict";a.r(t);var s=a(7),i=a.n(s),n=a(270),c=a(33),r=a(51),o=a(0),l=a(32),u=a(182);t.default=function(e){var t=e.children,a=e.className,s=Object(c.a)(),m=s.cartItems,d=s.cartIsLoading,b=s.cartItemErrors,f=Object(u.b)().hasDarkControls,h=Object(r.a)().addErrorNotice;return Object(o.useEffect)((function(){b.forEach((function(e){h(Object(l.decodeEntities)(e.message),{isDismissible:!0,id:e.code})}))}),[h,b]),d||m.length>=1?React.createElement(n.a,{className:i()("wc-block-cart",a,{"has-dark-controls":f})},t):null}}}]);