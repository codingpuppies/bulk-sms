
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/*Auth components*/
Vue.component('login-component', require('./components/auth/LoginComponent.vue'));
Vue.component('register-component', require('./components/auth/RegisterComponent.vue'));
Vue.component('forgot-password-component', require('./components/auth/ForgotPasswordComponent.vue'));
Vue.component('reset-password-component', require('./components/auth/ResetPasswordComponent.vue'));

/* Dashboard Components */
Vue.component('summary-count', require('./components/dashboard/SummaryCountComponent.vue'));
Vue.component('summary-scheduled-sms', require('./components/dashboard/SummaryScheduledSmsComponent.vue'));
Vue.component('summary-stats', require('./components/dashboard/SummaryStatsComponent.vue'));

/*Inbox*/
Vue.component('inbox-sidebar', require('./components/inbox/InboxSidebarComponent.vue'));
Vue.component('inbox-compose', require('./components/inbox/InboxComposeComponent.vue'));
Vue.component('inbox-message-list', require('./components/inbox/InboxMessagesComponent.vue'));
Vue.component('inbox-message-view', require('./components/inbox/InboxMessageDetailsComponent.vue'));

/*Phonebook*/
Vue.component('phonebook-sidebar', require('./components/phonebook/PhonebookSidebarComponent.vue'));
Vue.component('phonebook-contacts', require('./components/phonebook/PhonebookContactsComponent.vue'));
Vue.component('phonebook-contact-details', require('./components/phonebook/PhonebookContactDetailsComponent.vue'));
Vue.component('phonebook-create', require('./components/phonebook/PhonebookNewContactComponent.vue'));

/*Schedules*/
Vue.component('schedules-sidebar', require('./components/schedules/SchedulesSidebarComponent.vue'));
Vue.component('schedules-list', require('./components/schedules/SchedulesComponent.vue'));
Vue.component('schedule-details', require('./components/schedules/ScheduleDetailsComponent.vue'));
Vue.component('schedule-create', require('./components/schedules/SchedulesNewScheduleComponent.vue'));

/*Reports*/
Vue.component('reports-sidebar', require('./components/reports/ReportsSidebarComponent.vue'));
Vue.component('reports-list', require('./components/reports/ReportsComponent.vue'));
Vue.component('reports-details', require('./components/reports/ReportsDetailsComponent.vue'));

/*Settings*/

Vue.component('settings-sidebar', require('./components/settings/SettingsSidebarComponent.vue'));
Vue.component('settings-personal', require('./components/settings/SettingsPersonalComponent.vue'));
Vue.component('settings-sms', require('./components/settings/SettingsSmsDetailsComponent.vue'));

Vue.component('all-users', require('./components/DataTableVue.vue'));

import swal from 'sweetalert2';
window.Fire = new Vue();

const app = new Vue({
    el: '#app'
});
