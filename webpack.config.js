const path = require('path');

module.exports = {
    mode: 'development',
    devtool: process.env.NODE_ENV === 'development' ? 'hidden-source-map' : false,

    entry: {
        app: './resources/assets/js/app.js',
    },
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'public'), // Pasta de saída
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
                //use: ['style-loader', 'css-loader'],
            },
        ],
    },
};
