  let currentSlide = 0;
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".punto-paginacion");

    function mostrarSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === index);
        dots[i].classList.toggle("active", i === index);
      });
      currentSlide = index;
    }

    function siguienteSlide() {
      let next = (currentSlide + 1) % slides.length;
      mostrarSlide(next);
    }

    function cambiarSlide(index) {
      mostrarSlide(index);
      reiniciarIntervalo();
    }

    let intervalo = setInterval(siguienteSlide, 5000);

    function reiniciarIntervalo() {
      clearInterval(intervalo);
      intervalo = setInterval(siguienteSlide, 5000);
    }






   // metodos de pago ---------------------------
    const { jsPDF } = window.jspdf;

  document.getElementById("reservaForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const form = e.target;

    // Obtener datos
    const datos = {
      nombre: form.nombre.value,
      telefono: form.telefono.value,
      correo: form.correo.value,
      sabor: form.sabor.value,
      cantidad: form.cantidad.value,
      fecha: form.fecha.value,
      hora: form.hora.value,
      mensaje: form.mensaje.value || "Ninguno"
    };

    // Crear PDF
    const pdf = new jsPDF();
    pdf.setFontSize(16);
    pdf.text("Recibo de Reserva - Pastelería Dulce Antojito", 20, 20);
    pdf.setFontSize(12);
    pdf.text(`Nombre: ${datos.nombre}`, 20, 40);
    pdf.text(`Teléfono: ${datos.telefono}`, 20, 50);
    pdf.text(`Correo: ${datos.correo}`, 20, 60);
    pdf.text(`Sabor: ${datos.sabor}`, 20, 70);
    pdf.text(`Cantidad: ${datos.cantidad}`, 20, 80);
    pdf.text(`Fecha: ${datos.fecha}`, 20, 90);
    pdf.text(`Hora: ${datos.hora}`, 20, 100);
    pdf.text(`Mensaje adicional: ${datos.mensaje}`, 20, 110);
    pdf.setFontSize(14);
    pdf.text("¡Gracias por confiar en nosotros!", 20, 130);

    // Descargar PDF
    pdf.save(`reserva_${datos.nombre}.pdf`);

    // Resetear formulario
    form.reset();

    // Mostrar modal de confirmación
    const modal = new bootstrap.Modal(document.getElementById('reservaExitosa'));
    setTimeout(() => {
      modal.show();
    }, 300);
  }); 



//reservas carrito navbar
  function actualizarTotal() {
    const productos = document.querySelectorAll('.producto-row');
    let total = 0;

    productos.forEach(producto => {
      const cantidad = producto.querySelector('input').value;
      const precioTexto = producto.querySelector('.precio-box').textContent.replace('$', '');
      const precio = parseFloat(precioTexto);
      total += precio * parseInt(cantidad);
    });

    document.getElementById('total').textContent = `$${total.toFixed(2)}`;
  }

  function eliminarProducto(btn) {
    btn.parentElement.remove();
    actualizarTotal();
  }

  function mostrarFormulario() {
    document.getElementById('formReserva').style.display = 'block';
  }
