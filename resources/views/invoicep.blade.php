<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<h2>Relatório Professor</h2>

<p class="header">Nome do Professor</p>
<p class="dados"> {{$data['nome']}}</p>

<p class="header">Data de Nascimento</p>
<p class="dados"> {{$data['data_nascimento']}}</p>


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