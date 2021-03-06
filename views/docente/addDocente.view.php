<div id="addDocente" class="modal">
    <form id="frmAdd" action="" class="add">
        <div class="modal-header green darken-1 white-text">
            <h5 class="mt-none mb-none">Agregar Docente</h5>
            <i class="material-icons modal-close">close</i>
        </div>
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <input type="hidden" name="accion" id="accion" value="create">
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">people</i>
                            <input id="nombDoce" name="nombDoce" type="text" class="validate">
                            <label for="nombDoce">Nombres del docente:</label>
                            <span class="helper-text" data-error="Campo requerido, ingrese solo letras" data-success="Correcto"></span>
                        </div>
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">people</i>
                            <input id="apelDoce" name="apelDoce" type="text" class="validate">
                            <label for="apelDoce">Apellidos del docente:</label>
                            <span class="helper-text" data-error="Campo requerido, ingrese solo letras" data-success="Correcto"></span>
                        </div>
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">contacts</i>
                            <input id="duiDoce" name="duiDoce" type="text" class="validate" onkeyup="agregarGuionDui();">
                            <label for="duiDoce">DUI del docente:</label>
                        </div>
                        <div class="col s12 m6">
                            <label for="codiProf">Seleccionela profesion del docente:
                                <select class="select-2 w-100" name="codiProf" id="codiProf">
                                </select>
                            </label>
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