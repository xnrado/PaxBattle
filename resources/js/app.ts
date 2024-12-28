import './bootstrap';
import 'flowbite';
import './battle/map';
import './echo';
import sort from '@alpinejs/sort';
import collapse from '@alpinejs/collapse';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

Alpine.plugin(sort);
Alpine.plugin(collapse);



Livewire.start()
