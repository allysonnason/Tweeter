/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('gif-component', require('./components/GifComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

jQuery(document).ready(function() {
jQuery('.follow').click(function(){
  jQuery.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
    var id = $(this).data('id');
    console.log(id);
    var reference= $(this);
    jQuery.ajax({
       type:'POST',
       url:'/toggle',
       data:{user_id:id},
       success:function(data){
          if(jQuery.isEmptyObject(data.success.attached)){
            reference.find("strong").text("Follow");
          }else{
            reference.find("strong").text("UnFollow");
          }
       }
    });
});
});
