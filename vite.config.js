import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/filament.css',
                'resources/filament/css/app.css',
                'resources/filament/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
                'app/Forms/Components/**',
            ],
        }),
    ],
})
