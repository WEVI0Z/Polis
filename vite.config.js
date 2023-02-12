import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app/app.js",
                "resources/js/app/error.js",
                "resources/js/app/alerts.js",
                "resources/js/user/register.js",
                "resources/js/user/login.js",
                "resources/js/user/client/personal.js",
                "resources/js/user/client/new.js",
            ],
            refresh: true,
        }),
    ],
});
