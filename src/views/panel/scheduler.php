 <!-- Tabela de Contatos -->
 <!--div class="container-search">
     <form action="/panel/scheduler/search" method="GET">
         <input value="<?= $search ?>" name="nameFilter" type="text">
         <button>Buscar</button>
     </form>
     <?php if ($search != "") { ?>
         <a href="/panel/scheduler">Limpar</a>
     <?php } ?>
 </div -->

 <div class="container py-5">
     <h2 class="text-center">Lista de Contatos</h2>
     <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col"></th> <!-- Coluna para a seta -->
                 <th scope="col">Nome</th>
                 <th scope="col">Telefone</th>
                 <th scope="col">Email</th>
                 <th scope="col">Ações</th> <!-- Coluna para os botões -->
             </tr>
         </thead>
         <tbody>

             <!-- ?php var_dump($schedulers); ?-->

             <?php foreach ($schedulers as $key => $scheduler): ?>
                 <tr>
                     <th scope="row"><?= $scheduler['id'] ?></th>
                     <td>
                         <button class="btn btn-link p-0" style="color: #c90000;" onclick="toggleDetails(<?= $scheduler['id'] ?>)" id="toggle-<?= $scheduler['id'] ?>">&#9660;</button>
                     </td>
                     <td><?= $scheduler['name'] ?></td>
                     <td><?= $scheduler['phone'] ?></td>
                     <td><?= $scheduler['email'] ?></td>
                     <td>
                         <button class="btn btn-dark btn-sm" onclick="editContact(<?= $scheduler['id'] ?>)">Editar</button>
                     </td>
                 </tr>
                 <tr id="details-<?= $scheduler['id'] ?>" class="hidden-row">
                     <td colspan="6">
                         <strong>Endereço:</strong><?= $scheduler['address'] ?><br>
                         <strong>Nota:</strong> <?= $scheduler['annotation'] ?>
                     </td>
                 </tr>
             <?php endforeach; ?>

         </tbody>
     </table>
 </div>



 <!-- Bootstrap JS and dependencies -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

 <script>
     // Função para alternar a exibição dos detalhes
     function toggleDetails(id) {
         var detailsRow = document.getElementById('details-' + id);
         var toggleButton = document.getElementById('toggle-' + id);
         if (detailsRow.classList.contains('hidden-row')) {
             detailsRow.classList.remove('hidden-row');
             toggleButton.innerHTML = '&#9650;'; // Seta para cima
         } else {
             detailsRow.classList.add('hidden-row');
             toggleButton.innerHTML = '&#9660;'; // Seta para baixo
         }
     }

     // Função para editar um contato
     function editContact(id) {
         window.location.href = `/panel/scheduler/edit/${id}`;
     }
 </script>