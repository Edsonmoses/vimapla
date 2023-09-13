(()=>{"use strict";const e=function(e,t,s,a,o,r,n,l){var i,u="function"==typeof e?e.options:e;if(t&&(u.render=t,u.staticRenderFns=[],u._compiled=!0),i)if(u.functional){u._injectStyles=i;var c=u.render;u.render=function(e,t){return i.call(t),c(e,t)}}else{var d=u.beforeCreate;u.beforeCreate=d?[].concat(d,i):[i]}return{exports:e,options:u}}({name:"WholesaleCustomer",components:{ListTable:dokan_get_lib("ListTable"),Switches:dokan_get_lib("Switches"),Search:dokan_get_lib("Search"),AdminNotice:dokan_get_lib("AdminNotice")},data(){return{showCb:!0,counts:{deactive:0,active:0,all:0},totalItems:0,perPage:20,totalPages:1,loading:!1,columns:{full_name:{label:this.__("Name","dokan")},email:{label:this.__("E-mail","dokan")},username:{label:this.__("Username","dokan")},role:{label:this.__("Roles","dokan")},registered:{label:this.__("Registered","dokan"),sortable:!0},wholesale_status:{label:this.__("Status","dokan")}},actionColumn:"full_name",actions:[{key:"edit",label:this.__("Edit","dokan")},{key:"orders",label:this.__("Orders","dokan")},{key:"delete",label:this.__("Remove","dokan")}],bulkActions:[{key:"activate",label:this.__("Active","dokan")},{key:"deactivate",label:this.__("Deactive","dokan")}],customers:[]}},watch:{"$route.query.status"(){this.fetchWholesaleCustomers()},"$route.query.page"(){this.fetchWholesaleCustomers()},"$route.query.orderby"(){this.fetchWholesaleCustomers()},"$route.query.order"(){this.fetchWholesaleCustomers()}},computed:{currentStatus(){return this.$route.query.status||"all"},currentPage(){let e=this.$route.query.page||1;return parseInt(e)},sortBy(){return this.$route.query.orderby||"registered"},sortOrder(){return this.$route.query.order||"desc"}},created(){this.fetchWholesaleCustomers()},methods:{getFullName:e=>e.first_name+" "+e.last_name,doSearch(e){let t=this;t.loading=!0,dokan.api.get(`/wholesale/customers/?search=${e}`,{page:this.currentPage,orderby:this.sortBy,order:this.sortOrder}).done(((e,s,a)=>{t.customers=e,t.loading=!1,this.updatePagination(a)}))},updatedCounts(e){this.counts.deactive=parseInt(e.getResponseHeader("X-Status-Deactive")),this.counts.active=parseInt(e.getResponseHeader("X-Status-Active")),this.counts.all=parseInt(e.getResponseHeader("X-Status-All"))},updatePagination(e){this.totalPages=parseInt(e.getResponseHeader("X-WP-TotalPages")),this.totalItems=parseInt(e.getResponseHeader("X-WP-Total"))},fetchWholesaleCustomers(){let e=this;e.loading=!0,dokan.api.get("/wholesale/customers",{per_page:this.perPage,page:this.currentPage,status:this.currentStatus,orderby:this.sortBy,order:this.sortOrder}).done(((t,s,a)=>{e.customers=t,e.loading=!1,this.updatedCounts(a),this.updatePagination(a)}))},onActionClick(e,t){"delete"===e&&confirm("Are you sure to delete?")&&dokan.api.put("/wholesale/customer/"+t.id,{status:"delete"}).done((e=>{this.$notify({title:this.__("Success!","dokan"),type:"success",text:this.__("Successfully removed from wholesale customer lists","dokan")}),this.fetchWholesaleCustomers()}))},onSwitch(e,t){let s=!1===e?this.__("The customer has been disabled for wholesale.","dokan"):this.__("Wholesale capability activate","dokan");dokan.api.put("/wholesale/customer/"+t,{status:!1===e?"deactivate":"activate"}).done((e=>{this.$notify({title:this.__("Success!","dokan"),type:"success",text:s}),this.fetchWholesaleCustomers()}))},moment:e=>moment(e),goToPage(e){this.$router.push({name:"WholesaleCustomer",query:{status:this.currentStatus,page:e}})},onBulkAction(e,t){let s={};s[e]=t,this.loading=!0,dokan.api.put("/wholesale/customers/batch",s).done((e=>{this.bulkLocal=-1,this.checkedItems=[],this.loading=!1,this.fetchWholesaleCustomers()}))},sortCallback(e,t){this.$router.push({name:"WholesaleCustomer",query:{status:this.currentStatus,page:1,orderby:e,order:t}})},ordersUrl:e=>dokan.urls.adminRoot+"edit.php?post_type=shop_order&_customer_user="+e,editUrl:e=>dokan.urls.adminRoot+"user-edit.php?user_id="+e}},(function(){var e=this,t=e._self._c;return t("div",{staticClass:"wholesale-customer-list"},[t("h1",{staticClass:"wp-heading-inline"},[e._v(e._s(e.__("Wholesale Customers","dokan")))]),e._v(" "),t("AdminNotice"),e._v(" "),t("hr",{staticClass:"wp-header-end"}),e._v(" "),t("ul",{staticClass:"subsubsub"},[t("li",[t("router-link",{attrs:{to:{name:"WholesaleCustomer",query:{status:"all"}},"active-class":"current",exact:""},domProps:{innerHTML:e._s(e.sprintf(e.__("All <span class='count'>(%s)</span>","dokan"),e.counts.all))}}),e._v(" | ")],1),e._v(" "),t("li",[t("router-link",{attrs:{to:{name:"WholesaleCustomer",query:{status:"active"}},"active-class":"current",exact:""},domProps:{innerHTML:e._s(e.sprintf(e.__("Active <span class='count'>(%s)</span>","dokan"),e.counts.active))}}),e._v(" | ")],1),e._v(" "),t("li",[t("router-link",{attrs:{to:{name:"WholesaleCustomer",query:{status:"deactive"}},"active-class":"current",exact:""},domProps:{innerHTML:e._s(e.sprintf(e.__("Deactive <span class='count'>(%s)</span>","dokan"),e.counts.deactive))}})],1)]),e._v(" "),t("search",{attrs:{title:"Search Customer"},on:{searched:e.doSearch}}),e._v(" "),t("list-table",{attrs:{columns:e.columns,loading:e.loading,rows:e.customers,actions:e.actions,actionColumn:"full_name","show-cb":e.showCb,"total-items":e.totalItems,"bulk-actions":e.bulkActions,"total-pages":e.totalPages,"per-page":e.perPage,"current-page":e.currentPage,"action-column":e.actionColumn,text:e.$root.listTableTexts(),"not-found":"No customers found.","sort-by":e.sortBy,"sort-order":e.sortOrder},on:{sort:e.sortCallback,pagination:e.goToPage,"bulk:click":e.onBulkAction,searched:e.doSearch},scopedSlots:e._u([{key:"full_name",fn:function(s){return[t("img",{attrs:{src:s.row.avatar,alt:e.getFullName(s.row),width:"50"}}),e._v(" "),t("strong",[t("a",{attrs:{href:e.editUrl(s.row.id)}},[e._v(e._s(e.getFullName(s.row)?e.getFullName(s.row):e.__("(no name)","dokan")))])])]}},{key:"email",fn:function(s){return[t("a",{attrs:{href:"mailto:"+s.row.email}},[e._v(e._s(s.row.email))])]}},{key:"registered",fn:function(t){return[e._v("\n            "+e._s(e.moment(t.row.registered).format("MMM D, YYYY"))+"\n        ")]}},{key:"wholesale_status",fn:function(s){return[t("switches",{attrs:{enabled:"active"==s.row.wholesale_status,value:s.row.id},on:{input:e.onSwitch}})]}},{key:"row-actions",fn:function(s){return e._l(e.actions,(function(a,o){return t("span",{class:a.key},["edit"==a.key?t("a",{attrs:{href:e.editUrl(s.row.id)}},[e._v(e._s(a.label))]):"orders"==a.key?t("a",{attrs:{href:e.ordersUrl(s.row.id)}},[e._v(e._s(a.label))]):t("a",{attrs:{href:"#"},on:{click:function(t){return t.preventDefault(),e.onActionClick(a.key,s.row)}}},[e._v(e._s(a.label))]),e._v(" "),o!==e.actions.length-1?[e._v(" | ")]:e._e()],2)}))}}])})],1)})).exports;dokan_add_route(e)})();