/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
window.Vue = require('vue');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With']='XMLHttpRequest'; 

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('almacen-component', require('./components/AlmacenComponent.vue').default);

/*SE CREAN COMPONENTES PARA LLAMARLOS EN OTRO MOMENTO*/ 
Vue.component('categoria', require('./components/Categoria.vue').default);
Vue.component('articulo', require('./components/Articulo.vue').default);
Vue.component('cliente-component', require('./components/Cliente.vue').default);
Vue.component('proveedor-component', require('./components/Proveedor.vue').default);
Vue.component('rol-component', require('./components/Rol.vue').default);
Vue.component('user-component', require('./components/User.vue').default);
Vue.component('ingreso-component', require('./components/Ingreso.vue').default);
Vue.component('venta-component', require('./components/Venta.vue').default);
Vue.component('dashboard-component', require('./components/Dashboard.vue').default);
Vue.component('consultaingreso-component', require('./components/ConsultaIngreso.vue').default);
Vue.component('consultaventa-component', require('./components/ConsultaVenta.vue').default);
Vue.component('ayuda-component', require('./components/Ayuda.vue').default);
Vue.component('acerca-component', require('./components/Acerca.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
    	menu: 0,
    	ruta: 'http://jasegura.me:8080'
    }
});
