# Design Documents, Midterm Submission

Cowboy Property Management, IS 6465 Group 3: Alex King, Christian Sorensen, Nasly Gamboa

| Deliverable | Location |
|---|---|
| Use case model | [use-case-model.md](use-case-model.md), image: [diagrams/use-case-model.png](diagrams/use-case-model.png) |
| Use case documents (8) | [use-cases/](use-cases/) UC-01 through UC-08 |
| Activity diagrams (8) | Inside each use case document, images: [diagrams/UC-0N-activity.png](diagrams/) |
| Wireframes | [wireframes/](wireframes/) exported from Figma (10 frames) |
| ERD | [erd.md](erd.md), image: [diagrams/erd.png](diagrams/erd.png). Instructor's suggested ERD for comparison: [suggested-erd-instructor.png](suggested-erd-instructor.png) |
| Reflection | [../REFLECTION.md](../REFLECTION.md) |

## CRUD use case sets

**Set 1: Unit management** (Property Manager)

| ID | Use case | Page |
|---|---|---|
| UC-01 | Add Rental Unit | `unit/add-unit.php` |
| UC-02 | View Rental Units | `unit/units.php`, `unit/unit-details.php` |
| UC-03 | Update Rental Unit | `unit/edit-unit.php` |
| UC-04 | Delete Rental Unit | `unit/delete-unit.php` |

**Set 2: Maintenance requests** (Resident submits and views; Property Manager manages)

| ID | Use case | Page |
|---|---|---|
| UC-05 | Submit Maintenance Request | `maintenance/add-maintenance.php` |
| UC-06 | View Maintenance Requests | `maintenance/maintenance.php`, `maintenance/request-details.php` |
| UC-07 | Update Maintenance Request | `maintenance/edit-maintenance.php` |
| UC-08 | Delete Maintenance Request | `maintenance/delete-maintenance.php` |

## Tools

Wireframes were drawn in Figma. The use case model, activity diagrams, and ERD are written in Mermaid so they render directly on GitHub and stay in version control next to the code; PNG exports are in `diagrams/` for the Canvas zip.
