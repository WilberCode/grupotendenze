// main entry point
// include your assets here 
// get styles
import "./assets/scss/app.scss" 

// get scripts
import './assets/js/main.js' 
/*  
const modules = import.meta.glob('./assets/svg/*.svg',{ eager: true }) */
const moduleStrings = import.meta.glob('./assets/svg/*.svg', {
  query: '?url',
  import: 'default'
});
const moduleSImage = import.meta.glob('./assets/img/*.jpg', {
  query: '?url',
  import: 'default', 
})

/*
document.querySelector('#app').innerHTML = `
  <h1>Hello Vite!</h1>
  <a href="https://vitejs.dev/guide/features.html" target="_blank">Documentation</a>
`
*/