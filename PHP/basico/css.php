<div class="titulo">Integração PHP/CSS</div>

<h1>
    <?php 
    echo'Olá';
    echo'<small>';
    echo' Mundo!';
    echo'</small>';
    ?>
</h1>

<?= "<div>Outra forma de me expressar!</div>" ?>

<br>

<div><button><?= "Legal" ?></button></div>

<style>
    button {
        padding: 5px 20px;
        background-color: #4286f4;
        color: #fff;
        font-weight: bold;
        border-radius: 10px;
    }
</style>