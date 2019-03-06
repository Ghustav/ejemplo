CREATE TABLE `prefix_ejemplo` (
`id` int(10) unsigned NOT NULL auto_increment, //ESTE ATRIBUTO NUNCA DEBE FALTAR
`course` int(10) unsigned NOT NULL default '0',
`name` varchar(255) NOT NULL default '',
`description` text NOT NULL,
`grade` int(10) NOT NULL default '0',
`timemodified` int(10) unsigned NOT NULL default '0',
PRIMARY KEY (`id`)
) COMMENT='Define Ejemplo';
