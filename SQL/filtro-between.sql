select nomeproduto, precounitario, tempoentrega
from produtos
where precounitario  between 5 and 12
order by precounitario asc
