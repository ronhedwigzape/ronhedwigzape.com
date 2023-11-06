import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { plugin as FKp, defaultConfig } from '@formkit/vue';
import { createProPlugin, inputs } from '@formkit/pro';
import config from '../../formkit.config.js';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const pro = createProPlugin('fk-3aaac50823', inputs);

createInertiaApp({
    title: (title) => `${title}${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(FKp, defaultConfig({ plugins: [pro], ...config }))
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
