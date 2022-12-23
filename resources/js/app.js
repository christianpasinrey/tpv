import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
const vuetify = createVuetify({
    components,
    directives,
    themes: {
        light: {
            primary: '#4B5563',
            secondary: '#374151',
            accent: '#9CA3AF',
            error: '#F87171',
            info: '#60A5FA',
            success: '#34D399',
            warning: '#FBBF24',
        },
        dark: {
            primary: '#FFFFFFFF',
            secondary: '#B3FFFFFF',
            accent: '#80FFFFFF',
            error: '#F87171',
            info: '#60A5FA',
            dividers: '#1FFFFFFF',
            success: '#34D399',
            warning: '#FBBF24',
        },
    }
})
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(vuetify)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
