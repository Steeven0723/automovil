const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  const documento = document.getElementById('documento');
  const nombre = document.getElementById('nombre');
  const correo = document.getElementById('correo');
  const placa = document.getElementById('placa');
  const modelo = document.getElementById('modelo');
  
  if (!documento.value || !nombre.value || !correo.value || !placa.value || !modelo.value) {
    e.preventDefault();
    alert('Por favor, completa todos los campos.');
  }
});
