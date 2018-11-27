--Insertion in student database--  
    INSERT INTO STUDENT (Student_Id, Full_name, Faculty, Major, Student_password)
    VALUES ('$ID', '$fullName', '$faculty','$major', '$Student_password')

--Retrive from student database for authentication--  
    SELECT * FROM STUDENT WHERE Student_Id = '$Student_Id' AND Student_password = '$Student_password'


--Retrival of Events in home page ---
  SELECT * FROM EVENT ORDER BY Date_create DESC LIMIT 10
  SELECT * FROM MANDATORY WHERE Event_Id='$Event_Id'
  SELECT * FROM VOLUNTEER WHERE Event_Id='$Event_Id'
  SELECT * FROM OTHERS WHERE Event_Id='$Event_Id'
  SELECT * FROM FACULTY WHERE Event_Id='$Event_Id'
  SELECT * FROM ENTERTAINMENT WHERE Event_Id='$Event_Id'
  SELECT * FROM ATTENDS WHERE Event_Id='$Event_Id' AND Student_Id = '$ID'

--Retrival in mandatory page ---
    SELECT * FROM MANDATORY
    SELECT * FROM EVENT WHERE Event_Id = $event_Id
    SELECT * FROM ATTENDS WHERE Event_Id='$Event_Id' AND Student_Id = '$ID'

--Retrival in Volunteer page---
    SELECT * FROM VOLUNTEER
    SELECT * FROM EVENT WHERE Event_Id = $event_Id
    SELECT * FROM ATTENDS WHERE Event_Id='$Event_Id' AND Student_Id = '$ID'

--Retrival in Entertainment page---
    SELECT * FROM ENTERTAINMENT
    SELECT * FROM EVENT WHERE Event_Id = $event_Id
    SELECT * FROM ATTENDS WHERE Event_Id='$Event_Id' AND Student_Id = '$ID'

--Retrival in Faculty page---
    SELECT * FROM FACULTY ORDER BY Faculty_type
    SELECT * FROM EVENT WHERE Event_Id = $event_Id
    SELECT * FROM ATTENDS WHERE Event_Id='$Event_Id' AND Student_Id = '$ID'

--Retrival in Others page---
    SELECT * FROM OTHERS
    SELECT * FROM EVENT WHERE Event_Id = $event_Id
    SELECT * FROM ATTENDS WHERE Event_Id='$Event_Id' AND Student_Id = '$ID'

--Retrival of events in My event page---
    SELECT * FROM ATTENDS WHERE Student_Id = '$ID'
    SELECT * FROM EVENT WHERE Event_Id = '$Event_Id' ORDER BY Date_create DESC
    SELECT * FROM MANDATORY WHERE Event_Id='$Event_Id'
    SELECT * FROM VOLUNTEER WHERE Event_Id='$Event_Id'
    SELECT * FROM OTHERS WHERE Event_Id='$Event_Id'
    SELECT * FROM FACULTY WHERE Event_Id='$Event_Id'
    SELECT * FROM ENTERTAINMENT WHERE Event_Id='$Event_Id'
    SELECT * FROM ATTENDS WHERE Event_Id='$Event_Id' AND Student_Id = '$ID'

--Insert data into attends database ---
    INSERT INTO ATTENDS (Student_Id, Event_Id)
    VALUES ('$ID', '$Event_Id')

--Delete from attends database --
    DELETE FROM ATTENDS WHERE Student_Id = '$Student_Id' AND Event_Id = '$ID'