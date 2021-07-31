import reactRefresh from '@vitejs/plugin-react-refresh';
import { resolve } from 'path';

/**
 * @type {import('vite').UserConfig}
 */
export default ({ command }) => ({
    base: command === 'serve' ? '' : '/dist/',
    publicDir: 'fake_dir_so_nothing_gets_copied',
    build: {
        manifest: true,
        outDir: 'public/dist',
        rollupOptions: {
            input: 'resources/js/app.jsx',
        },
    },
    resolve: {
        alias: {
            '@': resolve('./resources/js')
        },
    },
    plugins: [
        reactRefresh()
    ],
});
