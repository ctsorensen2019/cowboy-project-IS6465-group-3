# Entity Relationship Diagram

Cowboy Property Management, IS 6465 Group 3: Alex King, Christian Sorensen, Nasly Gamboa

This model starts from the instructor's suggested ERD for the Cowboy Property Management project (`suggested-erd-instructor.png`) and updates it for our use cases. The midterm covers two CRUD sets, rental units and maintenance requests. The rest of the entities are kept so the final project (leases, payments, reports, login) builds on the same schema.

```mermaid
erDiagram
    EMPLOYEE ||--o{ PROPERTY : manages
    PROPERTY ||--o{ UNIT : contains
    UNIT ||--o{ LEASE : "is leased under"
    RENTER ||--o{ LEASE : signs
    EMPLOYEE ||--o{ LEASE : "prepared by"
    LEASE ||--o{ PAYMENT : "is paid by"
    RENTER ||--o{ PAYMENT : makes
    EMPLOYEE o|--o{ PAYMENT : records
    UNIT ||--o{ MAINTENANCE : "is subject of"
    EMPLOYEE o|--o{ MAINTENANCE : "assigned to"
    RENTER o|--o{ MAINTENANCE : submits
    USER_ACCOUNT o|--o| EMPLOYEE : "logs in as"
    USER_ACCOUNT o|--o| RENTER : "logs in as"

    EMPLOYEE {
        int emp_id PK
        string last
        string first
        string position
    }

    PROPERTY {
        int property_id PK
        string address
        int manager FK "emp_id"
    }

    UNIT {
        int unit_id PK
        int property_id FK
        string unit_number
        int bed
        decimal bath
        decimal price
        string status "Vacant | Occupied | Unavailable (added)"
        string notes "added"
    }

    RENTER {
        int renter_id PK
        string last
        string first
        string email "added"
        string phone "added"
    }

    LEASE {
        int lease_id PK
        int renter_id FK
        int emp_id FK
        int unit_id FK
        decimal price
        string period
        date start_date "added"
        date end_date "added"
    }

    PAYMENT {
        int payment_id PK
        int lease_id FK
        int renter_id FK
        int emp_id FK
        string period
        date date
        decimal amount
    }

    MAINTENANCE {
        int id PK
        int unit_id FK
        int emp_id FK "assigned employee, nullable"
        int renter_id FK "submitted by, added"
        date date
        string issue
        string description "added"
        string status "Pending | In progress | Completed"
    }

    USER_ACCOUNT {
        int user_id PK
        string username
        string password_hash
        string role "admin | employee | renter"
        int emp_id FK "nullable"
        int renter_id FK "nullable"
    }
```

## Changes from the suggested ERD

The project description says the suggested ERD "may need to be updated." These are our changes and why.

| Change | Reason |
|---|---|
| Added `USER_ACCOUNT` | The project requires "Login and user management" and the final rubric requires authentication with at least two roles. Credentials are kept out of EMPLOYEE and RENTER so one login table serves both. |
| Added `UNIT.status` | Our Unit Management use cases (UC-01 to UC-04) and wireframe show Vacant / Occupied for each unit. Status could be derived from an active lease; storing it keeps the midterm pages simple and lets a manager mark a unit Unavailable (for example, under repair). |
| Added `UNIT.notes` | Appears on the Add / Edit Unit wireframe. |
| Added `MAINTENANCE.description` | The suggested `Issue` is a short category. Residents need a longer description of the problem (UC-05). |
| Added `MAINTENANCE.renter_id` | Residents submit requests (UC-05). The suggested ERD only linked the assigned employee. Nullable because an employee may enter a request on a resident's behalf. |
| Added `RENTER.email`, `RENTER.phone` | Needed to contact a renter about a request and to match a login account. |
| Added `LEASE.start_date`, `LEASE.end_date` | `Period` alone cannot tell the system whether a lease is active, which the Resident column on the unit list and the overdue report both need. |
| `PROPERTY.manager` is a foreign key to `EMPLOYEE.emp_id` | The description says "each property having a property manager." Modeled as one employee manages many properties. |

Everything else (entity names, primary keys, `Bed`, `Bath`, `Price`, `Period`, `Amount`, the LEASE and PAYMENT links) is kept as suggested.

## Entity purpose and midterm coverage

| Entity | Purpose | Midterm pages |
|---|---|---|
| UNIT | A rentable unit inside a property | `unit/` CRUD (UC-01 to UC-04) |
| MAINTENANCE | A repair or service request against a unit | `maintenance/` CRUD (UC-05 to UC-08) |
| PROPERTY | A building Cowboy manages; shown as the Property column on unit pages | Referenced |
| RENTER | The resident; shown as the Resident column via the active lease | Referenced |
| EMPLOYEE | Property managers and maintenance staff; shown as Assigned to on requests | Referenced |
| LEASE, PAYMENT, USER_ACCOUNT | Final project: leases, payments and overdue report, login and user management | Not yet |

## Business rules the model enforces

| ID | Rule |
|---|---|
| BR-01 | A unit belongs to exactly one property. |
| BR-02 | A unit has at most one active lease at a time (start_date <= today <= end_date). Status is Occupied only when an active lease exists. |
| BR-03 | A maintenance request must reference an existing unit. |
| BR-04 | Request status moves Pending, then In progress, then Completed. Only an employee or admin may change status or assignment. |
| BR-05 | A renter may only see requests for units on their own active lease. |
| BR-06 | A unit with an active lease or an open request cannot be deleted. |
| BR-07 | Passwords are stored as hashes, never plain text. |
| BR-08 | Delete is reserved for duplicate or mistaken records. A finished request keeps status Completed and an off-market unit is marked Unavailable, so history is preserved (Week 6 guidance: prefer a status change unless a business rule requires deletion). |

## Notes on identifiers

Primary keys are integers, following the Week 6 `INTEGER PRIMARY KEY` pattern. The `REQ-001` labels shown on the midterm pages are a display format for `MAINTENANCE.id`; the unit number shown on the unit pages is the `unit_number` column, not the `unit_id` key. Every UPDATE and DELETE in the final project will use the integer key in its WHERE clause.
