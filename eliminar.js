function eliminar(){


    Swal.fire({
        title: "Estas Seguro que desea Eliminar?",
        text: "Piensalo Bien!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Estoy de Acuerdo!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Eliminado!",
            text: "Correctamente.",
            icon: "success"
          });
        }
      });
}