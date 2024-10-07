import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';


export default defineConfig({
  build: {
    chunkSizeWarningLimit: 800
  },
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/scss/style.scss', 'resources/scss/dashboard/style.scss',
        'resources/js/dashboard/app.js', 'resources/js/main.min.js', 'resources/views/user/profile/src/main.jsx'],
      refresh: true,
    }),
    react(),
  ],
});
