import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    maxFiles: 1,
    dictDefaultMessage: "sube tu imagen aqui",
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks:true,
    dictRemoveFile:"Borrar archivo",
    uploadMultiple: false,
});

