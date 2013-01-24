-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

--
-- Table `tl_module`
--

CREATE TABLE `tl_module` (
  `addSort` char(1) NOT NULL default '',
  `sortBy` varchar(50) NOT NULL default 'date',
  `invertSortOrder` char(1) NOT NULL default '0',
  `addFilter` char(1) NOT NULL default '',
  `filterBy` varchar(50) NOT NULL default '',
  `filterTerm` varchar(255) NOT NULL default '',
  `addVisibilityPeriod` char(1) NOT NULL default '',
  `baseDate` varchar(10) NOT NULL default '',
  `skipPeriod` varchar(255) NOT NULL default '',
  `newsListedInterval` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;