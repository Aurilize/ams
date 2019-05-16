CREATE DATABASE IF NOT EXISTS ams;

CREATE TABLE master_user (
    user_id int NOT NULL primary key AUTO_INCREMENT,
    user_nik int,
    user_name varchar(255),
    user_password varchar(255),
    user_level int,
    created_by varchar(255),
    created_at datetime,
    modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE master_level (
    level_id int NOT NULL primary key AUTO_INCREMENT,
    level_name varchar(255),
    created_by varchar(255),
    created_at datetime,
    modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE master_site (
	site_id int NOT NULL primary key AUTO_INCREMENT,
	site_sname varchar(255),
	site_name varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE master_audit_type (
	type_id int NOT NULL primary key AUTO_INCREMENT,
	type_sname varchar(255),
	type_name varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

/*CREATE TABLE master_company (
	company_id int NOT NULL AUTO_INCREMENT,
	company_name varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);
*/
CREATE TABLE audit_type (
	type_id int NOT NULL primary key AUTO_INCREMENT,
	type_sname varchar(255),
	type_name varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE kpi_category (
	kpicat_id int NOT NULL primary key AUTO_INCREMENT,
	kpicat_name varchar(255),
	kpicat_isinternal int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE bsc (
	bsc_id int NOT NULL primary key AUTO_INCREMENT,
	bsc_sname varchar(255),
	bsc_name varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE inherent (
	inherent_id int NOT NULL primary key AUTO_INCREMENT,
	inherent_type varchar(255),
	inherent_weight varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE residue (
	residue_id int NOT NULL primary key AUTO_INCREMENT,
	residue_type varchar(255),
	residue_weight varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE knowledge (
	knowledge_id int NOT NULL primary key AUTO_INCREMENT,
	knowledge_name varchar(255),
	knowledge_filename varchar(255),
	knowledge_year varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE directorat (
	directorat_id int NOT NULL primary key AUTO_INCREMENT,
	directorat_name varchar(255),
	directorat_sname varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE division (
	division_id int NOT NULL primary key AUTO_INCREMENT,
	division_name varchar(255),
	division_sname varchar(255),
	division_directorat int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE dept (
	dept_id int NOT NULL primary key AUTO_INCREMENT,
	dept_name varchar(255),
	dept_sname varchar(255),
	dept_directorat int,
	dept_division int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE section (
	section_id int NOT NULL primary key AUTO_INCREMENT,
	section_name varchar(255),
	section_sname varchar(255),
	section_directorat int,
	section_division int,
	section_dept int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE activity (
	activity_id int NOT NULL primary key AUTO_INCREMENT,
	activity_name varchar(255),
	activity_dept int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE subactivity (
	subactivity_id int NOT NULL primary key AUTO_INCREMENT,
	subactivity_name varchar(255),
	subactivity_dept int,
	subactivity_activity int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE acs (
	acs_id int NOT NULL primary key AUTO_INCREMENT,
	acs_filename varchar(255),
	acs_year int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE budget (
	budget_id int NOT NULL primary key AUTO_INCREMENT,
	budget_filename varchar(255),
	budget_year int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE auditor (
	auditor_id int NOT NULL primary key AUTO_INCREMENT,
	auditor_nik int,
	auditor_name varchar(255),
	auditor_position int,
	auditor_bdate datetime,
	auditor_yearhire datetime,
	auditor_status varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE master_position (
	position_id int NOT NULL primary key AUTO_INCREMENT,
	position_name varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE assignment_letter (
	letter_id int NOT NULL primary key AUTO_INCREMENT,
	letter_no varchar(255),
	letter_type int,
	letter_assignment varchar(255),
	letter_site int,
	letter_year datetime,
	letter_filename varchar(255),
	letter_status varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE ippa (
	ippa_id int NOT NULL primary key AUTO_INCREMENT,
	ippa_nik int,
	ippa_cat int,
	ippa_year datetime,
	ippa_bsc int,
	ippa_item varchar(255),
	ippa_weight int,
	ippa_target varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE kpi_internal (
	internal_id int NOT NULL primary key AUTO_INCREMENT,
	internal_nik int,
	internal_cat int,
	internal_year datetime,
	internal_bsc int,
	internal_item varchar(255),
	internal_weight int,
	internal_target varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE kpi_division (
	div_id int NOT NULL primary key AUTO_INCREMENT,
	div_nik int,
	div_cat int,
	div_year datetime,
	div_bsc int,
	div_item varchar(255),
	div_weight int,
	div_target varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE audit_universe (
	universe_id int NOT NULL primary key AUTO_INCREMENT,
	universe_site int,
	universe_ceo int,
	universe_function datetime,
	universe_activity int,
	universe_subactivity varchar(255),
	universe_revenue int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE master_ceo (
	ceo_id int NOT NULL primary key AUTO_INCREMENT,
	ceo_name varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE risk (
	risk_id int NOT NULL primary key AUTO_INCREMENT,
	risk_site int,
	risk_dept int,
	risk_item varchar(255),
	risk_activity int,
	risk_subactivity varchar(255),
	risk_inherent int,
	risk_control varchar(255),
	risk_residue int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE mandays (
	mandays_id int NOT NULL primary key AUTO_INCREMENT,
	mandays_nik int,
	mandays_year datetime,
	mandays_fte int,
	mandays_train_plan int,
	mandays_audit_plan int,
	mandays_train_act int,
	mandays_audit_act int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE modul (
	modul_id int NOT NULL primary key AUTO_INCREMENT,
	modul_project varchar(255),
	modul_year datetime,
	modul_lead int,
	modul_member int, 
	modul_plan datetime,
	modul_actual datetime,
	modul_reason varchar(255),
	modul_pica varchar(255),
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE assignment (
	assignment_id int NOT NULL primary key AUTO_INCREMENT,
	assignment_year datetime,
	assignment_site int,
	assignment_dept int,
	assignment_activity int,
	assignment_subactivity int,
	assignment_type int,
	assignment_mgr_nik int,
	assignment_supt_nik int,
	assignment_start datetime,
	assignment_end datetime,
	assignment_lead int,
	assignment_member int,
	assignment_actual int,
	assignment_budget int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
);

CREATE TABLE audit_plan (
	plan_id int NOT NULL primary key AUTO_INCREMENT,
	plan_year datetime,
	plan_site int,
	plan_dept int,
	plan_activity int,
	plan_subactivity int,
	plan_ce_management int,
	plan_ce_employee int,
	plan_ce_policy int,
	plan_ce_structure int,
	plan_ra_inherent int,
	plan_ra_ebitda int,
	plan_ra_operational int,
	plan_ra_parfu int,
	plan_ca_production int,
	plan_ca_pty int,
	plan_ca_compliance int, 
	plan_ca_ua int,
	plan_ca_cashflow int,
	plan_ca_fraud int,
	created_by varchar(255),
	created_at datetime,
	modified_by varchar(255),
	modified_at datetime,
	is_deleted int,
	deleted_by varchar(255),
	deleted_at datetime
)