import '../css/app.css';
import './bootstrap'

// Import modules...
import React from 'react';
import { render } from 'react-dom';
import { App } from '@inertiajs/inertia-react';
import { InertiaProgress } from '@inertiajs/progress';

const modules = import.meta.glob('./Pages/**/*.jsx');

const el = document.getElementById('app');

render(
    <App initialPage={JSON.parse(el.dataset.page)} resolveComponent={async (name) => {
        const page = Object.keys(modules).find(x => x.replace('./Pages/', '').indexOf(name) != -1);
        return (await (modules[page])()).default
    }} />,
    el
);

InertiaProgress.init({ color: '#4B5563' });
