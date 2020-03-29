
use servantask;

select * from projects;
select * from users;
select * from tasks;
select * from migrations;
select * from failed_jobs;

select * from projects p
inner join tasks t on
t.project_id = p.id;

select * from projects p
inner join users u
on p.user_id = u.id;

ALTER TABLE `servantask`.`tasks` 
ADD CONSTRAINT `tasks_project_id_foreign`
FOREIGN KEY (`project_id`)
REFERENCES `servantask`.`projects` (`id`);
  
alter table `servantask`.`projects`
add constraint `project_user_id_foreign`
foreign key (`user_id`)
references `servantask`.`users` (`id`);

select 
count(t.name)
from users u
inner join projects p
on p.user_id = u.id
inner join tasks t
on t.project_id = p.id
where p.id = 11;
