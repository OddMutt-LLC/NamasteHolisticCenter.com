<?php
    foreach($alertas as $key => $mensajes):
        foreach($mensajes as $mensaje):
?> 
<div class="container">
    <div class="style-msg <?php echo $key; ?>msg">
        <div class="sb-msg <?php echo $key; ?>">
            <?php echo $mensaje; ?>
        </div>
    </div>
</div>
<?php
        endforeach;
    endforeach;
?>