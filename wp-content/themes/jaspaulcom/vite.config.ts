import { defineConfig } from 'vite'
import postcssNesting from 'postcss-nesting'
import postcssCustomMedia from 'postcss-custom-media'
// eslint-disable-next-line import/no-named-as-default
import liveReload from 'vite-plugin-live-reload'
import svgLoader from 'vite-svg-loader'

export default defineConfig({
  server: {
    port: 5174
  },
  plugins: [svgLoader({ defaultImport: 'raw' }), liveReload(['**/*.php', './style.css'])],
  css: {
    postcss: {
      plugins: [postcssNesting, postcssCustomMedia]
    }
  },
  build: {
    outDir: './dist',
    rollupOptions: {
      output: {
        entryFileNames: `[name].js`,
        chunkFileNames: `[name].js`,
        assetFileNames: `[name].[ext]`
      }
    }
  }
})
