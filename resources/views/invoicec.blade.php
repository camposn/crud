<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<h2>Relatório Curso</h2>

<p class="header">Nome do Curso</p>
<p class="dados"> {{$data['nome']}}</p>

<p class="header">Criado em</p>
<p class="dados"> {{$data['criado_em']}}</p>

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