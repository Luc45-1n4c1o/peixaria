<form accept-charset="utf-8" method="POST" action="form_contato.php" name="formulariodecontato">

    <div class="form-row">
    <div class="form-group col-sm-6">
        <label for="inputNome">Seu nome</label>
        <input type="text" class="form-control" id="inputNome" name="nome" required>
    </div>
    <div class="form-group col-sm-6">
        <label for="inputSobrenome">Seu sobrenome</label>
        <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" required>
    </div>
    </div>

    <div class="form-row">
        <div class="form-group col-sm-6">
        <label for="inputEmail">E-mail</label>
        <input type="email" class="form-control" id="inputEmail" name="email" required>
        </div>
        <div class="form-group col-sm-6">
        <label for="inputTel">Telefone</label>
        <input type="text" class="form-control" name="telefone" id="inputTel" required>
        </div>
    </div>

    <div class="form-row">
    <div class="form-group col-sm-12">
        <label for="inputEnd">Seu endereço</label>
        <input type="text" class="form-control" id="inputEnd" name="endereco" placeholder="Ex.: Rua, número, cidade-UF, CEP" required> 
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-sm-12">
        <label for="textAreaFormContact">Sua mensagem:</label>
        <textarea class="form-control" name="mensagem" id="textAreaFormContact" rows="3"></textarea>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary" id="btn-enviar-mensagem" onsubmit="validaFormulario()">Enviar mensagem</button>
        <input type="reset" value="Limpar os dados" class="btn btn-secondary">
    </div>
    </div>

</form>