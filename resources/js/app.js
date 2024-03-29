import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Mainlayouts from '@/layouts/Mainlayouts.vue'
import { ZiggyVue } from 'ziggy';
import { Ziggy } from './ziggy';
import '../css/app.css';


createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page =  pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || Mainlayouts
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue,Ziggy)
      .mount(el)
  },
})