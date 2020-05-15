select nomeproduto, nomefornecedor, nomecategoria
from produtos p inner join fornecedores f on p.fornecedorID = f.fornecedorID
                inner join categorias c on p.categoriaID = c.categoriaID