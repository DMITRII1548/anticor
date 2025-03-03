import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/reset.css', 
                'resources/css/base.css',
                'resources/css/form.css', 
                'resources/css/thanks.css', 
                
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
