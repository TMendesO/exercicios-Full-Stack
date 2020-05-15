select tempoentrega, count(produtoID) as total
from produtos
group by tempoentrega