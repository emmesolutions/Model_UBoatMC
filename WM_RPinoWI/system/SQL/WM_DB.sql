/*  Database WM_DB */

/*  Table WM_Settings */
CREATE TABLE IF NOT EXISTS WM_Settings (
	id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'ID',
	Val_Name VARCHAR(8) NOT NULL DEFAULT 'Default' COMMENT 'Settings Name',
	Val_DemoMode VARCHAR(5) NOT NULL DEFAULT 'FALSE' COMMENT 'Demo Mode',
	Val_Lang VARCHAR(2) NOT NULL DEFAULT 'EN' COMMENT 'Language',
	Val_Width VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Layout Container Width',
	Val_Style VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Layout Border Color',
	Val_Fonts VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Layout Fonts Height',
	Val_BrdTop VARCHAR(2) NOT NULL DEFAULT '00' COMMENT 'Show Border Top',
	Val_BrdBot VARCHAR(2) NOT NULL DEFAULT '00' COMMENT 'Show Border Bottom',
	Val_Container VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Show Container',
	Val_WMenu VARCHAR(5) NOT NULL DEFAULT 'TRUE' COMMENT 'Show Corner Menu',
	Mod_WMenu VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Position Corner Menu',
	Mod_AdMenu VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Position Administrator Menu',
	Mod_LngSel VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position Language Module',
	Mod_Cpyrgt VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position Copyright Module',
	Mod_GPSCmp VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Position GPS+Compass Module',
	Mod_SysMsg VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Position System Message Module',
	Mod_DthSpd VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position Depth+Speed Module',
	Mod_DteTme VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Position Date Time Module',
	Mod_TmpHmd VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Position Temp.+Humidity Module',
	Mod_HdwSts VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position Hardware Status Module',
	Mod_RadCll VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Position Radar+Coll.Sensor Module'
);
/*  Value WM_Settings */
INSERT INTO WM_Settings (
	id,
	Val_Name,
	Val_DemoMode,
	Val_Lang,
	Val_Width,
	Val_Style,
	Val_Fonts,
	Val_BrdTop,
	Val_BrdBot,
	Val_Container,
	Val_WMenu,
	Mod_WMenu,
	Mod_AdMenu,
	Mod_LngSel,
	Mod_Cpyrgt,
	Mod_GPSCmp,
	Mod_SysMsg,
	Mod_DthSpd,
	Mod_DteTme,
	Mod_TmpHmd,
	Mod_HdwSts,
	Mod_RadCll
) VALUES (
	NULL,
	'Default',
	'FALSE',
	'EN',
	'02',
	'01',
	'02',
	'01',
	'01',
	'01',
	'TRUE',
	'02',
	'01',
	'03',
	'03',
	'01',
	'02',
	'03',
	'01',
	'02',
	'03',
	'02'
);

/* Table WM_DataLogger */
CREATE TABLE IF NOT EXISTS WM_DataLogger (
	id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'ID',
	TimeSc VARCHAR(8) NOT NULL DEFAULT '' COMMENT 'TimeSc',
	DateX VARCHAR(2) NOT NULL DEFAULT '' COMMENT 'Date',
	TimeX VARCHAR(2) NOT NULL DEFAULT '' COMMENT 'Time',
	GPSLat VARCHAR(12) NOT NULL DEFAULT '' COMMENT 'GPS Lat',
	GPSLng VARCHAR(12) NOT NULL DEFAULT '' COMMENT 'GPS Lng',
	CmpsH VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'CmpssH',
	CmpsP VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'CmpssP',
	CmpsR VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'CmpssR',
	Speed VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Speed',
	Depth VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Depth',
	TmpInt VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Tmp.Int',
	HmdInt VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Hmd.Int',
	TmpExt VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Tmp.Ext',
	TmpH2O VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Tmp.H2O',
	MEnTmp VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Tmp.MEng.',
	BlTTmp VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Tmp.BllT.',
	HdwBtV VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Hdw.BtV',
	EngBtV VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Eng.BtV',
	EngBtI VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Eng.BtI',
	RPiBtV VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'RPi.BtV',
	BtAtmy VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'Bt.Atmy',
	MEnSnI VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'MEng.I',
	BlTSnI VARCHAR(6) NOT NULL DEFAULT '' COMMENT 'BllT.I',
	SonarF VARCHAR(2) NOT NULL DEFAULT '' COMMENT 'Sonar Front',
	SonarB VARCHAR(2) NOT NULL DEFAULT '' COMMENT 'Sonar Back',
	CllSnr VARCHAR(2) NOT NULL DEFAULT '' COMMENT 'Collisiion',
	OprCmd VARCHAR(2) NOT NULL DEFAULT '' COMMENT 'Opr.Cmd',
	PrmCmd VARCHAR(2) NOT NULL DEFAULT '' COMMENT 'Prm.Cmd',
	MsgAlm VARCHAR(2) NOT NULL DEFAULT '' COMMENT 'Msg.Allarm',
	CmdSts VARCHAR(5) NOT NULL DEFAULT '' COMMENT 'Cmd.Status',
	InpSts VARCHAR(5) NOT NULL DEFAULT '' COMMENT 'Inp.Status',
	OutSts VARCHAR(5) NOT NULL DEFAULT '' COMMENT 'Out.Status'
);
/*  Value WM_DataLogger */
INSERT INTO WM_DataLogger (
	id
) VALUES (
	NULL
);

/* Table WM_Admin */
CREATE TABLE IF NOT EXISTS WM_Admin (
	id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'ID',
	User VARCHAR(16) NOT NULL DEFAULT 'Admin' COMMENT 'Username',
	Pswd VARCHAR(32) NOT NULL DEFAULT 'password' COMMENT 'Password',
	Name VARCHAR(16) NOT NULL DEFAULT 'Name' COMMENT 'Admin Name',
	EMail VARCHAR(16) NOT NULL DEFAULT 'info@webemme.net' COMMENT 'Admin eMail'
);
/*  Value WM_Admin */
INSERT INTO WM_Admin (
	id,
	User,
	Pswd,
	Name,
	EMail
) VALUES (
	NULL,
	'Admin',
	'5f4dcc3b5aa765d61d8327deb882cf99',
	'Michele',
	'info@webemme.net'
);

