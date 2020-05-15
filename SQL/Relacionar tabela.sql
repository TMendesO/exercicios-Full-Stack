select nomeproduto, nomefornecedor
from produtos, fornecedores
where produtos.fornecedorID = fornecedores.fornecedorID /*relacionar o campo que cada tabela tem em comum */
order by nomeproduto asc

