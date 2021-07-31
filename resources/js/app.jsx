import 'vite/dynamic-import-polyfill';
import '../css/app.css';
import './bootstrap'

// Import modules...
import React from 'react';
import { render } from 'react-dom';
import { App } from '@inertiajs/inertia-react';
import { InertiaProgress } from '@inertiajs/progress';

const el = document.getElementById('app');

render(
    <App initialPage={JSON.parse(el.dataset.page)} resolveComponent={async (name) => {
        return (await import(`./Pages/${name}.jsx`)).default
    }} />,
    el
);

InertiaProgress.init({ color: '#4B5563' });
