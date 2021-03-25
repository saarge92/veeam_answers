# Идея с подзапросами
select e.name,e.salary from employes e 
where e.salary > (SELECT AVG(e2.salary) FROM employes e2 where e2.title = e.title);