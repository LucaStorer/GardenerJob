select t.db,
sum(CASE WHEN t.tabella = 'clienti' THEN t.count ELSE 0 END) AS clienti,
sum(CASE WHEN t.tabella = 'prodotti' THEN t.count ELSE 0 END) AS prodotti from
(select 'gj' as db, 'clienti' as tabella, count(`clienti`.`ID`) as count from `clienti` where `delete` = 0
union all
select 'gj' as db,'prodotti' as tabella, count(`prodotti`.`ID`) as count from `prodotti` where `delete` = 0)  as t
group by t.db


select t.db,
sum(CASE WHEN t.tabella = 'clienti' THEN t.count ELSE 0 END) AS clienti,
sum(CASE WHEN t.tabella = 'prodotti' THEN t.count ELSE 0 END) AS prodotti from V_COUNT_TABLE as t
group by t.db
