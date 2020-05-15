select nomecategoria, count(produtoID) as total
from produtos p
     inner join categorias c on p.categoriaID = c.categoriaID
group by p.categoriaID
order by total desc