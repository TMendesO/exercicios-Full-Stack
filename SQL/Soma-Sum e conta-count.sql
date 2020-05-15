select sum(valor_pedido), count(pedidoID) as num_pedidos
from pedidos
where year(data_pedido) = 2006
