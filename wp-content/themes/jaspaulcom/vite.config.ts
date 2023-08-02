import { defineConfig } from 'vite'
import postcssNesting from 'postcss-nesting'
import postcssCustomMedia from 'postcss-custom-media'
// eslint-disable-next-line import/no-named-as-default
import liveReload from 'vite-plugin-live-reload'
import svgLoader from 'vite-svg-loader'
import postcssInlineSvg from 'postcss-inline-svg'
import postcssColorModFunction from 'postcss-color-mod-function'

export default defineConfig({
  base: './',
  server: {
    port: 5174
  },
  plugins: [svgLoader({ defaultImport: 'raw' }), liveReload(['**/*.php', './style.css'])],
  css: {
    postcss: {
      plugins: [
        postcssNesting,
        postcssCustomMedia({
          importFrom: 'src/style/vars.css'
        }),
        postcssColorModFunction({
          importFrom: 'src/style/vars.css'
        }),
        postcssInlineSvg({
          paths: ['public/svg']
        })
      ]
    }
  },
  build: {
    outDir: './dist',
    rollupOptions: {
      output: {
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].js`,
        assetFileNames: `assets/[name].[ext]`
      }
    }
  }
})
