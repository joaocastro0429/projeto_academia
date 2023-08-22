# projeto de login de usuário
# crud adcionar aluno  

- tecnologia utilizadas 
- html e css , php 
- framework bootstrap

- versão 8.1 php 

- banco de bandos mysql  

- estrutura do banco de dados 

CREATE TABLE `users` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`matricula` VARCHAR(255) NOT NULL COLLATE '
	PRIMARY KEY (`id`)

)


banco de dados login 

CREATE TABLE `users` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`password` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`)
)

##  como utilizar o projeto: 
- fazer o clone no github 
- utilizar alguma ferramenta com docker , xampp , lampp , laragon - para rodar o servidor local




