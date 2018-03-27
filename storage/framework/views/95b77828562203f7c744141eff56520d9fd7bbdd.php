<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<h2>Relatório Aluno</h2>

<p class="header">Nome</p>
<p class="dados"> <?php echo e($data['nome']); ?></p>

<p class="header">Data de Nascimento</p>
<p class="dados"> <?php echo e($data['data_nascimento']); ?></p>

<p class="header">Endereço</p>
<p class="dados"> <?php echo e($data['logradouro']); ?>,  <?php echo e($data['bairro']); ?>, N: <?php echo e($data['numero']); ?>, cep: <?php echo e($data['cep']); ?></p>

<p class="header">Localidade</p>
<p class="dados"> <?php echo e($data['cidade']); ?>, <?php echo e($data['estado']); ?></p>

<p class="header">Criado em</p>
<p class="dados"> <?php echo e($data['criado_em']); ?></p>

<style>

h2{
    text-align: center;
}

p.header{
    text-align: center;
    background-color: #ccc;
    font-weight: bold;
    font-size:18px;
}

p.dados{
    color: #000;

}

</style>