webpackJsonp([6],{158:function(e,o,t){function i(e){t(182)}var r=t(9)(t(184),t(185),i,"data-v-8cdf0a34",null);e.exports=r.exports},182:function(e,o,t){var i=t(183);"string"==typeof i&&(i=[[e.i,i,""]]),i.locals&&(e.exports=i.locals);t(17)("eb817a36",i,!0)},183:function(e,o,t){o=e.exports=t(7)(),o.push([e.i,".nameWidth[data-v-8cdf0a34]{width:22%}",""])},184:function(e,o,t){"use strict";Object.defineProperty(o,"__esModule",{value:!0}),o.default={data:function(){return{infoData:{groups:[],positions:[]},form:{name:"",sex:"0",grouping:"",email:"",tel:"",position:[]},rules:{name:[{required:!0,message:"请输入姓名"},{min:2,max:4,message:"请输入正确的姓名"}],sex:[{required:!0,message:"请输选择性别"}],grouping:[{required:!0,message:"请选择分组"}],position:[{type:"array",required:!0,message:"请选择职务"}],tel:[{required:!0,message:"请输入手机号"},{validator:function(e,o,t){if(!/^1[34578]\d{9}$/.test(o))return t(new Error("请输入正确的手机号"));t()},message:"请输入正确的手机号"}],email:[{required:!0,message:"请输入邮箱"},{type:"email",message:"请输入正确的邮箱"}]}}},methods:{onSubmit:function(e){var o=this;this.$refs[e].validate(function(e){if(!e)return!1;o.$loading();var t=o.form;axios.post("/admin/user/edit",{id:o.$route.params.id,name:t.name,sex:t.sex,grouping_id:t.grouping,positions:t.position,tel:t.tel,email:t.email}).then(function(e){o.$loading().close();var t=e.data;1===parseInt(t.code)?(o.$message({message:t.msg,type:"success"}),o.$router.push("/user/list")):o.$message({message:t.msg,type:"warning"})}).catch(function(e){})})},info:function(){var e=this;axios.get("/admin/user/edit/info",{params:{id:this.$route.params.id}}).then(function(o){var t=o.data;e.infoData.groups=t.groups,e.infoData.positions=t.positions,e.form.name=t.user.name,e.form.sex=t.user.sex.toString(),e.form.grouping=t.user.grouping_id,e.form.tel=t.user.tel,e.form.email=t.user.email;for(var i in t.user.positions)e.form.position.push(t.user.positions[i].id)}).catch(function(e){})}},mounted:function(){this.info()}}},185:function(e,o){e.exports={render:function(){var e=this,o=e.$createElement,t=e._self._c||o;return t("div",[t("el-form",{ref:"form",attrs:{rules:e.rules,model:e.form,"label-width":"80px"}},[t("el-form-item",{attrs:{label:"姓名",prop:"name"}},[t("el-input",{staticClass:"nameWidth",model:{value:e.form.name,callback:function(o){e.form.name=o},expression:"form.name"}})],1),e._v(" "),t("el-form-item",{attrs:{label:"性别",prop:"sex"}},[t("el-radio-group",{model:{value:e.form.sex,callback:function(o){e.form.sex=o},expression:"form.sex"}},[t("el-radio",{attrs:{label:"0"}},[e._v("男")]),e._v(" "),t("el-radio",{attrs:{label:"1"}},[e._v("女")])],1)],1),e._v(" "),t("el-form-item",{attrs:{label:"分组",prop:"grouping"}},[t("el-select",{attrs:{placeholder:"请选择分组"},model:{value:e.form.grouping,callback:function(o){e.form.grouping=o},expression:"form.grouping"}},e._l(e.infoData.groups,function(e){return t("el-option",{key:e.id,attrs:{label:e.name,value:e.id}})}))],1),e._v(" "),t("el-form-item",{attrs:{label:"职务",prop:"position"}},[t("el-checkbox-group",{model:{value:e.form.position,callback:function(o){e.form.position=o},expression:"form.position"}},e._l(e.infoData.positions,function(o){return t("el-checkbox",{key:o.id,attrs:{label:o.id,value:o.id,name:"type"}},[e._v(e._s(o.name))])}))],1),e._v(" "),t("el-form-item",{attrs:{label:"电话",prop:"tel"}},[t("el-input",{staticClass:"nameWidth",model:{value:e.form.tel,callback:function(o){e.form.tel=o},expression:"form.tel"}})],1),e._v(" "),t("el-form-item",{attrs:{label:"邮箱",prop:"email"}},[t("el-input",{staticClass:"nameWidth",model:{value:e.form.email,callback:function(o){e.form.email=o},expression:"form.email"}})],1),e._v(" "),t("el-form-item",[t("el-button",{attrs:{type:"primary"},on:{click:function(o){e.onSubmit("form")}}},[e._v("保存")]),e._v(" "),t("el-button",[e._v("取消")])],1)],1)],1)},staticRenderFns:[]}}});