There are 5 entites, COURSE,COURSE_SUBJECT,TEACHER,SUBJECT,OFFERING.
COURSE has 2 propeties Course# being a primary key, and Cours_Name.
COURSE_SUBJECT has 3 properties Course$,Subject_Code(Primary key), and Subject_Type.
TEACHER has 5 propeties T_Code(Primary Key), FName,LName,Dept_Code, and Ext.
SUBJECT has 3 properties Subject_Code(Primary Key),Subject_Name,and T_Code.
OFFERING has 4 propeties Offering#(Primary Key), StartDate, EndDate,and Subject_Code.

B
COURSE entity has a PRIMARY KEY of Course# which is a FOREIGN KEY in the COURSE_SUBJECT entity.
COURSE_SUBJECT has a COMPOSITE PRIMARY KEY composed of 2 FOREIGN KEYS Course# from the COURSE entity and the Subject_Code from the SUBJECT entity, together they form a unique identifier for the COOURSE_SUBJECT entity.
TEACHER has a PRIMARY KEY of T_Code which is a FOREIGN KEY in the SUBJECT entity.
SUBJECT has a PRIMARY KEY of Subject_Code which is a FOREIGN KEY in the COURSE_SUBJECT entity and the OFFERING entity.
OFFERING has a PRIMARY KEY of Offering and a FOREIGN KEY Subject_Code from the SUBJECT entity.