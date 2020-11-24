CREATE TABLE tx_entity_domain_model_entity
(
	tx_extbase_type varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	slug varchar(255) DEFAULT '' NOT NULL,
	master_category int(11) DEFAULT '0' NOT NULL,
	categories int(11) unsigned DEFAULT '0' NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	media int(11) unsigned DEFAULT '0' NOT NULL,
	files int(11) unsigned DEFAULT '0' NOT NULL,
	meta_description text,
	short_description text,
	long_description text,
	teaser text,
	canonical_url varchar(255) DEFAULT '' NOT NULL,
	no_index smallint(5) unsigned DEFAULT '0' NOT NULL,
	no_follow smallint(5) unsigned DEFAULT '0' NOT NULL,
	sitemap_change_frequency int(11) DEFAULT '0' NOT NULL,
	sitemap_priority double(11,2) DEFAULT '0.00' NOT NULL,
	seo_title varchar(255) DEFAULT '' NOT NULL,
	og_title varchar(255) DEFAULT '' NOT NULL,
	og_description text,
	og_image int(11) unsigned NOT NULL default '0',
	twitter_title varchar(255) DEFAULT '' NOT NULL,
	twitter_description text,
	twitter_image int(11) unsigned NOT NULL default '0',
	twitter_card int(11) DEFAULT '0' NOT NULL


);
