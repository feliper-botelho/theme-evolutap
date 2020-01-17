(function (document, window) {
    const routes = require('./routes')

    if (routes.checkRoute('home-page')) {
        require('./components/example.jquery')
    }
    if (routes.checkRoute('qualquer-page')) {
        require('./components/example.vanilla')
    }

})(document, window)