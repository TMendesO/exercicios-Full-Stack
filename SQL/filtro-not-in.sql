select nomeproduto, precounitario, tempoentrega
from produtos
where tempoentrega  not in (5,30)