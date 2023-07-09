import './bootstrap';
import 'laravel-datatables-vite';

import $ from 'jquery';
import select2 from "select2";
import dropzone from "dropzone";
import Alpine from 'alpinejs';

window.$ = $;
window.select2 = select2;

window.Alpine = Alpine;

Alpine.start();
