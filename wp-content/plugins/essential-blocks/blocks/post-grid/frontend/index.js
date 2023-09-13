!function(){"use strict";var e={n:function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,{a:n}),n},d:function(t,n){for(var a in n)e.o(n,a)&&!e.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:n[a]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},t=window.wp.apiFetch,n=e.n(t);function a(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,a=new Array(t);n<t;n++)a[n]=e[n];return a}window.wp.data;var r=!!EssentialBlocksLocalize&&EssentialBlocksLocalize.rest_rootURL;function o(e){if(document.getElementsByClassName("ebpg-pagination").length>0){var t=document.querySelectorAll(".ebpg-pagination button");t.length>0&&(document.querySelectorAll(".ebpg-pagination").forEach((function(e){s(e)})),t.forEach((function(t){var a=1;t.addEventListener("click",(function(){var t=this,r=i(this,"ebpg-pagination-button"),o=i(this,"ebpg-pagination-item-previous"),l=i(this,"ebpg-pagination-item-next");a=r?parseInt(a)+1:o?parseInt(c(this))-1:l?parseInt(c(this))+1:parseInt(this.dataset.pagenumber);var p=this.closest(".eb-post-grid-wrapper");if(p){var u=p.dataset,g=e||"";n()({path:"essential-blocks/v1/queries?query_data=".concat(u.querydata,"&attributes=").concat(u.attributes).concat(g,"&pageNumber=").concat(a)}).then((function(e){r?e?t.closest(".ebpg-pagination").insertAdjacentHTML("beforebegin",e):(t.closest(".ebpg-pagination").insertAdjacentHTML("beforebegin",'<p class="eb-no-posts">No more Posts</p>'),t.closest(".ebpg-pagination").innerHTML=""):(t.closest(".eb-post-grid-wrapper").querySelectorAll(".ebpg-grid-post").forEach((function(e){e.remove()})),t.closest(".ebpg-pagination").insertAdjacentHTML("beforebegin",e),i(t,"ebpg-pagination-item")&&(t.closest(".ebpg-pagination").querySelectorAll(".ebpg-pagination-item").forEach((function(e){e.classList.remove("active")})),t.classList.add("active")),s(t.closest(".ebpg-pagination")))}))}}))})))}}function i(e,t){return new RegExp("(\\s|^)"+t+"(\\s|$)").test(e.className)}function s(e){var t=e.querySelector(".ebpg-pagination-item.active");if(t){var n=parseInt(t.dataset.pagenumber),a=e.querySelectorAll(".ebpg-pagination-item"),r=a.length,o=1;a.forEach((function(e){o=parseInt(e.dataset.pagenumber),function(e){e.classList.remove("show"),e.classList.add("hide")}(e),(1===n&&o<=3||o>=n&&o<=n+2||o===r||1===o&&(n>=r-2||n>=4))&&function(e){e.classList.remove("hide"),e.classList.add("show")}(e)}));var i=e.querySelectorAll(".ebpg-pagination-item-separator");i.length>0&&i.forEach((function(e){e.remove()}));var s='<button class="ebpg-pagination-item-separator">...</button>';n<a.length-2&&a[a.length-1].insertAdjacentHTML("beforebegin",s),(n>=r-2||r>4&&n>=4)&&a[1].insertAdjacentHTML("afterend",s),1===n?(e.querySelector(".ebpg-pagination-item-previous").disabled=!0,e.querySelector(".ebpg-pagination-item-next").disabled=!1):n===r?(e.querySelector(".ebpg-pagination-item-previous").disabled=!1,e.querySelector(".ebpg-pagination-item-next").disabled=!0):(e.querySelector(".ebpg-pagination-item-previous").disabled=!1,e.querySelector(".ebpg-pagination-item-next").disabled=!1)}}function c(e){var t=1,n=e.closest(".ebpg-pagination").querySelector(".ebpg-pagination-item.active");if(n){if(t=n.dataset?n.dataset.pagenumber:1,i(e,"ebpg-pagination-item-next")){for(var a=n.nextElementSibling;a&&!a.classList.contains("ebpg-pagination-item");)a=a.nextElementSibling;a.classList.add("active"),n.classList.remove("active")}else if(i(e,"ebpg-pagination-item-previous")){for(var r=n.previousElementSibling;r&&!r.classList.contains("ebpg-pagination-item");)r=r.previousElementSibling;r.classList.add("active"),n.classList.remove("active")}s(e.closest(".ebpg-pagination"))}return t}n().use(n().createRootURLMiddleware(r)),window.addEventListener("DOMContentLoaded",(function(){o("")})),window.addEventListener("DOMContentLoaded",(function(e){var t,r=function(e,t){var n="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!n){if(Array.isArray(e)||(n=function(e,t){if(e){if("string"==typeof e)return a(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?a(e,t):void 0}}(e))||t&&e&&"number"==typeof e.length){n&&(e=n);var r=0,o=function(){};return{s:o,n:function(){return r>=e.length?{done:!0}:{done:!1,value:e[r++]}},e:function(e){throw e},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,s=!0,c=!1;return{s:function(){n=n.call(e)},n:function(){var e=n.next();return s=e.done,e},e:function(e){c=!0,i=e},f:function(){try{s||null==n.return||n.return()}finally{if(c)throw i}}}}(document.getElementsByClassName("eb-post-grid-category-filter"));try{var i=function(){var e=t.value,a=e.dataset.ebpgtaxonomy;e.querySelectorAll(".ebpg-category-filter-list li").forEach((function(e){"all"===e.dataset.ebpgcategory&&e.classList.add("active"),e.addEventListener("click",(function(e){var t,r=this,i=e.target.getAttribute("data-ebpgCategory");t="all"===i?"&query_type=filter":"&taxonomy=".concat(a,"&category=").concat(i);var s=this.closest(".eb-post-grid-wrapper").dataset;n()({path:"essential-blocks/v1/queries?query_data=".concat(s.querydata,"&attributes=").concat(s.attributes).concat(t),parse:!1}).then((function(e){var a=e.headers.get("X-WP-Total");if(a){var i=new FormData;i.append("action","post_grid_block_pagination"),i.append("post_grid_pagination_nonce",EssentialBlocksLocalize.post_grid_pagination_nonce),i.append("querydata",null==s?void 0:s.querydata),i.append("attributes",null==s?void 0:s.attributes),i.append("totalPosts",a),fetch(EssentialBlocksLocalize.ajax_url,{method:"POST",body:i}).then((function(e){return e.text()})).then((function(e){r.closest(".eb-post-grid-wrapper").querySelector(".ebpg-pagination").innerHTML=e,o(t)})).catch((function(e){return console.log(e)})),n()({path:"essential-blocks/v1/queries?query_data=".concat(s.querydata,"&attributes=").concat(s.attributes).concat(t)}).then((function(e){r.closest(".eb-post-grid-wrapper").querySelectorAll(".ebpg-grid-post").forEach((function(e){e.remove()})),r.closest(".eb-post-grid-wrapper").querySelector("p")&&r.closest(".eb-post-grid-wrapper").querySelector("p").remove(),r.closest(".eb-post-grid-category-filter").insertAdjacentHTML("afterend",e),r.closest(".eb-post-grid-category-filter").querySelectorAll(".ebpg-category-filter-list-item").forEach((function(e){e.classList.remove("active")})),r.classList.add("active")}))}else r.closest(".eb-post-grid-wrapper").querySelectorAll(".ebpg-grid-post").forEach((function(e){e.remove()})),r.closest(".eb-post-grid-wrapper").querySelector(".ebpg-pagination").innerHTML="",r.closest(".eb-post-grid-wrapper").querySelector("p")&&r.closest(".eb-post-grid-wrapper").querySelectorAll("p").forEach((function(e){e.remove()})),r.closest(".eb-post-grid-wrapper").insertAdjacentHTML("beforeend","<p>No Posts Found</p>")}),(function(e){console.log("error",e)}))}))}))};for(r.s();!(t=r.n()).done;)i()}catch(e){r.e(e)}finally{r.f()}}))}();