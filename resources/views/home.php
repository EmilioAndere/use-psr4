<?php $this->layout('layouts::template', ['title' => 'Home']) ?>

<?php $this->start('body') ?>
    <ul>
        <?php foreach($productos as $producto): ?>
            <li><?= $this->e($producto->nombre) ?></li>
        <?php endforeach ?>
    </ul>
<?php $this->stop() ?>


