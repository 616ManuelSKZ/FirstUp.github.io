var frontend_block_horizontal_scroller;(()=>{"use strict";var e,t={};(e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(t),window.stackableHorizontalScroller=new class{init=()=>{const e=document.querySelectorAll(".stk-block-horizontal-scroller > .stk-block-content");let t=null,o=0,n=0;e.forEach((e=>{if(e._StackableHasInitHorizontalScroller)return;const l=e.querySelectorAll(".stk-block-link, a");e.querySelectorAll("img").forEach((e=>{e.draggable=!1}));const r=function(e){e.preventDefault(),e.stopPropagation()},c=function(t){const c=t.clientX-n;e.scrollTo({left:o-c}),t.preventDefault(),l.forEach((e=>{e.addEventListener("click",r,!0)}))},a=function(){document.body.removeEventListener("mousemove",c),document.body.removeEventListener("mouseup",a),e.style.cursor="";const o=e.scrollLeft;e.classList.remove("stk--snapping-deactivated");const n=e.scrollLeft;e.classList.add("stk--snapping-deactivated"),e.scrollLeft=o,e.scrollTo({left:n,behavior:"smooth"}),t=setTimeout((()=>{e.classList.remove("stk--snapping-deactivated"),l.forEach((e=>{e.removeEventListener("click",r,!0)}))}),500)};e.addEventListener("mousedown",(function(l){e.style.cursor="grabbing",clearTimeout(t),e.classList.add("stk--snapping-deactivated"),o=e.scrollLeft,n=l.clientX,document.body.addEventListener("mousemove",c),document.body.addEventListener("mouseup",a)})),e._StackableHasInitHorizontalScroller=!0}))}},e=window.stackableHorizontalScroller.init,"undefined"!=typeof document&&("complete"!==document.readyState&&"interactive"!==document.readyState?document.addEventListener("DOMContentLoaded",e):e()),frontend_block_horizontal_scroller=t})();