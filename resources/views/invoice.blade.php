<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<h2>Relatório Aluno</h2>

<p class="header">Nome do Aluno</p>
<p class="dados"> {{$data['nome']}}</p>

<p class="header">Data de Nascimento</p>
<p class="dados"> {{$data['data_nascimento']}}</p>

<p class="header">Endereço</p>
<p class="dados"> {{$data['logradouro']}},  {{$data['bairro']}}, N: {{$data['numero']}}, cep: {{$data['cep']}}</p>

<p class="header">Localidade</p>
<p class="dados"> {{$data['cidade']}}, {{$data['estado']}}</p>

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