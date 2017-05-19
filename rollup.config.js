/**
 * Created by Elvis on 2017/5/19.
 */
import vue from 'rollup-plugin-vue'
import uglify from 'rollup-plugin-uglify-es'

process.env.NODE_ENV = 'production';

const plugins = [
    vue({
        css: 'dist/bundle.css'
    }),
]

const config = {
    entry: 'src/main.js',
    globals: {
        vue: 'Vue'
    },
    format:'iife',
    dest: 'dist/bundle.js',
    sourceMap: true,
    plugins: plugins
}

const isProduction = process.env.NODE_ENV === `production`

if (isProduction) {
    config.sourceMap = false
    config.plugins.push(uglify())
}
export default config