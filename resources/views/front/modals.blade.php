
<!-- Para probar este modal se puede copiar y pegar en el index.php 
y hacer click en el boton "Enviar" del formulario de contacto -->


<!-- Modal Envio Exitoso Form contacto Home -->
<div class="modal fade" id="successForm" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="successFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <h4 class="text-verde">Envio exitoso</h4>
          <img class="pb-4 mt-3" src="{{ asset('/img/icono-modal-envio-exitoso.svg') }}" alt="">
        </div>
      </div>
    </div>
</div>