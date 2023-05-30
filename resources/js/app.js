import './bootstrap';
import '~resources/scss/app.scss';
import.meta.glob([
    '../img/**'
])

import { modalFeature } from './modal';
modalFeature()
