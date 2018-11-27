
--Insertion in Admin profile --
 INSERT INTO ADMIN_PROFILE (Admin_Id, Admin_name, Admin_email, Admin_password)
    VALUES ('$ID', '$fullName', '$email_Id','$password')

--Insertion in Admin phone --
 INSERT INTO ADMIN_PHONE (Admin_Id, Admin_number) VALUES ('$ID', '$Admin_number')

--Retrival of Admin details from Admin profile --
  SELECT * FROM ADMIN_PROFILE WHERE Admin_Id = '$Admin_Id' AND Admin_password = '$Admin_password'
  SELECT * FROM ADMIN_PROFILE WHERE Admin_Id='$ID'

--Retrival of Events in home page ---
  SELECT * FROM EVENT ORDER BY Date_create DESC LIMIT 10
  SELECT * FROM MANDATORY WHERE Event_Id='$Event_Id'
  SELECT * FROM VOLUNTEER WHERE Event_Id='$Event_Id'
  SELECT * FROM OTHERS WHERE Event_Id='$Event_Id'
  SELECT * FROM FACULTY WHERE Event_Id='$Event_Id'
  SELECT * FROM ENTERTAINMENT WHERE Event_Id='$Event_Id'

--Retrival in mandatory page ---
    SELECT * FROM MANDATORY
    SELECT * FROM EVENT WHERE Event_Id = $event_Id

--Retrival in Volunteer page---
    SELECT * FROM VOLUNTEER
    SELECT * FROM EVENT WHERE Event_Id = $event_Id

--Retrival in Entertainment page---
    SELECT * FROM ENTERTAINMENT
    SELECT * FROM EVENT WHERE Event_Id = $event_Id

--Retrival in Faculty page---
    SELECT * FROM FACULTY ORDER BY Faculty_type
    SELECT * FROM EVENT WHERE Event_Id = $event_Id

--Retrival in Others page---
    SELECT * FROM OTHERS
    SELECT * FROM EVENT WHERE Event_Id = $event_Id

--Retrival in myevent page --
    SELECT * FROM EVENT WHERE Admin_Id = '$ID' ORDER BY Date_create DESC
    SELECT * FROM MANDATORY WHERE Event_Id='$Event_Id'
    SELECT * FROM VOLUNTEER WHERE Event_Id='$Event_Id'
    SELECT * FROM OTHERS WHERE Event_Id='$Event_Id'
    SELECT * FROM FACULTY WHERE Event_Id='$Event_Id'
    SELECT * FROM ENTERTAINMENT WHERE Event_Id='$Event_Id'

--Insert a new event --
    INSERT INTO EVENT (Event_Id, Admin_Id, Event_name, Event_venue, Event_date, Event_time, Event_description, Event_link, Event_photo, Date_create)
    VALUES (DEFAULT,'$ID', '$event_name', '$event_venue', '$event_date', '$event_time','$event_description', '$event_link', '$file', DEFAULT)
    INSERT INTO MANDATORY (Event_Id, Dress_code) 
    VALUES (LAST_INSERT_ID(),'$dress_code')
    INSERT INTO ENTERTAINMENT (Event_Id, Entrance_cost) 
    VALUES (LAST_INSERT_ID(),'$enterance_cost')
    INSERT INTO VOLUNTEER (Event_Id, Required_number) 
    VALUES (LAST_INSERT_ID(),'$required_number')
    INSERT INTO OTHERS (Event_Id, About) 
    VALUES (LAST_INSERT_ID(), '$about')
    INSERT INTO FACULTY (Event_Id, Faculty_type) 
    VALUES (LAST_INSERT_ID(), '$faculty_type')

--Update a event --
    UPDATE EVENT SET Admin_Id = '$ID', Event_name ='$event_name' , Event_venue = '$event_venue' , Event_date = '$event_date', Event_time = '$event_time', Event_description = '$event_description', Event_link = '$event_link', Event_photo = '$file', Date_create = DEFAULT WHERE Event_Id = $Event_Id
    UPDATE MANDATORY SET  Dress_code = '$dress_code' WHERE Event_Id = $Event_Id
    UPDATE ENTERTAINMENT SET  Entrance_cost = '$enterance_cost' WHERE Event_Id = $Event_Id
    UPDATE ENTERTAINMENT SET  Required_number = '$required_number' WHERE Event_Id = $Event_Id
    UPDATE ENTERTAINMENT SET  About = '$about' WHERE Event_Id = $Event_Id
    UPDATE FACULTY SET  Faculty_type = '$faculty_type' WHERE Event_Id = $Event_Id
    SELECT * FROM MANDATORY WHERE Event_Id = $Event_Id
    SELECT * FROM ENTERTAINMENT WHERE Event_Id = $Event_Id
    SELECT * FROM ENTERTAINMENT WHERE Event_Id = $Event_Id
    SELECT * FROM ENTERTAINMENT WHERE Event_Id = $Event_Id
    SELECT * FROM FACULTY WHERE Event_Id = $Event_Id
    DELETE FROM MANDATORY WHERE Event_Id = '$Event_Id'
    DELETE FROM ENTERTAINMENT WHERE Event_Id = '$Event_Id'
    DELETE FROM VOLUNTEER WHERE Event_Id = '$Event_Id'
    DELETE FROM OTHERS WHERE Event_Id = '$Event_Id'
    DELETE FROM FACULTY WHERE Event_Id = '$Event_Id'
    INSERT INTO MANDATORY (Event_Id, Dress_code)
    VALUES ('$Event_Id', '$dress_code')
    INSERT INTO ENTERTAINMENT (Event_Id, Entrance_cost)
    VALUES ('$Event_Id', '$enterance_cost')
    INSERT INTO VOLUNTEER (Event_Id, Required_number)
    VALUES ('$Event_Id', '$required_number')
    INSERT INTO OTHERS (Event_Id,  About)
    VALUES ('$Event_Id', '$about')
    INSERT INTO FACULTY (Event_Id, Faculty_type)
    VALUES ('$Event_Id', '$faculty_type')


--Delete a event --
    DELETE FROM EVENT WHERE Event_Id = '$ID'

--View student details --
    SELECT * FROM EVENT WHERE Event_Id = '$ID'
    SELECT * FROM ATTENDS WHERE Event_Id = '$ID'
    SELECT * FROM STUDENT WHERE Student_Id = '$Student_Id'