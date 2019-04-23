# Easy EMR - Changelog
All changes will be kept track of here, in descending date order.

---
## 04-22-19
- Show Appointment
- Research on what EMRs

## 04-21-19
- Appointment Resources
- Appointment Dashboard
- Appointment CRUDs

## 04-20-19
- Finished Patient Actions
- Patient uses soft delete
- View/Update/Delete Options added to patients.index
- As a medical professional, I need to *schedule appointments*
    - Create Appointment model
        - Appointment Start Datetime
        - Appointment Duration (minutes)
        - Appointment Patient
        - Appointment User
        - Appointment Notes

## 04-19-19
- Store Patient Validation
- Show Patient Page

## 04-13-19
- Store patient logic

## 04-12-19
- Browse Patients
- New Patient Template

## 04-08-19
- Successfully migrated user/auth
    - Needed `Schema::defaultStringLength(191);` in `App\Providers\AppServiceProvider::boot()` b/c of old MySQL database & dreamhost
- Basic User Registration/Auth
- "As a medical professional, I need to [crud] patients."
    - Create Patient Model
    - Create Test Patient
    - View on Dashboard

## 04-07-19
- Initial Commit and Push
- Build out database for authenticated users