# Идея с подзапросами
select e.name,AVG(e.salary) OVER (PARTITION BY e.title) as avg_salary
from employes e
where e.salary > avg_salary