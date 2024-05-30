import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css', // Ensure this file exists
        'resources/js/app.js',   // Ensure this file exists
      ],
      refresh: true,
    }),
  ],
});
