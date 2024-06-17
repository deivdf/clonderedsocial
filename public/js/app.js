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

dropzone.on("seding", function(file, xhr, formData){
    console.log(file)
}
);

dropzone.on("success", function(file, response){
    console.log(response)
})
dropzone.on("error", function(file, message){
    console.log(message)
})