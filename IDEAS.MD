# Ideas

I'm including summary research results here. Items such as EMR features, reporting requirements, etc.

## What's in an EMR Anyway?

*An electronic health record (EHR) contains patient health information, such as:*

- [ ] Administrative and billing data
- [ ] Patient demographics
- [ ] Progress notes
- [ ] Vital signs
- [ ] Medical histories
- [ ] Diagnoses
- [ ] Medications
- [ ] Immunization dates
- [ ] Allergies
- [ ] Radiology images
- [ ] Lab and test results

## Family History

I'm guessing at a "Relative" model which defines the relationship between patient and family member (father, mother, father's father, etc...).

Make it easy: For siblings, all you need is to get the family history on one and import. (triggered by patients being minors and having the same guardian (parent or otherwise)). For that feature to work, would need to define pivot table.

Going further: Parent gives family history - import for children and just shift the relationship. i.e. Mother has a history of just her mother and father. The child can import the family history of the mother **and** the mother. So then the child could automatically have it's mother, and grandmother/father on his mother's side. 

This system could be a pain to get right, but will, I think, greatly reduce the amount of time it takes to get histories, reduce duplicate data (or incorrect data). 

## Storing sensitive information

SSNs are an integral part of medical record keeping. My initial solution would be to encrypt the ssn, and have the decryption key as an env variable. Encrypted SSN stored on a whitelisted db server.
