<!-- Formulário de Edição de Contatos -->
<div class="container py-5">
    <h2 class="text-center">Editar Contato</h2>
    <form action="/panel/scheduler/edit/<?= $scheduler['id'] ?>" method="post" class="row g-3">
        <!-- Nome -->
        <div class="col-md-6">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" id="name" value="<?= $scheduler['name'] ?>">
        </div>

        <!-- Telefone -->
        <div class="col-md-6">
            <label for="phone" class="form-label">Telefone</label>
            <input name="phone" type="text" class="form-control" id="phone" value="<?= $scheduler['phone'] ?>">
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" value="<?= $scheduler['email'] ?>">
        </div>

        <!-- Endereço -->
        <div class="col-md-6">
            <label for="address" class="form-label">Endereço</label>
            <input name="address" type="text" class="form-control" id="address" value="<?= $scheduler['address'] ?>">
        </div>

        <!-- Nota Adicional -->
        <div class="col-12">
            <label for="annotation" class="form-label">Nota Adicional</label>
            <input name="annotation" class="form-control" id="annotation" rows="3" value="<?= $scheduler['annotation'] ?>"></input>
        </div>


        <!-- Botões -->
        <div class="col-12 text-center">
            <button type="button" class="btn btn-danger" onclick="confirmDelete()">Excluir Contato</button>
            <button type="reset" class="btn btn-secondary">Desfazer Alterações</button>
            <button type="submit" class="btn btn-dark">Salvar Alterações</button>
        </div>
    </form>
</div>


<!-- Modal de Confirmação de Exclusão -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir este contato?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="/panel/scheduler/delete/<?= $scheduler['id'] ?>" method="POST" id="deleteForm">
                    <input type="hidden" name="id" value="<?= $scheduler['id'] ?>">
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
                <!--/panel/scheduler/delete/<?= $scheduler['id'] ?> -->
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<script>
    // Função para exibir o modal de confirmação de exclusão
    function confirmDelete() {
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }
</script>