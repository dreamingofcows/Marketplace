create table network
(idx INTEGER primary key,
network_name varchar(100),
description varchar(2000),
rollup_idx INTEGER);


create table agency
(idx INTEGER primary key,
agency_name varchar(100),
description varchar(2000),
locationX bigint,
locationy bigint);

create table agency_x_network
(agency_idx INTEGER,
network_idx INTEGER);

alter table agency_x_network add constraint pk_agency_x_network primary key(agency_idx,network_idx);

create table industry
(idx INTEGER primary key,
industry_name varchar(100),
description varchar(2000),
rollup_idx INTEGER);

create table listing_company
(idx LONG,
agency_idx integer,
listing_title varchar(100),
company_name varchar(100),
industry_idx INTEGER,
listing_type varchar(100),
listing_security varchar(100),
description varchar(2000),
locationX bigint,
locationY bigint,
asking_price decimal(22,2),
revenue decimal(22,2),
margins decimal(22,2),
verticals long,
employees long,
average_workweek decimal(22,2),
dresscode varchar(2000),
management_layers long
);