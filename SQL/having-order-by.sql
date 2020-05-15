select tempoentrega, count(produtoID) as total
from produtos
group by tempoentrega
having total >= 4
order by total asc