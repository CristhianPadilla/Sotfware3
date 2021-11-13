require('./bootstrap');
const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');
ClasssicEditor
/* El querySelctro recibe el nombre del id del campo del textarea */
.creatte(document.querySelector('#content_publication'))
.then(editor => {
    console.log(editor);
})
.catch(error => {
    console.error(error);
});
/* Al finalizar ejecutar: npm run dev */
