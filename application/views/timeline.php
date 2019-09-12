<div class="container">
   
    <?php foreach ($posts as $p){?>



<div class="panel panel-default"> 
<div class="panel-heading"> <?= $p->msg?> </div>
<div class="panel-body"> <?= $p->datahora?> </div>
<div class="panel-footer">
<a href="<?=base_url()?>tuiter/excluir/<?=$p->id?>">Excluir </a>
 <a href="<?=base_url()?>tuiter/editar/<?=$p->id?>">Editar </a>
</div>


</div>
      <?php  } ?>

</div>
 