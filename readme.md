# Project 4
+ By: *Chantal Thomaas*
+ Production URL: <http://p4.yourdomain.com>

## Database

Primary tables:
  + events
  + users
  + statuses
  
Pivot table(s):
  + event_status


## CRUD

__Create__
  + Visit <http://dwa-p4.loc/user-profile/create>
  + Must fill out all fields in order to submit the form
  + Once complete click "Add Something New"
  + Redirect to the '/user-profile' page with a success message
  
__Read__
  + Visit <http://dwa-p4.loc/user-profile> to see a listing of all the user's events
  + Scroll to see all events associated with a particular user
  
__Update__
  + Visit <http://dwa-p4.loc/user-profile> 
  + Click the Edit button under one of the event listings
  + Make some edit to form, again all fields are required in order to submit the form
  + Click *Update Event*
  + Redirected to the '/user-profile/{id}/edit' with a success message
  
__Delete__
  + Visit <http://dwa-p4.loc/user-profile> 
  + Click the Delete button under  one of the event listings
  + Confirm deletion
  + Redirected to '/user-profile' with a success message

## Outside resources
+ [Header Font](https://fonts.google.com/specimen/Playfair+Display?selection.family=Playfair+Display)
+ [Body Font](https://fonts.google.com/specimen/Playfair+Display?selection.family=Playfair+Display)
+ [Getting the user id](https://stackoverflow.com/questions/17835886/laravel-authuser-id-trying-to-get-a-property-of-a-non-object)

## Code style divergences
+ N/A

## Notes for instructor
+ I am ran into some issues with using a calendar package early and tried resolving those issues for far too long unfortunately. sI definitely bit off more than I could chew at my currently skill level! But once grades are in I plan to tackle getting the  MaddHatter LaravelFullcalendar package fully embedded in my application so that the user events appear on a calendar instead of in a list. 

+ I am also having some routing issues. For instance if you are currently on the edit page and navigate to the add page, my application goes to"/user-profile/1/user-profile/create" instead of just "user-profile/create" 

+ Lastly my pivot table is not implemented correctly. I simply wanted to display the status of the event in the view page for all events that had a status. I was able to dump the status name of all the events successfully in my getting started controller
