TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`%` TRIGGER stage_insert AFTER INSERT ON stages\nFOR EACH ROW\nBEGIN\n   IF NEW.stage_status IN (\'pending\',\'running\') THEN\n      INSERT INTO stages_unfinished VALUES (NEW.stage_id);\n   END IF;\nEND' 'CREATE DEFINER=`root`@`%` TRIGGER stage_update AFTER UPDATE ON stages\nFOR EACH ROW\nBEGIN\n  IF NEW.stage_status IN (\'pending\',\'running\') THEN\n    INSERT IGNORE INTO stages_unfinished VALUES (NEW.stage_id);\n  ELSEIF OLD.stage_status IN (\'pending\',\'running\') THEN\n    DELETE FROM stages_unfinished WHERE stage_id = OLD.stage_id;\n  END IF;\nEND'
sql_modes=1411383296 1411383296
definers='root@%' 'root@%'
client_cs_names='utf8' 'utf8'
connection_cl_names='utf8_general_ci' 'utf8_general_ci'
db_cl_names='utf8_bin' 'utf8_bin'
created=155737769779 155737769854
