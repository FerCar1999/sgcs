<div id="addTelefono" class="modal">
    <form id="frmAdd" action="" class="add">
        <div class="modal-header green darken-1 white-text">
            <h5 class="mt-none mb-none">Agregar Telefono</h5>
            <i class="material-icons modal-close">close</i>
        </div>
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">phone</i>
                            <input id="numeTele" name="numeTele" type="text" class="validate">
                            <label for="numeTele">Numero de telefono:</label>
                            <span class="helper-text" data-error="Campo requerido, ingrese" data-success="Correcto"></span>
                        </div>
                        <div class=" col s12 m6">
                            <label for="codiTipoTele">
                                Tipo de telefono:
                            </label>
                            <select class="select-2 w-100" id="codiTipoTele" name="codiTipoTele">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div id="preloader" class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="modal-close waves-effect btn-flat">Cancelar</button>
            <button type="button" class="waves-effect waves-green btn green darken-1" onclick="create();">Agregar</button>
        </div>
    </form>
</div>