<div class="container">
    <form method="post" action="<?=base_url()?>tuiter/atualizar">
        <textarea name="mensagem"> <?= $post->msg?> </textarea>
        <input type="hidden" name="id" value="<?= $post->id?>"/>
        <button type="submit">Atualizar</button>
</form>
</div>