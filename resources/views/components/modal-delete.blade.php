<!-- Modal -->
<div class="modal fade" id="modalDelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Confirmar Eliminação</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">

                    <div class="alert-title">
                        <h6 class="text-danger">Aviso</h6>
                    </div>
                    <p class="h6 text-danger">Pretende eliminar este produto?</p>
                    <p class="text-danger"> Esta ação não poderá ser anulada.</p>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <form action=" {{route('product.destroy')}}" method="post" id="postAction">
                @csrf
                @method('delete')
                <input type="hidden" name="id_product" id="idProduto" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>