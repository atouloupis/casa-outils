"use strict";var _createClass=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}(),_get=function e(t,n,i){null===t&&(t=Function.prototype);var o=Object.getOwnPropertyDescriptor(t,n);if(void 0===o){var r=Object.getPrototypeOf(t);return null===r?void 0:e(r,n,i)}if("value"in o)return o.value;var s=o.get;return void 0!==s?s.call(i):void 0};function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function _possibleConstructorReturn(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function _inherits(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}!function(n,i){n.Flip=function(e){function t(){return _classCallCheck(this,t),_possibleConstructorReturn(this,(t.__proto__||Object.getPrototypeOf(t)).apply(this,arguments))}return _inherits(t,n.Quiz),_createClass(t,[{key:"parseQuestion",value:function(e){return(e=_get(t.prototype.__proto__||Object.getPrototypeOf(t.prototype),"parseQuestion",this).call(this,e)).color||(e.color=this.store.defaultQuestion.color),e}},{key:"getQuestionTmplData",value:function(e,t){return{question:e,baseName:this.questionsBaseName,index:t,listType:this.store.settings.list_type||"",i18n:n.i18n}}},{key:"loadEvents",value:function(){_get(t.prototype.__proto__||Object.getPrototypeOf(t.prototype),"loadEvents",this).call(this),this.$wrapper.on("click",".wp-quiz-question-flip-back-btn",function(e){e.preventDefault(),i(this).addClass("is-active"),i(this).prev().removeClass("is-active"),i(this).closest(".wp-quiz-question").find(".wp-quiz-question-flip-container").addClass("is-flipped")}),this.$wrapper.on("click",".wp-quiz-question-flip-front-btn",function(e){e.preventDefault(),i(this).addClass("is-active"),i(this).next().removeClass("is-active"),i(this).closest(".wp-quiz-question").find(".wp-quiz-question-flip-container").removeClass("is-flipped")})}},{key:"name",get:function(){return"flip"}},{key:"answerSortable",get:function(){return!1}},{key:"resultSortable",get:function(){return!1}},{key:"videoUpload",get:function(){return!1}},{key:"questionMediaType",get:function(){return!1}},{key:"answerType",get:function(){return!1}}]),t}(),i(document).ready(function(){i('.wp-quiz-backend[data-type="flip"]').each(function(){new n.Flip(i(this))})})}(wpQuizAdmin,jQuery);