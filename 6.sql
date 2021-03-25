# Предположим у нас есть таблицы заказы с названием orders
и таблица single_dates с 1 ячейкой с датой - some_date 
Далее по идее мы должны взять сумму оплаты заказа и сделать
группировку по полю name (название заказа), например... 
Также нам необходим подзапрос в таблицу single dates чтоб взять
отуда данные даты и далее сравнить с датами платежа заказов
;

select SUM(o.payments) as sum, o.name from orders o
where o.date_paymenent > (select s.some_date from single_dates s limit 1)
GROUP BY o.name
;
