const path = require('path');

module.exports = {
    entry: {
        app: './assets/js/app.js',
    },    
    output: {
        filename: '/js/bundle.js',
        path: path.resolve(__dirname, 'dist')
    }
};