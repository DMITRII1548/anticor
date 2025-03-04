import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/reset.css', 
                'resources/css/base.css',
                'resources/css/form.css', 
                'resources/css/thanks.css', 

                'resources/css/header.css',
                'resources/css/wellcome.css',
                'resources/css/info.css',
                'resources/css/info_more.css',
                'resources/css/company.css',
                'resources/css/footer.css',
                
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
