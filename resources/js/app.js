import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss'
import * as bootstrap from 'bootstrap'


// precompilazione immagini
import.meta.glob([
    '../img/**'
])
