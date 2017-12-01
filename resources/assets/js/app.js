
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./material.min');
require('./nouislider.min');
require('./material-kit');

window.Vue = require('vue');
window.Dropzone = require('dropzone');

Dropzone.options.upload = {
    init: function() {
        this.on("success", function(file, response) { $('.shorturl').text(response); });
    }
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
