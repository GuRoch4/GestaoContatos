    <!-- Formulário de Adição de Contatos -->
    <div class="container py-5">
        <h2 class="text-center">Adicionar Novo Contato</h2>
        <form action="/panel/scheduler/create/save" method="post" class="row g-3">
            <!-- Nome -->
            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Digite o nome">
            </div>

            <!-- Telefone -->
            <div class="col-md-6">
                <label for="phone" class="form-label">Telefone</label>
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Digite o telefone">
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Digite o email">
            </div>

            <!-- Endereço -->
            <div class="col-md-6">
                <label for="address" class="form-label">Endereço</label>
                <input name="address" type="text" class="form-control" id="address" placeholder="Digite o endereço">
            </div>

            <!-- Nota Adicional -->
            <div class="col-12">
                <label for="annotation" class="form-label">Nota Adicional</label>
                <textarea name="annotation" class="form-control" id="annotation" rows="3" placeholder="Adicione notas adicionais"></textarea>
            </div>

            <!-- Botões -->
            <div class="col-12 text-center">
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-dark">Salvar Contato</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>